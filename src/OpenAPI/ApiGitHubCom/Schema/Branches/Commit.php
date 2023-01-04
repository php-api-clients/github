<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Branches;

final class Commit
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":["string","null"]},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = 'Branches\\Commit';
    public const SCHEMA_DESCRIPTION = '';
    private $sha;
    private $url;
    public function sha()
    {
        return $this->sha;
    }
    public function url()
    {
        return $this->url;
    }
}
