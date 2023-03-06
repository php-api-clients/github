<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookReleaseCreated\Release;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Assets
{
    public const SCHEMA_JSON = '{"title":"Release Asset","required":["url","browser_download_url","id","node_id","name","label","state","content_type","size","download_count","created_at","updated_at"],"type":"object","properties":{"browser_download_url":{"type":"string","format":"uri"},"content_type":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"download_count":{"type":"integer"},"id":{"type":"integer"},"label":{"type":["string","null"]},"name":{"type":"string","description":"The file name of the asset."},"node_id":{"type":"string"},"size":{"type":"integer"},"state":{"enum":["uploaded"],"type":"string","description":"State of the release asset."},"updated_at":{"type":"string","format":"date-time"},"uploader":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"url":{"type":"string","format":"uri"}},"description":"Data related to a release."}';
    public const SCHEMA_TITLE = 'Release Asset';
    public const SCHEMA_DESCRIPTION = 'Data related to a release.';
    public const SCHEMA_EXAMPLE_DATA = '{"browser_download_url":"generated_browser_download_url","content_type":"generated_content_type","created_at":"generated_created_at","download_count":13,"id":13,"label":"generated_label","name":"generated_name","node_id":"generated_node_id","size":13,"state":"generated_state","updated_at":"generated_updated_at","uploader":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"url":"generated_url"}';
    /**
     * name: The file name of the asset.
     * state: State of the release asset.
     */
    public function __construct(public ?string $browser_download_url, public ?string $content_type, public ?string $created_at, public ?int $download_count, public ?int $id, public ?string $label, public ?string $name, public ?string $node_id, public ?int $size, public ?string $state, public ?string $updated_at, public ?Schema\Discussion\AnswerChosenBy $uploader, public ?string $url)
    {
    }
}
