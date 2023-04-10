<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class RepositorySubscription
{
    public const SCHEMA_JSON = '{"title":"Repository Invitation","required":["created_at","ignored","reason","subscribed","url","repository_url"],"type":"object","properties":{"subscribed":{"type":"boolean","description":"Determines if notifications should be received from this repository.","examples":[true]},"ignored":{"type":"boolean","description":"Determines if all notifications should be blocked from this repository."},"reason":{"type":["string","null"]},"created_at":{"type":"string","format":"date-time","examples":["2012-10-06T21:34:12Z"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/subscription"]},"repository_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/example"]}},"description":"Repository invitations let you manage who you collaborate with."}';
    public const SCHEMA_TITLE = 'Repository Invitation';
    public const SCHEMA_DESCRIPTION = 'Repository invitations let you manage who you collaborate with.';
    public const SCHEMA_EXAMPLE_DATA = '{"subscribed":true,"ignored":false,"reason":"generated_reason_null","created_at":"2012-10-06T21:34:12Z","url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/subscription","repository_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/example"}';
    /**
     * subscribed: Determines if notifications should be received from this repository.
     * ignored: Determines if all notifications should be blocked from this repository.
     */
    public function __construct(public bool $subscribed, public bool $ignored, public ?string $reason, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('repository_url')] public string $repositoryUrl)
    {
    }
}
