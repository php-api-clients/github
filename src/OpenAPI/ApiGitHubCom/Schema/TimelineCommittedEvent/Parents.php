<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineCommittedEvent;

final class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '{"sha":"7638417db6d59f3c431d3e1f261cc637155684cd"}';
    public const SCHEMA_TITLE = 'TimelineCommittedEvent\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * SHA for the commit
     */
    public readonly string $sha;
    public readonly string $url;
    public readonly string $html_url;
    public function __construct(string $sha, string $url, string $html_url)
    {
        $this->sha = $sha;
        $this->url = $url;
        $this->html_url = $html_url;
    }
}
