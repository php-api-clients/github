<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamProject
{
    public const SCHEMA_JSON = '{"title":"Team Project","required":["owner_url","url","html_url","columns_url","id","node_id","name","body","number","state","creator","created_at","updated_at","permissions"],"type":"object","properties":{"owner_url":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"columns_url":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"body":{"type":["string","null"]},"number":{"type":"integer"},"state":{"type":"string"},"creator":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"created_at":{"type":"string"},"updated_at":{"type":"string"},"organization_permission":{"type":"string","description":"The organization permission for this project. Only present when owner is an organization."},"private":{"type":"boolean","description":"Whether the project is private or not. Only present when owner is an organization."},"permissions":{"required":["read","write","admin"],"type":"object","properties":{"read":{"type":"boolean"},"write":{"type":"boolean"},"admin":{"type":"boolean"}}}},"description":"A team\'s access to a project."}';
    public const SCHEMA_EXAMPLE = '{"creator":{"login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","starred_at":"\\"2020-07-09T00:17:55Z\\""}}';
    public const SCHEMA_TITLE = 'Team Project';
    public const SCHEMA_DESCRIPTION = 'A team\'s access to a project.';
    public readonly string $owner_url;
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $columns_url;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $name;
    public readonly ?string $body;
    public readonly int $number;
    public readonly string $state;
    /**
     * A GitHub user.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $creator;
    public readonly string $created_at;
    public readonly string $updated_at;
    /**
     * The organization permission for this project. Only present when owner is an organization.
     */
    public readonly ?string $organization_permission;
    /**
     * Whether the project is private or not. Only present when owner is an organization.
     */
    public readonly ?bool $private;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject\Permissions $permissions;
    public function __construct(string $owner_url, string $url, string $html_url, string $columns_url, int $id, string $node_id, string $name, string $body, int $number, string $state, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $creator, string $created_at, string $updated_at, string $organization_permission, bool $private, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamProject\Permissions $permissions)
    {
        $this->owner_url = $owner_url;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->columns_url = $columns_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->body = $body;
        $this->number = $number;
        $this->state = $state;
        $this->creator = $creator;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->organization_permission = $organization_permission;
        $this->private = $private;
        $this->permissions = $permissions;
    }
}
