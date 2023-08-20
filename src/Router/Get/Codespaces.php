<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespacesOrgSecret;
use ApiClients\Client\GitHub\Schema\CodespacesPublicKey;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\RepoCodespacesSecret;
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

    /** @return (Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function listForAuthenticatedUser(array $params): Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
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
        if (array_key_exists(Hydrator\Operation\User\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces();
        }

        $operator = new Operator\Codespaces\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces::class]);

        return $operator->call($arguments['repository_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok | array{code: int}) */
    public function listInOrganization(array $params): Ok|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces();
        }

        $operator = new Operator\Codespaces\ListInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSecretsForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\User\Codespaces\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets();
        }

        $operator = new Operator\Codespaces\ListSecretsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets::class]);

        return $operator->call($arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Codespace | array{code: int}) */
    public function getForAuthenticatedUser(array $params): Codespace|array
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

        $operator = new Operator\Codespaces\GetForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName::class]);

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function listOrgSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets();
        }

        $operator = new Operator\Codespaces\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listInRepositoryForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces();
        }

        $operator = new Operator\Codespaces\ListInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getPublicKeyForAuthenticatedUser(array $params): CodespacesUserPublicKey|array
    {
        $matched = true;
        if (array_key_exists(Hydrator\Operation\User\Codespaces\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Codespaces\GetPublicKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\PublicKey::class]);

        return $operator->call();
    }

    /** @return */
    public function getSecretForAuthenticatedUser(array $params): CodespacesSecret|array
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

        $operator = new Operator\Codespaces\GetSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['secret_name']);
    }

    /** @return (Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function codespaceMachinesForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName\Machines::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Machines::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines();
        }

        $operator = new Operator\Codespaces\CodespaceMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Machines::class]);

        return $operator->call($arguments['codespace_name']);
    }

    /** @return */
    public function getOrgPublicKey(array $params): CodespacesPublicKey|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Codespaces\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getOrgSecret(array $params): CodespacesOrgSecret|array
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

        $operator = new Operator\Codespaces\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    /** @return (Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function getCodespacesForUserInOrg(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Members\Username\Codespaces::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Codespaces::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces();
        }

        $operator = new Operator\Codespaces\GetCodespacesForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Members\Username\Codespaces::class]);

        return $operator->call($arguments['org'], $arguments['username'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listDevcontainersInRepositoryForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers();
        }

        $operator = new Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok | array{code: int}) */
    public function repoMachinesForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|array
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
        if (array_key_exists('location', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: location');
        }

        $arguments['location'] = $params['location'];
        unset($params['location']);
        if (array_key_exists('client_ip', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_ip');
        }

        $arguments['client_ip'] = $params['client_ip'];
        unset($params['client_ip']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines();
        }

        $operator = new Operator\Codespaces\RepoMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['location'], $arguments['client_ip']);
    }

    /** @return */
    public function preFlightWithRepoForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|array
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
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('client_ip', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: client_ip');
        }

        $arguments['client_ip'] = $params['client_ip'];
        unset($params['client_ip']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_();
        }

        $operator = new Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['client_ip']);
    }

    /** @return */
    public function listRepoSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets();
        }

        $operator = new Operator\Codespaces\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listRepositoriesForSecretForAuthenticatedUser(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
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

        $operator = new Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['secret_name']);
    }

    /** @return */
    public function getExportDetailsForAuthenticatedUser(array $params): CodespaceExportDetails|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('codespace_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codespace_name');
        }

        $arguments['codespace_name'] = $params['codespace_name'];
        unset($params['codespace_name']);
        if (array_key_exists('export_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: export_id');
        }

        $arguments['export_id'] = $params['export_id'];
        unset($params['export_id']);
        if (array_key_exists(Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId();
        }

        $operator = new Operator\Codespaces\GetExportDetailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId::class]);

        return $operator->call($arguments['codespace_name'], $arguments['export_id']);
    }

    /** @return */
    public function listSelectedReposForOrgSecret(array $params): \ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories();
        }

        $operator = new Operator\Codespaces\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function getRepoPublicKey(array $params): CodespacesPublicKey|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Codespaces\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getRepoSecret(array $params): RepoCodespacesSecret|array
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

        $operator = new Operator\Codespaces\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }
}
