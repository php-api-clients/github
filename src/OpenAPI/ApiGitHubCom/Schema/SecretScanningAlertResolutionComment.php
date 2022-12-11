<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningAlertResolutionComment
{
    public const SCHEMA_TITLE = 'secret-scanning-alert-resolution-comment';
    public const SCHEMA_DESCRIPTION = 'An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.';
}
