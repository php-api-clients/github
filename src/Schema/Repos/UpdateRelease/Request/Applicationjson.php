<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UpdateRelease\Request;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"tag_name":{"type":"string","description":"The name of the tag."},"target_commitish":{"type":"string","description":"Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository\'s default branch (usually `master`)."},"name":{"type":"string","description":"The name of the release."},"body":{"type":"string","description":"Text describing the contents of the tag."},"draft":{"type":"boolean","description":"`true` makes the release a draft, and `false` publishes the release."},"prerelease":{"type":"boolean","description":"`true` to identify the release as a prerelease, `false` to identify the release as a full release."},"make_latest":{"enum":["true","false","legacy"],"type":"string","description":"Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.","default":true},"discussion_category_name":{"type":"string","description":"If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see \\"[Managing categories for discussions in your repository](https:\\/\\/docs.github.com\\/discussions\\/managing-discussions-for-your-community\\/managing-categories-for-discussions-in-your-repository).\\""}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"tag_name":"generated_tag_name","target_commitish":"generated_target_commitish","name":"generated_name","body":"generated_body","draft":false,"prerelease":false,"make_latest":"generated_make_latest","discussion_category_name":"generated_discussion_category_name"}';
    /**
     * tag_name: The name of the tag.
     * target_commitish: Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     * name: The name of the release.
     * body: Text describing the contents of the tag.
     * draft: `true` makes the release a draft, and `false` publishes the release.
     * prerelease: `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     * make_latest: Specifies whether this release should be set as the latest release for the repository. Drafts and prereleases cannot be set as latest. Defaults to `true` for newly published releases. `legacy` specifies that the latest release should be determined based on the release creation date and higher semantic version.
     * discussion_category_name: If specified, a discussion of the specified category is created and linked to the release. The value must be a category that already exists in the repository. If there is already a discussion linked to the release, this parameter is ignored. For more information, see "[Managing categories for discussions in your repository](https://docs.github.com/discussions/managing-discussions-for-your-community/managing-categories-for-discussions-in-your-repository)."
     */
    public function __construct(public ?string $tag_name, public ?string $target_commitish, public ?string $name, public ?string $body, public ?bool $draft, public ?bool $prerelease, public ?string $make_latest, public ?string $discussion_category_name)
    {
    }
}
