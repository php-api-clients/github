<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestReview
{
    public const SCHEMA_JSON = '{"title":"Pull Request Review","required":["id","node_id","user","body","state","commit_id","html_url","pull_request_url","_links","author_association"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the review","examples":[42]},"node_id":{"type":"string","examples":["MDE3OlB1bGxSZXF1ZXN0UmV2aWV3ODA="]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"body":{"type":"string","description":"The text of the review.","examples":["This looks great."]},"state":{"type":"string","examples":["CHANGES_REQUESTED"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/12#pullrequestreview-80"]},"pull_request_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/12"]},"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string"}}}}},"submitted_at":{"type":"string","format":"date-time"},"commit_id":{"type":["string","null"],"description":"A commit SHA for the review. If the commit object was garbage collected or forcibly deleted, then it no longer exists in Git and this value will be `null`.","examples":["54bb654c9e6025347f57900a4a5c2313a96b8035"]},"body_html":{"type":"string"},"body_text":{"type":"string"},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]}},"description":"Pull Request Reviews are reviews on pull requests."}';
    public const SCHEMA_EXAMPLE = '{"id":42,"node_id":"MDE3OlB1bGxSZXF1ZXN0UmV2aWV3ODA=","body":"This looks great.","state":"CHANGES_REQUESTED","html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/12#pullrequestreview-80","pull_request_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/12","commit_id":"54bb654c9e6025347f57900a4a5c2313a96b8035","author_association":"OWNER"}';
    public const SCHEMA_TITLE = 'Pull Request Review';
    public const SCHEMA_DESCRIPTION = 'Pull Request Reviews are reviews on pull requests.';
    /**
     * Unique identifier of the review
     */
    public readonly int $id;
    public readonly string $node_id;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview\User $user;
    /**
     * The text of the review.
     */
    public readonly string $body;
    public readonly string $state;
    public readonly string $html_url;
    public readonly string $pull_request_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview\Links $_links;
    public readonly ?string $submitted_at;
    /**
     * A commit SHA for the review. If the commit object was garbage collected or forcibly deleted, then it no longer exists in Git and this value will be `null`.
     */
    public readonly ?string $commit_id;
    public readonly ?string $body_html;
    public readonly ?string $body_text;
    /**
     * How the author is associated with the repository.
     */
    public readonly string $author_association;
    public function __construct(int $id, string $node_id, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview\User $user, string $body, string $state, string $html_url, string $pull_request_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReview\Links $_links, string $submitted_at, string $commit_id, string $body_html, string $body_text, string $author_association)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->user = $user;
        $this->body = $body;
        $this->state = $state;
        $this->html_url = $html_url;
        $this->pull_request_url = $pull_request_url;
        $this->_links = $_links;
        $this->submitted_at = $submitted_at;
        $this->commit_id = $commit_id;
        $this->body_html = $body_html;
        $this->body_text = $body_text;
        $this->author_association = $author_association;
    }
}
