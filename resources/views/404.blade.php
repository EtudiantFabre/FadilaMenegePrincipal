@extends('teteEtBasPage')
@section('content')
<body>
    <center>
        <h1>Erreur de page !</h1>
        <p>La page ou vous aimeriez accéder n'existe pas. Veuillez vous diriger <a href="{{route('accueil')}}">ici</a> !</p>
    </center>
</body>
@endsection