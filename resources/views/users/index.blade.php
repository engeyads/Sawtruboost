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
                        <h4 class="card-title"> Users</h4>
                    </div>
                    <div class="card-body">
                        @can('create-users')
                        <div>
                            <button onclick="location.href = '{{ route('user.create') }}'">Add User</button>
                        </div>
                        @endcan
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
                                        <tr>
                                            <td>
                                                <a href="./user/{{ $user->id }}">{{ ucfirst($user->email) }}</a>
                                            </td>
                                            <td>
                                                {{ ucfirst($user->name) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($user->email) }}
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">No Users available</p>
                                    @endforelse


                                </tbody>
                            </table>
                            {{ $users->onEachSide(5)->links() }}
                            @endcan
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
