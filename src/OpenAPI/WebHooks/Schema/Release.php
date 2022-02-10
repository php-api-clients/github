<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Release
{
    public const SCHEMA_TITLE = 'Release';
    public const SCHEMA_DESCRIPTION = 'The [release](https://docs.github.com/en/rest/reference/repos/#get-a-release) object.';
    private string $url;
    private string $assets_url;
    private string $upload_url;
    private string $html_url;
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
    private string $name;
    /**
     * Wether the release is a draft or published
     */
    private bool $draft;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $author;
    /**
     * Whether the release is identified as a prerelease or a full release.
     */
    private bool $prerelease;
    private $created_at;
    private $published_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\ReleaseAsset>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\ReleaseAsset::class)
     */
    private array $assets = array();
    private $tarball_url;
    private $zipball_url;
    private string $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Reactions::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Reactions $reactions = null;
    private ?string $discussion_url = null;
    public function url() : string
    {
        return $this->url;
    }
    public function assets_url() : string
    {
        return $this->assets_url;
    }
    public function upload_url() : string
    {
        return $this->upload_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
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
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Wether the release is a draft or published
     */
    public function draft() : bool
    {
        return $this->draft;
    }
    public function author() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->author;
    }
    /**
     * Whether the release is identified as a prerelease or a full release.
     */
    public function prerelease() : bool
    {
        return $this->prerelease;
    }
    public function created_at()
    {
        return $this->created_at;
    }
    public function published_at()
    {
        return $this->published_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\ReleaseAsset>
     */
    public function assets() : array
    {
        return $this->assets;
    }
    public function tarball_url()
    {
        return $this->tarball_url;
    }
    public function zipball_url()
    {
        return $this->zipball_url;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Reactions
    {
        return $this->reactions;
    }
    public function discussion_url() : ?string
    {
        return $this->discussion_url;
    }
}
