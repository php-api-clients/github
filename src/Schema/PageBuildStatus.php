<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PageBuildStatus
{
    public const SCHEMA_JSON = '{"title":"Page Build Status","required":["url","status"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/builds\\/latest"]},"status":{"type":"string","examples":["queued"]}},"description":"Page Build Status"}';
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SCHEMA_DESCRIPTION = 'Page Build Status';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/builds\\/latest","status":"queued"}';
    public function __construct(public ?string $url, public ?string $status)
    {
    }
}
