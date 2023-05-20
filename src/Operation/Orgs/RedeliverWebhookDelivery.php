<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class RedeliverWebhookDelivery
{
    public const OPERATION_ID    = 'orgs/redeliver-webhook-delivery';
    public const OPERATION_MATCH = 'POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the hook. **/
    private int $hookId;
    private int $deliveryId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts $hydrator, string $org, int $hookId, int $deliveryId)
    {
        $this->org                     = $org;
        $this->hookId                  = $hookId;
        $this->deliveryId              = $deliveryId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{hook_id}', '{delivery_id}'], [$this->org, $this->hookId, $this->deliveryId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\WebhookDeploymentCreated\Deployment\Payload\Zero
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Accepted
                     **/
                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WebhookDeploymentCreated\Deployment\Payload\Zero::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WebhookDeploymentCreated\Deployment\Payload\Zero::class, $body);
                    /**
                     * Bad Request
                     **/

                    case 400:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(400, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Validation failed, or the endpoint has been spammed.
                     **/

                    case 422:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ValidationError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\ValidationError(422, $this->hydrator->hydrateObject(Schema\ValidationError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
