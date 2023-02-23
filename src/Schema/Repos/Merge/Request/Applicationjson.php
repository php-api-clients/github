<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\Merge\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["base","head"],"type":"object","properties":{"base":{"type":"string","description":"The name of the base branch that the head will be merged into."},"head":{"type":"string","description":"The head to merge. This can be a branch name or a commit SHA1."},"commit_message":{"type":"string","description":"Commit message to use for the merge commit. If omitted, a default message will be used."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the base branch that the head will be merged into.
     */
    public ?string $base;
    /**
     * The head to merge. This can be a branch name or a commit SHA1.
     */
    public ?string $head;
    /**
     * Commit message to use for the merge commit. If omitted, a default message will be used.
     */
    public string $commit_message;
    public function __construct(string $base, string $head, string $commit_message)
    {
        $this->base = $base;
        $this->head = $head;
        $this->commit_message = $commit_message;
    }
}
