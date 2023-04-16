<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract66b3c0ecb8a403d51e8a0a3980e5e205
{
    public const SCHEMA_JSON         = '{"title":"Project","required":["owner_url","url","html_url","columns_url","id","node_id","name","body","number","state","creator","created_at","updated_at"],"type":"object","properties":{"body":{"type":["string","null"],"description":"Body of the project"},"columns_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string","description":"Name of the project"},"node_id":{"type":"string"},"number":{"type":"integer"},"owner_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the project; either \'open\' or \'closed\'"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = 'Project';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"body":"generated_body_null","columns_url":"https:\\/\\/example.com\\/","created_at":"1970-01-01T00:00:00+00:00","creator":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"},"html_url":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","number":13,"owner_url":"https:\\/\\/example.com\\/","state":"open","updated_at":"1970-01-01T00:00:00+00:00","url":"https:\\/\\/example.com\\/"}';

    /**
     * body: Body of the project
     * name: Name of the project
     * state: State of the project; either 'open' or 'closed'
     */
    public function __construct(public ?string $body, #[MapFrom('columns_url')] public string $columnsUrl, #[MapFrom('created_at')] public string $createdAt, public ?Schema\WebhookProjectClosed\Project\Creator $creator, #[MapFrom('html_url')] public string $htmlUrl, public int $id, public string $name, #[MapFrom('node_id')] public string $nodeId, public int $number, #[MapFrom('owner_url')] public string $ownerUrl, public string $state, #[MapFrom('updated_at')] public string $updatedAt, public string $url)
    {
    }
}
