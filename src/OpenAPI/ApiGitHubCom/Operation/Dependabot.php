<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Dependabot
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
    public function listAlertsForEnterprise(string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $sort = 'created', string $direction = 'desc', string $before, string $after, int $first = 30, int $last, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $enterprise, $state, $severity, $ecosystem, $package, $scope, $sort, $direction, $before, $after, $first, $last, $per_page);
    }
    public function listAlertsForOrg(string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $sort = 'created', string $direction = 'desc', string $before, string $after, int $first = 30, int $last, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $state, $severity, $ecosystem, $package, $scope, $sort, $direction, $before, $after, $first, $last, $per_page);
    }
    public function listOrgSecrets(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListOrgSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $per_page, $page);
    }
    public function getOrgPublicKey(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function createOrUpdateOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function deleteOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function listSelectedReposForOrgSecret(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\SetSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\AddSelectedRepoToOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\RemoveSelectedRepoFromOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name, $repository_id);
    }
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after, int $first = 30, int $last) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListAlertsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $sort, $direction, $page, $per_page, $before, $after, $first, $last);
    }
    public function getAlert(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alert_number);
    }
    public function updateAlert(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\UpdateAlert($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $alert_number);
    }
    public function listRepoSecrets(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\ListRepoSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\GetRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\CreateOrUpdateRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secret_name);
    }
    public function deleteRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot\DeleteRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secret_name);
    }
}
