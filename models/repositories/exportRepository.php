<?php 

class ExportBase
{
		
	public function export($pdo){

		$resultat = $pdo->query('SELECT nom, prenom, date_naiss, cp, ville, tel1, email, diplome, etablissement, disponibilite, date_saisie, formation_en_cours, id_souhait, id_souhait_1, id_souhait_2, id_statut, id_site, connait, id_civiliter FROM formulaire');

    $chemin = '././export/fichier.csv';

    $fp = fopen("$chemin", "w+");

    $tableau = ["Y_identifant_site", "Y_identifant_site2","Y_identifant_site3","identifiant_statut","Y_identifiant_annee","Y_Civilite_de_candidat","Y_Nom_de_candidat","ine_candidat","Y_Prenom_de_candidat","Nom_de_jeune_fille","Y_Nationalite_du_candidat","Y_1ère_ligne_de_l’adresse_«_courrier_»","2ème_ligne_de_l’adresse_«_courrier_»","3ème_ligne_de_l’adresse_«_courrier_»","4ème_ligne_de_l’adresse_«_courrier_»","Y_Code_postal_de_l’adresse_«_courrier_»","Y_Ville_de_l’adresse_«_courrier_»","Pays_de_l’adresse_«_courrier_»","Y_Telephone_1_de_l’adresse_«_courrier_»","Telephone_2_de_l’adresse_«_courrier_»","Y_Email_de_l’adresse_«_courrier_»","cilivite_resp_legal","nom_resp_legal","prenom_resp_legal","1ère_ligne_de_l’adresse_«_courrier_»","2ème_ligne_de_l’adresse_«_courrier_»","3ème_ligne_de_l’adresse_«_courrier_»","4ème_ligne_de_l’adresse_«_courrier_»","Code_postal_de_l’adresse_«_courrier_»","Ville_de_l’adresse_«_courrier_»","Pays_de_l’adresse_«_courrier_»","Telephone_1_de_l’adresse_«_courrier_»","Telephone_2_de_l’adresse_«_courrier_»","Email_de_l’adresse_«_courrier_»","Y_date_naissance_candidat","Y_lieu_naiss_candidat","Y_departement_naiss_candidat","Y_premier_souhait","deuxieme_souhait","troisieme_souhait","Y_origine_scolaire","Y_dernier_diplome","etablissement_origine","date_saisie_formulaire","url_cv_candidat","url_lettre_motiv_candidat","observation","rp1","rp2","rp3","rp1_obs","rp2_obs","rp3_obs"];

    foreach($tableau as $entete){

      fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
       fputs($fp, "$entete;");

    }

    fputs($fp, "\n");

        while($donnees = $resultat->fetch()){

       $a = $donnees['nom'];
       $b = $donnees['prenom'];
       $c= new DateTime($donnees['date_naissance']);
       $c = $c->format("d/m/Y");
       $d = $donnees['code_postal'];
       $e = $donnees['ville'];
       $f = $donnees['tel'];
       $g = $donnees['email'];
       $h = $donnees['etab_origine'];
       $i = $donnees['diplome_obtenu'];
       $j = $donnees['id'];
       $k = new DateTime($donnees['date_saisie_form']);
       $k = $k->format("d/m/Y");
       $l = $donnees['disponibilite'];
       $m = $donnees['source_info_imie'];
       $n = $donnees['id_site'];     
       $o = $donnees['id_statut'];
       $p = $donnees['id_formation'];
       $q = $donnees['id_formation_1'];
       $r = $donnees['id_formation_2'];


      fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
       fputs($fp,"$n;;$o;;$a;;$b;;;;;;;;;;;;$d;$e;;$f;;$g;;;;;;;;;;;;;;;;;;;;;;;;;;$c;;;;$p;$q;$r;;$$i;$h;$k;;;;;;;;;;;;;;;;;;;;;\n");

    }

    fclose($fp);
     $resultat->closeCursor();
	}
}
