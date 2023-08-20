<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
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

    /** @return array{code: int} */
    public function setGithubActionsPermissionsOrganization(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Actions\SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return array{code: int} */
    public function enableSelectedRepositoryGithubActionsOrganization(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['repository_id']);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForOrg(array $params): Ok|array
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

        $operator = new Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['org'], $arguments['runner_id'], $params);
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
        $operator = new Operator\Actions\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function setSelectedReposForOrgVariable(array $params): array
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
        $operator = new Operator\Actions\SetSelectedReposForOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['name'], $params);
    }

    /** @return array{code: int} */
    public function setWorkflowAccessToRepository(array $params): array
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
        $operator = new Operator\Actions\SetWorkflowAccessToRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return array{code: int} */
    public function setAllowedActionsRepository(array $params): array
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
        $operator = new Operator\Actions\SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return array{code: int} */
    public function setGithubActionsDefaultWorkflowPermissionsRepository(array $params): array
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
        $operator = new Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name'], $params);
    }

    /** @return (Schema\EmptyObject | array{code: int}) */
    public function createOrUpdateEnvironmentSecret(array $params): EmptyObject|array
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

        $operator = new Operator\Actions\CreateOrUpdateEnvironmentSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repositories\RepositoryId\Environments\EnvironmentName\Secrets\SecretName::class]);

        return $operator->call($arguments['repository_id'], $arguments['environment_name'], $arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function setSelectedRepositoriesEnabledGithubActionsOrganization(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return array{code: int} */
    public function setAllowedActionsOrganization(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Actions\SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
    }

    /** @return array{code: int} */
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        $operator = new Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $params);
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
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName();
        }

        $operator = new Operator\Actions\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName::class]);

        return $operator->call($arguments['org'], $arguments['secret_name'], $params);
    }

    /** @return array{code: int} */
    public function setGithubActionsPermissionsRepository(array $params): array
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
        $operator = new Operator\Actions\SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
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
        $operator = new Operator\Actions\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
    }

    /** @return array{code: int} */
    public function addSelectedRepoToOrgVariable(array $params): array
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
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new Operator\Actions\AddSelectedRepoToOrgVariable($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['name'], $arguments['repository_id']);
    }

    /** @return */
    public function setCustomOidcSubClaimForRepo(array $params): EmptyObject|array
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

        $operator = new Operator\Actions\SetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function setCustomLabelsForSelfHostedRunnerForRepo(array $params): Ok|array
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

        $operator = new Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id'], $params);
    }

    /** @return array{code: int} */
    public function disableWorkflow(array $params): array
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
        $operator = new Operator\Actions\DisableWorkflow($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id']);
    }

    /** @return array{code: int} */
    public function enableWorkflow(array $params): array
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
        $operator = new Operator\Actions\EnableWorkflow($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['workflow_id']);
    }
}
