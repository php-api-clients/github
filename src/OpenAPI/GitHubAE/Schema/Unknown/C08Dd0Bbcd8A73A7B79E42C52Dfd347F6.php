<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C08Dd0Bbcd8A73A7B79E42C52Dfd347F6
{
    public const SCHEMA_JSON = '{"required":["base","head"],"type":"object","properties":{"base":{"type":"string","description":"The name of the base branch that the head will be merged into."},"head":{"type":"string","description":"The head to merge. This can be a branch name or a commit SHA1."},"commit_message":{"type":"string","description":"Commit message to use for the merge commit. If omitted, a default message will be used."}}}';
    public const SCHEMA_TITLE = 'c_08dd0bbcd8a73a7b79e42c52dfd347f6';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the base branch that the head will be merged into.
     */
    private string $base;
    /**
     * The head to merge. This can be a branch name or a commit SHA1.
     */
    private string $head;
    /**
     * Commit message to use for the merge commit. If omitted, a default message will be used.
     */
    private ?string $commit_message = null;
    /**
     * The name of the base branch that the head will be merged into.
     */
    public function base() : string
    {
        return $this->base;
    }
    /**
     * The head to merge. This can be a branch name or a commit SHA1.
     */
    public function head() : string
    {
        return $this->head;
    }
    /**
     * Commit message to use for the merge commit. If omitted, a default message will be used.
     */
    public function commit_message() : ?string
    {
        return $this->commit_message;
    }
}
