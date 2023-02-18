<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PublicUser\Plan;

final readonly class PublicUser
{
    public const SCHEMA_JSON        = '{"title":"Public User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","bio","blog","company","email","followers","following","hireable","location","name","public_gists","public_repos","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"name":{"type":["string","null"]},"company":{"type":["string","null"]},"blog":{"type":["string","null"]},"location":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"hireable":{"type":["boolean","null"]},"bio":{"type":["string","null"]},"twitter_username":{"type":["string","null"]},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"plan":{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}},"suspended_at":{"type":["string","null"],"format":"date-time"},"private_gists":{"type":"integer","examples":[1]},"total_private_repos":{"type":"integer","examples":[2]},"owned_private_repos":{"type":"integer","examples":[2]},"disk_usage":{"type":"integer","examples":[1]},"collaborators":{"type":"integer","examples":[3]}},"description":"Public User","additionalProperties":false}';
    public const SCHEMA_TITLE       = 'Public User';
    public const SCHEMA_DESCRIPTION = 'Public User';
    public ?string $login;
    public ?int $id;
    public ?string $node_id;
    public ?string $avatar_url;
    public ?string $gravatar_id;
    public ?string $url;
    public ?string $html_url;
    public ?string $followers_url;
    public ?string $following_url;
    public ?string $gists_url;
    public ?string $starred_url;
    public ?string $subscriptions_url;
    public ?string $organizations_url;
    public ?string $repos_url;
    public ?string $events_url;
    public ?string $received_events_url;
    public ?string $type;
    public ?bool $site_admin;
    public ?string $name;
    public ?string $company;
    public ?string $blog;
    public ?string $location;
    public ?string $email;
    public ?bool $hireable;
    public ?string $bio;
    public ?string $twitter_username;
    public ?int $public_repos;
    public ?int $public_gists;
    public ?int $followers;
    public ?int $following;
    public ?string $created_at;
    public ?string $updated_at;
    public Plan $plan;
    public ?string $suspended_at;
    public int $private_gists;
    public int $total_private_repos;
    public int $owned_private_repos;
    public int $disk_usage;
    public int $collaborators;

    public function __construct(string $login, int $id, string $node_id, string $avatar_url, string $gravatar_id, string $url, string $html_url, string $followers_url, string $following_url, string $gists_url, string $starred_url, string $subscriptions_url, string $organizations_url, string $repos_url, string $events_url, string $received_events_url, string $type, bool $site_admin, string $name, string $company, string $blog, string $location, string $email, bool $hireable, string $bio, string $twitter_username, int $public_repos, int $public_gists, int $followers, int $following, string $created_at, string $updated_at, Plan $plan, string $suspended_at, int $private_gists, int $total_private_repos, int $owned_private_repos, int $disk_usage, int $collaborators)
    {
        $this->login               = $login;
        $this->id                  = $id;
        $this->node_id             = $node_id;
        $this->avatar_url          = $avatar_url;
        $this->gravatar_id         = $gravatar_id;
        $this->url                 = $url;
        $this->html_url            = $html_url;
        $this->followers_url       = $followers_url;
        $this->following_url       = $following_url;
        $this->gists_url           = $gists_url;
        $this->starred_url         = $starred_url;
        $this->subscriptions_url   = $subscriptions_url;
        $this->organizations_url   = $organizations_url;
        $this->repos_url           = $repos_url;
        $this->events_url          = $events_url;
        $this->received_events_url = $received_events_url;
        $this->type                = $type;
        $this->site_admin          = $site_admin;
        $this->name                = $name;
        $this->company             = $company;
        $this->blog                = $blog;
        $this->location            = $location;
        $this->email               = $email;
        $this->hireable            = $hireable;
        $this->bio                 = $bio;
        $this->twitter_username    = $twitter_username;
        $this->public_repos        = $public_repos;
        $this->public_gists        = $public_gists;
        $this->followers           = $followers;
        $this->following           = $following;
        $this->created_at          = $created_at;
        $this->updated_at          = $updated_at;
        $this->plan                = $plan;
        $this->suspended_at        = $suspended_at;
        $this->private_gists       = $private_gists;
        $this->total_private_repos = $total_private_repos;
        $this->owned_private_repos = $owned_private_repos;
        $this->disk_usage          = $disk_usage;
        $this->collaborators       = $collaborators;
    }
}
