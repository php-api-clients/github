<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE;

final class WebHooks
{
    public const EVENT_CLASS_MAPPING = array('branch-protection-rule-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\BranchProtectionRuleCreated', 'branch-protection-rule-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\BranchProtectionRuleDeleted', 'branch-protection-rule-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\BranchProtectionRuleEdited', 'check-run-completed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckRunCompleted', 'check-run-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckRunCreated', 'check-run-requested-action' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckRunRequestedAction', 'check-run-rerequested' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckRunRerequested', 'check-suite-completed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckSuiteCompleted', 'check-suite-requested' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckSuiteRequested', 'check-suite-rerequested' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CheckSuiteRerequested', 'code-scanning-alert-appeared-in-branch' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CodeScanningAlertAppearedInBranch', 'code-scanning-alert-closed-by-user' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CodeScanningAlertClosedByUser', 'code-scanning-alert-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CodeScanningAlertCreated', 'code-scanning-alert-fixed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CodeScanningAlertFixed', 'code-scanning-alert-reopened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CodeScanningAlertReopened', 'code-scanning-alert-reopened-by-user' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CodeScanningAlertReopenedByUser', 'commit-comment-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\CommitCommentCreated', 'create' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Create', 'delete' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Delete', 'dependabot-alert-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DependabotAlertCreated', 'dependabot-alert-dismissed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DependabotAlertDismissed', 'dependabot-alert-fixed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DependabotAlertFixed', 'dependabot-alert-reintroduced' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DependabotAlertReintroduced', 'dependabot-alert-reopened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DependabotAlertReopened', 'deploy-key-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DeployKeyCreated', 'deploy-key-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DeployKeyDeleted', 'deployment-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DeploymentCreated', 'deployment-status-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DeploymentStatusCreated', 'discussion-answered' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionAnswered', 'discussion-category-changed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionCategoryChanged', 'discussion-comment-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionCommentCreated', 'discussion-comment-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionCommentDeleted', 'discussion-comment-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionCommentEdited', 'discussion-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionCreated', 'discussion-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionDeleted', 'discussion-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionEdited', 'discussion-labeled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionLabeled', 'discussion-locked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionLocked', 'discussion-pinned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionPinned', 'discussion-transferred' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionTransferred', 'discussion-unanswered' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionUnanswered', 'discussion-unlabeled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionUnlabeled', 'discussion-unlocked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionUnlocked', 'discussion-unpinned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\DiscussionUnpinned', 'fork' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Fork', 'github-app-authorization-revoked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\GithubAppAuthorizationRevoked', 'gollum' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Gollum', 'installation-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationCreated', 'installation-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationDeleted', 'installation-new-permissions-accepted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationNewPermissionsAccepted', 'installation-repositories-added' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationRepositoriesAdded', 'installation-repositories-removed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationRepositoriesRemoved', 'installation-suspend' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationSuspend', 'installation-target-renamed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationTargetRenamed', 'installation-unsuspend' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\InstallationUnsuspend', 'issue-comment-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssueCommentCreated', 'issue-comment-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssueCommentDeleted', 'issue-comment-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssueCommentEdited', 'issues-assigned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesAssigned', 'issues-closed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesClosed', 'issues-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesDeleted', 'issues-demilestoned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesDemilestoned', 'issues-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesEdited', 'issues-labeled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesLabeled', 'issues-locked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesLocked', 'issues-milestoned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesMilestoned', 'issues-opened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesOpened', 'issues-pinned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesPinned', 'issues-reopened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesReopened', 'issues-transferred' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesTransferred', 'issues-unassigned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesUnassigned', 'issues-unlabeled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesUnlabeled', 'issues-unlocked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesUnlocked', 'issues-unpinned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\IssuesUnpinned', 'label-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\LabelCreated', 'label-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\LabelDeleted', 'label-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\LabelEdited', 'member-added' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MemberAdded', 'member-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MemberEdited', 'member-removed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MemberRemoved', 'membership-added' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MembershipAdded', 'membership-removed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MembershipRemoved', 'merge-group-checks-requested' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MergeGroupChecksRequested', 'meta-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MetaDeleted', 'milestone-closed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MilestoneClosed', 'milestone-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MilestoneCreated', 'milestone-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MilestoneDeleted', 'milestone-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MilestoneEdited', 'milestone-opened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\MilestoneOpened', 'organization-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\OrganizationDeleted', 'organization-member-added' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\OrganizationMemberAdded', 'organization-member-invited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\OrganizationMemberInvited', 'organization-member-removed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\OrganizationMemberRemoved', 'organization-renamed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\OrganizationRenamed', 'package-published' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PackagePublished', 'package-updated' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PackageUpdated', 'page-build' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PageBuild', 'ping' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Ping', 'project-card-converted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectCardConverted', 'project-card-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectCardCreated', 'project-card-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectCardDeleted', 'project-card-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectCardEdited', 'project-card-moved' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectCardMoved', 'project-closed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectClosed', 'project-column-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectColumnCreated', 'project-column-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectColumnDeleted', 'project-column-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectColumnEdited', 'project-column-moved' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectColumnMoved', 'project-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectCreated', 'project-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectDeleted', 'project-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectEdited', 'project-reopened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ProjectReopened', 'public' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Public_', 'pull-request-assigned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestAssigned', 'pull-request-auto-merge-disabled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestAutoMergeDisabled', 'pull-request-auto-merge-enabled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestAutoMergeEnabled', 'pull-request-closed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestClosed', 'pull-request-converted-to-draft' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestConvertedToDraft', 'pull-request-demilestoned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestDemilestoned', 'pull-request-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestEdited', 'pull-request-labeled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestLabeled', 'pull-request-locked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestLocked', 'pull-request-milestoned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestMilestoned', 'pull-request-opened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestOpened', 'pull-request-ready-for-review' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReadyForReview', 'pull-request-reopened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReopened', 'pull-request-review-comment-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewCommentCreated', 'pull-request-review-comment-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewCommentDeleted', 'pull-request-review-comment-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewCommentEdited', 'pull-request-review-dismissed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewDismissed', 'pull-request-review-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewEdited', 'pull-request-review-request-removed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewRequestRemoved', 'pull-request-review-requested' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewRequested', 'pull-request-review-submitted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewSubmitted', 'pull-request-review-thread-resolved' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewThreadResolved', 'pull-request-review-thread-unresolved' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestReviewThreadUnresolved', 'pull-request-synchronize' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestSynchronize', 'pull-request-unassigned' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestUnassigned', 'pull-request-unlabeled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestUnlabeled', 'pull-request-unlocked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\PullRequestUnlocked', 'push' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Push', 'registry-package-published' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RegistryPackagePublished', 'registry-package-updated' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RegistryPackageUpdated', 'release-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleaseCreated', 'release-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleaseDeleted', 'release-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleaseEdited', 'release-prereleased' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleasePrereleased', 'release-published' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleasePublished', 'release-released' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleaseReleased', 'release-unpublished' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\ReleaseUnpublished', 'repository-anonymous-access-disabled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryAnonymousAccessDisabled', 'repository-anonymous-access-enabled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryAnonymousAccessEnabled', 'repository-archived' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryArchived', 'repository-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryCreated', 'repository-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryDeleted', 'repository-dispatch-sample.collected' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryDispatchSample.collected', 'repository-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryEdited', 'repository-privatized' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryPrivatized', 'repository-publicized' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryPublicized', 'repository-renamed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryRenamed', 'repository-transferred' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryTransferred', 'repository-unarchived' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\RepositoryUnarchived', 'secret-scanning-alert-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SecretScanningAlertCreated', 'secret-scanning-alert-location-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SecretScanningAlertLocationCreated', 'secret-scanning-alert-reopened' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SecretScanningAlertReopened', 'secret-scanning-alert-resolved' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SecretScanningAlertResolved', 'secret-scanning-alert-revoked' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SecretScanningAlertRevoked', 'security-and-analysis' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SecurityAndAnalysis', 'sponsorship-cancelled' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SponsorshipCancelled', 'sponsorship-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SponsorshipCreated', 'sponsorship-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SponsorshipEdited', 'sponsorship-pending-cancellation' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SponsorshipPendingCancellation', 'sponsorship-pending-tier-change' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SponsorshipPendingTierChange', 'sponsorship-tier-changed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\SponsorshipTierChanged', 'star-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\StarCreated', 'star-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\StarDeleted', 'status' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\Status', 'team-add' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\TeamAdd', 'team-added-to-repository' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\TeamAddedToRepository', 'team-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\TeamCreated', 'team-deleted' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\TeamDeleted', 'team-edited' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\TeamEdited', 'team-removed-from-repository' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\TeamRemovedFromRepository', 'user-created' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\UserCreated', 'watch-started' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WatchStarted', 'workflow-dispatch' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowDispatch', 'workflow-job-completed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowJobCompleted', 'workflow-job-in-progress' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowJobInProgress', 'workflow-job-queued' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowJobQueued', 'workflow-run-completed' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowRunCompleted', 'workflow-run-in-progress' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowRunInProgress', 'workflow-run-requested' => 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\WebHook\\WorkflowRunRequested');
    public static function resolve(string $event) : \ApiClients\Client\Github\OpenAPI\GitHubAE\WebHookInterface
    {
        if (!array_key_exists($event, self::EVENT_CLASS_MAPPING)) {
            throw new \InvalidArgumentException();
        }
        $class = self::EVENT_CLASS_MAPPING[$event];
        return new $class();
    }
}