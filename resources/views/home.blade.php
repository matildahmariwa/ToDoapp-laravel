@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My tasks</div>

                <div class="panel-body">
                        
                   
    
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:5px">
       Create task
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
        @include('inc.messages') 
                 
                    <div>
                        <div >
                            My tasks today
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped task table">
                                <thead>
                                    <th>task</th>
                                    <th>delete</th>
                                </thead>
                                <tbody>
                         
                         
                            @foreach($tasks as $task)
                            <tr>
                                <td class="table-text">
                                <div>{{$task->item}}</div>
                                </td>
                              <div>
                                <td>{!!Form::open(['action'=>['TasksController@destroy',$task->id],'method'=>'POST','class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}</td>
                           <td>
                               {{-- <a href=""></a> --}}
                               <a href="/To-do/public/home/{{$task->id}}/edit" class="btn btn-default" style="float:left">Edit</a>
                           <td>
                           </div>
                            </tr>
                            @endforeach
                           
                                </tbody>
                            </table>
                          
                        </div>
                    </div>
                           
                            
                            
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
