<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Apps;

final class GetWebhookDelivery
{
    public const OPERATION_ID = 'apps/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /app/hook/deliveries/{delivery_id}';
    private const METHOD = 'GET';
    private const PATH = '/app/hook/deliveries/{delivery_id}';
    private int $delivery_id;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $hydrator, int $delivery_id)
    {
        $this->delivery_id = $delivery_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{delivery_id}'), array($this->delivery_id), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\HookDelivery|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ScimError|\ApiClients\Client\Github\Schema\ValidationError
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\HookDelivery|\ApiClients\Client\Github\Schema\BasicError|\ApiClients\Client\Github\Schema\ScimError|\ApiClients\Client\Github\Schema\ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\HookDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\HookDelivery', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\BasicError', $body);
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ScimError', $body);
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\ValidationError', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
