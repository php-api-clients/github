<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned\Issue;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"diff_url":"generated_diff_url","html_url":"generated_html_url","merged_at":"generated_merged_at","patch_url":"generated_patch_url","url":"generated_url"}';
    public function __construct(public ?string $diff_url, public ?string $html_url, public ?string $merged_at, public ?string $patch_url, public ?string $url)
    {
    }
}
