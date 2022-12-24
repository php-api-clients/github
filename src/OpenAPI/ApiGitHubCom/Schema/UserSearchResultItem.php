<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class UserSearchResultItem
{
    public const SCHEMA_JSON = '{"title":"User Search Result Item","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","score"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"score":{"type":"number"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"events_url":{"type":"string"},"public_repos":{"type":"integer"},"public_gists":{"type":"integer"},"followers":{"type":"integer"},"following":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"name":{"type":["string","null"]},"bio":{"type":["string","null"]},"email":{"type":["string","null"],"format":"email"},"location":{"type":["string","null"]},"site_admin":{"type":"boolean"},"hireable":{"type":["boolean","null"]},"text_matches":{"title":"Search Result Text Matches","type":"array","items":{"type":"object","properties":{"object_url":{"type":"string"},"object_type":{"type":["string","null"]},"property":{"type":"string"},"fragment":{"type":"string"},"matches":{"type":"array","items":{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}}}}},"blog":{"type":["string","null"]},"company":{"type":["string","null"]},"suspended_at":{"type":["string","null"],"format":"date-time"}},"description":"User Search Result Item"}';
    public const SCHEMA_TITLE = 'User Search Result Item';
    public const SCHEMA_DESCRIPTION = 'User Search Result Item';
    private string $login;
    private int $id;
    private string $node_id;
    private string $avatar_url;
    private $gravatar_id;
    private string $url;
    private string $html_url;
    private string $followers_url;
    private string $subscriptions_url;
    private string $organizations_url;
    private string $repos_url;
    private string $received_events_url;
    private string $type;
    private int $score;
    private string $following_url;
    private string $gists_url;
    private string $starred_url;
    private string $events_url;
    private ?int $public_repos = null;
    private ?int $public_gists = null;
    private ?int $followers = null;
    private ?int $following = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private $name;
    private $bio;
    private $email;
    private $location;
    private bool $site_admin;
    private $hireable;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F1C6Cb8872D75271C982D10D0301D02>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F1C6Cb8872D75271C982D10D0301D02::class)
     */
    private array $text_matches = array();
    private $blog;
    private $company;
    private $suspended_at;
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
    public function received_events_url() : string
    {
        return $this->received_events_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function score() : int
    {
        return $this->score;
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
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function public_repos() : ?int
    {
        return $this->public_repos;
    }
    public function public_gists() : ?int
    {
        return $this->public_gists;
    }
    public function followers() : ?int
    {
        return $this->followers;
    }
    public function following() : ?int
    {
        return $this->following;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function name()
    {
        return $this->name;
    }
    public function bio()
    {
        return $this->bio;
    }
    public function email()
    {
        return $this->email;
    }
    public function location()
    {
        return $this->location;
    }
    public function site_admin() : bool
    {
        return $this->site_admin;
    }
    public function hireable()
    {
        return $this->hireable;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6F1C6Cb8872D75271C982D10D0301D02>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function blog()
    {
        return $this->blog;
    }
    public function company()
    {
        return $this->company;
    }
    public function suspended_at()
    {
        return $this->suspended_at;
    }
}
