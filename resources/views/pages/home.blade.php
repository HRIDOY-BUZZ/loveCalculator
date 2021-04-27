@extends('layouts.app')

@section('title')
    BUZZ Love Calculator
@endsection

{{-- @php
    $msg = "";
    if (Request::input('submit') != null)
    {
        $name1 = Request::input('name1');
        $name2 = Request::input('name2');
        
        $msg = $name1."Loves".$name2."100%";
    }
    else
    {
        $msg = "";
    }
@endphp --}}

@section('content')

<section class="form-sec">
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-1">

        </div>
        <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
            <div class="form-div">
                <form action="formed" method="POST" id="love_form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="name1">Your Name: </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <input type="text" class="form-control" name="name1" id="name1" value="{{ old('name1') }}" required>
                            <span class="errorMsg" id="errorMsg1"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="name2">Partner's Name: </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <input type="text" class="form-control" name="name2" id="name2" value="{{ old('name2') }}" required>
                            <span class="errorMsg" id="errorMsg2"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <input type="submit" class="form-control" name="submit" id="submit" value="Check %">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="result">
                                @if (session('message'))
                                    {{ session('message') }}
                                @endif    
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-10">

        </div>
    </div>
</section>
@endsection