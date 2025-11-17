<!-- 2. Create an OTP (One Time Password) generator:

Generate a 6-digit OTP
Generate 4 random OTPs
Display all OTPs    
   Expected Output:

    OTP Generator

    OTP 1: 482759

    OTP 2: 937264

    OTP 3: 156829

    OTP 4: 729481 -->
<?php
function generateOTP($length = 6) {
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= rand(0, 9);
    }
    return $otp;
}
echo "<h3>OTP Generator</h3>";
for ($i = 1; $i <= 4; $i++) {
    echo "OTP $i: " . generateOTP() . "<br>";
}   
?>