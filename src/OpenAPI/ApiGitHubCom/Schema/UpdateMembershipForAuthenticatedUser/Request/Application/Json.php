<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateMembershipForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["active"],"type":"string","description":"The state that the membership should be in. Only `\\"active\\"` will be accepted."}}}';
    public const SCHEMA_TITLE = 'UpdateMembershipForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     */
    private string $state;
    /**
     * The state that the membership should be in. Only `"active"` will be accepted.
     */
    public function state() : string
    {
        return $this->state;
    }
}
