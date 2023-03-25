<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewDismissed;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Review
{
    public const SCHEMA_JSON = '{"required":["id","node_id","user","body","commit_id","submitted_at","state","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"The text of the review."},"commit_id":{"type":"string","description":"A commit SHA for the review."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the review"},"node_id":{"type":"string"},"pull_request_url":{"type":"string","format":"uri"},"state":{"enum":["dismissed","approved","changes_requested"],"type":"string"},"submitted_at":{"type":"string","format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The review that was affected."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The review that was affected.';
    public const SCHEMA_EXAMPLE_DATA = '{"links":{"html":{"href":"generated_href_uri-template"},"pullRequest":{"href":"generated_href_uri-template"}},"authorAssociation":"COLLABORATOR","body":"generated_body_null","commitId":"generated_commit_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"nodeId":"generated_node_id_null","pullRequestUrl":"https:\\/\\/example.com\\/","state":"dismissed","submittedAt":"1970-01-01T00:00:00+00:00","user":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"}}';
    /**
     * authorAssociation: How the author is associated with the repository.
     * body: The text of the review.
     * commitId: A commit SHA for the review.
     * id: Unique identifier of the review
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('_links')] public Schema\WebhookPullRequestReviewDismissed\Review\Links $links, #[\EventSauce\ObjectHydrator\MapFrom('author_association')] public string $authorAssociation, public ?string $body, #[\EventSauce\ObjectHydrator\MapFrom('commit_id')] public string $commitId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('pull_request_url')] public string $pullRequestUrl, public string $state, #[\EventSauce\ObjectHydrator\MapFrom('submitted_at')] public string $submittedAt, public ?Schema\WebhookIssueCommentCreated\Issue\Assignee $user)
    {
    }
}
