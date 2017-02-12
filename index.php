<html>
    <head>
        <meta charset="utf8_general_ci">
        <title>Knygų sąrašas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div class="wrapper">	
            <i><h1><a id="tekstas" href="index.php">Knygų sąrašas</a></h1></i>
            <div id="content">
                <form method="post" action="index.php">
                    <div class="input-group">
                        <input class="form-control" type="text" name="search2" id="input" placeholder="Paieška">
                        <span class="input-group-btn">
                            <input class="btn btn-default" id="button" type="submit" name="search" value="Ieškoti">
                        </span>
                    </div>
                    <br><br>
                        <?php
                            $conn = mysqli_connect('mysql.hostinger.lt', 'u394434564_root', 'knygos', 'u394434564_demo');
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }	
                            if(isset($_POST['search'])){
                                $search2=$_POST['search2'];
                                $query= "select * from knygu_sarasas where concat(autorius,pavadinimas,metai,zanras) like '%".$search2."%'";
                                $search=filter($query);
                                $pagination='';   
                            }
                            else{
                                $sql2 = "SELECT COUNT(pavadinimas) FROM knygu_sarasas";
                                $result2=mysqli_query($conn,$sql2);
                                $row=mysqli_fetch_row($result2);
                                $rows=$row[0];
                                $limit=10;
                                $last=ceil($rows/$limit);
                                if($last<1){
                                    $last=1;
                                }
                                $pnum=1;
                                if(isset($_GET['pn'])){
                                    $pnum=preg_replace('#[^0-9]#','',$_GET['pn']);
                                }
                                if($pnum<1){
                                    $pnum=1;
                                }
                                else if($pnum>$last){
                                    $pnum=$last;
                                }
                                
                                $limit2=($pnum-1)*$limit;
                            
                                if (isset($_GET['sort'])){
                                    if($_GET['sort'] == 'autorius'){
                                        $query2="SELECT * FROM knygu_sarasas ORDER BY autorius";
                                    }
                                    else if ($_GET['sort'] == 'pavadinimas')
                                    {
                                        $query2="SELECT * FROM knygu_sarasas ORDER BY pavadinimas"; 
                                    }
                                    else if ($_GET['sort'] == 'metai')
                                    {
                                        $query2="SELECT * FROM knygu_sarasas ORDER BY metai";
                                    }
                                    else if($_GET['sort'] == 'zanras')
                                    {
                                        $query2="SELECT * FROM knygu_sarasas ORDER BY zanras";
                                    }
                                    $search=filter($query2);
                                    $pagination='';
                                }
                                else if(!isset($_GET['sort'])){
                                    $query="SELECT * FROM knygu_sarasas LIMIT $limit2, $limit";
                                    $search=filter($query);
                                    $pagination='';
                                    if($last!=1){

                                        $pagination.='<ul class="pagination">';

                                            $ankstesnis=$pnum-1;
                                            $pagination.='<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$ankstesnis.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>  ';

                                            for($i=$pnum-4; $i<$pnum; $i++){
                                                if($i>0){
                                                    $pagination.='<li ><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" aria-label="Previous">'.$i.'</a></li> ';

                                                }
                                            }

                                        $pagination.='<li class="active"><a href="'.$_SERVER['PHP_SELF'].'?pn='.$pnum.'">'.$pnum.'</a></li>';
                                        for($i=$pnum+1; $i<=$last; $i++){
                                                $pagination.='<li ><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li> ';
                                                if($i>=$pnum+4){
                                                    break;
                                                }

                                            }

                                            $sekantis=$pnum+1;
                                            $pagination.='<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$sekantis.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';

                                        $pagination.='</ul>';
                                    }   
                                }
                            }
                            function filter($query){
                                $conn=mysqli_connect('mysql.hostinger.lt', 'u394434564_root', 'knygos', 'u394434564_demo');
                                mysqli_set_charset($conn, 'utf8');
                                $result=mysqli_query($conn, $query);
                                return $result;
                            }
                            echo '<table  id="table" border="solid 1px">';
                            echo '<col width="30%"><col width="30%"><col width="20%"><col width="20%">';
                            echo '<tr>';
                            echo '<th><a id="color" href="index.php?sort=autorius">Autorius</a></th>';
                            echo '<th><a id="color" href="index.php?sort=pavadinimas">Pavadinimas</a></th>';
                            echo '<th><a id="color" href="index.php?sort=metai">Leidimo metai</a></th>';
                            echo '<th><a id="color"href="index.php?sort=zanras">Žanras</a></th>';
                            echo '</tr>';
                            
                            while ($row=mysqli_fetch_array($search, MYSQLI_ASSOC)){
                                $nr = $row['nr'];
                                echo '<tr>';
                                echo '<td class="a" id="autorius">'.$row['autorius'].'</td>';
                                echo '<td class="a" id="pavadinimas"><a id="pav" href="informacija.php?nr='.$nr.'">'.$row['pavadinimas'].'</a></td>';
                                echo '<td class="a" id="metai">'.$row['metai'].'</td>';
                                echo '<td class="a" id="zanras">'.$row['zanras'].'</td>';
                                echo '</tr>';
                            }
                                
                            mysqli_close($conn);
                            echo '</table>';
                        ?>
                    
                    <div id="control"><?php echo $pagination; ?></div>
                </form>
            </div>
        </div>
    </body>
</html>


