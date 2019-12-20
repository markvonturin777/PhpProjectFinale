<?php 

namespace SimpleMVC\Model;

use PDO;
use SimpleMVC\Model\Articolo;//prendi della classe Articolo i parametri del db

//CRUD

class ArticoloManager
{
	protected $con;

	public function __construct(PDO $con)
	{
		$this->con = $con;
	}

	
	public function selectAll()
	{
		
		$sql ="SELECT * FROM articolo ORDER BY data Desc";
		$sth = $this->con->prepare($sql);
		$sth->execute();	

		$resultado = array();
				
		while ($row = $sth->fetchObject(Articolo::class)) {
			$resultado[] = $row;
		}
		if (!$resultado) {
			echo "Non è stato trovato nessuno registro nel database!";
		}
		return $resultado;
	}



	//metodo seleziona 1 id di articolo per volta
	public function selectById($idPost)
	{

		$sql = "SELECT * FROM articolo WHERE id = :id";
		$sth = $this->con->prepare($sql);
		$sth->bindvalue(':id', $idPost, PDO::PARAM_INT);
		$sth->execute();
		$resultado = $sth->fetchObject(Articolo::class);

		if (!$resultado) {
			echo "Non è stato trovato nessuno registro nel database!";
		}
		return $resultado;
	}




	public function insert($dataPost)
	{
		if (empty($dataPost['data']) || empty($dataPost['titolo']) || empty($dataPost['testo'])) 
		{
			return false;
		}

		//altrimenti se esiste inserisce
		$sql = "INSERT INTO articolo (data,titolo,testo) VALUES (:data,:tit, :test)";
		$sth = $this->con->prepare($sql);
		$sth->bindvalue(':data',$dataPost['data']);
		$sth->bindvalue(':tit',$dataPost['titolo']);
		$sth->bindvalue(':test',$dataPost['testo']);
		
		$res= $sth->execute();

		var_dump($res);
		
		if ($res == 0) {
			echo "Errore nel inserimento dell'articolo"; 
			return false;
		}
		return true;
	}


	public function update($params)
	{
	
		$sql = "UPDATE articolo SET data =:data, titolo=:tit, testo=:test WHERE id = :id";
		$sth = $this->con->prepare($sql);
		$sth->bindvalue(':data',$params['data']);
		$sth->bindvalue(':tit',$params['titolo']);
		$sth->bindvalue(':test',$params['testo']);
		$sth->bindvalue(':id',$params['id']);

		$res=  $sth->execute();

		if ($res == 0) {
			echo "Errore nella modifica dell'articolo";

			return false;
		}
		return true;
	}



	public function delete($id){
		
		$sql = "DELETE FROM articolo WHERE id = :id";
		$sth = $this->con->prepare($sql);
		$sth->bindvalue(':id', $id, PDO::PARAM_INT);
		$res= $sth->execute();
		
		if ($res == 0) {
			echo "Errore nella cancellazione dell'articolo";

			return false;
		}
		return true;
	}


	public function getLogin($params)
	{

		$query = "SELECT * FROM login WHERE email = :email AND password = :password";

		$stmt = $this->con->prepare($query);
		$stmt->bindvalue(':email',$params['email']);
		$stmt->bindvalue(':password',$params['password']);
		$stmt->execute();

		$res = $stmt->fetchObject(Articolo::class);

		//solo dopo ativato pulsante 'entra'
		if (isset($_POST['entra'])) {
			
			if (!$res) 
				echo "<script>alert('Email o password invalidi! Riprova');</script>";
			else
				 echo "<script>window.location='/admin';alert('Accesso Area Riservata');</script>";
				
		}

    		
	}



}





