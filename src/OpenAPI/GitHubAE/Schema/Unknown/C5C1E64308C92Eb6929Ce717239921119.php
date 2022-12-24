<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C5C1E64308C92Eb6929Ce717239921119
{
    public const SCHEMA_JSON = '{"required":["line","column","kind","message","path"],"type":"object","properties":{"line":{"type":"integer","description":"The line number where this errors occurs.","examples":[7]},"column":{"type":"integer","description":"The column number where this errors occurs.","examples":[3]},"source":{"type":"string","description":"The contents of the line where the error occurs.","examples":["* user"]},"kind":{"type":"string","description":"The type of error.","examples":["Invalid owner"]},"suggestion":{"type":["string","null"],"description":"Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.","examples":["The pattern `\\/` will never match anything, did you mean `*` instead?"]},"message":{"type":"string","description":"A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).","examples":["Invalid owner on line 7:\\n\\n  * user\\n    ^"]},"path":{"type":"string","description":"The path of the file where the error occured.","examples":[".github\\/CODEOWNERS"]}}}';
    public const SCHEMA_TITLE = 'c_5c1e64308c92eb6929ce717239921119';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The line number where this errors occurs.
     */
    private int $line;
    /**
     * The column number where this errors occurs.
     */
    private int $column;
    /**
     * The contents of the line where the error occurs.
     */
    private ?string $source = null;
    /**
     * The type of error.
     */
    private string $kind;
    /**
     * Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.
     */
    private $suggestion;
    /**
     * A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).
     */
    private string $message;
    /**
     * The path of the file where the error occured.
     */
    private string $path;
    /**
     * The line number where this errors occurs.
     */
    public function line() : int
    {
        return $this->line;
    }
    /**
     * The column number where this errors occurs.
     */
    public function column() : int
    {
        return $this->column;
    }
    /**
     * The contents of the line where the error occurs.
     */
    public function source() : ?string
    {
        return $this->source;
    }
    /**
     * The type of error.
     */
    public function kind() : string
    {
        return $this->kind;
    }
    /**
     * Suggested action to fix the error. This will usually be `null`, but is provided for some common errors.
     */
    public function suggestion()
    {
        return $this->suggestion;
    }
    /**
     * A human-readable description of the error, combining information from multiple fields, laid out for display in a monospaced typeface (for example, a command-line setting).
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * The path of the file where the error occured.
     */
    public function path() : string
    {
        return $this->path;
    }
}
