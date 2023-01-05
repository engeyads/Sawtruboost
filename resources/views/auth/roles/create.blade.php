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
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <a href="{{ route('roles.index') }}" class="btn btn-outline-primary btn-sm">Go
                                    back</a>
                            </div>
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
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

                                <label class="chklabel">
                                    <input type="checkbox" class="cdusd" id="checkAll"> <span
                                        style="margin-top: -10px">Toggle All</span>
                                    <span class="check-box-effect"></span>
                                </label>
                                <br />
                                @foreach ($permission as $value)
                                    <label class="chklabel">

                                        <input type="checkbox" class="cdusd" name="permission[]"
                                            value="{{ $value->id }}">{{ $value->name }}
                                        <span class="check-box-effect"></span>
                                    </label>

                                    <br />
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    @push('custom-scripts')
                        <script>
                            $("#checkAll").click(function() {
                                $('input:checkbox').not(this).prop('checked', this.checked);
                            });
                        </script>
                    @endpush
                    {!! Form::close() !!}
                </div>

            </div>
        </div>


    </div>
    </div>
@endsection
