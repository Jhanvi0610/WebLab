
<html>
<body>
<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";

    // Convert string into an array
    $b = explode(" ", $states);

    echo "<br>ORIGINAL ARRAY :<br>";

    foreach ($b as $i => $value)
        echo "states[$i] = $value<br>";

    foreach ($b as $c)
    {
        $n = strlen($c);

        // State ending with 'xas'
        if ($c[$n-3] == 'x' && $c[$n-2] == 'a' && $c[$n-1] == 's')
            $d[0] = $c;

        // State starting with K and ending with s
        if ($c[0] == 'K' && $c[$n-1] == 's')
            $d[1] = $c;

        // State starting with M and ending with s
        if ($c[0] == 'M' && $c[$n-1] == 's')
            $d[2] = $c;

        // State ending with a
        if ($c[$n-1] == 'a')
            $d[3] = $c;
    }

    echo "<br>RESULTANT ARRAY :<br>";

    for ($i = 0; $i < count($d); $i++)
        echo "statesList[$i] = $d[$i]<br>";
?>
</body>
</html>
