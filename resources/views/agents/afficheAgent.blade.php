@extends('teteEtBasPage')
@section("content")

<header>
    
    </header><br>
<div class="container rounded-4  shadow-lg p-5 mb-5 bg-gray mt-10">
<div class="container p-10 mt-10">
    <div class="class row mt-10">
        <div class="class col-lg-4 bg-dark text-white text-center py-4">
            <div class="header-left">
                <img class="img-thumbnail rounded-circle mb-2" src="{{ asset('storage/'.$agent->avatar)}}"  >
                <h1 class="display-5">{{ $agent->nom.' '.$agent->prenom }}</h1>
                <h4 class="lead text-uppercase text-white-5 mb-4">{{ $agent->poste_agente }}</h4>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Objectif</h5>
                <ul class="list text-white-50 text-ml-5 py-2 text-left text-capitalize">
                    <li class="list-item">
                        {{ $agent->objectif }}
                    </li>
                </ul>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Informations personnel</h5>

                <ul class="list-unstyled text-white-50 ml-5 py-2 ">
                    <li class="list-item">
                    {{ 'Date naissance : '.$agent->date_naissance }}
                    </li>
                    <li class="list-item">
                        {{ 'Lieu naissance : '.$agent->lieu_naissance }}
                    </li>
                    <li class="list-item">
                        {{'Genre : '. $agent->genre}}
                    </li>

                    <li class="list-item">
                        {{'Nationalité : '. $agent->nationalite}}
                    </li>
                    <li class="list-item">
                        {{'Situation matrimoniale : '. $agent->situation_familiale}}
                    </li>
                    <li class="list-item">
                        {{'Nombre d\'enfants  : '. $agent->enfants_encharge}}
                    </li>
                    <li class="list-item">
                        {{'Profession actuelle  : '. $agent->profession}}
                    </li>
                    <li class="list-item">
                        {{'Horaire de travail sohaité  : '. $agent->horaire_travail_souhaite}}
                    </li>

                </ul>
            </div>

            <div>
                <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Adresse</h5>

                <ul class="list-unstyled text-white-50 ml-5 py-2">
                    <li class="list-item">
                        {{ 'Contatct : '.$agent->telephone }}
                        <i class="zmdi zmdi-smartphone-android"></i>
                    </li>
                    <li class="list-item">
                        {{'Email : '.$agent->email }}
                    </li>
                    <li class="list-item">
                        {{ 'Ville résidence : '.$agent->ville_residence }}
                    </li>
                    <li class="list-item">
                        {{ 'Quartier : '.$agent->quartier}}
                    </li>
                    <li class="list-item">
                        {{ 'Rue : '.$agent->rue }}
                    </li>
                </ul>
            </div>


        </div>
        <div class="col-lg-8 bg-light text-dark py-5 px-5">
            <div class="header-right">
                <h4 class="text-uppercase">Qualité personnel</h4>
                <hr>
                <p>{{ $agent->qualite_personnelles }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Niveau d'étude</h4>
                <hr>
                <p>{{ $agent->niveau_etude}}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Savoir faire</h4>
                <hr>
                <p>{{ $agent->savoir_faire }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Pretention salarial</h4>
                <hr>
                <p>{{ $agent->pretention_salarial }}</p>
            </div>

            <div>
                <h4 class="text-uppercase">Expériences</h4>
                <hr>
                <ul class="list">
                    <li class="tist-item">
                        <h4 class="display-8 ">Nombre d'anneés d'expéprience</h4>
                        <!--h3 class="text-uppercase text-black-50">{$experience->nbr_annee_experience.' '.'an(s)'}}</h3>

                        if ($agent->poste_agente == 'Chauffeur')
                            <h4 class="display-8 ">Nombre de voiture conduit</h4>
                            <h3 class="text-uppercase text-black-50">$experience->nbr_voiture_conduit}}</h3>

                            <h4 class="display-8 ">Type de voiture conduit</h4>
                            <h3 class="text-uppercase text-black-50">{$experience->type_voiture}}</h3>

                        elseif ($agent->poste_agente == 'Nounou')
                        <h4 class="display-8 ">Nombre d'enfants gardé: </h4>
                        <h3 class="text-uppercase text-black-50"></h3>


                        endif

                        <h4 class="display-8 ">Nature contrat passé</h4>
                        <h3 class="text-uppercase text-black-50"></h3>

                            <h4 class="display-8 ">Nom de l'employeur/société</h4>

                            <h3 class="text-uppercase text-black-50">"</h3>

                        <h4 class="display-8 ">Contact de l'employeur/société</h4>
                        <h3 class="text-uppercase text-black-50">{$experience->numero_employeur}}</h3>

                            <h4 class="display-8 ">Dernier salaire</h4>
                            <h3 class="text-uppercase text-black-50">{$experience->dernier_salaire}}</h3>

                            <h4 class="display-8 ">Date de démission de son dernier emploi</h4>
                            <h3 class="text-uppercase text-black-50">{$experience->date_demission}}</h3>

                    </li-->
                    <li class="tist-item">
                    </li>
                </ul>
            </div>

            <div class="header-right">
                <h4 class="text-uppercase">Nature contrat</h4>
                <hr>
                <p>{{ $agent->nature_contrat }}</p>
            </div>
            <div class="header-right">
                <h4 class="text-uppercase">Disponible à loger</h4>
                <hr>
                <p>{{ $agent->disponible_a_loger }}</p>
            </div>

            <div class="modal-footer">
                <form action="{{ route('liste.agents') }}" method="POST">
                    @csrf
                    @method('post')
                    <input type="hidden" name="service" value="{{$agent->poste_candidate}}">
                    <input type="hidden" name="position" value="{{$_GET['position']}}">
                    <button class="btn btn-secondary" type="submit">
                        Vue
                    </button>
                </form>
            </div>
        </div>

    </div>

</div>
</div>
@endsection
