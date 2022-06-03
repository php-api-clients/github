<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation;

final class Checks
{
    public function create_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\Create_($owner, $repo);
    }
    public function get_($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\Get_($owner, $repo, $check_run_id);
    }
    public function update_($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\Update_($owner, $repo, $check_run_id);
    }
    public function listAnnotations_($owner, $repo, $check_run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListAnnotations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListAnnotations_($owner, $repo, $check_run_id, $per_page, $page);
    }
    public function createSuite_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\CreateSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\CreateSuite_($owner, $repo);
    }
    public function setSuitesPreferences_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\SetSuitesPreferences_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\SetSuitesPreferences_($owner, $repo);
    }
    public function getSuite_($owner, $repo, $check_suite_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\GetSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\GetSuite_($owner, $repo, $check_suite_id);
    }
    public function listForSuite_($owner, $repo, $check_suite_id, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListForSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListForSuite_($owner, $repo, $check_suite_id, $check_name, $status, $filter, $per_page, $page);
    }
    public function rerequestSuite_($owner, $repo, $check_suite_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\RerequestSuite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\RerequestSuite_($owner, $repo, $check_suite_id);
    }
    public function listForRef_($owner, $repo, $ref, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1, $app_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListForRef_($owner, $repo, $ref, $check_name, $status, $filter, $per_page, $page, $app_id);
    }
    public function listSuitesForRef_($owner, $repo, $ref, $app_id, $check_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListSuitesForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\ListSuitesForRef_($owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
