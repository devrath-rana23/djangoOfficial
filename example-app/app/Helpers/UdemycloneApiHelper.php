<?php

namespace App\Helpers;

class UdemycloneApiHelper
{

    public static function createCourse($data)
    {

        $curl = curl_init();

        $date_created = $data['date_created'];
        $title = $data['title'];
        $name = $data['name'];
        $stock = $data['stock'];
        $added = $data['added'];
        $title = $data['title'];
        $author = $data['author'];
        $image_url = $data['image_url'];

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('constants.UDEMYCLONE_API_URL'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"title\": \"$title\",\"author\": \"$author\",\"name\": \"$name\",\"added\": \"$added\",\"stock\": \"$stock\",\"image_url\": \"$image_url\",\"date_created\": \"$date_created\"}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response, true);
        }
    }
}
