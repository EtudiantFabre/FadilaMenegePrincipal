<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Se_candidater</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
    .modal-header {
        background: #F7941E;
        color: #fff;
    }

    .required:after {
        content: "*";
        color: red;
    }

    #text:hover {
    cursor:pointer;
    transform:scale(1.09);
    }

    button:hover {
    cursor:pointer;
    transform:scale(1.15);

}
</style>
</head>
<body class="hold-transition sidebar-mini">
  <!-- Navbar -->

  <section class="content-header" style="background-color: #d1d0d0">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><a href="{{route('accueil')}}"><img src="/Original_on_Transparent.png" alt="Fadila Ménage" style="width: 200px; height: 50px;"></a></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}">Retour</a></li><br>
          </ol>
        </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!--section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Poste</li>
            </ol>
          </div>
        </div>
      </div>
    </section-->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header float-sm-right" style=" background-color: #f7f6f5">
                <h2 class="floate-center text-uppercase ">Voici les qualités que recherchent nos employeurs</h2>
              </div>
              <!-- /.card-header-->
              <div class="card-body">
                <!--div class="row">
                    <div class="col-sm-4" id="text">
                        <div class="position-relative p-3 bg-#5f5d5c" style="height: 180px">
                          <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-black">
                              Inteligence
                            </div>
                          </div>
                          L'INTELIGENCE: <br />
                          <small style="font-weight: bold;">Oui Nous ne sommes pas tous des génies !”, êtes-vous peut-être <br> tenté de vous exclamer. Et vous auriez raison. Mais non, par “intelligence” <br> on entend autre chose que la capacité <br> à résoudre une équation à inconnues multiples</small>
                        </div>
                    </div>
                  <div class="col-sm-4" id="text">
                    <div class="position-relative p-3 bg-soield" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-black">
                          RESPPNSABILTÉ
                        </div>
                      </div>
                      LA RESPPNSABILTÉ: <br />
                      <small style="font-weight: bold;">La capacité à prendre des (ses ?) responsabilités Ce qu’on appelle parfois  <br>« le leadership », Nos employeurs veulent des employés responsables,</small>
                    </div>
                  </div>
                  <div class="col-sm-4" id="text">
                    <div class="position-relative p-3 bg-soield" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-black">
                           LE CÔTÉ SYMPATIQUE
                        </div>
                      </div>
                      LE SYMPATISME <br />
                      <small style="font-weight: bold;">Lorsqu’on recherche un nouveau collaborateur, c’est évident : <br> on cherche en priorité quelqu’un avec qui l’on peut s’imaginer travailler. Une personne <br> dotée de qualités humaines :  <br> un profil chaleureux, sympathique, ouvert, souriant, et conciliant, ayant un bon relationnel</small>
                    </div>
                  </div>
                </div>
                <div class="row mt-4" >
                  <div class="col-sm-4" id="text">
                    <div class="position-relative p-3 bg-soield" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-black ">
                            La competence
                        </div>
                      </div>
                      LE NIVEAU DE COMPETENCE : <br>
                      <small style="font-weight: bold;"> Evidemment, vous aurez beau être extrêmement sympathique, excellent en cuisine <br>  ou en conduite, si les compétences-clés pour un poste vous manquent, vous aurez du mal <br> à rassurer votre recruteur.
                    </small>
                    </div>
                  </div>
                  <div class="col-sm-4" id="text">
                    <div class="position-relative p-3 bg-soield" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-black">
                          Le courrage
                        </div>
                      </div>
                      LE COURAGE DE FAIRE ET DE DIRE LES CHOSES: <br />
                      <small style="font-weight: bold;">Votre envie de prendre des risques, d’accepter de relever les défis : <br> c’est aussi ce qui fera la différence. Les employeurs apprécient les collaborateurs <br>qui ont le courage de dire non seulement ce qui fonctionne bien, mais aussi <br> ce qui ne fonctionne pas de manière optimale.</small>
                    </div>
                  </div>
                  <div class="col-sm-4 bg-#f7f6f5" id="text">
                    <div class="position-relative p-3 bg-soield" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-black">
                            L’intégrité
                        </div>
                      </div>
                      L'INTÉGRITÉ, TOUJOURS <br />
                      <small style="font-weight: bold;">Très certainement l’une des clés de la réussite professionnelle (et personnelle).  <br> Qu’est-ce  que l’intégrité ? L’honnêteté, tant avec soi-même par rapport à ce que l’on est, <br> à ses forces et ses faiblesses, qu’avec les autres. Le fait de ne jamais se cacher derrière de faux  <br> prétextes  pour justifier un échec,  un retard ou tout autre problème dont <br> on serait directement responsable.</small>
                    </div>
                  </div>
                </div> <br>
                <div>
                    <nav class="navbar navbar-expand-md">
                     <div class="container-fluid" style=" background-color: #f7f6f5">
                             <h2 class="float-center text-uppercase">Vous êtes en recherche d'emploi ? Découvrez toutes les offres disponibles sur notre site.</h2>
                      </div>
                    </nav>
                </div--> <br>

                <div class="row  mt-6" >
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/imageSite2.webp" alt="Photo 1" class="img-fluid" style="height: 300px;">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-primary text-lg">
                         Nounous
                        </div>
                      </div>

                      <div class="mt-4">
                        <button type="button" class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#myModal">Postulez maintenant</button>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="text-center text-uppercase">Conditions de candidature</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <strong class="text-justify" style=" color: #FF5E0E; font-size: 3ch">Super ! les recurteurs cherchent des gens comme toi. Avant de continuer par postuler, assurez vous d'avoir  : </strong><br><br>
                                            <strong class="text-center" style=" font-size: 3ch;"> 1-Une photo paspport sccaner dans votre ordinateur ou téléphone</strong><br><br>
                                            <strong class="text-center" style=" font-size: 3ch"> 2-Avoir une pièce d'identité(Nationalité,Carte d'élécteur ou un Passport) à jour </strong><br><br>
                                            <strong class="text-center" style=" font-size: 3ch;"> 3-Prevoir au moins une personee à prevenir </strong>

                                            <div class="modal-footer">
                                                <form action="{{ route('candidats.create') }}" method="GET">
                                                    @method('PUT')
                                                    @csrf
                                                <input type="hidden" name="poste" id="poste" value="MANAGE">
                                                <button type="submit" class="btn btn-primary" >Continuer</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          Ajouter aux Favoris
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/conducteur.webp" alt="Photo 2" class="img-fluid" style="height: 300px;">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-primary text-lg">
                          Chauffeur
                        </div>
                      </div>
                    </div>
                    <div class="mt-4">
                        <button type="button" class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#myModal">Postulez maintenant</button>

                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          Ajouter aux Favoris
                        </div>
                      </div><br>
                  </div>
                </div>
                <div class="row  mt-6" >
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative" style="min-height: 180px;">
                      <img src="/ménagère.jpeg" alt="Photo 3" class="img-fluid" style="height: 300px; width: 900px;">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-primary text-lg">
                          Menage
                        </div>
                      </div>

                    </div>
                    <div class="mt-4">
                        <button type="button" class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#myModal">Postulez maintenant</button>

                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          Ajouter aux Favoris
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/cuisiniere.jpg" alt="Photo 1" class="img-fluid" style="height: 300px; width: 900px">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-primary text-lg">
                         Cuisine
                        </div>
                      </div>
                      <div class="mt-4">
                          <button type="button" class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#myModal">Postulez maintenant</button>
  
  
                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          Ajouter aux Favoris
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong class="text-center">Copyright &copy; 2017-{{ date('Y') }} <a href="https://gofadila.com"></a>Fadila Ménage</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js"></script>

<script src="../../plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<script src="../../plugins/bootstrap-slider/bootstrap-slider.min.js"></script>

<!--script src="../../dist/js/demo.js"></script-->
<!-- Page specific script -->

</body>
</html>
