<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class TimelineCommitCommentedEvent
{
    public const SCHEMA_JSON = '{"title":"Timeline Commit Commented Event","type":"object","properties":{"event":{"type":"string"},"node_id":{"type":"string"},"commit_id":{"type":"string"},"comments":{"type":"array","items":{"title":"Commit Comment","required":["url","html_url","id","node_id","user","position","line","path","commit_id","body","author_association","created_at","updated_at"],"type":"object","properties":{"html_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"body":{"type":"string"},"path":{"type":["string","null"]},"position":{"type":["integer","null"]},"line":{"type":["integer","null"]},"commit_id":{"type":"string"},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}}},"description":"Commit Comment"}}},"description":"Timeline Commit Commented Event"}';
    public const SCHEMA_TITLE = 'Timeline Commit Commented Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Commit Commented Event';
    private string $event;
    private string $node_id;
    private string $commit_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment::class)
     */
    private array $comments = array();
    public function event() : string
    {
        return $this->event;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CommitComment>
     */
    public function comments() : array
    {
        return $this->comments;
    }
}