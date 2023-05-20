<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson;

final readonly class Accepted
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated"}';

    public function __construct(public ?string $message)
    {
    }
}
