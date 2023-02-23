<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class ViewTraffic
{
    public const SCHEMA_JSON = '{"title":"View Traffic","required":["uniques","count","views"],"type":"object","properties":{"count":{"type":"integer","examples":[14850]},"uniques":{"type":"integer","examples":[3782]},"views":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"View Traffic"}';
    public const SCHEMA_TITLE = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    public ?int $count;
    public ?int $uniques;
    public ?array $views;
    public function __construct(int $count, int $uniques, array $views)
    {
        $this->count = $count;
        $this->uniques = $uniques;
        $this->views = $views;
    }
}
