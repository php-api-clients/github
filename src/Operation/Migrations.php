<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Migrations
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listForOrg(string $org, array $exclude, int $perPage, int $page): Schema\Migration
    {
        if (array_key_exists(Operator\Migrations\ListForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\ListForOrg::class] = new Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->operator[Operator\Migrations\ListForOrg::class]->call($org, $exclude, $perPage, $page);
    }

    public function startForOrg(string $org, array $params): Schema\Migration
    {
        if (array_key_exists(Operator\Migrations\StartForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\StartForOrg::class] = new Operator\Migrations\StartForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->operator[Operator\Migrations\StartForOrg::class]->call($org, $params);
    }

    public function getStatusForOrg(string $org, int $migrationId, array $exclude): Schema\Migration
    {
        if (array_key_exists(Operator\Migrations\GetStatusForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\GetStatusForOrg::class] = new Operator\Migrations\GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId());
        }

        return $this->operator[Operator\Migrations\GetStatusForOrg::class]->call($org, $migrationId, $exclude);
    }

    public function downloadArchiveForOrg(string $org, int $migrationId): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\DownloadArchiveForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\DownloadArchiveForOrg::class] = new Operator\Migrations\DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->operator[Operator\Migrations\DownloadArchiveForOrg::class]->call($org, $migrationId);
    }

    public function downloadArchiveForOrgStreaming(string $org, int $migrationId): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\DownloadArchiveForOrgStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\DownloadArchiveForOrgStreaming::class] = new Operator\Migrations\DownloadArchiveForOrgStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->operator[Operator\Migrations\DownloadArchiveForOrgStreaming::class]->call($org, $migrationId);
    }

    public function deleteArchiveForOrg(string $org, int $migrationId): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\DeleteArchiveForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\DeleteArchiveForOrg::class] = new Operator\Migrations\DeleteArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->operator[Operator\Migrations\DeleteArchiveForOrg::class]->call($org, $migrationId);
    }

    public function unlockRepoForOrg(string $org, int $migrationId, string $repoName): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\UnlockRepoForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\UnlockRepoForOrg::class] = new Operator\Migrations\UnlockRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->operator[Operator\Migrations\UnlockRepoForOrg::class]->call($org, $migrationId, $repoName);
    }

    public function listReposForOrg(string $org, int $migrationId, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Migrations\ListReposForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\ListReposForOrg::class] = new Operator\Migrations\ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->operator[Operator\Migrations\ListReposForOrg::class]->call($org, $migrationId, $perPage, $page);
    }

    public function getImportStatus(string $owner, string $repo): Schema\Import
    {
        if (array_key_exists(Operator\Migrations\GetImportStatus::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\GetImportStatus::class] = new Operator\Migrations\GetImportStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->operator[Operator\Migrations\GetImportStatus::class]->call($owner, $repo);
    }

    public function startImport(string $owner, string $repo, array $params): Schema\Import
    {
        if (array_key_exists(Operator\Migrations\StartImport::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\StartImport::class] = new Operator\Migrations\StartImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->operator[Operator\Migrations\StartImport::class]->call($owner, $repo, $params);
    }

    public function cancelImport(string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\CancelImport::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\CancelImport::class] = new Operator\Migrations\CancelImport($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->operator[Operator\Migrations\CancelImport::class]->call($owner, $repo);
    }

    public function updateImport(string $owner, string $repo, array $params): Schema\Import
    {
        if (array_key_exists(Operator\Migrations\UpdateImport::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\UpdateImport::class] = new Operator\Migrations\UpdateImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->operator[Operator\Migrations\UpdateImport::class]->call($owner, $repo, $params);
    }

    public function getCommitAuthors(string $owner, string $repo, int $since): Schema\PorterAuthor
    {
        if (array_key_exists(Operator\Migrations\GetCommitAuthors::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\GetCommitAuthors::class] = new Operator\Migrations\GetCommitAuthors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors());
        }

        return $this->operator[Operator\Migrations\GetCommitAuthors::class]->call($owner, $repo, $since);
    }

    public function mapCommitAuthor(string $owner, string $repo, int $authorId, array $params): Schema\PorterAuthor
    {
        if (array_key_exists(Operator\Migrations\MapCommitAuthor::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\MapCommitAuthor::class] = new Operator\Migrations\MapCommitAuthor($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId());
        }

        return $this->operator[Operator\Migrations\MapCommitAuthor::class]->call($owner, $repo, $authorId, $params);
    }

    public function getLargeFiles(string $owner, string $repo): Schema\PorterLargeFile
    {
        if (array_key_exists(Operator\Migrations\GetLargeFiles::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\GetLargeFiles::class] = new Operator\Migrations\GetLargeFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles());
        }

        return $this->operator[Operator\Migrations\GetLargeFiles::class]->call($owner, $repo);
    }

    public function setLfsPreference(string $owner, string $repo, array $params): Schema\Import
    {
        if (array_key_exists(Operator\Migrations\SetLfsPreference::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\SetLfsPreference::class] = new Operator\Migrations\SetLfsPreference($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs());
        }

        return $this->operator[Operator\Migrations\SetLfsPreference::class]->call($owner, $repo, $params);
    }

    public function listForAuthenticatedUser(int $perPage, int $page): Schema\Migration
    {
        if (array_key_exists(Operator\Migrations\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\ListForAuthenticatedUser::class] = new Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->operator[Operator\Migrations\ListForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function startForAuthenticatedUser(array $params): Schema\Migration
    {
        if (array_key_exists(Operator\Migrations\StartForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\StartForAuthenticatedUser::class] = new Operator\Migrations\StartForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->operator[Operator\Migrations\StartForAuthenticatedUser::class]->call($params);
    }

    public function getStatusForAuthenticatedUser(int $migrationId, array $exclude): Schema\Migration
    {
        if (array_key_exists(Operator\Migrations\GetStatusForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\GetStatusForAuthenticatedUser::class] = new Operator\Migrations\GetStatusForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId());
        }

        return $this->operator[Operator\Migrations\GetStatusForAuthenticatedUser::class]->call($migrationId, $exclude);
    }

    public function getArchiveForAuthenticatedUser(int $migrationId): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\GetArchiveForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\GetArchiveForAuthenticatedUser::class] = new Operator\Migrations\GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->operator[Operator\Migrations\GetArchiveForAuthenticatedUser::class]->call($migrationId);
    }

    public function deleteArchiveForAuthenticatedUser(int $migrationId): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\DeleteArchiveForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\DeleteArchiveForAuthenticatedUser::class] = new Operator\Migrations\DeleteArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->operator[Operator\Migrations\DeleteArchiveForAuthenticatedUser::class]->call($migrationId);
    }

    public function unlockRepoForAuthenticatedUser(int $migrationId, string $repoName): ResponseInterface
    {
        if (array_key_exists(Operator\Migrations\UnlockRepoForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\UnlockRepoForAuthenticatedUser::class] = new Operator\Migrations\UnlockRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->operator[Operator\Migrations\UnlockRepoForAuthenticatedUser::class]->call($migrationId, $repoName);
    }

    public function listReposForAuthenticatedUser(int $migrationId, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Migrations\ListReposForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Migrations\ListReposForAuthenticatedUser::class] = new Operator\Migrations\ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->operator[Operator\Migrations\ListReposForAuthenticatedUser::class]->call($migrationId, $perPage, $page);
    }
}
