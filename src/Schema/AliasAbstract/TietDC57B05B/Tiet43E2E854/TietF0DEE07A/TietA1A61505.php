<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietDC57B05B\Tiet43E2E854\TietF0DEE07A;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietA1A61505
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "actions": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "administration": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "checks": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "content_references": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "contents": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "deployments": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "discussions": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "emails": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "environments": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "issues": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "keys": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "members": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "metadata": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_administration": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_hooks": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_packages": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_plan": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_projects": {
            "enum": [
                "read",
                "write",
                "admin"
            ],
            "type": "string"
        },
        "organization_secrets": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_self_hosted_runners": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "organization_user_blocking": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "packages": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "pages": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "pull_requests": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "repository_hooks": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "repository_projects": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "secret_scanning_alerts": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "secrets": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "security_events": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "security_scanning_alert": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "single_file": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "statuses": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "team_discussions": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "vulnerability_alerts": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        },
        "workflows": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string"
        }
    },
    "description": "The set of permissions for the GitHub app"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actions": "read",
    "administration": "write",
    "checks": "write",
    "content_references": "write",
    "contents": "write",
    "deployments": "read",
    "discussions": "read",
    "emails": "write",
    "environments": "write",
    "issues": "write",
    "keys": "write",
    "members": "read",
    "metadata": "write",
    "organization_administration": "read",
    "organization_hooks": "write",
    "organization_packages": "read",
    "organization_plan": "read",
    "organization_projects": "read",
    "organization_secrets": "write",
    "organization_self_hosted_runners": "write",
    "organization_user_blocking": "write",
    "packages": "write",
    "pages": "read",
    "pull_requests": "read",
    "repository_hooks": "write",
    "repository_projects": "read",
    "secret_scanning_alerts": "write",
    "secrets": "read",
    "security_events": "read",
    "security_scanning_alert": "read",
    "single_file": "read",
    "statuses": "write",
    "team_discussions": "write",
    "vulnerability_alerts": "write",
    "workflows": "read"
}';

    public function __construct(public string|null $actions, public string|null $administration, public string|null $checks, #[MapFrom('content_references')]
    public string|null $contentReferences, public string|null $contents, public string|null $deployments, public string|null $discussions, public string|null $emails, public string|null $environments, public string|null $issues, public string|null $keys, public string|null $members, public string|null $metadata, #[MapFrom('organization_administration')]
    public string|null $organizationAdministration, #[MapFrom('organization_hooks')]
    public string|null $organizationHooks, #[MapFrom('organization_packages')]
    public string|null $organizationPackages, #[MapFrom('organization_plan')]
    public string|null $organizationPlan, #[MapFrom('organization_projects')]
    public string|null $organizationProjects, #[MapFrom('organization_secrets')]
    public string|null $organizationSecrets, #[MapFrom('organization_self_hosted_runners')]
    public string|null $organizationSelfHostedRunners, #[MapFrom('organization_user_blocking')]
    public string|null $organizationUserBlocking, public string|null $packages, public string|null $pages, #[MapFrom('pull_requests')]
    public string|null $pullRequests, #[MapFrom('repository_hooks')]
    public string|null $repositoryHooks, #[MapFrom('repository_projects')]
    public string|null $repositoryProjects, #[MapFrom('secret_scanning_alerts')]
    public string|null $secretScanningAlerts, public string|null $secrets, #[MapFrom('security_events')]
    public string|null $securityEvents, #[MapFrom('security_scanning_alert')]
    public string|null $securityScanningAlert, #[MapFrom('single_file')]
    public string|null $singleFile, public string|null $statuses, #[MapFrom('team_discussions')]
    public string|null $teamDiscussions, #[MapFrom('vulnerability_alerts')]
    public string|null $vulnerabilityAlerts, public string|null $workflows,)
    {
    }
}
