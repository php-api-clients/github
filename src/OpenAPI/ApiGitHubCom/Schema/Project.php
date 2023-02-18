<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Project
{
    public const SCHEMA_JSON = '{"title":"Project","required":["id","node_id","number","name","body","state","url","html_url","owner_url","creator","columns_url","created_at","updated_at"],"type":"object","properties":{"owner_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/1002604"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/api-playground\\/projects-test\\/projects\\/12"]},"columns_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/1002604\\/columns"]},"id":{"type":"integer","examples":[1002604]},"node_id":{"type":"string","examples":["MDc6UHJvamVjdDEwMDI2MDQ="]},"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]},"number":{"type":"integer","examples":[1]},"state":{"type":"string","description":"State of the project; either \'open\' or \'closed\'","examples":["open"]},"creator":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-10T20:09:31Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"organization_permission":{"enum":["read","write","admin","none"],"type":"string","description":"The baseline permission that all organization members have on this project. Only present if owner is an organization."},"private":{"type":"boolean","description":"Whether or not this project can be seen by everyone. Only present if owner is an organization."}},"description":"Projects are a way to organize columns and cards of work."}';
    public const SCHEMA_TITLE = 'Project';
    public const SCHEMA_DESCRIPTION = 'Projects are a way to organize columns and cards of work.';
    public ?string $owner_url;
    public ?string $url;
    public ?string $html_url;
    public ?string $columns_url;
    public ?int $id;
    public ?string $node_id;
    /**
     * Name of the project
     */
    public ?string $name;
    /**
     * Body of the project
     */
    public ?string $body;
    public ?int $number;
    /**
     * State of the project; either 'open' or 'closed'
     */
    public ?string $state;
    public mixed $creator;
    public ?string $created_at;
    public ?string $updated_at;
    /**
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    public string $organization_permission;
    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    public bool $private;
    public function __construct(string $owner_url, string $url, string $html_url, string $columns_url, int $id, string $node_id, string $name, string $body, int $number, string $state, mixed $creator, string $created_at, string $updated_at, string $organization_permission, bool $private)
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
    }
}
