<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AppPermissions
{
    public const SCHEMA_JSON         = '{"title":"App Permissions","type":"object","properties":{"actions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."},"administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."},"checks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for checks on code."},"contents":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."},"deployments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for deployments and deployment statuses."},"environments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for managing repository environments."},"issues":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."},"metadata":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."},"packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for packages published to GitHub Packages."},"pages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."},"pull_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."},"repository_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for a repository."},"repository_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage repository projects, columns, and cards."},"secret_scanning_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage secret scanning alerts."},"secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage repository secrets."},"security_events":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage security events like code scanning alerts."},"single_file":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage just a single file."},"statuses":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for commit statuses."},"vulnerability_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage Dependabot alerts."},"workflows":{"enum":["write"],"type":"string","description":"The level of permission to grant the access token to update GitHub Actions workflow files."},"members":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization teams and members."},"organization_administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage access to an organization."},"organization_custom_roles":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for custom repository roles management. This property is in beta and is subject to change."},"organization_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for an organization."},"organization_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for an organization."},"organization_personal_access_tokens":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for viewing and managing fine-grained personal access token requests to an organization."},"organization_personal_access_token_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for viewing and managing fine-grained personal access tokens that have been approved by an organization."},"organization_plan":{"enum":["read"],"type":"string","description":"The level of permission to grant the access token for viewing an organization\'s plan."},"organization_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage organization projects and projects beta (where available)."},"organization_packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization packages published to GitHub Packages."},"organization_secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage organization secrets."},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."},"organization_user_blocking":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage users blocked by the organization."},"team_discussions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage team discussions and related comments."}},"description":"The permissions granted to the user access token.","example":{"contents":"read","issues":"read","deployments":"write","single_file":"read"}}';
    public const SCHEMA_TITLE        = 'App Permissions';
    public const SCHEMA_DESCRIPTION  = 'The permissions granted to the user access token.';
    public const SCHEMA_EXAMPLE_DATA = '{"actions":"read","administration":"write","checks":"write","contents":"write","deployments":"read","environments":"write","issues":"write","metadata":"write","packages":"write","pages":"read","pull_requests":"read","repository_hooks":"write","repository_projects":"read","secret_scanning_alerts":"write","secrets":"read","security_events":"read","single_file":"read","statuses":"write","vulnerability_alerts":"write","workflows":"write","members":"read","organization_administration":"read","organization_custom_roles":"read","organization_announcement_banners":"read","organization_hooks":"write","organization_personal_access_tokens":"read","organization_personal_access_token_requests":"read","organization_plan":"read","organization_projects":"read","organization_packages":"read","organization_secrets":"write","organization_self_hosted_runners":"write","organization_user_blocking":"write","team_discussions":"write"}';

    /**
     * actions: The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts.
     * administration: The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation.
     * checks: The level of permission to grant the access token for checks on code.
     * contents: The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges.
     * deployments: The level of permission to grant the access token for deployments and deployment statuses.
     * environments: The level of permission to grant the access token for managing repository environments.
     * issues: The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones.
     * metadata: The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata.
     * packages: The level of permission to grant the access token for packages published to GitHub Packages.
     * pages: The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds.
     * pullRequests: The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges.
     * repositoryHooks: The level of permission to grant the access token to manage the post-receive hooks for a repository.
     * repositoryProjects: The level of permission to grant the access token to manage repository projects, columns, and cards.
     * secretScanningAlerts: The level of permission to grant the access token to view and manage secret scanning alerts.
     * secrets: The level of permission to grant the access token to manage repository secrets.
     * securityEvents: The level of permission to grant the access token to view and manage security events like code scanning alerts.
     * singleFile: The level of permission to grant the access token to manage just a single file.
     * statuses: The level of permission to grant the access token for commit statuses.
     * vulnerabilityAlerts: The level of permission to grant the access token to manage Dependabot alerts.
     * workflows: The level of permission to grant the access token to update GitHub Actions workflow files.
     * members: The level of permission to grant the access token for organization teams and members.
     * organizationAdministration: The level of permission to grant the access token to manage access to an organization.
     * organizationCustomRoles: The level of permission to grant the access token for custom repository roles management. This property is in beta and is subject to change.
     * organizationAnnouncementBanners: The level of permission to grant the access token to view and manage announcement banners for an organization.
     * organizationHooks: The level of permission to grant the access token to manage the post-receive hooks for an organization.
     * organizationPersonalAccessTokens: The level of permission to grant the access token for viewing and managing fine-grained personal access token requests to an organization.
     * organizationPersonalAccessTokenRequests: The level of permission to grant the access token for viewing and managing fine-grained personal access tokens that have been approved by an organization.
     * organizationPlan: The level of permission to grant the access token for viewing an organization's plan.
     * organizationProjects: The level of permission to grant the access token to manage organization projects and projects beta (where available).
     * organizationPackages: The level of permission to grant the access token for organization packages published to GitHub Packages.
     * organizationSecrets: The level of permission to grant the access token to manage organization secrets.
     * organizationSelfHostedRunners: The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization.
     * organizationUserBlocking: The level of permission to grant the access token to view and manage users blocked by the organization.
     * teamDiscussions: The level of permission to grant the access token to manage team discussions and related comments.
     */
    public function __construct(public string|null $actions, public string|null $administration, public string|null $checks, public string|null $contents, public string|null $deployments, public string|null $environments, public string|null $issues, public string|null $metadata, public string|null $packages, public string|null $pages, #[MapFrom('pull_requests')]
    public string|null $pullRequests, #[MapFrom('repository_hooks')]
    public string|null $repositoryHooks, #[MapFrom('repository_projects')]
    public string|null $repositoryProjects, #[MapFrom('secret_scanning_alerts')]
    public string|null $secretScanningAlerts, public string|null $secrets, #[MapFrom('security_events')]
    public string|null $securityEvents, #[MapFrom('single_file')]
    public string|null $singleFile, public string|null $statuses, #[MapFrom('vulnerability_alerts')]
    public string|null $vulnerabilityAlerts, public string|null $workflows, public string|null $members, #[MapFrom('organization_administration')]
    public string|null $organizationAdministration, #[MapFrom('organization_custom_roles')]
    public string|null $organizationCustomRoles, #[MapFrom('organization_announcement_banners')]
    public string|null $organizationAnnouncementBanners, #[MapFrom('organization_hooks')]
    public string|null $organizationHooks, #[MapFrom('organization_personal_access_tokens')]
    public string|null $organizationPersonalAccessTokens, #[MapFrom('organization_personal_access_token_requests')]
    public string|null $organizationPersonalAccessTokenRequests, #[MapFrom('organization_plan')]
    public string|null $organizationPlan, #[MapFrom('organization_projects')]
    public string|null $organizationProjects, #[MapFrom('organization_packages')]
    public string|null $organizationPackages, #[MapFrom('organization_secrets')]
    public string|null $organizationSecrets, #[MapFrom('organization_self_hosted_runners')]
    public string|null $organizationSelfHostedRunners, #[MapFrom('organization_user_blocking')]
    public string|null $organizationUserBlocking, #[MapFrom('team_discussions')]
    public string|null $teamDiscussions,)
    {
    }
}
