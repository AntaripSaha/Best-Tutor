@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('My Profile')]) 
<!-- Inner Page Title end -->

<style>
        #tution_submit{
            display: inline-block;
            background: #17d27c;
            color: #fff;
            padding: 10px 40px;
            border-radius: 5px;
            margin-top: 15px;
            border: none;
    }
        #tution_submit:hover {
            display: inline-block;
            background: #050505;
            color: #fff;
            padding: 10px 40px;
            border-radius: 5px;
            margin-top: 15px;
            border: none;
            transition-duration: 0.5s;
    }
    #sel{
        color: #17d27c !important;
        padding: 8px 8px !important;
    }
  * {
      margin: 0;
      padding: 0;
  }

  html {
      height: 100%;
  }

  p {
    color: grey;
  }

  #heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal;
  }

  #msform {
      position: relative;
      margin-top: 20px;
  }

  #msform fieldset {
      background: white;
      border: 0 none;
      border-radius: 0.5rem;
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      padding-bottom: 20px;

      /*stacking fieldsets above each other*/
      position: relative;
  }

  .form-card {
    text-align: left;
  }

  /*Hide all except first fieldset*/
  #msform fieldset:not(:first-of-type) {
      display: none;
  }

  #msform input, #msform select  {

  }

  #msform input:focus, #msform select:focus {

  }

  /*Next Buttons*/
  #msform .action-button {
      width: 100px;
      background: #673AB7;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 0px 10px 5px;
      float: right;
  }

  #msform .action-button:hover, #msform .action-button:focus {
      background-color: #311B92;
  }

  /*Previous Buttons*/
  #msform .action-button-previous {
      width: 100px;
      background: #616161;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 0px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px 10px 0px;
      float: right;
  }

  #msform .action-button-previous:hover, #msform .action-button-previous:focus {
      background-color: #000000;
  }

  /*The background card*/
  .card {
      z-index: 0;
      border: none;
      position: relative;
  }

  /*FieldSet headings*/
  .fs-title {
      font-size: 25px;
      color: #673AB7;
      margin-bottom: 15px;
      font-weight: normal;
      text-align: left;
  }

  .purple-text {
    color: #673AB7;
      font-weight: normal;
  }

  /*Step Count*/
  .steps {
    font-size: 25px;
      color: gray;
      margin-bottom: 10px;
      font-weight: normal;
      text-align: right;
  }

  /*Field names*/
  .fieldlabels {
    color: gray;
    text-align: left;
  }

  /*Icon progressbar*/
  #progressbar {
      margin-bottom: 30px;
      overflow: hidden;
      color: lightgrey;
  }

  #progressbar .active {
      color: #673AB7;
  }

  #progressbar li {
      list-style-type: none;
      font-size: 15px;
      width: 25%;
      float: left;
      position: relative;
      font-weight: 400;
  }

  /*Icons in the ProgressBar*/
  #progressbar #account:before {
      font-family: FontAwesome;
      content: "\f13e";
  }

  #progressbar #personal:before {
      font-family: FontAwesome;
      content: "\f007";
  }

  #progressbar #payment:before {
      font-family: FontAwesome;
      content: "\f030";
  }

  #progressbar #confirm:before {
      font-family: FontAwesome;
      content: "\f00c";
  }

  /*Icon ProgressBar before any progress*/
  #progressbar li:before {
      width: 50px;
      height: 50px;
      line-height: 45px;
      display: block;
      font-size: 20px;
      color: #ffffff;
      background: lightgray;
      border-radius: 50%;
      margin: 0 auto 10px auto;
      padding: 2px;
  }

  /*ProgressBar connectors*/
  #progressbar li:after {
      content: '';
      width: 100%;
      height: 2px;
      background: lightgray;
      position: absolute;
      left: 0;
      top: 25px;
      z-index: -1;
  }
  /*Color number of the step and the connector before it*/
  #progressbar li.active:before, #progressbar li.active:after {
      background: #673AB7;
  }
  /*Animated Progress Bar*/
  .progress {
    height: 20px;
  }
  .progress-bar {
    background-color: #673AB7;
  }
  /*Fit image in bootstrap div*/
  .fit-image{
      width: 100%;
      object-fit: cover;
  }
  @media (min-width: 1200px){
      .col-xl-5 {
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }
  }
  #sel{
    height: auto;
    width:80%;
  }
  .in{
      margin-top: 6% !important;
  }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            @include('includes.user_dashboard_menu')
            <div class="col-md-9 col-sm-8">
                <div class="userccount">
                    <div class="formpanel mt0"> @include('flash::message')
                        <!-- Personal Information -->
                        {{-- @include('user.inc.profile')   --}}
                        <h2>Edit Profile</h2>
                        <div class="container-fluid">
                          <div class="row justify-content-center">
                            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2 id="heading">Enter All Valid Information</h2>
                                    <form style="width: 90%; margin:0px auto" id="msform" action="{{route('all.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="account"><strong>Tuition</strong></li>
                                            <li id="personal"><strong>Education</strong></li>
                                            <li id="payment"><strong>Personal</strong></li>
                                            <li id="confirm"><strong>Credentials</strong></li>
                                            {{-- <li id="complete"><strong>Quiz</strong></li> --}}
                                        </ul>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <br>
                                        <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                              <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Tution:</h2>
                                                  </div>
                                                  <div class="col-5">
                                                    <h2 class="steps">Step 1 - 5</h2>
                                                  </div>
                                                </div>
                                                <div>
                                                    <h6>Preferable Categories</h6>
                                                    <select class="js-example-basic-multiple" id="sel" name="category[]" multiple="multiple" >
                                                        @foreach ($cat as $cat)
                                                            <option value="{{$cat}}" selected>{{$cat}}</option>
                                                        @endforeach
                                                        @foreach ($category as $category)
                                                            <option value="{{$category->name}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <hr>
                                                <div>
                                                    <h6>Preferable Classes</h6>
                                                    <select class="js-example-basic-multiple" id="sel" name="class[]" multiple="multiple" >
                                                        @foreach($cla as $cla)
                                                        <option value="{{$cla}}" selected>{{$cla}}</option>
                                                        @endforeach
                                                        @foreach($classes as $class)
                                                            <option value="{{$class->name}}">{{$class->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                    <hr>                                                          
                                                    {{-- <label for="">Preferable Subjects</label> --}}
                                                    <h6>Preferable Subjects</h6>
                                                    <select class="js-example-basic-multiple" id="sel" name="subject[]" multiple="multiple" >
                                                        @foreach($sub as $sub)
                                                        <option value="{{$sub}}" selected>{{$sub}}</option>
                                                        @endforeach
                                                        @foreach($subjects as $subject)
                                                            <option value="{{$subject->name}}">{{$subject->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <hr>                                                            
                                                    <h6>Place of Tutoring</h6>
                                                    <select class="js-example-basic-multiple" id="sel" name="place[]" multiple="multiple" >
                                                        @foreach($pla as $pla)
                                                            <option value="{{$pla}}" selected>{{$pla}}</option>
                                                        @endforeach
                                                        <option value="Student Home">Student Home</option>
                                                        <option value="My Home">My Home</option>
                                                        <option value="Online">Online</option>
                                                    </select>                                                          
                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next"/>
                                        </fieldset>
                                        
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Education:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 2 - 5</h2>
                                                    </div>
                                                </div>
                                                <div>
                                                    @include('user.forms.education.education')
                                                </div>
                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next"/>
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Personal Information:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 3 - 5</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'gender_id') !!}">
                                                            <label for="">{{__('Gender')}}</label>
                                                            {!! Form::select('gender_id', [''=>__('Select Gender')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id')) !!}
                                                            {!! APFrmErrHelp::showErrors($errors, 'gender_id') !!} 
                                                        </div>                                                                      
                                                        <label class="fieldlabels in">Detailed Address:</label>
                                                        <textarea name="address" class="form-control" id="summary" placeholder="Detailed Address">{{$user->address }}</textarea>
                                                        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'date_of_birth') !!}">
                                                            <?php 
                                                            if(!empty($user->date_of_birth)){
                                                                $d = $user->date_of_birth;
                                                            }else{
                                                                $d = date('Y-m-d', strtotime('-16 years'));
                                                            }
                                                            $dob = old('date_of_birth')?date('Y-m-d',strtotime(old('date_of_birth'))):date('Y-m-d',strtotime($d));
                                                            ?>
                                                            <label for="">{{__('Date of Birth')}}</label>
                                                            {!! Form::date('date_of_birth', $dob, array('class'=>'form-control', 'id'=>'date_of_birth', 'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off')) !!}
                                                            {!! APFrmErrHelp::showErrors($errors, 'date_of_birth') !!} 
                                                        </div>
                                                        
                                                        <label class="fieldlabels in">Identity Type:</label>
                                                        <select id="id" name="identity_type" class="form-control">
                                                            <option value="bic">Birth Certificate</option>
                                                            <option value="nid">National ID Card</option>
                                                        </select>

                                                        <label class="fieldlabels in">Identity Number:</label>
                                                        <input type="text" class="form-control" name="national_id_card_number" placeholder="Identity Number" value="{{ $user->national_id_card_number }}"/>


                                                        <label class="fieldlabels in">Religion.:</label>
                                                        <input type="text" class="form-control" name="religion" placeholder="Religion" value="{{$user->religion}}"/>

                                                        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'nationality_id') !!}">
                                                            <label for="">{{__('Nationality')}}</label>
                                                            {!! Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null, array('class'=>'form-control', 'id'=>'nationality_id')) !!}
                                                            {!! APFrmErrHelp::showErrors($errors, 'nationality_id') !!} 
                                                        </div>

                                                        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
                                                            <label for="">{{__('Country')}}</label>
                                                            <?php $country_id = old('country_id', (isset($user) && (int) $user->country_id > 0) ? $user->country_id : $siteSetting->default_country_id); ?>
                                                            {!! Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id, array('class'=>'form-control', 'id'=>'country_id')) !!}
                                                            {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} 
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <label class="fieldlabels in">Father's Name:</label>
                                                        <input type="text" class="form-control" name="father_name" placeholder="Father's Name" value="{{ $user->father_name }}"/>
                                                        <label class="fieldlabels in ">Father's Number:</label>
                                                        <input type="text" class="form-control" name="father_no" placeholder="Father's Number" value="{{ $user->father_no }}"/>
                                                        <label class="fieldlabels in">Mother's Name:</label>
                                                        <input type="text" class="form-control" name="mother_name" placeholder="Mother's Name" value="{{ $user->mother_name }}"/>
                                                        <label class="fieldlabels in">Mother's Number:</label>
                                                        <input type="text" class="form-control" name="mother_no" placeholder="Mother's Number" value="{{ $user->mother_no }}"/>
                                                        <label class="fieldlabels in">Emergency Contact No.:</label>
                                                        <input type="text" class="form-control" name="e_no" placeholder="Emergency Contact No." value="{{ $user->mobile_num }}"/>
                                                        
                                                        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'state_id') !!}">
                                                            <label for="">{{__('Division')}}</label>
                                                            <span id="state_dd"> {!! Form::select('state_id', [''=>__('Select Division')], null, array('class'=>'form-control', 'id'=>'state_id')) !!}</span>
                                                            {!! APFrmErrHelp::showErrors($errors, 'state_id') !!} 
                                                        </div>
                                                        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
                                                            <label for="">{{__('Area')}}</label>
                                                            <span id="city_dd"> {!! Form::select('city_id', [''=>__('Select Area')], null, array('class'=>'form-control', 'id'=>'city_id')) !!} </span> 
                                                            {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Next"/>
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        </fieldset>
                                        
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Credentials Upload:</h2>
                                                  </div>
                                                  <div class="col-5">
                                                    <h2 class="steps">Step 4 - 5</h2>
                                                  </div>
                                                </div>
                                                @include('user.forms.cv.cvs')
                                            </div>
                                            <input type="button" name="next" class="next action-button" value="Submit"/>
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                                        </fieldset>

                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Image Upload:</h2>
                                                  </div>
                                                  <div class="col-5">
                                                    <h2 class="steps">Step 4 - 5</h2>
                                                  </div>
                                                </div>
                                                <label class="fieldlabels">Upload Your Photo:</label>
                                                <input type="file" name="pic" accept="image/*">
                                                <label class="fieldlabels">Upload Signature Photo:</label>
                                                <input type="file" name="pic" accept="image/*">
                                            </div>
                                            <input type="submit" >
                                        </fieldset> 

                                        <fieldset>
                                            <div class="form-card">
                                              <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Quiz:</h2>
                                                  </div>
                                                  <div class="col-5">
                                                    <h2 class="steps">Step 5 - 5</h2>
                                                  </div>
                                                </div>
                                                <br><br>
                                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                                                <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3">
                                                        <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
      
      var current_fs, next_fs, previous_fs; //fieldsets
      var opacity;
      var current = 1;
      var steps = $("fieldset").length;
      console.log(current);
      
      setProgressBar(current);
      
      $(".next").click(function(){
          
          current_fs = $(this).parent();
          next_fs = $(this).parent().next();
          
          //Add Class Active
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
          
          //show the next fieldset
          next_fs.show(); 
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
              step: function(now) {
                  // for making fielset appear animation
                  opacity = 1 - now;
      
                  current_fs.css({
                      'display': 'none',
                      'position': 'relative'
                  });
                  next_fs.css({'opacity': opacity});
              }, 
              duration: 500
          });
          setProgressBar(++current);
      });
      
      $(".previous").click(function(){
          
          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();
          
          //Remove class active
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
          
          //show the previous fieldset
          previous_fs.show();
      
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
              step: function(now) {
                  // for making fielset appear animation
                  opacity = 1 - now;
      
                  current_fs.css({
                      'display': 'none',
                      'position': 'relative'
                  });
                  previous_fs.css({'opacity': opacity});
              }, 
              duration: 500
          });
          setProgressBar(--current);
      });
      
      function setProgressBar(curStep){
          var percent = parseFloat(100 / steps) * curStep;
          percent = percent.toFixed();
          $(".progress-bar")
            .css("width",percent+"%")   
      }
      
      $(".submit").click(function(){
          return false;
      })
          
      });


</script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.js-example-basic-multiple').select2();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        initdatepicker();
        $('#salary_currency').typeahead({
            source: function (query, process) {
                return $.get("{{ route('typeahead.currency_codes') }}", {query: query}, function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    return process(data);
                });
            }
        });

        $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterStates(0);
        });
        $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterCities(0);
        });
        filterStates(<?php echo old('state_id', $user->state_id); ?>);

        /*******************************/
        var fileInput = document.getElementById("image");
        fileInput.addEventListener("change", function (e) {
            var files = this.files
            showThumbnail(files)
        }, false)
		
		var fileInput_cover_image = document.getElementById("cover_image");

        fileInput_cover_image.addEventListener("change", function (e) {

            var files_cover_image = this.files

            showThumbnail_cover_image(files_cover_image)

        }, false)
		
		
        function showThumbnail(files) {
            $('#thumbnail').html('');
            for (var i = 0; i < files.length; i++) {
                var file = files[i]
                var imageType = /image.*/
                if (!file.type.match(imageType)) {
                    console.log("Not an Image");
                    continue;
                }
                var reader = new FileReader()
                reader.onload = (function (theFile) {
                    return function (e) {
                        $('#thumbnail').append('<div class="fileattached"><img height="100px" src="' + e.target.result + '" > <div>' + theFile.name + '</div><div class="clearfix"></div></div>');
                    };
                }(file))
                var ret = reader.readAsDataURL(file);
            }
        }
		
		
		function showThumbnail_cover_image(files) {

        $('#thumbnail_cover_image').html('');

        for (var i = 0; i < files.length; i++) {

            var file = files[i]

            var imageType = /image.*/

            if (!file.type.match(imageType)) {

                console.log("Not an Image");

                continue;

            }
            var reader = new FileReader()
            reader.onload = (function (theFile) {
                return function (e) {
                    $('#thumbnail_cover_image').append('<div class="fileattached"><img height="100px" src="' + e.target.result + '" > <div>' + theFile.name + '</div><div class="clearfix"></div></div>');
                };
            }(file))
            var ret = reader.readAsDataURL(file);
        }
    }
    });
    function filterStates(state_id)
    {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("{{ route('filter.lang.states.dropdown') }}", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#state_dd').html(response);
                        filterCities(<?php echo old('city_id', $user->city_id); ?>);
                    });
        }
    }
    function filterCities(city_id)
    {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("{{ route('filter.lang.cities.dropdown') }}", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#city_dd').html(response);
                    });
        }
    }
    function initdatepicker() {
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'yyyy-m-d'
        });
    }
</script>
@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
    .userccount p{ text-align:left !important;}
    .modal-backdrop {
        z-index: -9999 !important;
    }
</style>
@endpush
@push('scripts')
@include('includes.immediate_available_btn')
@endpush
