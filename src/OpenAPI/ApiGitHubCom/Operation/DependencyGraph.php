<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class DependencyGraph
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
    public function diffRange(string $owner, string $repo, string $basehead, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\DiffRange($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $basehead, $name);
    }
    public function createRepositorySnapshot(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\DependencyGraph\CreateRepositorySnapshot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
}
