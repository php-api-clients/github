<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeScanningAlert;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class CodeScanning
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrg(array $params): iterable
    {
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
        $operator = new Internal\Operator\CodeScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());

        return $operator->call($arguments['org'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['before'], $arguments['after'], $arguments['state'], $arguments['severity'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<int,Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepo(array $params): iterable|WithoutBody
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
        if (array_key_exists('pr', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pr');
        }

        $arguments['pr'] = $params['pr'];
        unset($params['pr']);
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
        $operator = new Internal\Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['ref'], $arguments['pr'], $arguments['state'], $arguments['severity'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return iterable<int,Schema\CodeScanningAnalysis> */
    public function listRecentAnalyses(array $params): iterable
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
        if (array_key_exists('pr', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pr');
        }

        $arguments['pr'] = $params['pr'];
        unset($params['pr']);
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
        $operator = new Internal\Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['tool_name'], $arguments['tool_guid'], $arguments['pr'], $arguments['ref'], $arguments['sarif_id'], $arguments['page'], $arguments['per_page'], $arguments['direction'], $arguments['sort']);
    }

    /** @return */
    public function getDefaultSetup(array $params): CodeScanningDefaultSetup
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
        $operator = new Internal\Operator\CodeScanning\GetDefaultSetup($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getAlert(array $params): CodeScanningAlert|WithoutBody
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
        if (array_key_exists('alert_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: alert_number');
        }

        $arguments['alert_number'] = $params['alert_number'];
        unset($params['alert_number']);
        $operator = new Internal\Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number']);
    }

    /** @return */
    public function getAnalysis(array $params): CodeScanningAnalysis
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
        if (array_key_exists('analysis_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: analysis_id');
        }

        $arguments['analysis_id'] = $params['analysis_id'];
        unset($params['analysis_id']);
        $operator = new Internal\Operator\CodeScanning\GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['analysis_id']);
    }

    /** @return Observable<Schema\CodeScanningCodeqlDatabase> */
    public function listCodeqlDatabases(array $params): iterable
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
        $operator = new Internal\Operator\CodeScanning\ListCodeqlDatabases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases());

        return $operator->call($arguments['owner'], $arguments['repo']);
    }

    /** @return */
    public function getSarif(array $params): CodeScanningSarifsStatus|WithoutBody
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
        if (array_key_exists('sarif_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sarif_id');
        }

        $arguments['sarif_id'] = $params['sarif_id'];
        unset($params['sarif_id']);
        $operator = new Internal\Operator\CodeScanning\GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['sarif_id']);
    }

    /** @return iterable<int,Schema\CodeScanningAlertInstance> */
    public function listAlertInstances(array $params): iterable
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
        if (array_key_exists('pr', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pr');
        }

        $arguments['pr'] = $params['pr'];
        unset($params['pr']);
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
        $operator = new Internal\Operator\CodeScanning\ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['alert_number'], $arguments['ref'], $arguments['pr'], $arguments['page'], $arguments['per_page']);
    }

    /** @return */
    public function getCodeqlDatabase(array $params): CodeScanningCodeqlDatabase|WithoutBody
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
        if (array_key_exists('language', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: language');
        }

        $arguments['language'] = $params['language'];
        unset($params['language']);
        $operator = new Internal\Operator\CodeScanning\GetCodeqlDatabase($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['language']);
    }

    /** @return */
    public function getVariantAnalysis(array $params): CodeScanningVariantAnalysis
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
        if (array_key_exists('codeql_variant_analysis_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codeql_variant_analysis_id');
        }

        $arguments['codeql_variant_analysis_id'] = $params['codeql_variant_analysis_id'];
        unset($params['codeql_variant_analysis_id']);
        $operator = new Internal\Operator\CodeScanning\GetVariantAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['codeql_variant_analysis_id']);
    }

    /** @return */
    public function getVariantAnalysisRepoTask(array $params): CodeScanningVariantAnalysisRepoTask
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
        if (array_key_exists('codeql_variant_analysis_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: codeql_variant_analysis_id');
        }

        $arguments['codeql_variant_analysis_id'] = $params['codeql_variant_analysis_id'];
        unset($params['codeql_variant_analysis_id']);
        if (array_key_exists('repo_owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo_owner');
        }

        $arguments['repo_owner'] = $params['repo_owner'];
        unset($params['repo_owner']);
        if (array_key_exists('repo_name', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo_name');
        }

        $arguments['repo_name'] = $params['repo_name'];
        unset($params['repo_name']);
        $operator = new Internal\Operator\CodeScanning\GetVariantAnalysisRepoTask($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀VariantAnalyses🌀CodeqlVariantAnalysisId🌀Repos🌀RepoOwner🌀RepoName());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['codeql_variant_analysis_id'], $arguments['repo_owner'], $arguments['repo_name']);
    }
}
