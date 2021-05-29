<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Release
{
    public const SCHEMA_TITLE       = 'Release';
    public const SCHEMA_DESCRIPTION = 'A release.';
    private ?string $url            = null;
    private ?string $html_url       = null;
    private ?string $assets_url     = null;
    private ?string $upload_url     = null;
    private ?string $tarball_url    = null;
    private ?string $zipball_url    = null;
    private ?int $id                = null;
    private ?string $node_id        = null;
    /**
     * The name of the tag.
     */
    private ?string $tag_name = null;
    /**
     * Specifies the commitish value that determines where the Git tag is created from.
     */
    private ?string $target_commitish = null;
    private ?string $name             = null;
    private ?string $body             = null;
    /**
     * true to create a draft (unpublished) release, false to create a published one.
     */
    private ?bool $draft = null;
    /**
     * Whether to identify the release as a prerelease or a full release.
     */
    private ?bool $prerelease     = null;
    private ?string $created_at   = null;
    private ?string $published_at = null;
    /**
     * Simple User
     */
    private array $author = [];
    /**
     * @var array<ReleaseAsset>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReleaseAsset::class)
     */
    private array $assets      = [];
    private ?string $body_html = null;
    private ?string $body_text = null;
    /**
     * The URL of the release discussion.
     */
    private ?string $discussion_url = null;
    private array $reactions        = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function assets_url(): ?string
    {
        return $this->assets_url;
    }

    public function upload_url(): ?string
    {
        return $this->upload_url;
    }

    public function tarball_url(): ?string
    {
        return $this->tarball_url;
    }

    public function zipball_url(): ?string
    {
        return $this->zipball_url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function tag_name(): ?string
    {
        return $this->tag_name;
    }

    public function target_commitish(): ?string
    {
        return $this->target_commitish;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function body(): ?string
    {
        return $this->body;
    }

    public function draft(): ?bool
    {
        return $this->draft;
    }

    public function prerelease(): ?bool
    {
        return $this->prerelease;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function published_at(): ?string
    {
        return $this->published_at;
    }

    public function author(): array
    {
        return $this->author;
    }

    public function assets(): array
    {
        return $this->assets;
    }

    public function body_html(): ?string
    {
        return $this->body_html;
    }

    public function body_text(): ?string
    {
        return $this->body_text;
    }

    public function discussion_url(): ?string
    {
        return $this->discussion_url;
    }

    public function reactions(): array
    {
        return $this->reactions;
    }
}
