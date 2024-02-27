
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $arr=array(12,4,0,"apple");
        $c=count($arr);
        foreach ($arr as $i)
//        for($i=0;$i<$c;$i++){
        echo $i,' ';             
        echo "<br><br>";
        $k=array("S1MCA"=>60,"S2MCA"=>30,"S3MCA"=>10);
        foreach($k as $p=>$p_value){
            echo $p,":",$p_value," ";
        }
//        echo $k["S1MCA"];
        
        ?>
    </body>
</html>
