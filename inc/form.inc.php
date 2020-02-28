<div class="container">
    <div class="jumbotron">
        <h1 class="display-5-info text-info">Temperature Converter</h1>
        <hr class="my-2">
        <p>Enter a temperature and select degree measurements from the dropdowns to convert a temperature.</p>
    </div>	
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row mb-2">
                <div class="form-group col-xs-12 col-md-6">
                    <label for="temp" class="font-weight-bold">Temperature to Convert</label>
                    <input type="text" class="form-control" placeholder="Example: 72.3" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
                </div>
                <div class="form-group col-xs-12 col-md-6">
                <label for="originalunit" class="font-weight-bold ">Original Unit</label>
                    <select name="originalunit" id="originalunit" class="custom-select">
                        <option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                        <option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                        <option value="fahrenheit"<?php if($originalUnit == "fahrenheit") echo ' selected="selected"';?>>Fahrenheit</option>
                        <option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                    </select>
                </div>
        <!-- end first row -->
        </div>

        <div class="row">
                <div class="form-group col-xs-12 col-md-6">
                    <label class="font-weight-bold" for="convertedtemp">Converted Temperature</label>
                    <input type="text" class="form-control" placeholder="Press Convert for Value" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
                    name="convertedtemp" size="7" maxlength="7" id="convertedtemp">
                </div>
                <div class="form-group col-xs-12 col-md-6">
                <label for="conversionunit" class="font-weight-bold">Conversion Unit</label>
                    <select name="conversionunit" id="conversionunit" class="custom-select">
                        <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                        <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                        <option value="fahrenheit"<?php if($conversionUnit == "fahrenheit") echo ' selected="selected"';?>>Fahrenheit</option>
                        <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                    </select>
                </div>
        <!-- end of second row -->
        </div>
        
        <div class="row text-center">
            <div class="col-xs-12 col-md-6 mx-auto">
                <input type="submit" value="Convert" class="btn btn-info btn-lg btn-block"/>   
            </div>
        <!-- end of third row -->
        </div>
    <!-- row for bottom info -->
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <table class="table table-bordered mt-5 mb-5">
                    <thead class="table-info">
                        <tr>
                            <th>Conversion</th>
                            <th>Formulas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Celsius to Fahrenheit</th>
                            <td>°F = 9/5 ( °C) + 32</td>
                        </tr>
                        <tr>
                            <th>Celsius to Kelvin</th>
                            <td>K = °C + 273</td>
                        </tr>
                        <tr>
                            <th>Fahrenheit to Celsius</th>
                            <td>°C = 5/9 (°F - 32)</td>
                        </tr>
                        <tr>
                            <th>Fahrenheit to Kelvin</th>
                            <td>K = 5/9 (°F - 32) + 273</td>
                        </tr>
                        <tr>
                            <th>Kelvin to Celsius</th>
                            <td>°C = K - 273</td>
                        </tr>
                        <tr>
                            <th>Kelvin to Fahrenheit</th>
                            <td>°F = 9/5 (K - 273) + 32</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-6">
                <ul class="list-group mt-md-5 mb-5">
                    <li class="list-group-item list-group-item-action list-group-item-info font-weight-bold">Useful Temperature Facts from <a href="https://www.thoughtco.com/temperature-conversion-formulas-609324">ThoughtCo.com</a></li>
                    <li class="list-group-item">Celsius and Fahrenheit are the same at -40°.</li>
                    <li class="list-group-item">Water boils at 100°C or 212°F.</li>
                    <li class="list-group-item">Water freezes at 0°C and 32°F.</li>
                    <li class="list-group-item">Absolute zero is 0 K.</li>
                    <li class="list-group-item">Celsius and Fahrenheit are degree scales.</li>
                    <li class="list-group-item">The degree symbol is not used to report temperature using the Kelvin scale.</li>
                </ul>
            </div>
        </div>
    </form>
</div>
