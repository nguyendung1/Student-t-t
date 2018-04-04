

<div style="margin-left: 33em;">
<form>
  <label>
   
    <div class="form-group">
            {!!Form::label('Name_fight','Name_Fighter')!!}
          <div class="form-controls-lg">
     
             {!!Form::text('Name_fighter',null,['class'=>'form-control'])!!}
          </div>
  </div>
  <div class="form-group">  
              {!!Form::label('city','City Live')!!}
            <div class="form-controls">
               {!!Form::text('city',null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">  
              {!!Form::label('date_of_birth','Date_of_Birth')!!}
            <div class="form-controls">
               {!!Form::date('date_of_birth',null,['class'=>'form-control'])!!}
                    
              </div>
   <div class="form-group">  
              {!!Form::label('gender','Gender')!!}
            <div class="form-controls">
               {!!Form::radio('gender','male',['class'=>'form-control'])!!}MALE
            
                {!!Form::radio('gender','female',['class'=>'form-control'])!!}FEMALE
              
              </div>
   
            <div class="form-group"> 
          {!!Form::label('area_id','area_id')!!}
     
      {!!Form::select('area_id',$area,null,['class'=>'form-control'])!!}
      </div> 
        
      {!!Form::submit('SAVE BOXER',['class'=>'btn btn-primary'])!!}
  </label>
</form>
</div>