<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts","checks"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","enforcementLevel":"generated_enforcement_level_null","contexts":["generated_contexts_null"],"checks":[{"context":"generated_context_null","appId":13}],"contextsUrl":"generated_contexts_url_null","strict":false}';
    /**
     * @param array<string> $contexts
     * @param array<\ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks> $checks
     */
    public function __construct(public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('enforcement_level')] public ?string $enforcementLevel, public array $contexts, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ProtectedBranchRequiredStatusCheck\Checks::class)] public array $checks, #[\EventSauce\ObjectHydrator\MapFrom('contexts_url')] public ?string $contextsUrl, public ?bool $strict)
    {
    }
}
