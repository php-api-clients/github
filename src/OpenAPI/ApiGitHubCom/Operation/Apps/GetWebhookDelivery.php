<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BasicError;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HookDelivery;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScimError;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ValidationError;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_decode;
use function str_replace;

final class GetWebhookDelivery
{
    public const OPERATION_ID    = 'apps/get-webhook-delivery';
    public const OPERATION_MATCH = 'GET /app/hook/deliveries/{delivery_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/app/hook/deliveries/{delivery_id}';
    private int $delivery_id;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly CbDeliveryIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, CbDeliveryIdRcb $hydrator, int $delivery_id)
    {
        $this->delivery_id             = $delivery_id;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{delivery_id}'], [$this->delivery_id], self::PATH));
    }

    function createResponse(ResponseInterface $response): HookDelivery|BasicError|ScimError|ValidationError
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body        = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Validation failed, or the endpoint has been spammed.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(HookDelivery::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\HookDelivery', $body);
                }

                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 400:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\BasicError', $body);

                    case 'application/scim+json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ScimError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ScimError', $body);
                }

                break;
            /**Validation failed, or the endpoint has been spammed.**/
            case 422:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(ValidationError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\ValidationError', $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
