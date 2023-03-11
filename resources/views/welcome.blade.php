@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/carousel.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        </style>
        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }
          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }
         .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
          }
          .bi {
            vertical-align: -.125em;
            fill: currentColor;
          }

          .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
          }
          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }
        </style>


    </head>
    <body class=" ">
        

        <header>
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
           <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="/Original_on_Transparent.png" style="width: 200px; height: 50px;" alt="FADILA MÉNAGE"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="container fixed-left" href="{{ route('chercher_emploi') }}" style="text-align: center; font-weight: bold; color:#000000; line-height: 50px;" id="comp-jd97w5lt3label">Postuler</a>
                <a class="container fixed-left" href="#" style="text-align: left; color:#000000; font-weight: bold; line-height: 50px;" id="comp-jd97w5lt3label">Nos services</a>

                @if (Route::has('login'))
                  <div class="hidden btn-toolbar fixed top-0 right-0 px-3 py-4 sm:block">
                      <a class="text-sm text-gray-900 btn btn-app dark:text-gray-500" href="{{route('offre')}}">Demander un service</a>
                      @auth
                          <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 btn btn-info underline">Home</a>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-900 dark:text-gray-500 btn btn-app">Se connecter</a>
                      @endauth
                  </div>
                @endif
              </div>
            </div>
          </nav>
        </header>

        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner" id="#">
                <div class="carousel-item active">
                  <img src="/imageSite.webp" class="d-block w-100 img-custom bd-placeholder-img" width="100%" height="100%" alt="..." aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777" >
                  <div class="carousel-caption d-none d-md-block text-start container">
                    <h1>Bienvenue sur notre site officiel Fadila Ménage</h1>
                    <p>Demander un devis en cliquant directement sur ce bouton</p>
                    <form action="{{route('offre')}}">
                       <button class="btn btn-primary">Demander un service</button>
                    </form>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/imageSite1.webp" class="d-block w-100 img-custom bd-placeholder-img" width="100%" height="100%" alt="..." aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="bg-green">Vous pouvez visiter nôtre page linkedin en cliquant sur cet bouton</h1>
                    <p>Accédez directement à notre Page linkedin à partir d'ici.</p>
                    <form action="https://tg.linkedin.com/company/fadila-menage" target="_blank">
                      <button class="btn btn-primary">Linkedin</button>
                    </form>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/imageSite2.webp" class="d-block w-100 img-custom bd-placeholder-img" width="100%" height="100%" alt="..." aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777">
                  <div class="carousel-caption d-none d-md-block text-end">
                    <h1>Bienvenue sur notre site officiel</h1>
                    <p>Accédez directement à notre whatsapp à partir d'ici</p>
                    <form action="https://chat.whatsapp.com/HYxRZx6Z4h62TgGdwHShJc" target="_blank">
                      <button class="btn btn-primary">Whatsapp</button>
                    </form>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>


            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->


              <!-- START THE FEATURETTES -->

            <div class="container marketing">
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading fw-normal lh-1">Première activité, Ça va vous époustoufler</h2>
                  <p class="lead">Pour commencer, nous offrons une formation proffesionnel aux personnes désirant travailler à Fadila ménage et pourtant ne disposant d'aucune compétence.</p>
                </div>
                <div class="col-md-5">
                  <!--svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg-->
                  <img src="/fadila2.png" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7 order-md-2">


                  <h2 class="featurette-heading fw-normal lh-1 text-uppercase " style="color:#FF5E0E">Oh yeah, c'est cool en vu d'obtenir un emploi ?</h2>
                  <p class="lead text-uppercase" style="color:#FF5E0E">Fadila Ménage permet aux travailleurs domestiques existants et tout chercheur d’emploi de <a href="{{ route('candidats.create') }}">s'enregistrer</a>, de créer un profil, En vue d’obtenir un emploi selon leur compétence.</p>

                </div>
                <div class="col-md-5 order-md-1">
                  <!--svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg-->
                  <img src="/candidature.png" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading fw-normal lh-1">Et enfin, celui-ci. <span class="text-muted">Échec et mat.</span></h2>
                  <p class="lead">Enfin oui, ceci est encore une des activité possible sur ce site. Vous pouvez demander un service pour recevoir chez vous un agent de Fadila qui travaillera chez vous pour un contrat à durée déterminé ou indéterminé. </p>
                </div>
                <div class="col-md-5">
                  <!--svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg-->
                  <img src="/toutfadila5.jpeg" alt="" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
              </div>

              <hr class="featurette-divider">

              <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->

            <div class="container my-5">
              <div class="bg-light p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                  <h1 class="display-5 fw-normal">Pétite histoire </h1>
                  <p class="fs-5">Créée en 2017, FADILA MÉNAGE est spécialisée dans le placement du personnel de ménage, le nettoyage professionnel et la conception de panier-cadeau.</p>
                  <p class="text-danger">Notre mission est d'apporter le bonheur et la joie dans vos ménages.</p>
              </div>
              </div>
            </div>
          <div class="container">
            <hr class="featurette-divider">
          </div>
          <div>
            <h1 class="display-5 fw-normal">Localisation de l'entreprise</h1>
          </div>
          <div class="w-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2448.080653868778!2d1.1833252916149195!3d6.196182999322801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xae79e4aa5b839cab!2zNsKwMTEnNDYuNiJOIDHCsDExJzAzLjkiRQ!5e1!3m2!1sfr!2stg!4v1662765306613!5m2!1sfr!2stg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </main>
</html>
</body>

@endsection
