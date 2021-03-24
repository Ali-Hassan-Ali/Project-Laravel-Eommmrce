@extends('layouts.dashboard.app')

@section('content')

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">

                <div class="box-header with-border">

                  

                            <div class="col-md-4">
                                {{-- @if (auth()->user()->hasPermission('users_create')) --}}
                                    <a href="{{ route('parent_category.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
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
            @if ($parent_categories->count() > 0)

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('dashboard.name')</th>
                       
                        <th>@lang('dashboard.action')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($parent_categories as $index=>$parent_category)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $parent_category->name }}</td>
                      
                        <td>
                            {{-- @if (auth()->user()->hasPermission('users_update')) --}}
                                <a href="{{ route('parent_category.edit', $parent_category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                            {{-- @else --}}
                                <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                            {{-- @endif --}}
                            {{-- @if (auth()->user()->hasPermission('users_delete')) --}}
                                <form action="{{ route('parent_category.destroy', $parent_category->id) }}" method="post" style="display: inline-block">
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

