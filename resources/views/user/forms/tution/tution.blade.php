
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
</style>
    {{-- <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
    </div> --}}

    <h5>Tution Related Information</h5>
<form action="{{route('tutor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Categories</label>
                <select class="form-control select2-multiple" name="category[]" multiple="multiple" style="width: 260px !important;" required>
                    @foreach ($cat as $cat)
                        <option value="{{$cat}}" selected>{{$cat}}</option>
                    @endforeach
                    @foreach ($category as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Classes</label>
                <select class="form-control select2-multiple" name="class[]" multiple="multiple"  style="width: 260px !important;" required>
                    @foreach($cla as $cla)
                        <option value="{{$cla}}" selected>{{$cla}}</option>
                    @endforeach
                    @foreach($classes as $class)
                        <option value="{{$class->name}}">{{$class->name}}</option>
                    @endforeach
                  </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Subjects</label>
                <select class="form-control select2-multiple" name="subject[]" multiple="multiple" style="width: 260px !important;" required>
                    @foreach($sub as $sub)
                        <option value="{{$sub}}" selected>{{$sub}}</option>
                    @endforeach
                    @foreach($subjects as $subject)
                        <option value="{{$subject->name}}">{{$subject->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Place of Tutoring</label>
                <select class="form-control select2-multiple" name="place[]" multiple="multiple"  style="width: 260px !important;" required>
                    @foreach($pla as $pla)
                        <option value="{{$pla}}" selected>{{$pla}}</option>
                    @endforeach
                    <option value="Student Home">Student Home</option>
                    <option value="My Home">My Home</option>
                    <option value="Online">Online</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Prefarable Places</label>
                <select class="form-control select2-multiple" name="tutoring_place[]" multiple="multiple"  style="width: 260px !important;" required>
                    @foreach($pla_t as $pla_t)
                        <option value="{{$pla_t}}" selected>{{$pla_t}}</option>
                    @endforeach
                    @foreach ($place_tutoring as $place_tutor)
                        <option value="{{$place_tutor->city}}">{{$place_tutor->city}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <button type="submit" id="tution_submit">Submit</button>
</form>
<hr>

