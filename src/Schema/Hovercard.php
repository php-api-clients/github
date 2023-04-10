<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Hovercard
{
    public const SCHEMA_JSON = '{"title":"Hovercard","required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}}},"description":"Hovercard"}';
    public const SCHEMA_TITLE = 'Hovercard';
    public const SCHEMA_DESCRIPTION = 'Hovercard';
    public const SCHEMA_EXAMPLE_DATA = '{"contexts":[{"message":"generated_message_null","octicon":"generated_octicon_null"}]}';
    /**
     * @param array<\ApiClients\Client\Github\Schema\Hovercard\Contexts> $contexts
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Hovercard\Contexts::class)] public array $contexts)
    {
    }
}
