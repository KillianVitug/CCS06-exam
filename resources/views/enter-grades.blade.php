<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Grades</title>
  </head>
  <body>

    <div class = "container">
    <h1>Hello, Students!</h1>
    <h5>Please Enter Your Name/s </h5>
    <hr>

    <form action="/computed-grades" method="POST">
    <input type="hidden" name="student_1" value= "{{ $student_1 }}">
    <input type="hidden" name="student_2" value= "{{ $student_2 }}">
    <input type="hidden" name="student_3" value= "{{ $student_3 }}">
    <input type="hidden" name="student_4" value= "{{ $student_4 }}">
    <input type="hidden" name="student_5" value= "{{ $student_5 }}">
    @csrf

<div class ="row">
    <label> Student Name: {{ $student_1 }} </label>
    <div class="col cols=md-6">
        <label> 1st Grade </label>
        <input type="number" class="form-control" name="s1_1stGrade">
    </div>
    <div class="col cols=md-6">
        <label> 2nd Grade </label>
        <input type="number" class="form-control" name="s1_2ndGrade">
    </div>
    </div>
    
    <div class ="row">
    <label> Student Name: {{ $student_2 }} </label>
    <div class="col cols=md-6">
        <label> 1st Grade </label>
        <input type="number" class="form-control" name="s2_1stGrade">
    </div>
    <div class="col cols=md-6">
        <label> 2nd Grade </label>
        <input type="number" class="form-control" name="s2_2ndGrade">
    </div>
    </div>

    <div class ="row">
    <label> Student Name: {{ $student_3 }} </label>
    <div class="col cols=md-6">
        <label> 1st Grade </label>
        <input type="number" class="form-control" name="s3_1stGrade">
    </div>
    <div class="col cols=md-6">
        <label> 2nd Grade </label>
        <input type="number" class="form-control" name="s3_2ndGrade">
    </div>
    </div>

    <div class ="row">
    <label> Student Name: {{ $student_4 }} </label>
    <div class="col cols=md-6">
        <label> 1st Grade </label>
        <input type="number" class="form-control" name="s4_1stGrade">
    </div>
    <div class="col cols=md-6">
        <label> 2nd Grade </label>
        <input type="number" class="form-control" name="s4_2ndGrade">
    </div>
    </div>

    <div class ="row">
    <label> Student Name: {{ $student_5 }} </label>
    <div class="col cols=md-6">
        <label> 1st Grade </label>
        <input type="number" class="form-control" name="s5_1stGrade">
    </div>
    <div class="col cols=md-6">
        <label> 2nd Grade </label>
        <input type="number" class="form-control" name="s5_2ndGrade">
    </div>
    </div>
    <hr>
    <div class="row">  
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
    </form>
</div>
</body>
</html>
    