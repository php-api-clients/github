<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class AlertNumber
{
    public const SCHEMA_JSON        = '{"type":"integer","description":"The security alert number.","readOnly":true}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The security alert number.';

    public function __construct()
    {
    }
}
