
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

  
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!--script src="../../dist/js/demo.js"></script-->
  <script>
    $(document).ready(function() {
      $('.product-image-thumb').on('click', function () {
        var $image_element = $(this).find('img')
        $('.product-image').prop('src', $image_element.attr('src'))
        $('.product-image-thumb.active').removeClass('active')
        $(this).addClass('active')
      })
    })
    
  </script>
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
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><img src="/Original_on_Transparent.png" alt="Fadila Ménage" style="width: 200px; height: 50px;"></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}">Maison</a></li>
            <li class="breadcrumb-item active">Nos prestations</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->

    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header " style=" background-color: #FF5E0E">
                <h2 class="floate-center text-uppercase text-uppercase">Voici les types de service que nous vous proposons</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row  mt-6" >
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/imageSite2.webp" alt="Photo 1" class="img-fluid">
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                         Nounous
                        </div>
                      </div>

                      <div class="mt-4">

                        <form action="{{ route('liste.agents') }}" method="post">
                          @csrf
                          @method('post')
                          <input type="hidden" name="service" value="NOUNOU">
      
                          <button type="button"  class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnFin">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Passer la demande
                          </button>

                          <!-- Content Header (Page header) -->
                          <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mx-auto" style="color: rgb(0, 0, 0)" id="exampleModalLabel">INFOS POUR LA LOCALISATION</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body container">
                                        <form class="">
                                          <strong class="text-center"><h1 class="status"></h1></strong>
                                          <input type="hidden" class="positionRetrouver" name="position"/>
                                          <div id="map" height="300" width="100%"></div>
                                          <!--iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d9728.542118052746!2d1.1258635!3d9.0019962!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2stg!4v1664641130748!5m2!1sfr!2stg" height="300" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe-->
                                          <p></p>
                                          <button type="button" class="retPosition btn btn-danger d-grid gap-2 mx-auto col-6">TROUVER MA POSITION ACTUEL</button>
                                          <script src="js/position.js"></script>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                      <div class="d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          <input type="submit" class="btn btn-primary" id="continuer" data-bs-dismiss="modal" value="Continuer" disabled/>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                  
      
                          <!--button type="submit" class="btn btn-primary btn-lg btn-flat">
                              <i class="fas fa-cart-plus fa-lg mr-2"></i>
                              Passer la demande
                          </button-->
                        </form>

                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          J'aime
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/conducteur.webp" alt="Photo 2" class="img-fluid">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-warning text-lg">
                          Chauffeur
                        </div>
                      </div>
                    </div>
                    <div class="mt-4">
                      <form action="{{ route('liste.agents') }}" method="post">
                        @csrf
                        @method('post')
                        <input type="hidden" name="service" value="CHAUFFEUR">
    
                        <button type="button"  class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnFin">
                          <i class="fas fa-cart-plus fa-lg mr-2"></i>
                          Passer la demande
                        </button>
                
    
                        <!--button type="submit" class="btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Passer la demande
                        </button-->
                      </form>

                      <div class="btn btn-default btn-lg btn-flat">
                        <i class="fas fa-heart fa-lg mr-2"></i>
                        J'aime
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative" style="min-height: 180px;">
                      <img src="/imageSite1.webp" alt="Photo 3" class="img-fluid">
                      <div class="ribbon-wrapper ribbon-xl">
                        <div class="ribbon bg-danger text-xl">
                          Menage
                        </div>
                      </div>

                    </div>
                    <div class="mt-4">
                      <form action="{{ route('liste.agents') }}" method="post">
                        @csrf
                        @method('post')
                        <input type="hidden" name="service" value="ENTRETIEN">
                        <button type="button"  class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnFin">
                          <i class="fas fa-cart-plus fa-lg mr-2"></i>
                          Passer la demande
                        </button>
                
                        
    
                        <!--button type="submit" class="btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Passer la demande
                        </button-->
                      </form>

                      <div class="btn btn-default btn-lg btn-flat">
                        <i class="fas fa-heart fa-lg mr-2"></i>
                        J'aime
                      </div>
                      </div>
                  </div>
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/cuis3.jpeg" alt="Photo 1" class="img-fluid" style="width: 910px; height: 345px;">
                      <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-success text-lg">
                         Cuisine
                        </div>
                      </div>
                      <div class="mt-4">
                        <form action="{{ route('liste.agents') }}" method="post">
                          @csrf
                          @method('post')
                          <input type="hidden" name="service" value="CUISINIER">
                          <button type="button"  class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnFin">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Passer la demande
                          </button>
                  
                          <!--button type="submit" class="btn btn-primary btn-lg btn-flat">
                              <i class="fas fa-cart-plus fa-lg mr-2"></i>
                              Passer la demande
                          </button-->
                        </form>
  
                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          J'aime
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
                
                <!--div class="col-sm-4" id="poste">
                  <div class="position-relative" style="min-height: 180px;">
                    <img src="/imageSite1.webp" alt="Photo 3" class="img-fluid">
                    <div class="ribbon-wrapper ribbon-xl">
                      <div class="ribbon bg-danger text-xl">
                        Menage
                      </div>
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
                </div-->
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
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017-2022 <a href="{{route('accueil')}}">fadilamenage.com</a>.</strong> Tout droit reservé.
  </footer>

  
<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js"></script>

<script src="../../plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<script src="../../plugins/bootstrap-slider/bootstrap-slider.min.js"></script>

<!--script src="../../dist/js/demo.js"></script-->
<!-- Page specific script -->

</body>
</html>

@endsection