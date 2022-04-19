<?php if (isset($_POST['view'])) {
    $data = new VolsController();
    $passengers = $data->getpassengers();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" integrity="sha512-E+53kXnJyuZFSz75xSmTfCpUNj3gp9Bd80TeQQMTPJTVWDRHPOpEYczGwWtsZXvaiz27cqvhdH8U+g/NMYua3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container">
  <h2 class="text-center mt-5" style="font-size:50px;">My bookings</h2>
  <section class="container mt-5">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Birthday</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($passengers as $passenger) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $passenger['fullname'] .'</td>';
                echo '<td>' . $passenger['birthday'] . '</td>';
                echo '</tr>';
                $i++;
            }
            ?>
           
        </tbody>
    </table>
    </section>
</div>
</body>





