<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Migrations
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Observable<Schema\Migration> | array{code: int}) */
    public function listForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Migrations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations();
        }

        $operator = new Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\Migration> */
    public function listForOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('exclude', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude');
        }

        $arguments['exclude'] = $params['exclude'];
        unset($params['exclude']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Migrations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations();
        }

        $operator = new Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations::class]);

        return $operator->call($arguments['org'], $arguments['exclude'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Migration | array{code: int}) */
    public function getStatusForAuthenticatedUser(array $params): Migration|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('exclude', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude');
        }

        $arguments['exclude'] = $params['exclude'];
        unset($params['exclude']);
        if (array_key_exists(Hydrator\Operation\User\Migrations\MigrationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId();
        }

        $operator = new Operator\Migrations\GetStatusForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId::class]);

        return $operator->call($arguments['migration_id'], $arguments['exclude']);
    }

    /** @return */
    public function getStatusForOrg(array $params): Migration|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('exclude', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude');
        }

        $arguments['exclude'] = $params['exclude'];
        unset($params['exclude']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Migrations\MigrationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId();
        }

        $operator = new Operator\Migrations\GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId::class]);

        return $operator->call($arguments['org'], $arguments['migration_id'], $arguments['exclude']);
    }

    /** @return */
    public function getImportStatus(array $params): Import|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Import::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Import::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import();
        }

        $operator = new Operator\Migrations\GetImportStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Import::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return array{code: int} */
    public function getArchiveForAuthenticatedUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists(Hydrator\Operation\User\Migrations\MigrationId\Archive::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId\Archive::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive();
        }

        $operator = new Operator\Migrations\GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId\Archive::class]);

        return $operator->call($arguments['migration_id']);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposForAuthenticatedUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\User\Migrations\MigrationId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories();
        }

        $operator = new Operator\Migrations\ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId\Repositories::class]);

        return $operator->call($arguments['migration_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return array{code: int} */
    public function downloadArchiveForOrg(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive();
        }

        $operator = new Operator\Migrations\DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive::class]);

        return $operator->call($arguments['org'], $arguments['migration_id']);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposForOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: migration_id');
        }

        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories();
        }

        $operator = new Operator\Migrations\ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['migration_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return Observable<Schema\PorterAuthor> */
    public function getCommitAuthors(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Import\Authors::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Import\Authors::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors();
        }

        $operator = new Operator\Migrations\GetCommitAuthors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Import\Authors::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['since']);
    }

    /** @return Observable<Schema\PorterLargeFile> */
    public function getLargeFiles(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles();
        }

        $operator = new Operator\Migrations\GetLargeFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }
}
