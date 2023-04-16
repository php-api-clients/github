<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes;

final readonly class Public_
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":false,"to":false}';

    public function __construct(public ?bool $from, public ?bool $to)
    {
    }
}
