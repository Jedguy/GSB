@extends('layouts.app')
@section("title", "Ma Todo List")
@section("content")
<html>
	<head>
		<meta charset="utf-8">
			<div class="container">
			<div class="list-group-item text-center">
				
    			@guest
                <!--indique que si l'utilisateur n'est pas connecté, il ne peut rien voir-->
    			<p>Compte-rendu</p>
    			Connectez-vous pour voir vos compte-rendus !
    			@else
    			<table class="table table-bordered table-striped">
    			<thead>
    				<tr>
    					<th>Date</th>
    					<th>Nom praticien</th>
    					<th>Prénom praticien</th>
    					<th>Ville praticien</th>
    					<th>Motif</th>
    				</tr>
    			</thead>
    			<tbody>
                    <!--boucle affichant pour rapport de l'utilisateur, les données demandées-->
					@foreach ($rapports as $data)
					<tr>
					<td>{{ $data->rap_date }}</td>
             		<td>{{ $data->pra_nom }}</td>
             		<td>{{ $data->pra_prenom }}</td>
             		<td>{{ $data->pra_ville }}</td>
             		<td>{{ $data->rap_motif }}</td>
             		</tr>
             		@endforeach
             	</tbody>
             </table>
                <a href="/rapportRegister"><button type="submit" class="btn btn-primary" >Ajouter un formulaire</button></a>
                <a href="/pdf"><button type="submit" class="btn btn-primary" >PDF</button></a>
           			
    			@endguest
    			

			</div>
			
		</div>
	</head>
</html>