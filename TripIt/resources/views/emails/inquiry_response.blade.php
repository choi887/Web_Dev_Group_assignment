<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>

    <style>
        /* CSS styles here */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Helvetica Neue', Helvetica, sans-serif;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        a {
            text-decoration: none;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        .text-sm {
            font-size: 16px;
        }

        .text-lg {
            font-size: 18px;
        }
    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
    <center style="width: 100%; background-color: #e3f4ff;">
        <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #e3f4ff">
            <tr>
                <td style="padding: 44px 0;">
                    <table style="width:100%;max-width:700px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:24px">
                                    <a href="#" target="blank">
                                        <x-application-logo />
                                    </a>
                                    <p class="text-lg" style="color: black; font-weight:bold;">Reply to Enquiry Ticket:
                                        <span style="color: #33a0e9;">{{ $enquiry_id }}</span>
                                    </p>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:700px;margin:0 auto; background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="padding: 44px">
                                    <p class="text-sm" style="margin-bottom: 10px; color: black;">Hi <span
                                            style="color: #33a0e9;">{{ $name }}</span>,</p>
                                    <p class="text-sm" style="margin-bottom: 10px; color: black;">{{ $response }}
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:24px 20px 0;">
                                    <p class="text-sm" style="color: #2b3f8a;">Copyright © 2024 TripIt. All rights
                                        reserved.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
