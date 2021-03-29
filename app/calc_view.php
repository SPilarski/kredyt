<?php require_once dirname(__FILE__) .'/../config.php';?>

<?php //góra strony z szablonu
include _ROOT_PATH.'/templates/top.php';
?>

        <!-- Boxes -->
        <div class="thumbnails">

            <div class="box">

                <div class="inner">
                    <form action="<?php print(_APP_URL);?>/app/calc.php" method="post" style="pure-form">
                        <label for="id_x" >Kwota: </label>
                        <input id="id_x" type="text" name="x" value="" style="margin:10px;" /><br />
                        <label for="id_y">Ile lat?: </label>
                        <input id="id_y" type="text" name="y" value="" style="margin:10px;"/><br />
                        <label for="id_p">Oprocentowanie: </label>
                        <input id="id_p" type="text" name="p" value="" style="margin:10px;"/><br />
                        <input type="submit" value="Oblicz" class="btn btn-primary" />
                    </form>

                </div>

            </div>



        </div>

    </div>
</div>


<div class="reports">
    <?php

    if (isset($messages)) {
        if (count ( $messages ) > 0) {
            echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
            foreach ( $messages as $key => $msg ) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if (isset($result)){ ?>
        <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #1114b3; width:25em;">
            <?php echo 'Wynik: '.$result; ?>
        </div>
    <?php } ?>

</div>
<?php //dół strony z szablonu
include _ROOT_PATH.'/templates/bottom.php';
?>