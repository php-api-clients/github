<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\UpdateRepoVariable\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the variable."},"value":{"type":"string","description":"The value of the variable."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","value":"generated"}';

    /**
     * name: The name of the variable.
     * value: The value of the variable.
     */
    public function __construct(public ?string $name, public ?string $value)
    {
    }
}
