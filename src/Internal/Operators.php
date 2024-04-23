<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Operators
{
    private Internal\Operator\Meta\Root|null $meta👷Root                                                                                                                             = null;
    private Internal\Operator\SecurityAdvisories\ListGlobalAdvisories|null $securityAdvisories👷ListGlobalAdvisories                                                                 = null;
    private Internal\Operator\SecurityAdvisories\GetGlobalAdvisory|null $securityAdvisories👷GetGlobalAdvisory                                                                       = null;
    private Internal\Operator\Apps\GetAuthenticated|null $apps👷GetAuthenticated                                                                                                     = null;
    private Internal\Operator\Apps\CreateFromManifest|null $apps👷CreateFromManifest                                                                                                 = null;
    private Internal\Operator\Apps\GetWebhookConfigForApp|null $apps👷GetWebhookConfigForApp                                                                                         = null;
    private Internal\Operator\Apps\UpdateWebhookConfigForApp|null $apps👷UpdateWebhookConfigForApp                                                                                   = null;
    private Internal\Operator\Apps\ListWebhookDeliveries|null $apps👷ListWebhookDeliveries                                                                                           = null;
    private Internal\Operator\Apps\GetWebhookDelivery|null $apps👷GetWebhookDelivery                                                                                                 = null;
    private Internal\Operator\Apps\RedeliverWebhookDelivery|null $apps👷RedeliverWebhookDelivery                                                                                     = null;
    private Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp|null $apps👷ListInstallationRequestsForAuthenticatedApp                                               = null;
    private Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing|null $apps👷ListInstallationRequestsForAuthenticatedAppListing                                 = null;
    private Internal\Operator\Apps\ListInstallations|null $apps👷ListInstallations                                                                                                   = null;
    private Internal\Operator\Apps\ListInstallationsListing|null $apps👷ListInstallationsListing                                                                                     = null;
    private Internal\Operator\Apps\GetInstallation|null $apps👷GetInstallation                                                                                                       = null;
    private Internal\Operator\Apps\DeleteInstallation|null $apps👷DeleteInstallation                                                                                                 = null;
    private Internal\Operator\Apps\CreateInstallationAccessToken|null $apps👷CreateInstallationAccessToken                                                                           = null;
    private Internal\Operator\Apps\SuspendInstallation|null $apps👷SuspendInstallation                                                                                               = null;
    private Internal\Operator\Apps\UnsuspendInstallation|null $apps👷UnsuspendInstallation                                                                                           = null;
    private Internal\Operator\Apps\DeleteAuthorization|null $apps👷DeleteAuthorization                                                                                               = null;
    private Internal\Operator\Apps\CheckToken|null $apps👷CheckToken                                                                                                                 = null;
    private Internal\Operator\Apps\DeleteToken|null $apps👷DeleteToken                                                                                                               = null;
    private Internal\Operator\Apps\ResetToken|null $apps👷ResetToken                                                                                                                 = null;
    private Internal\Operator\Apps\ScopeToken|null $apps👷ScopeToken                                                                                                                 = null;
    private Internal\Operator\Apps\GetBySlug|null $apps👷GetBySlug                                                                                                                   = null;
    private Internal\Operator\Classroom\GetAnAssignment|null $classroom👷GetAnAssignment                                                                                             = null;
    private Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignment|null $classroom👷ListAcceptedAssigmentsForAnAssignment                                                 = null;
    private Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignmentListing|null $classroom👷ListAcceptedAssigmentsForAnAssignmentListing                                   = null;
    private Internal\Operator\Classroom\GetAssignmentGrades|null $classroom👷GetAssignmentGrades                                                                                     = null;
    private Internal\Operator\Classroom\ListClassrooms|null $classroom👷ListClassrooms                                                                                               = null;
    private Internal\Operator\Classroom\ListClassroomsListing|null $classroom👷ListClassroomsListing                                                                                 = null;
    private Internal\Operator\Classroom\GetAClassroom|null $classroom👷GetAClassroom                                                                                                 = null;
    private Internal\Operator\Classroom\ListAssignmentsForAClassroom|null $classroom👷ListAssignmentsForAClassroom                                                                   = null;
    private Internal\Operator\Classroom\ListAssignmentsForAClassroomListing|null $classroom👷ListAssignmentsForAClassroomListing                                                     = null;
    private Internal\Operator\CodesOfConduct\GetAllCodesOfConduct|null $codesOfConduct👷GetAllCodesOfConduct                                                                         = null;
    private Internal\Operator\CodesOfConduct\GetConductCode|null $codesOfConduct👷GetConductCode                                                                                     = null;
    private Internal\Operator\Emojis\Get|null $emojis👷Get                                                                                                                           = null;
    private Internal\Operator\Copilot\UsageMetricsForEnterprise|null $copilot👷UsageMetricsForEnterprise                                                                             = null;
    private Internal\Operator\Copilot\UsageMetricsForEnterpriseListing|null $copilot👷UsageMetricsForEnterpriseListing                                                               = null;
    private Internal\Operator\Dependabot\ListAlertsForEnterprise|null $dependabot👷ListAlertsForEnterprise                                                                           = null;
    private Internal\Operator\SecretScanning\ListAlertsForEnterprise|null $secretScanning👷ListAlertsForEnterprise                                                                   = null;
    private Internal\Operator\Activity\ListPublicEvents|null $activity👷ListPublicEvents                                                                                             = null;
    private Internal\Operator\Activity\ListPublicEventsListing|null $activity👷ListPublicEventsListing                                                                               = null;
    private Internal\Operator\Activity\GetFeeds|null $activity👷GetFeeds                                                                                                             = null;
    private Internal\Operator\Gists\List_|null $gists👷List_                                                                                                                         = null;
    private Internal\Operator\Gists\ListListing|null $gists👷ListListing                                                                                                             = null;
    private Internal\Operator\Gists\Create|null $gists👷Create                                                                                                                       = null;
    private Internal\Operator\Gists\ListPublic|null $gists👷ListPublic                                                                                                               = null;
    private Internal\Operator\Gists\ListPublicListing|null $gists👷ListPublicListing                                                                                                 = null;
    private Internal\Operator\Gists\ListStarred|null $gists👷ListStarred                                                                                                             = null;
    private Internal\Operator\Gists\ListStarredListing|null $gists👷ListStarredListing                                                                                               = null;
    private Internal\Operator\Gists\Get|null $gists👷Get                                                                                                                             = null;
    private Internal\Operator\Gists\Delete|null $gists👷Delete                                                                                                                       = null;
    private Internal\Operator\Gists\Update|null $gists👷Update                                                                                                                       = null;
    private Internal\Operator\Gists\ListComments|null $gists👷ListComments                                                                                                           = null;
    private Internal\Operator\Gists\ListCommentsListing|null $gists👷ListCommentsListing                                                                                             = null;
    private Internal\Operator\Gists\CreateComment|null $gists👷CreateComment                                                                                                         = null;
    private Internal\Operator\Gists\GetComment|null $gists👷GetComment                                                                                                               = null;
    private Internal\Operator\Gists\DeleteComment|null $gists👷DeleteComment                                                                                                         = null;
    private Internal\Operator\Gists\UpdateComment|null $gists👷UpdateComment                                                                                                         = null;
    private Internal\Operator\Gists\ListCommits|null $gists👷ListCommits                                                                                                             = null;
    private Internal\Operator\Gists\ListCommitsListing|null $gists👷ListCommitsListing                                                                                               = null;
    private Internal\Operator\Gists\ListForks|null $gists👷ListForks                                                                                                                 = null;
    private Internal\Operator\Gists\ListForksListing|null $gists👷ListForksListing                                                                                                   = null;
    private Internal\Operator\Gists\Fork|null $gists👷Fork                                                                                                                           = null;
    private Internal\Operator\Gists\CheckIsStarred|null $gists👷CheckIsStarred                                                                                                       = null;
    private Internal\Operator\Gists\Star|null $gists👷Star                                                                                                                           = null;
    private Internal\Operator\Gists\Unstar|null $gists👷Unstar                                                                                                                       = null;
    private Internal\Operator\Gists\GetRevision|null $gists👷GetRevision                                                                                                             = null;
    private Internal\Operator\Gitignore\GetAllTemplates|null $gitignore👷GetAllTemplates                                                                                             = null;
    private Internal\Operator\Gitignore\GetTemplate|null $gitignore👷GetTemplate                                                                                                     = null;
    private Internal\Operator\Apps\ListReposAccessibleToInstallation|null $apps👷ListReposAccessibleToInstallation                                                                   = null;
    private Internal\Operator\Apps\RevokeInstallationAccessToken|null $apps👷RevokeInstallationAccessToken                                                                           = null;
    private Internal\Operator\Issues\List_|null $issues👷List_                                                                                                                       = null;
    private Internal\Operator\Issues\ListListing|null $issues👷ListListing                                                                                                           = null;
    private Internal\Operator\Licenses\GetAllCommonlyUsed|null $licenses👷GetAllCommonlyUsed                                                                                         = null;
    private Internal\Operator\Licenses\GetAllCommonlyUsedListing|null $licenses👷GetAllCommonlyUsedListing                                                                           = null;
    private Internal\Operator\Licenses\Get|null $licenses👷Get                                                                                                                       = null;
    private Internal\Operator\Markdown\Render|null $markdown👷Render                                                                                                                 = null;
    private Internal\Operator\Markdown\RenderRaw|null $markdown👷RenderRaw                                                                                                           = null;
    private Internal\Operator\Apps\GetSubscriptionPlanForAccount|null $apps👷GetSubscriptionPlanForAccount                                                                           = null;
    private Internal\Operator\Apps\ListPlans|null $apps👷ListPlans                                                                                                                   = null;
    private Internal\Operator\Apps\ListPlansListing|null $apps👷ListPlansListing                                                                                                     = null;
    private Internal\Operator\Apps\ListAccountsForPlan|null $apps👷ListAccountsForPlan                                                                                               = null;
    private Internal\Operator\Apps\ListAccountsForPlanListing|null $apps👷ListAccountsForPlanListing                                                                                 = null;
    private Internal\Operator\Apps\GetSubscriptionPlanForAccountStubbed|null $apps👷GetSubscriptionPlanForAccountStubbed                                                             = null;
    private Internal\Operator\Apps\ListPlansStubbed|null $apps👷ListPlansStubbed                                                                                                     = null;
    private Internal\Operator\Apps\ListPlansStubbedListing|null $apps👷ListPlansStubbedListing                                                                                       = null;
    private Internal\Operator\Apps\ListAccountsForPlanStubbed|null $apps👷ListAccountsForPlanStubbed                                                                                 = null;
    private Internal\Operator\Apps\ListAccountsForPlanStubbedListing|null $apps👷ListAccountsForPlanStubbedListing                                                                   = null;
    private Internal\Operator\Meta\Get|null $meta👷Get                                                                                                                               = null;
    private Internal\Operator\Activity\ListPublicEventsForRepoNetwork|null $activity👷ListPublicEventsForRepoNetwork                                                                 = null;
    private Internal\Operator\Activity\ListPublicEventsForRepoNetworkListing|null $activity👷ListPublicEventsForRepoNetworkListing                                                   = null;
    private Internal\Operator\Activity\ListNotificationsForAuthenticatedUser|null $activity👷ListNotificationsForAuthenticatedUser                                                   = null;
    private Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing|null $activity👷ListNotificationsForAuthenticatedUserListing                                     = null;
    private Internal\Operator\Activity\MarkNotificationsAsRead|null $activity👷MarkNotificationsAsRead                                                                               = null;
    private Internal\Operator\Activity\GetThread|null $activity👷GetThread                                                                                                           = null;
    private Internal\Operator\Activity\MarkThreadAsDone|null $activity👷MarkThreadAsDone                                                                                             = null;
    private Internal\Operator\Activity\MarkThreadAsRead|null $activity👷MarkThreadAsRead                                                                                             = null;
    private Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser|null $activity👷GetThreadSubscriptionForAuthenticatedUser                                           = null;
    private Internal\Operator\Activity\SetThreadSubscription|null $activity👷SetThreadSubscription                                                                                   = null;
    private Internal\Operator\Activity\DeleteThreadSubscription|null $activity👷DeleteThreadSubscription                                                                             = null;
    private Internal\Operator\Meta\GetOctocat|null $meta👷GetOctocat                                                                                                                 = null;
    private Internal\Operator\Orgs\List_|null $orgs👷List_                                                                                                                           = null;
    private Internal\Operator\Orgs\Get|null $orgs👷Get                                                                                                                               = null;
    private Internal\Operator\Orgs\Delete|null $orgs👷Delete                                                                                                                         = null;
    private Internal\Operator\Orgs\Update|null $orgs👷Update                                                                                                                         = null;
    private Internal\Operator\Actions\GetActionsCacheUsageForOrg|null $actions👷GetActionsCacheUsageForOrg                                                                           = null;
    private Internal\Operator\Actions\GetActionsCacheUsageByRepoForOrg|null $actions👷GetActionsCacheUsageByRepoForOrg                                                               = null;
    private Internal\Operator\Oidc\GetOidcCustomSubTemplateForOrg|null $oidc👷GetOidcCustomSubTemplateForOrg                                                                         = null;
    private Internal\Operator\Oidc\UpdateOidcCustomSubTemplateForOrg|null $oidc👷UpdateOidcCustomSubTemplateForOrg                                                                   = null;
    private Internal\Operator\Actions\GetGithubActionsPermissionsOrganization|null $actions👷GetGithubActionsPermissionsOrganization                                                 = null;
    private Internal\Operator\Actions\SetGithubActionsPermissionsOrganization|null $actions👷SetGithubActionsPermissionsOrganization                                                 = null;
    private Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization               = null;
    private Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization                 = null;
    private Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization|null $actions👷EnableSelectedRepositoryGithubActionsOrganization                             = null;
    private Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization|null $actions👷DisableSelectedRepositoryGithubActionsOrganization                           = null;
    private Internal\Operator\Actions\GetAllowedActionsOrganization|null $actions👷GetAllowedActionsOrganization                                                                     = null;
    private Internal\Operator\Actions\SetAllowedActionsOrganization|null $actions👷SetAllowedActionsOrganization                                                                     = null;
    private Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization                   = null;
    private Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization                   = null;
    private Internal\Operator\Actions\ListSelfHostedRunnersForOrg|null $actions👷ListSelfHostedRunnersForOrg                                                                         = null;
    private Internal\Operator\Actions\ListRunnerApplicationsForOrg|null $actions👷ListRunnerApplicationsForOrg                                                                       = null;
    private Internal\Operator\Actions\GenerateRunnerJitconfigForOrg|null $actions👷GenerateRunnerJitconfigForOrg                                                                     = null;
    private Internal\Operator\Actions\CreateRegistrationTokenForOrg|null $actions👷CreateRegistrationTokenForOrg                                                                     = null;
    private Internal\Operator\Actions\CreateRemoveTokenForOrg|null $actions👷CreateRemoveTokenForOrg                                                                                 = null;
    private Internal\Operator\Actions\GetSelfHostedRunnerForOrg|null $actions👷GetSelfHostedRunnerForOrg                                                                             = null;
    private Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg|null $actions👷DeleteSelfHostedRunnerFromOrg                                                                     = null;
    private Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForOrg|null $actions👷ListLabelsForSelfHostedRunnerForOrg                                                         = null;
    private Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg|null $actions👷SetCustomLabelsForSelfHostedRunnerForOrg                                               = null;
    private Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg|null $actions👷AddCustomLabelsToSelfHostedRunnerForOrg                                                 = null;
    private Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg|null $actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg                                 = null;
    private Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg|null $actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg                                         = null;
    private Internal\Operator\Actions\ListOrgSecrets|null $actions👷ListOrgSecrets                                                                                                   = null;
    private Internal\Operator\Actions\GetOrgPublicKey|null $actions👷GetOrgPublicKey                                                                                                 = null;
    private Internal\Operator\Actions\GetOrgSecret|null $actions👷GetOrgSecret                                                                                                       = null;
    private Internal\Operator\Actions\CreateOrUpdateOrgSecret|null $actions👷CreateOrUpdateOrgSecret                                                                                 = null;
    private Internal\Operator\Actions\DeleteOrgSecret|null $actions👷DeleteOrgSecret                                                                                                 = null;
    private Internal\Operator\Actions\ListSelectedReposForOrgSecret|null $actions👷ListSelectedReposForOrgSecret                                                                     = null;
    private Internal\Operator\Actions\SetSelectedReposForOrgSecret|null $actions👷SetSelectedReposForOrgSecret                                                                       = null;
    private Internal\Operator\Actions\AddSelectedRepoToOrgSecret|null $actions👷AddSelectedRepoToOrgSecret                                                                           = null;
    private Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret|null $actions👷RemoveSelectedRepoFromOrgSecret                                                                 = null;
    private Internal\Operator\Actions\ListOrgVariables|null $actions👷ListOrgVariables                                                                                               = null;
    private Internal\Operator\Actions\CreateOrgVariable|null $actions👷CreateOrgVariable                                                                                             = null;
    private Internal\Operator\Actions\GetOrgVariable|null $actions👷GetOrgVariable                                                                                                   = null;
    private Internal\Operator\Actions\DeleteOrgVariable|null $actions👷DeleteOrgVariable                                                                                             = null;
    private Internal\Operator\Actions\UpdateOrgVariable|null $actions👷UpdateOrgVariable                                                                                             = null;
    private Internal\Operator\Actions\ListSelectedReposForOrgVariable|null $actions👷ListSelectedReposForOrgVariable                                                                 = null;
    private Internal\Operator\Actions\SetSelectedReposForOrgVariable|null $actions👷SetSelectedReposForOrgVariable                                                                   = null;
    private Internal\Operator\Actions\AddSelectedRepoToOrgVariable|null $actions👷AddSelectedRepoToOrgVariable                                                                       = null;
    private Internal\Operator\Actions\RemoveSelectedRepoFromOrgVariable|null $actions👷RemoveSelectedRepoFromOrgVariable                                                             = null;
    private Internal\Operator\Orgs\ListBlockedUsers|null $orgs👷ListBlockedUsers                                                                                                     = null;
    private Internal\Operator\Orgs\ListBlockedUsersListing|null $orgs👷ListBlockedUsersListing                                                                                       = null;
    private Internal\Operator\Orgs\CheckBlockedUser|null $orgs👷CheckBlockedUser                                                                                                     = null;
    private Internal\Operator\Orgs\BlockUser|null $orgs👷BlockUser                                                                                                                   = null;
    private Internal\Operator\Orgs\UnblockUser|null $orgs👷UnblockUser                                                                                                               = null;
    private Internal\Operator\CodeScanning\ListAlertsForOrg|null $codeScanning👷ListAlertsForOrg                                                                                     = null;
    private Internal\Operator\CodeScanning\ListAlertsForOrgListing|null $codeScanning👷ListAlertsForOrgListing                                                                       = null;
    private Internal\Operator\Codespaces\ListInOrganization|null $codespaces👷ListInOrganization                                                                                     = null;
    private Internal\Operator\Codespaces\SetCodespacesAccess|null $codespaces👷SetCodespacesAccess                                                                                   = null;
    private Internal\Operator\Codespaces\SetCodespacesAccessUsers|null $codespaces👷SetCodespacesAccessUsers                                                                         = null;
    private Internal\Operator\Codespaces\DeleteCodespacesAccessUsers|null $codespaces👷DeleteCodespacesAccessUsers                                                                   = null;
    private Internal\Operator\Codespaces\ListOrgSecrets|null $codespaces👷ListOrgSecrets                                                                                             = null;
    private Internal\Operator\Codespaces\GetOrgPublicKey|null $codespaces👷GetOrgPublicKey                                                                                           = null;
    private Internal\Operator\Codespaces\GetOrgSecret|null $codespaces👷GetOrgSecret                                                                                                 = null;
    private Internal\Operator\Codespaces\CreateOrUpdateOrgSecret|null $codespaces👷CreateOrUpdateOrgSecret                                                                           = null;
    private Internal\Operator\Codespaces\DeleteOrgSecret|null $codespaces👷DeleteOrgSecret                                                                                           = null;
    private Internal\Operator\Codespaces\ListSelectedReposForOrgSecret|null $codespaces👷ListSelectedReposForOrgSecret                                                               = null;
    private Internal\Operator\Codespaces\SetSelectedReposForOrgSecret|null $codespaces👷SetSelectedReposForOrgSecret                                                                 = null;
    private Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret|null $codespaces👷AddSelectedRepoToOrgSecret                                                                     = null;
    private Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret|null $codespaces👷RemoveSelectedRepoFromOrgSecret                                                           = null;
    private Internal\Operator\Copilot\GetCopilotOrganizationDetails|null $copilot👷GetCopilotOrganizationDetails                                                                     = null;
    private Internal\Operator\Copilot\ListCopilotSeats|null $copilot👷ListCopilotSeats                                                                                               = null;
    private Internal\Operator\Copilot\AddCopilotSeatsForTeams|null $copilot👷AddCopilotSeatsForTeams                                                                                 = null;
    private Internal\Operator\Copilot\CancelCopilotSeatAssignmentForTeams|null $copilot👷CancelCopilotSeatAssignmentForTeams                                                         = null;
    private Internal\Operator\Copilot\AddCopilotSeatsForUsers|null $copilot👷AddCopilotSeatsForUsers                                                                                 = null;
    private Internal\Operator\Copilot\CancelCopilotSeatAssignmentForUsers|null $copilot👷CancelCopilotSeatAssignmentForUsers                                                         = null;
    private Internal\Operator\Copilot\UsageMetricsForOrg|null $copilot👷UsageMetricsForOrg                                                                                           = null;
    private Internal\Operator\Copilot\UsageMetricsForOrgListing|null $copilot👷UsageMetricsForOrgListing                                                                             = null;
    private Internal\Operator\Dependabot\ListAlertsForOrg|null $dependabot👷ListAlertsForOrg                                                                                         = null;
    private Internal\Operator\Dependabot\ListOrgSecrets|null $dependabot👷ListOrgSecrets                                                                                             = null;
    private Internal\Operator\Dependabot\GetOrgPublicKey|null $dependabot👷GetOrgPublicKey                                                                                           = null;
    private Internal\Operator\Dependabot\GetOrgSecret|null $dependabot👷GetOrgSecret                                                                                                 = null;
    private Internal\Operator\Dependabot\CreateOrUpdateOrgSecret|null $dependabot👷CreateOrUpdateOrgSecret                                                                           = null;
    private Internal\Operator\Dependabot\DeleteOrgSecret|null $dependabot👷DeleteOrgSecret                                                                                           = null;
    private Internal\Operator\Dependabot\ListSelectedReposForOrgSecret|null $dependabot👷ListSelectedReposForOrgSecret                                                               = null;
    private Internal\Operator\Dependabot\SetSelectedReposForOrgSecret|null $dependabot👷SetSelectedReposForOrgSecret                                                                 = null;
    private Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret|null $dependabot👷AddSelectedRepoToOrgSecret                                                                     = null;
    private Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret|null $dependabot👷RemoveSelectedRepoFromOrgSecret                                                           = null;
    private Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization|null $packages👷ListDockerMigrationConflictingPackagesForOrganization                   = null;
    private Internal\Operator\Activity\ListPublicOrgEvents|null $activity👷ListPublicOrgEvents                                                                                       = null;
    private Internal\Operator\Activity\ListPublicOrgEventsListing|null $activity👷ListPublicOrgEventsListing                                                                         = null;
    private Internal\Operator\Orgs\ListFailedInvitations|null $orgs👷ListFailedInvitations                                                                                           = null;
    private Internal\Operator\Orgs\ListFailedInvitationsListing|null $orgs👷ListFailedInvitationsListing                                                                             = null;
    private Internal\Operator\Orgs\ListWebhooks|null $orgs👷ListWebhooks                                                                                                             = null;
    private Internal\Operator\Orgs\ListWebhooksListing|null $orgs👷ListWebhooksListing                                                                                               = null;
    private Internal\Operator\Orgs\CreateWebhook|null $orgs👷CreateWebhook                                                                                                           = null;
    private Internal\Operator\Orgs\GetWebhook|null $orgs👷GetWebhook                                                                                                                 = null;
    private Internal\Operator\Orgs\DeleteWebhook|null $orgs👷DeleteWebhook                                                                                                           = null;
    private Internal\Operator\Orgs\UpdateWebhook|null $orgs👷UpdateWebhook                                                                                                           = null;
    private Internal\Operator\Orgs\GetWebhookConfigForOrg|null $orgs👷GetWebhookConfigForOrg                                                                                         = null;
    private Internal\Operator\Orgs\UpdateWebhookConfigForOrg|null $orgs👷UpdateWebhookConfigForOrg                                                                                   = null;
    private Internal\Operator\Orgs\ListWebhookDeliveries|null $orgs👷ListWebhookDeliveries                                                                                           = null;
    private Internal\Operator\Orgs\GetWebhookDelivery|null $orgs👷GetWebhookDelivery                                                                                                 = null;
    private Internal\Operator\Orgs\RedeliverWebhookDelivery|null $orgs👷RedeliverWebhookDelivery                                                                                     = null;
    private Internal\Operator\Orgs\PingWebhook|null $orgs👷PingWebhook                                                                                                               = null;
    private Internal\Operator\Apps\GetOrgInstallation|null $apps👷GetOrgInstallation                                                                                                 = null;
    private Internal\Operator\Orgs\ListAppInstallations|null $orgs👷ListAppInstallations                                                                                             = null;
    private Internal\Operator\Interactions\GetRestrictionsForOrg|null $interactions👷GetRestrictionsForOrg                                                                           = null;
    private Internal\Operator\Interactions\SetRestrictionsForOrg|null $interactions👷SetRestrictionsForOrg                                                                           = null;
    private Internal\Operator\Interactions\RemoveRestrictionsForOrg|null $interactions👷RemoveRestrictionsForOrg                                                                     = null;
    private Internal\Operator\Orgs\ListPendingInvitations|null $orgs👷ListPendingInvitations                                                                                         = null;
    private Internal\Operator\Orgs\ListPendingInvitationsListing|null $orgs👷ListPendingInvitationsListing                                                                           = null;
    private Internal\Operator\Orgs\CreateInvitation|null $orgs👷CreateInvitation                                                                                                     = null;
    private Internal\Operator\Orgs\CancelInvitation|null $orgs👷CancelInvitation                                                                                                     = null;
    private Internal\Operator\Orgs\ListInvitationTeams|null $orgs👷ListInvitationTeams                                                                                               = null;
    private Internal\Operator\Orgs\ListInvitationTeamsListing|null $orgs👷ListInvitationTeamsListing                                                                                 = null;
    private Internal\Operator\Issues\ListForOrg|null $issues👷ListForOrg                                                                                                             = null;
    private Internal\Operator\Issues\ListForOrgListing|null $issues👷ListForOrgListing                                                                                               = null;
    private Internal\Operator\Orgs\ListMembers|null $orgs👷ListMembers                                                                                                               = null;
    private Internal\Operator\Orgs\ListMembersListing|null $orgs👷ListMembersListing                                                                                                 = null;
    private Internal\Operator\Orgs\CheckMembershipForUser|null $orgs👷CheckMembershipForUser                                                                                         = null;
    private Internal\Operator\Orgs\RemoveMember|null $orgs👷RemoveMember                                                                                                             = null;
    private Internal\Operator\Codespaces\GetCodespacesForUserInOrg|null $codespaces👷GetCodespacesForUserInOrg                                                                       = null;
    private Internal\Operator\Codespaces\DeleteFromOrganization|null $codespaces👷DeleteFromOrganization                                                                             = null;
    private Internal\Operator\Codespaces\StopInOrganization|null $codespaces👷StopInOrganization                                                                                     = null;
    private Internal\Operator\Copilot\GetCopilotSeatDetailsForUser|null $copilot👷GetCopilotSeatDetailsForUser                                                                       = null;
    private Internal\Operator\Orgs\GetMembershipForUser|null $orgs👷GetMembershipForUser                                                                                             = null;
    private Internal\Operator\Orgs\SetMembershipForUser|null $orgs👷SetMembershipForUser                                                                                             = null;
    private Internal\Operator\Orgs\RemoveMembershipForUser|null $orgs👷RemoveMembershipForUser                                                                                       = null;
    private Internal\Operator\Migrations\ListForOrg|null $migrations👷ListForOrg                                                                                                     = null;
    private Internal\Operator\Migrations\ListForOrgListing|null $migrations👷ListForOrgListing                                                                                       = null;
    private Internal\Operator\Migrations\StartForOrg|null $migrations👷StartForOrg                                                                                                   = null;
    private Internal\Operator\Migrations\GetStatusForOrg|null $migrations👷GetStatusForOrg                                                                                           = null;
    private Internal\Operator\Migrations\DownloadArchiveForOrg|null $migrations👷DownloadArchiveForOrg                                                                               = null;
    private Internal\Operator\Migrations\DownloadArchiveForOrgStreaming|null $migrations👷DownloadArchiveForOrgStreaming                                                             = null;
    private Internal\Operator\Migrations\DeleteArchiveForOrg|null $migrations👷DeleteArchiveForOrg                                                                                   = null;
    private Internal\Operator\Migrations\UnlockRepoForOrg|null $migrations👷UnlockRepoForOrg                                                                                         = null;
    private Internal\Operator\Migrations\ListReposForOrg|null $migrations👷ListReposForOrg                                                                                           = null;
    private Internal\Operator\Migrations\ListReposForOrgListing|null $migrations👷ListReposForOrgListing                                                                             = null;
    private Internal\Operator\Orgs\ListOrganizationFineGrainedPermissions|null $orgs👷ListOrganizationFineGrainedPermissions                                                         = null;
    private Internal\Operator\Orgs\ListOrgRoles|null $orgs👷ListOrgRoles                                                                                                             = null;
    private Internal\Operator\Orgs\CreateCustomOrganizationRole|null $orgs👷CreateCustomOrganizationRole                                                                             = null;
    private Internal\Operator\Orgs\RevokeAllOrgRolesTeam|null $orgs👷RevokeAllOrgRolesTeam                                                                                           = null;
    private Internal\Operator\Orgs\AssignTeamToOrgRole|null $orgs👷AssignTeamToOrgRole                                                                                               = null;
    private Internal\Operator\Orgs\RevokeOrgRoleTeam|null $orgs👷RevokeOrgRoleTeam                                                                                                   = null;
    private Internal\Operator\Orgs\RevokeAllOrgRolesUser|null $orgs👷RevokeAllOrgRolesUser                                                                                           = null;
    private Internal\Operator\Orgs\AssignUserToOrgRole|null $orgs👷AssignUserToOrgRole                                                                                               = null;
    private Internal\Operator\Orgs\RevokeOrgRoleUser|null $orgs👷RevokeOrgRoleUser                                                                                                   = null;
    private Internal\Operator\Orgs\GetOrgRole|null $orgs👷GetOrgRole                                                                                                                 = null;
    private Internal\Operator\Orgs\DeleteCustomOrganizationRole|null $orgs👷DeleteCustomOrganizationRole                                                                             = null;
    private Internal\Operator\Orgs\PatchCustomOrganizationRole|null $orgs👷PatchCustomOrganizationRole                                                                               = null;
    private Internal\Operator\Orgs\ListOrgRoleTeams|null $orgs👷ListOrgRoleTeams                                                                                                     = null;
    private Internal\Operator\Orgs\ListOrgRoleTeamsListing|null $orgs👷ListOrgRoleTeamsListing                                                                                       = null;
    private Internal\Operator\Orgs\ListOrgRoleUsers|null $orgs👷ListOrgRoleUsers                                                                                                     = null;
    private Internal\Operator\Orgs\ListOrgRoleUsersListing|null $orgs👷ListOrgRoleUsersListing                                                                                       = null;
    private Internal\Operator\Orgs\ListOutsideCollaborators|null $orgs👷ListOutsideCollaborators                                                                                     = null;
    private Internal\Operator\Orgs\ListOutsideCollaboratorsListing|null $orgs👷ListOutsideCollaboratorsListing                                                                       = null;
    private Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator|null $orgs👷ConvertMemberToOutsideCollaborator                                                                 = null;
    private Internal\Operator\Orgs\RemoveOutsideCollaborator|null $orgs👷RemoveOutsideCollaborator                                                                                   = null;
    private Internal\Operator\Packages\ListPackagesForOrganization|null $packages👷ListPackagesForOrganization                                                                       = null;
    private Internal\Operator\Packages\ListPackagesForOrganizationListing|null $packages👷ListPackagesForOrganizationListing                                                         = null;
    private Internal\Operator\Packages\GetPackageForOrganization|null $packages👷GetPackageForOrganization                                                                           = null;
    private Internal\Operator\Packages\DeletePackageForOrg|null $packages👷DeletePackageForOrg                                                                                       = null;
    private Internal\Operator\Packages\RestorePackageForOrg|null $packages👷RestorePackageForOrg                                                                                     = null;
    private Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg|null $packages👷GetAllPackageVersionsForPackageOwnedByOrg                                           = null;
    private Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing|null $packages👷GetAllPackageVersionsForPackageOwnedByOrgListing                             = null;
    private Internal\Operator\Packages\GetPackageVersionForOrganization|null $packages👷GetPackageVersionForOrganization                                                             = null;
    private Internal\Operator\Packages\DeletePackageVersionForOrg|null $packages👷DeletePackageVersionForOrg                                                                         = null;
    private Internal\Operator\Packages\RestorePackageVersionForOrg|null $packages👷RestorePackageVersionForOrg                                                                       = null;
    private Internal\Operator\Orgs\ListPatGrantRequests|null $orgs👷ListPatGrantRequests                                                                                             = null;
    private Internal\Operator\Orgs\ListPatGrantRequestsListing|null $orgs👷ListPatGrantRequestsListing                                                                               = null;
    private Internal\Operator\Orgs\ReviewPatGrantRequestsInBulk|null $orgs👷ReviewPatGrantRequestsInBulk                                                                             = null;
    private Internal\Operator\Orgs\ReviewPatGrantRequest|null $orgs👷ReviewPatGrantRequest                                                                                           = null;
    private Internal\Operator\Orgs\ListPatGrantRequestRepositories|null $orgs👷ListPatGrantRequestRepositories                                                                       = null;
    private Internal\Operator\Orgs\ListPatGrantRequestRepositoriesListing|null $orgs👷ListPatGrantRequestRepositoriesListing                                                         = null;
    private Internal\Operator\Orgs\ListPatGrants|null $orgs👷ListPatGrants                                                                                                           = null;
    private Internal\Operator\Orgs\ListPatGrantsListing|null $orgs👷ListPatGrantsListing                                                                                             = null;
    private Internal\Operator\Orgs\UpdatePatAccesses|null $orgs👷UpdatePatAccesses                                                                                                   = null;
    private Internal\Operator\Orgs\UpdatePatAccess|null $orgs👷UpdatePatAccess                                                                                                       = null;
    private Internal\Operator\Orgs\ListPatGrantRepositories|null $orgs👷ListPatGrantRepositories                                                                                     = null;
    private Internal\Operator\Orgs\ListPatGrantRepositoriesListing|null $orgs👷ListPatGrantRepositoriesListing                                                                       = null;
    private Internal\Operator\Projects\ListForOrg|null $projects👷ListForOrg                                                                                                         = null;
    private Internal\Operator\Projects\ListForOrgListing|null $projects👷ListForOrgListing                                                                                           = null;
    private Internal\Operator\Projects\CreateForOrg|null $projects👷CreateForOrg                                                                                                     = null;
    private Internal\Operator\Orgs\GetAllCustomProperties|null $orgs👷GetAllCustomProperties                                                                                         = null;
    private Internal\Operator\Orgs\CreateOrUpdateCustomProperties|null $orgs👷CreateOrUpdateCustomProperties                                                                         = null;
    private Internal\Operator\Orgs\GetCustomProperty|null $orgs👷GetCustomProperty                                                                                                   = null;
    private Internal\Operator\Orgs\CreateOrUpdateCustomProperty|null $orgs👷CreateOrUpdateCustomProperty                                                                             = null;
    private Internal\Operator\Orgs\RemoveCustomProperty|null $orgs👷RemoveCustomProperty                                                                                             = null;
    private Internal\Operator\Orgs\ListCustomPropertiesValuesForRepos|null $orgs👷ListCustomPropertiesValuesForRepos                                                                 = null;
    private Internal\Operator\Orgs\ListCustomPropertiesValuesForReposListing|null $orgs👷ListCustomPropertiesValuesForReposListing                                                   = null;
    private Internal\Operator\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos|null $orgs👷CreateOrUpdateCustomPropertiesValuesForRepos                                             = null;
    private Internal\Operator\Orgs\ListPublicMembers|null $orgs👷ListPublicMembers                                                                                                   = null;
    private Internal\Operator\Orgs\ListPublicMembersListing|null $orgs👷ListPublicMembersListing                                                                                     = null;
    private Internal\Operator\Orgs\CheckPublicMembershipForUser|null $orgs👷CheckPublicMembershipForUser                                                                             = null;
    private Internal\Operator\Orgs\SetPublicMembershipForAuthenticatedUser|null $orgs👷SetPublicMembershipForAuthenticatedUser                                                       = null;
    private Internal\Operator\Orgs\RemovePublicMembershipForAuthenticatedUser|null $orgs👷RemovePublicMembershipForAuthenticatedUser                                                 = null;
    private Internal\Operator\Repos\ListForOrg|null $repos👷ListForOrg                                                                                                               = null;
    private Internal\Operator\Repos\ListForOrgListing|null $repos👷ListForOrgListing                                                                                                 = null;
    private Internal\Operator\Repos\CreateInOrg|null $repos👷CreateInOrg                                                                                                             = null;
    private Internal\Operator\Repos\GetOrgRulesets|null $repos👷GetOrgRulesets                                                                                                       = null;
    private Internal\Operator\Repos\GetOrgRulesetsListing|null $repos👷GetOrgRulesetsListing                                                                                         = null;
    private Internal\Operator\Repos\CreateOrgRuleset|null $repos👷CreateOrgRuleset                                                                                                   = null;
    private Internal\Operator\Repos\GetOrgRuleSuites|null $repos👷GetOrgRuleSuites                                                                                                   = null;
    private Internal\Operator\Repos\GetOrgRuleSuitesListing|null $repos👷GetOrgRuleSuitesListing                                                                                     = null;
    private Internal\Operator\Repos\GetOrgRuleSuite|null $repos👷GetOrgRuleSuite                                                                                                     = null;
    private Internal\Operator\Repos\GetOrgRuleset|null $repos👷GetOrgRuleset                                                                                                         = null;
    private Internal\Operator\Repos\UpdateOrgRuleset|null $repos👷UpdateOrgRuleset                                                                                                   = null;
    private Internal\Operator\Repos\DeleteOrgRuleset|null $repos👷DeleteOrgRuleset                                                                                                   = null;
    private Internal\Operator\SecretScanning\ListAlertsForOrg|null $secretScanning👷ListAlertsForOrg                                                                                 = null;
    private Internal\Operator\SecretScanning\ListAlertsForOrgListing|null $secretScanning👷ListAlertsForOrgListing                                                                   = null;
    private Internal\Operator\SecurityAdvisories\ListOrgRepositoryAdvisories|null $securityAdvisories👷ListOrgRepositoryAdvisories                                                   = null;
    private Internal\Operator\Orgs\ListSecurityManagerTeams|null $orgs👷ListSecurityManagerTeams                                                                                     = null;
    private Internal\Operator\Orgs\AddSecurityManagerTeam|null $orgs👷AddSecurityManagerTeam                                                                                         = null;
    private Internal\Operator\Orgs\RemoveSecurityManagerTeam|null $orgs👷RemoveSecurityManagerTeam                                                                                   = null;
    private Internal\Operator\Billing\GetGithubActionsBillingOrg|null $billing👷GetGithubActionsBillingOrg                                                                           = null;
    private Internal\Operator\Billing\GetGithubPackagesBillingOrg|null $billing👷GetGithubPackagesBillingOrg                                                                         = null;
    private Internal\Operator\Billing\GetSharedStorageBillingOrg|null $billing👷GetSharedStorageBillingOrg                                                                           = null;
    private Internal\Operator\Copilot\UsageMetricsForTeam|null $copilot👷UsageMetricsForTeam                                                                                         = null;
    private Internal\Operator\Copilot\UsageMetricsForTeamListing|null $copilot👷UsageMetricsForTeamListing                                                                           = null;
    private Internal\Operator\Teams\List_|null $teams👷List_                                                                                                                         = null;
    private Internal\Operator\Teams\ListListing|null $teams👷ListListing                                                                                                             = null;
    private Internal\Operator\Teams\Create|null $teams👷Create                                                                                                                       = null;
    private Internal\Operator\Teams\GetByName|null $teams👷GetByName                                                                                                                 = null;
    private Internal\Operator\Teams\DeleteInOrg|null $teams👷DeleteInOrg                                                                                                             = null;
    private Internal\Operator\Teams\UpdateInOrg|null $teams👷UpdateInOrg                                                                                                             = null;
    private Internal\Operator\Teams\ListDiscussionsInOrg|null $teams👷ListDiscussionsInOrg                                                                                           = null;
    private Internal\Operator\Teams\ListDiscussionsInOrgListing|null $teams👷ListDiscussionsInOrgListing                                                                             = null;
    private Internal\Operator\Teams\CreateDiscussionInOrg|null $teams👷CreateDiscussionInOrg                                                                                         = null;
    private Internal\Operator\Teams\GetDiscussionInOrg|null $teams👷GetDiscussionInOrg                                                                                               = null;
    private Internal\Operator\Teams\DeleteDiscussionInOrg|null $teams👷DeleteDiscussionInOrg                                                                                         = null;
    private Internal\Operator\Teams\UpdateDiscussionInOrg|null $teams👷UpdateDiscussionInOrg                                                                                         = null;
    private Internal\Operator\Teams\ListDiscussionCommentsInOrg|null $teams👷ListDiscussionCommentsInOrg                                                                             = null;
    private Internal\Operator\Teams\ListDiscussionCommentsInOrgListing|null $teams👷ListDiscussionCommentsInOrgListing                                                               = null;
    private Internal\Operator\Teams\CreateDiscussionCommentInOrg|null $teams👷CreateDiscussionCommentInOrg                                                                           = null;
    private Internal\Operator\Teams\GetDiscussionCommentInOrg|null $teams👷GetDiscussionCommentInOrg                                                                                 = null;
    private Internal\Operator\Teams\DeleteDiscussionCommentInOrg|null $teams👷DeleteDiscussionCommentInOrg                                                                           = null;
    private Internal\Operator\Teams\UpdateDiscussionCommentInOrg|null $teams👷UpdateDiscussionCommentInOrg                                                                           = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg|null $reactions👷ListForTeamDiscussionCommentInOrg                                                         = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing|null $reactions👷ListForTeamDiscussionCommentInOrgListing                                           = null;
    private Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg|null $reactions👷CreateForTeamDiscussionCommentInOrg                                                     = null;
    private Internal\Operator\Reactions\DeleteForTeamDiscussionComment|null $reactions👷DeleteForTeamDiscussionComment                                                               = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionInOrg|null $reactions👷ListForTeamDiscussionInOrg                                                                       = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing|null $reactions👷ListForTeamDiscussionInOrgListing                                                         = null;
    private Internal\Operator\Reactions\CreateForTeamDiscussionInOrg|null $reactions👷CreateForTeamDiscussionInOrg                                                                   = null;
    private Internal\Operator\Reactions\DeleteForTeamDiscussion|null $reactions👷DeleteForTeamDiscussion                                                                             = null;
    private Internal\Operator\Teams\ListPendingInvitationsInOrg|null $teams👷ListPendingInvitationsInOrg                                                                             = null;
    private Internal\Operator\Teams\ListPendingInvitationsInOrgListing|null $teams👷ListPendingInvitationsInOrgListing                                                               = null;
    private Internal\Operator\Teams\ListMembersInOrg|null $teams👷ListMembersInOrg                                                                                                   = null;
    private Internal\Operator\Teams\ListMembersInOrgListing|null $teams👷ListMembersInOrgListing                                                                                     = null;
    private Internal\Operator\Teams\GetMembershipForUserInOrg|null $teams👷GetMembershipForUserInOrg                                                                                 = null;
    private Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg|null $teams👷AddOrUpdateMembershipForUserInOrg                                                                 = null;
    private Internal\Operator\Teams\RemoveMembershipForUserInOrg|null $teams👷RemoveMembershipForUserInOrg                                                                           = null;
    private Internal\Operator\Teams\ListProjectsInOrg|null $teams👷ListProjectsInOrg                                                                                                 = null;
    private Internal\Operator\Teams\ListProjectsInOrgListing|null $teams👷ListProjectsInOrgListing                                                                                   = null;
    private Internal\Operator\Teams\CheckPermissionsForProjectInOrg|null $teams👷CheckPermissionsForProjectInOrg                                                                     = null;
    private Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg|null $teams👷AddOrUpdateProjectPermissionsInOrg                                                               = null;
    private Internal\Operator\Teams\RemoveProjectInOrg|null $teams👷RemoveProjectInOrg                                                                                               = null;
    private Internal\Operator\Teams\ListReposInOrg|null $teams👷ListReposInOrg                                                                                                       = null;
    private Internal\Operator\Teams\ListReposInOrgListing|null $teams👷ListReposInOrgListing                                                                                         = null;
    private Internal\Operator\Teams\CheckPermissionsForRepoInOrg|null $teams👷CheckPermissionsForRepoInOrg                                                                           = null;
    private Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg|null $teams👷AddOrUpdateRepoPermissionsInOrg                                                                     = null;
    private Internal\Operator\Teams\RemoveRepoInOrg|null $teams👷RemoveRepoInOrg                                                                                                     = null;
    private Internal\Operator\Teams\ListChildInOrg|null $teams👷ListChildInOrg                                                                                                       = null;
    private Internal\Operator\Teams\ListChildInOrgListing|null $teams👷ListChildInOrgListing                                                                                         = null;
    private Internal\Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos|null $orgs👷EnableOrDisableSecurityProductOnAllOrgRepos                                               = null;
    private Internal\Operator\Projects\GetCard|null $projects👷GetCard                                                                                                               = null;
    private Internal\Operator\Projects\DeleteCard|null $projects👷DeleteCard                                                                                                         = null;
    private Internal\Operator\Projects\UpdateCard|null $projects👷UpdateCard                                                                                                         = null;
    private Internal\Operator\Projects\MoveCard|null $projects👷MoveCard                                                                                                             = null;
    private Internal\Operator\Projects\GetColumn|null $projects👷GetColumn                                                                                                           = null;
    private Internal\Operator\Projects\DeleteColumn|null $projects👷DeleteColumn                                                                                                     = null;
    private Internal\Operator\Projects\UpdateColumn|null $projects👷UpdateColumn                                                                                                     = null;
    private Internal\Operator\Projects\ListCards|null $projects👷ListCards                                                                                                           = null;
    private Internal\Operator\Projects\ListCardsListing|null $projects👷ListCardsListing                                                                                             = null;
    private Internal\Operator\Projects\CreateCard|null $projects👷CreateCard                                                                                                         = null;
    private Internal\Operator\Projects\MoveColumn|null $projects👷MoveColumn                                                                                                         = null;
    private Internal\Operator\Projects\Get|null $projects👷Get                                                                                                                       = null;
    private Internal\Operator\Projects\Delete|null $projects👷Delete                                                                                                                 = null;
    private Internal\Operator\Projects\Update|null $projects👷Update                                                                                                                 = null;
    private Internal\Operator\Projects\ListCollaborators|null $projects👷ListCollaborators                                                                                           = null;
    private Internal\Operator\Projects\ListCollaboratorsListing|null $projects👷ListCollaboratorsListing                                                                             = null;
    private Internal\Operator\Projects\AddCollaborator|null $projects👷AddCollaborator                                                                                               = null;
    private Internal\Operator\Projects\RemoveCollaborator|null $projects👷RemoveCollaborator                                                                                         = null;
    private Internal\Operator\Projects\GetPermissionForUser|null $projects👷GetPermissionForUser                                                                                     = null;
    private Internal\Operator\Projects\ListColumns|null $projects👷ListColumns                                                                                                       = null;
    private Internal\Operator\Projects\ListColumnsListing|null $projects👷ListColumnsListing                                                                                         = null;
    private Internal\Operator\Projects\CreateColumn|null $projects👷CreateColumn                                                                                                     = null;
    private Internal\Operator\RateLimit\Get|null $rateLimit👷Get                                                                                                                     = null;
    private Internal\Operator\Repos\Get|null $repos👷Get                                                                                                                             = null;
    private Internal\Operator\Repos\Delete|null $repos👷Delete                                                                                                                       = null;
    private Internal\Operator\Repos\Update|null $repos👷Update                                                                                                                       = null;
    private Internal\Operator\Actions\ListArtifactsForRepo|null $actions👷ListArtifactsForRepo                                                                                       = null;
    private Internal\Operator\Actions\GetArtifact|null $actions👷GetArtifact                                                                                                         = null;
    private Internal\Operator\Actions\DeleteArtifact|null $actions👷DeleteArtifact                                                                                                   = null;
    private Internal\Operator\Actions\DownloadArtifact|null $actions👷DownloadArtifact                                                                                               = null;
    private Internal\Operator\Actions\DownloadArtifactStreaming|null $actions👷DownloadArtifactStreaming                                                                             = null;
    private Internal\Operator\Actions\GetActionsCacheUsage|null $actions👷GetActionsCacheUsage                                                                                       = null;
    private Internal\Operator\Actions\GetActionsCacheList|null $actions👷GetActionsCacheList                                                                                         = null;
    private Internal\Operator\Actions\DeleteActionsCacheByKey|null $actions👷DeleteActionsCacheByKey                                                                                 = null;
    private Internal\Operator\Actions\DeleteActionsCacheById|null $actions👷DeleteActionsCacheById                                                                                   = null;
    private Internal\Operator\Actions\GetJobForWorkflowRun|null $actions👷GetJobForWorkflowRun                                                                                       = null;
    private Internal\Operator\Actions\DownloadJobLogsForWorkflowRun|null $actions👷DownloadJobLogsForWorkflowRun                                                                     = null;
    private Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming|null $actions👷DownloadJobLogsForWorkflowRunStreaming                                                   = null;
    private Internal\Operator\Actions\ReRunJobForWorkflowRun|null $actions👷ReRunJobForWorkflowRun                                                                                   = null;
    private Internal\Operator\Actions\GetCustomOidcSubClaimForRepo|null $actions👷GetCustomOidcSubClaimForRepo                                                                       = null;
    private Internal\Operator\Actions\SetCustomOidcSubClaimForRepo|null $actions👷SetCustomOidcSubClaimForRepo                                                                       = null;
    private Internal\Operator\Actions\ListRepoOrganizationSecrets|null $actions👷ListRepoOrganizationSecrets                                                                         = null;
    private Internal\Operator\Actions\ListRepoOrganizationVariables|null $actions👷ListRepoOrganizationVariables                                                                     = null;
    private Internal\Operator\Actions\GetGithubActionsPermissionsRepository|null $actions👷GetGithubActionsPermissionsRepository                                                     = null;
    private Internal\Operator\Actions\SetGithubActionsPermissionsRepository|null $actions👷SetGithubActionsPermissionsRepository                                                     = null;
    private Internal\Operator\Actions\GetWorkflowAccessToRepository|null $actions👷GetWorkflowAccessToRepository                                                                     = null;
    private Internal\Operator\Actions\SetWorkflowAccessToRepository|null $actions👷SetWorkflowAccessToRepository                                                                     = null;
    private Internal\Operator\Actions\GetAllowedActionsRepository|null $actions👷GetAllowedActionsRepository                                                                         = null;
    private Internal\Operator\Actions\SetAllowedActionsRepository|null $actions👷SetAllowedActionsRepository                                                                         = null;
    private Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository|null $actions👷GetGithubActionsDefaultWorkflowPermissionsRepository                       = null;
    private Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository|null $actions👷SetGithubActionsDefaultWorkflowPermissionsRepository                       = null;
    private Internal\Operator\Actions\ListSelfHostedRunnersForRepo|null $actions👷ListSelfHostedRunnersForRepo                                                                       = null;
    private Internal\Operator\Actions\ListRunnerApplicationsForRepo|null $actions👷ListRunnerApplicationsForRepo                                                                     = null;
    private Internal\Operator\Actions\GenerateRunnerJitconfigForRepo|null $actions👷GenerateRunnerJitconfigForRepo                                                                   = null;
    private Internal\Operator\Actions\CreateRegistrationTokenForRepo|null $actions👷CreateRegistrationTokenForRepo                                                                   = null;
    private Internal\Operator\Actions\CreateRemoveTokenForRepo|null $actions👷CreateRemoveTokenForRepo                                                                               = null;
    private Internal\Operator\Actions\GetSelfHostedRunnerForRepo|null $actions👷GetSelfHostedRunnerForRepo                                                                           = null;
    private Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo|null $actions👷DeleteSelfHostedRunnerFromRepo                                                                   = null;
    private Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForRepo|null $actions👷ListLabelsForSelfHostedRunnerForRepo                                                       = null;
    private Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo|null $actions👷SetCustomLabelsForSelfHostedRunnerForRepo                                             = null;
    private Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo|null $actions👷AddCustomLabelsToSelfHostedRunnerForRepo                                               = null;
    private Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo|null $actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo                               = null;
    private Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo|null $actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo                                       = null;
    private Internal\Operator\Actions\ListWorkflowRunsForRepo|null $actions👷ListWorkflowRunsForRepo                                                                                 = null;
    private Internal\Operator\Actions\GetWorkflowRun|null $actions👷GetWorkflowRun                                                                                                   = null;
    private Internal\Operator\Actions\DeleteWorkflowRun|null $actions👷DeleteWorkflowRun                                                                                             = null;
    private Internal\Operator\Actions\GetReviewsForRun|null $actions👷GetReviewsForRun                                                                                               = null;
    private Internal\Operator\Actions\ApproveWorkflowRun|null $actions👷ApproveWorkflowRun                                                                                           = null;
    private Internal\Operator\Actions\ListWorkflowRunArtifacts|null $actions👷ListWorkflowRunArtifacts                                                                               = null;
    private Internal\Operator\Actions\GetWorkflowRunAttempt|null $actions👷GetWorkflowRunAttempt                                                                                     = null;
    private Internal\Operator\Actions\ListJobsForWorkflowRunAttempt|null $actions👷ListJobsForWorkflowRunAttempt                                                                     = null;
    private Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs|null $actions👷DownloadWorkflowRunAttemptLogs                                                                   = null;
    private Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming|null $actions👷DownloadWorkflowRunAttemptLogsStreaming                                                 = null;
    private Internal\Operator\Actions\CancelWorkflowRun|null $actions👷CancelWorkflowRun                                                                                             = null;
    private Internal\Operator\Actions\ReviewCustomGatesForRun|null $actions👷ReviewCustomGatesForRun                                                                                 = null;
    private Internal\Operator\Actions\ForceCancelWorkflowRun|null $actions👷ForceCancelWorkflowRun                                                                                   = null;
    private Internal\Operator\Actions\ListJobsForWorkflowRun|null $actions👷ListJobsForWorkflowRun                                                                                   = null;
    private Internal\Operator\Actions\DownloadWorkflowRunLogs|null $actions👷DownloadWorkflowRunLogs                                                                                 = null;
    private Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming|null $actions👷DownloadWorkflowRunLogsStreaming                                                               = null;
    private Internal\Operator\Actions\DeleteWorkflowRunLogs|null $actions👷DeleteWorkflowRunLogs                                                                                     = null;
    private Internal\Operator\Actions\GetPendingDeploymentsForRun|null $actions👷GetPendingDeploymentsForRun                                                                         = null;
    private Internal\Operator\Actions\ReviewPendingDeploymentsForRun|null $actions👷ReviewPendingDeploymentsForRun                                                                   = null;
    private Internal\Operator\Actions\ReRunWorkflow|null $actions👷ReRunWorkflow                                                                                                     = null;
    private Internal\Operator\Actions\ReRunWorkflowFailedJobs|null $actions👷ReRunWorkflowFailedJobs                                                                                 = null;
    private Internal\Operator\Actions\GetWorkflowRunUsage|null $actions👷GetWorkflowRunUsage                                                                                         = null;
    private Internal\Operator\Actions\ListRepoSecrets|null $actions👷ListRepoSecrets                                                                                                 = null;
    private Internal\Operator\Actions\GetRepoPublicKey|null $actions👷GetRepoPublicKey                                                                                               = null;
    private Internal\Operator\Actions\GetRepoSecret|null $actions👷GetRepoSecret                                                                                                     = null;
    private Internal\Operator\Actions\CreateOrUpdateRepoSecret|null $actions👷CreateOrUpdateRepoSecret                                                                               = null;
    private Internal\Operator\Actions\DeleteRepoSecret|null $actions👷DeleteRepoSecret                                                                                               = null;
    private Internal\Operator\Actions\ListRepoVariables|null $actions👷ListRepoVariables                                                                                             = null;
    private Internal\Operator\Actions\CreateRepoVariable|null $actions👷CreateRepoVariable                                                                                           = null;
    private Internal\Operator\Actions\GetRepoVariable|null $actions👷GetRepoVariable                                                                                                 = null;
    private Internal\Operator\Actions\DeleteRepoVariable|null $actions👷DeleteRepoVariable                                                                                           = null;
    private Internal\Operator\Actions\UpdateRepoVariable|null $actions👷UpdateRepoVariable                                                                                           = null;
    private Internal\Operator\Actions\ListRepoWorkflows|null $actions👷ListRepoWorkflows                                                                                             = null;
    private Internal\Operator\Actions\GetWorkflow|null $actions👷GetWorkflow                                                                                                         = null;
    private Internal\Operator\Actions\DisableWorkflow|null $actions👷DisableWorkflow                                                                                                 = null;
    private Internal\Operator\Actions\CreateWorkflowDispatch|null $actions👷CreateWorkflowDispatch                                                                                   = null;
    private Internal\Operator\Actions\EnableWorkflow|null $actions👷EnableWorkflow                                                                                                   = null;
    private Internal\Operator\Actions\ListWorkflowRuns|null $actions👷ListWorkflowRuns                                                                                               = null;
    private Internal\Operator\Actions\GetWorkflowUsage|null $actions👷GetWorkflowUsage                                                                                               = null;
    private Internal\Operator\Repos\ListActivities|null $repos👷ListActivities                                                                                                       = null;
    private Internal\Operator\Issues\ListAssignees|null $issues👷ListAssignees                                                                                                       = null;
    private Internal\Operator\Issues\ListAssigneesListing|null $issues👷ListAssigneesListing                                                                                         = null;
    private Internal\Operator\Issues\CheckUserCanBeAssigned|null $issues👷CheckUserCanBeAssigned                                                                                     = null;
    private Internal\Operator\Repos\ListAutolinks|null $repos👷ListAutolinks                                                                                                         = null;
    private Internal\Operator\Repos\CreateAutolink|null $repos👷CreateAutolink                                                                                                       = null;
    private Internal\Operator\Repos\GetAutolink|null $repos👷GetAutolink                                                                                                             = null;
    private Internal\Operator\Repos\DeleteAutolink|null $repos👷DeleteAutolink                                                                                                       = null;
    private Internal\Operator\Repos\CheckAutomatedSecurityFixes|null $repos👷CheckAutomatedSecurityFixes                                                                             = null;
    private Internal\Operator\Repos\EnableAutomatedSecurityFixes|null $repos👷EnableAutomatedSecurityFixes                                                                           = null;
    private Internal\Operator\Repos\DisableAutomatedSecurityFixes|null $repos👷DisableAutomatedSecurityFixes                                                                         = null;
    private Internal\Operator\Repos\ListBranches|null $repos👷ListBranches                                                                                                           = null;
    private Internal\Operator\Repos\ListBranchesListing|null $repos👷ListBranchesListing                                                                                             = null;
    private Internal\Operator\Repos\GetBranch|null $repos👷GetBranch                                                                                                                 = null;
    private Internal\Operator\Repos\GetBranchProtection|null $repos👷GetBranchProtection                                                                                             = null;
    private Internal\Operator\Repos\UpdateBranchProtection|null $repos👷UpdateBranchProtection                                                                                       = null;
    private Internal\Operator\Repos\DeleteBranchProtection|null $repos👷DeleteBranchProtection                                                                                       = null;
    private Internal\Operator\Repos\GetAdminBranchProtection|null $repos👷GetAdminBranchProtection                                                                                   = null;
    private Internal\Operator\Repos\SetAdminBranchProtection|null $repos👷SetAdminBranchProtection                                                                                   = null;
    private Internal\Operator\Repos\DeleteAdminBranchProtection|null $repos👷DeleteAdminBranchProtection                                                                             = null;
    private Internal\Operator\Repos\GetPullRequestReviewProtection|null $repos👷GetPullRequestReviewProtection                                                                       = null;
    private Internal\Operator\Repos\DeletePullRequestReviewProtection|null $repos👷DeletePullRequestReviewProtection                                                                 = null;
    private Internal\Operator\Repos\UpdatePullRequestReviewProtection|null $repos👷UpdatePullRequestReviewProtection                                                                 = null;
    private Internal\Operator\Repos\GetCommitSignatureProtection|null $repos👷GetCommitSignatureProtection                                                                           = null;
    private Internal\Operator\Repos\CreateCommitSignatureProtection|null $repos👷CreateCommitSignatureProtection                                                                     = null;
    private Internal\Operator\Repos\DeleteCommitSignatureProtection|null $repos👷DeleteCommitSignatureProtection                                                                     = null;
    private Internal\Operator\Repos\GetStatusChecksProtection|null $repos👷GetStatusChecksProtection                                                                                 = null;
    private Internal\Operator\Repos\RemoveStatusCheckProtection|null $repos👷RemoveStatusCheckProtection                                                                             = null;
    private Internal\Operator\Repos\UpdateStatusCheckProtection|null $repos👷UpdateStatusCheckProtection                                                                             = null;
    private Internal\Operator\Repos\GetAllStatusCheckContexts|null $repos👷GetAllStatusCheckContexts                                                                                 = null;
    private Internal\Operator\Repos\SetStatusCheckContexts|null $repos👷SetStatusCheckContexts                                                                                       = null;
    private Internal\Operator\Repos\AddStatusCheckContexts|null $repos👷AddStatusCheckContexts                                                                                       = null;
    private Internal\Operator\Repos\RemoveStatusCheckContexts|null $repos👷RemoveStatusCheckContexts                                                                                 = null;
    private Internal\Operator\Repos\GetAccessRestrictions|null $repos👷GetAccessRestrictions                                                                                         = null;
    private Internal\Operator\Repos\DeleteAccessRestrictions|null $repos👷DeleteAccessRestrictions                                                                                   = null;
    private Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch|null $repos👷GetAppsWithAccessToProtectedBranch                                                               = null;
    private Internal\Operator\Repos\SetAppAccessRestrictions|null $repos👷SetAppAccessRestrictions                                                                                   = null;
    private Internal\Operator\Repos\AddAppAccessRestrictions|null $repos👷AddAppAccessRestrictions                                                                                   = null;
    private Internal\Operator\Repos\RemoveAppAccessRestrictions|null $repos👷RemoveAppAccessRestrictions                                                                             = null;
    private Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch|null $repos👷GetTeamsWithAccessToProtectedBranch                                                             = null;
    private Internal\Operator\Repos\SetTeamAccessRestrictions|null $repos👷SetTeamAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\AddTeamAccessRestrictions|null $repos👷AddTeamAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\RemoveTeamAccessRestrictions|null $repos👷RemoveTeamAccessRestrictions                                                                           = null;
    private Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch|null $repos👷GetUsersWithAccessToProtectedBranch                                                             = null;
    private Internal\Operator\Repos\SetUserAccessRestrictions|null $repos👷SetUserAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\AddUserAccessRestrictions|null $repos👷AddUserAccessRestrictions                                                                                 = null;
    private Internal\Operator\Repos\RemoveUserAccessRestrictions|null $repos👷RemoveUserAccessRestrictions                                                                           = null;
    private Internal\Operator\Repos\RenameBranch|null $repos👷RenameBranch                                                                                                           = null;
    private Internal\Operator\Checks\Create|null $checks👷Create                                                                                                                     = null;
    private Internal\Operator\Checks\Get|null $checks👷Get                                                                                                                           = null;
    private Internal\Operator\Checks\Update|null $checks👷Update                                                                                                                     = null;
    private Internal\Operator\Checks\ListAnnotations|null $checks👷ListAnnotations                                                                                                   = null;
    private Internal\Operator\Checks\ListAnnotationsListing|null $checks👷ListAnnotationsListing                                                                                     = null;
    private Internal\Operator\Checks\RerequestRun|null $checks👷RerequestRun                                                                                                         = null;
    private Internal\Operator\Checks\CreateSuite|null $checks👷CreateSuite                                                                                                           = null;
    private Internal\Operator\Checks\SetSuitesPreferences|null $checks👷SetSuitesPreferences                                                                                         = null;
    private Internal\Operator\Checks\GetSuite|null $checks👷GetSuite                                                                                                                 = null;
    private Internal\Operator\Checks\ListForSuite|null $checks👷ListForSuite                                                                                                         = null;
    private Internal\Operator\Checks\RerequestSuite|null $checks👷RerequestSuite                                                                                                     = null;
    private Internal\Operator\CodeScanning\ListAlertsForRepo|null $codeScanning👷ListAlertsForRepo                                                                                   = null;
    private Internal\Operator\CodeScanning\ListAlertsForRepoListing|null $codeScanning👷ListAlertsForRepoListing                                                                     = null;
    private Internal\Operator\CodeScanning\GetAlert|null $codeScanning👷GetAlert                                                                                                     = null;
    private Internal\Operator\CodeScanning\UpdateAlert|null $codeScanning👷UpdateAlert                                                                                               = null;
    private Internal\Operator\CodeScanning\ListAlertInstances|null $codeScanning👷ListAlertInstances                                                                                 = null;
    private Internal\Operator\CodeScanning\ListAlertInstancesListing|null $codeScanning👷ListAlertInstancesListing                                                                   = null;
    private Internal\Operator\CodeScanning\ListRecentAnalyses|null $codeScanning👷ListRecentAnalyses                                                                                 = null;
    private Internal\Operator\CodeScanning\ListRecentAnalysesListing|null $codeScanning👷ListRecentAnalysesListing                                                                   = null;
    private Internal\Operator\CodeScanning\GetAnalysis|null $codeScanning👷GetAnalysis                                                                                               = null;
    private Internal\Operator\CodeScanning\DeleteAnalysis|null $codeScanning👷DeleteAnalysis                                                                                         = null;
    private Internal\Operator\CodeScanning\ListCodeqlDatabases|null $codeScanning👷ListCodeqlDatabases                                                                               = null;
    private Internal\Operator\CodeScanning\GetCodeqlDatabase|null $codeScanning👷GetCodeqlDatabase                                                                                   = null;
    private Internal\Operator\CodeScanning\GetDefaultSetup|null $codeScanning👷GetDefaultSetup                                                                                       = null;
    private Internal\Operator\CodeScanning\UpdateDefaultSetup|null $codeScanning👷UpdateDefaultSetup                                                                                 = null;
    private Internal\Operator\CodeScanning\UploadSarif|null $codeScanning👷UploadSarif                                                                                               = null;
    private Internal\Operator\CodeScanning\GetSarif|null $codeScanning👷GetSarif                                                                                                     = null;
    private Internal\Operator\Repos\CodeownersErrors|null $repos👷CodeownersErrors                                                                                                   = null;
    private Internal\Operator\Codespaces\ListInRepositoryForAuthenticatedUser|null $codespaces👷ListInRepositoryForAuthenticatedUser                                                 = null;
    private Internal\Operator\Codespaces\CreateWithRepoForAuthenticatedUser|null $codespaces👷CreateWithRepoForAuthenticatedUser                                                     = null;
    private Internal\Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser|null $codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser                       = null;
    private Internal\Operator\Codespaces\RepoMachinesForAuthenticatedUser|null $codespaces👷RepoMachinesForAuthenticatedUser                                                         = null;
    private Internal\Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser|null $codespaces👷PreFlightWithRepoForAuthenticatedUser                                               = null;
    private Internal\Operator\Codespaces\CheckPermissionsForDevcontainer|null $codespaces👷CheckPermissionsForDevcontainer                                                           = null;
    private Internal\Operator\Codespaces\ListRepoSecrets|null $codespaces👷ListRepoSecrets                                                                                           = null;
    private Internal\Operator\Codespaces\GetRepoPublicKey|null $codespaces👷GetRepoPublicKey                                                                                         = null;
    private Internal\Operator\Codespaces\GetRepoSecret|null $codespaces👷GetRepoSecret                                                                                               = null;
    private Internal\Operator\Codespaces\CreateOrUpdateRepoSecret|null $codespaces👷CreateOrUpdateRepoSecret                                                                         = null;
    private Internal\Operator\Codespaces\DeleteRepoSecret|null $codespaces👷DeleteRepoSecret                                                                                         = null;
    private Internal\Operator\Repos\ListCollaborators|null $repos👷ListCollaborators                                                                                                 = null;
    private Internal\Operator\Repos\ListCollaboratorsListing|null $repos👷ListCollaboratorsListing                                                                                   = null;
    private Internal\Operator\Repos\CheckCollaborator|null $repos👷CheckCollaborator                                                                                                 = null;
    private Internal\Operator\Repos\AddCollaborator|null $repos👷AddCollaborator                                                                                                     = null;
    private Internal\Operator\Repos\RemoveCollaborator|null $repos👷RemoveCollaborator                                                                                               = null;
    private Internal\Operator\Repos\GetCollaboratorPermissionLevel|null $repos👷GetCollaboratorPermissionLevel                                                                       = null;
    private Internal\Operator\Repos\ListCommitCommentsForRepo|null $repos👷ListCommitCommentsForRepo                                                                                 = null;
    private Internal\Operator\Repos\ListCommitCommentsForRepoListing|null $repos👷ListCommitCommentsForRepoListing                                                                   = null;
    private Internal\Operator\Repos\GetCommitComment|null $repos👷GetCommitComment                                                                                                   = null;
    private Internal\Operator\Repos\DeleteCommitComment|null $repos👷DeleteCommitComment                                                                                             = null;
    private Internal\Operator\Repos\UpdateCommitComment|null $repos👷UpdateCommitComment                                                                                             = null;
    private Internal\Operator\Reactions\ListForCommitComment|null $reactions👷ListForCommitComment                                                                                   = null;
    private Internal\Operator\Reactions\ListForCommitCommentListing|null $reactions👷ListForCommitCommentListing                                                                     = null;
    private Internal\Operator\Reactions\CreateForCommitComment|null $reactions👷CreateForCommitComment                                                                               = null;
    private Internal\Operator\Reactions\DeleteForCommitComment|null $reactions👷DeleteForCommitComment                                                                               = null;
    private Internal\Operator\Repos\ListCommits|null $repos👷ListCommits                                                                                                             = null;
    private Internal\Operator\Repos\ListCommitsListing|null $repos👷ListCommitsListing                                                                                               = null;
    private Internal\Operator\Repos\ListBranchesForHeadCommit|null $repos👷ListBranchesForHeadCommit                                                                                 = null;
    private Internal\Operator\Repos\ListCommentsForCommit|null $repos👷ListCommentsForCommit                                                                                         = null;
    private Internal\Operator\Repos\ListCommentsForCommitListing|null $repos👷ListCommentsForCommitListing                                                                           = null;
    private Internal\Operator\Repos\CreateCommitComment|null $repos👷CreateCommitComment                                                                                             = null;
    private Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit|null $repos👷ListPullRequestsAssociatedWithCommit                                                           = null;
    private Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing|null $repos👷ListPullRequestsAssociatedWithCommitListing                                             = null;
    private Internal\Operator\Repos\GetCommit|null $repos👷GetCommit                                                                                                                 = null;
    private Internal\Operator\Checks\ListForRef|null $checks👷ListForRef                                                                                                             = null;
    private Internal\Operator\Checks\ListSuitesForRef|null $checks👷ListSuitesForRef                                                                                                 = null;
    private Internal\Operator\Repos\GetCombinedStatusForRef|null $repos👷GetCombinedStatusForRef                                                                                     = null;
    private Internal\Operator\Repos\ListCommitStatusesForRef|null $repos👷ListCommitStatusesForRef                                                                                   = null;
    private Internal\Operator\Repos\ListCommitStatusesForRefListing|null $repos👷ListCommitStatusesForRefListing                                                                     = null;
    private Internal\Operator\Repos\GetCommunityProfileMetrics|null $repos👷GetCommunityProfileMetrics                                                                               = null;
    private Internal\Operator\Repos\CompareCommits|null $repos👷CompareCommits                                                                                                       = null;
    private Internal\Operator\Repos\GetContent|null $repos👷GetContent                                                                                                               = null;
    private Internal\Operator\Repos\CreateOrUpdateFileContents|null $repos👷CreateOrUpdateFileContents                                                                               = null;
    private Internal\Operator\Repos\DeleteFile|null $repos👷DeleteFile                                                                                                               = null;
    private Internal\Operator\Repos\ListContributors|null $repos👷ListContributors                                                                                                   = null;
    private Internal\Operator\Repos\ListContributorsListing|null $repos👷ListContributorsListing                                                                                     = null;
    private Internal\Operator\Dependabot\ListAlertsForRepo|null $dependabot👷ListAlertsForRepo                                                                                       = null;
    private Internal\Operator\Dependabot\ListAlertsForRepoListing|null $dependabot👷ListAlertsForRepoListing                                                                         = null;
    private Internal\Operator\Dependabot\GetAlert|null $dependabot👷GetAlert                                                                                                         = null;
    private Internal\Operator\Dependabot\UpdateAlert|null $dependabot👷UpdateAlert                                                                                                   = null;
    private Internal\Operator\Dependabot\ListRepoSecrets|null $dependabot👷ListRepoSecrets                                                                                           = null;
    private Internal\Operator\Dependabot\GetRepoPublicKey|null $dependabot👷GetRepoPublicKey                                                                                         = null;
    private Internal\Operator\Dependabot\GetRepoSecret|null $dependabot👷GetRepoSecret                                                                                               = null;
    private Internal\Operator\Dependabot\CreateOrUpdateRepoSecret|null $dependabot👷CreateOrUpdateRepoSecret                                                                         = null;
    private Internal\Operator\Dependabot\DeleteRepoSecret|null $dependabot👷DeleteRepoSecret                                                                                         = null;
    private Internal\Operator\DependencyGraph\DiffRange|null $dependencyGraph👷DiffRange                                                                                             = null;
    private Internal\Operator\DependencyGraph\ExportSbom|null $dependencyGraph👷ExportSbom                                                                                           = null;
    private Internal\Operator\DependencyGraph\CreateRepositorySnapshot|null $dependencyGraph👷CreateRepositorySnapshot                                                               = null;
    private Internal\Operator\Repos\ListDeployments|null $repos👷ListDeployments                                                                                                     = null;
    private Internal\Operator\Repos\ListDeploymentsListing|null $repos👷ListDeploymentsListing                                                                                       = null;
    private Internal\Operator\Repos\CreateDeployment|null $repos👷CreateDeployment                                                                                                   = null;
    private Internal\Operator\Repos\GetDeployment|null $repos👷GetDeployment                                                                                                         = null;
    private Internal\Operator\Repos\DeleteDeployment|null $repos👷DeleteDeployment                                                                                                   = null;
    private Internal\Operator\Repos\ListDeploymentStatuses|null $repos👷ListDeploymentStatuses                                                                                       = null;
    private Internal\Operator\Repos\ListDeploymentStatusesListing|null $repos👷ListDeploymentStatusesListing                                                                         = null;
    private Internal\Operator\Repos\CreateDeploymentStatus|null $repos👷CreateDeploymentStatus                                                                                       = null;
    private Internal\Operator\Repos\GetDeploymentStatus|null $repos👷GetDeploymentStatus                                                                                             = null;
    private Internal\Operator\Repos\CreateDispatchEvent|null $repos👷CreateDispatchEvent                                                                                             = null;
    private Internal\Operator\Repos\GetAllEnvironments|null $repos👷GetAllEnvironments                                                                                               = null;
    private Internal\Operator\Repos\GetEnvironment|null $repos👷GetEnvironment                                                                                                       = null;
    private Internal\Operator\Repos\CreateOrUpdateEnvironment|null $repos👷CreateOrUpdateEnvironment                                                                                 = null;
    private Internal\Operator\Repos\DeleteAnEnvironment|null $repos👷DeleteAnEnvironment                                                                                             = null;
    private Internal\Operator\Repos\ListDeploymentBranchPolicies|null $repos👷ListDeploymentBranchPolicies                                                                           = null;
    private Internal\Operator\Repos\CreateDeploymentBranchPolicy|null $repos👷CreateDeploymentBranchPolicy                                                                           = null;
    private Internal\Operator\Repos\GetDeploymentBranchPolicy|null $repos👷GetDeploymentBranchPolicy                                                                                 = null;
    private Internal\Operator\Repos\UpdateDeploymentBranchPolicy|null $repos👷UpdateDeploymentBranchPolicy                                                                           = null;
    private Internal\Operator\Repos\DeleteDeploymentBranchPolicy|null $repos👷DeleteDeploymentBranchPolicy                                                                           = null;
    private Internal\Operator\Repos\GetAllDeploymentProtectionRules|null $repos👷GetAllDeploymentProtectionRules                                                                     = null;
    private Internal\Operator\Repos\CreateDeploymentProtectionRule|null $repos👷CreateDeploymentProtectionRule                                                                       = null;
    private Internal\Operator\Repos\ListCustomDeploymentRuleIntegrations|null $repos👷ListCustomDeploymentRuleIntegrations                                                           = null;
    private Internal\Operator\Repos\GetCustomDeploymentProtectionRule|null $repos👷GetCustomDeploymentProtectionRule                                                                 = null;
    private Internal\Operator\Repos\DisableDeploymentProtectionRule|null $repos👷DisableDeploymentProtectionRule                                                                     = null;
    private Internal\Operator\Actions\ListEnvironmentSecrets|null $actions👷ListEnvironmentSecrets                                                                                   = null;
    private Internal\Operator\Actions\GetEnvironmentPublicKey|null $actions👷GetEnvironmentPublicKey                                                                                 = null;
    private Internal\Operator\Actions\GetEnvironmentSecret|null $actions👷GetEnvironmentSecret                                                                                       = null;
    private Internal\Operator\Actions\CreateOrUpdateEnvironmentSecret|null $actions👷CreateOrUpdateEnvironmentSecret                                                                 = null;
    private Internal\Operator\Actions\DeleteEnvironmentSecret|null $actions👷DeleteEnvironmentSecret                                                                                 = null;
    private Internal\Operator\Actions\ListEnvironmentVariables|null $actions👷ListEnvironmentVariables                                                                               = null;
    private Internal\Operator\Actions\CreateEnvironmentVariable|null $actions👷CreateEnvironmentVariable                                                                             = null;
    private Internal\Operator\Actions\GetEnvironmentVariable|null $actions👷GetEnvironmentVariable                                                                                   = null;
    private Internal\Operator\Actions\DeleteEnvironmentVariable|null $actions👷DeleteEnvironmentVariable                                                                             = null;
    private Internal\Operator\Actions\UpdateEnvironmentVariable|null $actions👷UpdateEnvironmentVariable                                                                             = null;
    private Internal\Operator\Activity\ListRepoEvents|null $activity👷ListRepoEvents                                                                                                 = null;
    private Internal\Operator\Activity\ListRepoEventsListing|null $activity👷ListRepoEventsListing                                                                                   = null;
    private Internal\Operator\Repos\ListForks|null $repos👷ListForks                                                                                                                 = null;
    private Internal\Operator\Repos\ListForksListing|null $repos👷ListForksListing                                                                                                   = null;
    private Internal\Operator\Repos\CreateFork|null $repos👷CreateFork                                                                                                               = null;
    private Internal\Operator\Git\CreateBlob|null $git👷CreateBlob                                                                                                                   = null;
    private Internal\Operator\Git\GetBlob|null $git👷GetBlob                                                                                                                         = null;
    private Internal\Operator\Git\CreateCommit|null $git👷CreateCommit                                                                                                               = null;
    private Internal\Operator\Git\GetCommit|null $git👷GetCommit                                                                                                                     = null;
    private Internal\Operator\Git\ListMatchingRefs|null $git👷ListMatchingRefs                                                                                                       = null;
    private Internal\Operator\Git\GetRef|null $git👷GetRef                                                                                                                           = null;
    private Internal\Operator\Git\CreateRef|null $git👷CreateRef                                                                                                                     = null;
    private Internal\Operator\Git\DeleteRef|null $git👷DeleteRef                                                                                                                     = null;
    private Internal\Operator\Git\UpdateRef|null $git👷UpdateRef                                                                                                                     = null;
    private Internal\Operator\Git\CreateTag|null $git👷CreateTag                                                                                                                     = null;
    private Internal\Operator\Git\GetTag|null $git👷GetTag                                                                                                                           = null;
    private Internal\Operator\Git\CreateTree|null $git👷CreateTree                                                                                                                   = null;
    private Internal\Operator\Git\GetTree|null $git👷GetTree                                                                                                                         = null;
    private Internal\Operator\Repos\ListWebhooks|null $repos👷ListWebhooks                                                                                                           = null;
    private Internal\Operator\Repos\ListWebhooksListing|null $repos👷ListWebhooksListing                                                                                             = null;
    private Internal\Operator\Repos\CreateWebhook|null $repos👷CreateWebhook                                                                                                         = null;
    private Internal\Operator\Repos\GetWebhook|null $repos👷GetWebhook                                                                                                               = null;
    private Internal\Operator\Repos\DeleteWebhook|null $repos👷DeleteWebhook                                                                                                         = null;
    private Internal\Operator\Repos\UpdateWebhook|null $repos👷UpdateWebhook                                                                                                         = null;
    private Internal\Operator\Repos\GetWebhookConfigForRepo|null $repos👷GetWebhookConfigForRepo                                                                                     = null;
    private Internal\Operator\Repos\UpdateWebhookConfigForRepo|null $repos👷UpdateWebhookConfigForRepo                                                                               = null;
    private Internal\Operator\Repos\ListWebhookDeliveries|null $repos👷ListWebhookDeliveries                                                                                         = null;
    private Internal\Operator\Repos\GetWebhookDelivery|null $repos👷GetWebhookDelivery                                                                                               = null;
    private Internal\Operator\Repos\RedeliverWebhookDelivery|null $repos👷RedeliverWebhookDelivery                                                                                   = null;
    private Internal\Operator\Repos\PingWebhook|null $repos👷PingWebhook                                                                                                             = null;
    private Internal\Operator\Repos\TestPushWebhook|null $repos👷TestPushWebhook                                                                                                     = null;
    private Internal\Operator\Migrations\GetImportStatus|null $migrations👷GetImportStatus                                                                                           = null;
    private Internal\Operator\Migrations\StartImport|null $migrations👷StartImport                                                                                                   = null;
    private Internal\Operator\Migrations\CancelImport|null $migrations👷CancelImport                                                                                                 = null;
    private Internal\Operator\Migrations\UpdateImport|null $migrations👷UpdateImport                                                                                                 = null;
    private Internal\Operator\Migrations\GetCommitAuthors|null $migrations👷GetCommitAuthors                                                                                         = null;
    private Internal\Operator\Migrations\MapCommitAuthor|null $migrations👷MapCommitAuthor                                                                                           = null;
    private Internal\Operator\Migrations\GetLargeFiles|null $migrations👷GetLargeFiles                                                                                               = null;
    private Internal\Operator\Migrations\SetLfsPreference|null $migrations👷SetLfsPreference                                                                                         = null;
    private Internal\Operator\Apps\GetRepoInstallation|null $apps👷GetRepoInstallation                                                                                               = null;
    private Internal\Operator\Interactions\GetRestrictionsForRepo|null $interactions👷GetRestrictionsForRepo                                                                         = null;
    private Internal\Operator\Interactions\SetRestrictionsForRepo|null $interactions👷SetRestrictionsForRepo                                                                         = null;
    private Internal\Operator\Interactions\RemoveRestrictionsForRepo|null $interactions👷RemoveRestrictionsForRepo                                                                   = null;
    private Internal\Operator\Repos\ListInvitations|null $repos👷ListInvitations                                                                                                     = null;
    private Internal\Operator\Repos\ListInvitationsListing|null $repos👷ListInvitationsListing                                                                                       = null;
    private Internal\Operator\Repos\DeleteInvitation|null $repos👷DeleteInvitation                                                                                                   = null;
    private Internal\Operator\Repos\UpdateInvitation|null $repos👷UpdateInvitation                                                                                                   = null;
    private Internal\Operator\Issues\ListForRepo|null $issues👷ListForRepo                                                                                                           = null;
    private Internal\Operator\Issues\ListForRepoListing|null $issues👷ListForRepoListing                                                                                             = null;
    private Internal\Operator\Issues\Create|null $issues👷Create                                                                                                                     = null;
    private Internal\Operator\Issues\ListCommentsForRepo|null $issues👷ListCommentsForRepo                                                                                           = null;
    private Internal\Operator\Issues\ListCommentsForRepoListing|null $issues👷ListCommentsForRepoListing                                                                             = null;
    private Internal\Operator\Issues\GetComment|null $issues👷GetComment                                                                                                             = null;
    private Internal\Operator\Issues\DeleteComment|null $issues👷DeleteComment                                                                                                       = null;
    private Internal\Operator\Issues\UpdateComment|null $issues👷UpdateComment                                                                                                       = null;
    private Internal\Operator\Reactions\ListForIssueComment|null $reactions👷ListForIssueComment                                                                                     = null;
    private Internal\Operator\Reactions\ListForIssueCommentListing|null $reactions👷ListForIssueCommentListing                                                                       = null;
    private Internal\Operator\Reactions\CreateForIssueComment|null $reactions👷CreateForIssueComment                                                                                 = null;
    private Internal\Operator\Reactions\DeleteForIssueComment|null $reactions👷DeleteForIssueComment                                                                                 = null;
    private Internal\Operator\Issues\ListEventsForRepo|null $issues👷ListEventsForRepo                                                                                               = null;
    private Internal\Operator\Issues\ListEventsForRepoListing|null $issues👷ListEventsForRepoListing                                                                                 = null;
    private Internal\Operator\Issues\GetEvent|null $issues👷GetEvent                                                                                                                 = null;
    private Internal\Operator\Issues\Get|null $issues👷Get                                                                                                                           = null;
    private Internal\Operator\Issues\Update|null $issues👷Update                                                                                                                     = null;
    private Internal\Operator\Issues\AddAssignees|null $issues👷AddAssignees                                                                                                         = null;
    private Internal\Operator\Issues\RemoveAssignees|null $issues👷RemoveAssignees                                                                                                   = null;
    private Internal\Operator\Issues\CheckUserCanBeAssignedToIssue|null $issues👷CheckUserCanBeAssignedToIssue                                                                       = null;
    private Internal\Operator\Issues\ListComments|null $issues👷ListComments                                                                                                         = null;
    private Internal\Operator\Issues\ListCommentsListing|null $issues👷ListCommentsListing                                                                                           = null;
    private Internal\Operator\Issues\CreateComment|null $issues👷CreateComment                                                                                                       = null;
    private Internal\Operator\Issues\ListEvents|null $issues👷ListEvents                                                                                                             = null;
    private Internal\Operator\Issues\ListEventsListing|null $issues👷ListEventsListing                                                                                               = null;
    private Internal\Operator\Issues\ListLabelsOnIssue|null $issues👷ListLabelsOnIssue                                                                                               = null;
    private Internal\Operator\Issues\ListLabelsOnIssueListing|null $issues👷ListLabelsOnIssueListing                                                                                 = null;
    private Internal\Operator\Issues\SetLabels|null $issues👷SetLabels                                                                                                               = null;
    private Internal\Operator\Issues\AddLabels|null $issues👷AddLabels                                                                                                               = null;
    private Internal\Operator\Issues\RemoveAllLabels|null $issues👷RemoveAllLabels                                                                                                   = null;
    private Internal\Operator\Issues\RemoveLabel|null $issues👷RemoveLabel                                                                                                           = null;
    private Internal\Operator\Issues\Lock|null $issues👷Lock                                                                                                                         = null;
    private Internal\Operator\Issues\Unlock|null $issues👷Unlock                                                                                                                     = null;
    private Internal\Operator\Reactions\ListForIssue|null $reactions👷ListForIssue                                                                                                   = null;
    private Internal\Operator\Reactions\ListForIssueListing|null $reactions👷ListForIssueListing                                                                                     = null;
    private Internal\Operator\Reactions\CreateForIssue|null $reactions👷CreateForIssue                                                                                               = null;
    private Internal\Operator\Reactions\DeleteForIssue|null $reactions👷DeleteForIssue                                                                                               = null;
    private Internal\Operator\Issues\ListEventsForTimeline|null $issues👷ListEventsForTimeline                                                                                       = null;
    private Internal\Operator\Issues\ListEventsForTimelineListing|null $issues👷ListEventsForTimelineListing                                                                         = null;
    private Internal\Operator\Repos\ListDeployKeys|null $repos👷ListDeployKeys                                                                                                       = null;
    private Internal\Operator\Repos\ListDeployKeysListing|null $repos👷ListDeployKeysListing                                                                                         = null;
    private Internal\Operator\Repos\CreateDeployKey|null $repos👷CreateDeployKey                                                                                                     = null;
    private Internal\Operator\Repos\GetDeployKey|null $repos👷GetDeployKey                                                                                                           = null;
    private Internal\Operator\Repos\DeleteDeployKey|null $repos👷DeleteDeployKey                                                                                                     = null;
    private Internal\Operator\Issues\ListLabelsForRepo|null $issues👷ListLabelsForRepo                                                                                               = null;
    private Internal\Operator\Issues\ListLabelsForRepoListing|null $issues👷ListLabelsForRepoListing                                                                                 = null;
    private Internal\Operator\Issues\CreateLabel|null $issues👷CreateLabel                                                                                                           = null;
    private Internal\Operator\Issues\GetLabel|null $issues👷GetLabel                                                                                                                 = null;
    private Internal\Operator\Issues\DeleteLabel|null $issues👷DeleteLabel                                                                                                           = null;
    private Internal\Operator\Issues\UpdateLabel|null $issues👷UpdateLabel                                                                                                           = null;
    private Internal\Operator\Repos\ListLanguages|null $repos👷ListLanguages                                                                                                         = null;
    private Internal\Operator\Licenses\GetForRepo|null $licenses👷GetForRepo                                                                                                         = null;
    private Internal\Operator\Repos\MergeUpstream|null $repos👷MergeUpstream                                                                                                         = null;
    private Internal\Operator\Repos\Merge|null $repos👷Merge                                                                                                                         = null;
    private Internal\Operator\Issues\ListMilestones|null $issues👷ListMilestones                                                                                                     = null;
    private Internal\Operator\Issues\ListMilestonesListing|null $issues👷ListMilestonesListing                                                                                       = null;
    private Internal\Operator\Issues\CreateMilestone|null $issues👷CreateMilestone                                                                                                   = null;
    private Internal\Operator\Issues\GetMilestone|null $issues👷GetMilestone                                                                                                         = null;
    private Internal\Operator\Issues\DeleteMilestone|null $issues👷DeleteMilestone                                                                                                   = null;
    private Internal\Operator\Issues\UpdateMilestone|null $issues👷UpdateMilestone                                                                                                   = null;
    private Internal\Operator\Issues\ListLabelsForMilestone|null $issues👷ListLabelsForMilestone                                                                                     = null;
    private Internal\Operator\Issues\ListLabelsForMilestoneListing|null $issues👷ListLabelsForMilestoneListing                                                                       = null;
    private Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser|null $activity👷ListRepoNotificationsForAuthenticatedUser                                           = null;
    private Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing|null $activity👷ListRepoNotificationsForAuthenticatedUserListing                             = null;
    private Internal\Operator\Activity\MarkRepoNotificationsAsRead|null $activity👷MarkRepoNotificationsAsRead                                                                       = null;
    private Internal\Operator\Repos\GetPages|null $repos👷GetPages                                                                                                                   = null;
    private Internal\Operator\Repos\UpdateInformationAboutPagesSite|null $repos👷UpdateInformationAboutPagesSite                                                                     = null;
    private Internal\Operator\Repos\CreatePagesSite|null $repos👷CreatePagesSite                                                                                                     = null;
    private Internal\Operator\Repos\DeletePagesSite|null $repos👷DeletePagesSite                                                                                                     = null;
    private Internal\Operator\Repos\ListPagesBuilds|null $repos👷ListPagesBuilds                                                                                                     = null;
    private Internal\Operator\Repos\ListPagesBuildsListing|null $repos👷ListPagesBuildsListing                                                                                       = null;
    private Internal\Operator\Repos\RequestPagesBuild|null $repos👷RequestPagesBuild                                                                                                 = null;
    private Internal\Operator\Repos\GetLatestPagesBuild|null $repos👷GetLatestPagesBuild                                                                                             = null;
    private Internal\Operator\Repos\GetPagesBuild|null $repos👷GetPagesBuild                                                                                                         = null;
    private Internal\Operator\Repos\CreatePagesDeployment|null $repos👷CreatePagesDeployment                                                                                         = null;
    private Internal\Operator\Repos\GetPagesDeployment|null $repos👷GetPagesDeployment                                                                                               = null;
    private Internal\Operator\Repos\CancelPagesDeployment|null $repos👷CancelPagesDeployment                                                                                         = null;
    private Internal\Operator\Repos\GetPagesHealthCheck|null $repos👷GetPagesHealthCheck                                                                                             = null;
    private Internal\Operator\Repos\CheckPrivateVulnerabilityReporting|null $repos👷CheckPrivateVulnerabilityReporting                                                               = null;
    private Internal\Operator\Repos\EnablePrivateVulnerabilityReporting|null $repos👷EnablePrivateVulnerabilityReporting                                                             = null;
    private Internal\Operator\Repos\DisablePrivateVulnerabilityReporting|null $repos👷DisablePrivateVulnerabilityReporting                                                           = null;
    private Internal\Operator\Projects\ListForRepo|null $projects👷ListForRepo                                                                                                       = null;
    private Internal\Operator\Projects\ListForRepoListing|null $projects👷ListForRepoListing                                                                                         = null;
    private Internal\Operator\Projects\CreateForRepo|null $projects👷CreateForRepo                                                                                                   = null;
    private Internal\Operator\Repos\GetCustomPropertiesValues|null $repos👷GetCustomPropertiesValues                                                                                 = null;
    private Internal\Operator\Repos\CreateOrUpdateCustomPropertiesValues|null $repos👷CreateOrUpdateCustomPropertiesValues                                                           = null;
    private Internal\Operator\Pulls\List_|null $pulls👷List_                                                                                                                         = null;
    private Internal\Operator\Pulls\ListListing|null $pulls👷ListListing                                                                                                             = null;
    private Internal\Operator\Pulls\Create|null $pulls👷Create                                                                                                                       = null;
    private Internal\Operator\Pulls\ListReviewCommentsForRepo|null $pulls👷ListReviewCommentsForRepo                                                                                 = null;
    private Internal\Operator\Pulls\ListReviewCommentsForRepoListing|null $pulls👷ListReviewCommentsForRepoListing                                                                   = null;
    private Internal\Operator\Pulls\GetReviewComment|null $pulls👷GetReviewComment                                                                                                   = null;
    private Internal\Operator\Pulls\DeleteReviewComment|null $pulls👷DeleteReviewComment                                                                                             = null;
    private Internal\Operator\Pulls\UpdateReviewComment|null $pulls👷UpdateReviewComment                                                                                             = null;
    private Internal\Operator\Reactions\ListForPullRequestReviewComment|null $reactions👷ListForPullRequestReviewComment                                                             = null;
    private Internal\Operator\Reactions\ListForPullRequestReviewCommentListing|null $reactions👷ListForPullRequestReviewCommentListing                                               = null;
    private Internal\Operator\Reactions\CreateForPullRequestReviewComment|null $reactions👷CreateForPullRequestReviewComment                                                         = null;
    private Internal\Operator\Reactions\DeleteForPullRequestComment|null $reactions👷DeleteForPullRequestComment                                                                     = null;
    private Internal\Operator\Pulls\Get|null $pulls👷Get                                                                                                                             = null;
    private Internal\Operator\Pulls\Update|null $pulls👷Update                                                                                                                       = null;
    private Internal\Operator\Codespaces\CreateWithPrForAuthenticatedUser|null $codespaces👷CreateWithPrForAuthenticatedUser                                                         = null;
    private Internal\Operator\Pulls\ListReviewComments|null $pulls👷ListReviewComments                                                                                               = null;
    private Internal\Operator\Pulls\ListReviewCommentsListing|null $pulls👷ListReviewCommentsListing                                                                                 = null;
    private Internal\Operator\Pulls\CreateReviewComment|null $pulls👷CreateReviewComment                                                                                             = null;
    private Internal\Operator\Pulls\CreateReplyForReviewComment|null $pulls👷CreateReplyForReviewComment                                                                             = null;
    private Internal\Operator\Pulls\ListCommits|null $pulls👷ListCommits                                                                                                             = null;
    private Internal\Operator\Pulls\ListCommitsListing|null $pulls👷ListCommitsListing                                                                                               = null;
    private Internal\Operator\Pulls\ListFiles|null $pulls👷ListFiles                                                                                                                 = null;
    private Internal\Operator\Pulls\ListFilesListing|null $pulls👷ListFilesListing                                                                                                   = null;
    private Internal\Operator\Pulls\CheckIfMerged|null $pulls👷CheckIfMerged                                                                                                         = null;
    private Internal\Operator\Pulls\Merge|null $pulls👷Merge                                                                                                                         = null;
    private Internal\Operator\Pulls\ListRequestedReviewers|null $pulls👷ListRequestedReviewers                                                                                       = null;
    private Internal\Operator\Pulls\RequestReviewers|null $pulls👷RequestReviewers                                                                                                   = null;
    private Internal\Operator\Pulls\RemoveRequestedReviewers|null $pulls👷RemoveRequestedReviewers                                                                                   = null;
    private Internal\Operator\Pulls\ListReviews|null $pulls👷ListReviews                                                                                                             = null;
    private Internal\Operator\Pulls\ListReviewsListing|null $pulls👷ListReviewsListing                                                                                               = null;
    private Internal\Operator\Pulls\CreateReview|null $pulls👷CreateReview                                                                                                           = null;
    private Internal\Operator\Pulls\GetReview|null $pulls👷GetReview                                                                                                                 = null;
    private Internal\Operator\Pulls\UpdateReview|null $pulls👷UpdateReview                                                                                                           = null;
    private Internal\Operator\Pulls\DeletePendingReview|null $pulls👷DeletePendingReview                                                                                             = null;
    private Internal\Operator\Pulls\ListCommentsForReview|null $pulls👷ListCommentsForReview                                                                                         = null;
    private Internal\Operator\Pulls\ListCommentsForReviewListing|null $pulls👷ListCommentsForReviewListing                                                                           = null;
    private Internal\Operator\Pulls\DismissReview|null $pulls👷DismissReview                                                                                                         = null;
    private Internal\Operator\Pulls\SubmitReview|null $pulls👷SubmitReview                                                                                                           = null;
    private Internal\Operator\Pulls\UpdateBranch|null $pulls👷UpdateBranch                                                                                                           = null;
    private Internal\Operator\Repos\GetReadme|null $repos👷GetReadme                                                                                                                 = null;
    private Internal\Operator\Repos\GetReadmeInDirectory|null $repos👷GetReadmeInDirectory                                                                                           = null;
    private Internal\Operator\Repos\ListReleases|null $repos👷ListReleases                                                                                                           = null;
    private Internal\Operator\Repos\ListReleasesListing|null $repos👷ListReleasesListing                                                                                             = null;
    private Internal\Operator\Repos\CreateRelease|null $repos👷CreateRelease                                                                                                         = null;
    private Internal\Operator\Repos\GetReleaseAsset|null $repos👷GetReleaseAsset                                                                                                     = null;
    private Internal\Operator\Repos\DeleteReleaseAsset|null $repos👷DeleteReleaseAsset                                                                                               = null;
    private Internal\Operator\Repos\UpdateReleaseAsset|null $repos👷UpdateReleaseAsset                                                                                               = null;
    private Internal\Operator\Repos\GenerateReleaseNotes|null $repos👷GenerateReleaseNotes                                                                                           = null;
    private Internal\Operator\Repos\GetLatestRelease|null $repos👷GetLatestRelease                                                                                                   = null;
    private Internal\Operator\Repos\GetReleaseByTag|null $repos👷GetReleaseByTag                                                                                                     = null;
    private Internal\Operator\Repos\GetRelease|null $repos👷GetRelease                                                                                                               = null;
    private Internal\Operator\Repos\DeleteRelease|null $repos👷DeleteRelease                                                                                                         = null;
    private Internal\Operator\Repos\UpdateRelease|null $repos👷UpdateRelease                                                                                                         = null;
    private Internal\Operator\Repos\ListReleaseAssets|null $repos👷ListReleaseAssets                                                                                                 = null;
    private Internal\Operator\Repos\ListReleaseAssetsListing|null $repos👷ListReleaseAssetsListing                                                                                   = null;
    private Internal\Operator\Repos\UploadReleaseAsset|null $repos👷UploadReleaseAsset                                                                                               = null;
    private Internal\Operator\Reactions\ListForRelease|null $reactions👷ListForRelease                                                                                               = null;
    private Internal\Operator\Reactions\ListForReleaseListing|null $reactions👷ListForReleaseListing                                                                                 = null;
    private Internal\Operator\Reactions\CreateForRelease|null $reactions👷CreateForRelease                                                                                           = null;
    private Internal\Operator\Reactions\DeleteForRelease|null $reactions👷DeleteForRelease                                                                                           = null;
    private Internal\Operator\Repos\GetBranchRules|null $repos👷GetBranchRules                                                                                                       = null;
    private Internal\Operator\Repos\GetBranchRulesListing|null $repos👷GetBranchRulesListing                                                                                         = null;
    private Internal\Operator\Repos\GetRepoRulesets|null $repos👷GetRepoRulesets                                                                                                     = null;
    private Internal\Operator\Repos\GetRepoRulesetsListing|null $repos👷GetRepoRulesetsListing                                                                                       = null;
    private Internal\Operator\Repos\CreateRepoRuleset|null $repos👷CreateRepoRuleset                                                                                                 = null;
    private Internal\Operator\Repos\GetRepoRuleSuites|null $repos👷GetRepoRuleSuites                                                                                                 = null;
    private Internal\Operator\Repos\GetRepoRuleSuitesListing|null $repos👷GetRepoRuleSuitesListing                                                                                   = null;
    private Internal\Operator\Repos\GetRepoRuleSuite|null $repos👷GetRepoRuleSuite                                                                                                   = null;
    private Internal\Operator\Repos\GetRepoRuleset|null $repos👷GetRepoRuleset                                                                                                       = null;
    private Internal\Operator\Repos\UpdateRepoRuleset|null $repos👷UpdateRepoRuleset                                                                                                 = null;
    private Internal\Operator\Repos\DeleteRepoRuleset|null $repos👷DeleteRepoRuleset                                                                                                 = null;
    private Internal\Operator\SecretScanning\ListAlertsForRepo|null $secretScanning👷ListAlertsForRepo                                                                               = null;
    private Internal\Operator\SecretScanning\ListAlertsForRepoListing|null $secretScanning👷ListAlertsForRepoListing                                                                 = null;
    private Internal\Operator\SecretScanning\GetAlert|null $secretScanning👷GetAlert                                                                                                 = null;
    private Internal\Operator\SecretScanning\UpdateAlert|null $secretScanning👷UpdateAlert                                                                                           = null;
    private Internal\Operator\SecretScanning\ListLocationsForAlert|null $secretScanning👷ListLocationsForAlert                                                                       = null;
    private Internal\Operator\SecretScanning\ListLocationsForAlertListing|null $secretScanning👷ListLocationsForAlertListing                                                         = null;
    private Internal\Operator\SecurityAdvisories\ListRepositoryAdvisories|null $securityAdvisories👷ListRepositoryAdvisories                                                         = null;
    private Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisory|null $securityAdvisories👷CreateRepositoryAdvisory                                                         = null;
    private Internal\Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport|null $securityAdvisories👷CreatePrivateVulnerabilityReport                                         = null;
    private Internal\Operator\SecurityAdvisories\GetRepositoryAdvisory|null $securityAdvisories👷GetRepositoryAdvisory                                                               = null;
    private Internal\Operator\SecurityAdvisories\UpdateRepositoryAdvisory|null $securityAdvisories👷UpdateRepositoryAdvisory                                                         = null;
    private Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest|null $securityAdvisories👷CreateRepositoryAdvisoryCveRequest                                     = null;
    private Internal\Operator\SecurityAdvisories\CreateFork|null $securityAdvisories👷CreateFork                                                                                     = null;
    private Internal\Operator\Activity\ListStargazersForRepo|null $activity👷ListStargazersForRepo                                                                                   = null;
    private Internal\Operator\Repos\GetCodeFrequencyStats|null $repos👷GetCodeFrequencyStats                                                                                         = null;
    private Internal\Operator\Repos\GetCommitActivityStats|null $repos👷GetCommitActivityStats                                                                                       = null;
    private Internal\Operator\Repos\GetContributorsStats|null $repos👷GetContributorsStats                                                                                           = null;
    private Internal\Operator\Repos\GetParticipationStats|null $repos👷GetParticipationStats                                                                                         = null;
    private Internal\Operator\Repos\GetPunchCardStats|null $repos👷GetPunchCardStats                                                                                                 = null;
    private Internal\Operator\Repos\CreateCommitStatus|null $repos👷CreateCommitStatus                                                                                               = null;
    private Internal\Operator\Activity\ListWatchersForRepo|null $activity👷ListWatchersForRepo                                                                                       = null;
    private Internal\Operator\Activity\ListWatchersForRepoListing|null $activity👷ListWatchersForRepoListing                                                                         = null;
    private Internal\Operator\Activity\GetRepoSubscription|null $activity👷GetRepoSubscription                                                                                       = null;
    private Internal\Operator\Activity\SetRepoSubscription|null $activity👷SetRepoSubscription                                                                                       = null;
    private Internal\Operator\Activity\DeleteRepoSubscription|null $activity👷DeleteRepoSubscription                                                                                 = null;
    private Internal\Operator\Repos\ListTags|null $repos👷ListTags                                                                                                                   = null;
    private Internal\Operator\Repos\ListTagsListing|null $repos👷ListTagsListing                                                                                                     = null;
    private Internal\Operator\Repos\ListTagProtection|null $repos👷ListTagProtection                                                                                                 = null;
    private Internal\Operator\Repos\CreateTagProtection|null $repos👷CreateTagProtection                                                                                             = null;
    private Internal\Operator\Repos\DeleteTagProtection|null $repos👷DeleteTagProtection                                                                                             = null;
    private Internal\Operator\Repos\DownloadTarballArchive|null $repos👷DownloadTarballArchive                                                                                       = null;
    private Internal\Operator\Repos\DownloadTarballArchiveStreaming|null $repos👷DownloadTarballArchiveStreaming                                                                     = null;
    private Internal\Operator\Repos\ListTeams|null $repos👷ListTeams                                                                                                                 = null;
    private Internal\Operator\Repos\ListTeamsListing|null $repos👷ListTeamsListing                                                                                                   = null;
    private Internal\Operator\Repos\GetAllTopics|null $repos👷GetAllTopics                                                                                                           = null;
    private Internal\Operator\Repos\ReplaceAllTopics|null $repos👷ReplaceAllTopics                                                                                                   = null;
    private Internal\Operator\Repos\GetClones|null $repos👷GetClones                                                                                                                 = null;
    private Internal\Operator\Repos\GetTopPaths|null $repos👷GetTopPaths                                                                                                             = null;
    private Internal\Operator\Repos\GetTopReferrers|null $repos👷GetTopReferrers                                                                                                     = null;
    private Internal\Operator\Repos\GetViews|null $repos👷GetViews                                                                                                                   = null;
    private Internal\Operator\Repos\Transfer|null $repos👷Transfer                                                                                                                   = null;
    private Internal\Operator\Repos\CheckVulnerabilityAlerts|null $repos👷CheckVulnerabilityAlerts                                                                                   = null;
    private Internal\Operator\Repos\EnableVulnerabilityAlerts|null $repos👷EnableVulnerabilityAlerts                                                                                 = null;
    private Internal\Operator\Repos\DisableVulnerabilityAlerts|null $repos👷DisableVulnerabilityAlerts                                                                               = null;
    private Internal\Operator\Repos\DownloadZipballArchive|null $repos👷DownloadZipballArchive                                                                                       = null;
    private Internal\Operator\Repos\DownloadZipballArchiveStreaming|null $repos👷DownloadZipballArchiveStreaming                                                                     = null;
    private Internal\Operator\Repos\CreateUsingTemplate|null $repos👷CreateUsingTemplate                                                                                             = null;
    private Internal\Operator\Repos\ListPublic|null $repos👷ListPublic                                                                                                               = null;
    private Internal\Operator\Search\Code|null $search👷Code                                                                                                                         = null;
    private Internal\Operator\Search\Commits|null $search👷Commits                                                                                                                   = null;
    private Internal\Operator\Search\IssuesAndPullRequests|null $search👷IssuesAndPullRequests                                                                                       = null;
    private Internal\Operator\Search\Labels|null $search👷Labels                                                                                                                     = null;
    private Internal\Operator\Search\Repos|null $search👷Repos                                                                                                                       = null;
    private Internal\Operator\Search\Topics|null $search👷Topics                                                                                                                     = null;
    private Internal\Operator\Search\Users|null $search👷Users                                                                                                                       = null;
    private Internal\Operator\Teams\GetLegacy|null $teams👷GetLegacy                                                                                                                 = null;
    private Internal\Operator\Teams\DeleteLegacy|null $teams👷DeleteLegacy                                                                                                           = null;
    private Internal\Operator\Teams\UpdateLegacy|null $teams👷UpdateLegacy                                                                                                           = null;
    private Internal\Operator\Teams\ListDiscussionsLegacy|null $teams👷ListDiscussionsLegacy                                                                                         = null;
    private Internal\Operator\Teams\ListDiscussionsLegacyListing|null $teams👷ListDiscussionsLegacyListing                                                                           = null;
    private Internal\Operator\Teams\CreateDiscussionLegacy|null $teams👷CreateDiscussionLegacy                                                                                       = null;
    private Internal\Operator\Teams\GetDiscussionLegacy|null $teams👷GetDiscussionLegacy                                                                                             = null;
    private Internal\Operator\Teams\DeleteDiscussionLegacy|null $teams👷DeleteDiscussionLegacy                                                                                       = null;
    private Internal\Operator\Teams\UpdateDiscussionLegacy|null $teams👷UpdateDiscussionLegacy                                                                                       = null;
    private Internal\Operator\Teams\ListDiscussionCommentsLegacy|null $teams👷ListDiscussionCommentsLegacy                                                                           = null;
    private Internal\Operator\Teams\ListDiscussionCommentsLegacyListing|null $teams👷ListDiscussionCommentsLegacyListing                                                             = null;
    private Internal\Operator\Teams\CreateDiscussionCommentLegacy|null $teams👷CreateDiscussionCommentLegacy                                                                         = null;
    private Internal\Operator\Teams\GetDiscussionCommentLegacy|null $teams👷GetDiscussionCommentLegacy                                                                               = null;
    private Internal\Operator\Teams\DeleteDiscussionCommentLegacy|null $teams👷DeleteDiscussionCommentLegacy                                                                         = null;
    private Internal\Operator\Teams\UpdateDiscussionCommentLegacy|null $teams👷UpdateDiscussionCommentLegacy                                                                         = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacy|null $reactions👷ListForTeamDiscussionCommentLegacy                                                       = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacyListing|null $reactions👷ListForTeamDiscussionCommentLegacyListing                                         = null;
    private Internal\Operator\Reactions\CreateForTeamDiscussionCommentLegacy|null $reactions👷CreateForTeamDiscussionCommentLegacy                                                   = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionLegacy|null $reactions👷ListForTeamDiscussionLegacy                                                                     = null;
    private Internal\Operator\Reactions\ListForTeamDiscussionLegacyListing|null $reactions👷ListForTeamDiscussionLegacyListing                                                       = null;
    private Internal\Operator\Reactions\CreateForTeamDiscussionLegacy|null $reactions👷CreateForTeamDiscussionLegacy                                                                 = null;
    private Internal\Operator\Teams\ListPendingInvitationsLegacy|null $teams👷ListPendingInvitationsLegacy                                                                           = null;
    private Internal\Operator\Teams\ListPendingInvitationsLegacyListing|null $teams👷ListPendingInvitationsLegacyListing                                                             = null;
    private Internal\Operator\Teams\ListMembersLegacy|null $teams👷ListMembersLegacy                                                                                                 = null;
    private Internal\Operator\Teams\ListMembersLegacyListing|null $teams👷ListMembersLegacyListing                                                                                   = null;
    private Internal\Operator\Teams\GetMemberLegacy|null $teams👷GetMemberLegacy                                                                                                     = null;
    private Internal\Operator\Teams\AddMemberLegacy|null $teams👷AddMemberLegacy                                                                                                     = null;
    private Internal\Operator\Teams\RemoveMemberLegacy|null $teams👷RemoveMemberLegacy                                                                                               = null;
    private Internal\Operator\Teams\GetMembershipForUserLegacy|null $teams👷GetMembershipForUserLegacy                                                                               = null;
    private Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy|null $teams👷AddOrUpdateMembershipForUserLegacy                                                               = null;
    private Internal\Operator\Teams\RemoveMembershipForUserLegacy|null $teams👷RemoveMembershipForUserLegacy                                                                         = null;
    private Internal\Operator\Teams\ListProjectsLegacy|null $teams👷ListProjectsLegacy                                                                                               = null;
    private Internal\Operator\Teams\ListProjectsLegacyListing|null $teams👷ListProjectsLegacyListing                                                                                 = null;
    private Internal\Operator\Teams\CheckPermissionsForProjectLegacy|null $teams👷CheckPermissionsForProjectLegacy                                                                   = null;
    private Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy|null $teams👷AddOrUpdateProjectPermissionsLegacy                                                             = null;
    private Internal\Operator\Teams\RemoveProjectLegacy|null $teams👷RemoveProjectLegacy                                                                                             = null;
    private Internal\Operator\Teams\ListReposLegacy|null $teams👷ListReposLegacy                                                                                                     = null;
    private Internal\Operator\Teams\ListReposLegacyListing|null $teams👷ListReposLegacyListing                                                                                       = null;
    private Internal\Operator\Teams\CheckPermissionsForRepoLegacy|null $teams👷CheckPermissionsForRepoLegacy                                                                         = null;
    private Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy|null $teams👷AddOrUpdateRepoPermissionsLegacy                                                                   = null;
    private Internal\Operator\Teams\RemoveRepoLegacy|null $teams👷RemoveRepoLegacy                                                                                                   = null;
    private Internal\Operator\Teams\ListChildLegacy|null $teams👷ListChildLegacy                                                                                                     = null;
    private Internal\Operator\Teams\ListChildLegacyListing|null $teams👷ListChildLegacyListing                                                                                       = null;
    private Internal\Operator\Users\GetAuthenticated|null $users👷GetAuthenticated                                                                                                   = null;
    private Internal\Operator\Users\UpdateAuthenticated|null $users👷UpdateAuthenticated                                                                                             = null;
    private Internal\Operator\Users\ListBlockedByAuthenticatedUser|null $users👷ListBlockedByAuthenticatedUser                                                                       = null;
    private Internal\Operator\Users\ListBlockedByAuthenticatedUserListing|null $users👷ListBlockedByAuthenticatedUserListing                                                         = null;
    private Internal\Operator\Users\CheckBlocked|null $users👷CheckBlocked                                                                                                           = null;
    private Internal\Operator\Users\Block|null $users👷Block                                                                                                                         = null;
    private Internal\Operator\Users\Unblock|null $users👷Unblock                                                                                                                     = null;
    private Internal\Operator\Codespaces\ListForAuthenticatedUser|null $codespaces👷ListForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Codespaces\CreateForAuthenticatedUser|null $codespaces👷CreateForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Codespaces\ListSecretsForAuthenticatedUser|null $codespaces👷ListSecretsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Codespaces\GetPublicKeyForAuthenticatedUser|null $codespaces👷GetPublicKeyForAuthenticatedUser                                                         = null;
    private Internal\Operator\Codespaces\GetSecretForAuthenticatedUser|null $codespaces👷GetSecretForAuthenticatedUser                                                               = null;
    private Internal\Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser|null $codespaces👷CreateOrUpdateSecretForAuthenticatedUser                                         = null;
    private Internal\Operator\Codespaces\DeleteSecretForAuthenticatedUser|null $codespaces👷DeleteSecretForAuthenticatedUser                                                         = null;
    private Internal\Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser|null $codespaces👷ListRepositoriesForSecretForAuthenticatedUser                               = null;
    private Internal\Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser|null $codespaces👷SetRepositoriesForSecretForAuthenticatedUser                                 = null;
    private Internal\Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser|null $codespaces👷AddRepositoryForSecretForAuthenticatedUser                                     = null;
    private Internal\Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser|null $codespaces👷RemoveRepositoryForSecretForAuthenticatedUser                               = null;
    private Internal\Operator\Codespaces\GetForAuthenticatedUser|null $codespaces👷GetForAuthenticatedUser                                                                           = null;
    private Internal\Operator\Codespaces\DeleteForAuthenticatedUser|null $codespaces👷DeleteForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Codespaces\UpdateForAuthenticatedUser|null $codespaces👷UpdateForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Codespaces\ExportForAuthenticatedUser|null $codespaces👷ExportForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Codespaces\GetExportDetailsForAuthenticatedUser|null $codespaces👷GetExportDetailsForAuthenticatedUser                                                 = null;
    private Internal\Operator\Codespaces\CodespaceMachinesForAuthenticatedUser|null $codespaces👷CodespaceMachinesForAuthenticatedUser                                               = null;
    private Internal\Operator\Codespaces\PublishForAuthenticatedUser|null $codespaces👷PublishForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Codespaces\StartForAuthenticatedUser|null $codespaces👷StartForAuthenticatedUser                                                                       = null;
    private Internal\Operator\Codespaces\StopForAuthenticatedUser|null $codespaces👷StopForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser|null $packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser         = null;
    private Internal\Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser|null $users👷SetPrimaryEmailVisibilityForAuthenticatedUser                                         = null;
    private Internal\Operator\Users\ListEmailsForAuthenticatedUser|null $users👷ListEmailsForAuthenticatedUser                                                                       = null;
    private Internal\Operator\Users\ListEmailsForAuthenticatedUserListing|null $users👷ListEmailsForAuthenticatedUserListing                                                         = null;
    private Internal\Operator\Users\AddEmailForAuthenticatedUser|null $users👷AddEmailForAuthenticatedUser                                                                           = null;
    private Internal\Operator\Users\DeleteEmailForAuthenticatedUser|null $users👷DeleteEmailForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Users\ListFollowersForAuthenticatedUser|null $users👷ListFollowersForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Users\ListFollowersForAuthenticatedUserListing|null $users👷ListFollowersForAuthenticatedUserListing                                                   = null;
    private Internal\Operator\Users\ListFollowedByAuthenticatedUser|null $users👷ListFollowedByAuthenticatedUser                                                                     = null;
    private Internal\Operator\Users\ListFollowedByAuthenticatedUserListing|null $users👷ListFollowedByAuthenticatedUserListing                                                       = null;
    private Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated|null $users👷CheckPersonIsFollowedByAuthenticated                                                           = null;
    private Internal\Operator\Users\Follow|null $users👷Follow                                                                                                                       = null;
    private Internal\Operator\Users\Unfollow|null $users👷Unfollow                                                                                                                   = null;
    private Internal\Operator\Users\ListGpgKeysForAuthenticatedUser|null $users👷ListGpgKeysForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing|null $users👷ListGpgKeysForAuthenticatedUserListing                                                       = null;
    private Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser|null $users👷CreateGpgKeyForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Users\GetGpgKeyForAuthenticatedUser|null $users👷GetGpgKeyForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser|null $users👷DeleteGpgKeyForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Apps\ListInstallationsForAuthenticatedUser|null $apps👷ListInstallationsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser|null $apps👷ListInstallationReposForAuthenticatedUser                                                   = null;
    private Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser|null $apps👷AddRepoToInstallationForAuthenticatedUser                                                   = null;
    private Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser|null $apps👷RemoveRepoFromInstallationForAuthenticatedUser                                         = null;
    private Internal\Operator\Interactions\GetRestrictionsForAuthenticatedUser|null $interactions👷GetRestrictionsForAuthenticatedUser                                               = null;
    private Internal\Operator\Interactions\SetRestrictionsForAuthenticatedUser|null $interactions👷SetRestrictionsForAuthenticatedUser                                               = null;
    private Internal\Operator\Interactions\RemoveRestrictionsForAuthenticatedUser|null $interactions👷RemoveRestrictionsForAuthenticatedUser                                         = null;
    private Internal\Operator\Issues\ListForAuthenticatedUser|null $issues👷ListForAuthenticatedUser                                                                                 = null;
    private Internal\Operator\Issues\ListForAuthenticatedUserListing|null $issues👷ListForAuthenticatedUserListing                                                                   = null;
    private Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser|null $users👷ListPublicSshKeysForAuthenticatedUser                                                         = null;
    private Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing|null $users👷ListPublicSshKeysForAuthenticatedUserListing                                           = null;
    private Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser|null $users👷CreatePublicSshKeyForAuthenticatedUser                                                       = null;
    private Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser|null $users👷GetPublicSshKeyForAuthenticatedUser                                                             = null;
    private Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser|null $users👷DeletePublicSshKeyForAuthenticatedUser                                                       = null;
    private Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUser|null $apps👷ListSubscriptionsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserListing|null $apps👷ListSubscriptionsForAuthenticatedUserListing                                             = null;
    private Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed|null $apps👷ListSubscriptionsForAuthenticatedUserStubbed                                             = null;
    private Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing|null $apps👷ListSubscriptionsForAuthenticatedUserStubbedListing                               = null;
    private Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser|null $orgs👷ListMembershipsForAuthenticatedUser                                                               = null;
    private Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing|null $orgs👷ListMembershipsForAuthenticatedUserListing                                                 = null;
    private Internal\Operator\Orgs\GetMembershipForAuthenticatedUser|null $orgs👷GetMembershipForAuthenticatedUser                                                                   = null;
    private Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser|null $orgs👷UpdateMembershipForAuthenticatedUser                                                             = null;
    private Internal\Operator\Migrations\ListForAuthenticatedUser|null $migrations👷ListForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Migrations\ListForAuthenticatedUserListing|null $migrations👷ListForAuthenticatedUserListing                                                           = null;
    private Internal\Operator\Migrations\StartForAuthenticatedUser|null $migrations👷StartForAuthenticatedUser                                                                       = null;
    private Internal\Operator\Migrations\GetStatusForAuthenticatedUser|null $migrations👷GetStatusForAuthenticatedUser                                                               = null;
    private Internal\Operator\Migrations\GetArchiveForAuthenticatedUser|null $migrations👷GetArchiveForAuthenticatedUser                                                             = null;
    private Internal\Operator\Migrations\DeleteArchiveForAuthenticatedUser|null $migrations👷DeleteArchiveForAuthenticatedUser                                                       = null;
    private Internal\Operator\Migrations\UnlockRepoForAuthenticatedUser|null $migrations👷UnlockRepoForAuthenticatedUser                                                             = null;
    private Internal\Operator\Migrations\ListReposForAuthenticatedUser|null $migrations👷ListReposForAuthenticatedUser                                                               = null;
    private Internal\Operator\Migrations\ListReposForAuthenticatedUserListing|null $migrations👷ListReposForAuthenticatedUserListing                                                 = null;
    private Internal\Operator\Orgs\ListForAuthenticatedUser|null $orgs👷ListForAuthenticatedUser                                                                                     = null;
    private Internal\Operator\Orgs\ListForAuthenticatedUserListing|null $orgs👷ListForAuthenticatedUserListing                                                                       = null;
    private Internal\Operator\Packages\ListPackagesForAuthenticatedUser|null $packages👷ListPackagesForAuthenticatedUser                                                             = null;
    private Internal\Operator\Packages\ListPackagesForAuthenticatedUserListing|null $packages👷ListPackagesForAuthenticatedUserListing                                               = null;
    private Internal\Operator\Packages\GetPackageForAuthenticatedUser|null $packages👷GetPackageForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Packages\DeletePackageForAuthenticatedUser|null $packages👷DeletePackageForAuthenticatedUser                                                           = null;
    private Internal\Operator\Packages\RestorePackageForAuthenticatedUser|null $packages👷RestorePackageForAuthenticatedUser                                                         = null;
    private Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser|null $packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser               = null;
    private Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing|null $packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing = null;
    private Internal\Operator\Packages\GetPackageVersionForAuthenticatedUser|null $packages👷GetPackageVersionForAuthenticatedUser                                                   = null;
    private Internal\Operator\Packages\DeletePackageVersionForAuthenticatedUser|null $packages👷DeletePackageVersionForAuthenticatedUser                                             = null;
    private Internal\Operator\Packages\RestorePackageVersionForAuthenticatedUser|null $packages👷RestorePackageVersionForAuthenticatedUser                                           = null;
    private Internal\Operator\Projects\CreateForAuthenticatedUser|null $projects👷CreateForAuthenticatedUser                                                                         = null;
    private Internal\Operator\Users\ListPublicEmailsForAuthenticatedUser|null $users👷ListPublicEmailsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Users\ListPublicEmailsForAuthenticatedUserListing|null $users👷ListPublicEmailsForAuthenticatedUserListing                                             = null;
    private Internal\Operator\Repos\ListForAuthenticatedUser|null $repos👷ListForAuthenticatedUser                                                                                   = null;
    private Internal\Operator\Repos\ListForAuthenticatedUserListing|null $repos👷ListForAuthenticatedUserListing                                                                     = null;
    private Internal\Operator\Repos\CreateForAuthenticatedUser|null $repos👷CreateForAuthenticatedUser                                                                               = null;
    private Internal\Operator\Repos\ListInvitationsForAuthenticatedUser|null $repos👷ListInvitationsForAuthenticatedUser                                                             = null;
    private Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing|null $repos👷ListInvitationsForAuthenticatedUserListing                                               = null;
    private Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser|null $repos👷DeclineInvitationForAuthenticatedUser                                                         = null;
    private Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser|null $repos👷AcceptInvitationForAuthenticatedUser                                                           = null;
    private Internal\Operator\Users\ListSocialAccountsForAuthenticatedUser|null $users👷ListSocialAccountsForAuthenticatedUser                                                       = null;
    private Internal\Operator\Users\ListSocialAccountsForAuthenticatedUserListing|null $users👷ListSocialAccountsForAuthenticatedUserListing                                         = null;
    private Internal\Operator\Users\AddSocialAccountForAuthenticatedUser|null $users👷AddSocialAccountForAuthenticatedUser                                                           = null;
    private Internal\Operator\Users\DeleteSocialAccountForAuthenticatedUser|null $users👷DeleteSocialAccountForAuthenticatedUser                                                     = null;
    private Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUser|null $users👷ListSshSigningKeysForAuthenticatedUser                                                       = null;
    private Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUserListing|null $users👷ListSshSigningKeysForAuthenticatedUserListing                                         = null;
    private Internal\Operator\Users\CreateSshSigningKeyForAuthenticatedUser|null $users👷CreateSshSigningKeyForAuthenticatedUser                                                     = null;
    private Internal\Operator\Users\GetSshSigningKeyForAuthenticatedUser|null $users👷GetSshSigningKeyForAuthenticatedUser                                                           = null;
    private Internal\Operator\Users\DeleteSshSigningKeyForAuthenticatedUser|null $users👷DeleteSshSigningKeyForAuthenticatedUser                                                     = null;
    private Internal\Operator\Activity\ListReposStarredByAuthenticatedUser|null $activity👷ListReposStarredByAuthenticatedUser                                                       = null;
    private Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing|null $activity👷ListReposStarredByAuthenticatedUserListing                                         = null;
    private Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser|null $activity👷CheckRepoIsStarredByAuthenticatedUser                                                   = null;
    private Internal\Operator\Activity\StarRepoForAuthenticatedUser|null $activity👷StarRepoForAuthenticatedUser                                                                     = null;
    private Internal\Operator\Activity\UnstarRepoForAuthenticatedUser|null $activity👷UnstarRepoForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser|null $activity👷ListWatchedReposForAuthenticatedUser                                                     = null;
    private Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing|null $activity👷ListWatchedReposForAuthenticatedUserListing                                       = null;
    private Internal\Operator\Teams\ListForAuthenticatedUser|null $teams👷ListForAuthenticatedUser                                                                                   = null;
    private Internal\Operator\Teams\ListForAuthenticatedUserListing|null $teams👷ListForAuthenticatedUserListing                                                                     = null;
    private Internal\Operator\Users\List_|null $users👷List_                                                                                                                         = null;
    private Internal\Operator\Users\GetByUsername|null $users👷GetByUsername                                                                                                         = null;
    private Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForUser|null $packages👷ListDockerMigrationConflictingPackagesForUser                                   = null;
    private Internal\Operator\Activity\ListEventsForAuthenticatedUser|null $activity👷ListEventsForAuthenticatedUser                                                                 = null;
    private Internal\Operator\Activity\ListEventsForAuthenticatedUserListing|null $activity👷ListEventsForAuthenticatedUserListing                                                   = null;
    private Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser|null $activity👷ListOrgEventsForAuthenticatedUser                                                           = null;
    private Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing|null $activity👷ListOrgEventsForAuthenticatedUserListing                                             = null;
    private Internal\Operator\Activity\ListPublicEventsForUser|null $activity👷ListPublicEventsForUser                                                                               = null;
    private Internal\Operator\Activity\ListPublicEventsForUserListing|null $activity👷ListPublicEventsForUserListing                                                                 = null;
    private Internal\Operator\Users\ListFollowersForUser|null $users👷ListFollowersForUser                                                                                           = null;
    private Internal\Operator\Users\ListFollowersForUserListing|null $users👷ListFollowersForUserListing                                                                             = null;
    private Internal\Operator\Users\ListFollowingForUser|null $users👷ListFollowingForUser                                                                                           = null;
    private Internal\Operator\Users\ListFollowingForUserListing|null $users👷ListFollowingForUserListing                                                                             = null;
    private Internal\Operator\Users\CheckFollowingForUser|null $users👷CheckFollowingForUser                                                                                         = null;
    private Internal\Operator\Gists\ListForUser|null $gists👷ListForUser                                                                                                             = null;
    private Internal\Operator\Gists\ListForUserListing|null $gists👷ListForUserListing                                                                                               = null;
    private Internal\Operator\Users\ListGpgKeysForUser|null $users👷ListGpgKeysForUser                                                                                               = null;
    private Internal\Operator\Users\ListGpgKeysForUserListing|null $users👷ListGpgKeysForUserListing                                                                                 = null;
    private Internal\Operator\Users\GetContextForUser|null $users👷GetContextForUser                                                                                                 = null;
    private Internal\Operator\Apps\GetUserInstallation|null $apps👷GetUserInstallation                                                                                               = null;
    private Internal\Operator\Users\ListPublicKeysForUser|null $users👷ListPublicKeysForUser                                                                                         = null;
    private Internal\Operator\Users\ListPublicKeysForUserListing|null $users👷ListPublicKeysForUserListing                                                                           = null;
    private Internal\Operator\Orgs\ListForUser|null $orgs👷ListForUser                                                                                                               = null;
    private Internal\Operator\Orgs\ListForUserListing|null $orgs👷ListForUserListing                                                                                                 = null;
    private Internal\Operator\Packages\ListPackagesForUser|null $packages👷ListPackagesForUser                                                                                       = null;
    private Internal\Operator\Packages\ListPackagesForUserListing|null $packages👷ListPackagesForUserListing                                                                         = null;
    private Internal\Operator\Packages\GetPackageForUser|null $packages👷GetPackageForUser                                                                                           = null;
    private Internal\Operator\Packages\DeletePackageForUser|null $packages👷DeletePackageForUser                                                                                     = null;
    private Internal\Operator\Packages\RestorePackageForUser|null $packages👷RestorePackageForUser                                                                                   = null;
    private Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser|null $packages👷GetAllPackageVersionsForPackageOwnedByUser                                         = null;
    private Internal\Operator\Packages\GetPackageVersionForUser|null $packages👷GetPackageVersionForUser                                                                             = null;
    private Internal\Operator\Packages\DeletePackageVersionForUser|null $packages👷DeletePackageVersionForUser                                                                       = null;
    private Internal\Operator\Packages\RestorePackageVersionForUser|null $packages👷RestorePackageVersionForUser                                                                     = null;
    private Internal\Operator\Projects\ListForUser|null $projects👷ListForUser                                                                                                       = null;
    private Internal\Operator\Projects\ListForUserListing|null $projects👷ListForUserListing                                                                                         = null;
    private Internal\Operator\Activity\ListReceivedEventsForUser|null $activity👷ListReceivedEventsForUser                                                                           = null;
    private Internal\Operator\Activity\ListReceivedEventsForUserListing|null $activity👷ListReceivedEventsForUserListing                                                             = null;
    private Internal\Operator\Activity\ListReceivedPublicEventsForUser|null $activity👷ListReceivedPublicEventsForUser                                                               = null;
    private Internal\Operator\Activity\ListReceivedPublicEventsForUserListing|null $activity👷ListReceivedPublicEventsForUserListing                                                 = null;
    private Internal\Operator\Repos\ListForUser|null $repos👷ListForUser                                                                                                             = null;
    private Internal\Operator\Repos\ListForUserListing|null $repos👷ListForUserListing                                                                                               = null;
    private Internal\Operator\Billing\GetGithubActionsBillingUser|null $billing👷GetGithubActionsBillingUser                                                                         = null;
    private Internal\Operator\Billing\GetGithubPackagesBillingUser|null $billing👷GetGithubPackagesBillingUser                                                                       = null;
    private Internal\Operator\Billing\GetSharedStorageBillingUser|null $billing👷GetSharedStorageBillingUser                                                                         = null;
    private Internal\Operator\Users\ListSocialAccountsForUser|null $users👷ListSocialAccountsForUser                                                                                 = null;
    private Internal\Operator\Users\ListSocialAccountsForUserListing|null $users👷ListSocialAccountsForUserListing                                                                   = null;
    private Internal\Operator\Users\ListSshSigningKeysForUser|null $users👷ListSshSigningKeysForUser                                                                                 = null;
    private Internal\Operator\Users\ListSshSigningKeysForUserListing|null $users👷ListSshSigningKeysForUserListing                                                                   = null;
    private Internal\Operator\Activity\ListReposStarredByUser|null $activity👷ListReposStarredByUser                                                                                 = null;
    private Internal\Operator\Activity\ListReposWatchedByUser|null $activity👷ListReposWatchedByUser                                                                                 = null;
    private Internal\Operator\Activity\ListReposWatchedByUserListing|null $activity👷ListReposWatchedByUserListing                                                                   = null;
    private Internal\Operator\Meta\GetAllVersions|null $meta👷GetAllVersions                                                                                                         = null;
    private Internal\Operator\Meta\GetZen|null $meta👷GetZen                                                                                                                         = null;

    public function __construct(private AuthenticationInterface $authentication, private Browser $browser, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators)
    {
    }

    public function meta👷Root(): Internal\Operator\Meta\Root
    {
        if ($this->meta👷Root instanceof Internal\Operator\Meta\Root === false) {
            $this->meta👷Root = new Internal\Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Root());
        }

        return $this->meta👷Root;
    }

    public function securityAdvisories👷ListGlobalAdvisories(): Internal\Operator\SecurityAdvisories\ListGlobalAdvisories
    {
        if ($this->securityAdvisories👷ListGlobalAdvisories instanceof Internal\Operator\SecurityAdvisories\ListGlobalAdvisories === false) {
            $this->securityAdvisories👷ListGlobalAdvisories = new Internal\Operator\SecurityAdvisories\ListGlobalAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories());
        }

        return $this->securityAdvisories👷ListGlobalAdvisories;
    }

    public function securityAdvisories👷GetGlobalAdvisory(): Internal\Operator\SecurityAdvisories\GetGlobalAdvisory
    {
        if ($this->securityAdvisories👷GetGlobalAdvisory instanceof Internal\Operator\SecurityAdvisories\GetGlobalAdvisory === false) {
            $this->securityAdvisories👷GetGlobalAdvisory = new Internal\Operator\SecurityAdvisories\GetGlobalAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories🌀GhsaId());
        }

        return $this->securityAdvisories👷GetGlobalAdvisory;
    }

    public function apps👷GetAuthenticated(): Internal\Operator\Apps\GetAuthenticated
    {
        if ($this->apps👷GetAuthenticated instanceof Internal\Operator\Apps\GetAuthenticated === false) {
            $this->apps👷GetAuthenticated = new Internal\Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());
        }

        return $this->apps👷GetAuthenticated;
    }

    public function apps👷CreateFromManifest(): Internal\Operator\Apps\CreateFromManifest
    {
        if ($this->apps👷CreateFromManifest instanceof Internal\Operator\Apps\CreateFromManifest === false) {
            $this->apps👷CreateFromManifest = new Internal\Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());
        }

        return $this->apps👷CreateFromManifest;
    }

    public function apps👷GetWebhookConfigForApp(): Internal\Operator\Apps\GetWebhookConfigForApp
    {
        if ($this->apps👷GetWebhookConfigForApp instanceof Internal\Operator\Apps\GetWebhookConfigForApp === false) {
            $this->apps👷GetWebhookConfigForApp = new Internal\Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷GetWebhookConfigForApp;
    }

    public function apps👷UpdateWebhookConfigForApp(): Internal\Operator\Apps\UpdateWebhookConfigForApp
    {
        if ($this->apps👷UpdateWebhookConfigForApp instanceof Internal\Operator\Apps\UpdateWebhookConfigForApp === false) {
            $this->apps👷UpdateWebhookConfigForApp = new Internal\Operator\Apps\UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷UpdateWebhookConfigForApp;
    }

    public function apps👷ListWebhookDeliveries(): Internal\Operator\Apps\ListWebhookDeliveries
    {
        if ($this->apps👷ListWebhookDeliveries instanceof Internal\Operator\Apps\ListWebhookDeliveries === false) {
            $this->apps👷ListWebhookDeliveries = new Internal\Operator\Apps\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());
        }

        return $this->apps👷ListWebhookDeliveries;
    }

    public function apps👷GetWebhookDelivery(): Internal\Operator\Apps\GetWebhookDelivery
    {
        if ($this->apps👷GetWebhookDelivery instanceof Internal\Operator\Apps\GetWebhookDelivery === false) {
            $this->apps👷GetWebhookDelivery = new Internal\Operator\Apps\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());
        }

        return $this->apps👷GetWebhookDelivery;
    }

    public function apps👷RedeliverWebhookDelivery(): Internal\Operator\Apps\RedeliverWebhookDelivery
    {
        if ($this->apps👷RedeliverWebhookDelivery instanceof Internal\Operator\Apps\RedeliverWebhookDelivery === false) {
            $this->apps👷RedeliverWebhookDelivery = new Internal\Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->apps👷RedeliverWebhookDelivery;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedApp(): Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedApp instanceof Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedApp = new Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedApp;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedAppListing(): Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedAppListing instanceof Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedAppListing = new Internal\Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedAppListing;
    }

    public function apps👷ListInstallations(): Internal\Operator\Apps\ListInstallations
    {
        if ($this->apps👷ListInstallations instanceof Internal\Operator\Apps\ListInstallations === false) {
            $this->apps👷ListInstallations = new Internal\Operator\Apps\ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallations;
    }

    public function apps👷ListInstallationsListing(): Internal\Operator\Apps\ListInstallationsListing
    {
        if ($this->apps👷ListInstallationsListing instanceof Internal\Operator\Apps\ListInstallationsListing === false) {
            $this->apps👷ListInstallationsListing = new Internal\Operator\Apps\ListInstallationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallationsListing;
    }

    public function apps👷GetInstallation(): Internal\Operator\Apps\GetInstallation
    {
        if ($this->apps👷GetInstallation instanceof Internal\Operator\Apps\GetInstallation === false) {
            $this->apps👷GetInstallation = new Internal\Operator\Apps\GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷GetInstallation;
    }

    public function apps👷DeleteInstallation(): Internal\Operator\Apps\DeleteInstallation
    {
        if ($this->apps👷DeleteInstallation instanceof Internal\Operator\Apps\DeleteInstallation === false) {
            $this->apps👷DeleteInstallation = new Internal\Operator\Apps\DeleteInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷DeleteInstallation;
    }

    public function apps👷CreateInstallationAccessToken(): Internal\Operator\Apps\CreateInstallationAccessToken
    {
        if ($this->apps👷CreateInstallationAccessToken instanceof Internal\Operator\Apps\CreateInstallationAccessToken === false) {
            $this->apps👷CreateInstallationAccessToken = new Internal\Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());
        }

        return $this->apps👷CreateInstallationAccessToken;
    }

    public function apps👷SuspendInstallation(): Internal\Operator\Apps\SuspendInstallation
    {
        if ($this->apps👷SuspendInstallation instanceof Internal\Operator\Apps\SuspendInstallation === false) {
            $this->apps👷SuspendInstallation = new Internal\Operator\Apps\SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷SuspendInstallation;
    }

    public function apps👷UnsuspendInstallation(): Internal\Operator\Apps\UnsuspendInstallation
    {
        if ($this->apps👷UnsuspendInstallation instanceof Internal\Operator\Apps\UnsuspendInstallation === false) {
            $this->apps👷UnsuspendInstallation = new Internal\Operator\Apps\UnsuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷UnsuspendInstallation;
    }

    public function apps👷DeleteAuthorization(): Internal\Operator\Apps\DeleteAuthorization
    {
        if ($this->apps👷DeleteAuthorization instanceof Internal\Operator\Apps\DeleteAuthorization === false) {
            $this->apps👷DeleteAuthorization = new Internal\Operator\Apps\DeleteAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grant());
        }

        return $this->apps👷DeleteAuthorization;
    }

    public function apps👷CheckToken(): Internal\Operator\Apps\CheckToken
    {
        if ($this->apps👷CheckToken instanceof Internal\Operator\Apps\CheckToken === false) {
            $this->apps👷CheckToken = new Internal\Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷CheckToken;
    }

    public function apps👷DeleteToken(): Internal\Operator\Apps\DeleteToken
    {
        if ($this->apps👷DeleteToken instanceof Internal\Operator\Apps\DeleteToken === false) {
            $this->apps👷DeleteToken = new Internal\Operator\Apps\DeleteToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷DeleteToken;
    }

    public function apps👷ResetToken(): Internal\Operator\Apps\ResetToken
    {
        if ($this->apps👷ResetToken instanceof Internal\Operator\Apps\ResetToken === false) {
            $this->apps👷ResetToken = new Internal\Operator\Apps\ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷ResetToken;
    }

    public function apps👷ScopeToken(): Internal\Operator\Apps\ScopeToken
    {
        if ($this->apps👷ScopeToken instanceof Internal\Operator\Apps\ScopeToken === false) {
            $this->apps👷ScopeToken = new Internal\Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped());
        }

        return $this->apps👷ScopeToken;
    }

    public function apps👷GetBySlug(): Internal\Operator\Apps\GetBySlug
    {
        if ($this->apps👷GetBySlug instanceof Internal\Operator\Apps\GetBySlug === false) {
            $this->apps👷GetBySlug = new Internal\Operator\Apps\GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());
        }

        return $this->apps👷GetBySlug;
    }

    public function classroom👷GetAnAssignment(): Internal\Operator\Classroom\GetAnAssignment
    {
        if ($this->classroom👷GetAnAssignment instanceof Internal\Operator\Classroom\GetAnAssignment === false) {
            $this->classroom👷GetAnAssignment = new Internal\Operator\Classroom\GetAnAssignment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId());
        }

        return $this->classroom👷GetAnAssignment;
    }

    public function classroom👷ListAcceptedAssigmentsForAnAssignment(): Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignment
    {
        if ($this->classroom👷ListAcceptedAssigmentsForAnAssignment instanceof Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignment === false) {
            $this->classroom👷ListAcceptedAssigmentsForAnAssignment = new Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments());
        }

        return $this->classroom👷ListAcceptedAssigmentsForAnAssignment;
    }

    public function classroom👷ListAcceptedAssigmentsForAnAssignmentListing(): Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignmentListing
    {
        if ($this->classroom👷ListAcceptedAssigmentsForAnAssignmentListing instanceof Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignmentListing === false) {
            $this->classroom👷ListAcceptedAssigmentsForAnAssignmentListing = new Internal\Operator\Classroom\ListAcceptedAssigmentsForAnAssignmentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments());
        }

        return $this->classroom👷ListAcceptedAssigmentsForAnAssignmentListing;
    }

    public function classroom👷GetAssignmentGrades(): Internal\Operator\Classroom\GetAssignmentGrades
    {
        if ($this->classroom👷GetAssignmentGrades instanceof Internal\Operator\Classroom\GetAssignmentGrades === false) {
            $this->classroom👷GetAssignmentGrades = new Internal\Operator\Classroom\GetAssignmentGrades($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Assignments🌀AssignmentId🌀Grades());
        }

        return $this->classroom👷GetAssignmentGrades;
    }

    public function classroom👷ListClassrooms(): Internal\Operator\Classroom\ListClassrooms
    {
        if ($this->classroom👷ListClassrooms instanceof Internal\Operator\Classroom\ListClassrooms === false) {
            $this->classroom👷ListClassrooms = new Internal\Operator\Classroom\ListClassrooms($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms());
        }

        return $this->classroom👷ListClassrooms;
    }

    public function classroom👷ListClassroomsListing(): Internal\Operator\Classroom\ListClassroomsListing
    {
        if ($this->classroom👷ListClassroomsListing instanceof Internal\Operator\Classroom\ListClassroomsListing === false) {
            $this->classroom👷ListClassroomsListing = new Internal\Operator\Classroom\ListClassroomsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms());
        }

        return $this->classroom👷ListClassroomsListing;
    }

    public function classroom👷GetAClassroom(): Internal\Operator\Classroom\GetAClassroom
    {
        if ($this->classroom👷GetAClassroom instanceof Internal\Operator\Classroom\GetAClassroom === false) {
            $this->classroom👷GetAClassroom = new Internal\Operator\Classroom\GetAClassroom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId());
        }

        return $this->classroom👷GetAClassroom;
    }

    public function classroom👷ListAssignmentsForAClassroom(): Internal\Operator\Classroom\ListAssignmentsForAClassroom
    {
        if ($this->classroom👷ListAssignmentsForAClassroom instanceof Internal\Operator\Classroom\ListAssignmentsForAClassroom === false) {
            $this->classroom👷ListAssignmentsForAClassroom = new Internal\Operator\Classroom\ListAssignmentsForAClassroom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments());
        }

        return $this->classroom👷ListAssignmentsForAClassroom;
    }

    public function classroom👷ListAssignmentsForAClassroomListing(): Internal\Operator\Classroom\ListAssignmentsForAClassroomListing
    {
        if ($this->classroom👷ListAssignmentsForAClassroomListing instanceof Internal\Operator\Classroom\ListAssignmentsForAClassroomListing === false) {
            $this->classroom👷ListAssignmentsForAClassroomListing = new Internal\Operator\Classroom\ListAssignmentsForAClassroomListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments());
        }

        return $this->classroom👷ListAssignmentsForAClassroomListing;
    }

    public function codesOfConduct👷GetAllCodesOfConduct(): Internal\Operator\CodesOfConduct\GetAllCodesOfConduct
    {
        if ($this->codesOfConduct👷GetAllCodesOfConduct instanceof Internal\Operator\CodesOfConduct\GetAllCodesOfConduct === false) {
            $this->codesOfConduct👷GetAllCodesOfConduct = new Internal\Operator\CodesOfConduct\GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct());
        }

        return $this->codesOfConduct👷GetAllCodesOfConduct;
    }

    public function codesOfConduct👷GetConductCode(): Internal\Operator\CodesOfConduct\GetConductCode
    {
        if ($this->codesOfConduct👷GetConductCode instanceof Internal\Operator\CodesOfConduct\GetConductCode === false) {
            $this->codesOfConduct👷GetConductCode = new Internal\Operator\CodesOfConduct\GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key());
        }

        return $this->codesOfConduct👷GetConductCode;
    }

    public function emojis👷Get(): Internal\Operator\Emojis\Get
    {
        if ($this->emojis👷Get instanceof Internal\Operator\Emojis\Get === false) {
            $this->emojis👷Get = new Internal\Operator\Emojis\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Emojis());
        }

        return $this->emojis👷Get;
    }

    public function copilot👷UsageMetricsForEnterprise(): Internal\Operator\Copilot\UsageMetricsForEnterprise
    {
        if ($this->copilot👷UsageMetricsForEnterprise instanceof Internal\Operator\Copilot\UsageMetricsForEnterprise === false) {
            $this->copilot👷UsageMetricsForEnterprise = new Internal\Operator\Copilot\UsageMetricsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForEnterprise;
    }

    public function copilot👷UsageMetricsForEnterpriseListing(): Internal\Operator\Copilot\UsageMetricsForEnterpriseListing
    {
        if ($this->copilot👷UsageMetricsForEnterpriseListing instanceof Internal\Operator\Copilot\UsageMetricsForEnterpriseListing === false) {
            $this->copilot👷UsageMetricsForEnterpriseListing = new Internal\Operator\Copilot\UsageMetricsForEnterpriseListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForEnterpriseListing;
    }

    public function dependabot👷ListAlertsForEnterprise(): Internal\Operator\Dependabot\ListAlertsForEnterprise
    {
        if ($this->dependabot👷ListAlertsForEnterprise instanceof Internal\Operator\Dependabot\ListAlertsForEnterprise === false) {
            $this->dependabot👷ListAlertsForEnterprise = new Internal\Operator\Dependabot\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForEnterprise;
    }

    public function secretScanning👷ListAlertsForEnterprise(): Internal\Operator\SecretScanning\ListAlertsForEnterprise
    {
        if ($this->secretScanning👷ListAlertsForEnterprise instanceof Internal\Operator\SecretScanning\ListAlertsForEnterprise === false) {
            $this->secretScanning👷ListAlertsForEnterprise = new Internal\Operator\SecretScanning\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForEnterprise;
    }

    public function activity👷ListPublicEvents(): Internal\Operator\Activity\ListPublicEvents
    {
        if ($this->activity👷ListPublicEvents instanceof Internal\Operator\Activity\ListPublicEvents === false) {
            $this->activity👷ListPublicEvents = new Internal\Operator\Activity\ListPublicEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Events());
        }

        return $this->activity👷ListPublicEvents;
    }

    public function activity👷ListPublicEventsListing(): Internal\Operator\Activity\ListPublicEventsListing
    {
        if ($this->activity👷ListPublicEventsListing instanceof Internal\Operator\Activity\ListPublicEventsListing === false) {
            $this->activity👷ListPublicEventsListing = new Internal\Operator\Activity\ListPublicEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Events());
        }

        return $this->activity👷ListPublicEventsListing;
    }

    public function activity👷GetFeeds(): Internal\Operator\Activity\GetFeeds
    {
        if ($this->activity👷GetFeeds instanceof Internal\Operator\Activity\GetFeeds === false) {
            $this->activity👷GetFeeds = new Internal\Operator\Activity\GetFeeds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Feeds());
        }

        return $this->activity👷GetFeeds;
    }

    public function gists👷List_(): Internal\Operator\Gists\List_
    {
        if ($this->gists👷List_ instanceof Internal\Operator\Gists\List_ === false) {
            $this->gists👷List_ = new Internal\Operator\Gists\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷List_;
    }

    public function gists👷ListListing(): Internal\Operator\Gists\ListListing
    {
        if ($this->gists👷ListListing instanceof Internal\Operator\Gists\ListListing === false) {
            $this->gists👷ListListing = new Internal\Operator\Gists\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷ListListing;
    }

    public function gists👷Create(): Internal\Operator\Gists\Create
    {
        if ($this->gists👷Create instanceof Internal\Operator\Gists\Create === false) {
            $this->gists👷Create = new Internal\Operator\Gists\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷Create;
    }

    public function gists👷ListPublic(): Internal\Operator\Gists\ListPublic
    {
        if ($this->gists👷ListPublic instanceof Internal\Operator\Gists\ListPublic === false) {
            $this->gists👷ListPublic = new Internal\Operator\Gists\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublic;
    }

    public function gists👷ListPublicListing(): Internal\Operator\Gists\ListPublicListing
    {
        if ($this->gists👷ListPublicListing instanceof Internal\Operator\Gists\ListPublicListing === false) {
            $this->gists👷ListPublicListing = new Internal\Operator\Gists\ListPublicListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublicListing;
    }

    public function gists👷ListStarred(): Internal\Operator\Gists\ListStarred
    {
        if ($this->gists👷ListStarred instanceof Internal\Operator\Gists\ListStarred === false) {
            $this->gists👷ListStarred = new Internal\Operator\Gists\ListStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarred;
    }

    public function gists👷ListStarredListing(): Internal\Operator\Gists\ListStarredListing
    {
        if ($this->gists👷ListStarredListing instanceof Internal\Operator\Gists\ListStarredListing === false) {
            $this->gists👷ListStarredListing = new Internal\Operator\Gists\ListStarredListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarredListing;
    }

    public function gists👷Get(): Internal\Operator\Gists\Get
    {
        if ($this->gists👷Get instanceof Internal\Operator\Gists\Get === false) {
            $this->gists👷Get = new Internal\Operator\Gists\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Get;
    }

    public function gists👷Delete(): Internal\Operator\Gists\Delete
    {
        if ($this->gists👷Delete instanceof Internal\Operator\Gists\Delete === false) {
            $this->gists👷Delete = new Internal\Operator\Gists\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Delete;
    }

    public function gists👷Update(): Internal\Operator\Gists\Update
    {
        if ($this->gists👷Update instanceof Internal\Operator\Gists\Update === false) {
            $this->gists👷Update = new Internal\Operator\Gists\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Update;
    }

    public function gists👷ListComments(): Internal\Operator\Gists\ListComments
    {
        if ($this->gists👷ListComments instanceof Internal\Operator\Gists\ListComments === false) {
            $this->gists👷ListComments = new Internal\Operator\Gists\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListComments;
    }

    public function gists👷ListCommentsListing(): Internal\Operator\Gists\ListCommentsListing
    {
        if ($this->gists👷ListCommentsListing instanceof Internal\Operator\Gists\ListCommentsListing === false) {
            $this->gists👷ListCommentsListing = new Internal\Operator\Gists\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListCommentsListing;
    }

    public function gists👷CreateComment(): Internal\Operator\Gists\CreateComment
    {
        if ($this->gists👷CreateComment instanceof Internal\Operator\Gists\CreateComment === false) {
            $this->gists👷CreateComment = new Internal\Operator\Gists\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷CreateComment;
    }

    public function gists👷GetComment(): Internal\Operator\Gists\GetComment
    {
        if ($this->gists👷GetComment instanceof Internal\Operator\Gists\GetComment === false) {
            $this->gists👷GetComment = new Internal\Operator\Gists\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷GetComment;
    }

    public function gists👷DeleteComment(): Internal\Operator\Gists\DeleteComment
    {
        if ($this->gists👷DeleteComment instanceof Internal\Operator\Gists\DeleteComment === false) {
            $this->gists👷DeleteComment = new Internal\Operator\Gists\DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷DeleteComment;
    }

    public function gists👷UpdateComment(): Internal\Operator\Gists\UpdateComment
    {
        if ($this->gists👷UpdateComment instanceof Internal\Operator\Gists\UpdateComment === false) {
            $this->gists👷UpdateComment = new Internal\Operator\Gists\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷UpdateComment;
    }

    public function gists👷ListCommits(): Internal\Operator\Gists\ListCommits
    {
        if ($this->gists👷ListCommits instanceof Internal\Operator\Gists\ListCommits === false) {
            $this->gists👷ListCommits = new Internal\Operator\Gists\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommits;
    }

    public function gists👷ListCommitsListing(): Internal\Operator\Gists\ListCommitsListing
    {
        if ($this->gists👷ListCommitsListing instanceof Internal\Operator\Gists\ListCommitsListing === false) {
            $this->gists👷ListCommitsListing = new Internal\Operator\Gists\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommitsListing;
    }

    public function gists👷ListForks(): Internal\Operator\Gists\ListForks
    {
        if ($this->gists👷ListForks instanceof Internal\Operator\Gists\ListForks === false) {
            $this->gists👷ListForks = new Internal\Operator\Gists\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForks;
    }

    public function gists👷ListForksListing(): Internal\Operator\Gists\ListForksListing
    {
        if ($this->gists👷ListForksListing instanceof Internal\Operator\Gists\ListForksListing === false) {
            $this->gists👷ListForksListing = new Internal\Operator\Gists\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForksListing;
    }

    public function gists👷Fork(): Internal\Operator\Gists\Fork
    {
        if ($this->gists👷Fork instanceof Internal\Operator\Gists\Fork === false) {
            $this->gists👷Fork = new Internal\Operator\Gists\Fork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷Fork;
    }

    public function gists👷CheckIsStarred(): Internal\Operator\Gists\CheckIsStarred
    {
        if ($this->gists👷CheckIsStarred instanceof Internal\Operator\Gists\CheckIsStarred === false) {
            $this->gists👷CheckIsStarred = new Internal\Operator\Gists\CheckIsStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷CheckIsStarred;
    }

    public function gists👷Star(): Internal\Operator\Gists\Star
    {
        if ($this->gists👷Star instanceof Internal\Operator\Gists\Star === false) {
            $this->gists👷Star = new Internal\Operator\Gists\Star($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Star;
    }

    public function gists👷Unstar(): Internal\Operator\Gists\Unstar
    {
        if ($this->gists👷Unstar instanceof Internal\Operator\Gists\Unstar === false) {
            $this->gists👷Unstar = new Internal\Operator\Gists\Unstar($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Unstar;
    }

    public function gists👷GetRevision(): Internal\Operator\Gists\GetRevision
    {
        if ($this->gists👷GetRevision instanceof Internal\Operator\Gists\GetRevision === false) {
            $this->gists👷GetRevision = new Internal\Operator\Gists\GetRevision($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Sha());
        }

        return $this->gists👷GetRevision;
    }

    public function gitignore👷GetAllTemplates(): Internal\Operator\Gitignore\GetAllTemplates
    {
        if ($this->gitignore👷GetAllTemplates instanceof Internal\Operator\Gitignore\GetAllTemplates === false) {
            $this->gitignore👷GetAllTemplates = new Internal\Operator\Gitignore\GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates());
        }

        return $this->gitignore👷GetAllTemplates;
    }

    public function gitignore👷GetTemplate(): Internal\Operator\Gitignore\GetTemplate
    {
        if ($this->gitignore👷GetTemplate instanceof Internal\Operator\Gitignore\GetTemplate === false) {
            $this->gitignore👷GetTemplate = new Internal\Operator\Gitignore\GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name());
        }

        return $this->gitignore👷GetTemplate;
    }

    public function apps👷ListReposAccessibleToInstallation(): Internal\Operator\Apps\ListReposAccessibleToInstallation
    {
        if ($this->apps👷ListReposAccessibleToInstallation instanceof Internal\Operator\Apps\ListReposAccessibleToInstallation === false) {
            $this->apps👷ListReposAccessibleToInstallation = new Internal\Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());
        }

        return $this->apps👷ListReposAccessibleToInstallation;
    }

    public function apps👷RevokeInstallationAccessToken(): Internal\Operator\Apps\RevokeInstallationAccessToken
    {
        if ($this->apps👷RevokeInstallationAccessToken instanceof Internal\Operator\Apps\RevokeInstallationAccessToken === false) {
            $this->apps👷RevokeInstallationAccessToken = new Internal\Operator\Apps\RevokeInstallationAccessToken($this->browser, $this->authentication);
        }

        return $this->apps👷RevokeInstallationAccessToken;
    }

    public function issues👷List_(): Internal\Operator\Issues\List_
    {
        if ($this->issues👷List_ instanceof Internal\Operator\Issues\List_ === false) {
            $this->issues👷List_ = new Internal\Operator\Issues\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷List_;
    }

    public function issues👷ListListing(): Internal\Operator\Issues\ListListing
    {
        if ($this->issues👷ListListing instanceof Internal\Operator\Issues\ListListing === false) {
            $this->issues👷ListListing = new Internal\Operator\Issues\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷ListListing;
    }

    public function licenses👷GetAllCommonlyUsed(): Internal\Operator\Licenses\GetAllCommonlyUsed
    {
        if ($this->licenses👷GetAllCommonlyUsed instanceof Internal\Operator\Licenses\GetAllCommonlyUsed === false) {
            $this->licenses👷GetAllCommonlyUsed = new Internal\Operator\Licenses\GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsed;
    }

    public function licenses👷GetAllCommonlyUsedListing(): Internal\Operator\Licenses\GetAllCommonlyUsedListing
    {
        if ($this->licenses👷GetAllCommonlyUsedListing instanceof Internal\Operator\Licenses\GetAllCommonlyUsedListing === false) {
            $this->licenses👷GetAllCommonlyUsedListing = new Internal\Operator\Licenses\GetAllCommonlyUsedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsedListing;
    }

    public function licenses👷Get(): Internal\Operator\Licenses\Get
    {
        if ($this->licenses👷Get instanceof Internal\Operator\Licenses\Get === false) {
            $this->licenses👷Get = new Internal\Operator\Licenses\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses🌀License());
        }

        return $this->licenses👷Get;
    }

    public function markdown👷Render(): Internal\Operator\Markdown\Render
    {
        if ($this->markdown👷Render instanceof Internal\Operator\Markdown\Render === false) {
            $this->markdown👷Render = new Internal\Operator\Markdown\Render($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown());
        }

        return $this->markdown👷Render;
    }

    public function markdown👷RenderRaw(): Internal\Operator\Markdown\RenderRaw
    {
        if ($this->markdown👷RenderRaw instanceof Internal\Operator\Markdown\RenderRaw === false) {
            $this->markdown👷RenderRaw = new Internal\Operator\Markdown\RenderRaw($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown🌀Raw());
        }

        return $this->markdown👷RenderRaw;
    }

    public function apps👷GetSubscriptionPlanForAccount(): Internal\Operator\Apps\GetSubscriptionPlanForAccount
    {
        if ($this->apps👷GetSubscriptionPlanForAccount instanceof Internal\Operator\Apps\GetSubscriptionPlanForAccount === false) {
            $this->apps👷GetSubscriptionPlanForAccount = new Internal\Operator\Apps\GetSubscriptionPlanForAccount($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId());
        }

        return $this->apps👷GetSubscriptionPlanForAccount;
    }

    public function apps👷ListPlans(): Internal\Operator\Apps\ListPlans
    {
        if ($this->apps👷ListPlans instanceof Internal\Operator\Apps\ListPlans === false) {
            $this->apps👷ListPlans = new Internal\Operator\Apps\ListPlans($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());
        }

        return $this->apps👷ListPlans;
    }

    public function apps👷ListPlansListing(): Internal\Operator\Apps\ListPlansListing
    {
        if ($this->apps👷ListPlansListing instanceof Internal\Operator\Apps\ListPlansListing === false) {
            $this->apps👷ListPlansListing = new Internal\Operator\Apps\ListPlansListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());
        }

        return $this->apps👷ListPlansListing;
    }

    public function apps👷ListAccountsForPlan(): Internal\Operator\Apps\ListAccountsForPlan
    {
        if ($this->apps👷ListAccountsForPlan instanceof Internal\Operator\Apps\ListAccountsForPlan === false) {
            $this->apps👷ListAccountsForPlan = new Internal\Operator\Apps\ListAccountsForPlan($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlan;
    }

    public function apps👷ListAccountsForPlanListing(): Internal\Operator\Apps\ListAccountsForPlanListing
    {
        if ($this->apps👷ListAccountsForPlanListing instanceof Internal\Operator\Apps\ListAccountsForPlanListing === false) {
            $this->apps👷ListAccountsForPlanListing = new Internal\Operator\Apps\ListAccountsForPlanListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanListing;
    }

    public function apps👷GetSubscriptionPlanForAccountStubbed(): Internal\Operator\Apps\GetSubscriptionPlanForAccountStubbed
    {
        if ($this->apps👷GetSubscriptionPlanForAccountStubbed instanceof Internal\Operator\Apps\GetSubscriptionPlanForAccountStubbed === false) {
            $this->apps👷GetSubscriptionPlanForAccountStubbed = new Internal\Operator\Apps\GetSubscriptionPlanForAccountStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId());
        }

        return $this->apps👷GetSubscriptionPlanForAccountStubbed;
    }

    public function apps👷ListPlansStubbed(): Internal\Operator\Apps\ListPlansStubbed
    {
        if ($this->apps👷ListPlansStubbed instanceof Internal\Operator\Apps\ListPlansStubbed === false) {
            $this->apps👷ListPlansStubbed = new Internal\Operator\Apps\ListPlansStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());
        }

        return $this->apps👷ListPlansStubbed;
    }

    public function apps👷ListPlansStubbedListing(): Internal\Operator\Apps\ListPlansStubbedListing
    {
        if ($this->apps👷ListPlansStubbedListing instanceof Internal\Operator\Apps\ListPlansStubbedListing === false) {
            $this->apps👷ListPlansStubbedListing = new Internal\Operator\Apps\ListPlansStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());
        }

        return $this->apps👷ListPlansStubbedListing;
    }

    public function apps👷ListAccountsForPlanStubbed(): Internal\Operator\Apps\ListAccountsForPlanStubbed
    {
        if ($this->apps👷ListAccountsForPlanStubbed instanceof Internal\Operator\Apps\ListAccountsForPlanStubbed === false) {
            $this->apps👷ListAccountsForPlanStubbed = new Internal\Operator\Apps\ListAccountsForPlanStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanStubbed;
    }

    public function apps👷ListAccountsForPlanStubbedListing(): Internal\Operator\Apps\ListAccountsForPlanStubbedListing
    {
        if ($this->apps👷ListAccountsForPlanStubbedListing instanceof Internal\Operator\Apps\ListAccountsForPlanStubbedListing === false) {
            $this->apps👷ListAccountsForPlanStubbedListing = new Internal\Operator\Apps\ListAccountsForPlanStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanStubbedListing;
    }

    public function meta👷Get(): Internal\Operator\Meta\Get
    {
        if ($this->meta👷Get instanceof Internal\Operator\Meta\Get === false) {
            $this->meta👷Get = new Internal\Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Meta());
        }

        return $this->meta👷Get;
    }

    public function activity👷ListPublicEventsForRepoNetwork(): Internal\Operator\Activity\ListPublicEventsForRepoNetwork
    {
        if ($this->activity👷ListPublicEventsForRepoNetwork instanceof Internal\Operator\Activity\ListPublicEventsForRepoNetwork === false) {
            $this->activity👷ListPublicEventsForRepoNetwork = new Internal\Operator\Activity\ListPublicEventsForRepoNetwork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListPublicEventsForRepoNetwork;
    }

    public function activity👷ListPublicEventsForRepoNetworkListing(): Internal\Operator\Activity\ListPublicEventsForRepoNetworkListing
    {
        if ($this->activity👷ListPublicEventsForRepoNetworkListing instanceof Internal\Operator\Activity\ListPublicEventsForRepoNetworkListing === false) {
            $this->activity👷ListPublicEventsForRepoNetworkListing = new Internal\Operator\Activity\ListPublicEventsForRepoNetworkListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListPublicEventsForRepoNetworkListing;
    }

    public function activity👷ListNotificationsForAuthenticatedUser(): Internal\Operator\Activity\ListNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUser instanceof Internal\Operator\Activity\ListNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListNotificationsForAuthenticatedUser = new Internal\Operator\Activity\ListNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUser;
    }

    public function activity👷ListNotificationsForAuthenticatedUserListing(): Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing === false) {
            $this->activity👷ListNotificationsForAuthenticatedUserListing = new Internal\Operator\Activity\ListNotificationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUserListing;
    }

    public function activity👷MarkNotificationsAsRead(): Internal\Operator\Activity\MarkNotificationsAsRead
    {
        if ($this->activity👷MarkNotificationsAsRead instanceof Internal\Operator\Activity\MarkNotificationsAsRead === false) {
            $this->activity👷MarkNotificationsAsRead = new Internal\Operator\Activity\MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷MarkNotificationsAsRead;
    }

    public function activity👷GetThread(): Internal\Operator\Activity\GetThread
    {
        if ($this->activity👷GetThread instanceof Internal\Operator\Activity\GetThread === false) {
            $this->activity👷GetThread = new Internal\Operator\Activity\GetThread($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷GetThread;
    }

    public function activity👷MarkThreadAsDone(): Internal\Operator\Activity\MarkThreadAsDone
    {
        if ($this->activity👷MarkThreadAsDone instanceof Internal\Operator\Activity\MarkThreadAsDone === false) {
            $this->activity👷MarkThreadAsDone = new Internal\Operator\Activity\MarkThreadAsDone($this->browser, $this->authentication);
        }

        return $this->activity👷MarkThreadAsDone;
    }

    public function activity👷MarkThreadAsRead(): Internal\Operator\Activity\MarkThreadAsRead
    {
        if ($this->activity👷MarkThreadAsRead instanceof Internal\Operator\Activity\MarkThreadAsRead === false) {
            $this->activity👷MarkThreadAsRead = new Internal\Operator\Activity\MarkThreadAsRead($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷MarkThreadAsRead;
    }

    public function activity👷GetThreadSubscriptionForAuthenticatedUser(): Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        if ($this->activity👷GetThreadSubscriptionForAuthenticatedUser instanceof Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser === false) {
            $this->activity👷GetThreadSubscriptionForAuthenticatedUser = new Internal\Operator\Activity\GetThreadSubscriptionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷GetThreadSubscriptionForAuthenticatedUser;
    }

    public function activity👷SetThreadSubscription(): Internal\Operator\Activity\SetThreadSubscription
    {
        if ($this->activity👷SetThreadSubscription instanceof Internal\Operator\Activity\SetThreadSubscription === false) {
            $this->activity👷SetThreadSubscription = new Internal\Operator\Activity\SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷SetThreadSubscription;
    }

    public function activity👷DeleteThreadSubscription(): Internal\Operator\Activity\DeleteThreadSubscription
    {
        if ($this->activity👷DeleteThreadSubscription instanceof Internal\Operator\Activity\DeleteThreadSubscription === false) {
            $this->activity👷DeleteThreadSubscription = new Internal\Operator\Activity\DeleteThreadSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷DeleteThreadSubscription;
    }

    public function meta👷GetOctocat(): Internal\Operator\Meta\GetOctocat
    {
        if ($this->meta👷GetOctocat instanceof Internal\Operator\Meta\GetOctocat === false) {
            $this->meta👷GetOctocat = new Internal\Operator\Meta\GetOctocat($this->browser, $this->authentication);
        }

        return $this->meta👷GetOctocat;
    }

    public function orgs👷List_(): Internal\Operator\Orgs\List_
    {
        if ($this->orgs👷List_ instanceof Internal\Operator\Orgs\List_ === false) {
            $this->orgs👷List_ = new Internal\Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->orgs👷List_;
    }

    public function orgs👷Get(): Internal\Operator\Orgs\Get
    {
        if ($this->orgs👷Get instanceof Internal\Operator\Orgs\Get === false) {
            $this->orgs👷Get = new Internal\Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Get;
    }

    public function orgs👷Delete(): Internal\Operator\Orgs\Delete
    {
        if ($this->orgs👷Delete instanceof Internal\Operator\Orgs\Delete === false) {
            $this->orgs👷Delete = new Internal\Operator\Orgs\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Delete;
    }

    public function orgs👷Update(): Internal\Operator\Orgs\Update
    {
        if ($this->orgs👷Update instanceof Internal\Operator\Orgs\Update === false) {
            $this->orgs👷Update = new Internal\Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Update;
    }

    public function actions👷GetActionsCacheUsageForOrg(): Internal\Operator\Actions\GetActionsCacheUsageForOrg
    {
        if ($this->actions👷GetActionsCacheUsageForOrg instanceof Internal\Operator\Actions\GetActionsCacheUsageForOrg === false) {
            $this->actions👷GetActionsCacheUsageForOrg = new Internal\Operator\Actions\GetActionsCacheUsageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage());
        }

        return $this->actions👷GetActionsCacheUsageForOrg;
    }

    public function actions👷GetActionsCacheUsageByRepoForOrg(): Internal\Operator\Actions\GetActionsCacheUsageByRepoForOrg
    {
        if ($this->actions👷GetActionsCacheUsageByRepoForOrg instanceof Internal\Operator\Actions\GetActionsCacheUsageByRepoForOrg === false) {
            $this->actions👷GetActionsCacheUsageByRepoForOrg = new Internal\Operator\Actions\GetActionsCacheUsageByRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository());
        }

        return $this->actions👷GetActionsCacheUsageByRepoForOrg;
    }

    public function oidc👷GetOidcCustomSubTemplateForOrg(): Internal\Operator\Oidc\GetOidcCustomSubTemplateForOrg
    {
        if ($this->oidc👷GetOidcCustomSubTemplateForOrg instanceof Internal\Operator\Oidc\GetOidcCustomSubTemplateForOrg === false) {
            $this->oidc👷GetOidcCustomSubTemplateForOrg = new Internal\Operator\Oidc\GetOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->oidc👷GetOidcCustomSubTemplateForOrg;
    }

    public function oidc👷UpdateOidcCustomSubTemplateForOrg(): Internal\Operator\Oidc\UpdateOidcCustomSubTemplateForOrg
    {
        if ($this->oidc👷UpdateOidcCustomSubTemplateForOrg instanceof Internal\Operator\Oidc\UpdateOidcCustomSubTemplateForOrg === false) {
            $this->oidc👷UpdateOidcCustomSubTemplateForOrg = new Internal\Operator\Oidc\UpdateOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->oidc👷UpdateOidcCustomSubTemplateForOrg;
    }

    public function actions👷GetGithubActionsPermissionsOrganization(): Internal\Operator\Actions\GetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsPermissionsOrganization instanceof Internal\Operator\Actions\GetGithubActionsPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsPermissionsOrganization = new Internal\Operator\Actions\GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsOrganization;
    }

    public function actions👷SetGithubActionsPermissionsOrganization(): Internal\Operator\Actions\SetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsPermissionsOrganization instanceof Internal\Operator\Actions\SetGithubActionsPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsPermissionsOrganization = new Internal\Operator\Actions\SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsOrganization;
    }

    public function actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization(): Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization instanceof Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization = new Internal\Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization(): Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization instanceof Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization = new Internal\Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷EnableSelectedRepositoryGithubActionsOrganization(): Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷EnableSelectedRepositoryGithubActionsOrganization instanceof Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷EnableSelectedRepositoryGithubActionsOrganization = new Internal\Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷EnableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷DisableSelectedRepositoryGithubActionsOrganization(): Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷DisableSelectedRepositoryGithubActionsOrganization instanceof Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷DisableSelectedRepositoryGithubActionsOrganization = new Internal\Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷DisableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷GetAllowedActionsOrganization(): Internal\Operator\Actions\GetAllowedActionsOrganization
    {
        if ($this->actions👷GetAllowedActionsOrganization instanceof Internal\Operator\Actions\GetAllowedActionsOrganization === false) {
            $this->actions👷GetAllowedActionsOrganization = new Internal\Operator\Actions\GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsOrganization;
    }

    public function actions👷SetAllowedActionsOrganization(): Internal\Operator\Actions\SetAllowedActionsOrganization
    {
        if ($this->actions👷SetAllowedActionsOrganization instanceof Internal\Operator\Actions\SetAllowedActionsOrganization === false) {
            $this->actions👷SetAllowedActionsOrganization = new Internal\Operator\Actions\SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsOrganization;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization(): Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization instanceof Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization = new Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization(): Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization instanceof Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization = new Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷ListSelfHostedRunnersForOrg(): Internal\Operator\Actions\ListSelfHostedRunnersForOrg
    {
        if ($this->actions👷ListSelfHostedRunnersForOrg instanceof Internal\Operator\Actions\ListSelfHostedRunnersForOrg === false) {
            $this->actions👷ListSelfHostedRunnersForOrg = new Internal\Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForOrg;
    }

    public function actions👷ListRunnerApplicationsForOrg(): Internal\Operator\Actions\ListRunnerApplicationsForOrg
    {
        if ($this->actions👷ListRunnerApplicationsForOrg instanceof Internal\Operator\Actions\ListRunnerApplicationsForOrg === false) {
            $this->actions👷ListRunnerApplicationsForOrg = new Internal\Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForOrg;
    }

    public function actions👷GenerateRunnerJitconfigForOrg(): Internal\Operator\Actions\GenerateRunnerJitconfigForOrg
    {
        if ($this->actions👷GenerateRunnerJitconfigForOrg instanceof Internal\Operator\Actions\GenerateRunnerJitconfigForOrg === false) {
            $this->actions👷GenerateRunnerJitconfigForOrg = new Internal\Operator\Actions\GenerateRunnerJitconfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->actions👷GenerateRunnerJitconfigForOrg;
    }

    public function actions👷CreateRegistrationTokenForOrg(): Internal\Operator\Actions\CreateRegistrationTokenForOrg
    {
        if ($this->actions👷CreateRegistrationTokenForOrg instanceof Internal\Operator\Actions\CreateRegistrationTokenForOrg === false) {
            $this->actions👷CreateRegistrationTokenForOrg = new Internal\Operator\Actions\CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForOrg;
    }

    public function actions👷CreateRemoveTokenForOrg(): Internal\Operator\Actions\CreateRemoveTokenForOrg
    {
        if ($this->actions👷CreateRemoveTokenForOrg instanceof Internal\Operator\Actions\CreateRemoveTokenForOrg === false) {
            $this->actions👷CreateRemoveTokenForOrg = new Internal\Operator\Actions\CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForOrg;
    }

    public function actions👷GetSelfHostedRunnerForOrg(): Internal\Operator\Actions\GetSelfHostedRunnerForOrg
    {
        if ($this->actions👷GetSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\GetSelfHostedRunnerForOrg === false) {
            $this->actions👷GetSelfHostedRunnerForOrg = new Internal\Operator\Actions\GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForOrg;
    }

    public function actions👷DeleteSelfHostedRunnerFromOrg(): Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromOrg instanceof Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg === false) {
            $this->actions👷DeleteSelfHostedRunnerFromOrg = new Internal\Operator\Actions\DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromOrg;
    }

    public function actions👷ListLabelsForSelfHostedRunnerForOrg(): Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForOrg
    {
        if ($this->actions👷ListLabelsForSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForOrg === false) {
            $this->actions👷ListLabelsForSelfHostedRunnerForOrg = new Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷ListLabelsForSelfHostedRunnerForOrg;
    }

    public function actions👷SetCustomLabelsForSelfHostedRunnerForOrg(): Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg
    {
        if ($this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg === false) {
            $this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg = new Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg;
    }

    public function actions👷AddCustomLabelsToSelfHostedRunnerForOrg(): Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg
    {
        if ($this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg === false) {
            $this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg = new Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg;
    }

    public function actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg(): Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg
    {
        if ($this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg === false) {
            $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg = new Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg;
    }

    public function actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg(): Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg
    {
        if ($this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg instanceof Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg === false) {
            $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg = new Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg;
    }

    public function actions👷ListOrgSecrets(): Internal\Operator\Actions\ListOrgSecrets
    {
        if ($this->actions👷ListOrgSecrets instanceof Internal\Operator\Actions\ListOrgSecrets === false) {
            $this->actions👷ListOrgSecrets = new Internal\Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets());
        }

        return $this->actions👷ListOrgSecrets;
    }

    public function actions👷GetOrgPublicKey(): Internal\Operator\Actions\GetOrgPublicKey
    {
        if ($this->actions👷GetOrgPublicKey instanceof Internal\Operator\Actions\GetOrgPublicKey === false) {
            $this->actions👷GetOrgPublicKey = new Internal\Operator\Actions\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetOrgPublicKey;
    }

    public function actions👷GetOrgSecret(): Internal\Operator\Actions\GetOrgSecret
    {
        if ($this->actions👷GetOrgSecret instanceof Internal\Operator\Actions\GetOrgSecret === false) {
            $this->actions👷GetOrgSecret = new Internal\Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetOrgSecret;
    }

    public function actions👷CreateOrUpdateOrgSecret(): Internal\Operator\Actions\CreateOrUpdateOrgSecret
    {
        if ($this->actions👷CreateOrUpdateOrgSecret instanceof Internal\Operator\Actions\CreateOrUpdateOrgSecret === false) {
            $this->actions👷CreateOrUpdateOrgSecret = new Internal\Operator\Actions\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateOrgSecret;
    }

    public function actions👷DeleteOrgSecret(): Internal\Operator\Actions\DeleteOrgSecret
    {
        if ($this->actions👷DeleteOrgSecret instanceof Internal\Operator\Actions\DeleteOrgSecret === false) {
            $this->actions👷DeleteOrgSecret = new Internal\Operator\Actions\DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgSecret;
    }

    public function actions👷ListSelectedReposForOrgSecret(): Internal\Operator\Actions\ListSelectedReposForOrgSecret
    {
        if ($this->actions👷ListSelectedReposForOrgSecret instanceof Internal\Operator\Actions\ListSelectedReposForOrgSecret === false) {
            $this->actions👷ListSelectedReposForOrgSecret = new Internal\Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgSecret;
    }

    public function actions👷SetSelectedReposForOrgSecret(): Internal\Operator\Actions\SetSelectedReposForOrgSecret
    {
        if ($this->actions👷SetSelectedReposForOrgSecret instanceof Internal\Operator\Actions\SetSelectedReposForOrgSecret === false) {
            $this->actions👷SetSelectedReposForOrgSecret = new Internal\Operator\Actions\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgSecret;
    }

    public function actions👷AddSelectedRepoToOrgSecret(): Internal\Operator\Actions\AddSelectedRepoToOrgSecret
    {
        if ($this->actions👷AddSelectedRepoToOrgSecret instanceof Internal\Operator\Actions\AddSelectedRepoToOrgSecret === false) {
            $this->actions👷AddSelectedRepoToOrgSecret = new Internal\Operator\Actions\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgSecret;
    }

    public function actions👷RemoveSelectedRepoFromOrgSecret(): Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgSecret instanceof Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret === false) {
            $this->actions👷RemoveSelectedRepoFromOrgSecret = new Internal\Operator\Actions\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgSecret;
    }

    public function actions👷ListOrgVariables(): Internal\Operator\Actions\ListOrgVariables
    {
        if ($this->actions👷ListOrgVariables instanceof Internal\Operator\Actions\ListOrgVariables === false) {
            $this->actions👷ListOrgVariables = new Internal\Operator\Actions\ListOrgVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->actions👷ListOrgVariables;
    }

    public function actions👷CreateOrgVariable(): Internal\Operator\Actions\CreateOrgVariable
    {
        if ($this->actions👷CreateOrgVariable instanceof Internal\Operator\Actions\CreateOrgVariable === false) {
            $this->actions👷CreateOrgVariable = new Internal\Operator\Actions\CreateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->actions👷CreateOrgVariable;
    }

    public function actions👷GetOrgVariable(): Internal\Operator\Actions\GetOrgVariable
    {
        if ($this->actions👷GetOrgVariable instanceof Internal\Operator\Actions\GetOrgVariable === false) {
            $this->actions👷GetOrgVariable = new Internal\Operator\Actions\GetOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name());
        }

        return $this->actions👷GetOrgVariable;
    }

    public function actions👷DeleteOrgVariable(): Internal\Operator\Actions\DeleteOrgVariable
    {
        if ($this->actions👷DeleteOrgVariable instanceof Internal\Operator\Actions\DeleteOrgVariable === false) {
            $this->actions👷DeleteOrgVariable = new Internal\Operator\Actions\DeleteOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgVariable;
    }

    public function actions👷UpdateOrgVariable(): Internal\Operator\Actions\UpdateOrgVariable
    {
        if ($this->actions👷UpdateOrgVariable instanceof Internal\Operator\Actions\UpdateOrgVariable === false) {
            $this->actions👷UpdateOrgVariable = new Internal\Operator\Actions\UpdateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateOrgVariable;
    }

    public function actions👷ListSelectedReposForOrgVariable(): Internal\Operator\Actions\ListSelectedReposForOrgVariable
    {
        if ($this->actions👷ListSelectedReposForOrgVariable instanceof Internal\Operator\Actions\ListSelectedReposForOrgVariable === false) {
            $this->actions👷ListSelectedReposForOrgVariable = new Internal\Operator\Actions\ListSelectedReposForOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgVariable;
    }

    public function actions👷SetSelectedReposForOrgVariable(): Internal\Operator\Actions\SetSelectedReposForOrgVariable
    {
        if ($this->actions👷SetSelectedReposForOrgVariable instanceof Internal\Operator\Actions\SetSelectedReposForOrgVariable === false) {
            $this->actions👷SetSelectedReposForOrgVariable = new Internal\Operator\Actions\SetSelectedReposForOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgVariable;
    }

    public function actions👷AddSelectedRepoToOrgVariable(): Internal\Operator\Actions\AddSelectedRepoToOrgVariable
    {
        if ($this->actions👷AddSelectedRepoToOrgVariable instanceof Internal\Operator\Actions\AddSelectedRepoToOrgVariable === false) {
            $this->actions👷AddSelectedRepoToOrgVariable = new Internal\Operator\Actions\AddSelectedRepoToOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgVariable;
    }

    public function actions👷RemoveSelectedRepoFromOrgVariable(): Internal\Operator\Actions\RemoveSelectedRepoFromOrgVariable
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgVariable instanceof Internal\Operator\Actions\RemoveSelectedRepoFromOrgVariable === false) {
            $this->actions👷RemoveSelectedRepoFromOrgVariable = new Internal\Operator\Actions\RemoveSelectedRepoFromOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgVariable;
    }

    public function orgs👷ListBlockedUsers(): Internal\Operator\Orgs\ListBlockedUsers
    {
        if ($this->orgs👷ListBlockedUsers instanceof Internal\Operator\Orgs\ListBlockedUsers === false) {
            $this->orgs👷ListBlockedUsers = new Internal\Operator\Orgs\ListBlockedUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());
        }

        return $this->orgs👷ListBlockedUsers;
    }

    public function orgs👷ListBlockedUsersListing(): Internal\Operator\Orgs\ListBlockedUsersListing
    {
        if ($this->orgs👷ListBlockedUsersListing instanceof Internal\Operator\Orgs\ListBlockedUsersListing === false) {
            $this->orgs👷ListBlockedUsersListing = new Internal\Operator\Orgs\ListBlockedUsersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());
        }

        return $this->orgs👷ListBlockedUsersListing;
    }

    public function orgs👷CheckBlockedUser(): Internal\Operator\Orgs\CheckBlockedUser
    {
        if ($this->orgs👷CheckBlockedUser instanceof Internal\Operator\Orgs\CheckBlockedUser === false) {
            $this->orgs👷CheckBlockedUser = new Internal\Operator\Orgs\CheckBlockedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->orgs👷CheckBlockedUser;
    }

    public function orgs👷BlockUser(): Internal\Operator\Orgs\BlockUser
    {
        if ($this->orgs👷BlockUser instanceof Internal\Operator\Orgs\BlockUser === false) {
            $this->orgs👷BlockUser = new Internal\Operator\Orgs\BlockUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->orgs👷BlockUser;
    }

    public function orgs👷UnblockUser(): Internal\Operator\Orgs\UnblockUser
    {
        if ($this->orgs👷UnblockUser instanceof Internal\Operator\Orgs\UnblockUser === false) {
            $this->orgs👷UnblockUser = new Internal\Operator\Orgs\UnblockUser($this->browser, $this->authentication);
        }

        return $this->orgs👷UnblockUser;
    }

    public function codeScanning👷ListAlertsForOrg(): Internal\Operator\CodeScanning\ListAlertsForOrg
    {
        if ($this->codeScanning👷ListAlertsForOrg instanceof Internal\Operator\CodeScanning\ListAlertsForOrg === false) {
            $this->codeScanning👷ListAlertsForOrg = new Internal\Operator\CodeScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrg;
    }

    public function codeScanning👷ListAlertsForOrgListing(): Internal\Operator\CodeScanning\ListAlertsForOrgListing
    {
        if ($this->codeScanning👷ListAlertsForOrgListing instanceof Internal\Operator\CodeScanning\ListAlertsForOrgListing === false) {
            $this->codeScanning👷ListAlertsForOrgListing = new Internal\Operator\CodeScanning\ListAlertsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrgListing;
    }

    public function codespaces👷ListInOrganization(): Internal\Operator\Codespaces\ListInOrganization
    {
        if ($this->codespaces👷ListInOrganization instanceof Internal\Operator\Codespaces\ListInOrganization === false) {
            $this->codespaces👷ListInOrganization = new Internal\Operator\Codespaces\ListInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces());
        }

        return $this->codespaces👷ListInOrganization;
    }

    public function codespaces👷SetCodespacesAccess(): Internal\Operator\Codespaces\SetCodespacesAccess
    {
        if ($this->codespaces👷SetCodespacesAccess instanceof Internal\Operator\Codespaces\SetCodespacesAccess === false) {
            $this->codespaces👷SetCodespacesAccess = new Internal\Operator\Codespaces\SetCodespacesAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access());
        }

        return $this->codespaces👷SetCodespacesAccess;
    }

    public function codespaces👷SetCodespacesAccessUsers(): Internal\Operator\Codespaces\SetCodespacesAccessUsers
    {
        if ($this->codespaces👷SetCodespacesAccessUsers instanceof Internal\Operator\Codespaces\SetCodespacesAccessUsers === false) {
            $this->codespaces👷SetCodespacesAccessUsers = new Internal\Operator\Codespaces\SetCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());
        }

        return $this->codespaces👷SetCodespacesAccessUsers;
    }

    public function codespaces👷DeleteCodespacesAccessUsers(): Internal\Operator\Codespaces\DeleteCodespacesAccessUsers
    {
        if ($this->codespaces👷DeleteCodespacesAccessUsers instanceof Internal\Operator\Codespaces\DeleteCodespacesAccessUsers === false) {
            $this->codespaces👷DeleteCodespacesAccessUsers = new Internal\Operator\Codespaces\DeleteCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());
        }

        return $this->codespaces👷DeleteCodespacesAccessUsers;
    }

    public function codespaces👷ListOrgSecrets(): Internal\Operator\Codespaces\ListOrgSecrets
    {
        if ($this->codespaces👷ListOrgSecrets instanceof Internal\Operator\Codespaces\ListOrgSecrets === false) {
            $this->codespaces👷ListOrgSecrets = new Internal\Operator\Codespaces\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListOrgSecrets;
    }

    public function codespaces👷GetOrgPublicKey(): Internal\Operator\Codespaces\GetOrgPublicKey
    {
        if ($this->codespaces👷GetOrgPublicKey instanceof Internal\Operator\Codespaces\GetOrgPublicKey === false) {
            $this->codespaces👷GetOrgPublicKey = new Internal\Operator\Codespaces\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetOrgPublicKey;
    }

    public function codespaces👷GetOrgSecret(): Internal\Operator\Codespaces\GetOrgSecret
    {
        if ($this->codespaces👷GetOrgSecret instanceof Internal\Operator\Codespaces\GetOrgSecret === false) {
            $this->codespaces👷GetOrgSecret = new Internal\Operator\Codespaces\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetOrgSecret;
    }

    public function codespaces👷CreateOrUpdateOrgSecret(): Internal\Operator\Codespaces\CreateOrUpdateOrgSecret
    {
        if ($this->codespaces👷CreateOrUpdateOrgSecret instanceof Internal\Operator\Codespaces\CreateOrUpdateOrgSecret === false) {
            $this->codespaces👷CreateOrUpdateOrgSecret = new Internal\Operator\Codespaces\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateOrgSecret;
    }

    public function codespaces👷DeleteOrgSecret(): Internal\Operator\Codespaces\DeleteOrgSecret
    {
        if ($this->codespaces👷DeleteOrgSecret instanceof Internal\Operator\Codespaces\DeleteOrgSecret === false) {
            $this->codespaces👷DeleteOrgSecret = new Internal\Operator\Codespaces\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷DeleteOrgSecret;
    }

    public function codespaces👷ListSelectedReposForOrgSecret(): Internal\Operator\Codespaces\ListSelectedReposForOrgSecret
    {
        if ($this->codespaces👷ListSelectedReposForOrgSecret instanceof Internal\Operator\Codespaces\ListSelectedReposForOrgSecret === false) {
            $this->codespaces👷ListSelectedReposForOrgSecret = new Internal\Operator\Codespaces\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷ListSelectedReposForOrgSecret;
    }

    public function codespaces👷SetSelectedReposForOrgSecret(): Internal\Operator\Codespaces\SetSelectedReposForOrgSecret
    {
        if ($this->codespaces👷SetSelectedReposForOrgSecret instanceof Internal\Operator\Codespaces\SetSelectedReposForOrgSecret === false) {
            $this->codespaces👷SetSelectedReposForOrgSecret = new Internal\Operator\Codespaces\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷SetSelectedReposForOrgSecret;
    }

    public function codespaces👷AddSelectedRepoToOrgSecret(): Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret
    {
        if ($this->codespaces👷AddSelectedRepoToOrgSecret instanceof Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret === false) {
            $this->codespaces👷AddSelectedRepoToOrgSecret = new Internal\Operator\Codespaces\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷AddSelectedRepoToOrgSecret;
    }

    public function codespaces👷RemoveSelectedRepoFromOrgSecret(): Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->codespaces👷RemoveSelectedRepoFromOrgSecret instanceof Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret === false) {
            $this->codespaces👷RemoveSelectedRepoFromOrgSecret = new Internal\Operator\Codespaces\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷RemoveSelectedRepoFromOrgSecret;
    }

    public function copilot👷GetCopilotOrganizationDetails(): Internal\Operator\Copilot\GetCopilotOrganizationDetails
    {
        if ($this->copilot👷GetCopilotOrganizationDetails instanceof Internal\Operator\Copilot\GetCopilotOrganizationDetails === false) {
            $this->copilot👷GetCopilotOrganizationDetails = new Internal\Operator\Copilot\GetCopilotOrganizationDetails($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing());
        }

        return $this->copilot👷GetCopilotOrganizationDetails;
    }

    public function copilot👷ListCopilotSeats(): Internal\Operator\Copilot\ListCopilotSeats
    {
        if ($this->copilot👷ListCopilotSeats instanceof Internal\Operator\Copilot\ListCopilotSeats === false) {
            $this->copilot👷ListCopilotSeats = new Internal\Operator\Copilot\ListCopilotSeats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats());
        }

        return $this->copilot👷ListCopilotSeats;
    }

    public function copilot👷AddCopilotSeatsForTeams(): Internal\Operator\Copilot\AddCopilotSeatsForTeams
    {
        if ($this->copilot👷AddCopilotSeatsForTeams instanceof Internal\Operator\Copilot\AddCopilotSeatsForTeams === false) {
            $this->copilot👷AddCopilotSeatsForTeams = new Internal\Operator\Copilot\AddCopilotSeatsForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->copilot👷AddCopilotSeatsForTeams;
    }

    public function copilot👷CancelCopilotSeatAssignmentForTeams(): Internal\Operator\Copilot\CancelCopilotSeatAssignmentForTeams
    {
        if ($this->copilot👷CancelCopilotSeatAssignmentForTeams instanceof Internal\Operator\Copilot\CancelCopilotSeatAssignmentForTeams === false) {
            $this->copilot👷CancelCopilotSeatAssignmentForTeams = new Internal\Operator\Copilot\CancelCopilotSeatAssignmentForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->copilot👷CancelCopilotSeatAssignmentForTeams;
    }

    public function copilot👷AddCopilotSeatsForUsers(): Internal\Operator\Copilot\AddCopilotSeatsForUsers
    {
        if ($this->copilot👷AddCopilotSeatsForUsers instanceof Internal\Operator\Copilot\AddCopilotSeatsForUsers === false) {
            $this->copilot👷AddCopilotSeatsForUsers = new Internal\Operator\Copilot\AddCopilotSeatsForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->copilot👷AddCopilotSeatsForUsers;
    }

    public function copilot👷CancelCopilotSeatAssignmentForUsers(): Internal\Operator\Copilot\CancelCopilotSeatAssignmentForUsers
    {
        if ($this->copilot👷CancelCopilotSeatAssignmentForUsers instanceof Internal\Operator\Copilot\CancelCopilotSeatAssignmentForUsers === false) {
            $this->copilot👷CancelCopilotSeatAssignmentForUsers = new Internal\Operator\Copilot\CancelCopilotSeatAssignmentForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->copilot👷CancelCopilotSeatAssignmentForUsers;
    }

    public function copilot👷UsageMetricsForOrg(): Internal\Operator\Copilot\UsageMetricsForOrg
    {
        if ($this->copilot👷UsageMetricsForOrg instanceof Internal\Operator\Copilot\UsageMetricsForOrg === false) {
            $this->copilot👷UsageMetricsForOrg = new Internal\Operator\Copilot\UsageMetricsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForOrg;
    }

    public function copilot👷UsageMetricsForOrgListing(): Internal\Operator\Copilot\UsageMetricsForOrgListing
    {
        if ($this->copilot👷UsageMetricsForOrgListing instanceof Internal\Operator\Copilot\UsageMetricsForOrgListing === false) {
            $this->copilot👷UsageMetricsForOrgListing = new Internal\Operator\Copilot\UsageMetricsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForOrgListing;
    }

    public function dependabot👷ListAlertsForOrg(): Internal\Operator\Dependabot\ListAlertsForOrg
    {
        if ($this->dependabot👷ListAlertsForOrg instanceof Internal\Operator\Dependabot\ListAlertsForOrg === false) {
            $this->dependabot👷ListAlertsForOrg = new Internal\Operator\Dependabot\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForOrg;
    }

    public function dependabot👷ListOrgSecrets(): Internal\Operator\Dependabot\ListOrgSecrets
    {
        if ($this->dependabot👷ListOrgSecrets instanceof Internal\Operator\Dependabot\ListOrgSecrets === false) {
            $this->dependabot👷ListOrgSecrets = new Internal\Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets());
        }

        return $this->dependabot👷ListOrgSecrets;
    }

    public function dependabot👷GetOrgPublicKey(): Internal\Operator\Dependabot\GetOrgPublicKey
    {
        if ($this->dependabot👷GetOrgPublicKey instanceof Internal\Operator\Dependabot\GetOrgPublicKey === false) {
            $this->dependabot👷GetOrgPublicKey = new Internal\Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->dependabot👷GetOrgPublicKey;
    }

    public function dependabot👷GetOrgSecret(): Internal\Operator\Dependabot\GetOrgSecret
    {
        if ($this->dependabot👷GetOrgSecret instanceof Internal\Operator\Dependabot\GetOrgSecret === false) {
            $this->dependabot👷GetOrgSecret = new Internal\Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷GetOrgSecret;
    }

    public function dependabot👷CreateOrUpdateOrgSecret(): Internal\Operator\Dependabot\CreateOrUpdateOrgSecret
    {
        if ($this->dependabot👷CreateOrUpdateOrgSecret instanceof Internal\Operator\Dependabot\CreateOrUpdateOrgSecret === false) {
            $this->dependabot👷CreateOrUpdateOrgSecret = new Internal\Operator\Dependabot\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷CreateOrUpdateOrgSecret;
    }

    public function dependabot👷DeleteOrgSecret(): Internal\Operator\Dependabot\DeleteOrgSecret
    {
        if ($this->dependabot👷DeleteOrgSecret instanceof Internal\Operator\Dependabot\DeleteOrgSecret === false) {
            $this->dependabot👷DeleteOrgSecret = new Internal\Operator\Dependabot\DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷DeleteOrgSecret;
    }

    public function dependabot👷ListSelectedReposForOrgSecret(): Internal\Operator\Dependabot\ListSelectedReposForOrgSecret
    {
        if ($this->dependabot👷ListSelectedReposForOrgSecret instanceof Internal\Operator\Dependabot\ListSelectedReposForOrgSecret === false) {
            $this->dependabot👷ListSelectedReposForOrgSecret = new Internal\Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->dependabot👷ListSelectedReposForOrgSecret;
    }

    public function dependabot👷SetSelectedReposForOrgSecret(): Internal\Operator\Dependabot\SetSelectedReposForOrgSecret
    {
        if ($this->dependabot👷SetSelectedReposForOrgSecret instanceof Internal\Operator\Dependabot\SetSelectedReposForOrgSecret === false) {
            $this->dependabot👷SetSelectedReposForOrgSecret = new Internal\Operator\Dependabot\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->dependabot👷SetSelectedReposForOrgSecret;
    }

    public function dependabot👷AddSelectedRepoToOrgSecret(): Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret
    {
        if ($this->dependabot👷AddSelectedRepoToOrgSecret instanceof Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret === false) {
            $this->dependabot👷AddSelectedRepoToOrgSecret = new Internal\Operator\Dependabot\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷AddSelectedRepoToOrgSecret;
    }

    public function dependabot👷RemoveSelectedRepoFromOrgSecret(): Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->dependabot👷RemoveSelectedRepoFromOrgSecret instanceof Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret === false) {
            $this->dependabot👷RemoveSelectedRepoFromOrgSecret = new Internal\Operator\Dependabot\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷RemoveSelectedRepoFromOrgSecret;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForOrganization(): Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForOrganization instanceof Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForOrganization = new Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForOrganization;
    }

    public function activity👷ListPublicOrgEvents(): Internal\Operator\Activity\ListPublicOrgEvents
    {
        if ($this->activity👷ListPublicOrgEvents instanceof Internal\Operator\Activity\ListPublicOrgEvents === false) {
            $this->activity👷ListPublicOrgEvents = new Internal\Operator\Activity\ListPublicOrgEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events());
        }

        return $this->activity👷ListPublicOrgEvents;
    }

    public function activity👷ListPublicOrgEventsListing(): Internal\Operator\Activity\ListPublicOrgEventsListing
    {
        if ($this->activity👷ListPublicOrgEventsListing instanceof Internal\Operator\Activity\ListPublicOrgEventsListing === false) {
            $this->activity👷ListPublicOrgEventsListing = new Internal\Operator\Activity\ListPublicOrgEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events());
        }

        return $this->activity👷ListPublicOrgEventsListing;
    }

    public function orgs👷ListFailedInvitations(): Internal\Operator\Orgs\ListFailedInvitations
    {
        if ($this->orgs👷ListFailedInvitations instanceof Internal\Operator\Orgs\ListFailedInvitations === false) {
            $this->orgs👷ListFailedInvitations = new Internal\Operator\Orgs\ListFailedInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());
        }

        return $this->orgs👷ListFailedInvitations;
    }

    public function orgs👷ListFailedInvitationsListing(): Internal\Operator\Orgs\ListFailedInvitationsListing
    {
        if ($this->orgs👷ListFailedInvitationsListing instanceof Internal\Operator\Orgs\ListFailedInvitationsListing === false) {
            $this->orgs👷ListFailedInvitationsListing = new Internal\Operator\Orgs\ListFailedInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());
        }

        return $this->orgs👷ListFailedInvitationsListing;
    }

    public function orgs👷ListWebhooks(): Internal\Operator\Orgs\ListWebhooks
    {
        if ($this->orgs👷ListWebhooks instanceof Internal\Operator\Orgs\ListWebhooks === false) {
            $this->orgs👷ListWebhooks = new Internal\Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooks;
    }

    public function orgs👷ListWebhooksListing(): Internal\Operator\Orgs\ListWebhooksListing
    {
        if ($this->orgs👷ListWebhooksListing instanceof Internal\Operator\Orgs\ListWebhooksListing === false) {
            $this->orgs👷ListWebhooksListing = new Internal\Operator\Orgs\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooksListing;
    }

    public function orgs👷CreateWebhook(): Internal\Operator\Orgs\CreateWebhook
    {
        if ($this->orgs👷CreateWebhook instanceof Internal\Operator\Orgs\CreateWebhook === false) {
            $this->orgs👷CreateWebhook = new Internal\Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷CreateWebhook;
    }

    public function orgs👷GetWebhook(): Internal\Operator\Orgs\GetWebhook
    {
        if ($this->orgs👷GetWebhook instanceof Internal\Operator\Orgs\GetWebhook === false) {
            $this->orgs👷GetWebhook = new Internal\Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷GetWebhook;
    }

    public function orgs👷DeleteWebhook(): Internal\Operator\Orgs\DeleteWebhook
    {
        if ($this->orgs👷DeleteWebhook instanceof Internal\Operator\Orgs\DeleteWebhook === false) {
            $this->orgs👷DeleteWebhook = new Internal\Operator\Orgs\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷DeleteWebhook;
    }

    public function orgs👷UpdateWebhook(): Internal\Operator\Orgs\UpdateWebhook
    {
        if ($this->orgs👷UpdateWebhook instanceof Internal\Operator\Orgs\UpdateWebhook === false) {
            $this->orgs👷UpdateWebhook = new Internal\Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷UpdateWebhook;
    }

    public function orgs👷GetWebhookConfigForOrg(): Internal\Operator\Orgs\GetWebhookConfigForOrg
    {
        if ($this->orgs👷GetWebhookConfigForOrg instanceof Internal\Operator\Orgs\GetWebhookConfigForOrg === false) {
            $this->orgs👷GetWebhookConfigForOrg = new Internal\Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷GetWebhookConfigForOrg;
    }

    public function orgs👷UpdateWebhookConfigForOrg(): Internal\Operator\Orgs\UpdateWebhookConfigForOrg
    {
        if ($this->orgs👷UpdateWebhookConfigForOrg instanceof Internal\Operator\Orgs\UpdateWebhookConfigForOrg === false) {
            $this->orgs👷UpdateWebhookConfigForOrg = new Internal\Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷UpdateWebhookConfigForOrg;
    }

    public function orgs👷ListWebhookDeliveries(): Internal\Operator\Orgs\ListWebhookDeliveries
    {
        if ($this->orgs👷ListWebhookDeliveries instanceof Internal\Operator\Orgs\ListWebhookDeliveries === false) {
            $this->orgs👷ListWebhookDeliveries = new Internal\Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->orgs👷ListWebhookDeliveries;
    }

    public function orgs👷GetWebhookDelivery(): Internal\Operator\Orgs\GetWebhookDelivery
    {
        if ($this->orgs👷GetWebhookDelivery instanceof Internal\Operator\Orgs\GetWebhookDelivery === false) {
            $this->orgs👷GetWebhookDelivery = new Internal\Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->orgs👷GetWebhookDelivery;
    }

    public function orgs👷RedeliverWebhookDelivery(): Internal\Operator\Orgs\RedeliverWebhookDelivery
    {
        if ($this->orgs👷RedeliverWebhookDelivery instanceof Internal\Operator\Orgs\RedeliverWebhookDelivery === false) {
            $this->orgs👷RedeliverWebhookDelivery = new Internal\Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->orgs👷RedeliverWebhookDelivery;
    }

    public function orgs👷PingWebhook(): Internal\Operator\Orgs\PingWebhook
    {
        if ($this->orgs👷PingWebhook instanceof Internal\Operator\Orgs\PingWebhook === false) {
            $this->orgs👷PingWebhook = new Internal\Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->orgs👷PingWebhook;
    }

    public function apps👷GetOrgInstallation(): Internal\Operator\Apps\GetOrgInstallation
    {
        if ($this->apps👷GetOrgInstallation instanceof Internal\Operator\Apps\GetOrgInstallation === false) {
            $this->apps👷GetOrgInstallation = new Internal\Operator\Apps\GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());
        }

        return $this->apps👷GetOrgInstallation;
    }

    public function orgs👷ListAppInstallations(): Internal\Operator\Orgs\ListAppInstallations
    {
        if ($this->orgs👷ListAppInstallations instanceof Internal\Operator\Orgs\ListAppInstallations === false) {
            $this->orgs👷ListAppInstallations = new Internal\Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->orgs👷ListAppInstallations;
    }

    public function interactions👷GetRestrictionsForOrg(): Internal\Operator\Interactions\GetRestrictionsForOrg
    {
        if ($this->interactions👷GetRestrictionsForOrg instanceof Internal\Operator\Interactions\GetRestrictionsForOrg === false) {
            $this->interactions👷GetRestrictionsForOrg = new Internal\Operator\Interactions\GetRestrictionsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForOrg;
    }

    public function interactions👷SetRestrictionsForOrg(): Internal\Operator\Interactions\SetRestrictionsForOrg
    {
        if ($this->interactions👷SetRestrictionsForOrg instanceof Internal\Operator\Interactions\SetRestrictionsForOrg === false) {
            $this->interactions👷SetRestrictionsForOrg = new Internal\Operator\Interactions\SetRestrictionsForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForOrg;
    }

    public function interactions👷RemoveRestrictionsForOrg(): Internal\Operator\Interactions\RemoveRestrictionsForOrg
    {
        if ($this->interactions👷RemoveRestrictionsForOrg instanceof Internal\Operator\Interactions\RemoveRestrictionsForOrg === false) {
            $this->interactions👷RemoveRestrictionsForOrg = new Internal\Operator\Interactions\RemoveRestrictionsForOrg($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForOrg;
    }

    public function orgs👷ListPendingInvitations(): Internal\Operator\Orgs\ListPendingInvitations
    {
        if ($this->orgs👷ListPendingInvitations instanceof Internal\Operator\Orgs\ListPendingInvitations === false) {
            $this->orgs👷ListPendingInvitations = new Internal\Operator\Orgs\ListPendingInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷ListPendingInvitations;
    }

    public function orgs👷ListPendingInvitationsListing(): Internal\Operator\Orgs\ListPendingInvitationsListing
    {
        if ($this->orgs👷ListPendingInvitationsListing instanceof Internal\Operator\Orgs\ListPendingInvitationsListing === false) {
            $this->orgs👷ListPendingInvitationsListing = new Internal\Operator\Orgs\ListPendingInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷ListPendingInvitationsListing;
    }

    public function orgs👷CreateInvitation(): Internal\Operator\Orgs\CreateInvitation
    {
        if ($this->orgs👷CreateInvitation instanceof Internal\Operator\Orgs\CreateInvitation === false) {
            $this->orgs👷CreateInvitation = new Internal\Operator\Orgs\CreateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷CreateInvitation;
    }

    public function orgs👷CancelInvitation(): Internal\Operator\Orgs\CancelInvitation
    {
        if ($this->orgs👷CancelInvitation instanceof Internal\Operator\Orgs\CancelInvitation === false) {
            $this->orgs👷CancelInvitation = new Internal\Operator\Orgs\CancelInvitation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId());
        }

        return $this->orgs👷CancelInvitation;
    }

    public function orgs👷ListInvitationTeams(): Internal\Operator\Orgs\ListInvitationTeams
    {
        if ($this->orgs👷ListInvitationTeams instanceof Internal\Operator\Orgs\ListInvitationTeams === false) {
            $this->orgs👷ListInvitationTeams = new Internal\Operator\Orgs\ListInvitationTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());
        }

        return $this->orgs👷ListInvitationTeams;
    }

    public function orgs👷ListInvitationTeamsListing(): Internal\Operator\Orgs\ListInvitationTeamsListing
    {
        if ($this->orgs👷ListInvitationTeamsListing instanceof Internal\Operator\Orgs\ListInvitationTeamsListing === false) {
            $this->orgs👷ListInvitationTeamsListing = new Internal\Operator\Orgs\ListInvitationTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());
        }

        return $this->orgs👷ListInvitationTeamsListing;
    }

    public function issues👷ListForOrg(): Internal\Operator\Issues\ListForOrg
    {
        if ($this->issues👷ListForOrg instanceof Internal\Operator\Issues\ListForOrg === false) {
            $this->issues👷ListForOrg = new Internal\Operator\Issues\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrg;
    }

    public function issues👷ListForOrgListing(): Internal\Operator\Issues\ListForOrgListing
    {
        if ($this->issues👷ListForOrgListing instanceof Internal\Operator\Issues\ListForOrgListing === false) {
            $this->issues👷ListForOrgListing = new Internal\Operator\Issues\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrgListing;
    }

    public function orgs👷ListMembers(): Internal\Operator\Orgs\ListMembers
    {
        if ($this->orgs👷ListMembers instanceof Internal\Operator\Orgs\ListMembers === false) {
            $this->orgs👷ListMembers = new Internal\Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembers;
    }

    public function orgs👷ListMembersListing(): Internal\Operator\Orgs\ListMembersListing
    {
        if ($this->orgs👷ListMembersListing instanceof Internal\Operator\Orgs\ListMembersListing === false) {
            $this->orgs👷ListMembersListing = new Internal\Operator\Orgs\ListMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembersListing;
    }

    public function orgs👷CheckMembershipForUser(): Internal\Operator\Orgs\CheckMembershipForUser
    {
        if ($this->orgs👷CheckMembershipForUser instanceof Internal\Operator\Orgs\CheckMembershipForUser === false) {
            $this->orgs👷CheckMembershipForUser = new Internal\Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckMembershipForUser;
    }

    public function orgs👷RemoveMember(): Internal\Operator\Orgs\RemoveMember
    {
        if ($this->orgs👷RemoveMember instanceof Internal\Operator\Orgs\RemoveMember === false) {
            $this->orgs👷RemoveMember = new Internal\Operator\Orgs\RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->orgs👷RemoveMember;
    }

    public function codespaces👷GetCodespacesForUserInOrg(): Internal\Operator\Codespaces\GetCodespacesForUserInOrg
    {
        if ($this->codespaces👷GetCodespacesForUserInOrg instanceof Internal\Operator\Codespaces\GetCodespacesForUserInOrg === false) {
            $this->codespaces👷GetCodespacesForUserInOrg = new Internal\Operator\Codespaces\GetCodespacesForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces());
        }

        return $this->codespaces👷GetCodespacesForUserInOrg;
    }

    public function codespaces👷DeleteFromOrganization(): Internal\Operator\Codespaces\DeleteFromOrganization
    {
        if ($this->codespaces👷DeleteFromOrganization instanceof Internal\Operator\Codespaces\DeleteFromOrganization === false) {
            $this->codespaces👷DeleteFromOrganization = new Internal\Operator\Codespaces\DeleteFromOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷DeleteFromOrganization;
    }

    public function codespaces👷StopInOrganization(): Internal\Operator\Codespaces\StopInOrganization
    {
        if ($this->codespaces👷StopInOrganization instanceof Internal\Operator\Codespaces\StopInOrganization === false) {
            $this->codespaces👷StopInOrganization = new Internal\Operator\Codespaces\StopInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->codespaces👷StopInOrganization;
    }

    public function copilot👷GetCopilotSeatDetailsForUser(): Internal\Operator\Copilot\GetCopilotSeatDetailsForUser
    {
        if ($this->copilot👷GetCopilotSeatDetailsForUser instanceof Internal\Operator\Copilot\GetCopilotSeatDetailsForUser === false) {
            $this->copilot👷GetCopilotSeatDetailsForUser = new Internal\Operator\Copilot\GetCopilotSeatDetailsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot());
        }

        return $this->copilot👷GetCopilotSeatDetailsForUser;
    }

    public function orgs👷GetMembershipForUser(): Internal\Operator\Orgs\GetMembershipForUser
    {
        if ($this->orgs👷GetMembershipForUser instanceof Internal\Operator\Orgs\GetMembershipForUser === false) {
            $this->orgs👷GetMembershipForUser = new Internal\Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷GetMembershipForUser;
    }

    public function orgs👷SetMembershipForUser(): Internal\Operator\Orgs\SetMembershipForUser
    {
        if ($this->orgs👷SetMembershipForUser instanceof Internal\Operator\Orgs\SetMembershipForUser === false) {
            $this->orgs👷SetMembershipForUser = new Internal\Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷SetMembershipForUser;
    }

    public function orgs👷RemoveMembershipForUser(): Internal\Operator\Orgs\RemoveMembershipForUser
    {
        if ($this->orgs👷RemoveMembershipForUser instanceof Internal\Operator\Orgs\RemoveMembershipForUser === false) {
            $this->orgs👷RemoveMembershipForUser = new Internal\Operator\Orgs\RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷RemoveMembershipForUser;
    }

    public function migrations👷ListForOrg(): Internal\Operator\Migrations\ListForOrg
    {
        if ($this->migrations👷ListForOrg instanceof Internal\Operator\Migrations\ListForOrg === false) {
            $this->migrations👷ListForOrg = new Internal\Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrg;
    }

    public function migrations👷ListForOrgListing(): Internal\Operator\Migrations\ListForOrgListing
    {
        if ($this->migrations👷ListForOrgListing instanceof Internal\Operator\Migrations\ListForOrgListing === false) {
            $this->migrations👷ListForOrgListing = new Internal\Operator\Migrations\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrgListing;
    }

    public function migrations👷StartForOrg(): Internal\Operator\Migrations\StartForOrg
    {
        if ($this->migrations👷StartForOrg instanceof Internal\Operator\Migrations\StartForOrg === false) {
            $this->migrations👷StartForOrg = new Internal\Operator\Migrations\StartForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷StartForOrg;
    }

    public function migrations👷GetStatusForOrg(): Internal\Operator\Migrations\GetStatusForOrg
    {
        if ($this->migrations👷GetStatusForOrg instanceof Internal\Operator\Migrations\GetStatusForOrg === false) {
            $this->migrations👷GetStatusForOrg = new Internal\Operator\Migrations\GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForOrg;
    }

    public function migrations👷DownloadArchiveForOrg(): Internal\Operator\Migrations\DownloadArchiveForOrg
    {
        if ($this->migrations👷DownloadArchiveForOrg instanceof Internal\Operator\Migrations\DownloadArchiveForOrg === false) {
            $this->migrations👷DownloadArchiveForOrg = new Internal\Operator\Migrations\DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrg;
    }

    public function migrations👷DownloadArchiveForOrgStreaming(): Internal\Operator\Migrations\DownloadArchiveForOrgStreaming
    {
        if ($this->migrations👷DownloadArchiveForOrgStreaming instanceof Internal\Operator\Migrations\DownloadArchiveForOrgStreaming === false) {
            $this->migrations👷DownloadArchiveForOrgStreaming = new Internal\Operator\Migrations\DownloadArchiveForOrgStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrgStreaming;
    }

    public function migrations👷DeleteArchiveForOrg(): Internal\Operator\Migrations\DeleteArchiveForOrg
    {
        if ($this->migrations👷DeleteArchiveForOrg instanceof Internal\Operator\Migrations\DeleteArchiveForOrg === false) {
            $this->migrations👷DeleteArchiveForOrg = new Internal\Operator\Migrations\DeleteArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForOrg;
    }

    public function migrations👷UnlockRepoForOrg(): Internal\Operator\Migrations\UnlockRepoForOrg
    {
        if ($this->migrations👷UnlockRepoForOrg instanceof Internal\Operator\Migrations\UnlockRepoForOrg === false) {
            $this->migrations👷UnlockRepoForOrg = new Internal\Operator\Migrations\UnlockRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForOrg;
    }

    public function migrations👷ListReposForOrg(): Internal\Operator\Migrations\ListReposForOrg
    {
        if ($this->migrations👷ListReposForOrg instanceof Internal\Operator\Migrations\ListReposForOrg === false) {
            $this->migrations👷ListReposForOrg = new Internal\Operator\Migrations\ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrg;
    }

    public function migrations👷ListReposForOrgListing(): Internal\Operator\Migrations\ListReposForOrgListing
    {
        if ($this->migrations👷ListReposForOrgListing instanceof Internal\Operator\Migrations\ListReposForOrgListing === false) {
            $this->migrations👷ListReposForOrgListing = new Internal\Operator\Migrations\ListReposForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrgListing;
    }

    public function orgs👷ListOrganizationFineGrainedPermissions(): Internal\Operator\Orgs\ListOrganizationFineGrainedPermissions
    {
        if ($this->orgs👷ListOrganizationFineGrainedPermissions instanceof Internal\Operator\Orgs\ListOrganizationFineGrainedPermissions === false) {
            $this->orgs👷ListOrganizationFineGrainedPermissions = new Internal\Operator\Orgs\ListOrganizationFineGrainedPermissions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions());
        }

        return $this->orgs👷ListOrganizationFineGrainedPermissions;
    }

    public function orgs👷ListOrgRoles(): Internal\Operator\Orgs\ListOrgRoles
    {
        if ($this->orgs👷ListOrgRoles instanceof Internal\Operator\Orgs\ListOrgRoles === false) {
            $this->orgs👷ListOrgRoles = new Internal\Operator\Orgs\ListOrgRoles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles());
        }

        return $this->orgs👷ListOrgRoles;
    }

    public function orgs👷CreateCustomOrganizationRole(): Internal\Operator\Orgs\CreateCustomOrganizationRole
    {
        if ($this->orgs👷CreateCustomOrganizationRole instanceof Internal\Operator\Orgs\CreateCustomOrganizationRole === false) {
            $this->orgs👷CreateCustomOrganizationRole = new Internal\Operator\Orgs\CreateCustomOrganizationRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles());
        }

        return $this->orgs👷CreateCustomOrganizationRole;
    }

    public function orgs👷RevokeAllOrgRolesTeam(): Internal\Operator\Orgs\RevokeAllOrgRolesTeam
    {
        if ($this->orgs👷RevokeAllOrgRolesTeam instanceof Internal\Operator\Orgs\RevokeAllOrgRolesTeam === false) {
            $this->orgs👷RevokeAllOrgRolesTeam = new Internal\Operator\Orgs\RevokeAllOrgRolesTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeAllOrgRolesTeam;
    }

    public function orgs👷AssignTeamToOrgRole(): Internal\Operator\Orgs\AssignTeamToOrgRole
    {
        if ($this->orgs👷AssignTeamToOrgRole instanceof Internal\Operator\Orgs\AssignTeamToOrgRole === false) {
            $this->orgs👷AssignTeamToOrgRole = new Internal\Operator\Orgs\AssignTeamToOrgRole($this->browser, $this->authentication);
        }

        return $this->orgs👷AssignTeamToOrgRole;
    }

    public function orgs👷RevokeOrgRoleTeam(): Internal\Operator\Orgs\RevokeOrgRoleTeam
    {
        if ($this->orgs👷RevokeOrgRoleTeam instanceof Internal\Operator\Orgs\RevokeOrgRoleTeam === false) {
            $this->orgs👷RevokeOrgRoleTeam = new Internal\Operator\Orgs\RevokeOrgRoleTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeOrgRoleTeam;
    }

    public function orgs👷RevokeAllOrgRolesUser(): Internal\Operator\Orgs\RevokeAllOrgRolesUser
    {
        if ($this->orgs👷RevokeAllOrgRolesUser instanceof Internal\Operator\Orgs\RevokeAllOrgRolesUser === false) {
            $this->orgs👷RevokeAllOrgRolesUser = new Internal\Operator\Orgs\RevokeAllOrgRolesUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeAllOrgRolesUser;
    }

    public function orgs👷AssignUserToOrgRole(): Internal\Operator\Orgs\AssignUserToOrgRole
    {
        if ($this->orgs👷AssignUserToOrgRole instanceof Internal\Operator\Orgs\AssignUserToOrgRole === false) {
            $this->orgs👷AssignUserToOrgRole = new Internal\Operator\Orgs\AssignUserToOrgRole($this->browser, $this->authentication);
        }

        return $this->orgs👷AssignUserToOrgRole;
    }

    public function orgs👷RevokeOrgRoleUser(): Internal\Operator\Orgs\RevokeOrgRoleUser
    {
        if ($this->orgs👷RevokeOrgRoleUser instanceof Internal\Operator\Orgs\RevokeOrgRoleUser === false) {
            $this->orgs👷RevokeOrgRoleUser = new Internal\Operator\Orgs\RevokeOrgRoleUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RevokeOrgRoleUser;
    }

    public function orgs👷GetOrgRole(): Internal\Operator\Orgs\GetOrgRole
    {
        if ($this->orgs👷GetOrgRole instanceof Internal\Operator\Orgs\GetOrgRole === false) {
            $this->orgs👷GetOrgRole = new Internal\Operator\Orgs\GetOrgRole($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId());
        }

        return $this->orgs👷GetOrgRole;
    }

    public function orgs👷DeleteCustomOrganizationRole(): Internal\Operator\Orgs\DeleteCustomOrganizationRole
    {
        if ($this->orgs👷DeleteCustomOrganizationRole instanceof Internal\Operator\Orgs\DeleteCustomOrganizationRole === false) {
            $this->orgs👷DeleteCustomOrganizationRole = new Internal\Operator\Orgs\DeleteCustomOrganizationRole($this->browser, $this->authentication);
        }

        return $this->orgs👷DeleteCustomOrganizationRole;
    }

    public function orgs👷PatchCustomOrganizationRole(): Internal\Operator\Orgs\PatchCustomOrganizationRole
    {
        if ($this->orgs👷PatchCustomOrganizationRole instanceof Internal\Operator\Orgs\PatchCustomOrganizationRole === false) {
            $this->orgs👷PatchCustomOrganizationRole = new Internal\Operator\Orgs\PatchCustomOrganizationRole($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId());
        }

        return $this->orgs👷PatchCustomOrganizationRole;
    }

    public function orgs👷ListOrgRoleTeams(): Internal\Operator\Orgs\ListOrgRoleTeams
    {
        if ($this->orgs👷ListOrgRoleTeams instanceof Internal\Operator\Orgs\ListOrgRoleTeams === false) {
            $this->orgs👷ListOrgRoleTeams = new Internal\Operator\Orgs\ListOrgRoleTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams());
        }

        return $this->orgs👷ListOrgRoleTeams;
    }

    public function orgs👷ListOrgRoleTeamsListing(): Internal\Operator\Orgs\ListOrgRoleTeamsListing
    {
        if ($this->orgs👷ListOrgRoleTeamsListing instanceof Internal\Operator\Orgs\ListOrgRoleTeamsListing === false) {
            $this->orgs👷ListOrgRoleTeamsListing = new Internal\Operator\Orgs\ListOrgRoleTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams());
        }

        return $this->orgs👷ListOrgRoleTeamsListing;
    }

    public function orgs👷ListOrgRoleUsers(): Internal\Operator\Orgs\ListOrgRoleUsers
    {
        if ($this->orgs👷ListOrgRoleUsers instanceof Internal\Operator\Orgs\ListOrgRoleUsers === false) {
            $this->orgs👷ListOrgRoleUsers = new Internal\Operator\Orgs\ListOrgRoleUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users());
        }

        return $this->orgs👷ListOrgRoleUsers;
    }

    public function orgs👷ListOrgRoleUsersListing(): Internal\Operator\Orgs\ListOrgRoleUsersListing
    {
        if ($this->orgs👷ListOrgRoleUsersListing instanceof Internal\Operator\Orgs\ListOrgRoleUsersListing === false) {
            $this->orgs👷ListOrgRoleUsersListing = new Internal\Operator\Orgs\ListOrgRoleUsersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users());
        }

        return $this->orgs👷ListOrgRoleUsersListing;
    }

    public function orgs👷ListOutsideCollaborators(): Internal\Operator\Orgs\ListOutsideCollaborators
    {
        if ($this->orgs👷ListOutsideCollaborators instanceof Internal\Operator\Orgs\ListOutsideCollaborators === false) {
            $this->orgs👷ListOutsideCollaborators = new Internal\Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaborators;
    }

    public function orgs👷ListOutsideCollaboratorsListing(): Internal\Operator\Orgs\ListOutsideCollaboratorsListing
    {
        if ($this->orgs👷ListOutsideCollaboratorsListing instanceof Internal\Operator\Orgs\ListOutsideCollaboratorsListing === false) {
            $this->orgs👷ListOutsideCollaboratorsListing = new Internal\Operator\Orgs\ListOutsideCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaboratorsListing;
    }

    public function orgs👷ConvertMemberToOutsideCollaborator(): Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator
    {
        if ($this->orgs👷ConvertMemberToOutsideCollaborator instanceof Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator === false) {
            $this->orgs👷ConvertMemberToOutsideCollaborator = new Internal\Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷ConvertMemberToOutsideCollaborator;
    }

    public function orgs👷RemoveOutsideCollaborator(): Internal\Operator\Orgs\RemoveOutsideCollaborator
    {
        if ($this->orgs👷RemoveOutsideCollaborator instanceof Internal\Operator\Orgs\RemoveOutsideCollaborator === false) {
            $this->orgs👷RemoveOutsideCollaborator = new Internal\Operator\Orgs\RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷RemoveOutsideCollaborator;
    }

    public function packages👷ListPackagesForOrganization(): Internal\Operator\Packages\ListPackagesForOrganization
    {
        if ($this->packages👷ListPackagesForOrganization instanceof Internal\Operator\Packages\ListPackagesForOrganization === false) {
            $this->packages👷ListPackagesForOrganization = new Internal\Operator\Packages\ListPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages());
        }

        return $this->packages👷ListPackagesForOrganization;
    }

    public function packages👷ListPackagesForOrganizationListing(): Internal\Operator\Packages\ListPackagesForOrganizationListing
    {
        if ($this->packages👷ListPackagesForOrganizationListing instanceof Internal\Operator\Packages\ListPackagesForOrganizationListing === false) {
            $this->packages👷ListPackagesForOrganizationListing = new Internal\Operator\Packages\ListPackagesForOrganizationListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages());
        }

        return $this->packages👷ListPackagesForOrganizationListing;
    }

    public function packages👷GetPackageForOrganization(): Internal\Operator\Packages\GetPackageForOrganization
    {
        if ($this->packages👷GetPackageForOrganization instanceof Internal\Operator\Packages\GetPackageForOrganization === false) {
            $this->packages👷GetPackageForOrganization = new Internal\Operator\Packages\GetPackageForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForOrganization;
    }

    public function packages👷DeletePackageForOrg(): Internal\Operator\Packages\DeletePackageForOrg
    {
        if ($this->packages👷DeletePackageForOrg instanceof Internal\Operator\Packages\DeletePackageForOrg === false) {
            $this->packages👷DeletePackageForOrg = new Internal\Operator\Packages\DeletePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForOrg;
    }

    public function packages👷RestorePackageForOrg(): Internal\Operator\Packages\RestorePackageForOrg
    {
        if ($this->packages👷RestorePackageForOrg instanceof Internal\Operator\Packages\RestorePackageForOrg === false) {
            $this->packages👷RestorePackageForOrg = new Internal\Operator\Packages\RestorePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForOrg;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByOrg(): Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByOrg instanceof Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByOrg = new Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByOrg;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByOrgListing(): Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing instanceof Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing = new Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing;
    }

    public function packages👷GetPackageVersionForOrganization(): Internal\Operator\Packages\GetPackageVersionForOrganization
    {
        if ($this->packages👷GetPackageVersionForOrganization instanceof Internal\Operator\Packages\GetPackageVersionForOrganization === false) {
            $this->packages👷GetPackageVersionForOrganization = new Internal\Operator\Packages\GetPackageVersionForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForOrganization;
    }

    public function packages👷DeletePackageVersionForOrg(): Internal\Operator\Packages\DeletePackageVersionForOrg
    {
        if ($this->packages👷DeletePackageVersionForOrg instanceof Internal\Operator\Packages\DeletePackageVersionForOrg === false) {
            $this->packages👷DeletePackageVersionForOrg = new Internal\Operator\Packages\DeletePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForOrg;
    }

    public function packages👷RestorePackageVersionForOrg(): Internal\Operator\Packages\RestorePackageVersionForOrg
    {
        if ($this->packages👷RestorePackageVersionForOrg instanceof Internal\Operator\Packages\RestorePackageVersionForOrg === false) {
            $this->packages👷RestorePackageVersionForOrg = new Internal\Operator\Packages\RestorePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForOrg;
    }

    public function orgs👷ListPatGrantRequests(): Internal\Operator\Orgs\ListPatGrantRequests
    {
        if ($this->orgs👷ListPatGrantRequests instanceof Internal\Operator\Orgs\ListPatGrantRequests === false) {
            $this->orgs👷ListPatGrantRequests = new Internal\Operator\Orgs\ListPatGrantRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ListPatGrantRequests;
    }

    public function orgs👷ListPatGrantRequestsListing(): Internal\Operator\Orgs\ListPatGrantRequestsListing
    {
        if ($this->orgs👷ListPatGrantRequestsListing instanceof Internal\Operator\Orgs\ListPatGrantRequestsListing === false) {
            $this->orgs👷ListPatGrantRequestsListing = new Internal\Operator\Orgs\ListPatGrantRequestsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ListPatGrantRequestsListing;
    }

    public function orgs👷ReviewPatGrantRequestsInBulk(): Internal\Operator\Orgs\ReviewPatGrantRequestsInBulk
    {
        if ($this->orgs👷ReviewPatGrantRequestsInBulk instanceof Internal\Operator\Orgs\ReviewPatGrantRequestsInBulk === false) {
            $this->orgs👷ReviewPatGrantRequestsInBulk = new Internal\Operator\Orgs\ReviewPatGrantRequestsInBulk($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ReviewPatGrantRequestsInBulk;
    }

    public function orgs👷ReviewPatGrantRequest(): Internal\Operator\Orgs\ReviewPatGrantRequest
    {
        if ($this->orgs👷ReviewPatGrantRequest instanceof Internal\Operator\Orgs\ReviewPatGrantRequest === false) {
            $this->orgs👷ReviewPatGrantRequest = new Internal\Operator\Orgs\ReviewPatGrantRequest($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId());
        }

        return $this->orgs👷ReviewPatGrantRequest;
    }

    public function orgs👷ListPatGrantRequestRepositories(): Internal\Operator\Orgs\ListPatGrantRequestRepositories
    {
        if ($this->orgs👷ListPatGrantRequestRepositories instanceof Internal\Operator\Orgs\ListPatGrantRequestRepositories === false) {
            $this->orgs👷ListPatGrantRequestRepositories = new Internal\Operator\Orgs\ListPatGrantRequestRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRequestRepositories;
    }

    public function orgs👷ListPatGrantRequestRepositoriesListing(): Internal\Operator\Orgs\ListPatGrantRequestRepositoriesListing
    {
        if ($this->orgs👷ListPatGrantRequestRepositoriesListing instanceof Internal\Operator\Orgs\ListPatGrantRequestRepositoriesListing === false) {
            $this->orgs👷ListPatGrantRequestRepositoriesListing = new Internal\Operator\Orgs\ListPatGrantRequestRepositoriesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRequestRepositoriesListing;
    }

    public function orgs👷ListPatGrants(): Internal\Operator\Orgs\ListPatGrants
    {
        if ($this->orgs👷ListPatGrants instanceof Internal\Operator\Orgs\ListPatGrants === false) {
            $this->orgs👷ListPatGrants = new Internal\Operator\Orgs\ListPatGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷ListPatGrants;
    }

    public function orgs👷ListPatGrantsListing(): Internal\Operator\Orgs\ListPatGrantsListing
    {
        if ($this->orgs👷ListPatGrantsListing instanceof Internal\Operator\Orgs\ListPatGrantsListing === false) {
            $this->orgs👷ListPatGrantsListing = new Internal\Operator\Orgs\ListPatGrantsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷ListPatGrantsListing;
    }

    public function orgs👷UpdatePatAccesses(): Internal\Operator\Orgs\UpdatePatAccesses
    {
        if ($this->orgs👷UpdatePatAccesses instanceof Internal\Operator\Orgs\UpdatePatAccesses === false) {
            $this->orgs👷UpdatePatAccesses = new Internal\Operator\Orgs\UpdatePatAccesses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷UpdatePatAccesses;
    }

    public function orgs👷UpdatePatAccess(): Internal\Operator\Orgs\UpdatePatAccess
    {
        if ($this->orgs👷UpdatePatAccess instanceof Internal\Operator\Orgs\UpdatePatAccess === false) {
            $this->orgs👷UpdatePatAccess = new Internal\Operator\Orgs\UpdatePatAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId());
        }

        return $this->orgs👷UpdatePatAccess;
    }

    public function orgs👷ListPatGrantRepositories(): Internal\Operator\Orgs\ListPatGrantRepositories
    {
        if ($this->orgs👷ListPatGrantRepositories instanceof Internal\Operator\Orgs\ListPatGrantRepositories === false) {
            $this->orgs👷ListPatGrantRepositories = new Internal\Operator\Orgs\ListPatGrantRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRepositories;
    }

    public function orgs👷ListPatGrantRepositoriesListing(): Internal\Operator\Orgs\ListPatGrantRepositoriesListing
    {
        if ($this->orgs👷ListPatGrantRepositoriesListing instanceof Internal\Operator\Orgs\ListPatGrantRepositoriesListing === false) {
            $this->orgs👷ListPatGrantRepositoriesListing = new Internal\Operator\Orgs\ListPatGrantRepositoriesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRepositoriesListing;
    }

    public function projects👷ListForOrg(): Internal\Operator\Projects\ListForOrg
    {
        if ($this->projects👷ListForOrg instanceof Internal\Operator\Projects\ListForOrg === false) {
            $this->projects👷ListForOrg = new Internal\Operator\Projects\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrg;
    }

    public function projects👷ListForOrgListing(): Internal\Operator\Projects\ListForOrgListing
    {
        if ($this->projects👷ListForOrgListing instanceof Internal\Operator\Projects\ListForOrgListing === false) {
            $this->projects👷ListForOrgListing = new Internal\Operator\Projects\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrgListing;
    }

    public function projects👷CreateForOrg(): Internal\Operator\Projects\CreateForOrg
    {
        if ($this->projects👷CreateForOrg instanceof Internal\Operator\Projects\CreateForOrg === false) {
            $this->projects👷CreateForOrg = new Internal\Operator\Projects\CreateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷CreateForOrg;
    }

    public function orgs👷GetAllCustomProperties(): Internal\Operator\Orgs\GetAllCustomProperties
    {
        if ($this->orgs👷GetAllCustomProperties instanceof Internal\Operator\Orgs\GetAllCustomProperties === false) {
            $this->orgs👷GetAllCustomProperties = new Internal\Operator\Orgs\GetAllCustomProperties($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema());
        }

        return $this->orgs👷GetAllCustomProperties;
    }

    public function orgs👷CreateOrUpdateCustomProperties(): Internal\Operator\Orgs\CreateOrUpdateCustomProperties
    {
        if ($this->orgs👷CreateOrUpdateCustomProperties instanceof Internal\Operator\Orgs\CreateOrUpdateCustomProperties === false) {
            $this->orgs👷CreateOrUpdateCustomProperties = new Internal\Operator\Orgs\CreateOrUpdateCustomProperties($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema());
        }

        return $this->orgs👷CreateOrUpdateCustomProperties;
    }

    public function orgs👷GetCustomProperty(): Internal\Operator\Orgs\GetCustomProperty
    {
        if ($this->orgs👷GetCustomProperty instanceof Internal\Operator\Orgs\GetCustomProperty === false) {
            $this->orgs👷GetCustomProperty = new Internal\Operator\Orgs\GetCustomProperty($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());
        }

        return $this->orgs👷GetCustomProperty;
    }

    public function orgs👷CreateOrUpdateCustomProperty(): Internal\Operator\Orgs\CreateOrUpdateCustomProperty
    {
        if ($this->orgs👷CreateOrUpdateCustomProperty instanceof Internal\Operator\Orgs\CreateOrUpdateCustomProperty === false) {
            $this->orgs👷CreateOrUpdateCustomProperty = new Internal\Operator\Orgs\CreateOrUpdateCustomProperty($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());
        }

        return $this->orgs👷CreateOrUpdateCustomProperty;
    }

    public function orgs👷RemoveCustomProperty(): Internal\Operator\Orgs\RemoveCustomProperty
    {
        if ($this->orgs👷RemoveCustomProperty instanceof Internal\Operator\Orgs\RemoveCustomProperty === false) {
            $this->orgs👷RemoveCustomProperty = new Internal\Operator\Orgs\RemoveCustomProperty($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName());
        }

        return $this->orgs👷RemoveCustomProperty;
    }

    public function orgs👷ListCustomPropertiesValuesForRepos(): Internal\Operator\Orgs\ListCustomPropertiesValuesForRepos
    {
        if ($this->orgs👷ListCustomPropertiesValuesForRepos instanceof Internal\Operator\Orgs\ListCustomPropertiesValuesForRepos === false) {
            $this->orgs👷ListCustomPropertiesValuesForRepos = new Internal\Operator\Orgs\ListCustomPropertiesValuesForRepos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());
        }

        return $this->orgs👷ListCustomPropertiesValuesForRepos;
    }

    public function orgs👷ListCustomPropertiesValuesForReposListing(): Internal\Operator\Orgs\ListCustomPropertiesValuesForReposListing
    {
        if ($this->orgs👷ListCustomPropertiesValuesForReposListing instanceof Internal\Operator\Orgs\ListCustomPropertiesValuesForReposListing === false) {
            $this->orgs👷ListCustomPropertiesValuesForReposListing = new Internal\Operator\Orgs\ListCustomPropertiesValuesForReposListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());
        }

        return $this->orgs👷ListCustomPropertiesValuesForReposListing;
    }

    public function orgs👷CreateOrUpdateCustomPropertiesValuesForRepos(): Internal\Operator\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos
    {
        if ($this->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos instanceof Internal\Operator\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos === false) {
            $this->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos = new Internal\Operator\Orgs\CreateOrUpdateCustomPropertiesValuesForRepos($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values());
        }

        return $this->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos;
    }

    public function orgs👷ListPublicMembers(): Internal\Operator\Orgs\ListPublicMembers
    {
        if ($this->orgs👷ListPublicMembers instanceof Internal\Operator\Orgs\ListPublicMembers === false) {
            $this->orgs👷ListPublicMembers = new Internal\Operator\Orgs\ListPublicMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->orgs👷ListPublicMembers;
    }

    public function orgs👷ListPublicMembersListing(): Internal\Operator\Orgs\ListPublicMembersListing
    {
        if ($this->orgs👷ListPublicMembersListing instanceof Internal\Operator\Orgs\ListPublicMembersListing === false) {
            $this->orgs👷ListPublicMembersListing = new Internal\Operator\Orgs\ListPublicMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->orgs👷ListPublicMembersListing;
    }

    public function orgs👷CheckPublicMembershipForUser(): Internal\Operator\Orgs\CheckPublicMembershipForUser
    {
        if ($this->orgs👷CheckPublicMembershipForUser instanceof Internal\Operator\Orgs\CheckPublicMembershipForUser === false) {
            $this->orgs👷CheckPublicMembershipForUser = new Internal\Operator\Orgs\CheckPublicMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckPublicMembershipForUser;
    }

    public function orgs👷SetPublicMembershipForAuthenticatedUser(): Internal\Operator\Orgs\SetPublicMembershipForAuthenticatedUser
    {
        if ($this->orgs👷SetPublicMembershipForAuthenticatedUser instanceof Internal\Operator\Orgs\SetPublicMembershipForAuthenticatedUser === false) {
            $this->orgs👷SetPublicMembershipForAuthenticatedUser = new Internal\Operator\Orgs\SetPublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->orgs👷SetPublicMembershipForAuthenticatedUser;
    }

    public function orgs👷RemovePublicMembershipForAuthenticatedUser(): Internal\Operator\Orgs\RemovePublicMembershipForAuthenticatedUser
    {
        if ($this->orgs👷RemovePublicMembershipForAuthenticatedUser instanceof Internal\Operator\Orgs\RemovePublicMembershipForAuthenticatedUser === false) {
            $this->orgs👷RemovePublicMembershipForAuthenticatedUser = new Internal\Operator\Orgs\RemovePublicMembershipForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RemovePublicMembershipForAuthenticatedUser;
    }

    public function repos👷ListForOrg(): Internal\Operator\Repos\ListForOrg
    {
        if ($this->repos👷ListForOrg instanceof Internal\Operator\Repos\ListForOrg === false) {
            $this->repos👷ListForOrg = new Internal\Operator\Repos\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrg;
    }

    public function repos👷ListForOrgListing(): Internal\Operator\Repos\ListForOrgListing
    {
        if ($this->repos👷ListForOrgListing instanceof Internal\Operator\Repos\ListForOrgListing === false) {
            $this->repos👷ListForOrgListing = new Internal\Operator\Repos\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrgListing;
    }

    public function repos👷CreateInOrg(): Internal\Operator\Repos\CreateInOrg
    {
        if ($this->repos👷CreateInOrg instanceof Internal\Operator\Repos\CreateInOrg === false) {
            $this->repos👷CreateInOrg = new Internal\Operator\Repos\CreateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷CreateInOrg;
    }

    public function repos👷GetOrgRulesets(): Internal\Operator\Repos\GetOrgRulesets
    {
        if ($this->repos👷GetOrgRulesets instanceof Internal\Operator\Repos\GetOrgRulesets === false) {
            $this->repos👷GetOrgRulesets = new Internal\Operator\Repos\GetOrgRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷GetOrgRulesets;
    }

    public function repos👷GetOrgRulesetsListing(): Internal\Operator\Repos\GetOrgRulesetsListing
    {
        if ($this->repos👷GetOrgRulesetsListing instanceof Internal\Operator\Repos\GetOrgRulesetsListing === false) {
            $this->repos👷GetOrgRulesetsListing = new Internal\Operator\Repos\GetOrgRulesetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷GetOrgRulesetsListing;
    }

    public function repos👷CreateOrgRuleset(): Internal\Operator\Repos\CreateOrgRuleset
    {
        if ($this->repos👷CreateOrgRuleset instanceof Internal\Operator\Repos\CreateOrgRuleset === false) {
            $this->repos👷CreateOrgRuleset = new Internal\Operator\Repos\CreateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷CreateOrgRuleset;
    }

    public function repos👷GetOrgRuleSuites(): Internal\Operator\Repos\GetOrgRuleSuites
    {
        if ($this->repos👷GetOrgRuleSuites instanceof Internal\Operator\Repos\GetOrgRuleSuites === false) {
            $this->repos👷GetOrgRuleSuites = new Internal\Operator\Repos\GetOrgRuleSuites($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites());
        }

        return $this->repos👷GetOrgRuleSuites;
    }

    public function repos👷GetOrgRuleSuitesListing(): Internal\Operator\Repos\GetOrgRuleSuitesListing
    {
        if ($this->repos👷GetOrgRuleSuitesListing instanceof Internal\Operator\Repos\GetOrgRuleSuitesListing === false) {
            $this->repos👷GetOrgRuleSuitesListing = new Internal\Operator\Repos\GetOrgRuleSuitesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites());
        }

        return $this->repos👷GetOrgRuleSuitesListing;
    }

    public function repos👷GetOrgRuleSuite(): Internal\Operator\Repos\GetOrgRuleSuite
    {
        if ($this->repos👷GetOrgRuleSuite instanceof Internal\Operator\Repos\GetOrgRuleSuite === false) {
            $this->repos👷GetOrgRuleSuite = new Internal\Operator\Repos\GetOrgRuleSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId());
        }

        return $this->repos👷GetOrgRuleSuite;
    }

    public function repos👷GetOrgRuleset(): Internal\Operator\Repos\GetOrgRuleset
    {
        if ($this->repos👷GetOrgRuleset instanceof Internal\Operator\Repos\GetOrgRuleset === false) {
            $this->repos👷GetOrgRuleset = new Internal\Operator\Repos\GetOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷GetOrgRuleset;
    }

    public function repos👷UpdateOrgRuleset(): Internal\Operator\Repos\UpdateOrgRuleset
    {
        if ($this->repos👷UpdateOrgRuleset instanceof Internal\Operator\Repos\UpdateOrgRuleset === false) {
            $this->repos👷UpdateOrgRuleset = new Internal\Operator\Repos\UpdateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷UpdateOrgRuleset;
    }

    public function repos👷DeleteOrgRuleset(): Internal\Operator\Repos\DeleteOrgRuleset
    {
        if ($this->repos👷DeleteOrgRuleset instanceof Internal\Operator\Repos\DeleteOrgRuleset === false) {
            $this->repos👷DeleteOrgRuleset = new Internal\Operator\Repos\DeleteOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷DeleteOrgRuleset;
    }

    public function secretScanning👷ListAlertsForOrg(): Internal\Operator\SecretScanning\ListAlertsForOrg
    {
        if ($this->secretScanning👷ListAlertsForOrg instanceof Internal\Operator\SecretScanning\ListAlertsForOrg === false) {
            $this->secretScanning👷ListAlertsForOrg = new Internal\Operator\SecretScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForOrg;
    }

    public function secretScanning👷ListAlertsForOrgListing(): Internal\Operator\SecretScanning\ListAlertsForOrgListing
    {
        if ($this->secretScanning👷ListAlertsForOrgListing instanceof Internal\Operator\SecretScanning\ListAlertsForOrgListing === false) {
            $this->secretScanning👷ListAlertsForOrgListing = new Internal\Operator\SecretScanning\ListAlertsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForOrgListing;
    }

    public function securityAdvisories👷ListOrgRepositoryAdvisories(): Internal\Operator\SecurityAdvisories\ListOrgRepositoryAdvisories
    {
        if ($this->securityAdvisories👷ListOrgRepositoryAdvisories instanceof Internal\Operator\SecurityAdvisories\ListOrgRepositoryAdvisories === false) {
            $this->securityAdvisories👷ListOrgRepositoryAdvisories = new Internal\Operator\SecurityAdvisories\ListOrgRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷ListOrgRepositoryAdvisories;
    }

    public function orgs👷ListSecurityManagerTeams(): Internal\Operator\Orgs\ListSecurityManagerTeams
    {
        if ($this->orgs👷ListSecurityManagerTeams instanceof Internal\Operator\Orgs\ListSecurityManagerTeams === false) {
            $this->orgs👷ListSecurityManagerTeams = new Internal\Operator\Orgs\ListSecurityManagerTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers());
        }

        return $this->orgs👷ListSecurityManagerTeams;
    }

    public function orgs👷AddSecurityManagerTeam(): Internal\Operator\Orgs\AddSecurityManagerTeam
    {
        if ($this->orgs👷AddSecurityManagerTeam instanceof Internal\Operator\Orgs\AddSecurityManagerTeam === false) {
            $this->orgs👷AddSecurityManagerTeam = new Internal\Operator\Orgs\AddSecurityManagerTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷AddSecurityManagerTeam;
    }

    public function orgs👷RemoveSecurityManagerTeam(): Internal\Operator\Orgs\RemoveSecurityManagerTeam
    {
        if ($this->orgs👷RemoveSecurityManagerTeam instanceof Internal\Operator\Orgs\RemoveSecurityManagerTeam === false) {
            $this->orgs👷RemoveSecurityManagerTeam = new Internal\Operator\Orgs\RemoveSecurityManagerTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RemoveSecurityManagerTeam;
    }

    public function billing👷GetGithubActionsBillingOrg(): Internal\Operator\Billing\GetGithubActionsBillingOrg
    {
        if ($this->billing👷GetGithubActionsBillingOrg instanceof Internal\Operator\Billing\GetGithubActionsBillingOrg === false) {
            $this->billing👷GetGithubActionsBillingOrg = new Internal\Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());
        }

        return $this->billing👷GetGithubActionsBillingOrg;
    }

    public function billing👷GetGithubPackagesBillingOrg(): Internal\Operator\Billing\GetGithubPackagesBillingOrg
    {
        if ($this->billing👷GetGithubPackagesBillingOrg instanceof Internal\Operator\Billing\GetGithubPackagesBillingOrg === false) {
            $this->billing👷GetGithubPackagesBillingOrg = new Internal\Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());
        }

        return $this->billing👷GetGithubPackagesBillingOrg;
    }

    public function billing👷GetSharedStorageBillingOrg(): Internal\Operator\Billing\GetSharedStorageBillingOrg
    {
        if ($this->billing👷GetSharedStorageBillingOrg instanceof Internal\Operator\Billing\GetSharedStorageBillingOrg === false) {
            $this->billing👷GetSharedStorageBillingOrg = new Internal\Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->billing👷GetSharedStorageBillingOrg;
    }

    public function copilot👷UsageMetricsForTeam(): Internal\Operator\Copilot\UsageMetricsForTeam
    {
        if ($this->copilot👷UsageMetricsForTeam instanceof Internal\Operator\Copilot\UsageMetricsForTeam === false) {
            $this->copilot👷UsageMetricsForTeam = new Internal\Operator\Copilot\UsageMetricsForTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForTeam;
    }

    public function copilot👷UsageMetricsForTeamListing(): Internal\Operator\Copilot\UsageMetricsForTeamListing
    {
        if ($this->copilot👷UsageMetricsForTeamListing instanceof Internal\Operator\Copilot\UsageMetricsForTeamListing === false) {
            $this->copilot👷UsageMetricsForTeamListing = new Internal\Operator\Copilot\UsageMetricsForTeamListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Team🌀TeamSlug🌀Copilot🌀Usage());
        }

        return $this->copilot👷UsageMetricsForTeamListing;
    }

    public function teams👷List_(): Internal\Operator\Teams\List_
    {
        if ($this->teams👷List_ instanceof Internal\Operator\Teams\List_ === false) {
            $this->teams👷List_ = new Internal\Operator\Teams\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷List_;
    }

    public function teams👷ListListing(): Internal\Operator\Teams\ListListing
    {
        if ($this->teams👷ListListing instanceof Internal\Operator\Teams\ListListing === false) {
            $this->teams👷ListListing = new Internal\Operator\Teams\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷ListListing;
    }

    public function teams👷Create(): Internal\Operator\Teams\Create
    {
        if ($this->teams👷Create instanceof Internal\Operator\Teams\Create === false) {
            $this->teams👷Create = new Internal\Operator\Teams\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷Create;
    }

    public function teams👷GetByName(): Internal\Operator\Teams\GetByName
    {
        if ($this->teams👷GetByName instanceof Internal\Operator\Teams\GetByName === false) {
            $this->teams👷GetByName = new Internal\Operator\Teams\GetByName($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷GetByName;
    }

    public function teams👷DeleteInOrg(): Internal\Operator\Teams\DeleteInOrg
    {
        if ($this->teams👷DeleteInOrg instanceof Internal\Operator\Teams\DeleteInOrg === false) {
            $this->teams👷DeleteInOrg = new Internal\Operator\Teams\DeleteInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteInOrg;
    }

    public function teams👷UpdateInOrg(): Internal\Operator\Teams\UpdateInOrg
    {
        if ($this->teams👷UpdateInOrg instanceof Internal\Operator\Teams\UpdateInOrg === false) {
            $this->teams👷UpdateInOrg = new Internal\Operator\Teams\UpdateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷UpdateInOrg;
    }

    public function teams👷ListDiscussionsInOrg(): Internal\Operator\Teams\ListDiscussionsInOrg
    {
        if ($this->teams👷ListDiscussionsInOrg instanceof Internal\Operator\Teams\ListDiscussionsInOrg === false) {
            $this->teams👷ListDiscussionsInOrg = new Internal\Operator\Teams\ListDiscussionsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrg;
    }

    public function teams👷ListDiscussionsInOrgListing(): Internal\Operator\Teams\ListDiscussionsInOrgListing
    {
        if ($this->teams👷ListDiscussionsInOrgListing instanceof Internal\Operator\Teams\ListDiscussionsInOrgListing === false) {
            $this->teams👷ListDiscussionsInOrgListing = new Internal\Operator\Teams\ListDiscussionsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrgListing;
    }

    public function teams👷CreateDiscussionInOrg(): Internal\Operator\Teams\CreateDiscussionInOrg
    {
        if ($this->teams👷CreateDiscussionInOrg instanceof Internal\Operator\Teams\CreateDiscussionInOrg === false) {
            $this->teams👷CreateDiscussionInOrg = new Internal\Operator\Teams\CreateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷CreateDiscussionInOrg;
    }

    public function teams👷GetDiscussionInOrg(): Internal\Operator\Teams\GetDiscussionInOrg
    {
        if ($this->teams👷GetDiscussionInOrg instanceof Internal\Operator\Teams\GetDiscussionInOrg === false) {
            $this->teams👷GetDiscussionInOrg = new Internal\Operator\Teams\GetDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionInOrg;
    }

    public function teams👷DeleteDiscussionInOrg(): Internal\Operator\Teams\DeleteDiscussionInOrg
    {
        if ($this->teams👷DeleteDiscussionInOrg instanceof Internal\Operator\Teams\DeleteDiscussionInOrg === false) {
            $this->teams👷DeleteDiscussionInOrg = new Internal\Operator\Teams\DeleteDiscussionInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionInOrg;
    }

    public function teams👷UpdateDiscussionInOrg(): Internal\Operator\Teams\UpdateDiscussionInOrg
    {
        if ($this->teams👷UpdateDiscussionInOrg instanceof Internal\Operator\Teams\UpdateDiscussionInOrg === false) {
            $this->teams👷UpdateDiscussionInOrg = new Internal\Operator\Teams\UpdateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrg(): Internal\Operator\Teams\ListDiscussionCommentsInOrg
    {
        if ($this->teams👷ListDiscussionCommentsInOrg instanceof Internal\Operator\Teams\ListDiscussionCommentsInOrg === false) {
            $this->teams👷ListDiscussionCommentsInOrg = new Internal\Operator\Teams\ListDiscussionCommentsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrgListing(): Internal\Operator\Teams\ListDiscussionCommentsInOrgListing
    {
        if ($this->teams👷ListDiscussionCommentsInOrgListing instanceof Internal\Operator\Teams\ListDiscussionCommentsInOrgListing === false) {
            $this->teams👷ListDiscussionCommentsInOrgListing = new Internal\Operator\Teams\ListDiscussionCommentsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrgListing;
    }

    public function teams👷CreateDiscussionCommentInOrg(): Internal\Operator\Teams\CreateDiscussionCommentInOrg
    {
        if ($this->teams👷CreateDiscussionCommentInOrg instanceof Internal\Operator\Teams\CreateDiscussionCommentInOrg === false) {
            $this->teams👷CreateDiscussionCommentInOrg = new Internal\Operator\Teams\CreateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentInOrg;
    }

    public function teams👷GetDiscussionCommentInOrg(): Internal\Operator\Teams\GetDiscussionCommentInOrg
    {
        if ($this->teams👷GetDiscussionCommentInOrg instanceof Internal\Operator\Teams\GetDiscussionCommentInOrg === false) {
            $this->teams👷GetDiscussionCommentInOrg = new Internal\Operator\Teams\GetDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentInOrg;
    }

    public function teams👷DeleteDiscussionCommentInOrg(): Internal\Operator\Teams\DeleteDiscussionCommentInOrg
    {
        if ($this->teams👷DeleteDiscussionCommentInOrg instanceof Internal\Operator\Teams\DeleteDiscussionCommentInOrg === false) {
            $this->teams👷DeleteDiscussionCommentInOrg = new Internal\Operator\Teams\DeleteDiscussionCommentInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentInOrg;
    }

    public function teams👷UpdateDiscussionCommentInOrg(): Internal\Operator\Teams\UpdateDiscussionCommentInOrg
    {
        if ($this->teams👷UpdateDiscussionCommentInOrg instanceof Internal\Operator\Teams\UpdateDiscussionCommentInOrg === false) {
            $this->teams👷UpdateDiscussionCommentInOrg = new Internal\Operator\Teams\UpdateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrg(): Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrg instanceof Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrg = new Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrgListing(): Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrgListing instanceof Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrgListing = new Internal\Operator\Reactions\ListForTeamDiscussionCommentInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrgListing;
    }

    public function reactions👷CreateForTeamDiscussionCommentInOrg(): Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentInOrg instanceof Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionCommentInOrg = new Internal\Operator\Reactions\CreateForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentInOrg;
    }

    public function reactions👷DeleteForTeamDiscussionComment(): Internal\Operator\Reactions\DeleteForTeamDiscussionComment
    {
        if ($this->reactions👷DeleteForTeamDiscussionComment instanceof Internal\Operator\Reactions\DeleteForTeamDiscussionComment === false) {
            $this->reactions👷DeleteForTeamDiscussionComment = new Internal\Operator\Reactions\DeleteForTeamDiscussionComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussionComment;
    }

    public function reactions👷ListForTeamDiscussionInOrg(): Internal\Operator\Reactions\ListForTeamDiscussionInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionInOrg instanceof Internal\Operator\Reactions\ListForTeamDiscussionInOrg === false) {
            $this->reactions👷ListForTeamDiscussionInOrg = new Internal\Operator\Reactions\ListForTeamDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrg;
    }

    public function reactions👷ListForTeamDiscussionInOrgListing(): Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing
    {
        if ($this->reactions👷ListForTeamDiscussionInOrgListing instanceof Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing === false) {
            $this->reactions👷ListForTeamDiscussionInOrgListing = new Internal\Operator\Reactions\ListForTeamDiscussionInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrgListing;
    }

    public function reactions👷CreateForTeamDiscussionInOrg(): Internal\Operator\Reactions\CreateForTeamDiscussionInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionInOrg instanceof Internal\Operator\Reactions\CreateForTeamDiscussionInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionInOrg = new Internal\Operator\Reactions\CreateForTeamDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionInOrg;
    }

    public function reactions👷DeleteForTeamDiscussion(): Internal\Operator\Reactions\DeleteForTeamDiscussion
    {
        if ($this->reactions👷DeleteForTeamDiscussion instanceof Internal\Operator\Reactions\DeleteForTeamDiscussion === false) {
            $this->reactions👷DeleteForTeamDiscussion = new Internal\Operator\Reactions\DeleteForTeamDiscussion($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussion;
    }

    public function teams👷ListPendingInvitationsInOrg(): Internal\Operator\Teams\ListPendingInvitationsInOrg
    {
        if ($this->teams👷ListPendingInvitationsInOrg instanceof Internal\Operator\Teams\ListPendingInvitationsInOrg === false) {
            $this->teams👷ListPendingInvitationsInOrg = new Internal\Operator\Teams\ListPendingInvitationsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsInOrg;
    }

    public function teams👷ListPendingInvitationsInOrgListing(): Internal\Operator\Teams\ListPendingInvitationsInOrgListing
    {
        if ($this->teams👷ListPendingInvitationsInOrgListing instanceof Internal\Operator\Teams\ListPendingInvitationsInOrgListing === false) {
            $this->teams👷ListPendingInvitationsInOrgListing = new Internal\Operator\Teams\ListPendingInvitationsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsInOrgListing;
    }

    public function teams👷ListMembersInOrg(): Internal\Operator\Teams\ListMembersInOrg
    {
        if ($this->teams👷ListMembersInOrg instanceof Internal\Operator\Teams\ListMembersInOrg === false) {
            $this->teams👷ListMembersInOrg = new Internal\Operator\Teams\ListMembersInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrg;
    }

    public function teams👷ListMembersInOrgListing(): Internal\Operator\Teams\ListMembersInOrgListing
    {
        if ($this->teams👷ListMembersInOrgListing instanceof Internal\Operator\Teams\ListMembersInOrgListing === false) {
            $this->teams👷ListMembersInOrgListing = new Internal\Operator\Teams\ListMembersInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrgListing;
    }

    public function teams👷GetMembershipForUserInOrg(): Internal\Operator\Teams\GetMembershipForUserInOrg
    {
        if ($this->teams👷GetMembershipForUserInOrg instanceof Internal\Operator\Teams\GetMembershipForUserInOrg === false) {
            $this->teams👷GetMembershipForUserInOrg = new Internal\Operator\Teams\GetMembershipForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserInOrg;
    }

    public function teams👷AddOrUpdateMembershipForUserInOrg(): Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg
    {
        if ($this->teams👷AddOrUpdateMembershipForUserInOrg instanceof Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg === false) {
            $this->teams👷AddOrUpdateMembershipForUserInOrg = new Internal\Operator\Teams\AddOrUpdateMembershipForUserInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserInOrg;
    }

    public function teams👷RemoveMembershipForUserInOrg(): Internal\Operator\Teams\RemoveMembershipForUserInOrg
    {
        if ($this->teams👷RemoveMembershipForUserInOrg instanceof Internal\Operator\Teams\RemoveMembershipForUserInOrg === false) {
            $this->teams👷RemoveMembershipForUserInOrg = new Internal\Operator\Teams\RemoveMembershipForUserInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserInOrg;
    }

    public function teams👷ListProjectsInOrg(): Internal\Operator\Teams\ListProjectsInOrg
    {
        if ($this->teams👷ListProjectsInOrg instanceof Internal\Operator\Teams\ListProjectsInOrg === false) {
            $this->teams👷ListProjectsInOrg = new Internal\Operator\Teams\ListProjectsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrg;
    }

    public function teams👷ListProjectsInOrgListing(): Internal\Operator\Teams\ListProjectsInOrgListing
    {
        if ($this->teams👷ListProjectsInOrgListing instanceof Internal\Operator\Teams\ListProjectsInOrgListing === false) {
            $this->teams👷ListProjectsInOrgListing = new Internal\Operator\Teams\ListProjectsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrgListing;
    }

    public function teams👷CheckPermissionsForProjectInOrg(): Internal\Operator\Teams\CheckPermissionsForProjectInOrg
    {
        if ($this->teams👷CheckPermissionsForProjectInOrg instanceof Internal\Operator\Teams\CheckPermissionsForProjectInOrg === false) {
            $this->teams👷CheckPermissionsForProjectInOrg = new Internal\Operator\Teams\CheckPermissionsForProjectInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectInOrg;
    }

    public function teams👷AddOrUpdateProjectPermissionsInOrg(): Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsInOrg instanceof Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateProjectPermissionsInOrg = new Internal\Operator\Teams\AddOrUpdateProjectPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsInOrg;
    }

    public function teams👷RemoveProjectInOrg(): Internal\Operator\Teams\RemoveProjectInOrg
    {
        if ($this->teams👷RemoveProjectInOrg instanceof Internal\Operator\Teams\RemoveProjectInOrg === false) {
            $this->teams👷RemoveProjectInOrg = new Internal\Operator\Teams\RemoveProjectInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveProjectInOrg;
    }

    public function teams👷ListReposInOrg(): Internal\Operator\Teams\ListReposInOrg
    {
        if ($this->teams👷ListReposInOrg instanceof Internal\Operator\Teams\ListReposInOrg === false) {
            $this->teams👷ListReposInOrg = new Internal\Operator\Teams\ListReposInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrg;
    }

    public function teams👷ListReposInOrgListing(): Internal\Operator\Teams\ListReposInOrgListing
    {
        if ($this->teams👷ListReposInOrgListing instanceof Internal\Operator\Teams\ListReposInOrgListing === false) {
            $this->teams👷ListReposInOrgListing = new Internal\Operator\Teams\ListReposInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrgListing;
    }

    public function teams👷CheckPermissionsForRepoInOrg(): Internal\Operator\Teams\CheckPermissionsForRepoInOrg
    {
        if ($this->teams👷CheckPermissionsForRepoInOrg instanceof Internal\Operator\Teams\CheckPermissionsForRepoInOrg === false) {
            $this->teams👷CheckPermissionsForRepoInOrg = new Internal\Operator\Teams\CheckPermissionsForRepoInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoInOrg;
    }

    public function teams👷AddOrUpdateRepoPermissionsInOrg(): Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsInOrg instanceof Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateRepoPermissionsInOrg = new Internal\Operator\Teams\AddOrUpdateRepoPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->teams👷AddOrUpdateRepoPermissionsInOrg;
    }

    public function teams👷RemoveRepoInOrg(): Internal\Operator\Teams\RemoveRepoInOrg
    {
        if ($this->teams👷RemoveRepoInOrg instanceof Internal\Operator\Teams\RemoveRepoInOrg === false) {
            $this->teams👷RemoveRepoInOrg = new Internal\Operator\Teams\RemoveRepoInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoInOrg;
    }

    public function teams👷ListChildInOrg(): Internal\Operator\Teams\ListChildInOrg
    {
        if ($this->teams👷ListChildInOrg instanceof Internal\Operator\Teams\ListChildInOrg === false) {
            $this->teams👷ListChildInOrg = new Internal\Operator\Teams\ListChildInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrg;
    }

    public function teams👷ListChildInOrgListing(): Internal\Operator\Teams\ListChildInOrgListing
    {
        if ($this->teams👷ListChildInOrgListing instanceof Internal\Operator\Teams\ListChildInOrgListing === false) {
            $this->teams👷ListChildInOrgListing = new Internal\Operator\Teams\ListChildInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrgListing;
    }

    public function orgs👷EnableOrDisableSecurityProductOnAllOrgRepos(): Internal\Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos
    {
        if ($this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos instanceof Internal\Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos === false) {
            $this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos = new Internal\Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos;
    }

    public function projects👷GetCard(): Internal\Operator\Projects\GetCard
    {
        if ($this->projects👷GetCard instanceof Internal\Operator\Projects\GetCard === false) {
            $this->projects👷GetCard = new Internal\Operator\Projects\GetCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷GetCard;
    }

    public function projects👷DeleteCard(): Internal\Operator\Projects\DeleteCard
    {
        if ($this->projects👷DeleteCard instanceof Internal\Operator\Projects\DeleteCard === false) {
            $this->projects👷DeleteCard = new Internal\Operator\Projects\DeleteCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷DeleteCard;
    }

    public function projects👷UpdateCard(): Internal\Operator\Projects\UpdateCard
    {
        if ($this->projects👷UpdateCard instanceof Internal\Operator\Projects\UpdateCard === false) {
            $this->projects👷UpdateCard = new Internal\Operator\Projects\UpdateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷UpdateCard;
    }

    public function projects👷MoveCard(): Internal\Operator\Projects\MoveCard
    {
        if ($this->projects👷MoveCard instanceof Internal\Operator\Projects\MoveCard === false) {
            $this->projects👷MoveCard = new Internal\Operator\Projects\MoveCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves());
        }

        return $this->projects👷MoveCard;
    }

    public function projects👷GetColumn(): Internal\Operator\Projects\GetColumn
    {
        if ($this->projects👷GetColumn instanceof Internal\Operator\Projects\GetColumn === false) {
            $this->projects👷GetColumn = new Internal\Operator\Projects\GetColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷GetColumn;
    }

    public function projects👷DeleteColumn(): Internal\Operator\Projects\DeleteColumn
    {
        if ($this->projects👷DeleteColumn instanceof Internal\Operator\Projects\DeleteColumn === false) {
            $this->projects👷DeleteColumn = new Internal\Operator\Projects\DeleteColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷DeleteColumn;
    }

    public function projects👷UpdateColumn(): Internal\Operator\Projects\UpdateColumn
    {
        if ($this->projects👷UpdateColumn instanceof Internal\Operator\Projects\UpdateColumn === false) {
            $this->projects👷UpdateColumn = new Internal\Operator\Projects\UpdateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷UpdateColumn;
    }

    public function projects👷ListCards(): Internal\Operator\Projects\ListCards
    {
        if ($this->projects👷ListCards instanceof Internal\Operator\Projects\ListCards === false) {
            $this->projects👷ListCards = new Internal\Operator\Projects\ListCards($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCards;
    }

    public function projects👷ListCardsListing(): Internal\Operator\Projects\ListCardsListing
    {
        if ($this->projects👷ListCardsListing instanceof Internal\Operator\Projects\ListCardsListing === false) {
            $this->projects👷ListCardsListing = new Internal\Operator\Projects\ListCardsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCardsListing;
    }

    public function projects👷CreateCard(): Internal\Operator\Projects\CreateCard
    {
        if ($this->projects👷CreateCard instanceof Internal\Operator\Projects\CreateCard === false) {
            $this->projects👷CreateCard = new Internal\Operator\Projects\CreateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷CreateCard;
    }

    public function projects👷MoveColumn(): Internal\Operator\Projects\MoveColumn
    {
        if ($this->projects👷MoveColumn instanceof Internal\Operator\Projects\MoveColumn === false) {
            $this->projects👷MoveColumn = new Internal\Operator\Projects\MoveColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves());
        }

        return $this->projects👷MoveColumn;
    }

    public function projects👷Get(): Internal\Operator\Projects\Get
    {
        if ($this->projects👷Get instanceof Internal\Operator\Projects\Get === false) {
            $this->projects👷Get = new Internal\Operator\Projects\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Get;
    }

    public function projects👷Delete(): Internal\Operator\Projects\Delete
    {
        if ($this->projects👷Delete instanceof Internal\Operator\Projects\Delete === false) {
            $this->projects👷Delete = new Internal\Operator\Projects\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Delete;
    }

    public function projects👷Update(): Internal\Operator\Projects\Update
    {
        if ($this->projects👷Update instanceof Internal\Operator\Projects\Update === false) {
            $this->projects👷Update = new Internal\Operator\Projects\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Update;
    }

    public function projects👷ListCollaborators(): Internal\Operator\Projects\ListCollaborators
    {
        if ($this->projects👷ListCollaborators instanceof Internal\Operator\Projects\ListCollaborators === false) {
            $this->projects👷ListCollaborators = new Internal\Operator\Projects\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaborators;
    }

    public function projects👷ListCollaboratorsListing(): Internal\Operator\Projects\ListCollaboratorsListing
    {
        if ($this->projects👷ListCollaboratorsListing instanceof Internal\Operator\Projects\ListCollaboratorsListing === false) {
            $this->projects👷ListCollaboratorsListing = new Internal\Operator\Projects\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaboratorsListing;
    }

    public function projects👷AddCollaborator(): Internal\Operator\Projects\AddCollaborator
    {
        if ($this->projects👷AddCollaborator instanceof Internal\Operator\Projects\AddCollaborator === false) {
            $this->projects👷AddCollaborator = new Internal\Operator\Projects\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷AddCollaborator;
    }

    public function projects👷RemoveCollaborator(): Internal\Operator\Projects\RemoveCollaborator
    {
        if ($this->projects👷RemoveCollaborator instanceof Internal\Operator\Projects\RemoveCollaborator === false) {
            $this->projects👷RemoveCollaborator = new Internal\Operator\Projects\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷RemoveCollaborator;
    }

    public function projects👷GetPermissionForUser(): Internal\Operator\Projects\GetPermissionForUser
    {
        if ($this->projects👷GetPermissionForUser instanceof Internal\Operator\Projects\GetPermissionForUser === false) {
            $this->projects👷GetPermissionForUser = new Internal\Operator\Projects\GetPermissionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission());
        }

        return $this->projects👷GetPermissionForUser;
    }

    public function projects👷ListColumns(): Internal\Operator\Projects\ListColumns
    {
        if ($this->projects👷ListColumns instanceof Internal\Operator\Projects\ListColumns === false) {
            $this->projects👷ListColumns = new Internal\Operator\Projects\ListColumns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumns;
    }

    public function projects👷ListColumnsListing(): Internal\Operator\Projects\ListColumnsListing
    {
        if ($this->projects👷ListColumnsListing instanceof Internal\Operator\Projects\ListColumnsListing === false) {
            $this->projects👷ListColumnsListing = new Internal\Operator\Projects\ListColumnsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumnsListing;
    }

    public function projects👷CreateColumn(): Internal\Operator\Projects\CreateColumn
    {
        if ($this->projects👷CreateColumn instanceof Internal\Operator\Projects\CreateColumn === false) {
            $this->projects👷CreateColumn = new Internal\Operator\Projects\CreateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷CreateColumn;
    }

    public function rateLimit👷Get(): Internal\Operator\RateLimit\Get
    {
        if ($this->rateLimit👷Get instanceof Internal\Operator\RateLimit\Get === false) {
            $this->rateLimit👷Get = new Internal\Operator\RateLimit\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀RateLimit());
        }

        return $this->rateLimit👷Get;
    }

    public function repos👷Get(): Internal\Operator\Repos\Get
    {
        if ($this->repos👷Get instanceof Internal\Operator\Repos\Get === false) {
            $this->repos👷Get = new Internal\Operator\Repos\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Get;
    }

    public function repos👷Delete(): Internal\Operator\Repos\Delete
    {
        if ($this->repos👷Delete instanceof Internal\Operator\Repos\Delete === false) {
            $this->repos👷Delete = new Internal\Operator\Repos\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Delete;
    }

    public function repos👷Update(): Internal\Operator\Repos\Update
    {
        if ($this->repos👷Update instanceof Internal\Operator\Repos\Update === false) {
            $this->repos👷Update = new Internal\Operator\Repos\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Update;
    }

    public function actions👷ListArtifactsForRepo(): Internal\Operator\Actions\ListArtifactsForRepo
    {
        if ($this->actions👷ListArtifactsForRepo instanceof Internal\Operator\Actions\ListArtifactsForRepo === false) {
            $this->actions👷ListArtifactsForRepo = new Internal\Operator\Actions\ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts());
        }

        return $this->actions👷ListArtifactsForRepo;
    }

    public function actions👷GetArtifact(): Internal\Operator\Actions\GetArtifact
    {
        if ($this->actions👷GetArtifact instanceof Internal\Operator\Actions\GetArtifact === false) {
            $this->actions👷GetArtifact = new Internal\Operator\Actions\GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->actions👷GetArtifact;
    }

    public function actions👷DeleteArtifact(): Internal\Operator\Actions\DeleteArtifact
    {
        if ($this->actions👷DeleteArtifact instanceof Internal\Operator\Actions\DeleteArtifact === false) {
            $this->actions👷DeleteArtifact = new Internal\Operator\Actions\DeleteArtifact($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteArtifact;
    }

    public function actions👷DownloadArtifact(): Internal\Operator\Actions\DownloadArtifact
    {
        if ($this->actions👷DownloadArtifact instanceof Internal\Operator\Actions\DownloadArtifact === false) {
            $this->actions👷DownloadArtifact = new Internal\Operator\Actions\DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifact;
    }

    public function actions👷DownloadArtifactStreaming(): Internal\Operator\Actions\DownloadArtifactStreaming
    {
        if ($this->actions👷DownloadArtifactStreaming instanceof Internal\Operator\Actions\DownloadArtifactStreaming === false) {
            $this->actions👷DownloadArtifactStreaming = new Internal\Operator\Actions\DownloadArtifactStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifactStreaming;
    }

    public function actions👷GetActionsCacheUsage(): Internal\Operator\Actions\GetActionsCacheUsage
    {
        if ($this->actions👷GetActionsCacheUsage instanceof Internal\Operator\Actions\GetActionsCacheUsage === false) {
            $this->actions👷GetActionsCacheUsage = new Internal\Operator\Actions\GetActionsCacheUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage());
        }

        return $this->actions👷GetActionsCacheUsage;
    }

    public function actions👷GetActionsCacheList(): Internal\Operator\Actions\GetActionsCacheList
    {
        if ($this->actions👷GetActionsCacheList instanceof Internal\Operator\Actions\GetActionsCacheList === false) {
            $this->actions👷GetActionsCacheList = new Internal\Operator\Actions\GetActionsCacheList($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->actions👷GetActionsCacheList;
    }

    public function actions👷DeleteActionsCacheByKey(): Internal\Operator\Actions\DeleteActionsCacheByKey
    {
        if ($this->actions👷DeleteActionsCacheByKey instanceof Internal\Operator\Actions\DeleteActionsCacheByKey === false) {
            $this->actions👷DeleteActionsCacheByKey = new Internal\Operator\Actions\DeleteActionsCacheByKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->actions👷DeleteActionsCacheByKey;
    }

    public function actions👷DeleteActionsCacheById(): Internal\Operator\Actions\DeleteActionsCacheById
    {
        if ($this->actions👷DeleteActionsCacheById instanceof Internal\Operator\Actions\DeleteActionsCacheById === false) {
            $this->actions👷DeleteActionsCacheById = new Internal\Operator\Actions\DeleteActionsCacheById($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteActionsCacheById;
    }

    public function actions👷GetJobForWorkflowRun(): Internal\Operator\Actions\GetJobForWorkflowRun
    {
        if ($this->actions👷GetJobForWorkflowRun instanceof Internal\Operator\Actions\GetJobForWorkflowRun === false) {
            $this->actions👷GetJobForWorkflowRun = new Internal\Operator\Actions\GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId());
        }

        return $this->actions👷GetJobForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRun(): Internal\Operator\Actions\DownloadJobLogsForWorkflowRun
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRun instanceof Internal\Operator\Actions\DownloadJobLogsForWorkflowRun === false) {
            $this->actions👷DownloadJobLogsForWorkflowRun = new Internal\Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRunStreaming(): Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRunStreaming instanceof Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming === false) {
            $this->actions👷DownloadJobLogsForWorkflowRunStreaming = new Internal\Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRunStreaming;
    }

    public function actions👷ReRunJobForWorkflowRun(): Internal\Operator\Actions\ReRunJobForWorkflowRun
    {
        if ($this->actions👷ReRunJobForWorkflowRun instanceof Internal\Operator\Actions\ReRunJobForWorkflowRun === false) {
            $this->actions👷ReRunJobForWorkflowRun = new Internal\Operator\Actions\ReRunJobForWorkflowRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun());
        }

        return $this->actions👷ReRunJobForWorkflowRun;
    }

    public function actions👷GetCustomOidcSubClaimForRepo(): Internal\Operator\Actions\GetCustomOidcSubClaimForRepo
    {
        if ($this->actions👷GetCustomOidcSubClaimForRepo instanceof Internal\Operator\Actions\GetCustomOidcSubClaimForRepo === false) {
            $this->actions👷GetCustomOidcSubClaimForRepo = new Internal\Operator\Actions\GetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->actions👷GetCustomOidcSubClaimForRepo;
    }

    public function actions👷SetCustomOidcSubClaimForRepo(): Internal\Operator\Actions\SetCustomOidcSubClaimForRepo
    {
        if ($this->actions👷SetCustomOidcSubClaimForRepo instanceof Internal\Operator\Actions\SetCustomOidcSubClaimForRepo === false) {
            $this->actions👷SetCustomOidcSubClaimForRepo = new Internal\Operator\Actions\SetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->actions👷SetCustomOidcSubClaimForRepo;
    }

    public function actions👷ListRepoOrganizationSecrets(): Internal\Operator\Actions\ListRepoOrganizationSecrets
    {
        if ($this->actions👷ListRepoOrganizationSecrets instanceof Internal\Operator\Actions\ListRepoOrganizationSecrets === false) {
            $this->actions👷ListRepoOrganizationSecrets = new Internal\Operator\Actions\ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets());
        }

        return $this->actions👷ListRepoOrganizationSecrets;
    }

    public function actions👷ListRepoOrganizationVariables(): Internal\Operator\Actions\ListRepoOrganizationVariables
    {
        if ($this->actions👷ListRepoOrganizationVariables instanceof Internal\Operator\Actions\ListRepoOrganizationVariables === false) {
            $this->actions👷ListRepoOrganizationVariables = new Internal\Operator\Actions\ListRepoOrganizationVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables());
        }

        return $this->actions👷ListRepoOrganizationVariables;
    }

    public function actions👷GetGithubActionsPermissionsRepository(): Internal\Operator\Actions\GetGithubActionsPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsPermissionsRepository instanceof Internal\Operator\Actions\GetGithubActionsPermissionsRepository === false) {
            $this->actions👷GetGithubActionsPermissionsRepository = new Internal\Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsRepository;
    }

    public function actions👷SetGithubActionsPermissionsRepository(): Internal\Operator\Actions\SetGithubActionsPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsPermissionsRepository instanceof Internal\Operator\Actions\SetGithubActionsPermissionsRepository === false) {
            $this->actions👷SetGithubActionsPermissionsRepository = new Internal\Operator\Actions\SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsRepository;
    }

    public function actions👷GetWorkflowAccessToRepository(): Internal\Operator\Actions\GetWorkflowAccessToRepository
    {
        if ($this->actions👷GetWorkflowAccessToRepository instanceof Internal\Operator\Actions\GetWorkflowAccessToRepository === false) {
            $this->actions👷GetWorkflowAccessToRepository = new Internal\Operator\Actions\GetWorkflowAccessToRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access());
        }

        return $this->actions👷GetWorkflowAccessToRepository;
    }

    public function actions👷SetWorkflowAccessToRepository(): Internal\Operator\Actions\SetWorkflowAccessToRepository
    {
        if ($this->actions👷SetWorkflowAccessToRepository instanceof Internal\Operator\Actions\SetWorkflowAccessToRepository === false) {
            $this->actions👷SetWorkflowAccessToRepository = new Internal\Operator\Actions\SetWorkflowAccessToRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetWorkflowAccessToRepository;
    }

    public function actions👷GetAllowedActionsRepository(): Internal\Operator\Actions\GetAllowedActionsRepository
    {
        if ($this->actions👷GetAllowedActionsRepository instanceof Internal\Operator\Actions\GetAllowedActionsRepository === false) {
            $this->actions👷GetAllowedActionsRepository = new Internal\Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsRepository;
    }

    public function actions👷SetAllowedActionsRepository(): Internal\Operator\Actions\SetAllowedActionsRepository
    {
        if ($this->actions👷SetAllowedActionsRepository instanceof Internal\Operator\Actions\SetAllowedActionsRepository === false) {
            $this->actions👷SetAllowedActionsRepository = new Internal\Operator\Actions\SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsRepository;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsRepository(): Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository instanceof Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository = new Internal\Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsRepository(): Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository instanceof Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository = new Internal\Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository;
    }

    public function actions👷ListSelfHostedRunnersForRepo(): Internal\Operator\Actions\ListSelfHostedRunnersForRepo
    {
        if ($this->actions👷ListSelfHostedRunnersForRepo instanceof Internal\Operator\Actions\ListSelfHostedRunnersForRepo === false) {
            $this->actions👷ListSelfHostedRunnersForRepo = new Internal\Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForRepo;
    }

    public function actions👷ListRunnerApplicationsForRepo(): Internal\Operator\Actions\ListRunnerApplicationsForRepo
    {
        if ($this->actions👷ListRunnerApplicationsForRepo instanceof Internal\Operator\Actions\ListRunnerApplicationsForRepo === false) {
            $this->actions👷ListRunnerApplicationsForRepo = new Internal\Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForRepo;
    }

    public function actions👷GenerateRunnerJitconfigForRepo(): Internal\Operator\Actions\GenerateRunnerJitconfigForRepo
    {
        if ($this->actions👷GenerateRunnerJitconfigForRepo instanceof Internal\Operator\Actions\GenerateRunnerJitconfigForRepo === false) {
            $this->actions👷GenerateRunnerJitconfigForRepo = new Internal\Operator\Actions\GenerateRunnerJitconfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->actions👷GenerateRunnerJitconfigForRepo;
    }

    public function actions👷CreateRegistrationTokenForRepo(): Internal\Operator\Actions\CreateRegistrationTokenForRepo
    {
        if ($this->actions👷CreateRegistrationTokenForRepo instanceof Internal\Operator\Actions\CreateRegistrationTokenForRepo === false) {
            $this->actions👷CreateRegistrationTokenForRepo = new Internal\Operator\Actions\CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForRepo;
    }

    public function actions👷CreateRemoveTokenForRepo(): Internal\Operator\Actions\CreateRemoveTokenForRepo
    {
        if ($this->actions👷CreateRemoveTokenForRepo instanceof Internal\Operator\Actions\CreateRemoveTokenForRepo === false) {
            $this->actions👷CreateRemoveTokenForRepo = new Internal\Operator\Actions\CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForRepo;
    }

    public function actions👷GetSelfHostedRunnerForRepo(): Internal\Operator\Actions\GetSelfHostedRunnerForRepo
    {
        if ($this->actions👷GetSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\GetSelfHostedRunnerForRepo === false) {
            $this->actions👷GetSelfHostedRunnerForRepo = new Internal\Operator\Actions\GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForRepo;
    }

    public function actions👷DeleteSelfHostedRunnerFromRepo(): Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromRepo instanceof Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo === false) {
            $this->actions👷DeleteSelfHostedRunnerFromRepo = new Internal\Operator\Actions\DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromRepo;
    }

    public function actions👷ListLabelsForSelfHostedRunnerForRepo(): Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForRepo
    {
        if ($this->actions👷ListLabelsForSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForRepo === false) {
            $this->actions👷ListLabelsForSelfHostedRunnerForRepo = new Internal\Operator\Actions\ListLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷ListLabelsForSelfHostedRunnerForRepo;
    }

    public function actions👷SetCustomLabelsForSelfHostedRunnerForRepo(): Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo
    {
        if ($this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo === false) {
            $this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo = new Internal\Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo;
    }

    public function actions👷AddCustomLabelsToSelfHostedRunnerForRepo(): Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo
    {
        if ($this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo === false) {
            $this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo = new Internal\Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo;
    }

    public function actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo(): Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo
    {
        if ($this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo === false) {
            $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo = new Internal\Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo;
    }

    public function actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo(): Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo
    {
        if ($this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo instanceof Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo === false) {
            $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo = new Internal\Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo;
    }

    public function actions👷ListWorkflowRunsForRepo(): Internal\Operator\Actions\ListWorkflowRunsForRepo
    {
        if ($this->actions👷ListWorkflowRunsForRepo instanceof Internal\Operator\Actions\ListWorkflowRunsForRepo === false) {
            $this->actions👷ListWorkflowRunsForRepo = new Internal\Operator\Actions\ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs());
        }

        return $this->actions👷ListWorkflowRunsForRepo;
    }

    public function actions👷GetWorkflowRun(): Internal\Operator\Actions\GetWorkflowRun
    {
        if ($this->actions👷GetWorkflowRun instanceof Internal\Operator\Actions\GetWorkflowRun === false) {
            $this->actions👷GetWorkflowRun = new Internal\Operator\Actions\GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->actions👷GetWorkflowRun;
    }

    public function actions👷DeleteWorkflowRun(): Internal\Operator\Actions\DeleteWorkflowRun
    {
        if ($this->actions👷DeleteWorkflowRun instanceof Internal\Operator\Actions\DeleteWorkflowRun === false) {
            $this->actions👷DeleteWorkflowRun = new Internal\Operator\Actions\DeleteWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteWorkflowRun;
    }

    public function actions👷GetReviewsForRun(): Internal\Operator\Actions\GetReviewsForRun
    {
        if ($this->actions👷GetReviewsForRun instanceof Internal\Operator\Actions\GetReviewsForRun === false) {
            $this->actions👷GetReviewsForRun = new Internal\Operator\Actions\GetReviewsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals());
        }

        return $this->actions👷GetReviewsForRun;
    }

    public function actions👷ApproveWorkflowRun(): Internal\Operator\Actions\ApproveWorkflowRun
    {
        if ($this->actions👷ApproveWorkflowRun instanceof Internal\Operator\Actions\ApproveWorkflowRun === false) {
            $this->actions👷ApproveWorkflowRun = new Internal\Operator\Actions\ApproveWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve());
        }

        return $this->actions👷ApproveWorkflowRun;
    }

    public function actions👷ListWorkflowRunArtifacts(): Internal\Operator\Actions\ListWorkflowRunArtifacts
    {
        if ($this->actions👷ListWorkflowRunArtifacts instanceof Internal\Operator\Actions\ListWorkflowRunArtifacts === false) {
            $this->actions👷ListWorkflowRunArtifacts = new Internal\Operator\Actions\ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts());
        }

        return $this->actions👷ListWorkflowRunArtifacts;
    }

    public function actions👷GetWorkflowRunAttempt(): Internal\Operator\Actions\GetWorkflowRunAttempt
    {
        if ($this->actions👷GetWorkflowRunAttempt instanceof Internal\Operator\Actions\GetWorkflowRunAttempt === false) {
            $this->actions👷GetWorkflowRunAttempt = new Internal\Operator\Actions\GetWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber());
        }

        return $this->actions👷GetWorkflowRunAttempt;
    }

    public function actions👷ListJobsForWorkflowRunAttempt(): Internal\Operator\Actions\ListJobsForWorkflowRunAttempt
    {
        if ($this->actions👷ListJobsForWorkflowRunAttempt instanceof Internal\Operator\Actions\ListJobsForWorkflowRunAttempt === false) {
            $this->actions👷ListJobsForWorkflowRunAttempt = new Internal\Operator\Actions\ListJobsForWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRunAttempt;
    }

    public function actions👷DownloadWorkflowRunAttemptLogs(): Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogs instanceof Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogs = new Internal\Operator\Actions\DownloadWorkflowRunAttemptLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogs;
    }

    public function actions👷DownloadWorkflowRunAttemptLogsStreaming(): Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogsStreaming instanceof Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogsStreaming = new Internal\Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogsStreaming;
    }

    public function actions👷CancelWorkflowRun(): Internal\Operator\Actions\CancelWorkflowRun
    {
        if ($this->actions👷CancelWorkflowRun instanceof Internal\Operator\Actions\CancelWorkflowRun === false) {
            $this->actions👷CancelWorkflowRun = new Internal\Operator\Actions\CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel());
        }

        return $this->actions👷CancelWorkflowRun;
    }

    public function actions👷ReviewCustomGatesForRun(): Internal\Operator\Actions\ReviewCustomGatesForRun
    {
        if ($this->actions👷ReviewCustomGatesForRun instanceof Internal\Operator\Actions\ReviewCustomGatesForRun === false) {
            $this->actions👷ReviewCustomGatesForRun = new Internal\Operator\Actions\ReviewCustomGatesForRun($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷ReviewCustomGatesForRun;
    }

    public function actions👷ForceCancelWorkflowRun(): Internal\Operator\Actions\ForceCancelWorkflowRun
    {
        if ($this->actions👷ForceCancelWorkflowRun instanceof Internal\Operator\Actions\ForceCancelWorkflowRun === false) {
            $this->actions👷ForceCancelWorkflowRun = new Internal\Operator\Actions\ForceCancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel());
        }

        return $this->actions👷ForceCancelWorkflowRun;
    }

    public function actions👷ListJobsForWorkflowRun(): Internal\Operator\Actions\ListJobsForWorkflowRun
    {
        if ($this->actions👷ListJobsForWorkflowRun instanceof Internal\Operator\Actions\ListJobsForWorkflowRun === false) {
            $this->actions👷ListJobsForWorkflowRun = new Internal\Operator\Actions\ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRun;
    }

    public function actions👷DownloadWorkflowRunLogs(): Internal\Operator\Actions\DownloadWorkflowRunLogs
    {
        if ($this->actions👷DownloadWorkflowRunLogs instanceof Internal\Operator\Actions\DownloadWorkflowRunLogs === false) {
            $this->actions👷DownloadWorkflowRunLogs = new Internal\Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogs;
    }

    public function actions👷DownloadWorkflowRunLogsStreaming(): Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming
    {
        if ($this->actions👷DownloadWorkflowRunLogsStreaming instanceof Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming === false) {
            $this->actions👷DownloadWorkflowRunLogsStreaming = new Internal\Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogsStreaming;
    }

    public function actions👷DeleteWorkflowRunLogs(): Internal\Operator\Actions\DeleteWorkflowRunLogs
    {
        if ($this->actions👷DeleteWorkflowRunLogs instanceof Internal\Operator\Actions\DeleteWorkflowRunLogs === false) {
            $this->actions👷DeleteWorkflowRunLogs = new Internal\Operator\Actions\DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->actions👷DeleteWorkflowRunLogs;
    }

    public function actions👷GetPendingDeploymentsForRun(): Internal\Operator\Actions\GetPendingDeploymentsForRun
    {
        if ($this->actions👷GetPendingDeploymentsForRun instanceof Internal\Operator\Actions\GetPendingDeploymentsForRun === false) {
            $this->actions👷GetPendingDeploymentsForRun = new Internal\Operator\Actions\GetPendingDeploymentsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->actions👷GetPendingDeploymentsForRun;
    }

    public function actions👷ReviewPendingDeploymentsForRun(): Internal\Operator\Actions\ReviewPendingDeploymentsForRun
    {
        if ($this->actions👷ReviewPendingDeploymentsForRun instanceof Internal\Operator\Actions\ReviewPendingDeploymentsForRun === false) {
            $this->actions👷ReviewPendingDeploymentsForRun = new Internal\Operator\Actions\ReviewPendingDeploymentsForRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->actions👷ReviewPendingDeploymentsForRun;
    }

    public function actions👷ReRunWorkflow(): Internal\Operator\Actions\ReRunWorkflow
    {
        if ($this->actions👷ReRunWorkflow instanceof Internal\Operator\Actions\ReRunWorkflow === false) {
            $this->actions👷ReRunWorkflow = new Internal\Operator\Actions\ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun());
        }

        return $this->actions👷ReRunWorkflow;
    }

    public function actions👷ReRunWorkflowFailedJobs(): Internal\Operator\Actions\ReRunWorkflowFailedJobs
    {
        if ($this->actions👷ReRunWorkflowFailedJobs instanceof Internal\Operator\Actions\ReRunWorkflowFailedJobs === false) {
            $this->actions👷ReRunWorkflowFailedJobs = new Internal\Operator\Actions\ReRunWorkflowFailedJobs($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs());
        }

        return $this->actions👷ReRunWorkflowFailedJobs;
    }

    public function actions👷GetWorkflowRunUsage(): Internal\Operator\Actions\GetWorkflowRunUsage
    {
        if ($this->actions👷GetWorkflowRunUsage instanceof Internal\Operator\Actions\GetWorkflowRunUsage === false) {
            $this->actions👷GetWorkflowRunUsage = new Internal\Operator\Actions\GetWorkflowRunUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing());
        }

        return $this->actions👷GetWorkflowRunUsage;
    }

    public function actions👷ListRepoSecrets(): Internal\Operator\Actions\ListRepoSecrets
    {
        if ($this->actions👷ListRepoSecrets instanceof Internal\Operator\Actions\ListRepoSecrets === false) {
            $this->actions👷ListRepoSecrets = new Internal\Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets());
        }

        return $this->actions👷ListRepoSecrets;
    }

    public function actions👷GetRepoPublicKey(): Internal\Operator\Actions\GetRepoPublicKey
    {
        if ($this->actions👷GetRepoPublicKey instanceof Internal\Operator\Actions\GetRepoPublicKey === false) {
            $this->actions👷GetRepoPublicKey = new Internal\Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetRepoPublicKey;
    }

    public function actions👷GetRepoSecret(): Internal\Operator\Actions\GetRepoSecret
    {
        if ($this->actions👷GetRepoSecret instanceof Internal\Operator\Actions\GetRepoSecret === false) {
            $this->actions👷GetRepoSecret = new Internal\Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetRepoSecret;
    }

    public function actions👷CreateOrUpdateRepoSecret(): Internal\Operator\Actions\CreateOrUpdateRepoSecret
    {
        if ($this->actions👷CreateOrUpdateRepoSecret instanceof Internal\Operator\Actions\CreateOrUpdateRepoSecret === false) {
            $this->actions👷CreateOrUpdateRepoSecret = new Internal\Operator\Actions\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateRepoSecret;
    }

    public function actions👷DeleteRepoSecret(): Internal\Operator\Actions\DeleteRepoSecret
    {
        if ($this->actions👷DeleteRepoSecret instanceof Internal\Operator\Actions\DeleteRepoSecret === false) {
            $this->actions👷DeleteRepoSecret = new Internal\Operator\Actions\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoSecret;
    }

    public function actions👷ListRepoVariables(): Internal\Operator\Actions\ListRepoVariables
    {
        if ($this->actions👷ListRepoVariables instanceof Internal\Operator\Actions\ListRepoVariables === false) {
            $this->actions👷ListRepoVariables = new Internal\Operator\Actions\ListRepoVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->actions👷ListRepoVariables;
    }

    public function actions👷CreateRepoVariable(): Internal\Operator\Actions\CreateRepoVariable
    {
        if ($this->actions👷CreateRepoVariable instanceof Internal\Operator\Actions\CreateRepoVariable === false) {
            $this->actions👷CreateRepoVariable = new Internal\Operator\Actions\CreateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->actions👷CreateRepoVariable;
    }

    public function actions👷GetRepoVariable(): Internal\Operator\Actions\GetRepoVariable
    {
        if ($this->actions👷GetRepoVariable instanceof Internal\Operator\Actions\GetRepoVariable === false) {
            $this->actions👷GetRepoVariable = new Internal\Operator\Actions\GetRepoVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name());
        }

        return $this->actions👷GetRepoVariable;
    }

    public function actions👷DeleteRepoVariable(): Internal\Operator\Actions\DeleteRepoVariable
    {
        if ($this->actions👷DeleteRepoVariable instanceof Internal\Operator\Actions\DeleteRepoVariable === false) {
            $this->actions👷DeleteRepoVariable = new Internal\Operator\Actions\DeleteRepoVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoVariable;
    }

    public function actions👷UpdateRepoVariable(): Internal\Operator\Actions\UpdateRepoVariable
    {
        if ($this->actions👷UpdateRepoVariable instanceof Internal\Operator\Actions\UpdateRepoVariable === false) {
            $this->actions👷UpdateRepoVariable = new Internal\Operator\Actions\UpdateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateRepoVariable;
    }

    public function actions👷ListRepoWorkflows(): Internal\Operator\Actions\ListRepoWorkflows
    {
        if ($this->actions👷ListRepoWorkflows instanceof Internal\Operator\Actions\ListRepoWorkflows === false) {
            $this->actions👷ListRepoWorkflows = new Internal\Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows());
        }

        return $this->actions👷ListRepoWorkflows;
    }

    public function actions👷GetWorkflow(): Internal\Operator\Actions\GetWorkflow
    {
        if ($this->actions👷GetWorkflow instanceof Internal\Operator\Actions\GetWorkflow === false) {
            $this->actions👷GetWorkflow = new Internal\Operator\Actions\GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId());
        }

        return $this->actions👷GetWorkflow;
    }

    public function actions👷DisableWorkflow(): Internal\Operator\Actions\DisableWorkflow
    {
        if ($this->actions👷DisableWorkflow instanceof Internal\Operator\Actions\DisableWorkflow === false) {
            $this->actions👷DisableWorkflow = new Internal\Operator\Actions\DisableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷DisableWorkflow;
    }

    public function actions👷CreateWorkflowDispatch(): Internal\Operator\Actions\CreateWorkflowDispatch
    {
        if ($this->actions👷CreateWorkflowDispatch instanceof Internal\Operator\Actions\CreateWorkflowDispatch === false) {
            $this->actions👷CreateWorkflowDispatch = new Internal\Operator\Actions\CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷CreateWorkflowDispatch;
    }

    public function actions👷EnableWorkflow(): Internal\Operator\Actions\EnableWorkflow
    {
        if ($this->actions👷EnableWorkflow instanceof Internal\Operator\Actions\EnableWorkflow === false) {
            $this->actions👷EnableWorkflow = new Internal\Operator\Actions\EnableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷EnableWorkflow;
    }

    public function actions👷ListWorkflowRuns(): Internal\Operator\Actions\ListWorkflowRuns
    {
        if ($this->actions👷ListWorkflowRuns instanceof Internal\Operator\Actions\ListWorkflowRuns === false) {
            $this->actions👷ListWorkflowRuns = new Internal\Operator\Actions\ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs());
        }

        return $this->actions👷ListWorkflowRuns;
    }

    public function actions👷GetWorkflowUsage(): Internal\Operator\Actions\GetWorkflowUsage
    {
        if ($this->actions👷GetWorkflowUsage instanceof Internal\Operator\Actions\GetWorkflowUsage === false) {
            $this->actions👷GetWorkflowUsage = new Internal\Operator\Actions\GetWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing());
        }

        return $this->actions👷GetWorkflowUsage;
    }

    public function repos👷ListActivities(): Internal\Operator\Repos\ListActivities
    {
        if ($this->repos👷ListActivities instanceof Internal\Operator\Repos\ListActivities === false) {
            $this->repos👷ListActivities = new Internal\Operator\Repos\ListActivities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Activity());
        }

        return $this->repos👷ListActivities;
    }

    public function issues👷ListAssignees(): Internal\Operator\Issues\ListAssignees
    {
        if ($this->issues👷ListAssignees instanceof Internal\Operator\Issues\ListAssignees === false) {
            $this->issues👷ListAssignees = new Internal\Operator\Issues\ListAssignees($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssignees;
    }

    public function issues👷ListAssigneesListing(): Internal\Operator\Issues\ListAssigneesListing
    {
        if ($this->issues👷ListAssigneesListing instanceof Internal\Operator\Issues\ListAssigneesListing === false) {
            $this->issues👷ListAssigneesListing = new Internal\Operator\Issues\ListAssigneesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssigneesListing;
    }

    public function issues👷CheckUserCanBeAssigned(): Internal\Operator\Issues\CheckUserCanBeAssigned
    {
        if ($this->issues👷CheckUserCanBeAssigned instanceof Internal\Operator\Issues\CheckUserCanBeAssigned === false) {
            $this->issues👷CheckUserCanBeAssigned = new Internal\Operator\Issues\CheckUserCanBeAssigned($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssigned;
    }

    public function repos👷ListAutolinks(): Internal\Operator\Repos\ListAutolinks
    {
        if ($this->repos👷ListAutolinks instanceof Internal\Operator\Repos\ListAutolinks === false) {
            $this->repos👷ListAutolinks = new Internal\Operator\Repos\ListAutolinks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷ListAutolinks;
    }

    public function repos👷CreateAutolink(): Internal\Operator\Repos\CreateAutolink
    {
        if ($this->repos👷CreateAutolink instanceof Internal\Operator\Repos\CreateAutolink === false) {
            $this->repos👷CreateAutolink = new Internal\Operator\Repos\CreateAutolink($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷CreateAutolink;
    }

    public function repos👷GetAutolink(): Internal\Operator\Repos\GetAutolink
    {
        if ($this->repos👷GetAutolink instanceof Internal\Operator\Repos\GetAutolink === false) {
            $this->repos👷GetAutolink = new Internal\Operator\Repos\GetAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷GetAutolink;
    }

    public function repos👷DeleteAutolink(): Internal\Operator\Repos\DeleteAutolink
    {
        if ($this->repos👷DeleteAutolink instanceof Internal\Operator\Repos\DeleteAutolink === false) {
            $this->repos👷DeleteAutolink = new Internal\Operator\Repos\DeleteAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷DeleteAutolink;
    }

    public function repos👷CheckAutomatedSecurityFixes(): Internal\Operator\Repos\CheckAutomatedSecurityFixes
    {
        if ($this->repos👷CheckAutomatedSecurityFixes instanceof Internal\Operator\Repos\CheckAutomatedSecurityFixes === false) {
            $this->repos👷CheckAutomatedSecurityFixes = new Internal\Operator\Repos\CheckAutomatedSecurityFixes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes());
        }

        return $this->repos👷CheckAutomatedSecurityFixes;
    }

    public function repos👷EnableAutomatedSecurityFixes(): Internal\Operator\Repos\EnableAutomatedSecurityFixes
    {
        if ($this->repos👷EnableAutomatedSecurityFixes instanceof Internal\Operator\Repos\EnableAutomatedSecurityFixes === false) {
            $this->repos👷EnableAutomatedSecurityFixes = new Internal\Operator\Repos\EnableAutomatedSecurityFixes($this->browser, $this->authentication);
        }

        return $this->repos👷EnableAutomatedSecurityFixes;
    }

    public function repos👷DisableAutomatedSecurityFixes(): Internal\Operator\Repos\DisableAutomatedSecurityFixes
    {
        if ($this->repos👷DisableAutomatedSecurityFixes instanceof Internal\Operator\Repos\DisableAutomatedSecurityFixes === false) {
            $this->repos👷DisableAutomatedSecurityFixes = new Internal\Operator\Repos\DisableAutomatedSecurityFixes($this->browser, $this->authentication);
        }

        return $this->repos👷DisableAutomatedSecurityFixes;
    }

    public function repos👷ListBranches(): Internal\Operator\Repos\ListBranches
    {
        if ($this->repos👷ListBranches instanceof Internal\Operator\Repos\ListBranches === false) {
            $this->repos👷ListBranches = new Internal\Operator\Repos\ListBranches($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranches;
    }

    public function repos👷ListBranchesListing(): Internal\Operator\Repos\ListBranchesListing
    {
        if ($this->repos👷ListBranchesListing instanceof Internal\Operator\Repos\ListBranchesListing === false) {
            $this->repos👷ListBranchesListing = new Internal\Operator\Repos\ListBranchesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranchesListing;
    }

    public function repos👷GetBranch(): Internal\Operator\Repos\GetBranch
    {
        if ($this->repos👷GetBranch instanceof Internal\Operator\Repos\GetBranch === false) {
            $this->repos👷GetBranch = new Internal\Operator\Repos\GetBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranch;
    }

    public function repos👷GetBranchProtection(): Internal\Operator\Repos\GetBranchProtection
    {
        if ($this->repos👷GetBranchProtection instanceof Internal\Operator\Repos\GetBranchProtection === false) {
            $this->repos👷GetBranchProtection = new Internal\Operator\Repos\GetBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷GetBranchProtection;
    }

    public function repos👷UpdateBranchProtection(): Internal\Operator\Repos\UpdateBranchProtection
    {
        if ($this->repos👷UpdateBranchProtection instanceof Internal\Operator\Repos\UpdateBranchProtection === false) {
            $this->repos👷UpdateBranchProtection = new Internal\Operator\Repos\UpdateBranchProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷UpdateBranchProtection;
    }

    public function repos👷DeleteBranchProtection(): Internal\Operator\Repos\DeleteBranchProtection
    {
        if ($this->repos👷DeleteBranchProtection instanceof Internal\Operator\Repos\DeleteBranchProtection === false) {
            $this->repos👷DeleteBranchProtection = new Internal\Operator\Repos\DeleteBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷DeleteBranchProtection;
    }

    public function repos👷GetAdminBranchProtection(): Internal\Operator\Repos\GetAdminBranchProtection
    {
        if ($this->repos👷GetAdminBranchProtection instanceof Internal\Operator\Repos\GetAdminBranchProtection === false) {
            $this->repos👷GetAdminBranchProtection = new Internal\Operator\Repos\GetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷GetAdminBranchProtection;
    }

    public function repos👷SetAdminBranchProtection(): Internal\Operator\Repos\SetAdminBranchProtection
    {
        if ($this->repos👷SetAdminBranchProtection instanceof Internal\Operator\Repos\SetAdminBranchProtection === false) {
            $this->repos👷SetAdminBranchProtection = new Internal\Operator\Repos\SetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷SetAdminBranchProtection;
    }

    public function repos👷DeleteAdminBranchProtection(): Internal\Operator\Repos\DeleteAdminBranchProtection
    {
        if ($this->repos👷DeleteAdminBranchProtection instanceof Internal\Operator\Repos\DeleteAdminBranchProtection === false) {
            $this->repos👷DeleteAdminBranchProtection = new Internal\Operator\Repos\DeleteAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷DeleteAdminBranchProtection;
    }

    public function repos👷GetPullRequestReviewProtection(): Internal\Operator\Repos\GetPullRequestReviewProtection
    {
        if ($this->repos👷GetPullRequestReviewProtection instanceof Internal\Operator\Repos\GetPullRequestReviewProtection === false) {
            $this->repos👷GetPullRequestReviewProtection = new Internal\Operator\Repos\GetPullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷GetPullRequestReviewProtection;
    }

    public function repos👷DeletePullRequestReviewProtection(): Internal\Operator\Repos\DeletePullRequestReviewProtection
    {
        if ($this->repos👷DeletePullRequestReviewProtection instanceof Internal\Operator\Repos\DeletePullRequestReviewProtection === false) {
            $this->repos👷DeletePullRequestReviewProtection = new Internal\Operator\Repos\DeletePullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷DeletePullRequestReviewProtection;
    }

    public function repos👷UpdatePullRequestReviewProtection(): Internal\Operator\Repos\UpdatePullRequestReviewProtection
    {
        if ($this->repos👷UpdatePullRequestReviewProtection instanceof Internal\Operator\Repos\UpdatePullRequestReviewProtection === false) {
            $this->repos👷UpdatePullRequestReviewProtection = new Internal\Operator\Repos\UpdatePullRequestReviewProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷UpdatePullRequestReviewProtection;
    }

    public function repos👷GetCommitSignatureProtection(): Internal\Operator\Repos\GetCommitSignatureProtection
    {
        if ($this->repos👷GetCommitSignatureProtection instanceof Internal\Operator\Repos\GetCommitSignatureProtection === false) {
            $this->repos👷GetCommitSignatureProtection = new Internal\Operator\Repos\GetCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷GetCommitSignatureProtection;
    }

    public function repos👷CreateCommitSignatureProtection(): Internal\Operator\Repos\CreateCommitSignatureProtection
    {
        if ($this->repos👷CreateCommitSignatureProtection instanceof Internal\Operator\Repos\CreateCommitSignatureProtection === false) {
            $this->repos👷CreateCommitSignatureProtection = new Internal\Operator\Repos\CreateCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷CreateCommitSignatureProtection;
    }

    public function repos👷DeleteCommitSignatureProtection(): Internal\Operator\Repos\DeleteCommitSignatureProtection
    {
        if ($this->repos👷DeleteCommitSignatureProtection instanceof Internal\Operator\Repos\DeleteCommitSignatureProtection === false) {
            $this->repos👷DeleteCommitSignatureProtection = new Internal\Operator\Repos\DeleteCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷DeleteCommitSignatureProtection;
    }

    public function repos👷GetStatusChecksProtection(): Internal\Operator\Repos\GetStatusChecksProtection
    {
        if ($this->repos👷GetStatusChecksProtection instanceof Internal\Operator\Repos\GetStatusChecksProtection === false) {
            $this->repos👷GetStatusChecksProtection = new Internal\Operator\Repos\GetStatusChecksProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷GetStatusChecksProtection;
    }

    public function repos👷RemoveStatusCheckProtection(): Internal\Operator\Repos\RemoveStatusCheckProtection
    {
        if ($this->repos👷RemoveStatusCheckProtection instanceof Internal\Operator\Repos\RemoveStatusCheckProtection === false) {
            $this->repos👷RemoveStatusCheckProtection = new Internal\Operator\Repos\RemoveStatusCheckProtection($this->browser, $this->authentication);
        }

        return $this->repos👷RemoveStatusCheckProtection;
    }

    public function repos👷UpdateStatusCheckProtection(): Internal\Operator\Repos\UpdateStatusCheckProtection
    {
        if ($this->repos👷UpdateStatusCheckProtection instanceof Internal\Operator\Repos\UpdateStatusCheckProtection === false) {
            $this->repos👷UpdateStatusCheckProtection = new Internal\Operator\Repos\UpdateStatusCheckProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷UpdateStatusCheckProtection;
    }

    public function repos👷GetAllStatusCheckContexts(): Internal\Operator\Repos\GetAllStatusCheckContexts
    {
        if ($this->repos👷GetAllStatusCheckContexts instanceof Internal\Operator\Repos\GetAllStatusCheckContexts === false) {
            $this->repos👷GetAllStatusCheckContexts = new Internal\Operator\Repos\GetAllStatusCheckContexts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷GetAllStatusCheckContexts;
    }

    public function repos👷SetStatusCheckContexts(): Internal\Operator\Repos\SetStatusCheckContexts
    {
        if ($this->repos👷SetStatusCheckContexts instanceof Internal\Operator\Repos\SetStatusCheckContexts === false) {
            $this->repos👷SetStatusCheckContexts = new Internal\Operator\Repos\SetStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷SetStatusCheckContexts;
    }

    public function repos👷AddStatusCheckContexts(): Internal\Operator\Repos\AddStatusCheckContexts
    {
        if ($this->repos👷AddStatusCheckContexts instanceof Internal\Operator\Repos\AddStatusCheckContexts === false) {
            $this->repos👷AddStatusCheckContexts = new Internal\Operator\Repos\AddStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷AddStatusCheckContexts;
    }

    public function repos👷RemoveStatusCheckContexts(): Internal\Operator\Repos\RemoveStatusCheckContexts
    {
        if ($this->repos👷RemoveStatusCheckContexts instanceof Internal\Operator\Repos\RemoveStatusCheckContexts === false) {
            $this->repos👷RemoveStatusCheckContexts = new Internal\Operator\Repos\RemoveStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷RemoveStatusCheckContexts;
    }

    public function repos👷GetAccessRestrictions(): Internal\Operator\Repos\GetAccessRestrictions
    {
        if ($this->repos👷GetAccessRestrictions instanceof Internal\Operator\Repos\GetAccessRestrictions === false) {
            $this->repos👷GetAccessRestrictions = new Internal\Operator\Repos\GetAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions());
        }

        return $this->repos👷GetAccessRestrictions;
    }

    public function repos👷DeleteAccessRestrictions(): Internal\Operator\Repos\DeleteAccessRestrictions
    {
        if ($this->repos👷DeleteAccessRestrictions instanceof Internal\Operator\Repos\DeleteAccessRestrictions === false) {
            $this->repos👷DeleteAccessRestrictions = new Internal\Operator\Repos\DeleteAccessRestrictions($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAccessRestrictions;
    }

    public function repos👷GetAppsWithAccessToProtectedBranch(): Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetAppsWithAccessToProtectedBranch instanceof Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch === false) {
            $this->repos👷GetAppsWithAccessToProtectedBranch = new Internal\Operator\Repos\GetAppsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷GetAppsWithAccessToProtectedBranch;
    }

    public function repos👷SetAppAccessRestrictions(): Internal\Operator\Repos\SetAppAccessRestrictions
    {
        if ($this->repos👷SetAppAccessRestrictions instanceof Internal\Operator\Repos\SetAppAccessRestrictions === false) {
            $this->repos👷SetAppAccessRestrictions = new Internal\Operator\Repos\SetAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷SetAppAccessRestrictions;
    }

    public function repos👷AddAppAccessRestrictions(): Internal\Operator\Repos\AddAppAccessRestrictions
    {
        if ($this->repos👷AddAppAccessRestrictions instanceof Internal\Operator\Repos\AddAppAccessRestrictions === false) {
            $this->repos👷AddAppAccessRestrictions = new Internal\Operator\Repos\AddAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷AddAppAccessRestrictions;
    }

    public function repos👷RemoveAppAccessRestrictions(): Internal\Operator\Repos\RemoveAppAccessRestrictions
    {
        if ($this->repos👷RemoveAppAccessRestrictions instanceof Internal\Operator\Repos\RemoveAppAccessRestrictions === false) {
            $this->repos👷RemoveAppAccessRestrictions = new Internal\Operator\Repos\RemoveAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷RemoveAppAccessRestrictions;
    }

    public function repos👷GetTeamsWithAccessToProtectedBranch(): Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetTeamsWithAccessToProtectedBranch instanceof Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch === false) {
            $this->repos👷GetTeamsWithAccessToProtectedBranch = new Internal\Operator\Repos\GetTeamsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷GetTeamsWithAccessToProtectedBranch;
    }

    public function repos👷SetTeamAccessRestrictions(): Internal\Operator\Repos\SetTeamAccessRestrictions
    {
        if ($this->repos👷SetTeamAccessRestrictions instanceof Internal\Operator\Repos\SetTeamAccessRestrictions === false) {
            $this->repos👷SetTeamAccessRestrictions = new Internal\Operator\Repos\SetTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷SetTeamAccessRestrictions;
    }

    public function repos👷AddTeamAccessRestrictions(): Internal\Operator\Repos\AddTeamAccessRestrictions
    {
        if ($this->repos👷AddTeamAccessRestrictions instanceof Internal\Operator\Repos\AddTeamAccessRestrictions === false) {
            $this->repos👷AddTeamAccessRestrictions = new Internal\Operator\Repos\AddTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷AddTeamAccessRestrictions;
    }

    public function repos👷RemoveTeamAccessRestrictions(): Internal\Operator\Repos\RemoveTeamAccessRestrictions
    {
        if ($this->repos👷RemoveTeamAccessRestrictions instanceof Internal\Operator\Repos\RemoveTeamAccessRestrictions === false) {
            $this->repos👷RemoveTeamAccessRestrictions = new Internal\Operator\Repos\RemoveTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷RemoveTeamAccessRestrictions;
    }

    public function repos👷GetUsersWithAccessToProtectedBranch(): Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch
    {
        if ($this->repos👷GetUsersWithAccessToProtectedBranch instanceof Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch === false) {
            $this->repos👷GetUsersWithAccessToProtectedBranch = new Internal\Operator\Repos\GetUsersWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷GetUsersWithAccessToProtectedBranch;
    }

    public function repos👷SetUserAccessRestrictions(): Internal\Operator\Repos\SetUserAccessRestrictions
    {
        if ($this->repos👷SetUserAccessRestrictions instanceof Internal\Operator\Repos\SetUserAccessRestrictions === false) {
            $this->repos👷SetUserAccessRestrictions = new Internal\Operator\Repos\SetUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷SetUserAccessRestrictions;
    }

    public function repos👷AddUserAccessRestrictions(): Internal\Operator\Repos\AddUserAccessRestrictions
    {
        if ($this->repos👷AddUserAccessRestrictions instanceof Internal\Operator\Repos\AddUserAccessRestrictions === false) {
            $this->repos👷AddUserAccessRestrictions = new Internal\Operator\Repos\AddUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷AddUserAccessRestrictions;
    }

    public function repos👷RemoveUserAccessRestrictions(): Internal\Operator\Repos\RemoveUserAccessRestrictions
    {
        if ($this->repos👷RemoveUserAccessRestrictions instanceof Internal\Operator\Repos\RemoveUserAccessRestrictions === false) {
            $this->repos👷RemoveUserAccessRestrictions = new Internal\Operator\Repos\RemoveUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷RemoveUserAccessRestrictions;
    }

    public function repos👷RenameBranch(): Internal\Operator\Repos\RenameBranch
    {
        if ($this->repos👷RenameBranch instanceof Internal\Operator\Repos\RenameBranch === false) {
            $this->repos👷RenameBranch = new Internal\Operator\Repos\RenameBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename());
        }

        return $this->repos👷RenameBranch;
    }

    public function checks👷Create(): Internal\Operator\Checks\Create
    {
        if ($this->checks👷Create instanceof Internal\Operator\Checks\Create === false) {
            $this->checks👷Create = new Internal\Operator\Checks\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns());
        }

        return $this->checks👷Create;
    }

    public function checks👷Get(): Internal\Operator\Checks\Get
    {
        if ($this->checks👷Get instanceof Internal\Operator\Checks\Get === false) {
            $this->checks👷Get = new Internal\Operator\Checks\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Get;
    }

    public function checks👷Update(): Internal\Operator\Checks\Update
    {
        if ($this->checks👷Update instanceof Internal\Operator\Checks\Update === false) {
            $this->checks👷Update = new Internal\Operator\Checks\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Update;
    }

    public function checks👷ListAnnotations(): Internal\Operator\Checks\ListAnnotations
    {
        if ($this->checks👷ListAnnotations instanceof Internal\Operator\Checks\ListAnnotations === false) {
            $this->checks👷ListAnnotations = new Internal\Operator\Checks\ListAnnotations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotations;
    }

    public function checks👷ListAnnotationsListing(): Internal\Operator\Checks\ListAnnotationsListing
    {
        if ($this->checks👷ListAnnotationsListing instanceof Internal\Operator\Checks\ListAnnotationsListing === false) {
            $this->checks👷ListAnnotationsListing = new Internal\Operator\Checks\ListAnnotationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotationsListing;
    }

    public function checks👷RerequestRun(): Internal\Operator\Checks\RerequestRun
    {
        if ($this->checks👷RerequestRun instanceof Internal\Operator\Checks\RerequestRun === false) {
            $this->checks👷RerequestRun = new Internal\Operator\Checks\RerequestRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest());
        }

        return $this->checks👷RerequestRun;
    }

    public function checks👷CreateSuite(): Internal\Operator\Checks\CreateSuite
    {
        if ($this->checks👷CreateSuite instanceof Internal\Operator\Checks\CreateSuite === false) {
            $this->checks👷CreateSuite = new Internal\Operator\Checks\CreateSuite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites());
        }

        return $this->checks👷CreateSuite;
    }

    public function checks👷SetSuitesPreferences(): Internal\Operator\Checks\SetSuitesPreferences
    {
        if ($this->checks👷SetSuitesPreferences instanceof Internal\Operator\Checks\SetSuitesPreferences === false) {
            $this->checks👷SetSuitesPreferences = new Internal\Operator\Checks\SetSuitesPreferences($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences());
        }

        return $this->checks👷SetSuitesPreferences;
    }

    public function checks👷GetSuite(): Internal\Operator\Checks\GetSuite
    {
        if ($this->checks👷GetSuite instanceof Internal\Operator\Checks\GetSuite === false) {
            $this->checks👷GetSuite = new Internal\Operator\Checks\GetSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId());
        }

        return $this->checks👷GetSuite;
    }

    public function checks👷ListForSuite(): Internal\Operator\Checks\ListForSuite
    {
        if ($this->checks👷ListForSuite instanceof Internal\Operator\Checks\ListForSuite === false) {
            $this->checks👷ListForSuite = new Internal\Operator\Checks\ListForSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns());
        }

        return $this->checks👷ListForSuite;
    }

    public function checks👷RerequestSuite(): Internal\Operator\Checks\RerequestSuite
    {
        if ($this->checks👷RerequestSuite instanceof Internal\Operator\Checks\RerequestSuite === false) {
            $this->checks👷RerequestSuite = new Internal\Operator\Checks\RerequestSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest());
        }

        return $this->checks👷RerequestSuite;
    }

    public function codeScanning👷ListAlertsForRepo(): Internal\Operator\CodeScanning\ListAlertsForRepo
    {
        if ($this->codeScanning👷ListAlertsForRepo instanceof Internal\Operator\CodeScanning\ListAlertsForRepo === false) {
            $this->codeScanning👷ListAlertsForRepo = new Internal\Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepo;
    }

    public function codeScanning👷ListAlertsForRepoListing(): Internal\Operator\CodeScanning\ListAlertsForRepoListing
    {
        if ($this->codeScanning👷ListAlertsForRepoListing instanceof Internal\Operator\CodeScanning\ListAlertsForRepoListing === false) {
            $this->codeScanning👷ListAlertsForRepoListing = new Internal\Operator\CodeScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepoListing;
    }

    public function codeScanning👷GetAlert(): Internal\Operator\CodeScanning\GetAlert
    {
        if ($this->codeScanning👷GetAlert instanceof Internal\Operator\CodeScanning\GetAlert === false) {
            $this->codeScanning👷GetAlert = new Internal\Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷GetAlert;
    }

    public function codeScanning👷UpdateAlert(): Internal\Operator\CodeScanning\UpdateAlert
    {
        if ($this->codeScanning👷UpdateAlert instanceof Internal\Operator\CodeScanning\UpdateAlert === false) {
            $this->codeScanning👷UpdateAlert = new Internal\Operator\CodeScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷UpdateAlert;
    }

    public function codeScanning👷ListAlertInstances(): Internal\Operator\CodeScanning\ListAlertInstances
    {
        if ($this->codeScanning👷ListAlertInstances instanceof Internal\Operator\CodeScanning\ListAlertInstances === false) {
            $this->codeScanning👷ListAlertInstances = new Internal\Operator\CodeScanning\ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstances;
    }

    public function codeScanning👷ListAlertInstancesListing(): Internal\Operator\CodeScanning\ListAlertInstancesListing
    {
        if ($this->codeScanning👷ListAlertInstancesListing instanceof Internal\Operator\CodeScanning\ListAlertInstancesListing === false) {
            $this->codeScanning👷ListAlertInstancesListing = new Internal\Operator\CodeScanning\ListAlertInstancesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstancesListing;
    }

    public function codeScanning👷ListRecentAnalyses(): Internal\Operator\CodeScanning\ListRecentAnalyses
    {
        if ($this->codeScanning👷ListRecentAnalyses instanceof Internal\Operator\CodeScanning\ListRecentAnalyses === false) {
            $this->codeScanning👷ListRecentAnalyses = new Internal\Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalyses;
    }

    public function codeScanning👷ListRecentAnalysesListing(): Internal\Operator\CodeScanning\ListRecentAnalysesListing
    {
        if ($this->codeScanning👷ListRecentAnalysesListing instanceof Internal\Operator\CodeScanning\ListRecentAnalysesListing === false) {
            $this->codeScanning👷ListRecentAnalysesListing = new Internal\Operator\CodeScanning\ListRecentAnalysesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalysesListing;
    }

    public function codeScanning👷GetAnalysis(): Internal\Operator\CodeScanning\GetAnalysis
    {
        if ($this->codeScanning👷GetAnalysis instanceof Internal\Operator\CodeScanning\GetAnalysis === false) {
            $this->codeScanning👷GetAnalysis = new Internal\Operator\CodeScanning\GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷GetAnalysis;
    }

    public function codeScanning👷DeleteAnalysis(): Internal\Operator\CodeScanning\DeleteAnalysis
    {
        if ($this->codeScanning👷DeleteAnalysis instanceof Internal\Operator\CodeScanning\DeleteAnalysis === false) {
            $this->codeScanning👷DeleteAnalysis = new Internal\Operator\CodeScanning\DeleteAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷DeleteAnalysis;
    }

    public function codeScanning👷ListCodeqlDatabases(): Internal\Operator\CodeScanning\ListCodeqlDatabases
    {
        if ($this->codeScanning👷ListCodeqlDatabases instanceof Internal\Operator\CodeScanning\ListCodeqlDatabases === false) {
            $this->codeScanning👷ListCodeqlDatabases = new Internal\Operator\CodeScanning\ListCodeqlDatabases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases());
        }

        return $this->codeScanning👷ListCodeqlDatabases;
    }

    public function codeScanning👷GetCodeqlDatabase(): Internal\Operator\CodeScanning\GetCodeqlDatabase
    {
        if ($this->codeScanning👷GetCodeqlDatabase instanceof Internal\Operator\CodeScanning\GetCodeqlDatabase === false) {
            $this->codeScanning👷GetCodeqlDatabase = new Internal\Operator\CodeScanning\GetCodeqlDatabase($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language());
        }

        return $this->codeScanning👷GetCodeqlDatabase;
    }

    public function codeScanning👷GetDefaultSetup(): Internal\Operator\CodeScanning\GetDefaultSetup
    {
        if ($this->codeScanning👷GetDefaultSetup instanceof Internal\Operator\CodeScanning\GetDefaultSetup === false) {
            $this->codeScanning👷GetDefaultSetup = new Internal\Operator\CodeScanning\GetDefaultSetup($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());
        }

        return $this->codeScanning👷GetDefaultSetup;
    }

    public function codeScanning👷UpdateDefaultSetup(): Internal\Operator\CodeScanning\UpdateDefaultSetup
    {
        if ($this->codeScanning👷UpdateDefaultSetup instanceof Internal\Operator\CodeScanning\UpdateDefaultSetup === false) {
            $this->codeScanning👷UpdateDefaultSetup = new Internal\Operator\CodeScanning\UpdateDefaultSetup($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());
        }

        return $this->codeScanning👷UpdateDefaultSetup;
    }

    public function codeScanning👷UploadSarif(): Internal\Operator\CodeScanning\UploadSarif
    {
        if ($this->codeScanning👷UploadSarif instanceof Internal\Operator\CodeScanning\UploadSarif === false) {
            $this->codeScanning👷UploadSarif = new Internal\Operator\CodeScanning\UploadSarif($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs());
        }

        return $this->codeScanning👷UploadSarif;
    }

    public function codeScanning👷GetSarif(): Internal\Operator\CodeScanning\GetSarif
    {
        if ($this->codeScanning👷GetSarif instanceof Internal\Operator\CodeScanning\GetSarif === false) {
            $this->codeScanning👷GetSarif = new Internal\Operator\CodeScanning\GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId());
        }

        return $this->codeScanning👷GetSarif;
    }

    public function repos👷CodeownersErrors(): Internal\Operator\Repos\CodeownersErrors
    {
        if ($this->repos👷CodeownersErrors instanceof Internal\Operator\Repos\CodeownersErrors === false) {
            $this->repos👷CodeownersErrors = new Internal\Operator\Repos\CodeownersErrors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors());
        }

        return $this->repos👷CodeownersErrors;
    }

    public function codespaces👷ListInRepositoryForAuthenticatedUser(): Internal\Operator\Codespaces\ListInRepositoryForAuthenticatedUser
    {
        if ($this->codespaces👷ListInRepositoryForAuthenticatedUser instanceof Internal\Operator\Codespaces\ListInRepositoryForAuthenticatedUser === false) {
            $this->codespaces👷ListInRepositoryForAuthenticatedUser = new Internal\Operator\Codespaces\ListInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->codespaces👷ListInRepositoryForAuthenticatedUser;
    }

    public function codespaces👷CreateWithRepoForAuthenticatedUser(): Internal\Operator\Codespaces\CreateWithRepoForAuthenticatedUser
    {
        if ($this->codespaces👷CreateWithRepoForAuthenticatedUser instanceof Internal\Operator\Codespaces\CreateWithRepoForAuthenticatedUser === false) {
            $this->codespaces👷CreateWithRepoForAuthenticatedUser = new Internal\Operator\Codespaces\CreateWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->codespaces👷CreateWithRepoForAuthenticatedUser;
    }

    public function codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser(): Internal\Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser
    {
        if ($this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser instanceof Internal\Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser === false) {
            $this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser = new Internal\Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers());
        }

        return $this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser;
    }

    public function codespaces👷RepoMachinesForAuthenticatedUser(): Internal\Operator\Codespaces\RepoMachinesForAuthenticatedUser
    {
        if ($this->codespaces👷RepoMachinesForAuthenticatedUser instanceof Internal\Operator\Codespaces\RepoMachinesForAuthenticatedUser === false) {
            $this->codespaces👷RepoMachinesForAuthenticatedUser = new Internal\Operator\Codespaces\RepoMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines());
        }

        return $this->codespaces👷RepoMachinesForAuthenticatedUser;
    }

    public function codespaces👷PreFlightWithRepoForAuthenticatedUser(): Internal\Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser
    {
        if ($this->codespaces👷PreFlightWithRepoForAuthenticatedUser instanceof Internal\Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser === false) {
            $this->codespaces👷PreFlightWithRepoForAuthenticatedUser = new Internal\Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_());
        }

        return $this->codespaces👷PreFlightWithRepoForAuthenticatedUser;
    }

    public function codespaces👷CheckPermissionsForDevcontainer(): Internal\Operator\Codespaces\CheckPermissionsForDevcontainer
    {
        if ($this->codespaces👷CheckPermissionsForDevcontainer instanceof Internal\Operator\Codespaces\CheckPermissionsForDevcontainer === false) {
            $this->codespaces👷CheckPermissionsForDevcontainer = new Internal\Operator\Codespaces\CheckPermissionsForDevcontainer($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck());
        }

        return $this->codespaces👷CheckPermissionsForDevcontainer;
    }

    public function codespaces👷ListRepoSecrets(): Internal\Operator\Codespaces\ListRepoSecrets
    {
        if ($this->codespaces👷ListRepoSecrets instanceof Internal\Operator\Codespaces\ListRepoSecrets === false) {
            $this->codespaces👷ListRepoSecrets = new Internal\Operator\Codespaces\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListRepoSecrets;
    }

    public function codespaces👷GetRepoPublicKey(): Internal\Operator\Codespaces\GetRepoPublicKey
    {
        if ($this->codespaces👷GetRepoPublicKey instanceof Internal\Operator\Codespaces\GetRepoPublicKey === false) {
            $this->codespaces👷GetRepoPublicKey = new Internal\Operator\Codespaces\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetRepoPublicKey;
    }

    public function codespaces👷GetRepoSecret(): Internal\Operator\Codespaces\GetRepoSecret
    {
        if ($this->codespaces👷GetRepoSecret instanceof Internal\Operator\Codespaces\GetRepoSecret === false) {
            $this->codespaces👷GetRepoSecret = new Internal\Operator\Codespaces\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetRepoSecret;
    }

    public function codespaces👷CreateOrUpdateRepoSecret(): Internal\Operator\Codespaces\CreateOrUpdateRepoSecret
    {
        if ($this->codespaces👷CreateOrUpdateRepoSecret instanceof Internal\Operator\Codespaces\CreateOrUpdateRepoSecret === false) {
            $this->codespaces👷CreateOrUpdateRepoSecret = new Internal\Operator\Codespaces\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateRepoSecret;
    }

    public function codespaces👷DeleteRepoSecret(): Internal\Operator\Codespaces\DeleteRepoSecret
    {
        if ($this->codespaces👷DeleteRepoSecret instanceof Internal\Operator\Codespaces\DeleteRepoSecret === false) {
            $this->codespaces👷DeleteRepoSecret = new Internal\Operator\Codespaces\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->codespaces👷DeleteRepoSecret;
    }

    public function repos👷ListCollaborators(): Internal\Operator\Repos\ListCollaborators
    {
        if ($this->repos👷ListCollaborators instanceof Internal\Operator\Repos\ListCollaborators === false) {
            $this->repos👷ListCollaborators = new Internal\Operator\Repos\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaborators;
    }

    public function repos👷ListCollaboratorsListing(): Internal\Operator\Repos\ListCollaboratorsListing
    {
        if ($this->repos👷ListCollaboratorsListing instanceof Internal\Operator\Repos\ListCollaboratorsListing === false) {
            $this->repos👷ListCollaboratorsListing = new Internal\Operator\Repos\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaboratorsListing;
    }

    public function repos👷CheckCollaborator(): Internal\Operator\Repos\CheckCollaborator
    {
        if ($this->repos👷CheckCollaborator instanceof Internal\Operator\Repos\CheckCollaborator === false) {
            $this->repos👷CheckCollaborator = new Internal\Operator\Repos\CheckCollaborator($this->browser, $this->authentication);
        }

        return $this->repos👷CheckCollaborator;
    }

    public function repos👷AddCollaborator(): Internal\Operator\Repos\AddCollaborator
    {
        if ($this->repos👷AddCollaborator instanceof Internal\Operator\Repos\AddCollaborator === false) {
            $this->repos👷AddCollaborator = new Internal\Operator\Repos\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷AddCollaborator;
    }

    public function repos👷RemoveCollaborator(): Internal\Operator\Repos\RemoveCollaborator
    {
        if ($this->repos👷RemoveCollaborator instanceof Internal\Operator\Repos\RemoveCollaborator === false) {
            $this->repos👷RemoveCollaborator = new Internal\Operator\Repos\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷RemoveCollaborator;
    }

    public function repos👷GetCollaboratorPermissionLevel(): Internal\Operator\Repos\GetCollaboratorPermissionLevel
    {
        if ($this->repos👷GetCollaboratorPermissionLevel instanceof Internal\Operator\Repos\GetCollaboratorPermissionLevel === false) {
            $this->repos👷GetCollaboratorPermissionLevel = new Internal\Operator\Repos\GetCollaboratorPermissionLevel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission());
        }

        return $this->repos👷GetCollaboratorPermissionLevel;
    }

    public function repos👷ListCommitCommentsForRepo(): Internal\Operator\Repos\ListCommitCommentsForRepo
    {
        if ($this->repos👷ListCommitCommentsForRepo instanceof Internal\Operator\Repos\ListCommitCommentsForRepo === false) {
            $this->repos👷ListCommitCommentsForRepo = new Internal\Operator\Repos\ListCommitCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepo;
    }

    public function repos👷ListCommitCommentsForRepoListing(): Internal\Operator\Repos\ListCommitCommentsForRepoListing
    {
        if ($this->repos👷ListCommitCommentsForRepoListing instanceof Internal\Operator\Repos\ListCommitCommentsForRepoListing === false) {
            $this->repos👷ListCommitCommentsForRepoListing = new Internal\Operator\Repos\ListCommitCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepoListing;
    }

    public function repos👷GetCommitComment(): Internal\Operator\Repos\GetCommitComment
    {
        if ($this->repos👷GetCommitComment instanceof Internal\Operator\Repos\GetCommitComment === false) {
            $this->repos👷GetCommitComment = new Internal\Operator\Repos\GetCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷GetCommitComment;
    }

    public function repos👷DeleteCommitComment(): Internal\Operator\Repos\DeleteCommitComment
    {
        if ($this->repos👷DeleteCommitComment instanceof Internal\Operator\Repos\DeleteCommitComment === false) {
            $this->repos👷DeleteCommitComment = new Internal\Operator\Repos\DeleteCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷DeleteCommitComment;
    }

    public function repos👷UpdateCommitComment(): Internal\Operator\Repos\UpdateCommitComment
    {
        if ($this->repos👷UpdateCommitComment instanceof Internal\Operator\Repos\UpdateCommitComment === false) {
            $this->repos👷UpdateCommitComment = new Internal\Operator\Repos\UpdateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷UpdateCommitComment;
    }

    public function reactions👷ListForCommitComment(): Internal\Operator\Reactions\ListForCommitComment
    {
        if ($this->reactions👷ListForCommitComment instanceof Internal\Operator\Reactions\ListForCommitComment === false) {
            $this->reactions👷ListForCommitComment = new Internal\Operator\Reactions\ListForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitComment;
    }

    public function reactions👷ListForCommitCommentListing(): Internal\Operator\Reactions\ListForCommitCommentListing
    {
        if ($this->reactions👷ListForCommitCommentListing instanceof Internal\Operator\Reactions\ListForCommitCommentListing === false) {
            $this->reactions👷ListForCommitCommentListing = new Internal\Operator\Reactions\ListForCommitCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitCommentListing;
    }

    public function reactions👷CreateForCommitComment(): Internal\Operator\Reactions\CreateForCommitComment
    {
        if ($this->reactions👷CreateForCommitComment instanceof Internal\Operator\Reactions\CreateForCommitComment === false) {
            $this->reactions👷CreateForCommitComment = new Internal\Operator\Reactions\CreateForCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForCommitComment;
    }

    public function reactions👷DeleteForCommitComment(): Internal\Operator\Reactions\DeleteForCommitComment
    {
        if ($this->reactions👷DeleteForCommitComment instanceof Internal\Operator\Reactions\DeleteForCommitComment === false) {
            $this->reactions👷DeleteForCommitComment = new Internal\Operator\Reactions\DeleteForCommitComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForCommitComment;
    }

    public function repos👷ListCommits(): Internal\Operator\Repos\ListCommits
    {
        if ($this->repos👷ListCommits instanceof Internal\Operator\Repos\ListCommits === false) {
            $this->repos👷ListCommits = new Internal\Operator\Repos\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommits;
    }

    public function repos👷ListCommitsListing(): Internal\Operator\Repos\ListCommitsListing
    {
        if ($this->repos👷ListCommitsListing instanceof Internal\Operator\Repos\ListCommitsListing === false) {
            $this->repos👷ListCommitsListing = new Internal\Operator\Repos\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommitsListing;
    }

    public function repos👷ListBranchesForHeadCommit(): Internal\Operator\Repos\ListBranchesForHeadCommit
    {
        if ($this->repos👷ListBranchesForHeadCommit instanceof Internal\Operator\Repos\ListBranchesForHeadCommit === false) {
            $this->repos👷ListBranchesForHeadCommit = new Internal\Operator\Repos\ListBranchesForHeadCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead());
        }

        return $this->repos👷ListBranchesForHeadCommit;
    }

    public function repos👷ListCommentsForCommit(): Internal\Operator\Repos\ListCommentsForCommit
    {
        if ($this->repos👷ListCommentsForCommit instanceof Internal\Operator\Repos\ListCommentsForCommit === false) {
            $this->repos👷ListCommentsForCommit = new Internal\Operator\Repos\ListCommentsForCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommit;
    }

    public function repos👷ListCommentsForCommitListing(): Internal\Operator\Repos\ListCommentsForCommitListing
    {
        if ($this->repos👷ListCommentsForCommitListing instanceof Internal\Operator\Repos\ListCommentsForCommitListing === false) {
            $this->repos👷ListCommentsForCommitListing = new Internal\Operator\Repos\ListCommentsForCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommitListing;
    }

    public function repos👷CreateCommitComment(): Internal\Operator\Repos\CreateCommitComment
    {
        if ($this->repos👷CreateCommitComment instanceof Internal\Operator\Repos\CreateCommitComment === false) {
            $this->repos👷CreateCommitComment = new Internal\Operator\Repos\CreateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷CreateCommitComment;
    }

    public function repos👷ListPullRequestsAssociatedWithCommit(): Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommit instanceof Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommit = new Internal\Operator\Repos\ListPullRequestsAssociatedWithCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommit;
    }

    public function repos👷ListPullRequestsAssociatedWithCommitListing(): Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommitListing instanceof Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommitListing = new Internal\Operator\Repos\ListPullRequestsAssociatedWithCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommitListing;
    }

    public function repos👷GetCommit(): Internal\Operator\Repos\GetCommit
    {
        if ($this->repos👷GetCommit instanceof Internal\Operator\Repos\GetCommit === false) {
            $this->repos👷GetCommit = new Internal\Operator\Repos\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref());
        }

        return $this->repos👷GetCommit;
    }

    public function checks👷ListForRef(): Internal\Operator\Checks\ListForRef
    {
        if ($this->checks👷ListForRef instanceof Internal\Operator\Checks\ListForRef === false) {
            $this->checks👷ListForRef = new Internal\Operator\Checks\ListForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns());
        }

        return $this->checks👷ListForRef;
    }

    public function checks👷ListSuitesForRef(): Internal\Operator\Checks\ListSuitesForRef
    {
        if ($this->checks👷ListSuitesForRef instanceof Internal\Operator\Checks\ListSuitesForRef === false) {
            $this->checks👷ListSuitesForRef = new Internal\Operator\Checks\ListSuitesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites());
        }

        return $this->checks👷ListSuitesForRef;
    }

    public function repos👷GetCombinedStatusForRef(): Internal\Operator\Repos\GetCombinedStatusForRef
    {
        if ($this->repos👷GetCombinedStatusForRef instanceof Internal\Operator\Repos\GetCombinedStatusForRef === false) {
            $this->repos👷GetCombinedStatusForRef = new Internal\Operator\Repos\GetCombinedStatusForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status());
        }

        return $this->repos👷GetCombinedStatusForRef;
    }

    public function repos👷ListCommitStatusesForRef(): Internal\Operator\Repos\ListCommitStatusesForRef
    {
        if ($this->repos👷ListCommitStatusesForRef instanceof Internal\Operator\Repos\ListCommitStatusesForRef === false) {
            $this->repos👷ListCommitStatusesForRef = new Internal\Operator\Repos\ListCommitStatusesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRef;
    }

    public function repos👷ListCommitStatusesForRefListing(): Internal\Operator\Repos\ListCommitStatusesForRefListing
    {
        if ($this->repos👷ListCommitStatusesForRefListing instanceof Internal\Operator\Repos\ListCommitStatusesForRefListing === false) {
            $this->repos👷ListCommitStatusesForRefListing = new Internal\Operator\Repos\ListCommitStatusesForRefListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRefListing;
    }

    public function repos👷GetCommunityProfileMetrics(): Internal\Operator\Repos\GetCommunityProfileMetrics
    {
        if ($this->repos👷GetCommunityProfileMetrics instanceof Internal\Operator\Repos\GetCommunityProfileMetrics === false) {
            $this->repos👷GetCommunityProfileMetrics = new Internal\Operator\Repos\GetCommunityProfileMetrics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile());
        }

        return $this->repos👷GetCommunityProfileMetrics;
    }

    public function repos👷CompareCommits(): Internal\Operator\Repos\CompareCommits
    {
        if ($this->repos👷CompareCommits instanceof Internal\Operator\Repos\CompareCommits === false) {
            $this->repos👷CompareCommits = new Internal\Operator\Repos\CompareCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead());
        }

        return $this->repos👷CompareCommits;
    }

    public function repos👷GetContent(): Internal\Operator\Repos\GetContent
    {
        if ($this->repos👷GetContent instanceof Internal\Operator\Repos\GetContent === false) {
            $this->repos👷GetContent = new Internal\Operator\Repos\GetContent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷GetContent;
    }

    public function repos👷CreateOrUpdateFileContents(): Internal\Operator\Repos\CreateOrUpdateFileContents
    {
        if ($this->repos👷CreateOrUpdateFileContents instanceof Internal\Operator\Repos\CreateOrUpdateFileContents === false) {
            $this->repos👷CreateOrUpdateFileContents = new Internal\Operator\Repos\CreateOrUpdateFileContents($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷CreateOrUpdateFileContents;
    }

    public function repos👷DeleteFile(): Internal\Operator\Repos\DeleteFile
    {
        if ($this->repos👷DeleteFile instanceof Internal\Operator\Repos\DeleteFile === false) {
            $this->repos👷DeleteFile = new Internal\Operator\Repos\DeleteFile($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷DeleteFile;
    }

    public function repos👷ListContributors(): Internal\Operator\Repos\ListContributors
    {
        if ($this->repos👷ListContributors instanceof Internal\Operator\Repos\ListContributors === false) {
            $this->repos👷ListContributors = new Internal\Operator\Repos\ListContributors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributors;
    }

    public function repos👷ListContributorsListing(): Internal\Operator\Repos\ListContributorsListing
    {
        if ($this->repos👷ListContributorsListing instanceof Internal\Operator\Repos\ListContributorsListing === false) {
            $this->repos👷ListContributorsListing = new Internal\Operator\Repos\ListContributorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributorsListing;
    }

    public function dependabot👷ListAlertsForRepo(): Internal\Operator\Dependabot\ListAlertsForRepo
    {
        if ($this->dependabot👷ListAlertsForRepo instanceof Internal\Operator\Dependabot\ListAlertsForRepo === false) {
            $this->dependabot👷ListAlertsForRepo = new Internal\Operator\Dependabot\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForRepo;
    }

    public function dependabot👷ListAlertsForRepoListing(): Internal\Operator\Dependabot\ListAlertsForRepoListing
    {
        if ($this->dependabot👷ListAlertsForRepoListing instanceof Internal\Operator\Dependabot\ListAlertsForRepoListing === false) {
            $this->dependabot👷ListAlertsForRepoListing = new Internal\Operator\Dependabot\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForRepoListing;
    }

    public function dependabot👷GetAlert(): Internal\Operator\Dependabot\GetAlert
    {
        if ($this->dependabot👷GetAlert instanceof Internal\Operator\Dependabot\GetAlert === false) {
            $this->dependabot👷GetAlert = new Internal\Operator\Dependabot\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->dependabot👷GetAlert;
    }

    public function dependabot👷UpdateAlert(): Internal\Operator\Dependabot\UpdateAlert
    {
        if ($this->dependabot👷UpdateAlert instanceof Internal\Operator\Dependabot\UpdateAlert === false) {
            $this->dependabot👷UpdateAlert = new Internal\Operator\Dependabot\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->dependabot👷UpdateAlert;
    }

    public function dependabot👷ListRepoSecrets(): Internal\Operator\Dependabot\ListRepoSecrets
    {
        if ($this->dependabot👷ListRepoSecrets instanceof Internal\Operator\Dependabot\ListRepoSecrets === false) {
            $this->dependabot👷ListRepoSecrets = new Internal\Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets());
        }

        return $this->dependabot👷ListRepoSecrets;
    }

    public function dependabot👷GetRepoPublicKey(): Internal\Operator\Dependabot\GetRepoPublicKey
    {
        if ($this->dependabot👷GetRepoPublicKey instanceof Internal\Operator\Dependabot\GetRepoPublicKey === false) {
            $this->dependabot👷GetRepoPublicKey = new Internal\Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->dependabot👷GetRepoPublicKey;
    }

    public function dependabot👷GetRepoSecret(): Internal\Operator\Dependabot\GetRepoSecret
    {
        if ($this->dependabot👷GetRepoSecret instanceof Internal\Operator\Dependabot\GetRepoSecret === false) {
            $this->dependabot👷GetRepoSecret = new Internal\Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷GetRepoSecret;
    }

    public function dependabot👷CreateOrUpdateRepoSecret(): Internal\Operator\Dependabot\CreateOrUpdateRepoSecret
    {
        if ($this->dependabot👷CreateOrUpdateRepoSecret instanceof Internal\Operator\Dependabot\CreateOrUpdateRepoSecret === false) {
            $this->dependabot👷CreateOrUpdateRepoSecret = new Internal\Operator\Dependabot\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷CreateOrUpdateRepoSecret;
    }

    public function dependabot👷DeleteRepoSecret(): Internal\Operator\Dependabot\DeleteRepoSecret
    {
        if ($this->dependabot👷DeleteRepoSecret instanceof Internal\Operator\Dependabot\DeleteRepoSecret === false) {
            $this->dependabot👷DeleteRepoSecret = new Internal\Operator\Dependabot\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷DeleteRepoSecret;
    }

    public function dependencyGraph👷DiffRange(): Internal\Operator\DependencyGraph\DiffRange
    {
        if ($this->dependencyGraph👷DiffRange instanceof Internal\Operator\DependencyGraph\DiffRange === false) {
            $this->dependencyGraph👷DiffRange = new Internal\Operator\DependencyGraph\DiffRange($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead());
        }

        return $this->dependencyGraph👷DiffRange;
    }

    public function dependencyGraph👷ExportSbom(): Internal\Operator\DependencyGraph\ExportSbom
    {
        if ($this->dependencyGraph👷ExportSbom instanceof Internal\Operator\DependencyGraph\ExportSbom === false) {
            $this->dependencyGraph👷ExportSbom = new Internal\Operator\DependencyGraph\ExportSbom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom());
        }

        return $this->dependencyGraph👷ExportSbom;
    }

    public function dependencyGraph👷CreateRepositorySnapshot(): Internal\Operator\DependencyGraph\CreateRepositorySnapshot
    {
        if ($this->dependencyGraph👷CreateRepositorySnapshot instanceof Internal\Operator\DependencyGraph\CreateRepositorySnapshot === false) {
            $this->dependencyGraph👷CreateRepositorySnapshot = new Internal\Operator\DependencyGraph\CreateRepositorySnapshot($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots());
        }

        return $this->dependencyGraph👷CreateRepositorySnapshot;
    }

    public function repos👷ListDeployments(): Internal\Operator\Repos\ListDeployments
    {
        if ($this->repos👷ListDeployments instanceof Internal\Operator\Repos\ListDeployments === false) {
            $this->repos👷ListDeployments = new Internal\Operator\Repos\ListDeployments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeployments;
    }

    public function repos👷ListDeploymentsListing(): Internal\Operator\Repos\ListDeploymentsListing
    {
        if ($this->repos👷ListDeploymentsListing instanceof Internal\Operator\Repos\ListDeploymentsListing === false) {
            $this->repos👷ListDeploymentsListing = new Internal\Operator\Repos\ListDeploymentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeploymentsListing;
    }

    public function repos👷CreateDeployment(): Internal\Operator\Repos\CreateDeployment
    {
        if ($this->repos👷CreateDeployment instanceof Internal\Operator\Repos\CreateDeployment === false) {
            $this->repos👷CreateDeployment = new Internal\Operator\Repos\CreateDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷CreateDeployment;
    }

    public function repos👷GetDeployment(): Internal\Operator\Repos\GetDeployment
    {
        if ($this->repos👷GetDeployment instanceof Internal\Operator\Repos\GetDeployment === false) {
            $this->repos👷GetDeployment = new Internal\Operator\Repos\GetDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷GetDeployment;
    }

    public function repos👷DeleteDeployment(): Internal\Operator\Repos\DeleteDeployment
    {
        if ($this->repos👷DeleteDeployment instanceof Internal\Operator\Repos\DeleteDeployment === false) {
            $this->repos👷DeleteDeployment = new Internal\Operator\Repos\DeleteDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷DeleteDeployment;
    }

    public function repos👷ListDeploymentStatuses(): Internal\Operator\Repos\ListDeploymentStatuses
    {
        if ($this->repos👷ListDeploymentStatuses instanceof Internal\Operator\Repos\ListDeploymentStatuses === false) {
            $this->repos👷ListDeploymentStatuses = new Internal\Operator\Repos\ListDeploymentStatuses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatuses;
    }

    public function repos👷ListDeploymentStatusesListing(): Internal\Operator\Repos\ListDeploymentStatusesListing
    {
        if ($this->repos👷ListDeploymentStatusesListing instanceof Internal\Operator\Repos\ListDeploymentStatusesListing === false) {
            $this->repos👷ListDeploymentStatusesListing = new Internal\Operator\Repos\ListDeploymentStatusesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatusesListing;
    }

    public function repos👷CreateDeploymentStatus(): Internal\Operator\Repos\CreateDeploymentStatus
    {
        if ($this->repos👷CreateDeploymentStatus instanceof Internal\Operator\Repos\CreateDeploymentStatus === false) {
            $this->repos👷CreateDeploymentStatus = new Internal\Operator\Repos\CreateDeploymentStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷CreateDeploymentStatus;
    }

    public function repos👷GetDeploymentStatus(): Internal\Operator\Repos\GetDeploymentStatus
    {
        if ($this->repos👷GetDeploymentStatus instanceof Internal\Operator\Repos\GetDeploymentStatus === false) {
            $this->repos👷GetDeploymentStatus = new Internal\Operator\Repos\GetDeploymentStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId());
        }

        return $this->repos👷GetDeploymentStatus;
    }

    public function repos👷CreateDispatchEvent(): Internal\Operator\Repos\CreateDispatchEvent
    {
        if ($this->repos👷CreateDispatchEvent instanceof Internal\Operator\Repos\CreateDispatchEvent === false) {
            $this->repos👷CreateDispatchEvent = new Internal\Operator\Repos\CreateDispatchEvent($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches());
        }

        return $this->repos👷CreateDispatchEvent;
    }

    public function repos👷GetAllEnvironments(): Internal\Operator\Repos\GetAllEnvironments
    {
        if ($this->repos👷GetAllEnvironments instanceof Internal\Operator\Repos\GetAllEnvironments === false) {
            $this->repos👷GetAllEnvironments = new Internal\Operator\Repos\GetAllEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments());
        }

        return $this->repos👷GetAllEnvironments;
    }

    public function repos👷GetEnvironment(): Internal\Operator\Repos\GetEnvironment
    {
        if ($this->repos👷GetEnvironment instanceof Internal\Operator\Repos\GetEnvironment === false) {
            $this->repos👷GetEnvironment = new Internal\Operator\Repos\GetEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷GetEnvironment;
    }

    public function repos👷CreateOrUpdateEnvironment(): Internal\Operator\Repos\CreateOrUpdateEnvironment
    {
        if ($this->repos👷CreateOrUpdateEnvironment instanceof Internal\Operator\Repos\CreateOrUpdateEnvironment === false) {
            $this->repos👷CreateOrUpdateEnvironment = new Internal\Operator\Repos\CreateOrUpdateEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷CreateOrUpdateEnvironment;
    }

    public function repos👷DeleteAnEnvironment(): Internal\Operator\Repos\DeleteAnEnvironment
    {
        if ($this->repos👷DeleteAnEnvironment instanceof Internal\Operator\Repos\DeleteAnEnvironment === false) {
            $this->repos👷DeleteAnEnvironment = new Internal\Operator\Repos\DeleteAnEnvironment($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAnEnvironment;
    }

    public function repos👷ListDeploymentBranchPolicies(): Internal\Operator\Repos\ListDeploymentBranchPolicies
    {
        if ($this->repos👷ListDeploymentBranchPolicies instanceof Internal\Operator\Repos\ListDeploymentBranchPolicies === false) {
            $this->repos👷ListDeploymentBranchPolicies = new Internal\Operator\Repos\ListDeploymentBranchPolicies($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷ListDeploymentBranchPolicies;
    }

    public function repos👷CreateDeploymentBranchPolicy(): Internal\Operator\Repos\CreateDeploymentBranchPolicy
    {
        if ($this->repos👷CreateDeploymentBranchPolicy instanceof Internal\Operator\Repos\CreateDeploymentBranchPolicy === false) {
            $this->repos👷CreateDeploymentBranchPolicy = new Internal\Operator\Repos\CreateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷CreateDeploymentBranchPolicy;
    }

    public function repos👷GetDeploymentBranchPolicy(): Internal\Operator\Repos\GetDeploymentBranchPolicy
    {
        if ($this->repos👷GetDeploymentBranchPolicy instanceof Internal\Operator\Repos\GetDeploymentBranchPolicy === false) {
            $this->repos👷GetDeploymentBranchPolicy = new Internal\Operator\Repos\GetDeploymentBranchPolicy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷GetDeploymentBranchPolicy;
    }

    public function repos👷UpdateDeploymentBranchPolicy(): Internal\Operator\Repos\UpdateDeploymentBranchPolicy
    {
        if ($this->repos👷UpdateDeploymentBranchPolicy instanceof Internal\Operator\Repos\UpdateDeploymentBranchPolicy === false) {
            $this->repos👷UpdateDeploymentBranchPolicy = new Internal\Operator\Repos\UpdateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷UpdateDeploymentBranchPolicy;
    }

    public function repos👷DeleteDeploymentBranchPolicy(): Internal\Operator\Repos\DeleteDeploymentBranchPolicy
    {
        if ($this->repos👷DeleteDeploymentBranchPolicy instanceof Internal\Operator\Repos\DeleteDeploymentBranchPolicy === false) {
            $this->repos👷DeleteDeploymentBranchPolicy = new Internal\Operator\Repos\DeleteDeploymentBranchPolicy($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeploymentBranchPolicy;
    }

    public function repos👷GetAllDeploymentProtectionRules(): Internal\Operator\Repos\GetAllDeploymentProtectionRules
    {
        if ($this->repos👷GetAllDeploymentProtectionRules instanceof Internal\Operator\Repos\GetAllDeploymentProtectionRules === false) {
            $this->repos👷GetAllDeploymentProtectionRules = new Internal\Operator\Repos\GetAllDeploymentProtectionRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->repos👷GetAllDeploymentProtectionRules;
    }

    public function repos👷CreateDeploymentProtectionRule(): Internal\Operator\Repos\CreateDeploymentProtectionRule
    {
        if ($this->repos👷CreateDeploymentProtectionRule instanceof Internal\Operator\Repos\CreateDeploymentProtectionRule === false) {
            $this->repos👷CreateDeploymentProtectionRule = new Internal\Operator\Repos\CreateDeploymentProtectionRule($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->repos👷CreateDeploymentProtectionRule;
    }

    public function repos👷ListCustomDeploymentRuleIntegrations(): Internal\Operator\Repos\ListCustomDeploymentRuleIntegrations
    {
        if ($this->repos👷ListCustomDeploymentRuleIntegrations instanceof Internal\Operator\Repos\ListCustomDeploymentRuleIntegrations === false) {
            $this->repos👷ListCustomDeploymentRuleIntegrations = new Internal\Operator\Repos\ListCustomDeploymentRuleIntegrations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps());
        }

        return $this->repos👷ListCustomDeploymentRuleIntegrations;
    }

    public function repos👷GetCustomDeploymentProtectionRule(): Internal\Operator\Repos\GetCustomDeploymentProtectionRule
    {
        if ($this->repos👷GetCustomDeploymentProtectionRule instanceof Internal\Operator\Repos\GetCustomDeploymentProtectionRule === false) {
            $this->repos👷GetCustomDeploymentProtectionRule = new Internal\Operator\Repos\GetCustomDeploymentProtectionRule($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId());
        }

        return $this->repos👷GetCustomDeploymentProtectionRule;
    }

    public function repos👷DisableDeploymentProtectionRule(): Internal\Operator\Repos\DisableDeploymentProtectionRule
    {
        if ($this->repos👷DisableDeploymentProtectionRule instanceof Internal\Operator\Repos\DisableDeploymentProtectionRule === false) {
            $this->repos👷DisableDeploymentProtectionRule = new Internal\Operator\Repos\DisableDeploymentProtectionRule($this->browser, $this->authentication);
        }

        return $this->repos👷DisableDeploymentProtectionRule;
    }

    public function actions👷ListEnvironmentSecrets(): Internal\Operator\Actions\ListEnvironmentSecrets
    {
        if ($this->actions👷ListEnvironmentSecrets instanceof Internal\Operator\Actions\ListEnvironmentSecrets === false) {
            $this->actions👷ListEnvironmentSecrets = new Internal\Operator\Actions\ListEnvironmentSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets());
        }

        return $this->actions👷ListEnvironmentSecrets;
    }

    public function actions👷GetEnvironmentPublicKey(): Internal\Operator\Actions\GetEnvironmentPublicKey
    {
        if ($this->actions👷GetEnvironmentPublicKey instanceof Internal\Operator\Actions\GetEnvironmentPublicKey === false) {
            $this->actions👷GetEnvironmentPublicKey = new Internal\Operator\Actions\GetEnvironmentPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetEnvironmentPublicKey;
    }

    public function actions👷GetEnvironmentSecret(): Internal\Operator\Actions\GetEnvironmentSecret
    {
        if ($this->actions👷GetEnvironmentSecret instanceof Internal\Operator\Actions\GetEnvironmentSecret === false) {
            $this->actions👷GetEnvironmentSecret = new Internal\Operator\Actions\GetEnvironmentSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetEnvironmentSecret;
    }

    public function actions👷CreateOrUpdateEnvironmentSecret(): Internal\Operator\Actions\CreateOrUpdateEnvironmentSecret
    {
        if ($this->actions👷CreateOrUpdateEnvironmentSecret instanceof Internal\Operator\Actions\CreateOrUpdateEnvironmentSecret === false) {
            $this->actions👷CreateOrUpdateEnvironmentSecret = new Internal\Operator\Actions\CreateOrUpdateEnvironmentSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateEnvironmentSecret;
    }

    public function actions👷DeleteEnvironmentSecret(): Internal\Operator\Actions\DeleteEnvironmentSecret
    {
        if ($this->actions👷DeleteEnvironmentSecret instanceof Internal\Operator\Actions\DeleteEnvironmentSecret === false) {
            $this->actions👷DeleteEnvironmentSecret = new Internal\Operator\Actions\DeleteEnvironmentSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteEnvironmentSecret;
    }

    public function actions👷ListEnvironmentVariables(): Internal\Operator\Actions\ListEnvironmentVariables
    {
        if ($this->actions👷ListEnvironmentVariables instanceof Internal\Operator\Actions\ListEnvironmentVariables === false) {
            $this->actions👷ListEnvironmentVariables = new Internal\Operator\Actions\ListEnvironmentVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->actions👷ListEnvironmentVariables;
    }

    public function actions👷CreateEnvironmentVariable(): Internal\Operator\Actions\CreateEnvironmentVariable
    {
        if ($this->actions👷CreateEnvironmentVariable instanceof Internal\Operator\Actions\CreateEnvironmentVariable === false) {
            $this->actions👷CreateEnvironmentVariable = new Internal\Operator\Actions\CreateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->actions👷CreateEnvironmentVariable;
    }

    public function actions👷GetEnvironmentVariable(): Internal\Operator\Actions\GetEnvironmentVariable
    {
        if ($this->actions👷GetEnvironmentVariable instanceof Internal\Operator\Actions\GetEnvironmentVariable === false) {
            $this->actions👷GetEnvironmentVariable = new Internal\Operator\Actions\GetEnvironmentVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name());
        }

        return $this->actions👷GetEnvironmentVariable;
    }

    public function actions👷DeleteEnvironmentVariable(): Internal\Operator\Actions\DeleteEnvironmentVariable
    {
        if ($this->actions👷DeleteEnvironmentVariable instanceof Internal\Operator\Actions\DeleteEnvironmentVariable === false) {
            $this->actions👷DeleteEnvironmentVariable = new Internal\Operator\Actions\DeleteEnvironmentVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteEnvironmentVariable;
    }

    public function actions👷UpdateEnvironmentVariable(): Internal\Operator\Actions\UpdateEnvironmentVariable
    {
        if ($this->actions👷UpdateEnvironmentVariable instanceof Internal\Operator\Actions\UpdateEnvironmentVariable === false) {
            $this->actions👷UpdateEnvironmentVariable = new Internal\Operator\Actions\UpdateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateEnvironmentVariable;
    }

    public function activity👷ListRepoEvents(): Internal\Operator\Activity\ListRepoEvents
    {
        if ($this->activity👷ListRepoEvents instanceof Internal\Operator\Activity\ListRepoEvents === false) {
            $this->activity👷ListRepoEvents = new Internal\Operator\Activity\ListRepoEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEvents;
    }

    public function activity👷ListRepoEventsListing(): Internal\Operator\Activity\ListRepoEventsListing
    {
        if ($this->activity👷ListRepoEventsListing instanceof Internal\Operator\Activity\ListRepoEventsListing === false) {
            $this->activity👷ListRepoEventsListing = new Internal\Operator\Activity\ListRepoEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEventsListing;
    }

    public function repos👷ListForks(): Internal\Operator\Repos\ListForks
    {
        if ($this->repos👷ListForks instanceof Internal\Operator\Repos\ListForks === false) {
            $this->repos👷ListForks = new Internal\Operator\Repos\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForks;
    }

    public function repos👷ListForksListing(): Internal\Operator\Repos\ListForksListing
    {
        if ($this->repos👷ListForksListing instanceof Internal\Operator\Repos\ListForksListing === false) {
            $this->repos👷ListForksListing = new Internal\Operator\Repos\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForksListing;
    }

    public function repos👷CreateFork(): Internal\Operator\Repos\CreateFork
    {
        if ($this->repos👷CreateFork instanceof Internal\Operator\Repos\CreateFork === false) {
            $this->repos👷CreateFork = new Internal\Operator\Repos\CreateFork($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷CreateFork;
    }

    public function git👷CreateBlob(): Internal\Operator\Git\CreateBlob
    {
        if ($this->git👷CreateBlob instanceof Internal\Operator\Git\CreateBlob === false) {
            $this->git👷CreateBlob = new Internal\Operator\Git\CreateBlob($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs());
        }

        return $this->git👷CreateBlob;
    }

    public function git👷GetBlob(): Internal\Operator\Git\GetBlob
    {
        if ($this->git👷GetBlob instanceof Internal\Operator\Git\GetBlob === false) {
            $this->git👷GetBlob = new Internal\Operator\Git\GetBlob($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha());
        }

        return $this->git👷GetBlob;
    }

    public function git👷CreateCommit(): Internal\Operator\Git\CreateCommit
    {
        if ($this->git👷CreateCommit instanceof Internal\Operator\Git\CreateCommit === false) {
            $this->git👷CreateCommit = new Internal\Operator\Git\CreateCommit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits());
        }

        return $this->git👷CreateCommit;
    }

    public function git👷GetCommit(): Internal\Operator\Git\GetCommit
    {
        if ($this->git👷GetCommit instanceof Internal\Operator\Git\GetCommit === false) {
            $this->git👷GetCommit = new Internal\Operator\Git\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha());
        }

        return $this->git👷GetCommit;
    }

    public function git👷ListMatchingRefs(): Internal\Operator\Git\ListMatchingRefs
    {
        if ($this->git👷ListMatchingRefs instanceof Internal\Operator\Git\ListMatchingRefs === false) {
            $this->git👷ListMatchingRefs = new Internal\Operator\Git\ListMatchingRefs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref());
        }

        return $this->git👷ListMatchingRefs;
    }

    public function git👷GetRef(): Internal\Operator\Git\GetRef
    {
        if ($this->git👷GetRef instanceof Internal\Operator\Git\GetRef === false) {
            $this->git👷GetRef = new Internal\Operator\Git\GetRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref());
        }

        return $this->git👷GetRef;
    }

    public function git👷CreateRef(): Internal\Operator\Git\CreateRef
    {
        if ($this->git👷CreateRef instanceof Internal\Operator\Git\CreateRef === false) {
            $this->git👷CreateRef = new Internal\Operator\Git\CreateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs());
        }

        return $this->git👷CreateRef;
    }

    public function git👷DeleteRef(): Internal\Operator\Git\DeleteRef
    {
        if ($this->git👷DeleteRef instanceof Internal\Operator\Git\DeleteRef === false) {
            $this->git👷DeleteRef = new Internal\Operator\Git\DeleteRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷DeleteRef;
    }

    public function git👷UpdateRef(): Internal\Operator\Git\UpdateRef
    {
        if ($this->git👷UpdateRef instanceof Internal\Operator\Git\UpdateRef === false) {
            $this->git👷UpdateRef = new Internal\Operator\Git\UpdateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷UpdateRef;
    }

    public function git👷CreateTag(): Internal\Operator\Git\CreateTag
    {
        if ($this->git👷CreateTag instanceof Internal\Operator\Git\CreateTag === false) {
            $this->git👷CreateTag = new Internal\Operator\Git\CreateTag($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags());
        }

        return $this->git👷CreateTag;
    }

    public function git👷GetTag(): Internal\Operator\Git\GetTag
    {
        if ($this->git👷GetTag instanceof Internal\Operator\Git\GetTag === false) {
            $this->git👷GetTag = new Internal\Operator\Git\GetTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha());
        }

        return $this->git👷GetTag;
    }

    public function git👷CreateTree(): Internal\Operator\Git\CreateTree
    {
        if ($this->git👷CreateTree instanceof Internal\Operator\Git\CreateTree === false) {
            $this->git👷CreateTree = new Internal\Operator\Git\CreateTree($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees());
        }

        return $this->git👷CreateTree;
    }

    public function git👷GetTree(): Internal\Operator\Git\GetTree
    {
        if ($this->git👷GetTree instanceof Internal\Operator\Git\GetTree === false) {
            $this->git👷GetTree = new Internal\Operator\Git\GetTree($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha());
        }

        return $this->git👷GetTree;
    }

    public function repos👷ListWebhooks(): Internal\Operator\Repos\ListWebhooks
    {
        if ($this->repos👷ListWebhooks instanceof Internal\Operator\Repos\ListWebhooks === false) {
            $this->repos👷ListWebhooks = new Internal\Operator\Repos\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooks;
    }

    public function repos👷ListWebhooksListing(): Internal\Operator\Repos\ListWebhooksListing
    {
        if ($this->repos👷ListWebhooksListing instanceof Internal\Operator\Repos\ListWebhooksListing === false) {
            $this->repos👷ListWebhooksListing = new Internal\Operator\Repos\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooksListing;
    }

    public function repos👷CreateWebhook(): Internal\Operator\Repos\CreateWebhook
    {
        if ($this->repos👷CreateWebhook instanceof Internal\Operator\Repos\CreateWebhook === false) {
            $this->repos👷CreateWebhook = new Internal\Operator\Repos\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷CreateWebhook;
    }

    public function repos👷GetWebhook(): Internal\Operator\Repos\GetWebhook
    {
        if ($this->repos👷GetWebhook instanceof Internal\Operator\Repos\GetWebhook === false) {
            $this->repos👷GetWebhook = new Internal\Operator\Repos\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷GetWebhook;
    }

    public function repos👷DeleteWebhook(): Internal\Operator\Repos\DeleteWebhook
    {
        if ($this->repos👷DeleteWebhook instanceof Internal\Operator\Repos\DeleteWebhook === false) {
            $this->repos👷DeleteWebhook = new Internal\Operator\Repos\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷DeleteWebhook;
    }

    public function repos👷UpdateWebhook(): Internal\Operator\Repos\UpdateWebhook
    {
        if ($this->repos👷UpdateWebhook instanceof Internal\Operator\Repos\UpdateWebhook === false) {
            $this->repos👷UpdateWebhook = new Internal\Operator\Repos\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷UpdateWebhook;
    }

    public function repos👷GetWebhookConfigForRepo(): Internal\Operator\Repos\GetWebhookConfigForRepo
    {
        if ($this->repos👷GetWebhookConfigForRepo instanceof Internal\Operator\Repos\GetWebhookConfigForRepo === false) {
            $this->repos👷GetWebhookConfigForRepo = new Internal\Operator\Repos\GetWebhookConfigForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷GetWebhookConfigForRepo;
    }

    public function repos👷UpdateWebhookConfigForRepo(): Internal\Operator\Repos\UpdateWebhookConfigForRepo
    {
        if ($this->repos👷UpdateWebhookConfigForRepo instanceof Internal\Operator\Repos\UpdateWebhookConfigForRepo === false) {
            $this->repos👷UpdateWebhookConfigForRepo = new Internal\Operator\Repos\UpdateWebhookConfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷UpdateWebhookConfigForRepo;
    }

    public function repos👷ListWebhookDeliveries(): Internal\Operator\Repos\ListWebhookDeliveries
    {
        if ($this->repos👷ListWebhookDeliveries instanceof Internal\Operator\Repos\ListWebhookDeliveries === false) {
            $this->repos👷ListWebhookDeliveries = new Internal\Operator\Repos\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->repos👷ListWebhookDeliveries;
    }

    public function repos👷GetWebhookDelivery(): Internal\Operator\Repos\GetWebhookDelivery
    {
        if ($this->repos👷GetWebhookDelivery instanceof Internal\Operator\Repos\GetWebhookDelivery === false) {
            $this->repos👷GetWebhookDelivery = new Internal\Operator\Repos\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->repos👷GetWebhookDelivery;
    }

    public function repos👷RedeliverWebhookDelivery(): Internal\Operator\Repos\RedeliverWebhookDelivery
    {
        if ($this->repos👷RedeliverWebhookDelivery instanceof Internal\Operator\Repos\RedeliverWebhookDelivery === false) {
            $this->repos👷RedeliverWebhookDelivery = new Internal\Operator\Repos\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->repos👷RedeliverWebhookDelivery;
    }

    public function repos👷PingWebhook(): Internal\Operator\Repos\PingWebhook
    {
        if ($this->repos👷PingWebhook instanceof Internal\Operator\Repos\PingWebhook === false) {
            $this->repos👷PingWebhook = new Internal\Operator\Repos\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings());
        }

        return $this->repos👷PingWebhook;
    }

    public function repos👷TestPushWebhook(): Internal\Operator\Repos\TestPushWebhook
    {
        if ($this->repos👷TestPushWebhook instanceof Internal\Operator\Repos\TestPushWebhook === false) {
            $this->repos👷TestPushWebhook = new Internal\Operator\Repos\TestPushWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests());
        }

        return $this->repos👷TestPushWebhook;
    }

    public function migrations👷GetImportStatus(): Internal\Operator\Migrations\GetImportStatus
    {
        if ($this->migrations👷GetImportStatus instanceof Internal\Operator\Migrations\GetImportStatus === false) {
            $this->migrations👷GetImportStatus = new Internal\Operator\Migrations\GetImportStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷GetImportStatus;
    }

    public function migrations👷StartImport(): Internal\Operator\Migrations\StartImport
    {
        if ($this->migrations👷StartImport instanceof Internal\Operator\Migrations\StartImport === false) {
            $this->migrations👷StartImport = new Internal\Operator\Migrations\StartImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷StartImport;
    }

    public function migrations👷CancelImport(): Internal\Operator\Migrations\CancelImport
    {
        if ($this->migrations👷CancelImport instanceof Internal\Operator\Migrations\CancelImport === false) {
            $this->migrations👷CancelImport = new Internal\Operator\Migrations\CancelImport($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷CancelImport;
    }

    public function migrations👷UpdateImport(): Internal\Operator\Migrations\UpdateImport
    {
        if ($this->migrations👷UpdateImport instanceof Internal\Operator\Migrations\UpdateImport === false) {
            $this->migrations👷UpdateImport = new Internal\Operator\Migrations\UpdateImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷UpdateImport;
    }

    public function migrations👷GetCommitAuthors(): Internal\Operator\Migrations\GetCommitAuthors
    {
        if ($this->migrations👷GetCommitAuthors instanceof Internal\Operator\Migrations\GetCommitAuthors === false) {
            $this->migrations👷GetCommitAuthors = new Internal\Operator\Migrations\GetCommitAuthors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors());
        }

        return $this->migrations👷GetCommitAuthors;
    }

    public function migrations👷MapCommitAuthor(): Internal\Operator\Migrations\MapCommitAuthor
    {
        if ($this->migrations👷MapCommitAuthor instanceof Internal\Operator\Migrations\MapCommitAuthor === false) {
            $this->migrations👷MapCommitAuthor = new Internal\Operator\Migrations\MapCommitAuthor($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId());
        }

        return $this->migrations👷MapCommitAuthor;
    }

    public function migrations👷GetLargeFiles(): Internal\Operator\Migrations\GetLargeFiles
    {
        if ($this->migrations👷GetLargeFiles instanceof Internal\Operator\Migrations\GetLargeFiles === false) {
            $this->migrations👷GetLargeFiles = new Internal\Operator\Migrations\GetLargeFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles());
        }

        return $this->migrations👷GetLargeFiles;
    }

    public function migrations👷SetLfsPreference(): Internal\Operator\Migrations\SetLfsPreference
    {
        if ($this->migrations👷SetLfsPreference instanceof Internal\Operator\Migrations\SetLfsPreference === false) {
            $this->migrations👷SetLfsPreference = new Internal\Operator\Migrations\SetLfsPreference($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs());
        }

        return $this->migrations👷SetLfsPreference;
    }

    public function apps👷GetRepoInstallation(): Internal\Operator\Apps\GetRepoInstallation
    {
        if ($this->apps👷GetRepoInstallation instanceof Internal\Operator\Apps\GetRepoInstallation === false) {
            $this->apps👷GetRepoInstallation = new Internal\Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());
        }

        return $this->apps👷GetRepoInstallation;
    }

    public function interactions👷GetRestrictionsForRepo(): Internal\Operator\Interactions\GetRestrictionsForRepo
    {
        if ($this->interactions👷GetRestrictionsForRepo instanceof Internal\Operator\Interactions\GetRestrictionsForRepo === false) {
            $this->interactions👷GetRestrictionsForRepo = new Internal\Operator\Interactions\GetRestrictionsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForRepo;
    }

    public function interactions👷SetRestrictionsForRepo(): Internal\Operator\Interactions\SetRestrictionsForRepo
    {
        if ($this->interactions👷SetRestrictionsForRepo instanceof Internal\Operator\Interactions\SetRestrictionsForRepo === false) {
            $this->interactions👷SetRestrictionsForRepo = new Internal\Operator\Interactions\SetRestrictionsForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForRepo;
    }

    public function interactions👷RemoveRestrictionsForRepo(): Internal\Operator\Interactions\RemoveRestrictionsForRepo
    {
        if ($this->interactions👷RemoveRestrictionsForRepo instanceof Internal\Operator\Interactions\RemoveRestrictionsForRepo === false) {
            $this->interactions👷RemoveRestrictionsForRepo = new Internal\Operator\Interactions\RemoveRestrictionsForRepo($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForRepo;
    }

    public function repos👷ListInvitations(): Internal\Operator\Repos\ListInvitations
    {
        if ($this->repos👷ListInvitations instanceof Internal\Operator\Repos\ListInvitations === false) {
            $this->repos👷ListInvitations = new Internal\Operator\Repos\ListInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitations;
    }

    public function repos👷ListInvitationsListing(): Internal\Operator\Repos\ListInvitationsListing
    {
        if ($this->repos👷ListInvitationsListing instanceof Internal\Operator\Repos\ListInvitationsListing === false) {
            $this->repos👷ListInvitationsListing = new Internal\Operator\Repos\ListInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitationsListing;
    }

    public function repos👷DeleteInvitation(): Internal\Operator\Repos\DeleteInvitation
    {
        if ($this->repos👷DeleteInvitation instanceof Internal\Operator\Repos\DeleteInvitation === false) {
            $this->repos👷DeleteInvitation = new Internal\Operator\Repos\DeleteInvitation($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteInvitation;
    }

    public function repos👷UpdateInvitation(): Internal\Operator\Repos\UpdateInvitation
    {
        if ($this->repos👷UpdateInvitation instanceof Internal\Operator\Repos\UpdateInvitation === false) {
            $this->repos👷UpdateInvitation = new Internal\Operator\Repos\UpdateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId());
        }

        return $this->repos👷UpdateInvitation;
    }

    public function issues👷ListForRepo(): Internal\Operator\Issues\ListForRepo
    {
        if ($this->issues👷ListForRepo instanceof Internal\Operator\Issues\ListForRepo === false) {
            $this->issues👷ListForRepo = new Internal\Operator\Issues\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepo;
    }

    public function issues👷ListForRepoListing(): Internal\Operator\Issues\ListForRepoListing
    {
        if ($this->issues👷ListForRepoListing instanceof Internal\Operator\Issues\ListForRepoListing === false) {
            $this->issues👷ListForRepoListing = new Internal\Operator\Issues\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepoListing;
    }

    public function issues👷Create(): Internal\Operator\Issues\Create
    {
        if ($this->issues👷Create instanceof Internal\Operator\Issues\Create === false) {
            $this->issues👷Create = new Internal\Operator\Issues\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷Create;
    }

    public function issues👷ListCommentsForRepo(): Internal\Operator\Issues\ListCommentsForRepo
    {
        if ($this->issues👷ListCommentsForRepo instanceof Internal\Operator\Issues\ListCommentsForRepo === false) {
            $this->issues👷ListCommentsForRepo = new Internal\Operator\Issues\ListCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepo;
    }

    public function issues👷ListCommentsForRepoListing(): Internal\Operator\Issues\ListCommentsForRepoListing
    {
        if ($this->issues👷ListCommentsForRepoListing instanceof Internal\Operator\Issues\ListCommentsForRepoListing === false) {
            $this->issues👷ListCommentsForRepoListing = new Internal\Operator\Issues\ListCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepoListing;
    }

    public function issues👷GetComment(): Internal\Operator\Issues\GetComment
    {
        if ($this->issues👷GetComment instanceof Internal\Operator\Issues\GetComment === false) {
            $this->issues👷GetComment = new Internal\Operator\Issues\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷GetComment;
    }

    public function issues👷DeleteComment(): Internal\Operator\Issues\DeleteComment
    {
        if ($this->issues👷DeleteComment instanceof Internal\Operator\Issues\DeleteComment === false) {
            $this->issues👷DeleteComment = new Internal\Operator\Issues\DeleteComment($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteComment;
    }

    public function issues👷UpdateComment(): Internal\Operator\Issues\UpdateComment
    {
        if ($this->issues👷UpdateComment instanceof Internal\Operator\Issues\UpdateComment === false) {
            $this->issues👷UpdateComment = new Internal\Operator\Issues\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷UpdateComment;
    }

    public function reactions👷ListForIssueComment(): Internal\Operator\Reactions\ListForIssueComment
    {
        if ($this->reactions👷ListForIssueComment instanceof Internal\Operator\Reactions\ListForIssueComment === false) {
            $this->reactions👷ListForIssueComment = new Internal\Operator\Reactions\ListForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueComment;
    }

    public function reactions👷ListForIssueCommentListing(): Internal\Operator\Reactions\ListForIssueCommentListing
    {
        if ($this->reactions👷ListForIssueCommentListing instanceof Internal\Operator\Reactions\ListForIssueCommentListing === false) {
            $this->reactions👷ListForIssueCommentListing = new Internal\Operator\Reactions\ListForIssueCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueCommentListing;
    }

    public function reactions👷CreateForIssueComment(): Internal\Operator\Reactions\CreateForIssueComment
    {
        if ($this->reactions👷CreateForIssueComment instanceof Internal\Operator\Reactions\CreateForIssueComment === false) {
            $this->reactions👷CreateForIssueComment = new Internal\Operator\Reactions\CreateForIssueComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForIssueComment;
    }

    public function reactions👷DeleteForIssueComment(): Internal\Operator\Reactions\DeleteForIssueComment
    {
        if ($this->reactions👷DeleteForIssueComment instanceof Internal\Operator\Reactions\DeleteForIssueComment === false) {
            $this->reactions👷DeleteForIssueComment = new Internal\Operator\Reactions\DeleteForIssueComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssueComment;
    }

    public function issues👷ListEventsForRepo(): Internal\Operator\Issues\ListEventsForRepo
    {
        if ($this->issues👷ListEventsForRepo instanceof Internal\Operator\Issues\ListEventsForRepo === false) {
            $this->issues👷ListEventsForRepo = new Internal\Operator\Issues\ListEventsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepo;
    }

    public function issues👷ListEventsForRepoListing(): Internal\Operator\Issues\ListEventsForRepoListing
    {
        if ($this->issues👷ListEventsForRepoListing instanceof Internal\Operator\Issues\ListEventsForRepoListing === false) {
            $this->issues👷ListEventsForRepoListing = new Internal\Operator\Issues\ListEventsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepoListing;
    }

    public function issues👷GetEvent(): Internal\Operator\Issues\GetEvent
    {
        if ($this->issues👷GetEvent instanceof Internal\Operator\Issues\GetEvent === false) {
            $this->issues👷GetEvent = new Internal\Operator\Issues\GetEvent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId());
        }

        return $this->issues👷GetEvent;
    }

    public function issues👷Get(): Internal\Operator\Issues\Get
    {
        if ($this->issues👷Get instanceof Internal\Operator\Issues\Get === false) {
            $this->issues👷Get = new Internal\Operator\Issues\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Get;
    }

    public function issues👷Update(): Internal\Operator\Issues\Update
    {
        if ($this->issues👷Update instanceof Internal\Operator\Issues\Update === false) {
            $this->issues👷Update = new Internal\Operator\Issues\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Update;
    }

    public function issues👷AddAssignees(): Internal\Operator\Issues\AddAssignees
    {
        if ($this->issues👷AddAssignees instanceof Internal\Operator\Issues\AddAssignees === false) {
            $this->issues👷AddAssignees = new Internal\Operator\Issues\AddAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷AddAssignees;
    }

    public function issues👷RemoveAssignees(): Internal\Operator\Issues\RemoveAssignees
    {
        if ($this->issues👷RemoveAssignees instanceof Internal\Operator\Issues\RemoveAssignees === false) {
            $this->issues👷RemoveAssignees = new Internal\Operator\Issues\RemoveAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷RemoveAssignees;
    }

    public function issues👷CheckUserCanBeAssignedToIssue(): Internal\Operator\Issues\CheckUserCanBeAssignedToIssue
    {
        if ($this->issues👷CheckUserCanBeAssignedToIssue instanceof Internal\Operator\Issues\CheckUserCanBeAssignedToIssue === false) {
            $this->issues👷CheckUserCanBeAssignedToIssue = new Internal\Operator\Issues\CheckUserCanBeAssignedToIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssignedToIssue;
    }

    public function issues👷ListComments(): Internal\Operator\Issues\ListComments
    {
        if ($this->issues👷ListComments instanceof Internal\Operator\Issues\ListComments === false) {
            $this->issues👷ListComments = new Internal\Operator\Issues\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListComments;
    }

    public function issues👷ListCommentsListing(): Internal\Operator\Issues\ListCommentsListing
    {
        if ($this->issues👷ListCommentsListing instanceof Internal\Operator\Issues\ListCommentsListing === false) {
            $this->issues👷ListCommentsListing = new Internal\Operator\Issues\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListCommentsListing;
    }

    public function issues👷CreateComment(): Internal\Operator\Issues\CreateComment
    {
        if ($this->issues👷CreateComment instanceof Internal\Operator\Issues\CreateComment === false) {
            $this->issues👷CreateComment = new Internal\Operator\Issues\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷CreateComment;
    }

    public function issues👷ListEvents(): Internal\Operator\Issues\ListEvents
    {
        if ($this->issues👷ListEvents instanceof Internal\Operator\Issues\ListEvents === false) {
            $this->issues👷ListEvents = new Internal\Operator\Issues\ListEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEvents;
    }

    public function issues👷ListEventsListing(): Internal\Operator\Issues\ListEventsListing
    {
        if ($this->issues👷ListEventsListing instanceof Internal\Operator\Issues\ListEventsListing === false) {
            $this->issues👷ListEventsListing = new Internal\Operator\Issues\ListEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEventsListing;
    }

    public function issues👷ListLabelsOnIssue(): Internal\Operator\Issues\ListLabelsOnIssue
    {
        if ($this->issues👷ListLabelsOnIssue instanceof Internal\Operator\Issues\ListLabelsOnIssue === false) {
            $this->issues👷ListLabelsOnIssue = new Internal\Operator\Issues\ListLabelsOnIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssue;
    }

    public function issues👷ListLabelsOnIssueListing(): Internal\Operator\Issues\ListLabelsOnIssueListing
    {
        if ($this->issues👷ListLabelsOnIssueListing instanceof Internal\Operator\Issues\ListLabelsOnIssueListing === false) {
            $this->issues👷ListLabelsOnIssueListing = new Internal\Operator\Issues\ListLabelsOnIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssueListing;
    }

    public function issues👷SetLabels(): Internal\Operator\Issues\SetLabels
    {
        if ($this->issues👷SetLabels instanceof Internal\Operator\Issues\SetLabels === false) {
            $this->issues👷SetLabels = new Internal\Operator\Issues\SetLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷SetLabels;
    }

    public function issues👷AddLabels(): Internal\Operator\Issues\AddLabels
    {
        if ($this->issues👷AddLabels instanceof Internal\Operator\Issues\AddLabels === false) {
            $this->issues👷AddLabels = new Internal\Operator\Issues\AddLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷AddLabels;
    }

    public function issues👷RemoveAllLabels(): Internal\Operator\Issues\RemoveAllLabels
    {
        if ($this->issues👷RemoveAllLabels instanceof Internal\Operator\Issues\RemoveAllLabels === false) {
            $this->issues👷RemoveAllLabels = new Internal\Operator\Issues\RemoveAllLabels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷RemoveAllLabels;
    }

    public function issues👷RemoveLabel(): Internal\Operator\Issues\RemoveLabel
    {
        if ($this->issues👷RemoveLabel instanceof Internal\Operator\Issues\RemoveLabel === false) {
            $this->issues👷RemoveLabel = new Internal\Operator\Issues\RemoveLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name());
        }

        return $this->issues👷RemoveLabel;
    }

    public function issues👷Lock(): Internal\Operator\Issues\Lock
    {
        if ($this->issues👷Lock instanceof Internal\Operator\Issues\Lock === false) {
            $this->issues👷Lock = new Internal\Operator\Issues\Lock($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Lock;
    }

    public function issues👷Unlock(): Internal\Operator\Issues\Unlock
    {
        if ($this->issues👷Unlock instanceof Internal\Operator\Issues\Unlock === false) {
            $this->issues👷Unlock = new Internal\Operator\Issues\Unlock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Unlock;
    }

    public function reactions👷ListForIssue(): Internal\Operator\Reactions\ListForIssue
    {
        if ($this->reactions👷ListForIssue instanceof Internal\Operator\Reactions\ListForIssue === false) {
            $this->reactions👷ListForIssue = new Internal\Operator\Reactions\ListForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssue;
    }

    public function reactions👷ListForIssueListing(): Internal\Operator\Reactions\ListForIssueListing
    {
        if ($this->reactions👷ListForIssueListing instanceof Internal\Operator\Reactions\ListForIssueListing === false) {
            $this->reactions👷ListForIssueListing = new Internal\Operator\Reactions\ListForIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssueListing;
    }

    public function reactions👷CreateForIssue(): Internal\Operator\Reactions\CreateForIssue
    {
        if ($this->reactions👷CreateForIssue instanceof Internal\Operator\Reactions\CreateForIssue === false) {
            $this->reactions👷CreateForIssue = new Internal\Operator\Reactions\CreateForIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷CreateForIssue;
    }

    public function reactions👷DeleteForIssue(): Internal\Operator\Reactions\DeleteForIssue
    {
        if ($this->reactions👷DeleteForIssue instanceof Internal\Operator\Reactions\DeleteForIssue === false) {
            $this->reactions👷DeleteForIssue = new Internal\Operator\Reactions\DeleteForIssue($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssue;
    }

    public function issues👷ListEventsForTimeline(): Internal\Operator\Issues\ListEventsForTimeline
    {
        if ($this->issues👷ListEventsForTimeline instanceof Internal\Operator\Issues\ListEventsForTimeline === false) {
            $this->issues👷ListEventsForTimeline = new Internal\Operator\Issues\ListEventsForTimeline($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimeline;
    }

    public function issues👷ListEventsForTimelineListing(): Internal\Operator\Issues\ListEventsForTimelineListing
    {
        if ($this->issues👷ListEventsForTimelineListing instanceof Internal\Operator\Issues\ListEventsForTimelineListing === false) {
            $this->issues👷ListEventsForTimelineListing = new Internal\Operator\Issues\ListEventsForTimelineListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimelineListing;
    }

    public function repos👷ListDeployKeys(): Internal\Operator\Repos\ListDeployKeys
    {
        if ($this->repos👷ListDeployKeys instanceof Internal\Operator\Repos\ListDeployKeys === false) {
            $this->repos👷ListDeployKeys = new Internal\Operator\Repos\ListDeployKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeys;
    }

    public function repos👷ListDeployKeysListing(): Internal\Operator\Repos\ListDeployKeysListing
    {
        if ($this->repos👷ListDeployKeysListing instanceof Internal\Operator\Repos\ListDeployKeysListing === false) {
            $this->repos👷ListDeployKeysListing = new Internal\Operator\Repos\ListDeployKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeysListing;
    }

    public function repos👷CreateDeployKey(): Internal\Operator\Repos\CreateDeployKey
    {
        if ($this->repos👷CreateDeployKey instanceof Internal\Operator\Repos\CreateDeployKey === false) {
            $this->repos👷CreateDeployKey = new Internal\Operator\Repos\CreateDeployKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷CreateDeployKey;
    }

    public function repos👷GetDeployKey(): Internal\Operator\Repos\GetDeployKey
    {
        if ($this->repos👷GetDeployKey instanceof Internal\Operator\Repos\GetDeployKey === false) {
            $this->repos👷GetDeployKey = new Internal\Operator\Repos\GetDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId());
        }

        return $this->repos👷GetDeployKey;
    }

    public function repos👷DeleteDeployKey(): Internal\Operator\Repos\DeleteDeployKey
    {
        if ($this->repos👷DeleteDeployKey instanceof Internal\Operator\Repos\DeleteDeployKey === false) {
            $this->repos👷DeleteDeployKey = new Internal\Operator\Repos\DeleteDeployKey($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeployKey;
    }

    public function issues👷ListLabelsForRepo(): Internal\Operator\Issues\ListLabelsForRepo
    {
        if ($this->issues👷ListLabelsForRepo instanceof Internal\Operator\Issues\ListLabelsForRepo === false) {
            $this->issues👷ListLabelsForRepo = new Internal\Operator\Issues\ListLabelsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepo;
    }

    public function issues👷ListLabelsForRepoListing(): Internal\Operator\Issues\ListLabelsForRepoListing
    {
        if ($this->issues👷ListLabelsForRepoListing instanceof Internal\Operator\Issues\ListLabelsForRepoListing === false) {
            $this->issues👷ListLabelsForRepoListing = new Internal\Operator\Issues\ListLabelsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepoListing;
    }

    public function issues👷CreateLabel(): Internal\Operator\Issues\CreateLabel
    {
        if ($this->issues👷CreateLabel instanceof Internal\Operator\Issues\CreateLabel === false) {
            $this->issues👷CreateLabel = new Internal\Operator\Issues\CreateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷CreateLabel;
    }

    public function issues👷GetLabel(): Internal\Operator\Issues\GetLabel
    {
        if ($this->issues👷GetLabel instanceof Internal\Operator\Issues\GetLabel === false) {
            $this->issues👷GetLabel = new Internal\Operator\Issues\GetLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷GetLabel;
    }

    public function issues👷DeleteLabel(): Internal\Operator\Issues\DeleteLabel
    {
        if ($this->issues👷DeleteLabel instanceof Internal\Operator\Issues\DeleteLabel === false) {
            $this->issues👷DeleteLabel = new Internal\Operator\Issues\DeleteLabel($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteLabel;
    }

    public function issues👷UpdateLabel(): Internal\Operator\Issues\UpdateLabel
    {
        if ($this->issues👷UpdateLabel instanceof Internal\Operator\Issues\UpdateLabel === false) {
            $this->issues👷UpdateLabel = new Internal\Operator\Issues\UpdateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷UpdateLabel;
    }

    public function repos👷ListLanguages(): Internal\Operator\Repos\ListLanguages
    {
        if ($this->repos👷ListLanguages instanceof Internal\Operator\Repos\ListLanguages === false) {
            $this->repos👷ListLanguages = new Internal\Operator\Repos\ListLanguages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages());
        }

        return $this->repos👷ListLanguages;
    }

    public function licenses👷GetForRepo(): Internal\Operator\Licenses\GetForRepo
    {
        if ($this->licenses👷GetForRepo instanceof Internal\Operator\Licenses\GetForRepo === false) {
            $this->licenses👷GetForRepo = new Internal\Operator\Licenses\GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License());
        }

        return $this->licenses👷GetForRepo;
    }

    public function repos👷MergeUpstream(): Internal\Operator\Repos\MergeUpstream
    {
        if ($this->repos👷MergeUpstream instanceof Internal\Operator\Repos\MergeUpstream === false) {
            $this->repos👷MergeUpstream = new Internal\Operator\Repos\MergeUpstream($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream());
        }

        return $this->repos👷MergeUpstream;
    }

    public function repos👷Merge(): Internal\Operator\Repos\Merge
    {
        if ($this->repos👷Merge instanceof Internal\Operator\Repos\Merge === false) {
            $this->repos👷Merge = new Internal\Operator\Repos\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges());
        }

        return $this->repos👷Merge;
    }

    public function issues👷ListMilestones(): Internal\Operator\Issues\ListMilestones
    {
        if ($this->issues👷ListMilestones instanceof Internal\Operator\Issues\ListMilestones === false) {
            $this->issues👷ListMilestones = new Internal\Operator\Issues\ListMilestones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestones;
    }

    public function issues👷ListMilestonesListing(): Internal\Operator\Issues\ListMilestonesListing
    {
        if ($this->issues👷ListMilestonesListing instanceof Internal\Operator\Issues\ListMilestonesListing === false) {
            $this->issues👷ListMilestonesListing = new Internal\Operator\Issues\ListMilestonesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestonesListing;
    }

    public function issues👷CreateMilestone(): Internal\Operator\Issues\CreateMilestone
    {
        if ($this->issues👷CreateMilestone instanceof Internal\Operator\Issues\CreateMilestone === false) {
            $this->issues👷CreateMilestone = new Internal\Operator\Issues\CreateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷CreateMilestone;
    }

    public function issues👷GetMilestone(): Internal\Operator\Issues\GetMilestone
    {
        if ($this->issues👷GetMilestone instanceof Internal\Operator\Issues\GetMilestone === false) {
            $this->issues👷GetMilestone = new Internal\Operator\Issues\GetMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷GetMilestone;
    }

    public function issues👷DeleteMilestone(): Internal\Operator\Issues\DeleteMilestone
    {
        if ($this->issues👷DeleteMilestone instanceof Internal\Operator\Issues\DeleteMilestone === false) {
            $this->issues👷DeleteMilestone = new Internal\Operator\Issues\DeleteMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷DeleteMilestone;
    }

    public function issues👷UpdateMilestone(): Internal\Operator\Issues\UpdateMilestone
    {
        if ($this->issues👷UpdateMilestone instanceof Internal\Operator\Issues\UpdateMilestone === false) {
            $this->issues👷UpdateMilestone = new Internal\Operator\Issues\UpdateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷UpdateMilestone;
    }

    public function issues👷ListLabelsForMilestone(): Internal\Operator\Issues\ListLabelsForMilestone
    {
        if ($this->issues👷ListLabelsForMilestone instanceof Internal\Operator\Issues\ListLabelsForMilestone === false) {
            $this->issues👷ListLabelsForMilestone = new Internal\Operator\Issues\ListLabelsForMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestone;
    }

    public function issues👷ListLabelsForMilestoneListing(): Internal\Operator\Issues\ListLabelsForMilestoneListing
    {
        if ($this->issues👷ListLabelsForMilestoneListing instanceof Internal\Operator\Issues\ListLabelsForMilestoneListing === false) {
            $this->issues👷ListLabelsForMilestoneListing = new Internal\Operator\Issues\ListLabelsForMilestoneListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestoneListing;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUser(): Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUser instanceof Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUser = new Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUser;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUserListing(): Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUserListing = new Internal\Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUserListing;
    }

    public function activity👷MarkRepoNotificationsAsRead(): Internal\Operator\Activity\MarkRepoNotificationsAsRead
    {
        if ($this->activity👷MarkRepoNotificationsAsRead instanceof Internal\Operator\Activity\MarkRepoNotificationsAsRead === false) {
            $this->activity👷MarkRepoNotificationsAsRead = new Internal\Operator\Activity\MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷MarkRepoNotificationsAsRead;
    }

    public function repos👷GetPages(): Internal\Operator\Repos\GetPages
    {
        if ($this->repos👷GetPages instanceof Internal\Operator\Repos\GetPages === false) {
            $this->repos👷GetPages = new Internal\Operator\Repos\GetPages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷GetPages;
    }

    public function repos👷UpdateInformationAboutPagesSite(): Internal\Operator\Repos\UpdateInformationAboutPagesSite
    {
        if ($this->repos👷UpdateInformationAboutPagesSite instanceof Internal\Operator\Repos\UpdateInformationAboutPagesSite === false) {
            $this->repos👷UpdateInformationAboutPagesSite = new Internal\Operator\Repos\UpdateInformationAboutPagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷UpdateInformationAboutPagesSite;
    }

    public function repos👷CreatePagesSite(): Internal\Operator\Repos\CreatePagesSite
    {
        if ($this->repos👷CreatePagesSite instanceof Internal\Operator\Repos\CreatePagesSite === false) {
            $this->repos👷CreatePagesSite = new Internal\Operator\Repos\CreatePagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷CreatePagesSite;
    }

    public function repos👷DeletePagesSite(): Internal\Operator\Repos\DeletePagesSite
    {
        if ($this->repos👷DeletePagesSite instanceof Internal\Operator\Repos\DeletePagesSite === false) {
            $this->repos👷DeletePagesSite = new Internal\Operator\Repos\DeletePagesSite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷DeletePagesSite;
    }

    public function repos👷ListPagesBuilds(): Internal\Operator\Repos\ListPagesBuilds
    {
        if ($this->repos👷ListPagesBuilds instanceof Internal\Operator\Repos\ListPagesBuilds === false) {
            $this->repos👷ListPagesBuilds = new Internal\Operator\Repos\ListPagesBuilds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuilds;
    }

    public function repos👷ListPagesBuildsListing(): Internal\Operator\Repos\ListPagesBuildsListing
    {
        if ($this->repos👷ListPagesBuildsListing instanceof Internal\Operator\Repos\ListPagesBuildsListing === false) {
            $this->repos👷ListPagesBuildsListing = new Internal\Operator\Repos\ListPagesBuildsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuildsListing;
    }

    public function repos👷RequestPagesBuild(): Internal\Operator\Repos\RequestPagesBuild
    {
        if ($this->repos👷RequestPagesBuild instanceof Internal\Operator\Repos\RequestPagesBuild === false) {
            $this->repos👷RequestPagesBuild = new Internal\Operator\Repos\RequestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷RequestPagesBuild;
    }

    public function repos👷GetLatestPagesBuild(): Internal\Operator\Repos\GetLatestPagesBuild
    {
        if ($this->repos👷GetLatestPagesBuild instanceof Internal\Operator\Repos\GetLatestPagesBuild === false) {
            $this->repos👷GetLatestPagesBuild = new Internal\Operator\Repos\GetLatestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest());
        }

        return $this->repos👷GetLatestPagesBuild;
    }

    public function repos👷GetPagesBuild(): Internal\Operator\Repos\GetPagesBuild
    {
        if ($this->repos👷GetPagesBuild instanceof Internal\Operator\Repos\GetPagesBuild === false) {
            $this->repos👷GetPagesBuild = new Internal\Operator\Repos\GetPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId());
        }

        return $this->repos👷GetPagesBuild;
    }

    public function repos👷CreatePagesDeployment(): Internal\Operator\Repos\CreatePagesDeployment
    {
        if ($this->repos👷CreatePagesDeployment instanceof Internal\Operator\Repos\CreatePagesDeployment === false) {
            $this->repos👷CreatePagesDeployment = new Internal\Operator\Repos\CreatePagesDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments());
        }

        return $this->repos👷CreatePagesDeployment;
    }

    public function repos👷GetPagesDeployment(): Internal\Operator\Repos\GetPagesDeployment
    {
        if ($this->repos👷GetPagesDeployment instanceof Internal\Operator\Repos\GetPagesDeployment === false) {
            $this->repos👷GetPagesDeployment = new Internal\Operator\Repos\GetPagesDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId());
        }

        return $this->repos👷GetPagesDeployment;
    }

    public function repos👷CancelPagesDeployment(): Internal\Operator\Repos\CancelPagesDeployment
    {
        if ($this->repos👷CancelPagesDeployment instanceof Internal\Operator\Repos\CancelPagesDeployment === false) {
            $this->repos👷CancelPagesDeployment = new Internal\Operator\Repos\CancelPagesDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel());
        }

        return $this->repos👷CancelPagesDeployment;
    }

    public function repos👷GetPagesHealthCheck(): Internal\Operator\Repos\GetPagesHealthCheck
    {
        if ($this->repos👷GetPagesHealthCheck instanceof Internal\Operator\Repos\GetPagesHealthCheck === false) {
            $this->repos👷GetPagesHealthCheck = new Internal\Operator\Repos\GetPagesHealthCheck($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health());
        }

        return $this->repos👷GetPagesHealthCheck;
    }

    public function repos👷CheckPrivateVulnerabilityReporting(): Internal\Operator\Repos\CheckPrivateVulnerabilityReporting
    {
        if ($this->repos👷CheckPrivateVulnerabilityReporting instanceof Internal\Operator\Repos\CheckPrivateVulnerabilityReporting === false) {
            $this->repos👷CheckPrivateVulnerabilityReporting = new Internal\Operator\Repos\CheckPrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷CheckPrivateVulnerabilityReporting;
    }

    public function repos👷EnablePrivateVulnerabilityReporting(): Internal\Operator\Repos\EnablePrivateVulnerabilityReporting
    {
        if ($this->repos👷EnablePrivateVulnerabilityReporting instanceof Internal\Operator\Repos\EnablePrivateVulnerabilityReporting === false) {
            $this->repos👷EnablePrivateVulnerabilityReporting = new Internal\Operator\Repos\EnablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷EnablePrivateVulnerabilityReporting;
    }

    public function repos👷DisablePrivateVulnerabilityReporting(): Internal\Operator\Repos\DisablePrivateVulnerabilityReporting
    {
        if ($this->repos👷DisablePrivateVulnerabilityReporting instanceof Internal\Operator\Repos\DisablePrivateVulnerabilityReporting === false) {
            $this->repos👷DisablePrivateVulnerabilityReporting = new Internal\Operator\Repos\DisablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷DisablePrivateVulnerabilityReporting;
    }

    public function projects👷ListForRepo(): Internal\Operator\Projects\ListForRepo
    {
        if ($this->projects👷ListForRepo instanceof Internal\Operator\Projects\ListForRepo === false) {
            $this->projects👷ListForRepo = new Internal\Operator\Projects\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepo;
    }

    public function projects👷ListForRepoListing(): Internal\Operator\Projects\ListForRepoListing
    {
        if ($this->projects👷ListForRepoListing instanceof Internal\Operator\Projects\ListForRepoListing === false) {
            $this->projects👷ListForRepoListing = new Internal\Operator\Projects\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepoListing;
    }

    public function projects👷CreateForRepo(): Internal\Operator\Projects\CreateForRepo
    {
        if ($this->projects👷CreateForRepo instanceof Internal\Operator\Projects\CreateForRepo === false) {
            $this->projects👷CreateForRepo = new Internal\Operator\Projects\CreateForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷CreateForRepo;
    }

    public function repos👷GetCustomPropertiesValues(): Internal\Operator\Repos\GetCustomPropertiesValues
    {
        if ($this->repos👷GetCustomPropertiesValues instanceof Internal\Operator\Repos\GetCustomPropertiesValues === false) {
            $this->repos👷GetCustomPropertiesValues = new Internal\Operator\Repos\GetCustomPropertiesValues($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values());
        }

        return $this->repos👷GetCustomPropertiesValues;
    }

    public function repos👷CreateOrUpdateCustomPropertiesValues(): Internal\Operator\Repos\CreateOrUpdateCustomPropertiesValues
    {
        if ($this->repos👷CreateOrUpdateCustomPropertiesValues instanceof Internal\Operator\Repos\CreateOrUpdateCustomPropertiesValues === false) {
            $this->repos👷CreateOrUpdateCustomPropertiesValues = new Internal\Operator\Repos\CreateOrUpdateCustomPropertiesValues($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values());
        }

        return $this->repos👷CreateOrUpdateCustomPropertiesValues;
    }

    public function pulls👷List_(): Internal\Operator\Pulls\List_
    {
        if ($this->pulls👷List_ instanceof Internal\Operator\Pulls\List_ === false) {
            $this->pulls👷List_ = new Internal\Operator\Pulls\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷List_;
    }

    public function pulls👷ListListing(): Internal\Operator\Pulls\ListListing
    {
        if ($this->pulls👷ListListing instanceof Internal\Operator\Pulls\ListListing === false) {
            $this->pulls👷ListListing = new Internal\Operator\Pulls\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷ListListing;
    }

    public function pulls👷Create(): Internal\Operator\Pulls\Create
    {
        if ($this->pulls👷Create instanceof Internal\Operator\Pulls\Create === false) {
            $this->pulls👷Create = new Internal\Operator\Pulls\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷Create;
    }

    public function pulls👷ListReviewCommentsForRepo(): Internal\Operator\Pulls\ListReviewCommentsForRepo
    {
        if ($this->pulls👷ListReviewCommentsForRepo instanceof Internal\Operator\Pulls\ListReviewCommentsForRepo === false) {
            $this->pulls👷ListReviewCommentsForRepo = new Internal\Operator\Pulls\ListReviewCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepo;
    }

    public function pulls👷ListReviewCommentsForRepoListing(): Internal\Operator\Pulls\ListReviewCommentsForRepoListing
    {
        if ($this->pulls👷ListReviewCommentsForRepoListing instanceof Internal\Operator\Pulls\ListReviewCommentsForRepoListing === false) {
            $this->pulls👷ListReviewCommentsForRepoListing = new Internal\Operator\Pulls\ListReviewCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepoListing;
    }

    public function pulls👷GetReviewComment(): Internal\Operator\Pulls\GetReviewComment
    {
        if ($this->pulls👷GetReviewComment instanceof Internal\Operator\Pulls\GetReviewComment === false) {
            $this->pulls👷GetReviewComment = new Internal\Operator\Pulls\GetReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷GetReviewComment;
    }

    public function pulls👷DeleteReviewComment(): Internal\Operator\Pulls\DeleteReviewComment
    {
        if ($this->pulls👷DeleteReviewComment instanceof Internal\Operator\Pulls\DeleteReviewComment === false) {
            $this->pulls👷DeleteReviewComment = new Internal\Operator\Pulls\DeleteReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷DeleteReviewComment;
    }

    public function pulls👷UpdateReviewComment(): Internal\Operator\Pulls\UpdateReviewComment
    {
        if ($this->pulls👷UpdateReviewComment instanceof Internal\Operator\Pulls\UpdateReviewComment === false) {
            $this->pulls👷UpdateReviewComment = new Internal\Operator\Pulls\UpdateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷UpdateReviewComment;
    }

    public function reactions👷ListForPullRequestReviewComment(): Internal\Operator\Reactions\ListForPullRequestReviewComment
    {
        if ($this->reactions👷ListForPullRequestReviewComment instanceof Internal\Operator\Reactions\ListForPullRequestReviewComment === false) {
            $this->reactions👷ListForPullRequestReviewComment = new Internal\Operator\Reactions\ListForPullRequestReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewComment;
    }

    public function reactions👷ListForPullRequestReviewCommentListing(): Internal\Operator\Reactions\ListForPullRequestReviewCommentListing
    {
        if ($this->reactions👷ListForPullRequestReviewCommentListing instanceof Internal\Operator\Reactions\ListForPullRequestReviewCommentListing === false) {
            $this->reactions👷ListForPullRequestReviewCommentListing = new Internal\Operator\Reactions\ListForPullRequestReviewCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewCommentListing;
    }

    public function reactions👷CreateForPullRequestReviewComment(): Internal\Operator\Reactions\CreateForPullRequestReviewComment
    {
        if ($this->reactions👷CreateForPullRequestReviewComment instanceof Internal\Operator\Reactions\CreateForPullRequestReviewComment === false) {
            $this->reactions👷CreateForPullRequestReviewComment = new Internal\Operator\Reactions\CreateForPullRequestReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForPullRequestReviewComment;
    }

    public function reactions👷DeleteForPullRequestComment(): Internal\Operator\Reactions\DeleteForPullRequestComment
    {
        if ($this->reactions👷DeleteForPullRequestComment instanceof Internal\Operator\Reactions\DeleteForPullRequestComment === false) {
            $this->reactions👷DeleteForPullRequestComment = new Internal\Operator\Reactions\DeleteForPullRequestComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForPullRequestComment;
    }

    public function pulls👷Get(): Internal\Operator\Pulls\Get
    {
        if ($this->pulls👷Get instanceof Internal\Operator\Pulls\Get === false) {
            $this->pulls👷Get = new Internal\Operator\Pulls\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Get;
    }

    public function pulls👷Update(): Internal\Operator\Pulls\Update
    {
        if ($this->pulls👷Update instanceof Internal\Operator\Pulls\Update === false) {
            $this->pulls👷Update = new Internal\Operator\Pulls\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Update;
    }

    public function codespaces👷CreateWithPrForAuthenticatedUser(): Internal\Operator\Codespaces\CreateWithPrForAuthenticatedUser
    {
        if ($this->codespaces👷CreateWithPrForAuthenticatedUser instanceof Internal\Operator\Codespaces\CreateWithPrForAuthenticatedUser === false) {
            $this->codespaces👷CreateWithPrForAuthenticatedUser = new Internal\Operator\Codespaces\CreateWithPrForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces());
        }

        return $this->codespaces👷CreateWithPrForAuthenticatedUser;
    }

    public function pulls👷ListReviewComments(): Internal\Operator\Pulls\ListReviewComments
    {
        if ($this->pulls👷ListReviewComments instanceof Internal\Operator\Pulls\ListReviewComments === false) {
            $this->pulls👷ListReviewComments = new Internal\Operator\Pulls\ListReviewComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewComments;
    }

    public function pulls👷ListReviewCommentsListing(): Internal\Operator\Pulls\ListReviewCommentsListing
    {
        if ($this->pulls👷ListReviewCommentsListing instanceof Internal\Operator\Pulls\ListReviewCommentsListing === false) {
            $this->pulls👷ListReviewCommentsListing = new Internal\Operator\Pulls\ListReviewCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsListing;
    }

    public function pulls👷CreateReviewComment(): Internal\Operator\Pulls\CreateReviewComment
    {
        if ($this->pulls👷CreateReviewComment instanceof Internal\Operator\Pulls\CreateReviewComment === false) {
            $this->pulls👷CreateReviewComment = new Internal\Operator\Pulls\CreateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷CreateReviewComment;
    }

    public function pulls👷CreateReplyForReviewComment(): Internal\Operator\Pulls\CreateReplyForReviewComment
    {
        if ($this->pulls👷CreateReplyForReviewComment instanceof Internal\Operator\Pulls\CreateReplyForReviewComment === false) {
            $this->pulls👷CreateReplyForReviewComment = new Internal\Operator\Pulls\CreateReplyForReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies());
        }

        return $this->pulls👷CreateReplyForReviewComment;
    }

    public function pulls👷ListCommits(): Internal\Operator\Pulls\ListCommits
    {
        if ($this->pulls👷ListCommits instanceof Internal\Operator\Pulls\ListCommits === false) {
            $this->pulls👷ListCommits = new Internal\Operator\Pulls\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommits;
    }

    public function pulls👷ListCommitsListing(): Internal\Operator\Pulls\ListCommitsListing
    {
        if ($this->pulls👷ListCommitsListing instanceof Internal\Operator\Pulls\ListCommitsListing === false) {
            $this->pulls👷ListCommitsListing = new Internal\Operator\Pulls\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommitsListing;
    }

    public function pulls👷ListFiles(): Internal\Operator\Pulls\ListFiles
    {
        if ($this->pulls👷ListFiles instanceof Internal\Operator\Pulls\ListFiles === false) {
            $this->pulls👷ListFiles = new Internal\Operator\Pulls\ListFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFiles;
    }

    public function pulls👷ListFilesListing(): Internal\Operator\Pulls\ListFilesListing
    {
        if ($this->pulls👷ListFilesListing instanceof Internal\Operator\Pulls\ListFilesListing === false) {
            $this->pulls👷ListFilesListing = new Internal\Operator\Pulls\ListFilesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFilesListing;
    }

    public function pulls👷CheckIfMerged(): Internal\Operator\Pulls\CheckIfMerged
    {
        if ($this->pulls👷CheckIfMerged instanceof Internal\Operator\Pulls\CheckIfMerged === false) {
            $this->pulls👷CheckIfMerged = new Internal\Operator\Pulls\CheckIfMerged($this->browser, $this->authentication);
        }

        return $this->pulls👷CheckIfMerged;
    }

    public function pulls👷Merge(): Internal\Operator\Pulls\Merge
    {
        if ($this->pulls👷Merge instanceof Internal\Operator\Pulls\Merge === false) {
            $this->pulls👷Merge = new Internal\Operator\Pulls\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge());
        }

        return $this->pulls👷Merge;
    }

    public function pulls👷ListRequestedReviewers(): Internal\Operator\Pulls\ListRequestedReviewers
    {
        if ($this->pulls👷ListRequestedReviewers instanceof Internal\Operator\Pulls\ListRequestedReviewers === false) {
            $this->pulls👷ListRequestedReviewers = new Internal\Operator\Pulls\ListRequestedReviewers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷ListRequestedReviewers;
    }

    public function pulls👷RequestReviewers(): Internal\Operator\Pulls\RequestReviewers
    {
        if ($this->pulls👷RequestReviewers instanceof Internal\Operator\Pulls\RequestReviewers === false) {
            $this->pulls👷RequestReviewers = new Internal\Operator\Pulls\RequestReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RequestReviewers;
    }

    public function pulls👷RemoveRequestedReviewers(): Internal\Operator\Pulls\RemoveRequestedReviewers
    {
        if ($this->pulls👷RemoveRequestedReviewers instanceof Internal\Operator\Pulls\RemoveRequestedReviewers === false) {
            $this->pulls👷RemoveRequestedReviewers = new Internal\Operator\Pulls\RemoveRequestedReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RemoveRequestedReviewers;
    }

    public function pulls👷ListReviews(): Internal\Operator\Pulls\ListReviews
    {
        if ($this->pulls👷ListReviews instanceof Internal\Operator\Pulls\ListReviews === false) {
            $this->pulls👷ListReviews = new Internal\Operator\Pulls\ListReviews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviews;
    }

    public function pulls👷ListReviewsListing(): Internal\Operator\Pulls\ListReviewsListing
    {
        if ($this->pulls👷ListReviewsListing instanceof Internal\Operator\Pulls\ListReviewsListing === false) {
            $this->pulls👷ListReviewsListing = new Internal\Operator\Pulls\ListReviewsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviewsListing;
    }

    public function pulls👷CreateReview(): Internal\Operator\Pulls\CreateReview
    {
        if ($this->pulls👷CreateReview instanceof Internal\Operator\Pulls\CreateReview === false) {
            $this->pulls👷CreateReview = new Internal\Operator\Pulls\CreateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷CreateReview;
    }

    public function pulls👷GetReview(): Internal\Operator\Pulls\GetReview
    {
        if ($this->pulls👷GetReview instanceof Internal\Operator\Pulls\GetReview === false) {
            $this->pulls👷GetReview = new Internal\Operator\Pulls\GetReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷GetReview;
    }

    public function pulls👷UpdateReview(): Internal\Operator\Pulls\UpdateReview
    {
        if ($this->pulls👷UpdateReview instanceof Internal\Operator\Pulls\UpdateReview === false) {
            $this->pulls👷UpdateReview = new Internal\Operator\Pulls\UpdateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷UpdateReview;
    }

    public function pulls👷DeletePendingReview(): Internal\Operator\Pulls\DeletePendingReview
    {
        if ($this->pulls👷DeletePendingReview instanceof Internal\Operator\Pulls\DeletePendingReview === false) {
            $this->pulls👷DeletePendingReview = new Internal\Operator\Pulls\DeletePendingReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷DeletePendingReview;
    }

    public function pulls👷ListCommentsForReview(): Internal\Operator\Pulls\ListCommentsForReview
    {
        if ($this->pulls👷ListCommentsForReview instanceof Internal\Operator\Pulls\ListCommentsForReview === false) {
            $this->pulls👷ListCommentsForReview = new Internal\Operator\Pulls\ListCommentsForReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReview;
    }

    public function pulls👷ListCommentsForReviewListing(): Internal\Operator\Pulls\ListCommentsForReviewListing
    {
        if ($this->pulls👷ListCommentsForReviewListing instanceof Internal\Operator\Pulls\ListCommentsForReviewListing === false) {
            $this->pulls👷ListCommentsForReviewListing = new Internal\Operator\Pulls\ListCommentsForReviewListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReviewListing;
    }

    public function pulls👷DismissReview(): Internal\Operator\Pulls\DismissReview
    {
        if ($this->pulls👷DismissReview instanceof Internal\Operator\Pulls\DismissReview === false) {
            $this->pulls👷DismissReview = new Internal\Operator\Pulls\DismissReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals());
        }

        return $this->pulls👷DismissReview;
    }

    public function pulls👷SubmitReview(): Internal\Operator\Pulls\SubmitReview
    {
        if ($this->pulls👷SubmitReview instanceof Internal\Operator\Pulls\SubmitReview === false) {
            $this->pulls👷SubmitReview = new Internal\Operator\Pulls\SubmitReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events());
        }

        return $this->pulls👷SubmitReview;
    }

    public function pulls👷UpdateBranch(): Internal\Operator\Pulls\UpdateBranch
    {
        if ($this->pulls👷UpdateBranch instanceof Internal\Operator\Pulls\UpdateBranch === false) {
            $this->pulls👷UpdateBranch = new Internal\Operator\Pulls\UpdateBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch());
        }

        return $this->pulls👷UpdateBranch;
    }

    public function repos👷GetReadme(): Internal\Operator\Repos\GetReadme
    {
        if ($this->repos👷GetReadme instanceof Internal\Operator\Repos\GetReadme === false) {
            $this->repos👷GetReadme = new Internal\Operator\Repos\GetReadme($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme());
        }

        return $this->repos👷GetReadme;
    }

    public function repos👷GetReadmeInDirectory(): Internal\Operator\Repos\GetReadmeInDirectory
    {
        if ($this->repos👷GetReadmeInDirectory instanceof Internal\Operator\Repos\GetReadmeInDirectory === false) {
            $this->repos👷GetReadmeInDirectory = new Internal\Operator\Repos\GetReadmeInDirectory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir());
        }

        return $this->repos👷GetReadmeInDirectory;
    }

    public function repos👷ListReleases(): Internal\Operator\Repos\ListReleases
    {
        if ($this->repos👷ListReleases instanceof Internal\Operator\Repos\ListReleases === false) {
            $this->repos👷ListReleases = new Internal\Operator\Repos\ListReleases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleases;
    }

    public function repos👷ListReleasesListing(): Internal\Operator\Repos\ListReleasesListing
    {
        if ($this->repos👷ListReleasesListing instanceof Internal\Operator\Repos\ListReleasesListing === false) {
            $this->repos👷ListReleasesListing = new Internal\Operator\Repos\ListReleasesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleasesListing;
    }

    public function repos👷CreateRelease(): Internal\Operator\Repos\CreateRelease
    {
        if ($this->repos👷CreateRelease instanceof Internal\Operator\Repos\CreateRelease === false) {
            $this->repos👷CreateRelease = new Internal\Operator\Repos\CreateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷CreateRelease;
    }

    public function repos👷GetReleaseAsset(): Internal\Operator\Repos\GetReleaseAsset
    {
        if ($this->repos👷GetReleaseAsset instanceof Internal\Operator\Repos\GetReleaseAsset === false) {
            $this->repos👷GetReleaseAsset = new Internal\Operator\Repos\GetReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷GetReleaseAsset;
    }

    public function repos👷DeleteReleaseAsset(): Internal\Operator\Repos\DeleteReleaseAsset
    {
        if ($this->repos👷DeleteReleaseAsset instanceof Internal\Operator\Repos\DeleteReleaseAsset === false) {
            $this->repos👷DeleteReleaseAsset = new Internal\Operator\Repos\DeleteReleaseAsset($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteReleaseAsset;
    }

    public function repos👷UpdateReleaseAsset(): Internal\Operator\Repos\UpdateReleaseAsset
    {
        if ($this->repos👷UpdateReleaseAsset instanceof Internal\Operator\Repos\UpdateReleaseAsset === false) {
            $this->repos👷UpdateReleaseAsset = new Internal\Operator\Repos\UpdateReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷UpdateReleaseAsset;
    }

    public function repos👷GenerateReleaseNotes(): Internal\Operator\Repos\GenerateReleaseNotes
    {
        if ($this->repos👷GenerateReleaseNotes instanceof Internal\Operator\Repos\GenerateReleaseNotes === false) {
            $this->repos👷GenerateReleaseNotes = new Internal\Operator\Repos\GenerateReleaseNotes($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes());
        }

        return $this->repos👷GenerateReleaseNotes;
    }

    public function repos👷GetLatestRelease(): Internal\Operator\Repos\GetLatestRelease
    {
        if ($this->repos👷GetLatestRelease instanceof Internal\Operator\Repos\GetLatestRelease === false) {
            $this->repos👷GetLatestRelease = new Internal\Operator\Repos\GetLatestRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest());
        }

        return $this->repos👷GetLatestRelease;
    }

    public function repos👷GetReleaseByTag(): Internal\Operator\Repos\GetReleaseByTag
    {
        if ($this->repos👷GetReleaseByTag instanceof Internal\Operator\Repos\GetReleaseByTag === false) {
            $this->repos👷GetReleaseByTag = new Internal\Operator\Repos\GetReleaseByTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag());
        }

        return $this->repos👷GetReleaseByTag;
    }

    public function repos👷GetRelease(): Internal\Operator\Repos\GetRelease
    {
        if ($this->repos👷GetRelease instanceof Internal\Operator\Repos\GetRelease === false) {
            $this->repos👷GetRelease = new Internal\Operator\Repos\GetRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷GetRelease;
    }

    public function repos👷DeleteRelease(): Internal\Operator\Repos\DeleteRelease
    {
        if ($this->repos👷DeleteRelease instanceof Internal\Operator\Repos\DeleteRelease === false) {
            $this->repos👷DeleteRelease = new Internal\Operator\Repos\DeleteRelease($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteRelease;
    }

    public function repos👷UpdateRelease(): Internal\Operator\Repos\UpdateRelease
    {
        if ($this->repos👷UpdateRelease instanceof Internal\Operator\Repos\UpdateRelease === false) {
            $this->repos👷UpdateRelease = new Internal\Operator\Repos\UpdateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷UpdateRelease;
    }

    public function repos👷ListReleaseAssets(): Internal\Operator\Repos\ListReleaseAssets
    {
        if ($this->repos👷ListReleaseAssets instanceof Internal\Operator\Repos\ListReleaseAssets === false) {
            $this->repos👷ListReleaseAssets = new Internal\Operator\Repos\ListReleaseAssets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssets;
    }

    public function repos👷ListReleaseAssetsListing(): Internal\Operator\Repos\ListReleaseAssetsListing
    {
        if ($this->repos👷ListReleaseAssetsListing instanceof Internal\Operator\Repos\ListReleaseAssetsListing === false) {
            $this->repos👷ListReleaseAssetsListing = new Internal\Operator\Repos\ListReleaseAssetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssetsListing;
    }

    public function repos👷UploadReleaseAsset(): Internal\Operator\Repos\UploadReleaseAsset
    {
        if ($this->repos👷UploadReleaseAsset instanceof Internal\Operator\Repos\UploadReleaseAsset === false) {
            $this->repos👷UploadReleaseAsset = new Internal\Operator\Repos\UploadReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷UploadReleaseAsset;
    }

    public function reactions👷ListForRelease(): Internal\Operator\Reactions\ListForRelease
    {
        if ($this->reactions👷ListForRelease instanceof Internal\Operator\Reactions\ListForRelease === false) {
            $this->reactions👷ListForRelease = new Internal\Operator\Reactions\ListForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForRelease;
    }

    public function reactions👷ListForReleaseListing(): Internal\Operator\Reactions\ListForReleaseListing
    {
        if ($this->reactions👷ListForReleaseListing instanceof Internal\Operator\Reactions\ListForReleaseListing === false) {
            $this->reactions👷ListForReleaseListing = new Internal\Operator\Reactions\ListForReleaseListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForReleaseListing;
    }

    public function reactions👷CreateForRelease(): Internal\Operator\Reactions\CreateForRelease
    {
        if ($this->reactions👷CreateForRelease instanceof Internal\Operator\Reactions\CreateForRelease === false) {
            $this->reactions👷CreateForRelease = new Internal\Operator\Reactions\CreateForRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷CreateForRelease;
    }

    public function reactions👷DeleteForRelease(): Internal\Operator\Reactions\DeleteForRelease
    {
        if ($this->reactions👷DeleteForRelease instanceof Internal\Operator\Reactions\DeleteForRelease === false) {
            $this->reactions👷DeleteForRelease = new Internal\Operator\Reactions\DeleteForRelease($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForRelease;
    }

    public function repos👷GetBranchRules(): Internal\Operator\Repos\GetBranchRules
    {
        if ($this->repos👷GetBranchRules instanceof Internal\Operator\Repos\GetBranchRules === false) {
            $this->repos👷GetBranchRules = new Internal\Operator\Repos\GetBranchRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranchRules;
    }

    public function repos👷GetBranchRulesListing(): Internal\Operator\Repos\GetBranchRulesListing
    {
        if ($this->repos👷GetBranchRulesListing instanceof Internal\Operator\Repos\GetBranchRulesListing === false) {
            $this->repos👷GetBranchRulesListing = new Internal\Operator\Repos\GetBranchRulesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranchRulesListing;
    }

    public function repos👷GetRepoRulesets(): Internal\Operator\Repos\GetRepoRulesets
    {
        if ($this->repos👷GetRepoRulesets instanceof Internal\Operator\Repos\GetRepoRulesets === false) {
            $this->repos👷GetRepoRulesets = new Internal\Operator\Repos\GetRepoRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷GetRepoRulesets;
    }

    public function repos👷GetRepoRulesetsListing(): Internal\Operator\Repos\GetRepoRulesetsListing
    {
        if ($this->repos👷GetRepoRulesetsListing instanceof Internal\Operator\Repos\GetRepoRulesetsListing === false) {
            $this->repos👷GetRepoRulesetsListing = new Internal\Operator\Repos\GetRepoRulesetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷GetRepoRulesetsListing;
    }

    public function repos👷CreateRepoRuleset(): Internal\Operator\Repos\CreateRepoRuleset
    {
        if ($this->repos👷CreateRepoRuleset instanceof Internal\Operator\Repos\CreateRepoRuleset === false) {
            $this->repos👷CreateRepoRuleset = new Internal\Operator\Repos\CreateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷CreateRepoRuleset;
    }

    public function repos👷GetRepoRuleSuites(): Internal\Operator\Repos\GetRepoRuleSuites
    {
        if ($this->repos👷GetRepoRuleSuites instanceof Internal\Operator\Repos\GetRepoRuleSuites === false) {
            $this->repos👷GetRepoRuleSuites = new Internal\Operator\Repos\GetRepoRuleSuites($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites());
        }

        return $this->repos👷GetRepoRuleSuites;
    }

    public function repos👷GetRepoRuleSuitesListing(): Internal\Operator\Repos\GetRepoRuleSuitesListing
    {
        if ($this->repos👷GetRepoRuleSuitesListing instanceof Internal\Operator\Repos\GetRepoRuleSuitesListing === false) {
            $this->repos👷GetRepoRuleSuitesListing = new Internal\Operator\Repos\GetRepoRuleSuitesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites());
        }

        return $this->repos👷GetRepoRuleSuitesListing;
    }

    public function repos👷GetRepoRuleSuite(): Internal\Operator\Repos\GetRepoRuleSuite
    {
        if ($this->repos👷GetRepoRuleSuite instanceof Internal\Operator\Repos\GetRepoRuleSuite === false) {
            $this->repos👷GetRepoRuleSuite = new Internal\Operator\Repos\GetRepoRuleSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId());
        }

        return $this->repos👷GetRepoRuleSuite;
    }

    public function repos👷GetRepoRuleset(): Internal\Operator\Repos\GetRepoRuleset
    {
        if ($this->repos👷GetRepoRuleset instanceof Internal\Operator\Repos\GetRepoRuleset === false) {
            $this->repos👷GetRepoRuleset = new Internal\Operator\Repos\GetRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷GetRepoRuleset;
    }

    public function repos👷UpdateRepoRuleset(): Internal\Operator\Repos\UpdateRepoRuleset
    {
        if ($this->repos👷UpdateRepoRuleset instanceof Internal\Operator\Repos\UpdateRepoRuleset === false) {
            $this->repos👷UpdateRepoRuleset = new Internal\Operator\Repos\UpdateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷UpdateRepoRuleset;
    }

    public function repos👷DeleteRepoRuleset(): Internal\Operator\Repos\DeleteRepoRuleset
    {
        if ($this->repos👷DeleteRepoRuleset instanceof Internal\Operator\Repos\DeleteRepoRuleset === false) {
            $this->repos👷DeleteRepoRuleset = new Internal\Operator\Repos\DeleteRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷DeleteRepoRuleset;
    }

    public function secretScanning👷ListAlertsForRepo(): Internal\Operator\SecretScanning\ListAlertsForRepo
    {
        if ($this->secretScanning👷ListAlertsForRepo instanceof Internal\Operator\SecretScanning\ListAlertsForRepo === false) {
            $this->secretScanning👷ListAlertsForRepo = new Internal\Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepo;
    }

    public function secretScanning👷ListAlertsForRepoListing(): Internal\Operator\SecretScanning\ListAlertsForRepoListing
    {
        if ($this->secretScanning👷ListAlertsForRepoListing instanceof Internal\Operator\SecretScanning\ListAlertsForRepoListing === false) {
            $this->secretScanning👷ListAlertsForRepoListing = new Internal\Operator\SecretScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepoListing;
    }

    public function secretScanning👷GetAlert(): Internal\Operator\SecretScanning\GetAlert
    {
        if ($this->secretScanning👷GetAlert instanceof Internal\Operator\SecretScanning\GetAlert === false) {
            $this->secretScanning👷GetAlert = new Internal\Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷GetAlert;
    }

    public function secretScanning👷UpdateAlert(): Internal\Operator\SecretScanning\UpdateAlert
    {
        if ($this->secretScanning👷UpdateAlert instanceof Internal\Operator\SecretScanning\UpdateAlert === false) {
            $this->secretScanning👷UpdateAlert = new Internal\Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷UpdateAlert;
    }

    public function secretScanning👷ListLocationsForAlert(): Internal\Operator\SecretScanning\ListLocationsForAlert
    {
        if ($this->secretScanning👷ListLocationsForAlert instanceof Internal\Operator\SecretScanning\ListLocationsForAlert === false) {
            $this->secretScanning👷ListLocationsForAlert = new Internal\Operator\SecretScanning\ListLocationsForAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlert;
    }

    public function secretScanning👷ListLocationsForAlertListing(): Internal\Operator\SecretScanning\ListLocationsForAlertListing
    {
        if ($this->secretScanning👷ListLocationsForAlertListing instanceof Internal\Operator\SecretScanning\ListLocationsForAlertListing === false) {
            $this->secretScanning👷ListLocationsForAlertListing = new Internal\Operator\SecretScanning\ListLocationsForAlertListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlertListing;
    }

    public function securityAdvisories👷ListRepositoryAdvisories(): Internal\Operator\SecurityAdvisories\ListRepositoryAdvisories
    {
        if ($this->securityAdvisories👷ListRepositoryAdvisories instanceof Internal\Operator\SecurityAdvisories\ListRepositoryAdvisories === false) {
            $this->securityAdvisories👷ListRepositoryAdvisories = new Internal\Operator\SecurityAdvisories\ListRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷ListRepositoryAdvisories;
    }

    public function securityAdvisories👷CreateRepositoryAdvisory(): Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisory
    {
        if ($this->securityAdvisories👷CreateRepositoryAdvisory instanceof Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisory === false) {
            $this->securityAdvisories👷CreateRepositoryAdvisory = new Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷CreateRepositoryAdvisory;
    }

    public function securityAdvisories👷CreatePrivateVulnerabilityReport(): Internal\Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport
    {
        if ($this->securityAdvisories👷CreatePrivateVulnerabilityReport instanceof Internal\Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport === false) {
            $this->securityAdvisories👷CreatePrivateVulnerabilityReport = new Internal\Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports());
        }

        return $this->securityAdvisories👷CreatePrivateVulnerabilityReport;
    }

    public function securityAdvisories👷GetRepositoryAdvisory(): Internal\Operator\SecurityAdvisories\GetRepositoryAdvisory
    {
        if ($this->securityAdvisories👷GetRepositoryAdvisory instanceof Internal\Operator\SecurityAdvisories\GetRepositoryAdvisory === false) {
            $this->securityAdvisories👷GetRepositoryAdvisory = new Internal\Operator\SecurityAdvisories\GetRepositoryAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->securityAdvisories👷GetRepositoryAdvisory;
    }

    public function securityAdvisories👷UpdateRepositoryAdvisory(): Internal\Operator\SecurityAdvisories\UpdateRepositoryAdvisory
    {
        if ($this->securityAdvisories👷UpdateRepositoryAdvisory instanceof Internal\Operator\SecurityAdvisories\UpdateRepositoryAdvisory === false) {
            $this->securityAdvisories👷UpdateRepositoryAdvisory = new Internal\Operator\SecurityAdvisories\UpdateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->securityAdvisories👷UpdateRepositoryAdvisory;
    }

    public function securityAdvisories👷CreateRepositoryAdvisoryCveRequest(): Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest
    {
        if ($this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest instanceof Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest === false) {
            $this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest = new Internal\Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve());
        }

        return $this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest;
    }

    public function securityAdvisories👷CreateFork(): Internal\Operator\SecurityAdvisories\CreateFork
    {
        if ($this->securityAdvisories👷CreateFork instanceof Internal\Operator\SecurityAdvisories\CreateFork === false) {
            $this->securityAdvisories👷CreateFork = new Internal\Operator\SecurityAdvisories\CreateFork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks());
        }

        return $this->securityAdvisories👷CreateFork;
    }

    public function activity👷ListStargazersForRepo(): Internal\Operator\Activity\ListStargazersForRepo
    {
        if ($this->activity👷ListStargazersForRepo instanceof Internal\Operator\Activity\ListStargazersForRepo === false) {
            $this->activity👷ListStargazersForRepo = new Internal\Operator\Activity\ListStargazersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers());
        }

        return $this->activity👷ListStargazersForRepo;
    }

    public function repos👷GetCodeFrequencyStats(): Internal\Operator\Repos\GetCodeFrequencyStats
    {
        if ($this->repos👷GetCodeFrequencyStats instanceof Internal\Operator\Repos\GetCodeFrequencyStats === false) {
            $this->repos👷GetCodeFrequencyStats = new Internal\Operator\Repos\GetCodeFrequencyStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency());
        }

        return $this->repos👷GetCodeFrequencyStats;
    }

    public function repos👷GetCommitActivityStats(): Internal\Operator\Repos\GetCommitActivityStats
    {
        if ($this->repos👷GetCommitActivityStats instanceof Internal\Operator\Repos\GetCommitActivityStats === false) {
            $this->repos👷GetCommitActivityStats = new Internal\Operator\Repos\GetCommitActivityStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity());
        }

        return $this->repos👷GetCommitActivityStats;
    }

    public function repos👷GetContributorsStats(): Internal\Operator\Repos\GetContributorsStats
    {
        if ($this->repos👷GetContributorsStats instanceof Internal\Operator\Repos\GetContributorsStats === false) {
            $this->repos👷GetContributorsStats = new Internal\Operator\Repos\GetContributorsStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors());
        }

        return $this->repos👷GetContributorsStats;
    }

    public function repos👷GetParticipationStats(): Internal\Operator\Repos\GetParticipationStats
    {
        if ($this->repos👷GetParticipationStats instanceof Internal\Operator\Repos\GetParticipationStats === false) {
            $this->repos👷GetParticipationStats = new Internal\Operator\Repos\GetParticipationStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation());
        }

        return $this->repos👷GetParticipationStats;
    }

    public function repos👷GetPunchCardStats(): Internal\Operator\Repos\GetPunchCardStats
    {
        if ($this->repos👷GetPunchCardStats instanceof Internal\Operator\Repos\GetPunchCardStats === false) {
            $this->repos👷GetPunchCardStats = new Internal\Operator\Repos\GetPunchCardStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard());
        }

        return $this->repos👷GetPunchCardStats;
    }

    public function repos👷CreateCommitStatus(): Internal\Operator\Repos\CreateCommitStatus
    {
        if ($this->repos👷CreateCommitStatus instanceof Internal\Operator\Repos\CreateCommitStatus === false) {
            $this->repos👷CreateCommitStatus = new Internal\Operator\Repos\CreateCommitStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha());
        }

        return $this->repos👷CreateCommitStatus;
    }

    public function activity👷ListWatchersForRepo(): Internal\Operator\Activity\ListWatchersForRepo
    {
        if ($this->activity👷ListWatchersForRepo instanceof Internal\Operator\Activity\ListWatchersForRepo === false) {
            $this->activity👷ListWatchersForRepo = new Internal\Operator\Activity\ListWatchersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepo;
    }

    public function activity👷ListWatchersForRepoListing(): Internal\Operator\Activity\ListWatchersForRepoListing
    {
        if ($this->activity👷ListWatchersForRepoListing instanceof Internal\Operator\Activity\ListWatchersForRepoListing === false) {
            $this->activity👷ListWatchersForRepoListing = new Internal\Operator\Activity\ListWatchersForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepoListing;
    }

    public function activity👷GetRepoSubscription(): Internal\Operator\Activity\GetRepoSubscription
    {
        if ($this->activity👷GetRepoSubscription instanceof Internal\Operator\Activity\GetRepoSubscription === false) {
            $this->activity👷GetRepoSubscription = new Internal\Operator\Activity\GetRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷GetRepoSubscription;
    }

    public function activity👷SetRepoSubscription(): Internal\Operator\Activity\SetRepoSubscription
    {
        if ($this->activity👷SetRepoSubscription instanceof Internal\Operator\Activity\SetRepoSubscription === false) {
            $this->activity👷SetRepoSubscription = new Internal\Operator\Activity\SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷SetRepoSubscription;
    }

    public function activity👷DeleteRepoSubscription(): Internal\Operator\Activity\DeleteRepoSubscription
    {
        if ($this->activity👷DeleteRepoSubscription instanceof Internal\Operator\Activity\DeleteRepoSubscription === false) {
            $this->activity👷DeleteRepoSubscription = new Internal\Operator\Activity\DeleteRepoSubscription($this->browser, $this->authentication);
        }

        return $this->activity👷DeleteRepoSubscription;
    }

    public function repos👷ListTags(): Internal\Operator\Repos\ListTags
    {
        if ($this->repos👷ListTags instanceof Internal\Operator\Repos\ListTags === false) {
            $this->repos👷ListTags = new Internal\Operator\Repos\ListTags($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTags;
    }

    public function repos👷ListTagsListing(): Internal\Operator\Repos\ListTagsListing
    {
        if ($this->repos👷ListTagsListing instanceof Internal\Operator\Repos\ListTagsListing === false) {
            $this->repos👷ListTagsListing = new Internal\Operator\Repos\ListTagsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTagsListing;
    }

    public function repos👷ListTagProtection(): Internal\Operator\Repos\ListTagProtection
    {
        if ($this->repos👷ListTagProtection instanceof Internal\Operator\Repos\ListTagProtection === false) {
            $this->repos👷ListTagProtection = new Internal\Operator\Repos\ListTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->repos👷ListTagProtection;
    }

    public function repos👷CreateTagProtection(): Internal\Operator\Repos\CreateTagProtection
    {
        if ($this->repos👷CreateTagProtection instanceof Internal\Operator\Repos\CreateTagProtection === false) {
            $this->repos👷CreateTagProtection = new Internal\Operator\Repos\CreateTagProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->repos👷CreateTagProtection;
    }

    public function repos👷DeleteTagProtection(): Internal\Operator\Repos\DeleteTagProtection
    {
        if ($this->repos👷DeleteTagProtection instanceof Internal\Operator\Repos\DeleteTagProtection === false) {
            $this->repos👷DeleteTagProtection = new Internal\Operator\Repos\DeleteTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId());
        }

        return $this->repos👷DeleteTagProtection;
    }

    public function repos👷DownloadTarballArchive(): Internal\Operator\Repos\DownloadTarballArchive
    {
        if ($this->repos👷DownloadTarballArchive instanceof Internal\Operator\Repos\DownloadTarballArchive === false) {
            $this->repos👷DownloadTarballArchive = new Internal\Operator\Repos\DownloadTarballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchive;
    }

    public function repos👷DownloadTarballArchiveStreaming(): Internal\Operator\Repos\DownloadTarballArchiveStreaming
    {
        if ($this->repos👷DownloadTarballArchiveStreaming instanceof Internal\Operator\Repos\DownloadTarballArchiveStreaming === false) {
            $this->repos👷DownloadTarballArchiveStreaming = new Internal\Operator\Repos\DownloadTarballArchiveStreaming($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchiveStreaming;
    }

    public function repos👷ListTeams(): Internal\Operator\Repos\ListTeams
    {
        if ($this->repos👷ListTeams instanceof Internal\Operator\Repos\ListTeams === false) {
            $this->repos👷ListTeams = new Internal\Operator\Repos\ListTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeams;
    }

    public function repos👷ListTeamsListing(): Internal\Operator\Repos\ListTeamsListing
    {
        if ($this->repos👷ListTeamsListing instanceof Internal\Operator\Repos\ListTeamsListing === false) {
            $this->repos👷ListTeamsListing = new Internal\Operator\Repos\ListTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeamsListing;
    }

    public function repos👷GetAllTopics(): Internal\Operator\Repos\GetAllTopics
    {
        if ($this->repos👷GetAllTopics instanceof Internal\Operator\Repos\GetAllTopics === false) {
            $this->repos👷GetAllTopics = new Internal\Operator\Repos\GetAllTopics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷GetAllTopics;
    }

    public function repos👷ReplaceAllTopics(): Internal\Operator\Repos\ReplaceAllTopics
    {
        if ($this->repos👷ReplaceAllTopics instanceof Internal\Operator\Repos\ReplaceAllTopics === false) {
            $this->repos👷ReplaceAllTopics = new Internal\Operator\Repos\ReplaceAllTopics($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷ReplaceAllTopics;
    }

    public function repos👷GetClones(): Internal\Operator\Repos\GetClones
    {
        if ($this->repos👷GetClones instanceof Internal\Operator\Repos\GetClones === false) {
            $this->repos👷GetClones = new Internal\Operator\Repos\GetClones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones());
        }

        return $this->repos👷GetClones;
    }

    public function repos👷GetTopPaths(): Internal\Operator\Repos\GetTopPaths
    {
        if ($this->repos👷GetTopPaths instanceof Internal\Operator\Repos\GetTopPaths === false) {
            $this->repos👷GetTopPaths = new Internal\Operator\Repos\GetTopPaths($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths());
        }

        return $this->repos👷GetTopPaths;
    }

    public function repos👷GetTopReferrers(): Internal\Operator\Repos\GetTopReferrers
    {
        if ($this->repos👷GetTopReferrers instanceof Internal\Operator\Repos\GetTopReferrers === false) {
            $this->repos👷GetTopReferrers = new Internal\Operator\Repos\GetTopReferrers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers());
        }

        return $this->repos👷GetTopReferrers;
    }

    public function repos👷GetViews(): Internal\Operator\Repos\GetViews
    {
        if ($this->repos👷GetViews instanceof Internal\Operator\Repos\GetViews === false) {
            $this->repos👷GetViews = new Internal\Operator\Repos\GetViews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views());
        }

        return $this->repos👷GetViews;
    }

    public function repos👷Transfer(): Internal\Operator\Repos\Transfer
    {
        if ($this->repos👷Transfer instanceof Internal\Operator\Repos\Transfer === false) {
            $this->repos👷Transfer = new Internal\Operator\Repos\Transfer($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer());
        }

        return $this->repos👷Transfer;
    }

    public function repos👷CheckVulnerabilityAlerts(): Internal\Operator\Repos\CheckVulnerabilityAlerts
    {
        if ($this->repos👷CheckVulnerabilityAlerts instanceof Internal\Operator\Repos\CheckVulnerabilityAlerts === false) {
            $this->repos👷CheckVulnerabilityAlerts = new Internal\Operator\Repos\CheckVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷CheckVulnerabilityAlerts;
    }

    public function repos👷EnableVulnerabilityAlerts(): Internal\Operator\Repos\EnableVulnerabilityAlerts
    {
        if ($this->repos👷EnableVulnerabilityAlerts instanceof Internal\Operator\Repos\EnableVulnerabilityAlerts === false) {
            $this->repos👷EnableVulnerabilityAlerts = new Internal\Operator\Repos\EnableVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷EnableVulnerabilityAlerts;
    }

    public function repos👷DisableVulnerabilityAlerts(): Internal\Operator\Repos\DisableVulnerabilityAlerts
    {
        if ($this->repos👷DisableVulnerabilityAlerts instanceof Internal\Operator\Repos\DisableVulnerabilityAlerts === false) {
            $this->repos👷DisableVulnerabilityAlerts = new Internal\Operator\Repos\DisableVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷DisableVulnerabilityAlerts;
    }

    public function repos👷DownloadZipballArchive(): Internal\Operator\Repos\DownloadZipballArchive
    {
        if ($this->repos👷DownloadZipballArchive instanceof Internal\Operator\Repos\DownloadZipballArchive === false) {
            $this->repos👷DownloadZipballArchive = new Internal\Operator\Repos\DownloadZipballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchive;
    }

    public function repos👷DownloadZipballArchiveStreaming(): Internal\Operator\Repos\DownloadZipballArchiveStreaming
    {
        if ($this->repos👷DownloadZipballArchiveStreaming instanceof Internal\Operator\Repos\DownloadZipballArchiveStreaming === false) {
            $this->repos👷DownloadZipballArchiveStreaming = new Internal\Operator\Repos\DownloadZipballArchiveStreaming($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchiveStreaming;
    }

    public function repos👷CreateUsingTemplate(): Internal\Operator\Repos\CreateUsingTemplate
    {
        if ($this->repos👷CreateUsingTemplate instanceof Internal\Operator\Repos\CreateUsingTemplate === false) {
            $this->repos👷CreateUsingTemplate = new Internal\Operator\Repos\CreateUsingTemplate($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate());
        }

        return $this->repos👷CreateUsingTemplate;
    }

    public function repos👷ListPublic(): Internal\Operator\Repos\ListPublic
    {
        if ($this->repos👷ListPublic instanceof Internal\Operator\Repos\ListPublic === false) {
            $this->repos👷ListPublic = new Internal\Operator\Repos\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories());
        }

        return $this->repos👷ListPublic;
    }

    public function search👷Code(): Internal\Operator\Search\Code
    {
        if ($this->search👷Code instanceof Internal\Operator\Search\Code === false) {
            $this->search👷Code = new Internal\Operator\Search\Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Code());
        }

        return $this->search👷Code;
    }

    public function search👷Commits(): Internal\Operator\Search\Commits
    {
        if ($this->search👷Commits instanceof Internal\Operator\Search\Commits === false) {
            $this->search👷Commits = new Internal\Operator\Search\Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Commits());
        }

        return $this->search👷Commits;
    }

    public function search👷IssuesAndPullRequests(): Internal\Operator\Search\IssuesAndPullRequests
    {
        if ($this->search👷IssuesAndPullRequests instanceof Internal\Operator\Search\IssuesAndPullRequests === false) {
            $this->search👷IssuesAndPullRequests = new Internal\Operator\Search\IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Issues());
        }

        return $this->search👷IssuesAndPullRequests;
    }

    public function search👷Labels(): Internal\Operator\Search\Labels
    {
        if ($this->search👷Labels instanceof Internal\Operator\Search\Labels === false) {
            $this->search👷Labels = new Internal\Operator\Search\Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Labels());
        }

        return $this->search👷Labels;
    }

    public function search👷Repos(): Internal\Operator\Search\Repos
    {
        if ($this->search👷Repos instanceof Internal\Operator\Search\Repos === false) {
            $this->search👷Repos = new Internal\Operator\Search\Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories());
        }

        return $this->search👷Repos;
    }

    public function search👷Topics(): Internal\Operator\Search\Topics
    {
        if ($this->search👷Topics instanceof Internal\Operator\Search\Topics === false) {
            $this->search👷Topics = new Internal\Operator\Search\Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Topics());
        }

        return $this->search👷Topics;
    }

    public function search👷Users(): Internal\Operator\Search\Users
    {
        if ($this->search👷Users instanceof Internal\Operator\Search\Users === false) {
            $this->search👷Users = new Internal\Operator\Search\Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Users());
        }

        return $this->search👷Users;
    }

    public function teams👷GetLegacy(): Internal\Operator\Teams\GetLegacy
    {
        if ($this->teams👷GetLegacy instanceof Internal\Operator\Teams\GetLegacy === false) {
            $this->teams👷GetLegacy = new Internal\Operator\Teams\GetLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷GetLegacy;
    }

    public function teams👷DeleteLegacy(): Internal\Operator\Teams\DeleteLegacy
    {
        if ($this->teams👷DeleteLegacy instanceof Internal\Operator\Teams\DeleteLegacy === false) {
            $this->teams👷DeleteLegacy = new Internal\Operator\Teams\DeleteLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷DeleteLegacy;
    }

    public function teams👷UpdateLegacy(): Internal\Operator\Teams\UpdateLegacy
    {
        if ($this->teams👷UpdateLegacy instanceof Internal\Operator\Teams\UpdateLegacy === false) {
            $this->teams👷UpdateLegacy = new Internal\Operator\Teams\UpdateLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷UpdateLegacy;
    }

    public function teams👷ListDiscussionsLegacy(): Internal\Operator\Teams\ListDiscussionsLegacy
    {
        if ($this->teams👷ListDiscussionsLegacy instanceof Internal\Operator\Teams\ListDiscussionsLegacy === false) {
            $this->teams👷ListDiscussionsLegacy = new Internal\Operator\Teams\ListDiscussionsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacy;
    }

    public function teams👷ListDiscussionsLegacyListing(): Internal\Operator\Teams\ListDiscussionsLegacyListing
    {
        if ($this->teams👷ListDiscussionsLegacyListing instanceof Internal\Operator\Teams\ListDiscussionsLegacyListing === false) {
            $this->teams👷ListDiscussionsLegacyListing = new Internal\Operator\Teams\ListDiscussionsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacyListing;
    }

    public function teams👷CreateDiscussionLegacy(): Internal\Operator\Teams\CreateDiscussionLegacy
    {
        if ($this->teams👷CreateDiscussionLegacy instanceof Internal\Operator\Teams\CreateDiscussionLegacy === false) {
            $this->teams👷CreateDiscussionLegacy = new Internal\Operator\Teams\CreateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷CreateDiscussionLegacy;
    }

    public function teams👷GetDiscussionLegacy(): Internal\Operator\Teams\GetDiscussionLegacy
    {
        if ($this->teams👷GetDiscussionLegacy instanceof Internal\Operator\Teams\GetDiscussionLegacy === false) {
            $this->teams👷GetDiscussionLegacy = new Internal\Operator\Teams\GetDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionLegacy;
    }

    public function teams👷DeleteDiscussionLegacy(): Internal\Operator\Teams\DeleteDiscussionLegacy
    {
        if ($this->teams👷DeleteDiscussionLegacy instanceof Internal\Operator\Teams\DeleteDiscussionLegacy === false) {
            $this->teams👷DeleteDiscussionLegacy = new Internal\Operator\Teams\DeleteDiscussionLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionLegacy;
    }

    public function teams👷UpdateDiscussionLegacy(): Internal\Operator\Teams\UpdateDiscussionLegacy
    {
        if ($this->teams👷UpdateDiscussionLegacy instanceof Internal\Operator\Teams\UpdateDiscussionLegacy === false) {
            $this->teams👷UpdateDiscussionLegacy = new Internal\Operator\Teams\UpdateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacy(): Internal\Operator\Teams\ListDiscussionCommentsLegacy
    {
        if ($this->teams👷ListDiscussionCommentsLegacy instanceof Internal\Operator\Teams\ListDiscussionCommentsLegacy === false) {
            $this->teams👷ListDiscussionCommentsLegacy = new Internal\Operator\Teams\ListDiscussionCommentsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacyListing(): Internal\Operator\Teams\ListDiscussionCommentsLegacyListing
    {
        if ($this->teams👷ListDiscussionCommentsLegacyListing instanceof Internal\Operator\Teams\ListDiscussionCommentsLegacyListing === false) {
            $this->teams👷ListDiscussionCommentsLegacyListing = new Internal\Operator\Teams\ListDiscussionCommentsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacyListing;
    }

    public function teams👷CreateDiscussionCommentLegacy(): Internal\Operator\Teams\CreateDiscussionCommentLegacy
    {
        if ($this->teams👷CreateDiscussionCommentLegacy instanceof Internal\Operator\Teams\CreateDiscussionCommentLegacy === false) {
            $this->teams👷CreateDiscussionCommentLegacy = new Internal\Operator\Teams\CreateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentLegacy;
    }

    public function teams👷GetDiscussionCommentLegacy(): Internal\Operator\Teams\GetDiscussionCommentLegacy
    {
        if ($this->teams👷GetDiscussionCommentLegacy instanceof Internal\Operator\Teams\GetDiscussionCommentLegacy === false) {
            $this->teams👷GetDiscussionCommentLegacy = new Internal\Operator\Teams\GetDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentLegacy;
    }

    public function teams👷DeleteDiscussionCommentLegacy(): Internal\Operator\Teams\DeleteDiscussionCommentLegacy
    {
        if ($this->teams👷DeleteDiscussionCommentLegacy instanceof Internal\Operator\Teams\DeleteDiscussionCommentLegacy === false) {
            $this->teams👷DeleteDiscussionCommentLegacy = new Internal\Operator\Teams\DeleteDiscussionCommentLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentLegacy;
    }

    public function teams👷UpdateDiscussionCommentLegacy(): Internal\Operator\Teams\UpdateDiscussionCommentLegacy
    {
        if ($this->teams👷UpdateDiscussionCommentLegacy instanceof Internal\Operator\Teams\UpdateDiscussionCommentLegacy === false) {
            $this->teams👷UpdateDiscussionCommentLegacy = new Internal\Operator\Teams\UpdateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionCommentLegacy(): Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacy
    {
        if ($this->reactions👷ListForTeamDiscussionCommentLegacy instanceof Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacy === false) {
            $this->reactions👷ListForTeamDiscussionCommentLegacy = new Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionCommentLegacyListing(): Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacyListing
    {
        if ($this->reactions👷ListForTeamDiscussionCommentLegacyListing instanceof Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacyListing === false) {
            $this->reactions👷ListForTeamDiscussionCommentLegacyListing = new Internal\Operator\Reactions\ListForTeamDiscussionCommentLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentLegacyListing;
    }

    public function reactions👷CreateForTeamDiscussionCommentLegacy(): Internal\Operator\Reactions\CreateForTeamDiscussionCommentLegacy
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentLegacy instanceof Internal\Operator\Reactions\CreateForTeamDiscussionCommentLegacy === false) {
            $this->reactions👷CreateForTeamDiscussionCommentLegacy = new Internal\Operator\Reactions\CreateForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionLegacy(): Internal\Operator\Reactions\ListForTeamDiscussionLegacy
    {
        if ($this->reactions👷ListForTeamDiscussionLegacy instanceof Internal\Operator\Reactions\ListForTeamDiscussionLegacy === false) {
            $this->reactions👷ListForTeamDiscussionLegacy = new Internal\Operator\Reactions\ListForTeamDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionLegacy;
    }

    public function reactions👷ListForTeamDiscussionLegacyListing(): Internal\Operator\Reactions\ListForTeamDiscussionLegacyListing
    {
        if ($this->reactions👷ListForTeamDiscussionLegacyListing instanceof Internal\Operator\Reactions\ListForTeamDiscussionLegacyListing === false) {
            $this->reactions👷ListForTeamDiscussionLegacyListing = new Internal\Operator\Reactions\ListForTeamDiscussionLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionLegacyListing;
    }

    public function reactions👷CreateForTeamDiscussionLegacy(): Internal\Operator\Reactions\CreateForTeamDiscussionLegacy
    {
        if ($this->reactions👷CreateForTeamDiscussionLegacy instanceof Internal\Operator\Reactions\CreateForTeamDiscussionLegacy === false) {
            $this->reactions👷CreateForTeamDiscussionLegacy = new Internal\Operator\Reactions\CreateForTeamDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionLegacy;
    }

    public function teams👷ListPendingInvitationsLegacy(): Internal\Operator\Teams\ListPendingInvitationsLegacy
    {
        if ($this->teams👷ListPendingInvitationsLegacy instanceof Internal\Operator\Teams\ListPendingInvitationsLegacy === false) {
            $this->teams👷ListPendingInvitationsLegacy = new Internal\Operator\Teams\ListPendingInvitationsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsLegacy;
    }

    public function teams👷ListPendingInvitationsLegacyListing(): Internal\Operator\Teams\ListPendingInvitationsLegacyListing
    {
        if ($this->teams👷ListPendingInvitationsLegacyListing instanceof Internal\Operator\Teams\ListPendingInvitationsLegacyListing === false) {
            $this->teams👷ListPendingInvitationsLegacyListing = new Internal\Operator\Teams\ListPendingInvitationsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsLegacyListing;
    }

    public function teams👷ListMembersLegacy(): Internal\Operator\Teams\ListMembersLegacy
    {
        if ($this->teams👷ListMembersLegacy instanceof Internal\Operator\Teams\ListMembersLegacy === false) {
            $this->teams👷ListMembersLegacy = new Internal\Operator\Teams\ListMembersLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacy;
    }

    public function teams👷ListMembersLegacyListing(): Internal\Operator\Teams\ListMembersLegacyListing
    {
        if ($this->teams👷ListMembersLegacyListing instanceof Internal\Operator\Teams\ListMembersLegacyListing === false) {
            $this->teams👷ListMembersLegacyListing = new Internal\Operator\Teams\ListMembersLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacyListing;
    }

    public function teams👷GetMemberLegacy(): Internal\Operator\Teams\GetMemberLegacy
    {
        if ($this->teams👷GetMemberLegacy instanceof Internal\Operator\Teams\GetMemberLegacy === false) {
            $this->teams👷GetMemberLegacy = new Internal\Operator\Teams\GetMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷GetMemberLegacy;
    }

    public function teams👷AddMemberLegacy(): Internal\Operator\Teams\AddMemberLegacy
    {
        if ($this->teams👷AddMemberLegacy instanceof Internal\Operator\Teams\AddMemberLegacy === false) {
            $this->teams👷AddMemberLegacy = new Internal\Operator\Teams\AddMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->teams👷AddMemberLegacy;
    }

    public function teams👷RemoveMemberLegacy(): Internal\Operator\Teams\RemoveMemberLegacy
    {
        if ($this->teams👷RemoveMemberLegacy instanceof Internal\Operator\Teams\RemoveMemberLegacy === false) {
            $this->teams👷RemoveMemberLegacy = new Internal\Operator\Teams\RemoveMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMemberLegacy;
    }

    public function teams👷GetMembershipForUserLegacy(): Internal\Operator\Teams\GetMembershipForUserLegacy
    {
        if ($this->teams👷GetMembershipForUserLegacy instanceof Internal\Operator\Teams\GetMembershipForUserLegacy === false) {
            $this->teams👷GetMembershipForUserLegacy = new Internal\Operator\Teams\GetMembershipForUserLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserLegacy;
    }

    public function teams👷AddOrUpdateMembershipForUserLegacy(): Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy
    {
        if ($this->teams👷AddOrUpdateMembershipForUserLegacy instanceof Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy === false) {
            $this->teams👷AddOrUpdateMembershipForUserLegacy = new Internal\Operator\Teams\AddOrUpdateMembershipForUserLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserLegacy;
    }

    public function teams👷RemoveMembershipForUserLegacy(): Internal\Operator\Teams\RemoveMembershipForUserLegacy
    {
        if ($this->teams👷RemoveMembershipForUserLegacy instanceof Internal\Operator\Teams\RemoveMembershipForUserLegacy === false) {
            $this->teams👷RemoveMembershipForUserLegacy = new Internal\Operator\Teams\RemoveMembershipForUserLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserLegacy;
    }

    public function teams👷ListProjectsLegacy(): Internal\Operator\Teams\ListProjectsLegacy
    {
        if ($this->teams👷ListProjectsLegacy instanceof Internal\Operator\Teams\ListProjectsLegacy === false) {
            $this->teams👷ListProjectsLegacy = new Internal\Operator\Teams\ListProjectsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacy;
    }

    public function teams👷ListProjectsLegacyListing(): Internal\Operator\Teams\ListProjectsLegacyListing
    {
        if ($this->teams👷ListProjectsLegacyListing instanceof Internal\Operator\Teams\ListProjectsLegacyListing === false) {
            $this->teams👷ListProjectsLegacyListing = new Internal\Operator\Teams\ListProjectsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacyListing;
    }

    public function teams👷CheckPermissionsForProjectLegacy(): Internal\Operator\Teams\CheckPermissionsForProjectLegacy
    {
        if ($this->teams👷CheckPermissionsForProjectLegacy instanceof Internal\Operator\Teams\CheckPermissionsForProjectLegacy === false) {
            $this->teams👷CheckPermissionsForProjectLegacy = new Internal\Operator\Teams\CheckPermissionsForProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectLegacy;
    }

    public function teams👷AddOrUpdateProjectPermissionsLegacy(): Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsLegacy instanceof Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateProjectPermissionsLegacy = new Internal\Operator\Teams\AddOrUpdateProjectPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsLegacy;
    }

    public function teams👷RemoveProjectLegacy(): Internal\Operator\Teams\RemoveProjectLegacy
    {
        if ($this->teams👷RemoveProjectLegacy instanceof Internal\Operator\Teams\RemoveProjectLegacy === false) {
            $this->teams👷RemoveProjectLegacy = new Internal\Operator\Teams\RemoveProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷RemoveProjectLegacy;
    }

    public function teams👷ListReposLegacy(): Internal\Operator\Teams\ListReposLegacy
    {
        if ($this->teams👷ListReposLegacy instanceof Internal\Operator\Teams\ListReposLegacy === false) {
            $this->teams👷ListReposLegacy = new Internal\Operator\Teams\ListReposLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacy;
    }

    public function teams👷ListReposLegacyListing(): Internal\Operator\Teams\ListReposLegacyListing
    {
        if ($this->teams👷ListReposLegacyListing instanceof Internal\Operator\Teams\ListReposLegacyListing === false) {
            $this->teams👷ListReposLegacyListing = new Internal\Operator\Teams\ListReposLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacyListing;
    }

    public function teams👷CheckPermissionsForRepoLegacy(): Internal\Operator\Teams\CheckPermissionsForRepoLegacy
    {
        if ($this->teams👷CheckPermissionsForRepoLegacy instanceof Internal\Operator\Teams\CheckPermissionsForRepoLegacy === false) {
            $this->teams👷CheckPermissionsForRepoLegacy = new Internal\Operator\Teams\CheckPermissionsForRepoLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoLegacy;
    }

    public function teams👷AddOrUpdateRepoPermissionsLegacy(): Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsLegacy instanceof Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateRepoPermissionsLegacy = new Internal\Operator\Teams\AddOrUpdateRepoPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷AddOrUpdateRepoPermissionsLegacy;
    }

    public function teams👷RemoveRepoLegacy(): Internal\Operator\Teams\RemoveRepoLegacy
    {
        if ($this->teams👷RemoveRepoLegacy instanceof Internal\Operator\Teams\RemoveRepoLegacy === false) {
            $this->teams👷RemoveRepoLegacy = new Internal\Operator\Teams\RemoveRepoLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoLegacy;
    }

    public function teams👷ListChildLegacy(): Internal\Operator\Teams\ListChildLegacy
    {
        if ($this->teams👷ListChildLegacy instanceof Internal\Operator\Teams\ListChildLegacy === false) {
            $this->teams👷ListChildLegacy = new Internal\Operator\Teams\ListChildLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacy;
    }

    public function teams👷ListChildLegacyListing(): Internal\Operator\Teams\ListChildLegacyListing
    {
        if ($this->teams👷ListChildLegacyListing instanceof Internal\Operator\Teams\ListChildLegacyListing === false) {
            $this->teams👷ListChildLegacyListing = new Internal\Operator\Teams\ListChildLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacyListing;
    }

    public function users👷GetAuthenticated(): Internal\Operator\Users\GetAuthenticated
    {
        if ($this->users👷GetAuthenticated instanceof Internal\Operator\Users\GetAuthenticated === false) {
            $this->users👷GetAuthenticated = new Internal\Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷GetAuthenticated;
    }

    public function users👷UpdateAuthenticated(): Internal\Operator\Users\UpdateAuthenticated
    {
        if ($this->users👷UpdateAuthenticated instanceof Internal\Operator\Users\UpdateAuthenticated === false) {
            $this->users👷UpdateAuthenticated = new Internal\Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷UpdateAuthenticated;
    }

    public function users👷ListBlockedByAuthenticatedUser(): Internal\Operator\Users\ListBlockedByAuthenticatedUser
    {
        if ($this->users👷ListBlockedByAuthenticatedUser instanceof Internal\Operator\Users\ListBlockedByAuthenticatedUser === false) {
            $this->users👷ListBlockedByAuthenticatedUser = new Internal\Operator\Users\ListBlockedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());
        }

        return $this->users👷ListBlockedByAuthenticatedUser;
    }

    public function users👷ListBlockedByAuthenticatedUserListing(): Internal\Operator\Users\ListBlockedByAuthenticatedUserListing
    {
        if ($this->users👷ListBlockedByAuthenticatedUserListing instanceof Internal\Operator\Users\ListBlockedByAuthenticatedUserListing === false) {
            $this->users👷ListBlockedByAuthenticatedUserListing = new Internal\Operator\Users\ListBlockedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());
        }

        return $this->users👷ListBlockedByAuthenticatedUserListing;
    }

    public function users👷CheckBlocked(): Internal\Operator\Users\CheckBlocked
    {
        if ($this->users👷CheckBlocked instanceof Internal\Operator\Users\CheckBlocked === false) {
            $this->users👷CheckBlocked = new Internal\Operator\Users\CheckBlocked($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷CheckBlocked;
    }

    public function users👷Block(): Internal\Operator\Users\Block
    {
        if ($this->users👷Block instanceof Internal\Operator\Users\Block === false) {
            $this->users👷Block = new Internal\Operator\Users\Block($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷Block;
    }

    public function users👷Unblock(): Internal\Operator\Users\Unblock
    {
        if ($this->users👷Unblock instanceof Internal\Operator\Users\Unblock === false) {
            $this->users👷Unblock = new Internal\Operator\Users\Unblock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷Unblock;
    }

    public function codespaces👷ListForAuthenticatedUser(): Internal\Operator\Codespaces\ListForAuthenticatedUser
    {
        if ($this->codespaces👷ListForAuthenticatedUser instanceof Internal\Operator\Codespaces\ListForAuthenticatedUser === false) {
            $this->codespaces👷ListForAuthenticatedUser = new Internal\Operator\Codespaces\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->codespaces👷ListForAuthenticatedUser;
    }

    public function codespaces👷CreateForAuthenticatedUser(): Internal\Operator\Codespaces\CreateForAuthenticatedUser
    {
        if ($this->codespaces👷CreateForAuthenticatedUser instanceof Internal\Operator\Codespaces\CreateForAuthenticatedUser === false) {
            $this->codespaces👷CreateForAuthenticatedUser = new Internal\Operator\Codespaces\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->codespaces👷CreateForAuthenticatedUser;
    }

    public function codespaces👷ListSecretsForAuthenticatedUser(): Internal\Operator\Codespaces\ListSecretsForAuthenticatedUser
    {
        if ($this->codespaces👷ListSecretsForAuthenticatedUser instanceof Internal\Operator\Codespaces\ListSecretsForAuthenticatedUser === false) {
            $this->codespaces👷ListSecretsForAuthenticatedUser = new Internal\Operator\Codespaces\ListSecretsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListSecretsForAuthenticatedUser;
    }

    public function codespaces👷GetPublicKeyForAuthenticatedUser(): Internal\Operator\Codespaces\GetPublicKeyForAuthenticatedUser
    {
        if ($this->codespaces👷GetPublicKeyForAuthenticatedUser instanceof Internal\Operator\Codespaces\GetPublicKeyForAuthenticatedUser === false) {
            $this->codespaces👷GetPublicKeyForAuthenticatedUser = new Internal\Operator\Codespaces\GetPublicKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetPublicKeyForAuthenticatedUser;
    }

    public function codespaces👷GetSecretForAuthenticatedUser(): Internal\Operator\Codespaces\GetSecretForAuthenticatedUser
    {
        if ($this->codespaces👷GetSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\GetSecretForAuthenticatedUser === false) {
            $this->codespaces👷GetSecretForAuthenticatedUser = new Internal\Operator\Codespaces\GetSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetSecretForAuthenticatedUser;
    }

    public function codespaces👷CreateOrUpdateSecretForAuthenticatedUser(): Internal\Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser
    {
        if ($this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser === false) {
            $this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser = new Internal\Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser;
    }

    public function codespaces👷DeleteSecretForAuthenticatedUser(): Internal\Operator\Codespaces\DeleteSecretForAuthenticatedUser
    {
        if ($this->codespaces👷DeleteSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\DeleteSecretForAuthenticatedUser === false) {
            $this->codespaces👷DeleteSecretForAuthenticatedUser = new Internal\Operator\Codespaces\DeleteSecretForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->codespaces👷DeleteSecretForAuthenticatedUser;
    }

    public function codespaces👷ListRepositoriesForSecretForAuthenticatedUser(): Internal\Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser === false) {
            $this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser = new Internal\Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser;
    }

    public function codespaces👷SetRepositoriesForSecretForAuthenticatedUser(): Internal\Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser === false) {
            $this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser = new Internal\Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser;
    }

    public function codespaces👷AddRepositoryForSecretForAuthenticatedUser(): Internal\Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷AddRepositoryForSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser === false) {
            $this->codespaces👷AddRepositoryForSecretForAuthenticatedUser = new Internal\Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷AddRepositoryForSecretForAuthenticatedUser;
    }

    public function codespaces👷RemoveRepositoryForSecretForAuthenticatedUser(): Internal\Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser instanceof Internal\Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser === false) {
            $this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser = new Internal\Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser;
    }

    public function codespaces👷GetForAuthenticatedUser(): Internal\Operator\Codespaces\GetForAuthenticatedUser
    {
        if ($this->codespaces👷GetForAuthenticatedUser instanceof Internal\Operator\Codespaces\GetForAuthenticatedUser === false) {
            $this->codespaces👷GetForAuthenticatedUser = new Internal\Operator\Codespaces\GetForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷GetForAuthenticatedUser;
    }

    public function codespaces👷DeleteForAuthenticatedUser(): Internal\Operator\Codespaces\DeleteForAuthenticatedUser
    {
        if ($this->codespaces👷DeleteForAuthenticatedUser instanceof Internal\Operator\Codespaces\DeleteForAuthenticatedUser === false) {
            $this->codespaces👷DeleteForAuthenticatedUser = new Internal\Operator\Codespaces\DeleteForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷DeleteForAuthenticatedUser;
    }

    public function codespaces👷UpdateForAuthenticatedUser(): Internal\Operator\Codespaces\UpdateForAuthenticatedUser
    {
        if ($this->codespaces👷UpdateForAuthenticatedUser instanceof Internal\Operator\Codespaces\UpdateForAuthenticatedUser === false) {
            $this->codespaces👷UpdateForAuthenticatedUser = new Internal\Operator\Codespaces\UpdateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷UpdateForAuthenticatedUser;
    }

    public function codespaces👷ExportForAuthenticatedUser(): Internal\Operator\Codespaces\ExportForAuthenticatedUser
    {
        if ($this->codespaces👷ExportForAuthenticatedUser instanceof Internal\Operator\Codespaces\ExportForAuthenticatedUser === false) {
            $this->codespaces👷ExportForAuthenticatedUser = new Internal\Operator\Codespaces\ExportForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports());
        }

        return $this->codespaces👷ExportForAuthenticatedUser;
    }

    public function codespaces👷GetExportDetailsForAuthenticatedUser(): Internal\Operator\Codespaces\GetExportDetailsForAuthenticatedUser
    {
        if ($this->codespaces👷GetExportDetailsForAuthenticatedUser instanceof Internal\Operator\Codespaces\GetExportDetailsForAuthenticatedUser === false) {
            $this->codespaces👷GetExportDetailsForAuthenticatedUser = new Internal\Operator\Codespaces\GetExportDetailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId());
        }

        return $this->codespaces👷GetExportDetailsForAuthenticatedUser;
    }

    public function codespaces👷CodespaceMachinesForAuthenticatedUser(): Internal\Operator\Codespaces\CodespaceMachinesForAuthenticatedUser
    {
        if ($this->codespaces👷CodespaceMachinesForAuthenticatedUser instanceof Internal\Operator\Codespaces\CodespaceMachinesForAuthenticatedUser === false) {
            $this->codespaces👷CodespaceMachinesForAuthenticatedUser = new Internal\Operator\Codespaces\CodespaceMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines());
        }

        return $this->codespaces👷CodespaceMachinesForAuthenticatedUser;
    }

    public function codespaces👷PublishForAuthenticatedUser(): Internal\Operator\Codespaces\PublishForAuthenticatedUser
    {
        if ($this->codespaces👷PublishForAuthenticatedUser instanceof Internal\Operator\Codespaces\PublishForAuthenticatedUser === false) {
            $this->codespaces👷PublishForAuthenticatedUser = new Internal\Operator\Codespaces\PublishForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish());
        }

        return $this->codespaces👷PublishForAuthenticatedUser;
    }

    public function codespaces👷StartForAuthenticatedUser(): Internal\Operator\Codespaces\StartForAuthenticatedUser
    {
        if ($this->codespaces👷StartForAuthenticatedUser instanceof Internal\Operator\Codespaces\StartForAuthenticatedUser === false) {
            $this->codespaces👷StartForAuthenticatedUser = new Internal\Operator\Codespaces\StartForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start());
        }

        return $this->codespaces👷StartForAuthenticatedUser;
    }

    public function codespaces👷StopForAuthenticatedUser(): Internal\Operator\Codespaces\StopForAuthenticatedUser
    {
        if ($this->codespaces👷StopForAuthenticatedUser instanceof Internal\Operator\Codespaces\StopForAuthenticatedUser === false) {
            $this->codespaces👷StopForAuthenticatedUser = new Internal\Operator\Codespaces\StopForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->codespaces👷StopForAuthenticatedUser;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser(): Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser instanceof Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser = new Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser;
    }

    public function users👷SetPrimaryEmailVisibilityForAuthenticatedUser(): Internal\Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser
    {
        if ($this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser instanceof Internal\Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser === false) {
            $this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser = new Internal\Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility());
        }

        return $this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser;
    }

    public function users👷ListEmailsForAuthenticatedUser(): Internal\Operator\Users\ListEmailsForAuthenticatedUser
    {
        if ($this->users👷ListEmailsForAuthenticatedUser instanceof Internal\Operator\Users\ListEmailsForAuthenticatedUser === false) {
            $this->users👷ListEmailsForAuthenticatedUser = new Internal\Operator\Users\ListEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷ListEmailsForAuthenticatedUser;
    }

    public function users👷ListEmailsForAuthenticatedUserListing(): Internal\Operator\Users\ListEmailsForAuthenticatedUserListing
    {
        if ($this->users👷ListEmailsForAuthenticatedUserListing instanceof Internal\Operator\Users\ListEmailsForAuthenticatedUserListing === false) {
            $this->users👷ListEmailsForAuthenticatedUserListing = new Internal\Operator\Users\ListEmailsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷ListEmailsForAuthenticatedUserListing;
    }

    public function users👷AddEmailForAuthenticatedUser(): Internal\Operator\Users\AddEmailForAuthenticatedUser
    {
        if ($this->users👷AddEmailForAuthenticatedUser instanceof Internal\Operator\Users\AddEmailForAuthenticatedUser === false) {
            $this->users👷AddEmailForAuthenticatedUser = new Internal\Operator\Users\AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷AddEmailForAuthenticatedUser;
    }

    public function users👷DeleteEmailForAuthenticatedUser(): Internal\Operator\Users\DeleteEmailForAuthenticatedUser
    {
        if ($this->users👷DeleteEmailForAuthenticatedUser instanceof Internal\Operator\Users\DeleteEmailForAuthenticatedUser === false) {
            $this->users👷DeleteEmailForAuthenticatedUser = new Internal\Operator\Users\DeleteEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷DeleteEmailForAuthenticatedUser;
    }

    public function users👷ListFollowersForAuthenticatedUser(): Internal\Operator\Users\ListFollowersForAuthenticatedUser
    {
        if ($this->users👷ListFollowersForAuthenticatedUser instanceof Internal\Operator\Users\ListFollowersForAuthenticatedUser === false) {
            $this->users👷ListFollowersForAuthenticatedUser = new Internal\Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUser;
    }

    public function users👷ListFollowersForAuthenticatedUserListing(): Internal\Operator\Users\ListFollowersForAuthenticatedUserListing
    {
        if ($this->users👷ListFollowersForAuthenticatedUserListing instanceof Internal\Operator\Users\ListFollowersForAuthenticatedUserListing === false) {
            $this->users👷ListFollowersForAuthenticatedUserListing = new Internal\Operator\Users\ListFollowersForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUserListing;
    }

    public function users👷ListFollowedByAuthenticatedUser(): Internal\Operator\Users\ListFollowedByAuthenticatedUser
    {
        if ($this->users👷ListFollowedByAuthenticatedUser instanceof Internal\Operator\Users\ListFollowedByAuthenticatedUser === false) {
            $this->users👷ListFollowedByAuthenticatedUser = new Internal\Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUser;
    }

    public function users👷ListFollowedByAuthenticatedUserListing(): Internal\Operator\Users\ListFollowedByAuthenticatedUserListing
    {
        if ($this->users👷ListFollowedByAuthenticatedUserListing instanceof Internal\Operator\Users\ListFollowedByAuthenticatedUserListing === false) {
            $this->users👷ListFollowedByAuthenticatedUserListing = new Internal\Operator\Users\ListFollowedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUserListing;
    }

    public function users👷CheckPersonIsFollowedByAuthenticated(): Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated
    {
        if ($this->users👷CheckPersonIsFollowedByAuthenticated instanceof Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated === false) {
            $this->users👷CheckPersonIsFollowedByAuthenticated = new Internal\Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷CheckPersonIsFollowedByAuthenticated;
    }

    public function users👷Follow(): Internal\Operator\Users\Follow
    {
        if ($this->users👷Follow instanceof Internal\Operator\Users\Follow === false) {
            $this->users👷Follow = new Internal\Operator\Users\Follow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Follow;
    }

    public function users👷Unfollow(): Internal\Operator\Users\Unfollow
    {
        if ($this->users👷Unfollow instanceof Internal\Operator\Users\Unfollow === false) {
            $this->users👷Unfollow = new Internal\Operator\Users\Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Unfollow;
    }

    public function users👷ListGpgKeysForAuthenticatedUser(): Internal\Operator\Users\ListGpgKeysForAuthenticatedUser
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUser instanceof Internal\Operator\Users\ListGpgKeysForAuthenticatedUser === false) {
            $this->users👷ListGpgKeysForAuthenticatedUser = new Internal\Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUser;
    }

    public function users👷ListGpgKeysForAuthenticatedUserListing(): Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUserListing instanceof Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing === false) {
            $this->users👷ListGpgKeysForAuthenticatedUserListing = new Internal\Operator\Users\ListGpgKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUserListing;
    }

    public function users👷CreateGpgKeyForAuthenticatedUser(): Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser
    {
        if ($this->users👷CreateGpgKeyForAuthenticatedUser instanceof Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser === false) {
            $this->users👷CreateGpgKeyForAuthenticatedUser = new Internal\Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷CreateGpgKeyForAuthenticatedUser;
    }

    public function users👷GetGpgKeyForAuthenticatedUser(): Internal\Operator\Users\GetGpgKeyForAuthenticatedUser
    {
        if ($this->users👷GetGpgKeyForAuthenticatedUser instanceof Internal\Operator\Users\GetGpgKeyForAuthenticatedUser === false) {
            $this->users👷GetGpgKeyForAuthenticatedUser = new Internal\Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷GetGpgKeyForAuthenticatedUser;
    }

    public function users👷DeleteGpgKeyForAuthenticatedUser(): Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteGpgKeyForAuthenticatedUser instanceof Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser === false) {
            $this->users👷DeleteGpgKeyForAuthenticatedUser = new Internal\Operator\Users\DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷DeleteGpgKeyForAuthenticatedUser;
    }

    public function apps👷ListInstallationsForAuthenticatedUser(): Internal\Operator\Apps\ListInstallationsForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationsForAuthenticatedUser instanceof Internal\Operator\Apps\ListInstallationsForAuthenticatedUser === false) {
            $this->apps👷ListInstallationsForAuthenticatedUser = new Internal\Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());
        }

        return $this->apps👷ListInstallationsForAuthenticatedUser;
    }

    public function apps👷ListInstallationReposForAuthenticatedUser(): Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationReposForAuthenticatedUser instanceof Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser === false) {
            $this->apps👷ListInstallationReposForAuthenticatedUser = new Internal\Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());
        }

        return $this->apps👷ListInstallationReposForAuthenticatedUser;
    }

    public function apps👷AddRepoToInstallationForAuthenticatedUser(): Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser
    {
        if ($this->apps👷AddRepoToInstallationForAuthenticatedUser instanceof Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser === false) {
            $this->apps👷AddRepoToInstallationForAuthenticatedUser = new Internal\Operator\Apps\AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷AddRepoToInstallationForAuthenticatedUser;
    }

    public function apps👷RemoveRepoFromInstallationForAuthenticatedUser(): Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser
    {
        if ($this->apps👷RemoveRepoFromInstallationForAuthenticatedUser instanceof Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser === false) {
            $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser = new Internal\Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser;
    }

    public function interactions👷GetRestrictionsForAuthenticatedUser(): Internal\Operator\Interactions\GetRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷GetRestrictionsForAuthenticatedUser instanceof Internal\Operator\Interactions\GetRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷GetRestrictionsForAuthenticatedUser = new Internal\Operator\Interactions\GetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForAuthenticatedUser;
    }

    public function interactions👷SetRestrictionsForAuthenticatedUser(): Internal\Operator\Interactions\SetRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷SetRestrictionsForAuthenticatedUser instanceof Internal\Operator\Interactions\SetRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷SetRestrictionsForAuthenticatedUser = new Internal\Operator\Interactions\SetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForAuthenticatedUser;
    }

    public function interactions👷RemoveRestrictionsForAuthenticatedUser(): Internal\Operator\Interactions\RemoveRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷RemoveRestrictionsForAuthenticatedUser instanceof Internal\Operator\Interactions\RemoveRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷RemoveRestrictionsForAuthenticatedUser = new Internal\Operator\Interactions\RemoveRestrictionsForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUser(): Internal\Operator\Issues\ListForAuthenticatedUser
    {
        if ($this->issues👷ListForAuthenticatedUser instanceof Internal\Operator\Issues\ListForAuthenticatedUser === false) {
            $this->issues👷ListForAuthenticatedUser = new Internal\Operator\Issues\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUserListing(): Internal\Operator\Issues\ListForAuthenticatedUserListing
    {
        if ($this->issues👷ListForAuthenticatedUserListing instanceof Internal\Operator\Issues\ListForAuthenticatedUserListing === false) {
            $this->issues👷ListForAuthenticatedUserListing = new Internal\Operator\Issues\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUserListing;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUser(): Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUser instanceof Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUser = new Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUser;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUserListing(): Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUserListing instanceof Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUserListing = new Internal\Operator\Users\ListPublicSshKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUserListing;
    }

    public function users👷CreatePublicSshKeyForAuthenticatedUser(): Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷CreatePublicSshKeyForAuthenticatedUser instanceof Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷CreatePublicSshKeyForAuthenticatedUser = new Internal\Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷CreatePublicSshKeyForAuthenticatedUser;
    }

    public function users👷GetPublicSshKeyForAuthenticatedUser(): Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷GetPublicSshKeyForAuthenticatedUser instanceof Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser === false) {
            $this->users👷GetPublicSshKeyForAuthenticatedUser = new Internal\Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷GetPublicSshKeyForAuthenticatedUser;
    }

    public function users👷DeletePublicSshKeyForAuthenticatedUser(): Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷DeletePublicSshKeyForAuthenticatedUser instanceof Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷DeletePublicSshKeyForAuthenticatedUser = new Internal\Operator\Users\DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷DeletePublicSshKeyForAuthenticatedUser;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUser(): Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUser
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUser instanceof Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUser === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUser = new Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUser;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserListing(): Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserListing
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserListing instanceof Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserListing === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserListing = new Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserListing;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserStubbed(): Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserStubbed instanceof Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserStubbed = new Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserStubbed;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserStubbedListing(): Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing instanceof Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing = new Internal\Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing;
    }

    public function orgs👷ListMembershipsForAuthenticatedUser(): Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUser instanceof Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUser = new Internal\Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUser;
    }

    public function orgs👷ListMembershipsForAuthenticatedUserListing(): Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUserListing instanceof Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUserListing = new Internal\Operator\Orgs\ListMembershipsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUserListing;
    }

    public function orgs👷GetMembershipForAuthenticatedUser(): Internal\Operator\Orgs\GetMembershipForAuthenticatedUser
    {
        if ($this->orgs👷GetMembershipForAuthenticatedUser instanceof Internal\Operator\Orgs\GetMembershipForAuthenticatedUser === false) {
            $this->orgs👷GetMembershipForAuthenticatedUser = new Internal\Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷GetMembershipForAuthenticatedUser;
    }

    public function orgs👷UpdateMembershipForAuthenticatedUser(): Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser
    {
        if ($this->orgs👷UpdateMembershipForAuthenticatedUser instanceof Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser === false) {
            $this->orgs👷UpdateMembershipForAuthenticatedUser = new Internal\Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷UpdateMembershipForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUser(): Internal\Operator\Migrations\ListForAuthenticatedUser
    {
        if ($this->migrations👷ListForAuthenticatedUser instanceof Internal\Operator\Migrations\ListForAuthenticatedUser === false) {
            $this->migrations👷ListForAuthenticatedUser = new Internal\Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUserListing(): Internal\Operator\Migrations\ListForAuthenticatedUserListing
    {
        if ($this->migrations👷ListForAuthenticatedUserListing instanceof Internal\Operator\Migrations\ListForAuthenticatedUserListing === false) {
            $this->migrations👷ListForAuthenticatedUserListing = new Internal\Operator\Migrations\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUserListing;
    }

    public function migrations👷StartForAuthenticatedUser(): Internal\Operator\Migrations\StartForAuthenticatedUser
    {
        if ($this->migrations👷StartForAuthenticatedUser instanceof Internal\Operator\Migrations\StartForAuthenticatedUser === false) {
            $this->migrations👷StartForAuthenticatedUser = new Internal\Operator\Migrations\StartForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷StartForAuthenticatedUser;
    }

    public function migrations👷GetStatusForAuthenticatedUser(): Internal\Operator\Migrations\GetStatusForAuthenticatedUser
    {
        if ($this->migrations👷GetStatusForAuthenticatedUser instanceof Internal\Operator\Migrations\GetStatusForAuthenticatedUser === false) {
            $this->migrations👷GetStatusForAuthenticatedUser = new Internal\Operator\Migrations\GetStatusForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForAuthenticatedUser;
    }

    public function migrations👷GetArchiveForAuthenticatedUser(): Internal\Operator\Migrations\GetArchiveForAuthenticatedUser
    {
        if ($this->migrations👷GetArchiveForAuthenticatedUser instanceof Internal\Operator\Migrations\GetArchiveForAuthenticatedUser === false) {
            $this->migrations👷GetArchiveForAuthenticatedUser = new Internal\Operator\Migrations\GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷GetArchiveForAuthenticatedUser;
    }

    public function migrations👷DeleteArchiveForAuthenticatedUser(): Internal\Operator\Migrations\DeleteArchiveForAuthenticatedUser
    {
        if ($this->migrations👷DeleteArchiveForAuthenticatedUser instanceof Internal\Operator\Migrations\DeleteArchiveForAuthenticatedUser === false) {
            $this->migrations👷DeleteArchiveForAuthenticatedUser = new Internal\Operator\Migrations\DeleteArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForAuthenticatedUser;
    }

    public function migrations👷UnlockRepoForAuthenticatedUser(): Internal\Operator\Migrations\UnlockRepoForAuthenticatedUser
    {
        if ($this->migrations👷UnlockRepoForAuthenticatedUser instanceof Internal\Operator\Migrations\UnlockRepoForAuthenticatedUser === false) {
            $this->migrations👷UnlockRepoForAuthenticatedUser = new Internal\Operator\Migrations\UnlockRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUser(): Internal\Operator\Migrations\ListReposForAuthenticatedUser
    {
        if ($this->migrations👷ListReposForAuthenticatedUser instanceof Internal\Operator\Migrations\ListReposForAuthenticatedUser === false) {
            $this->migrations👷ListReposForAuthenticatedUser = new Internal\Operator\Migrations\ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUserListing(): Internal\Operator\Migrations\ListReposForAuthenticatedUserListing
    {
        if ($this->migrations👷ListReposForAuthenticatedUserListing instanceof Internal\Operator\Migrations\ListReposForAuthenticatedUserListing === false) {
            $this->migrations👷ListReposForAuthenticatedUserListing = new Internal\Operator\Migrations\ListReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUserListing;
    }

    public function orgs👷ListForAuthenticatedUser(): Internal\Operator\Orgs\ListForAuthenticatedUser
    {
        if ($this->orgs👷ListForAuthenticatedUser instanceof Internal\Operator\Orgs\ListForAuthenticatedUser === false) {
            $this->orgs👷ListForAuthenticatedUser = new Internal\Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUser;
    }

    public function orgs👷ListForAuthenticatedUserListing(): Internal\Operator\Orgs\ListForAuthenticatedUserListing
    {
        if ($this->orgs👷ListForAuthenticatedUserListing instanceof Internal\Operator\Orgs\ListForAuthenticatedUserListing === false) {
            $this->orgs👷ListForAuthenticatedUserListing = new Internal\Operator\Orgs\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUserListing;
    }

    public function packages👷ListPackagesForAuthenticatedUser(): Internal\Operator\Packages\ListPackagesForAuthenticatedUser
    {
        if ($this->packages👷ListPackagesForAuthenticatedUser instanceof Internal\Operator\Packages\ListPackagesForAuthenticatedUser === false) {
            $this->packages👷ListPackagesForAuthenticatedUser = new Internal\Operator\Packages\ListPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages());
        }

        return $this->packages👷ListPackagesForAuthenticatedUser;
    }

    public function packages👷ListPackagesForAuthenticatedUserListing(): Internal\Operator\Packages\ListPackagesForAuthenticatedUserListing
    {
        if ($this->packages👷ListPackagesForAuthenticatedUserListing instanceof Internal\Operator\Packages\ListPackagesForAuthenticatedUserListing === false) {
            $this->packages👷ListPackagesForAuthenticatedUserListing = new Internal\Operator\Packages\ListPackagesForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages());
        }

        return $this->packages👷ListPackagesForAuthenticatedUserListing;
    }

    public function packages👷GetPackageForAuthenticatedUser(): Internal\Operator\Packages\GetPackageForAuthenticatedUser
    {
        if ($this->packages👷GetPackageForAuthenticatedUser instanceof Internal\Operator\Packages\GetPackageForAuthenticatedUser === false) {
            $this->packages👷GetPackageForAuthenticatedUser = new Internal\Operator\Packages\GetPackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForAuthenticatedUser;
    }

    public function packages👷DeletePackageForAuthenticatedUser(): Internal\Operator\Packages\DeletePackageForAuthenticatedUser
    {
        if ($this->packages👷DeletePackageForAuthenticatedUser instanceof Internal\Operator\Packages\DeletePackageForAuthenticatedUser === false) {
            $this->packages👷DeletePackageForAuthenticatedUser = new Internal\Operator\Packages\DeletePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForAuthenticatedUser;
    }

    public function packages👷RestorePackageForAuthenticatedUser(): Internal\Operator\Packages\RestorePackageForAuthenticatedUser
    {
        if ($this->packages👷RestorePackageForAuthenticatedUser instanceof Internal\Operator\Packages\RestorePackageForAuthenticatedUser === false) {
            $this->packages👷RestorePackageForAuthenticatedUser = new Internal\Operator\Packages\RestorePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForAuthenticatedUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser(): Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser instanceof Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser = new Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing(): Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing instanceof Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing = new Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing;
    }

    public function packages👷GetPackageVersionForAuthenticatedUser(): Internal\Operator\Packages\GetPackageVersionForAuthenticatedUser
    {
        if ($this->packages👷GetPackageVersionForAuthenticatedUser instanceof Internal\Operator\Packages\GetPackageVersionForAuthenticatedUser === false) {
            $this->packages👷GetPackageVersionForAuthenticatedUser = new Internal\Operator\Packages\GetPackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForAuthenticatedUser;
    }

    public function packages👷DeletePackageVersionForAuthenticatedUser(): Internal\Operator\Packages\DeletePackageVersionForAuthenticatedUser
    {
        if ($this->packages👷DeletePackageVersionForAuthenticatedUser instanceof Internal\Operator\Packages\DeletePackageVersionForAuthenticatedUser === false) {
            $this->packages👷DeletePackageVersionForAuthenticatedUser = new Internal\Operator\Packages\DeletePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForAuthenticatedUser;
    }

    public function packages👷RestorePackageVersionForAuthenticatedUser(): Internal\Operator\Packages\RestorePackageVersionForAuthenticatedUser
    {
        if ($this->packages👷RestorePackageVersionForAuthenticatedUser instanceof Internal\Operator\Packages\RestorePackageVersionForAuthenticatedUser === false) {
            $this->packages👷RestorePackageVersionForAuthenticatedUser = new Internal\Operator\Packages\RestorePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForAuthenticatedUser;
    }

    public function projects👷CreateForAuthenticatedUser(): Internal\Operator\Projects\CreateForAuthenticatedUser
    {
        if ($this->projects👷CreateForAuthenticatedUser instanceof Internal\Operator\Projects\CreateForAuthenticatedUser === false) {
            $this->projects👷CreateForAuthenticatedUser = new Internal\Operator\Projects\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Projects());
        }

        return $this->projects👷CreateForAuthenticatedUser;
    }

    public function users👷ListPublicEmailsForAuthenticatedUser(): Internal\Operator\Users\ListPublicEmailsForAuthenticatedUser
    {
        if ($this->users👷ListPublicEmailsForAuthenticatedUser instanceof Internal\Operator\Users\ListPublicEmailsForAuthenticatedUser === false) {
            $this->users👷ListPublicEmailsForAuthenticatedUser = new Internal\Operator\Users\ListPublicEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());
        }

        return $this->users👷ListPublicEmailsForAuthenticatedUser;
    }

    public function users👷ListPublicEmailsForAuthenticatedUserListing(): Internal\Operator\Users\ListPublicEmailsForAuthenticatedUserListing
    {
        if ($this->users👷ListPublicEmailsForAuthenticatedUserListing instanceof Internal\Operator\Users\ListPublicEmailsForAuthenticatedUserListing === false) {
            $this->users👷ListPublicEmailsForAuthenticatedUserListing = new Internal\Operator\Users\ListPublicEmailsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());
        }

        return $this->users👷ListPublicEmailsForAuthenticatedUserListing;
    }

    public function repos👷ListForAuthenticatedUser(): Internal\Operator\Repos\ListForAuthenticatedUser
    {
        if ($this->repos👷ListForAuthenticatedUser instanceof Internal\Operator\Repos\ListForAuthenticatedUser === false) {
            $this->repos👷ListForAuthenticatedUser = new Internal\Operator\Repos\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUser;
    }

    public function repos👷ListForAuthenticatedUserListing(): Internal\Operator\Repos\ListForAuthenticatedUserListing
    {
        if ($this->repos👷ListForAuthenticatedUserListing instanceof Internal\Operator\Repos\ListForAuthenticatedUserListing === false) {
            $this->repos👷ListForAuthenticatedUserListing = new Internal\Operator\Repos\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUserListing;
    }

    public function repos👷CreateForAuthenticatedUser(): Internal\Operator\Repos\CreateForAuthenticatedUser
    {
        if ($this->repos👷CreateForAuthenticatedUser instanceof Internal\Operator\Repos\CreateForAuthenticatedUser === false) {
            $this->repos👷CreateForAuthenticatedUser = new Internal\Operator\Repos\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷CreateForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUser(): Internal\Operator\Repos\ListInvitationsForAuthenticatedUser
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUser instanceof Internal\Operator\Repos\ListInvitationsForAuthenticatedUser === false) {
            $this->repos👷ListInvitationsForAuthenticatedUser = new Internal\Operator\Repos\ListInvitationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUserListing(): Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUserListing instanceof Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing === false) {
            $this->repos👷ListInvitationsForAuthenticatedUserListing = new Internal\Operator\Repos\ListInvitationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUserListing;
    }

    public function repos👷DeclineInvitationForAuthenticatedUser(): Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser
    {
        if ($this->repos👷DeclineInvitationForAuthenticatedUser instanceof Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser === false) {
            $this->repos👷DeclineInvitationForAuthenticatedUser = new Internal\Operator\Repos\DeclineInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷DeclineInvitationForAuthenticatedUser;
    }

    public function repos👷AcceptInvitationForAuthenticatedUser(): Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser
    {
        if ($this->repos👷AcceptInvitationForAuthenticatedUser instanceof Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser === false) {
            $this->repos👷AcceptInvitationForAuthenticatedUser = new Internal\Operator\Repos\AcceptInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷AcceptInvitationForAuthenticatedUser;
    }

    public function users👷ListSocialAccountsForAuthenticatedUser(): Internal\Operator\Users\ListSocialAccountsForAuthenticatedUser
    {
        if ($this->users👷ListSocialAccountsForAuthenticatedUser instanceof Internal\Operator\Users\ListSocialAccountsForAuthenticatedUser === false) {
            $this->users👷ListSocialAccountsForAuthenticatedUser = new Internal\Operator\Users\ListSocialAccountsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForAuthenticatedUser;
    }

    public function users👷ListSocialAccountsForAuthenticatedUserListing(): Internal\Operator\Users\ListSocialAccountsForAuthenticatedUserListing
    {
        if ($this->users👷ListSocialAccountsForAuthenticatedUserListing instanceof Internal\Operator\Users\ListSocialAccountsForAuthenticatedUserListing === false) {
            $this->users👷ListSocialAccountsForAuthenticatedUserListing = new Internal\Operator\Users\ListSocialAccountsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForAuthenticatedUserListing;
    }

    public function users👷AddSocialAccountForAuthenticatedUser(): Internal\Operator\Users\AddSocialAccountForAuthenticatedUser
    {
        if ($this->users👷AddSocialAccountForAuthenticatedUser instanceof Internal\Operator\Users\AddSocialAccountForAuthenticatedUser === false) {
            $this->users👷AddSocialAccountForAuthenticatedUser = new Internal\Operator\Users\AddSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷AddSocialAccountForAuthenticatedUser;
    }

    public function users👷DeleteSocialAccountForAuthenticatedUser(): Internal\Operator\Users\DeleteSocialAccountForAuthenticatedUser
    {
        if ($this->users👷DeleteSocialAccountForAuthenticatedUser instanceof Internal\Operator\Users\DeleteSocialAccountForAuthenticatedUser === false) {
            $this->users👷DeleteSocialAccountForAuthenticatedUser = new Internal\Operator\Users\DeleteSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷DeleteSocialAccountForAuthenticatedUser;
    }

    public function users👷ListSshSigningKeysForAuthenticatedUser(): Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUser
    {
        if ($this->users👷ListSshSigningKeysForAuthenticatedUser instanceof Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUser === false) {
            $this->users👷ListSshSigningKeysForAuthenticatedUser = new Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForAuthenticatedUser;
    }

    public function users👷ListSshSigningKeysForAuthenticatedUserListing(): Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListSshSigningKeysForAuthenticatedUserListing instanceof Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUserListing === false) {
            $this->users👷ListSshSigningKeysForAuthenticatedUserListing = new Internal\Operator\Users\ListSshSigningKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForAuthenticatedUserListing;
    }

    public function users👷CreateSshSigningKeyForAuthenticatedUser(): Internal\Operator\Users\CreateSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷CreateSshSigningKeyForAuthenticatedUser instanceof Internal\Operator\Users\CreateSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷CreateSshSigningKeyForAuthenticatedUser = new Internal\Operator\Users\CreateSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷CreateSshSigningKeyForAuthenticatedUser;
    }

    public function users👷GetSshSigningKeyForAuthenticatedUser(): Internal\Operator\Users\GetSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷GetSshSigningKeyForAuthenticatedUser instanceof Internal\Operator\Users\GetSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷GetSshSigningKeyForAuthenticatedUser = new Internal\Operator\Users\GetSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->users👷GetSshSigningKeyForAuthenticatedUser;
    }

    public function users👷DeleteSshSigningKeyForAuthenticatedUser(): Internal\Operator\Users\DeleteSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteSshSigningKeyForAuthenticatedUser instanceof Internal\Operator\Users\DeleteSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷DeleteSshSigningKeyForAuthenticatedUser = new Internal\Operator\Users\DeleteSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->users👷DeleteSshSigningKeyForAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUser(): Internal\Operator\Activity\ListReposStarredByAuthenticatedUser
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUser instanceof Internal\Operator\Activity\ListReposStarredByAuthenticatedUser === false) {
            $this->activity👷ListReposStarredByAuthenticatedUser = new Internal\Operator\Activity\ListReposStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUserListing(): Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUserListing instanceof Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing === false) {
            $this->activity👷ListReposStarredByAuthenticatedUserListing = new Internal\Operator\Activity\ListReposStarredByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUserListing;
    }

    public function activity👷CheckRepoIsStarredByAuthenticatedUser(): Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser
    {
        if ($this->activity👷CheckRepoIsStarredByAuthenticatedUser instanceof Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser === false) {
            $this->activity👷CheckRepoIsStarredByAuthenticatedUser = new Internal\Operator\Activity\CheckRepoIsStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷CheckRepoIsStarredByAuthenticatedUser;
    }

    public function activity👷StarRepoForAuthenticatedUser(): Internal\Operator\Activity\StarRepoForAuthenticatedUser
    {
        if ($this->activity👷StarRepoForAuthenticatedUser instanceof Internal\Operator\Activity\StarRepoForAuthenticatedUser === false) {
            $this->activity👷StarRepoForAuthenticatedUser = new Internal\Operator\Activity\StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷StarRepoForAuthenticatedUser;
    }

    public function activity👷UnstarRepoForAuthenticatedUser(): Internal\Operator\Activity\UnstarRepoForAuthenticatedUser
    {
        if ($this->activity👷UnstarRepoForAuthenticatedUser instanceof Internal\Operator\Activity\UnstarRepoForAuthenticatedUser === false) {
            $this->activity👷UnstarRepoForAuthenticatedUser = new Internal\Operator\Activity\UnstarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷UnstarRepoForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUser(): Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUser instanceof Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUser = new Internal\Operator\Activity\ListWatchedReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUserListing(): Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUserListing = new Internal\Operator\Activity\ListWatchedReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUserListing;
    }

    public function teams👷ListForAuthenticatedUser(): Internal\Operator\Teams\ListForAuthenticatedUser
    {
        if ($this->teams👷ListForAuthenticatedUser instanceof Internal\Operator\Teams\ListForAuthenticatedUser === false) {
            $this->teams👷ListForAuthenticatedUser = new Internal\Operator\Teams\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUser;
    }

    public function teams👷ListForAuthenticatedUserListing(): Internal\Operator\Teams\ListForAuthenticatedUserListing
    {
        if ($this->teams👷ListForAuthenticatedUserListing instanceof Internal\Operator\Teams\ListForAuthenticatedUserListing === false) {
            $this->teams👷ListForAuthenticatedUserListing = new Internal\Operator\Teams\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUserListing;
    }

    public function users👷List_(): Internal\Operator\Users\List_
    {
        if ($this->users👷List_ instanceof Internal\Operator\Users\List_ === false) {
            $this->users👷List_ = new Internal\Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());
        }

        return $this->users👷List_;
    }

    public function users👷GetByUsername(): Internal\Operator\Users\GetByUsername
    {
        if ($this->users👷GetByUsername instanceof Internal\Operator\Users\GetByUsername === false) {
            $this->users👷GetByUsername = new Internal\Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());
        }

        return $this->users👷GetByUsername;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForUser(): Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForUser
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForUser instanceof Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForUser === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForUser = new Internal\Operator\Packages\ListDockerMigrationConflictingPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForUser;
    }

    public function activity👷ListEventsForAuthenticatedUser(): Internal\Operator\Activity\ListEventsForAuthenticatedUser
    {
        if ($this->activity👷ListEventsForAuthenticatedUser instanceof Internal\Operator\Activity\ListEventsForAuthenticatedUser === false) {
            $this->activity👷ListEventsForAuthenticatedUser = new Internal\Operator\Activity\ListEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUser;
    }

    public function activity👷ListEventsForAuthenticatedUserListing(): Internal\Operator\Activity\ListEventsForAuthenticatedUserListing
    {
        if ($this->activity👷ListEventsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListEventsForAuthenticatedUserListing === false) {
            $this->activity👷ListEventsForAuthenticatedUserListing = new Internal\Operator\Activity\ListEventsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUserListing;
    }

    public function activity👷ListOrgEventsForAuthenticatedUser(): Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUser instanceof Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUser = new Internal\Operator\Activity\ListOrgEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUser;
    }

    public function activity👷ListOrgEventsForAuthenticatedUserListing(): Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUserListing instanceof Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUserListing = new Internal\Operator\Activity\ListOrgEventsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUserListing;
    }

    public function activity👷ListPublicEventsForUser(): Internal\Operator\Activity\ListPublicEventsForUser
    {
        if ($this->activity👷ListPublicEventsForUser instanceof Internal\Operator\Activity\ListPublicEventsForUser === false) {
            $this->activity👷ListPublicEventsForUser = new Internal\Operator\Activity\ListPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_());
        }

        return $this->activity👷ListPublicEventsForUser;
    }

    public function activity👷ListPublicEventsForUserListing(): Internal\Operator\Activity\ListPublicEventsForUserListing
    {
        if ($this->activity👷ListPublicEventsForUserListing instanceof Internal\Operator\Activity\ListPublicEventsForUserListing === false) {
            $this->activity👷ListPublicEventsForUserListing = new Internal\Operator\Activity\ListPublicEventsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_());
        }

        return $this->activity👷ListPublicEventsForUserListing;
    }

    public function users👷ListFollowersForUser(): Internal\Operator\Users\ListFollowersForUser
    {
        if ($this->users👷ListFollowersForUser instanceof Internal\Operator\Users\ListFollowersForUser === false) {
            $this->users👷ListFollowersForUser = new Internal\Operator\Users\ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUser;
    }

    public function users👷ListFollowersForUserListing(): Internal\Operator\Users\ListFollowersForUserListing
    {
        if ($this->users👷ListFollowersForUserListing instanceof Internal\Operator\Users\ListFollowersForUserListing === false) {
            $this->users👷ListFollowersForUserListing = new Internal\Operator\Users\ListFollowersForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUserListing;
    }

    public function users👷ListFollowingForUser(): Internal\Operator\Users\ListFollowingForUser
    {
        if ($this->users👷ListFollowingForUser instanceof Internal\Operator\Users\ListFollowingForUser === false) {
            $this->users👷ListFollowingForUser = new Internal\Operator\Users\ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUser;
    }

    public function users👷ListFollowingForUserListing(): Internal\Operator\Users\ListFollowingForUserListing
    {
        if ($this->users👷ListFollowingForUserListing instanceof Internal\Operator\Users\ListFollowingForUserListing === false) {
            $this->users👷ListFollowingForUserListing = new Internal\Operator\Users\ListFollowingForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUserListing;
    }

    public function users👷CheckFollowingForUser(): Internal\Operator\Users\CheckFollowingForUser
    {
        if ($this->users👷CheckFollowingForUser instanceof Internal\Operator\Users\CheckFollowingForUser === false) {
            $this->users👷CheckFollowingForUser = new Internal\Operator\Users\CheckFollowingForUser($this->browser, $this->authentication);
        }

        return $this->users👷CheckFollowingForUser;
    }

    public function gists👷ListForUser(): Internal\Operator\Gists\ListForUser
    {
        if ($this->gists👷ListForUser instanceof Internal\Operator\Gists\ListForUser === false) {
            $this->gists👷ListForUser = new Internal\Operator\Gists\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUser;
    }

    public function gists👷ListForUserListing(): Internal\Operator\Gists\ListForUserListing
    {
        if ($this->gists👷ListForUserListing instanceof Internal\Operator\Gists\ListForUserListing === false) {
            $this->gists👷ListForUserListing = new Internal\Operator\Gists\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUserListing;
    }

    public function users👷ListGpgKeysForUser(): Internal\Operator\Users\ListGpgKeysForUser
    {
        if ($this->users👷ListGpgKeysForUser instanceof Internal\Operator\Users\ListGpgKeysForUser === false) {
            $this->users👷ListGpgKeysForUser = new Internal\Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUser;
    }

    public function users👷ListGpgKeysForUserListing(): Internal\Operator\Users\ListGpgKeysForUserListing
    {
        if ($this->users👷ListGpgKeysForUserListing instanceof Internal\Operator\Users\ListGpgKeysForUserListing === false) {
            $this->users👷ListGpgKeysForUserListing = new Internal\Operator\Users\ListGpgKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUserListing;
    }

    public function users👷GetContextForUser(): Internal\Operator\Users\GetContextForUser
    {
        if ($this->users👷GetContextForUser instanceof Internal\Operator\Users\GetContextForUser === false) {
            $this->users👷GetContextForUser = new Internal\Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());
        }

        return $this->users👷GetContextForUser;
    }

    public function apps👷GetUserInstallation(): Internal\Operator\Apps\GetUserInstallation
    {
        if ($this->apps👷GetUserInstallation instanceof Internal\Operator\Apps\GetUserInstallation === false) {
            $this->apps👷GetUserInstallation = new Internal\Operator\Apps\GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());
        }

        return $this->apps👷GetUserInstallation;
    }

    public function users👷ListPublicKeysForUser(): Internal\Operator\Users\ListPublicKeysForUser
    {
        if ($this->users👷ListPublicKeysForUser instanceof Internal\Operator\Users\ListPublicKeysForUser === false) {
            $this->users👷ListPublicKeysForUser = new Internal\Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUser;
    }

    public function users👷ListPublicKeysForUserListing(): Internal\Operator\Users\ListPublicKeysForUserListing
    {
        if ($this->users👷ListPublicKeysForUserListing instanceof Internal\Operator\Users\ListPublicKeysForUserListing === false) {
            $this->users👷ListPublicKeysForUserListing = new Internal\Operator\Users\ListPublicKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUserListing;
    }

    public function orgs👷ListForUser(): Internal\Operator\Orgs\ListForUser
    {
        if ($this->orgs👷ListForUser instanceof Internal\Operator\Orgs\ListForUser === false) {
            $this->orgs👷ListForUser = new Internal\Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUser;
    }

    public function orgs👷ListForUserListing(): Internal\Operator\Orgs\ListForUserListing
    {
        if ($this->orgs👷ListForUserListing instanceof Internal\Operator\Orgs\ListForUserListing === false) {
            $this->orgs👷ListForUserListing = new Internal\Operator\Orgs\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUserListing;
    }

    public function packages👷ListPackagesForUser(): Internal\Operator\Packages\ListPackagesForUser
    {
        if ($this->packages👷ListPackagesForUser instanceof Internal\Operator\Packages\ListPackagesForUser === false) {
            $this->packages👷ListPackagesForUser = new Internal\Operator\Packages\ListPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages());
        }

        return $this->packages👷ListPackagesForUser;
    }

    public function packages👷ListPackagesForUserListing(): Internal\Operator\Packages\ListPackagesForUserListing
    {
        if ($this->packages👷ListPackagesForUserListing instanceof Internal\Operator\Packages\ListPackagesForUserListing === false) {
            $this->packages👷ListPackagesForUserListing = new Internal\Operator\Packages\ListPackagesForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages());
        }

        return $this->packages👷ListPackagesForUserListing;
    }

    public function packages👷GetPackageForUser(): Internal\Operator\Packages\GetPackageForUser
    {
        if ($this->packages👷GetPackageForUser instanceof Internal\Operator\Packages\GetPackageForUser === false) {
            $this->packages👷GetPackageForUser = new Internal\Operator\Packages\GetPackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForUser;
    }

    public function packages👷DeletePackageForUser(): Internal\Operator\Packages\DeletePackageForUser
    {
        if ($this->packages👷DeletePackageForUser instanceof Internal\Operator\Packages\DeletePackageForUser === false) {
            $this->packages👷DeletePackageForUser = new Internal\Operator\Packages\DeletePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForUser;
    }

    public function packages👷RestorePackageForUser(): Internal\Operator\Packages\RestorePackageForUser
    {
        if ($this->packages👷RestorePackageForUser instanceof Internal\Operator\Packages\RestorePackageForUser === false) {
            $this->packages👷RestorePackageForUser = new Internal\Operator\Packages\RestorePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByUser(): Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByUser instanceof Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByUser = new Internal\Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByUser;
    }

    public function packages👷GetPackageVersionForUser(): Internal\Operator\Packages\GetPackageVersionForUser
    {
        if ($this->packages👷GetPackageVersionForUser instanceof Internal\Operator\Packages\GetPackageVersionForUser === false) {
            $this->packages👷GetPackageVersionForUser = new Internal\Operator\Packages\GetPackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForUser;
    }

    public function packages👷DeletePackageVersionForUser(): Internal\Operator\Packages\DeletePackageVersionForUser
    {
        if ($this->packages👷DeletePackageVersionForUser instanceof Internal\Operator\Packages\DeletePackageVersionForUser === false) {
            $this->packages👷DeletePackageVersionForUser = new Internal\Operator\Packages\DeletePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForUser;
    }

    public function packages👷RestorePackageVersionForUser(): Internal\Operator\Packages\RestorePackageVersionForUser
    {
        if ($this->packages👷RestorePackageVersionForUser instanceof Internal\Operator\Packages\RestorePackageVersionForUser === false) {
            $this->packages👷RestorePackageVersionForUser = new Internal\Operator\Packages\RestorePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForUser;
    }

    public function projects👷ListForUser(): Internal\Operator\Projects\ListForUser
    {
        if ($this->projects👷ListForUser instanceof Internal\Operator\Projects\ListForUser === false) {
            $this->projects👷ListForUser = new Internal\Operator\Projects\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUser;
    }

    public function projects👷ListForUserListing(): Internal\Operator\Projects\ListForUserListing
    {
        if ($this->projects👷ListForUserListing instanceof Internal\Operator\Projects\ListForUserListing === false) {
            $this->projects👷ListForUserListing = new Internal\Operator\Projects\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUserListing;
    }

    public function activity👷ListReceivedEventsForUser(): Internal\Operator\Activity\ListReceivedEventsForUser
    {
        if ($this->activity👷ListReceivedEventsForUser instanceof Internal\Operator\Activity\ListReceivedEventsForUser === false) {
            $this->activity👷ListReceivedEventsForUser = new Internal\Operator\Activity\ListReceivedEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents());
        }

        return $this->activity👷ListReceivedEventsForUser;
    }

    public function activity👷ListReceivedEventsForUserListing(): Internal\Operator\Activity\ListReceivedEventsForUserListing
    {
        if ($this->activity👷ListReceivedEventsForUserListing instanceof Internal\Operator\Activity\ListReceivedEventsForUserListing === false) {
            $this->activity👷ListReceivedEventsForUserListing = new Internal\Operator\Activity\ListReceivedEventsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents());
        }

        return $this->activity👷ListReceivedEventsForUserListing;
    }

    public function activity👷ListReceivedPublicEventsForUser(): Internal\Operator\Activity\ListReceivedPublicEventsForUser
    {
        if ($this->activity👷ListReceivedPublicEventsForUser instanceof Internal\Operator\Activity\ListReceivedPublicEventsForUser === false) {
            $this->activity👷ListReceivedPublicEventsForUser = new Internal\Operator\Activity\ListReceivedPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_());
        }

        return $this->activity👷ListReceivedPublicEventsForUser;
    }

    public function activity👷ListReceivedPublicEventsForUserListing(): Internal\Operator\Activity\ListReceivedPublicEventsForUserListing
    {
        if ($this->activity👷ListReceivedPublicEventsForUserListing instanceof Internal\Operator\Activity\ListReceivedPublicEventsForUserListing === false) {
            $this->activity👷ListReceivedPublicEventsForUserListing = new Internal\Operator\Activity\ListReceivedPublicEventsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_());
        }

        return $this->activity👷ListReceivedPublicEventsForUserListing;
    }

    public function repos👷ListForUser(): Internal\Operator\Repos\ListForUser
    {
        if ($this->repos👷ListForUser instanceof Internal\Operator\Repos\ListForUser === false) {
            $this->repos👷ListForUser = new Internal\Operator\Repos\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUser;
    }

    public function repos👷ListForUserListing(): Internal\Operator\Repos\ListForUserListing
    {
        if ($this->repos👷ListForUserListing instanceof Internal\Operator\Repos\ListForUserListing === false) {
            $this->repos👷ListForUserListing = new Internal\Operator\Repos\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUserListing;
    }

    public function billing👷GetGithubActionsBillingUser(): Internal\Operator\Billing\GetGithubActionsBillingUser
    {
        if ($this->billing👷GetGithubActionsBillingUser instanceof Internal\Operator\Billing\GetGithubActionsBillingUser === false) {
            $this->billing👷GetGithubActionsBillingUser = new Internal\Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());
        }

        return $this->billing👷GetGithubActionsBillingUser;
    }

    public function billing👷GetGithubPackagesBillingUser(): Internal\Operator\Billing\GetGithubPackagesBillingUser
    {
        if ($this->billing👷GetGithubPackagesBillingUser instanceof Internal\Operator\Billing\GetGithubPackagesBillingUser === false) {
            $this->billing👷GetGithubPackagesBillingUser = new Internal\Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());
        }

        return $this->billing👷GetGithubPackagesBillingUser;
    }

    public function billing👷GetSharedStorageBillingUser(): Internal\Operator\Billing\GetSharedStorageBillingUser
    {
        if ($this->billing👷GetSharedStorageBillingUser instanceof Internal\Operator\Billing\GetSharedStorageBillingUser === false) {
            $this->billing👷GetSharedStorageBillingUser = new Internal\Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->billing👷GetSharedStorageBillingUser;
    }

    public function users👷ListSocialAccountsForUser(): Internal\Operator\Users\ListSocialAccountsForUser
    {
        if ($this->users👷ListSocialAccountsForUser instanceof Internal\Operator\Users\ListSocialAccountsForUser === false) {
            $this->users👷ListSocialAccountsForUser = new Internal\Operator\Users\ListSocialAccountsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForUser;
    }

    public function users👷ListSocialAccountsForUserListing(): Internal\Operator\Users\ListSocialAccountsForUserListing
    {
        if ($this->users👷ListSocialAccountsForUserListing instanceof Internal\Operator\Users\ListSocialAccountsForUserListing === false) {
            $this->users👷ListSocialAccountsForUserListing = new Internal\Operator\Users\ListSocialAccountsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForUserListing;
    }

    public function users👷ListSshSigningKeysForUser(): Internal\Operator\Users\ListSshSigningKeysForUser
    {
        if ($this->users👷ListSshSigningKeysForUser instanceof Internal\Operator\Users\ListSshSigningKeysForUser === false) {
            $this->users👷ListSshSigningKeysForUser = new Internal\Operator\Users\ListSshSigningKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForUser;
    }

    public function users👷ListSshSigningKeysForUserListing(): Internal\Operator\Users\ListSshSigningKeysForUserListing
    {
        if ($this->users👷ListSshSigningKeysForUserListing instanceof Internal\Operator\Users\ListSshSigningKeysForUserListing === false) {
            $this->users👷ListSshSigningKeysForUserListing = new Internal\Operator\Users\ListSshSigningKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForUserListing;
    }

    public function activity👷ListReposStarredByUser(): Internal\Operator\Activity\ListReposStarredByUser
    {
        if ($this->activity👷ListReposStarredByUser instanceof Internal\Operator\Activity\ListReposStarredByUser === false) {
            $this->activity👷ListReposStarredByUser = new Internal\Operator\Activity\ListReposStarredByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Starred());
        }

        return $this->activity👷ListReposStarredByUser;
    }

    public function activity👷ListReposWatchedByUser(): Internal\Operator\Activity\ListReposWatchedByUser
    {
        if ($this->activity👷ListReposWatchedByUser instanceof Internal\Operator\Activity\ListReposWatchedByUser === false) {
            $this->activity👷ListReposWatchedByUser = new Internal\Operator\Activity\ListReposWatchedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUser;
    }

    public function activity👷ListReposWatchedByUserListing(): Internal\Operator\Activity\ListReposWatchedByUserListing
    {
        if ($this->activity👷ListReposWatchedByUserListing instanceof Internal\Operator\Activity\ListReposWatchedByUserListing === false) {
            $this->activity👷ListReposWatchedByUserListing = new Internal\Operator\Activity\ListReposWatchedByUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUserListing;
    }

    public function meta👷GetAllVersions(): Internal\Operator\Meta\GetAllVersions
    {
        if ($this->meta👷GetAllVersions instanceof Internal\Operator\Meta\GetAllVersions === false) {
            $this->meta👷GetAllVersions = new Internal\Operator\Meta\GetAllVersions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Versions());
        }

        return $this->meta👷GetAllVersions;
    }

    public function meta👷GetZen(): Internal\Operator\Meta\GetZen
    {
        if ($this->meta👷GetZen instanceof Internal\Operator\Meta\GetZen === false) {
            $this->meta👷GetZen = new Internal\Operator\Meta\GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Zen());
        }

        return $this->meta👷GetZen;
    }
}
