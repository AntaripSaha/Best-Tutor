<style>
    @media screen and (max-width: 560px) {
            .searchbar .form-control {
                height: 1px !important;
                padding: 22px 74px !important;
                border: none !important;
                font-size: 16px !important;
                box-shadow: 0px 20px 40px 5px rgb(0 0 0 / 20%) !important;
            }
            .searchbar .btn {
                width: 185% !important;
            }
            .seekersrch {
                max-width: 700px !important;
                background: #fff !important;
                padding: 10px !important;
                box-shadow: 0px 20px 40px 5px rgb(0 0 0 / 20%) !important;
                border-radius: 5px !important;
            }
            .section {
                padding: 16px 0 !important;
                overflow: hidden !important;
            }
            #title_seekertxt{
                font-size: 25px !important;
                margin-bottom: -7% !important;
            }
            
    }
    @media screen and (max-width: 360px) {
        .searchbar .btn {
                width: 160% !important;
            }
    }


</style>

<div class="section greybg">
    <div class="container">
        <h3 id="title_seekertxt" class="seekertxt"> <span>{{__('Search Available Tutors & Tution')}}.</span></h3>
        <div class="row">
            <div class="col-md-6">
                <div class="topsearchwrap">
                    <form action="{{route('job.seeker.list')}}" method="get">
                        {{-- <div class="">
                                <input type="submit" class="btn btn-info btn-lg" value="{{__('Search Tutors')}}">
                        </div> --}}
                        <div class="searchbar">
                            <div class="srchbox seekersrch">		
                            <div class="input-group">
                              <input type="text"  name="search" id="empsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="" autocomplete="off" />
                              <span class="input-group-btn">
                                <input type="submit" class="btn" value="{{__('Search Tutors')}}">
                              </span>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="topsearchwrap">
                    {{-- <h3 class="seekertxt"> <span>{{__('Search Available Tutors & Tution')}}.</span></h3> --}}
                    <form action="{{route('job.list')}}" method="get">
                        {{-- <div class="">
                                <input type="submit" class="btn btn-info btn-lg" value="{{__('Search Tutors')}}">
                        </div> --}}
                        <div class="searchbar">
                            <div class="srchbox seekersrch">		
                            <div class="input-group">
                              <input type="text"  name="search" id="empsearch" value="{{Request::get('search', '')}}" class="form-control" placeholder="" autocomplete="off" />
                              <span class="input-group-btn">
                                <input type="submit" class="btn" value="{{__('Search Tution')}}">
                              </span>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>            
            </div>
        </div>

    </div>
</div>