<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RSS reader applikation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Top 10 Nyheder fra Berlinske!!</h1>
<br>
<br>

<?php
    $html = "";
    $url = simplexml_load_file("http://www.berlingske.dk/rss/senestenyt.xml#");

    for ($i = 0; $i < 10; $i++){
        $title = $url->channel->item[$i]->title;
        $description = $url->channel->item[$i]->description;
        $link = $url->channel->item[$i]->link;
        $html .= "<div><h3>$title</h3><p>$description</p><p><a href='$link'>Læs mere</a></p></div>";


    }
    echo $html;
?>

</body>
</html>