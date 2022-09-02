@extends('layouts.adminbase')
@section('title', 'izPara Blog Gönderi Detay')

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
                            <h4 class="header-title">Forum Gönderi Yorum Detay</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th style="width: 30px">Id</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">İsim & Soyisim</th>
                                            <td>{{$data->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Forum Gönderi ID</th>
                                            <td>{{$data->blogpost_id}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Başlık</th>
                                            <td>{{$data->title}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Yorum</th>
                                            <td>{{$data->comment}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Oluşturulma Tarihi</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Son Güncelleme Tarihi</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Durum:</th>
                                            <td>
                                                <form role="form" action="{{route('admin.blog.update2',['id'=>$data->id])}}" method="POST" class="forms-sample">
                                                    @csrf
                                                    <select name="status">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>Yeni</option>
                                                        <option>Onaylanmış</option>
                                                        <option>İptal</option>
                                                    </select>
                                                    </textarea>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn-warning">Durumu Güncelle</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
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
