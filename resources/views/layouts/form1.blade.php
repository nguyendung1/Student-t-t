

<div style="margin-left: 33em;">
<form>
  <label>
   
    <div class="form-group">
            {!!Form::label('name','Name')!!}
          <div class="form-controls-lg">
     
             {!!Form::text('name',null,['class'=>'form-control'])!!}
          </div>
  </div>

    <div class="form-group">
               {!!Form::label('date_of_birth','Date_of_Birth')!!}
            <div class="form-controls">  
                {!!Form::date('date_of_birth',null,['class'=>'form-control'])!!}
             </div>
     </div> 
     <div class="form-group"> 
      {!!Form::label('id_country','School_ID')!!}
     
      {!!Form::select('school_id',$schools,null,['class'=>'form-control'])!!}
      </div> 
       <div class="form-group">
            {!!Form::label('name','Address')!!}
          <div class="form-controls-lg">
     
             {!!Form::text('address',null,['class'=>'form-control'])!!}
          </div>
  </div>

        
      {!!Form::submit('SAVE BOXER',['class'=>'btn btn-primary'])!!}
  </label>
</form>
</div>