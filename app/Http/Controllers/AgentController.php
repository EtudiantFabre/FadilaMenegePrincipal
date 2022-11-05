<?php

namespace App\Http\Controllers;

use App\Models\ExperienceDuCandidat;
use App\Models\PersonneAprevenir;
use App\Models\Agent;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $agents = Agent::orderBy('id_agent', 'DESC')->get();
        notify()->success("Liste des agents !!!");
        return view('agents.index', compact('agents'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        connectify('success', 'Création', "Création d'un agent !!!");
        return view('agents.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'date_offre' => 'required',
            'domaine' => 'required'
        ]);



        //return redirect()->route('agents.store');
        $agts = Agent::all()->where("nom", "=", $request->nom)->where("prenom", "=", $request->prenom)->where("date_naissance", "=", $request->date_naissance);
        if (count($agts) == 0) {
            $agents = new Agent;
            $agents->id_agent = $request->id_agent;
            $agents->nom = $request->nom;
            $agents->prenom = $request->prenom;
            $agents->date_naissance = $request->date_naissance;
            $agents->lieu_naissance = $request->lieu_naissance;
            $agents->genre = $request->genre;
            $agents->email = $request->email;
            $agents->situation_familiale = $request->situation_familiale;
            $agents->nationalite = $request->nationalite;
            $agents->enfants_encharge = $request->enfants_encharge;
            $agents->profession = $request->profession;
            $agents->status = $request->status;
            $agents->avatar = $request->avatar;
            $agents->date_retenu = $request->date_retenu;
            $agents->nationalite = $request->nationalite;
            $agents->photo_id = $request->avatar;
            $agents->numero_de_piece = $request->numero_de_piece;
            $agents->date_expiration = $request->date_expiration;
            $agents->date_delivrer = $request->date_delivrer;
            $agents->ville_residence = $request->ville_residence;
            $agents->quartier = $request->quartier;
            $agents->rue = $request->rue;
            $agents->telephone = $request->telephone;
            $agents->save();

            connectify('success', 'Enregistrement', 'Agent enregistré avec succès !!!');
        }
        else {
            connectify('success', 'Enregistrement', 'Agent déjà existant !!!');
        }

        return redirect()->route('agents.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Agent $agent)
    {

        $experiences = ExperienceDuCandidat::all()->where('agent', '=', $agent->id_agent);
        $personeAprevenirs = PersonneAprevenir::all()->where('agent', '=', $agent->id_agent);
        //dd($personeAprevenirs);
        $experience = null;
        $key = 0;
        if (count($personeAprevenirs) == 0) {
            $personeAprevenir = null;
        }
        elseif (count($experiences) == 0) {

            while (!isset($personeAprevenirs[$key])) {
                $key++;
            }

            $personeAprevenir = $personeAprevenirs[$key];

        }
        else {
            while (!isset($experiences[$key])) {
                $key++;
            }

            $experience = $experiences[$key];

            $key = 0;

            while (!isset($personeAprevenirs[$key])) {
                $key++;
            }

            $personeAprevenir = $personeAprevenirs[$key];

        }



        return view('agents.show', compact('agent', 'experience', 'personeAprevenir'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Agent $agent)
    {

        if (View::exists('agents.edit')) {
            connectify('error', 'Modification', "Modification de l'agent N° " . $agent->id_agent);
            return view('agents.edit', compact('agent'));
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, Agent $agent)
    {

        // 1. La validation


        $rules = [
            'nom' => 'bail|required|string|max:255',
            "prenom" => 'bail|required|string|max:255',
            "date_naissance" => 'bail|required',
            "lieu_naissance" => 'bail|required|string',
            "genre" => 'bail|required|string',
            "nationalite" => 'bail|required|string',
            "piece_identite" => 'bail|required',
            "numero_de_piece" => 'bail|required|alpha',
            "date_delivrer" => 'bail|required',
            "date_expiration" => 'bail|required',
            "ville_residence" => 'bail|required',
            "quartier" => 'bail|required',
            "rue" => 'bail|required|string',
            "email" => 'bail|required|email',
            "situation_familiale" => 'bail|required',
            "enfants_encharge" => 'bail|required',
            "profession" => 'bail|required',
            "telephone" => 'bail|required',
            "poste_candidate" => 'bail|required',
            "horaire_travail_souhaite" => 'bail|required',
            "objectif" => 'bail|required|string|max:255',
            "qualite_personnelles" => 'bail|required|string|max:255',
            "savoir_faire" => 'bail|required|string|max:255',
            "disponible_a_loger" => 'bail|required',
            "nature_contrat" => 'bail|required',
            "oraire_travail_passe" => 'bail|required'
        ];


        // Si une nouvelle image est envoyée
        if ($request->has("avatar")) {
            // On ajoute la règle de validation pour "picture"
            $rules["avatar"] = 'bail|required|image|max:1024';
        }

        $this->validate($request, $rules);

        // 2. On upload l'image dans "/storage/app/public/candidats"
        if ($request->has("avatar")) {

            //On supprime l'ancienne image
            Storage::delete($agent->avatare);

            $chemin_image = $request->avatar->store("candidats");
            $request['avatar'] = $chemin_image;
            // 3. On met à jour les informations de l'agent
            $input = $request->all();
            //$candidat->update($input);
            return redirect('agents')->with('flash_message', 'Vos modifications sont enregistré!');

        }


        // 3. On met à jour les informations de l'agent
        $input = $request->all();
        //$candidat->update($input);
        connectify('success', 'Mise à jour', 'Modification éffectué avec succès !!!');
        return redirect('agents')->with('flash_message', 'Vos modifications sont enregistré!');



    }

    public function ListAgents(Request $request)
    {

        //dd($request);

        $request->validate([
            "service" => "required",
            #"position" => "required",
        ]);

        //$agents = DB::select("select * from agents where ville_residence like '%{$request->position}%' and poste_candidate = '{$request->service}'");
        $agents = Agent::all()->where('poste_candidate', '=', strtoupper($request->service));
        //print_r("DB::select(select * from agents where ville_residence like '%_{$request->position}_%')");

        $nbreAgts = count($agents);
        //dd($nbreAgts);

        //$agents = Agent::all()->where('poste_candidate', '=', strtoupper($request->service));
        $toutAgt = Agent::all();
        if ($nbreAgts == 0) {
            /*
            notify()->success("Aucun agent disponible.");
            notify()->success('Welcome to Laravel Notify ⚡️') or notify()->success('Welcome to Laravel Notify ⚡️', 'My custom title')
            connectify('success', 'Connection Found', 'Success Message Here')
            drakify('success') // for success alert
            or
            drakify('error') // for error alert
            smilify('success', 'You are successfully reconnected')
            emotify('success', 'You are awesome, your data was successfully created')
            notify()->preset('common-notification')
            notify()->preset('common-notification', ['title' => 'This is the overridden title'])
            'theme' => env('NOTIFY_THEME', 'dark'),
             */
            connectify('error', 'Aucun agent !', "Il n'y a pas d'agent " . strtoupper($request->service) . " dans la base !");
            return view('agents.listeAgents')->with('agents', $agents);//->with('service', $request->service)
        }
        else {
            notify()->success("Liste des agents ayant pour ville de résidence {$request->position} !");
        }
        return view('agents.listeAgents')->with('agents', $agents)->with('service', $request->service); //->with('agents', $agents); ->with('position', $request->position)

    }

    public function AffichageAgt(Agent $agent)
    {
        return view('agents.afficheAgent', compact('agent'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Agent $agent)
    {

        $agent->delete();

        // Redirection route "posts.index"
        return redirect(route('agents.index'));

    }

}