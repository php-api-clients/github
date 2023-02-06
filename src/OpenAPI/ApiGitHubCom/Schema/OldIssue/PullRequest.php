<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OldIssue;

final class PullRequest
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'OldIssue\\PullRequest';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $diff_url;
    public readonly string $html_url;
    public readonly ?string $merged_at;
    public readonly string $patch_url;
    public readonly string $url;
    public function __construct(string $diff_url, string $html_url, string $merged_at, string $patch_url, string $url)
    {
        $this->diff_url = $diff_url;
        $this->html_url = $html_url;
        $this->merged_at = $merged_at;
        $this->patch_url = $patch_url;
        $this->url = $url;
    }
}
