<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PagesHttpsCertificate
{
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SPL_HASH = '000000007ee6e4dd0000000021479ea3';
    public const SCHEMA_DESCRIPTION = '';
    private string $state;
    private string $description;
    /**
     * Array of the domain set and its alternate name (if it is configured)
     */
    private array $domains;
    private string $expires_at;
    public function state() : string
    {
        return $this->state;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function domains() : array
    {
        return $this->domains;
    }
    public function expires_at() : string
    {
        return $this->expires_at;
    }
}
