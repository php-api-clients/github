<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PublishForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"A name for the new repository."},"private":{"type":"boolean","description":"Whether the new repository should be private.","default":false}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PublishForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A name for the new repository.
     */
    public readonly string $name;
    /**
     * Whether the new repository should be private.
     */
    public readonly bool $private;
    public function __construct(string $name, bool $private)
    {
        $this->name = $name;
        $this->private = $private;
    }
}
