<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PagesHttpsCertificate
{
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SPL_HASH = '00000000269f217e00000000005e85e5';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $state = null;
    private ?string $description = null;
    /**
     * Array of the domain set and its alternate name (if it is configured)
     */
    private array $domains = array();
    private ?string $expires_at = null;
    public function state() : ?string
    {
        return $this->state;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function domains() : array
    {
        return $this->domains;
    }
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
}
