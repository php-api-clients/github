<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Issue;

final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"required":["diff_url","html_url","patch_url","url"],"type":"object","properties":{"merged_at":{"type":["string","null"],"format":"date-time"},"diff_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"patch_url":{"type":["string","null"],"format":"uri"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $merged_at;
    public ?string $diff_url;
    public ?string $html_url;
    public ?string $patch_url;
    public ?string $url;
    public function __construct(string $merged_at, string $diff_url, string $html_url, string $patch_url, string $url)
    {
        $this->merged_at = $merged_at;
        $this->diff_url = $diff_url;
        $this->html_url = $html_url;
        $this->patch_url = $patch_url;
        $this->url = $url;
    }
}
