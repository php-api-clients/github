<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\App;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public const SCHEMA_EXAMPLE_DATA = '{"actions":"read","administration":"read","checks":"read","content_references":"read","contents":"read","deployments":"read","discussions":"read","emails":"read","environments":"read","issues":"read","keys":"read","members":"read","metadata":"read","organization_administration":"read","organization_hooks":"read","organization_packages":"read","organization_plan":"read","organization_projects":"read","organization_secrets":"read","organization_self_hosted_runners":"read","organization_user_blocking":"read","packages":"read","pages":"read","pull_requests":"read","repository_hooks":"read","repository_projects":"read","secret_scanning_alerts":"read","secrets":"read","security_events":"read","security_scanning_alert":"read","single_file":"read","statuses":"read","team_discussions":"read","vulnerability_alerts":"read","workflows":"read"}';
    public function __construct(public ?string $actions, public ?string $administration, public ?string $checks, public ?string $content_references, public ?string $contents, public ?string $deployments, public ?string $discussions, public ?string $emails, public ?string $environments, public ?string $issues, public ?string $keys, public ?string $members, public ?string $metadata, public ?string $organization_administration, public ?string $organization_hooks, public ?string $organization_packages, public ?string $organization_plan, public ?string $organization_projects, public ?string $organization_secrets, public ?string $organization_self_hosted_runners, public ?string $organization_user_blocking, public ?string $packages, public ?string $pages, public ?string $pull_requests, public ?string $repository_hooks, public ?string $repository_projects, public ?string $secret_scanning_alerts, public ?string $secrets, public ?string $security_events, public ?string $security_scanning_alert, public ?string $single_file, public ?string $statuses, public ?string $team_discussions, public ?string $vulnerability_alerts, public ?string $workflows)
    {
    }
}
