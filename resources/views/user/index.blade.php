@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'user'
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
                                        UserName
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                    @if($user->id != auth()->user()->id)
                                        <tr>
                                            <td>
                                                <a href="{{ route('user.show', $user->id) }}">{{ ucfirst($user->email) }}</a>
                                            </td>
                                            <td>
                                                {{ ucfirst($user->name) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($user->email) }}
                                            </td>
                                            <td>
                                                @can('delete-users')
                                                    @if ($user->id != __(auth()->user()->id) && $user->id != 1)
                                                    <div class='flex'>
                                                        <form id="delete-frm" class="" action="{{ route('user.destroy', $user->id) }}" method="POST">
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
                            {{$users->onEachSide(5)->links("pagination::bootstrap-4")}}
                            @endcan
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
