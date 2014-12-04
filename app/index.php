
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="index.css"/>
        <link rel="stylesheet" type="text/css" href="checkbox.css"/>
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'/>
       
        <title>Team Organizer</title>
    </head>
    <body>
       
<h1>Team Organizer</h1>
<h3>Selecciona a los jugadores que van a formar los dos equipos</h3>
<div id="formulario">
            
            <form action="index.php" method="post">
                
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Nono" id="1"><label for="1"></label></div>
                <label for="1">Nono</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Rony" id="2"><label for="2"></label></div>
                <label for="2">Rony</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Cachi" id="3"><label for="3"></label></div>
                <label for="3">Cachi</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="A.J" id="4"><label for="4"></label></div>
                <label for="4">A.J</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Nico" id="5"><label for="5"></label></div>
                <label for="5">Nico</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Luisma" id="6"><label for="6"></label></div>
                <label for="6">Luisma</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Cordobés" id="7"><label for="7"></label></div>
                <label for="7">Cordobés</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Alex" id="8"><label for="8"></label></div>
                <label for="8">Alex</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chusma" id="9"><label for="9"></label></div>
                <label for="9">Chusma</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Tripi" id="10"><label for="10"></label></div>
                <label for="10">Tripi</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chiri" id="11"><label for="11"></label></div>
                <label for="11">Chiri</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Félix" id="12"><label for="12"></label></div>
                <label for="12">Félix</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Andrés" id="13"><label for="13"></label></div>
                <label for="13">Andrés</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Javi" id="14"><label for="14"></label></div>
                <label for="14">Javi</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Felipe" id="15"><label for="15"></label></div>
                <label for="15">Felipe</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Sevi" id="16"><label for="16"></label></div>
                <label for="16">Sevi</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chuster" id="18"><label for="18"></label></div>
                <label for="18">Chuster</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Raul" id="19"><label for="19"></label></div>
                <label for="19">Raul</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Ruben" id="20"><label for="20"></label></div>
                <label for="20">Ruben</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="J. Antonio" id="21"><label for="21"></label></div>
                <label for="21">J. Antonio</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Corpas" id="23"><label for="23"></label></div>
                <label for="23">Corpas</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chuster 2" id="22"><label for="22"></label></div>
                <label for="22">Chuster 2</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Pedro" id="24"><label for="24"></label></div>
                <label for="24">Pedro</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="J. Andres" id="25"><label for="25"></label></div>
                <label for="25">J. Andres</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Extra 1" id="26"><label for="26"></label></div>
                <label for="26">Extra 1</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Extra 2" id="27"><label for="27"></label></div>
                <label for="27">Extra 2</label>
                
          <div id="botones">
                <input type="submit" name="comprobar" value="Hacer equipos" id="bt-comprobar"/>
                <input type="submit" name="nuevo" value="Añadir jugador" id="bt-nuevo-jug"/> <!-- aun no funciona  -->
                <input type="reset" name="limpiar" value="Limpiar" id="bt-reset"/>
        </div>
            </form>
</div>
<?php
        if(isset($_POST['nuevo'])){
           echo "<script language='JavaScript'> 
                alert('Funcionalidad aún no implementada'); 
                </script>";
        }
        
            if (isset($_POST['comprobar'])) {
    if (is_array($_POST['casilla'])) {
        $selected = '';
        $num_selected = count($_POST['casilla']);
        $current = 0;
        foreach ($_POST['casilla'] as $key => $value) {
            if ($current != $num_selected-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }
    }
    else {
        $selected = 'Debes seleccionar un país';
    }
    
    $res = $_POST['casilla'];
    shuffle($res);
    $cont = count($res)/2;
    $a=0;
            while($a<$cont){
                
                $eq1[$a]=$res[$a];
                $a++;
            }
            while($a>=$cont){
                
                $eq2[$a]=$res[$a];
                $a++;
                if ($a == $cont*2){
                    break;
                }
            }
            
            do{
                $error = 0;
                if(((in_array('Nono', $eq1) && in_array('Pedro', $eq1)) || (in_array('Tripi', $eq1) && in_array('Pedro', $eq1))) || 
                   ((in_array('Nono', $eq2) && in_array('Pedro', $eq2)) || (in_array('Tripi', $eq2) && in_array('Pedro', $eq2))) ||
                   ((in_array('Rony', $eq2) && in_array('Pedro', $eq2)) || (in_array('Rony', $eq1) && in_array('Pedro', $eq1))) ||
                   ((in_array('Pedro', $eq2) && in_array('Corpas', $eq2)) || (in_array('Pedro', $eq1) && in_array('Corpas', $eq1))) ||
                   ((in_array('Chiri', $eq2) && in_array('Nico', $eq2)) || (in_array('Chiri', $eq1) && in_array('Nico', $eq1)))){
                    $error = 0;
                    shuffle($res);
    $cont = count($res)/2;
    $a=0;
            while($a<$cont){
                
                $eq1[$a]=$res[$a];
                $a++;
            }
            while($a>=$cont){
                
                $eq2[$a]=$res[$a];
                $a++;
                if ($a == $cont*2){
                    break;
                }
            }
                }
                else{
                    $error = 1;
                }
            }while($error != 1);
            
    $i = 0;
    
    
}    
            

     echo '<div id="abajo">
            <h2>Equipo 1</h2>
            <h2>Equipo 2</h2>
        <div id="izq">';
            
           
            
        foreach ($eq1 as $checkbox){ 
        $i++;
            if($i == 1)
                echo '<p>1er Portero - '. $checkbox.'</p>'; 
            else
                echo '<p>'. $i.' - '. $checkbox.'</p>'; 
        
        }
      
     
           
          
       echo '</div>
        
        <div id="derecha">';
            
            
            $i = 0;
        foreach ($eq2 as $checkbox1){ 
        $i++;
            if($i == 1)
                echo '<p>1er Portero - '. $checkbox1.'</p>'; 
            else
                echo '<p>'. $i.' - '. $checkbox1.'</p>'; 
            
        }
            
             
            
       echo '</div>  
        </div>';
         
            $aleatorios = 0;
        
        if (isset($_POST['comprobar'])) {
            $aleatorios = rand(1,2);
        if($aleatorios == 1)
        {
            echo '<h4>Saca el Equipo 1</h4>';
        }else
        {
            echo '<h4>Saca el Equipo 2</h4>';
        }
        }
         ?>
    </body>
</html>


 