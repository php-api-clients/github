<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
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
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function deletePackageForAuthenticatedUser(array $params)
    {
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

        $operator = new Operator\Packages\DeletePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name']);
    }

    public function deletePackageVersionForAuthenticatedUser(array $params)
    {
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

        $operator = new Operator\Packages\DeletePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['package_version_id']);
    }

    public function deletePackageForOrg(array $params)
    {
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

        $operator = new Operator\Packages\DeletePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org']);
    }

    public function deletePackageForUser(array $params)
    {
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

        $operator = new Operator\Packages\DeletePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['username']);
    }

    public function deletePackageVersionForOrg(array $params)
    {
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

        $operator = new Operator\Packages\DeletePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['package_version_id']);
    }

    public function deletePackageVersionForUser(array $params)
    {
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
        if (array_key_exists('package_version_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_version_id');
        }

        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId();
        }

        $operator = new Operator\Packages\DeletePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['username'], $arguments['package_version_id']);
    }
}
