@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="card-full-page tb-10">

            <form action="{{ route('store_single_patti_bid') }}" method="POST" class="myform" id="submitFrom">
                @csrf

                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <a class="dateGameIDbox">
                            <p>06/11/2024</p>
                        </a>
                    </div>

                    <div class="col-6">
                        <select class="dateGameIDbox" name="game_id">
                            <option value="91"> MILAN DAY OPEN </option>
                            <option value="93"> MILAN DAY CLOSE</option>
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
                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 0</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>118</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti118"
                                name="double_patti118" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>226</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti226"
                                name="double_patti226" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>244</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti244"
                                name="double_patti244" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>299</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti299"
                                name="double_patti299" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>334</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti334"
                                name="double_patti334" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>488</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti488"
                                name="double_patti488" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>550</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti550"
                                name="double_patti550" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>668</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti668"
                                name="double_patti668" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>677</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti677"
                                name="double_patti677" readonly>
                        </div>
                    </div>


                </div>
                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 1</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>100</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti100"
                                name="double_patti100" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>119</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti119"
                                name="double_patti119" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>155</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti155"
                                name="double_patti155" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>227</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti227"
                                name="double_patti227" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>335</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti335"
                                name="double_patti335" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>344</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti344"
                                name="double_patti344" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>399</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti399"
                                name="double_patti399" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>588</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti588"
                                name="double_patti588" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>669</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti669"
                                name="double_patti669" readonly>
                        </div>
                    </div>


                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 2</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>110</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti110"
                                name="double_patti110" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>200</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti200"
                                name="double_patti200" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>228</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti228"
                                name="double_patti228" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>255</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti255"
                                name="double_patti255" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>336</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti336"
                                name="double_patti336" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>499</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti499"
                                name="double_patti499" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>660</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti660"
                                name="double_patti660" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>688</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti688"
                                name="double_patti688" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>778</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti778"
                                name="double_patti778" readonly>
                        </div>
                    </div>


                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 3</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>166</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti166"
                                name="double_patti166" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>229</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti229"
                                name="double_patti229" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>300</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti300"
                                name="double_patti300" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>337</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti337"
                                name="double_patti337" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>355</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti355"
                                name="double_patti355" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>445</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti445"
                                name="double_patti445" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>599</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti599"
                                name="double_patti599" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>779</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti779"
                                name="double_patti779" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>788</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti788"
                                name="double_patti788" readonly>
                        </div>
                    </div>


                </div>
                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 4</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>112</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti112"
                                name="double_patti112" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>220</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti220"
                                name="double_patti220" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>266</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti266"
                                name="double_patti266" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>338</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti338"
                                name="double_patti338" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>400</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti400"
                                name="double_patti400" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>446</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti446"
                                name="double_patti446" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>455</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti455"
                                name="double_patti455" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>699</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti699"
                                name="double_patti699" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>770</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti770"
                                name="double_patti770" readonly>
                        </div>
                    </div>


                </div>
                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 5</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>113</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti113"
                                name="double_patti113" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>122</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti122"
                                name="double_patti122" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>177</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti177"
                                name="double_patti177" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>339</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti339"
                                name="double_patti339" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>366</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti366"
                                name="double_patti366" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>447</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti447"
                                name="double_patti447" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>500</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti500"
                                name="double_patti500" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>799</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti799"
                                name="double_patti799" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>889</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti889"
                                name="double_patti889" readonly>
                        </div>
                    </div>


                </div>
                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 6</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>114</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti114"
                                name="double_patti114" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>277</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti277"
                                name="double_patti277" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>330</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti330"
                                name="double_patti330" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>448</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti448"
                                name="double_patti448" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>466</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti466"
                                name="double_patti466" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>556</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti556"
                                name="double_patti556" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>600</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti600"
                                name="double_patti600" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>880</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti880"
                                name="double_patti880" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>899</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti899"
                                name="double_patti899" readonly>
                        </div>
                    </div>


                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 7</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>115</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti115"
                                name="double_patti115" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>133</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti133"
                                name="double_patti133" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>188</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti188"
                                name="double_patti188" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>223</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti223"
                                name="double_patti223" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>377</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti377"
                                name="double_patti377" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>449</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti449"
                                name="double_patti449" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>557</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti557"
                                name="double_patti557" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>566</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti566"
                                name="double_patti566" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>700</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti700"
                                name="double_patti700" readonly>
                        </div>
                    </div>


                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 8</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>116</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti116"
                                name="double_patti116" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>224</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti224"
                                name="double_patti224" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>233</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti233"
                                name="double_patti233" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>288</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti288"
                                name="double_patti288" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>440</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti440"
                                name="double_patti440" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>477</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti477"
                                name="double_patti477" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>558</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti558"
                                name="double_patti558" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>800</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti800"
                                name="double_patti800" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>990</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti990"
                                name="double_patti990" readonly>
                        </div>
                    </div>


                </div>

                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 9</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>117</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti117"
                                name="double_patti117" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>144</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti144"
                                name="double_patti144" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>199</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti199"
                                name="double_patti199" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>225</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti225"
                                name="double_patti225" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>388</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti388"
                                name="double_patti388" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>559</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti559"
                                name="double_patti559" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>577</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti577"
                                name="double_patti577" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>667</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti667"
                                name="double_patti667" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>900</lable>
                            <input type="text" value="" class="pointinputbox" id="double_patti900"
                                name="double_patti900" readonly>
                        </div>
                    </div>


                </div>



                <input type="hidden" id="total_point" name="total_point" value="">
                <input type="hidden" id="selected_amount" value="">

                <input type="hidden" name="game_id" value="{{ request()->input('game_id') }}">

                <input type="hidden" name="type" value="double_patti">




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
                        // location.reload();
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
