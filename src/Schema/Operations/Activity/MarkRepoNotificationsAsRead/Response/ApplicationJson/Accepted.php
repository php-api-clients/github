<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson;

final readonly class Accepted
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"message":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated","url":"generated"}';

    public function __construct(public ?string $message, public ?string $url)
    {
    }
}
