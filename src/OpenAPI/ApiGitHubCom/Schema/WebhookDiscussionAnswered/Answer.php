<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionAnswered;

final class Answer
{
    public const SCHEMA_JSON = '{"required":["id","node_id","html_url","parent_id","child_comment_count","repository_url","discussion_id","author_association","user","created_at","updated_at","body"],"type":"object","properties":{"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string"},"child_comment_count":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"discussion_id":{"type":"integer"},"html_url":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"parent_id":{"type":["null"]},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookDiscussionAnswered\\Answer';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * How the author is associated with the repository.
     */
    public readonly string $author_association;
    public readonly string $body;
    public readonly int $child_comment_count;
    public readonly string $created_at;
    public readonly int $discussion_id;
    public readonly string $html_url;
    public readonly int $id;
    public readonly string $node_id;
    public readonly mixed $parent_id;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\Reactions $reactions;
    public readonly string $repository_url;
    public readonly string $updated_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\User $user;
    public function __construct(string $author_association, string $body, int $child_comment_count, string $created_at, int $discussion_id, string $html_url, int $id, string $node_id, mixed $parent_id, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\Reactions $reactions, string $repository_url, string $updated_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Answer\User $user)
    {
        $this->author_association = $author_association;
        $this->body = $body;
        $this->child_comment_count = $child_comment_count;
        $this->created_at = $created_at;
        $this->discussion_id = $discussion_id;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->parent_id = $parent_id;
        $this->reactions = $reactions;
        $this->repository_url = $repository_url;
        $this->updated_at = $updated_at;
        $this->user = $user;
    }
}
