<?php

class Client extends Personne
{

	public function save($pdo) {
		
		//Si l'id est renseigné à l'appel de la méthode alors c'est une mise à jour, sinon $id équivaut à false et alors l'objet client actuel doit faire l'objet d'un nouvel enregistrement.
		if($this->id) {
			//appeler la bonne méthode
			$message = $this->update($pdo);
			return $message;
		} else {
			$message = $this->insert($pdo);
			return $message;
		}
	}

	private function insert($pdo) {

		try {
			//Exécuter la requête insert d'une personne en base de donnée
			//Préparation de la requête
			$stmt = $pdo->prepare('INSERT INTO fiche_visiteur (Nom, prenom, date_naissance, code_postal, ville, tel, email, etab_origine, date_saisie_form, diplome_obtenu, disponibilite, source_info_imie, id_site, id_statut, id_formation) VALUES ( :nom, :prenom, :dateNaissance, :cp, :ville, :tel, :email, :etabOrigine, :dateForm, :diplomeObtenu, :disponibilite, :sourceInfo, :idSite, :idStatut, :idFormation)');

			//Binder les paramètres à la requête de manière sécurisée
			$stmt->bindParam(':nom', $this->Nom, PDO::PARAM_STR);
			$stmt->bindParam(':prenom', $this->prenom, PDO::PARAM_STR);
			$stmt->bindParam(':dateNaissance', $this->dateNaissance, PDO::PARAM_STR);
			$stmt->bindParam(':cp', $this->cp, PDO::PARAM_STR);
			$stmt->bindParam(':ville', $this->ville, PDO::PARAM_STR);
			$stmt->bindParam(':tel', $this->tel, PDO::PARAM_STR);
			$stmt->bindParam(':dateForm', $this->dateForm, PDO::PARAM_STR);
			$stmt->bindParam(':disponibilite', $this->dispo, PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
			$stmt->bindParam(':etabOrigine', $this->etabOrigine, PDO::PARAM_STR);
			$stmt->bindParam(':diplomeObtenu', $this->diplomeObtenu, PDO::PARAM_INT);
			$stmt->bindParam(':sourceInfo', $this->sourceInfo, PDO::PARAM_STR);
			$stmt->bindParam(':idSite', $this->nomSite, PDO::PARAM_STR);
			$stmt->bindParam(':idStatut', $this->nomStatut, PDO::PARAM_STR);
			$stmt->bindParam(':idFormation', $this->nomFormation, PDO::PARAM_STR);

			//On exécute ensuite la requête préparée
			$stmt->execute();

			echo '<script>
					alert("Votre candidature a bien été enregistrée.");
				</script>';
		}
		catch(PDOException $e) {
			echo '<script>
					alert("Votre candidature n\'a pas bien été enregistrée.");
				</script>';
		}

	}


	public function delete($pdo) {

		//Supprimer un enregistrement en base de donnée
		//Faire un try catch qui renvoie un message pour indiquer si la suppression s'est bien déroulée ou non
		try{
			$stmt = $pdo->prepare('DELETE FROM fiche_visiteur WHERE id = :id');
			$stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

			$stmt->execute();

			return "Votre client a bien été supprimé.";
		}
		catch(PDOException $e) {
			return "Votre suppression a échoué, en voici la raison : " . $e->getMessage();
		}
	}
}