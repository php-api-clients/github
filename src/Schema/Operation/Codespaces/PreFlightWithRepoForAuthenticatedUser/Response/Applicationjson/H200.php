<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H200
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"billable_owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"defaults":{"required":["location","devcontainer_path"],"type":"object","properties":{"location":{"type":"string"},"devcontainer_path":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"billableOwner":{"name":"generated_name_null","email":"generated_email_null","login":"octocat","id":1,"nodeId":"MDQ6VXNlcjE=","avatarUrl":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatarId":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","htmlUrl":"https:\\/\\/github.com\\/octocat","followersUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","followingUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gistsUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starredUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptionsUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizationsUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","reposUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","eventsUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","receivedEventsUrl":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","siteAdmin":false,"starredAt":"\\"2020-07-09T00:17:55Z\\""},"defaults":{"location":"generated_location_null","devcontainerPath":"generated_devcontainer_path_null"}}';
    /**
     * billableOwner: A GitHub user.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('billable_owner')] public ?Schema\SimpleUser $billableOwner, public ?Schema\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\Applicationjson\H200\Defaults $defaults)
    {
    }
}
