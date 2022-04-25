@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <form
                        action="{{ (isset($region->id)) ? route('updateRegion', $region->id) : route('regions') }}"
                        method="POST"
                        autocomplete="off"
                    >
                        @csrf
                        @if (isset($region->id))
                            @method('put')
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{ isset($region->id) ? __('Edit Region') : __('Create Region') }}</h4>
                            <div class="form-group mb-2">
                                <label for="">{{ __('Name') }}:</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ old('name') ?? $region->name ?? '' }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">{{ __('Country') }}:</label>
                                <select class="form-control form-control-sm" name="country_id" id="country_id">
                                    <option value="">-- {{ __('Select') }} --</option>
                                    @foreach ($countries as $country)
                                        @php($country_id = old('country_id') ?? $region->country_id ?? '')
                                        <option value="{{ $country->id }}" {{ $country_id == $country->id ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show mt-1 mb-0 pb-0" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                {{ __('Submit') }}
                            </button>
                            <a class="btn btn-secondary btn-sm" href="{{ route('regions') }}" role="button">{{ __('Back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection