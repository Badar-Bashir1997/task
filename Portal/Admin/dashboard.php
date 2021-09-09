<?php
  include("lib/DBConn.php");
  include("lib/variables.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title><?php echo SiteTitle; ?></title> 
    <meta charset="utf-8">
<link rel="shortcut icon" href="images/p3.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body >
    <?php
include("includes/header.php");
?>
    <?php
include("includes/slider.php");
?>

<?php
include("complaints.php");
include("Total Complaints.php")
?>
<?php
include("includes/footer.php");
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript">
        $(function () {
            $('[id*=cnic]').on('keypress', function () {
                var number = $(this).val();
                if (number.length == 5) {
                    $(this).val($(this).val() + '-');
                }
                else if (number.length == 13) {
                    $(this).val($(this).val() + '-');
                }
            });
        });
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>