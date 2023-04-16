<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Checks
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function update(array $params)
    {
        $arguments = array();
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('check_run_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: check_run_id');
        }
        $arguments['check_run_id'] = $params['check_run_id'];
        unset($params['check_run_id']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb();
        }
        $operation = new Operation\Checks\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb::class], $arguments['owner'], $arguments['repo'], $arguments['check_run_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CheckRun {
            return $operation->createResponse($response);
        });
    }
    public function setSuitesPreferences(array $params)
    {
        $arguments = array();
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences();
        }
        $operation = new Operation\Checks\SetSuitesPreferences($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CheckSuitePreference {
            return $operation->createResponse($response);
        });
    }
}
