<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Clinic Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container mt-5">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-success text-white text-center">
                <h2>Welcome to the Clinic Management System</h2>
            </div>
            <div class="card-body p-4">
                <h4 class="text-center" style="color: #333;">Dear {{ $user->name }},</h4>
                <p style="font-size: 16px; color: #555; line-height: 1.6;">
                    We are delighted to welcome you to the Clinic Management System. Our platform is designed to streamline your medical records, appointments, and patient management processes, ensuring you can focus on providing the best care possible.
                </p>
                <p style="font-size: 16px; color: #555; line-height: 1.6;">
                    Should you have any questions or need support, our team is always here to assist you. We are committed to ensuring that you have a seamless and efficient experience with our system.
                </p>
                <p style="font-size: 16px; color: #555; line-height: 1.6;">
                    Thank you for choosing our platform to manage your clinic. We look forward to working together for a healthier future.
                </p>
                <!-- Optional button for login -->
                <!--
                <p class="text-center" style="margin-top: 30px;">
                    <a href="[Login URL]" class="btn btn-success" style="padding: 10px 20px; font-size: 16px;">Login to Your Account</a>
                </p>
                -->
            </div>
            <div class="card-footer bg-light text-center" style="font-size: 14px; color: #777;">
                &copy; 2024 Clinic Management System. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
