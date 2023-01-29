<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class CodesOfConduct
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function getAllCodesOfConduct() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetAllCodesOfConduct($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getConductCode(string $key) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodesOfConduct\GetConductCode($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $key);
    }
}
