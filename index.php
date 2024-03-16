<html>
<head>
  <title>Document</title>
</head>
<body>

<?php

require "Discord.php"; // Adjust the path as necessary

return function ($req, $res) {
    // You may need to adjust your Discord.php include path
    include "Discord.php";
    
    $sendembed = new Discord();
    
    // Executes the function
    $sendembed->Visitor();
};
</body>
</html>

