@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Student</h3>
                                    <a href="#" class="btn btn-primary form-control mt-1">Student history</a>
                                    <a href="#" class="btn btn-primary form-control mt-1">Documents</a>
                                    <a href="#" class="btn btn-primary form-control mt-1">Transfer</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">Mangement</h3>
                                    <a href="#" class="btn btn-primary form-control mt-1">Institution</a>
                                    <a href="#" class="btn btn-primary form-control mt-1">Personal</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">System Admin</h3>
                                    <a href="#" class="btn btn-primary form-control mt-1">Parameterize</a>
                                    <a href="#" class="btn btn-primary form-control mt-1">Manage accounts</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
