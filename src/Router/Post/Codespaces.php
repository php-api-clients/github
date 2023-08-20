<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Codespaces
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int} */
    public function setCodespacesAccessUsers(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers();
        }

        $operator = new Operator\Codespaces\SetCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return */
    public function createWithRepoForAuthenticatedUser(array $params): Codespace|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces();
        }

        $operator = new Operator\Codespaces\CreateWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function exportForAuthenticatedUser(array $params): CodespaceExportDetails|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName\Exports::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Exports::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports();
        }

        $operator = new Operator\Codespaces\ExportForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Exports::class]);

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function publishForAuthenticatedUser(array $params): CodespaceWithFullRepository|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName\Publish::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Publish::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish();
        }

        $operator = new Operator\Codespaces\PublishForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Publish::class]);

        return $operator->call($arguments['codespace_name'], $params);
    }

    /** @return (Schema\Codespace | array{code: int}) */
    public function startForAuthenticatedUser(array $params): Codespace|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName\Start::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Start::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start();
        }

        $operator = new Operator\Codespaces\StartForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Start::class]);

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function stopForAuthenticatedUser(array $params): Codespace|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName\Stop::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Stop::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop();
        }

        $operator = new Operator\Codespaces\StopForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Stop::class]);

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function createForAuthenticatedUser(array $params): Codespace|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces();
        }

        $operator = new Operator\Codespaces\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces::class]);

        return $operator->call($params);
    }

    /** @return */
    public function createWithPrForAuthenticatedUser(array $params): Codespace|array
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
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces();
        }

        $operator = new Operator\Codespaces\CreateWithPrForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $params);
    }

    /** @return (Schema\Codespace | array{code: int}) */
    public function stopInOrganization(array $params): Codespace|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop();
        }

        $operator = new Operator\Codespaces\StopInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop::class]);

        return $operator->call($arguments['org'], $arguments['username'], $arguments['codespace_name']);
    }
}
