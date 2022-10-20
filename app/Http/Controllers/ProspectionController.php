<?php

namespace App\Http\Controllers;

use App\Models\Prospection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Client;
use App\Models\Agent;
use App\Models\Facture;
use PHPUnit\Framework\Constraint\IsEmpty;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailClientProspection;

class ProspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $prospections = Prospection::orderBy('id_prospection', 'DESC')->get();
        notify()->success("Liste des propositions !!!");
        return view('prospections.index', compact('prospections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $clients = Client::all();
        $agents = Agent::all();
        //$factures = Facture::all();
        connectify('success', 'Création', "Création d'une proposition !!!");
        return view('prospections.create')->with('clients', $clients)->with('agents', $agents);//->with('factures', $factures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory
     */
    public function store(Request $request)
    {

        //dd($request);
        $request->validate([
            'raison_social' => "required",
            'date_prospection', 'canal' => "required",
            'competence_rechercher' => "required",
            //'type_maison' =>"required",
            //'nbre_de_chambre' => "required",
            //'nbre_wc_douche' => "required",
            //'taille_famille' => "required",
            //'info_complementaire' => "required",
            'budget' => "required",
            //'actions_menees' => "required",
            //'aboutissement' => "required",
            'id_agent' => "required",
            'id_client' => "required",
        ]);


        //$request['date_prospection'] = date("d/m/Y", time());
        //dd($request);
        $prospection = Prospection::all()->where('date', "=", $request->date)->where('id_agent', "=", $request->id_agent)->where('id_client', "=", $request->id_client);
        if (count($prospection) !=0) {
            connectify('success', 'Enregistrement', 'Prospection déjà existant !!!');
        } else {
            Prospection::create(
                $request->all()
            );
            connectify('success', 'Enregistrement', 'Prospection enregistré avec succès !!!');
            
        }
        /*if (isset($request['client-prospection'])) {
            return view('welcome');
        } else {
            return redirect()->route('prospections.index');
        }*/
        return redirect()->route('prospections.index');
    }

    public function prosClient(Request $request){
        //dd($request);


        $client = Client::create($request->all());
        $agent = Agent::find($request->id_agent);
        //print_r($client."                        ".$agent);
        
        return view('prospections.prosClient')->with('client', $client)->with('agent', $agent);
    }

    public function enregistrerProsCLient(Request $request){
        $request->validate([
            
            'date_prospection' => "required",
            'canal' => "required",
            'competence_rechercher' => "required",
            'budget' => "required",
            //'actions_menees' => "required",
            //'aboutissement' => "required",
            'id_agent' => "required",
            'id_client' => "required",
        ]);

        $prospection = Prospection::all()->where('date', "=", $request->date)->where('id_agent', "=", $request->id_agent)->where('id_client', "=", $request->id_client);
        if (count($prospection) !=0) {
            //dd($prospection);
            foreach ($prospection as $pros){
                Mail::to($pros->client->email)->queue(new MailClientProspection($pros->client));
            }

            //return back()->withText("Message envoyer avec succès !");
        } else {
            $prospection = Prospection::create(
                $request->all()
            );
            //dd($prospection);
            //connectify('success', 'Remerciement', 'Merci pour la confiance que vous portez à notre égard, nous ne vous decevrons pas !!!');
            $clt = Client::all()->where("id_client", "=", $prospection->id_client);

            foreach ($clt as $cl) {
                Mail::to($cl->email)->send(new MailClientProspection($cl));
            }
            
        }
        return redirect()->route('accueil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Contracts\View\Factory
     */
    public function show(Prospection $prospection)
    {

        return view('prospections.show')->with('prospection', $prospection);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Contracts\View\Factory
     */
    public function edit(Prospection $prospection)
    {
        if (View::exists('prospections.edit')){
            $clients = Client::all();
            $agents = Agent::all();
            $factures = Facture::all();
            connectify('error', 'Modification', "Modification de la prospection N° ".$prospection->id_prospection);
            return view('prospections.edit', compact('prospection'))->with('clients', $clients)->with('agents', $agents)->with('factures', $factures);;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, Prospection $prospection)
    {
        $request->validate([
            'raison_social' => "required",
            'date_prospection' => "required",
            'canal' => "required",
            'competence_rechercher' => "required",
            //'type_maison' =>"required",
            //'nbre_de_chambre' => "required",
            //'nbre_wc_douche' => "required",
            //'taille_famille' => "required",
            //'info_complementaire' => "required",
            'budget' => "required",
            //'actions_menees' => "required",
            //'aboutissement' => "required",
            'id_agent' => "required",
            'id_client' => "required",
        ]);

        $prospection->raison_social = $request->raison_social;
        $prospection->date_prospection = $request->date_prospection;
        $prospection->canal = $request->canal;
        $prospection->competence_rechercher = $request->competence_rechercher;
        $prospection->type_maison = $request->type_maison;
        $prospection->nbre_de_chambre = $request->nbre_de_chambre;
        $prospection->nbre_wc_douche = $request->nbre_wc_douche;
        $prospection->taille_famille = $request->taille_famille;
        $prospection->info_complementaire = $request->info_complementaire;
        $prospection->budget = $request->budget;
        $prospection->actions_menees = $request->actions_menees;
        $prospection->aboutissement = $request->aboutissement;
        $prospection->id_agent = $request->id_agent;
        $prospection->id_client = $request->id_client;
        //$prospection->id_facture = $request->id_facture;

        $prospection->save();

        connectify('success', 'Mise à jour !', 'Modification éffectué avec succès.');

        return redirect()->route('prospections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prospection  $prospection
     * @return \Illuminate\Contracts\View\Factory
     */
    public function destroy(Prospection $prospection)
    {

        $prospection->delete();
        connectify('error', 'Suppression !', "La prospection N° ".$prospection->id_prospection." à été supprimé avec succès !");
        return redirect()->route('prospections.index');
    }
}