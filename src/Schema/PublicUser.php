<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PublicUser
{
    public const SCHEMA_JSON         = '{"title":"Public User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","bio","blog","company","email","followers","following","hireable","location","name","public_gists","public_repos","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"name":{"type":["string","null"]},"company":{"type":["string","null"]},"blog":{"type":["string","null"]},"location":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"hireable":{"type":["boolean","null"]},"bio":{"type":["string","null"]},"twitter_username":{"type":["string","null"]},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"plan":{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}},"suspended_at":{"type":["string","null"],"format":"date-time"},"private_gists":{"type":"integer","examples":[1]},"total_private_repos":{"type":"integer","examples":[2]},"owned_private_repos":{"type":"integer","examples":[2]},"disk_usage":{"type":"integer","examples":[1]},"collaborators":{"type":"integer","examples":[3]}},"description":"Public User","additionalProperties":false}';
    public const SCHEMA_TITLE        = 'Public User';
    public const SCHEMA_DESCRIPTION  = 'Public User';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login_null","id":13,"node_id":"generated_node_id_null","avatar_url":"https:\\/\\/example.com\\/","gravatar_id":"generated_gravatar_id_null","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_null","gists_url":"generated_gists_url_null","starred_url":"generated_starred_url_null","subscriptions_url":"https:\\/\\/example.com\\/","organizations_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","events_url":"generated_events_url_null","received_events_url":"https:\\/\\/example.com\\/","type":"generated_type_null","site_admin":false,"name":"generated_name_null","company":"generated_company_null","blog":"generated_blog_null","location":"generated_location_null","email":"generated_email_email","hireable":false,"bio":"generated_bio_null","twitter_username":"generated_twitter_username_null","public_repos":13,"public_gists":13,"followers":13,"following":13,"created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","plan":{"collaborators":13,"name":"generated_name_null","space":13,"private_repos":13},"suspended_at":"1970-01-01T00:00:00+00:00","private_gists":1,"total_private_repos":2,"owned_private_repos":2,"disk_usage":1,"collaborators":3}';

    public function __construct(public string $login, public int $id, #[MapFrom('node_id')] public string $nodeId, #[MapFrom('avatar_url')] public string $avatarUrl, #[MapFrom('gravatar_id')] public ?string $gravatarId, public string $url, #[MapFrom('html_url')] public string $htmlUrl, #[MapFrom('followers_url')] public string $followersUrl, #[MapFrom('following_url')] public string $followingUrl, #[MapFrom('gists_url')] public string $gistsUrl, #[MapFrom('starred_url')] public string $starredUrl, #[MapFrom('subscriptions_url')] public string $subscriptionsUrl, #[MapFrom('organizations_url')] public string $organizationsUrl, #[MapFrom('repos_url')] public string $reposUrl, #[MapFrom('events_url')] public string $eventsUrl, #[MapFrom('received_events_url')] public string $receivedEventsUrl, public string $type, #[MapFrom('site_admin')] public bool $siteAdmin, public ?string $name, public ?string $company, public ?string $blog, public ?string $location, public ?string $email, public ?bool $hireable, public ?string $bio, #[MapFrom('twitter_username')] public ?string $twitterUsername, #[MapFrom('public_repos')] public int $publicRepos, #[MapFrom('public_gists')] public int $publicGists, public int $followers, public int $following, #[MapFrom('created_at')] public string $createdAt, #[MapFrom('updated_at')] public string $updatedAt, public ?Schema\PublicUser\Plan $plan, #[MapFrom('suspended_at')] public ?string $suspendedAt, #[MapFrom('private_gists')] public ?int $privateGists, #[MapFrom('total_private_repos')] public ?int $totalPrivateRepos, #[MapFrom('owned_private_repos')] public ?int $ownedPrivateRepos, #[MapFrom('disk_usage')] public ?int $diskUsage, public ?int $collaborators)
    {
    }
}
