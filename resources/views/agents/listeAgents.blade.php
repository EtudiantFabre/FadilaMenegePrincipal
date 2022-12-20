@extends('teteEtBasPage')
@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

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

  <!-- leafletjs CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css" />
  <!-- leafletjs JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
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
                      
                      <!--div class="input-group mb-3">
                        <p type="text" class="form-control" name="ville" id="villerec"></p>
                        <button class="btn btn-primary" onclick="chercher()" id="button-addon2" disabled>Chercher</button>
                      </div-->
                      <div>
                        <p class="text-center" name="ville" id="villerec">Ville</p>
                        <input type="text" hidden name="position">
                      </div>

                      <div id="maCarte"></div>
                        
                        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
                          integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
                          crossorigin="">
                        </script>

                        <script>

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
                            carte = L.map('maCarte').setView([lat, long], 10);
                            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                              minZoom: 1,  
                              maxZoom: 20,
                                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                            }).addTo(carte);
                            chercher();

                            // Ajout du titre sur le marqueur :
                            //const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${long}&localityLanguageRequested=fr`
                            
                            /*var popup = L.popup()
                            .setLatLng([lat, long])
                            .setContent("Voici votre position actuel")
                            .openOn(carte);*/

                          }


                          function chercher(){    
                            //alert("Je suis dans cherché."); 

                            const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${long}&localityLanguageRequested=fr`
                            fetch(geoApiUrl)
                              .then(res => res.json())
                              .then(data => {
                                //alert(lat + ' et ' + long);
                                console.log(data);
                                document.getElementById('villerec').innerHTML = "<h2>" + data.city + "</h2>";// + "votre ville";
                                //document.getElementById('btnGroupDrop1').innerHTML = document.getElementById('btnGroupDrop1').textContent+ " : " + "<h3>" + data.city + "</h3>";
                                let marqueur = L.marker(lat, long).addTo(carte);
                                marqueur.bindPopup(data.countryName).openPopup();
                            });
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
                          <input class="btn btn-primary" id="continuer"  data-bs-dismiss="modal" value="Continuer"/>
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
                <div hi class="valpos col-12 col-sm-6 col-md-4 da-flex align-items-stretch flex-column">
                  <form action="{{route('clients.prospect')}}" method="POST">
                    @csrf
                    @method('post')
                    <input type="hidden" name="service" value="{{$service}}">
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
                              <input class="ville_de_residence" type="text" hidden name="ville_de_residence" value="{{ $agt->ville_residence }}">
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Adresse: {{$agt->ville_residence.", ".$agt->quartier.", ".$agt->rue}}</li>
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
                            /*$("#{{$agt->id_agent}}").click(function() {
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
                                                          
                            }*/
                          </script>
                        </div>
                      </div>
                    </div>
                </form>
                </div>
                
              @endforeach
              
              
          <!-- /.card-body -->
          <!--div class="card-footer">
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
          </div-->
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<-- Mon script : -->

<script>
  
  
  document.getElementById('continuer').onclick = function(){
    let lesAgents = document.getElementsByClassName('valpos');
    let ville = document.getElementById('villerec').innerText.substr(0, 3);
    console.log(lesAgents[0].querySelector(".ville_de_residence").value);
    //alert(lesAgents[0].children);

    for (let i = 0; i < lesAgents.length; i++){
      if (ville != lesAgents[i].querySelector(".ville_de_residence").value.substr(0, 3)){
        lesAgents[i].hidden = true;
      }
    }
  }
  document.getElementById('btnGroupDrop1').onchange = function(){
    alert('je suis là');
  }

  function trier(){
    alert("Je fais un tri");
  }
</script>

<-- Mon script : -->

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
