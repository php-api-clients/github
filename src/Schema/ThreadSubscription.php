<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ThreadSubscription
{
    public const SCHEMA_JSON = '{"title":"Thread Subscription","required":["created_at","ignored","reason","url","subscribed"],"type":"object","properties":{"subscribed":{"type":"boolean","examples":[true]},"ignored":{"type":"boolean"},"reason":{"type":["string","null"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2012-10-06T21:34:12Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/notifications\\/threads\\/1\\/subscription"]},"thread_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/notifications\\/threads\\/1"]},"repository_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/1"]}},"description":"Thread Subscription"}';
    public const SCHEMA_TITLE = 'Thread Subscription';
    public const SCHEMA_DESCRIPTION = 'Thread Subscription';
    public const SCHEMA_EXAMPLE_DATA = '{"subscribed":true,"ignored":false,"reason":"generated_reason","created_at":"2012-10-06T21:34:12Z","url":"https:\\/\\/api.github.com\\/notifications\\/threads\\/1\\/subscription","thread_url":"https:\\/\\/api.github.com\\/notifications\\/threads\\/1","repository_url":"https:\\/\\/api.github.com\\/repos\\/1"}';
    public function __construct(public ?bool $subscribed, public ?bool $ignored, public ?string $reason, public ?string $created_at, public ?string $url, public string $thread_url, public string $repository_url)
    {
    }
}
