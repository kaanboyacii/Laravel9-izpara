@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
<div class="container">
    <iframe src="https://api.genelpara.com/iframe/?symbol=para-birimleri&pb=USD,EUR,GBP,XU100,GA,C,BTC&stil=stil-2&renk=beyaz" title="Döviz ve Altın Fiyatları" frameborder="0" width="1110" height="65" style="width:1110px; height:65px;"></iframe>
    <!-- <iframe src="https://api.genelpara.com/iframe/?symbol=borsa&borsa=AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,&stil=stil-6&renk=beyaz" title="Hisse Senetleri" frameborder="0" width="1110" height="405" style="width:1110px; height:405px;"></iframe> -->
        @foreach($data as $rs)
            {{ $rs->id }}
        @endforeach
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
            {
                "width": "1110",
                "height": 450,
                "symbolsGroups": [{
                        "name": "Endeks",
                        "originalName": "Indices",
                        "symbols": [{
                                "name": "BIST:THYAO"
                            },
                            {
                                "name": "BIST:EREGL"
                            },
                            {
                                "name": "BIST:PETKM"
                            },
                            {
                                "name": "BIST:TUPRS"
                            },
                            {
                                "name": "BIST:GARAN"
                            },
                            {
                                "name": "BIST:SISE"
                            },
                            {
                                "name": "BIST:HALKB"
                            },
                            {
                                "name": "BIST:ASELS"
                            },
                            {
                                "name": "BIST:SASA"
                            },
                            {
                                "name": "BIST:TOASO"
                            },
                            {
                                "name": "BIST:TOASO"
                            },
                            {
                                "name": "BIST:HEKTS"
                            },
                            {
                                "name": "BIST:KRDMD"
                            },
                            {
                                "name": "BIST:TTKOM"
                            },
                            {
                                "name": "BIST:GUBRF"
                            },
                            {
                                "name": "BIST:VESTL"
                            },
                            {
                                "name": "BIST:TCELL"
                            },
                            {
                                "name": "BIST:KONTR"
                            },
                            {
                                "name": "BIST:AKSEN"
                            },
                            {
                                "name": "BIST:FROTO"
                            },
                            {
                                "name": "BIST:VESBE"
                            },
                            {
                                "name": "BIST:AKBNK"
                            },
                            {
                                "name": "BIST:AKSA"
                            },
                            {
                                "name": "BIST:ARCLK"
                            },
                            {
                                "name": "BIST:SAHOL"
                            },
                            {
                                "name": "BIST:BAGFS"
                            },
                            {
                                "name": "BIST:KORDS"
                            },
                            {
                                "name": "BIST:TKFEN"
                            },
                            {
                                "name": "BIST:ISCTR"
                            },
                            {
                                "name": "BIST:ESEN"
                            },
                            {
                                "name": "BIST:VAKBN"
                            },
                            {
                                "name": "BIST:BIMAS"
                            },
                            {
                                "name": "BIST:YKBNK"
                            },
                            {
                                "name": "BIST:ASUZU"
                            },
                            {
                                "name": "BIST:GWIND"
                            },
                            {
                                "name": "BIST:KCHOL"
                            },
                            {
                                "name": "BIST:DOHOL"
                            },
                            {
                                "name": "BIST:ALKIM"
                            },
                            {
                                "name": "BIST:KOZAL"
                            },
                            {
                                "name": "BIST:ENJSA"
                            },
                            {
                                "name": "BIST:KARSN"
                            },
                            {
                                "name": "BIST:BERA"
                            },
                            {
                                "name": "BIST:TUKAS"
                            },
                            {
                                "name": "BIST:TMSN"
                            },
                            {
                                "name": "BIST:ALARK"
                            },
                            {
                                "name": "BIST:EKGYO"
                            },
                            {
                                "name": "BIST:AKFGY"
                            },
                            {
                                "name": "BIST:TTRAK"
                            },
                            {
                                "name": "BIST:OYAKC"
                            },
                            {
                                "name": "BIST:HKTM"
                            },
                            {
                                "name": "BIST:QUAGR"
                            }
                        ]
                    },
                    {
                        "name": "Döviz",
                        "originalName": "Forex",
                        "symbols": [{
                                "name": "FX:EURUSD",
                                "displayName": "EUR/USD"
                            },
                            {
                                "name": "FX:GBPUSD",
                                "displayName": "GBP/USD"
                            },
                            {
                                "name": "FX:USDJPY",
                                "displayName": "USD/JPY"
                            },
                            {
                                "name": "FX:USDCHF",
                                "displayName": "USD/CHF"
                            },
                            {
                                "name": "FX:AUDUSD",
                                "displayName": "AUD/USD"
                            },
                            {
                                "name": "FX:USDCAD",
                                "displayName": "USD/CAD"
                            }
                        ]
                    }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "locale": "tr"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>

<section class="cryptos-blog-area section-padding-25">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                    {
                        "colorTheme": "light",
                        "dateRange": "12M",
                        "exchange": "BIST",
                        "showChart": true,
                        "locale": "tr",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": false,
                        "showFloatingTooltip": false,
                        "width": "400",
                        "height": "600",
                        "plotLineColorGrowing": "rgba(255, 221, 19, 1)",
                        "plotLineColorFalling": "rgba(255, 0, 0, 1)",
                        "gridLineColor": "rgba(42, 46, 57, 0)",
                        "scaleFontColor": "rgba(120, 123, 134, 1)",
                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                    }
                </script>
            </div>
            <div class="col-12 col-lg-7">
                <div class="blog-area">
                    <!-- Single Blog Area -->
                    <div class="single-blog-area d-flex align-items-start">
                        <iframe src="https://www.finansgundem.com/indexout.asp?renk1=000000&amp;renk2=ffaf02&amp;arka=FFFF&amp;katid=325" style="border: 1px solid #1A1A1A;" vspace="0" hspace="0" marginwidth="0" marginheight="0" width="650" height="595" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cryptos-blog-area section-padding-25">
    <div class="container">
        <h3>Borsa Verileri</h3>
        <iframe src="https://api.genelpara.com/iframe/?symbol=borsa&borsa=AEFES,AFYON,AKBNK,AKENR,AKSA,AKSEN,ALARK,ALGYO,ANELE,ARCLK,ASELS,AYGAZ,BAGFS,BANVT,BERA,BIMAS,BIZIM,BJKAS,BRISA,BRSAN,CCOLA,CEMTS,CRFSA,DEVA,DOAS,DOHOL,ECILC,EGEEN,EKGYO,ENKAI,ERBOS,EREGL,FENER ,FROTO,GARAN,GLYHO,GOLTS,GOODY,GOZDE ,GSDHO,GSRAY,GUBRF,HALKB,HLGYO,HURGZ,ICBCT,IEYHO,IHLAS,IHLGM,IPEKE,ISCTR,ISGYO,KARSN,KARTN,KCHOL,KLGYO,KORDS,KOZAA,KOZAL,KRDMD,MAVI,METRO,MGROS,NETAS,NTHOL,ODAS,OTKAR,PETKM,PGSUS,PRKME,SAHOL,SASA,SISE,SKBNK,SNGYO,TATGD,TAVHL,TCELL,THYAO,TKFEN,TKNSA,TLMAN,TMSN,TOASO,TRCAS,TSKB,TTKOM,TTRAK,TUPRS,ULKER,VAKBN ,VESTL,VKGYO,YATAS,YKBNK,ZOREN&stil=stil-7&renk=beyaz" title="Hisse Senetleri" frameborder="0" width="1110" height="405" style="width:1110px; height:405px;"></iframe>
    </div>
</section>
<!-- ##### Course Area End ##### -->

<!-- ##### Currency Area Start ##### -->
<section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center white mx-auto">
                    <div style="width:100%;margin: 20px 0;"><iframe title="Paratic Piyasalar" sandbox="allow-modals allow-same-origin allow-scripts allow-popups allow-pointer-lock" height="231" id="piyasa_paratic_doviz_cevirici" src="https://widget.paratic.com/?toolName=dovizcevirici&background=transparent" frameborder="0" style="border-radius:5px;width: 290px; height: 305px;"></iframe>
                        <style>
                            .pp-lnk-p {
                                text-decoration: none;
                                color: #acacac;
                                font-weight: 600;
                                font-size: 18px;
                                font-family: "Open Sans", sans-serif;
                                line-height: 2;
                                padding: 7px 0;
                            }

                            .pp-lnk-p:hover {
                                text-decoration: underline;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Currency Area End ##### -->
<section class="cryptos-blog-area section-padding-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <div class="blog-area">
                    @foreach($lastestblogpost as $rs)
                    <div class="single-blog-area d-flex align-items-start">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{Storage::url($rs->image)}}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="{{route('blogpost',['id'=>$rs->id])}}" class="post-title">{{$rs->title}}</a>
                            <div class="meta-data">
                                <a href="#">{{$rs->subject}}</a> |
                                <a href="#"> {{$rs->created_at->format('m/d/Y')}}</a> |
                                <a href="#"> {{$rs->user->name}}</a>
                            </div>
                            <p>{{ substr($rs->content, 0,  100) }}...</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="cryptos-prices-table">

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>01</span>
                            <img src="{{asset('assets')}}/img/bg-img/bitcoin.png" alt="">
                            <p>Bitcoin <span>BTC</span></p>
                        </div>
                        <div class="price increase">
                            <p>$12 456.78</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>02</span>
                            <img src="{{asset('assets')}}/img/bg-img/ethereum.png" alt="">
                            <p>Ethereum <span>ETH</span></p>
                        </div>
                        <div class="price increase">
                            <p>$1051.98</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>03</span>
                            <img src="{{asset('assets')}}/img/bg-img/bitcoin-cash.png" alt="">
                            <p>Bitcoin Cash <span>BCH</span></p>
                        </div>
                        <div class="price decrease">
                            <p>$2256.78</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>04</span>
                            <img src="{{asset('assets')}}/img/bg-img/ripple.png" alt="">
                            <p>Ripple <span>XRP</span></p>
                        </div>
                        <div class="price increase">
                            <p>$2.03</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>05</span>
                            <img src="{{asset('assets')}}/img/bg-img/litecoin.png" alt="">
                            <p>Litecoin <span>LTC</span></p>
                        </div>
                        <div class="price increase">
                            <p>$321.98</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>06</span>
                            <img src="{{asset('assets')}}/img/bg-img/cardano.png" alt="">
                            <p>Cardano <span>ADA</span></p>
                        </div>
                        <div class="price increase">
                            <p>$0.75</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>07</span>
                            <img src="{{asset('assets')}}/img/bg-img/nem.png" alt="">
                            <p>NEM <span>XEM</span></p>
                        </div>
                        <div class="price increase">
                            <p>$0.89</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>08</span>
                            <img src="{{asset('assets')}}/img/bg-img/neo.png" alt="">
                            <p>NEO <span>NEO</span></p>
                        </div>
                        <div class="price decrease">
                            <p>$123.90</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>09</span>
                            <img src="{{asset('assets')}}/img/bg-img/stellar.png" alt="">
                            <p>Stellar <span>XLM</span></p>
                        </div>
                        <div class="price increase">
                            <p>$0.67</p>
                        </div>
                    </div>

                    <!-- Single Price Table -->
                    <div class="single-price-table d-flex align-items-center justify-content-between">
                        <div class="p-content d-flex align-items-center">
                            <span>10</span>
                            <img src="{{asset('assets')}}/img/bg-img/iota.png" alt="">
                            <p>IOTA <span>IOT</span></p>
                        </div>
                        <div class="price increase">
                            <p>$3.55</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')