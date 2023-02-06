<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"User Search Result Item","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","score"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"score":{"type":"number"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"events_url":{"type":"string"},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"name":{"type":["string","null"]},"bio":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"location":{"type":["string","null"]},"site_admin":{"type":"boolean"},"hireable":{"type":["boolean","null"]},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"blog":{"type":["string","null"]},"company":{"type":["string","null"]},"suspended_at":{"type":["string","null"],"format":"date-time"}},"description":"User Search Result Item"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'User Search Result Item';
    public const SCHEMA_DESCRIPTION = 'User Search Result Item';
    public readonly string $login;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $avatar_url;
    public readonly ?string $gravatar_id;
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $followers_url;
    public readonly string $subscriptions_url;
    public readonly string $organizations_url;
    public readonly string $repos_url;
    public readonly string $received_events_url;
    public readonly string $type;
    public readonly int $score;
    public readonly string $following_url;
    public readonly string $gists_url;
    public readonly string $starred_url;
    public readonly string $events_url;
    public readonly ?int $public_repos;
    public readonly ?int $public_gists;
    public readonly ?int $followers;
    public readonly ?int $following;
    public readonly ?string $created_at;
    public readonly ?string $updated_at;
    public readonly ?string $name;
    public readonly ?string $bio;
    public readonly ?string $email;
    public readonly ?string $location;
    public readonly bool $site_admin;
    public readonly ?bool $hireable;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches>
     */
    public readonly array $text_matches;
    public readonly ?string $blog;
    public readonly ?string $company;
    public readonly ?string $suspended_at;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SearchResultTextMatches> $text_matches
     */
    public function __construct(string $login, int $id, string $node_id, string $avatar_url, string $gravatar_id, string $url, string $html_url, string $followers_url, string $subscriptions_url, string $organizations_url, string $repos_url, string $received_events_url, string $type, int $score, string $following_url, string $gists_url, string $starred_url, string $events_url, int $public_repos, int $public_gists, int $followers, int $following, string $created_at, string $updated_at, string $name, string $bio, string $email, string $location, bool $site_admin, bool $hireable, array $text_matches, string $blog, string $company, string $suspended_at)
    {
        $this->login = $login;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->avatar_url = $avatar_url;
        $this->gravatar_id = $gravatar_id;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->followers_url = $followers_url;
        $this->subscriptions_url = $subscriptions_url;
        $this->organizations_url = $organizations_url;
        $this->repos_url = $repos_url;
        $this->received_events_url = $received_events_url;
        $this->type = $type;
        $this->score = $score;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->starred_url = $starred_url;
        $this->events_url = $events_url;
        $this->public_repos = $public_repos;
        $this->public_gists = $public_gists;
        $this->followers = $followers;
        $this->following = $following;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->name = $name;
        $this->bio = $bio;
        $this->email = $email;
        $this->location = $location;
        $this->site_admin = $site_admin;
        $this->hireable = $hireable;
        $this->text_matches = $text_matches;
        $this->blog = $blog;
        $this->company = $company;
        $this->suspended_at = $suspended_at;
    }
}
