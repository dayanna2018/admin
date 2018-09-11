<form action="/recursos/agregar/new" class="" method="post">

    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-center">

  
        
            <div class="row">
                
                <div class="col-6">
                    <label class="text-dark" for="PersonasPriApellido" >Primer apellido</label>
                    <input class="form-control" type="text" id="PersonasPriApellido" name="PersonasPriApellido">
                    <label class="text-dark" for="">Segundo apellido</label>
                    <input class="form-control" type="text"  name="PersonasSegApellido">
                </div>
                <div class="col-6">
                    <label class="text-dark" for="">Primer nombre</label>
                    <input class="form-control" type="text" name=PersonasPrimNombre"">
                    <label class="text-dark" for="">Segundo nombre</label>
                    <input class="form-control" type="text"  name="PersonasSegNombre">
                </div>
            </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-center">
        <div class="row">
            <div class="col-6">
                <label class="text-dark" for="">Tipo de documento</label>
                <input class="form-control" type="list"  name="PersonasTipoDoc">
                <label class="text-dark" for="">Documento</label>
                <input class="form-control" type="text" name="PersonasDocumento">
            </div>
            <div class="col-6">
                <label class="text-dark" for="">Telefono</label>
                <input class="form-control" type="text" name="PersonasTel">
                <label class="text-dark" for="">Fecha de ingreso</label>
                <input class="form-control" type="date "name="PersonasFechaIngreso">
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-4 d-flex justify-content-center">
            <div class="row">
                <div class="col-6">
                    <label class="text-dark" for="">Titulo</label>
                    <input class="form-control" type="list"  name="PersonasTitulo">
                    
                </div>
                <div class="col-6">
                    <label class="text-dark" for="">Especializacion</label>
                    <input class="form-control" type="text" name="PersonasEspecialidad">
                </div>
                
            </div>
        </div>
            

        <div class="row ml-5 ">
                <div class="ml-3 col-11 d-flex justify-content-end">
                        <button type="button" id="" class="btn btn-info">
                                <i class="fa fa-check-square"></i>
                                <span>Agregar</span>
                            </button>
                    
                </div>
        </div>    
 

</form>

