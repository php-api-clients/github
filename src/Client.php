<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Client implements ClientInterface
{
    private array $router = [];
    private readonly OperationsInterface $operations;
    private readonly WebHooks $webHooks;
    private readonly Internal\Routers $routers;

    public function __construct(AuthenticationInterface $authentication, Browser $browser)
    {
        $browser                 = $browser->withBase('https://api.github.com')->withFollowRedirects(false);
        $requestSchemaValidator  = new SchemaValidator(SchemaValidator::VALIDATE_AS_REQUEST);
        $responseSchemaValidator = new SchemaValidator(SchemaValidator::VALIDATE_AS_RESPONSE);
        $hydrators               = new Internal\Hydrators();
        $this->operations        = new Operations(new Internal\Operators(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators));
        $this->webHooks          = new WebHooks(requestSchemaValidator: $requestSchemaValidator, hydrator: $hydrators);
        $this->routers           = new Internal\Routers(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators);
    }

    // phpcs:disable
    public function call(string $call, array $params = []): \ApiClients\Client\GitHub\Schema\Root|iterable|\ApiClients\Client\GitHub\Schema\GlobalAdvisory|\ApiClients\Client\GitHub\Schema\Integration|\ApiClients\Client\GitHub\Schema\WebhookConfig|\ApiClients\Client\GitHub\Schema\HookDelivery|\ApiClients\Client\GitHub\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|\ApiClients\Client\GitHub\Schema\Installation|\ApiClients\Client\GitHub\Schema\InstallationToken|\ApiClients\Client\GitHub\Schema\Authorization|\ApiClients\Client\GitHub\Schema\ClassroomAssignment|\ApiClients\Client\GitHub\Schema\Classroom|\ApiClients\Client\GitHub\Schema\CodeOfConduct|\ApiClients\Client\GitHub\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Feed|\ApiClients\Client\GitHub\Schema\GistSimple|\ApiClients\Client\GitHub\Schema\GistComment|\ApiClients\Client\GitHub\Schema\BaseGist|\ApiClients\Client\GitHub\Schema\GitignoreTemplate|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\License|string|\ApiClients\Client\GitHub\Schema\MarketplacePurchase|\ApiClients\Client\GitHub\Schema\ApiOverview|\ApiClients\Client\GitHub\Schema\BasicError|\ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHub\Schema\Thread|\ApiClients\Client\GitHub\Schema\ThreadSubscription|\Psr\Http\Message\ResponseInterface|\ApiClients\Client\GitHub\Schema\OrganizationFull|\ApiClients\Client\GitHub\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise|\ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\OidcCustomSub|\ApiClients\Client\GitHub\Schema\EmptyObject|\ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\SelectedActions|\ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\AuthenticationToken|\ApiClients\Client\GitHub\Schema\Runner|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\ActionsPublicKey|\ApiClients\Client\GitHub\Schema\OrganizationActionsSecret|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\OrganizationActionsVariable|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodespacesPublicKey|\ApiClients\Client\GitHub\Schema\CodespacesOrgSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails|\ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DependabotPublicKey|\ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\OrgHook|\ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\InteractionLimitResponse|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHub\Schema\OrganizationInvitation|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Codespace|\ApiClients\Client\GitHub\Schema\CopilotSeatDetails|\ApiClients\Client\GitHub\Schema\OrgMembership|\ApiClients\Client\GitHub\Schema\Migration|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\OrganizationRole|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Package|\ApiClients\Client\GitHub\Schema\PackageVersion|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Project|\ApiClients\Client\GitHub\Schema\OrgCustomProperty|\ApiClients\Client\GitHub\Schema\FullRepository|\ApiClients\Client\GitHub\Schema\RepositoryRuleset|\ApiClients\Client\GitHub\Schema\RuleSuite|\ApiClients\Client\GitHub\Schema\ActionsBillingUsage|\ApiClients\Client\GitHub\Schema\PackagesBillingUsage|\ApiClients\Client\GitHub\Schema\CombinedBillingUsage|\ApiClients\Client\GitHub\Schema\TeamFull|\ApiClients\Client\GitHub\Schema\TeamDiscussion|\ApiClients\Client\GitHub\Schema\TeamDiscussionComment|\ApiClients\Client\GitHub\Schema\Reaction|\ApiClients\Client\GitHub\Schema\TeamMembership|\ApiClients\Client\GitHub\Schema\TeamProject|\ApiClients\Client\GitHub\Schema\TeamRepository|\ApiClients\Client\GitHub\Schema\ProjectCard|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHub\Schema\ProjectColumn|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission|\ApiClients\Client\GitHub\Schema\RateLimitOverview|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Artifact|\ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository|\ApiClients\Client\GitHub\Schema\ActionsCacheList|\ApiClients\Client\GitHub\Schema\Job|\ApiClients\Client\GitHub\Schema\OidcCustomSubRepo|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\ActionsRepositoryPermissions|\ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\WorkflowRun|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\WorkflowRunUsage|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\ActionsSecret|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\ActionsVariable|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Workflow|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\WorkflowUsage|\ApiClients\Client\GitHub\Schema\Autolink|\ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes|\ApiClients\Client\GitHub\Schema\BranchWithProtection|\ApiClients\Client\GitHub\Schema\BranchProtection|\ApiClients\Client\GitHub\Schema\ProtectedBranch|\ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\GitHub\Schema\StatusCheckPolicy|\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy|\ApiClients\Client\GitHub\Schema\CheckRun|\ApiClients\Client\GitHub\Schema\CheckSuite|\ApiClients\Client\GitHub\Schema\CheckSuitePreference|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodeScanningAlert|\ApiClients\Client\GitHub\Schema\CodeScanningAnalysis|\ApiClients\Client\GitHub\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup|\ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse|\ApiClients\Client\GitHub\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus|\ApiClients\Client\GitHub\Schema\CodeownersErrors|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodespacesPermissionsCheckForDevcontainer|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\RepoCodespacesSecret|\ApiClients\Client\GitHub\Schema\RepositoryInvitation|\ApiClients\Client\GitHub\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\GitHub\Schema\CommitComment|\ApiClients\Client\GitHub\Schema\Commit|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CombinedCommitStatus|\ApiClients\Client\GitHub\Schema\CommunityProfile|\ApiClients\Client\GitHub\Schema\CommitComparison|\ApiClients\Client\GitHub\Schema\ContentDirectory|\ApiClients\Client\GitHub\Schema\ContentFile|\ApiClients\Client\GitHub\Schema\ContentSymlink|\ApiClients\Client\GitHub\Schema\ContentSubmodule|\ApiClients\Client\GitHub\Schema\FileCommit|\ApiClients\Client\GitHub\Schema\DependabotAlert|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DependabotSecret|\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom|\ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Deployment|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\DeploymentStatus|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Environment|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DeploymentProtectionRule|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\ShortBlob|\ApiClients\Client\GitHub\Schema\Blob|\ApiClients\Client\GitHub\Schema\GitCommit|\ApiClients\Client\GitHub\Schema\GitRef|\ApiClients\Client\GitHub\Schema\GitTag|\ApiClients\Client\GitHub\Schema\GitTree|\ApiClients\Client\GitHub\Schema\Hook|\ApiClients\Client\GitHub\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Import|\ApiClients\Client\GitHub\Schema\PorterAuthor|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHub\Schema\Issue|\ApiClients\Client\GitHub\Schema\IssueComment|\ApiClients\Client\GitHub\Schema\IssueEvent|\ApiClients\Client\GitHub\Schema\DeployKey|\ApiClients\Client\GitHub\Schema\Label|\ApiClients\Client\GitHub\Schema\Language|\ApiClients\Client\GitHub\Schema\LicenseContent|\ApiClients\Client\GitHub\Schema\MergedUpstream|\ApiClients\Client\GitHub\Schema\Milestone|\ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHub\Schema\Page|\ApiClients\Client\GitHub\Schema\PageBuildStatus|\ApiClients\Client\GitHub\Schema\PageBuild|\ApiClients\Client\GitHub\Schema\PageDeployment|\ApiClients\Client\GitHub\Schema\PagesDeploymentStatus|\ApiClients\Client\GitHub\Schema\PagesHealthCheck|\ApiClients\Client\GitHub\Schema\PullRequest|\ApiClients\Client\GitHub\Schema\PullRequestReviewComment|\ApiClients\Client\GitHub\Schema\PullRequestMergeResult|\ApiClients\Client\GitHub\Schema\PullRequestReviewRequest|\ApiClients\Client\GitHub\Schema\PullRequestSimple|\ApiClients\Client\GitHub\Schema\PullRequestReview|\ApiClients\Client\GitHub\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Release|\ApiClients\Client\GitHub\Schema\ReleaseAsset|\ApiClients\Client\GitHub\Schema\ReleaseNotesContent|\ApiClients\Client\GitHub\Schema\SecretScanningAlert|\ApiClients\Client\GitHub\Schema\RepositoryAdvisory|\ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\SimpleUser|\ApiClients\Client\GitHub\Schema\Stargazer|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\ParticipationStats|\ApiClients\Client\GitHub\Schema\Status|\ApiClients\Client\GitHub\Schema\RepositorySubscription|\ApiClients\Client\GitHub\Schema\TagProtection|\ApiClients\Client\GitHub\Schema\Topic|\ApiClients\Client\GitHub\Schema\CloneTraffic|\ApiClients\Client\GitHub\Schema\ViewTraffic|\ApiClients\Client\GitHub\Schema\MinimalRepository|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\PrivateUser|\ApiClients\Client\GitHub\Schema\PublicUser|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey|\ApiClients\Client\GitHub\Schema\CodespacesSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\CodespaceExportDetails|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository|\ApiClients\Client\GitHub\Schema\GpgKey|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHub\Schema\Key|\ApiClients\Client\GitHub\Schema\SshSigningKey|\ApiClients\Client\GitHub\Schema\Hovercard|\ApiClients\Client\GitHub\Schema\StarredRepository|\ApiClients\Client\GitHub\Schema\Repository
    {
        [$method, $path] = explode(' ', $call);
        $pathChunks      = explode('/', $path);
        $pathChunksCount = count($pathChunks);
        if ($method === 'GET') {
            if ($pathChunksCount === 1) {
                if (\array_key_exists(Internal\Router\Get\One::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\One::class] = new Internal\Router\Get\One(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\One::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Get\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Two::class] = new Internal\Router\Get\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Get\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Three::class] = new Internal\Router\Get\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Get\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Four::class] = new Internal\Router\Get\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Get\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Five::class] = new Internal\Router\Get\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Get\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Six::class] = new Internal\Router\Get\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Get\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Seven::class] = new Internal\Router\Get\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Get\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Eight::class] = new Internal\Router\Get\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Get\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Nine::class] = new Internal\Router\Get\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Get\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Ten::class] = new Internal\Router\Get\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Ten::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'POST') {
            if ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Post\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Four::class] = new Internal\Router\Post\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Post\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Six::class] = new Internal\Router\Post\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Post\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Five::class] = new Internal\Router\Post\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Post\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Two::class] = new Internal\Router\Post\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Post\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Three::class] = new Internal\Router\Post\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Post\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Seven::class] = new Internal\Router\Post\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Post\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Eight::class] = new Internal\Router\Post\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Post\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Nine::class] = new Internal\Router\Post\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Post\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Ten::class] = new Internal\Router\Post\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Ten::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'PATCH') {
            if ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Patch\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Four::class] = new Internal\Router\Patch\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Patch\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Three::class] = new Internal\Router\Patch\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Patch\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Five::class] = new Internal\Router\Patch\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Patch\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Six::class] = new Internal\Router\Patch\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Patch\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Seven::class] = new Internal\Router\Patch\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Patch\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Nine::class] = new Internal\Router\Patch\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Patch\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Eight::class] = new Internal\Router\Patch\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Patch\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Two::class] = new Internal\Router\Patch\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Two::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'LIST') {
            if ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\List\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Three::class] = new Internal\Router\List\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\List\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Four::class] = new Internal\Router\List\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\List\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Two::class] = new Internal\Router\List\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\List\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Five::class] = new Internal\Router\List\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\List\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Six::class] = new Internal\Router\List\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\List\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Seven::class] = new Internal\Router\List\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\List\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Eight::class] = new Internal\Router\List\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\List\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Ten::class] = new Internal\Router\List\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Ten::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\List\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Nine::class] = new Internal\Router\List\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Nine::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'DELETE') {
            if ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Delete\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Four::class] = new Internal\Router\Delete\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Delete\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Five::class] = new Internal\Router\Delete\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Delete\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Three::class] = new Internal\Router\Delete\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Delete\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Seven::class] = new Internal\Router\Delete\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Delete\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Six::class] = new Internal\Router\Delete\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Delete\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Eight::class] = new Internal\Router\Delete\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Delete\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Nine::class] = new Internal\Router\Delete\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 11) {
                if (\array_key_exists(Internal\Router\Delete\Eleven::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Eleven::class] = new Internal\Router\Delete\Eleven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Eleven::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'PUT') {
            if ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Put\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Five::class] = new Internal\Router\Put\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Put\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Four::class] = new Internal\Router\Put\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Put\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Two::class] = new Internal\Router\Put\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Put\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Seven::class] = new Internal\Router\Put\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Put\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Six::class] = new Internal\Router\Put\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Put\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Eight::class] = new Internal\Router\Put\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Put\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Nine::class] = new Internal\Router\Put\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Put\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Three::class] = new Internal\Router\Put\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Three::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'STREAM') {
            if ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Stream\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Six::class] = new Internal\Router\Stream\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Stream\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Eight::class] = new Internal\Router\Stream\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Stream\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Ten::class] = new Internal\Router\Stream\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Ten::class]->call($call, $params, $pathChunks);
            }
        }

        throw new \InvalidArgumentException();
    }

    public function operations(): OperationsInterface
    {
        return $this->operations;
    }

    public function webHooks(): \ApiClients\Contracts\OpenAPI\WebHooksInterface
    {
        return $this->webHooks;
    }
}
