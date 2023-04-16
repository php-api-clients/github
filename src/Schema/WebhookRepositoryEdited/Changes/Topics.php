<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes;

final readonly class Topics
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":["generated_from_null"]}';

    /**
     * @param ?array<string> $from
     */
    public function __construct(public ?array $from)
    {
    }
}
