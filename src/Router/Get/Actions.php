<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHub\Schema\ActionsPublicKey;
use ApiClients\Client\GitHub\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHub\Schema\ActionsSecret;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Schema\Artifact;
use ApiClients\Client\GitHub\Schema\Job;
use ApiClients\Client\GitHub\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHub\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Client\GitHub\Schema\Workflow;
use ApiClients\Client\GitHub\Schema\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHub\Schema\WorkflowUsage;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function getGithubActionsPermissionsOrganization(array $params): ActionsOrganizationPermissions|array
    {
        $matched   = true;
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

    /** @return */
    public function listSelfHostedRunnersForOrg(array $params): Ok|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners();
        }

        $operator = new Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listOrgSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets();
        }

        $operator = new Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listOrgVariables(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Variables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables();
        }

        $operator = new Operator\Actions\ListOrgVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Variables::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getActionsCacheUsageForOrg(array $params): ActionsCacheUsageOrgEnterprise|array
    {
        $matched   = true;
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

    /** @return */
    public function getActionsCacheUsageByRepoForOrg(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository();
        }

        $operator = new Operator\Actions\GetActionsCacheUsageByRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSelectedRepositoriesEnabledGithubActionsOrganization(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories();
        }

        $operator = new Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getAllowedActionsOrganization(array $params): SelectedActions|array
    {
        $matched   = true;
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

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsOrganization(array $params): ActionsGetDefaultWorkflowPermissions|array
    {
        $matched   = true;
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

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads();
        }

        $operator = new Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads::class]);

        return $operator->call($arguments['org']);
    }

    /** @return */
    public function getSelfHostedRunnerForOrg(array $params): Runner|array
    {
        $matched   = true;
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

    /** @return */
    public function getOrgPublicKey(array $params): ActionsPublicKey|array
    {
        $matched   = true;
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

    /** @return */
    public function getOrgSecret(array $params): OrganizationActionsSecret|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    /** @return */
    public function getOrgVariable(array $params): OrganizationActionsVariable|array
    {
        $matched   = true;
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

    /** @return */
    public function listArtifactsForRepo(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|array
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

    /** @return */
    public function getActionsCacheList(array $params): ActionsCacheList|array
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

    /** @return */
    public function listRepoOrganizationSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets();
        }

        $operator = new Operator\Actions\ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listRepoOrganizationVariables(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables();
        }

        $operator = new Operator\Actions\ListRepoOrganizationVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getGithubActionsPermissionsRepository(array $params): ActionsRepositoryPermissions|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions();
        }

        $operator = new Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function listSelfHostedRunnersForRepo(array $params): Json|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners();
        }

        $operator = new Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listWorkflowRunsForRepo(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|array
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

    /** @return */
    public function listRepoSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets();
        }

        $operator = new Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listRepoVariables(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Variables::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Variables::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables();
        }

        $operator = new Operator\Actions\ListRepoVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Variables::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listRepoWorkflows(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows();
        }

        $operator = new Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listEnvironmentSecrets(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|array
    {
        $matched   = true;
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

    /** @return */
    public function listEnvironmentVariables(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|array
    {
        $matched   = true;
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

    /** @return */
    public function listLabelsForSelfHostedRunnerForOrg(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        $matched   = true;
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

    /** @return */
    public function listSelectedReposForOrgSecret(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|array
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories();
        }

        $operator = new Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['page'], $arguments['per_page']);
    }

    /** @return (Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json | array{code: int}) */
    public function listSelectedReposForOrgVariable(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|array
    {
        $matched   = true;
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

    /** @return */
    public function getArtifact(array $params): Artifact|array
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

    /** @return */
    public function getActionsCacheUsage(array $params): ActionsCacheUsageByRepository|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage();
        }

        $operator = new Operator\Actions\GetActionsCacheUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getJobForWorkflowRun(array $params): Job|array
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

    /** @return */
    public function getWorkflowAccessToRepository(array $params): ActionsWorkflowAccessToRepository|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access();
        }

        $operator = new Operator\Actions\GetWorkflowAccessToRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getAllowedActionsRepository(array $params): SelectedActions|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions();
        }

        $operator = new Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getGithubActionsDefaultWorkflowPermissionsRepository(array $params): ActionsGetDefaultWorkflowPermissions|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow();
        }

        $operator = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForRepo(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads();
        }

        $operator = new Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getSelfHostedRunnerForRepo(array $params): Runner|array
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

    /** @return */
    public function getWorkflowRun(array $params): WorkflowRun|array
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

    /** @return */
    public function getRepoPublicKey(array $params): ActionsPublicKey|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey();
        }

        $operator = new Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getRepoSecret(array $params): ActionsSecret|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }

    /** @return */
    public function getRepoVariable(array $params): ActionsVariable|array
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

    /** @return */
    public function getWorkflow(array $params): Workflow|array
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

    /** @return */
    public function getEnvironmentPublicKey(array $params): ActionsPublicKey|array
    {
        $matched   = true;
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

    /** @return */
    public function getEnvironmentSecret(array $params): ActionsSecret|array
    {
        $matched   = true;
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

    /** @return */
    public function getEnvironmentVariable(array $params): ActionsVariable|array
    {
        $matched   = true;
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

    /** @return array{code: int, location: string} */
    public function downloadArtifact(array $params): array
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

    /** @return array{code: int, location: string} */
    public function downloadJobLogsForWorkflowRun(array $params): array
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
        if (array_key_exists('job_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: job_id');
        }

        $arguments['job_id'] = $params['job_id'];
        unset($params['job_id']);
        $operator = new Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['job_id']);
    }

    /** @return */
    public function getCustomOidcSubClaimForRepo(array $params): OidcCustomSubRepo|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub();
        }

        $operator = new Operator\Actions\GetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function listLabelsForSelfHostedRunnerForRepo(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
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

    /** @return iterable<Schema\EnvironmentApprovals> */
    public function getReviewsForRun(array $params): iterable
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals();
        }

        $operator = new Operator\Actions\GetReviewsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    /** @return */
    public function listWorkflowRunArtifacts(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|array
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

    /** @return */
    public function listJobsForWorkflowRun(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|array
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

    /** @return array{code: int, location: string} */
    public function downloadWorkflowRunLogs(array $params): array
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        $operator = new Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    /** @return iterable<Schema\PendingDeployment> */
    public function getPendingDeploymentsForRun(array $params): iterable
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments();
        }

        $operator = new Operator\Actions\GetPendingDeploymentsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    /** @return */
    public function getWorkflowRunUsage(array $params): WorkflowRunUsage|array
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

    /** @return */
    public function listWorkflowRuns(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|array
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

    /** @return */
    public function getWorkflowUsage(array $params): WorkflowUsage|array
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

    /** @return */
    public function getWorkflowRunAttempt(array $params): WorkflowRun|array
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

    /** @return */
    public function listJobsForWorkflowRunAttempt(array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|array
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

    /** @return array{code: int, location: string} */
    public function downloadWorkflowRunAttemptLogs(array $params): array
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

    /** @return Observable<string> */
    public function downloadArtifactStreaming(array $params): iterable
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

    /** @return Observable<string> */
    public function downloadJobLogsForWorkflowRunStreaming(array $params): iterable
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
        if (array_key_exists('job_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: job_id');
        }

        $arguments['job_id'] = $params['job_id'];
        unset($params['job_id']);
        $operator = new Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['job_id']);
    }

    /** @return Observable<string> */
    public function downloadWorkflowRunLogsStreaming(array $params): iterable
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
        if (array_key_exists('run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: run_id');
        }

        $arguments['run_id'] = $params['run_id'];
        unset($params['run_id']);
        $operator = new Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    /** @return Observable<string> */
    public function downloadWorkflowRunAttemptLogsStreaming(array $params): iterable
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
