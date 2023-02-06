<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReviewComment
{
    public const SCHEMA_JSON = '{"title":"Legacy Review Comment","required":["id","node_id","url","body","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","pull_request_review_id","html_url","pull_request_url","_links","author_association","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]},"pull_request_review_id":{"type":["integer","null"],"examples":[42]},"id":{"type":"integer","examples":[10]},"node_id":{"type":"string","examples":["MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw"]},"diff_hunk":{"type":"string","examples":["@@ -16,33 +16,40 @@ public class Connection : IConnection..."]},"path":{"type":"string","examples":["file1.txt"]},"position":{"type":["integer","null"],"examples":[1]},"original_position":{"type":"integer","examples":[4]},"commit_id":{"type":"string","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"original_commit_id":{"type":"string","examples":["9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840"]},"in_reply_to_id":{"type":"integer","examples":[8]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"body":{"type":"string","examples":["Great stuff"]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]},"pull_request_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}},"body_text":{"type":"string"},"body_html":{"type":"string"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"original_line":{"type":"integer","description":"The original line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"original_start_line":{"type":["integer","null"],"description":"The original first line of the range for a multi-line comment.","examples":[2]}},"description":"Legacy Review Comment"}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1","pull_request_review_id":42,"id":10,"node_id":"MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw","diff_hunk":"@@ -16,33 +16,40 @@ public class Connection : IConnection...","path":"file1.txt","position":1,"original_position":4,"commit_id":"6dcb09b5b57875f334f61aebed695e2e4193db5e","original_commit_id":"9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840","in_reply_to_id":8,"body":"Great stuff","created_at":"2011-04-14T16:00:49Z","updated_at":"2011-04-14T16:00:49Z","html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1","pull_request_url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1","author_association":"OWNER","line":2,"original_line":2,"start_line":2,"original_start_line":2}';
    public const SCHEMA_TITLE = 'Legacy Review Comment';
    public const SCHEMA_DESCRIPTION = 'Legacy Review Comment';
    public readonly string $url;
    public readonly ?int $pull_request_review_id;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $diff_hunk;
    public readonly string $path;
    public readonly ?int $position;
    public readonly int $original_position;
    public readonly string $commit_id;
    public readonly string $original_commit_id;
    public readonly ?int $in_reply_to_id;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\User $user;
    public readonly string $body;
    public readonly string $created_at;
    public readonly string $updated_at;
    public readonly string $html_url;
    public readonly string $pull_request_url;
    /**
     * How the author is associated with the repository.
     */
    public readonly string $author_association;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links $_links;
    public readonly ?string $body_text;
    public readonly ?string $body_html;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public readonly ?string $side;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public readonly ?string $start_side;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public readonly ?int $line;
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public readonly ?int $original_line;
    /**
     * The first line of the range for a multi-line comment.
     */
    public readonly ?int $start_line;
    /**
     * The original first line of the range for a multi-line comment.
     */
    public readonly ?int $original_start_line;
    public function __construct(string $url, int $pull_request_review_id, int $id, string $node_id, string $diff_hunk, string $path, int $position, int $original_position, string $commit_id, string $original_commit_id, int $in_reply_to_id, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\User $user, string $body, string $created_at, string $updated_at, string $html_url, string $pull_request_url, string $author_association, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReviewComment\Links $_links, string $body_text, string $body_html, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions, string $side, string $start_side, int $line, int $original_line, int $start_line, int $original_start_line)
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
        $this->body_text = $body_text;
        $this->body_html = $body_html;
        $this->reactions = $reactions;
        $this->side = $side;
        $this->start_side = $start_side;
        $this->line = $line;
        $this->original_line = $original_line;
        $this->start_line = $start_line;
        $this->original_start_line = $original_start_line;
    }
}
