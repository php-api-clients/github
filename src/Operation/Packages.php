<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Packages
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listDockerMigrationConflictingPackagesForOrganization(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization::class] = new Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts());
        }

        return $this->operator[Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization::class]->call($org);
    }

    public function listPackagesForOrganization(string $packageType, string $org, string $visibility, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\ListPackagesForOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Packages\ListPackagesForOrganization::class] = new Operator\Packages\ListPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages());
        }

        return $this->operator[Operator\Packages\ListPackagesForOrganization::class]->call($packageType, $org, $visibility, $page, $perPage);
    }

    public function getPackageForOrganization(string $packageType, string $packageName, string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetPackageForOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetPackageForOrganization::class] = new Operator\Packages\GetPackageForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->operator[Operator\Packages\GetPackageForOrganization::class]->call($packageType, $packageName, $org);
    }

    public function deletePackageForOrg(string $packageType, string $packageName, string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\DeletePackageForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Packages\DeletePackageForOrg::class] = new Operator\Packages\DeletePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->operator[Operator\Packages\DeletePackageForOrg::class]->call($packageType, $packageName, $org);
    }

    public function restorePackageForOrg(string $packageType, string $packageName, string $org, string $token): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\RestorePackageForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Packages\RestorePackageForOrg::class] = new Operator\Packages\RestorePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->operator[Operator\Packages\RestorePackageForOrg::class]->call($packageType, $packageName, $org, $token);
    }

    public function getAllPackageVersionsForPackageOwnedByOrg(string $packageType, string $packageName, string $org, int $page, int $perPage, string $state): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg::class] = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->operator[Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg::class]->call($packageType, $packageName, $org, $page, $perPage, $state);
    }

    public function getPackageVersionForOrganization(string $packageType, string $packageName, string $org, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetPackageVersionForOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetPackageVersionForOrganization::class] = new Operator\Packages\GetPackageVersionForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->operator[Operator\Packages\GetPackageVersionForOrganization::class]->call($packageType, $packageName, $org, $packageVersionId);
    }

    public function deletePackageVersionForOrg(string $packageType, string $packageName, string $org, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\DeletePackageVersionForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Packages\DeletePackageVersionForOrg::class] = new Operator\Packages\DeletePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->operator[Operator\Packages\DeletePackageVersionForOrg::class]->call($packageType, $packageName, $org, $packageVersionId);
    }

    public function restorePackageVersionForOrg(string $packageType, string $packageName, string $org, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\RestorePackageVersionForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Packages\RestorePackageVersionForOrg::class] = new Operator\Packages\RestorePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->operator[Operator\Packages\RestorePackageVersionForOrg::class]->call($packageType, $packageName, $org, $packageVersionId);
    }

    public function listDockerMigrationConflictingPackagesForAuthenticatedUser(): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser::class] = new Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Docker🌀Conflicts());
        }

        return $this->operator[Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser::class]->call();
    }

    public function listPackagesForAuthenticatedUser(string $packageType, string $visibility, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\ListPackagesForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\ListPackagesForAuthenticatedUser::class] = new Operator\Packages\ListPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages());
        }

        return $this->operator[Operator\Packages\ListPackagesForAuthenticatedUser::class]->call($packageType, $visibility, $page, $perPage);
    }

    public function getPackageForAuthenticatedUser(string $packageType, string $packageName): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetPackageForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetPackageForAuthenticatedUser::class] = new Operator\Packages\GetPackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->operator[Operator\Packages\GetPackageForAuthenticatedUser::class]->call($packageType, $packageName);
    }

    public function deletePackageForAuthenticatedUser(string $packageType, string $packageName): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\DeletePackageForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\DeletePackageForAuthenticatedUser::class] = new Operator\Packages\DeletePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->operator[Operator\Packages\DeletePackageForAuthenticatedUser::class]->call($packageType, $packageName);
    }

    public function restorePackageForAuthenticatedUser(string $packageType, string $packageName, string $token): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\RestorePackageForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\RestorePackageForAuthenticatedUser::class] = new Operator\Packages\RestorePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->operator[Operator\Packages\RestorePackageForAuthenticatedUser::class]->call($packageType, $packageName, $token);
    }

    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser(string $packageType, string $packageName, int $page, int $perPage, string $state): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser::class] = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->operator[Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser::class]->call($packageType, $packageName, $page, $perPage, $state);
    }

    public function getPackageVersionForAuthenticatedUser(string $packageType, string $packageName, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetPackageVersionForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetPackageVersionForAuthenticatedUser::class] = new Operator\Packages\GetPackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->operator[Operator\Packages\GetPackageVersionForAuthenticatedUser::class]->call($packageType, $packageName, $packageVersionId);
    }

    public function deletePackageVersionForAuthenticatedUser(string $packageType, string $packageName, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\DeletePackageVersionForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\DeletePackageVersionForAuthenticatedUser::class] = new Operator\Packages\DeletePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->operator[Operator\Packages\DeletePackageVersionForAuthenticatedUser::class]->call($packageType, $packageName, $packageVersionId);
    }

    public function restorePackageVersionForAuthenticatedUser(string $packageType, string $packageName, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\RestorePackageVersionForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\RestorePackageVersionForAuthenticatedUser::class] = new Operator\Packages\RestorePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->operator[Operator\Packages\RestorePackageVersionForAuthenticatedUser::class]->call($packageType, $packageName, $packageVersionId);
    }

    public function listDockerMigrationConflictingPackagesForUser(string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\ListDockerMigrationConflictingPackagesForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\ListDockerMigrationConflictingPackagesForUser::class] = new Operator\Packages\ListDockerMigrationConflictingPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts());
        }

        return $this->operator[Operator\Packages\ListDockerMigrationConflictingPackagesForUser::class]->call($username);
    }

    public function listPackagesForUser(string $packageType, string $visibility, string $username, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\ListPackagesForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\ListPackagesForUser::class] = new Operator\Packages\ListPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages());
        }

        return $this->operator[Operator\Packages\ListPackagesForUser::class]->call($packageType, $visibility, $username, $page, $perPage);
    }

    public function getPackageForUser(string $packageType, string $packageName, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetPackageForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetPackageForUser::class] = new Operator\Packages\GetPackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->operator[Operator\Packages\GetPackageForUser::class]->call($packageType, $packageName, $username);
    }

    public function deletePackageForUser(string $packageType, string $packageName, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\DeletePackageForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\DeletePackageForUser::class] = new Operator\Packages\DeletePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->operator[Operator\Packages\DeletePackageForUser::class]->call($packageType, $packageName, $username);
    }

    public function restorePackageForUser(string $packageType, string $packageName, string $username, string $token): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\RestorePackageForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\RestorePackageForUser::class] = new Operator\Packages\RestorePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->operator[Operator\Packages\RestorePackageForUser::class]->call($packageType, $packageName, $username, $token);
    }

    public function getAllPackageVersionsForPackageOwnedByUser(string $packageType, string $packageName, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser::class] = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->operator[Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser::class]->call($packageType, $packageName, $username);
    }

    public function getPackageVersionForUser(string $packageType, string $packageName, int $packageVersionId, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\GetPackageVersionForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\GetPackageVersionForUser::class] = new Operator\Packages\GetPackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->operator[Operator\Packages\GetPackageVersionForUser::class]->call($packageType, $packageName, $packageVersionId, $username);
    }

    public function deletePackageVersionForUser(string $packageType, string $packageName, string $username, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\DeletePackageVersionForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\DeletePackageVersionForUser::class] = new Operator\Packages\DeletePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->operator[Operator\Packages\DeletePackageVersionForUser::class]->call($packageType, $packageName, $username, $packageVersionId);
    }

    public function restorePackageVersionForUser(string $packageType, string $packageName, string $username, int $packageVersionId): PromiseInterface
    {
        if (array_key_exists(Operator\Packages\RestorePackageVersionForUser::class, $this->operator) === false) {
            $this->operator[Operator\Packages\RestorePackageVersionForUser::class] = new Operator\Packages\RestorePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->operator[Operator\Packages\RestorePackageVersionForUser::class]->call($packageType, $packageName, $username, $packageVersionId);
    }
}
