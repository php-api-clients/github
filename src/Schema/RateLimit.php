<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class RateLimit
{
    public const SCHEMA_JSON = '{"title":"Rate Limit","required":["limit","remaining","reset","used"],"type":"object","properties":{"limit":{"type":"integer"},"remaining":{"type":"integer"},"reset":{"type":"integer"},"used":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Rate Limit';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"limit":13,"remaining":13,"reset":13,"used":13}';
    public function __construct(public int $limit, public int $remaining, public int $reset, public int $used)
    {
    }
}
