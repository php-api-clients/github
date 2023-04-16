<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract0da5052717f19bf5900e2e260e39678c
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"archived_at":{"type":"object","properties":{"from":{"type":["string","null"],"format":"date-time"},"to":{"type":["string","null"],"format":"date-time"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archived_at":{"from":"1970-01-01T00:00:00+00:00","to":"1970-01-01T00:00:00+00:00"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('archived_at')] public ?Schema\WebhookProjectsV2ItemArchived\Changes\ArchivedAt $archivedAt)
    {
    }
}
