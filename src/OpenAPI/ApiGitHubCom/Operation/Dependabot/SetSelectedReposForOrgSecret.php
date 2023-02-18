<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Dependabot\SetSelectedReposForOrgSecret\Request\Applicationjson;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class SetSelectedReposForOrgSecret
{
    public const OPERATION_ID    = 'dependabot/set-selected-repos-for-org-secret';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/dependabot/secrets/{secret_name}/repositories';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;

    public function __construct(SchemaValidator $requestSchemaValidator, string $org, string $secret_name)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org                    = $org;
        $this->secret_name            = $secret_name;
    }

    function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Applicationjson::SCHEMA_JSON, Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}'], [$this->org, $this->secret_name], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
