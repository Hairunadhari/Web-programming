<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>INDOTRAVI</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('assets-landingpage/auth/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('assets-landingpage/auth/css/style.css')}}">
	</head>
    <style>
        .wrapper {
            position: relative;
            width: 100%;
            height: 100vh; 
            background-image: url('assets-landingpage/img/1.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        
        .inner {
            position: relative;
            z-index: 2; 
            background: #fff; 
            padding: 20px;
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        }
        </style>
	<body>

		<div class="wrapper">
            <div class="inner">
                <div class="image-holder">
                    <img src="{{asset('assets-landingpage/img/1.jpg')}}" alt="">
                </div>
                <form action="#">
                    <h3>Registrasi Form</h3>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Name" class="form-control">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="email" placeholder="Email" class="form-control">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="number" placeholder="No Telp" class="form-control">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <button>Register
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                    <div style="text-align: center; padding-top: 10px;">
                        <p>Sudah memiliki akun ? <a href="/login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>