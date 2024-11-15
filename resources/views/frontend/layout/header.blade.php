<header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-top" style="">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <ul class="list list-unstyled list-inline mb-0">
                                <li class="list-inline-item text-color-dark me-md-4 mb-0">
                                    <i class="icons icon-phone text-white text-4 position-relative top-2 me-1"></i>
                                    <a href="tel:{{ config('settings.telefon1')}}" class="text-white text-color-hover-primary text-decoration-none">
                                        <strong>{{ config('settings.telefon1')}}</strong>
                                    </a>
                                </li>
                                <li class="list-inline-item text-white me-md-4 mb-0">
                                    <i class="icons icon-phone text-white text-4 position-relative top-2 me-1"></i>
                                    <a href="tel:{{ config('settings.telefon2')}}" class="text-whitetext-color-hover-primary text-decoration-none">
                                        <strong>{{ config('settings.telefon2')}}</strong>
                                    </a>
                                </li>
                                <li class="list-inline-item text-color-dark me-4 mb-0 d-none d-md-inline-block">
                                    <i class="icons icon-envelope text-white text-4 position-relative top-4 me-1"></i>
                                    <a href="mailto: {{ config('settings.email1')}}" class="text-white text-color-hover-primary text-decoration-none text-2">
                                        {{ config('settings.email1')}}
                                    </a>
                                </li>
                                <li class="list-inline-item text-white text-2 mb-0 d-none d-lg-inline-block">
                                    <i class="icons icon-calendar text-white text-3-5 position-relative top-1 me-1"></i>
                                    Mesai Saatleri
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header-column justify-content-end">
                       
                        <div class="header-row">
                            <a class="text-color-dark text-color-hover-primary font-weight-semibold text-2-5 text-decoration-none px-3" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                TR
                                <i class="fas fa-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0" aria-labelledby="dropdownLanguage" style="">
                                <a class="dropdown-item text-1" href="#">ESP</a>
                                <a class="dropdown-item text-1" href="#">FRA</a>
                                <a class="dropdown-item text-1" href="#">ENG</a>
                            </div>
                            <a href="{{ route('contactus')}}" class="btn btn-danger btn-px-4 py-3 font-weight-bold text-2 rounded-0 ms-lg-4">
                                TEKLİF İSTE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home')}}">
                                <img alt="{{ config('settings.siteName')}}" width="75" src="/bmlogo2.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="{{ route('home')}}">
                                                {{ __('site.anasayfa')}}
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="#">
                                                {{ __('site.kurumsal')}}
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Pages as $item)
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('corporatedetail', $item->slug)}}">
                                                        {{ $item->title}}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="#">
                                                Hizmetlerimiz
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service->where('category', 1) as $item)
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('servicedetail', $item->slug)}}">
                                                            {{ $item->title}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                              
                                            </ul>
                                        </li>

                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="#">
                                                Proje / İmalat
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach ($Service->where('category', 2) as $item)
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('servicedetail', $item->slug)}}">
                                                            {{ $item->title}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                              
                                            </ul>
                                        </li>

                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="#">
                                                Galeri
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link" href="{{ route('video')}}">
                                                        Video Galeri
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="{{ route('foto')}}">
                                                        Foto Galeri
                                                    </a>
                                                </li>
                                              
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('literatur')}}">
                                                Literatür
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('blog')}}">
                                                {{ __('site.blog')}}
                                            </a>
                                        </li>

                                        
                                        
                                        <li>
                                            <a class="nav-link" href="{{ route('contactus')}}">
                                                {{ __('site.iletisim')}}
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="social-icons social-icons-clean social-icons-icon-light d-none d-md-inline-block mx-4">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>