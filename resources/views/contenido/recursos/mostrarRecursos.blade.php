
<div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-2 ">
    <form action="">
        <div class="row ">
            <div class="col-6">
                <div class="input-group">
                    <div class="input-group-prepend ">
                        <div class="input-group-text " id="btnGroupAddon">Recurso</div>
                    </div>
                    <input type="text" class="form-control" placeholder="" aria-label="Input group example" aria-describedby="btnGroupAddon">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" aria-label="Input group example" aria-describedby="btnGroupAddon">
                        <div class="input-group-prepend">
                        <div class="input-group-text rounded-right" id="btnGroupAddon">Habilidad </div>
                    </div>
                </div>
            </div>
        </div>
    </form>    
</div>
                
<div class="navbar navbar-expand-lg navbar-white bg-white m-2 p-2">
        
    <main>
        <div class="">
          <!--  <canvas id="myChart" width="400" height="400"></canvas>-->
            <script>
                $.ajax({
                type: "post",
                url: './updateUser',
                dataType: "json",
                data: {
                    name: $('#nameUpdate').val(),
                    phone: $('#numberUpdate').val(),
                    PersonasEspecialidad: $('#PersonasEspecialidadUpdate').val(),
                    PersonasTitulo: $('#PersonasTituloUpdate').val(),
                    indenty: $('#documentUpdate').val(),
                    PersonasTipoDoc: $('#PersonasTipoDocUpdate').val(),
                    id: $('#idUser').val(),
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (datos) {
                    $('.errors').html('');
                    if (typeof datos.errors !== 'undefined') {
                        errorsUpdate(datos.errors);
                    }
                    if (typeof datos.success !== 'undefined') {
                        $('.update').modal('hide')
                        location.reload();
                    }
                },
                error: function (datos) {
                    errors(datos.responseJSON.errors);
                }
            })
            </script>
         
         


    <!--
    <button id="add__new__list" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i
        class="fas fa-plus"></i> Agregar usuario</button><br>-->
        
        
        <br>
        <div class="row">
            <div class="col-5">
                {{ $users->links() }}
            </div>
            <div class="col-6 d-flex justify-content-end pb-3 ml-4">
                <a class="btn btn-info"href="{{Route('addRecurso')}}" >Agregar recurso</a><br>
            </div>
        </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">DOCUMENTO</th>
                    <th scope="col">CARGO</th>
                    <th scope="col">INGRESO</th>
                    <th scope="col"> </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                <tr>
                        
                <td style="font-size: 12px"><a href="{{url("/recursos/showResource/{$user->PersonasID}")}}"> {{$user->PersonasNombreCompleto}} </a></td>
                                <td style="font-size: 12px">{{ $user->PersonasTel }}</td>
                                <td style="font-size: 12px">{{ $user->PersonasTitulo }} </td>
                                <td style="font-size: 12px">{{ $user->PersonasDocumento }} </td>
                                <td style="font-size: 12px">{{ $user->CargosNombre }} </td>
                                <td style="font-size: 12px">{{ $user->PersonasFechaIngreso }} </td>
                                <td style="font-size: 12px">
                                        <div class="btn btn-sm btn-info" userIdUpdate="{{ $user->PersonasID }}"><i class="far fa-edit"></i>
                                            Actualizar</div>
                                        </td>
                                        <td style="font-size: 12px">
                                                <div class="btn btn-sm btn-danger" userIdDelete="{{ $user->PersonasID }}">Retiro</div>
                                            </td>
                                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
                
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="card-body text-center">
                            <h4 class="card-title">Agregar persona</h4>
                            <p class="card-text">Complete todo los campos por favor.</p>
                        </div>
                        <div class="card 2 p-3 mx-4">
                            <form id="save">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" required autofocus>
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <label for="number" class="col-md-4 col-form-label text-md-right">Numero de telefono</label>
                                    <div class="col-md-6">
                                        <input id="number" type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="PersonasEspecialidad" class="col-md-4 col-form-label text-md-right">Especialidad
                                        de la Persona
                                    </label>
                                    <div class="col-md-6">
                                        <input id="PersonasEspecialidad" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document" class="col-md-4 col-form-label text-md-right">Numero Documento
                                        de identidad</label>
                                        <div class="col-md-6">
                                            <input id="document" type="number" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">Tipo de documento</label>
                                        <div class="col-md-6">
                                            <select class="form-control" id="PersonasTipoDoc">
                                                <option value="CC">C.C</option>
                                                <option value="TI">T.I</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="PersonasTitulo" class="col-md-4 col-form-label text-md-right">Titulo de la
                                            personas</label>
                                            <div class="col-md-6">
                                                <input id="PersonasTitulo" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <input type="hidden" id="idUser">
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Actualizar persona</h4>
                                    <p class="card-text">Complete todo los campos por favor.</p>
                                </div>
                                <div class="card 2 p-3 mx-4 mb-3">
                                    <form id="update">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <div class="col-md-6">
                                                <input id="nameUpdate" type="text" class="form-control" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="number" class="col-md-4 col-form-label text-md-right">Numero de telefono</label>
                                            <div class="col-md-6">
                                                <input id="numberUpdate" type="number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="PersonasTitulo" class="col-md-4 col-form-label text-md-right">Titulo de la
                                        personas</label>
                                    <div class="col-md-6">
                                        <input id="PersonasTituloUpdate" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="PersonasEspecialidad" class="col-md-4 col-form-label text-md-right">Especialidad
                                        de la Persona
                                    </label>
                                    <div class="col-md-6">
                                        <input id="PersonasEspecialidadUpdate" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document" class="col-md-4 col-form-label text-md-right">Numero Documento
                                        de identidad</label>
                                        <div class="col-md-6">
                                            <input id="documentUpdate" type="number" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">Tipo de documento</label>
                                        <div class="col-md-6">
                                            <select class="form-control" id="PersonasTipoDocUpdate">
                                            <option value="CC">C.C</option>
                                            <option value="TI">T.I</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perfecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="textModal"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $.ajax({
            type: "post",
            url: './ajax',
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (datos) {
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                        datasets: [{
                            label: '# of Votes',
                            data: [
                                datos.count, 
                                datos.count-23, 
                                3, 
                                5, 
                                2, 
                                3],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
                console.log(datos.count);
            },
            error: function (datos) {
                console.log(datos);
            }
        })
        function errors(r) {
            $('.errors').remove()
            if (typeof r.name !== 'undefined') {
                $("#name").after('<span class="errors" role="alert">' + r.name + '</span>');
            }
            if (typeof r.email !== 'undefined') {
                $("#PersonasEspecialidad").after('<span class="errors" role="alert">' + r.email + '</span>');
            }
            if (typeof r.phone !== 'undefined') {
                $("#number").after('<span class="errors" role="alert">' + r.phone + '</span>');
            }
            if (typeof r.indenty !== 'undefined') {
                $("#document").after('<span class="errors" role="alert">' + r.indenty + '</span>');
            }
            if (typeof r.PersonasTipoDoc !== 'undefined') {
                $("#PersonasTipoDoc").after('<span class="errors" role="alert">' + r.PersonasTipoDoc + '</span>');
            }
            if (typeof r.password !== 'undefined') {
                $("#password").after('<span class="errors" role="alert">' + r.password + '</span>');
            }
        }
        function errorsUpdate(r) {
            $('.errors').remove()
            if (typeof r.name !== 'undefined') {
                $("#nameUpdate").after('<span class="errors" role="alert">' + r.name + '</span>');
            }
            if (typeof r.email !== 'undefined') {
                $("#PersonasEspecialidadUpdate").after('<span class="errors" role="alert">' + r.email + '</span>');
            }
            if (typeof r.phone !== 'undefined') {
                $("#numberUpdate").after('<span class="errors" role="alert">' + r.phone + '</span>');
            }
            if (typeof r.indenty !== 'undefined') {
                $("#documentUpdate").after('<span class="errors" role="alert">' + r.indenty + '</span>');
            }
            if (typeof r.PersonasTipoDoc !== 'undefined') {
                $("#rolUpdate").before('<span class="errors" role="alert">' + "No puedes actualizar un administrador" + '</span>');
            }
            if (typeof r.password !== 'undefined') {
                $("#passwordUpdate").after('<span class="errors" role="alert">' + r.password + '</span>');
            }
        }
        $('[userIdUpdate]').on('click', function (e) {
            var userID = this.attributes[1].value;
            swal({
                html: '<div class="container"><div class="m-3">Seleccione una opcion</div>' +
                '<div class="row">' +
                    '<div class="col-md-6 col-sm-12">' +
                        '<div class="btn btn-primary form-control btnActualizar">Actualizar informacion</div>' +
                        '</div>' +
                        '</div>'
                    })
            $('.btnActualizar').on('click', function (e) {
                var timerInterval
                swal({
                    title: 'Cargando!',
                    html: 'Espere por favor.',
                    onOpen: () => {
                        swal.showLoading()
                        $.ajax({
                            type: "post",
                            url: './showUser',
                            dataType: "json",
                            data: {
                                userId: userID
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (datos) {
                                swal.close()
                                var user = datos[0]
                                $('.errors').html('');
                                $('#nameUpdate').val(user[0])
                                $('#numberUpdate').val(user[1])
                                $('#PersonasTituloUpdate').val(user[2])
                                $('#PersonasEspecialidadUpdate').val(user[3])
                                $('#documentUpdate').val(user[4])
                                $('#PersonasTipoDocUpdate').val(user[5])
                                $('#idUser').val(userID)
                                $('.update').modal('show')
                            },
                            error: function (datos) {
                                swal.close()
                                swal({ text: "Existe un error!", type: 'error' })
                            }
                        })
                    }
                })
            })
        })
        $('[userIdDelete]').on('click', function (e) {
            var userId = this.attributes[1].value
            swal({
                title: '¿Estas seguro?',
                text: "No pudes revertir estos cambios!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Borrar!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "get",
                        url: './deleteUser/' + userId,
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (datos) {
                            $('.errors').html('');
                            if (typeof datos.success !== 'undefined') {
                                $('#textModal').empty().html('Se a borrado este usuario con exito.')
                                $('#exampleModal').modal('show').on('hidden.bs.modal', function (e) {
                                    location.reload();
                                })
                            }
                        },
                        error: function (datos) {
                        }
                    })
                }
            })
        })
        $('#update').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: './updateUser',
                dataType: "json",
                data: {
                    name: $('#nameUpdate').val(),
                    phone: $('#numberUpdate').val(),
                    PersonasEspecialidad: $('#PersonasEspecialidadUpdate').val(),
                    PersonasTitulo: $('#PersonasTituloUpdate').val(),
                    indenty: $('#documentUpdate').val(),
                    PersonasTipoDoc: $('#PersonasTipoDocUpdate').val(),
                    id: $('#idUser').val(),
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (datos) {
                    $('.errors').html('');
                    if (typeof datos.errors !== 'undefined') {
                        errorsUpdate(datos.errors);
                    }
                    if (typeof datos.success !== 'undefined') {
                        $('.update').modal('hide')
                        location.reload();
                    }
                },
                error: function (datos) {
                    errors(datos.responseJSON.errors);
                }
            })
        })
        $('#save').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: 'registerAdmin',
                dataType: "json",
                data: {
                    name: $('#name').val(),
                    PersonasEspecialidad: $('#PersonasEspecialidad').val(),
                    phone: $('#number').val(),
                    indenty: $('#document').val(),
                    PersonasTipoDoc: $('#PersonasTipoDoc').val(),
                    PersonasTitulo: $('#PersonasTitulo').val(),
                    password_confirmation: $('#passwordConfirm').val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (datos) {
                    $('.errors').html('');
                    if (typeof datos.errors !== 'undefined') {
                        errors(datos.errors);
                    }
                    if (typeof datos.success !== 'undefined') {
                        $('.bd-example-modal-lg').modal('hide')
                        location.reload();
                    }
                },
                error: function (datos) {
                    errors(datos.responseJSON.errors);
                }
            })
        });
        </script>
</div>