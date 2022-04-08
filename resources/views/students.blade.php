<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Students</title>
  </head>
  <body>
  <div class = "container">
    <h1>Hello, Students!</h1>
    <h5>Please Enter Your Names </h5>
    <hr>

    <form class="needs-validation" novalidate action="/enter-grades" method="POST" >
    @csrf
    @for ($i = 1; $i <= 5; $i ++)
    <div class="mb-3">
        <label> Student {{ $i }} Name: </label>
        <input type="text" class="form-control" name="student_{{ $i }}" required />
        <div class="invalid-feedback">
        Please enter a message in the textarea.
        </div>
    </div>
    @endfor
    <hr>
    <div class="row">  
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
    </form>

</div>
  </body>
</html>