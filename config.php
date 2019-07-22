<?php
if (isset($_GET['url']) && isset($_GET['layer'])) {
    $config_file = fopen("config.json", "w");
    $txt = "{\"url\": \"" . $_GET['url'] . "\", \"layer\": " . $_GET['layer'] . "}";
    fwrite($config_file, $txt);
    fclose($config_file);
}
?>

<form action="config.php">
    URL: <input type="text" name="url" /></br>
    Layer: <input type="text" name="layer" /></br>
    <button type="submit">Submit</button>
</form>