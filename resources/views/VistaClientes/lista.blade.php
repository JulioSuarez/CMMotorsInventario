<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Listado de Clientes</title>
</head>

<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">CI/NIT</th>
                <th scope="col">Nombre o Razon Social</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
            </tr>
        </thead>
        <tbody>
            @php
                $a = 0;
            @endphp
            @foreach ($clientes as $ubi)
                <tr>
                    <th scope="row">{{ $a = $a + 1 }}</th>
                    <td>{{ $ubi->ci }}</td>
                    <td>{{ $ubi->nombre }}</td>
                    <td>{{ $ubi->telefono }}</td>
                    <td>{{ $ubi->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
