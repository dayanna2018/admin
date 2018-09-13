<body>

    {{$i=0}}
    @foreach ($users as $user)
        
            @if ($i<=0)
                
                <div class="navbar navbar-expand-lg navbar-white bg-white" >
                    <h3>{{$user->PersonasNombreCompleto}}</h3>
                </div>
            @endif
        {{$i++}}

    @endforeach
    
    
    <div class="row">
        <div class="col-6">
            <div class="navbar navbar-expand-lg navbar-white bg-white">
                
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
    {{dd($users)}}
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
</body>
