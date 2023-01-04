<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentCreated;

final class Comment
{
    public const SCHEMA_JSON = '{"title":"Pull Request Review Comment","required":["url","pull_request_review_id","id","node_id","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","body","created_at","updated_at","html_url","pull_request_url","author_association","_links","start_line","original_start_line","original_line","line","start_side","side","reactions"],"type":"object","properties":{"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string","description":"The text of the comment."},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies."},"created_at":{"type":"string","format":"date-time"},"diff_hunk":{"type":"string","description":"The diff of the line that the comment refers to."},"html_url":{"type":"string","description":"HTML URL for the pull request review comment.","format":"uri"},"id":{"type":"integer","description":"The ID of the pull request review comment."},"in_reply_to_id":{"type":"integer","description":"The comment ID to reply to."},"line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"node_id":{"type":"string","description":"The node ID of the pull request review comment."},"original_commit_id":{"type":"string","description":"The SHA of the original commit to which the comment applies."},"original_line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"original_position":{"type":"integer","description":"The index of the original line in the diff to which the comment applies."},"original_start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment."},"path":{"type":"string","description":"The relative path of the file to which the comment applies."},"position":{"type":["integer","null"],"description":"The line index in the diff to which the comment applies."},"pull_request_review_id":{"type":["integer","null"],"description":"The ID of the pull request review to which the comment belongs."},"pull_request_url":{"type":"string","description":"URL for the pull request that the review comment belongs to.","format":"uri"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the first line of the range for a multi-line comment."},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment."},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL for the pull request review comment","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [comment](https:\\/\\/docs.github.com\\/rest\\/reference\\/pulls#comments) itself."}';
    public const SCHEMA_TITLE = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'The [comment](https://docs.github.com/rest/reference/pulls#comments) itself.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Links $_links;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * The text of the comment.
     */
    private string $body;
    /**
     * The SHA of the commit to which the comment applies.
     */
    private string $commit_id;
    private string $created_at;
    /**
     * The diff of the line that the comment refers to.
     */
    private string $diff_hunk;
    /**
     * HTML URL for the pull request review comment.
     */
    private string $html_url;
    /**
     * The ID of the pull request review comment.
     */
    private int $id;
    /**
     * The comment ID to reply to.
     */
    private ?int $in_reply_to_id = null;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $line;
    /**
     * The node ID of the pull request review comment.
     */
    private string $node_id;
    /**
     * The SHA of the original commit to which the comment applies.
     */
    private string $original_commit_id;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $original_line;
    /**
     * The index of the original line in the diff to which the comment applies.
     */
    private int $original_position;
    /**
     * The first line of the range for a multi-line comment.
     */
    private ?int $original_start_line;
    /**
     * The relative path of the file to which the comment applies.
     */
    private string $path;
    /**
     * The line index in the diff to which the comment applies.
     */
    private ?int $position;
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    private ?int $pull_request_review_id;
    /**
     * URL for the pull request that the review comment belongs to.
     */
    private string $pull_request_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Reactions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Reactions $reactions;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private string $side;
    /**
     * The first line of the range for a multi-line comment.
     */
    private ?int $start_line;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private ?string $start_side;
    private string $updated_at;
    /**
     * URL for the pull request review comment
     */
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\User::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\User $user;
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Links
    {
        return $this->_links;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    /**
     * The text of the comment.
     */
    public function body() : string
    {
        return $this->body;
    }
    /**
     * The SHA of the commit to which the comment applies.
     */
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The diff of the line that the comment refers to.
     */
    public function diff_hunk() : string
    {
        return $this->diff_hunk;
    }
    /**
     * HTML URL for the pull request review comment.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The ID of the pull request review comment.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The comment ID to reply to.
     */
    public function in_reply_to_id() : ?int
    {
        return $this->in_reply_to_id;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function line() : ?int
    {
        return $this->line;
    }
    /**
     * The node ID of the pull request review comment.
     */
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The SHA of the original commit to which the comment applies.
     */
    public function original_commit_id() : string
    {
        return $this->original_commit_id;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function original_line() : ?int
    {
        return $this->original_line;
    }
    /**
     * The index of the original line in the diff to which the comment applies.
     */
    public function original_position() : int
    {
        return $this->original_position;
    }
    /**
     * The first line of the range for a multi-line comment.
     */
    public function original_start_line() : ?int
    {
        return $this->original_start_line;
    }
    /**
     * The relative path of the file to which the comment applies.
     */
    public function path() : string
    {
        return $this->path;
    }
    /**
     * The line index in the diff to which the comment applies.
     */
    public function position() : ?int
    {
        return $this->position;
    }
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    public function pull_request_review_id() : ?int
    {
        return $this->pull_request_review_id;
    }
    /**
     * URL for the pull request that the review comment belongs to.
     */
    public function pull_request_url() : string
    {
        return $this->pull_request_url;
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Reactions
    {
        return $this->reactions;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function side() : string
    {
        return $this->side;
    }
    /**
     * The first line of the range for a multi-line comment.
     */
    public function start_line() : ?int
    {
        return $this->start_line;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function start_side() : ?string
    {
        return $this->start_side;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * URL for the pull request review comment
     */
    public function url() : string
    {
        return $this->url;
    }
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\User
    {
        return $this->user;
    }
}
