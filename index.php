<?php
// phpinfo();
/*
$base = "http://pokeapi.co/api/v2/pokemon/";



for ($id = 1; $id < 20 ; $id++){

  $data = file_get_contents($base.$id.'/');
  $pokemon = json_decode($data);
  echo $pokemon->name."<br>";

  echo '<img src="'.$pokemon->sprites->front_default.'" width="200">';

}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PokeApi php</title>
<meta charset="utf8">
<meta name="viewport" >
<!---css--->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" >
</head>
<body>

    <div id="container">
       <div class=" panel panel-default">
        <div class="panel-body">
         <table id="pokemon_table" class="display">
           <thead>
               <tr>
                   
                   <th>Imagen</th>
                   <th>Nombre</th>
               </tr>
           </thead>
           <tbody>

           </tbody>
         </table>
        </div>
       </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js" ></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js" " ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js" ></script>
        <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js" ></script>
        <script src="index.js" type="text/javascript"></script>

</body>
</html>
