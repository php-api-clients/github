<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Gitignore
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
    public function getAllTemplates() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplates
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplates($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getTemplate(string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplate($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $name);
    }
}
