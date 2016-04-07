<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="general_style.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="pages/order.css">
    <link rel="stylesheet" type="text/css" href="feedback_form.css">   
    <title>ГарантАвто</title>
</head>
<body id="page">
    <?php
    require('header.html');
    switch ($_GET['page']) {
        case 'sel_del':
            require('pages/sel_del.html');
            break;
        case 'ransom':
            require('pages/ransom.html');
            break;
        case 'protection':
            require('pages/protection.html');
            break;   
        case 'spare_part':
            require('pages/spare_part.html');
            break;
        case 'contact':
            require('pages/contact.html');
            break; 
        case 'info':
            require('pages/info.html');
            break;
        default:
            require('pages/main.html');
            break;
    }
    require('footer.html');
    require('feedback_form.php');
    ?>
</body>
</html>
