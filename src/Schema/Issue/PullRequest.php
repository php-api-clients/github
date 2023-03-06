<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Issue;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"required":["diff_url","html_url","patch_url","url"],"type":"object","properties":{"merged_at":{"type":["string","null"],"format":"date-time"},"diff_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"patch_url":{"type":["string","null"],"format":"uri"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"merged_at":"generated_merged_at","diff_url":"generated_diff_url","html_url":"generated_html_url","patch_url":"generated_patch_url","url":"generated_url"}';
    public function __construct(public ?string $merged_at, public ?string $diff_url, public ?string $html_url, public ?string $patch_url, public ?string $url)
    {
    }
}
