<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

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
use function json_encode;
use function str_replace;

final class UpdateWebhookConfigForOrg
{
    public const OPERATION_ID    = 'orgs/update-webhook-config-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/hooks/{hook_id}/config';
    private const METHOD         = 'PATCH';
    private const PATH           = '/orgs/{org}/hooks/{hook_id}/config';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The unique identifier of the hook. **/
    private int $hookId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Orgs\Org\Hooks\HookId\Config $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Orgs\Org\Hooks\HookId\Config $hydrator, string $org, int $hookId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->hookId                  = $hookId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Apps\UpdateWebhookConfigForApp\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{hook_id}'], [$this->org, $this->hookId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\WebhookConfig
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\WebhookConfig::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\WebhookConfig::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
