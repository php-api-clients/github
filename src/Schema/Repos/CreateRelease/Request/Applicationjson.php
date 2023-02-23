<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateRelease\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag_name"],"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` to create a draft (unpublished) release, `false` to create a published one.","default":false},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease. `false` to identify the release as a full release.","default":false},"discussion_category_name":{"type":"string","description":"If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see \\"[Managing categories for discussions in your repository](https:\\/\\/docs.github.com\\/discussions\\/managing-discussions-for-your-community\\/managing-categories-for-discussions-in-your-repository).\\""},"generate_release_notes":{"type":"boolean","description":"Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.","default":false},"make_latest":{"enum":["true","false","legacy"],"type":"string","description":"Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the tag.
     */
    public ?string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     */
    public string $target_commitish;
    /**
     * The name of the release.
     */
    public string $name;
    /**
     * Text describing the contents of the tag.
     */
    public string $body;
    /**
     * `true` to create a draft (unpublished) release, `false` to create a published one.
     */
    public bool $draft;
    /**
     * `true` to identify the release as a prerelease. `false` to identify the release as a full release.
     */
    public bool $prerelease;
    /**
     * If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    public string $discussion_category_name;
    /**
     * Whether to automatically generate the name and body for this release. If `name` is specified, the specified name will be used; otherwise, a name will be automatically generated. If `body` is specified, the body will be pre-pended to the automatically generated notes.
     */
    public bool $generate_release_notes;
    /**
     * Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     */
    public string $make_latest;
    public function __construct(string $tag_name, string $target_commitish, string $name, string $body, bool $draft, bool $prerelease, string $discussion_category_name, bool $generate_release_notes, string $make_latest)
    {
        $this->tag_name = $tag_name;
        $this->target_commitish = $target_commitish;
        $this->name = $name;
        $this->body = $body;
        $this->draft = $draft;
        $this->prerelease = $prerelease;
        $this->discussion_category_name = $discussion_category_name;
        $this->generate_release_notes = $generate_release_notes;
        $this->make_latest = $make_latest;
    }
}
