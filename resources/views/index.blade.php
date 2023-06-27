<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1 class="text-center"> Tabella Orari Treni</h1>
            <table class="table table-dark" >
                <thead>
                    <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di Partenza</th>
                        <th scope="col">Stazione di Arrivo</th>
                        <th scope="col">orario di Partenza</th>
                        <th scope="col">orario di arrivo</th>
                        <th scope="col">Treno Num.</th>
                        <th scope="col">Numero Carrozze</th>
                        <th scope="col">ritardo</th>
                        <th scope="col">Cancellazioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Trains as $train)
                    <tr>
                        <td>{{$train->azienda}}</td>
                        <td>{{$train->stazione_di_partenza}}</td>
                        <td>{{$train->stazione_di_arrivo}}</td>
                        <td>{{$train->orario_di_partenza}}</td>
                        <td>{{$train->orario_di_arrivo}}</td>
                        <td>{{$train->codice_treno}}</td>
                        <td>{{$train->numero_carrozze}}</td>
                        <td>{{$train->in_orario}}</td>
                        <td>{{$train->cancellato}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
