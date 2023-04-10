<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Checks
{
    public const SCHEMA_JSON = '{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"generated_context_null","app_id":13}';
    public function __construct(public string $context, #[\EventSauce\ObjectHydrator\MapFrom('app_id')] public ?int $appId)
    {
    }
}
