<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OldIssue;

final class PullRequest
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'OldIssue\\PullRequest';
    public const SCHEMA_DESCRIPTION = '';
    private string $diff_url;
    private string $html_url;
    private ?string $merged_at;
    private string $patch_url;
    private string $url;
    public function diff_url() : string
    {
        return $this->diff_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function merged_at() : ?string
    {
        return $this->merged_at;
    }
    public function patch_url() : string
    {
        return $this->patch_url;
    }
    public function url() : string
    {
        return $this->url;
    }
}