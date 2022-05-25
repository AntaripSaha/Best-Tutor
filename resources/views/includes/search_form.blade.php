<style>
@media screen and (max-width: 480px) {
	#req_tutor{
		background-color: #0675c1 !important;
		margin-left: 10% !important;
		margin-top: 3% !important;
		margin-bottom: 10% !important;
		max-width: 60% !important;
		font-size: 14px !important;
	}
	#reg_tutor{
		background-color: #0675c1 !important;
		margin-left: 45% !important;
		margin-top: -23% !important;
		margin-bottom: 11% !important;
		max-width: 60% !important;
		font-size: 13px !important;
	}
	#title{
		color: rgb(255, 255, 255) !important;
		margin-left: -34% !important;
		font-size: 18px !important;
	}
	#title2{
		color: rgb(255, 255, 255) !important;
		margin-left: -2% !important;
		font-size: 18px !important;
	}
	#sub{
		color: rgb(255, 255, 255) !important;
		margin-left: -1.5% !important;
		font-size: 14px !important;
	}
	#para{
		color: rgb(255, 255, 255) !important;
		margin-left: -1.5% !important;
		font-size: 12px !important;
	}
}
</style>

@if(Auth::guard('company')->check())
<h3 class="seekertxt">{{__('Best Home Tutor Service')}}. <span>{{__('Search Available Tutors Today')}}.</span></h3>
<form action="{{route('job.seeker.list')}}" method="get">
    {{-- <div class="">
			<input type="submit" class="btn btn-info btn-lg" value="{{__('Search Tutors')}}">
    </div> --}}
	<div class="searchbar">
		<div class="srchbox seekersrch">		
		<div class="input-group">
		  <input type="text"  name="search" id="empsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills or Tutors Details')}}" autocomplete="off" />
		  <span class="input-group-btn">
			<input type="submit" class="btn" value="{{__('Search Tutors')}}">
		  </span>
		</div>
		</div>
    </div>
</form>
@else
<h3 id="title" style="color: rgb(255, 255, 255); margin-left: -65%;">{{__('Best Home Tutor Service')}}.</h3>
<h4 id="sub" style="color: rgb(253, 253, 253); margin-left:-5.5%;"><span>{{__('Hire The Right Tutor Today')}}.</span>
</h4>
<h5 id="para" style="color: rgb(255, 255, 255); margin-left:-5.5%;"><span >Book one-on-one Lessons with verified tutors in your area.</span></h5>


<form action="{{route('register')}}" method="get">
    <div style="margin-left:-10.5%; margin-top:5%;">
		<input type="submit" id="req_tutor" class="btn btn-info btn-lg" style="background-color:#0675c1;  margin-left:4.5%;" value="{{__('Request for Tutor')}}">
    </div>
</form>
<form action="{{route('register')}}" method="get">
    <div style="margin-left:11.5%; margin-top:-4.2%;">
		<input type="submit" id="reg_tutor"  class="btn btn-info btn-lg" style="background-color:#0675c1 ; margin-left:4.5%;" value="{{__('Register as a Tutor')}}">
    </div>
</form>

	<h4 id="title2" style="margin-top:1%; margin-left:-5.5%; margin-top:2%; color:rgb(253, 253, 246);">Become a tutor <a href="{{route('login')}}" style="color:white"><b><span style="text-decoration: underline">Sign In</span></b></a> -(It's Free)</h4>


{{-- 
<form action="{{route('job.list')}}" method="get">
    <div class="searchbar">
		<div class="srchbox">
		
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<label for=""> {{__('Keywords / Job Title')}}</label>
				<input type="text"  name="search" id="jbsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills or job title')}}" autocomplete="off" /></div>
			<div class="col-lg-3 col-md-4">
				<label for="">&nbsp;</label>
				<input type="submit" class="btn" value="{{__('Search Job')}}"></div>
		</div>
				
		<div class="srcsubfld additional_fields">
			<div class="row">
        <div class="col-lg-{{((bool)$siteSetting->country_specific_site)? 6:3}}">
			<label for="">{{__('Select Functional Area')}}</label>
            {!! Form::select('functional_area_id[]', ['' => __('Select Functional Area')]+$functionalAreas, Request::get('functional_area_id', null), array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
        </div>

        @if((bool)$siteSetting->country_specific_site)
        {!! Form::hidden('country_id[]', Request::get('country_id[]', $siteSetting->default_country_id), array('id'=>'country_id')) !!}
        @else
        <div class="col-lg-3">
			<label for="">{{__('Select Country')}}</label>
            {!! Form::select('country_id[]', ['' => __('Select Country')]+$countries, Request::get('country_id', $siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
        </div>
        @endif

        <div class="col-lg-3">
			<label for="">{{__('Select Division')}}</label>
            <span id="state_dd">
                {!! Form::select('state_id[]', ['' => __('Select Division')], Request::get('state_id', null), array('class'=>'form-control', 'id'=>'state_id')) !!}
            </span>
        </div>
        <div class="col-lg-3">
			<label for="">{{__('Select City')}}</label>
            <span id="city_dd">
                {!! Form::select('city_id[]', ['' => __('Select City')], Request::get('city_id', null), array('class'=>'form-control', 'id'=>'city_id')) !!}
            </span>
        </div>
		</div>
		</div>	
			
			
			
		</div>
      
		
		
		
		
    </div>
</form> --}}
@endif








