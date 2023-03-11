<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolesHasPermissionsSeeder extends Seeder{
    public function run(){
        $admin = Role::find(1);   
        $roles = Role::all();
        $permissions = Permission::all();

        //Roles de l'administrateur
        $admin->syncPermissions($permissions);


        //Permissions de l'agent de suivis
        $agent_de_suivis = Role::find(3);

        $rollbak_permissions_agt_suivis = [
            "agent_create",
            "agent_update",
            "agent_delete",

            "user_create",
            "user_update",
            "user_delete",

            "candidat_delete",

            /*"agent_ponctuel_create",
            "agent_ponctuel_update",
            "agent_ponctuel_delete",*/

            "personne_create",
            "personne_update",
            "personne_delete",
            "personne_show",
            "personne_index",

            "personne_a_prevenir_create",
            "personne_a_prevenir_update",
            "personne_a_prevenir_delete",

            "personnel_create",
            "personnel_update",
            "personnel_delete",

            "relance_contrat_create",
            "relance_contrat_update",
            "relance_contrat_delete"
        ];
        foreach ($permissions as $p) {
            if (!(in_array($p, $rollbak_permissions_agt_suivis))) {
                $agent_de_suivis->syncPermissions($p);
            }
        }

        //Permission de l'agent de marketing et communication :
        $agent_de_marketing = Role::find(4);
        $rollback_permissions_agt_marketing = [
            "agent_create",
            "agent_update",
            "agent_delete",

            "candidat_delete",

            "user_create",
            "user_update",
            "user_delete",

            "client_delete",

            "evaluation_create",
            "evaluation_update",
            "evaluation_delete",

            "experience_du_candidat_create",
            "experience_du_candidat_update",
            "experience_du_candidat_delete",

            "personne_create",
            "personne_update",
            "personne_delete",
            "personne_show",
            "personne_index",

            "personne_a_prevenir_create",
            "personne_a_prevenir_update",
            "personne_a_prevenir_delete",

            "personnel_create",
            "personnel_update",
            "personnel_delete"
        ];

        foreach ($permissions as $p) {
            if (!(in_array($p, $rollback_permissions_agt_marketing))) {
                $agent_de_marketing->syncPermissions($p);
            }
        }

        // Permission du client :
        $client = Role::find(2);
        $clt_permissions = [
            "agent_index",

            "candidat_show",
            "candidat_index",

            "evaluation_create",
            "evaluation_update",
            "evaluation_delete",
            "evaluation_show",
            "evaluation_index",

            "experience_du_candidat_show",
            "experience_du_candidat_index",

            "facture_show",
            "facture_index",

            "personne_a_prevenir_show",
            "personne_a_prevenir_index",

            "personnel_index",

            "relance_contrat_show",
            "relance_contrat_index"
        ];

        foreach ($permissions as $p) {
            if (in_array($p, $clt_permissions)) {
                $client->syncPermissions($p);
            }
        }

        //Permission du Comptable :
        $comptable = Role::find(5);
        $rollbavk_comptable_permissions = [
            "agent_create",
            "agent_update",
            "agent_delete",

            "agent_ponctuel_create",
            "agent_ponctuel_update",
            "agent_ponctuel_delete",

            "appel_offre_create",
            "appel_offre_update",
            "appel_offre_delete",

            "candidat_delete",

            "client_delete",

            "contrat_delete",

            "evaluation_create",
            "evaluation_update",
            "evaluation_delete",

            "experience_du_candidat_create",
            "experience_du_candidat_update",
            "experience_du_candidat_delete",

            "facture_delete",

            "personne_create",
            "personne_update",
            "personne_delete",
            "personne_show",
            "personne_index",

            "personne_a_prevenir_create",
            "personne_a_prevenir_update",
            "personne_a_prevenir_delete",

            "personnel_create",
            "personnel_update",
            "personnel_delete",

            "ponctuel_create",
            "ponctuel_update",
            "ponctuel_delete",

            "prospection_create",
            "prospection_update",
            "prospection_delete",

            "relance_contrat_create",
            "relance_contrat_update",
            "relance_contrat_delete",

            "societe_delete",
            "societe_show",

            "user_create",
            "user_update",
            "user_delete",
            "user_show",
            "user_index",

            "vente_create",
            "vente_update",
            "vente_delete"
        ];

        foreach ($permissions as $p) {
            if (!(in_array($p, $rollbavk_comptable_permissions))) {
                $comptable->syncPermissions($p);
            }
        }

        //Permission du sécretaire :
        $secretaire = Role::find(6);
        $secretaire_permissions = [
            "agent_create",
            "agent_update",
            "agent_show",
            "agent_index",

            "candidat_create",
            "candidat_update",
            "candidat_show",
            "candidat_index",

            "client_create",
            "client_update",
            "client_show",
            "client_index",

            "personne_a_prevenir_show",
            "personne_a_prevenir_index",

            "personnel_show",
            "personnel_index",

            "ponctuel_show",
            "ponctuel_index",

            "prospection_show",
            "prospection_index",

            "societe_show",
            "societe_index",

            "vente_show",
            "vente_index"
        ];

        foreach ($permissions as $p) {
            if (in_array($p, $secretaire_permissions)) {
                $secretaire->syncPermissions($p);
            }
        }

        //Permission de l'agent :
        $agent = Role::find(7);
        $agent_permission = [
            "agent_show",
            "agent_index",

            "agent_ponctuel_show",
            "agent_ponctuel_index",

            "client_show",
            "client_index",

            "contrat_show",
            "contrat_index",

            "evaluation_show",
            "evaluation_index",

            "experience_du_candidat_create",
            "experience_du_candidat_update",
            "experience_du_candidat_delete",
            "experience_du_candidat_show",
            "experience_du_candidat_index",

            "facture_show",
            "facture_index",

            "personne_a_prevenir_show",
            "personne_a_prevenir_index",

            "ponctuel_show",
            "ponctuel_index",

            "prospection_show",
            "prospection_index",

            "relance_contrat_show",
            "relance_contrat_index",
        ];

        foreach ($permissions as $p) {
            if (in_array($p, $agent_permission)) {
                $agent->syncPermissions($p);
            }
        }
    }
}