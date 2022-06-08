
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
    <h5>Tution Related Information</h5>
<form action="{{route('tutor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Categories</label>
                <select class="form-control select2-multiple" name="category[]" multiple="multiple" style="width: 260px !important;">
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
                <select class="form-control select2-multiple" id="sel" name="class[]" multiple="multiple"  style="width: 260px !important;">
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
                <select class="form-control select2-multiple" id="sel" name="subject[]" multiple="multiple" style="width: 260px !important;">
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
                <select class="form-control select2-multiple" id="sel" name="place[]" multiple="multiple"  style="width: 260px !important;">
                    @foreach($pla as $pla)
                        <option value="{{$pla}}" selected>{{$pla}}</option>
                    @endforeach
                    <option value="Student Home">Student Home</option>
                    <option value="My Home">My Home</option>
                    <option value="Online">Online</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" id="tution_submit">Submit</button>
</form>
<hr>

