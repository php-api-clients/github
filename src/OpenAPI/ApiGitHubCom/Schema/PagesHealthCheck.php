<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PagesHealthCheck
{
    public const SCHEMA_TITLE = 'Pages Health Check Status';
    public const SPL_HASH = '00000000252f46350000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Pages Health Check Status';
    private ?object $domain = null;
    private ?object $alt_domain = null;
    public function domain() : ?object
    {
        return $this->domain;
    }
    public function alt_domain() : ?object
    {
        return $this->alt_domain;
    }
}
