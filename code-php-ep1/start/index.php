<?php
            // $pet1 = 'Chew Barka';
            // $pet2 = 'Sparka Dogy';
            // $pet3 = 'Pica Di Chao';

            //associative arrays
            $pancake = array(
                'name' => 'Pancake the Bulldog',
                'age'  => '1 year',
                'weight' => 9,
                'bio' => 'Lorem Ipsum',
                'filename' => 'pancake.png'
            );
            //            //adding new key and val to pancakes array
            $pancake['breed'] = 'Bulldog';

            //adding new key and val to pets array
            $pets[3] = 'Kitty Gaga';
            //Debugging
            echo '<pre>';
            var_dump($pets);
            echo '</pre>';

            //multi-dimensional arrays
            $pet1 = array(
                'name' => 'Chew Barka',
                'breed' => 'Bichon',
                'age'  => '2 years',
                'weight' => 8,
                'bio'   => 'The park, The pool or the Playground - I love to go anywhere! I am really great at... SQUIRREL!',
                'filename' => 'pet1.png'
            );
            
            $pet2 = array(
                'name' => 'Spark Pug',
                'breed' => 'Pug',
                'age'  => '1.5 years',
                'weight' => 11,
                'bio'   => 'You want to go to the dog park in style? Then I am your pug!',
                'filename' => 'pet2.png'
            );
            
            $pet3 = array(
                'name' => 'Pico de Gato',
                'breed' => 'Bengal',
                'age'  => '5 years',
                'weight' => 9,
                'bio'   => 'Oh hai, if you do not have a can of salmon I am not interested.',
                'filename' => 'pet3.png'
            );
            
            $pancake = array(
                'name' => 'Pancake the Bulldog',
                'breed' => 'Bengal',
                'age'  => '1 year',
                'weight' => 9,
                'bio' => 'Lorem Ipsum',
                'filename' => 'pancake.png'
            );

            $pets = array($pet1, $pet2, $pet3, $pancake );
            $pets = array_reverse($pets);
            echo '<pre>';
            var_dump($pets[2]['breed']);
            echo '</pre>';
            //die(); - use  for debuggin to remove the page 
            
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>AirPupNMeow.com: All the love, none of the crap!</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AirPupNMeow</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <!-- creating a variable bname -->
            <?php 
            $cleverWelcomeMessage = ucwords('All the love, none the crap!');
            $moreReads = strtolower('Lets Love our Pets cz thats all we gat');
            //$popCount = 50;
            //$popCount = rand(1, 50); // Generates a random number between 1 and 50
            $popCount = count($pets)
            ?>


            <h1><?php echo $cleverWelcomeMessage;?></h1>
            <h3><?php echo $moreReads;?></h3>

            <p>Over <?php echo $popCount ?> pets available for us </p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <!-- <?php
            foreach ($pets as $pet) {
                echo '<div class="col-lg-4">';
                echo '<h2>';
                echo $pet;
                echo '</h2>';
                echo ' <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>';
                    echo '<p><a class="btn btn-default" href="#">View details &raquo;</a></p>';
                echo '</div>';
            }
        ?> -->
       <div class="row">
    <?php foreach ($pets as $cutePet) { ?>
        <div class="col-lg-4 pet-list-item">
            <h2><?php echo $cutePet['name']; ?></h2>

            <img src="/images/<?php echo $cutePet['filename']; ?>" class="img-rounded">

            <blockquote class="pet-details">
                <span class="label label-info"><?php echo $cutePet['breed']; ?></span>
                <?php echo $cutePet['age']; ?>
                <?php echo $cutePet['weight']; ?> lbs
            </blockquote>

            <p>
                <?php echo $cutePet['bio']; ?>
            </p>
        </div>
    <?php } ?>
</div>
    </div>
        </div>

        <hr>

        <footer>
            <p>&copy; AirPupNMeow.com</p>
        </footer>
    </div>
    <!-- /container -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
