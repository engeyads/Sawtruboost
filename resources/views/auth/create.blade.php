@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'user',
])


@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card create-user">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Create New User</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('user.index', '') }}"> Back</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div data-notify="container" class="col-11 col-md-4 alert alert-danger alert-with-icon"
                            role="alert" data-notify-position="bottom-right"
                            style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1060; bottom: 20px; right: 20px;">
                            <button type="button" aria-hidden="true" class="close" data-notify="dismiss"
                                style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1062;"><i
                                    class="nc-icon nc-simple-remove"></i></button><span data-notify="icon"
                                class="nc-icon nc-bell-55"></span> <span data-notify="title"></span> <span
                                data-notify="message">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </span><a href="#" target="_blank" data-notify="url"></a>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Confirm Password:</strong>
                                        {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
