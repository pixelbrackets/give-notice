<?php

use Pixelbrackets\GiveNotice\Notification;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
    public function testNotificationIsSilent()
    {
        $this->assertEmpty(Notification::push());
        putenv('GIVENOTICE_URI=http://localhost');
        $this->assertEmpty(Notification::push());
        putenv('GIVENOTICE_URI=https://d3rs72WROLan6ojLsrQOInCTVL0In7g3.jMNdaik');
        $this->assertEmpty(Notification::push());
        putenv('GIVENOTICE_URI=https://example.com');
        $this->assertEmpty(Notification::push());
    }
}
