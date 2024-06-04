<html>
<head>
  <title>Inserare carte</title>
</head>
<body>
<h1>Inserare carte</h1>



<?php

  // datele din formular
  $id_carte=$_POST['id_carte'];
  $pret=$_POST['pret'];

 
  if (!$id_carte || !$pret)
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



  $query = "update carti set pret='".$.pret"' where id_carte='".$id_carte."'; 

echo $query;
echo "<br>";

  $result = $db->query($query);

  if ($result)
       echo  $db->affected_rows.' carte updatata.'; 


  $db->close();


?>





</body>
</html>