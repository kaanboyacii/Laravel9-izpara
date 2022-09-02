        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="{{route('admin.index')}}"><img src="{{asset('assets')}}/admin/images/icon/adminlogo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark-alt"></i><span>Blog</span></a>
                                <ul class="collapse">
                                    <li><a href="/admin/gönderiler/yeni">Yeni Gönderiler</a></li>
                                    <li><a href="/admin/gönderiler/onaylanmış">Onaylanmış Gönderiler</a></li>
                                    <li><a href="/admin/gönderiler/iptal">İptal Edilmiş Gönderiler</a></li>
                                    <li><a href="/admin/gönderiyorumları/yeni">Yeni Gönderi Yorumları</a></li>
                                    <li><a href="/admin/gönderiyorumları/onaylanmış">Onaylanmış Gönderi Yorumları</a></li>
                                    <li><a href="/admin/gönderiyorumları/iptal">İptal Edilmiş Gönderi Yorumları</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('admin.message.index')}}"><i class="ti-email"></i> <span>Mesajlar</span></a></li>
                            <li><a href="{{route('admin.user.index')}}"><i class="ti-user"></i> <span>Kullanıcılar</span></a></li>
                            <li><a href="{{route('admin.setting')}}"><i class="ti-settings"></i> <span>Ayarlar</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->