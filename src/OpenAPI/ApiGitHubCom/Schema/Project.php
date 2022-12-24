<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Project
{
    public const SCHEMA_JSON = '{"title":"Project","required":["id","node_id","number","name","body","state","url","html_url","owner_url","creator","columns_url","created_at","updated_at"],"type":"object","properties":{"owner_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/api-playground\\/projects-test"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/1002604"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/api-playground\\/projects-test\\/projects\\/12"]},"columns_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/1002604\\/columns"]},"id":{"type":"integer","examples":[1002604]},"node_id":{"type":"string","examples":["MDc6UHJvamVjdDEwMDI2MDQ="]},"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]},"number":{"type":"integer","examples":[1]},"state":{"type":"string","description":"State of the project; either \'open\' or \'closed\'","examples":["open"]},"creator":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-10T20:09:31Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2014-03-03T18:58:10Z"]},"organization_permission":{"enum":["read","write","admin","none"],"type":"string","description":"The baseline permission that all organization members have on this project. Only present if owner is an organization."},"private":{"type":"boolean","description":"Whether or not this project can be seen by everyone. Only present if owner is an organization."}},"description":"Projects are a way to organize columns and cards of work."}';
    public const SCHEMA_TITLE = 'Project';
    public const SCHEMA_DESCRIPTION = 'Projects are a way to organize columns and cards of work.';
    private string $owner_url;
    private string $url;
    private string $html_url;
    private string $columns_url;
    private int $id;
    private string $node_id;
    /**
     * Name of the project
     */
    private string $name;
    /**
     * Body of the project
     */
    private $body;
    private int $number;
    /**
     * State of the project; either 'open' or 'closed'
     */
    private string $state;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $creator;
    private string $created_at;
    private string $updated_at;
    /**
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    private ?string $organization_permission = null;
    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    private ?bool $private = null;
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
    /**
     * Name of the project
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Body of the project
     */
    public function body()
    {
        return $this->body;
    }
    public function number() : int
    {
        return $this->number;
    }
    /**
     * State of the project; either 'open' or 'closed'
     */
    public function state() : string
    {
        return $this->state;
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
     * The baseline permission that all organization members have on this project. Only present if owner is an organization.
     */
    public function organization_permission() : ?string
    {
        return $this->organization_permission;
    }
    /**
     * Whether or not this project can be seen by everyone. Only present if owner is an organization.
     */
    public function private() : ?bool
    {
        return $this->private;
    }
}
