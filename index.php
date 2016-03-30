<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="general_style.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="car_specifications_page.css">
    <link rel="stylesheet" type="text/css" href="pages/order.css">    
    <title>ГарантАвто</title>
</head>
<body id="page">
    <?php 
    require('feedback_form.php');
    require('header.php');
    switch ($_GET['page']) {
        case 'sel_del':
            require('pages/sel_del.php');
            break;
        case 'ransom':
            require('pages/ransom.php');
            break;
        case 'spare_part':
            require('pages/spare_part.php');
            break;
        case 'protection':
            require('pages/protection.php');
            break;   
        case 'contact':
            require('pages/contact.php');
            break; 
        case 'info':
            require('pages/info.php');
            break;
        default:
            require('pages/main.php');
            break;
    }
    require('footer.php');
    ?>
</body>
</html>
