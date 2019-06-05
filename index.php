 <?php
    // jSON URL which should be requested
    $json_url = "https://api.exchangeratesapi.io/latest?base=USD&symbols=EUR,INR,AUD,JPY,GBP,CAD,CHF,MXN";

    // Initializing curl
    $ch = curl_init($json_url);

    // Configuring curl options
    $options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array("Content-type: application/json")
    );

    // Setting curl options
    curl_setopt_array($ch, $options);

    // Getting results
    $result = curl_exec($ch); // Getting jSON result string

    //Printing the JSON
    // echo $result;

    //Decoding JSON 
    $data = json_decode($result);

    //echo $data->value; 

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Foreign Exchange Rate</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
     <!--===============================================================================================-->
     <link rel="stylesheet" type="text/css" href="css/util.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <!--===============================================================================================-->
 </head>

 <body>

     <div class="limiter">
         <div class="container-table100">
             <div class="wrap-table100">
                 <div class="table100">
                     <p class="info">Exchange Rate of US Dollar for <?php echo $data->date ?> </p>
                     <table>
                         <thead>
                             <tr class="table100-head">
                                 <th class="column1">Currency</th>
                                 <th class="column2">Value</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="column1">Austrialian Dollor</td>
                                 <td class="column2"><?php echo $data->rates->AUD ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">Japanese Yen</td>
                                 <td class="column2"><?php echo $data->rates->JPY ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">Indian Rupee</td>
                                 <td class="column2"><?php echo $data->rates->INR ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">Euro</td>
                                 <td class="column2"><?php echo $data->rates->EUR ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">British Pound Sterline</td>
                                 <td class="column2"><?php echo $data->rates->GBP ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">Candian Dollar</td>
                                 <td class="column2"><?php echo $data->rates->CAD ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">Swiss Franc</td>
                                 <td class="column2"><?php echo $data->rates->CHF ?></td>
                             </tr>
                             <tr>
                                 <td class="column1">Mexican Peso</td>
                                 <td class="column2"><?php echo $data->rates->MXN ?></td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>

     <!--===============================================================================================-->
     <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/bootstrap/js/popper.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
     <!--===============================================================================================-->
     <script src="vendor/select2/select2.min.js"></script>
     <!--===============================================================================================-->
     <script src="js/main.js"></script>
 </body>

 </html>