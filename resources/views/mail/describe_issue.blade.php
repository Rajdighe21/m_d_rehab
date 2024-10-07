<!DOCTYPE html>
<html>

<head>
    <title>{{ $mailData['title'] }}</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
        <h1 style="text-align: center; color: #333;">{{ $mailData['title'] }}</h1>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Name:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $mailData['patient']->name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Email:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $mailData['patient']->email }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Phone:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $mailData['patient']->contact }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">PIN
                    Code:</td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $mailData['patient']->pincode }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd; background-color: #f9f9f9; font-weight: bold;">Query:
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $mailData['patient']->describe_issue }}</td>
            </tr>
        </table>

        <p style="text-align: center; color: #999; margin-top: 20px;">New Patient Query Received.</p>
    </div>
</body>

</html>
