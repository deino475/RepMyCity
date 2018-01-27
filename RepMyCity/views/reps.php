 <h1 style = "text-align: center; padding-top: 30px;">Current Representatives</h1>
        <?php if (isset($data['reps'])) {?>
            <?php for ($i = 0; $i < sizeof($data['reps']); $i++) {?>
                <div class = "row">
                    <div class = "col-md-6 col-md-offset-2">
                        <div class = "container">
                            <a href = "representative.php?pos=<?php echo $data['reps'][$i][2];?>"><h2><?php echo $data['reps'][$i][1];?></h2></a><h4><?php echo $data['reps'][$i][2];?></h4>
                        </div>
                    </div>
                    <div class = "col-md-4">
                        <a href = "representative.php?pos=<?php echo $data['reps'][$i][2];?>"><img class = "img img-responsive img-circle" src = "<?php echo $data['reps'][$i][3];?>"></a>
                    </div>
                </div>
                <hr>
            <?php }?>
        <?php }?>