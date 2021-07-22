@extends('layouts.app')
@section("title", "Ma Todo List")
@section("content")
<html>
	<head>
		<meta charset="utf-8">
			<div class="container">
			<div class="list-group-item text-center">
				<p>Liste Praticien</p>
				
                <!--Tableau des données des praticiens-->
    			<table class="table table-bordered table-striped">
    			<thead>
    				<tr>
    					<th>Nom praticien</th>
    					<th>Prénom praticien</th>
    					<th>Ville praticien</th>
    					<th>Libelle</th>
    					<th>Lieu hospitalier</th>
    				</tr>
    			</thead>
    			<tbody>
                    <!--boucle affichant pour chaque praticien ses données-->
					@foreach ($praticien as $praticien)
					<tr>
					<td>{{ $praticien->pra_nom }}</td>
             		<td>{{ $praticien->pra_prenom }}</td>
             		<td>{{ $praticien->pra_ville }}</td>
             		<td>{{ $praticien->typ_libelle }}</td>
             		<td>{{ $praticien->typ_lieu }}</td>
             		</tr>
             		@endforeach
             	</tbody>
             </table>	
		</div>
	</head>
</html>