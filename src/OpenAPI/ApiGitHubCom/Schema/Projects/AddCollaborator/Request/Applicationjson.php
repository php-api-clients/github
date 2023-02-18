<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Projects\AddCollaborator\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant the collaborator.","default":"write","examples":["write"]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant the collaborator.
     */
    public ?string $permission;

    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }
}
