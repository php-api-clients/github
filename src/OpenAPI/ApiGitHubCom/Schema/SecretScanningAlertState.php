<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningAlertState
{
    public const SCHEMA_JSON = '{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."}';
    public const SCHEMA_TITLE = 'secret-scanning-alert-state';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.';
    public function __construct()
    {
    }
}
