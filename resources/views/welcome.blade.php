@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Search start -->
@include('includes.search')
<!-- Search End --> 

{{-- 
<!-- Top Employers start -->
@include('includes.top_employers')
<!-- Top Employers ends -->  --}}



<!-- Popular Searches start -->
@include('includes.all_search_board')
<!-- Popular Searches ends --> 

<!-- Testimonials start -->
@include('includes.tutor_testimonials')
<!-- Testimonials End -->

<!-- Popular Searches start -->
{{-- @include('includes.popular_searches') --}}
<!-- Popular Searches ends --> 


{{-- <!-- Featured Jobs start -->
@include('includes.featured_jobs')
<!-- Featured Jobs ends --> --}}

{{-- <!-- Latest Jobs start -->
@include('includes.latest_jobs')
<!-- Latest Jobs ends -->  --}}

<!-- Login box start -->
@include('includes.login_text')
<!-- Login box ends --> 


{{-- <!-- Video start -->
@include('includes.video')
<!-- Video end -->  --}}


{{-- <!-- Login box start -->
@include('includes.employer_login_text')
<!-- Login box ends --> --}}

{{-- <!-- Testimonials start -->
@include('includes.home_blogs')
<!-- Testimonials End --> --}}

{{-- <!-- How it Works start -->
@include('includes.how_it_works')
<!-- How it Works Ends -->  --}}


<!-- Testimonials start -->
@include('includes.student_testimonials')
<!-- Testimonials End -->

<!-- Testimonials start -->
{{-- @include('includes.testimonials') --}}
<!-- Testimonials End -->

{{-- <!-- Subscribe start -->
@include('includes.subscribe')
<!-- Subscribe End --> --}}

@include('includes.footer')
@endsection
@push('scripts') 
<script>
    $(document).ready(function ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
    });
</script>
@include('includes.country_state_city_js')
@endpush
