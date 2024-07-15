<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Your Email</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #e9ecef;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; border: 0; border-spacing: 0; background-color: #e9ecef;">
        <tr>
            <td align="center" style="padding: 20px;">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; border: 1px solid #cccccc; border-spacing: 0; background-color: #ffffff;">
                    <tr>
                        <td align="center" style="padding: 0; background-color: #8e44ad; color: white;">
                            <table role="presentation" style="width: 100%; border-collapse: collapse; border: 0; border-spacing: 0;">
                                <tr>
                                    <td style="padding: 20px 0 20px 20px; text-align: left;">
                                        <img src="{{ asset('images/logotour2.png') }}" alt="Logo" style="height: 50px;">
                                    </td>
                                    <td style="padding: 40px 20px 40px 0; text-align: center;">
                                        <h1 style="margin: 0; font-size: 24px; font-weight: bold;">New Contact Us Form Submission</h1>
                                    </td>
                                </tr>
                            </table>
                        </td>  
                    </tr>
                    <tr>
                        <td style="padding: 36px 30px 42px 30px;">
                            <p style="margin: 0 0 20px 0;">Hello,</p>
                            <p style="margin: 0 0 20px 0;">Dear user,You have received a new message from the contact us form on your website. Here are the details:</p>
                            <table class="table table-bordered" style="margin-bottom: 20px;">
                              <tr>
                                  <th>Name</th>
                                  <td>{{ $details['name'] }}</td>
                              </tr>
                              <tr>
                                  <th>Email</th>
                                  <td>
                                    <p style="text-align: center; margin: 0 0 20px 0;">
                                      <a href="{{ $details['email'] }}" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">Verify Email Address</a>
                                    </p>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Subject</th>
                                  <td>{{ $details['subject'] }}</td>
                              </tr>
                              <tr>
                                  <th>Message</th>
                                  <td>{{ $details['message'] }}</td>
                              </tr>
                          </table>
                            <p style="margin: 0 0 20px 0;">We can't wait to help you elevate your experience. Thank you for being a part of Blog Website!!</p>
                            <p style="margin: 0;">Best regards,<br>Blog Website Team</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 30px; background-color: #f1f1f1;">
                            <p style="margin: 0; font-size: 14px; color: #6c757d;">Copyright © 2024 Blog Website, All rights reserved.</p>
                            <p style="margin: 0; font-size: 14px; color: #6c757d;">Our mailing address is: Blog.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
