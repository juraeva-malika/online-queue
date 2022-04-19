<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>New Smile Clinic</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Главная</a>
                <a href="/about" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">О нас</a>
                <a href="/feedbacks"  class="nav-item nav-link {{ (request()->is('feedbacks')) ? 'active' : '' }}">Отзывы</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link  {{ (request()->is('services/*')) ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown">Услуги</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="/services/implantology" class="dropdown-item {{ (request()->is('services/implantology')) ? 'active' : '' }}">Имплантология</a>
                        <a href="/services/surgery" class="dropdown-item {{ (request()->is('services/surgery')) ? 'active' : '' }}">Хирургия</a>
                        <a href="/services/therapy" class="dropdown-item {{ (request()->is('services/therapy')) ? 'active' : '' }}">Терапия</a>
                        <a href="/services/restoration" class="dropdown-item {{ (request()->is('services/restoration')) ? 'active' : '' }}">Рестоврация</a>
                        <a href="/services/orthodontics" class="dropdown-item {{ (request()->is('services/orthodontics')) ? 'active' : '' }}">Ортодонтия</a>
                        <a href="/services/orthopedics" class="dropdown-item {{ (request()->is('services/orthopedics')) ? 'active' : '' }}">Ортопедия</a>
                        <a href="/services/childrens-doctor {{ (request()->is('services/childrens-doctor')) ? 'active' : '' }}" class="dropdown-item">Детский доктор</a>
                        <a href="/services/hygiene" class="dropdown-item {{ (request()->is('services/hygiene')) ? 'active' : '' }}">Гигиена</a>
                    </div>
                </div>
                <a href="/our-work" class="nav-item nav-link {{ (request()->is('our-work')) ? 'active' : '' }}">Наши работы</a>
            </div>
            <a href="/appointment" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Онлайн-запись<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->