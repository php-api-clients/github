<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ThreadSubscription
{
    public const SCHEMA_TITLE = 'Thread Subscription';
    public const SPL_HASH = '000000003664610f000000006f97d8a9';
    public const SCHEMA_DESCRIPTION = 'Thread Subscription';
    private ?bool $subscribed = null;
    private ?bool $ignored = null;
    private ?string $reason = null;
    private ?string $created_at = null;
    private ?string $url = null;
    private ?string $thread_url = null;
    private ?string $repository_url = null;
    public function subscribed() : ?bool
    {
        return $this->subscribed;
    }
    public function ignored() : ?bool
    {
        return $this->ignored;
    }
    public function reason() : ?string
    {
        return $this->reason;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function thread_url() : ?string
    {
        return $this->thread_url;
    }
    public function repository_url() : ?string
    {
        return $this->repository_url;
    }
}
