@extends('layouts.back')

@section('content')
<div class="col-lg-6">
    <div class="panel ">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-fw ti-pencil"></i> Form Actions Edit User
            </h3>
            <span class="pull-right hidden-xs">
                <i class="fa fa-fw ti-angle-up clickable"></i>
                <i class="fa fa-fw ti-close removepanel clickable"></i>
            </span>
        </div>
        <div class="panel-body">
            <form action="{{ route('user.store') }}" class="form-horizontal" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}
                <div class="form-body">
                    <div class="form-group">
                        <label for="inputUsername2" class="col-md-3 control-label">
                            Name
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-fw ti-user"></i>
                                </span>
                                <input type="text" class="form-control"
                                id="inputUsername2" placeholder="Name" name="name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-3 control-label">
                            Email
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa ti-email"></i>
                                </span>
                                <input type="text" placeholder="Email Address"
                                class="form-control" name="email" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keypassword" class="col-md-3 control-label">
                            Password
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-fw ti-key"></i>
                                </span>
                                <input type="password" placeholder="Password"
                                id="keypassword" name="password" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputnumber2" class="col-md-3 control-label">
                            Phone Number
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-fw ti-mobile"></i>
                                </span>
                                <input type="text" id="inputnumber2" placeholder="Phone Number"
                                class="form-control" name="phone" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="col-md-3 control-label">
                            Address
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-fw ti-pencil"></i>
                                </span>
                                <input type="text" class="form-control"
                                placeholder="Address" id="inputAddress2" name="address" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="userlevel" class="col-md-3 control-label">
                            Level
                        </label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-fw ti-pencil"></i>
                                </span>
                                <select class="form-control" name="role_id">
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}"> {{ $role->title }}</option>
                                    @endforeach
                                    {{-- <option value="admin" {{ $user->role_id === 1 ? 'selected' : '' }}> Admin</option>
                                    <option value="editor" {{ $user->role_id === 2 ? 'selected' : '' }}> Editor</option>
                                    <option value="contributor" {{ $user->role_id === 3 ? 'selected' : '' }}> Agent</option>
                                    <option value="customer" {{ $user->role_id === 4 ? 'selected' : '' }}> Customer</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="inputContent2" class="col-md-3 control-label">Message</label>
                        <div class="col-md-9">
                            <textarea id="inputContent2" rows="3"
                            class="form-control resize_vertical"></textarea>
                        </div>
                    </div> --}}
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-7 col-md-9">
                            <button type="Submit" class="btn btn-primary">Update
                            </button>
                            &nbsp;
                            <button type="button" class="btn btn-danger">Cancel
                            </button>
                            &nbsp;
                            {{-- <button type="reset" class="btn btn-default bttn_reset">
                                Reset
                            </button> --}}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection