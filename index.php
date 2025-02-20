<?php
session_start();
error_reporting(0);

// Array of Linkvertise URLs
$redirectLinks = [
    "", // LinkVer1
    "", // LinkVer2
    "", // LinkVer3
    "", // LinkVer4
    "", // LinkVer5
];

$stepDelay = 5; // delay between links in seconds

// Initialize session variables if not already set
if (!isset($_SESSION['current_step'])) {
    $_SESSION['current_step'] = 0;
    $_SESSION['step_time'] = time();
}

$currentStep = $_SESSION['current_step'];

// If we haven't gone through all the steps, show the waiting/redirect page
if ($currentStep < count($redirectLinks)) {
    $elapsed = time() - $_SESSION['step_time'];
    if ($elapsed < $stepDelay) {
        // Show redirect page with a meta refresh after 5 seconds
        displayRedirectPage($currentStep, $redirectLinks[$currentStep], $stepDelay - $elapsed);
        exit;
    } else {
        // Time has elapsed; move to the next step
        $_SESSION['current_step']++;
        $_SESSION['step_time'] = time();
        header("Location: " . $redirectLinks[$currentStep]);
        exit;
    }
}

// Once all steps are completed, generate the license key.
$licenseResponse = genLicense();
$licenseData = json_decode($licenseResponse);

if (!$licenseData || !$licenseData->success) {
    die("Error: " . ($licenseData->message ?? "Unknown error"));
}

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KeyAuth Linkvertise Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <link rel="stylesheet" href="MainDesign.css">
</head>
<body>
  <div class="keysyscontainer">
    <div class="box">
      <center><span class="title">KeyAuth - Enjoy your license!</span></center>
      <span class="text">
        Thanks for going through this Linkvertise system!<br>
        Here is your Key / License: <span class="bold smool"><?php echo htmlspecialchars($licenseData->key); ?></span>
      </span>
      <button onclick="copyToClipboard()" class="button Copy">Copy Key</button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
  <script>
    function copyToClipboard() {
      const key = "<?php echo htmlspecialchars($licenseData->key); ?>";
      const tempInput = document.createElement('input');
      tempInput.style.position = 'absolute';
      tempInput.style.left = '-1000px';
      tempInput.style.top = '-1000px';
      tempInput.value = key;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand('copy');
      document.body.removeChild(tempInput);
      
      const notyf = new Notyf();
      notyf.success({
        message: "Successfully copied key to clipboard!",
        duration: 3500,
        dismissible: true
      });
    }
  </script>
</body>
</html>

<?php
// Function to display the redirect page for each step.
function displayRedirectPage($step, $redirectUrl, $secondsLeft) {
    $stepNumber = $step + 1;
    $totalSteps = 5;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>KeyAuth Linkvertise Example</title>
      <link rel="stylesheet" href="MainDesign.css">
      <!-- Refresh in 5 seconds or the remaining time -->
      <meta http-equiv="refresh" content="<?php echo min(5, $secondsLeft); ?>; url=<?php echo $redirectUrl; ?>">
    </head>
    <body>
      <div class="keysyscontainer">
        <div class="box">
          <center>
            <span class="title">KeyAuth <span class="smool"><?php echo $stepNumber; ?>/<?php echo $totalSteps; ?></span></span>
          </center>
          <span class="text">
            You will have to go through <?php echo $totalSteps; ?> Linkvertise pages. The key will last around 10 minutes.
            <span class="bold">Redirecting in <?php echo min(5, $secondsLeft); ?> seconds...</span>
          </span>
          <span class="text">
            Although advertisements are not fun, going through these will help support the app's creators.
          </span>
        </div>
      </div>
    </body>
    </html>
    <?php
}

// Function to generate the license key using cURL
function genLicense() {
    // Configuration
    $sellerKey = ""; // Your KeyAuth Seller Key - DON'T SHARE IT!
    $keyMask = "*****-*****-*****-*****-*****"; // * = random characters
    $format    = "JSON";
    $expiry    = "1";         // Expiry in days
    $level     = "1";         // License level
    $amount    = "1";         // Number of licenses to generate
    $owner     = "Username";  // Owner of the license
    $character = "1";         // 1 = upper/lowercase, 2 = uppercase, 3 = lowercase
    $note      = "Cool note"; // Optional note

    // Build the URL with all parameters
    $url = "https://keyauth.win/api/seller/?sellerkey=" . urlencode($sellerKey)
         . "&type=add"
         . "&expiry=" . urlencode($expiry)
         . "&mask=" . urlencode($keyMask)
         . "&level=" . urlencode($level)
         . "&amount=" . urlencode($amount)
         . "&format=" . urlencode($format)
         . "&owner=" . urlencode($owner)
         . "&character=" . urlencode($character)
         . "&note=" . urlencode($note);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    $result = curl_exec($ch);
    
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        die("cURL Error: " . $error_msg);
    }
    
    curl_close($ch);
    return $result;
}
?>
