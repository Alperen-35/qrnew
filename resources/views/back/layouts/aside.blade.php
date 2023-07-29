<!-- Side Header Start -->
<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">
        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li><a href="{{route('yonetim')}}"><span>Anasayfa</span></a></li>
                <li class="has-sub-menu"><a href="#"></i> <span>Ürünler</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('addproduct')}}"><span>Yeni Ürün</span></a></li>
                        <li><a href="{{route('manageproduct')}}"><span>Ürün Listesi</span></a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="#"></i> <span>Kategoriler</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{route('addcategory')}}"><span>Yeni Kategori</span></a></li>
                        <li><a href="{{route('managecategory')}}"><span>Kategori Listesi</span></a></li>
                    </ul>
                </li>
                <li><a href="{{route('pagesettings')}}"> <span>Sayfa Ayarları</span></a></li>
                <li><a href="https://dnkreatif.com" target="_blank"> <span>DN Kreatif</span></a></li>
                <li><a href="{{route('logOut')}}"> <span>Çıkış</span></a></li>
            </ul>
        </nav>
    </div><!-- Side Header Inner End -->
</div><!-- Side Header End -->
