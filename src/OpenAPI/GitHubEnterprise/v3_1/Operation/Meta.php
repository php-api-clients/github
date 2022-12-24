<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Meta
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function root_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\Root_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\Root_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function get_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\Get_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOctocat_(string $s) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetOctocat_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetOctocat_($this->requestSchemaValidator, $this->responseSchemaValidator, $s);
    }
    public function getZen_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetZen_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetZen_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
}
