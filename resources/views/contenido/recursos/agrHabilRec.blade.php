
<div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-left">
        <h6>{{$name}}:</h6><br>
        <p>Agregar habilidades</p><br>
        <h1>{{$id}}</h1>
    </div>
    {!!Form::open()!!}
    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-left"">
            <div  class="container" >
                <div class="row" id="contenido2">
                    
                </div>
            </div>

    </div>
    {!!Form::close()!!}

        <button id="btn2" class="btn btn-info">Agregar habilidad</button>
        {!!Form::submit('Guardar',['class'=>'btn btn-info'])!!}
        

            


    <script> 
$(document).ready(function(){
    $("#btn2").click(function(){
        $("#contenido2").append('\
        <div class="col-4">\
            {!!Form::label("HabilidadesNombre", "habilidad")!!}\
        @foreach($habilidades as $habilidad)\
        @endforeach\
            {!!Form::select("HabilidadesNombre[]",[$habilidad->HabilidadesNombre],null,["class"=>"form-control"])!!}\
        </div>\
        <div class="col-4">\
        {!!Form::label("PersHabilCertificacion", "Certificación")!!}\
        {!!Form::text("PersHabilCertificacion",null,["class"=>"form-control"])!!}\
        </div>\
        <div class="col-4">\
        {!!Form::label("PersHabilNivExp", "Nivel")!!}\
        {!!Form::select("PersHabilNivExp",["BAJO","INTERMEDIO","AVANZADO"],null,["class"=>"form-control"])!!}\
        </div>\
        ');
    });
});
    </script>        