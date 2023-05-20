<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class Hovercard
{
    public const SCHEMA_JSON         = '{"title":"Hovercard","required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"required":["message","octicon"],"type":"object","properties":{"message":{"type":"string"},"octicon":{"type":"string"}}}}},"description":"Hovercard"}';
    public const SCHEMA_TITLE        = 'Hovercard';
    public const SCHEMA_DESCRIPTION  = 'Hovercard';
    public const SCHEMA_EXAMPLE_DATA = '{"contexts":[{"message":"generated","octicon":"generated"},{"message":"generated","octicon":"generated"}]}';

    public function __construct(public array $contexts)
    {
    }
}
