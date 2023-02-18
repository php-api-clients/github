<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class AlertHtmlUrl
{
    public const SCHEMA_JSON        = '{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The GitHub URL of the alert resource.';

    public function __construct()
    {
    }
}
