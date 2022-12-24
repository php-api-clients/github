<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C96E6D394Fd4F6544Bd699A1F193Bea0B
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"identifier":{"type":"string","description":"The integrator reference of the action requested by the user."}},"description":"The action requested by the user."}';
    public const SCHEMA_TITLE = 'c_96e6d394fd4f6544bd699a1f193bea0b';
    public const SCHEMA_DESCRIPTION = 'The action requested by the user.';
    /**
     * The integrator reference of the action requested by the user.
     */
    private string $identifier;
    /**
     * The integrator reference of the action requested by the user.
     */
    public function identifier() : string
    {
        return $this->identifier;
    }
}
