<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateRelease\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` makes the release a draft, and `false` publishes the release."},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease, `false` to identify the release as a full release."},"make_latest":{"enum":["true","false","legacy"],"type":"string","description":"Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.","default":true},"discussion_category_name":{"type":"string","description":"If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see \\"[Managing categories for discussions in your repository](https:\\/\\/docs.github.com\\/discussions\\/managing-discussions-for-your-community\\/managing-categories-for-discussions-in-your-repository).\\""}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'UpdateRelease\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tag.
     */
    public readonly string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     */
    public readonly string $target_commitish;
    /**
     * The name of the release.
     */
    public readonly string $name;
    /**
     * Text describing the contents of the tag.
     */
    public readonly string $body;
    /**
     * `true` makes the release a draft, and `false` publishes the release.
     */
    public readonly bool $draft;
    /**
     * `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     */
    public readonly bool $prerelease;
    /**
     * Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    public readonly string $make_latest;
    /**
     * If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    public readonly string $discussion_category_name;
    public function __construct(string $tag_name, string $target_commitish, string $name, string $body, bool $draft, bool $prerelease, string $make_latest, string $discussion_category_name)
    {
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->name = $name;
        $this->body = $body;
        $this->draft = $draft;
        $this->prerelease = $prerelease;
        $this->make_latest = $make_latest;
        $this->discussion_category_name = $discussion_category_name;
    }
}
