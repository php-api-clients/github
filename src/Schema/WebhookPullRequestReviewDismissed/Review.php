<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Review
{
    public const SCHEMA_JSON         = '{"required":["id","node_id","user","body","commit_id","submitted_at","state","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"The text of the review."},"commit_id":{"type":"string","description":"A commit SHA for the review."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the review"},"node_id":{"type":"string"},"pull_request_url":{"type":"string","format":"uri"},"state":{"enum":["dismissed","approved","changes_requested"],"type":"string"},"submitted_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The review that was affected."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The review that was affected.';
    public const SCHEMA_EXAMPLE_DATA = '{"_links":{"html":{"href":"generated"},"pull_request":{"href":"generated"}},"author_association":"OWNER","body":"generated","commit_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"node_id":"generated","pull_request_url":"https:\\/\\/example.com\\/","state":"dismissed","submitted_at":"1970-01-01T00:00:00+00:00","user":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated","events_url":"generated","followers_url":"https:\\/\\/example.com\\/","following_url":"generated","gists_url":"generated","gravatar_id":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"login":"generated","name":"generated","node_id":"generated","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated","subscriptions_url":"https:\\/\\/example.com\\/","type":"Mannequin","url":"https:\\/\\/example.com\\/"}}';

    /**
     * authorAssociation: How the author is associated with the repository.
     * body: The text of the review.
     * commitId: A commit SHA for the review.
     * id: Unique identifier of the review
     */
    public function __construct(#[MapFrom('_links')]
    public Schema\WebhookPullRequestReviewDismissed\Review\Links $links, #[MapFrom('author_association')]
    public string $authorAssociation, public string|null $body, #[MapFrom('commit_id')]
    public string $commitId, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('pull_request_url')]
    public string $pullRequestUrl, public string $state, #[MapFrom('submitted_at')]
    public string $submittedAt, public Schema\WebhookPullRequestReviewDismissed\Review\User|null $user,)
    {
    }
}
