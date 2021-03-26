@extends('layouts.dashboard.app')

@section('content')


<div class="col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>@lang('dashboard.edit')</strong>
        </div>
        <div class="card-body">

                    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
            <div class="row">

                <div class="col-sm-12">


                    <form action="{{ route('dashboard.carts.update', $cart->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                         <div class="form-group">
                            <label>@lang('dashboard.name')</label>
                            <input type="text" name="cart_name" class="form-control{{ $errors->has('cart_name') ? ' is-invalid' : '' }}" value="{{ $cart->getTranslation('cart_name', 'ar') }}">
                            @if ($errors->has('cart_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cart_name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_en')</label>
                            <input type="text" name="cart_name_en" class="form-control{{ $errors->has('cart_name_en') ? ' is-invalid' : '' }}" value="{{ $cart->getTranslation('cart_name', 'en') }}">
                            @if ($errors->has('cart_name_en'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cart_name_en') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.cart_text')</label>
                            <input type="text" name="cart_text" class="form-control{{ $errors->has('cart_text') ? ' is-invalid' : '' }}" value="{{ $cart->getTranslation('cart_text', 'ar') }}">
                            @if ($errors->has('cart_text'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cart_text') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.cart_text_en')</label>
                            <input type="text" name="cart_text_en" class="form-control{{ $errors->has('cart_text_en') ? ' is-invalid' : '' }}" value="{{ $cart->getTranslation('cart_text', 'en') }}">
                            @if ($errors->has('cart_text_en'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cart_text_en') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.markets')</label>
                            <select name="market_id" class="form-control{{ $errors->has('market_id') ? ' is-invalid' : '' }}">
                            @if ($errors->has('market_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('market_id') }}</strong>
                                </span>
                            @endif
                           
                            @foreach ($markets as $market)
                                <option value="{{ $market->id }}" {{ $cart->market_id == $market->id ? 'selected' : '' }}> {{ $market->name }}</option>
                            @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>@lang('dashboard.sub_categories')</label>
                            <select name="sub_category_id" class="form-control{{ $errors->has('sub_category_id') ? ' is-invalid' : '' }}">
                            @if ($errors->has('sub_category_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('sub_category_id') }}</strong>
                                </span>
                            @endif
                           
                            @foreach ($sub_categorys as $sub_category)
                                <option value="{{ $sub_category->id }}" {{ $cart->sub_category_id == $sub_category->id ? 'selected' : '' }}> {{ $sub_category->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.count_of_buy')</label>
                            <input type="number" name="count_of_buy" class="form-control{{ $errors->has('count_of_buy') ? ' is-invalid' : '' }}" value="{{ $cart->count_of_buy }}">
                            @if ($errors->has('count_of_buy'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('count_of_buy') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.ar_price')</label>
                            <input type="number" name="ar_price" class="form-control{{ $errors->has('ar_price') ? ' is-invalid' : '' }}" value="{{ $cart->ar_price }}">
                            @if ($errors->has('ar_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ar_price') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.amrecan_price')</label>
                            <input type="number" name="amrecan_price" class="form-control{{ $errors->has('amrecan_price') ? ' is-invalid' : '' }}" value="{{ $cart->amrecan_price }}">
                            @if ($errors->has('amrecan_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('amrecan_price') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.kowit_price')</label>
                            <input type="number" name="kowit_price" class="form-control{{ $errors->has('kowit_price') ? ' is-invalid' : '' }}" value="{{ $cart->kowit_price }}">
                            @if ($errors->has('kowit_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('kowit_price') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.amarat_price')</label>
                            <input type="number" name="amarat_price" class="form-control{{ $errors->has('amarat_price') ? ' is-invalid' : '' }}" value="{{ $cart->amarat_price }}">
                            @if ($errors->has('amarat_price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('amarat_price') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div>

            </div>
            <!--/.row-->
        </div>

    </div>

</div>

@endsection
