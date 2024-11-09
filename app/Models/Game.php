<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name','hindi_name','open_time','close_time','image','description'];

    public function declare_result()
    {
        return $this->hasMany(DeclareResult::class, 'game_id', 'id')->latest();
    }

    public function open_declare_result()
    {
        return $this->hasMany(DeclareResult::class, 'game_id', 'id')->where('session','open')->latest();
    }

    public function close_declare_result()
    {
        return $this->hasMany(DeclareResult::class, 'game_id', 'id')->where('session','close')->latest();
    }

    public function today_result(){
        return $this->declare_result()->whereDate('date',now())->select('date','number','created_at')->first() ?? '';
    }

    public function date_result($date){
        return $this->declare_result()->whereDate('date',$date)->select('id','date','number','created_at')->first() ?? '';
    }

    public function open_result($date){
        return $this->open_declare_result()->whereDate('date',$date)->select('id','date','number','created_at','session')->first() ?? '';
    }

    public function close_result($date){
        return $this->close_declare_result()->whereDate('date',$date)->select('id','date','number','created_at','session')->first() ?? '';
    }


    public function game_value($date){
        $open_result =  $this->open_declare_result()->whereDate('date',$date)->first() ?? '';
        $close_result =  $this->close_declare_result()->whereDate('date',$date)->first() ?? '';

        if(empty($open_result) && empty($close_result)){
            return "***-**-***";
        }elseif(!empty($open_result) && !empty($close_result)){
            $open = $open_result->number; 
            $open_sum = array_sum(str_split($open)); 
            $open_sum = $open_sum % 10; // Get the last digit of the sum

            $close = $close_result->number; 
            $close_sum = array_sum(str_split($close)); 
            $close_sum = $close_sum % 10; // Get the last digit of the sum
            return "{$open_result->number}-{$open_sum}{$close_sum}-{$close_result->number}";
        }elseif(!empty($open_result)){
            $open = $open_result->number; 
            $open_sum = array_sum(str_split($open)); 
            $open_sum = $open_sum % 10; // Get the last digit of the sum
            return "{$open_result->number}-{$open_sum}*-***";
        }
        return "***-**-***";
        
    }
    
}
