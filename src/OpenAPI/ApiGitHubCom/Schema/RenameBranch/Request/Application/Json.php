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
    public readonly string $new_name;
    public function __construct(string $new_name)
    {
        $this->new_name = $new_name;
    }
}
