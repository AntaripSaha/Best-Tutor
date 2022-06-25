@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('My Profile')]) 
<!-- Inner Page Title end -->
<style>
  body {
    font-family: Arial;
    background: #491c5e !important;
  
  }

    /* Style the tab */
    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #6c2a8c;
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 45px 50px;
    transition: 0.3s;
    font-size: 19.4px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #3490dc;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #3490dc;
    
    
    }
    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    }
    .new_head{
      background: #d6e9f8;
      margin-bottom: 2%;
      padding: 2%;
      border-radius: 4px;
      text-align: center
    }
    @media screen and (max-width: 1164px) {
      
    /* Style the tab */
    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #6c2a8c;
    }

    /* Style the buttons inside the tab */
    .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 20px 17px;
    transition: 0.3s;
    font-size: 11.4px;
    font-weight: bold;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
    background-color: #3490dc;
    }

    /* Create an active/current tablink class */
    .tab button.active {
    background-color: #3490dc;
    
    
    }
    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    }
    .new_head{
      background: #d6e9f8;
      margin-bottom: 2%;
      padding: 2%;
      border-radius: 4px;
      text-align: center
    }

  }

</style>
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            @include('includes.user_dashboard_menu')
            
            <div class="col-md-9 col-sm-12"> 
              <div class="new_head">
                <h4>
                   Tutor ID: {{$user->id}}
                </h4>
                <h2>Update Profile</h2>
              </div>
              <div class="userccount" style="padding: 0px !important;">
                <div class="formpanel mt0"> 
                  @include('flash::message') 
                    <!-- Personal Information -->
                    {{-- @include('user.inc.profile')   --}}
                    <div class="tab">
                      <button class="tablinks" onclick="openCity(event, 'Profile')"><i class="fa fa-users" aria-hidden="true"></i> &nbsp Profile</button>
                      <button class="tablinks" onclick="openCity(event, 'Tution')"><i class="fa fa-book" aria-hidden="true"></i>  &nbsp  Tution &nbsp</button>
                      <button class="tablinks" onclick="openCity(event, 'Education')"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  &nbsp Education</button>
                      <button class="tablinks" onclick="openCity(event, 'Credential')"><i class="fa fa-files-o" aria-hidden="true"></i>  &nbsp Credential</button>
                      {{-- <button class="tablinks" onclick="openCity(event, 'Language')">Language</button> --}}
                    </div>
                    <div id="Profile" class="tabcontent" style="display: block !important">
                      <h3></h3>@include('flash::message')
                      @include('user.inc.profile')
                      @include('user.inc.summary')
                    </div>
                    <div id="Tution" class="tabcontent">
                        @include('user.forms.tution.tution')
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
