<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ThreadSubscription
{
    public const SCHEMA_JSON = '{"title":"Thread Subscription","required":["created_at","ignored","reason","url","subscribed"],"type":"object","properties":{"subscribed":{"type":"boolean","examples":[true]},"ignored":{"type":"boolean"},"reason":{"type":["string","null"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2012-10-06T21:34:12Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/notifications\\/threads\\/1\\/subscription"]},"thread_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/notifications\\/threads\\/1"]},"repository_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/1"]}},"description":"Thread Subscription"}';
    public const SCHEMA_TITLE = 'Thread Subscription';
    public const SCHEMA_DESCRIPTION = 'Thread Subscription';
    public ?bool $subscribed;
    public ?bool $ignored;
    public ?string $reason;
    public ?string $created_at;
    public ?string $url;
    public string $thread_url;
    public string $repository_url;
    public function __construct(bool $subscribed, bool $ignored, string $reason, string $created_at, string $url, string $thread_url, string $repository_url)
    {
        $this->subscribed = $subscribed;
        $this->ignored = $ignored;
        $this->reason = $reason;
        $this->created_at = $created_at;
        $this->url = $url;
        $this->thread_url = $thread_url;
        $this->repository_url = $repository_url;
    }
}
