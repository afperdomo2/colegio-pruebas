@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('List of Countries') }}</h4>
                    <a href="" class="btn btn-sm btn-success">{{ __('Create a new country') }}</a>
                    <table class="table table-sm table-inverse table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                                <th>#</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Options') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $country)
                                    <tr>
                                        <td scope="row">{{ $loop->index + 1 }}</td>
                                        <td>{{ $country->name }}</td>
                                        <td>{{ $country->is_active ? '✅' : '🚫' }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                                            <a href="" class="btn btn-sm btn-danger">{{ __('Delete') }}</a>
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
