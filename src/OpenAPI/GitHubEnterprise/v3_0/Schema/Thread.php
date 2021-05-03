<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Thread
{
    public const SCHEMA_TITLE = 'Thread';
    public const SPL_HASH = '000000001f1e2a9c000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'Thread';
    private string $id;
    /**
     * Minimal Repository
     */
    private object $repository;
    private object $subject;
    private string $reason;
    private bool $unread;
    private string $updated_at;
    private string $last_read_at;
    private string $url;
    private string $subscription_url;
    public function id() : string
    {
        return $this->id;
    }
    public function repository() : object
    {
        return $this->repository;
    }
    public function subject() : object
    {
        return $this->subject;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function unread() : bool
    {
        return $this->unread;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function last_read_at() : string
    {
        return $this->last_read_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function subscription_url() : string
    {
        return $this->subscription_url;
    }
}
