<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json;
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

    /** @return (Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) */
    public function deleteForAuthenticatedUser(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName();
        }

        $operator = new Operator\Codespaces\DeleteForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName::class]);

        return $operator->call($arguments['codespace_name']);
    }

    /** @return array{code: int} */
    public function deleteSecretForAuthenticatedUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operator = new Operator\Codespaces\DeleteSecretForAuthenticatedUser($this->browser, $this->authentication);

        return $operator->call($arguments['secret_name']);
    }

    /** @return (Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json | array{code: int}) */
    public function deleteFromOrganization(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName();
        }

        $operator = new Operator\Codespaces\DeleteFromOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName::class]);

        return $operator->call($arguments['org'], $arguments['username'], $arguments['codespace_name']);
    }

    /** @return array{code: int} */
    public function deleteRepoSecret(array $params): array
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
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        $operator = new Operator\Codespaces\DeleteRepoSecret($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }

    /** @return array{code: int} */
    public function removeRepositoryForSecretForAuthenticatedUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId();
        }

        $operator = new Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class]);

        return $operator->call($arguments['secret_name'], $arguments['repository_id']);
    }

    /** @return array{code: int} */
    public function deleteCodespacesAccessUsers(array $params): array
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

        $operator = new Operator\Codespaces\DeleteCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return array{code: int} */
    public function deleteOrgSecret(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Codespaces\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    /** @return array{code: int} */
    public function removeSelectedRepoFromOrgSecret(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId();
        }

        $operator = new Operator\Codespaces\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
    }
}
