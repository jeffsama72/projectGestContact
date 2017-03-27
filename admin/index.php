<?php
session_start();
include_once('../library/PDOFactory.php');
include_once('../models/entities/User.php');
include_once('../models/repositories/userRepository.php');
include_once('../models/repositories/ClientRepository.php');
include_once('../models/entities/personne.php');
include_once('../models/entities/client.php');
include_once('../models/repositories/exportRepository.php');


$pdo = PDOFactory::getMysqlConnection();

	if (isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	} else {
		$action = null;
	}


switch ($action) {

	case "verifLogin":
		$userRepo = new UserRepository();
		$user = $userRepo->getUser($pdo, $_POST['login'], $_POST['mdp']);
		
		if($user) {
			$_SESSION['login'] = $user->getLogin();
			include("views/dashboard.php");
		} else {
			include("views/login.php");
		}
		break;

	case "disconnect":
		$_SESSION = array();
		session_destroy();
		include("views/login.php");
		break;

	case "deleteClient":
		//Instancier l'objet modèle client à partir duquel on va supprimer son enregistrement dans la bdd
		$client = new Client();
		$client->setId($_GET['id']);

		//On supprime et on prépare la vue à afficher avec les données dont elle a besoin
		$message = $client->delete($pdo);
		$clientRepo = new ClientRepository();
		$listeClients = $clientRepo->getAll($pdo);
		include("views/dashboard.php");
		break;

		case "export":
			$exporter = new ExportBase();
			$baseExporter = $exporter->export($pdo);
			include("views/dashboard.php");
		break;

	default:
		if(empty($_SESSION['login'])) {
			include("views/login.php");
		} else {
			include("views/dashboard.php");
			break;
		}
}
?>