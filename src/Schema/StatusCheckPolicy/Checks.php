<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\StatusCheckPolicy;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Checks
{
    public const SCHEMA_JSON         = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"continuous-integration\\/travis-ci","app_id":6}';

    public function __construct(public string $context, #[MapFrom('app_id')]
    public int|null $appId,)
    {
    }
}
