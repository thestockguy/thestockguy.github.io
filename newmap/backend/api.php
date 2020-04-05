<?php
  if(isset($_GET["method"]) && $_GET["method"] == "getBloodmapData"){
    $cursor = "";
    if(isset($_GET["cursor"]) && $_GET["cursor"] != ""){
      $cursor = $_GET["cursor"];
    }

    echo '{"total": 150, "cursor": "", "souls": [{"name": "Bruce", "message": "for spy calls 4/17"}, {"name": "Stan", "message": "for spy calls 4/17"}, { "name": "Randy", "message": "for spy calls 4/17"}]}';
  }
?>
