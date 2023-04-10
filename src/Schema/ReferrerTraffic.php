<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ReferrerTraffic
{
    public const SCHEMA_JSON = '{"title":"Referrer Traffic","required":["referrer","uniques","count"],"type":"object","properties":{"referrer":{"type":"string","examples":["Google"]},"count":{"type":"integer","examples":[4]},"uniques":{"type":"integer","examples":[3]}},"description":"Referrer Traffic"}';
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"referrer":"Google","count":4,"uniques":3}';
    public function __construct(public string $referrer, public int $count, public int $uniques)
    {
    }
}
