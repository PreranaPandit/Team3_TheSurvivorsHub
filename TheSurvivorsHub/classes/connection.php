<?php
//creating class Connection
class Connection{
	//variables
	private $host;
	private $user;
	private  $password;
	private $database;
	private $connect;

	function __construct()
	{
		# code...
		$this->host= "localhost";
		$this->user = "root";
		$this->password="";
		$this->database="prerana_lcdc";
		$this->getConnection();
	}

	//function getConnection to connect database
	function getConnection(){
		$this->connect = new mysqli($this->host, $this->user, $this->password, $this->database);
			if($this->connect->connect_error){
				die("connection failed : ".$this->connect->connect_error);
			}
			return $this->connect;	
	}
	
		function queries($sql){
			// else this can be done using calling in this function as well
			// $this->getConnection();
			if($this->connect->query($sql) == false ){
				die("Error : " .$this->connect->error);
			}
			return $this->connect;
		}
		function getData($sql){
			$data = [];
			$result = $this->connect->query($sql);
			if($result->num_rows > 0){
				while ($rows = $result->fetch_assoc()) {
					# code...
					$data[] = $rows;
				}
			}else{
				echo "no data found";
			}
			return $data;
		}
		
public function db_query($sql){
$result = $this->connect->query($sql);

return $result;
}
}
$connect = new Connection();
?>