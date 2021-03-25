@extends('layouts.dashboard.app')

@section('content')


<div class="col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>@lang('dashboard.add')</strong>
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


                    <form action="{{ route('dashboard.sub_categories.store'),'test' }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}


                        <div class="form-group">
                            <label>@lang('dashboard.categories_name_sub_ar')</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"required>
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.categories_name_sub_en')</label>
                            <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}"required>
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.categories')</label>
                            <select name="parent_cat_id" class="form-control">
                           
                           
                            @foreach ($parent_categories as $parent)
                                <option value="{{ $parent->id }}"> {{ $parent->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.image')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/user_images/default.png') }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                        <div class="form-group">
                            <label>@lang('dashboard.color1')</label>
                            <input type="color" name="color1" class="form-control" value="#ff0000""required>
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.color2')</label>
                            <input type="color" name="color2" class="form-control" value="#ff0000"required>
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
