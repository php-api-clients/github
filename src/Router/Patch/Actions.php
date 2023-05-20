<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

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

    public function updateRequiredWorkflow(array $params)
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

        $operator = new Operator\Actions\UpdateRequiredWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Actions\RequiredWorkflows\RequiredWorkflowId::class]);

        return $operator->call($arguments['org'], $arguments['required_workflow_id'], $params);
    }

    public function updateOrgVariable(array $params)
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
        $operator = new Operator\Actions\UpdateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['org'], $arguments['name'], $params);
    }

    public function updateRepoVariable(array $params)
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
        $operator = new Operator\Actions\UpdateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['name'], $params);
    }

    public function updateEnvironmentVariable(array $params)
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
        $operator = new Operator\Actions\UpdateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator);

        return $operator->call($arguments['repository_id'], $arguments['name'], $arguments['environment_name'], $params);
    }
}
