<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PublishForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"A name for the new repository."},"private":{"type":"boolean","description":"Whether the new repository should be private.","default":false}}}';
    public const SCHEMA_TITLE = 'PublishForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A name for the new repository.
     */
    private string $name;
    /**
     * Whether the new repository should be private.
     */
    private bool $private;
    /**
     * A name for the new repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Whether the new repository should be private.
     */
    public function private() : bool
    {
        return $this->private;
    }
}
