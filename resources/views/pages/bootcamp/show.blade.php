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
                                    FLutter Mobile Development
                                </h1>
                            </div>
                            <p>
                                Kelas pelatihan Flutter Mobile Development dirancang untuk memberikan pemahaman yang
                                komprehensif tentang pengembangan aplikasi cross-platform menggunakan Flutter. Dalam kelas
                                ini, Anda akan belajar cara membuat aplikasi mobile yang menarik dan responsif dengan
                                menggunakan widget kustom dari Flutter. Anda juga akan mempelajari konsep dasar dari bahasa
                                pemrograman Dart, yang menjadi bahasa utama dalam pengembangan aplikasi Flutter. Selain itu,
                                kelas ini juga akan membahas tentang penggunaan API dan integrasi dengan layanan cloud untuk
                                aplikasi mobile. Setelah menyelesaikan kelas ini, Anda akan memiliki keahlian yang cukup
                                untuk membuat aplikasi mobile cross-platform yang modern dan inovatif. Kelas ini cocok untuk
                                pemula dan juga bagi mereka yang sudah memiliki pengalaman dalam pengembangan aplikasi
                                mobile.
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
                        Flutter merupakan sebuah framework open-source untuk membangun aplikasi dengan antarmuka pengguna
                        (UI) yang menarik dan responsif. Flutter dikembangkan oleh Google dan dirilis pada tahun 2017
                        sebagai alternatif untuk pengembangan aplikasi mobile yang lebih cepat dan efisien. Dengan
                        menggunakan bahasa pemrograman Dart, Flutter memungkinkan pengembang untuk membuat aplikasi
                        cross-platform hanya dengan satu kode sumber yang sama, sehingga dapat meningkatkan produktivitas
                        dan mengurangi biaya pengembangan.
                    </p>
                    <p>
                        Kelebihan utama dari Flutter adalah kemampuan cross-platform-nya yang memungkinkan pengembang untuk
                        membuat aplikasi untuk platform Android, iOS, dan web hanya dengan satu kode sumber. Selain itu,
                        Flutter juga dilengkapi dengan widget kustom yang memungkinkan pengembang untuk membuat antarmuka
                        pengguna yang menarik dan responsif. Seluruh aplikasi yang dibangun dengan Flutter juga menggunakan
                        bahasa pemrograman Dart yang relatif mudah dipelajari, sehingga memudahkan pengembang dalam
                        menguasai teknologi ini. Dengan demikian, Flutter menjadi pilihan populer bagi pengembang aplikasi
                        yang ingin menghemat waktu dan biaya pengembangan aplikasi cross-platform.
                    </p>
                </div>

                <div class="info-bootcamp">
                    <ul class="info-list">
                        <li>
                            <div class="info-title">Registrasi</div>
                            <div class="desc">20 April - 4 Mei 2023</div>
                        </li>
                        <li>
                            <div class="info-title">Kelas dimulai</div>
                            <div class="desc">6 Mei 2023</div>
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
                                <img src="{{ asset('assets/images/visual-studio-code.png') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>Visual Studio Code</li>
                                        <li>
                                            <a href="https://code.visualstudio.com/download"> <button type="button">
                                                    <i class="bi bi-download"></i>
                                                </button></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Copde Editor</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/flutter.jpg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>Flutter SDK</li>
                                        <li>
                                            <a
                                                href="https://flutter.dev/?gclid=CjwKCAjwov6hBhBsEiwAvrvN6PH3KZUUXbc3AbyacxPYBKMtUFAiHtEdyIFYSZOv0sjDEndS62ZFrBoCKdoQAvD_BwE&gclsrc=aw.ds">
                                                <button type="button">
                                                    <i class="bi bi-download"></i>
                                                </button></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Bahasa pemrogramman/Framework</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-tools">
                            <div class="card-img">
                                <img src="{{ asset('assets/images/figma.svg') }}" alt="" />
                            </div>
                            <div class="card-desc">
                                <div class="title-desc">
                                    <ul>
                                        <li>Figma</li>
                                        <li>
                                            <a href="https://www.figma.com/downloads/"> <button type="button">
                                                    <i class="bi bi-download"></i>
                                                </button></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="desc">Alat Desain</div>
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
                    <a href="https://drive.google.com/file/d/1krX79HGJ0NPXOt1F19W37MusK3SR77-D/view?usp=share_link"
                        class="text-decoration-none">
                        <div class="card">
                            <div style="background-color: #005F57" class="br-2 text-white card-body">
                                Download Silabus Kelas</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="true"
                                    aria-controls="flush-collapseOne">
                                    <i class="number">1</i>
                                    <i class="text">Memulai pemrograman dengan DART.</i>
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
                                                    Pengenalan Dart
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Fundamentral Dart
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    OOP
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Dart Futures
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
                                    <i class="text">Pengenalan Flutter.</i>
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
                                                    Apa itu Flutter
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Instalasi Flutter
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Menjalankan Project Flutter
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
                                    <i class="text">Pengenalan Widget.</i>
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
                                                    Stateless & Statefull
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Scaffold
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Container
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Padding & Margin
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Center
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Image
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Button
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    ListView
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Navigation
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
                                    data-bs-target="#flush-collapseFour" aria-expanded="true"
                                    aria-controls="flush-collapseThree">
                                    <i class="number">4</i>
                                    <i class="text">State Management.</i>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Pengenalan State Management
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Pengenalan Provider
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    Latihan State Management
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
                                    data-bs-target="#flush-collapseFive" aria-expanded="true"
                                    aria-controls="flush-collapseThree">
                                    <i class="number">5</i>
                                    <i class="text">Networking.</i>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    JSON Parsing
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    FutureBuilder
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    HTTP Package
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
                                    data-bs-target="#flush-collapseSix" aria-expanded="true"
                                    aria-controls="flush-collapseThree">
                                    <i class="number">6</i>
                                    <i class="text">Studi Kasus News APP.</i>
                                </button>
                            </h2>
                            {{-- <div id="flush-collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    JSON Parsing
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    FutureBuilder
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    HTTP Package
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="true"
                                    aria-controls="flush-collapseThree">
                                    <i class="number">7</i>
                                    <i class="text">Final Project.</i>
                                </button>
                            </h2>
                            {{-- <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-detail">
                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    JSON Parsing
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    FutureBuilder
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </li>
                                                <li class="text">
                                                    HTTP Package
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="review">
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
    </section> --}}

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
                            <span>Kak</span> Ahmad Fathanah M. Adil
                        </div>
                        <div class="mentor-job">Mobile Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mentor">
        <div class="container">
            <div class="title">
                <h4>Masih ada pertanyaan?</h4>
                <h1>Yuk tanyakan langsung</h1>
            </div>

            <div class="container-mentor">
                <div class="mentor-wrapper">

                    <div class="card-mentor">
                        <div class="mentor-name">

                            <a href="#">
                                <i class="bi bi-whatsapp"></i>
                                <!-- <img src="/public/lagiNgoding/assets/images/WhatsApp-Logo.png" alt=""> -->

                            </a>
                            <span>Tanyakan via Whatsapp!
                        </div>
                        <a href="https://wa.me/+6285175194559" class="text-decoration-none">
                            <div class="mentor-job text-success "><strong>085175194559</strong></div>
                        </a>
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
                                Flutter Mobile Development
                            </div>
                            <div class="bootcamp-desc">
                                Ikuti bootcamp berkualitas untuk mengasah
                                skill dan membangun portofolio
                                <br>
                                <strong>Diskon 25% untuk 5 orang pertama</strong>
                            </div>
                            <div class="bootcamp-price">
                                <ul>
                                    <li class="normal-price">Rp2.000.000</li>

                                    <li class="disc-price">Rp1.500.000</li>
                                </ul>
                            </div>
                            <div class="bootcamp-btn">
                                <a href="https://lynk.id/lagingoding/dNvEOJx"> <button type="button">
                                        Daftar Sekarang
                                    </button></a>
                            </div>
                            <div class="bootcamp-btn">
                                <a href="https://www.tokopedia.com/lagingoding/offline-class-flutter-mobile-development">
                                    <button type="button" class=" bg-warning">
                                        Pilihan Cicilan
                                    </button></a>
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
                        Bootcamp di lagingoding disusun dengan Kurikulum sesuai standar industri, Belajar intensif secara
                        offline, Mentor profesional, dan garansi 100% uang kembali jika setelah kursus dan kamu masih belum
                        bisa.
                    </p>
                </div>
                <div class="btn-cta">
                    <a href="https://lynk.id/lagingoding/dNvEOJx"> <button type="button">Daftar Bootcamp</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection
