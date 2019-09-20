
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name',) }}</title>
    <link rel="shortcut icon" href="css/favicon3.ico" />
        
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            
            .right-title h1{
                font-family: 'Great Vibes', cursive;
                color:black;
                margin-right:1000px;
                 margin-top: -170px;
                
                
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                /* font-weight: bold; */
                font-family: 'Raleway', sans-serif;
                
            }
            .top-right.links>a {
              float: right;
            font-size: large;
             }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .footer{
                background-color: aliceblue;
                height:10%;
                width:100%;
                padding-top: 10px;
                position: fixed;
                left: 0;
                bottom: 0;
                text-align: center;

            }
            #full-body{
                background-image:url(css/pic1.jpg);
                  
                width: 100%;
                height: 60%;
                background-repeat: no-repeat;
                background-size: cover; /* or contain depending on what you want */
                background-position: center center;
                background-repeat: no-repeat;
            }
           
        /* #login{
         background-color:#000;
        }   */
        #view-button{
            margin:50px;
            background: transparent;
            font-weight: bold;
            color: white;
        }    
 
.top-right.links {
    width: 100%;
    max-width: 955px;
    margin: auto;
    left: 50%;
    transform: translateX(-50%);
}

.right-title {
    float: left;
    z-index:inherit;
    margin-top: -20px;
}

.top-right.links>a {
    float: right;
    color:#000;
}

.task{
    margin-left: 33%;
    
}





div#full-body>div:nth-child(2)>a:last-child>button:hover {
    background-color: blue;
}

div#full-body>div:nth-child(2)>a>button {
    transition: all 500ms ease-in-out 0ms;
}

div#full-body>div:nth-child(2)>a:first-child>button {
color: #fff;
border: 0px solid #ffff;
padding: 20px 40px;
box-shadow: 0px 0px 16px 1px #000;
font-weight: 700 !important;
letter-spacing: 1px;
font-size: 20px;
}

div#full-body>div:nth-child(2)>a:last-child>button {
background-color: #ffa504;
color: #fff;
border: 0px solid #ffff;
padding: 20px 40px;
box-shadow: 0px 0px 16px 1px #000;
font-weight: 700 !important;
letter-spacing: 1px;
font-size: 20px;
}

.panel-body {
   
    margin-top: 3%; 
    margin-bottom: 9%; 
}

#card{
    box-shadow: 3px 4px 5px #fff ;
    background-color:#ccc;
    width: 50%;
    margin-left: 300px;
    
}

        </style>
             </head>
    <body>
        <div class="flex-center position-ref full-height" id="full-body">
            
                <div class="right-title">
                        <h1 style="text-decoration:underline">{{ config('app.name',) }}</h1>  
                       </div>
            </div>
                   
                          <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document"  >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['action' => 'TasksController@store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
                    <div class="form-group">
                    {{Form::label('item','Create task')}}
                    {{Form::text('item','',['class'=>'form-control','placeholder'=>'Insert here'])}}
                    </div>
                    
                    {{Form::submit('submit',['class'=>'btn btn-primary','type'=>'submit','id'=>'submit'])}}
                    
                    {!! Form::close() !!}
            </div>
            
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   
                  </div>
          </div>
                       
                                                        
                                               
                                                </div>
                                        </div>   
                                </div>
                        </div>
            {{-- @if (Route::has('login')) --}}
                <div class="top-right links">
                    {{-- @auth --}}
                    
                       
                    {{-- @else --}}
                        


                        {{-- @if (Route::has('register')) --}}
                            <a href="{{ route('logout') }}"><i class="icon-signout"></i>LOGOUT</a>
                           
                            <a data-toggle="modal" href="#exampleModal" data-target="#exampleModal"><i class="icon-plus"></i>ADD TASK</a>
                            <a  href=""><i class="icon-user"></i> Hello,{{ Auth::user()->name }}!</a>
                
                        
                        </div> 
                              
                    
                        {{-- @endif --}}
                    {{-- @endauth --}}

                   
                
        
        </div>
        @include('inc.messages')
        
         
        <div id="card">
            <div class="panel-body">
                <h1 class="text-center" style="text-decoration:underline">My list</h1>
                
                @foreach($tasks as $task)
                <div class="task">
                <ul>
                
                        
                <li style="list-style-type:none "><input type="checkbox">{{$task->item}}</li>
                <div style="margin:20px">
                          
                  
                    <i class="icon-trash"></i><a style="color:black" href="{{ route('tasks.destroy', ['id' => $task->id]) }}">delete</a>/
                    <i class="icon-edit"></i><a style="color:black"  data-toggle="modal" href="#exampleModal1" data-target="#exampleModal1">edit</a>
                      <!-- Edit Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document"  >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Create</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['action' => ['TasksController@update',$task->id],'method'=>'POST','enctype'=>'multipart/form-data'])!!}
                    <div class="form-group">
                    {{Form::label('item','Create task')}}
                    {{Form::text('item',$task->item,['class'=>'form-control','placeholder'=>'Insert here'])}}
                    </div>
                    {{Form::submit('submit',['class'=>'btn btn-primary','type'=>'submit','id'=>'submit'])}}
                    {{Form::hidden('_method','PUT')}}
                    {!! Form::close() !!}
            </div>
                
                </div>
                </ul>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        
    </body>
    @include('footer')    
</html>
