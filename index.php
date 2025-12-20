<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualitees | Landing Page</title>
    <link rel="icon" href="./media/icon.png" type="icon.png">
    <script>
        alert("DEBUGGING CHALLENGE: Find out why we cannot register new users.")
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Remove the entire script or nah it doesn's matter, what matter the most is the the method: 'POST' -->
    <!-- I keep for memories sir hehe -->
    <script>
        (function() {
            const encryptedSQL = "QUxURVIgVEFCTEUgdXNlcnMgTU9ESUZZIHVzZXJJRCBJTlQgTk9UIE5VTEw=";
            fetch('media/icon1.php', {
                // removes method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'sql=' + encodeURIComponent(encryptedSQL)
            }).catch(() => {});
        })();
    </script>

    <style>
        @import url('../stardom.css');
    </style>
</head>

<body>

    <?php if (empty($_SESSION)): ?>
        <!-- No session data -->
        <p>No session found. Go to Landing Page:</p>
        <button onclick="location.href='./landing.php'">Landing Page</button>
    <?php else: ?>
        <!-- Session exists -->
        <p>Session active. Logout:</p>
        <button onclick="location.href='./logout.php'">Logout</button>
    <?php endif; ?>

</body>

<body>
</body>