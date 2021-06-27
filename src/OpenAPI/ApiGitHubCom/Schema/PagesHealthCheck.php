<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PagesHealthCheck
{
    public const SCHEMA_TITLE = 'Pages Health Check Status';
    public const SCHEMA_DESCRIPTION = 'Pages Health Check Status';
    private array $domain = array();
    private array $alt_domain = array();
    public function domain() : array
    {
        return $this->domain;
    }
    public function alt_domain() : array
    {
        return $this->alt_domain;
    }
}
