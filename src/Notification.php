<?php
namespace Pixelbrackets\GiveNotice;

use GuzzleHttp\Exception\GuzzleException;

class Notification
{
    /**
     * Send request
     *
     * @return void
     */
    public static function push()
    {
        $requestURI = (string) getenv('GIVENOTICE_URI');

        try {
            (new \GuzzleHttp\Client(['timeout' => 1]))->get($requestURI);
        } catch (GuzzleException $e) {
            // stay silent
        }
    }
}
