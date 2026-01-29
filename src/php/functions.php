<?php

/**
 * Parse a JSON file and extract it's content
 * @return array Return JSON content as an array
 */
function getVideosFromJSON() {
    try {
        $fileContent = file_get_contents("./data/data.json");
        $json = json_decode($fileContent, true);
        return $json["videos"];
    } catch (Exception $e) {
        echo "Something went wrong : " . $e;
        return $e;
    }
}

/**
 * Loop through an array and create an HTML element for every element of the array
 * There is a invisible div in front of the embeded video which redirect to the watch video
 */
function createHTMLElementFromJSON() {
    $videos = getVideosFromJSON();
    $html = "";
    foreach ($videos as $video) {
        foreach ($video as $key => $embed) {
            $html = $html . '
            <div class="watchVideo">
                <a class="redirectToWatch" href=/watch.php?watch=' . $key .'></a>
                <div class="video">
                    <iframe src="' . $embed . '" frameborder="0"></iframe>
                </div>
            </div>
            ';
        }
    }
    echo $html;
}

/**
 * Get the "watch" parameter from the url and add and iframe with the linked video
 */
function displayVideo() {
    $tab = getVideosFromJSON();
    $videos = $tab[0];
    $watchId = $_GET["watch"] ?? "";
    
    if (array_key_exists($watchId, $videos) && $watchId !== null) {
        $videoUrl = $videos[$watchId];

        echo '
        <div class="video-player-container">
            <iframe
                height="477"
                width="850"
                src="' . $videoUrl .'"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        ';
    } else {
        echo "<script>window.location.href='/'</script>";
        die();
    }
}

/**
 * Parse a JSON file and get the videos from the Array
 */
function parseJSONToGetVideos(){
    $json = file_get_contents('data.json'); 

    if ($json === false) {
        echo 'Error reading the JSON file';
    }

    $json_data = json_decode($json, true); 

    foreach ($json_data['videos'][0] as $key => $value) {
        if ($value === "1") {
            echo $key;
            echo $value;
        }
    }
}
?>