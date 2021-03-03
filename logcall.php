<?php
	require_once "db.php";
	$conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
	$sql = "SELECT * FROM incident_type";
	$result = $conn->query($sql);
	$incidenttypes = [];
	while($row = $result->fetch_assoc()){
		$id = $row["incident_type_id"];
		$type = $row["incident_type_desc"];
		$incidenttype = ["id"=>$id, "type"=>$type];
		array_push($incidenttypes,$incidenttype);
	}
	$conn->close();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logcall</title>
</head>

<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
<body>
<div class="container" style="width:900px">
  <?php
	include "header.php";
	?>
  <section class="mt-3">
    <form action="dispatch.php" method="post">
      <div class="form-group row">
        <label for="callerName" class="col-sm-4 col-form-label">Caller's name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="callerName" name="callerName">
        </div>
      </div>
		<div class="form-group row">
        <label for="ContactNo" class="col-sm-4 col-form-label">Contact No</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="contactNo" name="contactNo">
        </div>
      </div>
		<div class="form-group row">
        <label for="LocationOfIncident" class="col-sm-4 col-form-label">Location of Incident</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="LocationOfIncident" name="LocationOfIncident">
        </div>
      </div>
		<div class="form-group row">
        <label for="TypeOfIncident" class="col-sm-4 col-form-label">Type Of Incident</label>
        <div class="col-sm-8">
        	<select id="TypeOfIncident" class="form-control" name="TypeOfIncident">
				<option value="">Select</option>
				<?php
					foreach($incidenttypes as $incidenttype){
						echo "<option value=\"" . $incidenttype["id"] . "\">" . $incidenttype["type"] . "</option>";
					}
				?>
				
			</select>
        </div>
      </div>
		<div class="form-group row">
        <label for="DescriptionOfIncident" class="col-sm-4 col-form-label">Description Of Incident</label>
        <div class="col-sm-8">
			<textarea name="DescriptionOfIncident" class="form-control" rows="5" id="DescriptionOfIncident"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-4 col-sm-8">
          <button type="submit" class="btn btn-primary" name="btnProcessCall" id="submit">Process Call</button>
        </div>
      </div>
      
    </form>
  </section>
	<?php
	include "footer.php";
	?>
</div>
<script src="js/jquery-3.4.1.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>