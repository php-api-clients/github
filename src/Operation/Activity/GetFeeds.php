<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Activity;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetFeeds
{
    public const OPERATION_ID = 'activity/get-feeds';
    public const OPERATION_MATCH = 'GET /feeds';
    private const METHOD = 'GET';
    private const PATH = '/feeds';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Feeds $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Feeds $hydrator)
    {
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH));
    }
    /**
     * @return Schema\Feed
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Feed
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Feed::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Feed::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
