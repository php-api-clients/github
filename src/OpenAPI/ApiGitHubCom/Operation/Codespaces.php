<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Codespaces
{
    public function listInOrganization_(int $per_page = 30, int $page = 1, string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization_($per_page, $page, $org);
    }
    public function setCodespacesBilling_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetCodespacesBilling_($org);
    }
    public function listOrgSecrets_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListOrgSecrets_($org, $per_page, $page);
    }
    public function getOrgPublicKey_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgPublicKey_($org);
    }
    public function getOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetOrgSecret_($org, $secret_name);
    }
    public function createOrUpdateOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateOrgSecret_($org, $secret_name);
    }
    public function deleteOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteOrgSecret_($org, $secret_name);
    }
    public function listSelectedReposForOrgSecret_(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSelectedReposForOrgSecret_($org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetSelectedReposForOrgSecret_($org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddSelectedRepoToOrgSecret_($org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveSelectedRepoFromOrgSecret_($org, $secret_name, $repository_id);
    }
    public function getCodespacesForUserInOrg_(int $per_page = 30, int $page = 1, string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg_($per_page, $page, $org, $username);
    }
    public function deleteFromOrganization_(string $org, string $username, string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization_($org, $username, $codespace_name);
    }
    public function stopInOrganization_(string $org, string $username, string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization_($org, $username, $codespace_name);
    }
    public function listInRepositoryForAuthenticatedUser_(int $per_page = 30, int $page = 1, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser_($per_page, $page, $owner, $repo);
    }
    public function createWithRepoForAuthenticatedUser_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser_($owner, $repo);
    }
    public function listDevcontainersInRepositoryForAuthenticatedUser_(int $per_page = 30, int $page = 1, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser_($per_page, $page, $owner, $repo);
    }
    public function repoMachinesForAuthenticatedUser_(string $owner, string $repo, string $location, string $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser_($owner, $repo, $location, $client_ip);
    }
    public function preFlightWithRepoForAuthenticatedUser_(string $owner, string $repo, string $ref, string $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser_($owner, $repo, $ref, $client_ip);
    }
    public function listRepoSecrets_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets_($owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey_($owner, $repo);
    }
    public function getRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret_($owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret_($owner, $repo, $secret_name);
    }
    public function deleteRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret_($owner, $repo, $secret_name);
    }
    public function createWithPrForAuthenticatedUser_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser_($owner, $repo, $pull_number);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser_($per_page, $page, $repository_id);
    }
    public function createForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateForAuthenticatedUser_();
    }
    public function listSecretsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListSecretsForAuthenticatedUser_($per_page, $page);
    }
    public function getPublicKeyForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser_();
    }
    public function getSecretForAuthenticatedUser_(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser_($secret_name);
    }
    public function createOrUpdateSecretForAuthenticatedUser_(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser_($secret_name);
    }
    public function deleteSecretForAuthenticatedUser_(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser_($secret_name);
    }
    public function listRepositoriesForSecretForAuthenticatedUser_(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser_($secret_name);
    }
    public function setRepositoriesForSecretForAuthenticatedUser_(string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser_($secret_name);
    }
    public function addRepositoryForSecretForAuthenticatedUser_(string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser_($secret_name, $repository_id);
    }
    public function removeRepositoryForSecretForAuthenticatedUser_(string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser_($secret_name, $repository_id);
    }
    public function getForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser_($codespace_name);
    }
    public function deleteForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser_($codespace_name);
    }
    public function updateForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser_($codespace_name);
    }
    public function exportForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser_($codespace_name);
    }
    public function getExportDetailsForAuthenticatedUser_(string $codespace_name, string $export_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser_($codespace_name, $export_id);
    }
    public function codespaceMachinesForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser_($codespace_name);
    }
    public function startForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser_($codespace_name);
    }
    public function stopForAuthenticatedUser_(string $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser_($codespace_name);
    }
}
