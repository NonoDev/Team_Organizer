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
                <label>Nono</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Rony" id="2"><label for="2"></label></div>
                <label>Rony</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Cachi" id="3"><label for="3"></label></div>
                <label>Cachi</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="A.J" id="4"><label for="4"></label></div>
                <label>A.J</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Nico" id="5"><label for="5"></label></div>
                <label>Nico</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Luisma" id="6"><label for="6"></label></div>
                <label>Luisma</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Rafa" id="7"><label for="7"></label></div>
                <label>Rafa</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Alex" id="8"><label for="8"></label></div>
                <label>Alex</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chusma" id="9"><label for="9"></label></div>
                <label>Chusma</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Tripi" id="10"><label for="10"></label></div>
                <label>Tripi</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chiri" id="11"><label for="11"></label></div>
                <label>Chiri</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Félix" id="12"><label for="12"></label></div>
                <label>Félix</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Jose Carlos" id="13"><label for="13"></label></div>
                <label>Jose Carlos</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Juan" id="14"><label for="14"></label></div>
                <label>Juan</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Mari" id="15"><label for="15"></label></div>
                <label>Mari</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Ruben" id="16"><label for="16"></label></div>
                <label>Ruben</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Drogas" id="17"><label for="17"></label></div>
                <label>Drogas</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Chuster" id="18"><label for="18"></label></div>
                <label>Chuster</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Raul" id="19"><label for="19"></label></div>
                <label>Raul</label>
                <div class="squaredOne"><input type="checkbox" name="casilla[]" value="Andrés" id="20"><label for="20"></label></div>
                <label>Andrés</label>
                
          <div id="botones">
                <input type="submit" name="comprobar" value="Hacer equipos" id="bt-comprobar"/>
                <input type="reset" name="limpiar" value="Limpiar" id="bt-reset"/>
        </div>
            </form>
</div>
<?php
        
        
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
    
    shuffle($_POST['casilla']);
    $cont = count($_POST['casilla'])/2;
    $i = 0;
    
    
}    
            
?>
        <div id="abajo">
            <h2>Equipo 1</h2>
            <h2>Equipo 2</h2>
        <div id="izq">
            
            <?php
            
          foreach ($_POST['casilla'] as $checkbox){ 
        $i++;
     
        if($i <= $cont || $i <= $cont && $i <= $cont + 0.5){
            
        echo '<p>'.$checkbox.'</p>'; 
        
        }
        }
     
            ?>
          
        </div>
        
        <div id="derecha">
            
            <?php
            $i = 0;
                foreach ($_POST['casilla'] as $checkbox){ 
        $i++;
     
        if($i>$cont){
            
        echo '<p>'.$checkbox.'</p>'; }
              }
             
            ?>
        </div>  
        </div>
         <?php
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
