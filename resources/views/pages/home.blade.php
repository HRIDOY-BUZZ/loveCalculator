@extends('layouts.app')

@section('title')
    BUZZ Love Calculator
@endsection


@section('content')
<section class="form-sec">
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-1">

        </div>
        <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
            <div class="form-div">
                <form action="formed" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="name1">Your Name: </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <input type="text" class="form-control" name="name1" id="name1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <label for="name2">Partner's Name: </label>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <input type="text" class="form-control" name="name2" id="name2" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <input type="submit" class="form-control" name="submit" id="submit" value="Check Percentage">
                        </div>
                    </div>
                    <div class="row">
                        <label></label>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-10">

        </div>
    </div>

</section>
@endsection
