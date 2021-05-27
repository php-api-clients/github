<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PageBuild
{
    public const SCHEMA_TITLE = 'Page Build';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private ?string $url = null;
    private ?string $status = null;
    private array $error = array();
    private $pusher;
    private ?string $commit = null;
    private ?int $duration = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function error() : array
    {
        return $this->error;
    }
    public function pusher()
    {
        return $this->pusher;
    }
    public function commit() : ?string
    {
        return $this->commit;
    }
    public function duration() : ?int
    {
        return $this->duration;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
}
