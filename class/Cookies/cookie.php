// A cookie is a small piece of data stored on the user's computer by the web browser while browsing a website. It is used to remember information about the user between requests or visits.

// A session is a way to store information on the server for individual users. Unlike cookies, session data is not stored on the user's computer but on the server, and it is identified by a unique session ID passed between the client and server.

<?php

// if (!isset($_GET['loaded'])) {
//     setcookie("fruit", "apple", time() + 86400);
//     setcookie("vegetable", "watermelon", time() + 86400);
//     exit();
// }

// setcookie("fruit", "apple", time() + 86400);
setcookie("vegetable", "watermelon", time() + 3600);

// print_r($_COOKIE);

// if (isset($_COOKIE["fruit"])) {
//     echo $_COOKIE["fruit"];
// }
// if (isset($_COOKIE["namrata"])) {
//     echo $_COOKIE["namrata"];
// }




// print_r($_COOKIE);
print_r($_COOKIE);
