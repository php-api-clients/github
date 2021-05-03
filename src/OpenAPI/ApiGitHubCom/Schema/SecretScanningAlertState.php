<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningAlertState
{
    public const SCHEMA_TITLE = 'secret-scanning-alert-state';
    public const SPL_HASH = '00000000084e1e870000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`.';
}
