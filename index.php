<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="general_style.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="car_specifications_page.css">
    <link rel="stylesheet" type="text/css" href="order.css">    
    <title>Предварительная версия</title>
</head>
<body id="page">
    <?php 
    require('header.php');
    switch ($_GET['page']) {
        case 'info':
            require('info.php');
            break;
        case 1:
            require('car_specifications_page.php');
            break;
        case 2:
            require('car_specifications_2_page.php');
            break;   
        case order:
            require('order.php');
            break;
        default:
            require('info.php');
            break;
    }
    require('footer.php');
    ?>
</body>
</html>
