<html>
<head>
  <title>Stergere carte</title>
</head>
<body>
<h1>Stergere carte</h1>



<?php

  // datele din formular
  $id_carte=$_POST['id_carte'];
 
  if (!$id_carte)
  {
    echo 'nu ai completat toate casutele.<br />';
     exit;
  }





  @ $db = new mysqli('localhost', 'webuser', 'webuser', 'lib4');





  if (mysqli_connect_errno()) 
  {
     echo 'Error: Conexiunea la serverul mysql nu s-a facut. Incercati mai tarziu';
     exit;
  }



  $query = "delete from carti where id_carte='".$id_carte."';"; 

echo $query;
echo "<br>";

  $result = $db->query($query);

  if ($result)
       echo  $db->affected_rows.' carte stearsa.'; 


  $db->close();


?>





</body>
</html>