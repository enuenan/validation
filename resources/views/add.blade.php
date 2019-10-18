<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style media="screen">
      .error{
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col-md-5">
        <h2>Employee form</h2>
        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        <form method="post" action="{{ URL::to('store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            <span class="error">{{ $errors->first('name') }}</span>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            <span class="error">{{ $errors->first('email') }}</span>
          </div>
          <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="tel" class="form-control" id="contact" name="contact" pattern="01[1|5|6|7|8|9][0-9]{8}" value="{{ old('contact') }}">
            <span class="error">{{ $errors->first('contact') }}</span>
          </div>
          <div class="form-group">
            <label for="dob">Birth Date:</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
            <span class="error">{{ $errors->first('dob') }}</span>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            <span class="error">{{ $errors->first('address') }}</span>
          </div>
          <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" value="{{ old('salary') }}">
            <span class="error">{{ $errors->first('salary') }}</span>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" value="{{ old('password') }}">
            <span class="error">{{ $errors->first('password') }}</span>
          </div>
          <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" id="pwd" name="confirm_password" value="{{ old('confirm_password') }}">
            <span class="error">{{ $errors->first('confirm_password') }}</span>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </body>
</html>
