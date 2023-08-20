<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuitePreference;
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
    public function update(array $params): CheckRun|array
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

        $operator = new Operator\Checks\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['check_run_id'], $params);
    }

    /** @return */
    public function setSuitesPreferences(array $params): CheckSuitePreference|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences();
        }

        $operator = new Operator\Checks\SetSuitesPreferences($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }
}
