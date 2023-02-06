<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateCommitComment\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."},"path":{"type":"string","description":"Relative path of the file to comment on."},"position":{"type":"integer","description":"Line index in the diff to comment on."},"line":{"type":"integer","description":"**Deprecated**. Use **position** parameter instead. Line number in the file to comment on."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateCommitComment\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The contents of the comment.
     */
    public readonly string $body;
    /**
     * Relative path of the file to comment on.
     */
    public readonly ?string $path;
    /**
     * Line index in the diff to comment on.
     */
    public readonly ?int $position;
    /**
     * **Deprecated**. Use **position** parameter instead. Line number in the file to comment on.
     */
    public readonly ?int $line;
    public function __construct(string $body, string $path, int $position, int $line)
    {
        $this->body = $body;
        $this->path = $path;
        $this->position = $position;
        $this->line = $line;
    }
}
