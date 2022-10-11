<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles.css" />
<?php 
$array = NULL;
$view = NULL;
$list = NULL;
$position = NULL;
$special = NULL;
if(isset($_GET["btn"])){
    
    if($_GET["btn"] === "add"){
        $list = ($_GET["list"]);
        if($list == NULL){
            $option = $_GET["option"];
            $view = $option;
        }else{
            $view = $list."\n".$_GET["option"];
            $array = explode("\n", $view);//explode became String to Array by character
        }
    }elseif($_GET["btn"]==="run"){
        $list = ($_GET["list"]);
        $view = $list;
        $array = explode("\n", $view);
        $position = mt_rand(0,sizeof($array)-1);
        $special = $array[$position];
    }

        
        //$array[sizeof($array)] = $_GET["option"];
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SuperRaffless App</h1>
    <form >
    <input id="text" type="text" name="option" tabindex="1" />
    <button id="add" type="submit" name="btn" value="add" tabindex="2" >ADD</button>
    <br/>
    <div id="enviroment">
    <textarea name="list" tabindex="3"><?=$view?></textarea>
    <input id="reset" type="submit" value="Reset" formaction="http://localhost:80/RandomProject/" tabindex="5" />
    </div>
    
    <br/>
    <button id="run" type="submit" name="btn" value="run" tabindex="4" >RUN</button>
    
    
    <?php 
    if($special != NULL){
        echo "Congratulations: <b id='winner'>".$special."</b>";
        /*for($i = 0; $i<count($array); $i++){
        echo ($i." ".$array[$i]."<br/>");
        }*/
    }
    
    ?>

    </form>
    
    


    
</body>
</html>