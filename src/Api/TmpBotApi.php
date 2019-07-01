<?php


namespace Nemutaisama\TelegramBot\Api;


use Symfony\Component\HttpClient\Psr18Client;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exception;
use Zend\Diactoros\RequestFactory;
use Zend\Diactoros\StreamFactory;

class TmpBotApi extends BotApi
{

    public function call($method, array $data = null)
    {
        $client = new Client(
            new Psr18Client(),
            new RequestFactory(),
            new StreamFactory()
        );

        $result = $client->send($this->getUrl().'/'.$method, $data);
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
}