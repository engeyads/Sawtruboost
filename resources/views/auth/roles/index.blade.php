@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'role',
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
                                    <h2>Roles</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('roles.create', '') }}"> Create New Role</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">


                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Role Name
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse($roles as $role)
                                        <tr>
                                            <td>
                                                <a href="{{ route('roles.edit', $role->id) }}">{{ ucfirst($role->name) }}</a>
                                            </td>
                                            <td>
                                                {{ ucfirst($role->created_at) }}
                                            </td>
                                            <td>
                                                <div class='flex'>
                                                    <form id="delete-frm" class=""
                                                        action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-outline-danger">Delete role</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">No role available</p>
                                    @endforelse


                                </tbody>
                            </table>
                            {{ $roles->onEachSide(5)->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
