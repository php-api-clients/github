<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Comments
{
    public const SCHEMA_JSON = '{"required":["path","body"],"type":"object","properties":{"path":{"type":"string","description":"The relative path to the file that necessitates a review comment."},"position":{"type":"integer","description":"The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below."},"body":{"type":"string","description":"Text of the review comment."},"line":{"type":"integer","examples":[28]},"side":{"type":"string","examples":["RIGHT"]},"start_line":{"type":"integer","examples":[26]},"start_side":{"type":"string","examples":["LEFT"]}}}';
    public const SCHEMA_TITLE = 'Json\\Comments';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The relative path to the file that necessitates a review comment.
     */
    public readonly string $path;
    /**
     * The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     */
    public readonly ?int $position;
    /**
     * Text of the review comment.
     */
    public readonly string $body;
    public readonly ?int $line;
    public readonly ?string $side;
    public readonly ?int $start_line;
    public readonly ?string $start_side;
    public function __construct(string $path, int $position, string $body, int $line, string $side, int $start_line, string $start_side)
    {
        $this->path = $path;
        $this->position = $position;
        $this->body = $body;
        $this->line = $line;
        $this->side = $side;
        $this->start_line = $start_line;
        $this->start_side = $start_side;
    }
}
