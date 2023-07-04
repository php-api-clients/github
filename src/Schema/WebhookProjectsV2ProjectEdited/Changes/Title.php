<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes;

final readonly class Title
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated","to":"generated"}';

    public function __construct(public string|null $from, public string|null $to)
    {
    }
}
