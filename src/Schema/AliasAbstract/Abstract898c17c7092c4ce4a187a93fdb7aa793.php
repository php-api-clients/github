<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract898c17c7092c4ce4a187a93fdb7aa793
{
    public const SCHEMA_JSON = '{"required":["id","node_id","user","body","commit_id","submitted_at","state","html_url","pull_request_url","author_association","_links"],"type":"object","properties":{"_links":{"required":["html","pull_request"],"type":"object","properties":{"html":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}},"pull_request":{"title":"Link","required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri-template"}}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"The text of the review."},"commit_id":{"type":"string","description":"A commit SHA for the review."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the review"},"node_id":{"type":"string"},"pull_request_url":{"type":"string","format":"uri"},"state":{"type":"string"},"submitted_at":{"type":["string","null"],"format":"date-time"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The review that was affected."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The review that was affected.';
    public const SCHEMA_EXAMPLE_DATA = '{"_links":{"html":{"href":"generated_href_uri-template"},"pull_request":{"href":"generated_href_uri-template"}},"author_association":"COLLABORATOR","body":"generated_body_null","commit_id":"generated_commit_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"node_id":"generated_node_id_null","pull_request_url":"https:\\/\\/example.com\\/","state":"generated_state_null","submitted_at":"1970-01-01T00:00:00+00:00","user":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"}}';
    /**
     * authorAssociation: How the author is associated with the repository.
     * body: The text of the review.
     * commitId: A commit SHA for the review.
     * id: Unique identifier of the review
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('_links')] public Schema\WebhookPullRequestReviewEdited\Review\Links $links, #[\EventSauce\ObjectHydrator\MapFrom('author_association')] public string $authorAssociation, public ?string $body, #[\EventSauce\ObjectHydrator\MapFrom('commit_id')] public string $commitId, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('pull_request_url')] public string $pullRequestUrl, public string $state, #[\EventSauce\ObjectHydrator\MapFrom('submitted_at')] public ?string $submittedAt, public ?Schema\WebhookPullRequestReviewEdited\Review\User $user)
    {
    }
}
