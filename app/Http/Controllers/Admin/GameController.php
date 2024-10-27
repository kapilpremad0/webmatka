<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Resources\Api\LeaderBoardResource;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query_search = $request->input('search');

        $games = Game::when($query_search, function ($query) use ($query_search) {
            $query->where('name', 'like', '%' . $query_search . '%');
            $query->Orwhere('hindi_name', 'like', '%' . $query_search . '%');

        })->orderBy('name','ASC')->paginate(10);

        if ($request->ajax()) {
            return view('admin.game.pagination', compact('games'))->render();
        }

        return view('admin.game.index',compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        $data = $request->validated();
        $data['image'] = null;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_name = time() . rand(1, 100) . '-' . $request->image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '', $image_name);
            $request->image->move(public_path('upload'), $image_name);
            $data['image'] = $image_name;
        }
        Game::create($data);
        session()->flash('success','Game create successfully');
        // return redirect()->route('admin.games.index')->with('success','Game create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('admin.game.edit',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('admin.game.create',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_name = time() . rand(1, 100) . '-' . $request->image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '', $image_name);
            $request->image->move(public_path('upload'), $image_name);
            $data['image'] = $image_name;
        }
        $game->update($data);
        session()->flash('success','Game update successfully');
        // return redirect()->route('admin.games.index')->with('success','Game update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return back()->with('success','Game deleted successfully');
    }


    function leaderboard(){
        $users = User::withSum('winners as total_amount', 'amount')
            ->orderByDesc('total_amount')
            ->has('winners')
            ->limit(10)
            ->get();

            $users = json_decode(json_encode(LeaderBoardResource::collection($users)));
        
        return view('admin.game.leaderboard',compact('users'));
    }


}
