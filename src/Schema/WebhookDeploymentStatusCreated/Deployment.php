<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Deployment
{
    public const SCHEMA_JSON = '{"title":"Deployment","required":["url","id","node_id","sha","ref","task","payload","original_environment","environment","description","creator","created_at","updated_at","statuses_url","repository_url"],"type":"object","properties":{"created_at":{"type":"string"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"environment":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"original_environment":{"type":"string"},"payload":{"type":["null","string","object"],"oneOf":[{"type":"string"},{"type":"object"}]},"performed_via_github_app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","merge_queue_entry","workflow_job","pull_request_review_thread","secret_scanning_alert_location","merge_group"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"production_environment":{"type":"boolean"},"ref":{"type":"string"},"repository_url":{"type":"string","format":"uri"},"sha":{"type":"string"},"statuses_url":{"type":"string","format":"uri"},"task":{"type":"string"},"transient_environment":{"type":"boolean"},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [deployment](https:\\/\\/docs.github.com\\/rest\\/reference\\/deployments#list-deployments)."}';
    public const SCHEMA_TITLE = 'Deployment';
    public const SCHEMA_DESCRIPTION = 'The [deployment](https://docs.github.com/rest/reference/deployments#list-deployments).';
    public const SCHEMA_EXAMPLE_DATA = '{"created_at":"generated_created_at","creator":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"description":"generated_description","environment":"generated_environment","id":13,"node_id":"generated_node_id","original_environment":"generated_original_environment","payload":"generated_payload","performed_via_github_app":{"created_at":"generated_created_at","description":"generated_description","events":["generated_events"],"external_url":"generated_external_url","html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","owner":{"avatar_url":"generated_avatar_url","deleted":false,"email":"generated_email","events_url":"generated_events_url","followers_url":"generated_followers_url","following_url":"generated_following_url","gists_url":"generated_gists_url","gravatar_id":"generated_gravatar_id","html_url":"generated_html_url","id":13,"login":"generated_login","name":"generated_name","node_id":"generated_node_id","organizations_url":"generated_organizations_url","received_events_url":"generated_received_events_url","repos_url":"generated_repos_url","site_admin":false,"starred_url":"generated_starred_url","subscriptions_url":"generated_subscriptions_url","type":"generated_type","url":"generated_url"},"permissions":{"actions":"generated_actions","administration":"generated_administration","checks":"generated_checks","content_references":"generated_content_references","contents":"generated_contents","deployments":"generated_deployments","discussions":"generated_discussions","emails":"generated_emails","environments":"generated_environments","issues":"generated_issues","keys":"generated_keys","members":"generated_members","metadata":"generated_metadata","organization_administration":"generated_organization_administration","organization_hooks":"generated_organization_hooks","organization_packages":"generated_organization_packages","organization_plan":"generated_organization_plan","organization_projects":"generated_organization_projects","organization_secrets":"generated_organization_secrets","organization_self_hosted_runners":"generated_organization_self_hosted_runners","organization_user_blocking":"generated_organization_user_blocking","packages":"generated_packages","pages":"generated_pages","pull_requests":"generated_pull_requests","repository_hooks":"generated_repository_hooks","repository_projects":"generated_repository_projects","secret_scanning_alerts":"generated_secret_scanning_alerts","secrets":"generated_secrets","security_events":"generated_security_events","security_scanning_alert":"generated_security_scanning_alert","single_file":"generated_single_file","statuses":"generated_statuses","team_discussions":"generated_team_discussions","vulnerability_alerts":"generated_vulnerability_alerts","workflows":"generated_workflows"},"slug":"generated_slug","updated_at":"generated_updated_at"},"production_environment":false,"ref":"generated_ref","repository_url":"generated_repository_url","sha":"generated_sha","statuses_url":"generated_statuses_url","task":"generated_task","transient_environment":false,"updated_at":"generated_updated_at","url":"generated_url"}';
    /**
     * performed_via_github_app: GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function __construct(public ?string $created_at, public ?Schema\Discussion\AnswerChosenBy $creator, public ?string $description, public ?string $environment, public ?int $id, public ?string $node_id, public ?string $original_environment, public ?string $payload, public ?Schema\WebhookDeploymentStatusCreated\Deployment\PerformedViaGithubApp $performed_via_github_app, public bool $production_environment, public ?string $ref, public ?string $repository_url, public ?string $sha, public ?string $statuses_url, public ?string $task, public bool $transient_environment, public ?string $updated_at, public ?string $url)
    {
    }
}
