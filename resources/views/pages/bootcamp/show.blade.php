@extends('layouts.app')

@section('content')
    <section id="heroDetailBootcamp">
        <div class="container">
            <div class="hero-bg">
                <div class="row d-flex align-items-center">
                    <div class="col-md-8 order-1">
                        <div class="hero-text">
                            <div class="title">
                                <h4>Mobile Bootcamp</h4>
                                <h1>
                                    Lorem Ipsum is simply dummy text of
                                    printing
                                </h1>
                            </div>
                            <p>
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy
                                text ever since the 1500s.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 order-md-1">
                        <div class="hero-img">
                            <img src="{{ asset('assets/images/example-card-image.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <!-- <ul>
                                                                                                                                <li class="hero-text bg-warning">
                                                                                                                                  <div class="title">
                                                                                                                                    <h4>Mobile Bootcamp</h4>
                                                                                                                                    <h1>Lorem Ipsum is simply dummy text of printing</h1>
                                                                                                                                  </div>
                                                                                                                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                                                                                                </li>

                                                                                                                                <li class="hero-img bg-info">
                                                                                                                                  <img src="/public/lagiNgoding/assets/images/example-card-image.png" alt="">
                                                                                                                                </li>
                                                                                                                              </ul> -->
            </div>
        </div>
    </section>

    <section id="descBootcamp">
        <div class="container">
            <div class="title">
                <!-- <h4>Kelas Terbaru</h4> -->
                <h1>Mengapa Penting?</h1>
            </div>

            <div class="container-desc">
                <img src="{{ asset('assets/images/example-bg.jpg') }}" alt="" />

                <div class="text-wrapper">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the
                        1500s.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since
                        the 1500s.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since
                        the 1500s.
                    </p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the
                        1500s.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since
                        the 1500s.Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since
                        the 1500s.
                    </p>
                </div>

                <div class="info-bootcamp">
                    <ul class="info-list">
                        <li>
                            <div class="info-title">Registrasi</div>
                            <div class="desc">20 April - 15 Mei 2023</div>
                        </li>
                        <li>
                            <div class="info-title">Registrasi</div>
                            <div class="desc">20 April - 15 Mei 2023</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="tools">
        <div class="container">
            <div class="title">
                <h4>Tools</h4>
                <h1>yang digunakan</h1>
            </div>

            <div class="container-tools">
                <ul class="tools-list">
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/LinkedIn-Logo.png') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/example1.png') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHssa asopP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/PHP-logo.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>PHP</li>
                                        <li>
                                            <button type="button">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="learn">
        <div class="container">
            <div class="row learn-wrapper">
                <div class="col-md-4">
                    <div class="title">
                        <h4>Materi</h4>
                        <h1>Apa saja yang dipelajari?</h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    <i class="number">1</i>
                                    <i class="text">Perkenalan dan Setup.</i>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Perkenalan
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Setup Library
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Setup Architecture
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="true"
                                    aria-controls="flush-collapseTwo">
                                    <i class="number">2</i>
                                    <i class="text">Perkenalan dan Setup.</i>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Perkenalan
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Setup Library
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Setup Architecture
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="true"
                                    aria-controls="flush-collapseThree">
                                    <i class="number">3</i>
                                    <i class="text">Perkenalan dan Setup.</i>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Perkenalan
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Setup Library
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Setup Architecture
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="review">
        <div class="container">
            <div class="title">
                <h4>Review</h4>
                <h1>Apa kata Alumni</h1>
            </div>

            <div class="container-review">
                <div class="review-wrapper snaps-inline">
                    <div class="card-review">
                        <div class="reviewer-name">Siti Nurhalisa</div>
                        <div class="reviewer-star">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="reviewer-text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </div>
                    </div>

                    <div class="card-review">
                        <div class="reviewer-name">Siti Nurhalisa</div>
                        <div class="reviewer-star">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="reviewer-text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </div>
                    </div>

                    <div class="card-review">
                        <div class="reviewer-name">Siti Nurhalisa</div>
                        <div class="reviewer-star">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="reviewer-text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </div>
                    </div>

                    <div class="card-review">
                        <div class="reviewer-name">Siti Nurhalisa</div>
                        <div class="reviewer-star">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="reviewer-text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </div>
                    </div>

                    <div class="card-review">
                        <div class="reviewer-name">Siti Nurhalisa</div>
                        <div class="reviewer-star">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="reviewer-text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </div>
                    </div>

                    <div class="card-review">
                        <div class="reviewer-name">Siti Nurhalisa</div>
                        <div class="reviewer-star">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/star.png') }}" alt="" />
                                </li>
                            </ul>
                        </div>
                        <div class="reviewer-text">
                            Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mentor">
        <div class="container">
            <div class="title">
                <h4>Mentor</h4>
                <h1>Kenalan Yuk</h1>
            </div>

            <div class="container-mentor">
                <div class="mentor-wrapper">
                    <div class="card-mentor">
                        <div class="mentor-image">
                            <img src="{{ asset('assets/images/profil.png') }}" alt="" />
                        </div>
                        <div class="mentor-name">
                            <span>Kak</span> Jane Doe
                        </div>
                        <div class="mentor-job">Flutter Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bootcampCard">
        <div class="container">
            <div class="title">
                <h4>Daftar</h4>
                <h1>Bootcamp</h1>
            </div>

            <div class="container-bootcamp ">
                <div class="bootcamp-wrapper">
                    <div class="card-bootcamp">
                        <div class="img-card">
                            <div class="bootcamp-img">
                                <img src="{{ asset('assets/images/example1.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="bootcamp-name">
                                Flutter Bootcamp BootcampBootcamp
                                Bootcampamp Bootcamp Bootcamp
                            </div>
                            <div class="bootcamp-desc">
                                Ikuti bootcamp berkualitas untuk mengasah
                                skill dan membangun portofolio
                            </div>
                            <div class="bootcamp-price">
                                <ul>
                                    <li class="normal-price">Rp 240,000</li>
                                    <li class="disc-price">Rp 240,000</li>
                                </ul>
                            </div>
                            <div class="bootcamp-btn">
                                <button type="button">
                                    Daftar Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ctaBadge">
        <div class="container">
            <div class="cta-bg">
                <img src="{{ asset('assets/images/lagingoding-logoWhite.png') }}" alt="" />
                <div class="cta-text">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        <span>typesetting industry. Lorem Ipsum has been the
                        </span>
                        <span>industry's standard dummy text ever since the
                            1500s.</span>
                    </p>
                </div>
                <div class="btn-cta">
                    <button type="button">Daftar Bootcamp</button>
                </div>
            </div>
        </div>
    </section>
@endsection
