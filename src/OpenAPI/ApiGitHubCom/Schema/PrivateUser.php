<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PublicUser\Plan;

final readonly class PrivateUser
{
    public const SCHEMA_JSON        = '{"title":"Private User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url","bio","blog","company","email","followers","following","hireable","location","name","public_gists","public_repos","created_at","updated_at","collaborators","disk_usage","owned_private_repos","private_gists","total_private_repos","two_factor_authentication"],"type":"object","properties":{"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"name":{"type":["string","null"],"examples":["monalisa octocat"]},"company":{"type":["string","null"],"examples":["GitHub"]},"blog":{"type":["string","null"],"examples":["https:\\/\\/github.com\\/blog"]},"location":{"type":["string","null"],"examples":["San Francisco"]},"email":{"type":["string","null"],"format":"email","examples":["octocat@github.com"]},"hireable":{"type":["boolean","null"]},"bio":{"type":["string","null"],"examples":["There once was..."]},"twitter_username":{"type":["string","null"],"examples":["monalisa"]},"public_repos":{"type":"integer","examples":[2]},"public_gists":{"type":"integer","examples":[1]},"followers":{"type":"integer","examples":[20]},"following":{"type":"integer","examples":[0]},"created_at":{"type":"string","format":"date-time","examples":["2008-01-14T04:33:35Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2008-01-14T04:33:35Z"]},"private_gists":{"type":"integer","examples":[81]},"total_private_repos":{"type":"integer","examples":[100]},"owned_private_repos":{"type":"integer","examples":[100]},"disk_usage":{"type":"integer","examples":[10000]},"collaborators":{"type":"integer","examples":[8]},"two_factor_authentication":{"type":"boolean","examples":[true]},"plan":{"required":["collaborators","name","space","private_repos"],"type":"object","properties":{"collaborators":{"type":"integer"},"name":{"type":"string"},"space":{"type":"integer"},"private_repos":{"type":"integer"}}},"suspended_at":{"type":["string","null"],"format":"date-time"},"business_plus":{"type":"boolean"},"ldap_dn":{"type":"string"}},"description":"Private User"}';
    public const SCHEMA_TITLE       = 'Private User';
    public const SCHEMA_DESCRIPTION = 'Private User';
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
    public ?int $private_gists;
    public ?int $total_private_repos;
    public ?int $owned_private_repos;
    public ?int $disk_usage;
    public ?int $collaborators;
    public ?bool $two_factor_authentication;
    public Plan $plan;
    public ?string $suspended_at;
    public bool $business_plus;
    public string $ldap_dn;

    public function __construct(string $login, int $id, string $node_id, string $avatar_url, string $gravatar_id, string $url, string $html_url, string $followers_url, string $following_url, string $gists_url, string $starred_url, string $subscriptions_url, string $organizations_url, string $repos_url, string $events_url, string $received_events_url, string $type, bool $site_admin, string $name, string $company, string $blog, string $location, string $email, bool $hireable, string $bio, string $twitter_username, int $public_repos, int $public_gists, int $followers, int $following, string $created_at, string $updated_at, int $private_gists, int $total_private_repos, int $owned_private_repos, int $disk_usage, int $collaborators, bool $two_factor_authentication, Plan $plan, string $suspended_at, bool $business_plus, string $ldap_dn)
    {
        $this->login                     = $login;
        $this->id                        = $id;
        $this->node_id                   = $node_id;
        $this->avatar_url                = $avatar_url;
        $this->gravatar_id               = $gravatar_id;
        $this->url                       = $url;
        $this->html_url                  = $html_url;
        $this->followers_url             = $followers_url;
        $this->following_url             = $following_url;
        $this->gists_url                 = $gists_url;
        $this->starred_url               = $starred_url;
        $this->subscriptions_url         = $subscriptions_url;
        $this->organizations_url         = $organizations_url;
        $this->repos_url                 = $repos_url;
        $this->events_url                = $events_url;
        $this->received_events_url       = $received_events_url;
        $this->type                      = $type;
        $this->site_admin                = $site_admin;
        $this->name                      = $name;
        $this->company                   = $company;
        $this->blog                      = $blog;
        $this->location                  = $location;
        $this->email                     = $email;
        $this->hireable                  = $hireable;
        $this->bio                       = $bio;
        $this->twitter_username          = $twitter_username;
        $this->public_repos              = $public_repos;
        $this->public_gists              = $public_gists;
        $this->followers                 = $followers;
        $this->following                 = $following;
        $this->created_at                = $created_at;
        $this->updated_at                = $updated_at;
        $this->private_gists             = $private_gists;
        $this->total_private_repos       = $total_private_repos;
        $this->owned_private_repos       = $owned_private_repos;
        $this->disk_usage                = $disk_usage;
        $this->collaborators             = $collaborators;
        $this->two_factor_authentication = $two_factor_authentication;
        $this->plan                      = $plan;
        $this->suspended_at              = $suspended_at;
        $this->business_plus             = $business_plus;
        $this->ldap_dn                   = $ldap_dn;
    }
}
