@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (Session::has("addcontact"))
                        <div class="alert alert-success" >
                            {{ Session::get("addcontact") }}
                        </div>
                    @endif
                    <br>
                    <h3>User Dashboard</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum a corrupti dolor porro quasi similique quaerat aliquid eos aliquam laborum.</p>
                    <a href="/contact/create" class="btn btn-primary">Add Contact</a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="/contact" class="btn btn-primary">Show Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
