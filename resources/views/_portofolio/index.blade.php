@extends('layout._merge.index')

@section('content')
    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Inicio - Apresentação -->
            <section id="home" class="hero-section hero-1">
                <div class="bg-image bg-cover"
                    style="background-image: url({{ asset('portofolio/assets/images/home-1/hero/perfil.png') }})"></div>
                <div class="shape">
                    <img class="shape-2" src="{{ asset('portofolio/assets/images/home-1/hero/shape-02.png') }}"
                        alt="" />
                    <img class="shape-3" src="{{ asset('portofolio/assets/images/home-1/hero/shape-03.png') }}"
                        alt="" />
                </div>
                <div class="social-link ks_fade_anim" data-delay=".3" data-fade-from="left">
                    <ul class="list">
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="auto-container">
                    <div class="row">
                        <div class="col-xxl-12 col-12">
                            <div class="hero-content ks_fade_anim" data-delay=".5">
                                <h5 class="sub-title">Full-Stack Developer</h5>
                                <h1 class="title ">
                                    Joel
                                    <span>
                                        <span class="color-1"> Paixão </span>
                                    </span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- / Inicio - Sobre Mim  /-->
            <section id="about" class="about-wrapper about-1 section-padding section-bg">
                <div class="shape">
                    <img src="{{ asset('portofolio/assets/images/home-1/about/shape-02.png') }}" class="shape-2"
                        alt="">
                </div>
                <div class="auto-container">
                    <div class="row">
                        <div class="col-xl-9 col-12">
                            <div class="section-title">
                                <div class="sub-title">
                                    <div class="dot"></div>
                                    <span>Sobre mim</span>
                                </div>
                                <h2 class="title text_invert"> Desenvolvidor Full-Stack <br /> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="about-image ks_fade_anim" data-delay=".3" data-fade-from="left">
                                <img src="{{ asset('portofolio/assets/images/home-1/hero/perfil.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="offset-xl-1 col-xl-7 col-lg-8 col-md-12">
                            <div class="about-content ks_fade_anim" data-delay=".3" data-fade-from="right">
                                <h4 style="color: black;"> Habilidades Técnicas </h4> <br />
                                <div class="list">
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i><ins>Front-end</ins>: HTML . CSS .
                                            JavaScript</li>
                                        <li><i class="fa-solid fa-circle-check"></i><ins>Back-end</ins>: PHP . Laravel</li>
                                    </ul>
                                    <ul>
                                        <li><i class="fa-solid fa-circle-check"></i><ins>Banco de Dados</ins>: MySQL</li>
                                        <li><i class="fa-solid fa-circle-check"></i><ins>Outros</ins>: GitHub</li>
                                    </ul>
                                </div>
                                <br />
                                <h4 style="color: black;"> Objetivo Profissional </h4> <br />
                                <p>
                                    Desenvolver carreira na área de Sistemas Web, especializando-me na criação de aplicações
                                    modernas,
                                    seguras e eficientes. Busco aplicar meus conhecimentos na construção de soluções
                                    tecnológicas que otimizem
                                    processos, resolvam problemas reais e gerem impacto positivo em instituições, empresas e
                                    na sociedade em geral. </p>
                                <div class="bottom">
                                    <div class="info-box">
                                        <div class="experience count-box">
                                            <h3 class="num"><span class="count-text" data-speed="3000"
                                                    data-stop="3"></span></h3>
                                            <p>Anos de Experiência</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- / Inicio - Meus Projetos  /-->
            <section id="project" class="service-wrapper service-one section-padding">
                <div class="shape">
                    {{-- <img class="shape-2" src="{{ asset('portofolio/assets/images/home-1/service/shape-02.png') }}"
                        alt="" /> --}}
                </div>
                <div class="auto-container">
                    <div class="service-one">
                        <div class="inner-box">
                            <div class="section-title">
                                <div class="sub-title">
                                    <div class="dot"></div>
                                    <span>Meus Projetos</span>
                                </div>
                                <h2 class="title text_invert">What we are Offering to <br /> Our Potential Client</h2>
                            </div>
                            <div class="swiper service-slide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="service-one">
                                            <div class="card-style">
                                                <img class="shape-1"
                                                    src="{{ asset('portofolio/assets/images/home-1/service/shape-01.png') }}"
                                                    alt="" />
                                                <div class="head">
                                                    <div class="icon-2">
                                                        <i class="flaticon-tech flaticon-tech-interaction-1"></i>
                                                    </div>
                                                    <div class="num">01</div>
                                                </div>
                                                <h3 class="title"> NgolaNews</h3>
                                                <ul class="list">
                                                    <li><i class="far fa-long-arrow-right"></i>Seamless Experience</li>
                                                    <li><i class="far fa-long-arrow-right"></i>User Harmony</li>
                                                    <li><i class="far fa-long-arrow-right"></i>Digital Flow</li>
                                                </ul>
                                                <div class="icon-box">
                                                    <span class="icon"><i class="far fa-long-arrow-right"></i></span>
                                                    <a class="theme-btn-main style-2" href="page-service-details.html">
                                                        <span class="theme-btn-arrow-left theme-btn-arrow-small"> <i
                                                                class="far fa-long-arrow-right"></i> </span>
                                                        <span class="theme-btn theme-btn-white theme-btn-small ">View
                                                            Details</span>
                                                        <span
                                                            class="theme-btn-arrow-right theme-btn-white theme-btn-arrow-small">
                                                            <i class="far fa-long-arrow-right"></i> </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-one">
                                            <div class="card-style">
                                                <img class="shape-1"
                                                    src="{{ asset('portofolio/assets/images/home-1/service/shape-01.png') }}"
                                                    alt="" />
                                                <div class="head">
                                                    <div class="icon-2">
                                                        <i class="flaticon-tech-Choose-marketing-1"></i>
                                                    </div>
                                                    <div class="num">02</div>
                                                </div>
                                                <h3 class="title"> Branding <br /> Design</h3>
                                                <ul class="list">
                                                    <li><i class="far fa-long-arrow-right"></i>Visual Impact</li>
                                                    <li><i class="far fa-long-arrow-right"></i>Creative Essence</li>
                                                    <li><i class="far fa-long-arrow-right"></i>Market Presence</li>
                                                </ul>
                                                <div class="icon-box">
                                                    <span class="icon"><i class="far fa-long-arrow-right"></i></span>
                                                    <a class="theme-btn-main style-2" href="page-service-details.html">
                                                        <span class="theme-btn-arrow-left theme-btn-arrow-small"> <i
                                                                class="far fa-long-arrow-right"></i> </span>
                                                        <span class="theme-btn theme-btn-white theme-btn-small ">View
                                                            Details</span>
                                                        <span
                                                            class="theme-btn-arrow-right theme-btn-white theme-btn-arrow-small">
                                                            <i class="far fa-long-arrow-right"></i> </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="service-one">
                                            <div class="card-style">
                                                <img class="shape-1"
                                                    src="{{ asset('portofolio/assets/images/home-1/service/shape-01.png') }}"
                                                    alt="" />
                                                <div class="head">
                                                    <div class="icon-2">
                                                        <i class="flaticon-tech flaticon-tech-branding-1"></i>
                                                    </div>
                                                    <div class="num">03</div>
                                                </div>
                                                <h3 class="title"> Design & <br /> Development</h3>
                                                <ul class="list">
                                                    <li><i class="far fa-long-arrow-right"></i>Innovative Builds</li>
                                                    <li><i class="far fa-long-arrow-right"></i>Vision Execution</li>
                                                    <li><i class="far fa-long-arrow-right"></i>Code & Concept</li>
                                                </ul>
                                                <div class="icon-box">
                                                    <span class="icon"><i class="far fa-long-arrow-right"></i></span>
                                                    <a class="theme-btn-main style-2" href="page-service-details.html">
                                                        <span class="theme-btn-arrow-left theme-btn-arrow-small"> <i
                                                                class="far fa-long-arrow-right"></i> </span>
                                                        <span class="theme-btn theme-btn-white theme-btn-small ">View
                                                            Details</span>
                                                        <span
                                                            class="theme-btn-arrow-right theme-btn-white theme-btn-arrow-small">
                                                            <i class="far fa-long-arrow-right"></i> </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="array-button">
                                <button class="array-prev"><i class="fas fa-long-arrow-left"></i></button>
                                <button class="array-next"><i class="fas fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="service-one">
                        <div class="clint-style">
                            {{-- <h5 class="clint-text"><span>2k</span> Happy Clients of Our Services</h5> --}}
                            {{-- <div class="avater">
                                <img src="{{ asset('portofolio/assets/images/home-1/service/avater-01.png') }}"
                                    alt="" />
                                <div class="icon">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>

            <!-- Inicio dos destaques tecnicos -->
            <section id="thing" class="award-wrappper award-one section-padding section-bg-2">
                <div class="award-one__bg-image"
                    style="background-image: url('{{ asset('portofolio/assets/images/home-1/award/award-bg-01.png') }}')">
                </div>
                <div class="shape">
                    <img src="{{ asset('portofolio/assets/images/home-1/award/shape-01.png') }}" alt=""
                        class="shape-2" />
                    <img src="{{ asset('portofolio/assets/images/home-1/award/shape-02.png') }}" alt=""
                        class="shape-3" />
                </div>
                <div class="auto-container">
                    <div class="section-title">
                        <div class="sub-title sub-title-black">
                            <div class="dot"></div>
                            <span>Destaques Técnicos</span>
                        </div>
                        <h2 class="title text_invert title text_invert-2">Our Agency Awards <br />& Achievements</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12  ks_fade_anim" data-delay=".4" data-fade-from="top">
                            <div class="award-one__single-card ">
                                <img class="shape-1"
                                    src="{{ asset('portofolio/assets/images/home-1/award/award-shape-1.png') }}"
                                    alt="" />
                                <div class="content-left d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-tech flaticon-tech-trophy-1-1"></i>
                                    </div>
                                    <div class="title-info">
                                        <p class="tag">Awards</p>
                                        <h4 class="title">The Webby Awards</h4>
                                    </div>
                                </div>
                                <div class="date">June 2025</div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  ks_fade_anim" data-delay=".4" data-fade-from="top">
                            <div class="award-one__single-card style-2">
                                <div class="content-left d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-tech flaticon-tech-trophy-2"></i>
                                    </div>
                                    <div class="title-info">
                                        <p class="tag">Css Awards</p>
                                        <h4 class="title">Top 5 Best of eCommerce</h4>
                                    </div>
                                </div>
                                <div class="date">April 2021</div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  ks_fade_anim" data-delay=".5" data-fade-from="top">
                            <div class="award-one__single-card style-3 ">
                                <img class="shape-1"
                                    src="{{ asset('portofolio/assets/images/home-1/award/award-shape-1.png') }}"
                                    alt="" />
                                <div class="content-left d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-tech flaticon-tech-gold-medal-1"></i>
                                    </div>
                                    <div class="title-info">
                                        <p class="tag">Behance</p>
                                        <h4 class="title">Honor CSS November</h4>
                                    </div>
                                </div>
                                <div class="date">March 2022</div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  ks_fade_anim" data-delay=".5" data-fade-from="top">
                            <div class="award-one__single-card style-4">
                                <div class="content-left d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-tech flaticon-tech-award-1"></i>
                                    </div>
                                    <div class="title-info">
                                        <p class="tag">Awwwards</p>
                                        <h4 class="title">Brand of the year</h4>
                                    </div>
                                </div>
                                <div class="date">July 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section Start -->
            <section id="contact" class="contact-wrapper contact-one section-padding section-bg">
                <div class="contact-one__bg-image bg-cover"
                    style="background-image: url({{ asset('portofolio/assets/images/home-1/contact/contact-bg.png') }})">
                </div>
                <div class="shape">
                    <img src="images/home-1/contact/shape-01.png" alt="" class="shape-1" />
                    <img src="images/home-1/contact/shape-02.png" alt="" class="shape-2" />
                </div>
                <div class="auto-container">
                    <div class="contact-one__image">
                        <img src="{{ asset('portofolio/assets/images/home-1/contact/contact-image.jpg') }}"
                            alt="" />
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 ks_fade_anim" data-delay=".4">
                            <div class="section-title">
                                <div class="sub-title sub-title-white">
                                    <div class="dot"></div>
                                    <span>Contact us</span>
                                </div>
                                <h2 class="title text_invert">Always Happy to Hear from You</h2>
                            </div>
                            <div class="contact-one__info-card">
                                <div class="infu-box d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-regular fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <span>Call for Details</span>
                                        <h4 class="num">+21 9555-0114</h4>
                                    </div>
                                </div>
                                <div class="infu-box d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-light fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <span>Call for Details</span>
                                        <h4 class="num">+21 9555-0114</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 ks_fade_anim" data-delay=".6">
                            <div class="contact-one__contact-form">
                                <form action="#" class="form-box">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name"
                                                    placeholder="Your Name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="email"
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <input type="text" name="Subject" id="Subject"
                                                    placeholder="Subject" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <textarea rows="4" name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-clt">
                                                <a class="theme-btn-main" href="page-contact.html">
                                                    <span class="theme-btn-arrow-left"> <i
                                                            class="far fa-long-arrow-right"></i> </span>
                                                    <span class="theme-btn">Send Message</span>
                                                    <span class="theme-btn-arrow-right"> <i
                                                            class="far fa-long-arrow-right"></i> </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
