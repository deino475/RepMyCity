<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RepMyCity</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">RepMyCity</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Recent Bills</a>
                    </li>
                    <li>
                        <a href="representatives.php">Representatives</a>
                    </li>
                    <li>
                        <a href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1 style = "color: white;">RepMyCity</h1>
                <p style = "color: white;">Hold your council members accountable by monitoring which issues they are voting on.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <div class = "container">
        <div class = "row">
            <h1 style = "text-align: center; color: white;">Most Recent Bills</h1>
            <div class = "row">
                <?php if (isset($data['bills'])) {?>
                    <?php foreach ($data['bills'] as $bill) {?>
                        <div class = "panel panel-default">
                           <div class = "panel-heading">
                                <a href = "bill.php?id=<?php echo $bill[0];?>"><h3><?php echo $bill[1];?></h3></a>
                            </div>
                            <div class = "panel-body">
                                <p><?php echo $bill[2];?></p>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>

    <div class = "container">
        <h1 style = "text-align: center; color: white;">Current Representatives</h1>
        <?php if (isset($data['reps'])) {?>
            <?php for ($i = 0; $i < sizeof($data['reps']); $i++) {?>
                <?php if ($i % 3 == 0) {?>
                    <div class = "row">
                <?php }?>
                    <div class = "col-md-4">
                        <a href = "representative.php?rep=<?php echo $data['reps'][$i][1];?>"><img class = "img img-responsive img-circle" src = "<?php echo $data['reps'][$i][3];?>"></a>
                        <a href = "representative.php?rep=<?php echo $data['reps'][$i][1];?>"><p style = "color:white;"><?php echo $data['reps'][$i][1];?> - <?php echo $data['reps'][$i][2];?></p></a>
                    </div>
                <?php if ($i % 3 == 2) {?>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>