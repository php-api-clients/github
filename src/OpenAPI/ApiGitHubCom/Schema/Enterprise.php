<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Enterprise
{
    public const SCHEMA_TITLE = 'Enterprise';
    public const SPL_HASH = '0000000054d5fc010000000071115dec';
    public const SCHEMA_DESCRIPTION = 'An enterprise account';
    /**
     * A short description of the enterprise.
     */
    private string $description;
    private string $html_url;
    /**
     * The enterprise's website URL.
     */
    private string $website_url;
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
    private string $created_at;
    private string $updated_at;
    private string $avatar_url;
    public function description() : string
    {
        return $this->description;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function website_url() : string
    {
        return $this->website_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function slug() : string
    {
        return $this->slug;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
}
