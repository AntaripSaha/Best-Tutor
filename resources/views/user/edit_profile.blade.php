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
                                                <h2 id="heading">Sign Up Your User Account</h2>
                                
                                                <form id="msform">
                                                    <!-- progressbar -->
                                                    <ul id="progressbar">
                                                        <li class="active" id="account"><strong>Tuition</strong></li>
                                                        <li id="personal"><strong>Education</strong></li>
                                                        <li id="payment"><strong>Personal</strong></li>
                                                        <li id="confirm"><strong>Credentials</strong></li>
                                                        <li id="complete"><strong>Quiz</strong></li>
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
                                                                <select class="js-example-basic-multiple" id="sel" name="states[]" multiple="multiple" >
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
                                                                <select class="js-example-basic-multiple" id="sel" name="states[]" multiple="multiple" >
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
                                                                <select class="js-example-basic-multiple" id="sel" name="states[]" multiple="multiple" >
                                                                    @foreach($sub as $sub)
                                                                    <option value="{{$sub}}" selected>{{$sub}}</option>
                                                                    @endforeach
                                                                    @foreach($subjects as $subject)
                                                                        <option value="{{$subject->name}}">{{$subject->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <hr>                                                            
                                                                <h6>Place of Tutoring</h6>
                                                                <select class="js-example-basic-multiple" id="sel" name="states[]" multiple="multiple" >
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
                                                                    <label class="fieldlabels ">Additional Numbers:</label>
                                                                    <input type="text" class="form-control" name="father_name" placeholder="Additional Numbers"/>
                                                                    <label class="fieldlabels ">Details Address:</label>
                                                                    <input type="text" class="form-control" name="father_no" placeholder="Details Address"/>
                                                                    <label class="fieldlabels ">Identity Type:</label>
                                                                    <select id="id" name="id" class="form-control">
                                                                        <option value="bic">Birth Certificate</option>
                                                                        <option value="nid">National ID Card</option>
                                                                    </select>
                                                                    <label class="fieldlabels ">Identity Number:</label>
                                                                    <input type="text" class="form-control" name="mother_no" placeholder="Identity Number"/>
                                                                    <label class="fieldlabels">Date of Birth:</label>
                                                                    <input type="date" class="form-control" name="lname" placeholder="Date of Birth"/>


                                                                    <label class="fieldlabels">Religion.:</label>
                                                                    <input type="text" class="form-control" name="phno" placeholder="Religion"/>
                                                                    <label class="fieldlabels">Nationality:</label>
                                                                    <input type="text" class="form-control" name="phno_2" placeholder="Nationality"/>
                                                                </div>

                                                                <div class="col-6">
                                                                    <label class="fieldlabels ">Father's Name:</label>
                                                                    <input type="text" class="form-control" name="father_name" placeholder="Father's Name"/>
                                                                    <label class="fieldlabels ">Father's Number:</label>
                                                                    <input type="text" class="form-control" name="father_no" placeholder="Father's Number"/>
                                                                    <label class="fieldlabels ">Mother's Name:</label>
                                                                    <input type="text" class="form-control" name="mother_name" placeholder="Mother's Name"/>
                                                                    <label class="fieldlabels ">Mother's Number:</label>
                                                                    <input type="text" class="form-control" name="mother_no" placeholder="Mother's Number"/>
                                                                    <label class="fieldlabels">Last Name:</label>
                                                                    <input type="text" class="form-control" name="lname" placeholder="Last Name"/>
                                                                    <label class="fieldlabels">Contact No.:</label>
                                                                    <input type="text" class="form-control" name="phno" placeholder="Contact No."/>
                                                                    <label class="fieldlabels">Alternate Contact No.:</label>
                                                                    <input type="text" class="form-control" name="phno_2" placeholder="Alternate Contact No."/>
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
                                                        <input type="button" name="next" class="next action-button" value="Submit"/>
                                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
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

@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
    .userccount p{ text-align:left !important;}
</style>
@endpush
@push('scripts')
@include('includes.immediate_available_btn')
@endpush
