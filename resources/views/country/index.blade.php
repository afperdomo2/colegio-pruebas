@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('List of Countries') }}</h4>
                        <a href="{{ route('countries') }}" class="btn btn-sm btn-primary">{{ __('Refresh') }}</a>
                        <a href="{{ route('createCountry') }}" class="btn btn-sm btn-success">{{ __('Create a new country') }}</a>

                        <table class="table table-sm table-hover border mt-4 mb-1">
                            <thead class="thead-default">
                                <tr class="text-center">
                                    <th class="col-1">#</th>
                                    <th class="col-6">{{ __('Name') }}</th>
                                    <th class="col-3">{{ __('Status') }}</th>
                                    <th class="col-2" colspan="2">{{ __('Options') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $country)
                                    <tr class="align-middle">
                                        <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                        <td class="text-capitalize">{{ $country->name }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('changeStatusCountry', $country->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-sm btn-{{ $country->is_active ? 'success' : 'danger' }}">
                                                    {{ $country->is_active ? __('Active') : __('Inactive') }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('editCountry', $country->id) }}" class="btn btn-sm btn-warning">
                                                {{ __('Edit') }}
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('deleteCountry', $country->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($countries) == 0)
                                    <tr>
                                        <td colspan="4">{{  __('No records found') }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
