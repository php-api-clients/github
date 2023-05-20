<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes;

final readonly class Permission
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated","to":"generated"}';

    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
