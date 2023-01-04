<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionLocked;

final class Discussion
{
    public const SCHEMA_JSON = '{"title":"Discussion","required":["repository_url","category","answer_html_url","answer_chosen_at","answer_chosen_by","html_url","id","node_id","number","title","user","state","locked","comments","created_at","updated_at","author_association","active_lock_reason","body"],"type":"object","properties":{"active_lock_reason":{"type":["string","null"]},"answer_chosen_at":{"type":["string","null"]},"answer_chosen_by":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"answer_html_url":{"type":["string","null"]},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":"string"},"category":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}},"comments":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string"},"id":{"type":"integer"},"locked":{"type":"boolean"},"node_id":{"type":"string"},"number":{"type":"integer"},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string"},"state":{"enum":["open","locked","converting","transferring"],"type":"string"},"timeline_url":{"type":"string"},"title":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_TITLE = 'Discussion';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $active_lock_reason;
    private ?string $answer_chosen_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy $answer_chosen_by;
    private ?string $answer_html_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private string $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Category::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Category $category;
    private int $comments;
    private string $created_at;
    private string $html_url;
    private int $id;
    private bool $locked;
    private string $node_id;
    private int $number;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Reactions::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Reactions $reactions = null;
    private string $repository_url;
    private string $state;
    private ?string $timeline_url = null;
    private string $title;
    private string $updated_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\User::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\User $user;
    public function active_lock_reason() : ?string
    {
        return $this->active_lock_reason;
    }
    public function answer_chosen_at() : ?string
    {
        return $this->answer_chosen_at;
    }
    public function answer_chosen_by() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy
    {
        return $this->answer_chosen_by;
    }
    public function answer_html_url() : ?string
    {
        return $this->answer_html_url;
    }
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
    public function category() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Category
    {
        return $this->category;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function locked() : bool
    {
        return $this->locked;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\Reactions
    {
        return $this->reactions;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function timeline_url() : ?string
    {
        return $this->timeline_url;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\User
    {
        return $this->user;
    }
}
