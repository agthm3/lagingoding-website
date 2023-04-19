@extends('layouts.app')

@section('content')
    <section id="hero-bootcamp">
        <div class="container">
            <div class="title">
                <h4>Bootcamp</h4>
                <h1>LagiNgoding</h1>
            </div>

            <div class="desc container">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. </p>
            </div>
        </div>
    </section>


    <section id="card-bootcamp">
        <div class="container">
            <div class="container-card">
                <ul class="card-wrapper">

                    <li>
                        <div class="card-bootcamp">
                            <img src="{{ asset('assets/images/example1.png') }} " alt="">

                            <div class="tags-wrapper">
                                <div class="tags-bootcamp">
                                    <button type="button">Beginner</button>
                                    <button type="button">Projects</button>
                                </div>
                            </div>

                            <div class="desc-bootcamp">
                                <a href="{{ route('bootcamp.show') }}">MOBILE Development</a>
                                <button type="button" class="bootcamp-title">Fluuter Mobile Developer</button>

                                <div class="details">
                                    <div class="price">
                                        <ul class="price-wrapper">
                                            <li class="normal-price">Rp2.300.000</li>
                                            <li class="disc-price">Rp1.500.000</li>
                                        </ul>
                                    </div>

                                    <div class="btn-detail">
                                        <button type="button"
                                            onclick="window.location.href = '{{ route('bootcamp.show') }}'">
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>

                <!-- <div class="row">
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                              
                                                                              <div class="row">
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                  <div class="card-bootcamp">
                                                                                      <img src="/public/lagiNgoding/assets/images/example1.png" alt="">
                                                                        
                                                                                      <div class="tags-wrapper">
                                                                                        <div class="tags-bootcamp">
                                                                                          <button type="button">Beginner</button>
                                                                                          <button type="button">Projects</button>
                                                                                        </div>
                                                                                      </div>
                                                                        
                                                                                      <div class="desc-bootcamp">
                                                                                        <a href="#">MOBILE Development</a>
                                                                                        <button type="button" class="bootcamp-title">Lorem Ipsum is simply dummy text of printing</button>
                                                                        
                                                                                        <div class="details">
                                                                                          <div class="price">
                                                                                            <ul>
                                                                                              <li class="normal-price">Rp 240,000</li>
                                                                                              <li class="disc-price">Rp 100,000</li>
                                                                                            </ul>
                                                                                          </div>
                                                                        
                                                                                          <div class="btn-detail">
                                                                                            <button type="button">
                                                                                              <i class="bi bi-arrow-right-circle-fill"></i>
                                                                                            </button>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                              </div> -->

            </div>
        </div>
    </section>
@endsection
