<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Enterprise
{
    public const SCHEMA_TITLE       = 'Enterprise';
    public const SCHEMA_DESCRIPTION = 'An enterprise account';
    /**
     * A short description of the enterprise.
     */
    private ?string $description = null;
    private ?string $html_url    = null;
    /**
     * The enterprise's website URL.
     */
    private ?string $website_url = null;
    /**
     * Unique identifier of the enterprise
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * The name of the enterprise.
     */
    private ?string $name = null;
    /**
     * The slug url identifier for the enterprise.
     */
    private ?string $slug       = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $avatar_url = null;

    /**
     * A short description of the enterprise.
     */
    public function description(): ?string
    {
        return $this->description;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    /**
     * The enterprise's website URL.
     */
    public function website_url(): ?string
    {
        return $this->website_url;
    }

    /**
     * Unique identifier of the enterprise
     */
    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    /**
     * The name of the enterprise.
     */
    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * The slug url identifier for the enterprise.
     */
    public function slug(): ?string
    {
        return $this->slug;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function avatar_url(): ?string
    {
        return $this->avatar_url;
    }
}
