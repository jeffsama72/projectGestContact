<?php 

class ClientRepository
{

	//Récupère la liste de tous les clients en base de données
	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
		$resultats = $pdo->query('SELECT fich.Nom, fich.prenom, fich.date_naissance, fich.code_postal, fich.ville, fich.tel, fich.email, fich.etab_origine, fich.diplome_obtenu, fich.id, fich.date_saisie_form, fich.disponibilite, fich.source_info_imie, sit.nom_site, sta.nom, form.nom_formation FROM fiche_visiteur fich INNER JOIN site sit ON fich.id_site = sit.id INNER JOIN statut sta ON fich.id_statut = sta.id INNER JOIN formation form ON fich.id_formation = form.id' );

		$resultats->setFetchMode(PDO::FETCH_OBJ);

		$listeClients = array();

		while($obj = $resultats->fetch()){	

			$client = new Personne();
			$client->setId($obj->id);
			$client->setNom($obj->Nom);
			$client->setPrenom($obj->prenom);
			$client->setDateNaissance($obj->date_naissance);
			$client->setCp($obj->code_postal);
			$client->setVille($obj->ville);
			$client->setEmail($obj->email);
			$client->setNomFormation($obj->nom_formation);

			$listeClients[] = $client;

		}

		return $listeClients;
	}
}

?>

