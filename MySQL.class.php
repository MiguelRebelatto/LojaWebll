<?php
class MySQL{
	protected $pdo;
	private $table;
	private $where;
   private $data;

	function __construct(STRING $endereco,STRING $login,STRING $senha,STRING $database) {
		$this->pdo = new PDO("mysql:host=$endereco;dbname=$database", "$login", "$senha");
   	}

   	function findFirst(STRING $table,STRING $where){
   		$isSuccess = false;
   		$comando = $this->pdo->prepare("SELECT * FROM $table WHERE $where LIMIT 1");
   		if ($comando->execute()){
   			$this->data = $comando->fetch(PDO::FETCH_ASSOC);
   			$this->table = $table;
   			$this->where = $where;
   			$isSuccess = true;
   		}
   		return $isSuccess;
   	}

   	function insert(STRING $table,ARRAY $valores){
   		$isSuccess = false;

		    @$sqlCampos .= " (".implode(", ", array_keys($valores)).")";
		
		    @$sqlValores .= " (".implode(", ", $valores).") ";
   		
   		$sql = "INSERT INTO $table $sqlCampos VALUES $sqlValores";
   		$comando = $this->pdo->prepare($sql);
   		if ($comando->execute()){
   			$isSuccess = true;
   		}
   		return $isSuccess;
  	}

   	function update(STRING $table,ARRAY $valores,STRING $where){
         foreach ($valores as $key => $value) {
            $ArrayWhere[] = $key . " = " . $value;
         }
         $sqlUpdate = "UPDATE $table SET " . implode(", ", $ArrayWhere) . " Where $where ;";
   		$isSuccess = false;
		   $comando = $this->pdo->prepare($sqlUpdate);
   		if ($comando->execute()){
   			$isSuccess = true;
   		}
   		return $isSuccess;
   	}

   	function delete(STRING$table,STRING $where){
   		$isSuccess = false;
         $sql = "DELETE FROM $table WHERE $where";
         $comando = $this->pdo->prepare($sql);
         if ($comando->execute()){
            $isSuccess = true;
         }
   		return $isSuccess;
   	}

      public function __get($parm) {
        if (array_key_exists($parm, $this->data)) {
            return $this->data[$parm];
        }
        return null;
    }

    public function __set($name, $value) {
        $array[$name] = $value;
        $this->update($this->table , $array, $this->where);
    }
}
?>