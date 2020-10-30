<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>PHP Exercises</title>
</head>
<body>
<?php
    $a = $_GET['name'];
    $b = $_GET['email'];
    $c = $_GET['gt'];
    $e = $_GET['count'];
    $d = $_GET['internet'];
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5 my-5 mx-2 mx-sm-auto border rounded px-3 py-3">
                <h5 style="color:green"; class="text-center mb-3">Confirm Information</h5>
                <form method="get">
                    <div class="form-group">
                        <label for="name" style="color:green; font-weight:bold">Your name</label><br>
                        <?php echo "$a";?>
                    </div>
                    <div class="form-group">
                        <label for="email" style="color:green; font-weight:bold">Your email</label><br>
                        <?php echo "$b";?>
                    </div>
                    <div class="form-group" name="gt">
                        <legend class="col-form-label" style="color:green; font-weight:bold">Gender</legend><br>
                        <?php echo "$c";?>
                    </div>
                    <div class="form-group"  name="internet">
                        <legend class="col-form-label" style="color:green; font-weight:bold" name="internet">Favorite web browsers</legend>
                        <?php echo "$d";?>
                    <div class="form-group" name="os">
                        <legend class="col-form-label" style="color:green; font-weight:bold" name="os">Prefered Operating System</legend>
                        <?php echo "$e";?>
                    </div>
					<tr>
						<td><input type="submit" name="submit"></td>
					</tr>
        </table> 
    </form>
</body>
</html>