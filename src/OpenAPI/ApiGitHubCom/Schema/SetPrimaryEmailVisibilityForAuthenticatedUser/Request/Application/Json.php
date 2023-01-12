<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetPrimaryEmailVisibilityForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["public","private"],"type":"string","description":"Denotes whether an email is publicly visible."}}}';
    public const SCHEMA_TITLE = 'SetPrimaryEmailVisibilityForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Denotes whether an email is publicly visible.
     */
    private string $visibility;
    /**
     * Denotes whether an email is publicly visible.
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
}
