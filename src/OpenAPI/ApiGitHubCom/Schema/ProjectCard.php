<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectCard
{
    public const SCHEMA_JSON = '{"title":"Project Card","required":["id","node_id","note","url","column_url","project_url","creator","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/cards\\/1478"]},"id":{"type":"integer","description":"The project card\'s ID","examples":[42]},"node_id":{"type":"string","examples":["MDExOlByb2plY3RDYXJkMTQ3OA=="]},"note":{"type":["string","null"],"examples":["Add payload for delete Project column"]},"creator":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:21:06Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:20:22Z"]},"archived":{"type":"boolean","description":"Whether or not the card is archived","examples":[false]},"column_name":{"type":"string"},"project_id":{"type":"string"},"column_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367"]},"content_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test\\/issues\\/3"]},"project_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/120"]}},"description":"Project cards represent a scope of work."}';
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = 'Project cards represent a scope of work.';
    private string $url;
    /**
     * The project card's ID
     */
    private int $id;
    private string $node_id;
    private $note;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $creator;
    private string $created_at;
    private string $updated_at;
    /**
     * Whether or not the card is archived
     */
    private ?bool $archived = null;
    private ?string $column_name = null;
    private ?string $project_id = null;
    private string $column_url;
    private ?string $content_url = null;
    private string $project_url;
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The project card's ID
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function note()
    {
        return $this->note;
    }
    public function creator() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
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
     * Whether or not the card is archived
     */
    public function archived() : ?bool
    {
        return $this->archived;
    }
    public function column_name() : ?string
    {
        return $this->column_name;
    }
    public function project_id() : ?string
    {
        return $this->project_id;
    }
    public function column_url() : string
    {
        return $this->column_url;
    }
    public function content_url() : ?string
    {
        return $this->content_url;
    }
    public function project_url() : string
    {
        return $this->project_url;
    }
}
