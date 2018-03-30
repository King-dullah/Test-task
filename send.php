<?php
require('db.php');
session_start();




if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if(isset( $_POST['date1']) && !empty( $_POST['date1']) and isset( $_POST['date2']) && !empty( $_POST['date2'])){
          $_SESSION['date1'] = $_POST['date1'];
          $_SESSION['date2'] = $_POST['date2'];
          //get the time interval
          $date1 =new DateTime( $_POST['date1']);
          $date2 =  new DateTime($_POST['date2']);
          $diff = $date1->diff($date2)->format('%m');
          $year = $date1->diff($date2)->format('%y');

          $result = $mysqli->query('SELECT * FROM clothes WHERE product_id=1')or die($mysqli->error);
          $data = $result->fetch_assoc();



if($year < 1){
if($diff  < 2){
          $newprice = $data['product_price'] - (0.5 *$data['product_price']  );
          $_SESSION['price'] = $newprice;
          $mysqli->query('UPDATE clothes SET product_price="$newprice" WHERE product_id=1');
          header("location: index.php");
}elseif($diff < 4){
          $newprice = $data['product_price'] + (0.5 *$data['product_price']  );
          $_SESSION['price'] = $newprice;
          $mysqli->query('UPDATE clothes SET product_price="$newprice" WHERE product_id=1');
          header("location: index.php");
}elseif($diff < 6){
          $newprice = $data['product_price'] * 2;
          $_SESSION['price'] = $newprice;
          $mysqli->query('UPDATE clothes SET product_price="$newprice" WHERE product_id=1');
          header("location: index.php");;
}elseif($diff <=8){
          $newprice = $data['product_price'] + (0.2 *$data['product_price']  );
          $_SESSION['price'] = $newprice;
          $mysqli->query('UPDATE clothes SET product_price="$newprice" WHERE product_id=1');
          header("location: index.php");;
}elseif($diff < 12){
          $newprice = $data['product_price'] - (0.2 *$data['product_price']  );
          $_SESSION['price'] = $newprice;
          $mysqli->query('UPDATE clothes SET product_price="$newprice" WHERE product_id=1');
          header("location: index.php");;
}
}else{
          $newprice = $data['product_price'] - (0.2 *$data['product_price']  );
          $_SESSION['price'] = $newprice;
          $mysqli->query('UPDATE clothes SET product_price="$newprice" WHERE product_id=1');
          header("location: index.php");;
}


}else{
          unset($_SESSION);
          session_destroy();
          header('location: index.php');
}
}
