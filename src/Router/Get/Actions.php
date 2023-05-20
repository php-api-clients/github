<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Actions
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

    public function getGithubActionsPermissionsOrganization(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Permissions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions();
        }

        $operator = new Operator\Actions\GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions::class]);

        return $operator->call($arguments['org']);
    }

    public function listRequiredWorkflows(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RequiredWorkflows();
        }

        $operator = new Operator\Actions\ListRequiredWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelfHostedRunnersForOrg(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners();
        }

        $operator = new Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listOrgSecrets(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets();
        }

        $operator = new Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listOrgVariables(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Variables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables();
        }

        $operator = new Operator\Actions\ListOrgVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function getActionsCacheUsageForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Cache\Usage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Cache\Usage::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage();
        }

        $operator = new Operator\Actions\GetActionsCacheUsageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Cache\Usage::class]);

        return $operator->call($arguments['org']);
    }

    public function getActionsCacheUsageByRepoForOrg(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository();
        }

        $operator = new Operator\Actions\GetActionsCacheUsageByRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelectedRepositoriesEnabledGithubActionsOrganization(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories();
        }

        $operator = new Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    public function getAllowedActionsOrganization(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions();
        }

        $operator = new Operator\Actions\GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions::class]);

        return $operator->call($arguments['org']);
    }

    public function getGithubActionsDefaultWorkflowPermissionsOrganization(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow();
        }

        $operator = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow::class]);

        return $operator->call($arguments['org']);
    }

    public function getRequiredWorkflow(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('required_workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: required_workflow_id');
        }

        $arguments['required_workflow_id'] = $params['required_workflow_id'];
        unset($params['required_workflow_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RequiredWorkflows🌀RequiredWorkflowId();
        }

        $operator = new Operator\Actions\GetRequiredWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId::class]);

        return $operator->call($arguments['org'], $arguments['required_workflow_id']);
    }

    public function listRunnerApplicationsForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication);

        return $operator->call($arguments['org']);
    }

    public function getSelfHostedRunnerForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId();
        }

        $operator = new Operator\Actions\GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId::class]);

        return $operator->call($arguments['org'], $arguments['runner_id']);
    }

    public function getOrgPublicKey(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Actions\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey::class]);

        return $operator->call($arguments['org']);
    }

    public function getOrgSecret(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    public function getOrgVariable(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Variables\Name::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables\Name::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name();
        }

        $operator = new Operator\Actions\GetOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables\Name::class]);

        return $operator->call($arguments['org'], $arguments['name']);
    }

    public function listRepoRequiredWorkflows(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Org🌀Repo🌀Actions🌀RequiredWorkflows();
        }

        $operator = new Operator\Actions\ListRepoRequiredWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows::class]);

        return $operator->call($arguments['org'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listArtifactsForRepo(array $params)
    {
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
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts();
        }

        $operator = new Operator\Actions\ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['name'], $arguments['per_page'], $arguments['page']);
    }

    public function getActionsCacheList(array $params)
    {
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
        if (array_key_exists('key', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key');
        }

        $arguments['key'] = $params['key'];
        unset($params['key']);
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
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Caches::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Caches::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches();
        }

        $operator = new Operator\Actions\GetActionsCacheList($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Caches::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['key'], $arguments['per_page'], $arguments['page'], $arguments['sort'], $arguments['direction']);
    }

    public function listRepoOrganizationSecrets(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets();
        }

        $operator = new Operator\Actions\ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listRepoOrganizationVariables(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables();
        }

        $operator = new Operator\Actions\ListRepoOrganizationVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function getGithubActionsPermissionsRepository(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions();
        }

        $operator = new Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function listSelfHostedRunnersForRepo(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners();
        }

        $operator = new Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listWorkflowRunsForRepo(array $params)
    {
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
        if (array_key_exists('actor', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor');
        }

        $arguments['actor'] = $params['actor'];
        unset($params['actor']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists('event', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: event');
        }

        $arguments['event'] = $params['event'];
        unset($params['event']);
        if (array_key_exists('status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status');
        }

        $arguments['status'] = $params['status'];
        unset($params['status']);
        if (array_key_exists('created', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: created');
        }

        $arguments['created'] = $params['created'];
        unset($params['created']);
        if (array_key_exists('check_suite_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_suite_id');
        }

        $arguments['check_suite_id'] = $params['check_suite_id'];
        unset($params['check_suite_id']);
        if (array_key_exists('head_sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: head_sha');
        }

        $arguments['head_sha'] = $params['head_sha'];
        unset($params['head_sha']);
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
        if (array_key_exists('exclude_pull_requests', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude_pull_requests');
        }

        $arguments['exclude_pull_requests'] = $params['exclude_pull_requests'];
        unset($params['exclude_pull_requests']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs();
        }

        $operator = new Operator\Actions\ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['actor'], $arguments['branch'], $arguments['event'], $arguments['status'], $arguments['created'], $arguments['check_suite_id'], $arguments['head_sha'], $arguments['per_page'], $arguments['page'], $arguments['exclude_pull_requests']);
    }

    public function listRepoSecrets(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets();
        }

        $operator = new Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listRepoVariables(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Variables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Variables::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables();
        }

        $operator = new Operator\Actions\ListRepoVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Variables::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listRepoWorkflows(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows();
        }

        $operator = new Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    public function listEnvironmentSecrets(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
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
        if (array_key_exists(Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets();
        }

        $operator = new Operator\Actions\ListEnvironmentSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets::class]);

        return $operator->call($arguments['repository_id'], $arguments['environment_name'], $arguments['per_page'], $arguments['page']);
    }

    public function listEnvironmentVariables(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
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
        if (array_key_exists(Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables::class] = $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables();
        }

        $operator = new Operator\Actions\ListEnvironmentVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables::class]);

        return $operator->call($arguments['repository_id'], $arguments['environment_name'], $arguments['per_page'], $arguments['page']);
    }

    public function listSelectedRepositoriesRequiredWorkflow(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('required_workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: required_workflow_id');
        }

        $arguments['required_workflow_id'] = $params['required_workflow_id'];
        unset($params['required_workflow_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀RequiredWorkflows🌀RequiredWorkflowId🌀Repositories();
        }

        $operator = new Operator\Actions\ListSelectedRepositoriesRequiredWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['required_workflow_id']);
    }

    public function listLabelsForSelfHostedRunnerForOrg(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels();
        }

        $operator = new Operator\Actions\ListLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['org'], $arguments['runner_id']);
    }

    public function listSelectedReposForOrgSecret(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories();
        }

        $operator = new Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
    }

    public function listSelectedReposForOrgVariable(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories();
        }

        $operator = new Operator\Actions\ListSelectedReposForOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['name'], $arguments['page'], $arguments['per_page']);
    }

    public function getRepoRequiredWorkflow(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('required_workflow_id_for_repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: required_workflow_id_for_repo');
        }

        $arguments['required_workflow_id_for_repo'] = $params['required_workflow_id_for_repo'];
        unset($params['required_workflow_id_for_repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Org🌀Repo🌀Actions🌀RequiredWorkflows🌀RequiredWorkflowIdForRepo();
        }

        $operator = new Operator\Actions\GetRepoRequiredWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo::class]);

        return $operator->call($arguments['org'], $arguments['repo'], $arguments['required_workflow_id_for_repo']);
    }

    public function getArtifact(array $params)
    {
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
        if (array_key_exists('artifact_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: artifact_id');
        }

        $arguments['artifact_id'] = $params['artifact_id'];
        unset($params['artifact_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId();
        }

        $operator = new Operator\Actions\GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['artifact_id']);
    }

    public function getActionsCacheUsage(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage();
        }

        $operator = new Operator\Actions\GetActionsCacheUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function getJobForWorkflowRun(array $params)
    {
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
        if (array_key_exists('job_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: job_id');
        }

        $arguments['job_id'] = $params['job_id'];
        unset($params['job_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId();
        }

        $operator = new Operator\Actions\GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['job_id']);
    }

    public function getWorkflowAccessToRepository(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access();
        }

        $operator = new Operator\Actions\GetWorkflowAccessToRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function getAllowedActionsRepository(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions();
        }

        $operator = new Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function getGithubActionsDefaultWorkflowPermissionsRepository(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow();
        }

        $operator = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function listRunnerApplicationsForRepo(array $params)
    {
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
        $operator = new Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function getSelfHostedRunnerForRepo(array $params)
    {
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
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId();
        }

        $operator = new Operator\Actions\GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id']);
    }

    public function getWorkflowRun(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists('exclude_pull_requests', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude_pull_requests');
        }

        $arguments['exclude_pull_requests'] = $params['exclude_pull_requests'];
        unset($params['exclude_pull_requests']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId();
        }

        $operator = new Operator\Actions\GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['exclude_pull_requests']);
    }

    public function getRepoPublicKey(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function getRepoSecret(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }

    public function getRepoVariable(array $params)
    {
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
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name();
        }

        $operator = new Operator\Actions\GetRepoVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['name']);
    }

    public function getWorkflow(array $params)
    {
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
        if (array_key_exists('workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: workflow_id');
        }

        $arguments['workflow_id'] = $params['workflow_id'];
        unset($params['workflow_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId();
        }

        $operator = new Operator\Actions\GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id']);
    }

    public function getEnvironmentPublicKey(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        if (array_key_exists(Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Actions\GetEnvironmentPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\PublicKey::class]);

        return $operator->call($arguments['repository_id'], $arguments['environment_name']);
    }

    public function getEnvironmentSecret(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        if (array_key_exists('secret_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: secret_name');
        }

        $arguments['secret_name'] = $params['secret_name'];
        unset($params['secret_name']);
        if (array_key_exists(Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\GetEnvironmentSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName::class]);

        return $operator->call($arguments['repository_id'], $arguments['environment_name'], $arguments['secret_name']);
    }

    public function getEnvironmentVariable(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables\Name::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables\Name::class] = $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables🌀Name();
        }

        $operator = new Operator\Actions\GetEnvironmentVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Variables\Name::class]);

        return $operator->call($arguments['repository_id'], $arguments['environment_name'], $arguments['name']);
    }

    public function getRepoRequiredWorkflowUsage(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('required_workflow_id_for_repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: required_workflow_id_for_repo');
        }

        $arguments['required_workflow_id_for_repo'] = $params['required_workflow_id_for_repo'];
        unset($params['required_workflow_id_for_repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo\Timing::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo\Timing::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Org🌀Repo🌀Actions🌀RequiredWorkflows🌀RequiredWorkflowIdForRepo🌀Timing();
        }

        $operator = new Operator\Actions\GetRepoRequiredWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Org\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo\Timing::class]);

        return $operator->call($arguments['org'], $arguments['repo'], $arguments['required_workflow_id_for_repo']);
    }

    public function downloadArtifact(array $params)
    {
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
        if (array_key_exists('artifact_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: artifact_id');
        }

        $arguments['artifact_id'] = $params['artifact_id'];
        unset($params['artifact_id']);
        if (array_key_exists('archive_format', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: archive_format');
        }

        $arguments['archive_format'] = $params['archive_format'];
        unset($params['archive_format']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat();
        }

        $operator = new Operator\Actions\DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['artifact_id'], $arguments['archive_format']);
    }

    public function downloadJobLogsForWorkflowRun(array $params)
    {
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
        if (array_key_exists('job_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: job_id');
        }

        $arguments['job_id'] = $params['job_id'];
        unset($params['job_id']);
        $operator = new Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['job_id']);
    }

    public function getCustomOidcSubClaimForRepo(array $params)
    {
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub();
        }

        $operator = new Operator\Actions\GetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    public function listRequiredWorkflowRuns(array $params)
    {
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
        if (array_key_exists('required_workflow_id_for_repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: required_workflow_id_for_repo');
        }

        $arguments['required_workflow_id_for_repo'] = $params['required_workflow_id_for_repo'];
        unset($params['required_workflow_id_for_repo']);
        if (array_key_exists('actor', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor');
        }

        $arguments['actor'] = $params['actor'];
        unset($params['actor']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists('event', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: event');
        }

        $arguments['event'] = $params['event'];
        unset($params['event']);
        if (array_key_exists('status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status');
        }

        $arguments['status'] = $params['status'];
        unset($params['status']);
        if (array_key_exists('created', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: created');
        }

        $arguments['created'] = $params['created'];
        unset($params['created']);
        if (array_key_exists('check_suite_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_suite_id');
        }

        $arguments['check_suite_id'] = $params['check_suite_id'];
        unset($params['check_suite_id']);
        if (array_key_exists('head_sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: head_sha');
        }

        $arguments['head_sha'] = $params['head_sha'];
        unset($params['head_sha']);
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
        if (array_key_exists('exclude_pull_requests', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude_pull_requests');
        }

        $arguments['exclude_pull_requests'] = $params['exclude_pull_requests'];
        unset($params['exclude_pull_requests']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo\Runs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo\Runs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀RequiredWorkflows🌀RequiredWorkflowIdForRepo🌀Runs();
        }

        $operator = new Operator\Actions\ListRequiredWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\RequiredWorkflows\RequiredWorkflowIdForRepo\Runs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['required_workflow_id_for_repo'], $arguments['actor'], $arguments['branch'], $arguments['event'], $arguments['status'], $arguments['created'], $arguments['check_suite_id'], $arguments['head_sha'], $arguments['per_page'], $arguments['page'], $arguments['exclude_pull_requests']);
    }

    public function listLabelsForSelfHostedRunnerForRepo(array $params)
    {
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
        if (array_key_exists('runner_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: runner_id');
        }

        $arguments['runner_id'] = $params['runner_id'];
        unset($params['runner_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels();
        }

        $operator = new Operator\Actions\ListLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id']);
    }

    public function getReviewsForRun(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        $operator = new Operator\Actions\GetReviewsForRun($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function listWorkflowRunArtifacts(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts();
        }

        $operator = new Operator\Actions\ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['per_page'], $arguments['page']);
    }

    public function listJobsForWorkflowRun(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists('filter', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: filter');
        }

        $arguments['filter'] = $params['filter'];
        unset($params['filter']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs();
        }

        $operator = new Operator\Actions\ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['filter'], $arguments['per_page'], $arguments['page']);
    }

    public function downloadWorkflowRunLogs(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        $operator = new Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function getPendingDeploymentsForRun(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        $operator = new Operator\Actions\GetPendingDeploymentsForRun($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function getWorkflowRunUsage(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing();
        }

        $operator = new Operator\Actions\GetWorkflowRunUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function listWorkflowRuns(array $params)
    {
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
        if (array_key_exists('workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: workflow_id');
        }

        $arguments['workflow_id'] = $params['workflow_id'];
        unset($params['workflow_id']);
        if (array_key_exists('actor', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: actor');
        }

        $arguments['actor'] = $params['actor'];
        unset($params['actor']);
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists('event', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: event');
        }

        $arguments['event'] = $params['event'];
        unset($params['event']);
        if (array_key_exists('status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status');
        }

        $arguments['status'] = $params['status'];
        unset($params['status']);
        if (array_key_exists('created', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: created');
        }

        $arguments['created'] = $params['created'];
        unset($params['created']);
        if (array_key_exists('check_suite_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_suite_id');
        }

        $arguments['check_suite_id'] = $params['check_suite_id'];
        unset($params['check_suite_id']);
        if (array_key_exists('head_sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: head_sha');
        }

        $arguments['head_sha'] = $params['head_sha'];
        unset($params['head_sha']);
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
        if (array_key_exists('exclude_pull_requests', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude_pull_requests');
        }

        $arguments['exclude_pull_requests'] = $params['exclude_pull_requests'];
        unset($params['exclude_pull_requests']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs();
        }

        $operator = new Operator\Actions\ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id'], $arguments['actor'], $arguments['branch'], $arguments['event'], $arguments['status'], $arguments['created'], $arguments['check_suite_id'], $arguments['head_sha'], $arguments['per_page'], $arguments['page'], $arguments['exclude_pull_requests']);
    }

    public function getWorkflowUsage(array $params)
    {
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
        if (array_key_exists('workflow_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: workflow_id');
        }

        $arguments['workflow_id'] = $params['workflow_id'];
        unset($params['workflow_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing();
        }

        $operator = new Operator\Actions\GetWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id']);
    }

    public function getWorkflowRunAttempt(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists('attempt_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: attempt_number');
        }

        $arguments['attempt_number'] = $params['attempt_number'];
        unset($params['attempt_number']);
        if (array_key_exists('exclude_pull_requests', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: exclude_pull_requests');
        }

        $arguments['exclude_pull_requests'] = $params['exclude_pull_requests'];
        unset($params['exclude_pull_requests']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber();
        }

        $operator = new Operator\Actions\GetWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['attempt_number'], $arguments['exclude_pull_requests']);
    }

    public function listJobsForWorkflowRunAttempt(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists('attempt_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: attempt_number');
        }

        $arguments['attempt_number'] = $params['attempt_number'];
        unset($params['attempt_number']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs();
        }

        $operator = new Operator\Actions\ListJobsForWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['attempt_number'], $arguments['per_page'], $arguments['page']);
    }

    public function downloadWorkflowRunAttemptLogs(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists('attempt_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: attempt_number');
        }

        $arguments['attempt_number'] = $params['attempt_number'];
        unset($params['attempt_number']);
        $operator = new Operator\Actions\DownloadWorkflowRunAttemptLogs($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['attempt_number']);
    }

    public function downloadArtifactStreaming(array $params)
    {
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
        if (array_key_exists('artifact_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: artifact_id');
        }

        $arguments['artifact_id'] = $params['artifact_id'];
        unset($params['artifact_id']);
        if (array_key_exists('archive_format', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: archive_format');
        }

        $arguments['archive_format'] = $params['archive_format'];
        unset($params['archive_format']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat();
        }

        $operator = new Operator\Actions\DownloadArtifactStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['artifact_id'], $arguments['archive_format']);
    }

    public function downloadJobLogsForWorkflowRunStreaming(array $params)
    {
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
        if (array_key_exists('job_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: job_id');
        }

        $arguments['job_id'] = $params['job_id'];
        unset($params['job_id']);
        $operator = new Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['job_id']);
    }

    public function downloadWorkflowRunLogsStreaming(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        $operator = new Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function downloadWorkflowRunAttemptLogsStreaming(array $params)
    {
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists('attempt_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: attempt_number');
        }

        $arguments['attempt_number'] = $params['attempt_number'];
        unset($params['attempt_number']);
        $operator = new Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id'], $arguments['attempt_number']);
    }
}
