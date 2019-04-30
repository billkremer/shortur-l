@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <H1 class="card-title text-lg-left col-md-6 font-weight-bold pl-0">URLs</H1>

                <button type="button" class="btn btn-link btn-lg pr-1 text-md-right col-md-6 text-decoration-none text-reset">
                    <a class="text-decoration-none text-reset" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Sign Out') }}
                    </a>
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div> 

            <div class="row justify-content-center mb-4 ">
                <div class="col-md-12 border border-dark rounded pl-0 pr-0">
                    <!-- <div class="row"> -->

                        <div class="card">

                            <div class="card-body">
                                <form method="POST" action="{{ route('newUrl') }}">
                                    @csrf
                                    <div class="row mb-4">

                                   
                                        <div class="col-md-12">
                                             <label for="url" class="sr-only sr-only-focusable">URL to be shortened</label>
                                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required  autofocus>

                                            @error('url')

                                                <span class="invalid-feedback text-lg-left" role="alert">
                                                    <strong>Error: Long URL is not a valid URL.</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-danger btn-lg">
                                                {{ __('Create URL') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="col-md-12 border border-dark rounded-top pl-0 pr-0 mb-0">
                    <!-- <div class="row"> -->

                        <div class="card">

                            <div class="card-body">
                                


                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    You are logged in!
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-md-12 border border-dark rounded-bottom pl-0 pr-0 mt-n1 ">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-6 border-right border-dark">

                                        You are logged in!
                                </div>
                            
                                <div class="col-md-4 border-right border-dark">

                            something
                                </div>
                                <div class="col-md-2">

                                    Hit Count
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
