<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateRelease;

final class Request
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false},"discussion_category_name":{"type":"string","description":"If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see \\"[Managing categories for discussions in your repository](https:\\/\\/docs.github.com\\/discussions\\/managing-discussions-for-your-community\\/managing-categories-for-discussions-in-your-repository).\\""},"generate_release_notes":{"type":"boolean","description":"Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.","default":false},"make_latest":{"enum":["true","false","legacy"],"type":"string","description":"Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.","default":true}}}';
    public const SCHEMA_TITLE = 'CreateRelease\\Request';
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
     * If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    private ?string $discussion_category_name = null;
    /**
     * Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.
     */
    private ?bool $generate_release_notes = null;
    /**
     * Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    private ?string $make_latest = null;
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
    /**
     * If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    public function discussion_category_name() : ?string
    {
        return $this->discussion_category_name;
    }
    /**
     * Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.
     */
    public function generate_release_notes() : ?bool
    {
        return $this->generate_release_notes;
    }
    /**
     * Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    public function make_latest() : ?string
    {
        return $this->make_latest;
    }
}
