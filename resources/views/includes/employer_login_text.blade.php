@if(!Auth::user() && !Auth::guard('company')->user())
<div class="emploginbox">
	<div class="container">		
		<div class="titleTop">
			<div class="subtitle">{{__('Are You Looking For Tution!')}}</div>
           <h3>{{__('Publish Your Skills')}}  </h3>
			<h4>{{__('get hired to the Right Place')}}</h4>
        </div>
		<p>Login and Complete Your Profile in a Minute. Publish Your Skills and Attach a CV. And Get Hired Fast.</p>
		<div class="viewallbtn"><a href="{{route('register')}}">{{__('Publish Qualifications')}}</a></div>
	</div>
</div>
@endif