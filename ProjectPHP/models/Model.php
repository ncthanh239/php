<?php 
include_once('models/Connection.php');
class Model{
	var $product_conn;
	var $table_name = '';
	var $primary_key = '';
	public function All(){
		$connection = new Connection();
		$this->product_conn=$connection->conn;
		$data = array();

			// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM " .$this->table_name;

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->product_conn->query($query);

		while($row = $result->fetch_assoc()) { 
			$data[]=$row;

		}
		return $data;
	}

	public function find($input){
		$connection = new Connection();
		$this->product_conn=$connection->conn;
		$data = array();

			// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM ".$this->table_name." where ".$this->primary_key." = '".$input."'";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->product_conn->query($query);

		$product = $result->fetch_assoc();
		return $product;
	}

	

	public function create($data){
		$connection = new Connection();
		$this->product_conn=$connection->conn;


		$fields = '';
		$values = '';


		foreach ($data as $key => $value) {
			$fields = $fields . $key . ",";

			$values = $values . "'". $value . "' ,";
		}

		$fields = trim($fields,',');
		$values = trim($values,',');
			// Cau lenh truy van co so du lieu
		$query = "INSERT INTO ".$this->table_name." (". $fields .") 
		VALUES (".$values.")";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->product_conn->query($query);


		return $result;
	}

	public function edit($input){
		$connection = new Connection();
		$this->product_conn=$connection->conn;
		$data = array();

			// Cau lenh truy van co so du lieu
		$query = "SELECT * FROM ".$this->table_name." where ".$this->primary_key." = '".$input."'";

			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->product_conn->query($query);

		$product = $result->fetch_assoc();
		return $product;
	}


	public function update($data){
			$connection = new Connection();
			$this->product_conn=$connection->conn;

			$input = '';


			foreach ($data as $key => $value) {
			
				$input = $input . $key ."='" .$value. "',";
			}
			$input = trim($input,',');

			$query="UPDATE " .$this->table_name." SET ".$input." where ".$this->primary_key."= '".$data[$this->primary_key]."'";
			

			$result = $this->product_conn->query($query);

			
			return $result;
		}

	public function delete($input){
		$connection = new Connection();
		$this->product_conn=$connection->conn;

			// Cau lenh truy van co so du lieu

		$query = "DELETE FROM ".$this->table_name." where ".$this->primary_key." = '".$input."'";


			// Thuc thi cau lenh truy van co so du lieu
		$result = $this->product_conn->query($query);


		return $result;
	}
	
}
?>