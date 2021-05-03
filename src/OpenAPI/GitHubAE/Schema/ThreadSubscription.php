<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ThreadSubscription
{
    public const SCHEMA_TITLE = 'Thread Subscription';
    public const SPL_HASH = '000000007ee6ec9e0000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Thread Subscription';
    private bool $subscribed;
    private bool $ignored;
    private string $reason;
    private string $created_at;
    private string $url;
    private string $thread_url;
    private string $repository_url;
    public function subscribed() : bool
    {
        return $this->subscribed;
    }
    public function ignored() : bool
    {
        return $this->ignored;
    }
    public function reason() : string
    {
        return $this->reason;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function thread_url() : string
    {
        return $this->thread_url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
}
