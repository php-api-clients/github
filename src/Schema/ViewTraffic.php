<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ViewTraffic
{
    public const SCHEMA_JSON = '{"title":"View Traffic","required":["uniques","count","views"],"type":"object","properties":{"count":{"type":"integer","examples":[14850]},"uniques":{"type":"integer","examples":[3782]},"views":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"View Traffic"}';
    public const SCHEMA_TITLE = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"count":14850,"uniques":3782,"views":[{"timestamp":"generated_timestamp","uniques":13,"count":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\Traffic> $views
     */
    public function __construct(public ?int $count, public ?int $uniques, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Traffic::class)] public ?array $views)
    {
    }
}
