<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\SetUserAccessRestrictions\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"oneOf":[{"required":["users"],"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The username for users"}},"example":{"users":["mona"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';

    public function __construct()
    {
    }
}
