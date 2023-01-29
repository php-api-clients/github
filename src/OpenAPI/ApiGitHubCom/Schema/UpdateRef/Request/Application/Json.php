<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateRef\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["sha"],"type":"object","properties":{"sha":{"type":"string","description":"The SHA1 value to set this reference to"},"force":{"type":"boolean","description":"Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you\'re not overwriting work.","default":false}}}';
    public const SCHEMA_TITLE = 'UpdateRef\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA1 value to set this reference to
     */
    public readonly string $sha;
    /**
     * Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     */
    public readonly ?bool $force;
    public function __construct(string $sha, bool $force)
    {
        $this->sha = $sha;
        $this->force = $force;
    }
}
