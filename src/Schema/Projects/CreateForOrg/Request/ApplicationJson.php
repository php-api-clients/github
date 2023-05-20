<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Projects\CreateForOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the project."},"body":{"type":"string","description":"The description of the project."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","body":"generated"}';

    /**
     * name: The name of the project.
     * body: The description of the project.
     */
    public function __construct(public string $name, public ?string $body)
    {
    }
}
