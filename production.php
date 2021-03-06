
<!DOCTYPE html>

<html>

    <head>
    
        <title>Daily Production Log</title>

        <link href="style.css" type="text/css" rel="stylesheet">

        <script>
            window.onload = function () {
        var select = document.getElementById("year");
        for(var i = 2011; i >= 1900; --i) {
        var option = document.createElement('option');
        option.text = option.value = i;
        select.add(option, 0);
                }
            };
        </script>
        

    </head>


<body>
    <img src="white_logo-removebg-preview.png">
    
    <h1>Daily Production Log</h1>
    
    <form action="php/production-submit.php" method="POST">

    <div id="datediv">
        <label for="date">Date</label>
        <input type="date" id="date" name="date">
    </div>
    
    <div id="name">
        <label for="name">Name</label>
        <select id="name" name="name">
            <?php 
            $sql = mysqli_query($connection, "SELECT name FROM production");
            while ($row = $sql->fetch_assoc()){
            echo "<option value=\"name1\">" . $row['Name'] . "</option>";
            }
            ?>
            </select>
        
    </div>
    
    
        
    <div id="place">    
        <label for="location">Location</label>
        <select id="location" name="location">
            <option value="Dalton">Dalton</option> 
            <option value="Villa Rica">Villa Rica</option>
        </select>
            
        <label for="shift">Shift</label>
        <select id="shift" name="shift">
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
        </select>
        
        <label for="line">Line</label>
        <select id="line" name="line">
            <option value="Line 1">Line 1</option>
            <option value="Line 2">Line 2</option>
            <option value="Arburg">Arburg</option>
            <option value="Nissei">Nissei</option>
        </select>    
    </div>    
        
    <div id="item">    
        <label for="disc">Disc Model</label>
        <select id="disc" name="disc">
            <option value="Pa1">Pa1</option>
            <option value="Pa2">Pa2</option>
            <option value="Pa3">Pa3</option>
            <option value="Pa4">Pa4</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="M1">M1</option>
            <option value="M2">M2</option>
            <option value="M3">M3</option>
            <option value="M4">M4</option>
            <option value="MX3">MX3</option>
            <option value="F1">F1</option>
            <option value="F2">F2</option>
            <option value="F3">F3</option>
            <option value="F5">F5</option>
            <option value="F7">F7</option>
            <option value="FX2">FX2</option>
            <option value="H1">H1</option>
            <option value="H2">H2</option>
            <option value="H3">H3</option>
            <option value="H4">H4</option>
            <option value="H5">H5</option>
            <option value="H1V2">H1V2</option>
            <option value="H3V2">H3V2</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="D4">D4</option>
            <option value="D6">D6</option>
            <option value="D1M">D1M</option>
            <option value="D2M">D2M</option>
            <option value="D3M">D3M</option>
            <option value="D4M">D4M</option>
            <option value="X2">X2</option>
            <option value="X3">X3</option>
            <option value="X4">X4</option>
            <option value="X5">X5</option>
        </select>
            
        
        <label for="plastic">Plastic</label>
        <select id="plastic" name="plastic">
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="300S">300S</option>
            <option value="350">350</option>
            <option value="350G">350G</option>
            <option value="400">400</option>
            <option value="400G">400G</option>
            <option value="500">500</option>
            <option value="750">750</option>
            <option value="750G">750G</option>
        </select>    
    </div>        
    
    <div id="goodparts">
        
        <label for="firsts">Firsts</label>
            <input onblur="findTotal()" type="text" id="firsts" name="number">
            
            <label for="seconds">Seconds</label>
            <input onblur="findTotal()" type="text" id="seconds" name="number">

            <label for="total">Total</label>
            <input type="text" name="total" id="total"/>
    </div>

    <script type="text/javascript">
        function findTotal(){
            var arr = document.getElementsByName("number");
            var tot=0;
            for(var i=0;i<arr.length;i++){
                if(parseInt(arr[i].value))
                    tot += parseInt(arr[i].value);
            }
            document.getElementById('total').value = tot;
        }
        
            </script>
    
    <div id="regwas">    
        <label for="regrind">Regrinds (lbs.)</label>
        <input type="text" id="regrind" name="regrind">
        
        <label for="waste">Waste (lbs.)</label>
        <input type="text" id="waste" name="waste">
    
    
    </div>
    
    <div id="submit">
        <input type="submit" value="Submit">
    
    </div>
        
    </form>    
    
    
    </body>



</html>