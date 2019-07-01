<?php


namespace Nemutaisama\TelegramBot\Api;


use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exception;

class TmpBotApi extends BotApi
{
    /** @var Client */
    private $client;

    public function __construct(Client $client)
    {
        parent::__construct('', '');
        $this->client = $client;
    }

    public function call($method, array $data = null)
    {
        $result = $this->client->send($this->getUrl().'/'.$method, $data);
        $response = self::jsonValidate($result->getBody()->getContents(), $this->returnArray);

        if ($this->returnArray) {
            if (!isset($response['ok'])) {
                throw new Exception($response['description'], $response['error_code']);
            }

            return $response['result'];
        }

        if (!$response->ok) {
            throw new Exception($response->description, $response->error_code);
        }

        return $response->result;
    }

    public function setToken($token): self
    {
        $this->token = $token;
        return $this;
    }
}