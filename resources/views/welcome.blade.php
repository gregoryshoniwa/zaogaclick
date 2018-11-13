
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZAOGA Click - SAP Intergrated System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap core CSS -->
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="landing/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/select2.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="landing/css/coming-soon.min.css" rel="stylesheet">

  </head>

  <body>

    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="landing/mp4/bg.mp4" type="video/mp4">
    </video>
    <style>
        *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

        /* Full-width input fields */
        input[type=text], input[type=password],input[type=email] {
            width: 90%;
            padding: 12px 20px;
            margin: 8px 26px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size:16px;
        }
        .selector {

            width: 455px;
            padding: 12px 20px;
            margin: 8px 26px;
            right: 100px;
            margin-right: 100px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size:16px;
        }



        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 26px;
            border: none;
            cursor: pointer;
            width: 90%;
            font-size:20px;
        }
        button:hover {
            opacity: 0.8;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        .avatar {
            width: 150px;
            height:150px;
            border-radius: 50%;
        }

        /* The Modal (background) */
        .modal {
            display:none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        /* Modal Content Box */
        .modal-content {
            background-color: #fefefe;
            margin: 3% 5% 15% auto;
            border: 1px solid #888;
            width: 40%;
            padding-bottom: 30px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .close:hover,.close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            animation: zoom 0.6s
        }
        @keyframes zoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }
        </style>
    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">

          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <img src="landing/img/logo.png" height="150" width="220">
              <br><br>
              <h1 class="mb-3">ZAOGA Click</h1>
              <br>
              <p class="mb-5">Customised web based SAP intergrated church managment solution.
                <strong>Login </strong>or <strong>Sign up</strong> as a district or province</p>


                        @if (Route::has('login'))

                            @auth
                                <a class="btn btn-primary" href="{{ url('/home') }}">Home</a>
                            @else
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <button class="btn btn-primary" type="button" onclick="document.getElementById('modal-wrapper1').style.display='block'">
                                    Individual
                                </button>
                                <button class="btn btn-success" type="button" onclick="document.getElementById('modal-wrapper2').style.display='block'">
                                    Church Body
                                </button>
                                <button class="btn btn-warning" type="button" onclick="document.getElementById('modal-wrapper3').style.display='block'">
                                    Ministry Body
                                </button>
                            </div>
                                <!--
                                <a class="btn btn-primary" type="button" href="{{ route('login') }}">Individual</a>

                                @if (Route::has('register'))
                                    <a class="btn btn-success" type="button" href="{{ route('register') }}">Church Body</a>

                                    <a class="btn btn-secondary" type="button" href="{{ route('register') }}">Ministry Body</a>
                                @endif
                            @endauth
                                -->
                        @endif


            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="modal-wrapper1" class="modal">


        <div class="modal-content animate" >
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login1" role="tab" aria-controls="home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#signup1" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                        </li>
                        <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>


                </ul>
                <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login1" role="tabpanel" aria-labelledby="home-tab">
                                <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                    <div class="imgcontainer">
                                      <img src="login_signup/images/icon.png" alt="Avatar" class="avatar">
                                      <br><br>
                                      <h1 style="text-align:center">Individual Login</h1>
                                    </div>

                                    <div class="container">
                                            <input id="email" placeholder="Enter Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                            <input id="password" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                      <button type="submit">Login</button>

                                    </div>

                                </form>
                        </div>
                        <div class="tab-pane fade" id="signup1" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                    <div class="imgcontainer">
                                      <img src="login_signup/images/icon.png" alt="Avatar" class="avatar">
                                      <br><br>
                                      <h1 style="text-align:center">Individual Sign-up</h1>
                                    </div>

                                    <div class="container">
                                            <input id="name" placeholder="Full Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif

                                            <input id="email" placeholder="Email Adddress" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                            <input id="password" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                                      <button type="submit">Sign-Up</button>
                                    </div>

                                </form>
                        </div>

                </div>

        </div>


      </div>


      <div id="modal-wrapper2" class="modal"><div class="modal-content animate" >
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login2" role="tab" aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#signup2" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                    <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>


            </ul>
            <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login2" role="tabpanel" aria-labelledby="home-tab">
                            <form method="POST" action="{{ route('login') }}">

                                <div class="imgcontainer">
                                  <img src="login_signup/images/icon.png" alt="Avatar" class="avatar">
                                  <br><br>
                                  <h1 style="text-align:center">Church Login</h1>
                                </div>

                                <div class="container">
                                        <div class="selector">
                                                <select id="name_id3" style="width:410px" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name3" value="{{ old('name') }}" required autofocus>
                                                        <option></option>

                                                        @foreach ($churches as $item)
                                                        <option>{{$item->name}}</option>
                                                        @endforeach
                                                </select>
                                        </div>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif

                                            <input id="password3" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif

                                  <button type="submit">Login</button>
                                </div>

                            </form>
                    </div>
                    <div class="tab-pane fade" id="signup2" role="tabpanel" aria-labelledby="profile-tab">
                            <form method="POST" action="{{ route('register') }}">

                                <div class="imgcontainer">
                                  <img src="login_signup/images/icon.png" alt="Avatar" class="avatar">
                                  <br><br>
                                  <h1 style="text-align:center">Church Sign-up</h1>
                                </div>

                                <div class="container">
                                    <div class="selector">
                                        <select id="name_id4" style="width:410px" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name4" value="{{ old('name') }}" required autofocus>
                                                <option></option>

                                                @foreach ($churches as $item)
                                                <option>{{$item->name}}</option>
                                                @endforeach
                                        </select>
                                   </div>
                                   @if ($errors->has('name'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('name') }}</strong>
                                   </span>
                               @endif

                               <input id="password4" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password4" required>

                               @if ($errors->has('password'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                               <input id="password-confirm2" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation2" required>

                                  <button type="submit">Sign-Up</button>
                                </div>

                            </form>
                    </div>

            </div>

    </div>

      </div>


      <div id="modal-wrapper3" class="modal">

            <div class="modal-content animate" >
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#login3" role="tab" aria-controls="home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#signup3" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                            <span onclick="document.getElementById('modal-wrapper3').style.display='none'" class="close" title="Close PopUp">&times;</span>


                    </ul>
                    <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="login3" role="tabpanel" aria-labelledby="home-tab">
                                <form method="POST" action="{{ route('login') }}">

                                    <div class="imgcontainer">
                                      <img src="login_signup/images/icon.png" alt="Avatar" class="avatar">
                                      <br><br>
                                      <h1 style="text-align:center">Ministry Login</h1>
                                    </div>

                                    <div class="container">
                                            <div class="selector">
                                                    <select id="name_id5" style="width:410px" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name5" value="{{ old('name') }}" required autofocus>
                                                            <option></option>

                                                            @foreach ($ministies as $item)
                                                            <option>{{$item->name}}</option>
                                                            @endforeach
                                                    </select>
                                            </div>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif

                                                <input id="password5" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password3') ? ' is-invalid' : '' }}" name="password5" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password3') }}</strong>
                                                    </span>
                                                @endif

                                      <button type="submit">Login</button>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane fade" id="signup3" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="POST" action="{{ route('register') }}">

                                    <div class="imgcontainer">
                                      <img src="login_signup/images/icon.png" alt="Avatar" class="avatar">
                                      <br><br>
                                      <h1 style="text-align:center">Ministry Sign-up</h1>
                                    </div>

                                    <div class="container">
                                        <div class="selector">
                                            <select id="name_id6" style="width:410px" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name6" value="{{ old('name') }}" required autofocus>
                                                    <option></option>

                                                    @foreach ($ministies as $item)
                                                    <option>{{$item->name}}</option>
                                                    @endforeach
                                            </select>
                                       </div>
                                       @if ($errors->has('name'))
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('name') }}</strong>
                                       </span>
                                   @endif

                                   <input id="password4" placeholder="Enter Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password4" required>

                                   @if ($errors->has('password'))
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                   @endif
                                   <input id="password-confirm3" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation3" required>

                                      <button type="submit">Sign-Up</button>
                                    </div>

                                </form>
                            </div>

                    </div>

            </div>

      </div>


    <!-- Bootstrap core JavaScript -->
    <script src="landing/vendor/jquery/jquery.min.js"></script>
    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="landing/js/coming-soon.min.js"></script>
    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal-wrapper');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
<script src="js/jquery.min.js"></script>
<script src="js/select2.min.js"></script>

<script type="text/javascript">

      $("#name_id6").select2({
            placeholder: "Select a Name",
            allowClear: true
        });

         $("#name_id2").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
        $("#name_id3").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
        $("#name_id4").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
        $("#name_id5").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
</script>




</body>
</html>
