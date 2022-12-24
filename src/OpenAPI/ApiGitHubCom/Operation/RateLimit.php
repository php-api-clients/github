<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class RateLimit
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function get_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\RateLimit\Get_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
}
