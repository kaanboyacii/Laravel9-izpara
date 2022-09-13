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
                        <div class="table-responsive">
                            <table class="dbkit-table">
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
                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center">
                                {!! $collection->links() !!}
                            </div>
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
                    <h4 class="header-title">Latest News</h4>
                    <div class="letest-news mt-5">
                        <div class="single-post mb-xs-40 mb-sm-40">
                            <div class="lts-thumb">
                                <img src="assets/images/blog/post-thumb1.jpg" alt="post thumb">
                            </div>
                            <div class="lts-content">
                                <span>Admin Post</span>
                                <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                            </div>
                        </div>
                        <div class="single-post">
                            <div class="lts-thumb">
                                <img src="assets/images/blog/post-thumb2.jpg" alt="post thumb">
                            </div>
                            <div class="lts-content">
                                <span>Admin Post</span>
                                <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest news area end -->
        <!-- exchange area start -->
        <div class="col-xl-6 mt-md-30 mt-xs-30 mt-sm-30">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Exchange</h4>
                    <div class="exhcange-rate mt-5">
                        <form action="#">
                            <div class="input-form">
                                <input type="text" value="0.76834">
                                <span>BTC</span>
                            </div>
                            <div class="exchange-devider">To</div>
                            <div class="input-form">
                                <input type="text" value="5689.846">
                                <span>USD</span>
                            </div>
                            <div class="exchange-btn">
                                <button type="submit">Exchange Now</button>
                            </div>
                        </form>
                    </div>
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