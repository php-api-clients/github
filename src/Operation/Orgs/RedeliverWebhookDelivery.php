<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RedeliverWebhookDelivery
{
    public const OPERATION_ID = 'orgs/redeliver-webhook-delivery';
    public const OPERATION_MATCH = 'POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    private const METHOD = 'POST';
    private const PATH = '/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the hook.**/
    private int $hookId;
    private int $deliveryId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $hydrator, string $org, int $hookId, int $deliveryId)
    {
        $this->org = $org;
        $this->hookId = $hookId;
        $this->deliveryId = $deliveryId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{hook_id}', '{delivery_id}'), array($this->org, $this->hookId, $this->deliveryId), self::PATH));
    }
    /**
     * @return Schema\Operation\Orgs\RedeliverWebhookDelivery\Response\Applicationjson\H202
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Orgs\RedeliverWebhookDelivery\Response\Applicationjson\H202
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Accepted**/
            case 202:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Orgs\RedeliverWebhookDelivery\Response\Applicationjson\H202::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Orgs\RedeliverWebhookDelivery\Response\Applicationjson\H202::class, $body);
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
