<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ServerStatistics
{
    public const SCHEMA_TITLE = 'Server Statistics Proxy Endpoint';
    public const SCHEMA_DESCRIPTION = 'Response of S4 Proxy endpoint that provides GHES statistics';
    private string $server_id;
    private string $collection_date;
    private string $schema_version;
    private string $ghes_version;
    private string $host_name;
    private array $github_connect = array();
    private array $ghe_stats = array();
    private array $dormant_users = array();
    public function server_id() : string
    {
        return $this->server_id;
    }
    public function collection_date() : string
    {
        return $this->collection_date;
    }
    public function schema_version() : string
    {
        return $this->schema_version;
    }
    public function ghes_version() : string
    {
        return $this->ghes_version;
    }
    public function host_name() : string
    {
        return $this->host_name;
    }
    public function github_connect() : array
    {
        return $this->github_connect;
    }
    public function ghe_stats() : array
    {
        return $this->ghe_stats;
    }
    public function dormant_users() : array
    {
        return $this->dormant_users;
    }
}
