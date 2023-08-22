<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Packages
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Observable<Schema\Package> | array{code: int}) */
    public function listPackagesForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('visibility', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: visibility');
        }

        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\User\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Packages::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages();
        }

        $operator = new Operator\Packages\ListPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages::class]);

        return $operator->call($arguments['package_type'], $arguments['visibility'], $arguments['page'], $arguments['per_page']);
    }

    /** @return (Observable<Schema\Package> | array{code: int}) */
    public function listPackagesForOrganization(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('visibility', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: visibility');
        }

        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages();
        }

        $operator = new Operator\Packages\ListPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages::class]);

        return $operator->call($arguments['package_type'], $arguments['org'], $arguments['visibility'], $arguments['page'], $arguments['per_page']);
    }

    /** @return Observable<Schema\Package> */
    public function listDockerMigrationConflictingPackagesForAuthenticatedUser(array $params): iterable
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Docker\Conflicts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Docker\Conflicts::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Docker🌀Conflicts();
        }

        $operator = new Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Docker\Conflicts::class]);

        return $operator->call();
    }

    /** @return (Observable<Schema\Package> | array{code: int}) */
    public function listPackagesForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('visibility', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: visibility');
        }

        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages();
        }

        $operator = new Operator\Packages\ListPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages::class]);

        return $operator->call($arguments['package_type'], $arguments['visibility'], $arguments['username'], $arguments['page'], $arguments['per_page']);
    }

    /** @return Observable<Schema\Package> */
    public function listDockerMigrationConflictingPackagesForOrganization(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Docker\Conflicts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Docker\Conflicts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts();
        }

        $operator = new Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Docker\Conflicts::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getPackageForAuthenticatedUser(array $params): Package|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists(Hydrator\Operation\User\Packages\PackageType\PackageName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName();
        }

        $operator = new Operator\Packages\GetPackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name']);
    }

    /** @return Observable<Schema\Package> */
    public function listDockerMigrationConflictingPackagesForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Docker\Conflicts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Docker\Conflicts::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts();
        }

        $operator = new Operator\Packages\ListDockerMigrationConflictingPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Docker\Conflicts::class]);

        return $operator->call($arguments['username']);
    }

    /** @return */
    public function getPackageForOrganization(array $params): Package|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName();
        }

        $operator = new Operator\Packages\GetPackageForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org']);
    }

    /** @return Observable<Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists(Hydrator\Operation\User\Packages\PackageType\PackageName\Versions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions();
        }

        $operator = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['page'], $arguments['per_page'], $arguments['state']);
    }

    /** @return */
    public function getPackageForUser(array $params): Package|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages\PackageType\PackageName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName();
        }

        $operator = new Operator\Packages\GetPackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['username']);
    }

    /** @return Observable<Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions();
        }

        $operator = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['page'], $arguments['per_page'], $arguments['state']);
    }

    /** @return */
    public function getPackageVersionForAuthenticatedUser(array $params): PackageVersion|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_version_id');
        }

        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (array_key_exists(Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId();
        }

        $operator = new Operator\Packages\GetPackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['package_version_id']);
    }

    /** @return Observable<Schema\PackageVersion> */
    public function getAllPackageVersionsForPackageOwnedByUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions();
        }

        $operator = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['username']);
    }

    /** @return */
    public function getPackageVersionForOrganization(array $params): PackageVersion|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_version_id');
        }

        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId();
        }

        $operator = new Operator\Packages\GetPackageVersionForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['package_version_id']);
    }

    /** @return */
    public function getPackageVersionForUser(array $params): PackageVersion|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('package_type', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_type');
        }

        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_name');
        }

        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_version_id');
        }

        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId();
        }

        $operator = new Operator\Packages\GetPackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['package_version_id'], $arguments['username']);
    }
}
