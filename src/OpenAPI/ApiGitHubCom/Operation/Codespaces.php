<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Codespaces
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
    public function listInOrganization(int $per_page = 30, int $page = 1, string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page, $org);
    }
    public function setCodespacesBilling(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function setCodespacesBillingUsers(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBillingUsers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBillingUsers($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function deleteCodespacesBillingUsers(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteCodespacesBillingUsers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteCodespacesBillingUsers($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function listOrgSecrets(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $per_page, $page);
    }
    public function getOrgPublicKey(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function createOrUpdateOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function deleteOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function listSelectedReposForOrgSecret(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $secret_name, $repository_id);
    }
    public function getCodespacesForUserInOrg(int $per_page = 30, int $page = 1, string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page, $org, $username);
    }
    public function deleteFromOrganization(string $org, string $username, string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $username, $codespace_name);
    }
    public function stopInOrganization(string $org, string $username, string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $username, $codespace_name);
    }
    public function listInRepositoryForAuthenticatedUser(int $per_page = 30, int $page = 1, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page, $owner, $repo);
    }
    public function createWithRepoForAuthenticatedUser(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function listDevcontainersInRepositoryForAuthenticatedUser(int $per_page = 30, int $page = 1, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page, $owner, $repo);
    }
    public function repoMachinesForAuthenticatedUser(string $owner, string $repo, string $location, string $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $location, $client_ip);
    }
    public function preFlightWithRepoForAuthenticatedUser(string $owner, string $repo, string $ref, string $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $ref, $client_ip);
    }
    public function listRepoSecrets(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secret_name);
    }
    public function deleteRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $secret_name);
    }
    public function createWithPrForAuthenticatedUser(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pull_number);
    }
    public function listForAuthenticatedUser(int $per_page = 30, int $page = 1, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page, $repository_id);
    }
    public function createForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function listSecretsForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function getPublicKeyForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getSecretForAuthenticatedUser(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name);
    }
    public function createOrUpdateSecretForAuthenticatedUser(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name);
    }
    public function deleteSecretForAuthenticatedUser(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name);
    }
    public function listRepositoriesForSecretForAuthenticatedUser(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name);
    }
    public function setRepositoriesForSecretForAuthenticatedUser(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name);
    }
    public function addRepositoryForSecretForAuthenticatedUser(string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name, $repository_id);
    }
    public function removeRepositoryForSecretForAuthenticatedUser(string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $secret_name, $repository_id);
    }
    public function getForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function deleteForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function updateForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function exportForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function getExportDetailsForAuthenticatedUser(string $codespace_name, string $export_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name, $export_id);
    }
    public function codespaceMachinesForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function publishForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PublishForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PublishForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function startForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
    public function stopForAuthenticatedUser(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $codespace_name);
    }
}
