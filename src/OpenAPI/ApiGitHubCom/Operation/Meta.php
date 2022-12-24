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
    public function root_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function get_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOctocat_(string $s) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetOctocat_($this->requestSchemaValidator, $this->responseSchemaValidator, $s);
    }
    public function getAllVersions_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getZen_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
}
