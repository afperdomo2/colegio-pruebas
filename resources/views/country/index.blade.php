@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Countries</h4>
                    <a href="" class="btn btn-sm btn-success">New Country</a>
                    <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Is active</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $country)
                                    <tr>
                                        <td scope="row">{{ $loop->index + 1 }}</td>
                                        <td>{{ $country->name }}</td>
                                        <td>{{ $country->is_active ? '✅' : '🚫' }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="" class="btn btn-sm btn-danger">Drop</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
