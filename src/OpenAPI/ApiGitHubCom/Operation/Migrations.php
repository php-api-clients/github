<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Migrations
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
    public function listForOrg(string $org, int $per_page = 30, int $page = 1, array $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $per_page, $page, $exclude);
    }
    public function startForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getStatusForOrg(string $org, int $migration_id, array $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $migration_id, $exclude);
    }
    public function downloadArchiveForOrg(string $org, int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $migration_id);
    }
    public function deleteArchiveForOrg(string $org, int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $migration_id);
    }
    public function unlockRepoForOrg(string $org, int $migration_id, string $repo_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $migration_id, $repo_name);
    }
    public function listReposForOrg(string $org, int $migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $migration_id, $per_page, $page);
    }
    public function getImportStatus(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetImportStatus($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function startImport(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartImport($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function cancelImport(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\CancelImport($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function updateImport(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UpdateImport($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function getCommitAuthors(string $owner, string $repo, int $since) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $since);
    }
    public function mapCommitAuthor(string $owner, string $repo, int $author_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $author_id);
    }
    public function getLargeFiles(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function setLfsPreference(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\SetLfsPreference($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function listForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function startForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getStatusForAuthenticatedUser(int $migration_id, array $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $migration_id, $exclude);
    }
    public function getArchiveForAuthenticatedUser(int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $migration_id);
    }
    public function deleteArchiveForAuthenticatedUser(int $migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $migration_id);
    }
    public function unlockRepoForAuthenticatedUser(int $migration_id, string $repo_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $migration_id, $repo_name);
    }
    public function listReposForAuthenticatedUser(int $migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $migration_id, $per_page, $page);
    }
}
