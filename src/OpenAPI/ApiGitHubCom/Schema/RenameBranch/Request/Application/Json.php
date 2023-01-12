<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RenameBranch\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["new_name"],"type":"object","properties":{"new_name":{"type":"string","description":"The new name of the branch."}}}';
    public const SCHEMA_TITLE = 'RenameBranch\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the branch.
     */
    private string $new_name;
    /**
     * The new name of the branch.
     */
    public function new_name() : string
    {
        return $this->new_name;
    }
}
