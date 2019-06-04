<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <br/>
                <br/>
                <br/>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                
                <div align="center"><h2> <b>Register</b> User</h2></div>
                <form method="POST" action="{!! url('save') !!}">
                    {{csrf_field()}}
                    <div class="form-group">
                        Enter Name
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        Enter Email id
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block;">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="SAVE">
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>