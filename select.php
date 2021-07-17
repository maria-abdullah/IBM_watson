<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="bootstrap.min.css" rel="stylesheet">

<style>

body {

  display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: sans-serif;
	font-size: 14px;
	background:#272727;

}

h1 {

  text-align: center;
  color: #fff;
  margin-top: 20px;
  font-size: 50px;
  font-weight: 100;
  letter-spacing: 12px;
  border-bottom: 1px solid #15f4ee;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
  margin-left: auto;
  margin-right: auto;
 color: #3cffed; 
   
}

th,td{

  text-align: center;
  font-size: 20px;

}

.wave{
  position: fixed;
	top: 140px;
	left: 7in;
  height: 70%;
	z-index: -1;
}

</style>
</head>

<body>
 <div>
    <h1> Direction Value </h1>
 </div>
 <br><br>
     <div class="container">
        <div class="row justify-content-ceneter">
            <div class="col-md-5">
               <div class="card mt-5">
                   <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered">
                                 <thead>
                                        <tr>
                                        <th> Direction </th>
                                        </tr>
                                 </thead>

                                 <tbody>

                                    <?php

                                    define("DB_SERVER", "localhost");
                                    define("DB_USER"  , "root");
                                    define("DB_PASS"  , "");
                                    define("DB_NAME"  , "base");
                       
                                   $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
                                   if ($conn->connect_error) {
                                   die("Connection failed: " . $conn->connect_error);
                                    }
      
                                  $query = "SELECT * FROM directions ORDER BY id DESC LIMIT 1";
                                  $query_run = mysqli_query($conn, $query);

                                 if(mysqli_num_rows($query_run)>0)
                                   {
                                  foreach($query_run as $row)
                                     {

                                     ?>
                                     <tr>

                                      <td> <?= $row['direction'] ?>  </td>
                                    
                                     </tr>
                                     <?php
                                      }
                                  }

                                    else {
                                     ?>
                                      <td>
                                          No Recouder Found 
                                      <td>
                                     <?php  }
                                     
                                     ?>
                              </tbody>
                            </table>
                         </div>
                      </div>
                   </div>
               </div>
            </div>
        </div>
       <img class="wave" src="img.svg">
  </body>
</html> 

 