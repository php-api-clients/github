<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ThreadSubscription
{
    public const SCHEMA_JSON = '{"title":"Thread Subscription","required":["created_at","ignored","reason","url","subscribed"],"type":"object","properties":{"subscribed":{"type":"boolean","examples":[true]},"ignored":{"type":"boolean"},"reason":{"type":["string","null"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2012-10-06T21:34:12Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/notifications\\/threads\\/1\\/subscription"]},"thread_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/notifications\\/threads\\/1"]},"repository_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/1"]}},"description":"Thread Subscription"}';
    public const SCHEMA_TITLE = 'Thread Subscription';
    public const SCHEMA_DESCRIPTION = 'Thread Subscription';
    private bool $subscribed;
    private bool $ignored;
    private ?string $reason;
    private ?string $created_at;
    private string $url;
    private ?string $thread_url = null;
    private ?string $repository_url = null;
    public function subscribed() : bool
    {
        return $this->subscribed;
    }
    public function ignored() : bool
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
    public function url() : string
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
