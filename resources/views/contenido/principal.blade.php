<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
    <script>
         $.ajax({
                type: "get",
                url: './admin',
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
            </script>
</body>
</html>