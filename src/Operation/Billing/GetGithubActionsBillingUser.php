<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Billing;

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

final class GetGithubActionsBillingUser
{
    public const OPERATION_ID    = 'billing/get-github-actions-billing-user';
    public const OPERATION_MATCH = 'GET /users/{username}/settings/billing/actions';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/settings/billing/actions';
    /**The handle for the GitHub user account. **/
    private string $username;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Users\Username\Settings\Billing\Actions $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Users\Username\Settings\Billing\Actions $hydrator, string $username)
    {
        $this->username                = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}'], [$this->username], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsBillingUsage
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsBillingUsage::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ActionsBillingUsage::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
