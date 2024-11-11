@extends('frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="card-full-page tb-10">

            <form action="{{ route('store_single_patti_bid') }}" method="POST" class="myform" id="submitFrom">
                @csrf
                <div class="row bidoptions-list tb-10">
                    <div class="col-6">
                        <a class="dateGameIDbox">
                            <p>{{ date('d-m-y') }}</p>
                        </a>
                    </div>

                    <div class="col-6">
                        <select class="dateGameIDbox" name="session">
                            <option value="91"> {{ $game->name ?? '' }} OPEN </option>
                            <option value="93"> {{ $game->name ?? '' }} CLOSE</option>
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
                <h3 class="subheading">Select Panna Digits</h3>
                <div class="tb-10">
                    <hr class="devider">
                </div>
                <h3 class="subheading">Panna of ank 0</h3>
                <div class="row bidoptions-list tb-10">


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>127</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti127"
                                name="single_patti127" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>136</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti136"
                                name="single_patti136" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>145</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti145"
                                name="single_patti145" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>190</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti190"
                                name="single_patti190" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>235</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti235"
                                name="single_patti235" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>280</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti280"
                                name="single_patti280" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>370</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti370"
                                name="single_patti370" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>389</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti389"
                                name="single_patti389" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>460</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti460"
                                name="single_patti460" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>479</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti479"
                                name="single_patti479" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>569</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti569"
                                name="single_patti569" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>578</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti578"
                                name="single_patti578" readonly>
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
                            <lable>128</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti128"
                                name="single_patti128" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>137</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti137"
                                name="single_patti137" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>146</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti146"
                                name="single_patti146" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>236</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti236"
                                name="single_patti236" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>245</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti245"
                                name="single_patti245" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>290</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti290"
                                name="single_patti290" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>380</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti380"
                                name="single_patti380" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>470</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti470"
                                name="single_patti470" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>489</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti489"
                                name="single_patti489" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>560</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti560"
                                name="single_patti560" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>579</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti579"
                                name="single_patti579" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>678</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti678"
                                name="single_patti678" readonly>
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
                            <lable>129</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti129"
                                name="single_patti129" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>138</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti138"
                                name="single_patti138" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>147</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti147"
                                name="single_patti147" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>156</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti156"
                                name="single_patti156" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>237</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti237"
                                name="single_patti237" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>246</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti246"
                                name="single_patti246" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>345</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti345"
                                name="single_patti345" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>390</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti390"
                                name="single_patti390" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>480</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti480"
                                name="single_patti480" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>570</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti570"
                                name="single_patti570" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>589</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti589"
                                name="single_patti589" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>679</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti679"
                                name="single_patti679" readonly>
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
                            <lable>120</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti120"
                                name="single_patti120" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>139</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti139"
                                name="single_patti139" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>148</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti148"
                                name="single_patti148" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>157</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti157"
                                name="single_patti157" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>238</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti238"
                                name="single_patti238" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>247</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti247"
                                name="single_patti247" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>256</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti256"
                                name="single_patti256" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>346</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti346"
                                name="single_patti346" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>490</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti490"
                                name="single_patti490" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>580</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti580"
                                name="single_patti580" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>670</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti670"
                                name="single_patti670" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>689</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti689"
                                name="single_patti689" readonly>
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
                            <lable>130</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti130"
                                name="single_patti130" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>149</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti149"
                                name="single_patti149" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>158</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti158"
                                name="single_patti158" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>167</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti167"
                                name="single_patti167" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>239</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti239"
                                name="single_patti239" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>248</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti248"
                                name="single_patti248" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>257</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti257"
                                name="single_patti257" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>347</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti347"
                                name="single_patti347" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>356</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti356"
                                name="single_patti356" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>590</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti590"
                                name="single_patti590" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>680</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti680"
                                name="single_patti680" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>789</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti789"
                                name="single_patti789" readonly>
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
                            <lable>140</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti140"
                                name="single_patti140" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>159</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti159"
                                name="single_patti159" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>168</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti168"
                                name="single_patti168" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>230</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti230"
                                name="single_patti230" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>249</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti249"
                                name="single_patti249" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>258</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti258"
                                name="single_patti258" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>267</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti267"
                                name="single_patti267" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>348</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti348"
                                name="single_patti348" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>357</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti357"
                                name="single_patti357" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>456</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti456"
                                name="single_patti456" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>690</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti690"
                                name="single_patti690" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>780</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti780"
                                name="single_patti780" readonly>
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
                            <lable>123</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti123"
                                name="single_patti123" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>150</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti150"
                                name="single_patti150" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>169</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti169"
                                name="single_patti169" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>178</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti178"
                                name="single_patti178" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>240</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti240"
                                name="single_patti240" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>259</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti259"
                                name="single_patti259" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>268</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti268"
                                name="single_patti268" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>349</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti349"
                                name="single_patti349" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>358</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti358"
                                name="single_patti358" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>367</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti367"
                                name="single_patti367" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>457</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti457"
                                name="single_patti457" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>790</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti790"
                                name="single_patti790" readonly>
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
                            <lable>124</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti124"
                                name="single_patti124" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>160</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti160"
                                name="single_patti160" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>179</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti179"
                                name="single_patti179" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>250</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti250"
                                name="single_patti250" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>269</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti269"
                                name="single_patti269" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>278</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti278"
                                name="single_patti278" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>340</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti340"
                                name="single_patti340" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>359</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti359"
                                name="single_patti359" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>368</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti368"
                                name="single_patti368" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>458</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti458"
                                name="single_patti458" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>467</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti467"
                                name="single_patti467" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>890</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti890"
                                name="single_patti890" readonly>
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
                            <lable>125</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti125"
                                name="single_patti125" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>134</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti134"
                                name="single_patti134" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>170</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti170"
                                name="single_patti170" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>189</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti189"
                                name="single_patti189" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>260</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti260"
                                name="single_patti260" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>279</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti279"
                                name="single_patti279" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>350</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti350"
                                name="single_patti350" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>369</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti369"
                                name="single_patti369" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>378</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti378"
                                name="single_patti378" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>459</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti459"
                                name="single_patti459" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>468</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti468"
                                name="single_patti468" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>567</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti567"
                                name="single_patti567" readonly>
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
                            <lable>126</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti126"
                                name="single_patti126" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>135</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti135"
                                name="single_patti135" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>180</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti180"
                                name="single_patti180" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>234</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti234"
                                name="single_patti234" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>270</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti270"
                                name="single_patti270" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>289</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti289"
                                name="single_patti289" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>360</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti360"
                                name="single_patti360" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>379</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti379"
                                name="single_patti379" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>450</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti450"
                                name="single_patti450" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>469</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti469"
                                name="single_patti469" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>478</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti478"
                                name="single_patti478" readonly>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="bidinputdiv">
                            <lable>568</lable>
                            <input type="text" value="" class="pointinputbox" id="single_patti568"
                                name="single_patti568" readonly>
                        </div>
                    </div>


                </div>



                <input type="hidden" id="total_point" name="total_point" value="">
                <input type="hidden" id="selected_amount" value="">

                <input type="hidden" name="game_id" value="{{ request()->input('game_id') }}">
                <input type="hidden" name="type" value="single_patti">




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