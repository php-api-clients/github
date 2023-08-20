<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok;
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

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function get(array $params): CheckRun|array
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
        if (array_key_exists('check_run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_run_id');
        }

        $arguments['check_run_id'] = $params['check_run_id'];
        unset($params['check_run_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId();
        }

        $operator = new Operator\Checks\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_run_id']);
    }

    /** @return */
    public function getSuite(array $params): CheckSuite|array
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
        if (array_key_exists('check_suite_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_suite_id');
        }

        $arguments['check_suite_id'] = $params['check_suite_id'];
        unset($params['check_suite_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId();
        }

        $operator = new Operator\Checks\GetSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_suite_id']);
    }

    /** @return iterable<Schema\CheckAnnotation> */
    public function listAnnotations(array $params): iterable
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
        if (array_key_exists('check_run_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_run_id');
        }

        $arguments['check_run_id'] = $params['check_run_id'];
        unset($params['check_run_id']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations();
        }

        $operator = new Operator\Checks\ListAnnotations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_run_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listForSuite(array $params): Ok|array
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
        if (array_key_exists('check_suite_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_suite_id');
        }

        $arguments['check_suite_id'] = $params['check_suite_id'];
        unset($params['check_suite_id']);
        if (array_key_exists('check_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_name');
        }

        $arguments['check_name'] = $params['check_name'];
        unset($params['check_name']);
        if (array_key_exists('status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status');
        }

        $arguments['status'] = $params['status'];
        unset($params['status']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns();
        }

        $operator = new Operator\Checks\ListForSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_suite_id'], $arguments['check_name'], $arguments['status'], $arguments['filter'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listForRef(array $params): Json|array
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
        if (array_key_exists('check_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_name');
        }

        $arguments['check_name'] = $params['check_name'];
        unset($params['check_name']);
        if (array_key_exists('status', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: status');
        }

        $arguments['status'] = $params['status'];
        unset($params['status']);
        if (array_key_exists('app_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: app_id');
        }

        $arguments['app_id'] = $params['app_id'];
        unset($params['app_id']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns();
        }

        $operator = new Operator\Checks\ListForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['check_name'], $arguments['status'], $arguments['app_id'], $arguments['filter'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function listSuitesForRef(array $params): \ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|array
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
        if (array_key_exists('app_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: app_id');
        }

        $arguments['app_id'] = $params['app_id'];
        unset($params['app_id']);
        if (array_key_exists('check_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: check_name');
        }

        $arguments['check_name'] = $params['check_name'];
        unset($params['check_name']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites();
        }

        $operator = new Operator\Checks\ListSuitesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['ref'], $arguments['app_id'], $arguments['check_name'], $arguments['per_page'], $arguments['page']);
    }
}
