<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class UserSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"User Search Result Item","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","score"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"score":{"type":"number"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"events_url":{"type":"string"},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"name":{"type":["string","null"]},"bio":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"location":{"type":["string","null"]},"site_admin":{"type":"boolean"},"hireable":{"type":["boolean","null"]},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"blog":{"type":["string","null"]},"company":{"type":["string","null"]},"suspended_at":{"type":["string","null"],"format":"date-time"}},"description":"User Search Result Item"}';
    public const SCHEMA_TITLE = 'User Search Result Item';
    public const SCHEMA_DESCRIPTION = 'User Search Result Item';
    public ?string $login;
    public ?int $id;
    public ?string $node_id;
    public ?string $avatar_url;
    public ?string $gravatar_id;
    public ?string $url;
    public ?string $html_url;
    public ?string $followers_url;
    public ?string $subscriptions_url;
    public ?string $organizations_url;
    public ?string $repos_url;
    public ?string $received_events_url;
    public ?string $type;
    public ?int $score;
    public ?string $following_url;
    public ?string $gists_url;
    public ?string $starred_url;
    public ?string $events_url;
    public int $public_repos;
    public int $public_gists;
    public int $followers;
    public int $following;
    public string $created_at;
    public string $updated_at;
    public ?string $name;
    public ?string $bio;
    public ?string $email;
    public ?string $location;
    public ?bool $site_admin;
    public ?bool $hireable;
    public array $text_matches;
    public ?string $blog;
    public ?string $company;
    public ?string $suspended_at;
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
