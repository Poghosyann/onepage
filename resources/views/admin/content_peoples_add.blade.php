<div class="wrapper container-fluid">

    {!! Form::open(['url' => route('peopleAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}


    <div class="form-group">

        {!! Form::label('name','Name:',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8">
            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'People name'])!!}
        </div>

    </div>


    <div class="form-group">
        {!! Form::label('position', 'Position:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('position', old('position'), ['class' => 'form-control','placeholder'=>'People position']) !!}
        </div>
    </div>



    <div class="form-group">
        {!! Form::label('images', 'Image:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Choose image','data-buttonName'=>"btn-primary",'data-placeholder'=>"no image"]) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Save', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>


    {!! Form::close() !!}


</div>