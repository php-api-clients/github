<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemArchived\Changes;

final readonly class ArchivedAt
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"1970-01-01T00:00:00+00:00","to":"1970-01-01T00:00:00+00:00"}';

    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
