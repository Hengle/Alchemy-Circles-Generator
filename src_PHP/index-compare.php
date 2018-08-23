<!DOCTYPE html>
<html>
<head>
    <style>
        body{background:#111;color:#ddd;text-align: center;}
        .cerchio{background:#242424;display:inline-block;margin:6px;padding:6px;border:1px solid #333;transition-duration:1s;}
        .cerchio small{display:block;padding-bottom:3px;}
        .cerchio img{display:block;border:1px solid #161616;}
        a{color:#ddd;text-decoration: none;}
        a:hover .cerchio {border:1px solid #999;transition-duration:0s;}
        a:hover .cerchio small{color:#ddd;text-decoration:underline;}
        a:visited{color:#ddd;text-decoration:line-through;}
        a:visited .cerchio small{color:#ddd;text-decoration:line-through;}
    </style>
</head>
<body>
<?php
    for ($i=isset($_GET['n'])?$_GET['n']:50; $i > 0; $i--) {
        mt_srand();
        $id=mt_rand();
        //$id=$i;
        echo '<a href="./alchemy.php?id='.$id.'" target="_blank"><div class="cerchio"><small>#'.$id.' [PNG]</small><img src="./alchemy.php?id='.$id.'&coloured=1"></div></a>';
        echo '<a href="./alchemy-svg.php?id='.$id.'" target="_blank"><div class="cerchio"><small>#'.$id.' [SVG]</small><img src="./alchemy-svg.php?id='.$id.'&coloured=1"></div></a>';
    }
?>
</body>
</html>
