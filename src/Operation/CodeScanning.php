<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeScanningAlert;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodeScanning
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrg(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForOrg()->call($org, $toolName, $toolGuid, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return Observable<Schema\CodeScanningOrganizationAlertItems> */
    public function listAlertsForOrgListing(string $org, string $toolName, string|null $toolGuid, string $before, string $after, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListAlertsForOrgListing()->call($org, $toolName, $toolGuid, $before, $after, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return iterable<int,Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepo(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, int $pr, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable|WithoutBody
    {
        return $this->operators->codeScanning👷ListAlertsForRepo()->call($owner, $repo, $toolName, $toolGuid, $ref, $pr, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return iterable<int,Schema\CodeScanningAlertItems>|WithoutBody */
    public function listAlertsForRepoListing(string $owner, string $repo, string $toolName, string|null $toolGuid, string $ref, int $pr, string $state, string $severity, int $page, int $perPage, string $direction, string $sort): iterable|WithoutBody
    {
        return $this->operators->codeScanning👷ListAlertsForRepoListing()->call($owner, $repo, $toolName, $toolGuid, $ref, $pr, $state, $severity, $page, $perPage, $direction, $sort);
    }

    /** @return */
    public function getAlert(string $owner, string $repo, int $alertNumber): CodeScanningAlert|WithoutBody
    {
        return $this->operators->codeScanning👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): CodeScanningAlert
    {
        return $this->operators->codeScanning👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return iterable<int,Schema\CodeScanningAlertInstance> */
    public function listAlertInstances(string $owner, string $repo, int $alertNumber, string $ref, int $pr, int $page, int $perPage): iterable
    {
        return $this->operators->codeScanning👷ListAlertInstances()->call($owner, $repo, $alertNumber, $ref, $pr, $page, $perPage);
    }

    /** @return iterable<int,Schema\CodeScanningAlertInstance> */
    public function listAlertInstancesListing(string $owner, string $repo, int $alertNumber, string $ref, int $pr, int $page, int $perPage): iterable
    {
        return $this->operators->codeScanning👷ListAlertInstancesListing()->call($owner, $repo, $alertNumber, $ref, $pr, $page, $perPage);
    }

    /** @return iterable<int,Schema\CodeScanningAnalysis> */
    public function listRecentAnalyses(string $owner, string $repo, string $toolName, string|null $toolGuid, int $pr, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListRecentAnalyses()->call($owner, $repo, $toolName, $toolGuid, $pr, $ref, $sarifId, $page, $perPage, $direction, $sort);
    }

    /** @return iterable<int,Schema\CodeScanningAnalysis> */
    public function listRecentAnalysesListing(string $owner, string $repo, string $toolName, string|null $toolGuid, int $pr, string $ref, string $sarifId, int $page, int $perPage, string $direction, string $sort): iterable
    {
        return $this->operators->codeScanning👷ListRecentAnalysesListing()->call($owner, $repo, $toolName, $toolGuid, $pr, $ref, $sarifId, $page, $perPage, $direction, $sort);
    }

    /** @return */
    public function getAnalysis(string $owner, string $repo, int $analysisId): CodeScanningAnalysis
    {
        return $this->operators->codeScanning👷GetAnalysis()->call($owner, $repo, $analysisId);
    }

    /** @return */
    public function deleteAnalysis(string $owner, string $repo, int $analysisId, string|null $confirmDelete): CodeScanningAnalysisDeletion
    {
        return $this->operators->codeScanning👷DeleteAnalysis()->call($owner, $repo, $analysisId, $confirmDelete);
    }

    /** @return Observable<Schema\CodeScanningCodeqlDatabase> */
    public function listCodeqlDatabases(string $owner, string $repo): iterable
    {
        return $this->operators->codeScanning👷ListCodeqlDatabases()->call($owner, $repo);
    }

    /** @return */
    public function getCodeqlDatabase(string $owner, string $repo, string $language): CodeScanningCodeqlDatabase|WithoutBody
    {
        return $this->operators->codeScanning👷GetCodeqlDatabase()->call($owner, $repo, $language);
    }

    /** @return */
    public function createVariantAnalysis(string $owner, string $repo, array $params): CodeScanningVariantAnalysis
    {
        return $this->operators->codeScanning👷CreateVariantAnalysis()->call($owner, $repo, $params);
    }

    /** @return */
    public function getVariantAnalysis(string $owner, string $repo, int $codeqlVariantAnalysisId): CodeScanningVariantAnalysis
    {
        return $this->operators->codeScanning👷GetVariantAnalysis()->call($owner, $repo, $codeqlVariantAnalysisId);
    }

    /** @return */
    public function getVariantAnalysisRepoTask(string $owner, string $repo, int $codeqlVariantAnalysisId, string $repoOwner, string $repoName): CodeScanningVariantAnalysisRepoTask
    {
        return $this->operators->codeScanning👷GetVariantAnalysisRepoTask()->call($owner, $repo, $codeqlVariantAnalysisId, $repoOwner, $repoName);
    }

    /** @return */
    public function getDefaultSetup(string $owner, string $repo): CodeScanningDefaultSetup
    {
        return $this->operators->codeScanning👷GetDefaultSetup()->call($owner, $repo);
    }

    /** @return */
    public function updateDefaultSetup(string $owner, string $repo, array $params): EmptyObject|CodeScanningDefaultSetupUpdateResponse
    {
        return $this->operators->codeScanning👷UpdateDefaultSetup()->call($owner, $repo, $params);
    }

    /** @return */
    public function uploadSarif(string $owner, string $repo, array $params): CodeScanningSarifsReceipt|WithoutBody
    {
        return $this->operators->codeScanning👷UploadSarif()->call($owner, $repo, $params);
    }

    /** @return */
    public function getSarif(string $owner, string $repo, string $sarifId): CodeScanningSarifsStatus|WithoutBody
    {
        return $this->operators->codeScanning👷GetSarif()->call($owner, $repo, $sarifId);
    }
}
