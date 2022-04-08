<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>FinalGrades</title>
  </head>
  <body>
<div class = "container">
    <h1>Hello, Students!</h1>
    <h5>These are your outputs! </h5>
    <hr>

    <table class="table table striped table hover">
        <thead>
        <tr>
            <th scope= "col"> Student Name </th>
            <th scope= "col"> Midterm Grade</th>
            <th scope= "col"> Finals Grade </th>
            <th scope= "col"> Average Grade </th>
            <th scope= "col"> Remarks </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td> {{ $student_1 }} </td>
            <td> {{ $s1_1stGrade }} </td>
            <td> {{ $s1_2ndGrade }} </td>
            <td> {{ $s1_finalGrade }} </td>
            <td>{{ $s1_remark }}</td>
            
        </tr>
        <tr>
            <td> {{ $student_2 }} </td>
            <td> {{ $s2_1stGrade }} </td>
            <td> {{ $s2_2ndGrade }} </td>
            <td> {{ $s2_finalGrade }} </td>
            <td>{{ $s2_remark }}</td>
        </tr>
        <tr>
            <td> {{ $student_3 }} </td>
            <td> {{ $s3_1stGrade }} </td>
            <td> {{ $s3_2ndGrade }} </td>
            <td> {{ $s3_finalGrade }} </td>
            <td>{{ $s3_remark }}</td>
        </tr>
        <tr>
            <td> {{ $student_4 }} </td>
            <td> {{ $s4_1stGrade }} </td>
            <td> {{ $s4_2ndGrade }} </td>
            <td> {{ $s4_finalGrade }} </td>
            <td>{{ $s4_remark }}</td>
        </tr>
        <tr>
            <td> {{ $student_5 }} </td>
            <td> {{ $s5_1stGrade }} </td>
            <td> {{ $s5_2ndGrade }} </td>
            <td> {{ $s5_finalGrade }} </td>
            <td>{{ $s5_remark }}</td>
        </tr>
    </tbody>
    </table>
</div>
</body>
</html>