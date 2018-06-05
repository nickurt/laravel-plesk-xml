<?php

namespace nickurt\PleskXml\HttpClient;

use Exception;
use Http\Client\Exception\NetworkException;
use Http\Client\Exception\RequestException;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Message\RequestFactory;
use Psr\Http\Message\RequestInterface;

class HttpClient implements HttpClientInterface
{
    /**
     * @var \Http\Client\HttpClient
     */
    protected $httpClient;

    /**
     * @var \Http\Message\MessageFactory
     */
    protected $requestFactory;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * HttpClient constructor.
     * @param null $httpClient
     * @param RequestFactory|null $requestFactory
     */
    public function __construct($httpClient = null, RequestFactory $requestFactory = null)
    {
        $this->httpClient = $httpClient ?: HttpClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: MessageFactoryDiscovery::find();
    }

    /**
     * @param array $body
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function post($body = [])
    {
        return $this->request($body, 'POST');
    }

    /**
     * @param $body
     * @param $method
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function request($body, $method)
    {
        $request = $this->requestFactory->createRequest(
            $method,
            $this->getOptions()['base_url'],
            $this->getHeaders(),
            $body
        );

        return $this->sendRequest($request);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = array_merge($this->options, $options);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);
    }

    /**
     * @param RequestInterface $request
     * @return mixed
     * @throws \Http\Client\Exception
     */
    private function sendRequest(RequestInterface $request)
    {
        try {
            $response = $this->httpClient->sendRequest($request);

            return json_decode(json_encode(simplexml_load_string($response->getBody())));
        } catch (NetworkException $networkException) {
            throw new NetworkException($networkException->getMessage(), $request, $networkException);
        } catch (Exception $exception) {
            throw new RequestException($exception->getMessage(), $request, $exception);
        }
    }
}