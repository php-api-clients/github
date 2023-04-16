<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class CodeScanning
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
    public function listAlertsForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('tool_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: tool_name');
        }
        $arguments['tool_name'] = $params['tool_name'];
        unset($params['tool_name']);
        if (array_key_exists('tool_guid', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: tool_guid');
        }
        $arguments['tool_guid'] = $params['tool_guid'];
        unset($params['tool_guid']);
        if (array_key_exists('before', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: before');
        }
        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: after');
        }
        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: severity');
        }
        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts();
        }
        $operation = new Operation\CodeScanning\ListAlertsForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts::class], $arguments['org'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['before'], $arguments['after'], $arguments['state'], $arguments['severity'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listAlertsForRepo(array $params)
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
        if (array_key_exists('tool_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: tool_name');
        }
        $arguments['tool_name'] = $params['tool_name'];
        unset($params['tool_name']);
        if (array_key_exists('tool_guid', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: tool_guid');
        }
        $arguments['tool_guid'] = $params['tool_guid'];
        unset($params['tool_guid']);
        if (array_key_exists('ref', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ref');
        }
        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: severity');
        }
        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts();
        }
        $operation = new Operation\CodeScanning\ListAlertsForRepo($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts::class], $arguments['owner'], $arguments['repo'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['ref'], $arguments['state'], $arguments['severity'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listRecentAnalyses(array $params)
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
        if (array_key_exists('tool_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: tool_name');
        }
        $arguments['tool_name'] = $params['tool_name'];
        unset($params['tool_name']);
        if (array_key_exists('tool_guid', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: tool_guid');
        }
        $arguments['tool_guid'] = $params['tool_guid'];
        unset($params['tool_guid']);
        if (array_key_exists('ref', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ref');
        }
        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('sarif_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sarif_id');
        }
        $arguments['sarif_id'] = $params['sarif_id'];
        unset($params['sarif_id']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('direction', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: direction');
        }
        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sort');
        }
        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses();
        }
        $operation = new Operation\CodeScanning\ListRecentAnalyses($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses::class], $arguments['owner'], $arguments['repo'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['ref'], $arguments['sarif_id'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getDefaultSetup(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\DefaultSetup::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\DefaultSetup::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀DefaultSetup();
        }
        $operation = new Operation\CodeScanning\GetDefaultSetup($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\DefaultSetup::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup {
            return $operation->createResponse($response);
        });
    }
    public function getAlert(array $params)
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: alert_number');
        }
        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb();
        }
        $operation = new Operation\CodeScanning\GetAlert($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb::class], $arguments['owner'], $arguments['repo'], $arguments['alert_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodeScanningAlert {
            return $operation->createResponse($response);
        });
    }
    public function getAnalysis(array $params)
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
        if (array_key_exists('analysis_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: analysis_id');
        }
        $arguments['analysis_id'] = $params['analysis_id'];
        unset($params['analysis_id']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb();
        }
        $operation = new Operation\CodeScanning\GetAnalysis($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb::class], $arguments['owner'], $arguments['repo'], $arguments['analysis_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodeScanningAnalysis {
            return $operation->createResponse($response);
        });
    }
    public function listCodeqlDatabases(array $params)
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
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases();
        }
        $operation = new Operation\CodeScanning\ListCodeqlDatabases($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getSarif(array $params)
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
        if (array_key_exists('sarif_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: sarif_id');
        }
        $arguments['sarif_id'] = $params['sarif_id'];
        unset($params['sarif_id']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb();
        }
        $operation = new Operation\CodeScanning\GetSarif($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb::class], $arguments['owner'], $arguments['repo'], $arguments['sarif_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus {
            return $operation->createResponse($response);
        });
    }
    public function listAlertInstances(array $params)
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: alert_number');
        }
        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (array_key_exists('ref', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: ref');
        }
        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances();
        }
        $operation = new Operation\CodeScanning\ListAlertInstances($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances::class], $arguments['owner'], $arguments['repo'], $arguments['alert_number'], $arguments['ref'], $arguments['page'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getCodeqlDatabase(array $params)
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
        if (array_key_exists('language', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: language');
        }
        $arguments['language'] = $params['language'];
        unset($params['language']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases\CbLanguageRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases\CbLanguageRcb::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases🌀CbLanguageRcb();
        }
        $operation = new Operation\CodeScanning\GetCodeqlDatabase($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases\CbLanguageRcb::class], $arguments['owner'], $arguments['repo'], $arguments['language']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase {
            return $operation->createResponse($response);
        });
    }
}
