@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('List of Regions') }}</h4>
                        <a href="{{ route('regions') }}" class="btn btn-sm btn-primary">{{ __('Refresh') }}</a>
                        <a href="{{ route('createRegion') }}" class="btn btn-sm btn-success">{{ __('Create a new region') }}</a>

                        <table class="table table-sm table-hover border mt-4 mb-1">
                            <thead class="thead-default">
                                <tr class="text-center">
                                    <th class="col-1">#</th>
                                    <th class="col-4">{{ __('Name') }}</th>
                                    <th class="col-3">{{ __('Country') }}</th>
                                    <th class="col-2">{{ __('Status') }}</th>
                                    <th class="col-2" colspan="2">{{ __('Options') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regions as $region)
                                    <tr class="align-middle">
                                        <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                        <td class="text-capitalize">{{ $region->name }}</td>
                                        <td class="text-capitalize">{{ $region->country->name }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('changeStatusRegion', $region->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit" class="btn btn-sm btn-{{ $region->is_active ? 'success' : 'danger' }}">
                                                    {{ $region->is_active ? __('Active') : __('Inactive') }}
                                                </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('editRegion', $region->id) }}" class="btn btn-sm btn-warning">
                                                {{ __('Edit') }}
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('deleteRegion', $region->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (count($regions) == 0)
                                    <tr>
                                        <td colspan="4">{{  __('No records found') }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex mt-3">
                            {{ $regions->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
