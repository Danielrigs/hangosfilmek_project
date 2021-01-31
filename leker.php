<?php
    $conn = new mysqli("127.0.0.1","root","MolM@r18Jan01MM*","hangosfilmek") or die("Hiba: ".$conn->error);

    function vegrehajt($kapcs, $sql){
        $res = $kapcs->query($sql);
        if($res->num_rows>0){
            while($row=$res->fetch_object()){
                $adat[]=$row;
            }
        }
        else{
            $obj=new stdClass();
            $obj->szakma="Nincs adat";
            $obj->versenyzo="Nincs adat";
            $adat[]=$obj;
        }

        return $adat;
    }




    $teljesURI = $_SERVER["REQUEST_URI"];
    $uri=explode("/",$teljesURI);

    switch(end($uri)){
        case "youtube":{
            $youtube="SELECT CEIL(SUM(hossz)/10) AS szam FROM film WHERE youtube=1";
            
            echo json_encode(vegrehajt($conn,$youtube));
            break;
        }
        case "nemtudni":{
            $nemtudni="SELECT COUNT(id) AS szam FROM film WHERE hossz=0";
            
            echo json_encode(vegrehajt($conn,$nemtudni));
            break;
        }
        case "wwii":{
            $wwii="SELECT COUNT(id) AS szam FROM film WHERE gyartas BETWEEN 1939 AND 1945";
            
            echo json_encode(vegrehajt($conn,$wwii));
            break;
        }
        case "nev":{
            $adatok=json_decode(file_get_contents('php://input'),true);
            $nev="SELECT COUNT(id) AS szam FROM film WHERE gyartas BETWEEN 1939 AND 1945";
            
            echo json_encode(vegrehajt($conn,$wwii));
            break;
        }
        case "film":{
            $film="SELECT COUNT(id) AS szam FROM film WHERE gyartas BETWEEN 1939 AND 1945";
            
            echo json_encode(vegrehajt($conn,$wwii));
            break;
        }
    }



?>