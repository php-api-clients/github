<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

interface ClientInterface
{
    // phpcs:disable
    public function call(string $call, array $params = []): \ApiClients\Client\GitHub\Schema\Root|iterable|\ApiClients\Client\GitHub\Schema\GlobalAdvisory|\ApiClients\Client\GitHub\Schema\Integration|\ApiClients\Client\GitHub\Schema\WebhookConfig|\ApiClients\Client\GitHub\Schema\HookDelivery|\ApiClients\Client\GitHub\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|\ApiClients\Client\GitHub\Schema\Installation|\ApiClients\Client\GitHub\Schema\InstallationToken|\ApiClients\Client\GitHub\Schema\Authorization|\ApiClients\Client\GitHub\Schema\ClassroomAssignment|\ApiClients\Client\GitHub\Schema\Classroom|\ApiClients\Client\GitHub\Schema\CodeOfConduct|\ApiClients\Client\GitHub\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Feed|\ApiClients\Client\GitHub\Schema\GistSimple|\ApiClients\Client\GitHub\Schema\GistComment|\ApiClients\Client\GitHub\Schema\BaseGist|\ApiClients\Client\GitHub\Schema\GitignoreTemplate|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\License|string|\ApiClients\Client\GitHub\Schema\MarketplacePurchase|\ApiClients\Client\GitHub\Schema\ApiOverview|\ApiClients\Client\GitHub\Schema\BasicError|\ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHub\Schema\Thread|\ApiClients\Client\GitHub\Schema\ThreadSubscription|\Psr\Http\Message\ResponseInterface|\ApiClients\Client\GitHub\Schema\OrganizationFull|\ApiClients\Client\GitHub\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise|\ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\OidcCustomSub|\ApiClients\Client\GitHub\Schema\EmptyObject|\ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\SelectedActions|\ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\AuthenticationToken|\ApiClients\Client\GitHub\Schema\Runner|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\ActionsPublicKey|\ApiClients\Client\GitHub\Schema\OrganizationActionsSecret|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\OrganizationActionsVariable|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration|\ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\AttachConfiguration\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodespacesPublicKey|\ApiClients\Client\GitHub\Schema\CodespacesOrgSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails|\ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DependabotPublicKey|\ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\OrgHook|\ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\InteractionLimitResponse|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHub\Schema\OrganizationInvitation|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Codespace|\ApiClients\Client\GitHub\Schema\CopilotSeatDetails|\ApiClients\Client\GitHub\Schema\OrgMembership|\ApiClients\Client\GitHub\Schema\Migration|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\OrganizationRole|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Package|\ApiClients\Client\GitHub\Schema\PackageVersion|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Project|\ApiClients\Client\GitHub\Schema\OrgCustomProperty|\ApiClients\Client\GitHub\Schema\FullRepository|\ApiClients\Client\GitHub\Schema\RepositoryRuleset|\ApiClients\Client\GitHub\Schema\RuleSuite|\ApiClients\Client\GitHub\Schema\ActionsBillingUsage|\ApiClients\Client\GitHub\Schema\PackagesBillingUsage|\ApiClients\Client\GitHub\Schema\CombinedBillingUsage|\ApiClients\Client\GitHub\Schema\TeamFull|\ApiClients\Client\GitHub\Schema\TeamDiscussion|\ApiClients\Client\GitHub\Schema\TeamDiscussionComment|\ApiClients\Client\GitHub\Schema\Reaction|\ApiClients\Client\GitHub\Schema\TeamMembership|\ApiClients\Client\GitHub\Schema\TeamProject|\ApiClients\Client\GitHub\Schema\TeamRepository|\ApiClients\Client\GitHub\Schema\ProjectCard|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHub\Schema\ProjectColumn|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission|\ApiClients\Client\GitHub\Schema\RateLimitOverview|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Artifact|\ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository|\ApiClients\Client\GitHub\Schema\ActionsCacheList|\ApiClients\Client\GitHub\Schema\Job|\ApiClients\Client\GitHub\Schema\OidcCustomSubRepo|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\ActionsRepositoryPermissions|\ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\WorkflowRun|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\WorkflowRunUsage|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\ActionsSecret|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\ActionsVariable|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Workflow|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\WorkflowUsage|\ApiClients\Client\GitHub\Schema\Autolink|\ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes|\ApiClients\Client\GitHub\Schema\BranchWithProtection|\ApiClients\Client\GitHub\Schema\BranchProtection|\ApiClients\Client\GitHub\Schema\ProtectedBranch|\ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\GitHub\Schema\StatusCheckPolicy|\ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy|\ApiClients\Client\GitHub\Schema\CheckRun|\ApiClients\Client\GitHub\Schema\CheckSuite|\ApiClients\Client\GitHub\Schema\CheckSuitePreference|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodeScanningAlert|\ApiClients\Client\GitHub\Schema\CodeScanningAnalysis|\ApiClients\Client\GitHub\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis|\ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask|\ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup|\ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse|\ApiClients\Client\GitHub\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus|\ApiClients\Client\GitHub\Schema\CodeownersErrors|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodespacesPermissionsCheckForDevcontainer|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\RepoCodespacesSecret|\ApiClients\Client\GitHub\Schema\RepositoryInvitation|\ApiClients\Client\GitHub\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\GitHub\Schema\CommitComment|\ApiClients\Client\GitHub\Schema\Commit|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CombinedCommitStatus|\ApiClients\Client\GitHub\Schema\CommunityProfile|\ApiClients\Client\GitHub\Schema\CommitComparison|\ApiClients\Client\GitHub\Schema\ContentDirectory|\ApiClients\Client\GitHub\Schema\ContentFile|\ApiClients\Client\GitHub\Schema\ContentSymlink|\ApiClients\Client\GitHub\Schema\ContentSubmodule|\ApiClients\Client\GitHub\Schema\FileCommit|\ApiClients\Client\GitHub\Schema\DependabotAlert|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DependabotSecret|\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom|\ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Deployment|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\DeploymentStatus|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Environment|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\DeploymentProtectionRule|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\ShortBlob|\ApiClients\Client\GitHub\Schema\Blob|\ApiClients\Client\GitHub\Schema\GitCommit|\ApiClients\Client\GitHub\Schema\GitRef|\ApiClients\Client\GitHub\Schema\GitTag|\ApiClients\Client\GitHub\Schema\GitTree|\ApiClients\Client\GitHub\Schema\Hook|\ApiClients\Client\GitHub\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Import|\ApiClients\Client\GitHub\Schema\PorterAuthor|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHub\Schema\Issue|\ApiClients\Client\GitHub\Schema\IssueComment|\ApiClients\Client\GitHub\Schema\IssueEvent|\ApiClients\Client\GitHub\Schema\DeployKey|\ApiClients\Client\GitHub\Schema\Label|\ApiClients\Client\GitHub\Schema\Language|\ApiClients\Client\GitHub\Schema\LicenseContent|\ApiClients\Client\GitHub\Schema\MergedUpstream|\ApiClients\Client\GitHub\Schema\Milestone|\ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHub\Schema\Page|\ApiClients\Client\GitHub\Schema\PageBuildStatus|\ApiClients\Client\GitHub\Schema\PageBuild|\ApiClients\Client\GitHub\Schema\PageDeployment|\ApiClients\Client\GitHub\Schema\PagesDeploymentStatus|\ApiClients\Client\GitHub\Schema\PagesHealthCheck|\ApiClients\Client\GitHub\Schema\Operations\Repos\CheckPrivateVulnerabilityReporting\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\PullRequest|\ApiClients\Client\GitHub\Schema\PullRequestReviewComment|\ApiClients\Client\GitHub\Schema\PullRequestMergeResult|\ApiClients\Client\GitHub\Schema\PullRequestReviewRequest|\ApiClients\Client\GitHub\Schema\PullRequestSimple|\ApiClients\Client\GitHub\Schema\PullRequestReview|\ApiClients\Client\GitHub\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Release|\ApiClients\Client\GitHub\Schema\ReleaseAsset|\ApiClients\Client\GitHub\Schema\ReleaseNotesContent|\ApiClients\Client\GitHub\Schema\SecretScanningAlert|\ApiClients\Client\GitHub\Schema\RepositoryAdvisory|\ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\SimpleUser|\ApiClients\Client\GitHub\Schema\Stargazer|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\ParticipationStats|\ApiClients\Client\GitHub\Schema\Status|\ApiClients\Client\GitHub\Schema\RepositorySubscription|\ApiClients\Client\GitHub\Schema\TagProtection|\ApiClients\Client\GitHub\Schema\Topic|\ApiClients\Client\GitHub\Schema\CloneTraffic|\ApiClients\Client\GitHub\Schema\ViewTraffic|\ApiClients\Client\GitHub\Schema\MinimalRepository|\ApiClients\Client\GitHub\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\PrivateUser|\ApiClients\Client\GitHub\Schema\PublicUser|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey|\ApiClients\Client\GitHub\Schema\CodespacesSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\CodespaceExportDetails|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository|\ApiClients\Client\GitHub\Schema\GpgKey|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHub\Schema\Key|\ApiClients\Client\GitHub\Schema\SshSigningKey|\ApiClients\Client\GitHub\Schema\Hovercard|\ApiClients\Client\GitHub\Schema\StarredRepository|\ApiClients\Client\GitHub\Schema\Repository;

    public function operations(): OperationsInterface;

    public function webHooks(): \ApiClients\Contracts\OpenAPI\WebHooksInterface;
}
