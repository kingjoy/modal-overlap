<?php
if(isset($_POST['jan_code'])){

	$name = json_decode($_POST['jan_code']);
	var_dump($name);
	print_r($name);

	$arrayName = array();

	$objectToArray = (array)$name;
	var_dump($objectToArray);


	foreach($name as $key => $value)
	{
    	$stdArray[$key] = (array) $value;
	}   
/*** show the results ***/  
print_r( $stdArray );


echo $stdArray[0][0];

echo $stdArray[1][0];



	//$jancode = $name['str1'];
	//echo $jancode;
	//$name1 = explode('\\', $name);

	// $conn = mysql_connect("localhost","root","") or die ("Can't connect");
	// mysql_select_db("ne_user1",$conn);
	
 //   	$res1 = mysql_query("select * from t_mst_zaiko where syohin_code IN $name");
   	//var_dump($res1);
   	//$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
   	//var_dump(json_decode($json));

   	//echo json_encode($res1);
   	echo json_encode($name);
}
else
{
	echo 'Try again!';
}

?>
