<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PagesHttpsCertificate
{
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SPL_HASH = '000000004a4ba86a0000000021d13a21';
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
