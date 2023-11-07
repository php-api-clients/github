<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\PorterAuthor;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Migrations
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\Migration> */
    public function listForOrg(string $org, array $exclude, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForOrg()->call($org, $exclude, $perPage, $page);
    }

    /** @return iterable<int,Schema\Migration> */
    public function listForOrgListing(string $org, array $exclude, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListForOrgListing()->call($org, $exclude, $perPage, $page);
    }

    public function startForOrg(string $org, array $params): Migration
    {
        return $this->operators->migrations👷StartForOrg()->call($org, $params);
    }

    public function getStatusForOrg(string $org, int $migrationId, array $exclude): Migration
    {
        return $this->operators->migrations👷GetStatusForOrg()->call($org, $migrationId, $exclude);
    }

    public function downloadArchiveForOrg(string $org, int $migrationId): WithoutBody
    {
        return $this->operators->migrations👷DownloadArchiveForOrg()->call($org, $migrationId);
    }

    /** @return iterable<int,string> */
    public function downloadArchiveForOrgStreaming(string $org, int $migrationId): iterable
    {
        return $this->operators->migrations👷DownloadArchiveForOrgStreaming()->call($org, $migrationId);
    }

    public function deleteArchiveForOrg(string $org, int $migrationId): WithoutBody
    {
        return $this->operators->migrations👷DeleteArchiveForOrg()->call($org, $migrationId);
    }

    public function unlockRepoForOrg(string $org, int $migrationId, string $repoName): WithoutBody
    {
        return $this->operators->migrations👷UnlockRepoForOrg()->call($org, $migrationId, $repoName);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listReposForOrg(string $org, int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForOrg()->call($org, $migrationId, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listReposForOrgListing(string $org, int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForOrgListing()->call($org, $migrationId, $perPage, $page);
    }

    public function getImportStatus(string $owner, string $repo): Import
    {
        return $this->operators->migrations👷GetImportStatus()->call($owner, $repo);
    }

    public function startImport(string $owner, string $repo, array $params): Import
    {
        return $this->operators->migrations👷StartImport()->call($owner, $repo, $params);
    }

    public function cancelImport(string $owner, string $repo): WithoutBody
    {
        return $this->operators->migrations👷CancelImport()->call($owner, $repo);
    }

    public function updateImport(string $owner, string $repo, array $params): Import
    {
        return $this->operators->migrations👷UpdateImport()->call($owner, $repo, $params);
    }

    /** @return iterable<int,Schema\PorterAuthor> */
    public function getCommitAuthors(string $owner, string $repo, int $since): iterable
    {
        return $this->operators->migrations👷GetCommitAuthors()->call($owner, $repo, $since);
    }

    public function mapCommitAuthor(string $owner, string $repo, int $authorId, array $params): PorterAuthor
    {
        return $this->operators->migrations👷MapCommitAuthor()->call($owner, $repo, $authorId, $params);
    }

    /** @return iterable<int,Schema\PorterLargeFile> */
    public function getLargeFiles(string $owner, string $repo): iterable
    {
        return $this->operators->migrations👷GetLargeFiles()->call($owner, $repo);
    }

    public function setLfsPreference(string $owner, string $repo, array $params): Import
    {
        return $this->operators->migrations👷SetLfsPreference()->call($owner, $repo, $params);
    }

    /** @return iterable<int,Schema\Migration>|WithoutBody */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->migrations👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Migration>|WithoutBody */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->migrations👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function startForAuthenticatedUser(array $params): Migration|WithoutBody
    {
        return $this->operators->migrations👷StartForAuthenticatedUser()->call($params);
    }

    public function getStatusForAuthenticatedUser(int $migrationId, array $exclude): Migration|WithoutBody
    {
        return $this->operators->migrations👷GetStatusForAuthenticatedUser()->call($migrationId, $exclude);
    }

    public function getArchiveForAuthenticatedUser(int $migrationId): WithoutBody
    {
        return $this->operators->migrations👷GetArchiveForAuthenticatedUser()->call($migrationId);
    }

    public function deleteArchiveForAuthenticatedUser(int $migrationId): WithoutBody
    {
        return $this->operators->migrations👷DeleteArchiveForAuthenticatedUser()->call($migrationId);
    }

    public function unlockRepoForAuthenticatedUser(int $migrationId, string $repoName): WithoutBody
    {
        return $this->operators->migrations👷UnlockRepoForAuthenticatedUser()->call($migrationId, $repoName);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listReposForAuthenticatedUser(int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForAuthenticatedUser()->call($migrationId, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listReposForAuthenticatedUserListing(int $migrationId, int $perPage, int $page): iterable
    {
        return $this->operators->migrations👷ListReposForAuthenticatedUserListing()->call($migrationId, $perPage, $page);
    }
}
