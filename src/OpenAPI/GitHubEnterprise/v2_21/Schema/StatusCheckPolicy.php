<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class StatusCheckPolicy
{
    public const SCHEMA_TITLE = 'Status Check Policy';
    public const SPL_HASH = '00000000238240a2000000001c501073';
    public const SCHEMA_DESCRIPTION = 'Status Check Policy';
    private ?string $url = null;
    private ?bool $strict = null;
    private array $contexts = array();
    private ?string $contexts_url = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function strict() : ?bool
    {
        return $this->strict;
    }
    public function contexts() : array
    {
        return $this->contexts;
    }
    public function contexts_url() : ?string
    {
        return $this->contexts_url;
    }
}
