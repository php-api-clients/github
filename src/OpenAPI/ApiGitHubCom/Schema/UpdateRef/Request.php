<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateRef;

final class Request
{
    public const SCHEMA_JSON = '{"required":["sha"],"type":"object","properties":{"sha":{"type":"string","description":"The SHA1 value to set this reference to"},"force":{"type":"boolean","description":"Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you\'re not overwriting work.","default":false}}}';
    public const SCHEMA_TITLE = 'UpdateRef\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA1 value to set this reference to
     */
    private string $sha;
    /**
     * Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     */
    private ?bool $force = null;
    /**
     * The SHA1 value to set this reference to
     */
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * Indicates whether to force the update or to make sure the update is a fast-forward update. Leaving this out or setting it to `false` will make sure you're not overwriting work.
     */
    public function force() : ?bool
    {
        return $this->force;
    }
}
