@extends('layouts.home.app')

@section('content')


    
    <div class="main-wrapper">
    
       <section class="section_profile">
            <div class="container">
                <div class="sec_head text-center">
                    <h2>معلومات الحساب</h2>
                </div>
                <div class="content-profile">
                    <form class="form-profile" action="{{ route('profiles.update', $users->id ) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="main-data">
                            
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' name="image" value="{{ auth()->user()->image_path }}" id="imageUpload"  accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    <div id="imagePreview"  style="background-image: url('{{ auth()->user()->image_path }} ');">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-user"></i> الاسم كاملا</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $users->name }}" />
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-envelope"></i> البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $users->email }}" />
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <p>لتعديل الأسم أو بريدك الإلكتروني قم بفتح <strong>تذكرة دعم فني</strong></p>
                            <div class="form-group">
                                <label><i class="fa fa-phone"></i> رقم الجوال</label>
                                <div class="flex20">
                                    <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ $users->phone }}" />
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                    <select>
                                        <option>970</option>
                                        <option style="background-image:url(images/saudi-arabia.png);">970</option>
                                        <option>970</option>
                                        <option>970</option>
                                    </select>
                                </div>
                            </div>


                        <div class="form-group Mb-0 pb-0"></div>
                        </div>

                        <div class="setting-data">
                            <strong></strong>
                            <div class="fl-setting pt-0">
                                <div class="switch-settings">
                                    <div class="toggle-wrapper">
                                        <div class="toggle normal">
                                            <input class="normal-switch" id="codeMobail" type="checkbox"/>
                                            <label class="toggle-item" for="codeMobail"></label>
                                            <span>إرسال كود البطاقة الى رقم الجوال</span>
                                        </div>
                                    </div>
                                    <div class="toggle-wrapper">
                                        <div class="toggle normal">
                                            <input class="normal-switch" checked id="codeEmail" type="checkbox"/>
                                            <label class="toggle-item" for="codeEmail"></label>
                                            <span>إرسال كود البطاقة الى البريد الالكتروني</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-balance">
                                    <p>رصيد حسابك بالموقع:<strong>$ 500.00</strong></p>
                                    <p>نسخ رابط الاحالة: <a>Https://daldsfastoreew.com/365423</a></p>
                                </div>
                            </div>
                        <div class="main-data">
                            <button class="btn btn-info">update</button>
                        

                        </div>
                        </div>


                    </form>

                    <form action="{{ route('change.password', auth()->user()->id) }}" method="post">

                    {{ csrf_field() }}

                    <div class="main-data">
                        <div class="form-group"><strong>معلومات الأمن</strong></div>
                            
                            <div class="form-group">
                                <label><i class="fa fa-lock"></i> كلمة المرور</label>
                                <input type="password" name="current_password"  class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-lock"></i> كلمة المرور</label>
                                <input type="password" name="new_password" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-lock"></i> كلمة المرور</label>
                                <input type="password" name="new_confirm_password" class="form-control" />
                            </div>

                            <button class="btn btn-info">update</button>

                        </div>

                    </div>        

                    </form>

                
                </div>
            </div>
        </section> 
        <!--section_profile-->   
         
        
    </div>
    <!--main-wrapper--> 

@endsection
