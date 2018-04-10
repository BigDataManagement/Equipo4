<?php

$json = fopen("data.json", "w") or die("Unable to open file!");
fwrite($json, "[\n");
$movie_id = "";
$cont = 0;
if ($file = fopen("combined_data_4_Clean.txt", "r")) {
    while (!feof($file)) {
        $line =  trim(preg_replace('/\s\s+/', ' ', fgets($file)));

        if (strpos($line, ':') !== false) {
            $movie_id = rtrim($line, ":");
            $cont = 0;
        } else {
            //$line = str_replace(",", "\",\"", $line);
            switch ($cont) {
            case 0:
                $line_clean = new stdClass();
                $line_clean->movie_id = (int) $movie_id;
                $line_clean->customer_id = (int) $line;
                $cont++;

                break;
            case 1:
                $line_clean->rating = (int) $line;
                $cont++;


                break;
            case 2:
                $line_clean->date = (string) str_replace(" ", "-", $line);
                fwrite($json, json_encode($line_clean).",\n");

                $cont = 0;


                break;
            default:
                echo "¿Error?";
                break;
            }



        }
    }
    fclose($file);
}
fwrite($json, "]");