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
            body{
                
                background-repeat: no-repeat;
                background-size:100% 100%;
                background-position: center ;
                   
            } 
            /* #wrapper{
                width: 100%;
                height: 100%;
                
            }  */
            .btns form{
                margin-top:80px;
                
            }
            .btns p{
                font-size: 28px;
            }
           
               
                
            } 
            .row{
                
                height: 85%;
                width: 100%;
                background-color: white;
            } 
            .row::before{
                border: 1px black;
            }         
#welcome-text{   
       
}
            #welcome-text img{
              height:132%;
              width: 130%;
              margin-right:0px;
               
            }
            
             #auth-card{
                /* box-shadow: 3px 4px 5px #fff; */
                padding-right:30px;
                margin-left: 10px;
                height: 100%;
                background-color:white;
                margin: 0 auto;
                padding-top: 200px;
               
                
             }  
             .auth-buttons {
               margin-left:300px;
               margin-top:-180px;
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
            background-color:none;
            color:black;
            font-size: 18px;
            width:80%;
            float: left;
            margin: 0 10px;
             }
           
             .active{
                border-bottom:2px solid turquoise!important; 
              }
              
            </style>
</head>
<body>
<div class="container" id="wrapper">
<div class="row no-gutters">
<div class="col-lg-6" >
<div id="auth-card">
        <div class="auth-buttons" >
                <a class="btn" id="btn-login">Login</a>
                <a class="btn" id="btn-register">Register</a>
                
                </div>
                
<div id="lgn" class="btns">
    <span class="logo">
    <h5>To<font color="#F4D03F ">Do</font></h5>
    </span>
    <p> Welcome back, <br> <b>Matildah! </b>
    </p>
        <form action="/login" method="post">
            <div class="textbox">
                <i class="icon-user"></i>
                <input type="email" placeholder="Email" name="" value="" class="inputs" >
            </div>
             
            <div class="textbox">
                    <i class="icon-lock"></i>
                <input type="password" placeholder="Password" name="" value="" class="inputs" autocomplete="new-password">
            </div>
            <input type="submit" value="Login">
            
        </form>
</div>
<div id="reg" class="btns">
        <span class="logo">
                <h5>To<font color="#F4D03F ">Do</font></h5>
                </span>
    <p>Create account</p>
    <form action="/login" method="post" >
        <div class="textbox">
            <i class="icon-user"></i>
            <input type="name" placeholder="Username" name="" value="" class="inputs">
        </div>
         
        <div class="textbox">
                <i class="icon-lock"></i>
            <input type="password" placeholder="Password" name="" value="" class="inputs" autocomplete="new-password">
        </div>
        
        <div class="textbox">
            <i class="icon-lock"></i>
        <input type="password" placeholder="confirm password" name="" value="" class="inputs">
    </div>
    <input type="submit" value="Create Account">
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
<img src="css/index3.jpg">
<div> {{--End of welcome-text column--}}
</div> {{--End of row--}}
</div>
</div>

</body>

</html>