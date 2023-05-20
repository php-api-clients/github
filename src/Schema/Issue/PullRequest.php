<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Issue;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PullRequest
{
    public const SCHEMA_JSON         = '{"required":["diff_url","html_url","patch_url","url"],"type":"object","properties":{"merged_at":{"type":["string","null"],"format":"date-time"},"diff_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"patch_url":{"type":["string","null"],"format":"uri"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"merged_at":"1970-01-01T00:00:00+00:00","diff_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","patch_url":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"}';

    public function __construct(#[MapFrom('merged_at')] public ?string $mergedAt, #[MapFrom('diff_url')] public ?string $diffUrl, #[MapFrom('html_url')] public ?string $htmlUrl, #[MapFrom('patch_url')] public ?string $patchUrl, public ?string $url)
    {
    }
}
