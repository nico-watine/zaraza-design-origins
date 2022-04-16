<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/lavalamp_full.css" type="text/css" media="screen">
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>

<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lavalamp.js"></script>
    <script type="text/javascript">
$(function() {
    $.easing.easeOutBack = function (x, t, b, c, d, s) {
        if (s === undefined) s = 1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
    };

    $('.lavalamp-full').lavalamp({
        blur: function() {
            $(this).addClass('blur');
        },
        focus: function() {
            $(this).removeClass('blur');
        },
        animation: Modernizr.testAllProps('transition') ? 0 : {duration: 2000, easing: 'easeOutBack'}
    });
});

</script>
</head>

<body>
                    <ul class="lavalamp-full">
                        <li ><a href="index.html">Home</a></li>
                        <li class="current"><a href="#">Gallery</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
</body>
</html>
