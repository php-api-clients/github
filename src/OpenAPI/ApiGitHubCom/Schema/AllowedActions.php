<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AllowedActions
{
    public const SCHEMA_JSON = '{"enum":["all","local_only","selected"],"type":"string","description":"The permissions policy that controls the actions and reusable workflows that are allowed to run."}';
    public const SCHEMA_TITLE = 'allowed-actions';
    public const SCHEMA_DESCRIPTION = 'The permissions policy that controls the actions and reusable workflows that are allowed to run.';
    public function __construct()
    {
    }
}
