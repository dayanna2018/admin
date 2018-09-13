<body>
        <!--  -->
            <?php $i = 0; ?>
            @foreach ($users as $user)
                    @if ($i<=0)
                    <div class="row">
                        <div class="navbar navbar-expand-lg navbar-white bg-white  ml-2 mr-2 rounded" >
                            <div class="col-10 ">
                                
                                    <h4>{{$user->PersonasNombreCompleto}}</h4><p>{{$user->CargosNombre}}</p>
                                    <hr>
                                    <p class="text-dark" style="font-size: 15px"><strong> Documento :</strong> {{$user->PersonasDocumento}}</p>
                                    <p class="text-dark" style="font-size: 15px"><strong>Telefono :</strong> {{$user->PersonasTel}}</p>
                                    <hr>
                                    <p class="text-dark" style="font-size: 15px"><strong>Especialidad :</strong> {{$user->PersonasEspecialidad}}</p>
                                    <p class="text-dark" style="font-size: 15px"><strong>Ingreso :</strong> {{$user->PersonasFechaIngreso}}</p>
                                </div>
                                
                            </div>
                            <div class="col-6">
                                    <div class="navbar navbar-expand-lg navbar-white bg-white  ml-2 mr-2 rounded" >
                                                <table class="table table-borderless table-hover table-striped table-earning rounded">
                                                    <thead class="thead">
                                                        <tr> 
                                                            <th scope="col">NOMBRE</th>
                                                            <th scope="col">NIVEL</th>
                                                            <th scope="col">CERTIFICACIÓN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        @foreach ($users as $user)
                                                        <tr>
                                                            <td style="font-size: 12px" class="text-dark"> {{$user->HabilidadesNombre}}</td>
                                                            <td style="font-size: 12px" class="text-dark"> {{$user->PersHabilNivExp}}</td>
                                                            <td style="font-size: 12px" class="text-dark"> {{$user->PersHabilCertificacion}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                    </div>    
                            </div>
        
        
        
        
                    @endif
            <?php $i++;?>
        
            @endforeach
        </div><!--Fin de la clase row-->
        <!--
            <div class="navbar navbar-expand-lg navbar-white bg-white ml-2">
                    <div class="col-12">
                            <div class="card-title "><h5>CARGO</h5></div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">HABILIDADES</th>
                                    <th scope="col">TIPO</th>
                                    <th scope="col">NIVEL</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($users as $user)
                                <tr>
                                    <td style="font-size: 12px"> {{$user->HabilidadesNombre}}</td>
                                    <td style="font-size: 12px"> {{$user->HabilidadesTipo}}</td>
                                    <td style="font-size: 12px"> {{$user->PersHabilNivExp}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        --> 
        {{dd($users)}}
        