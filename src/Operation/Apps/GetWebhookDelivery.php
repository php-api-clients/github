<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Apps;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class GetWebhookDelivery
{
    public const OPERATION_ID = 'apps/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /app/hook/deliveries/{delivery_id}';
    private const METHOD = 'GET';
    private const PATH = '/app/hook/deliveries/{delivery_id}';
    private int $deliveryId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $hydrator, int $deliveryId)
    {
        $this->deliveryId = $deliveryId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{delivery_id}'), array($this->deliveryId), self::PATH));
    }
    /**
     * @return Schema\HookDelivery
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\HookDelivery
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\HookDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\HookDelivery::class, $body);
                }
                break;
            /**Bad Request**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ScimError(400, $this->hydrator->hydrateObject(Schema\ScimError::class, $body));
                }
                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
