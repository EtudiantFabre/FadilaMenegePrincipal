
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
          <a href="{{route('accueil')}}"><img src="/Original_on_Transparent.png" alt="Fadila Ménage"  style="width: 150px; height: 38px;"></a>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}">Maison</a></li>
            <li class="breadcrumb-item active">Nos prestations</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <div class="progress">
      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </section>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header " style=" background-color: #f0eeed">
                <h2 class="floate-center text-uppercase text-uppercase text-center">Voici les types de service que nous vous proposons</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row  mt-6" >
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/imageSite2.webp" style="width: 910px; height: 345px;" alt="Photo 1" class="img-fluid">
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
      
                          <button type="submit"  class="btn btn-primary btn-lg btn-flat" id="btnFin">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Passer la demande
                          </button>
                          <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            J'aime
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6" id="poste">
                    <div class="position-relative">
                      <img src="/conducteur.webp" style="width: 910px; height: 345px;" alt="Photo 2" class="img-fluid">
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
    
                        <button type="submit"  class="btn btn-primary btn-lg btn-flat" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnFin">
                          <i class="fas fa-cart-plus fa-lg mr-2"></i>
                          Passer la demande
                        </button>
                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          J'aime
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="col-sm-6" id="poste">
                    <div class="position-relative" style="min-height: 180px;">
                      <img src="/imageSite1.webp" style="width: 910px; height: 345px;" alt="Photo 3" class="img-fluid">
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
                        <button type="submit"  class="btn btn-primary btn-lg btn-flat" id="btnFin">
                          <i class="fas fa-cart-plus fa-lg mr-2"></i>
                          Passer la demande
                        </button>
                
                        <div class="btn btn-default btn-lg btn-flat">
                          <i class="fas fa-heart fa-lg mr-2"></i>
                          J'aime
                        </div>
                      </form>
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

                          <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            J'aime
                          </div>
                        </form>
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