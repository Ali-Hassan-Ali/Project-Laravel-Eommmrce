        <footer id="footer" style="padding-top: 100px">
            <div class="top-ft">
                <div class="container">
                    <ul class="menu-ft">
                        <li><a href="policy.html">سياسة الاستخدام</a></li>
                        <li><a href="privacy.html">سياسة الخصوصية</a></li>
                        <li><a href="recovery.html">سياسة الاسترجاع</a></li>
                        <li><a href="faq.html">الأسئلة الشائعة</a></li>
                        <li><a href="about.html">من نحن</a></li>
                        <li><a href="contact.html">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="middle-ft">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="log-soci">
                                <div class="logo-ft">
                                    <figure><img src="{{ asset('home_file/images/logo.svg')}}" alt="" /></figure>
                                    <p>مجال ستور يضمن لزبائنها أفضل الأسعار, نحن نضمن لك أنك  لن تجد عرضا أفضل من العروض الموجودة على موقعنا.</p>
                                </div>
                                <ul class="social-media">
                                    <li class="twitter"><a href=""><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li class="facebook"><a href=""><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li class="instagram"><a href=""><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="youtube"><a href=""><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-contact">
                                <li><img src="{{ asset('home_file/images/phone-call.svg')}}" /><p>(+800) 123 456 7890</p></li>
                                <li><img src="{{ asset('home_file/images/email.svg')}}" /><p>manager@shop.com</p></li>
                                <li><img src="{{ asset('home_file/images/pin.svg')}}" /><p>Location store</p></li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="payment">
                                <p>وسائل الدفع</p>
                                <ul>
                                    <li><img src="{{ asset('home_file/images/master_card.png')}}" /></li>
                                    <li><img src="{{ asset('home_file/images/paypal.png')}}" /></li>
                                    <li><img src="{{ asset('home_file/images/visa.png')}}" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-ft">
                <div class="container">
                    <div class="copyright">
                        <p>Copyright © 2020 , MJAL STORE</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer-->
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="zmdi zmdi-close"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">تسجيل الدخول</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">إنشاء حساب</a>
                            </li>
                        </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <form action="{{ route('login') }}" method="post"  class="form-reg">

                                        {{ csrf_field() }}
                                        {{ method_field('post') }}

                                        <div class="form-group">
                                            <label><i class="fa fa-envelope"></i> البريد الالكتروني</label>
                                            <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" />
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-lock"></i>كلمة المرور</label>
                                            <input type="password" name="password" class="form-control" placeholder="كلمة المرور" />
                                            <a class="forgot-pass">هل نسيت كلمة المرور؟</a>
                                        </div> 
                                        <div class="form-group text-center">
                                            <button class="btn-shop"><span>تسجيل الدخول</span></button>
                                        </div>
                                        <div class="nt-account text-center">
                                            <p>لا تملك حساب؟ <a>أنشئ حسابك الآن!</a></p>
                                        </div>
                                        <b class="or-shape">أو</b>
                                        <ul class="list-social">
                                            <li><a><i class="fa fa-google"></i></a></li>
                                            <li><a><i class="fa fa-facebook"></i></a></li>
                                            <li><a><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

                                    <form action="{{ route('register') }}" method="post">

                                        {{ csrf_field() }}
                                        {{ method_field('post') }}

                                        <div class="form-group">
                                            <label><i class="fa fa-user"></i> الاسم كاملا</label>
                                            <input type="text" name="name" class="form-control" placeholder="الاسم كاملا" />
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-envelope"></i> البريد الالكتروني</label>
                                            <input type="email" name="email" class="form-control" placeholder="البريد الالكتروني" />
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-lock"></i>كلمة المرور</label>
                                            <input type="password" name="password" class="form-control" placeholder="كلمة المرور" />
                                        </div>
                                        <div class="form-group">
                                            <label><i class="fa fa-lock"></i>كلمة المرور</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="كلمة المرور" />
                                        </div> 
                                        <div class="form-group text-center">
                                            <button class="btn-shop"><span>إنشاء حساب</span></button>
                                        </div>
                                        <div class="nt-account text-center">
                                            <p>هل لديك حساب بالفعل؟ <a>تسجيل دخول</a></p>
                                        </div>
                                        <b class="or-shape">أو</b>
                                        <ul class="list-social">
                                            <li><a><i class="fa fa-google"></i></a></li>
                                            <li><a><i class="fa fa-facebook"></i></a></li>
                                            <li><a><i class="fa fa-twitter"></i></a></li>
                                        </ul>

                                    </form>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>