<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C067A688Cf8E300F3A19D08E6D88F8A1F
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` makes the release a draft, and `false` publishes the release."},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease, `false` to identify the release as a full release."},"make_latest":{"enum":["true","false","legacy"],"type":"string","description":"Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.","default":true},"discussion_category_name":{"type":"string","description":"If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see \\"[Managing categories for discussions in your repository](https:\\/\\/docs.github.com\\/discussions\\/managing-discussions-for-your-community\\/managing-categories-for-discussions-in-your-repository).\\""}}}';
    public const SCHEMA_TITLE = 'c_067a688cf8e300f3a19d08e6d88f8a1f';
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
     * Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    private string $make_latest;
    /**
     * If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    private string $discussion_category_name;
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
    /**
     * Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    public function make_latest() : string
    {
        return $this->make_latest;
    }
    /**
     * If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    public function discussion_category_name() : string
    {
        return $this->discussion_category_name;
    }
}
