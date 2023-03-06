<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Activity\MarkRepoNotificationsAsRead\Response\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H202
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"message":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message","url":"generated_url"}';
    public function __construct(public ?string $message, public ?string $url)
    {
    }
}
