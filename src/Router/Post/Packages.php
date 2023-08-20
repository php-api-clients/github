<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function restorePackageForAuthenticatedUser(array $params): array
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
        if (array_key_exists('token', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token');
        }

        $arguments['token'] = $params['token'];
        unset($params['token']);
        if (array_key_exists(Hydrator\Operation\User\Packages\PackageType\PackageName\Restore::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Restore::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore();
        }

        $operator = new Operator\Packages\RestorePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Restore::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['token']);
    }

    /** @return array{code: int} */
    public function restorePackageForOrg(array $params): array
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
        if (array_key_exists('token', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token');
        }

        $arguments['token'] = $params['token'];
        unset($params['token']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore();
        }

        $operator = new Operator\Packages\RestorePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['token']);
    }

    /** @return array{code: int} */
    public function restorePackageForUser(array $params): array
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
        if (array_key_exists('token', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: token');
        }

        $arguments['token'] = $params['token'];
        unset($params['token']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore();
        }

        $operator = new Operator\Packages\RestorePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['username'], $arguments['token']);
    }

    /** @return array{code: int} */
    public function restorePackageVersionForAuthenticatedUser(array $params): array
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
        if (array_key_exists(Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore();
        }

        $operator = new Operator\Packages\RestorePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['package_version_id']);
    }

    /** @return array{code: int} */
    public function restorePackageVersionForOrg(array $params): array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore();
        }

        $operator = new Operator\Packages\RestorePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['package_version_id']);
    }

    /** @return array{code: int} */
    public function restorePackageVersionForUser(array $params): array
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
        if (array_key_exists('package_version_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: package_version_id');
        }

        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (array_key_exists(Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore();
        }

        $operator = new Operator\Packages\RestorePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore::class]);

        return $operator->call($arguments['package_type'], $arguments['package_name'], $arguments['username'], $arguments['package_version_id']);
    }
}
