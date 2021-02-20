<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Airtime Generator</title>

    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    
    <?php
        echo "<h1>Generated Airtime Pins</h1>";

        $number_of_pins = $_GET["number-of-pins"];
        $airtime_pins = array($number_of_pins);

        for ($i = 0; $i < $number_of_pins; $i++) {
            $airtime_pins[$i] = generate_pins();

            echo "<p>Pin " . ($i + 1) . ": " . $airtime_pins[$i] . "</p>";
        }

        
        function generate_pins() {
            $pin = "";

            for ($i = 1; $i <= 15; $i++) {
                $pin .= random_int(0, 9);

                if ($i % 5 == 0 && $i != 15) {
                    $pin .= "-";
                }
            }

            return $pin;
        }
    ?>

</body>
</html>