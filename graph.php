<?php
require_once('dbconnect.php');
$connect = new PDO("mysql:host=$server;dbname=$db", $user, $password);

if(isset($_POST["action"]))
{

	if($_POST["action"] == 'fetch')
	{
		
		// $query = "SELECT COUNT(Problem.id) AS num_problem FROM Problem";
		$query = "
		SELECT name,COUNT(id) as total 
		FROM problem 
		GROUP BY contest_id
		";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'language'	=>	$row["name"],
				'total'		=>	$row["total"],
				'color'		=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}

	
	
}

?>