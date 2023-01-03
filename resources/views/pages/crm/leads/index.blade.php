@extends('layouts.dashboard', [
    'class' => '',
    'elementActive' => 'leads',
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
                                    <h2>Leads</h2>
                                    <form action="{{ route('leads.export') }}" method="GET">
                                        start:<input type="date" name='start' value=''>end:<input type="date" name='end' value="">
                                            <button type='submit' class="btn btn-primary">Export Excil</button>
                                    </form>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('leads.create', '') }}"> add new Lead</a>
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
                                        company
                                    </th>
                                    <th>
                                        phone
                                    </th>
                                    <th>
                                        email
                                    </th>
                                    <th>
                                        service
                                    </th>
                                    <th>
                                        website
                                    </th>
                                    <th>
                                        message
                                    </th>
                                    <th>

                                    </th>
                                </thead>
                                <tbody>
                                    @forelse($leads as $lead)
                                        <tr>
                                            <td>
                                                <a href="{{ route('leads.edit', $lead->id) }}">{{ ucfirst($lead->name) }}</a>
                                            </td>
                                            <td>
                                                {{ ucfirst($lead->company) }}
                                            </td>
                                            <td>
                                                {{ '+('.ucfirst($lead->area) . ')' . ucfirst($lead->phone) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($lead->email) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($lead->service) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($lead->website) }}
                                            </td>
                                            <td>
                                                {{ ucfirst($lead->message) }}
                                            </td>
                                            <td>
                                                <div class='flex'>
                                                    <form id="delete-frm" class=""
                                                        action="{{ route('leads.destroy', $lead->id) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-outline-danger">Delete Record</button>
                                                    </form>
                                                </div>
                                                <div class='flex'>
                                                    <select name="interested" id="interested">
                                                        <option >is interested?</option>
                                                        <option value="1">Interested</option>
                                                        <option value="0">Not Interested</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <p class="text-warning">No leads available</p>
                                    @endforelse


                                </tbody>
                            </table>
                            {{ $leads->onEachSide(5)->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
