<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnabledOrganizations
{
    public const SCHEMA_JSON = '{"enum":["all","none","selected"],"type":"string","description":"The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions."}';
    public const SCHEMA_TITLE = 'enabled-organizations';
    public const SCHEMA_DESCRIPTION = 'The policy that controls the organizations in the enterprise that are allowed to run GitHub Actions.';
}
