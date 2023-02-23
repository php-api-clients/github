<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class EmptyObject
{
    public const SCHEMA_JSON = '{"title":"Empty Object","type":"object","properties":{},"description":"An object without any properties.","additionalProperties":false}';
    public const SCHEMA_TITLE = 'Empty Object';
    public const SCHEMA_DESCRIPTION = 'An object without any properties.';
    public function __construct()
    {
    }
}
