<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestReviewComment
{
    public const SCHEMA_JSON = '{"title":"Pull Request Review Comment","required":["url","id","node_id","pull_request_review_id","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","body","created_at","updated_at","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"url":{"type":"string","description":"URL for the pull request review comment","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]},"pull_request_review_id":{"type":["integer","null"],"description":"The ID of the pull request review to which the comment belongs.","examples":[42]},"id":{"type":"integer","description":"The ID of the pull request review comment.","examples":[1]},"node_id":{"type":"string","description":"The node ID of the pull request review comment.","examples":["MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw"]},"diff_hunk":{"type":"string","description":"The diff of the line that the comment refers to.","examples":["@@ -16,33 +16,40 @@ public class Connection : IConnection..."]},"path":{"type":"string","description":"The relative path of the file to which the comment applies.","examples":["config\\/database.yaml"]},"position":{"type":"integer","description":"The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.","examples":[1]},"original_position":{"type":"integer","description":"The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.","examples":[4]},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies.","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"original_commit_id":{"type":"string","description":"The SHA of the original commit to which the comment applies.","examples":["9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840"]},"in_reply_to_id":{"type":"integer","description":"The comment ID to reply to.","examples":[8]},"user":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"body":{"type":"string","description":"The text of the comment.","examples":["We should probably include a check for null values here."]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"html_url":{"type":"string","description":"HTML URL for the pull request review comment.","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]},"pull_request_url":{"type":"string","description":"URL for the pull request that the review comment belongs to.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"original_start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"original_line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment","default":"RIGHT"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}},"body_html":{"type":"string","examples":["\\"<p>comment body<\\/p>\\""]},"body_text":{"type":"string","examples":["\\"comment body\\""]}},"description":"Pull Request Review Comments are comments on a portion of the Pull Request\'s diff."}';
    public const SCHEMA_TITLE = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Comments are comments on a portion of the Pull Request\'s diff.';
    /**
     * URL for the pull request review comment
     */
    public readonly string $url;
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    public readonly ?int $pull_request_review_id;
    /**
     * The ID of the pull request review comment.
     */
    public readonly int $id;
    /**
     * The node ID of the pull request review comment.
     */
    public readonly string $node_id;
    /**
     * The diff of the line that the comment refers to.
     */
    public readonly string $diff_hunk;
    /**
     * The relative path of the file to which the comment applies.
     */
    public readonly string $path;
    /**
     * The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.
     */
    public readonly int $position;
    /**
     * The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.
     */
    public readonly int $original_position;
    /**
     * The SHA of the commit to which the comment applies.
     */
    public readonly string $commit_id;
    /**
     * The SHA of the original commit to which the comment applies.
     */
    public readonly string $original_commit_id;
    /**
     * The comment ID to reply to.
     */
    public readonly ?int $in_reply_to_id;
    /**
     * A GitHub user.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $user;
    /**
     * The text of the comment.
     */
    public readonly string $body;
    public readonly string $created_at;
    public readonly string $updated_at;
    /**
     * HTML URL for the pull request review comment.
     */
    public readonly string $html_url;
    /**
     * URL for the pull request that the review comment belongs to.
     */
    public readonly string $pull_request_url;
    /**
     * How the author is associated with the repository.
     */
    public readonly string $author_association;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment\Links $_links;
    /**
     * The first line of the range for a multi-line comment.
     */
    public readonly ?int $start_line;
    /**
     * The first line of the range for a multi-line comment.
     */
    public readonly ?int $original_start_line;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public readonly ?string $start_side;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public readonly ?int $line;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public readonly ?int $original_line;
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     */
    public readonly ?string $side;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions;
    public readonly ?string $body_html;
    public readonly ?string $body_text;
    public function __construct(string $url, int $pull_request_review_id, int $id, string $node_id, string $diff_hunk, string $path, int $position, int $original_position, string $commit_id, string $original_commit_id, int $in_reply_to_id, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $user, string $body, string $created_at, string $updated_at, string $html_url, string $pull_request_url, string $author_association, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewComment\Links $_links, int $start_line, int $original_start_line, string $start_side, int $line, int $original_line, string $side, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions, string $body_html, string $body_text)
    {
        $this->url = $url;
        $this->pull_request_review_id = $pull_request_review_id;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->diff_hunk = $diff_hunk;
        $this->path = $path;
        $this->position = $position;
        $this->original_position = $original_position;
        $this->commit_id = $commit_id;
        $this->original_commit_id = $original_commit_id;
        $this->in_reply_to_id = $in_reply_to_id;
        $this->user = $user;
        $this->body = $body;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->html_url = $html_url;
        $this->pull_request_url = $pull_request_url;
        $this->author_association = $author_association;
        $this->_links = $_links;
        $this->start_line = $start_line;
        $this->original_start_line = $original_start_line;
        $this->start_side = $start_side;
        $this->line = $line;
        $this->original_line = $original_line;
        $this->side = $side;
        $this->reactions = $reactions;
        $this->body_html = $body_html;
        $this->body_text = $body_text;
    }
}
