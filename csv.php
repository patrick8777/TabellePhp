<html>
    <head>
        <title>CSV Tablelle</title>
       <style>
            table {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>   
<?php
 // Konfiguration
 $csvFile = "example-currencies.csv";
 $firstRowHeader = true;
 $maxRows = 10;
  
 // Daten auslesen und Tabelle generieren
 $handle = fopen($csvFile, "r");
 $counter = 0;
 echo "<table class=\"csvTable\">";
 while(($data = fgetcsv($handle, 999, ";")) && ($counter < $maxRows)) {
  
   echo "<tr>";
   if(($counter == 0) && $firstRowHeader) {
     echo "<th>".$data[0]."</th>";
     echo "<th>".$data[1]."</th>";
     echo "<th>".$data[2]."</th>";
   }
   else {
     echo "<td>".$data[0]."</td>";
     echo "<td>".$data[1]."</td>";
     echo "<td>".$data[2]."</td>";
   }
   echo "</tr>";
  
   $counter++;
 }
 echo "</table>"; 
  
 fclose($handle);
 ?>
        </table>
    </body>
</html>
