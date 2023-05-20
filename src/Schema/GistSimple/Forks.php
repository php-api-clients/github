<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GistSimple;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Forks
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"id":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"Public User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","bio","blog","company","email","followers","following","hireable","location","name","public_gists","public_repos","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"name":{"type":["string","null"]},"company":{"type":["string","null"]},"blog":{"type":["string","null"]},"location":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"hireable":{"type":["boolean","null"]},"bio":{"type":["string","null"]},"twitter_username":{"type":["string","null"]},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"plan":{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}},"suspended_at":{"type":["string","null"],"format":"date-time"},"private_gists":{"type":"integer","examples":[1]},"total_private_repos":{"type":"integer","examples":[2]},"owned_private_repos":{"type":"integer","examples":[2]},"disk_usage":{"type":"integer","examples":[1]},"collaborators":{"type":"integer","examples":[3]}},"description":"Public User","additionalProperties":false},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated","url":"https:\\/\\/example.com\\/","user":{"login":"generated","id":2,"node_id":"generated","avatar_url":"https:\\/\\/example.com\\/","gravatar_id":"generated","url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","organizations_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","events_url":"generated","received_events_url":"https:\\/\\/example.com\\/","type":"generated","site_admin":false,"name":"generated","company":"generated","blog":"generated","location":"generated","email":"hi@example.com","hireable":false,"bio":"generated","twitter_username":"generated","public_repos":12,"public_gists":12,"followers":9,"following":9,"created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","plan":{"collaborators":13,"name":"generated","space":5,"private_repos":13},"suspended_at":"1970-01-01T00:00:00+00:00","private_gists":1,"total_private_repos":2,"owned_private_repos":2,"disk_usage":1,"collaborators":3},"created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00"}';

    /**
     * user: Public User
     */
    public function __construct(public ?string $id, public ?string $url, public ?Schema\PublicUser $user, #[MapFrom('created_at')] public ?string $createdAt, #[MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
