<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class GistCommit
{
    public const SCHEMA_TITLE = 'Gist Commit';
    public const SPL_HASH = '000000002cadfa4e00000000748d5a43';
    public const SCHEMA_DESCRIPTION = 'Gist Commit';
    private ?string $url = null;
    private ?string $version = null;
    private $user;
    private ?object $change_status = null;
    private ?string $committed_at = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function version() : ?string
    {
        return $this->version;
    }
    public function user()
    {
        return $this->user;
    }
    public function change_status() : ?object
    {
        return $this->change_status;
    }
    public function committed_at() : ?string
    {
        return $this->committed_at;
    }
}
