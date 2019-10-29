<header>
    <nav class="navbar navbar-expand-lg p-lg-0 d-block fixed-top">
        <div class="container px-lg-0">
            <a href="/" class="img-logo"><img class="img img-fluid logo w-75"
                    src="https://nhacaiso.vn/wp-content/themes/nhacaiso/assets/img/logo.png"></a>
            <button class="navbar-toggler border-0 pr-0 btn-menu" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <img src="https://nhacaiso.vn/wp-content/themes/nhacaiso/assets/img/menu-bar.png"
                    class="img img-fluid w-50 menu-bar">
            </button>

            <div class="collapse navbar-collapse menu-header justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Trang chủ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('getCate', ['cate' => config('config.cate')[1]])}}">Nhà cái uy
                            tín</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('getCate', ['cate' => config('config.cate')[2]])}}">Hướng dẫn
                            cá cược</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('getCate', ['cate' => config('config.cate')[3]])}}">Kinh
                            nghiệm cá cược</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('getCate', ['cate' => config('config.cate')[4]])}}">Tỷ lệ kèo
                            bóng đá</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('getCate', ['cate' => config('config.cate')[5]])}}">Soi kèo
                            bóng đá</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>