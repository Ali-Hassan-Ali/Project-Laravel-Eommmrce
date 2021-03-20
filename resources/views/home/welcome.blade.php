@extends('layouts.home.app')

@section('content')

  
         <section class="section_best_sellers">
            <div class="container">
                <div class="sec_head">
                    <h3>البطاقات الأكثر مبيعاً</h3>
                    <p>أفضل البطاقات مبيعاً وضمان من مجال ستور</p>
                </div>
                <div class="owl-carousel" id="card-sellers-slider">
                    <div class="item">
                        <div class="box-card" style="background: linear-gradient(180deg, rgb(254 25 36) 0%, rgb(111 10 10) 100%); ">
                            <div class="title-card">
                                <h2>GOOGLE GM</h2>
                                <p>حمل ما تريد من ألعاب PC المدفوعة</p>
                                <span>المتجر السعودي</span>
                                <strong>1050 ر.س</strong>
                            </div>
                            <ul class="option-card">
                                <li><a><img src="{{ asset('home_file/images/surface.svg')}}" /><span>اشتري الان</span></a></li>
                                <li><a><img src="{{ asset('home_file/images/shopping-cart.svg')}}" /><span>أضف للسلة</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-card" style="background:linear-gradient(180deg, rgba(25,154,254,1) 0%, rgba(143,6,250,1) 100%); ">
                            <div class="title-card">
                                <h2>GOOGLE GM</h2>
                                <p>حمل ما تريد من ألعاب PC المدفوعة</p>
                                <span>المتجر السعودي</span>
                                <strong>1050 ر.س</strong>
                            </div>
                            <ul class="option-card">
                                <li><a><img src="{{ asset('home_file/images/surface.svg')}}" /><span>اشتري الان</span></a></li>
                                <li><a><img src="{{ asset('home_file/images/shopping-cart.svg')}}" /><span>أضف للسلة</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box-card" style="background:linear-gradient(180deg, rgb(124 254 25) 0%, rgb(12 111 10) 100%); ">
                            <div class="title-card">
                                <h2>GOOGLE GM</h2>
                                <p>حمل ما تريد من ألعاب PC المدفوعة</p>
                                <span>المتجر السعودي</span>
                                <strong>1050 ر.س</strong>
                            </div>
                            <ul class="option-card">
                                <li><a><img src="{{ asset('home_file/images/surface.sv')}}g" /><span>اشتري الان</span></a></li>
                                <li><a><img src="{{ asset('home_file/images/shopping-cart.svg')}}" /><span>أضف للسلة</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_best_sellers-->
        
        <section class="section_about">
            <div class="flex-about">
                <div class="img-about">
                    <img src="{{ asset('home_file/images/bg-about.svg')}}" alt="" />
                </div>
                <div class="title-about">
                    <div class="head-about">
                        <p>عن الموقع</p>
                    </div>
                    <div class="video-about">
                        <a data-fancybox="images" href="https://www.youtube.com/watch?v=rkpeMZQfvVk">
                            <div class="play-btn"><i class="fa fa-play"></i></div> 
                            <img class="img-fluid video-pic" src="{{ asset('home_file/images/about.png')}}" alt="">
                         </a>
                    </div>
                    <div class="shape-about"></div>
                </div>
            </div>
        </section>
        <!--section_about-->
        
        <section class="section_what_site">
            <div class="container">
                <div class="sec_head">
                    <h3>ما هو موقع مجال ستور</h3>
                    <p>شرح بسيط كيف تقوم بالشراء في موقع ماي ستور</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-callouts">
                            <figure>
                                <img src="{{ asset('home_file/images/credit-card.png')}}" alt="" />
                            </figure>
                            <div class="sec-title">
                                <h5>اختر البطاقة</h5>
                                <p>تستطيع البحث في جميع البطاقات المدعومة في مجال ستور </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-callouts">
                            <figure>
                                <img src="{{ asset('home_file/images/shopping-cart.png')}}" alt="" />
                            </figure>
                            <div class="sec-title">
                                <h5>اختر دولة المتجر</h5>
                                <p>تختار دولة متجر البطاقة التي ترغب بشراءها من عدة دول متوفرة للبطاقة</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-callouts">
                            <figure>
                                <img src="{{ asset('home_file/images/coin.png')}}" alt="" />
                            </figure>
                            <div class="sec-title">
                                <h5>اختر الفئة السعرية</h5>
                                <p>تختار فئة البطاقة التي ترغب بشرائها من عدة فئات متوفرة وتقوم بالدفع</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-callouts">
                            <figure>
                                <img src="{{ asset('home_file/images/qr-code.png')}}" alt="" />
                            </figure>
                            <div class="sec-title">
                                <h5>استلم كود البطاقة</h5>
                                <p>ثم يصل كود البطاقة التي قمت بشرائها على الإيميل والهاتف</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_what_site-->
        
        <section class="section_subscriber_ratings">
            <div class="container">
                <div class="sec_head">
                    <h3>تقييمات المشتركين</h3>
                    <p>عرض بعض مراجعات الزبائن في التعامل والشراء من مجال ستور</p>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="owl-carousel" id="slider-subscriber-ratings">
                            <div class="item">
                                <div class="box-rate">
                                    <figure>
                                        <img src="{{ asset('home_file/images/pro.jpg')}}" alt="" />
                                    </figure>
                                    <div class="sec-title">
                                        <h5>Hind Shaban</h5>
                                        <p>من أجمل المواقع لشراء البطاقات الاكترونية , وامان في الشراء</p>
                                    </div>
                                    <div class="rate-line">
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="box-rate">
                                    <figure>
                                        <img src="{{ asset('home_file/images/pro1.png')}}" alt="" />
                                    </figure>
                                    <div class="sec-title">
                                        <h5>Salah Khattab</h5>
                                        <p>من أجمل المواقع لشراء البطاقات الاكترونية , وامان في الشراء</p>
                                    </div>
                                    <div class="rate-line">
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star checked"></span>
                                        <span class="zmdi zmdi-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-subscriber-ratings">
                            <img src="{{ asset('home_file/images/shape-rate.svg')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section_subscriber_ratings-->
        
        <section class="section_download_app">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1366" height="518.657" viewBox="0 0 1366 518.657">
              <defs>
                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                  <stop offset="0" stop-color="#199afe"/>
                  <stop offset="1" stop-color="#8f06fa"/>
                </linearGradient>
              </defs>
              <path id="Path_778" data-name="Path 778" d="M0,9.855S341.87-55.777,683.37-55.777,1366,9.855,1366,9.855V462.88S1024.87,398.9,683.37,398.9,0,462.88,0,462.88Z" transform="translate(0 55.777)" fill="url(#linear-gradient)"/>
            </svg>
            <div class="container">
                <div class="content-download">
                    <div class="img-download">
                        <img src="{{ asset('home_file/images/img-dwonload-app.svg')}}" alt="" />
                    </div>
                    <div class="title-download">
                        <h2>حمل تطبيق مجال ستور</h2>
                        <p>تسطيع تحميل تطبيق ماي هوم على كلا النظامين للأندرويد والايفون وشراء المنتجات والبطاقات بشكل سريع ومن جوالك مباشرة</p>
                        <span>حمل التطبيق الآن وتمتع بخدماتنا</span>
                        <ul>
                            <li><a href=""><img src="{{ asset('home_file/images/google-play.svg')}}" /></a></li>
                            <li><a href=""><img src="{{ asset('home_file/images/app-store.svg')}}" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--section_download_app-->

@endsection
