<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
    <style>
        
            html,body{
             
                overflow: hidden;
                   
            } 
            
            .btns form{
                margin-top:80px;
                
            }
            .btns p{
                font-size: 28px;
            }
           
               
                
            } 
            #main-div{
               
                width: 1024px;
                height:768px;
           
            } 
            .col-lg-6{
                width:512px;
                height:100vh;
            
            }
            #welcome-text{
            background-image: url(css/index11.png);
            background-repeat: no-repeat;
            background-position-x: 80%;
            background-position-y: center;
            background-size:cover;

            position: relative;
            }
            #welcome-text p{
             font:42px;
             margin-top: 200px;
             bottom:0px;
            }
           
             #auth-card{
                /* box-shadow: 3px 4px 5px #fff; */
                padding:0px 40px 0px 40px ;
                margin-left: 10px;
               
                background-color:white;
                margin: 0 auto;
                padding-top: 200px;
                
              
             
             }  
             .auth-buttons {
               margin-top:-160px;
               margin-left:400px;
               position:absolute;  
             }
            
             .btn{
                border-bottom:1px solid ; 
                
                color: black;
                
                font-size: 18px;
             }
             .btn:hover{
                border-bottom:1px solid grey;
              
             }
             
             .textbox{
                 width: 100%;
                 overflow: hidden;
                 font-size: 20px;
                 padding: 8px 0;
                 margin: 8px 0;
                 border-bottom: 1px solid;
             }
             .logo h5{
              position: absolute;
              margin-top: -161px;
             }

             }
             .textbox i{
                 margin-left:12px;
                 margin-right: 2px;
                 color: turquoise;
             }
           .textbox input{
            border:none;
            outline: none;
            color:black;
            font-size: 18px;
            width:80%;
            float: left;
            margin: 0 10px;
             }
           
             .active{
                border-bottom:2px solid turquoise!important; 
              }
              .submit-buttons{
                  border-radius:25px;
                  padding:7px;
                  width:125px;
                  margin-left: 169px;
                  margin-top: 15px;
                  background-color:turquoise;
                  color:white;
                  font-weight: bold;
                  border:2px solid;
              }
              #terms{
                  margin-top: 20px;
              }
              
            </style>
</head>
<body>
<div class="row no-gutters" id="main-div" >
<div class="col-lg-6" >
<div id="auth-card">

        <div class="auth-buttons" >
                <a class="btn" id="btn-login">Login</a>
                <a class="btn" id="btn-register">Register</a>
                
                </div>
                
<div id="lgn" class="btns">
    <span class="logo">
    <h5>Day<font color="#F4D03F ">planner</font></h5>
    </span>
    <p> Welcome back, <br> <b>Matildah!</b>
    </p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="textbox">
                <i class="icon-envelope"></i>
                <input type="email" placeholder="Email" name="email" class="inputs">
                
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="textbox">
                    <i class="icon-lock"></i>
                <input type="password" placeholder="Password" name="password" value="" class="inputs" autocomplete="new-password">
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <input type="submit" value="Login" class="submit-buttons">
            
        </form>
</div>
<div id="reg" class="btns">
    <span class="logo">
        <h5>Day<font color="#F4D03F ">planner</font></h5>
        </span>
    <p>Create account</p>
    <form action="{{route('register')}}" method="POST" >
       
        <div class="textbox">
            <i class="icon-user"></i>
            <input type="name" placeholder="Username" name="name"  class="inputs">
            
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        </div>
        <div class="textbox">
            <i class="icon-envelope"></i></i>
        <input type="email" placeholder="Email" name="email"  class="inputs">
    
    </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="textbox">
                <i class="icon-lock"></i>
            <input type="password" placeholder="Password" name="password"  class="inputs" autocomplete="new-password">
        
        </div>
        
        <div class="textbox">
            <i class="icon-lock"></i>
        <input type="password" placeholder="confirm password"name="password_confirmation" value="" class="inputs">
    </div>
    <div id="terms"><input type="checkbox"> I have read and agreed to the <a href="">terms and conditions</a></div>
    
    <input type="submit" value="Register" class="submit-buttons">
    </form>  
</div> {{--End of auth-card--}}
</div>
</div>
<script>

        $('#reg').hide();
        $('#btn-login').click(function(){
            $('#reg').hide();
            $('#lgn').show();
        });
        $('#btn-register').click(function(){
            $('#lgn').hide();
            $('#reg').show();
        });
        </script>
        <script>
        $('.auth-buttons a').on('click',function(){
          $('a').removeClass('active');
          $(this).addClass('active');
        });
              
        </script>   
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="col-lg-6" id="welcome-text" >

<div> {{--End of welcome-text column--}}
        
</div> {{--End of row--}}
</div>
</div>

</body>

</html>