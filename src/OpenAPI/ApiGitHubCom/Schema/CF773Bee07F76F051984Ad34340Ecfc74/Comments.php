<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CF773Bee07F76F051984Ad34340Ecfc74;

final class Comments
{
    public const SCHEMA_JSON = '{"required":["path","body"],"type":"object","properties":{"path":{"type":"string","description":"The relative path to the file that necessitates a review comment."},"position":{"type":"integer","description":"The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below."},"body":{"type":"string","description":"Text of the review comment."},"line":{"type":"integer","examples":[28]},"side":{"type":"string","examples":["RIGHT"]},"start_line":{"type":"integer","examples":[26]},"start_side":{"type":"string","examples":["LEFT"]}}}';
    public const SCHEMA_TITLE = 'CF773Bee07F76F051984Ad34340Ecfc74\\Comments';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The relative path to the file that necessitates a review comment.
     */
    private string $path;
    /**
     * The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     */
    private ?int $position = null;
    /**
     * Text of the review comment.
     */
    private string $body;
    private ?int $line = null;
    private ?string $side = null;
    private ?int $start_line = null;
    private ?string $start_side = null;
    /**
     * The relative path to the file that necessitates a review comment.
     */
    public function path() : string
    {
        return $this->path;
    }
    /**
     * The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. For help finding the position value, read the note below.
     */
    public function position() : ?int
    {
        return $this->position;
    }
    /**
     * Text of the review comment.
     */
    public function body() : string
    {
        return $this->body;
    }
    public function line() : ?int
    {
        return $this->line;
    }
    public function side() : ?string
    {
        return $this->side;
    }
    public function start_line() : ?int
    {
        return $this->start_line;
    }
    public function start_side() : ?string
    {
        return $this->start_side;
    }
}
