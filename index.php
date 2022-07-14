<?php
error_reporting(0);
session_start();

$SellerKey = ""; // Your KeyAuth Seller Key - DON'T SHARE IT WITH ANYONE!
$KeyMask = "XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX";

$LinkVer1 = ""; // Link 1 TO Linkverise that returns here
$LinkVer2 = ""; // Link 2 TO Linkverise that returns here
$LinkVer3 = ""; // Link 3 TO Linkverise that returns here
$LinkVer4 = ""; // Link 4 TO Linkverise that returns here
$LinkVer5 = ""; // Link 5 TO Linkverise that returns here



if (time() - $_SESSION['FSTimeOne'] < 15 || !isset($_SESSION['FSTimeOne'])) {
    if (!isset($_SESSION['FSTimeOne'])) {
        $_SESSION['FSTimeOne'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KeyAuth Linkvertise Example</title>
        <link rel="stylesheet" href="MainDesign.css">
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer1; ?>">
    </head>

    <body>
        <div class="keysyscontainer">
            <div class="box">

                <center><span class="title">KeyAuth <span class="smool">1/5</span></span></center>


                <span class="text"> You will have to go through four linkvertise. The key will last around 10 minutes.
                    <span class="bold">Redirecting in 5 seconds...</span> </span>
                <span class="text"> No one likes advertisments, but going through this you will support the creators of the Creator of app.
                </span>
            </div>
        </div>
    </body>

    </html>


<?php
    die();
}

if (time() - $_SESSION['FSTimeTwo'] < 15 || !isset($_SESSION['FSTimeTwo'])) {
    if (!isset($_SESSION['FSTimeTwo'])) {
        $_SESSION['FSTimeTwo'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KeyAuth Linkvertise Example</title>
        <link rel="stylesheet" href="MainDesign.css">
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer2; ?>">
    </head>

    <body>
        <div class="keysyscontainer">
            <div class="box">

                <center><span class="title">KeyAuth <span class="smool">2/5</span></span></center>


                <span class="text"> You will have to go through four linkvertise. The key will last around 10 minutes.
                    <span class="bold">Redirecting in 5 seconds...</span> </span>
                <span class="text"> No one likes advertisments, but going through this you will support the creators of the Creator of app.
                </span>
            </div>
        </div>
    </body>

    </html>
<?php
    die();
};


if (time() - $_SESSION['FSTimeThree'] < 15 || !isset($_SESSION['FSTimeThree'])) {
    if (!isset($_SESSION['FSTimeThree'])) {
        $_SESSION['FSTimeThree'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KeyAuth Linkvertise Example</title>
        <link rel="stylesheet" href="MainDesign.css">
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer3; ?>">
    </head>

    <body>
        <div class="keysyscontainer">
            <div class="box">

                <center><span class="title">KeyAuth <span class="smool">3/5</span></span></center>


                <span class="text"> You will have to go through four linkvertise. The key will last around 10 minutes.
                    <span class="bold">Redirecting in 5 seconds...</span> </span>
                <span class="text"> No one likes advertisments, but going through this you will support the creators of the Creator of app.
                </span>
            </div>
        </div>
    </body>

    </html>

<?php
    die();
}

if (time() - $_SESSION['FSTimeFour'] < 15 || !isset($_SESSION['FSTimeFour'])) {
    if (!isset($_SESSION['FSTimeFour'])) {
        $_SESSION['FSTimeFour'] = time();
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KeyAuth Linkvertise Example</title>
        <link rel="stylesheet" href="MainDesign.css">
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer4; ?>">
    </head>

    <body>
        <div class="keysyscontainer">
            <div class="box">

                <center><span class="title">KeyAuth <span class="smool">4/5</span></span></center>


                <span class="text"> You will have to go through four linkvertise. The key will last around 10 minutes.
                    <span class="bold">Redirecting in 5 seconds...</span> </span>
                <span class="text"> No one likes advertisments, but going through this you will support the creators of the Creator of app.
                </span>
            </div>
        </div>
    </body>

    </html>

<?php
    die();
}

if (time() - $_SESSION['FSTimeFive'] < 15 || !isset($_SESSION['FSTimeFive'])) {
    if (!isset($_SESSION['FSTimeFive'])) {
        $_SESSION['FSTimeFive'] = time();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KeyAuth Linkvertise Example</title>
        <link rel="stylesheet" href="MainDesign.css">
        <meta http-equiv="refresh" content="5; url=<?php echo $LinkVer5; ?>">
    </head>

    <body>
        <div class="keysyscontainer">
            <div class="box">

                <center><span class="title">KeyAuth <span class="smool">5/5</span></span></center>

                <span class="text"> You will have to go through four linkvertise. The key will last around 10 minutes.
                    <span class="bold">Redirecting in 5 seconds...</span> </span>
                <span class="text"> No one likes advertisments, but going through this you will support the creators of the Creator of app.
                </span>
            </div>
        </div>
    </body>

    </html>
<?php
    die();
}

$GenResult = GenLicense($SellerKey, $KeyMask);
$Json = json_decode($GenResult);

if ($Json->success) { } else {
    die("Error: " . Json->message);
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

            <span class="text"> Thanks for going trought this Linkvertise system!
                Here is your Key / License: <span class="bold smool"><?php echo $Json->key ?></span></span>
            <button onclick="return copyToClipboard()" class="button Copy">Copy Key</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script>
        function copyToClipboard() {
            var e = "<?php echo $Json->key ?>";
            var tempItem = document.createElement('input');
            tempItem.setAttribute('type', 'text');
            tempItem.setAttribute('display', 'none');
            let content = e;
            if (e instanceof HTMLElement) {
                content = e.innerHTML;
            }
            tempItem.setAttribute('value', content);
            document.body.appendChild(tempItem);
            tempItem.select();
            document.execCommand('Copy');
            tempItem.parentElement.removeChild(tempItem);
            const notyf = new Notyf();
            notyf.success({
                message: "Successfully copied key to checkboard!",
                duration: 3500,
                dismissible: true
            });
        }
    </script>

    <?php
    function GenLicense($sellerKey, $keyMask)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://keyauth.win/api/seller/?sellerkey=" . $sellerKey . "&type=add&expiry=0.00694444444&mask=" . $keyMask . "&level=1&amount=1&format=json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    ?>

</body>
</html>
