<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner;

use ApiClients\Client\GitHub\Schema;

final readonly class From
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"organization":{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"organization":{"avatar_url":"https:\\/\\/example.com\\/","description":"generated_description_null","events_url":"https:\\/\\/example.com\\/","hooks_url":"https:\\/\\/example.com\\/","html_url":"https:\\/\\/example.com\\/","id":13,"issues_url":"https:\\/\\/example.com\\/","login":"generated_login_null","members_url":"generated_members_url_uri-template","node_id":"generated_node_id_null","public_members_url":"generated_public_members_url_uri-template","repos_url":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/"},"user":{"avatar_url":"https:\\/\\/example.com\\/","deleted":false,"email":"generated_email_null","events_url":"generated_events_url_uri-template","followers_url":"https:\\/\\/example.com\\/","following_url":"generated_following_url_uri-template","gists_url":"generated_gists_url_uri-template","gravatar_id":"generated_gravatar_id_null","html_url":"https:\\/\\/example.com\\/","id":13,"login":"generated_login_null","name":"generated_name_null","node_id":"generated_node_id_null","organizations_url":"https:\\/\\/example.com\\/","received_events_url":"https:\\/\\/example.com\\/","repos_url":"https:\\/\\/example.com\\/","site_admin":false,"starred_url":"generated_starred_url_uri-template","subscriptions_url":"https:\\/\\/example.com\\/","type":"Bot","url":"https:\\/\\/example.com\\/"}}';

    public function __construct(public ?Schema\WebhookRepositoryTransferred\Changes\Owner\From\Organization $organization, public ?Schema\WebhookRepositoryTransferred\Changes\Owner\From\User $user)
    {
    }
}
