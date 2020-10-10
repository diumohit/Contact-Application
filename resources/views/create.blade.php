@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add contact</h3>
                </div>
                {{--close card-header --}}
                <div class="card-body">
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" placeholder="contact name" value="{{old('name')}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{--close form-group --}}

                        <div class="form-group">
                            <input type="text" name="email" id="" class="form-control @error('email') is-invalid @enderror" placeholder="contact email" value="{{old('email')}}">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{--close form-group --}}

                        <div class="form-group">
                            <input type="phone" name="phone" id="" class="form-control @error('phone') is-invalid @enderror" placeholder="contact phone" value="{{old('phone')}}">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        {{--close form-group --}}

                        <div class="form-group">
                            <input type="submit"  class="btn btn-primary" value="Add Data">
                        </div>
                        {{--close form-group --}}

                    </form>
                </div>
                {{--close card-body --}}
            </div>
            {{--close card --}}
        </div>
    </div>
</div>
@endsection
