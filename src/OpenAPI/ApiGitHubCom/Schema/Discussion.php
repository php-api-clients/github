<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Category;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Reactions;

final readonly class Discussion
{
    public const SCHEMA_JSON        = '{"title":"Discussion","required":["repository_url","category","answer_html_url","answer_chosen_at","answer_chosen_by","html_url","id","node_id","number","title","user","state","locked","comments","created_at","updated_at","author_association","active_lock_reason","body"],"type":"object","properties":{"active_lock_reason":{"type":["string","null"]},"answer_chosen_at":{"type":["string","null"]},"answer_chosen_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"answer_html_url":{"type":["string","null"]},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string"},"category":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}},"comments":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string"},"id":{"type":"integer"},"locked":{"type":"boolean"},"node_id":{"type":"string"},"number":{"type":"integer"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string"},"state":{"enum":["open","locked","converting","transferring"],"type":"string","description":"The current state of the discussion.\\n`converting` means that the discussion is being converted from an issue.\\n`transferring` means that the discussion is being transferred from another repository."},"timeline_url":{"type":"string"},"title":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"A Discussion in a repository."}';
    public const SCHEMA_TITLE       = 'Discussion';
    public const SCHEMA_DESCRIPTION = 'A Discussion in a repository.';
    public ?string $active_lock_reason;
    public ?string $answer_chosen_at;
    public ?AnswerChosenBy $answer_chosen_by;
    public ?string $answer_html_url;
    /**
     * How the author is associated with the repository.
     */
    public ?string $author_association;
    public ?string $body;
    public ?Category $category;
    public ?int $comments;
    public ?string $created_at;
    public ?string $html_url;
    public ?int $id;
    public ?bool $locked;
    public ?string $node_id;
    public ?int $number;
    public Reactions $reactions;
    public ?string $repository_url;
    /**
     * The current state of the discussion.
    `converting` means that the discussion is being converted from an issue.
    `transferring` means that the discussion is being transferred from another repository.
     */
    public ?string $state;
    public string $timeline_url;
    public ?string $title;
    public ?string $updated_at;
    public ?AnswerChosenBy $user;

    public function __construct(string $active_lock_reason, string $answer_chosen_at, AnswerChosenBy $answer_chosen_by, string $answer_html_url, string $author_association, string $body, Category $category, int $comments, string $created_at, string $html_url, int $id, bool $locked, string $node_id, int $number, Reactions $reactions, string $repository_url, string $state, string $timeline_url, string $title, string $updated_at, AnswerChosenBy $user)
    {
        $this->active_lock_reason = $active_lock_reason;
        $this->answer_chosen_at   = $answer_chosen_at;
        $this->answer_chosen_by   = $answer_chosen_by;
        $this->answer_html_url    = $answer_html_url;
        $this->author_association = $author_association;
        $this->body               = $body;
        $this->category           = $category;
        $this->comments           = $comments;
        $this->created_at         = $created_at;
        $this->html_url           = $html_url;
        $this->id                 = $id;
        $this->locked             = $locked;
        $this->node_id            = $node_id;
        $this->number             = $number;
        $this->reactions          = $reactions;
        $this->repository_url     = $repository_url;
        $this->state              = $state;
        $this->timeline_url       = $timeline_url;
        $this->title              = $title;
        $this->updated_at         = $updated_at;
        $this->user               = $user;
    }
}
