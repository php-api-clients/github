<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Migrations
{
    public function listForOrg_(string $org, int $per_page = 30, int $page = 1, array $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg_($org, $per_page, $page, $exclude);
    }
    public function startForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg_($org);
    }
    public function getStatusForOrg_(string $org, int $migration_id, array $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg_($org, $migration_id, $exclude);
    }
    public function downloadArchiveForOrg_(string $org, int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg_($org, $migration_id);
    }
    public function deleteArchiveForOrg_(string $org, int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg_($org, $migration_id);
    }
    public function unlockRepoForOrg_(string $org, int $migration_id, string $repo_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg_($org, $migration_id, $repo_name);
    }
    public function listReposForOrg_(string $org, int $migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg_($org, $migration_id, $per_page, $page);
    }
    public function getImportStatus_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus_($owner, $repo);
    }
    public function startImport_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport_($owner, $repo);
    }
    public function cancelImport_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport_($owner, $repo);
    }
    public function updateImport_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport_($owner, $repo);
    }
    public function getCommitAuthors_(string $owner, string $repo, int $since) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors_($owner, $repo, $since);
    }
    public function mapCommitAuthor_(string $owner, string $repo, int $author_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor_($owner, $repo, $author_id);
    }
    public function getLargeFiles_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles_($owner, $repo);
    }
    public function setLfsPreference_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference_($owner, $repo);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser_($per_page, $page);
    }
    public function startForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser_();
    }
    public function getStatusForAuthenticatedUser_(int $migration_id, array $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser_($migration_id, $exclude);
    }
    public function getArchiveForAuthenticatedUser_(int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser_($migration_id);
    }
    public function deleteArchiveForAuthenticatedUser_(int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser_($migration_id);
    }
    public function unlockRepoForAuthenticatedUser_(int $migration_id, string $repo_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser_($migration_id, $repo_name);
    }
    public function listReposForAuthenticatedUser_(int $migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser_($migration_id, $per_page, $page);
    }
}
