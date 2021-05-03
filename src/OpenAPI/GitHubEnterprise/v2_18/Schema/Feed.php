<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Feed
{
    public const SCHEMA_TITLE = 'Feed';
    public const SPL_HASH = '000000002eab6ba100000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Feed';
    private string $timeline_url;
    private string $user_url;
    private string $current_user_public_url;
    private string $current_user_url;
    private string $current_user_actor_url;
    private string $current_user_organization_url;
    private array $current_user_organization_urls;
    private object $_links;
    public function timeline_url() : string
    {
        return $this->timeline_url;
    }
    public function user_url() : string
    {
        return $this->user_url;
    }
    public function current_user_public_url() : string
    {
        return $this->current_user_public_url;
    }
    public function current_user_url() : string
    {
        return $this->current_user_url;
    }
    public function current_user_actor_url() : string
    {
        return $this->current_user_actor_url;
    }
    public function current_user_organization_url() : string
    {
        return $this->current_user_organization_url;
    }
    public function current_user_organization_urls() : array
    {
        return $this->current_user_organization_urls;
    }
    public function _links() : object
    {
        return $this->_links;
    }
}
