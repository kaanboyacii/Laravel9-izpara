@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
<div class="container">
    <iframe src="https://api.genelpara.com/iframe/?symbol=para-birimleri&pb=USD,EUR,GBP,XU100,GA,C,BTC&stil=stil-2&renk=beyaz" title="Döviz ve Altın Fiyatları" frameborder="0" width="1110" height="65" style="width:1110px; height:65px;"></iframe>
    <!-- <iframe src="https://api.genelpara.com/iframe/?symbol=borsa&borsa=AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,AKBNK,ASELS,EREGL,GARAN,KRDMD,&stil=stil-6&renk=beyaz" title="Hisse Senetleri" frameborder="0" width="1110" height="405" style="width:1110px; height:405px;"></iframe> -->
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
        <iframe src="https://api.genelpara.com/iframe/?symbol=borsa&borsa=AEFES,AFYON,AKBNK,AKENR,AKSA,AKSEN,ALARK ,ALGYO,ANELE,ARCLK,ASELS,AYGAZ,BAGFS,BANVT,BERA,BIMAS,BIZIM,BJKAS,BRISA,BRSAN,CCOLA,CEMTS,CRFSA,DEVA,DOAS,DOHOL,ECILC,EGEEN,EKGYO,ENKAI,ERBOS,EREGL,FENER ,FROTO,GARAN,GLYHO,GOLTS,GOODY,GOZDE ,GSDHO,GSRAY,GUBRF,HALKB,HLGYO,HURGZ,ICBCT,IEYHO,IHLAS,IHLGM,IPEKE,ISCTR,ISGYO,KARSN,KARTN,KCHOL,KLGYO,KORDS,KOZAA,KOZAL,KRDMD,MAVI,METRO,MGROS,NETAS,NTHOL,ODAS,OTKAR,PETKM,PGSUS,PRKME,SAHOL,SASA,SISE,SKBNK,SNGYO,TATGD,TAVHL,TCELL,THYAO,TKFEN,TKNSA,TLMAN,TMSN,TOASO,TRCAS,TSKB,TTKOM,TTRAK,TUPRS,ULKER,VAKBN ,VESTL,VKGYO,YATAS,YKBNK,ZOREN&stil=stil-7&renk=beyaz" title="Hisse Senetleri" frameborder="0" width="1110" height="405" style="width:1110px; height:405px;"></iframe>
    </div>
</section>
<!-- ##### Course Area End ##### -->


<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="{{asset('assets')}}/img/bg-img/about.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h3>Let’s change <br><span>the world</span> together</h3>
                        <h5>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                        <a href="#" class="btn cryptos-btn mt-30">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->

<!-- ##### Currency Area Start ##### -->
<section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center white mx-auto">
                    <h3 class="mb-4">Cryptocurrency Calculator</h3>
                    <h5 class="mb-2">Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                    <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="currency-calculator mb-15 clearfix">
                    <form action="#" method="post" class="d-flex align-items-center justify-content-center">
                        <!-- Calculator Part -->
                        <div class="calculator-first-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="1">
                            <select>
                                <option>BTC</option>
                                <option>USD</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>

                        <!-- Equal Sign -->
                        <div class="equal-sign">=</div>

                        <!-- Calculator Part -->
                        <div class="calculator-sec-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="940045">
                            <select>
                                <option>EUR</option>
                                <option>USD</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="currency-calculator mb-15">
                    <form action="#" method="post" class="d-flex align-items-center justify-content-center">
                        <!-- Calculator Part -->
                        <div class="calculator-first-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="10400">
                            <select>
                                <option>USD</option>
                                <option>BTC</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>

                        <!-- Equal Sign -->
                        <div class="equal-sign">=</div>

                        <!-- Calculator Part -->
                        <div class="calculator-sec-part d-flex align-items-center">
                            <input type="text" name="inputNumber" placeholder="1.02">
                            <select>
                                <option>BTC</option>
                                <option>USD</option>
                                <option>INR</option>
                                <option>BDT</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Currency Area End ##### -->


@endsection('content')