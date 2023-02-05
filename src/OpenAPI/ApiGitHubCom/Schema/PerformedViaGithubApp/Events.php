<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp;

final class Events
{
    public const SCHEMA_JSON = '{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run"],"type":"string"}';
    public const SCHEMA_TITLE = 'PerformedViaGithubApp\\Events';
    public const SCHEMA_DESCRIPTION = '';
    public function __construct()
    {
    }
}
