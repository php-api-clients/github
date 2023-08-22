<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\List;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;
use function count;

final class Migrations
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\Migration> | array{code: int}) */
    public function listForAuthenticatedUserListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Migrations\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations::class]);
            $items    = $operator->call($arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\Migration> */
    public function listForOrgListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Migrations\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations::class]);
            $items    = $operator->call($arguments['org'], $arguments['exclude'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposForAuthenticatedUserListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Migrations\ListReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\MigrationId\Repositories::class]);
            $items    = $operator->call($arguments['migration_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }

    /** @return iterable<Schema\MinimalRepository> */
    public function listReposForOrgListing(array $params): iterable
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

        $arguments['page'] = 1;
        do {
            $operator = new Operator\Migrations\ListReposForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories::class]);
            $items    = $operator->call($arguments['org'], $arguments['migration_id'], $arguments['per_page'], $arguments['page']);

            yield from $items;

            $arguments['page']++;
        } while (count($items) > 0);
    }
}
