<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookReleaseUnpublished;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Release
{
    public const SCHEMA_JSON = '{"required":["published_at"],"type":"object","properties":{"assets":{"type":"array","items":{"type":["object","null"]}},"assets_url":{"type":"string"},"author":{"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}},"body":{"type":["string","null"]},"created_at":{"type":"string"},"draft":{"type":"boolean"},"html_url":{"type":"string"},"id":{"type":"integer"},"name":{"type":["string","null"]},"node_id":{"type":"string"},"prerelease":{"type":"boolean"},"published_at":{"type":["string","null"]},"tag_name":{"type":"string"},"tarball_url":{"type":["string","null"]},"target_commitish":{"type":"string"},"upload_url":{"type":"string"},"url":{"type":"string"},"zipball_url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"assets":null,"assets_url":"generated_assets_url","author":{"avatar_url":"generated_avatar_url","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"body":"generated_body","created_at":"generated_created_at","draft":false,"html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","prerelease":false,"published_at":"generated_published_at","tag_name":"generated_tag_name","tarball_url":"generated_tarball_url","target_commitish":"generated_target_commitish","upload_url":"generated_upload_url","url":"generated_url","zipball_url":"generated_zipball_url"}';
    public function __construct(public mixed $assets, public string $assets_url, public Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository\Owner $author, public ?string $body, public string $created_at, public bool $draft, public string $html_url, public int $id, public ?string $name, public string $node_id, public bool $prerelease, public ?string $published_at, public string $tag_name, public ?string $tarball_url, public string $target_commitish, public string $upload_url, public string $url, public ?string $zipball_url)
    {
    }
}
