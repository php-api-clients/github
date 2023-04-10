<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts","checks"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null","enforcement_level":"generated_enforcement_level_null","contexts":["generated_contexts_null"],"checks":[{"context":"generated_context_null","app_id":13}],"contexts_url":"generated_contexts_url_null","strict":false}';
    /**
     * @param array<string> $contexts
     * @param array<\ApiClients\Client\Github\Schema\ProtectedBranchRequiredStatusCheck\Checks> $checks
     */
    public function __construct(public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('enforcement_level')] public ?string $enforcementLevel, public array $contexts, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ProtectedBranchRequiredStatusCheck\Checks::class)] public array $checks, #[\EventSauce\ObjectHydrator\MapFrom('contexts_url')] public ?string $contextsUrl, public ?bool $strict)
    {
    }
}
