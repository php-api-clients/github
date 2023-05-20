<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Teams
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

    public function addMemberLegacy(array $params)
    {
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Members\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Members\Username::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username();
        }

        $operator = new Operator\Teams\AddMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Members\Username::class]);

        return $operator->call($arguments['team_id'], $arguments['username']);
    }

    public function addOrUpdateMembershipForUserLegacy(array $params)
    {
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Memberships\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Memberships\Username::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username();
        }

        $operator = new Operator\Teams\AddOrUpdateMembershipForUserLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Memberships\Username::class]);

        return $operator->call($arguments['team_id'], $arguments['username'], $params);
    }

    public function addOrUpdateProjectPermissionsLegacy(array $params)
    {
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Projects\ProjectId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Projects\ProjectId::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId();
        }

        $operator = new Operator\Teams\AddOrUpdateProjectPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Projects\ProjectId::class]);

        return $operator->call($arguments['team_id'], $arguments['project_id'], $params);
    }

    public function addOrUpdateMembershipForUserInOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username();
        }

        $operator = new Operator\Teams\AddOrUpdateMembershipForUserInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['username'], $params);
    }

    public function addOrUpdateProjectPermissionsInOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId();
        }

        $operator = new Operator\Teams\AddOrUpdateProjectPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId::class]);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['project_id'], $params);
    }

    public function addOrUpdateRepoPermissionsLegacy(array $params)
    {
        $arguments = [];
        if (array_key_exists('team_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_id');
        }

        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
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
        if (array_key_exists(Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo();
        }

        $operator = new Operator\Teams\AddOrUpdateRepoPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo::class]);

        return $operator->call($arguments['team_id'], $arguments['owner'], $arguments['repo'], $params);
    }

    public function addOrUpdateRepoPermissionsInOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
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
        $operator = new Operator\Teams\AddOrUpdateRepoPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['team_slug'], $arguments['owner'], $arguments['repo'], $params);
    }
}
