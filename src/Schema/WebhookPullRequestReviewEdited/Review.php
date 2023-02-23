<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookPullRequestReviewEdited;

final readonly class Review
{
    public const SCHEMA_JSON = '{"required":["id","node_id","user","body","commit_id","submitted_at","state","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"The text of the review."},"commit_id":{"type":"string","description":"A commit SHA for the review."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the review"},"node_id":{"type":"string"},"pull_request_url":{"type":"string","format":"uri"},"state":{"type":"string"},"submitted_at":{"type":["string","null"],"format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The review that was affected."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The review that was affected.';
    public ?\ApiClients\Client\Github\Schema\WebhookPullRequestReviewDismissed\Review\Links $_links;
    /**
     * How the author is associated with the repository.
     */
    public ?string $author_association;
    /**
     * The text of the review.
     */
    public ?string $body;
    /**
     * A commit SHA for the review.
     */
    public ?string $commit_id;
    public ?string $html_url;
    /**
     * Unique identifier of the review
     */
    public ?int $id;
    public ?string $node_id;
    public ?string $pull_request_url;
    public ?string $state;
    public ?string $submitted_at;
    public ?\ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $user;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookPullRequestReviewDismissed\Review\Links $_links, string $author_association, string $body, string $commit_id, string $html_url, int $id, string $node_id, string $pull_request_url, string $state, string $submitted_at, \ApiClients\Client\Github\Schema\Discussion\AnswerChosenBy $user)
    {
        $this->_links = $_links;
        $this->author_association = $author_association;
        $this->body = $body;
        $this->commit_id = $commit_id;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->pull_request_url = $pull_request_url;
        $this->state = $state;
        $this->submitted_at = $submitted_at;
        $this->user = $user;
    }
}
