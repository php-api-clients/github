<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Checks
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

    public function create(array $params)
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckRuns::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns();
        }

        $operator = new Operator\Checks\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    public function createSuite(array $params)
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckSuites::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites();
        }

        $operator = new Operator\Checks\CreateSuite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    public function rerequestRun(array $params)
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
        if (array_key_exists('check_run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_run_id');
        }

        $arguments['check_run_id'] = $params['check_run_id'];
        unset($params['check_run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest();
        }

        $operator = new Operator\Checks\RerequestRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_run_id']);
    }

    public function rerequestSuite(array $params)
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
        if (array_key_exists('check_suite_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_suite_id');
        }

        $arguments['check_suite_id'] = $params['check_suite_id'];
        unset($params['check_suite_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest();
        }

        $operator = new Operator\Checks\RerequestSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_suite_id']);
    }
}
