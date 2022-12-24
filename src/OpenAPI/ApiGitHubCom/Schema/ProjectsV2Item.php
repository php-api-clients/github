<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectsV2Item
{
    public const SCHEMA_JSON = '{"title":"Projects v2 Item","required":["id","content_node_id","content_type","created_at","updated_at","archived_at"],"type":"object","properties":{"id":{"type":"number"},"node_id":{"type":"string"},"project_node_id":{"type":"string"},"content_node_id":{"type":"string"},"content_type":{"title":"Projects v2 Item Content Type","enum":["Issue","PullRequest","DraftIssue"],"type":"string","description":"The type of content tracked in a project item"},"creator":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"created_at":{"type":"string","format":"date-time","examples":["2022-04-28T12:00:00Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2022-04-28T12:00:00Z"]},"archived_at":{"type":["string","null"],"format":"date-time","examples":["2022-04-28T12:00:00Z"]}},"description":"An item belonging to a project"}';
    public const SCHEMA_TITLE = 'Projects v2 Item';
    public const SCHEMA_DESCRIPTION = 'An item belonging to a project';
    private int $id;
    private ?string $node_id = null;
    private ?string $project_node_id = null;
    private string $content_node_id;
    /**
     * The type of content tracked in a project item
     */
    private string $content_type;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $creator = null;
    private string $created_at;
    private string $updated_at;
    private $archived_at;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function project_node_id() : ?string
    {
        return $this->project_node_id;
    }
    public function content_node_id() : string
    {
        return $this->content_node_id;
    }
    /**
     * The type of content tracked in a project item
     */
    public function content_type() : string
    {
        return $this->content_type;
    }
    /**
     * A GitHub user.
     */
    public function creator() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
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
    public function archived_at()
    {
        return $this->archived_at;
    }
}
