<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Codespaces
{
    public function listInRepositoryForAuthenticatedUser_(int $per_page = 30, int $page = 1, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInRepositoryForAuthenticatedUser_($per_page, $page, $owner, $repo);
    }
    public function createWithRepoForAuthenticatedUser_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithRepoForAuthenticatedUser_($owner, $repo);
    }
    public function listDevcontainersInRepositoryForAuthenticatedUser_(int $per_page = 30, int $page = 1, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser_($per_page, $page, $owner, $repo);
    }
    public function repoMachinesForAuthenticatedUser_($owner, $repo, $location, $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser_($owner, $repo, $location, $client_ip);
    }
    public function listRepoSecrets_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepoSecrets_($owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey_($owner, $repo);
    }
    public function getRepoSecret_($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoSecret_($owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret_($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateRepoSecret_($owner, $repo, $secret_name);
    }
    public function deleteRepoSecret_($owner, $repo, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteRepoSecret_($owner, $repo, $secret_name);
    }
    public function createWithPrForAuthenticatedUser_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateWithPrForAuthenticatedUser_($owner, $repo, $pull_number);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListForAuthenticatedUser_
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
    public function getSecretForAuthenticatedUser_($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser_($secret_name);
    }
    public function createOrUpdateSecretForAuthenticatedUser_($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser_($secret_name);
    }
    public function deleteSecretForAuthenticatedUser_($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser_($secret_name);
    }
    public function listRepositoriesForSecretForAuthenticatedUser_($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser_($secret_name);
    }
    public function setRepositoriesForSecretForAuthenticatedUser_($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser_($secret_name);
    }
    public function addRepositoryForSecretForAuthenticatedUser_($secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser_($secret_name, $repository_id);
    }
    public function removeRepositoryForSecretForAuthenticatedUser_($secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser_($secret_name, $repository_id);
    }
    public function getForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetForAuthenticatedUser_($codespace_name);
    }
    public function deleteForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteForAuthenticatedUser_($codespace_name);
    }
    public function updateForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\UpdateForAuthenticatedUser_($codespace_name);
    }
    public function exportForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser_($codespace_name);
    }
    public function getExportDetailsForAuthenticatedUser_($codespace_name, $export_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser_($codespace_name, $export_id);
    }
    public function codespaceMachinesForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CodespaceMachinesForAuthenticatedUser_($codespace_name);
    }
    public function startForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser_($codespace_name);
    }
    public function stopForAuthenticatedUser_($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopForAuthenticatedUser_($codespace_name);
    }
}
