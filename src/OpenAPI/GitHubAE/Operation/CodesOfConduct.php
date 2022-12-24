<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class CodesOfConduct
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getAllCodesOfConduct_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConduct_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetAllCodesOfConduct_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getConductCode_(string $key) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetConductCode_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetConductCode_($this->requestSchemaValidator, $this->responseSchemaValidator, $key);
    }
}
