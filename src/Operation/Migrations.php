<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Operators;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\PorterAuthor;

final class Migrations
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return iterable<Schema\Migration> */
    public function listForOrg(string $org, array $exclude, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForOrg()->call($org, $exclude, $perPage, $page);
    }

    /** @return iterable<Schema\Migration> */
    public function listForOrgListing(string $org, array $exclude, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForOrgListing()->call($org, $exclude, $perPage, $page);
    }

    /** @return */
    public function startForOrg(string $org, array $params): Migration|array
    {
        return $this->operators->migrations👷StartForOrg()->call($org, $params);
    }

    /** @return */
    public function getStatusForOrg(string $org, int $migrationId, array $exclude): Migration|array
    {
        return $this->operators->migrations👷GetStatusForOrg()->call($org, $migrationId, $exclude);
    }

    /** @return array{code:int} */
    public function downloadArchiveForOrg(string $org, int $migrationId): array
    {
        return $this->operators->migrations👷DownloadArchiveForOrg()->call($org, $migrationId);
    }

    /** @return Observable<string> */
    public function downloadArchiveForOrgStreaming(string $org, int $migrationId): iterable
    {
        return $this->operators->migrations👷DownloadArchiveForOrgStreaming()->call($org, $migrationId);
    }

    /** @return array{code:int} */
    public function deleteArchiveForOrg(string $org, int $migrationId): array
    {
        return $this->operators->migrations👷DeleteArchiveForOrg()->call($org, $migrationId);
    }

    /** @return array{code:int} */
    public function unlockRepoForOrg(string $org, int $migrationId, string $repoName): array
    {
        return $this->operators->migrations👷UnlockRepoForOrg()->call($org, $migrationId, $repoName);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposForOrg(string $org, int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForOrg()->call($org, $migrationId, $perPage, $page);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposForOrgListing(string $org, int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForOrgListing()->call($org, $migrationId, $perPage, $page);
    }

    /** @return */
    public function getImportStatus(string $owner, string $repo): Import|array
    {
        return $this->operators->migrations👷GetImportStatus()->call($owner, $repo);
    }

    /** @return */
    public function startImport(string $owner, string $repo, array $params): Import|array
    {
        return $this->operators->migrations👷StartImport()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function cancelImport(string $owner, string $repo): array
    {
        return $this->operators->migrations👷CancelImport()->call($owner, $repo);
    }

    /** @return */
    public function updateImport(string $owner, string $repo, array $params): Import|array
    {
        return $this->operators->migrations👷UpdateImport()->call($owner, $repo, $params);
    }

    /** @return iterable<Schema\PorterAuthor> */
    public function getCommitAuthors(string $owner, string $repo, int $since): iterable
    {
        return $this->operators->migrations👷GetCommitAuthors()->call($owner, $repo, $since);
    }

    /** @return */
    public function mapCommitAuthor(string $owner, string $repo, int $authorId, array $params): PorterAuthor|array
    {
        return $this->operators->migrations👷MapCommitAuthor()->call($owner, $repo, $authorId, $params);
    }

    /** @return iterable<Schema\PorterLargeFile> */
    public function getLargeFiles(string $owner, string $repo): iterable
    {
        return $this->operators->migrations👷GetLargeFiles()->call($owner, $repo);
    }

    /** @return */
    public function setLfsPreference(string $owner, string $repo, array $params): Import|array
    {
        return $this->operators->migrations👷SetLfsPreference()->call($owner, $repo, $params);
    }

    /** @return iterable<Schema\Migration>|array{code:int} */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<Schema\Migration>|array{code:int} */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Schema\Migration|array{code:int} */
    public function startForAuthenticatedUser(array $params): Migration|array
    {
        return $this->operators->migrations👷StartForAuthenticatedUser()->call($params);
    }

    /** @return Schema\Migration|array{code:int} */
    public function getStatusForAuthenticatedUser(int $migrationId, array $exclude): Migration|array
    {
        return $this->operators->migrations👷GetStatusForAuthenticatedUser()->call($migrationId, $exclude);
    }

    /** @return array{code:int} */
    public function getArchiveForAuthenticatedUser(int $migrationId): array
    {
        return $this->operators->migrations👷GetArchiveForAuthenticatedUser()->call($migrationId);
    }

    /** @return array{code:int} */
    public function deleteArchiveForAuthenticatedUser(int $migrationId): array
    {
        return $this->operators->migrations👷DeleteArchiveForAuthenticatedUser()->call($migrationId);
    }

    /** @return array{code:int} */
    public function unlockRepoForAuthenticatedUser(int $migrationId, string $repoName): array
    {
        return $this->operators->migrations👷UnlockRepoForAuthenticatedUser()->call($migrationId, $repoName);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposForAuthenticatedUser(int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForAuthenticatedUser()->call($migrationId, $perPage, $page);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposForAuthenticatedUserListing(int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForAuthenticatedUserListing()->call($migrationId, $perPage, $page);
    }
}
