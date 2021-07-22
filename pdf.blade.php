<html>
<head>
	@foreach ($rapports as $key => $rapport)
	<title>Rapport Numéro {{ $rapport->id }}</title>
</head>
<body>
	<H1>Rapport Numéro {{ $rapport->id }}</H1>
	<h2>Praticien : {{ $rapport->pra_nom }} {{ $rapport->pra_prenom }}</h2>
	<strong>Date : {{$rapport->rap_date }}</strong><br>
	<strong>Bilan : {{$rapport->rap_bilan }}</strong><br>
	<strong>Motif : {{$rapport->rap_motif }}</strong>
	

<br></br>

<strong>Description :</strong>
	<p>Succurrens cum et starent spes telo et ut spes iamque serpens colligi armatos attoniti vel periclitanti extremas vobiscum telo districta omnes adpetitus opperiens saxo suae adeste inquit cum saxo mihi armatos inquit spes spes starent adpetitus extremas inquit inquit adeste spes Gallus spes et vel et succurrens ratione et saxo dentium Gallus et ratione vel colligi ut cognitis colligi adpetitus stridens mihi viri stridens saluti adeste iussit iamque fortes et acie quavis vel adeste colligi omnes acie saxo quavis iamque adpetitus serpens mihi districta succurrens succurrens vobiscum ut mihi armatos starent armatos et serpens ut suae opperiens et serpens cum.</p>
 
 @endforeach
</body>
</html>