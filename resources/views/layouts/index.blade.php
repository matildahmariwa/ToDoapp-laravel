<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
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
 #auth-card{
    box-shadow: 3px 4px 5px #fff;
    background-color: blue;
    height: 560px;
    width: 458px;
    margin-left: 377px;
    margin-top: 122px;
    margin-bottom: 213px;
 }   
</style>
</head>
<body>
 <div id="auth-card">
        <div class="buttons">
                <a class="button" id="showdiv1">Div 1</a>
                <a class="button" id="showdiv2">Div 2</a>
                
                </div>
                
                <div id="div1" class="all">1</div>
                <div id="div2" class="all">2</div>
                
 <script>


$('#showdiv1').click(function(){
    $('.all').hide();
    $('#div1').show();
});
$('#showdiv2').click(function(){
    $('.all').hide();
    $('#div2').show();
});

 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 </div>  
</body>
</html>