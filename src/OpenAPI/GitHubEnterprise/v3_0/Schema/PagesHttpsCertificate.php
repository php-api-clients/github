<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PagesHttpsCertificate
{
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SCHEMA_DESCRIPTION = '';
    private string $state;
    private string $description;
    /**
     * Array of the domain set and its alternate name (if it is configured)
     */
    private array $domains = array();
    private ?string $expires_at = null;
    public function state() : string
    {
        return $this->state;
    }
    public function description() : string
    {
        return $this->description;
    }
    /**
     * Array of the domain set and its alternate name (if it is configured)
     */
    public function domains() : array
    {
        return $this->domains;
    }
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
}
