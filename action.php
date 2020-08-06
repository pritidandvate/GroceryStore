<?php
session_start();
$servername   = "localhost";
$database = "freshbyte";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  //echo "Connected successfully";
  
 /*if(isset($_POST['action'])){
	 	 $sql = "SELECT * FROM productadd WHERE sub_cat_name !=''";
		if(isset($_POST['sub_cat_name'])){
			$category = implode("','",$_POST['sub_cat_name']);
			$sql .="AND sub_cat_name IN('".$category."')";
		}
		$result = $conn->query($sql);
		$output='';
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$output.='<div class="col-md-3 mb-2">
										<div class="card" style="margin-bottom:30px;">
											<div class="product-bottom">
												<div class="card-body">
												
													<img src='.$row['image'].'>
													<h6 class="card-title">'.$row['prod_name'].'</h6>
													<h6 class="price-style">'.'₹'.$row['reg_price'].'-'.'₹'.$row['sale_price'].'</h6>
													<a href="#" class="btn btn-success btn-block">Add TO Cart</a>
												</div>
											</div>
										</div>
									</div>';
			}
		}
		else{
			$output = "<h3> No Product founds!</h3>";
		}
 
 }   echo $output; 	*/
?>