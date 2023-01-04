<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class PublicUser
{
    public const SCHEMA_JSON = '{"title":"Public User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","bio","blog","company","email","followers","following","hireable","location","name","public_gists","public_repos","created_at","updated_at"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"name":{"type":["string","null"]},"company":{"type":["string","null"]},"blog":{"type":["string","null"]},"location":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"hireable":{"type":["boolean","null"]},"bio":{"type":["string","null"]},"twitter_username":{"type":["string","null"]},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"plan":{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}},"suspended_at":{"type":["string","null"],"format":"date-time"},"private_gists":{"type":"integer","examples":[1]},"total_private_repos":{"type":"integer","examples":[2]},"owned_private_repos":{"type":"integer","examples":[2]},"disk_usage":{"type":"integer","examples":[1]},"collaborators":{"type":"integer","examples":[3]}},"description":"Public User","additionalProperties":false}';
    public const SCHEMA_TITLE = 'Public User';
    public const SCHEMA_DESCRIPTION = 'Public User';
    private string $login;
    private int $id;
    private string $node_id;
    private string $avatar_url;
    private $gravatar_id;
    private string $url;
    private string $html_url;
    private string $followers_url;
    private string $following_url;
    private string $gists_url;
    private string $starred_url;
    private string $subscriptions_url;
    private string $organizations_url;
    private string $repos_url;
    private string $events_url;
    private string $received_events_url;
    private string $type;
    private bool $site_admin;
    private $name;
    private $company;
    private $blog;
    private $location;
    private $email;
    private $hireable;
    private $bio;
    private $twitter_username;
    private int $public_repos;
    private int $public_gists;
    private int $followers;
    private int $following;
    private string $created_at;
    private string $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PublicUser\Plan::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PublicUser\Plan $plan = null;
    private $suspended_at;
    private ?int $private_gists = null;
    private ?int $total_private_repos = null;
    private ?int $owned_private_repos = null;
    private ?int $disk_usage = null;
    private ?int $collaborators = null;
    public function login() : string
    {
        return $this->login;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function gravatar_id()
    {
        return $this->gravatar_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function followers_url() : string
    {
        return $this->followers_url;
    }
    public function following_url() : string
    {
        return $this->following_url;
    }
    public function gists_url() : string
    {
        return $this->gists_url;
    }
    public function starred_url() : string
    {
        return $this->starred_url;
    }
    public function subscriptions_url() : string
    {
        return $this->subscriptions_url;
    }
    public function organizations_url() : string
    {
        return $this->organizations_url;
    }
    public function repos_url() : string
    {
        return $this->repos_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function received_events_url() : string
    {
        return $this->received_events_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function site_admin() : bool
    {
        return $this->site_admin;
    }
    public function name()
    {
        return $this->name;
    }
    public function company()
    {
        return $this->company;
    }
    public function blog()
    {
        return $this->blog;
    }
    public function location()
    {
        return $this->location;
    }
    public function email()
    {
        return $this->email;
    }
    public function hireable()
    {
        return $this->hireable;
    }
    public function bio()
    {
        return $this->bio;
    }
    public function twitter_username()
    {
        return $this->twitter_username;
    }
    public function public_repos() : int
    {
        return $this->public_repos;
    }
    public function public_gists() : int
    {
        return $this->public_gists;
    }
    public function followers() : int
    {
        return $this->followers;
    }
    public function following() : int
    {
        return $this->following;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function plan() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\PublicUser\Plan
    {
        return $this->plan;
    }
    public function suspended_at()
    {
        return $this->suspended_at;
    }
    public function private_gists() : ?int
    {
        return $this->private_gists;
    }
    public function total_private_repos() : ?int
    {
        return $this->total_private_repos;
    }
    public function owned_private_repos() : ?int
    {
        return $this->owned_private_repos;
    }
    public function disk_usage() : ?int
    {
        return $this->disk_usage;
    }
    public function collaborators() : ?int
    {
        return $this->collaborators;
    }
}
