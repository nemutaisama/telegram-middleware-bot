<?php


namespace Nemutaisama\TelegramBot\Api;


use Nemutaisama\TelegramBot\Middleware\WebhookInfo;
use Psr\Container\ContainerInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Server\RequestHandlerInterface;

class TmpClientFactory
{
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {
        $httpClient = $container->get(ClientInterface::class);
        $requestFactory = $container->get(RequestFactoryInterface::class);
        $streamFactory = $container->get(StreamFactoryInterface::class);

        $client = new Client($httpClient, $requestFactory, $streamFactory);
        $tmpApi = new TmpBotApi($client);

        return new TmpClient();
    }

}