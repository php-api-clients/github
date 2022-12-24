<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C46704Da47B8A9614C9495Bacecb856F2
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false}}}';
    public const SCHEMA_TITLE = 'c_46704da47b8a9614c9495bacecb856f2';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tag.
     */
    private string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     */
    private ?string $target_commitish = null;
    /**
     * The name of the release.
     */
    private ?string $name = null;
    /**
     * Text describing the contents of the tag.
     */
    private ?string $body = null;
    /**
     * `true` to create a draft (unpublished) release, `false` to create a published one.
     */
    private ?bool $draft = null;
    /**
     * `true` to identify the release as a prerelease. `false` to identify the release as a full release.
     */
    private ?bool $prerelease = null;
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
    public function target_commitish() : ?string
    {
        return $this->target_commitish;
    }
    /**
     * The name of the release.
     */
    public function name() : ?string
    {
        return $this->name;
    }
    /**
     * Text describing the contents of the tag.
     */
    public function body() : ?string
    {
        return $this->body;
    }
    /**
     * `true` to create a draft (unpublished) release, `false` to create a published one.
     */
    public function draft() : ?bool
    {
        return $this->draft;
    }
    /**
     * `true` to identify the release as a prerelease. `false` to identify the release as a full release.
     */
    public function prerelease() : ?bool
    {
        return $this->prerelease;
    }
}
