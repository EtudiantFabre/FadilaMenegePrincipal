@extends('teteEtBasPage')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="js/positionComplet.js"></script>
  <!--script src="affichageAgent.js" async></script-->

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  
  <style>
    #maCarte {
      height: 500px;
    }
  </style>

  <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
  
  <!-- Fichiers Javascript -->
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script type="text/javascript">

</head>
<body class="hold-transition">
  <!-- Site wrapper -->
  <div class="wrapper" id="#">
    
    <div class="">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('accueil')}}">Maison</a></li>
                <li class="breadcrumb-item"><a href="{{route('offre')}}">Offres</a></li>
                <li class="breadcrumb-item active">Agents</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
        <div class="progress">
          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="container-fluid">
          <div class="card-header " style=" background-color: #f0eeed">
            <h2 class="floate-center text-uppercase text-uppercase text-center">Liste des agents</h2>
        
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnFin">
                Position
              </button>
            </div>

            <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title mx-auto" style="color: rgb(0, 0, 0)" id="exampleModalLabel">VOTRE LOCALISATION</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body container">
                          



                        <div id="maCarte"></div>
                          
                          <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
                          integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
                          crossorigin=""></script>

                          <script type="js">

                            function Geo(position){
                              lat = position.coords.latitude;
                              long = position.coords.longitude;

                              loadMap(lat, long);

                            }

                            function erreurGeo(erreur) {
                              let mag;
                              switch(erreur.code){
                                case erreur.TIMEOUT:
                                  mag = 'Le temps de la requète à expiré';
                                  break;
                                
                                case erreur.UNKNOWN_ERROR:
                                  mag = 'Une erreur inconus s\' est produite';
                                  break;
                                
                                case erreur.POSITION_UNVAILABLE:
                                  mag = 'Une erreur technique s\'est produite';
                                  break;

                                case erreur.PERMISSION_DENIED:
                                  mag = 'Vous avez  refusé la géolocalisation';
                                  break;
                              }
                            }

                            function loadMap(lat, long) {
                              /*alert(lat);
                              alert(long);*/
                              let carte = L.map('maCarte').setView([lat, long], 10)
                              L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                minZoom: 1,  
                                maxZoom: 20,
                                  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                              }).addTo(carte);

                              var marqueur = L.marker(lat, long).addTo(carte);

                              // Ajout du titre sur le marqueur :
                              //const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${long}&localityLanguageRequested=fr`
                              


                            }

                            if(navigator.geolocation){
                              navigator.geolocation.getCurrentPosition(Geo, erreurGeo, {maximunAge : 120000});                      
                            } else {
                              alert("Vous n'avez pas sélectionner de position !!!");
                            }
                            
                            
                          </script>
                      </div>
                      <div class="modal-footer">
                        <div class="d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <input type="submit" class="btn btn-primary" id="continuer" data-bs-dismiss="modal" value="Continuer" disabled/>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

          </div>
        
          <div class="card card-solid">
            <div class="card-body pb-0">
              <div class="row">
                @foreach ($agents as $agt)
                  <div class="col-12 col-sm-6 col-md-4 da-flex align-items-stretch flex-column">
                    <form action="{{route('clients.prospect')}}" method="POST">
                      @csrf
                      @method('post')
                      <input type="hidden" name="service" value="{{$service}}">
                      <??>

                      
                      <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                          {{strtoupper($agt->poste_candidate)}}
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b>{{$agt->prenom." ".$agt->nom}}</b></h2>
                              <input type="hidden" name="id_agent" value="{{$agt->id_agent}}">
                              <p class="text-muted text-sm"><b>Expériences: </b> Aucune </p>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Addresse: {{$agt->ville_residence.", ".$agt->quartier.", ".$agt->rue}}</li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Tel #: {{$agt->telephone}}</li>
                                <li class="small"><span class="fa-li"><i class="fa fa-money" aria-hidden="true"></i></span> Prétention salarial : <span class="text-danger required" aria-hidden="true"><h6>{{$agt->pretention_salarial}} FCFA</h6></span></li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img class="img-circle img-fluid " src="{{ asset('storage/'.$agt->avatar)}}" alt="Image" style="width: 150px; height: 150px;" >
                              <!--img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid"-->
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <button class="btn btn-sm bg-teal" type="submit">
                                <i class="fa fa-check-square" style="font-size:15px;color:rgb(255, 255, 255)"></i>
                                Sélectionner
                            </button>
                            <a name="buttonProfil" href="{{route("agent.affichage", ['agent' => $agt->id_agent, 'position' => $agt->ville_residence])}}" class="btn btn-sm btn-primary">
                              <i class="fas fa-user"></i> Profil
                            </a>

                            <script>
                              $("#{{$agt->id_agent}}").click(function() {
                                let id = $(this).attr("id");
                                alert(id);
                                alert("debut");
                              })
                              function affichageAgent(id){
                                
                                alert(id);
                                nvllepage = open( "nos-offres","", "top = 500, left = 500, width = 500, height = 500");
                                //open("/home/toyi/Bureau/CoursL2/S4/JavaScript/BOM/pageTest.html", "", true);
                                nvllepage.resizeBy(-200, 100);
                                nvllepage.resizeTo(500, 500);
                                                            
                              }
                            </script>
                            <!-- Modal -->
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
                              <div class="modal-dialog modal-xl" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">#Information de l'agent {{strtoupper($agt->nom)." ".strtoupper($agt->prenom)}}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">

                                      <div class="container rounded-4  shadow-lg p-3 mb-5 bg-div">

                                          <div class="container p-5">
                                              <div class="class row">
                                                  <div class="class col-lg-4 bg-dark text-white text-center py-4">
                                                      <div class="header-left">
                                                        <img class="img-circle img-fluid " src="{{ asset('storage/'.$agt->avatar)}}" style="width: 100px; height: 100px;" >  
                                                          <h4 class="lead text-uppercase text-white-5 mb-4">{{ $agt->poste_candidate }}</h4>
                                                      </div>
                                          
                                                      <div>
                                                          <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Informations personnel</h5>
                                          
                                                          <ul class="list-unstyled text-white-50 ml-5 py-2 ">
                                                              <li class="list-item">
                                                              {{ 'Date naissance : '.$agt->date_naissance }}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{ 'Lieu naissance : '.$agt->lieu_naissance }}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{'Genre : '. $agt->genre}}
                                                              </li>
                                          
                                                              <li class="list-item">
                                                                  {{'Nationalité : '. $agt->nationalite}}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{'Situation matrimoniale : '. $agt->situation_familiale}}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{'Nombre d\'enfants  : '. $agt->enfants_encharge}}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{'Profession actuelle  : '. $agt->profession}}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{'Horaire de travail sohaité  : '. $agt->horaire_travail_souhaite}}
                                                              </li>
                                          
                                                          </ul>
                                                      </div>
                                          
                                          
                                                      <div>
                                                          <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Adresse</h5>
                                          
                                                          <ul class="list-unstyled text-white-50 ml-5 py-2">
                                                              <li class="list-item">
                                                                  {{ 'Contatct : '.$agt->telephone }}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{'Email : '.$agt->email }}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{ 'Ville résidence : '.$agt->ville_residence }}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{ 'Quartier : '.$agt->quartier}}
                                                              </li>
                                                              <li class="list-item">
                                                                  {{ 'Rue : '.$agt->rue }}
                                                              </li>
                                                          </ul>
                                                      </div>
                                          
                                                      <div>
                                                          <h5 class="text-uppercase bg-white text-dark py-2 rounded-pill">Objectif</h5>
                                                          <ul class="list text-white-50 text-ml-5 py-2 text-left text-capitalize">
                                                              <li class="list-item">
                                                                  {{ $agt->objectif }}
                                                              </li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-8 bg-light text-dark py-5 px-5">
                                                      <div class="header-right">
                                                          <h4 class="text-uppercase">Qualité personnel</h4>
                                                          <hr>
                                                          <p>{{ $agt->qualite_personnelles }}</p>
                                                      </div>
                                          
                                                      <div>
                                                          <h4 class="text-uppercase">Expériences</h4>
                                                          <hr>
                                                          <!--ul class="list">
                                                              <li class="tist-item">
                                                                  <h5 class="display-6 text-uppercase">online media marketing</h5>
                                                                  <h6 class="text-uppercase text-black-50">company name / 2020-present</h6>
                                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem nobis consequatur commodi consectetur iste, suscipit natus minima eum! Qui repudiandae tempore ducimus incidunt quaerat minima sapiente sint dolore magnam expedita molestiae, aliquam inventore cupiditate at voluptatem? Esse optio ea velit voluptatum repudiandae labore repellat, consequuntur id harum excepturi, vitae pariatur?</p>
                                                              </li>
                                                              <li class="tist-item">
                                                                  <h5 class="display-6 text-uppercase">online media marketing</h5>
                                                                  <h6 class="text-uppercase text-black-50">company name / 2020-present</h6>
                                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem nobis consequatur commodi consectetur iste, suscipit natus minima eum! Qui repudiandae tempore ducimus incidunt quaerat minima sapiente sint dolore magnam expedita molestiae, aliquam inventore cupiditate at voluptatem? Esse optio ea velit voluptatum repudiandae labore repellat, consequuntur id harum excepturi, vitae pariatur?</p>
                                                              </li>
                                                          </ul-->
                                                      </div>
                                                      <div class="header-right">
                                                          <h4 class="text-uppercase">Savoir faire</h4>
                                                          <hr>
                                                          <p>{{ $agt->savoir_faire }}</p>
                                                      </div>
                                                      <div class="header-right">
                                                          <h4 class="text-uppercase">Nature contrat</h4>
                                                          <hr>
                                                          <p>{{ $agt->nature_contrat }}</p>
                                                      </div>
                                                      <div class="header-right">
                                                          <h4 class="text-uppercase">Disponible à loger</h4>
                                                          <hr>
                                                          <p>{{ $agt->disponible_a_loger }}</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vue</button>
                                                          <!--button type="button" class="btn btn-primary">Save changes</button-->
                                                      </div>
                                                  </div>
                                          
                                              </div>
                                              
                                          </div>
                                      </div>

                                  </div>
                              </div>
                              </div>
                          </div>
                          </div>
                        </div>
                      </div>
                  </form>
                  </div>
                  
                @endforeach
                
                
            <!-- /.card-body -->
            <div class="card-footer">
              <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link" href="#">7</a></li>
                  <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
              </nav>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!--script src="../../dist/js/demo.js"></script-->
</body>
</html>
@endsection
