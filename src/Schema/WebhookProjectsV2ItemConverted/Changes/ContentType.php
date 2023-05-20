<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemConverted\Changes;

final readonly class ContentType
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated","to":"generated"}';

    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
