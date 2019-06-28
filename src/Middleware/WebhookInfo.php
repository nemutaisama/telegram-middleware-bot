<?php

namespace Nemutaisama\TelegramBot\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TelegramBot\Api\Client;
use Zend\Diactoros\Response\JsonResponse;

class WebhookInfo implements RequestHandlerInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * WebhookInfo constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $result = $this->client->call('getWebhookInfo');
        return new JsonResponse($result);
    }
}