<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentDeleted;

final class Comment
{
    public const SCHEMA_JSON = '{"title":"Pull Request Review Comment","required":["url","pull_request_review_id","id","node_id","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","body","created_at","updated_at","html_url","pull_request_url","author_association","_links","start_line","original_start_line","original_line","line","start_side","side","reactions"],"type":"object","properties":{"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string","description":"The text of the comment."},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies."},"created_at":{"type":"string","format":"date-time"},"diff_hunk":{"type":"string","description":"The diff of the line that the comment refers to."},"html_url":{"type":"string","description":"HTML URL for the pull request review comment.","format":"uri"},"id":{"type":"integer","description":"The ID of the pull request review comment."},"in_reply_to_id":{"type":"integer","description":"The comment ID to reply to."},"line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"node_id":{"type":"string","description":"The node ID of the pull request review comment."},"original_commit_id":{"type":"string","description":"The SHA of the original commit to which the comment applies."},"original_line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"original_position":{"type":"integer","description":"The index of the original line in the diff to which the comment applies."},"original_start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment."},"path":{"type":"string","description":"The relative path of the file to which the comment applies."},"position":{"type":["integer","null"],"description":"The line index in the diff to which the comment applies."},"pull_request_review_id":{"type":["integer","null"],"description":"The ID of the pull request review to which the comment belongs."},"pull_request_url":{"type":"string","description":"URL for the pull request that the review comment belongs to.","format":"uri"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the first line of the range for a multi-line comment."},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment."},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL for the pull request review comment","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [comment](https:\\/\\/docs.github.com\\/rest\\/reference\\/pulls#comments) itself."}';
    public const SCHEMA_TITLE = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'The [comment](https://docs.github.com/rest/reference/pulls#comments) itself.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Links $_links;
    /**
     * How the author is associated with the repository.
     */
    public readonly string $author_association;
    /**
     * The text of the comment.
     */
    public readonly string $body;
    /**
     * The SHA of the commit to which the comment applies.
     */
    public readonly string $commit_id;
    public readonly string $created_at;
    /**
     * The diff of the line that the comment refers to.
     */
    public readonly string $diff_hunk;
    /**
     * HTML URL for the pull request review comment.
     */
    public readonly string $html_url;
    /**
     * The ID of the pull request review comment.
     */
    public readonly int $id;
    /**
     * The comment ID to reply to.
     */
    public readonly ?int $in_reply_to_id;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public readonly ?int $line;
    /**
     * The node ID of the pull request review comment.
     */
    public readonly string $node_id;
    /**
     * The SHA of the original commit to which the comment applies.
     */
    public readonly string $original_commit_id;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public readonly int $original_line;
    /**
     * The index of the original line in the diff to which the comment applies.
     */
    public readonly int $original_position;
    /**
     * The first line of the range for a multi-line comment.
     */
    public readonly ?int $original_start_line;
    /**
     * The relative path of the file to which the comment applies.
     */
    public readonly string $path;
    /**
     * The line index in the diff to which the comment applies.
     */
    public readonly ?int $position;
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    public readonly ?int $pull_request_review_id;
    /**
     * URL for the pull request that the review comment belongs to.
     */
    public readonly string $pull_request_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\Reactions $reactions;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public readonly string $side;
    /**
     * The first line of the range for a multi-line comment.
     */
    public readonly ?int $start_line;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public readonly ?string $start_side;
    public readonly string $updated_at;
    /**
     * URL for the pull request review comment
     */
    public readonly string $url;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Comment\User $user;
    public function __construct(object $_links, string $author_association, string $body, string $commit_id, string $created_at, string $diff_hunk, string $html_url, int $id, int $in_reply_to_id, int $line, string $node_id, string $original_commit_id, int $original_line, int $original_position, int $original_start_line, string $path, int $position, int $pull_request_review_id, string $pull_request_url, object $reactions, string $side, int $start_line, string $start_side, string $updated_at, string $url, object $user)
    {
        $this->_links = $_links;
        $this->author_association = $author_association;
        $this->body = $body;
        $this->commit_id = $commit_id;
        $this->created_at = $created_at;
        $this->diff_hunk = $diff_hunk;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->in_reply_to_id = $in_reply_to_id;
        $this->line = $line;
        $this->node_id = $node_id;
        $this->original_commit_id = $original_commit_id;
        $this->original_line = $original_line;
        $this->original_position = $original_position;
        $this->original_start_line = $original_start_line;
        $this->path = $path;
        $this->position = $position;
        $this->pull_request_review_id = $pull_request_review_id;
        $this->pull_request_url = $pull_request_url;
        $this->reactions = $reactions;
        $this->side = $side;
        $this->start_line = $start_line;
        $this->start_side = $start_side;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->user = $user;
    }
}
