<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Checks
{
    public function create_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create_($owner, $repo);
    }
    public function get_(string $owner, string $repo, int $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Get_($owner, $repo, $check_run_id);
    }
    public function update_(string $owner, string $repo, int $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Update_($owner, $repo, $check_run_id);
    }
    public function listAnnotations_(string $owner, string $repo, int $check_run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations_($owner, $repo, $check_run_id, $per_page, $page);
    }
    public function rerequestRun_(string $owner, string $repo, int $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun_($owner, $repo, $check_run_id);
    }
    public function createSuite_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite_($owner, $repo);
    }
    public function setSuitesPreferences_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\SetSuitesPreferences_($owner, $repo);
    }
    public function getSuite_(string $owner, string $repo, int $check_suite_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetSuite_($owner, $repo, $check_suite_id);
    }
    public function listForSuite_(string $owner, string $repo, int $check_suite_id, string $check_name, string $status, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForSuite_($owner, $repo, $check_suite_id, $check_name, $status, $filter, $per_page, $page);
    }
    public function rerequestSuite_(string $owner, string $repo, int $check_suite_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestSuite_($owner, $repo, $check_suite_id);
    }
    public function listForRef_(string $owner, string $repo, string $ref, string $check_name, string $status, string $filter = 'latest', int $per_page = 30, int $page = 1, int $app_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListForRef_($owner, $repo, $ref, $check_name, $status, $filter, $per_page, $page, $app_id);
    }
    public function listSuitesForRef_(string $owner, string $repo, string $ref, int $app_id, string $check_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListSuitesForRef_($owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
