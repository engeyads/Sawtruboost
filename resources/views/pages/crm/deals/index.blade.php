@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'deals',
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
                                    <h2>Deals</h2>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('deals.create', '') }}"> add new Lead</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">


                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        name
                                    </th>
                                    <th>
                                        message
                                    </th>
                                </thead>
                                <tbody>
                                    @forelse($deals as $deal)
                                        <tr>
                                            <td>
                                                {{--<a href="{{ route('lead.edit', $lead->id) }}">--}}{{ ucfirst($deal->lead->name) }}{{--</a>--}}
                                            </td>
                                            <td>
                                                {{ ucfirst($deal->lead->message) }}
                                            </td>
                                            <td>
                                                <div class='flex'>
                                                    <form id="delete-frm" class=""
                                                        action="{{ route('deals.destroy', $deal->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-outline-danger">Delete Record</button>
                                                    </form>
                                                </div>
                                                <div class='flex'>
                                                    <select name="success" id="success">
                                                        <option >is Success?</option>
                                                        <option value="1">Successful</option>
                                                        <option value="2">in Progress</option>
                                                        <option value="0">Lost Deal</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">No deals available</p>
                                    @endforelse


                                </tbody>
                            </table>
                            {{ $deals->onEachSide(5)->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
