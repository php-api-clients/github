<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Enterprise
{
    public const SCHEMA_TITLE = 'Enterprise';
    public const SCHEMA_DESCRIPTION = 'An enterprise account';
    /**
     * A short description of the enterprise.
     */
    private $description;
    private string $html_url;
    /**
     * The enterprise's website URL.
     */
    private $website_url;
    /**
     * Unique identifier of the enterprise
     */
    private int $id;
    private string $node_id;
    /**
     * The name of the enterprise.
     */
    private string $name;
    /**
     * The slug url identifier for the enterprise.
     */
    private string $slug;
    private $created_at;
    private $updated_at;
    private string $avatar_url;
    /**
     * A short description of the enterprise.
     */
    public function description()
    {
        return $this->description;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The enterprise's website URL.
     */
    public function website_url()
    {
        return $this->website_url;
    }
    /**
     * Unique identifier of the enterprise
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the enterprise.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The slug url identifier for the enterprise.
     */
    public function slug() : string
    {
        return $this->slug;
    }
    public function created_at()
    {
        return $this->created_at;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
}
