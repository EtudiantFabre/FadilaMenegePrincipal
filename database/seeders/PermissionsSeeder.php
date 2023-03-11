<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionsSeeder extends Seeder{
    public function run(){
        $permissions = array(
            "agent_create",
            "agent_update",
            "agent_delete",
            "agent_show",
            "agent_index",

            "agent_ponctuel_create",
            "agent_ponctuel_update",
            "agent_ponctuel_delete",
            "agent_ponctuel_show",
            "agent_ponctuel_index",

            "appel_offre_create",
            "appel_offre_update",
            "appel_offre_delete",
            "appel_offre_show",
            "appel_offre_index",

            "candidat_create",
            "candidat_update",
            "candidat_delete",
            "candidat_show",
            "candidat_index",

            "client_create",
            "client_update",
            "client_delete",
            "client_show",
            "client_index",

            "contrat_create",
            "contrat_update",
            "contrat_delete",
            "contrat_show",
            "contrat_index",

            "evaluation_create",
            "evaluation_update",
            "evaluation_delete",
            "evaluation_show",
            "evaluation_index",

            "experience_du_candidat_create",
            "experience_du_candidat_update",
            "experience_du_candidat_delete",
            "experience_du_candidat_show",
            "experience_du_candidat_index",

            "facture_create",
            "facture_update",
            "facture_delete",
            "facture_show",
            "facture_index",

            "personne_create",
            "personne_update",
            "personne_delete",
            "personne_show",
            "personne_index",

            "personne_a_prevenir_create",
            "personne_a_prevenir_update",
            "personne_a_prevenir_delete",
            "personne_a_prevenir_show",
            "personne_a_prevenir_index",

            "personnel_create",
            "personnel_update",
            "personnel_delete",
            "personnel_show",
            "personnel_index",

            "ponctuel_create",
            "ponctuel_update",
            "ponctuel_delete",
            "ponctuel_show",
            "ponctuel_index",

            "prospection_create",
            "prospection_update",
            "prospection_delete",
            "prospection_show",
            "prospection_index",

            "relance_contrat_create",
            "relance_contrat_update",
            "relance_contrat_delete",
            "relance_contrat_show",
            "relance_contrat_index",

            "societe_create",
            "societe_update",
            "societe_delete",
            "societe_show",
            "societe_index",

            "user_create",
            "user_update",
            "user_delete",
            "user_show",
            "user_index",

            "vente_create",
            "vente_update",
            "vente_delete",
            "vente_show",
            "vente_index"
        );      

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}