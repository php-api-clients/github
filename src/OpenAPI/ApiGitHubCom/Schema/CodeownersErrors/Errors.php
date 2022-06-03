<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeownersErrors;

final class Errors
{
    public const SCHEMA_TITLE = 'codeowners-errors::errors';
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
    private ?string $suggestion = null;
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
    public function suggestion() : ?string
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
