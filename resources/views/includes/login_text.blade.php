
<div class="userloginbox">
	<div class="container">		
		<div class="titleTop">
           <h3>{{__('Are You Looking For Tutor!')}} </h3>
        </div>
		<p>Post your Tutor requirements. Our experts will analyze it and live your requirements to our job board. 
			You'll receive the 5 (max) best Tutors' CVs in your account within 48 hours which closely match to your requirements.
			Choose the best one among the 5 CV's. Offer the selected Tutor for few trial classes before taking the regular classes.
		</p>
		
		@if(!Auth::user() && !Auth::guard('company')->user())
		<div class="viewallbtn"><a href="{{route('register')}}"> {{__('Get Started Today')}} </a></div>
		@else
		<div class="viewallbtn"><a href="{{url('my-profile')}}">{{__('Build Your CV')}} </a></div>
		@endif
	</div>
</div>
