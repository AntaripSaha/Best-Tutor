
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
    
</style>
    <h5>Tution Related Information</h5>
<form action="{{route('tutor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Categories</label>
                <select class="form-control select2-multiple" name="category[]" multiple="multiple">
                    <option value="">--Select Category--</option>
                    @foreach ($category as $category)
                    <option value="{{$category->major_subject}}">{{$category->major_subject}}</option>
                    @endforeach
                  </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Classes</label>
                <select class="form-control select2-multiple" name="category[]" multiple="multiple">
                    <option value="">--Select Classes--</option>
                    
                  </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Categories</label>
                <select class="form-control select2-multiple" name="category[]" multiple="multiple">
                    <option value="">--Select Category--</option>
                    
                  </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="formrow">
                <label for="">Preferable Categories</label>
                <select class="form-control select2-multiple" name="category[]" multiple="multiple">
                    <option value="">--Select Category--</option>
                    
                  </select>
            </div>
        </div>
    </div>
    <button type="submit" id="tution_submit">Submit</button>
</form>
<hr>

