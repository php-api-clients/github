<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Gitignore
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getAllTemplates_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetAllTemplates_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getTemplate_(string $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplate_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplate_($this->requestSchemaValidator, $this->responseSchemaValidator, $name);
    }
}
