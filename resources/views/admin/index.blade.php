@extends('layouts.adminbase')

@section('title', 'izPara Admin Panel')

@section('content')
<div class="main-content-inner">
    <!-- market value area start -->
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Coin Piyasa Değerleri & Takibi</h4>
                    </div>
                    <div class="market-status-table mt-4">
                        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="dbkit-table mb-0">
                                <tr class="heading-td">
                                    <td class="mv-icon">Logo</td>
                                    <td class="coin-name">Sembol</td>
                                    <td class="coin-name">Coin Adı</td>
                                    <td class="attachments">Mevcut Fiyat</td>
                                    <td class="buy">En Yüksek(24 saat)</td>
                                    <td class="sell">En Düşük(24 saat)</td>
                                    <td class="trends">Piyasa Değeri</td>
                                </tr>
                                @foreach($collection as $rs)
                                <tr>
                                    <td class="mv-icon"><img src="{{$rs['image']}}" alt="icon">
                                    </td>
                                    <td class="coin-name">{{$rs['symbol']}}</td>
                                    <td class="coin-name">{{$rs['name']}}</td>
                                    <td class="attachments">${{$rs['current_price']}}</td>
                                    <td class="buy">${{$rs['high_24h']}}</td>
                                    <td class="sell">${{$rs['low_24h']}}</td>
                                    <td class="trends">${{$rs['market_cap']}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- market value area end -->
    <div class="row mt-5">
        <!-- latest news area start -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Yeni Gönderiler</h4>
                    <div class="letest-news mt-5">
                        @foreach($newblogpost as $rs)
                        <div class="single-post">
                            <div class="lts-thumb">
                                <img src="{{Storage::url($rs->image)}}" alt="post thumb">
                            </div>
                            <div class="lts-content">
                                <span>{{$rs->status}}</span>
                                <h2><a href="{{route('admin.blog.show',['id'=>$rs->id])}}">{{$rs->title}}</a></h2>
                                <p>{{ substr($rs->content, 0,  200) }}...</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- latest news area end -->
        <!-- exchange area start -->
        <div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Kullanıcı Sayısı</h4>
                    <div class="exhcange-rate mt-5">
                        <h2>{{ $chart1->options['chart_title'] }}</h2>
                        {!! $chart1->renderHtml() !!}
                    </div>
                    {!! $chart1->renderChartJsLibrary() !!}
                    {!! $chart1->renderJs() !!}
                </div>
            </div>
        </div>
        <!-- exchange area end -->
    </div>
    <!-- row area start-->
</div>
</div>
<!-- main content area end -->
@endsection