<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ActionsEnabled
{
    public const SCHEMA_JSON = '{"type":"boolean","description":"Whether GitHub Actions is enabled on the repository."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'actions-enabled';
    public const SCHEMA_DESCRIPTION = 'Whether GitHub Actions is enabled on the repository.';
    public function __construct()
    {
    }
}
