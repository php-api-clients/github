<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\AddCollaborator\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.** We accept the following permissions to be set: `pull`, `triage`, `push`, `maintain`, `admin` and you can also specify a custom repository role name, if the owning organization has defined any.","default":"push"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"generated"}';

    /**
     * permission: The permission to grant the collaborator. **Only valid on organization-owned repositories.** We accept the following permissions to be set: `pull`, `triage`, `push`, `maintain`, `admin` and you can also specify a custom repository role name, if the owning organization has defined any.
     */
    public function __construct(public ?string $permission)
    {
    }
}
