<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    </style>
    </head>
    <body>
        <table>
        <thead>
                        <tr>
                            <th>Nombre del Candidato</th>
                            <th>Correo Electronico</th>
                            <th>Vacante</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($candidatos as $candidato)
                        <tr>
                            <td>{{ $candidato->user->name }}</td>
                            <td>{{ $candidato->user->email}}</td>
                            <td>{{ $vacante->titulo }}</td>
                        </tr>
                    @endforeach
                    </tbody>

        </table>
    </body>