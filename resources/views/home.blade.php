@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{MyApp::sayHello()}}
                    <br/>
                    You are logged in!
                </div>

                <div class="card-footer">
                    <a class="btn btn-default" href="/tasks">Click Here To Add Tasks</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
