<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookStatus\Commit;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parents
{
    public const SCHEMA_JSON         = '{"required":["sha","url","html_url"],"type":"object","properties":{"html_url":{"type":"string","format":"uri"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"html_url":"https:\\/\\/example.com\\/","sha":"generated_sha_null","url":"https:\\/\\/example.com\\/"}';

    public function __construct(#[MapFrom('html_url')] public string $htmlUrl, public string $sha, public string $url)
    {
    }
}
