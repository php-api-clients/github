<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PullRequestReviewComment
{
    public const SCHEMA_JSON = '{"title":"Pull Request Review Comment","required":["url","id","node_id","pull_request_review_id","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","body","created_at","updated_at","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"url":{"type":"string","description":"URL for the pull request review comment","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]},"pull_request_review_id":{"type":["integer","null"],"description":"The ID of the pull request review to which the comment belongs.","examples":[42]},"id":{"type":"integer","description":"The ID of the pull request review comment.","examples":[1]},"node_id":{"type":"string","description":"The node ID of the pull request review comment.","examples":["MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw"]},"diff_hunk":{"type":"string","description":"The diff of the line that the comment refers to.","examples":["@@ -16,33 +16,40 @@ public class Connection : IConnection..."]},"path":{"type":"string","description":"The relative path of the file to which the comment applies.","examples":["config\\/database.yaml"]},"position":{"type":"integer","description":"The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.","examples":[1]},"original_position":{"type":"integer","description":"The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.","examples":[4]},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies.","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"original_commit_id":{"type":"string","description":"The SHA of the original commit to which the comment applies.","examples":["9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840"]},"in_reply_to_id":{"type":"integer","description":"The comment ID to reply to.","examples":[8]},"user":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"body":{"type":"string","description":"The text of the comment.","examples":["We should probably include a check for null values here."]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"html_url":{"type":"string","description":"HTML URL for the pull request review comment.","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]},"pull_request_url":{"type":"string","description":"URL for the pull request that the review comment belongs to.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"original_start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"original_line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment","default":"RIGHT"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}},"body_html":{"type":"string","examples":["\\"<p>comment body<\\/p>\\""]},"body_text":{"type":"string","examples":["\\"comment body\\""]}},"description":"Pull Request Review Comments are comments on a portion of the Pull Request\'s diff."}';
    public const SCHEMA_TITLE = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Comments are comments on a portion of the Pull Request\'s diff.';
    /**
     * URL for the pull request review comment
     */
    private string $url;
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    private $pull_request_review_id;
    /**
     * The ID of the pull request review comment.
     */
    private int $id;
    /**
     * The node ID of the pull request review comment.
     */
    private string $node_id;
    /**
     * The diff of the line that the comment refers to.
     */
    private string $diff_hunk;
    /**
     * The relative path of the file to which the comment applies.
     */
    private string $path;
    /**
     * The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.
     */
    private int $position;
    /**
     * The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.
     */
    private int $original_position;
    /**
     * The SHA of the commit to which the comment applies.
     */
    private string $commit_id;
    /**
     * The SHA of the original commit to which the comment applies.
     */
    private string $original_commit_id;
    /**
     * The comment ID to reply to.
     */
    private ?int $in_reply_to_id = null;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $user;
    /**
     * The text of the comment.
     */
    private string $body;
    private string $created_at;
    private string $updated_at;
    /**
     * HTML URL for the pull request review comment.
     */
    private string $html_url;
    /**
     * URL for the pull request that the review comment belongs to.
     */
    private string $pull_request_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment\Links $_links;
    /**
     * The first line of the range for a multi-line comment.
     */
    private $start_line;
    /**
     * The first line of the range for a multi-line comment.
     */
    private $original_start_line;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private $start_side;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $line = null;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $original_line = null;
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     */
    private ?string $side = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReactionRollup $reactions = null;
    private ?string $body_html = null;
    private ?string $body_text = null;
    /**
     * URL for the pull request review comment
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    public function pull_request_review_id()
    {
        return $this->pull_request_review_id;
    }
    /**
     * The ID of the pull request review comment.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The node ID of the pull request review comment.
     */
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The diff of the line that the comment refers to.
     */
    public function diff_hunk() : string
    {
        return $this->diff_hunk;
    }
    /**
     * The relative path of the file to which the comment applies.
     */
    public function path() : string
    {
        return $this->path;
    }
    /**
     * The line index in the diff to which the comment applies. This field is deprecated; use `line` instead.
     */
    public function position() : int
    {
        return $this->position;
    }
    /**
     * The index of the original line in the diff to which the comment applies. This field is deprecated; use `original_line` instead.
     */
    public function original_position() : int
    {
        return $this->original_position;
    }
    /**
     * The SHA of the commit to which the comment applies.
     */
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    /**
     * The SHA of the original commit to which the comment applies.
     */
    public function original_commit_id() : string
    {
        return $this->original_commit_id;
    }
    /**
     * The comment ID to reply to.
     */
    public function in_reply_to_id() : ?int
    {
        return $this->in_reply_to_id;
    }
    /**
     * A GitHub user.
     */
    public function user() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->user;
    }
    /**
     * The text of the comment.
     */
    public function body() : string
    {
        return $this->body;
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
     * HTML URL for the pull request review comment.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * URL for the pull request that the review comment belongs to.
     */
    public function pull_request_url() : string
    {
        return $this->pull_request_url;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function _links() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestReviewComment\Links
    {
        return $this->_links;
    }
    /**
     * The first line of the range for a multi-line comment.
     */
    public function start_line()
    {
        return $this->start_line;
    }
    /**
     * The first line of the range for a multi-line comment.
     */
    public function original_start_line()
    {
        return $this->original_start_line;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function start_side()
    {
        return $this->start_side;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function line() : ?int
    {
        return $this->line;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function original_line() : ?int
    {
        return $this->original_line;
    }
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     */
    public function side() : ?string
    {
        return $this->side;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ReactionRollup
    {
        return $this->reactions;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
}
