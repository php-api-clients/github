<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent;

final class Tree
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd"}';
    public const SCHEMA_TITLE = 'TimelineCommittedEvent\\Tree';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * SHA for the commit
     */
    public readonly string $sha;
    public readonly string $url;
    public function __construct(string $sha, string $url)
    {
        $this->sha = $sha;
        $this->url = $url;
    }
}
