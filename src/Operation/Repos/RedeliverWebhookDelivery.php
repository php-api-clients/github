<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class RedeliverWebhookDelivery
{
    public const OPERATION_ID = 'repos/redeliver-webhook-delivery';
    public const OPERATION_MATCH = 'POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    private const METHOD = 'POST';
    private const PATH = '/repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The unique identifier of the hook.**/
    private int $hookId;
    private int $deliveryId;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $hydrator, string $owner, string $repo, int $hookId, int $deliveryId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->hookId = $hookId;
        $this->deliveryId = $deliveryId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}', '{hook_id}', '{delivery_id}'), array($this->owner, $this->repo, $this->hookId, $this->deliveryId), self::PATH));
    }
    /**
     * @return Schema\Operation\Repos\RedeliverWebhookDelivery\Response\Applicationjson\H202
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Operation\Repos\RedeliverWebhookDelivery\Response\Applicationjson\H202
    {
        $code = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Accepted
                    **/
                    case 202:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Repos\RedeliverWebhookDelivery\Response\Applicationjson\H202::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Repos\RedeliverWebhookDelivery\Response\Applicationjson\H202::class, $body);
                    /**
                     * Bad Request
                    **/
                    case 400:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                    **/
                    case 422:
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
