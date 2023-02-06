<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","examples":[{"issues":"read","deployments":"write"}]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'AuthenticationToken\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public function __construct()
    {
    }
}
