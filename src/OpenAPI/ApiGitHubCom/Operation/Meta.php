<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Meta
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
    public function root() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getOctocat(string $s) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $s);
    }
    public function getAllVersions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getZen() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
}
