@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <form
                        action="{{ route('countries') }}/{{ $country->id ?? '' }}"
                        method="POST"
                        autocomplete="off"
                    >
                        @csrf
                        @if (isset($country->id))
                            @method('put')
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{ isset($country->id) ? __('Edit Country') : __('Create Country') }}</h4>
                            <div class="form-group mb-2">
                                <label for="">{{ __('Name') }}:</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="name" value="{{ old('name') ?? $country->name ?? '' }}">
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
                            <a class="btn btn-secondary btn-sm" href="{{ route('countries') }}" role="button">{{ __('Back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection