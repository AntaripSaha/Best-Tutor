<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
    $degree = \App\DegreeLevel::select('id','degree_level')->get();
    $personal_info = \App\ProfileEducation::where('user_id', auth()->user()->id)->select('institution','date_completion','degree_result','degree_title')->get();
  ?>
  <div> 
    @foreach ($personal_info as $key=>$personal_info)
      <h4>Degree: {{$personal_info->degree_title}}</h4>
      <h6>Institution: {{$personal_info->institution}}</h6>
      <p>Passign Year: {{$personal_info->date_completion}}</p>
      <p>Results: {{$personal_info->degree_result}}</p>
    @endforeach
  </div>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Education</button>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Education</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>

    {{-- <form action="#" method="post" enctype="multipart/form-data">
      @csrf
      </form> --}}
          <div class="modal-body">

              <select class="form-control" name="degree_id" id="cars">
                  @foreach($degree as $degree)
                      <option value="{{$degree->id}}">{{$degree->degree_level}}</option>
                  @endforeach
              </select>

              <label for="">Exam / Degree Title</label>
              <input class="form-control" type="text" name="degree_title">

              <label for="">Concentration / Major / Group *</label>
              <input class="form-control" type="text" name="major">

              <label for="">Institute Name</label>
              <input class="form-control" type="text" name="institute_name">

              <label for="">Result</label>
              <input class="form-control" type="text" name="result">

              <label for="">Year of Passing</label>
              <input class="form-control" type="text" name="passing_year">

              <label for="">From Date</label>
              <input class="form-control" type="date" name="from_date">

              <label for="">To Date</label>
              <input class="form-control" type="date" name="to_date">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" >Submit</button>
            </div>
      </div>
    </div>
  </div>

</body>

</html>