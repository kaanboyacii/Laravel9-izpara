@extends('layouts.adminbase')

@section('title', 'izPara Blog')

@section('content')
<div class="main-content-inner">
    <!-- row area start -->
    <div class="row">
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- table form start -->
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Forum Gönderi Yorumları</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class="text-uppercase bg-warning">
                                            <tr class="text-white">
                                                <th scope="col">ID</th>
                                                <th scope="col">Kullanıcı</th>
                                                <th scope="col">Forum Gönderi ID</th>
                                                <th scope="col">Başlık</th>
                                                <th scope="col">Yorum</th>
                                                <th scope="col">Durum</th>
                                                <th scope="col">detay göster</th>
                                                <th scope="col">kaldır</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $rs)
                                            <tr>
                                                <th scope="row">{{$rs->id}}</th>
                                                <td><a href="{{route('admin.user.show',['id'=>$rs->user_id])}}">{{$rs->user->name}}</a></td>
                                                <td><a href="{{route('admin.blog.show',['id'=>$rs->blogpost_id])}}">{{$rs->blogpost_id}}</a></td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->comment}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a class="ti-info-alt" href="{{route('admin.blog.show2',['id'=>$rs->id])}}"></a></td>
                                                <td><a class="ti-trash" href="{{route('admin.blog.cancel2',['id'=>$rs->id])}}" , onclick="return confirm('İptal Etmek İçin Emin misiniz ?')"></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table form end -->
            </div>
        </div>
    </div>
    <!-- row area end -->
    <div class="row mt-5">
    </div>
    <!-- row area start-->
</div>
</div>
<!-- main content area end -->
@endsection
