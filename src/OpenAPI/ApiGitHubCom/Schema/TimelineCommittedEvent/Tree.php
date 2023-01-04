<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent;

final class Tree
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'TimelineCommittedEvent\\Tree';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * SHA for the commit
     */
    private string $sha;
    private string $url;
    /**
     * SHA for the commit
     */
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
}
