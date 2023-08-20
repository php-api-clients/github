<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\EmptyObject;
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
    public function setCodespacesAccess(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Access::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Access::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access();
        }

        $operator = new Operator\Codespaces\SetCodespacesAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Access::class]);

        return $operator->call($arguments['org'], $params);
    }

    /** @return (Schema\EmptyObject | array{code: int}) */
    public function createOrUpdateSecretForAuthenticatedUser(array $params): EmptyObject|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function setSelectedReposForOrgSecret(array $params): array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories();
        }

        $operator = new Operator\Codespaces\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $params);
    }

    /** @return (Schema\EmptyObject | array{code: int}) */
    public function createOrUpdateRepoSecret(array $params): EmptyObject|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Codespaces\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function addRepositoryForSecretForAuthenticatedUser(array $params): array
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

        $operator = new Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class]);

        return $operator->call($arguments['secret_name'], $arguments['repository_id']);
    }

    /** @return (Schema\EmptyObject | array{code: int}) */
    public function createOrUpdateOrgSecret(array $params): EmptyObject|array
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

        $operator = new Operator\Codespaces\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function setRepositoriesForSecretForAuthenticatedUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories();
        }

        $operator = new Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function addSelectedRepoToOrgSecret(array $params): array
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

        $operator = new Operator\Codespaces\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
    }
}
