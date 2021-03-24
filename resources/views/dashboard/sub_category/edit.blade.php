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


                    <form action="{{ route('sub_category.update', $sub_category->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                        <div class="form-group">
                            <label>@lang('categories.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $sub_category->getTranslation('name', 'ar') }}"required>
                        </div>

                        <div class="form-group">
                            <label>@lang('categories.name_en')</label>
                            <input type="text" name="name_en" class="form-control" value="{{$sub_category->getTranslation('name', 'en') }}"required>
                        </div>

                        <div class="form-group">
                            <label>@lang('categories.parent_cat')</label>
                            <select name="parent_cat_id" class="form-control">
                           
                            @foreach ($parent_categories as $parent)
                                <option value="{{ $parent->id }}"> {{ $parent->name }}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('categories.image')</label>
                            <input type="file" name="image"  class="form-control image">
                        </div>
                        <div class="form-group">
                            <img src="{{ $sub_category->image_path }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                        <div class="form-group">
                            <label>@lang('categories.color1')</label>
                            <input type="color" name="color1" class="form-control" value="{{$sub_category->color_1}}"required>
                        </div>

                        <div class="form-group">
                            <label>@lang('categories.color2')</label>
                            <input type="color" name="color2" class="form-control" value="{{$sub_category->color_2}}"required>
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
