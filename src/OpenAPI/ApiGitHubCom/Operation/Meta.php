<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Meta
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function root() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOctocat(string $s) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat($this->requestSchemaValidator, $this->responseSchemaValidator, $s);
    }
    public function getAllVersions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getZen() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
}
