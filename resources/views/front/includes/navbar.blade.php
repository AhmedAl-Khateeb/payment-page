 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <div class="container">
         <a class="navbar-brand" href="#page-top"><img src="{{ asset('front/assets/img/el-shams-logo-horizontal-white-transparent.avif') }}"
                 alt="..." /></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
             aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars ms-1"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                 {{-- <li class="nav-item"><a class="nav-link" href="#services">{{ __('menu.Services') }}</a></li>
                 <li class="nav-item"><a class="nav-link" href="#portfolio">{{ __('menu.Portfolio') }}</a></li> --}}
                 <li class="nav-item"><a class="nav-link" href="{{ route('front.about') }}">{{ __('menu.About US') }}</a></li>
                 <li class="nav-item"><a class="nav-link" href="#contact">{{ __('menu.Contact US') }}</a></li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fas fa-globe"></i>
                     </a>

                     <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                         <li>
                             <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                 English
                             </a>
                         </li>

                         <li>
                             <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                 العربية
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
