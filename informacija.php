<?php
    
		$nr = $_GET['nr'];
        $con = mysqli_connect('mysql.hostinger.lt', 'u394434564_root', 'knygos', 'u394434564_demo');
        $sql="SELECT autorius, pavadinimas, metai, zanras FROM knygu_sarasas WHERE nr='$nr'";
        mysqli_set_charset($con, 'utf8');
        if ($result=mysqli_query($con,$sql))
          {
            $row=mysqli_fetch_assoc($result);
            $aut=$row['autorius'];
            $pav=$row['pavadinimas'];
            $met=$row['metai'];
            $zan=$row['zanras'];
           
        }

?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="pagrindinis">
            <img id="foto" src="https://s-media-cache-ak0.pinimg.com/736x/dc/5a/97/dc5a9731930fe645ca69b6681f2b9e77.jpg" height='100%' width='100%'>
            <div class="info" data-id="<?php echo $nr?>">
                <div><img height="200" style="position:absolute; background-color: #99ffeb; top:28%; left:25%" src=""/></div>
                <div style="position:absolute; top:25%; left:50%">
                    <h3><?php echo $aut ?></h3>
                    <h2>"<?php echo $pav?>"</h2>
                    <p>Leidimo metai: <?php echo $met ?> m.</p>
                    <p>Žanras: <?php echo $zan ?></p>
                    <p> Informacija apie knygą </p>
                </div>
            </div>
        </div>
    </body>
</html>
