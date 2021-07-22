@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Créer son formulaire') }}</div>

                <div class="card-body">
                   <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        <form method="post" action="{{ action('App\Http\Controllers\RapportVisiteController@createRapport') }}">
                        
                     @csrf


                       <div class="form-group">
                        <!--input pour rentrer les informations nécessaires demandées-->

                            <label for="NumPra" class="text-black"> Numéro Praticien : </label> <input
                                type="text" class="form-control" id="numPra" name="numPra" required />
                        </div>

                        <div class="form-group">

                      
                        <div class="form-group">

                            <label for="Date" class="text-black"> Date rapport : </label> <input
                                type="date" class="form-control" id="date" name="date" required />
                        </div>

                        <div class="form-group">

                            <label for="bilan" class="text-black"> Bilan Visite : </label>
                            <input type="text" class="form-control" id="bilan"
                                name="bilan" required />
                        </div>

                        <div class="form-group">

                            <label for="motifvisite" class="text-black"> Motif Visite : </label>
                            <input type="text" class="form-control" id="motifvisite"
                                name="motifvisite" required />
                        </div>
                        <button type="submit" id ="bouton" class="btn btn-primary">Valider</button>

                    
</div>
</body>

</html>
            </div>
        </div>
    </div>
</div>
@endsection
