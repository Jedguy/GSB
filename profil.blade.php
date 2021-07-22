@extends('layouts.app')
@section("title", "Ma Todo List")
@section("content")
<html>
	<head>
		<meta charset="utf-8">
			<div class="container">
			<div class="list-group-item text-center">
				<p>Profil</p>
 			
                  @foreach ($UnUsers as $user)
              <table class='table table-bordered table-hover text-dark' >
                  <tbody>
                  	<tr>
                      <th scope='row'>Matricule</th>
                      <td height='40px'class='col-md-8 text-center'>{{ $user->matricule }}</td>
                    </tr>

                    <tr>
                      <th scope=''>Nom</th>
                      <td height=''class='text-center'>{{ $user->name }}</td>
                    </tr>

                    <tr>
                      <th scope='row'>Prénom</th>
                      <td height='40px'class='col-md-8 text-center'>{{ $user->prenom }}</td>
                    </tr>

                    <tr>
                      <th scope='row'>Adresse mail</th>
                      <td height='40px'class='col-md-8 text-center'>{{ $user->email }}</td>
                    </tr>

                    <tr>
                      <th scope='row'>Mot de passe</th>
                      <td height='40px'class='col-md-8 text-center'>{{ $user->password }}</td>
                    </tr>

                    
                </table>
             	</tbody>
             	@endforeach
			</div>		
		</div>
	</head>
</html>