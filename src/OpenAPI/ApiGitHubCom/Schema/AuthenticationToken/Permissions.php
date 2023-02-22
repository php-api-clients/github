<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AuthenticationToken;

final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","examples":[{"issues":"read","deployments":"write"}]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public function __construct()
    {
    }
}
