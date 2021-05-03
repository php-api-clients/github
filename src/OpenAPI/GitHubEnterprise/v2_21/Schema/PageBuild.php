<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class PageBuild
{
    public const SCHEMA_TITLE = 'Page Build';
    public const SPL_HASH = '0000000045a091480000000057b08344';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private ?string $url = null;
    private ?string $status = null;
    private ?object $error = null;
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
    public function error() : ?object
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
