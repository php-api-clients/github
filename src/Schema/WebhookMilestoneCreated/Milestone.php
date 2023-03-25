<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMilestoneCreated;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Milestone
{
    public const SCHEMA_JSON = '{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":"object","properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."}';
    public const SCHEMA_TITLE = 'Milestone';
    public const SCHEMA_DESCRIPTION = 'A collection of related issues and pull requests.';
    public const SCHEMA_EXAMPLE_DATA = '{"closedAt":"1970-01-01T00:00:00+00:00","closedIssues":13,"createdAt":"1970-01-01T00:00:00+00:00","creator":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"description":"generated_description_null","dueOn":"1970-01-01T00:00:00+00:00","htmlUrl":"https:\\/\\/example.com\\/","id":13,"labelsUrl":"https:\\/\\/example.com\\/","nodeId":"generated_node_id_null","number":13,"openIssues":13,"state":"open","title":"generated_title_null","updatedAt":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';
    /**
     * number: The number of the milestone.
     * state: The state of the milestone.
     * title: The title of the milestone.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('closed_at')] public ?string $closedAt, #[\EventSauce\ObjectHydrator\MapFrom('closed_issues')] public int $closedIssues, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public ?Schema\Discussion\AnswerChosenBy $creator, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('due_on')] public ?string $dueOn, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public string $labelsUrl, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public int $number, #[\EventSauce\ObjectHydrator\MapFrom('open_issues')] public int $openIssues, public string $state, public string $title, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $url)
    {
    }
}
