<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PageBuildStatus
{
    public const SCHEMA_JSON = '{"title":"Page Build Status","required":["url","status"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/builds\\/latest"]},"status":{"type":"string","examples":["queued"]}},"description":"Page Build Status"}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/builds\\/latest","status":"queued"}';
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SCHEMA_DESCRIPTION = 'Page Build Status';
    public readonly string $url;
    public readonly string $status;
    public function __construct(string $url, string $status)
    {
        $this->url = $url;
        $this->status = $status;
    }
}
