<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C5Aeb182D3C0A85611Fb6F83E3Dd2823E
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."},"path":{"type":"string","description":"Relative path of the file to comment on."},"position":{"type":"integer","description":"Line index in the diff to comment on."},"line":{"type":"integer","description":"**Deprecated**. Use **position** parameter instead. Line number in the file to comment on."}}}';
    public const SCHEMA_TITLE = 'c_5aeb182d3c0a85611fb6f83e3dd2823e';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The contents of the comment.
     */
    private string $body;
    /**
     * Relative path of the file to comment on.
     */
    private ?string $path = null;
    /**
     * Line index in the diff to comment on.
     */
    private ?int $position = null;
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     */
    private ?int $line = null;
    /**
     * The contents of the comment.
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * Relative path of the file to comment on.
     */
    public function path() : ?string
    {
        return $this->path;
    }
    /**
     * Line index in the diff to comment on.
     */
    public function position() : ?int
    {
        return $this->position;
    }
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     */
    public function line() : ?int
    {
        return $this->line;
    }
}
