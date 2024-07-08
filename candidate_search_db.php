<?php
require_once('connection.php');
?>
<table class="col-md-12 table-responsive table table-bordered table-striped mt-4 hidden">
	<thead>
		<tr>
			<th>Candidate ID</th>
			<th>Job Id</th>
			<th>Applied For Post</th>
			<th>Candidate Name</th>
			<th>Date of Birth</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Education</th>
			<th>Address</th>
			<th>Experience</th>
		
		</tr>
	</thead>
	<tbody>

	
<?php



// Create connection
$conn = mysqli_connect("localhost", "root", "root", "carrer_treemultisoft");
$sql = "SELECT * FROM tbl_candidate WHERE Candidate_name LIKE '%" . $_POST['name'] . "%' 
OR phonenumber LIKE '%" . $_POST['name'] . "%' 
OR email LIKE '%" . $_POST['name'] . "%'
OR address LIKE '%" . $_POST['name'] . "%'
OR applied_post LIKE '%" . $_POST['name'] . "%'";


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo "<tr>
		          <td>" . $row['Candidate_id'] . "</td>
		          <td>" . $row['job_id'] . "</td>
		          <td>" . $row['applied_post'] . "</td>
		          <td>" . $row['Candidate_name'] . "</td>
                  <td>" . $row['D_o_b'] . "</td>
		          <td>" . $row['email'] . "</td>
		          <td>" . $row['phonenumber'] . "</td>
		          <td>" . $row['education'] . "</td>
		          <td>" . $row['address'] . "</td>
		          <td>" . $row['Experience'] . "</td>
		        </tr>";
				
	}
} else {
	echo "<tr><td>0 result's found</td></tr>";
}


?>
</tbody>
</table>