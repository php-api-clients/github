<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\OrganizationProgrammaticAccessGrantRequest\Permissions;

final readonly class Organization
{
    public const SCHEMA_JSON         = '{"type":"object","additionalProperties":{"type":"string"}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
