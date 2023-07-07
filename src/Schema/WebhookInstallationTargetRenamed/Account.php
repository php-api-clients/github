<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookInstallationTargetRenamed;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Account
{
    public const SCHEMA_JSON         = '{"required":["id","node_id","avatar_url","html_url"],"type":"object","properties":{"archived_at":{"type":["string","null"]},"avatar_url":{"type":"string"},"created_at":{"type":"string"},"description":{"type":["null"]},"events_url":{"type":"string"},"followers":{"type":"integer"},"followers_url":{"type":"string"},"following":{"type":"integer"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"has_organization_projects":{"type":"boolean"},"has_repository_projects":{"type":"boolean"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"is_verified":{"type":"boolean"},"issues_url":{"type":"string"},"login":{"type":"string"},"members_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"public_gists":{"type":"integer"},"public_members_url":{"type":"string"},"public_repos":{"type":"integer"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"slug":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"},"website_url":{"type":["null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"archived_at":"generated","avatar_url":"generated","created_at":"generated","description":"generated","events_url":"generated","followers":9,"followers_url":"generated","following":9,"following_url":"generated","gists_url":"generated","gravatar_id":"generated","has_organization_projects":false,"has_repository_projects":false,"hooks_url":"generated","html_url":"generated","id":2,"is_verified":false,"issues_url":"generated","login":"generated","members_url":"generated","name":"generated","node_id":"generated","organizations_url":"generated","public_gists":12,"public_members_url":"generated","public_repos":12,"received_events_url":"generated","repos_url":"generated","site_admin":false,"slug":"generated","starred_url":"generated","subscriptions_url":"generated","type":"generated","updated_at":"generated","url":"generated","website_url":"generated"}';

    public function __construct(#[MapFrom('archived_at')]
    public string|null $archivedAt, #[MapFrom('avatar_url')]
    public string $avatarUrl, #[MapFrom('created_at')]
    public string|null $createdAt, public string $description, #[MapFrom('events_url')]
    public string|null $eventsUrl, public int|null $followers, #[MapFrom('followers_url')]
    public string|null $followersUrl, public int|null $following, #[MapFrom('following_url')]
    public string|null $followingUrl, #[MapFrom('gists_url')]
    public string|null $gistsUrl, #[MapFrom('gravatar_id')]
    public string|null $gravatarId, #[MapFrom('has_organization_projects')]
    public bool|null $hasOrganizationProjects, #[MapFrom('has_repository_projects')]
    public bool|null $hasRepositoryProjects, #[MapFrom('hooks_url')]
    public string|null $hooksUrl, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, #[MapFrom('is_verified')]
    public bool|null $isVerified, #[MapFrom('issues_url')]
    public string|null $issuesUrl, public string|null $login, #[MapFrom('members_url')]
    public string|null $membersUrl, public string|null $name, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('organizations_url')]
    public string|null $organizationsUrl, #[MapFrom('public_gists')]
    public int|null $publicGists, #[MapFrom('public_members_url')]
    public string|null $publicMembersUrl, #[MapFrom('public_repos')]
    public int|null $publicRepos, #[MapFrom('received_events_url')]
    public string|null $receivedEventsUrl, #[MapFrom('repos_url')]
    public string|null $reposUrl, #[MapFrom('site_admin')]
    public bool|null $siteAdmin, public string|null $slug, #[MapFrom('starred_url')]
    public string|null $starredUrl, #[MapFrom('subscriptions_url')]
    public string|null $subscriptionsUrl, public string|null $type, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string|null $url, #[MapFrom('website_url')]
    public string $websiteUrl,)
    {
    }
}
