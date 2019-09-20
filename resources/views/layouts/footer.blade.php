<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<style>
    
    .footer a {
    color: black;
}

.footer>* {
    top: 50%;
    position: relative;
    transform: translateY(-50%);
    margin: 0 !important;
}
/* start the footer */
        .footer:before{
            content: '';
    width: 100%;
    border-bottom: solid 5px turquoise;
    position: absolute;
    /* left: 0; */
    /* top: 120%; */
    z-index: 1;
        }
    .footer {
    background-color:white;
    margin-top: 10px;
    font-size: 10px !important;
    padding-bottom: 10px;
    
}

.footer * {
    font-size: 15px;
    color: #000;
}

/* footer  */
 .footer{
     bottom: 0;
     font-size: 15px;
    color: #000;
    
    overflow: hidden;
}
        </style>
</head>
<body>
        <div class="footer">
                <h5 class="text-center" style="padding-top:30px">Copyright @<?php echo date("Y");?> <a href="#">Matildah mariwa</a> All Rights Reserved</h5>
            </div>
              
</body>
</html>
