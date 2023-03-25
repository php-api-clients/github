<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Issue;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"required":["diff_url","html_url","patch_url","url"],"type":"object","properties":{"merged_at":{"type":["string","null"],"format":"date-time"},"diff_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"patch_url":{"type":["string","null"],"format":"uri"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"mergedAt":"1970-01-01T00:00:00+00:00","diffUrl":"https:\\/\\/example.com\\/","htmlUrl":"https:\\/\\/example.com\\/","patchUrl":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('merged_at')] public ?string $mergedAt, #[\EventSauce\ObjectHydrator\MapFrom('diff_url')] public ?string $diffUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('patch_url')] public ?string $patchUrl, public ?string $url)
    {
    }
}
