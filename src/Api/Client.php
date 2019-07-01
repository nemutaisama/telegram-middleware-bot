<?php


namespace Nemutaisama\TelegramBot\Api;


use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\RequestExceptionInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

class Client
{
    const API_BASE = 'https://api.telegram.org/bot';

    /**
     * Url prefix for files
     */
    const FILE_URL_PREFIX = 'https://api.telegram.org/file/bot';
    /** @var ClientInterface */
    private $httpClient;

    /** @var RequestFactoryInterface */
    private $requestFactory;

    /** @var StreamFactoryInterface */
    private $streamFactory;

    public function __construct(ClientInterface $httpClient, RequestFactoryInterface $requestFactory, StreamFactoryInterface $streamFactory)
    {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
    }

    public function send(string $url, $message)
    {
        $request = $this->requestFactory->createRequest('POST', $url);
        $data = $this->streamFactory->createStream(json_encode($message));
        $request = $request->withBody($data)->withHeader('Content-Type', 'application/json');
        try {
            $response = $this->httpClient->sendRequest($request);

            return $response;

        } catch (ClientExceptionInterface $exception) {
            return false;
        }
    }
}