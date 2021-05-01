<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PagesHealthCheck
{
    public const SCHEMA_TITLE = 'Pages Health Check Status';
    public const SCHEMA_DESCRIPTION = 'Pages Health Check Status';
    private object $domain;
    private object $alt_domain;
    public function domain() : object
    {
        return $this->domain;
    }
    public function alt_domain() : object
    {
        return $this->alt_domain;
    }
}
