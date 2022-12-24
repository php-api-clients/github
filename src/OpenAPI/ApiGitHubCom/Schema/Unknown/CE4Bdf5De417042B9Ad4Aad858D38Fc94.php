<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CE4Bdf5De417042B9Ad4Aad858D38Fc94
{
    public const SCHEMA_JSON = '{"required":["visibility"],"type":"object","properties":{"visibility":{"enum":["public","private"],"type":"string","description":"Denotes whether an email is publicly visible."}}}';
    public const SCHEMA_TITLE = 'c_e4bdf5de417042b9ad4aad858d38fc94';
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
