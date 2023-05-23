<x-themes.web._theme>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Melhor Experiência Digital com {{ config('config.site_name') }}</h1>
                    <h2>Somos uma equipe de programadores talentosos criando sites com tecnologias atuais</h2>
                    <div><a href="{{ route('admin') }}" class="btn-get-started scrollto">Bora Lá</a></div>
                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('themes/web/assets/img/hero-img.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="{{ asset('themes/web/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>{{ config('config.site_name') }}</h3>
                        <p class="fst-italic">
                            A {{ config('config.site_name') }} é uma Agência Digital, com mais de 11 anos de mercado.
                            Prestamos serviços
                            nas mais diversas áreas, tais como: Plataforma EAD, Desenvolvimento de Sites, Landing Pages,
                            E-commerce, Marketing Automation, Social Media e também Aplicativos Android/IOS.
                        </p>

                        <p class="fst-italic">
                            Nosso diferencial é a busca pela excelência, o comprometimento e inovação. Utilizamos das
                            tecnologias mais recentes do mercado, implementando soluções com agilidade e eficiência,
                            garantindo um serviço sempre estável.
                        </p>

                        <p class="fst-italic">
                            Consideramos nossos clientes como parceiros e participantes do negócio, e focamos a cada dia
                            em gerar resultados positivos, seja de eficiência, vendas, relacionamento ou o que for
                            demandado da atividade. O sucesso do nosso cliente é o nosso sucesso.
                        </p>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="57" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clientes</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projetos</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="9998" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Horas de Suporte</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="9999" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Xícaras de Café</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Serviços</h2>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/desktop-solid.svg') }}" alt=""
                                    width="50px">
                            </div>
                            <h4><a href="">Sites</a></h4>
                            <p>O Site é um dos maiores ativos para uma empresa, ele é fundamental pois além de ser
                                acessível 24 horas por dia.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/cogs-solid.svg') }}" alt=""
                                    width="50px">
                            </div>
                            <h4><a href="">Sistemas</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/file-regular.svg') }}" alt=""
                                    width="50px">
                            </div>
                            <h4><a href="">Landing Pages</a></h4>
                            <p>Criamos Landing Pages personalizadas, essa página é dedicada para uma ação específica,
                                seja captura de leads ou venda de produtos e serviços.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/mobile-alt-solid.svg') }}"
                                    alt="" width="50px">
                            </div>
                            <h4><a href="">Aplicativos Mobile (Android/IOS)</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/graduation-cap-solid.svg') }}"
                                    alt="" width="50px">
                            </div>
                            <h4><a href="">Plataforma EAD</a></h4>
                            <p>A Plataforma EAD é um Ambiente Virtual de Aprendizagem (AVA) na qual possibilita
                                organizar conteúdos de ensino e aprendizagem.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/shopping-cart-solid.svg') }}"
                                    alt="" width="50px">
                            </div>
                            <h4><a href="">E-Commerce</a></h4>
                            <p>Implantamos um E-commerce para o seu tipo de produto e cliente ideal, essa plataforma
                                possibilita a venda de produtos online.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/bullhorn-solid.svg') }}"
                                    alt="" width="50px">
                            </div>
                            <h4><a href="">Marketing Automation</a></h4>
                            <p>Com uma ferramenta de automação de marketing você pode integrar todos os formulários do
                                seu site.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <img src="{{ asset('themes/web/assets/img/icons/photo-video-solid.svg') }}"
                                    alt="" width="50px">
                            </div>
                            <h4><a href="">Social Media</a></h4>
                            <p>Desenvolvemos sua identidade visual com templates personalizados para alcançar clientes
                                ideais para o seu negócio.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Workflow</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Consultoria Gratuita</h4>
                            <p>Começamos com a consultoria gratuita para identificar logo de início quais são as
                                expectativas que você tem do negócio, mapear os pontos cegos e de melhoria, com base no
                                público alvo, produto e concorrência.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Estratégia</h4>
                            <p>A partir do que foi identificado na consultoria, traçamos um plano estratégico com
                                cronograma focado no objetivo do cliente, tais como: aumentar as vendas, gerar leads
                                qualificados, melhorar o posicionamento (branding) entre outros.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>Desenvolvimento</h4>
                            <p>Após ter definido na estratégia quais são os ativos, essa é a etapa “mão na massa” ou
                                “mão no código rs”, tornar real as aplicações e ferramentas para cumprir nosso objetivo
                                estratégico.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-shield"></i>
                            <h4>Marketing</h4>
                            <p>Quem não é visto não é lembrado, não adianta você ter o melhor produto se não tem ninguém
                                vendo-o. Nessa etapa, trabalhamos toda estratégia de comunicação, copy, anúncios, entre
                                outras atividades para levar sua mensagem ou produto pro mundo.</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('themes/web/assets/img/features.svg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Avaliações</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    A {{ config('config.site_name') }} é uma excelente agência, profissional e
                                    comunicativa, soube
                                    desenvolver todo o meu site de forma rápida e profissional. Com certeza vou fazer
                                    outros projetos com o mesmo.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Muita bacana essa agência, sempre bem atenciosos e prestativos, recomendo a todos,
                                    mais um serviço finalizado com eles, já é o segundo serviço e o padrão de qualidade
                                    mantém sempre alto, pretendo fazer mais!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fez um excelente trabalho, conseguiu converter a minha idéia em um bom sistema,
                                    também demonstrou profissionalismo e atenção para esclarecer todas a duvidas e
                                    sugerências que tive sobre o sistema.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-systems">Sistemas</li>
                            <li data-filter=".filter-app">Aplicativos</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-1.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-2.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-3.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-3.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-systems">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-4.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-4.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-5.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-5.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-6.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-6.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-systems">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-7.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-7.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-systems">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-8.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-8.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('themes/web/assets/img/portfolio/portfolio-9.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                            </div>
                            <div class="portfolio-links">
                                <a href="{{ asset('themes/web/assets/img/portfolio/portfolio-9.jpg') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contato</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Nosso Endereço</h3>
                            <p>Rua da Pennha, Nº 58, Sala 05, Araçariguama, SP</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Nosso E-mail</h3>
                            <p>contato@hoodprogrammer.com.br</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Nosso Contato</h3>
                            <p>(11) 91058-4136</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1106.9916439091317!2d-47.062166370776325!3d-23.439553468609258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf13e3a4990045%3A0x34312b92cb5e092a!2sR.%20da%20Penha%2C%2058%20-%20Centro%2C%20Ara%C3%A7ariguama%20-%20SP%2C%2018147-000!5e1!3m2!1spt-PT!2sbr!4v1675091177934!5m2!1spt-PT!2sbr"frameborder="0"
                            style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Seu nome">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Seu e-mail">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Assunto">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
                            </div>
                            <div class="text-center mt-3"><button type="submit">Enviar Mensagem</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
</x-themes.web._theme>
