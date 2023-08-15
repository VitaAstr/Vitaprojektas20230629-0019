<?php
    require __DIR__ . '/../app/src/app.php';
?>
<?php
if(isset($_POST['submit'])) {
    header("Location: ../public/issiuntus.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SUMMER in Pervalka</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../app/css/style.css">
<script src="https://kit.fontawesome.com/adaa5eca50.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
<link href="css/style.css" rel="stylesheet">  <!--="../app/css/style.css"-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" defer></script>
<script src="js/fancybox-custom.js" defer></script>
<script>
    function myFunction() {
        var x = document.getElementById("mMenu");
            if(x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
</script>
</head>
<body>
    <?php
            include('../app/views/header.php');
            include('../app/views/content.php');   
            include('../app/views/footer.php');   
    ?>
</body>
</html>