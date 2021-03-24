@extends('layouts.dashboard.app')

@section('content')

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">

                <div class="box-header with-border">

                  

                            <div class="col-md-4">
                                {{-- @if (auth()->user()->hasPermission('users_create')) --}}
                                    <a href="{{ route('sub_category.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                {{-- @else --}}
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                {{-- @endif --}}
                            </div>

                       
                </div><!-- end of box header -->
        </div>

    </div>
</div>

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Simple Table
        </div>
        <div class="card-body">
            @if ($sub_categories->count() > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('categories.name')</th>
                        <th>@lang('categories.parent_cat')</th>
                        <th>@lang('categories.user')</th>
                        <th>@lang('categories.image')</th>
                        <th>@lang('categories.color1')</th>
                        <th>@lang('categories.color2')</th>

                       
                        <th>@lang('dashboard.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sub_categories as $index=>$sub_categories)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $sub_categories->name }}</td>
                        <td>{{ $sub_categories->parent_category->name }}</td>
                        <td>{{ $sub_categories->user->name }}</td>
                        <td><img src="{{ $sub_categories->image_path }}" style="width: 100px;" class="img-thumbnail" alt=""></td>
                        <td><input type="color" name="color1" class="form-control" value="{{ $sub_categories->color_1 }}"readonly></td>
                        <td><input type="color" name="color2" class="form-control" value="{{ $sub_categories->color_2 }}"readonly></td>
                        <td>
                            {{-- @if (auth()->user()->hasPermission('users_update')) --}}
                                <a href="{{ route('sub_category.edit', $sub_categories->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                            {{-- @else --}}
                                <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                            {{-- @endif --}}
                            {{-- @if (auth()->user()->hasPermission('users_delete')) --}}
                                <form action="{{ route('sub_category.destroy', $sub_categories->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('dashboard.delete')</button>
                                </form><!-- end of form -->
                            {{-- @else --}}
                                <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('dashboard.delete')</button>
                            {{-- @endif --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            @else
            
            <h2>@lang('dashboard.no_data_found')</h2>
            
            @endif
        </div>
    </div>
</div>


@endsection

