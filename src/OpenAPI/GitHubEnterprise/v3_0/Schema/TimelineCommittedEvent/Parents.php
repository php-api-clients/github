<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\TimelineCommittedEvent;

final class Parents
{
    public const SCHEMA_TITLE = 'timeline-committed-event::parents';
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
