<?php 						

include("../db/dbConnection.php");

$sql ="SELECT * FROM news order by news_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo 
			"<section class='posts-con'>
				<div class='info'>
				    <h3 style='font-weight: bold;' font-face='Techfurk FMDerana'>  ".$row["news_topic"]." </h3>
					<p class='info-line'>
						<span class='tome'> ".$row["news_date"]."</span>
					</p>
					<p> ".$row["news_content"]."</p>
				</div>									
			</section>
			<br>
			";						
	}
} else {
	echo "0 results";
}
$conn->close();
?>