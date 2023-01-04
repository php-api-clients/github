<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\IssueSearchResultItem;

final class PullRequest
{
    public const SCHEMA_JSON = '{"required":["diff_url","html_url","patch_url","url"],"type":"object","properties":{"merged_at":{"type":["string","null"],"format":"date-time"},"diff_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"patch_url":{"type":["string","null"],"format":"uri"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = 'IssueSearchResultItem\\PullRequest';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $merged_at = null;
    private ?string $diff_url;
    private ?string $html_url;
    private ?string $patch_url;
    private ?string $url;
    public function merged_at() : ?string
    {
        return $this->merged_at;
    }
    public function diff_url() : ?string
    {
        return $this->diff_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function patch_url() : ?string
    {
        return $this->patch_url;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
