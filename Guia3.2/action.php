<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Result Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

      <div>
        <table>
          <!-- Your Basic Info -->
          <tr>
            <th colspan="2" class="header-row-color">YOUR BASIC INFO</th>
          </tr>

          <tr>
            <th>Name</th>
            <td><?php echo $parameters['userName']; ?></td>
          </tr>
          <tr>
            <th>Email</th>
            <td><?php echo $parameters['userEmail']; ?></td>
          </tr>
          <tr>
            <th>Password</th>
            <td><?php echo $parameters['userPassword']; ?></td>
          </tr>
          <tr>
            <th>Birth-day</th>
            <td><?php echo $parameters['userBithday']; ?></td>
          </tr>
          <tr>
            <th>Sex</th>
            <td>
              <?php
                if(isset($parameters['userSex'])) 
                  echo $parameters['userSex'] == "male" ? "Masculino":  "Femenino"; 
                else 
                  echo '-Sin indicar-';
              ?>
            </td>
          </tr>
            <!-- Your Profile -->
          <tr>
              <th colspan="2" class="header-row-color">YOUR PROFILE</th>
          </tr>

          <tr>
            <th>About you</th>
            <td><?php 
                  if(isset($parameters['userInformation']) && $parameters['userInformation'] != "") 
                    echo $parameters['userInformation']; 
                  else 
                    echo '-Sin completar-'; 
                ?>
            </td>
          </tr>
          <tr>
            <th>Role</th>
            <td><?php echo $parameters['role']; ?></td>
          </tr>
          <tr>
            <th>Interests</th>
            <td>
              <?php
              $initValue = "Interests";
              foreach($parameters as $parameterName=> $parameterValue){
                  if(substr($parameterName, 0, strlen($initValue)) === $initValue){
                    $nameValue = ltrim($parameterName, $initValue);
                    echo ucfirst($nameValue) . '<br>';
                  }                    
              }
              ?>
            </td>
          </tr>
        </table>

        <br>
        <a href="userForm.html">Go Back</a>
      </div>
    </body> 
</html>

