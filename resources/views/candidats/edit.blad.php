<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <section class="content-header" style="background-color: #f5f4f4">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><a href="{{route('accueil')}}"><img src="/Original_on_Transparent.png" alt="Fadila Ménage" style="width: 200px; height: 30px;"></a></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('accueil')}}">Retour</a></li><br>
          </ol>
        </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section><br>
<div class="mx-auto" style="width: 950px;">
      
            <!-- general form elements disabled -->
            <div class="card card-#f5f4f4">
              <div class="card-header">
                <h3 class="text-center">Remplicez le formulaire</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Si nous avons un candidat $candidat -->
	              @if (isset($candidat))
                <form method="POST" action="{{ route('candidats.update', $candidat) }}" enctype="multipart/form-data" class="mb-10px" id="wizard">
                   <!-- <input type="hidden" name="_method" value="PUT"> -->
		              @method('PUT')

                  @else
                  <form method="POST" action="{{ route('candidats.store') }}" enctype="multipart/form-data" class="mb-10px" id="wizard">
                @endif

                @csrf
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Votre nom de famille</label>
                        <input type="text" class="form-control" name="nom" value="{{ isset($candidat->nom) ? $candidat->nom : old('nom') }}"  id="nom" placeholder="Nom" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Votre prénom</label>
                        <input type="text" class="form-control" name="prenom" value="{{ isset($candidat->prenom) ? $candidat->prenom : old('prenom') }}"  id="prenom" placeholder="Prenom" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label> Date de naissance</label>
                        <input type="date" name="date_naissance" value="{{ isset($candidat->date_naissance) ? $candidat->date_naissance : old('date_naissance') }}"  id="date_naissance"  class="form-control" aria-required="true" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Lieu de naissance</label>
                        <input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="Lieu de naissance" class="form-control" riquired>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label> Numéro de téléphone</label>
                        <input class="form-control" type="text" name="telephone" value="{{ isset($candidat->telephone) ? $candidat->telephone : old('telephone') }}"  id="telephone" placeholder="Numéro de téléphone" aria-required="true">
                        <i class="zmdi zmdi-smartphone-android"></i>                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ isset($candidat->email) ? $candidat->email : old('email') }}"  id="email" placeholder="exemple@gmail.com" class="form-control" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nationalité</label>
                        <input type="text" name="nationalite" value="{{ isset($candidat->nationalite) ? $candidat->nationalite : old('nationalite') }}"  id="nationalite" placeholder="Notionalité" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Pièce d'identité</label>
                        <select name="piece_identite" id="piece_identite" class="form-control" required>
                          <option >Pièce d'identité</option>
                          <option value="Passport">Passport</option>
                          <option value="Carte national">Carte national</option>
                          <option value="Carte d'électeur">Carte d'électeur</option>
                       </select>                     
                     </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Numéro de pièce d'identité</label>
                        <input type="text" name="numero_de_piece" value="{{ isset($candidat->numero_de_piece) ? $candidat->numero_de_piece : old('numero_de_piece') }}"  id="numero_de_piece" placeholder="Le numéro de la pièce" class="form-control" >
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                      <label>Date de délivrance</label>
                        <input type="date" class="form-control datepicker-here" name="date_delivrer" value="{{ isset($candidat->date_delivrer) ? $candidat->date_delivrer : old('date_delivrer') }}"  id="date_delivrer" placeholder="date délivrance">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Date d'expiration</label>
                        <input type="date" name="date_expiration" class="form-control" value="{{ isset($candidat->date_expiration) ? $candidat->date_expiration : old('date_expiration') }}"  id="date_expiration" placeholder="date d'expiration">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                      <label>Votre ville de résidence</label>
                      <input type="text" name="ville_residence" value="{{ isset($candidat->ville_residence) ? $candidat->ville_residence : old('ville_residence') }}"  id="ville_residence" placeholder="Ville de résidence" class="form-control">
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Votre quartier</label>
                        <input type="text" name="quartier" value="{{ isset($candidat->quartier) ? $candidat->quartier : old('quartier') }}"  id="Votre quartier" placeholder="Quartier" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Rue</label>
                        <input type="text" name="rue" value="{{ isset($candidat->rue) ? $candidat->rue : old('rue') }}"  id="rue" placeholder="Rue" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Genre</label>
                        <select name="genre" id="genre" class="form-control" required>
                            <option>Genre</option>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                            <option value="Autre">Autre</option>
                        </select>                      
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Situation de famille</label>
                        <select name="situation_familiale" id="situation_familiale" class="form-control" required>
                          <option >Situation matrimonial</option>
                          <option value="Marié">Marié</option>
                          <option value="Célibataire">Célibataire</option>
                      </select>                      
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                      <label>Disponibilité</label>
                      <select name="disponible_a_loger" id="disponible_a_loger" class="form-control">
                        <option>Disponible à loger</option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                      </select>                      
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Lieu de naissance</label>
                        <select name="poste_candidate" id="poste_candidate" class="form-control">
                          <option>Poste candidaté</option>
                          <option value="CHAUFFEUR">Chauffeur</option>
                          <option value="NOUNOU">Nounou</option>
                          <option value="ENTRETIEN">Agent d'entretient</option>
                          <option value="CUISINIER">Cuisinier(e)</option>
                      </select>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        @if(isset($candidat->avatar))
                            <div class="form-holder">
                                <span>Photo actuelle</span>
                                <img src="{{ asset('storage/'.$candidat->avatar) }}" alt="photo" style="max-height: 70px;" >
                            </div>
                        @endif
                        <label>Votre photo</label>
                        <input class="form-control" type="file" name="avatar"  id="avatar" action="/upload" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lieu de naissance</label>
                        <input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="Lieu de naissance" class="form-control" riquired>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ojectif de votre candidature</label>
                        <textarea class="form-control" name="objectif" id="objectif"  placeholder="L'objectif de votre candidature" aria-required="true">{{ isset($candidat->objectif) ? $candidat->objectif : old('objectif') }}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Ninveau d'étude</label>
                        <input class="form-control" type="text" name="niveau_etude" value="{{ isset($candidat->niveau_etude) ? $candidat->niveau_etude : old('niveau_etude') }}"  id="niveau_etude" placeholder="Niveau d'étude" aria-required="false">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nature du contrat</label>
                        <select name="nature_contrat" id="nature_contrat" class="form-control">
                          <option>Nature Contrat</option>
                          <option value="CDD">CDD</option>
                          <option value="CDI">CDI</option>
                          <option value="Autre">Autre</option>
                      </select>                     
                     </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Horaire de travail</label>
                        <select name="horaire_travail_souhaite" id="horaire_travail_souhaite" class="form-control">
                          <option>Horaire de travail souhaité</option>
                          <option value="Temps plein">Temps plein</option>
                          <option value="Temps poyenne">Temps moyenne</option>
                          <option value="Mis temps">Mis temps</option>
                          <option value="Mis temps">Autre</option>
                      </select>                      
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Horaire de votre dernier travail</label>
                        <select name="horaire_travail_passe" id="horaire_travail_passe" class="form-control">
                          <option>Horaire de travail passé</option>
                          <option value="Temps plein">Temps plein</option>
                          <option value="Temps poyenne">Temps moyenne</option>
                          <option value="Mis temps">Mis temps</option>
                          <option value="Mis temps">Autre</option>
                      </select>                      
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Qualités personel</label>
                        <textarea class="form-control" name="qualite_personnelles" id="qualite_personnelles"  placeholder="vos qualités personnel" >{{ isset($candidat->qualite_personnelles) ? $candidat->qualite_personnelles : old('qualite_personnelles') }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Savoir faire</label>
                        <textarea class="form-control" name="savoir_faire" id="savoir_faire"  placeholder="Qu'est ce que vous savez faire d'autre" >{{ isset($candidat->savoir_faire) ? $candidat->savoir_faire : old('savoir_faire') }}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lieu de naissance</label>
                        <input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="Lieu de naissance" class="form-control" riquired>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label> Date de naissance</label>
                        <input type="date" name="date_naissance" value="{{ isset($candidat->date_naissance) ? $candidat->date_naissance : old('date_naissance') }}"  id="date_naissance"  class="form-control" aria-required="true" >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lieu de naissance</label>
                        <input type="text" name="lieu_naissance" value="{{ isset($candidat->lieu_naissance) ? $candidat->lieu_naissance : old('lieu_naissance') }}"  id="lieu_naissance" placeholder="Lieu de naissance" class="form-control" riquired>
                      </div>
                    </div>
                  </div>
                
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!--footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer-->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
