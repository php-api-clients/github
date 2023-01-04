<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamProject
{
    public const SCHEMA_JSON = '{"title":"Team Project","required":["owner_url","url","html_url","columns_url","id","node_id","name","body","number","state","creator","created_at","updated_at","permissions"],"type":"object","properties":{"owner_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"columns_url":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"body":{"type":["string","null"]},"number":{"type":"integer"},"state":{"type":"string"},"creator":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"created_at":{"type":"string"},"updated_at":{"type":"string"},"organization_permission":{"type":"string","description":"The organization permission for this project. Only present when owner is an organization."},"private":{"type":"boolean","description":"Whether the project is private or not. Only present when owner is an organization."},"permissions":{"required":["read","write","admin"],"type":"object","properties":{"read":{"type":"boolean"},"write":{"type":"boolean"},"admin":{"type":"boolean"}}}},"description":"A team\'s access to a project."}';
    public const SCHEMA_TITLE = 'Team Project';
    public const SCHEMA_DESCRIPTION = 'A team\'s access to a project.';
    private string $owner_url;
    private string $url;
    private string $html_url;
    private string $columns_url;
    private int $id;
    private string $node_id;
    private string $name;
    private ?string $body;
    private int $number;
    private string $state;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $creator;
    private string $created_at;
    private string $updated_at;
    /**
     * The organization permission for this project. Only present when owner is an organization.
     */
    private ?string $organization_permission = null;
    /**
     * Whether the project is private or not. Only present when owner is an organization.
     */
    private ?bool $private = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject\Permissions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject\Permissions $permissions;
    public function owner_url() : string
    {
        return $this->owner_url;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function columns_url() : string
    {
        return $this->columns_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function state() : string
    {
        return $this->state;
    }
    /**
     * A GitHub user.
     */
    public function creator() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->creator;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The organization permission for this project. Only present when owner is an organization.
     */
    public function organization_permission() : ?string
    {
        return $this->organization_permission;
    }
    /**
     * Whether the project is private or not. Only present when owner is an organization.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
    public function permissions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject\Permissions
    {
        return $this->permissions;
    }
}
