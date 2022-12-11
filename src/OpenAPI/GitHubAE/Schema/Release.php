<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Release
{
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'A release.';
    private string $url;
    private string $html_url;
    private string $assets_url;
    private string $upload_url;
    private $tarball_url;
    private $zipball_url;
    private int $id;
    private string $node_id;
    /**
     * The name of the tag.
     */
    private string $tag_name;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    private string $target_commitish;
    private $name;
    private $body;
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     */
    private bool $draft;
    /**
     * Whether to identify the release as a prerelease or a full release.
     */
    private bool $prerelease;
    private string $created_at;
    private $published_at;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $author;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset::class)
     */
    private array $assets = array();
    private ?string $body_html = null;
    private ?string $body_text = null;
    private ?int $mentions_count = null;
    /**
     * The URL of the release discussion.
     */
    private ?string $discussion_url = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReactionRollup $reactions = null;
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function assets_url() : string
    {
        return $this->assets_url;
    }
    public function upload_url() : string
    {
        return $this->upload_url;
    }
    public function tarball_url()
    {
        return $this->tarball_url;
    }
    public function zipball_url()
    {
        return $this->zipball_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the tag.
     */
    public function tag_name() : string
    {
        return $this->tag_name;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    public function target_commitish() : string
    {
        return $this->target_commitish;
    }
    public function name()
    {
        return $this->name;
    }
    public function body()
    {
        return $this->body;
    }
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     */
    public function draft() : bool
    {
        return $this->draft;
    }
    /**
     * Whether to identify the release as a prerelease or a full release.
     */
    public function prerelease() : bool
    {
        return $this->prerelease;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function published_at()
    {
        return $this->published_at;
    }
    /**
     * A GitHub user.
     */
    public function author() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->author;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset>
     */
    public function assets() : array
    {
        return $this->assets;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    public function mentions_count() : ?int
    {
        return $this->mentions_count;
    }
    /**
     * The URL of the release discussion.
     */
    public function discussion_url() : ?string
    {
        return $this->discussion_url;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
