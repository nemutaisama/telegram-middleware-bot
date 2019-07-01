<?php


namespace Nemutaisama\TelegramBot\Api;


use TelegramBot\Api\Events\EventCollection;

class TmpClient extends \TelegramBot\Api\Client
{
    public function __construct($token, $trackerToken = null)
    {
        parent::__construct($token, $trackerToken);
        $this->api = new TmpBotApi($token);
        $this->events = new EventCollection($trackerToken);
    }

}