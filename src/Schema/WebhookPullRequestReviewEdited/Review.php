<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Review
{
    public const SCHEMA_JSON = '{"required":["id","node_id","user","body","commit_id","submitted_at","state","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"The text of the review."},"commit_id":{"type":"string","description":"A commit SHA for the review."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the review"},"node_id":{"type":"string"},"pull_request_url":{"type":"string","format":"uri"},"state":{"type":"string"},"submitted_at":{"type":["string","null"],"format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The review that was affected."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The review that was affected.';
    public const SCHEMA_EXAMPLE_DATA = '{"_links":{"html":{"href":"generated_href"},"pull_request":{"href":"generated_href"}},"author_association":"generated_author_association","body":"generated_body","commit_id":"generated_commit_id","html_url":"generated_html_url","id":13,"node_id":"generated_node_id","pull_request_url":"generated_pull_request_url","state":"generated_state","submitted_at":"generated_submitted_at","user":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"}}';
    /**
     * author_association: How the author is associated with the repository.
     * body: The text of the review.
     * commit_id: A commit SHA for the review.
     * id: Unique identifier of the review
     */
    public function __construct(public ?Schema\WebhookPullRequestReviewDismissed\Review\Links $_links, public ?string $author_association, public ?string $body, public ?string $commit_id, public ?string $html_url, public ?int $id, public ?string $node_id, public ?string $pull_request_url, public ?string $state, public ?string $submitted_at, public ?Schema\Discussion\AnswerChosenBy $user)
    {
    }
}
