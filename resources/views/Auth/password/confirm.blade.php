{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header">Verify your email address</div>
                <div class="card-body">
                    A fresh verification link has been send to your email address
                    <a href="{{url('/reset-password/'.$token)}}">Click here</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html
  lang="en"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:v="urn:schemas-microsoft-com:vml"
  xmlns:o="urn:schemas-microsoft-com:office:office"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="x-apple-disable-message-reformatting" />
    <title></title>

    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,600"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Web Font / @font-face : BEGIN -->
    <!--[if mso]>
      <style>
        * {
          font-family: "Roboto", sans-serif !important;
        }
      </style>
    <![endif]-->

    <!--[if !mso]>
      <link
        href="https://fonts.googleapis.com/css?family=Roboto:400,600"
        rel="stylesheet"
        type="text/css"
      />
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->

    <style>
      /* What it does: Remove spaces around the email design added by some email clients. */
      /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
      html,
      body {
        margin: 0 auto !important;
        padding: 0 !important;
        height: 100% !important;
        width: 100% !important;
        font-family: "Roboto", sans-serif !important;
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
      table table table {
        table-layout: auto;
      }
      a {
        text-decoration: none;
      }
      img {
        -ms-interpolation-mode: bicubic;
      }
    </style>
  </head>

  <body
    width="100%"
    style="
      margin-top: 50px !important;
      padding: 0 !important;
      mso-line-height-rule: exactly;
      background-color: #f5f6fa;
    "
  >
    <center style="width: 100%; background-color: #f5f6fa">
      <table
        width="100%"
        border="0"
        cellpadding="0"
        cellspacing="0"
        bgcolor="#f5f6fa"
      >
        <tr>
          <td style="padding: 40px 0">
            <table
              style="
                width: 100%;
                max-width: 620px;
                margin: 0 auto;
                background-color: #ffffff;
              "
            >
              <tbody>
                <tr>
                  <td style="text-align: center; padding: 30px 30px 15px 30px">
                   
                      <h2
                        style="
                          font-size: 18px;
                          color: #f7444e;
                          font-weight: 600;
                          margin: 0;
                        "
                      >
                        Reset Password
                      </h2>
                  
                  </td>
                </tr>
                <tr>
                  <td style="text-align: center; padding: 0 30px 20px">
                   
                    <p style="margin-bottom: 25px">
                      Click on the link blow to reset tour password.
                    </p>
                    <a
                      href="{{url('/reset-password/'.$token)}}"
                      style="
                        background-color: #f7444e;
                        border-radius: 4px;
                        color: #ffffff;
                        display: inline-block;
                        font-size: 13px;
                        font-weight: 600;
                        line-height: 44px;
                        text-align: center;
                        text-decoration: none;
                        text-transform: uppercase;
                        padding: 0 25px;
                      "
                      >Reset Password</a
                    >
                  </td>
                </tr>
                <tr>
                  <td style="text-align: center; padding: 20px 30px 40px">
                    <p>
                      If you did not make this request, please contact us or
                      ignore this message.
                    </p>
                    <p
                      style="
                        margin: 0;
                        font-size: 13px;
                        line-height: 22px;
                        color: #9ea8bb;
                      "
                    >
                      This is an automatically generated email please do not
                      reply to this email. If you face any issues, please
                      contact us at hoangdeptraibodoiqua4321@gmail.com
                    </p>
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
