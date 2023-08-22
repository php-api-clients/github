<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeScanningAlert;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodeScanning
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrg(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('tool_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tool_name');
        }

        $arguments['tool_name'] = $params['tool_name'];
        unset($params['tool_name']);
        if (array_key_exists('tool_guid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tool_guid');
        }

        $arguments['tool_guid'] = $params['tool_guid'];
        unset($params['tool_guid']);
        if (array_key_exists('before', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: before');
        }

        $arguments['before'] = $params['before'];
        unset($params['before']);
        if (array_key_exists('after', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: after');
        }

        $arguments['after'] = $params['after'];
        unset($params['after']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\CodeScanning\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\CodeScanning\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts();
        }

        $operator = new Operator\CodeScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\CodeScanning\Alerts::class]);

        return $operator->call($arguments['org'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['before'], $arguments['after'], $arguments['state'], $arguments['severity'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return (Observable<Schema\CodeScanningAlertItems> | array{code: int}) */
    public function listAlertsForRepo(array $params): iterable
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
        if (array_key_exists('tool_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tool_name');
        }

        $arguments['tool_name'] = $params['tool_name'];
        unset($params['tool_name']);
        if (array_key_exists('tool_guid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tool_guid');
        }

        $arguments['tool_guid'] = $params['tool_guid'];
        unset($params['tool_guid']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('severity', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: severity');
        }

        $arguments['severity'] = $params['severity'];
        unset($params['severity']);
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts();
        }

        $operator = new Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['ref'], $arguments['state'], $arguments['severity'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return Observable<Schema\CodeScanningAnalysis> */
    public function listRecentAnalyses(array $params): iterable
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
        if (array_key_exists('tool_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tool_name');
        }

        $arguments['tool_name'] = $params['tool_name'];
        unset($params['tool_name']);
        if (array_key_exists('tool_guid', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: tool_guid');
        }

        $arguments['tool_guid'] = $params['tool_guid'];
        unset($params['tool_guid']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
        if (array_key_exists('sarif_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sarif_id');
        }

        $arguments['sarif_id'] = $params['sarif_id'];
        unset($params['sarif_id']);
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses();
        }

        $operator = new Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['ref'], $arguments['sarif_id'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return */
    public function getDefaultSetup(array $params): CodeScanningDefaultSetup|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup();
        }

        $operator = new Operator\CodeScanning\GetDefaultSetup($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (Schema\CodeScanningAlert | array{code: int}) */
    public function getAlert(array $params): CodeScanningAlert|array
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: alert_number');
        }

        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber();
        }

        $operator = new Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number']);
    }

    /** @return */
    public function getAnalysis(array $params): CodeScanningAnalysis|array
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
        if (array_key_exists('analysis_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: analysis_id');
        }

        $arguments['analysis_id'] = $params['analysis_id'];
        unset($params['analysis_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId();
        }

        $operator = new Operator\CodeScanning\GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['analysis_id']);
    }

    /** @return Observable<Schema\CodeScanningCodeqlDatabase> */
    public function listCodeqlDatabases(array $params): iterable
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases();
        }

        $operator = new Operator\CodeScanning\ListCodeqlDatabases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases::class]);

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return (Schema\CodeScanningSarifsStatus | array{code: int}) */
    public function getSarif(array $params): CodeScanningSarifsStatus|array
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
        if (array_key_exists('sarif_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sarif_id');
        }

        $arguments['sarif_id'] = $params['sarif_id'];
        unset($params['sarif_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId();
        }

        $operator = new Operator\CodeScanning\GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['sarif_id']);
    }

    /** @return Observable<Schema\CodeScanningAlertInstance> */
    public function listAlertInstances(array $params): iterable
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: alert_number');
        }

        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        if (array_key_exists('ref', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: ref');
        }

        $arguments['ref'] = $params['ref'];
        unset($params['ref']);
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances();
        }

        $operator = new Operator\CodeScanning\ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number'], $arguments['ref'], $arguments['page'], $arguments['per_page']);
    }

    /** @return (Schema\CodeScanningCodeqlDatabase | array{code: int}) */
    public function getCodeqlDatabase(array $params): CodeScanningCodeqlDatabase|array
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
        if (array_key_exists('language', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: language');
        }

        $arguments['language'] = $params['language'];
        unset($params['language']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language();
        }

        $operator = new Operator\CodeScanning\GetCodeqlDatabase($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['language']);
    }
}
