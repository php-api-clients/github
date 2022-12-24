<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CB7Dd812Cad4Fbd773Ce13157F79B40E8
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the project."},"body":{"type":"string","description":"The description of the project."}}}';
    public const SCHEMA_TITLE = 'c_b7dd812cad4fbd773ce13157f79b40e8';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the project.
     */
    private string $name;
    /**
     * The description of the project.
     */
    private ?string $body = null;
    /**
     * The name of the project.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The description of the project.
     */
    public function body() : ?string
    {
        return $this->body;
    }
}
