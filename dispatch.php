<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dispatch</title>
</head>

<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
<body>
<div class="container" style="width:900px">
  <?php
	include "header.php";
	?>
  <section class="mt-3">
    <form>
      <div class="form-group row">
        <label for="callerName" class="col-sm-4 col-form-label">Caller's name</label>
        <div class="col-sm-8">
			<span>
				David
				<input type="hidden" id="callerName" name="callerName" value="David">
			</span>
        </div>
      </div>
		<div class="form-group row">
        <label for="ContactNo" class="col-sm-4 col-form-label">Contact No</label>
        <div class="col-sm-8">
			<span>
				91234567
				<input type="hidden" id="contactNo" name="contactNo" value="91234567">
			</span>
        </div>
      </div>
		<div class="form-group row">
        <label for="LocationOfIncident" class="col-sm-4 col-form-label">Location of Incident</label>
        <div class="col-sm-8">
			<span>
			CCK
				<input type="hidden" id="LocationOfIncident" name="LocationOfIncident" value="CCK">
			</span>
          
        </div>
      </div>
		<div class="form-group row">
        <label for="TypeOfIncident" class="col-sm-4 col-form-label">Type Of Incident</label>
        <div class="col-sm-8">
			<span>
				Fire
				<input id="TypeOfIncident" name="TypeOfIncident" type="hidden" value="fire">
			</span>
        	
        </div>
      </div>
		<div class="form-group row">
        <label for="DescriptionOfIncident" class="col-sm-4 col-form-label">Description Of Incident</label>
        <div class="col-sm-8">
			<span>
			Fire at CCK
				<input name="DescriptionOfIncident" id="DescriptionOfIncident" type="hidden" value="Fire at CCK">
			</span>
			
        </div>
      </div>
		<div class="form-group row">
        <label for="patrolcar" class="col-sm-4 col-form-label">Choose Patrol Car(s)</label>
        <div class="col-sm-8">
			<table class="table table-striped">
				<tbody>
				<tr>
					<th>Car Number</th>
					<th>Status</th>
					<th></th>
				</tr>
				<tr>
					<td>SJA2103H</td>
					<td>Free</td>
					<td><input type="checkbox" name="cbCarSelection[]"></td>
				</tr>
				<tr>
					<td>SUF9073P</td>
					<td>Free</td>
					<td><input type="checkbox" name="cbCarSelection[]"></td>
				</tr>
				<tr>
					<td>SHI7432U</td>
					<td>Free</td>
					<td><input type="checkbox" name="cbCarSelection[]"></td>
				</tr>
				</tbody>
			</table>
			
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-4 col-sm-8">
          <button type="submit" class="btn btn-primary" name="submit" id="submit">Dispatch</button>
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