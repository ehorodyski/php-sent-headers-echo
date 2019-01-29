<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP: Sent Headers/Cookies Echo</title>
</head>
<body>
  <h1>Request Headers</h1>
  <table>
    <tr>
      <thead>
        <td>Header</td>
        <td>Value</td>
      </thead>
    </tr>

  </table>


  <?php

  $headers = apache_request_headers();
  foreach ($headers as $header => $value) {
  echo "<pre>";
  echo "$header : $value";
  echo "</pre>";
  }

  ?>
</body>
</html>

