@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'role',
])

@section('content')
    <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-header">
                        <h4 class="card-title">Roles</h4>
                    </div>


                    <div class="col-12 pt-2">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left">
                                        <a href="{{ route('blog.index') }}" class="btn btn-outline-primary btn-sm">Go
                                            back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                            <h1 class="display-4">Edit Role</h1>
                            <p>Fill and submit this form to Edit role</p>


                            {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br />
                        @foreach ($permission as $value)
                            <label class="chklabel">{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name cdusd']) }}
                                {{ $value->name }}<span class="check-box-effect"></span></label>
                            <br />
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>


@endsection
