<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AlertHtmlUrl
{
    public const SCHEMA_JSON = '{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'alert-html-url';
    public const SCHEMA_DESCRIPTION = 'The GitHub URL of the alert resource.';
    public function __construct()
    {
    }
}
