<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\StatusCheckPolicy;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string","examples":["continuous-integration\\/travis-ci"]},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"continuous-integration\\/travis-ci","app_id":13}';
    public function __construct(public string $context, #[\EventSauce\ObjectHydrator\MapFrom('app_id')] public ?int $appId)
    {
    }
}
