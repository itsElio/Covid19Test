<?php include("sessioni.php"); 
    require_once('model/user_db.php');
    require_once('controller/gestione_utente.php');
    require_once('controller/gestione_tampone.php');
    require_once('controller/gestione_prenotazione.php');
    require_once('view/vista-dashboard.php');

    if(!isset($_SESSION['valid'])) {
        header("Location: index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php 
   
   include("head-include.php"); 
 

   ?>

</head>


<body style="background: linear-gradient(#141e30, #243b55);">

    <?php include ("view/navbar.php"); ?>

    <div class="container" style="margin-top:1.5rem;">
        <div class="row">
            <div class="col-md-8 dashboard-card">
                <?php
                $dashboard = new Dashboard();
                $dashboard->mostraDashboard($_SESSION['tipo_utente']);
                ?>
                </tbody>
                </table>
            </div>

        </div>
    </div>



    <?php include ("footer-include.php"); ?>
    <script>
        jQuery(document).ready(function ($) {

            $(".clickable-row").click(function () {
                window.location = $(this).data("href");
            });
        });

    </script>

</body>

</html>