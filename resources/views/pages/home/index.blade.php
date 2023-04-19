@extends('layouts.app')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="hero-bg">
                <ul class="hero-content-list">
                    <li class="hero-text">
                        <h1 class="hero">Sudah siap belajar <span> Mobile Development?</span></h1>
                        <p>LagiNgoding sedang buka pendaftaran BATCH 1 <span>Bootcamp Mobile Development.</span></p>

                        <div class="btn-hero">
                            <button type="button"><a href="{{ route('bootcamp.show') }}"
                                    class="text-decoration-none text-success">Ayo
                                    Daftar</a></button>
                        </div>
                    </li>

                    <li class="hero-img">
                        <img src="{{ asset('assets/images/hero-img.png') }}" alt="">
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <section id="recentClass">
        <div class="container">
            <div class="title">
                <h4>Kelas Terbaru</h4>
                <h1>di LagiNgoding</h1>
            </div>

            <!-- NOT SLIDER -->
            <div class="recent-class-wrapper">
                <ul class="manual-layout">

                    <li class="card-new-dg">
                        <div class="card-img">
                            <a href="{{ route('bootcamp.show') }}"> <img src="{{ asset('assets/images/example2.png') }}"
                                    alt=""></a>
                        </div>

                        <div class="card-content">
                            <div class="tags">
                                <button type="button">Bootcamp</button>
                            </div>
                            <div class="name">
                                <a href="{{ route('bootcamp.show') }}"> <button type="button">Flutter Mobile
                                        Development</button></a>
                            </div>
                            <div class="remove-margin">
                                <hr>
                            </div>
                            <div class="price">
                                <ul class="price-wrap">
                                    <li class="normal-price">Rp2.000.000</li>
                                    <li class="disc-price">Rp1.500.000</li>
                                </ul>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>


            <!-- EXAMPLE CARD BUT STILL BROKEN -->
            <!-- <div class="container-slider">
                                                                                                                                                                                                                                          
                                                                                                                                                                                                                                          <div class="slider-wrapper">

                                                                                                                                                                                                                                            <!-- <div class="slide-content">
                                                                                                                                                                                                                                              <div class="card-wrapper swiper-wrapper">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <div class="swiper-slide">
                                                                                                                                                                                                                                                  <div class="card-new-dg">
                                                                                                                                                                                                                                                    <div class="card-img">
                                                                                                                                                                                                                                                      <img src="/public/lagiNgoding/assets/images/example2.png" alt="">
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                    <div class="card-content">
                                                                                                                                                                                                                                                      <div class="tags">
                                                                                                                                                                                                                                                        <button type="button">Bootcamp</button>
                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                      <div class="name">
                                                                                                                                                                                                                                                        <button type="button">Lorem Ipdsjfnsjd  dnfkjsdn sum is simply dummy text of printing</button>
                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                      <div class="remove-margin">
                                                                                                                                                                                                                                                        <hr>
                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                      <div class="price">
                                                                                                                                                                                                                                                        <ul class="price-wrap">
                                                                                                                                                                                                                                                          <li class="normal-price">Rp 240,000</li>
                                                                                                                                                                                                                                                          <li class="disc-price">Rp 100,000</li>
                                                                                                                                                                                                                                                        </ul>
                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>


                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                              <div class="swiper-button-next"></div>
                                                                                                                                                                                                                                              <div class="swiper-button-prev"></div>
                                                                                                                                                                                                                                              <div class="swiper-pagination"></div>
                                                                                                                                                                                                                                  
                                                                                                                                                                                                                                            </div> -->

            <!-- <div class="swiper-slide">
                                                                                                                                                                                                                                              <div class="card-recent-class">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <img src="/public/lagiNgoding/assets/images/example-card-image.png" alt="">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <div class="desc-card-class">
                                                                                                                                                                                                                                                  <div class="tags">Bootcamp</div>
                                                                                                                                                                                                                                                  <hr>
                                                                                                                                                                                                                                                  <button type="button">Lorem Ipsum is simply dummy text of printing</button>
                                                                                                                                                                                                                                                  <hr>
                                                                                                                                                                                                                                                  <div class="price">
                                                                                                                                                                                                                                                    <ul>
                                                                                                                                                                                                                                                      <li class="normal-price">Rp 240,000</li>
                                                                                                                                                                                                                                                      <li class="disc-price">Rp 100,000</li>
                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                            </div> -->

            <!-- Card old design -->
            <!-- <div class="swiper-slide">
                                                                                                                                                                                                                                              <div class="card-recent-class">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <div class="desc-card-class">
                                                                                                                                                                                                                                                  <div class="tags">Bootcamp</div>
                                                                                                                                                                                                                                                  <hr>
                                                                                                                                                                                                                                                  <button type="button">Lorem Ipsum is simply dummy text of printing</button>
                                                                                                                                                                                                                                                  <hr>
                                                                                                                                                                                                                                                  <div class="price">
                                                                                                                                                                                                                                                    <ul>
                                                                                                                                                                                                                                                      <li class="normal-price">Rp 240,000</li>
                                                                                                                                                                                                                                                      <li class="disc-price">Rp 100,000</li>
                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <div class="swiper-slide">
                                                                                                                                                                                                                                              <div class="card-recent-class">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <img src="/public/lagiNgoding/assets/images/example-bg.jpg" alt="">
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                <div class="desc-card-class">
                                                                                                                                                                                                                                                  <div class="tags">Bootcamp</div>
                                                                                                                                                                                                                                                  <hr>
                                                                                                                                                                                                                                                  <button type="button">Lorem Ipsum is simply dummy text of printing</button>
                                                                                                                                                                                                                                                  <hr>
                                                                                                                                                                                                                                                  <div class="price">
                                                                                                                                                                                                                                                    <ul>
                                                                                                                                                                                                                                                      <li class="normal-price">Rp 240,000</li>
                                                                                                                                                                                                                                                      <li class="disc-price">Rp 100,000</li>
                                                                                                                                                                                                                                                    </ul>
                                                                                                                                                                                                                                                  </div>
                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                              </div>

                                                                                                                                                                                                                                            </div> -->
        </div>
        </div>
        </div>
    </section>

    <section id="faq">
        <div class="container">
            <div class="title">
                <h4>Tanya LagiNgoding</h4>
                <h1>Frequently Asked Questions</h1>
            </div>

            <div class="container-faq container-sm">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            Kapan pembelajaran flutter developer dimulai?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            Kursus flutter akan dilaksanakan selama 1 (satu) bulan sebanyak 8 (delapan) kali
                                            pertemuan yang akan dimulai pada 6 Mei 2023
                                            jadwal : Sabtu dan minggu (16:00 - 19:00 WITA)

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            Dimana kelas flutter developer berlangsung? Apakah online atau offline?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Kelas flutter developer akan dilaksanakan secara tatap muka (offline) bertempat
                                            di Jl. Telkomas Raya (Ruko Dallah Mart 88, Lantai 2)
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Apakah ada biaya pendaftarannya?
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            Terdapat biaya pendaftaran untuk kelas flutter developer, kamu bisa menemukan
                                            kupon diskon melalui info dari instagram atau website lagingoding
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFour">
                                        Bagaimana metode pembayarannya?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Pembayaran dapat dilakukan melalui website www.lagingoding.com
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFive">
                                        Apakah pembayaran bisa dicicil?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Bisa! kamu bias menggunakan layanan paylater lain seperti Gopaylater, BRI Ceria,
                                        Kredivo, Home Credit Indonesia, Indodana untuk melakukan proses cicil.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseSix">
                                        Apa saja manfaat mengikuti kelas di Lagingoding?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Adapun beberapa manfaat yang akan didapatkan, yaitu : Modul pembelajaran sesuai
                                        kebutuhan industri,Sertifikat, Kaos, Akses internet, Ruang belajar yang nyaman,
                                        Mentor suportif

                                    </div>
                                </div>
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
                <img src="{{ asset('assets/images/lagingoding-logoWhite.png') }}" alt="">
                <div class="cta-text">
                    <p>Bootcamp di lagingoding disusun dengan Kurikulum sesuai standar industri, Belajar intensif secara
                        offline, Mentor profesional, dan garansi 100% uang kembali jika setelah kursus dan kamu masih belum
                        bisa.
                    </p>

                </div>
                <div class="btn-cta">
                    <a href="{{ route('bootcamp.show') }}"> <button type="button">Daftar Bootcamp</button></a>
                </div>

            </div>
        </div>
    </section>
@endsection
