<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory;

final readonly class References
{
    public const SCHEMA_JSON         = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $url)
    {
    }
}
