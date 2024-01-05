<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Packages
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\Package> */
    public function listDockerMigrationConflictingPackagesForOrganization(string $org): iterable
    {
        return $this->operators->packages👷ListDockerMigrationConflictingPackagesForOrganization()->call($org);
    }

    /** @return iterable<int,Schema\Package>|WithoutBody */
    public function listPackagesForOrganization(string $packageType, string $org, string $visibility, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->packages👷ListPackagesForOrganization()->call($packageType, $org, $visibility, $page, $perPage);
    }

    /** @return iterable<int,Schema\Package>|WithoutBody */
    public function listPackagesForOrganizationListing(string $packageType, string $org, string $visibility, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->packages👷ListPackagesForOrganizationListing()->call($packageType, $org, $visibility, $page, $perPage);
    }

    /** @return */
    public function getPackageForOrganization(string $packageType, string $packageName, string $org): Package
    {
        return $this->operators->packages👷GetPackageForOrganization()->call($packageType, $packageName, $org);
    }

    /** @return */
    public function deletePackageForOrg(string $packageType, string $packageName, string $org): WithoutBody
    {
        return $this->operators->packages👷DeletePackageForOrg()->call($packageType, $packageName, $org);
    }

    /** @return */
    public function restorePackageForOrg(string $packageType, string $packageName, string $org, string $token): WithoutBody
    {
        return $this->operators->packages👷RestorePackageForOrg()->call($packageType, $packageName, $org, $token);
    }

    /** @return iterable<int,Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByOrg(string $packageType, string $packageName, string $org, int $page, int $perPage, string $state): iterable
    {
        return $this->operators->packages👷GetAllPackageVersionsForPackageOwnedByOrg()->call($packageType, $packageName, $org, $page, $perPage, $state);
    }

    /** @return iterable<int,Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByOrgListing(string $packageType, string $packageName, string $org, int $page, int $perPage, string $state): iterable
    {
        return $this->operators->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing()->call($packageType, $packageName, $org, $page, $perPage, $state);
    }

    /** @return */
    public function getPackageVersionForOrganization(string $packageType, string $packageName, string $org, int $packageVersionId): PackageVersion
    {
        return $this->operators->packages👷GetPackageVersionForOrganization()->call($packageType, $packageName, $org, $packageVersionId);
    }

    /** @return */
    public function deletePackageVersionForOrg(string $packageType, string $packageName, string $org, int $packageVersionId): WithoutBody
    {
        return $this->operators->packages👷DeletePackageVersionForOrg()->call($packageType, $packageName, $org, $packageVersionId);
    }

    /** @return */
    public function restorePackageVersionForOrg(string $packageType, string $packageName, string $org, int $packageVersionId): WithoutBody
    {
        return $this->operators->packages👷RestorePackageVersionForOrg()->call($packageType, $packageName, $org, $packageVersionId);
    }

    /** @return Observable<Schema\Package> */
    public function listDockerMigrationConflictingPackagesForAuthenticatedUser(): iterable
    {
        return $this->operators->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser()->call();
    }

    /** @return iterable<int,Schema\Package>|WithoutBody */
    public function listPackagesForAuthenticatedUser(string $packageType, string $visibility, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->packages👷ListPackagesForAuthenticatedUser()->call($packageType, $visibility, $page, $perPage);
    }

    /** @return iterable<int,Schema\Package>|WithoutBody */
    public function listPackagesForAuthenticatedUserListing(string $packageType, string $visibility, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->packages👷ListPackagesForAuthenticatedUserListing()->call($packageType, $visibility, $page, $perPage);
    }

    /** @return */
    public function getPackageForAuthenticatedUser(string $packageType, string $packageName): Package
    {
        return $this->operators->packages👷GetPackageForAuthenticatedUser()->call($packageType, $packageName);
    }

    /** @return */
    public function deletePackageForAuthenticatedUser(string $packageType, string $packageName): WithoutBody
    {
        return $this->operators->packages👷DeletePackageForAuthenticatedUser()->call($packageType, $packageName);
    }

    /** @return */
    public function restorePackageForAuthenticatedUser(string $packageType, string $packageName, string $token): WithoutBody
    {
        return $this->operators->packages👷RestorePackageForAuthenticatedUser()->call($packageType, $packageName, $token);
    }

    /** @return iterable<int,Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser(string $packageType, string $packageName, int $page, int $perPage, string $state): iterable
    {
        return $this->operators->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser()->call($packageType, $packageName, $page, $perPage, $state);
    }

    /** @return iterable<int,Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUserListing(string $packageType, string $packageName, int $page, int $perPage, string $state): iterable
    {
        return $this->operators->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing()->call($packageType, $packageName, $page, $perPage, $state);
    }

    /** @return */
    public function getPackageVersionForAuthenticatedUser(string $packageType, string $packageName, int $packageVersionId): PackageVersion
    {
        return $this->operators->packages👷GetPackageVersionForAuthenticatedUser()->call($packageType, $packageName, $packageVersionId);
    }

    /** @return */
    public function deletePackageVersionForAuthenticatedUser(string $packageType, string $packageName, int $packageVersionId): WithoutBody
    {
        return $this->operators->packages👷DeletePackageVersionForAuthenticatedUser()->call($packageType, $packageName, $packageVersionId);
    }

    /** @return */
    public function restorePackageVersionForAuthenticatedUser(string $packageType, string $packageName, int $packageVersionId): WithoutBody
    {
        return $this->operators->packages👷RestorePackageVersionForAuthenticatedUser()->call($packageType, $packageName, $packageVersionId);
    }

    /** @return Observable<Schema\Package> */
    public function listDockerMigrationConflictingPackagesForUser(string $username): iterable
    {
        return $this->operators->packages👷ListDockerMigrationConflictingPackagesForUser()->call($username);
    }

    /** @return iterable<int,Schema\Package>|WithoutBody */
    public function listPackagesForUser(string $packageType, string $visibility, string $username, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->packages👷ListPackagesForUser()->call($packageType, $visibility, $username, $page, $perPage);
    }

    /** @return iterable<int,Schema\Package>|WithoutBody */
    public function listPackagesForUserListing(string $packageType, string $visibility, string $username, int $page, int $perPage): iterable|WithoutBody
    {
        return $this->operators->packages👷ListPackagesForUserListing()->call($packageType, $visibility, $username, $page, $perPage);
    }

    /** @return */
    public function getPackageForUser(string $packageType, string $packageName, string $username): Package
    {
        return $this->operators->packages👷GetPackageForUser()->call($packageType, $packageName, $username);
    }

    /** @return */
    public function deletePackageForUser(string $packageType, string $packageName, string $username): WithoutBody
    {
        return $this->operators->packages👷DeletePackageForUser()->call($packageType, $packageName, $username);
    }

    /** @return */
    public function restorePackageForUser(string $packageType, string $packageName, string $username, string $token): WithoutBody
    {
        return $this->operators->packages👷RestorePackageForUser()->call($packageType, $packageName, $username, $token);
    }

    /** @return Observable<Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByUser(string $packageType, string $packageName, string $username): iterable
    {
        return $this->operators->packages👷GetAllPackageVersionsForPackageOwnedByUser()->call($packageType, $packageName, $username);
    }

    /** @return */
    public function getPackageVersionForUser(string $packageType, string $packageName, int $packageVersionId, string $username): PackageVersion
    {
        return $this->operators->packages👷GetPackageVersionForUser()->call($packageType, $packageName, $packageVersionId, $username);
    }

    /** @return */
    public function deletePackageVersionForUser(string $packageType, string $packageName, string $username, int $packageVersionId): WithoutBody
    {
        return $this->operators->packages👷DeletePackageVersionForUser()->call($packageType, $packageName, $username, $packageVersionId);
    }

    /** @return */
    public function restorePackageVersionForUser(string $packageType, string $packageName, string $username, int $packageVersionId): WithoutBody
    {
        return $this->operators->packages👷RestorePackageVersionForUser()->call($packageType, $packageName, $username, $packageVersionId);
    }
}
