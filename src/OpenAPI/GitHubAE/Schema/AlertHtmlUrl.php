<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AlertHtmlUrl
{
    public const SCHEMA_JSON = '{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true}';
    public const SCHEMA_TITLE = 'alert-html-url';
    public const SCHEMA_DESCRIPTION = 'The GitHub URL of the alert resource.';
}
