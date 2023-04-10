<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractbfc83fe4cb010fecc14862b30d18aa1d
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"diff_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","merged_at":"1970-01-01T00:00:00+00:00","patch_url":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('diff_url')] public ?string $diffUrl, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('merged_at')] public ?string $mergedAt, #[\EventSauce\ObjectHydrator\MapFrom('patch_url')] public ?string $patchUrl, public ?string $url)
    {
    }
}
