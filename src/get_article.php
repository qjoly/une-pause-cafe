<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sanitize.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="background.css">
    <title>Simple Page</title>
</head>

<body>
    <section id="bg">
        <ul id="shape">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <div class="container">
                <div class="logo">
                    <img src="img/logo.png" alt="Logo">
                </div>


                <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["category"])) {
        $category = $_POST["category"];
        $rssFeedUrl = "";

        if ($category === "Linux") {
            $rssFeedUrl = "https://www.journalduhacker.net/t/linux.rss";
        } elseif ($category === "Development") {
            $rssFeedUrl = "https://www.journalduhacker.net/t/dev.rss";
        } else {
            echo "Invalid category selected.";
            exit;
        }

        // Fetch and process the RSS feed
        $rssData = simplexml_load_file($rssFeedUrl);

        if ($rssData) {
            // Get a random item from the RSS feed
            $randomItemIndex = rand(0, count($rssData->channel->item) - 1);
            $randomItem = $rssData->channel->item[$randomItemIndex];

            $title = (string)$randomItem->title;
            $url = (string)$randomItem->link;

            // Display the title and URL
            echo "<h2>$title</h2>";
            echo "<p><a href='$url' target='_blank'>$url</a></p>";
        } else {
            echo "Error fetching RSS feed.";
        }
    } else {
        echo "No category selected.";
    }
}
?>


                <script src="script.js"></script>
            </div>

        </ul>
    </section>
</body>

</html>