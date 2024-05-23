<?php
if(isset($_GET['search'])) {
    $search_query = $_GET['search'];


    $apiKey = 'AIzaSyBeQZUy8GzU3zZwZUH-xIKOgXx8fVYyqak';
    $cx = '420e075e70e384b6f';

    $url = "https://www.googleapis.com/customsearch/v1?key={$apiKey}&cx={$cx}&q={$search_query}";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    $items = $data['items'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<script async src="https://cse.google.com/cse.js?cx=420e075e70e384b6f">
</script>
<div class="gcse-search"></div>
<h2>My Browser</h2>
<form method="GET" action="index.php">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search" value=""><br><br>
    <input type="submit" value="Submit">
</form>
<?php
if(isset($items)) {
    foreach($items as $item) {
        echo "<h3>{$item['title']}</h3>";
        echo "<p>{$item['snippet']}</p>";
        echo "<a href=\"{$item['link']}\">{$item['link']}</a>";
    }
}
?>
</body>
</html>
