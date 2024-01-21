<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Footer</title>
        <style>
            body{
    margin: 0;
    cursor: default;
}
footer{
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(0, 113, 211);
    color: whitesmoke;
    padding: 20px;
    color: rgb(1, 39, 72);
}
#logo{
    font-size: 25px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: rgb(1, 39, 72);
    text-decoration: none;
    padding-left: 20px;
}
#Copyright{
    font-size: 12px;
}
#mailIcon,
#messageIcon,
#whatsappIcon{
    width: 25px;
}
#contactDiv{
    display: flex;
    justify-content: space-between;
    padding: 0 30px;
}
#contactTexts{
    line-height: 6px;
    font-size: 13px;
}
#contactIcons a{
    margin: 0 10px;
}
        </style>
    </head>
    <body>
        <footer>
            <p id="logo">Learn/Teach From AnyWhere</p>
            <center><h3>Contact us</h3></center>
            <div id="contactDiv">
                <div id="contactTexts">
                   <p>Phone: +250 780 609 641</p>
                    <p>Address: 108 Nyarugenge, street201 Bisima</p>
                </div>
                            <div id="contactIcons">
                                <h3>We love to hear from you</h3>
                                <a href="sms:+250780609641"><img id="messageIcon" src="../icons/messenger.png" alt=""></a>
                                <a href="https://wa.me/+250780609641" target="_blank"><img id="whatsappIcon" src="../icons/whatsapp.png" alt=""></a>
                                <a href="mailto:toussiradukunda270@gmail.com"><img id="mailIcon" src="../icons/mail.png" alt=""></a>
                            </div>
            </div>
            <center id="Copyright">Copyright &copy; 2024 Toussaint</center>
        </footer>
    </body>
</html>