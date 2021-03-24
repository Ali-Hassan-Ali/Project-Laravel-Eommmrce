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


                    <form action="{{ route('parent_category.update', $parent_category->id) }}" method="post" >

                        {{ csrf_field() }}
                        {{ method_field('put') }}



                        <div class="form-group">
                            <label>@lang('categories.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $parent_category->getTranslation('name', 'ar') }}"required>
                        </div>

                        <div class="form-group">
                            <label>@lang('categories.name_en')</label>
                            <input type="text" name="name_en" class="form-control" value="{{ $parent_category->getTranslation('name', 'en') }}"required>
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
