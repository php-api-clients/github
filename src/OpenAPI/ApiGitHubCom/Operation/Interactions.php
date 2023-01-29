<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Interactions
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
    public function getRestrictionsForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function setRestrictionsForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function removeRestrictionsForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getRestrictionsForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function setRestrictionsForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function removeRestrictionsForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getRestrictionsForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function setRestrictionsForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function removeRestrictionsForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
}
