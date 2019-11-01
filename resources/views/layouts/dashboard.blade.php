<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Roboto&display=swap" rel="stylesheet">
    <style>
     html,body{
         height:100%;
        
  scroll-behavior: smooth;
  
     }
     body{
         margin:0;
     } 
     .wrap{
         height: 100%;
         overflow-x:hidden;
     }
    .dashboard-layout{
        display: flex;
      
    }
    .sidebar{
        flex: 1;
        padding: 20px 50px;
        line-height:200%;
        /* box-shadow: 0px 1px 0px 1px #000;        */
    } 
    .main-column{
        flex:6;
        padding: 20px 50px; 
        background-color:#f5f5f0; 
        height:1000px;
    }
    ul{
       list-style-type:none;
    }
    #task-ul li{
      margin-bottom: 3px !important; 
        
    }
    #task-ul li a{
        color: black;
        /* opacity:0.8; */
        font-weight:bold;
        transition:width 0.3s;        
    }
    #task-ul li i{
        font-size:7px;
    }
   
    .sidebar-nav{
        margin-top:25px;
        width: 159%;
        margin-left: -49px;
        height: 100%; 
        
        
    }
    @keyframes sidebarmove{
        from{opacity:0;}
        to{opacity:1;}
    }
    
    #logout,.sidebar-nav li{
        margin-bottom: 25px;
        color: black;
        width: 127% ;
        animation: 0.1s  sidebarmove forwards;
        opacity:0;
    }
   
    .sidebar-nav li a{
        color:black;
    }
   
    .sidebar-nav li a:hover{
       text-decoration: none;
       opacity:1;
      
    }
    i{
        margin-right:13px;
    }
    .intro-div{
        width: 109%;
        height: 17%;
        background-color: #FFEEDE;
        border-radius: 25px;
        margin-left: -28px;
    }
    .intro-div img{
    width: 34%;
    height: 94%;
    float: right;
    margin-top: 4px;
    margin-right: 78px;
    }
    .task-view{
        margin-top:20px;
        
    }
    .btn{
        margin-right:35px;
        background: rgba(138, 247, 255, 0.2);
        /* background-color:#00a8b5;
        opacity:0.3;   */
        border-radius:25px;
    }
    .btn:hover{
        background-color:#8af7ff;
    }
    .active{
        background-color:#8af7ff;
    }
    .tasklist-container{
        margin-top: 20px;
    }
    .task-card{
        width: 105%;
        height:105px;
        /* background-color: #ff33cc; */
        margin-bottom: 15px;
        border-radius:5px;
        margin-left: -28px;
        box-shadow: 2px 3px 4px 5px #fff ;
        padding:5px;
        border-left:4px solid #fbb901;
        animation: 1s ease-out 0s 1 myresize;
     
    }
    .icon-plus{
        margin-right:3px;
    }
    .task-card p {
        margin-top: -17px !important;
        margin-left:3px;
    }
    .task-card h5{
        font-family: 'Roboto', sans-serif;
        font-weight:400;
        
    }
    .icons-class{
        margin: 12px 20px 0px 2px;
        
        font-size:14px;
        /* font-weight: bold; */
        color: #999;
    }
    .icons-class a{
        color: #999;  
        text-decoration: none;
        font-family: 'Roboto', sans-serif; 
    }
    .icons-class a:hover{
        color:turquoise;
    }
    .icons-class i{
        margin-right:2px;
    }
    #add
    {
        float: right;
        margin-top:-33px;
        text-decoration: none;
        border-radius:10px;
        background-color:#e62a76;
        height:30px;
        width:105px;
        padding-left:10px;
        color:white;
        font-size:15px;
        padding-top: 2px;
        font-weight: bold;
    }
    #cancel{
        background-color:#d9d9d9;
    }
    .modal-title{
    
    }
    .modal-body{
        margin-top: 2px;
    }
    .textbox{
      box-sizing: border-box;
      
    }
    .textbox textarea{
        width: 100%;
        height: 40%;
        border: none;
       outline:none;
       color:black;
       -moz-box-shadow: 0 0 3px #ccc;
       -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;padding:20px;
       box-sizing: border-box;
      

    }
    .textbox label{
        font-weight: bold;
    }
    .textbox input{
       border: none;
       outline:none;
       color:black;
       -moz-box-shadow: 0 0 3px #ccc;
       -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;
        height: 43px;
        width:360px;
        padding:20px;
       box-sizing: border-box;  
       border-radius:4px; 
    }
    
    
    .form-control{
       border:0 !important;
       outline:none !important;
       color:black;
       -moz-box-shadow: 0 0 3px #ccc;
       -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;
        /* padding:20px !important; */
        height: 43px !important;
        border-radius:4px !important;  
    }
   .form-control::after{
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
   }
    .form-control:focus{
    border-color:none !important;
    -moz-box-shadow: 0 0 3px #ccc;
       -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;
    }

{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  
  height:50px;

}

    .textbox-first label{
        font-weight:bold;
    }
    .modal-footer button{
        width:119px;
        border-radius: 11px !important;
        font-size: 16pt;
        height:41px;
        padding:2pt;
    }
    .modal-footer{
        border:0px !important;
    }
    .modal-content{
     border-top:5px solid turquoise !important;
     font-family: 'Open Sans', sans-serif;
    }
    #add-btn{
    background-color:turquoise;
    }
    .modal-footer>:not(:last-child) {
    margin-right: .25rem;
    background-color: #d9d9d9;
    border: 0cm;
    }
    .modal-footer>:not(:last-child):hover{
        background-color:#f0134d !important;
    }
    .btn-secondary{
        border:0;
    }
    .selectElement
{
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  height:50px;
}
.selectorDiv
{
  position:relative;
}
.selectorDiv::before
{
  position: absolute;
  right: 10px;
  top:0;
  bottom:0;
  
  margin-top:auto;
  margin-bottom:auto;
  
  margin-left: auto;
 
  content: "";
  z-index:5;
  width: 0; 
  height: 0; 
  border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-top: 20px solid turquoise; 
  
}

 
.icon-ellipsis-vertical{
    float:right;
    color: black;
    text-decoration: none;
}

.dropdown-container{
    float:right !important;
    position: absolute;

}

.dropdown-menu{
    transform: translate3d(550px, -9px, 0px) !important;
    font-size: 15px;
    padding:10px 10px 0px 10px !important;
    height:100px;
   
}
.dropdown-menu li{
    margin-bottom: 10px;
    width: 106% !important;
}
.dropdown-menu li:hover{
   background-color:#e6e6e6;
   
}
.dropdown-menu  a{
   
   color: black !important;
   text-decoration: none !important;
}
.activity-container{
    flex: 2;
        padding: 20px 50px;
        line-height:200%;
        position: relative;
}
.hello{
  border-right: 3px solid turquoise !important;
 font-weight: bolder;
}
.intro-text{
    float: left;
    margin-left: 8px;
    margin-top:22px;
}
.profile-p{
vertical-align: middle;
  width:180px;
  height:180px;
  border-radius: 50%;
}
.userName{
    font-weight: bold;
    margin-top: 17px;
    margin-left: 36px;
}
.userEmail{
    margin-top: -21px;
    margin-left: 33px;
}

.activity-container h2{
    color:#fbb901;
}
.activity-container h5{
    margin-top:20px;
    text-decoration: underline;
}
.analysis-container{
    box-shadow: 0 0 3px #ccc;
    height: 50%;
    margin:5px -40px 0px -40px;
    position: absolute;
   
}
.analysis-container img{
    height:70%;
    width: 70%;
}
.analysis-container p{
    margin-left: 15px;
    margin-top:15px;
}
.activity-card{
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    
    padding:4px;
    margin-left: -40px;
    margin-right: -40px;

}
.task-stat{
    box-shadow: 0 0 2px #ccc;
    width:180px;
    padding:5px 0px 10px 10px;
    height: 90px;
}

.key i{
 font-size:10px;
}

@keyframes myresize {
    from { width:50%;
    }
    to{ width: 105%;
    }
  /* 0% {
    transform: translateX(-80%);
  }
  100% {
    transform: translateX(0);
  } */
}
 </style>
</head>
<body>

                              <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document"  >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="TasksController@store" method="POST">
                <div>
               <div class="textbox-first" style="float:left">
               <label for="taskname"> Task Name </label><br>
               <input type="text" placeholder="Enter task title" name="title" style="width:360px">
                </div>
              <div class="form-group" style="float:right;margin-right:0px">
                <label for="priority" style="font-weight:bold">Task priority</label><br>
                <div class="selectorDiv">
                <select class="form-control selectElement" style="width:380px;">
                <option value="urgent" selected="selected">Urgent</option>
                <option value="important">important</option>
                <option value="later">Later</option>
                </select>
                </div>
                </div>
                </div>
                <div class="clear" style="clear:both">&nbsp;</div>
                <div class="textbox" style="float:left">
                        <label for="priority">Date</label><br>
                        <input type="date" placeholder="Enter priority here" name="description">
                        </div>
                        <div class="textbox" style="float:right">
                                <label for="priority">Task category</label><br>
                                <input type="text" placeholder="Enter category here" name="description" style="width:380px">
                                </div>
                
                <div class="clear" style="clear:both">&nbsp;</div> 
                <div class="textbox">
                        <label for="description">Description</label><br>

                            <textarea placeholder="Enter description here.." name="description"></textarea>
                                </div>  
            </form>
       
            </div>
            
            <div class="modal-footer">
                    <button type="button" id="done-btn" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" id="add-btn"class="btn btn-secondary" data-dismiss="modal">Add</button>
                  </div>
          </div>
                                     
                                                </div>
                                        </div>   
                                </div>
                        </div>
<!-- End of modal -->

<div class="wrap">  
<div class="dashboard-layout">
<div class="sidebar">
<span class="logo">
<h5>Weekly<font color="#F4D03F">planner</font></h5>
</span>
<ul class="sidebar-nav">
<li style="animation-delay:0.1s"><p><i class="icon-th-large"></i><a href="{{route('dashboard')}}">My Tasks</a></p></li>
<li style="animation-delay:0.2s"><p><i class="icon-user"></i><a href=""> Profile</a></p></li>
<li style="animation-delay:0.3s"><i class="icon-tag"></i>Tags
    <ul id="task-ul">
        <li ><a style="color:#e62a76" href=""><i class="icon-circle"></i>Personal</a></li>
        <li><a style="color:#774898" href=""><i class="icon-circle"></i> Meetings</a></li>
        <li ><a style="color:turquoise" href=""><i class="icon-circle"></i>Email/call</a></li>
        <li><a style="color:#fbb901" href=""><i class="icon-circle"></i> Follow up</a></li>
    </ul>
    
</li>
<li style="animation-delay:0.4s"><p><i class="icon-calendar" ></i><a href="">Events</a></p></li>
<li style="animation-delay:0.5s"><p><i class="icon-bar-chart" ></i><a href="">Productivity</a></p></li>
<li style="animation-delay:0.6s"><i class="icon-signout"></i><a  id="logout" href="{{url('logout')}}">Logout</a></li>
</ul>
</div><!--end of sidebar-->

<div class="main-column">
<div class="intro-div">
<div class="intro-text">
 <p style="color:#00a8b5;font-weight:bold"> Goodmorning {{ Auth::user()->name }}!</p>
 <p class="text-center">You have 13 tasks today,stay productive!</p>
</div>
<img src="css/welcome.jpg" alt="illustration of a person holding a laptop">
</div>
<div class="task-view">
    <a  id="today-btn" class="btn">Today</a>
    <a class="btn" id="urgent-btn">urgent</a>
    <a class="btn" id="important-btn">important</a>
    <a class="btn" id="later-btn">later</a>
    <a class="btn" id="weekly-btn">Weekly</a>
    
<a data-toggle="modal" id="add" href="#exampleModal" data-target="#exampleModal"><i class="icon-plus"></i>Add Task</a>

<div id="today">
    
    <div class="tasklist-container">
    @foreach($tasks as $task)
        <div class="task">
            <div class="task-card">
               <div style="position:relative">      
                   <h5><input type="checkbox" style="margin-right:10px">{{$task->item}}
    
                    <a class="drop-down" data-toggle="dropdown" aria-expanded="true"><i class="icon-ellipsis-vertical"></i></a>
    
                    <div class="dropdown-container">
                        <ul class="dropdown-menu" role="menu" style="position:absolute">
                            <li><a href="#"><i class="icon-bell-alt"></i>Remind me</li>
                            <li><a href="#"><i class="icon-edit"></i>Edit task</a> </li>
                            <li><a href="#"><i class="icon-trash"></i>Delete </a> </li> 
                        </ul>
                    </div>
                </div>
                </h5><br>
                <p>Click Save to keep a list of colors you like and want to work with</p>
            </div>
        </div>  
    @endforeach
    </div> <!--end of tasklist-container!-->
</div>
<div id="urgent" class="category">

</div>
<div id="important" class="category">

</div>
<div id="later" class="category">

</div>
<div id="weekly" class="category">
</div>


</div><!--end of task view-->
</div> <!--end of main column-->
<div class="activity-container">
<img src="css/profile-p.jpg" alt="profile photo" class="profile-p"><br>
<p  class="userName">{{ Auth::user()->name }}</p>
<p  class="userEmail">{{ Auth::user()->email }}</p>
<div class="activity-card">
<div class="task-stat"><i class="icon-tasks"></i>Total tasks today<br><h2>20</h2></div>
<div class="task-stat" style="margin-right:-8px;margin-left:8px"><i class="icon-check"></i>Completed<br><h2>8</h2></div>
</div><!--end of activity-card-->
<div class="analysis-container">
<h5 class="text-center" style="">Analysis</h5>
<p >You are <b>75%</b> productive today!<p>
    <img src="css/piechart.png" alt="illustration of pie chart">
    <div class="key"> 
            <ul>
                    <li ><a style="color:#e62a76" href=""><i class="icon-circle"></i>Personal</a></li>
                    <li><a style="color:#774898" href=""><i class="icon-circle"></i> Meetings</a></li>
                    <li ><a style="color:turquoise" href=""><i class="icon-circle"></i>Email/call</a></li>
                    <li><a style="color:#fbb901" href=""><i class="icon-circle"></i> Follow up</a></li>
                </ul>
    </div>
</div>


</div><!-- end of activity-container-->
<script>
    $('.category').hide();
    $('#today-btn').click(function(){
            $('#important').hide();
            $('#urgent').hide();
            $('#today').show();
            $('#later').hide();
            $('#weekly').hide();
        });
    $('#important-btn').click(function(){
            $('#important').show();
            $('#urgent').hide();
            $('#today').hide();
            $('#later').hide();
            $('#weekly').hide();
        });
        $('#urgent-btn').click(function(){
            $('#important').hide();
            $('#urgent').show();
            $('#today').hide();
            $('#later').hide();
            $('#weekly').hide();
        });
        $('#later-btn').click(function(){
            $('#important').hide();
            $('#urgent').hide();
            $('#today').hide();
            $('#later').show();
            $('#weekly').hide();
        });
        $('#weekly-btn').click(function(){
            $('#important').hide();
            $('#urgent').hide();
            $('#today').hide();
            $('#later').hide();
            $('#weekly').show();
        });

</script>
<script>
  $('.sidebar-nav li p').on('click', function(e) {
  e.preventDefault();
  $('.sidebar-nav li p').removeClass('hello');
  $(this).addClass('hello');
});   
    </script>  
    <script>
        $('.task-view a').on('click',function(){
          $('a').removeClass('active');
          $(this).addClass('active');
        });       
        </script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</div> <!--end of wrap-->
</body>

</html>