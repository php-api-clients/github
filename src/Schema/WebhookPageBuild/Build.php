<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookPageBuild;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Build
{
    public const SCHEMA_JSON         = '{"required":["url","status","error","pusher","commit","duration","created_at","updated_at"],"type":"object","properties":{"commit":{"type":["string","null"]},"created_at":{"type":"string"},"duration":{"type":"integer"},"error":{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}},"pusher":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"status":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [List GitHub Pages builds](https:\\/\\/docs.github.com\\/rest\\/reference\\/repos#list-github-pages-builds) itself."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The [List GitHub Pages builds](https://docs.github.com/rest/reference/repos#list-github-pages-builds) itself.';
    public const SCHEMA_EXAMPLE_DATA = '{"commit":"generated_commit_null","created_at":"generated_created_at_null","duration":13,"error":{"message":"generated_message_null"},"pusher":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"status":"generated_status_null","updated_at":"generated_updated_at_null","url":"https:\\/\\/example.com\\/"}';

    public function __construct(public ?string $commit, #[MapFrom('created_at')] public string $createdAt, public int $duration, public Schema\WebhookPageBuild\Build\Error $error, public ?Schema\WebhookPageBuild\Build\Pusher $pusher, public string $status, #[MapFrom('updated_at')] public string $updatedAt, public string $url)
    {
    }
}
