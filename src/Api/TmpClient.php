<?php


namespace Nemutaisama\TelegramBot\Api;


use TelegramBot\Api\Events\EventCollection;

class TmpClient extends \TelegramBot\Api\Client
{
    public function __construct(TmpBotApi $api, $trackerToken = null)
    {
        parent::__construct('', $trackerToken);
        $this->api = $api;
        $this->events = new EventCollection($trackerToken);
    }

}