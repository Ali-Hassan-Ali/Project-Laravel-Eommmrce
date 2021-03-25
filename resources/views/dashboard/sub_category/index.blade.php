@extends('layouts.dashboard.app')

@section('content')

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('dashboard.sub_categories') <small>{{ $sub_categories->count() }}</small></h3>

                    <form action="{{ route('dashboard.sub_categories.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('dashboard.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('dashboard.search')</button>
                                @if (auth()->user()->hasPermission('sub_categories_create'))
                                    <a href="{{ route('dashboard.sub_categories.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->
                       
                </div><!-- end of box header -->
        </div>

    </div>
</div>

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i>
        </div>
        <div class="card-body">
            @if ($sub_categories->count() > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('dashboard.sub_categories')</th>
                        <th>@lang('dashboard.categories')</th>
                        <th>@lang('dashboard.users')</th>
                        <th>@lang('dashboard.image')</th>
                        <th>@lang('dashboard.color1')</th>
                        <th>@lang('dashboard.color2')</th>

                       
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
                            @if (auth()->user()->hasPermission('sub_categories_update'))
                                <a href="{{ route('dashboard.sub_categories.edit', $sub_categories->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                            @else
                                <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                            @endif
                            @if (auth()->user()->hasPermission('sub_categories_delete'))
                                <form action="{{ route('dashboard.sub_categories.destroy', $sub_categories->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('dashboard.delete')</button>
                                </form><!-- end of form -->
                            @else
                                <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('dashboard.delete')</button>
                            @endif
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

