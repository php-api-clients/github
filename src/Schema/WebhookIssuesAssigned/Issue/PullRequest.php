<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookIssuesAssigned\Issue;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequest
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"diff_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","merged_at":"1970-01-01T00:00:00+00:00","patch_url":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('diff_url')] public ?string $diffUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('merged_at')] public ?string $mergedAt, #[\EventSauce\ObjectHydrator\MapFrom('patch_url')] public ?string $patchUrl, public ?string $url)
    {
    }
}
