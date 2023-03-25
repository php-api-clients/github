<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPageBuild;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Build
{
    public const SCHEMA_JSON = '{"required":["url","status","error","pusher","commit","duration","created_at","updated_at"],"type":"object","properties":{"commit":{"type":["string","null"]},"created_at":{"type":"string"},"duration":{"type":"integer"},"error":{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}},"pusher":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"status":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [List GitHub Pages builds](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#list-github-pages-builds) itself."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The [List GitHub Pages builds](https://docs.github.com/rest/reference/repos#list-github-pages-builds) itself.';
    public const SCHEMA_EXAMPLE_DATA = '{"commit":"generated_commit_null","createdAt":"generated_created_at_null","duration":13,"error":{"message":"generated_message_null"},"pusher":{"avatarUrl":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","eventsUrl":"generated_events_url_uri-template","followersUrl":"https:\\/\\/example.com\\/","followingUrl":"generated_following_url_uri-template","gistsUrl":"generated_gists_url_uri-template","gravatarId":"generated_gravatar_id_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","nodeId":"generated_node_id_null","organizationsUrl":"https:\\/\\/example.com\\/","receivedEventsUrl":"https:\\/\\/example.com\\/","reposUrl":"https:\\/\\/example.com\\/","siteAdmin":false,"starredUrl":"generated_starred_url_uri-template","subscriptionsUrl":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"status":"generated_status_null","updatedAt":"generated_updated_at_null","url":"https:\\/\\/example.com\\/"}';
    public function __construct(public ?string $commit, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public int $duration, public Schema\PageBuild\Error $error, public ?Schema\Discussion\AnswerChosenBy $pusher, public string $status, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, public string $url)
    {
    }
}
