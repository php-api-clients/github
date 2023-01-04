<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Commit;

final class Parents
{
    public const SCHEMA_JSON = '{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits\\/7638417db6d59f3c431d3e1f261cc637155684cd"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/commit\\/7638417db6d59f3c431d3e1f261cc637155684cd"]}}}';
    public const SCHEMA_TITLE = 'Commit\\Parents';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $url;
    private ?string $html_url = null;
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
