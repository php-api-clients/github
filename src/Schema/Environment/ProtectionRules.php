<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Environment;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ProtectionRules
{
    public const SCHEMA_JSON = '{"required":["id","node_id","type"],"type":"object","properties":{"id":{"type":"integer","examples":[3515]},"node_id":{"type":"string","examples":["MDQ6R2F0ZTM1MTU="]},"type":{"type":"string","examples":["wait_timer"]},"wait_timer":{"type":"integer","description":"The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).","examples":[30]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3515,"node_id":"MDQ6R2F0ZTM1MTU=","type":"wait_timer","wait_timer":30}';
    /**
     * waitTimer: The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $type, #[\EventSauce\ObjectHydrator\MapFrom('wait_timer')] public ?int $waitTimer)
    {
    }
}
