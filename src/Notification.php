<?php
namespace Pixelbrackets\GiveNotice;

use GuzzleHttp\Exception\GuzzleException;

class Notification
{
    /**
     * Send request
     *
     * @param string $uri Overwrite default URI to send request to
     *
     * @return void
     */
    public static function push($uri = null)
    {
        $requestURI = (string) ($uri ?? getenv('GIVENOTICE_URI'));
        if (empty($requestURI)) {
            return;
        }

        try {
            (new \GuzzleHttp\Client(['timeout' => 1, 'headers' => ['User-Agent' => 'GiveNoticeClient']]))->get($requestURI);
        } catch (GuzzleException $e) {
            // stay silent
        }
    }
}
