<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C4Feb7343251545003Ea7B8295A00D41D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` makes the release a draft, and `false` publishes the release."},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease, `false` to identify the release as a full release."}}}';
    public const SCHEMA_TITLE = 'c_4feb7343251545003ea7b8295a00d41d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tag.
     */
    private string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     */
    private string $target_commitish;
    /**
     * The name of the release.
     */
    private string $name;
    /**
     * Text describing the contents of the tag.
     */
    private string $body;
    /**
     * `true` makes the release a draft, and `false` publishes the release.
     */
    private bool $draft;
    /**
     * `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     */
    private bool $prerelease;
    /**
     * The name of the tag.
     */
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     */
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    /**
     * The name of the release.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Text describing the contents of the tag.
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * `true` makes the release a draft, and `false` publishes the release.
     */
    public function draft() : bool
    {
        return $this->draft;
    }
    /**
     * `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     */
    public function prerelease() : bool
    {
        return $this->prerelease;
    }
}
