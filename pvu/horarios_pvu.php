<?php
    /* 
     * How to call
     * http://localhost/pvu/horarios_pvu.php?factor=+20%20minute&hour=30-08-2021%2018:56:02&group=10&group_quantity=12
     */

    $groups_quantity = $_GET["group_quantity"]; //12
	$factor = $_GET["factor"]; //+20 minute
    $hour = $_GET["hour"]; //30-08-2021 19:00:02
    $group = $_GET["group"]; //10
    
    $time = strtotime($hour);
    $mifecha= date('d-m-Y H:i:s', $time);
    
    $dia_mas = strtotime('+1 day', strtotime($mifecha));
    echo "<table border=1 style='max-width: 400px; font-family:\"Courier New\", Courier, monospace; font-size:80%'>";
    echo "<tr>";
    $counter = 0;
    for($i = $group; ; $i++)
    {
        if($i > $groups_quantity)
            $i = 1;
        
        echo "<th><strong>Group " . $i . "</strong></th>";
        
        $counter+=1;
        if($counter == $groups_quantity)
            break;
    }
    echo "</tr>";
    $counter = 0;
    for($i = $group; ; $i++)
    {
        if($i > $groups_quantity)
            $i = 1;
            
        if($counter == 0)
        {
            echo "<tr>";
        }
        
        echo "<td>".$mifecha."</td>";
        
        $counter+=1;
        if($counter == $groups_quantity)
        {
            echo "</tr>";
            $counter = 0;
        }
        
        $nueva_fecha = strtotime($factor, strtotime($mifecha));
        $mifecha= date('d-m-Y H:i:s', $nueva_fecha);
        
        if($nueva_fecha == $dia_mas)
            break;
    }
    
    echo "</table>";

?>
