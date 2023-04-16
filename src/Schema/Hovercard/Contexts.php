<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Hovercard;

final readonly class Contexts
{
    public const SCHEMA_JSON         = '{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"message":"generated_message_null","octicon":"generated_octicon_null"}';

    public function __construct(public string $message, public string $octicon)
    {
    }
}
