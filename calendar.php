<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <p class="heading">Maret 2022</p>
        <div style="border-top: 4px solid #000000"></div>
        <table>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
        </table>
        <div style="border-top: 4px solid #000000"></div>
        <table>
            <?php
            $number = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
            $index = 0;
            for($i = 1; $i <= 5; $i++){
                echo "<tr>";
                for($j = 1; $j <= 7; $j++){
                    if($i == 1 && ($j == 1 || $j ==2)){
                        echo "<td></td>";
                    }else if($i == 5 && ($j == 6 || $j == 7)){
                        echo "<td></td>";
                    }else{
                        echo "<td>". $number[$index] ."</td>";
                        $index++;
                    }
                }
                echo "<tr>";
            }      
            ?> 
        </table>
    </body>
</html>