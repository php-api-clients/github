<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors;

final class Errors
{
    public const SCHEMA_JSON = '{"required":["line","column","kind","message","path"],"type":"object","properties":{"line":{"type":"integer","description":"The line number where this errors occurs.","examples":[7]},"column":{"type":"integer","description":"The column number where this errors occurs.","examples":[3]},"source":{"type":"string","description":"The contents of the line where the error occurs.","examples":["* user"]},"kind":{"type":"string","description":"The type of error.","examples":["Invalid owner"]},"suggestion":{"type":["string","null"],"description":"Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.","examples":["The pattern `\\/` will never match anything, did you mean `*` instead?"]},"message":{"type":"string","description":"A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).","examples":["Invalid owner on line 7:\\n\\n  * user\\n    ^"]},"path":{"type":"string","description":"The path of the file where the error occured.","examples":[".github\\/CODEOWNERS"]}}}';
    public const SCHEMA_TITLE = 'CodeownersErrors\\Errors';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The line number where this errors occurs.
     */
    public readonly int $line;
    /**
     * The column number where this errors occurs.
     */
    public readonly int $column;
    /**
     * The contents of the line where the error occurs.
     */
    public readonly ?string $source;
    /**
     * The type of error.
     */
    public readonly string $kind;
    /**
     * Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.
     */
    public readonly ?string $suggestion;
    /**
     * A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).
     */
    public readonly string $message;
    /**
     * The path of the file where the error occured.
     */
    public readonly string $path;
    public function __construct(int $line, int $column, string $source, string $kind, string $suggestion, string $message, string $path)
    {
        $this->line = $line;
        $this->column = $column;
        $this->source = $source;
        $this->kind = $kind;
        $this->suggestion = $suggestion;
        $this->message = $message;
        $this->path = $path;
    }
}
