<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\TimelineCommittedEvent;

final class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url","html_url"],"type":"object","properties":{"sha":{"type":"string","description":"SHA for the commit","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'TimelineCommittedEvent\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * SHA for the commit
     */
    private string $sha;
    private string $url;
    private string $html_url;
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
    public function html_url() : string
    {
        return $this->html_url;
    }
}
