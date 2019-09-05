<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<style>
    body {
  font-family: Arial, sans-serif;
}

.container ul li {
  float: left;
  list-style: none;
}
.container .login-container {
  width: 100%;
  padding-bottom: 40px;
  /*login-box*/
}
.container .login-container .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  margin: -250px 0 0 -200px;
  /*login-form*/
}
.container .login-container .login-box .login-logo {
  padding: 0 0 20px 110px;
  border-bottom: 8px solid #f58733;
}
.container .login-container .login-box #login-form, .container .login-container .login-box #register-form {
  /*width: 100%;*/
  width: 400px;
  /*height: 290px;*/
  /*background: white;*/
  /* ICONS */
  /* TIPS */
}
.container .login-container .login-box #login-form #tab-login, .container .login-container .login-box #register-form #tab-login {
  padding: 7px 0 0 20px;
  color: #f58733;
}
.container .login-container .login-box #login-form #tab-register, .container .login-container .login-box #register-form #tab-register {
  padding: 8px 20px 0 0;
  text-align: right;
  color: #999;
  background: #fafafa;
  cursor: pointer;
}
.container .login-container .login-box #login-form #tab-register:hover, .container .login-container .login-box #register-form #tab-register:hover {
  color: #454a4a;
}
.container .login-container .login-box #login-form ul li, .container .login-container .login-box #register-form ul li {
  float: left;
  width: 100px;
  height: 40px;
  font-size: 1.250em;
  line-height: 1.60em;
}
.container .login-container .login-box #login-form .input-box, .container .login-container .login-box #register-form .input-box {
  height: 100%;
  margin-top: 40px;
  background: red;
}
.container .login-container .login-box #login-form input, .container .login-container .login-box #register-form input {
  margin: 0 40px;
  padding-left: 20px;
  width: 300px;
  height: 42px;
  font-size: 1.250em;
  color: #b1b3b3;
  border: 2px solid #e8e8e8;
  margin-bottom: 15px;
}
.container .login-container .login-box #login-form input:focus, .container .login-container .login-box #register-form input:focus {
  outline: 2px solid #b5b5b5;
}
.container .login-container .login-box #login-form input:-moz-focus, .container .login-container .login-box #register-form input:-moz-focus {
  outline: 2px solid #b5b5b5;
}
.container .login-container .login-box #login-form #login-username, .container .login-container .login-box #login-form #register-email, .container .login-container .login-box #register-form #login-username, .container .login-container .login-box #register-form #register-email {
  margin-top: 40px;
  /*margin-bottom: -4px !important;*/
}
.container .login-container .login-box #login-form a, .container .login-container .login-box #register-form a {
  float: left;
  font-size: 0.750em;
  line-height: 3em;
  color: #454a4a;
  text-indent: 40px;
  text-decoration: none;
}
.container .login-container .login-box #login-form a:hover, .container .login-container .login-box #register-form a:hover {
  text-decoration: underline;
}
.container .login-container .login-box #login-form button, .container .login-container .login-box #register-form button {
  float: right;
  margin: 0 35px 20px 0;
  padding: 10px 20px;
  font-size: 1.125em;
  color: white;
  border: none;
  text-shadow: 0 -1px 0 #f58733, 15%;
  background: #f58733;
  cursor: pointer;
}
.container .login-container .login-box #login-form button:hover, .container .login-container .login-box #register-form button:hover {
  text-shadow: 0 -1px 0 #d1600a;
  background: #f6954b;
}
.container .login-container .login-box #login-form .tab-bot-border, .container .login-container .login-box #register-form .tab-bot-border {
  border-bottom: 1px solid #f0f0f0;
}
.container .login-container .login-box #login-form .email-tip-icon, .container .login-container .login-box #login-form .password-tip-icon, .container .login-container .login-box #register-form .email-tip-icon, .container .login-container .login-box #register-form .password-tip-icon {
  z-index: 2;
  clear: both;
}
.container .login-container .login-box #login-form .email-tip-icon, .container .login-container .login-box #register-form .email-tip-icon {
  position: absolute;
  top: 120px;
  left: 340px;
  z-index: 2;
}
.container .login-container .login-box #login-form .password-tip-icon, .container .login-container .login-box #register-form .password-tip-icon {
  position: absolute;
  top: 308px;
  left: 340px;
}
.container .login-container .login-box #login-form .tip-message, .container .login-container .login-box #register-form .tip-message {
  position: absolute;
  padding: 0;
  margin: 0;
  top: 120px;
  left: 374px;
  width: auto;
  height: auto;
  text-indent: 10px;
  background: blue;
  background: url(http://leongaban.com/_projects/whoat/_HTML/img/gray-tip-triangle.png) no-repeat;
  z-index: 2;
}
.container .login-container .login-box #login-form .tip-message span, .container .login-container .login-box #register-form .tip-message span {
  padding: 8px 10px;
  color: white;
  background: #444444;
}
.container .login-container .login-box #login-form #message-email, .container .login-container .login-box #register-form #message-email {
  display: none;
  position: absolute;
  width: 100%;
  top: 122px;
  left: 365px;
}
.container .login-container .login-box #login-form #message-password, .container .login-container .login-box #register-form #message-password {
  display: none;
  position: absolute;
  width: 100%;
  top: 315px;
  left: 365px;
}
.container .login-container .login-box #login-form {
  display: none;
}
.container .login-container .login-box .form-background {
  position: relative;
  top: -342px;
  height: 410px;
  background: white;
  -webkit-box-shadow: 0px 5px 15px rgba(50, 50, 50, 0.2);
  -moz-box-shadow: 0px 5px 15px rgba(50, 50, 50, 0.2);
  box-shadow: 0px 5px 15px rgba(50, 50, 50, 0.2);
  z-index: -1;
}
.container .login-container .login-box #register-form {
  display: block;
}
.container .login-container .login-box #register-form #tab-login {
  padding: 8px 0 0 20px;
  color: #f58733;
  color: #999;
  background: #fafafa;
  cursor: pointer;
}
.container .login-container .login-box #register-form #tab-login:hover {
  color: #454a4a;
}
.container .login-container .login-box #register-form #tab-register {
  padding: 7px 20px 0 0;
  color: #f58733;
  background: white;
  cursor: auto;
}
.container .login-container .login-box #register-form #tab-register:hover {
  color: #f58733;
}
.container .login-container .login-box #register-form #register-firstname {
  /*margin-top: -40px !important;*/
}
</style>
<body>
        <div class="container">

                <div class="login-container">
        
                    <div class="login-box">
        
        
                        <!-- LOGIN -->
                        <div id="login-form">
                            <ul>
                                <li id="tab-login" class="tab-bot-border">Login</li>
                                <li id="tab-register">Register</li>
                            </ul>
        
                            <input type="text" id="login-username" name="username" value="username">
                            <input type="password" id="login-password" name="password" value="password">
        
                            <a href="#">Forgot your password?</a>
        
                            <button type="button">login</button>
        
                        </div>
        
                        <!-- REGISTER -->
                        <div id="register-form">
                            
                            <ul>
                                <li id="tab-login">Login</li>
                                <li id="tab-register" class="tab-bot-border">Register</li>
                            </ul>
        
                            <!-- EMAIL -->
                            <input type="email" id="register-email" name="email" onblur="if (this.value == '') {this.value = 'email';}" onfocus="if (this.value == 'email') {this.value = '';}" maxlength="28" value="email"/>
        
                                <div class="email-tip-icon"><img src="http://leongaban.com/_projects/whoat/_HTML/img/question-icon.png" alt="?"/></div>
                                <div class="tip-message" id="message-email"><span>We recommend a valid work email</span></div>
        
                            <!-- FIRST NAME -->
                            <input type="text" id="register-firstname" name="firstname" onblur="if (this.value == '') {this.value = 'firstname';}" onfocus="if (this.value == 'firstname') {this.value = '';}" value="firstname"/>
        
                            <!-- LAST NAME -->
                            <input type="text" id="register-lastname" name="lastname" onblur="if (this.value == '') {this.value = 'lastname';}" onfocus="if (this.value == 'lastname') {this.value = '';}" value="lastname"/>
        
                            <!-- PASSWORD -->
                            <input type="password" id="register-password" name="password" value="password">
        
                                <div class="password-tip-icon"><img src="http://leongaban.com/_projects/whoat/_HTML/img/question-icon.png" alt="?"/></div>
                                <div class="tip-message" id="message-password"><span>Minimum 6 Characters</span></div>
            
                            <button type="button">login</button>
        
                        </div><!-- register-form -->
        
                        <div class="form-background"></div>
        
                    </div><!-- login-form -->
        
                </div><!-- login-container -->
        
            </div><!-- container --> 
            <script>
                // tabs
		$('#login-form #tab-register').click(function() {

$('#login-form').fadeToggle();
$(".form-background").animate(
    {
        "top": "-342px",
        "width": "400px",
        "height": "410px"
    },
    "slow", function(){
        $('#register-form').fadeToggle();
    });
});

$('#register-form #tab-login').click(function() {

   $('#register-form').fadeToggle();
$(".form-background").animate(
    {
        "top": "-214px",
        "width": "400px",
        "height": "290px"
    },
    "slow", function(){
        $('#login-form').fadeToggle();
    });
});

// Tips
$('#register-form .email-tip-icon').hover(function(){
$('#message-email').fadeToggle();
});

$('#register-form .password-tip-icon').hover(function(){
$('#message-password').fadeToggle();
});
            </script>
           
</body>
</html>