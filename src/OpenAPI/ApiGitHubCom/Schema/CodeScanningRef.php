<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningRef
{
    public const SCHEMA_TITLE       = 'code-scanning-ref';
    public const SCHEMA_DESCRIPTION = 'The full Git reference, formatted as `refs/heads/<branch name>`,
`refs/pull/<number>/merge`, or `refs/pull/<number>/head`.';
}
