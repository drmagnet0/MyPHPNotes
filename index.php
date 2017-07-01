<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    * {
      padding: 0;
      margin: 0;
    }
    body {
      padding: 10px;
    }
    table {
      border-collapse: collapse;
      width: 500px;
    }
    table tr td, table tr th {
      border: 0;
      border: 1pt solid #999;
      padding: 5px;
      text-align: left;
    }
    table tr th {
      background-color: #a4a4a4;
      color: white;
    }
    table tr:nth-child(2n) {
      background-color: #e4e4e4;
    }
    table tr:hover {
      background-color: yellow;
    }
  </style>
  <body>

    <table>
      <thead>
        <th>Name</th>
        <th>Sallary</th>
      </thead>
      <tbody>
    <?php

    $myEmployee = array('abdo ahmad' => 3000, 'mohamed ali' => 6000, 'hazem osama' => 2000, 'hend elsaied' => 1500);

    foreach ($myEmployee as $key => $value) {
      echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    ?>

      </tbody>
    </table>


    <?php

    //
    // $salaries = array(1000, 2000, 3000, 4000, 5000);
    // $employee = array('ahmed', 'mohamed', 'ali', 'mina', 'eman');
    //
    // echo "
    // <table>
    //   <thead>
    //     <tr>
    //       <th>name</th>
    //       <th>salary</th>
    //     </tr>
    //   </thead>
    //   <tbody>
    // ";
    // for ($i=0, $employeeCount = count($employee), $total = 0; $i < $employeeCount; $i++) {
    //   $total += $salaries[$i];
    //   echo "<tr><td>{$employee[$i]}</td><td>{$salaries[$i]} L.E</td></tr>";
    // }
    // echo "
    //     <tr><th>total is :</th><th>$total L.E</th></tr>
    //   </tbody>
    // </table>
    // ";

    // for ($i=0, $salariesCount = count($salaries); $i < $salariesCount; $i++) {
    //   echo '<p>' . ($i + 1) . '. ' . $salaries[$i] . '</p>';
    // }

    // echo "<br><br><br>";
    //
    // for ($i=0, $salariesCount = count($salaries), $total = 0; $i < $salariesCount; $i++) {
    //   $total += $salaries[$i];
    // }
    // echo '<p>' . $total . '</p>';


    ?>


  </body>
</html>
