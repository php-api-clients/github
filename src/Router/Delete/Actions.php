<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Delete;

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

    public function disableSelectedRepositoryGithubActionsOrganization(array $params)
    {
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
        $operator = new Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['repository_id']);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg(array $params)
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

        $operator = new Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['org'], $arguments['runner_id']);
    }

    public function deleteArtifact(array $params)
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
        $operator = new Operator\Actions\DeleteArtifact($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['artifact_id']);
    }

    public function deleteActionsCacheById(array $params)
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
        if (array_key_exists('cache_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: cache_id');
        }

        $arguments['cache_id'] = $params['cache_id'];
        unset($params['cache_id']);
        $operator = new Operator\Actions\DeleteActionsCacheById($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['cache_id']);
    }

    public function deleteSelfHostedRunnerFromRepo(array $params)
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
        $operator = new Operator\Actions\DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id']);
    }

    public function deleteWorkflowRun(array $params)
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
        $operator = new Operator\Actions\DeleteWorkflowRun($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function deleteRepoSecret(array $params)
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
        $operator = new Operator\Actions\DeleteRepoSecret($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['secret_name']);
    }

    public function deleteRepoVariable(array $params)
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
        $operator = new Operator\Actions\DeleteRepoVariable($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['name']);
    }

    public function deleteEnvironmentSecret(array $params)
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
        $operator = new Operator\Actions\DeleteEnvironmentSecret($this->browser, $this->authentication);

        return $operator->call($arguments['repository_id'], $arguments['environment_name'], $arguments['secret_name']);
    }

    public function deleteEnvironmentVariable(array $params)
    {
        $arguments = [];
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists('environment_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: environment_name');
        }

        $arguments['environment_name'] = $params['environment_name'];
        unset($params['environment_name']);
        $operator = new Operator\Actions\DeleteEnvironmentVariable($this->browser, $this->authentication);

        return $operator->call($arguments['repository_id'], $arguments['name'], $arguments['environment_name']);
    }

    public function deleteRequiredWorkflow(array $params)
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
        $operator = new Operator\Actions\DeleteRequiredWorkflow($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['required_workflow_id']);
    }

    public function deleteSelfHostedRunnerFromOrg(array $params)
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
        $operator = new Operator\Actions\DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['runner_id']);
    }

    public function deleteOrgSecret(array $params)
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
        $operator = new Operator\Actions\DeleteOrgSecret($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['secret_name']);
    }

    public function deleteOrgVariable(array $params)
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
        $operator = new Operator\Actions\DeleteOrgVariable($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['name']);
    }

    public function deleteActionsCacheByKey(array $params)
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
        if (array_key_exists('key', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: key');
        }

        $arguments['key'] = $params['key'];
        unset($params['key']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Caches::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Caches::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches();
        }

        $operator = new Operator\Actions\DeleteActionsCacheByKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Caches::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['key'], $arguments['ref']);
    }

    public function removeSelectedRepoFromRequiredWorkflow(array $params)
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
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new Operator\Actions\RemoveSelectedRepoFromRequiredWorkflow($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['required_workflow_id'], $arguments['repository_id']);
    }

    public function removeCustomLabelFromSelfHostedRunnerForOrg(array $params)
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
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name();
        }

        $operator = new Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name::class]);

        return $operator->call($arguments['org'], $arguments['runner_id'], $arguments['name']);
    }

    public function removeSelectedRepoFromOrgSecret(array $params)
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
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new Operator\Actions\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['secret_name'], $arguments['repository_id']);
    }

    public function removeSelectedRepoFromOrgVariable(array $params)
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
        if (array_key_exists('repository_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repository_id');
        }

        $arguments['repository_id'] = $params['repository_id'];
        unset($params['repository_id']);
        $operator = new Operator\Actions\RemoveSelectedRepoFromOrgVariable($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['name'], $arguments['repository_id']);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo(array $params)
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

        $operator = new Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id']);
    }

    public function deleteWorkflowRunLogs(array $params)
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs();
        }

        $operator = new Operator\Actions\DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['run_id']);
    }

    public function removeCustomLabelFromSelfHostedRunnerForRepo(array $params)
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
        if (array_key_exists('name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: name');
        }

        $arguments['name'] = $params['name'];
        unset($params['name']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name();
        }

        $operator = new Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['runner_id'], $arguments['name']);
    }
}
