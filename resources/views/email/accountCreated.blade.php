<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CCS Learning Management System!</title>
    <style>
        .navbar{
            text-align: center;
            background: #f5f8fa;
            padding: 10px;
            border-bottom: 3px solid #edeff2;
        }
        .footer{
            text-align: center;
            background: #f5f8fa;
            padding: 10px;
            border-bottom: 3px solid #edeff2;
            color: #bbbfc3;
            font-weight: bold;
            font-size: 12px;
        }
        .lmstag{
            color: #bbbfc3;
            font-weight: bold;
            text-decoration: none;
            font-size: 19px;
        }
    </style>
</head>

<body style="padding:0px;margin:0px;font-family:'Helvetica Neue', Sans-serif, Arial;background-image:url({{ asset('img/email-bg.jpg') }})">
    <div class="navbar">
        <p>
            <a href="http://ccslms.online" class="lmstag" style="color: #bbbfc3;">
                Wireless Access for Health
            </a>
        </p>
    </div>
    <div style="width:100%;">
        <div style="width:600px; background-color:#ffffff;margin:0 auto;padding:35px;color:#333333">
            <h1 style="font-size: 19px;font-weight: bold;">
                Hi {{ $user->name() }}!
            </h1>
            <p style="font-size: 16px; line-height: 1.5em; color: #84888d;">
                Welcome to Wireless Access for Health!
            </p>

            <p style="font-size: 16px; line-height: 1.5em; color: #84888d;">
                Account Information:
            </p>

            <p style="font-size: 16px; line-height: 1.5em; color: #84888d;">
                Email: {{ $user->email }}
            </p>

            <p style="font-size: 16px; line-height: 1.5em; color: #84888d;">
                Password: {{ $password }}
            </p>

            <p style="padding-bottom:0px;margin-bottom:0px;margin-top:30px;color: #84888d;font-size: 16px;line-height: 1.5em;">
                Regards,
            </p>
            <p style="color: #84888d;font-size: 16px;line-height: 1.5em;">
               Wireless Access for Health
            </p>
        </div>
    </div>
        <div class="footer">
            <p>&copy; 2019 Wireless Access for Health. All rights reserved.</p>
        </div>
</body>

</html>
