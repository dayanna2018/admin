{!!Form::open(['action' => 'RecursosController@addingResource'])!!}
<!--
<form action="/recursos/agregar/new" class="" method="post">
-->
    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-center">
            <div class="row">
                <div class="col-6">
                    {!!Form::label('PersonasPriApellido','Primer apellido')!!}
                    {!!Form::text('PersonasPriApellido',null, ['class'=>'form-control'])!!}
                    {!!Form::label('PersonasSegApellido', 'Segundo apellido')!!}
                    {!!Form::text('PersonasSegApellido',null,['class'=>'form-control'])!!}
                </div>
                <div class="col-6">
                    {!!Form::label('PersonasPrimNombre','Primer nombre')!!}
                    {!!Form::text('PersonasPrimNombre',null,['class'=>'form-control'])!!}
                    {!!Form::label('PersonasSegNombre','Segundo nombre')!!}
                    {!!Form::text('PersonasSegNombre',null,['class'=>'form-control'])!!}
                </div>
            </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-center">
        <div class="row">
            <div class="col-6">
                {!!Form::label('PersonasTipoDoc','Tipo de documento')!!}
                {!!Form::text('PersonasTipoDoc','CC',['class'=>'form-control', ])!!}
                {!!Form::label('PersonasDocumento', 'Documento')!!}
                {!!Form::text('PersonasDocumento', null, ['class'=>'form-control'])!!}
            </div>
            <div class="col-6">
                {!!Form::label('PersonasTel','Número de telefono')!!}
                {!!Form::number('PersonasTel',null,['class'=>'form-control'])!!}
                {!!Form::label('PersonasFechaIngreso', 'Fecha de ingreso')!!}
                {!!Form::date('PersonasFechaIngreso',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-center">
            <div class="row">
                <div class="col-6">
                    {!!Form::label('PersonasTitulo','Titulo')!!}
                    {!!Form::text('PersonasTitulo',null,['class'=>'form-control'])!!}
                    
                </div>
                <div class="col-6">
                    {!!Form::label('PersonasEspecialidad','Especialidad')!!}
                    {!!Form::text('PersonasEspecialidad',null,['class'=>'form-control'])!!}
                </div>
            </div>
        </div>
        <div class="row ml-5 ">
                <div class="ml-3 col-11 d-flex justify-content-end">
                    {!!Form::submit('Agregar',['class'=>'btn btn-info'])!!}
                    
                </div>
        </div>    
{!!Form::close()!!}
<!--
</form>
-->

