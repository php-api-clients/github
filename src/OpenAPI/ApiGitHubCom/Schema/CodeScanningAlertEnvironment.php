<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlertEnvironment
{
    public const SCHEMA_TITLE       = 'code-scanning-alert-environment';
    public const SCHEMA_DESCRIPTION = 'Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.';
}
