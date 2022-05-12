@extends('layouts.app')

@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->

<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('Company Detail')])

<!-- Inner Page Title end -->

<div class="listpgWraper">

    <div class="container">

        @include('flash::message')

        <!-- Job Header start -->

        <div class="job-header">

            <div class="jobinfo">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <form action="{{route('company.otp.match')}}">
                            <!-- Candidate Info -->
                            <div class="candidateinfo">
                                <div class="title">Enter OTP</div>
                                <input type="text" class="form-control" name="otp" style="margin-top: 15px;">
                                <input type="hidden" name="phone" value="{{$phone}}">
                                <input type="hidden" name="company" value="{{$company}}">
                             
                                <button type="submit" class="btn btn-success btn-sm" style="margin-top:10px;">
                                    Submit
                                </button>
                                <a href="{{route('company.otp.resend', ['phone' => $phone, 'company'=>$company])}}">
                                    <button type="button" class="btn btn-info btn-sm" style="margin-top:10px; margin-left:2%;">
                                        Resend
                                    </button>
                                </a>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>



@include('includes.footer')

@endsection

