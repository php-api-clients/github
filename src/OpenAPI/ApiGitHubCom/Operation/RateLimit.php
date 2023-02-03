<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class RateLimit
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
}
