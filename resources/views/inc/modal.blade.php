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