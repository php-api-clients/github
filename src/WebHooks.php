<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class WebHooks implements \ApiClients\Contracts\OpenAPI\WebHooksInterface
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly Hydrators $hydrator;
    private ?WebHook\BranchProtectionRule $branchProtectionRule = null;
    private ?WebHook\CheckRun $checkRun = null;
    private ?WebHook\CheckSuite $checkSuite = null;
    private ?WebHook\CodeScanningAlert $codeScanningAlert = null;
    private ?WebHook\CommitComment $commitComment = null;
    private ?WebHook\Create $create = null;
    private ?WebHook\Delete $delete = null;
    private ?WebHook\DependabotAlert $dependabotAlert = null;
    private ?WebHook\DeployKey $deployKey = null;
    private ?WebHook\Deployment $deployment = null;
    private ?WebHook\DeploymentStatus $deploymentStatus = null;
    private ?WebHook\Discussion $discussion = null;
    private ?WebHook\DiscussionComment $discussionComment = null;
    private ?WebHook\Fork $fork = null;
    private ?WebHook\GithubAppAuthorization $githubAppAuthorization = null;
    private ?WebHook\Gollum $gollum = null;
    private ?WebHook\Installation $installation = null;
    private ?WebHook\InstallationRepositories $installationRepositories = null;
    private ?WebHook\InstallationTarget $installationTarget = null;
    private ?WebHook\IssueComment $issueComment = null;
    private ?WebHook\Issues $issues = null;
    private ?WebHook\Label $label = null;
    private ?WebHook\MarketplacePurchase $marketplacePurchase = null;
    private ?WebHook\Member $member = null;
    private ?WebHook\Membership $membership = null;
    private ?WebHook\MergeGroup $mergeGroup = null;
    private ?WebHook\Meta $meta = null;
    private ?WebHook\Milestone $milestone = null;
    private ?WebHook\OrgBlock $orgBlock = null;
    private ?WebHook\Organization $organization = null;
    private ?WebHook\Package $package = null;
    private ?WebHook\PageBuild $pageBuild = null;
    private ?WebHook\Ping $ping = null;
    private ?WebHook\ProjectCard $projectCard = null;
    private ?WebHook\Project $project = null;
    private ?WebHook\ProjectColumn $projectColumn = null;
    private ?WebHook\ProjectsV2 $projectsV2 = null;
    private ?WebHook\ProjectsV2Item $projectsV2Item = null;
    private ?WebHook\Public_ $public = null;
    private ?WebHook\PullRequest $pullRequest = null;
    private ?WebHook\PullRequestReviewComment $pullRequestReviewComment = null;
    private ?WebHook\PullRequestReview $pullRequestReview = null;
    private ?WebHook\PullRequestReviewThread $pullRequestReviewThread = null;
    private ?WebHook\Push $push = null;
    private ?WebHook\RegistryPackage $registryPackage = null;
    private ?WebHook\Release $release = null;
    private ?WebHook\Repository $repository = null;
    private ?WebHook\RepositoryDispatch $repositoryDispatch = null;
    private ?WebHook\RepositoryImport $repositoryImport = null;
    private ?WebHook\RepositoryVulnerabilityAlert $repositoryVulnerabilityAlert = null;
    private ?WebHook\SecretScanningAlert $secretScanningAlert = null;
    private ?WebHook\SecretScanningAlertLocation $secretScanningAlertLocation = null;
    private ?WebHook\SecurityAdvisory $securityAdvisory = null;
    private ?WebHook\SecurityAndAnalysis $securityAndAnalysis = null;
    private ?WebHook\Sponsorship $sponsorship = null;
    private ?WebHook\Star $star = null;
    private ?WebHook\Status $status = null;
    private ?WebHook\TeamAdd $teamAdd = null;
    private ?WebHook\Team $team = null;
    private ?WebHook\Watch $watch = null;
    private ?WebHook\WorkflowDispatch $workflowDispatch = null;
    private ?WebHook\WorkflowJob $workflowJob = null;
    private ?WebHook\WorkflowRun $workflowRun = null;
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
     * @return Schema\WebhookBranchProtectionRuleCreated|Schema\WebhookBranchProtectionRuleDeleted|Schema\WebhookBranchProtectionRuleEdited|Schema\WebhookCheckRunCompleted|Schema\WebhookCheckRunCompletedFormEncoded|Schema\WebhookCheckRunCreated|Schema\WebhookCheckRunCreatedFormEncoded|Schema\WebhookCheckRunRequestedAction|Schema\WebhookCheckRunRequestedActionFormEncoded|Schema\WebhookCheckRunRerequested|Schema\WebhookCheckRunRerequestedFormEncoded|Schema\WebhookCheckSuiteCompleted|Schema\WebhookCheckSuiteRequested|Schema\WebhookCheckSuiteRerequested|Schema\WebhookCodeScanningAlertAppearedInBranch|Schema\WebhookCodeScanningAlertClosedByUser|Schema\WebhookCodeScanningAlertCreated|Schema\WebhookCodeScanningAlertFixed|Schema\WebhookCodeScanningAlertReopened|Schema\WebhookCodeScanningAlertReopenedByUser|Schema\WebhookCommitCommentCreated|Schema\WebhookCreate|Schema\WebhookDelete|Schema\WebhookDependabotAlertCreated|Schema\WebhookDependabotAlertDismissed|Schema\WebhookDependabotAlertFixed|Schema\WebhookDependabotAlertReintroduced|Schema\WebhookDependabotAlertReopened|Schema\WebhookDeployKeyCreated|Schema\WebhookDeployKeyDeleted|Schema\WebhookDeploymentCreated|Schema\WebhookDeploymentStatusCreated|Schema\WebhookDiscussionAnswered|Schema\WebhookDiscussionCategoryChanged|Schema\WebhookDiscussionClosed|Schema\WebhookDiscussionCreated|Schema\WebhookDiscussionDeleted|Schema\WebhookDiscussionEdited|Schema\WebhookDiscussionLabeled|Schema\WebhookDiscussionLocked|Schema\WebhookDiscussionPinned|Schema\WebhookDiscussionReopened|Schema\WebhookDiscussionTransferred|Schema\WebhookDiscussionUnanswered|Schema\WebhookDiscussionUnlabeled|Schema\WebhookDiscussionUnlocked|Schema\WebhookDiscussionUnpinned|Schema\WebhookDiscussionCommentCreated|Schema\WebhookDiscussionCommentDeleted|Schema\WebhookDiscussionCommentEdited|Schema\WebhookFork|Schema\WebhookGithubAppAuthorizationRevoked|Schema\WebhookGollum|Schema\WebhookInstallationCreated|Schema\WebhookInstallationDeleted|Schema\WebhookInstallationNewPermissionsAccepted|Schema\WebhookInstallationSuspend|Schema\WebhookInstallationUnsuspend|Schema\WebhookInstallationRepositoriesAdded|Schema\WebhookInstallationRepositoriesRemoved|Schema\WebhookInstallationTargetRenamed|Schema\WebhookIssueCommentCreated|Schema\WebhookIssueCommentDeleted|Schema\WebhookIssueCommentEdited|Schema\WebhookIssuesAssigned|Schema\WebhookIssuesClosed|Schema\WebhookIssuesDeleted|Schema\WebhookIssuesDemilestoned|Schema\WebhookIssuesEdited|Schema\WebhookIssuesLabeled|Schema\WebhookIssuesLocked|Schema\WebhookIssuesMilestoned|Schema\WebhookIssuesOpened|Schema\WebhookIssuesPinned|Schema\WebhookIssuesReopened|Schema\WebhookIssuesTransferred|Schema\WebhookIssuesUnassigned|Schema\WebhookIssuesUnlabeled|Schema\WebhookIssuesUnlocked|Schema\WebhookIssuesUnpinned|Schema\WebhookLabelCreated|Schema\WebhookLabelDeleted|Schema\WebhookLabelEdited|Schema\WebhookMarketplacePurchaseCancelled|Schema\WebhookMarketplacePurchaseChanged|Schema\WebhookMarketplacePurchasePendingChange|Schema\WebhookMarketplacePurchasePendingChangeCancelled|Schema\WebhookMarketplacePurchasePurchased|Schema\WebhookMemberAdded|Schema\WebhookMemberEdited|Schema\WebhookMemberRemoved|Schema\WebhookMembershipAdded|Schema\WebhookMembershipRemoved|Schema\WebhookMergeGroupChecksRequested|Schema\WebhookMetaDeleted|Schema\WebhookMilestoneClosed|Schema\WebhookMilestoneCreated|Schema\WebhookMilestoneDeleted|Schema\WebhookMilestoneEdited|Schema\WebhookMilestoneOpened|Schema\WebhookOrgBlockBlocked|Schema\WebhookOrgBlockUnblocked|Schema\WebhookOrganizationDeleted|Schema\WebhookOrganizationMemberAdded|Schema\WebhookOrganizationMemberInvited|Schema\WebhookOrganizationMemberRemoved|Schema\WebhookOrganizationRenamed|Schema\WebhookPackagePublished|Schema\WebhookPackageUpdated|Schema\WebhookPageBuild|Schema\WebhookPing|Schema\WebhookPingFormEncoded|Schema\WebhookProjectCardConverted|Schema\WebhookProjectCardCreated|Schema\WebhookProjectCardDeleted|Schema\WebhookProjectCardEdited|Schema\WebhookProjectCardMoved|Schema\WebhookProjectClosed|Schema\WebhookProjectCreated|Schema\WebhookProjectDeleted|Schema\WebhookProjectEdited|Schema\WebhookProjectReopened|Schema\WebhookProjectColumnCreated|Schema\WebhookProjectColumnDeleted|Schema\WebhookProjectColumnEdited|Schema\WebhookProjectColumnMoved|Schema\WebhookProjectsV2ProjectClosed|Schema\WebhookProjectsV2ProjectCreated|Schema\WebhookProjectsV2ProjectDeleted|Schema\WebhookProjectsV2ProjectEdited|Schema\WebhookProjectsV2ProjectReopened|Schema\WebhookProjectsV2ItemArchived|Schema\WebhookProjectsV2ItemConverted|Schema\WebhookProjectsV2ItemCreated|Schema\WebhookProjectsV2ItemDeleted|Schema\WebhookProjectsV2ItemEdited|Schema\WebhookProjectsV2ItemReordered|Schema\WebhookProjectsV2ItemRestored|Schema\WebhookPublic|Schema\WebhookPullRequestAssigned|Schema\WebhookPullRequestAutoMergeDisabled|Schema\WebhookPullRequestAutoMergeEnabled|Schema\WebhookPullRequestClosed|Schema\WebhookPullRequestConvertedToDraft|Schema\WebhookPullRequestDemilestoned|Schema\WebhookPullRequestDequeued|Schema\WebhookPullRequestEdited|Schema\WebhookPullRequestEnqueued|Schema\WebhookPullRequestLabeled|Schema\WebhookPullRequestLocked|Schema\WebhookPullRequestMilestoned|Schema\WebhookPullRequestOpened|Schema\WebhookPullRequestReadyForReview|Schema\WebhookPullRequestReopened|Schema\WebhookPullRequestReviewRequestRemoved|Schema\WebhookPullRequestReviewRequested|Schema\WebhookPullRequestSynchronize|Schema\WebhookPullRequestUnassigned|Schema\WebhookPullRequestUnlabeled|Schema\WebhookPullRequestUnlocked|Schema\WebhookPullRequestReviewCommentCreated|Schema\WebhookPullRequestReviewCommentDeleted|Schema\WebhookPullRequestReviewCommentEdited|Schema\WebhookPullRequestReviewDismissed|Schema\WebhookPullRequestReviewEdited|Schema\WebhookPullRequestReviewSubmitted|Schema\WebhookPullRequestReviewThreadResolved|Schema\WebhookPullRequestReviewThreadUnresolved|Schema\WebhookPush|Schema\WebhookRegistryPackagePublished|Schema\WebhookRegistryPackageUpdated|Schema\WebhookReleaseCreated|Schema\WebhookReleaseDeleted|Schema\WebhookReleaseEdited|Schema\WebhookReleasePrereleased|Schema\WebhookReleasePublished|Schema\WebhookReleaseReleased|Schema\WebhookReleaseUnpublished|Schema\WebhookRepositoryArchived|Schema\WebhookRepositoryCreated|Schema\WebhookRepositoryDeleted|Schema\WebhookRepositoryEdited|Schema\WebhookRepositoryPrivatized|Schema\WebhookRepositoryPublicized|Schema\WebhookRepositoryRenamed|Schema\WebhookRepositoryTransferred|Schema\WebhookRepositoryUnarchived|Schema\WebhookRepositoryDispatchSample|Schema\WebhookRepositoryImport|Schema\WebhookRepositoryVulnerabilityAlertCreate|Schema\WebhookRepositoryVulnerabilityAlertDismiss|Schema\WebhookRepositoryVulnerabilityAlertReopen|Schema\WebhookRepositoryVulnerabilityAlertResolve|Schema\WebhookSecretScanningAlertCreated|Schema\WebhookSecretScanningAlertReopened|Schema\WebhookSecretScanningAlertResolved|Schema\WebhookSecretScanningAlertRevoked|Schema\WebhookSecretScanningAlertLocationCreated|Schema\WebhookSecretScanningAlertLocationCreatedFormEncoded|Schema\WebhookSecurityAdvisoryPublished|Schema\WebhookSecurityAdvisoryUpdated|Schema\WebhookSecurityAdvisoryWithdrawn|Schema\WebhookSecurityAndAnalysis|Schema\WebhookSponsorshipCancelled|Schema\WebhookSponsorshipCreated|Schema\WebhookSponsorshipEdited|Schema\WebhookSponsorshipPendingCancellation|Schema\WebhookSponsorshipPendingTierChange|Schema\WebhookSponsorshipTierChanged|Schema\WebhookStarCreated|Schema\WebhookStarDeleted|Schema\WebhookStatus|Schema\WebhookTeamAdd|Schema\WebhookTeamAddedToRepository|Schema\WebhookTeamCreated|Schema\WebhookTeamDeleted|Schema\WebhookTeamEdited|Schema\WebhookTeamRemovedFromRepository|Schema\WebhookWatchStarted|Schema\WebhookWorkflowDispatch|Schema\WebhookWorkflowJobCompleted|Schema\WebhookWorkflowJobInProgress|Schema\WebhookWorkflowJobQueued|Schema\WebhookWorkflowJobWaiting|Schema\WebhookWorkflowRunCompleted|Schema\WebhookWorkflowRunInProgress|Schema\WebhookWorkflowRunRequested
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
            if ($this->branchProtectionRule instanceof WebHook\BranchProtectionRule === false) {
                $this->branchProtectionRule = new WebHook\BranchProtectionRule($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝BranchProtectionRule());
            }
            return $this->branchProtectionRule->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaa;
        }
        webhooks_aaaaa:
        try {
            if ($this->checkRun instanceof WebHook\CheckRun === false) {
                $this->checkRun = new WebHook\CheckRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CheckRun());
            }
            return $this->checkRun->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaab;
        }
        webhooks_aaaab:
        try {
            if ($this->checkSuite instanceof WebHook\CheckSuite === false) {
                $this->checkSuite = new WebHook\CheckSuite($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CheckSuite());
            }
            return $this->checkSuite->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaac;
        }
        webhooks_aaaac:
        try {
            if ($this->codeScanningAlert instanceof WebHook\CodeScanningAlert === false) {
                $this->codeScanningAlert = new WebHook\CodeScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CodeScanningAlert());
            }
            return $this->codeScanningAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaad;
        }
        webhooks_aaaad:
        try {
            if ($this->commitComment instanceof WebHook\CommitComment === false) {
                $this->commitComment = new WebHook\CommitComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝CommitComment());
            }
            return $this->commitComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaae;
        }
        webhooks_aaaae:
        try {
            if ($this->create instanceof WebHook\Create === false) {
                $this->create = new WebHook\Create($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Create());
            }
            return $this->create->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaf;
        }
        webhooks_aaaaf:
        try {
            if ($this->delete instanceof WebHook\Delete === false) {
                $this->delete = new WebHook\Delete($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Delete());
            }
            return $this->delete->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaag;
        }
        webhooks_aaaag:
        try {
            if ($this->dependabotAlert instanceof WebHook\DependabotAlert === false) {
                $this->dependabotAlert = new WebHook\DependabotAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DependabotAlert());
            }
            return $this->dependabotAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaah;
        }
        webhooks_aaaah:
        try {
            if ($this->deployKey instanceof WebHook\DeployKey === false) {
                $this->deployKey = new WebHook\DeployKey($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DeployKey());
            }
            return $this->deployKey->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaai;
        }
        webhooks_aaaai:
        try {
            if ($this->deployment instanceof WebHook\Deployment === false) {
                $this->deployment = new WebHook\Deployment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Deployment());
            }
            return $this->deployment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaj;
        }
        webhooks_aaaaj:
        try {
            if ($this->deploymentStatus instanceof WebHook\DeploymentStatus === false) {
                $this->deploymentStatus = new WebHook\DeploymentStatus($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DeploymentStatus());
            }
            return $this->deploymentStatus->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaak;
        }
        webhooks_aaaak:
        try {
            if ($this->discussion instanceof WebHook\Discussion === false) {
                $this->discussion = new WebHook\Discussion($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Discussion());
            }
            return $this->discussion->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaal;
        }
        webhooks_aaaal:
        try {
            if ($this->discussionComment instanceof WebHook\DiscussionComment === false) {
                $this->discussionComment = new WebHook\DiscussionComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝DiscussionComment());
            }
            return $this->discussionComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaam;
        }
        webhooks_aaaam:
        try {
            if ($this->fork instanceof WebHook\Fork === false) {
                $this->fork = new WebHook\Fork($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Fork());
            }
            return $this->fork->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaan;
        }
        webhooks_aaaan:
        try {
            if ($this->githubAppAuthorization instanceof WebHook\GithubAppAuthorization === false) {
                $this->githubAppAuthorization = new WebHook\GithubAppAuthorization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝GithubAppAuthorization());
            }
            return $this->githubAppAuthorization->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaao;
        }
        webhooks_aaaao:
        try {
            if ($this->gollum instanceof WebHook\Gollum === false) {
                $this->gollum = new WebHook\Gollum($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Gollum());
            }
            return $this->gollum->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaap;
        }
        webhooks_aaaap:
        try {
            if ($this->installation instanceof WebHook\Installation === false) {
                $this->installation = new WebHook\Installation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Installation());
            }
            return $this->installation->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaq;
        }
        webhooks_aaaaq:
        try {
            if ($this->installationRepositories instanceof WebHook\InstallationRepositories === false) {
                $this->installationRepositories = new WebHook\InstallationRepositories($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝InstallationRepositories());
            }
            return $this->installationRepositories->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaar;
        }
        webhooks_aaaar:
        try {
            if ($this->installationTarget instanceof WebHook\InstallationTarget === false) {
                $this->installationTarget = new WebHook\InstallationTarget($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝InstallationTarget());
            }
            return $this->installationTarget->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaas;
        }
        webhooks_aaaas:
        try {
            if ($this->issueComment instanceof WebHook\IssueComment === false) {
                $this->issueComment = new WebHook\IssueComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝IssueComment());
            }
            return $this->issueComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaat;
        }
        webhooks_aaaat:
        try {
            if ($this->issues instanceof WebHook\Issues === false) {
                $this->issues = new WebHook\Issues($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Issues());
            }
            return $this->issues->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaau;
        }
        webhooks_aaaau:
        try {
            if ($this->label instanceof WebHook\Label === false) {
                $this->label = new WebHook\Label($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Label());
            }
            return $this->label->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaav;
        }
        webhooks_aaaav:
        try {
            if ($this->marketplacePurchase instanceof WebHook\MarketplacePurchase === false) {
                $this->marketplacePurchase = new WebHook\MarketplacePurchase($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝MarketplacePurchase());
            }
            return $this->marketplacePurchase->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaw;
        }
        webhooks_aaaaw:
        try {
            if ($this->member instanceof WebHook\Member === false) {
                $this->member = new WebHook\Member($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Member());
            }
            return $this->member->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaax;
        }
        webhooks_aaaax:
        try {
            if ($this->membership instanceof WebHook\Membership === false) {
                $this->membership = new WebHook\Membership($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Membership());
            }
            return $this->membership->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaay;
        }
        webhooks_aaaay:
        try {
            if ($this->mergeGroup instanceof WebHook\MergeGroup === false) {
                $this->mergeGroup = new WebHook\MergeGroup($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝MergeGroup());
            }
            return $this->mergeGroup->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaaz;
        }
        webhooks_aaaaz:
        try {
            if ($this->meta instanceof WebHook\Meta === false) {
                $this->meta = new WebHook\Meta($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Meta());
            }
            return $this->meta->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaba;
        }
        webhooks_aaaba:
        try {
            if ($this->milestone instanceof WebHook\Milestone === false) {
                $this->milestone = new WebHook\Milestone($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Milestone());
            }
            return $this->milestone->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabb;
        }
        webhooks_aaabb:
        try {
            if ($this->orgBlock instanceof WebHook\OrgBlock === false) {
                $this->orgBlock = new WebHook\OrgBlock($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝OrgBlock());
            }
            return $this->orgBlock->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabc;
        }
        webhooks_aaabc:
        try {
            if ($this->organization instanceof WebHook\Organization === false) {
                $this->organization = new WebHook\Organization($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Organization());
            }
            return $this->organization->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabd;
        }
        webhooks_aaabd:
        try {
            if ($this->package instanceof WebHook\Package === false) {
                $this->package = new WebHook\Package($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Package());
            }
            return $this->package->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabe;
        }
        webhooks_aaabe:
        try {
            if ($this->pageBuild instanceof WebHook\PageBuild === false) {
                $this->pageBuild = new WebHook\PageBuild($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PageBuild());
            }
            return $this->pageBuild->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabf;
        }
        webhooks_aaabf:
        try {
            if ($this->ping instanceof WebHook\Ping === false) {
                $this->ping = new WebHook\Ping($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Ping());
            }
            return $this->ping->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabg;
        }
        webhooks_aaabg:
        try {
            if ($this->projectCard instanceof WebHook\ProjectCard === false) {
                $this->projectCard = new WebHook\ProjectCard($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectCard());
            }
            return $this->projectCard->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabh;
        }
        webhooks_aaabh:
        try {
            if ($this->project instanceof WebHook\Project === false) {
                $this->project = new WebHook\Project($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Project());
            }
            return $this->project->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabi;
        }
        webhooks_aaabi:
        try {
            if ($this->projectColumn instanceof WebHook\ProjectColumn === false) {
                $this->projectColumn = new WebHook\ProjectColumn($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectColumn());
            }
            return $this->projectColumn->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabj;
        }
        webhooks_aaabj:
        try {
            if ($this->projectsV2 instanceof WebHook\ProjectsV2 === false) {
                $this->projectsV2 = new WebHook\ProjectsV2($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectsV2());
            }
            return $this->projectsV2->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabk;
        }
        webhooks_aaabk:
        try {
            if ($this->projectsV2Item instanceof WebHook\ProjectsV2Item === false) {
                $this->projectsV2Item = new WebHook\ProjectsV2Item($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝ProjectsV2Item());
            }
            return $this->projectsV2Item->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabl;
        }
        webhooks_aaabl:
        try {
            if ($this->public instanceof WebHook\Public_ === false) {
                $this->public = new WebHook\Public_($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Public_());
            }
            return $this->public->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabm;
        }
        webhooks_aaabm:
        try {
            if ($this->pullRequest instanceof WebHook\PullRequest === false) {
                $this->pullRequest = new WebHook\PullRequest($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequest());
            }
            return $this->pullRequest->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabn;
        }
        webhooks_aaabn:
        try {
            if ($this->pullRequestReviewComment instanceof WebHook\PullRequestReviewComment === false) {
                $this->pullRequestReviewComment = new WebHook\PullRequestReviewComment($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequestReviewComment());
            }
            return $this->pullRequestReviewComment->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabo;
        }
        webhooks_aaabo:
        try {
            if ($this->pullRequestReview instanceof WebHook\PullRequestReview === false) {
                $this->pullRequestReview = new WebHook\PullRequestReview($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequestReview());
            }
            return $this->pullRequestReview->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabp;
        }
        webhooks_aaabp:
        try {
            if ($this->pullRequestReviewThread instanceof WebHook\PullRequestReviewThread === false) {
                $this->pullRequestReviewThread = new WebHook\PullRequestReviewThread($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝PullRequestReviewThread());
            }
            return $this->pullRequestReviewThread->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabq;
        }
        webhooks_aaabq:
        try {
            if ($this->push instanceof WebHook\Push === false) {
                $this->push = new WebHook\Push($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Push());
            }
            return $this->push->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabr;
        }
        webhooks_aaabr:
        try {
            if ($this->registryPackage instanceof WebHook\RegistryPackage === false) {
                $this->registryPackage = new WebHook\RegistryPackage($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝RegistryPackage());
            }
            return $this->registryPackage->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabs;
        }
        webhooks_aaabs:
        try {
            if ($this->release instanceof WebHook\Release === false) {
                $this->release = new WebHook\Release($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Release());
            }
            return $this->release->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabt;
        }
        webhooks_aaabt:
        try {
            if ($this->repository instanceof WebHook\Repository === false) {
                $this->repository = new WebHook\Repository($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Repository());
            }
            return $this->repository->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabu;
        }
        webhooks_aaabu:
        try {
            if ($this->repositoryDispatch instanceof WebHook\RepositoryDispatch === false) {
                $this->repositoryDispatch = new WebHook\RepositoryDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝RepositoryDispatch());
            }
            return $this->repositoryDispatch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabv;
        }
        webhooks_aaabv:
        try {
            if ($this->repositoryImport instanceof WebHook\RepositoryImport === false) {
                $this->repositoryImport = new WebHook\RepositoryImport($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝RepositoryImport());
            }
            return $this->repositoryImport->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabw;
        }
        webhooks_aaabw:
        try {
            if ($this->repositoryVulnerabilityAlert instanceof WebHook\RepositoryVulnerabilityAlert === false) {
                $this->repositoryVulnerabilityAlert = new WebHook\RepositoryVulnerabilityAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert());
            }
            return $this->repositoryVulnerabilityAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabx;
        }
        webhooks_aaabx:
        try {
            if ($this->secretScanningAlert instanceof WebHook\SecretScanningAlert === false) {
                $this->secretScanningAlert = new WebHook\SecretScanningAlert($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecretScanningAlert());
            }
            return $this->secretScanningAlert->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaby;
        }
        webhooks_aaaby:
        try {
            if ($this->secretScanningAlertLocation instanceof WebHook\SecretScanningAlertLocation === false) {
                $this->secretScanningAlertLocation = new WebHook\SecretScanningAlertLocation($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecretScanningAlertLocation());
            }
            return $this->secretScanningAlertLocation->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaabz;
        }
        webhooks_aaabz:
        try {
            if ($this->securityAdvisory instanceof WebHook\SecurityAdvisory === false) {
                $this->securityAdvisory = new WebHook\SecurityAdvisory($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecurityAdvisory());
            }
            return $this->securityAdvisory->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaca;
        }
        webhooks_aaaca:
        try {
            if ($this->securityAndAnalysis instanceof WebHook\SecurityAndAnalysis === false) {
                $this->securityAndAnalysis = new WebHook\SecurityAndAnalysis($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝SecurityAndAnalysis());
            }
            return $this->securityAndAnalysis->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacb;
        }
        webhooks_aaacb:
        try {
            if ($this->sponsorship instanceof WebHook\Sponsorship === false) {
                $this->sponsorship = new WebHook\Sponsorship($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Sponsorship());
            }
            return $this->sponsorship->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacc;
        }
        webhooks_aaacc:
        try {
            if ($this->star instanceof WebHook\Star === false) {
                $this->star = new WebHook\Star($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Star());
            }
            return $this->star->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacd;
        }
        webhooks_aaacd:
        try {
            if ($this->status instanceof WebHook\Status === false) {
                $this->status = new WebHook\Status($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Status());
            }
            return $this->status->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaace;
        }
        webhooks_aaace:
        try {
            if ($this->teamAdd instanceof WebHook\TeamAdd === false) {
                $this->teamAdd = new WebHook\TeamAdd($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝TeamAdd());
            }
            return $this->teamAdd->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacf;
        }
        webhooks_aaacf:
        try {
            if ($this->team instanceof WebHook\Team === false) {
                $this->team = new WebHook\Team($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Team());
            }
            return $this->team->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacg;
        }
        webhooks_aaacg:
        try {
            if ($this->watch instanceof WebHook\Watch === false) {
                $this->watch = new WebHook\Watch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝Watch());
            }
            return $this->watch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaach;
        }
        webhooks_aaach:
        try {
            if ($this->workflowDispatch instanceof WebHook\WorkflowDispatch === false) {
                $this->workflowDispatch = new WebHook\WorkflowDispatch($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝WorkflowDispatch());
            }
            return $this->workflowDispatch->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaaci;
        }
        webhooks_aaaci:
        try {
            if ($this->workflowJob instanceof WebHook\WorkflowJob === false) {
                $this->workflowJob = new WebHook\WorkflowJob($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝WorkflowJob());
            }
            return $this->workflowJob->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaacj;
        }
        webhooks_aaacj:
        try {
            if ($this->workflowRun instanceof WebHook\WorkflowRun === false) {
                $this->workflowRun = new WebHook\WorkflowRun($this->requestSchemaValidator, $this->hydrator->getObjectMapperWebHook🪝WorkflowRun());
            }
            return $this->workflowRun->resolve($headers, $data);
        } catch (\Throwable $error) {
            goto webhooks_aaack;
        }
        webhooks_aaack:
        throw $error;
    }
}
