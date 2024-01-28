<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Curl Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="display-4">
                Cat Facts
            </div>
        </div>
        <br>
        <div class="row">
            <?php
            $curl = curl_init();  // open session
            curl_setopt($curl, CURLOPT_URL, "https://cat-fact.herokuapp.com/facts");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($curl); //perform a session
            curl_close($curl);  // close session
            $output = json_decode($output, true);
            foreach ($output as $catFact) {
            ?>
                <div class="card col-12 col-sm-6 col-md-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $catFact['type'] ?></h5>
                        <p class="card-text"><?php echo $catFact['text'] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</body>

</html>