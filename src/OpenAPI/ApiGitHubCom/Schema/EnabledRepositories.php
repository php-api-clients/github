<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class EnabledRepositories
{
    public const SCHEMA_JSON = '{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the repositories in the organization that are allowed to run GitHub Actions."}';
    public const SCHEMA_TITLE = 'enabled-repositories';
    public const SCHEMA_DESCRIPTION = 'The policy that controls the repositories in the organization that are allowed to run GitHub Actions.';
    public function __construct()
    {
    }
}
