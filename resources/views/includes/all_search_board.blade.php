<div class="section greybg">
    <div class="container">
        <h3 class="seekertxt"> <span>{{__('Search Available Tutors & Tution')}}.</span></h3>
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