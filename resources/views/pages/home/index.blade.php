@extends('layouts.test')

@section('content')
    <section id="hero">
        <div class="container">
            <div class="hero-bg">
                <ul class="hero-content-list">
                    <li class="hero-text">
                        <h1 class="hero">Sudah siap belajar <span> Mobile Development?</span></h1>
                        <p>LagiNgoding sedang buka pendaftaran BATCH 1 <span>Bootcamp Mobile Development.</span></p>

                        <div class="btn-hero">
                            <button type="button">Ayo Daftar</button>
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
                            <img src="{{ asset('assets/images/example2.png') }}" alt="">
                        </div>

                        <div class="card-content">
                            <div class="tags">
                                <button type="button">Bootcamp</button>
                            </div>
                            <div class="name">
                                <button type="button">Lorem Ipdsjfnsjd dnfkjsdn sum is simply dummy text of
                                    printing</button>
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
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to style each element. These classes control the overall appearance, as well
                                            as the showing and hiding via CSS transitions. You can modify any of this
                                            with custom CSS or overriding our default variables. It's also worth noting
                                            that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to style each element. These classes control the overall appearance, as well
                                            as the showing and hiding via CSS transitions. You can modify any of this
                                            with custom CSS or overriding our default variables. It's also worth noting
                                            that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to style each element. These classes control the overall appearance, as well
                                            as the showing and hiding via CSS transitions. You can modify any of this
                                            with custom CSS or overriding our default variables. It's also worth noting
                                            that just about any HTML can go within the <code>.accordion-body</code>,
                                            though the transition does limit overflow.
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
                                        Accordion Item #4
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseFive">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseSix">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until the collapse plugin adds the appropriate classes that we use to
                                        style each element. These classes control the overall appearance, as well as the
                                        showing and hiding via CSS transitions. You can modify any of this with custom
                                        CSS or overriding our default variables. It's also worth noting that just about
                                        any HTML can go within the <code>.accordion-body</code>, though the transition
                                        does limit overflow.
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
                <img src="/public/lagiNgoding/assets/images/lagingoding-logoWhite.png" alt="">
                <div class="cta-text">
                    <p>Lorem Ipsum is simply dummy text of the printing and
                        <span>typesetting industry. Lorem Ipsum has been the </span>
                        <span>industry's standard dummy text ever since the 1500s.</span>
                    </p>

                </div>
                <div class="btn-cta">
                    <button type="button">Daftar Bootcamp</button>
                </div>

            </div>
        </div>
    </section>
@endsection
