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

                                                <h5 class="text-danger text-lg-left " role="alert">
                                                    <br>
                                                    <strong class="text-lg-left">Error: Long URL is not a valid URL.</strong>
                                                </h5>
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
                <div class="col-md-12 border border-dark rounded-top mb-n1 bg-white">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark ">
                            <strong>Original URL</strong>
                        </div>
                    
                        <div class="col-md-4 border-right border-dark">
                            <strong class="">Tiny URL</strong>
                        </div>
                        <div class="col-md-2 ">
                            <strong>Hit Count</strong>
                        </div>
                    </div>
                </div>

<!-- foreach -1 start -->
<!-- will have to do as a for loop -->
  @foreach($urls as $url)

                <div class="col-md-12 border border-dark mb-n1 bg-white @if ($loop->last) rounded-bottom @endif">
                    <div class="row">
                        <div class="col-md-6 border-right border-dark py-3">
                            <a class="text-decoration-none text-reset" href="<?= $url['url']; ?>" target="_blank"><?= $url['url']; ?></a>
                        </div>
                    
                        <div class="col-md-4 border-right border-dark py-3">
                            <a class="text-decoration-none text-reset" href="http://127.0.0.1:8000/t/<?= $url['shorturl']; ?>" target="_blank">http://localhost:8000/t/<?= $url['shorturl']; ?></a>
                        </div>
                        <div class="col-md-2 py-3">
                            <?= $url['hitcount']; ?>
                        </div>
                    </div>

                </div>
                @endforeach
<!-- foreach end -->

<!-- bottom row -->

  
            </div>



            


        </div>
    </div>
</div>
@endsection
