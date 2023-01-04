<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookCommitCommentCreated;

final class Comment
{
    public const SCHEMA_JSON = '{"required":["url","html_url","id","node_id","user","position","line","path","commit_id","created_at","updated_at","author_association","body"],"type":"object","properties":{"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string","description":"The text of the comment."},"commit_id":{"type":"string","description":"The SHA of the commit to which the comment applies."},"created_at":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The ID of the commit comment."},"line":{"type":["integer","null"],"description":"The line of the blob to which the comment applies. The last line of the range for a multi-line comment"},"node_id":{"type":"string","description":"The node ID of the commit comment."},"path":{"type":["string","null"],"description":"The relative path of the file to which the comment applies."},"position":{"type":["integer","null"],"description":"The line index in the diff to which the comment applies."},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [commit comment](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/repos#get-a-commit-comment) resource."}';
    public const SCHEMA_TITLE = 'WebhookCommitCommentCreated\\Comment';
    public const SCHEMA_DESCRIPTION = 'The [commit comment](https://docs.github.com/github-ae@latest/rest/reference/repos#get-a-commit-comment) resource.';
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
    private string $html_url;
    /**
     * The ID of the commit comment.
     */
    private int $id;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private $line;
    /**
     * The node ID of the commit comment.
     */
    private string $node_id;
    /**
     * The relative path of the file to which the comment applies.
     */
    private $path;
    /**
     * The line index in the diff to which the comment applies.
     */
    private $position;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Comment\Reactions::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Comment\Reactions $reactions = null;
    private string $updated_at;
    private string $url;
    private $user;
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
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The ID of the commit comment.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function line()
    {
        return $this->line;
    }
    /**
     * The node ID of the commit comment.
     */
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The relative path of the file to which the comment applies.
     */
    public function path()
    {
        return $this->path;
    }
    /**
     * The line index in the diff to which the comment applies.
     */
    public function position()
    {
        return $this->position;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Comment\Reactions
    {
        return $this->reactions;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function user()
    {
        return $this->user;
    }
}
