<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url","html_url"],"type":"object","properties":{"html_url":{"type":"string","format":"uri"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Commit\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $html_url;
    public readonly string $sha;
    public readonly string $url;
    public function __construct(string $html_url, string $sha, string $url)
    {
        $this->html_url = $html_url;
        $this->sha = $sha;
        $this->url = $url;
    }
}
