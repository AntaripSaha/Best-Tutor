@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('My Profile')]) 
<!-- Inner Page Title end -->
<style>
  body {font-family: Arial;}

    /* Style the tab */
    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    }
</style>
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
                                <p>Give Your Exact Information:</p>
                                
                                <div class="tab">
                                  <button class="tablinks" onclick="openCity(event, 'Profile')">Profile</button>
                                  <button class="tablinks" onclick="openCity(event, 'Description')">Description</button>
                                  <button class="tablinks" onclick="openCity(event, 'Tution')">Tution</button>
                                  <button class="tablinks" onclick="openCity(event, 'Skill')">Subjects</button>
                                  <button class="tablinks" onclick="openCity(event, 'Education')">Education</button>
                                  <button class="tablinks" onclick="openCity(event, 'Credential')">Credential</button>
                                  <button class="tablinks" onclick="openCity(event, 'Language')">Language</button>
                                </div>
                                <div id="Profile" class="tabcontent" style="display: block !important">
                                  <h3></h3>@include('flash::message')
                                  @include('user.inc.profile')
                                </div>
                                <div id="Description" class="tabcontent">
                                  @include('user.inc.summary')                                 
                                </div>
                                <div id="Tution" class="tabcontent">
                                    @include('user.forms.tution.tution')
                                </div>
                                <div id="Skill" class="tabcontent">
                                    @include('user.forms.skill.skills')
                                </div>
                                <div id="Education" class="tabcontent">
                                    @include('user.forms.education.education')
                                </div>
                                <div id="Credential" class="tabcontent">
                                    @include('user.forms.cv.cvs')
                                </div>
                                <div id="Education" class="tabcontent">
                                    @include('user.forms.education.education')
                                </div>
                                <div id="Language" class="tabcontent">
                                    @include('user.forms.language.languages')
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>  
</div>

<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>
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
