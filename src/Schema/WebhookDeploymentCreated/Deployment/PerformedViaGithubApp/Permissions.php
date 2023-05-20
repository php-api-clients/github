<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment\PerformedViaGithubApp;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Permissions
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{"actions":"read","administration":"write","checks":"write","content_references":"write","contents":"write","deployments":"read","discussions":"read","emails":"write","environments":"write","issues":"write","keys":"write","members":"read","metadata":"write","organization_administration":"read","organization_hooks":"write","organization_packages":"read","organization_plan":"read","organization_projects":"read","organization_secrets":"write","organization_self_hosted_runners":"write","organization_user_blocking":"write","packages":"write","pages":"read","pull_requests":"read","repository_hooks":"write","repository_projects":"read","secret_scanning_alerts":"write","secrets":"read","security_events":"read","security_scanning_alert":"read","single_file":"read","statuses":"write","team_discussions":"write","vulnerability_alerts":"write","workflows":"read"}';

    public function __construct(public ?string $actions, public ?string $administration, public ?string $checks, #[MapFrom('content_references')] public ?string $contentReferences, public ?string $contents, public ?string $deployments, public ?string $discussions, public ?string $emails, public ?string $environments, public ?string $issues, public ?string $keys, public ?string $members, public ?string $metadata, #[MapFrom('organization_administration')] public ?string $organizationAdministration, #[MapFrom('organization_hooks')] public ?string $organizationHooks, #[MapFrom('organization_packages')] public ?string $organizationPackages, #[MapFrom('organization_plan')] public ?string $organizationPlan, #[MapFrom('organization_projects')] public ?string $organizationProjects, #[MapFrom('organization_secrets')] public ?string $organizationSecrets, #[MapFrom('organization_self_hosted_runners')] public ?string $organizationSelfHostedRunners, #[MapFrom('organization_user_blocking')] public ?string $organizationUserBlocking, public ?string $packages, public ?string $pages, #[MapFrom('pull_requests')] public ?string $pullRequests, #[MapFrom('repository_hooks')] public ?string $repositoryHooks, #[MapFrom('repository_projects')] public ?string $repositoryProjects, #[MapFrom('secret_scanning_alerts')] public ?string $secretScanningAlerts, public ?string $secrets, #[MapFrom('security_events')] public ?string $securityEvents, #[MapFrom('security_scanning_alert')] public ?string $securityScanningAlert, #[MapFrom('single_file')] public ?string $singleFile, public ?string $statuses, #[MapFrom('team_discussions')] public ?string $teamDiscussions, #[MapFrom('vulnerability_alerts')] public ?string $vulnerabilityAlerts, public ?string $workflows)
    {
    }
}
