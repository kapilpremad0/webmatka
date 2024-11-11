@extends('frontend.layouts.app')

@section('content')

    <div class="container">
        <div class="card-full-page tb-10">

            <form action="{{ route('store_jodi_bid') }}" method="POST" class="myform" id="submitFrom">
                @csrf

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <a class="dateGameIDbox">
                            <p>06/11/2024</p>
                        </a>
                    </div>

                    <div class="col-6">
                        <select class="dateGameIDbox" name="game_id">
                            <option value="91"> {{ $game->name ?? '' }} OPEN </option>
                        </select>
                    </div>

                </div>



                <div class="tb-10">
                    <hr class="devider">
                </div>

                <h3 class="subheading">Select Amount</h3>
                <div class="row bidoptions-list tb-10">
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_5" data="5">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 5</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_10" data="10">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 10</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_50" data="50">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_100" data="100">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 100</p>
                        </a>
                    </div>
                </div>




                <div class="row bidoptions-list tb-10">
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_200" data="200">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 200</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_500" data="500">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 500</p>
                        </a>
                    </div>

                    <div class="col-3">
                        <a class="bidamtbox" id="amount_1000" data="1000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 1000</p>
                        </a>
                    </div>
                    <div class="col-3">
                        <a class="bidamtbox" id="amount_5000" data="5000">
                            <p><i class="fa fa-inr" aria-hidden="true"></i> 5000</p>
                        </a>
                    </div>
                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Select Digits</h3>

                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>00</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi00" name="jodi00"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>01</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi01" name="jodi01"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>02</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi02" name="jodi02"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>03</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi03" name="jodi03"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>04</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi04" name="jodi04"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>05</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi05" name="jodi05"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>06</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi06" name="jodi06"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>07</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi07" name="jodi07"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>08</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi08" name="jodi08"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>09</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi09" name="jodi09"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>10</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi10" name="jodi10"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>11</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi11" name="jodi11"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>12</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi12" name="jodi12"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>13</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi13" name="jodi13"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>14</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi14" name="jodi14"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>15</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi15" name="jodi15"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>16</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi16" name="jodi16"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>17</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi17" name="jodi17"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>18</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi18" name="jodi18"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>19</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi19" name="jodi19"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>20</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi20" name="jodi20"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>21</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi21" name="jodi21"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>22</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi22" name="jodi22"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>23</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi23" name="jodi23"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>24</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi24" name="jodi24"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>25</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi25" name="jodi25"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>26</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi26" name="jodi26"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>27</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi27" name="jodi27"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>28</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi28" name="jodi28"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>29</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi29" name="jodi29"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>30</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi30" name="jodi30"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>31</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi31" name="jodi31"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>32</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi32" name="jodi32"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>33</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi33" name="jodi33"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>34</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi34" name="jodi34"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>35</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi35" name="jodi35"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>36</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi36" name="jodi36"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>37</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi37" name="jodi37"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>38</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi38" name="jodi38"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>39</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi39" name="jodi39"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>40</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi40" name="jodi40"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>41</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi41" name="jodi41"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>42</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi42" name="jodi42"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>43</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi43" name="jodi43"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>44</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi44" name="jodi44"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>45</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi45" name="jodi45"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>46</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi46" name="jodi46"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>47</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi47" name="jodi47"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>48</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi48" name="jodi48"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>49</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi49" name="jodi49"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>50</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi50" name="jodi50"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>51</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi51" name="jodi51"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>52</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi52" name="jodi52"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>53</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi53" name="jodi53"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>54</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi54" name="jodi54"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>55</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi55" name="jodi55"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>56</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi56" name="jodi56"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>57</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi57" name="jodi57"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>58</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi58" name="jodi58"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>59</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi59" name="jodi59"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>60</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi60" name="jodi60"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>61</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi61" name="jodi61"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>62</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi62" name="jodi62"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>63</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi63" name="jodi63"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>64</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi64" name="jodi64"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>65</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi65" name="jodi65"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>66</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi66" name="jodi66"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>67</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi67" name="jodi67"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>68</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi68" name="jodi68"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>69</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi69" name="jodi69"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>70</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi70" name="jodi70"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>71</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi71" name="jodi71"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>72</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi72" name="jodi72"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>73</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi73" name="jodi73"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>74</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi74" name="jodi74"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>75</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi75" name="jodi75"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>76</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi76" name="jodi76"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>77</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi77" name="jodi77"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>78</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi78" name="jodi78"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>79</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi79" name="jodi79"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>80</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi80" name="jodi80"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>81</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi81" name="jodi81"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>82</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi82" name="jodi82"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>83</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi83" name="jodi83"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>84</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi84" name="jodi84"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>85</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi85" name="jodi85"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>86</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi86" name="jodi86"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>87</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi87" name="jodi87"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>88</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi88" name="jodi88"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>89</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi89" name="jodi89"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>90</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi90" name="jodi90"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>91</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi91" name="jodi91"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>92</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi92" name="jodi92"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>93</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi93" name="jodi93"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>94</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi94" name="jodi94"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>95</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi95" name="jodi95"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>96</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi96" name="jodi96"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>97</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi97" name="jodi97"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>98</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi98" name="jodi98"
                                readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>99</lable>
                            <input type="text" value="" class="pointinputbox" id="jodi99" name="jodi99"
                                readonly>
                        </div>
                    </div>





                </div>
                <input type="hidden" id="total_point" name="total_point" value="">
                <input type="hidden" id="selected_amount" value="">

                <input type="hidden" name="game_id" value="{{ request()->input('game_id') }}">




                <div class="tbmar-20 text-center">
                    <p>Total Points : <a id="total_point2">0</a></p>
                </div>

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <button class="btn btn-light btn-streched" onclick = "resetjsvar();"
                            type="reset">Reset</button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-theme btn-streched" type="submit" name="single_submit">Submit</button>
                    </div>

                </div>



            </form>

            <br><br><br><br><br><br>
        </div>
    </div>
@endsection


@push('script')
    
    <script>
        
        $(document).ready(function() {
            $('#submitFrom').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#submitFrom');
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
                $('.validation-class').html('');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.spinner-loader').css('display', 'block');
                    },
                    success: function(res) {
                        location.reload();
                        // window.location.href = res;
                    },
                    error: function(res) {
                        if (res.status == 422) {
                            if (res.responseJSON && res.responseJSON.errors) {
                                var error = res.responseJSON.errors
                                $.each(error, function(key, value) {
                                    $("#" + key + "-submit_errors").text(value[0]);
                                });
                            }
                        }else if(res.status == 400){
                            if (res.responseJSON && res.responseJSON.error) {
                                var error = res.responseJSON.error
                                $.each(error, function(key, value) {
                                    Toastify({
                                        text: value,
                                        className: "error",
                                        style: {
                                            background: "linear-gradient(to right, #b73b3c, #b73b3c)",
                                        }
                                    }).showToast();
                                });
                            }
                        }
                    }
                });
            });
        });
    </script>
@endpush
