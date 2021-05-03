<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PageBuild
{
    public const SCHEMA_TITLE = 'Page Build';
    public const SPL_HASH = '0000000031ee534700000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private string $url;
    private string $status;
    private object $error;
    private $pusher;
    private string $commit;
    private int $duration;
    private string $created_at;
    private string $updated_at;
    public function url() : string
    {
        return $this->url;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function error() : object
    {
        return $this->error;
    }
    public function pusher()
    {
        return $this->pusher;
    }
    public function commit() : string
    {
        return $this->commit;
    }
    public function duration() : int
    {
        return $this->duration;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
