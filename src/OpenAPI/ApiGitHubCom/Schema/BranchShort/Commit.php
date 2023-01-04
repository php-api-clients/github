<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchShort;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'BranchShort\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $url;
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
}
