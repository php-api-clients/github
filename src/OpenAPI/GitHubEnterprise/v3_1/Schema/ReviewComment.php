<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ReviewComment
{
    public const SCHEMA_JSON = '{"title":"Legacy Review Comment","required":["id","node_id","url","body","diff_hunk","path","position","original_position","commit_id","original_commit_id","user","pull_request_review_id","html_url","pull_request_url","_links","author_association","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]},"pull_request_review_id":{"type":["integer","null"],"examples":[42]},"id":{"type":"integer","examples":[10]},"node_id":{"type":"string","examples":["MDI0OlB1bGxSZXF1ZXN0UmV2aWV3Q29tbWVudDEw"]},"diff_hunk":{"type":"string","examples":["@@ -16,33 +16,40 @@ public class Connection : IConnection..."]},"path":{"type":"string","examples":["file1.txt"]},"position":{"type":["integer","null"],"examples":[1]},"original_position":{"type":"integer","examples":[4]},"commit_id":{"type":"string","examples":["6dcb09b5b57875f334f61aebed695e2e4193db5e"]},"original_commit_id":{"type":"string","examples":["9c48853fa3dc5c1c3d6f1f1cd1f2743e72652840"]},"in_reply_to_id":{"type":"integer","examples":[8]},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"Simple User"}]},"body":{"type":"string","examples":["Great stuff"]},"created_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2011-04-14T16:00:49Z"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]},"pull_request_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]},"author_association":{"title":"author_association","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository.","examples":["OWNER"]},"_links":{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string"}},"description":"Hypermedia Link"}}},"body_text":{"type":"string"},"body_html":{"type":"string"},"reactions":{"title":"Reaction Rollup","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"total_count":{"type":"integer"},"+1":{"type":"integer"},"-1":{"type":"integer"},"laugh":{"type":"integer"},"confused":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"eyes":{"type":"integer"},"rocket":{"type":"integer"}}},"side":{"enum":["LEFT","RIGHT"],"type":"string","description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"start_side":{"enum":["LEFT","RIGHT",null],"type":["string","null"],"description":"The side of the first line of the range for a multi-line comment.","default":"RIGHT"},"line":{"type":"integer","description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"original_line":{"type":"integer","description":"The original line of the blob to which the comment applies. The last line of the range for a multi-line comment","examples":[2]},"start_line":{"type":["integer","null"],"description":"The first line of the range for a multi-line comment.","examples":[2]},"original_start_line":{"type":["integer","null"],"description":"The original first line of the range for a multi-line comment.","examples":[2]}},"description":"Legacy Review Comment"}';
    public const SCHEMA_TITLE = 'Legacy Review Comment';
    public const SCHEMA_DESCRIPTION = 'Legacy Review Comment';
    private string $url;
    private $pull_request_review_id;
    private int $id;
    private string $node_id;
    private string $diff_hunk;
    private string $path;
    private $position;
    private int $original_position;
    private string $commit_id;
    private string $original_commit_id;
    private ?int $in_reply_to_id = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217 $user;
    private string $body;
    private string $created_at;
    private string $updated_at;
    private string $html_url;
    private string $pull_request_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3647E86E9016Cd88A93C7A61B94268D4::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3647E86E9016Cd88A93C7A61B94268D4 $_links;
    private ?string $body_text = null;
    private ?string $body_html = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup $reactions = null;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private ?string $side = null;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private $start_side;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $line = null;
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $original_line = null;
    /**
     * The first line of the range for a multi-line comment.
     */
    private $start_line;
    /**
     * The original first line of the range for a multi-line comment.
     */
    private $original_start_line;
    public function url() : string
    {
        return $this->url;
    }
    public function pull_request_review_id()
    {
        return $this->pull_request_review_id;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function diff_hunk() : string
    {
        return $this->diff_hunk;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function position()
    {
        return $this->position;
    }
    public function original_position() : int
    {
        return $this->original_position;
    }
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function original_commit_id() : string
    {
        return $this->original_commit_id;
    }
    public function in_reply_to_id() : ?int
    {
        return $this->in_reply_to_id;
    }
    public function user() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4D5B98B02A5Afea165Db4Daaee5D7217
    {
        return $this->user;
    }
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
    public function html_url() : string
    {
        return $this->html_url;
    }
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
    public function _links() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C3647E86E9016Cd88A93C7A61B94268D4
    {
        return $this->_links;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup
    {
        return $this->reactions;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function side() : ?string
    {
        return $this->side;
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
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function original_line() : ?int
    {
        return $this->original_line;
    }
    /**
     * The first line of the range for a multi-line comment.
     */
    public function start_line()
    {
        return $this->start_line;
    }
    /**
     * The original first line of the range for a multi-line comment.
     */
    public function original_start_line()
    {
        return $this->original_start_line;
    }
}