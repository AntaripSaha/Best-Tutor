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
    $personal_info = \App\ProfileEducation::where('user_id', auth()->user()->id)->select('id','institution','date_completion','degree_result','degree_title')->get();
  ?>
  <div> 
    @foreach ($personal_info as $key=>$personal_info)
      <h4>Degree: {{$personal_info->degree_title}}</h4>
      <h6>Institution: {{$personal_info->institution}}</h6>
      <p>Passign Year: {{$personal_info->date_completion}}</p>
      <p>Results: {{$personal_info->degree_result}}</p>
      <a href="{{route('education.delete', ['id'=>$personal_info->id])}}">
        <button type="button" class="">
          Delete
        </button>
      </a>
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
          <button type="button" class="close" data-dismiss="modal" id="modal_close">&times;</button>
          
        </div>

    {{-- <form action="#" method="post" enctype="multipart/form-data">
      @csrf
      </form> --}}
          <div class="modal-body">
              <select class="form-control" name="degree_id" id="degree_id">
                  @foreach($degree as $degree)
                      <option value="{{$degree->id}}">{{$degree->degree_level}}</option>
                  @endforeach
              </select>

              <label for="">Exam / Degree Title</label>
              <input class="form-control" type="text" name="degree_title" id="degree_title">

              <label for="">Concentration / Major / Group *</label>
              <input class="form-control" type="text" name="major" id="major">

              <label for="">Institute Name</label>
              <input class="form-control" type="text" name="institute_name" id="institute_name">

              <label for="">Result</label>
              <input class="form-control" type="text" name="result" id="result">

              <label for="">Year of Passing</label>
              <input class="form-control" type="text" name="passing_year" id="passing_year">

              <label for="">From Date</label>
              <input class="form-control" type="date" name="from_date" id="from_date">

              <label for="">To Date</label>
              <input class="form-control" type="date" name="to_date" id="to_date">
            </div>
            <div class="modal-footer">
              <button type="button" data-id="5" class="btn btn-default" id="Button">Submit</button>
            </div>
      </div>
    </div>
  </div>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#Button').on('click', function(){
      var degree_id = document.getElementById('degree_id').value;
      var degree_title = document.getElementById('degree_title').value;
      var major = document.getElementById('major').value;
      var institute_name = document.getElementById('institute_name').value;
      var result = document.getElementById('result').value;
      var passing_year = document.getElementById('passing_year').value;
      var from_date = document.getElementById('from_date').value;
      var to_date = document.getElementById('to_date').value;
      

      $.ajax({
         headers: {
              'X-CSRF-TOKEN': '<?php echo csrf_token() ?>'
          },
          type:'POST',
          url: "{{ route('education.store') }}",
          data: {
            'degree_title': degree_title,
            'degree_id': degree_id,
            'major': major,
            'institute_name': institute_name,
            'result': result,
            'passing_year': passing_year,
            'from_date': from_date,
            'to_date': to_date
          },
          dataType : 'json',
          success: function(data) {
            $('#myModal').modal('hide');
            window.location.reload();
          }
      });
        
    });
});
</script>