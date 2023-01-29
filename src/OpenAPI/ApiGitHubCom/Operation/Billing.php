<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Billing
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
    public function getGithubActionsBillingOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getGithubPackagesBillingOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getSharedStorageBillingOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getGithubActionsBillingUser(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username);
    }
    public function getGithubPackagesBillingUser(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username);
    }
    public function getSharedStorageBillingUser(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username);
    }
}
