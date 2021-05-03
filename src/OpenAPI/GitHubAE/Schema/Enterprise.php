<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Enterprise
{
    public const SCHEMA_TITLE = 'Enterprise';
    public const SPL_HASH = '000000001ef89ba4000000007fdcfded';
    public const SCHEMA_DESCRIPTION = 'An enterprise account';
    /**
     * A short description of the enterprise.
     */
    private ?string $description = null;
    private ?string $html_url = null;
    /**
     * The enterprise's website URL.
     */
    private ?string $website_url = null;
    /**
     * Unique identifier of the enterprise
     */
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * The name of the enterprise.
     */
    private ?string $name = null;
    /**
     * The slug url identifier for the enterprise.
     */
    private ?string $slug = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $avatar_url = null;
    public function description() : ?string
    {
        return $this->description;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function website_url() : ?string
    {
        return $this->website_url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function slug() : ?string
    {
        return $this->slug;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
}
