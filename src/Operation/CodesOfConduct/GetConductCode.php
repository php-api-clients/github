<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\CodesOfConduct;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetConductCode
{
    public const OPERATION_ID = 'codes-of-conduct/get-conduct-code';
    public const OPERATION_MATCH = 'GET /codes_of_conduct/{key}';
    private const METHOD = 'GET';
    private const PATH = '/codes_of_conduct/{key}';
    private string $key;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\CodesOfConduct\CbKeyRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\CodesOfConduct\CbKeyRcb $hydrator, string $key)
    {
        $this->key = $key;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{key}'), array($this->key), self::PATH));
    }
    /**
     * @return Schema\CodeOfConduct|Schema\BasicError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\CodeOfConduct|Schema\BasicError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Resource not found**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\CodeOfConduct::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\CodeOfConduct::class, $body);
                }
                break;
            /**Resource not found**/
            case 404:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\BasicError::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
