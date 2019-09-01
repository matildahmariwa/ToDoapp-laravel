@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div> --}}

                <div class="panel-body">
                        
                    <p>My tasks</p>
    {!! Form::open(['action' => 'TasksController@store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
        <div class="form-group">
        {{Form::label('item','Create task')}}
        {{Form::text('item','',['class'=>'form-control','placeholder'=>'Insert here'])}}
        </div>
        {{Form::submit('submit',['class'=>'btn btn-primary','type'=>'submit','id'=>'submit'])}}
        
        {!! Form::close() !!}
        @include('inc.messages') 
                 
                    <div class="panel panel-default ">
                        <div class="panel-heading">
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

                                <td>{!!Form::open(['action'=>['TasksController@destroy',$task->id],'method'=>'POST','class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}</td>
                           <td>
                               {{-- <a href=""></a> --}}
                               <a href="/To-do/public/home/{{$task->id}}/edit" class="btn btn-default" style="float:left">Edit</a>
                           <td>
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
