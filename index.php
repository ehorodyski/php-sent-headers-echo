<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP: Sent Headers/Cookies Echo</title>
  <style>
    h1 {
      font: normal 24px Arial, sans-serif;
    }
    table {
        border: solid 1px #DDEEEE;
        border-collapse: collapse;
        border-spacing: 0;
        font: normal 13px Arial, sans-serif;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
  </style>
</head>
<body>
  <h1>Request Headers</h1>
  <table>
      <thead>
        <tr>
          <td>Header</td>
          <td>Value</td>
        </tr>
      </thead>
      <tbody>
        <?php
          $headers = apache_request_headers();
          foreach ($headers as $header => $value) {
            echo "<tr><td><pre>$header</pre></td><td><pre>$value</pre></td></tr>";
          }
        ?>
  </tbody>
  </table>
  <h1>Request Cookies</h1>
  <table>
    <thead>
      <tr>
        <td>Name</td>
        <td>Value</td>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($_COOKIE as $name => $value) {
          echo "<tr><td><pre>$name</pre></td><td><pre>$value</pre></td></tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>

