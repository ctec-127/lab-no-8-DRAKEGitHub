<div class="container">
<div class="jumbotron">
    <h1 class="display-3">Temperature Converter</h1>
    <p class="lead">CTEC 127 - PHP with SQL 1</p>
    <hr class="my-2">
    <p>Have Fun!</p>
</div>	
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<div class="row">
		<div class="col-6">
			<label for="temp">Temperature</label>
			<input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
        </div>
        <div class="col-6">
            <select name="originalunit">
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
        </div>
<!-- end first row -->
</div>
<div class="row">
        <div class="col-6">
			<label for="convertedtemp">Converted Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp">
        </div>
        <div class="col-6">
        <select name="conversionunit">
				<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
        </div>
<!-- end of second row -->
</div>
<div class="row">
    <div class="col-12">
        <input type="submit" value="Convert" class="btn btn-info"/>   
    </div>
    <!-- end of third row -->
</div>
	</form>
</div>
</div>