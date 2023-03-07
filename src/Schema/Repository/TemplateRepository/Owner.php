<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repository\TemplateRepository;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Owner
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login","id":13,"node_id":"generated_node_id","avatar_url":"generated_avatar_url","gravatar_id":"generated_gravatar_id","url":"generated_url","html_url":"generated_html_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","organizations_url":"generated_organizations_url","repos_url":"generated_repos_url","events_url":"generated_events_url","received_events_url":"generated_received_events_url","type":"generated_type","site_admin":false}';
    public function __construct(public ?string $login, public ?int $id, public ?string $node_id, public ?string $avatar_url, public ?string $gravatar_id, public ?string $url, public ?string $html_url, public ?string $followers_url, public ?string $following_url, public ?string $gists_url, public ?string $starred_url, public ?string $subscriptions_url, public ?string $organizations_url, public ?string $repos_url, public ?string $events_url, public ?string $received_events_url, public ?string $type, public ?bool $site_admin)
    {
    }
}
