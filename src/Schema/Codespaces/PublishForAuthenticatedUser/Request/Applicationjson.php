<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Codespaces\PublishForAuthenticatedUser\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"A name for the new repository."},"private":{"type":"boolean","description":"Whether the new repository should be private.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A name for the new repository.
     */
    public ?string $name;
    /**
     * Whether the new repository should be private.
     */
    public ?bool $private;
    public function __construct(string $name, bool $private)
    {
        $this->name = $name;
        $this->private = $private;
    }
}
