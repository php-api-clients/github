<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionAnswered;

final class Answer
{
    public const SCHEMA_JSON = '{"required":["id","node_id","html_url","parent_id","child_comment_count","repository_url","discussion_id","author_association","user","created_at","updated_at","body"],"type":"object","properties":{"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string"},"child_comment_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"discussion_id":{"type":"integer"},"html_url":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"parent_id":{"type":["null"]},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_TITLE = 'WebhookDiscussionAnswered\\Answer';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private string $body;
    private int $child_comment_count;
    private string $created_at;
    private int $discussion_id;
    private string $html_url;
    private int $id;
    private string $node_id;
    private $parent_id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\Reactions::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\Reactions $reactions = null;
    private string $repository_url;
    private string $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\User::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\User $user;
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function child_comment_count() : int
    {
        return $this->child_comment_count;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function discussion_id() : int
    {
        return $this->discussion_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function parent_id()
    {
        return $this->parent_id;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\Reactions
    {
        return $this->reactions;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\User
    {
        return $this->user;
    }
}
