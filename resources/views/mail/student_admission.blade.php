<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admission Confirmation</title>
</head>

<body>
    <h1>Admission Confirmation</h1>
    <p>Thank you for your Admission.</p>
    <p>Your Admission has been successfully processed with the following details:</p>

    <ul>
        <li>Student ID: {{ $user_id }}</li>
        <li>Student Name: {{ $student_name }}</li>
        <li>Student NID: {{ $student_nid }}</li>
        <li>Student Email: {{ $student_email }}</li>
        <li>Student Mobile: {{ $student_mobile }}</li>
        <li>Student Gender: {{ $student_gender }}</li>
        <li>Father Name: {{ $father_name }}</li>
        <li>Father NID: {{ $father_nid }}</li>
        <li>Father Mobile: {{ $father_mobile }}</li>
        <li>Mother Name: {{ $mother_name }}</li>
        <li>Mother NID: {{ $mother_nid }}</li>
        <li>Mother Mobile: {{ $mother_mobile }}</li>
        <li>Address Street: {{ $address_street }}</li>
        <li>Address Post Office: {{ $address_postOffice }}</li>
        <li>Address Upazila: {{ $address_upazila }}</li>
        <li>Address Zila: {{ $address_zila }}</li>
        <li>Class: {{ $student_class }}</li>
        <li>Class Roll: {{ $student_roll }}</li>
        <li>Reg:
            @if (!is_null($student_reg))
                {{ $student_reg }}
            @else
                No Reg found.
            @endif
        </li>
        <li>Login Password: {{ $password }}</li>


        <!-- Add more details here -->
    </ul>

    <p>Use your Student ID for login mobile app or contact your class teacher.</p>

    <br>
    <br>
    <br>
    <p>If you have any questions or concerns, please feel free to contact us.</p>
    <p>Mobile: 01621833839</p>

    <p>Best regards,</p>
    <p>Best High School</p>
</body>

</html>
