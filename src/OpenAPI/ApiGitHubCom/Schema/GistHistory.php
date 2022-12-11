<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GistHistory
{
    public const SCHEMA_TITLE = 'Gist History';
    public const SCHEMA_DESCRIPTION = 'Gist History';
    private $user;
    private string $version;
    private string $committed_at;
    private array $change_status = array();
    private string $url;
    public function user()
    {
        return $this->user;
    }
    public function version() : string
    {
        return $this->version;
    }
    public function committed_at() : string
    {
        return $this->committed_at;
    }
    public function change_status() : array
    {
        return $this->change_status;
    }
    public function url() : string
    {
        return $this->url;
    }
}
