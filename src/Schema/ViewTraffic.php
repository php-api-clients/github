<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ViewTraffic
{
    public const SCHEMA_JSON = '{"title":"View Traffic","required":["uniques","count","views"],"type":"object","properties":{"count":{"type":"integer","examples":[14850]},"uniques":{"type":"integer","examples":[3782]},"views":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"View Traffic"}';
    public const SCHEMA_TITLE = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"count":14850,"uniques":3782,"views":[{"timestamp":"1970-01-01T00:00:00+00:00","uniques":13,"count":13}]}';
    /**
     * @param array<\ApiClients\Client\Github\Schema\Traffic> $views
     */
    public function __construct(public int $count, public int $uniques, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Traffic::class)] public array $views)
    {
    }
}
