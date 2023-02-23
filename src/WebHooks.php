<?php

declare (strict_types=1);
namespace ApiClients\Client\Github;

final class WebHooks implements \ApiClients\Contracts\OpenAPI\WebHooksInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrators $hydrator;
    private ?\ApiClients\Client\Github\WebHook\BranchProtectionRule $branchProtectionRule = null;
    private ?\ApiClients\Client\Github\WebHook\CheckRun $checkRun = null;
    private ?\ApiClients\Client\Github\WebHook\CheckSuite $checkSuite = null;
    private ?\ApiClients\Client\Github\WebHook\CodeScanningAlert $codeScanningAlert = null;
    private ?\ApiClients\Client\Github\WebHook\CommitComment $commitComment = null;
    private ?\ApiClients\Client\Github\WebHook\Create $create = null;
    private ?\ApiClients\Client\Github\WebHook\Delete $delete = null;
    private ?\ApiClients\Client\Github\WebHook\DependabotAlert $dependabotAlert = null;
    private ?\ApiClients\Client\Github\WebHook\DeployKey $deployKey = null;
    private ?\ApiClients\Client\Github\WebHook\Deployment $deployment = null;
    private ?\ApiClients\Client\Github\WebHook\DeploymentStatus $deploymentStatus = null;
    private ?\ApiClients\Client\Github\WebHook\Discussion $discussion = null;
    private ?\ApiClients\Client\Github\WebHook\DiscussionComment $discussionComment = null;
    private ?\ApiClients\Client\Github\WebHook\Fork $fork = null;
    private ?\ApiClients\Client\Github\WebHook\GithubAppAuthorization $githubAppAuthorization = null;
    private ?\ApiClients\Client\Github\WebHook\Gollum $gollum = null;
    private ?\ApiClients\Client\Github\WebHook\Installation $installation = null;
    private ?\ApiClients\Client\Github\WebHook\InstallationRepositories $installationRepositories = null;
    private ?\ApiClients\Client\Github\WebHook\InstallationTarget $installationTarget = null;
    private ?\ApiClients\Client\Github\WebHook\IssueComment $issueComment = null;
    private ?\ApiClients\Client\Github\WebHook\Issues $issues = null;
    private ?\ApiClients\Client\Github\WebHook\Label $label = null;
    private ?\ApiClients\Client\Github\WebHook\MarketplacePurchase $marketplacePurchase = null;
    private ?\ApiClients\Client\Github\WebHook\Member $member = null;
    private ?\ApiClients\Client\Github\WebHook\Membership $membership = null;
    private ?\ApiClients\Client\Github\WebHook\MergeGroup $mergeGroup = null;
    private ?\ApiClients\Client\Github\WebHook\Meta $meta = null;
    private ?\ApiClients\Client\Github\WebHook\Milestone $milestone = null;
    private ?\ApiClients\Client\Github\WebHook\OrgBlock $orgBlock = null;
    private ?\ApiClients\Client\Github\WebHook\Organization $organization = null;
    private ?\ApiClients\Client\Github\WebHook\Package $package = null;
    private ?\ApiClients\Client\Github\WebHook\PageBuild $pageBuild = null;
    private ?\ApiClients\Client\Github\WebHook\Ping $ping = null;
    private ?\ApiClients\Client\Github\WebHook\ProjectCard $projectCard = null;
    private ?\ApiClients\Client\Github\WebHook\Project $project = null;
    private ?\ApiClients\Client\Github\WebHook\ProjectColumn $projectColumn = null;
    private ?\ApiClients\Client\Github\WebHook\ProjectsV2 $projectsV2 = null;
    private ?\ApiClients\Client\Github\WebHook\ProjectsV2Item $projectsV2Item = null;
    private ?\ApiClients\Client\Github\WebHook\Public_ $public = null;
    private ?\ApiClients\Client\Github\WebHook\PullRequest $pullRequest = null;
    private ?\ApiClients\Client\Github\WebHook\PullRequestReviewComment $pullRequestReviewComment = null;
    private ?\ApiClients\Client\Github\WebHook\PullRequestReview $pullRequestReview = null;
    private ?\ApiClients\Client\Github\WebHook\PullRequestReviewThread $pullRequestReviewThread = null;
    private ?\ApiClients\Client\Github\WebHook\Push $push = null;
    private ?\ApiClients\Client\Github\WebHook\RegistryPackage $registryPackage = null;
    private ?\ApiClients\Client\Github\WebHook\Release $release = null;
    private ?\ApiClients\Client\Github\WebHook\Repository $repository = null;
    private ?\ApiClients\Client\Github\WebHook\RepositoryDispatch $repositoryDispatch = null;
    private ?\ApiClients\Client\Github\WebHook\RepositoryImport $repositoryImport = null;
    private ?\ApiClients\Client\Github\WebHook\RepositoryVulnerabilityAlert $repositoryVulnerabilityAlert = null;
    private ?\ApiClients\Client\Github\WebHook\SecretScanningAlert $secretScanningAlert = null;
    private ?\ApiClients\Client\Github\WebHook\SecretScanningAlertLocation $secretScanningAlertLocation = null;
    private ?\ApiClients\Client\Github\WebHook\SecurityAdvisory $securityAdvisory = null;
    private ?\ApiClients\Client\Github\WebHook\SecurityAndAnalysis $securityAndAnalysis = null;
    private ?\ApiClients\Client\Github\WebHook\Sponsorship $sponsorship = null;
    private ?\ApiClients\Client\Github\WebHook\Star $star = null;
    private ?\ApiClients\Client\Github\WebHook\Status $status = null;
    private ?\ApiClients\Client\Github\WebHook\TeamAdd $teamAdd = null;
    private ?\ApiClients\Client\Github\WebHook\Team $team = null;
    private ?\ApiClients\Client\Github\WebHook\Watch $watch = null;
    private ?\ApiClients\Client\Github\WebHook\WorkflowDispatch $workflowDispatch = null;
    private ?\ApiClients\Client\Github\WebHook\WorkflowJob $workflowJob = null;
    private ?\ApiClients\Client\Github\WebHook\WorkflowRun $workflowRun = null;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, Hydrators $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->hydrator = $hydrator;
    }
    /**
     * @template H
     * @param class-string<H> $className
     * @return H
     */
    public function hydrateWebHook(string $className, array $data) : object
    {
        return $this->hydrator->hydrateObject($className, $data);
    }
    /**
     * @return array{className: class-string, data: mixed}
     */
    public function serializeWebHook(object $object) : array
    {
        return array('className' => $object::class, 'data' => $this->hydrator->serializeObject($object));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleCreated|\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleDeleted|\ApiClients\Client\Github\Schema\WebhookBranchProtectionRuleEdited|\ApiClients\Client\Github\Schema\WebhookCheckRunCompleted|\ApiClients\Client\Github\Schema\WebhookCheckRunCompletedFormEncoded|\ApiClients\Client\Github\Schema\WebhookCheckRunCreated|\ApiClients\Client\Github\Schema\WebhookCheckRunCreatedFormEncoded|\ApiClients\Client\Github\Schema\WebhookCheckRunRequestedAction|\ApiClients\Client\Github\Schema\WebhookCheckRunRequestedActionFormEncoded|\ApiClients\Client\Github\Schema\WebhookCheckRunRerequested|\ApiClients\Client\Github\Schema\WebhookCheckRunRerequestedFormEncoded|\ApiClients\Client\Github\Schema\WebhookCheckSuiteCompleted|\ApiClients\Client\Github\Schema\WebhookCheckSuiteRequested|\ApiClients\Client\Github\Schema\WebhookCheckSuiteRerequested|\ApiClients\Client\Github\Schema\WebhookCodeScanningAlertAppearedInBranch|\ApiClients\Client\Github\Schema\WebhookCodeScanningAlertClosedByUser|\ApiClients\Client\Github\Schema\WebhookCodeScanningAlertCreated|\ApiClients\Client\Github\Schema\WebhookCodeScanningAlertFixed|\ApiClients\Client\Github\Schema\WebhookCodeScanningAlertReopened|\ApiClients\Client\Github\Schema\WebhookCodeScanningAlertReopenedByUser|\ApiClients\Client\Github\Schema\WebhookCommitCommentCreated|\ApiClients\Client\Github\Schema\WebhookCreate|\ApiClients\Client\Github\Schema\WebhookDelete|\ApiClients\Client\Github\Schema\WebhookDependabotAlertCreated|\ApiClients\Client\Github\Schema\WebhookDependabotAlertDismissed|\ApiClients\Client\Github\Schema\WebhookDependabotAlertFixed|\ApiClients\Client\Github\Schema\WebhookDependabotAlertReintroduced|\ApiClients\Client\Github\Schema\WebhookDependabotAlertReopened|\ApiClients\Client\Github\Schema\WebhookDeployKeyCreated|\ApiClients\Client\Github\Schema\WebhookDeployKeyDeleted|\ApiClients\Client\Github\Schema\WebhookDeploymentCreated|\ApiClients\Client\Github\Schema\WebhookDeploymentStatusCreated|\ApiClients\Client\Github\Schema\WebhookDiscussionAnswered|\ApiClients\Client\Github\Schema\WebhookDiscussionCategoryChanged|\ApiClients\Client\Github\Schema\WebhookDiscussionCreated|\ApiClients\Client\Github\Schema\WebhookDiscussionDeleted|\ApiClients\Client\Github\Schema\WebhookDiscussionEdited|\ApiClients\Client\Github\Schema\WebhookDiscussionLabeled|\ApiClients\Client\Github\Schema\WebhookDiscussionLocked|\ApiClients\Client\Github\Schema\WebhookDiscussionPinned|\ApiClients\Client\Github\Schema\WebhookDiscussionTransferred|\ApiClients\Client\Github\Schema\WebhookDiscussionUnanswered|\ApiClients\Client\Github\Schema\WebhookDiscussionUnlabeled|\ApiClients\Client\Github\Schema\WebhookDiscussionUnlocked|\ApiClients\Client\Github\Schema\WebhookDiscussionUnpinned|\ApiClients\Client\Github\Schema\WebhookDiscussionCommentCreated|\ApiClients\Client\Github\Schema\WebhookDiscussionCommentDeleted|\ApiClients\Client\Github\Schema\WebhookDiscussionCommentEdited|\ApiClients\Client\Github\Schema\WebhookFork|\ApiClients\Client\Github\Schema\WebhookGithubAppAuthorizationRevoked|\ApiClients\Client\Github\Schema\WebhookGollum|\ApiClients\Client\Github\Schema\WebhookInstallationCreated|\ApiClients\Client\Github\Schema\WebhookInstallationDeleted|\ApiClients\Client\Github\Schema\WebhookInstallationNewPermissionsAccepted|\ApiClients\Client\Github\Schema\WebhookInstallationSuspend|\ApiClients\Client\Github\Schema\WebhookInstallationUnsuspend|\ApiClients\Client\Github\Schema\WebhookInstallationRepositoriesAdded|\ApiClients\Client\Github\Schema\WebhookInstallationRepositoriesRemoved|\ApiClients\Client\Github\Schema\WebhookInstallationTargetRenamed|\ApiClients\Client\Github\Schema\WebhookIssueCommentCreated|\ApiClients\Client\Github\Schema\WebhookIssueCommentDeleted|\ApiClients\Client\Github\Schema\WebhookIssueCommentEdited|\ApiClients\Client\Github\Schema\WebhookIssuesAssigned|\ApiClients\Client\Github\Schema\WebhookIssuesClosed|\ApiClients\Client\Github\Schema\WebhookIssuesDeleted|\ApiClients\Client\Github\Schema\WebhookIssuesDemilestoned|\ApiClients\Client\Github\Schema\WebhookIssuesEdited|\ApiClients\Client\Github\Schema\WebhookIssuesLabeled|\ApiClients\Client\Github\Schema\WebhookIssuesLocked|\ApiClients\Client\Github\Schema\WebhookIssuesMilestoned|\ApiClients\Client\Github\Schema\WebhookIssuesOpened|\ApiClients\Client\Github\Schema\WebhookIssuesPinned|\ApiClients\Client\Github\Schema\WebhookIssuesReopened|\ApiClients\Client\Github\Schema\WebhookIssuesTransferred|\ApiClients\Client\Github\Schema\WebhookIssuesUnassigned|\ApiClients\Client\Github\Schema\WebhookIssuesUnlabeled|\ApiClients\Client\Github\Schema\WebhookIssuesUnlocked|\ApiClients\Client\Github\Schema\WebhookIssuesUnpinned|\ApiClients\Client\Github\Schema\WebhookLabelCreated|\ApiClients\Client\Github\Schema\WebhookLabelDeleted|\ApiClients\Client\Github\Schema\WebhookLabelEdited|\ApiClients\Client\Github\Schema\WebhookMarketplacePurchaseCancelled|\ApiClients\Client\Github\Schema\WebhookMarketplacePurchaseChanged|\ApiClients\Client\Github\Schema\WebhookMarketplacePurchasePendingChange|\ApiClients\Client\Github\Schema\WebhookMarketplacePurchasePendingChangeCancelled|\ApiClients\Client\Github\Schema\WebhookMarketplacePurchasePurchased|\ApiClients\Client\Github\Schema\WebhookMemberAdded|\ApiClients\Client\Github\Schema\WebhookMemberEdited|\ApiClients\Client\Github\Schema\WebhookMemberRemoved|\ApiClients\Client\Github\Schema\WebhookMembershipAdded|\ApiClients\Client\Github\Schema\WebhookMembershipRemoved|\ApiClients\Client\Github\Schema\WebhookMergeGroupChecksRequested|\ApiClients\Client\Github\Schema\WebhookMetaDeleted|\ApiClients\Client\Github\Schema\WebhookMilestoneClosed|\ApiClients\Client\Github\Schema\WebhookMilestoneCreated|\ApiClients\Client\Github\Schema\WebhookMilestoneDeleted|\ApiClients\Client\Github\Schema\WebhookMilestoneEdited|\ApiClients\Client\Github\Schema\WebhookMilestoneOpened|\ApiClients\Client\Github\Schema\WebhookOrgBlockBlocked|\ApiClients\Client\Github\Schema\WebhookOrgBlockUnblocked|\ApiClients\Client\Github\Schema\WebhookOrganizationDeleted|\ApiClients\Client\Github\Schema\WebhookOrganizationMemberAdded|\ApiClients\Client\Github\Schema\WebhookOrganizationMemberInvited|\ApiClients\Client\Github\Schema\WebhookOrganizationMemberRemoved|\ApiClients\Client\Github\Schema\WebhookOrganizationRenamed|\ApiClients\Client\Github\Schema\WebhookPackagePublished|\ApiClients\Client\Github\Schema\WebhookPackageUpdated|\ApiClients\Client\Github\Schema\WebhookPageBuild|\ApiClients\Client\Github\Schema\WebhookPing|\ApiClients\Client\Github\Schema\WebhookPingFormEncoded|\ApiClients\Client\Github\Schema\WebhookProjectCardConverted|\ApiClients\Client\Github\Schema\WebhookProjectCardCreated|\ApiClients\Client\Github\Schema\WebhookProjectCardDeleted|\ApiClients\Client\Github\Schema\WebhookProjectCardEdited|\ApiClients\Client\Github\Schema\WebhookProjectCardMoved|\ApiClients\Client\Github\Schema\WebhookProjectClosed|\ApiClients\Client\Github\Schema\WebhookProjectCreated|\ApiClients\Client\Github\Schema\WebhookProjectDeleted|\ApiClients\Client\Github\Schema\WebhookProjectEdited|\ApiClients\Client\Github\Schema\WebhookProjectReopened|\ApiClients\Client\Github\Schema\WebhookProjectColumnCreated|\ApiClients\Client\Github\Schema\WebhookProjectColumnDeleted|\ApiClients\Client\Github\Schema\WebhookProjectColumnEdited|\ApiClients\Client\Github\Schema\WebhookProjectColumnMoved|\ApiClients\Client\Github\Schema\WebhookProjectsV2ProjectClosed|\ApiClients\Client\Github\Schema\WebhookProjectsV2ProjectCreated|\ApiClients\Client\Github\Schema\WebhookProjectsV2ProjectEdited|\ApiClients\Client\Github\Schema\WebhookProjectsV2ProjectReopened|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemArchived|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemConverted|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemCreated|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemDeleted|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemEdited|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemReordered|\ApiClients\Client\Github\Schema\WebhookProjectsV2ItemRestored|\ApiClients\Client\Github\Schema\WebhookPublic|\ApiClients\Client\Github\Schema\WebhookPullRequestAssigned|\ApiClients\Client\Github\Schema\WebhookPullRequestAutoMergeDisabled|\ApiClients\Client\Github\Schema\WebhookPullRequestAutoMergeEnabled|\ApiClients\Client\Github\Schema\WebhookPullRequestClosed|\ApiClients\Client\Github\Schema\WebhookPullRequestConvertedToDraft|\ApiClients\Client\Github\Schema\WebhookPullRequestDemilestoned|\ApiClients\Client\Github\Schema\WebhookPullRequestDequeued|\ApiClients\Client\Github\Schema\WebhookPullRequestEdited|\ApiClients\Client\Github\Schema\WebhookPullRequestEnqueued|\ApiClients\Client\Github\Schema\WebhookPullRequestLabeled|\ApiClients\Client\Github\Schema\WebhookPullRequestLocked|\ApiClients\Client\Github\Schema\WebhookPullRequestMilestoned|\ApiClients\Client\Github\Schema\WebhookPullRequestOpened|\ApiClients\Client\Github\Schema\WebhookPullRequestReadyForReview|\ApiClients\Client\Github\Schema\WebhookPullRequestReopened|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewRequestRemoved|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewRequested|\ApiClients\Client\Github\Schema\WebhookPullRequestSynchronize|\ApiClients\Client\Github\Schema\WebhookPullRequestUnassigned|\ApiClients\Client\Github\Schema\WebhookPullRequestUnlabeled|\ApiClients\Client\Github\Schema\WebhookPullRequestUnlocked|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewCommentCreated|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewCommentDeleted|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewCommentEdited|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewDismissed|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewEdited|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewSubmitted|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewThreadResolved|\ApiClients\Client\Github\Schema\WebhookPullRequestReviewThreadUnresolved|\ApiClients\Client\Github\Schema\WebhookPush|\ApiClients\Client\Github\Schema\WebhookRegistryPackagePublished|\ApiClients\Client\Github\Schema\WebhookRegistryPackageUpdated|\ApiClients\Client\Github\Schema\WebhookReleaseCreated|\ApiClients\Client\Github\Schema\WebhookReleaseDeleted|\ApiClients\Client\Github\Schema\WebhookReleaseEdited|\ApiClients\Client\Github\Schema\WebhookReleasePrereleased|\ApiClients\Client\Github\Schema\WebhookReleasePublished|\ApiClients\Client\Github\Schema\WebhookReleaseReleased|\ApiClients\Client\Github\Schema\WebhookReleaseUnpublished|\ApiClients\Client\Github\Schema\WebhookRepositoryArchived|\ApiClients\Client\Github\Schema\WebhookRepositoryCreated|\ApiClients\Client\Github\Schema\WebhookRepositoryDeleted|\ApiClients\Client\Github\Schema\WebhookRepositoryEdited|\ApiClients\Client\Github\Schema\WebhookRepositoryPrivatized|\ApiClients\Client\Github\Schema\WebhookRepositoryPublicized|\ApiClients\Client\Github\Schema\WebhookRepositoryRenamed|\ApiClients\Client\Github\Schema\WebhookRepositoryTransferred|\ApiClients\Client\Github\Schema\WebhookRepositoryUnarchived|\ApiClients\Client\Github\Schema\WebhookRepositoryDispatchSample|\ApiClients\Client\Github\Schema\WebhookRepositoryImport|\ApiClients\Client\Github\Schema\WebhookRepositoryVulnerabilityAlertCreate|\ApiClients\Client\Github\Schema\WebhookRepositoryVulnerabilityAlertDismiss|\ApiClients\Client\Github\Schema\WebhookRepositoryVulnerabilityAlertReopen|\ApiClients\Client\Github\Schema\WebhookRepositoryVulnerabilityAlertResolve|\ApiClients\Client\Github\Schema\WebhookSecretScanningAlertCreated|\ApiClients\Client\Github\Schema\WebhookSecretScanningAlertReopened|\ApiClients\Client\Github\Schema\WebhookSecretScanningAlertResolved|\ApiClients\Client\Github\Schema\WebhookSecretScanningAlertRevoked|\ApiClients\Client\Github\Schema\WebhookSecretScanningAlertLocationCreated|\ApiClients\Client\Github\Schema\WebhookSecretScanningAlertLocationCreatedFormEncoded|\ApiClients\Client\Github\Schema\WebhookSecurityAdvisoryPublished|\ApiClients\Client\Github\Schema\WebhookSecurityAdvisoryUpdated|\ApiClients\Client\Github\Schema\WebhookSecurityAdvisoryWithdrawn|\ApiClients\Client\Github\Schema\WebhookSecurityAndAnalysis|\ApiClients\Client\Github\Schema\WebhookSponsorshipCancelled|\ApiClients\Client\Github\Schema\WebhookSponsorshipCreated|\ApiClients\Client\Github\Schema\WebhookSponsorshipEdited|\ApiClients\Client\Github\Schema\WebhookSponsorshipPendingCancellation|\ApiClients\Client\Github\Schema\WebhookSponsorshipPendingTierChange|\ApiClients\Client\Github\Schema\WebhookSponsorshipTierChanged|\ApiClients\Client\Github\Schema\WebhookStarCreated|\ApiClients\Client\Github\Schema\WebhookStarDeleted|\ApiClients\Client\Github\Schema\WebhookStatus|\ApiClients\Client\Github\Schema\WebhookTeamAdd|\ApiClients\Client\Github\Schema\WebhookTeamAddedToRepository|\ApiClients\Client\Github\Schema\WebhookTeamCreated|\ApiClients\Client\Github\Schema\WebhookTeamDeleted|\ApiClients\Client\Github\Schema\WebhookTeamEdited|\ApiClients\Client\Github\Schema\WebhookTeamRemovedFromRepository|\ApiClients\Client\Github\Schema\WebhookWatchStarted|\ApiClients\Client\Github\Schema\WebhookWorkflowDispatch|\ApiClients\Client\Github\Schema\WebhookWorkflowJobCompleted|\ApiClients\Client\Github\Schema\WebhookWorkflowJobInProgress|\ApiClients\Client\Github\Schema\WebhookWorkflowJobQueued|\ApiClients\Client\Github\Schema\WebhookWorkflowJobWaiting|\ApiClients\Client\Github\Schema\WebhookWorkflowRunCompleted|\ApiClients\Client\Github\Schema\WebhookWorkflowRunInProgress|\ApiClients\Client\Github\Schema\WebhookWorkflowRunRequested
     */
    public function resolve(array $headers, array $data) : object
    {
        $headers = (static function ($headers) : array {
            $flatHeaders = array();
            foreach ($headers as $key => $value) {
                $flatHeaders[strtolower($key)] = $value;
            }
            return $flatHeaders;
        })($headers);
        $error = new \RuntimeException('No event matching given headers and data');
        try {
            if ($this->branchProtectionRule instanceof \ApiClients\Client\Github\WebHook\BranchProtectionRule === false) {
                $this->branchProtectionRule = new \ApiClients\Client\Github\WebHook\BranchProtectionRule($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀BranchProtectionRule());
            }
            return $this->branchProtectionRule->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaa;
        }
        webhooks_aaaaa:
        try {
            if ($this->checkRun instanceof \ApiClients\Client\Github\WebHook\CheckRun === false) {
                $this->checkRun = new \ApiClients\Client\Github\WebHook\CheckRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CheckRun());
            }
            return $this->checkRun->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaab;
        }
        webhooks_aaaab:
        try {
            if ($this->checkSuite instanceof \ApiClients\Client\Github\WebHook\CheckSuite === false) {
                $this->checkSuite = new \ApiClients\Client\Github\WebHook\CheckSuite($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CheckSuite());
            }
            return $this->checkSuite->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaac;
        }
        webhooks_aaaac:
        try {
            if ($this->codeScanningAlert instanceof \ApiClients\Client\Github\WebHook\CodeScanningAlert === false) {
                $this->codeScanningAlert = new \ApiClients\Client\Github\WebHook\CodeScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CodeScanningAlert());
            }
            return $this->codeScanningAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaad;
        }
        webhooks_aaaad:
        try {
            if ($this->commitComment instanceof \ApiClients\Client\Github\WebHook\CommitComment === false) {
                $this->commitComment = new \ApiClients\Client\Github\WebHook\CommitComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀CommitComment());
            }
            return $this->commitComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaae;
        }
        webhooks_aaaae:
        try {
            if ($this->create instanceof \ApiClients\Client\Github\WebHook\Create === false) {
                $this->create = new \ApiClients\Client\Github\WebHook\Create($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Create());
            }
            return $this->create->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaf;
        }
        webhooks_aaaaf:
        try {
            if ($this->delete instanceof \ApiClients\Client\Github\WebHook\Delete === false) {
                $this->delete = new \ApiClients\Client\Github\WebHook\Delete($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Delete());
            }
            return $this->delete->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaag;
        }
        webhooks_aaaag:
        try {
            if ($this->dependabotAlert instanceof \ApiClients\Client\Github\WebHook\DependabotAlert === false) {
                $this->dependabotAlert = new \ApiClients\Client\Github\WebHook\DependabotAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DependabotAlert());
            }
            return $this->dependabotAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaah;
        }
        webhooks_aaaah:
        try {
            if ($this->deployKey instanceof \ApiClients\Client\Github\WebHook\DeployKey === false) {
                $this->deployKey = new \ApiClients\Client\Github\WebHook\DeployKey($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DeployKey());
            }
            return $this->deployKey->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaai;
        }
        webhooks_aaaai:
        try {
            if ($this->deployment instanceof \ApiClients\Client\Github\WebHook\Deployment === false) {
                $this->deployment = new \ApiClients\Client\Github\WebHook\Deployment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Deployment());
            }
            return $this->deployment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaj;
        }
        webhooks_aaaaj:
        try {
            if ($this->deploymentStatus instanceof \ApiClients\Client\Github\WebHook\DeploymentStatus === false) {
                $this->deploymentStatus = new \ApiClients\Client\Github\WebHook\DeploymentStatus($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DeploymentStatus());
            }
            return $this->deploymentStatus->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaak;
        }
        webhooks_aaaak:
        try {
            if ($this->discussion instanceof \ApiClients\Client\Github\WebHook\Discussion === false) {
                $this->discussion = new \ApiClients\Client\Github\WebHook\Discussion($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Discussion());
            }
            return $this->discussion->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaal;
        }
        webhooks_aaaal:
        try {
            if ($this->discussionComment instanceof \ApiClients\Client\Github\WebHook\DiscussionComment === false) {
                $this->discussionComment = new \ApiClients\Client\Github\WebHook\DiscussionComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀DiscussionComment());
            }
            return $this->discussionComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaam;
        }
        webhooks_aaaam:
        try {
            if ($this->fork instanceof \ApiClients\Client\Github\WebHook\Fork === false) {
                $this->fork = new \ApiClients\Client\Github\WebHook\Fork($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Fork());
            }
            return $this->fork->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaan;
        }
        webhooks_aaaan:
        try {
            if ($this->githubAppAuthorization instanceof \ApiClients\Client\Github\WebHook\GithubAppAuthorization === false) {
                $this->githubAppAuthorization = new \ApiClients\Client\Github\WebHook\GithubAppAuthorization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀GithubAppAuthorization());
            }
            return $this->githubAppAuthorization->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaao;
        }
        webhooks_aaaao:
        try {
            if ($this->gollum instanceof \ApiClients\Client\Github\WebHook\Gollum === false) {
                $this->gollum = new \ApiClients\Client\Github\WebHook\Gollum($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Gollum());
            }
            return $this->gollum->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaap;
        }
        webhooks_aaaap:
        try {
            if ($this->installation instanceof \ApiClients\Client\Github\WebHook\Installation === false) {
                $this->installation = new \ApiClients\Client\Github\WebHook\Installation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Installation());
            }
            return $this->installation->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaq;
        }
        webhooks_aaaaq:
        try {
            if ($this->installationRepositories instanceof \ApiClients\Client\Github\WebHook\InstallationRepositories === false) {
                $this->installationRepositories = new \ApiClients\Client\Github\WebHook\InstallationRepositories($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀InstallationRepositories());
            }
            return $this->installationRepositories->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaar;
        }
        webhooks_aaaar:
        try {
            if ($this->installationTarget instanceof \ApiClients\Client\Github\WebHook\InstallationTarget === false) {
                $this->installationTarget = new \ApiClients\Client\Github\WebHook\InstallationTarget($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀InstallationTarget());
            }
            return $this->installationTarget->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaas;
        }
        webhooks_aaaas:
        try {
            if ($this->issueComment instanceof \ApiClients\Client\Github\WebHook\IssueComment === false) {
                $this->issueComment = new \ApiClients\Client\Github\WebHook\IssueComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀IssueComment());
            }
            return $this->issueComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaat;
        }
        webhooks_aaaat:
        try {
            if ($this->issues instanceof \ApiClients\Client\Github\WebHook\Issues === false) {
                $this->issues = new \ApiClients\Client\Github\WebHook\Issues($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Issues());
            }
            return $this->issues->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaau;
        }
        webhooks_aaaau:
        try {
            if ($this->label instanceof \ApiClients\Client\Github\WebHook\Label === false) {
                $this->label = new \ApiClients\Client\Github\WebHook\Label($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Label());
            }
            return $this->label->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaav;
        }
        webhooks_aaaav:
        try {
            if ($this->marketplacePurchase instanceof \ApiClients\Client\Github\WebHook\MarketplacePurchase === false) {
                $this->marketplacePurchase = new \ApiClients\Client\Github\WebHook\MarketplacePurchase($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀MarketplacePurchase());
            }
            return $this->marketplacePurchase->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaw;
        }
        webhooks_aaaaw:
        try {
            if ($this->member instanceof \ApiClients\Client\Github\WebHook\Member === false) {
                $this->member = new \ApiClients\Client\Github\WebHook\Member($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Member());
            }
            return $this->member->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaax;
        }
        webhooks_aaaax:
        try {
            if ($this->membership instanceof \ApiClients\Client\Github\WebHook\Membership === false) {
                $this->membership = new \ApiClients\Client\Github\WebHook\Membership($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Membership());
            }
            return $this->membership->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaay;
        }
        webhooks_aaaay:
        try {
            if ($this->mergeGroup instanceof \ApiClients\Client\Github\WebHook\MergeGroup === false) {
                $this->mergeGroup = new \ApiClients\Client\Github\WebHook\MergeGroup($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀MergeGroup());
            }
            return $this->mergeGroup->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaz;
        }
        webhooks_aaaaz:
        try {
            if ($this->meta instanceof \ApiClients\Client\Github\WebHook\Meta === false) {
                $this->meta = new \ApiClients\Client\Github\WebHook\Meta($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Meta());
            }
            return $this->meta->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaba;
        }
        webhooks_aaaba:
        try {
            if ($this->milestone instanceof \ApiClients\Client\Github\WebHook\Milestone === false) {
                $this->milestone = new \ApiClients\Client\Github\WebHook\Milestone($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Milestone());
            }
            return $this->milestone->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabb;
        }
        webhooks_aaabb:
        try {
            if ($this->orgBlock instanceof \ApiClients\Client\Github\WebHook\OrgBlock === false) {
                $this->orgBlock = new \ApiClients\Client\Github\WebHook\OrgBlock($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀OrgBlock());
            }
            return $this->orgBlock->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabc;
        }
        webhooks_aaabc:
        try {
            if ($this->organization instanceof \ApiClients\Client\Github\WebHook\Organization === false) {
                $this->organization = new \ApiClients\Client\Github\WebHook\Organization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Organization());
            }
            return $this->organization->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabd;
        }
        webhooks_aaabd:
        try {
            if ($this->package instanceof \ApiClients\Client\Github\WebHook\Package === false) {
                $this->package = new \ApiClients\Client\Github\WebHook\Package($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Package());
            }
            return $this->package->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabe;
        }
        webhooks_aaabe:
        try {
            if ($this->pageBuild instanceof \ApiClients\Client\Github\WebHook\PageBuild === false) {
                $this->pageBuild = new \ApiClients\Client\Github\WebHook\PageBuild($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PageBuild());
            }
            return $this->pageBuild->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabf;
        }
        webhooks_aaabf:
        try {
            if ($this->ping instanceof \ApiClients\Client\Github\WebHook\Ping === false) {
                $this->ping = new \ApiClients\Client\Github\WebHook\Ping($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Ping());
            }
            return $this->ping->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabg;
        }
        webhooks_aaabg:
        try {
            if ($this->projectCard instanceof \ApiClients\Client\Github\WebHook\ProjectCard === false) {
                $this->projectCard = new \ApiClients\Client\Github\WebHook\ProjectCard($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectCard());
            }
            return $this->projectCard->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabh;
        }
        webhooks_aaabh:
        try {
            if ($this->project instanceof \ApiClients\Client\Github\WebHook\Project === false) {
                $this->project = new \ApiClients\Client\Github\WebHook\Project($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Project());
            }
            return $this->project->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabi;
        }
        webhooks_aaabi:
        try {
            if ($this->projectColumn instanceof \ApiClients\Client\Github\WebHook\ProjectColumn === false) {
                $this->projectColumn = new \ApiClients\Client\Github\WebHook\ProjectColumn($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectColumn());
            }
            return $this->projectColumn->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabj;
        }
        webhooks_aaabj:
        try {
            if ($this->projectsV2 instanceof \ApiClients\Client\Github\WebHook\ProjectsV2 === false) {
                $this->projectsV2 = new \ApiClients\Client\Github\WebHook\ProjectsV2($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectsV2());
            }
            return $this->projectsV2->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabk;
        }
        webhooks_aaabk:
        try {
            if ($this->projectsV2Item instanceof \ApiClients\Client\Github\WebHook\ProjectsV2Item === false) {
                $this->projectsV2Item = new \ApiClients\Client\Github\WebHook\ProjectsV2Item($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀ProjectsV2Item());
            }
            return $this->projectsV2Item->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabl;
        }
        webhooks_aaabl:
        try {
            if ($this->public instanceof \ApiClients\Client\Github\WebHook\Public_ === false) {
                $this->public = new \ApiClients\Client\Github\WebHook\Public_($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Public_());
            }
            return $this->public->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabm;
        }
        webhooks_aaabm:
        try {
            if ($this->pullRequest instanceof \ApiClients\Client\Github\WebHook\PullRequest === false) {
                $this->pullRequest = new \ApiClients\Client\Github\WebHook\PullRequest($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequest());
            }
            return $this->pullRequest->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabn;
        }
        webhooks_aaabn:
        try {
            if ($this->pullRequestReviewComment instanceof \ApiClients\Client\Github\WebHook\PullRequestReviewComment === false) {
                $this->pullRequestReviewComment = new \ApiClients\Client\Github\WebHook\PullRequestReviewComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequestReviewComment());
            }
            return $this->pullRequestReviewComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabo;
        }
        webhooks_aaabo:
        try {
            if ($this->pullRequestReview instanceof \ApiClients\Client\Github\WebHook\PullRequestReview === false) {
                $this->pullRequestReview = new \ApiClients\Client\Github\WebHook\PullRequestReview($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequestReview());
            }
            return $this->pullRequestReview->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabp;
        }
        webhooks_aaabp:
        try {
            if ($this->pullRequestReviewThread instanceof \ApiClients\Client\Github\WebHook\PullRequestReviewThread === false) {
                $this->pullRequestReviewThread = new \ApiClients\Client\Github\WebHook\PullRequestReviewThread($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀PullRequestReviewThread());
            }
            return $this->pullRequestReviewThread->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabq;
        }
        webhooks_aaabq:
        try {
            if ($this->push instanceof \ApiClients\Client\Github\WebHook\Push === false) {
                $this->push = new \ApiClients\Client\Github\WebHook\Push($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Push());
            }
            return $this->push->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabr;
        }
        webhooks_aaabr:
        try {
            if ($this->registryPackage instanceof \ApiClients\Client\Github\WebHook\RegistryPackage === false) {
                $this->registryPackage = new \ApiClients\Client\Github\WebHook\RegistryPackage($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RegistryPackage());
            }
            return $this->registryPackage->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabs;
        }
        webhooks_aaabs:
        try {
            if ($this->release instanceof \ApiClients\Client\Github\WebHook\Release === false) {
                $this->release = new \ApiClients\Client\Github\WebHook\Release($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Release());
            }
            return $this->release->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabt;
        }
        webhooks_aaabt:
        try {
            if ($this->repository instanceof \ApiClients\Client\Github\WebHook\Repository === false) {
                $this->repository = new \ApiClients\Client\Github\WebHook\Repository($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Repository());
            }
            return $this->repository->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabu;
        }
        webhooks_aaabu:
        try {
            if ($this->repositoryDispatch instanceof \ApiClients\Client\Github\WebHook\RepositoryDispatch === false) {
                $this->repositoryDispatch = new \ApiClients\Client\Github\WebHook\RepositoryDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RepositoryDispatch());
            }
            return $this->repositoryDispatch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabv;
        }
        webhooks_aaabv:
        try {
            if ($this->repositoryImport instanceof \ApiClients\Client\Github\WebHook\RepositoryImport === false) {
                $this->repositoryImport = new \ApiClients\Client\Github\WebHook\RepositoryImport($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RepositoryImport());
            }
            return $this->repositoryImport->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabw;
        }
        webhooks_aaabw:
        try {
            if ($this->repositoryVulnerabilityAlert instanceof \ApiClients\Client\Github\WebHook\RepositoryVulnerabilityAlert === false) {
                $this->repositoryVulnerabilityAlert = new \ApiClients\Client\Github\WebHook\RepositoryVulnerabilityAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀RepositoryVulnerabilityAlert());
            }
            return $this->repositoryVulnerabilityAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabx;
        }
        webhooks_aaabx:
        try {
            if ($this->secretScanningAlert instanceof \ApiClients\Client\Github\WebHook\SecretScanningAlert === false) {
                $this->secretScanningAlert = new \ApiClients\Client\Github\WebHook\SecretScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecretScanningAlert());
            }
            return $this->secretScanningAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaby;
        }
        webhooks_aaaby:
        try {
            if ($this->secretScanningAlertLocation instanceof \ApiClients\Client\Github\WebHook\SecretScanningAlertLocation === false) {
                $this->secretScanningAlertLocation = new \ApiClients\Client\Github\WebHook\SecretScanningAlertLocation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecretScanningAlertLocation());
            }
            return $this->secretScanningAlertLocation->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabz;
        }
        webhooks_aaabz:
        try {
            if ($this->securityAdvisory instanceof \ApiClients\Client\Github\WebHook\SecurityAdvisory === false) {
                $this->securityAdvisory = new \ApiClients\Client\Github\WebHook\SecurityAdvisory($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecurityAdvisory());
            }
            return $this->securityAdvisory->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaca;
        }
        webhooks_aaaca:
        try {
            if ($this->securityAndAnalysis instanceof \ApiClients\Client\Github\WebHook\SecurityAndAnalysis === false) {
                $this->securityAndAnalysis = new \ApiClients\Client\Github\WebHook\SecurityAndAnalysis($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀SecurityAndAnalysis());
            }
            return $this->securityAndAnalysis->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacb;
        }
        webhooks_aaacb:
        try {
            if ($this->sponsorship instanceof \ApiClients\Client\Github\WebHook\Sponsorship === false) {
                $this->sponsorship = new \ApiClients\Client\Github\WebHook\Sponsorship($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Sponsorship());
            }
            return $this->sponsorship->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacc;
        }
        webhooks_aaacc:
        try {
            if ($this->star instanceof \ApiClients\Client\Github\WebHook\Star === false) {
                $this->star = new \ApiClients\Client\Github\WebHook\Star($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Star());
            }
            return $this->star->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacd;
        }
        webhooks_aaacd:
        try {
            if ($this->status instanceof \ApiClients\Client\Github\WebHook\Status === false) {
                $this->status = new \ApiClients\Client\Github\WebHook\Status($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Status());
            }
            return $this->status->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaace;
        }
        webhooks_aaace:
        try {
            if ($this->teamAdd instanceof \ApiClients\Client\Github\WebHook\TeamAdd === false) {
                $this->teamAdd = new \ApiClients\Client\Github\WebHook\TeamAdd($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀TeamAdd());
            }
            return $this->teamAdd->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacf;
        }
        webhooks_aaacf:
        try {
            if ($this->team instanceof \ApiClients\Client\Github\WebHook\Team === false) {
                $this->team = new \ApiClients\Client\Github\WebHook\Team($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Team());
            }
            return $this->team->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacg;
        }
        webhooks_aaacg:
        try {
            if ($this->watch instanceof \ApiClients\Client\Github\WebHook\Watch === false) {
                $this->watch = new \ApiClients\Client\Github\WebHook\Watch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀Watch());
            }
            return $this->watch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaach;
        }
        webhooks_aaach:
        try {
            if ($this->workflowDispatch instanceof \ApiClients\Client\Github\WebHook\WorkflowDispatch === false) {
                $this->workflowDispatch = new \ApiClients\Client\Github\WebHook\WorkflowDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀WorkflowDispatch());
            }
            return $this->workflowDispatch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaci;
        }
        webhooks_aaaci:
        try {
            if ($this->workflowJob instanceof \ApiClients\Client\Github\WebHook\WorkflowJob === false) {
                $this->workflowJob = new \ApiClients\Client\Github\WebHook\WorkflowJob($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀WorkflowJob());
            }
            return $this->workflowJob->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacj;
        }
        webhooks_aaacj:
        try {
            if ($this->workflowRun instanceof \ApiClients\Client\Github\WebHook\WorkflowRun === false) {
                $this->workflowRun = new \ApiClients\Client\Github\WebHook\WorkflowRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🌀WorkflowRun());
            }
            return $this->workflowRun->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaack;
        }
        webhooks_aaack:
        throw $error;
    }
}
