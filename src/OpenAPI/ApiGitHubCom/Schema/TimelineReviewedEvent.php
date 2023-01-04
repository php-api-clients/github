<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TimelineReviewedEvent
{
    public const SCHEMA_JSON = '{"title":"Timeline Reviewed Event","required":["event","id","node_id","user","body","state","commit_id","html_url","pull_request_url","_links","author_association"],"type":"object","properties":{"event":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the review","examples":[42]},"node_id":{"type":"string","examples":["MDE3OlB1bGxSZXF1ZXN0UmV2aWV3ODA="]},"user":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"body":{"type":["string","null"],"description":"The text of the review.","examples":["This looks great."]},"state":{"type":"string","examples":["CHANGES_REQUESTED"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/12#pullrequestreview-80"]},"pull_request_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/12"]},"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}},"submitted_at":{"type":"string","format":"date-time"},"commit_id":{"type":"string","description":"A commit SHA for the review.","examples":["54bb654c9e6025347f57900a4a5c2313a96b8035"]},"body_html":{"type":"string"},"body_text":{"type":"string"},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]}},"description":"Timeline Reviewed Event"}';
    public const SCHEMA_TITLE = 'Timeline Reviewed Event';
    public const SCHEMA_DESCRIPTION = 'Timeline Reviewed Event';
    private string $event;
    /**
     * Unique identifier of the review
     */
    private int $id;
    private string $node_id;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $user;
    /**
     * The text of the review.
     */
    private ?string $body;
    private string $state;
    private string $html_url;
    private string $pull_request_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineReviewedEvent\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineReviewedEvent\Links $_links;
    private ?string $submitted_at = null;
    /**
     * A commit SHA for the review.
     */
    private string $commit_id;
    private ?string $body_html = null;
    private ?string $body_text = null;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    public function event() : string
    {
        return $this->event;
    }
    /**
     * Unique identifier of the review
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * A GitHub user.
     */
    public function user() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->user;
    }
    /**
     * The text of the review.
     */
    public function body() : ?string
    {
        return $this->body;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function pull_request_url() : string
    {
        return $this->pull_request_url;
    }
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TimelineReviewedEvent\Links
    {
        return $this->_links;
    }
    public function submitted_at() : ?string
    {
        return $this->submitted_at;
    }
    /**
     * A commit SHA for the review.
     */
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
}
