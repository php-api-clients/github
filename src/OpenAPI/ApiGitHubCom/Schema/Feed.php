<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Feed
{
    public const SCHEMA_TITLE = 'Feed';
    public const SPL_HASH = '000000000cd522ec0000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Feed';
    private ?string $timeline_url = null;
    private ?string $user_url = null;
    private ?string $current_user_public_url = null;
    private ?string $current_user_url = null;
    private ?string $current_user_actor_url = null;
    private ?string $current_user_organization_url = null;
    private array $current_user_organization_urls = array();
    private ?string $security_advisories_url = null;
    private ?object $_links = null;
    public function timeline_url() : ?string
    {
        return $this->timeline_url;
    }
    public function user_url() : ?string
    {
        return $this->user_url;
    }
    public function current_user_public_url() : ?string
    {
        return $this->current_user_public_url;
    }
    public function current_user_url() : ?string
    {
        return $this->current_user_url;
    }
    public function current_user_actor_url() : ?string
    {
        return $this->current_user_actor_url;
    }
    public function current_user_organization_url() : ?string
    {
        return $this->current_user_organization_url;
    }
    public function current_user_organization_urls() : array
    {
        return $this->current_user_organization_urls;
    }
    public function security_advisories_url() : ?string
    {
        return $this->security_advisories_url;
    }
    public function _links() : ?object
    {
        return $this->_links;
    }
}
