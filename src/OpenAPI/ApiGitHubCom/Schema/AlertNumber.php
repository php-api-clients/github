<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AlertNumber
{
    public const SCHEMA_JSON = '{"type":"integer","description":"The security alert number.","readOnly":true}';
    public const SCHEMA_TITLE = 'alert-number';
    public const SCHEMA_DESCRIPTION = 'The security alert number.';
    public function __construct()
    {
    }
}
