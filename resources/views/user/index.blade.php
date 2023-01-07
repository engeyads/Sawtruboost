@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'user',
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Users</h2>
                                </div>
                                @can('create-users')
                                    <div class="pull-right">
                                        <a class="btn btn-primary" href="{{ route('user.create', '') }}"> Add User</a>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            @can('list-users')
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Tag
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Role
                                        </th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @forelse($users as $user)
                                            @if ($user->id != auth()->user()->id)
                                                <tr>
                                                    <td>
                                                        <a
                                                            href="{{ route('user.show', $user->id) }}">{{ ucfirst($user->userProfile->full_name) }}</a>
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($user->userProfile->tag) }}
                                                    </td>
                                                    <td>
                                                        {{ ucfirst($user->email) }}
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            {!! Form::select('roles[]', $roles,$user->getRoleNames()[0], array('class' => 'form-control role','data-userid' =>  $user->id )) !!}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <table>
                                                            <tr>
                                                                <td style='border:0'>
                                                                    <span>Public</span>
                                                                </td>
                                                                <td style='margin:0;padding:0;border:0'>
                                                                    <div class="switch">
                                                                        <input name='privacy' type="checkbox" class='privacy'
                                                                            data-id="{{ $user->id }}"
                                                                            id='privacy{{ $user->id }}'
                                                                            @if ($user->public == 1) checked @endif />
                                                                        <label for="privacy{{ $user->id }}"></label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td>
                                                        @can('delete-users')
                                                            @if ($user->id != __(auth()->user()->id) && $user->id != 1)
                                                                <div class='flex'>
                                                                    <form id="delete-frm" class=""
                                                                        action="{{ route('user.destroy', $user->id) }}"
                                                                        method="POST">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button class="btn btn-outline-danger">Delete User</button>
                                                                    </form>
                                                                </div>
                                                            @endif
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endif
                                        @empty
                                            <p class="text-warning">No Users available</p>
                                        @endforelse


                                    </tbody>
                                </table>
                                {{ $users->onEachSide(5)->links('pagination::bootstrap-4') }}
                            @endcan
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>

            $('.privacy').on('change', function() {
                let chkd = 0;
                if ($(this).prop('checked')) {
                    chkd = 1;
                }

                let fd = new FormData();
                fd.append('privacy', chkd);

                $.ajax({
                    url: "/user/editprivacy/" + $(this).data('id'),
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType: 'json',
                    success: function(result) {

                        //$('#featuredimg').attr('src','{{ asset('postimages') . '/' }}'+result);
                    },
                    error: function(result) {
                        console.log(result);
                    }
                });

            });

            $(".role").on('change', function() {

                console.log($(this).data('userid'));
                let fd = new FormData();
                fd.append('role[]', $(this).val());

                $.ajax({
                    url: "/user/changerole/" + $(this).data('userid'),
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    data: fd,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType: 'json',
                    success: function(result) {

                        //$('#featuredimg').attr('src','{{ asset('postimages') . '/' }}'+result);
                    },
                    error: function(result) {
                        console.log(result);
                    }
                });

            });
        </script>
    @endpush
@endsection
