<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit;

final class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url","html_url"],"type":"object","properties":{"html_url":{"type":"string","format":"uri"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Commit\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    private string $html_url;
    private string $sha;
    private string $url;
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
}
