<?php

class basesql{

	private $table;
	private $pdo;
	private $columns = [];

	public function __construct(){
		$this->table = ucfirst(get_called_class());
		$dsn = 'mysql:dbname='.DBNAME.';host='.DBHOST;

		try{
			$this->pdo = new PDO($dsn,DBUSER,DBPWD);
		}catch(Exception $e){
			die("Erreur SQL : ".$e->getMessage());
		}

		$all_vars = get_object_vars($this); // on récupère toute les variables des classes (ex user et base sql)
		$class_vars = get_class_vars(get_class()); // on recupere les variable de la classe sql
		$this->columns = array_keys(array_diff_key($all_vars, $class_vars)); // on soustrait les variables de la class sql pour avoir seulement celle de la classe en question (ex user)
	}

	public function save(){

		if(is_numeric($this->id)){
			$sql = "UPDATE ".$this->table." SET ";
			$len = count($this->columns);
			$i = 0;

			foreach ($this->columns as $column) {
				if ($i == $len - 1) {
					$sql = $sql.$column."=:".$column;
				} else {
					$sql = $sql.$column."=:".$column." ,";
				}
				$i ++;
			}

			$sql = $sql." WHERE id=".$this->id;
			$stmt = $this->pdo->prepare($sql);

			foreach ($this->columns as $column) {
					$stmt->bindValue(":".$column, $this->$column);
			}

            $stmt->execute();
		} else {
            $sql = "INSERT INTO ".$this->table." (".implode(",", $this->columns).")
                    VALUES (:".implode(",:", $this->columns).")"; // implode rassemble les elements d'un tableau en une chaine
            $query = $this->pdo->prepare($sql);

            foreach ($this->columns as $column) {
                    $data[$column] = $this->$column;
            }
            $query->execute($data);
		}
	}

    public function delete()
    {
        $instance = new static;
        if (isset($instance->id)) {
            $sql = "DELETE from " . $instance->table . " WHERE id = " . $instance->id;
            $instance->pdo->exec($sql);
        }
    }
}
