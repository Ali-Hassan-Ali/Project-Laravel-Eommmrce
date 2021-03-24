@extends('layouts.dashboard.app')

@section('content')


<div class="col-sm-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <strong>@lang('dashboard.edit')</strong>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-sm-12">


                    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                        <div class="form-group">
                            <label>@lang('dashboard.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.image')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <img src="{{ $user->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>


                    <div class="form-group">
                        <label>@lang('dashboard.permissions')</label>

                                @php
                                    $models = ['users', 'categories'];
                                    $maps = ['create', 'read', 'update', 'delete'];
                                @endphp

                        <div class="col-md-6 mb-4">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">@lang('dashboard.users')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">@lang('dashboard.dashboard')</a>
                                </li>
                            </ul>

                            <div class="tab-content pt-3">
                                <div class="tab-pane active" id="home" role="tabpanel">

                                    <label><input type="checkbox" name="permissions[]" value="users_read"> @lang('dashboard.read')</label>
                                    <label><input type="checkbox" name="permissions[]" value="users_delete"> @lang('dashboard.create')</label>
                                    <label><input type="checkbox" name="permissions[]" value="users_create"> @lang('dashboard.update')</label>
                                    <label><input type="checkbox" name="permissions[]" value="users_update"> @lang('dashboard.delete')</label>

                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">
                            
                                    <label><input type="checkbox" name="permissions[]" value="users_read"> @lang('dashboard.read')</label>
                                    <label><input type="checkbox" name="permissions[]" value="users_delete"> @lang('dashboard.create')</label>
                                    <label><input type="checkbox" name="permissions[]" value="users_create"> @lang('dashboard.update')</label>
                                    <label><input type="checkbox" name="permissions[]" value="users_update"> @lang('dashboard.delete')</label>
                                    
                                </div>
                            </div>
                        </div>
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
