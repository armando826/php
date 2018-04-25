<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php 

    function __autoload($ClassName){
    include_once("class/" . $ClassName . ".class.php");
}

    //instanciadno la clase
    $plantilla = new index1();

    $plantilla->headlogin();

 ?>
    <body class="login" >
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">

                        <form  method="post">
                            <h1>Iniciar sesión</h1>
                            <div>
                                <input type="text" name="usu" class="form-control" placeholder="Usuario" required />
                            </div>
                            <div>
                                <input type="password" name="pass" class="form-control" placeholder="Contraseña" required/>
                            </div>
                            <div>
                                <button type="submit" name="token" value="Login" class="btn btn-default">Iniciar sesión</button>                               
                            </div>
                            <?php

                        include('dbconexion.php');

                        if (isset($_POST['token'])){

                            $nrcarnet = $_POST['usu'];
                            $clave = $_POST['pass'];

                            $query_b = "SELECT Usuario, Contraseña FROM usuario WHERE Usuario=\"$nrcarnet\" AND Contraseña=\"$clave\"";
                            

                            $result_b = $cnmysql->query($query_b);
                            

                            $num_row_b = mysqli_num_rows($query_b);
                          
                            


                            if( $num_row_b > 0 ){
                                
                                $row = mysqli_fetch_array($result_b);

                                /*$idb = $row['CodBibliotecario'];*/

                                session_start();
                                $_SESSION["idb"]= $row['usuario'];

                                /*header("location: biblioteca/indexbibliotecario.php?id=$idb");*/
                                header("location: index2.php");

                            }else{ 


                                echo "<error en los datos>";
                                
                            }

                        }else{

                        }
                    ?>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-bar-chart"></i> Sistema De Control De Gastos</h1>
                                    <p>© 2018 Universidad Don Bosco <a style="text-decoration: underline;" target="_blank" href="index.php">Sistemas Web</a></p>
                                </div>
                            </div>
                             

                        </form>

                       
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>