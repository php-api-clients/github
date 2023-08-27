<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Operators
{
    private Operator\Meta\Root|null $meta👷Root                                                                                                                             = null;
    private Operator\SecurityAdvisories\ListGlobalAdvisories|null $securityAdvisories👷ListGlobalAdvisories                                                                 = null;
    private Operator\SecurityAdvisories\GetGlobalAdvisory|null $securityAdvisories👷GetGlobalAdvisory                                                                       = null;
    private Operator\Apps\GetAuthenticated|null $apps👷GetAuthenticated                                                                                                     = null;
    private Operator\Apps\CreateFromManifest|null $apps👷CreateFromManifest                                                                                                 = null;
    private Operator\Apps\GetWebhookConfigForApp|null $apps👷GetWebhookConfigForApp                                                                                         = null;
    private Operator\Apps\UpdateWebhookConfigForApp|null $apps👷UpdateWebhookConfigForApp                                                                                   = null;
    private Operator\Apps\ListWebhookDeliveries|null $apps👷ListWebhookDeliveries                                                                                           = null;
    private Operator\Apps\GetWebhookDelivery|null $apps👷GetWebhookDelivery                                                                                                 = null;
    private Operator\Apps\RedeliverWebhookDelivery|null $apps👷RedeliverWebhookDelivery                                                                                     = null;
    private Operator\Apps\ListInstallationRequestsForAuthenticatedApp|null $apps👷ListInstallationRequestsForAuthenticatedApp                                               = null;
    private Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing|null $apps👷ListInstallationRequestsForAuthenticatedAppListing                                 = null;
    private Operator\Apps\ListInstallations|null $apps👷ListInstallations                                                                                                   = null;
    private Operator\Apps\ListInstallationsListing|null $apps👷ListInstallationsListing                                                                                     = null;
    private Operator\Apps\GetInstallation|null $apps👷GetInstallation                                                                                                       = null;
    private Operator\Apps\DeleteInstallation|null $apps👷DeleteInstallation                                                                                                 = null;
    private Operator\Apps\CreateInstallationAccessToken|null $apps👷CreateInstallationAccessToken                                                                           = null;
    private Operator\Apps\SuspendInstallation|null $apps👷SuspendInstallation                                                                                               = null;
    private Operator\Apps\UnsuspendInstallation|null $apps👷UnsuspendInstallation                                                                                           = null;
    private Operator\Apps\DeleteAuthorization|null $apps👷DeleteAuthorization                                                                                               = null;
    private Operator\Apps\CheckToken|null $apps👷CheckToken                                                                                                                 = null;
    private Operator\Apps\DeleteToken|null $apps👷DeleteToken                                                                                                               = null;
    private Operator\Apps\ResetToken|null $apps👷ResetToken                                                                                                                 = null;
    private Operator\Apps\ScopeToken|null $apps👷ScopeToken                                                                                                                 = null;
    private Operator\Apps\GetBySlug|null $apps👷GetBySlug                                                                                                                   = null;
    private Operator\CodesOfConduct\GetAllCodesOfConduct|null $codesOfConduct👷GetAllCodesOfConduct                                                                         = null;
    private Operator\CodesOfConduct\GetConductCode|null $codesOfConduct👷GetConductCode                                                                                     = null;
    private Operator\Emojis\Get|null $emojis👷Get                                                                                                                           = null;
    private Operator\Dependabot\ListAlertsForEnterprise|null $dependabot👷ListAlertsForEnterprise                                                                           = null;
    private Operator\SecretScanning\ListAlertsForEnterprise|null $secretScanning👷ListAlertsForEnterprise                                                                   = null;
    private Operator\Activity\ListPublicEvents|null $activity👷ListPublicEvents                                                                                             = null;
    private Operator\Activity\ListPublicEventsListing|null $activity👷ListPublicEventsListing                                                                               = null;
    private Operator\Activity\GetFeeds|null $activity👷GetFeeds                                                                                                             = null;
    private Operator\Gists\List_|null $gists👷List_                                                                                                                         = null;
    private Operator\Gists\ListListing|null $gists👷ListListing                                                                                                             = null;
    private Operator\Gists\Create|null $gists👷Create                                                                                                                       = null;
    private Operator\Gists\ListPublic|null $gists👷ListPublic                                                                                                               = null;
    private Operator\Gists\ListPublicListing|null $gists👷ListPublicListing                                                                                                 = null;
    private Operator\Gists\ListStarred|null $gists👷ListStarred                                                                                                             = null;
    private Operator\Gists\ListStarredListing|null $gists👷ListStarredListing                                                                                               = null;
    private Operator\Gists\Get|null $gists👷Get                                                                                                                             = null;
    private Operator\Gists\Delete|null $gists👷Delete                                                                                                                       = null;
    private Operator\Gists\Update|null $gists👷Update                                                                                                                       = null;
    private Operator\Gists\ListComments|null $gists👷ListComments                                                                                                           = null;
    private Operator\Gists\ListCommentsListing|null $gists👷ListCommentsListing                                                                                             = null;
    private Operator\Gists\CreateComment|null $gists👷CreateComment                                                                                                         = null;
    private Operator\Gists\GetComment|null $gists👷GetComment                                                                                                               = null;
    private Operator\Gists\DeleteComment|null $gists👷DeleteComment                                                                                                         = null;
    private Operator\Gists\UpdateComment|null $gists👷UpdateComment                                                                                                         = null;
    private Operator\Gists\ListCommits|null $gists👷ListCommits                                                                                                             = null;
    private Operator\Gists\ListCommitsListing|null $gists👷ListCommitsListing                                                                                               = null;
    private Operator\Gists\ListForks|null $gists👷ListForks                                                                                                                 = null;
    private Operator\Gists\ListForksListing|null $gists👷ListForksListing                                                                                                   = null;
    private Operator\Gists\Fork|null $gists👷Fork                                                                                                                           = null;
    private Operator\Gists\CheckIsStarred|null $gists👷CheckIsStarred                                                                                                       = null;
    private Operator\Gists\Star|null $gists👷Star                                                                                                                           = null;
    private Operator\Gists\Unstar|null $gists👷Unstar                                                                                                                       = null;
    private Operator\Gists\GetRevision|null $gists👷GetRevision                                                                                                             = null;
    private Operator\Gitignore\GetAllTemplates|null $gitignore👷GetAllTemplates                                                                                             = null;
    private Operator\Gitignore\GetTemplate|null $gitignore👷GetTemplate                                                                                                     = null;
    private Operator\Apps\ListReposAccessibleToInstallation|null $apps👷ListReposAccessibleToInstallation                                                                   = null;
    private Operator\Apps\RevokeInstallationAccessToken|null $apps👷RevokeInstallationAccessToken                                                                           = null;
    private Operator\Issues\List_|null $issues👷List_                                                                                                                       = null;
    private Operator\Issues\ListListing|null $issues👷ListListing                                                                                                           = null;
    private Operator\Licenses\GetAllCommonlyUsed|null $licenses👷GetAllCommonlyUsed                                                                                         = null;
    private Operator\Licenses\GetAllCommonlyUsedListing|null $licenses👷GetAllCommonlyUsedListing                                                                           = null;
    private Operator\Licenses\Get|null $licenses👷Get                                                                                                                       = null;
    private Operator\Markdown\Render|null $markdown👷Render                                                                                                                 = null;
    private Operator\Markdown\RenderRaw|null $markdown👷RenderRaw                                                                                                           = null;
    private Operator\Apps\GetSubscriptionPlanForAccount|null $apps👷GetSubscriptionPlanForAccount                                                                           = null;
    private Operator\Apps\ListPlans|null $apps👷ListPlans                                                                                                                   = null;
    private Operator\Apps\ListPlansListing|null $apps👷ListPlansListing                                                                                                     = null;
    private Operator\Apps\ListAccountsForPlan|null $apps👷ListAccountsForPlan                                                                                               = null;
    private Operator\Apps\ListAccountsForPlanListing|null $apps👷ListAccountsForPlanListing                                                                                 = null;
    private Operator\Apps\GetSubscriptionPlanForAccountStubbed|null $apps👷GetSubscriptionPlanForAccountStubbed                                                             = null;
    private Operator\Apps\ListPlansStubbed|null $apps👷ListPlansStubbed                                                                                                     = null;
    private Operator\Apps\ListPlansStubbedListing|null $apps👷ListPlansStubbedListing                                                                                       = null;
    private Operator\Apps\ListAccountsForPlanStubbed|null $apps👷ListAccountsForPlanStubbed                                                                                 = null;
    private Operator\Apps\ListAccountsForPlanStubbedListing|null $apps👷ListAccountsForPlanStubbedListing                                                                   = null;
    private Operator\Meta\Get|null $meta👷Get                                                                                                                               = null;
    private Operator\Activity\ListPublicEventsForRepoNetwork|null $activity👷ListPublicEventsForRepoNetwork                                                                 = null;
    private Operator\Activity\ListPublicEventsForRepoNetworkListing|null $activity👷ListPublicEventsForRepoNetworkListing                                                   = null;
    private Operator\Activity\ListNotificationsForAuthenticatedUser|null $activity👷ListNotificationsForAuthenticatedUser                                                   = null;
    private Operator\Activity\ListNotificationsForAuthenticatedUserListing|null $activity👷ListNotificationsForAuthenticatedUserListing                                     = null;
    private Operator\Activity\MarkNotificationsAsRead|null $activity👷MarkNotificationsAsRead                                                                               = null;
    private Operator\Activity\GetThread|null $activity👷GetThread                                                                                                           = null;
    private Operator\Activity\MarkThreadAsRead|null $activity👷MarkThreadAsRead                                                                                             = null;
    private Operator\Activity\GetThreadSubscriptionForAuthenticatedUser|null $activity👷GetThreadSubscriptionForAuthenticatedUser                                           = null;
    private Operator\Activity\SetThreadSubscription|null $activity👷SetThreadSubscription                                                                                   = null;
    private Operator\Activity\DeleteThreadSubscription|null $activity👷DeleteThreadSubscription                                                                             = null;
    private Operator\Meta\GetOctocat|null $meta👷GetOctocat                                                                                                                 = null;
    private Operator\Orgs\List_|null $orgs👷List_                                                                                                                           = null;
    private Operator\Orgs\Get|null $orgs👷Get                                                                                                                               = null;
    private Operator\Orgs\Delete|null $orgs👷Delete                                                                                                                         = null;
    private Operator\Orgs\Update|null $orgs👷Update                                                                                                                         = null;
    private Operator\Actions\GetActionsCacheUsageForOrg|null $actions👷GetActionsCacheUsageForOrg                                                                           = null;
    private Operator\Actions\GetActionsCacheUsageByRepoForOrg|null $actions👷GetActionsCacheUsageByRepoForOrg                                                               = null;
    private Operator\Oidc\GetOidcCustomSubTemplateForOrg|null $oidc👷GetOidcCustomSubTemplateForOrg                                                                         = null;
    private Operator\Oidc\UpdateOidcCustomSubTemplateForOrg|null $oidc👷UpdateOidcCustomSubTemplateForOrg                                                                   = null;
    private Operator\Actions\GetGithubActionsPermissionsOrganization|null $actions👷GetGithubActionsPermissionsOrganization                                                 = null;
    private Operator\Actions\SetGithubActionsPermissionsOrganization|null $actions👷SetGithubActionsPermissionsOrganization                                                 = null;
    private Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization               = null;
    private Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization|null $actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization                 = null;
    private Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization|null $actions👷EnableSelectedRepositoryGithubActionsOrganization                             = null;
    private Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization|null $actions👷DisableSelectedRepositoryGithubActionsOrganization                           = null;
    private Operator\Actions\GetAllowedActionsOrganization|null $actions👷GetAllowedActionsOrganization                                                                     = null;
    private Operator\Actions\SetAllowedActionsOrganization|null $actions👷SetAllowedActionsOrganization                                                                     = null;
    private Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization                   = null;
    private Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization|null $actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization                   = null;
    private Operator\Actions\ListSelfHostedRunnersForOrg|null $actions👷ListSelfHostedRunnersForOrg                                                                         = null;
    private Operator\Actions\ListRunnerApplicationsForOrg|null $actions👷ListRunnerApplicationsForOrg                                                                       = null;
    private Operator\Actions\GenerateRunnerJitconfigForOrg|null $actions👷GenerateRunnerJitconfigForOrg                                                                     = null;
    private Operator\Actions\CreateRegistrationTokenForOrg|null $actions👷CreateRegistrationTokenForOrg                                                                     = null;
    private Operator\Actions\CreateRemoveTokenForOrg|null $actions👷CreateRemoveTokenForOrg                                                                                 = null;
    private Operator\Actions\GetSelfHostedRunnerForOrg|null $actions👷GetSelfHostedRunnerForOrg                                                                             = null;
    private Operator\Actions\DeleteSelfHostedRunnerFromOrg|null $actions👷DeleteSelfHostedRunnerFromOrg                                                                     = null;
    private Operator\Actions\ListLabelsForSelfHostedRunnerForOrg|null $actions👷ListLabelsForSelfHostedRunnerForOrg                                                         = null;
    private Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg|null $actions👷SetCustomLabelsForSelfHostedRunnerForOrg                                               = null;
    private Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg|null $actions👷AddCustomLabelsToSelfHostedRunnerForOrg                                                 = null;
    private Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg|null $actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg                                 = null;
    private Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg|null $actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg                                         = null;
    private Operator\Actions\ListOrgSecrets|null $actions👷ListOrgSecrets                                                                                                   = null;
    private Operator\Actions\GetOrgPublicKey|null $actions👷GetOrgPublicKey                                                                                                 = null;
    private Operator\Actions\GetOrgSecret|null $actions👷GetOrgSecret                                                                                                       = null;
    private Operator\Actions\CreateOrUpdateOrgSecret|null $actions👷CreateOrUpdateOrgSecret                                                                                 = null;
    private Operator\Actions\DeleteOrgSecret|null $actions👷DeleteOrgSecret                                                                                                 = null;
    private Operator\Actions\ListSelectedReposForOrgSecret|null $actions👷ListSelectedReposForOrgSecret                                                                     = null;
    private Operator\Actions\SetSelectedReposForOrgSecret|null $actions👷SetSelectedReposForOrgSecret                                                                       = null;
    private Operator\Actions\AddSelectedRepoToOrgSecret|null $actions👷AddSelectedRepoToOrgSecret                                                                           = null;
    private Operator\Actions\RemoveSelectedRepoFromOrgSecret|null $actions👷RemoveSelectedRepoFromOrgSecret                                                                 = null;
    private Operator\Actions\ListOrgVariables|null $actions👷ListOrgVariables                                                                                               = null;
    private Operator\Actions\CreateOrgVariable|null $actions👷CreateOrgVariable                                                                                             = null;
    private Operator\Actions\GetOrgVariable|null $actions👷GetOrgVariable                                                                                                   = null;
    private Operator\Actions\DeleteOrgVariable|null $actions👷DeleteOrgVariable                                                                                             = null;
    private Operator\Actions\UpdateOrgVariable|null $actions👷UpdateOrgVariable                                                                                             = null;
    private Operator\Actions\ListSelectedReposForOrgVariable|null $actions👷ListSelectedReposForOrgVariable                                                                 = null;
    private Operator\Actions\SetSelectedReposForOrgVariable|null $actions👷SetSelectedReposForOrgVariable                                                                   = null;
    private Operator\Actions\AddSelectedRepoToOrgVariable|null $actions👷AddSelectedRepoToOrgVariable                                                                       = null;
    private Operator\Actions\RemoveSelectedRepoFromOrgVariable|null $actions👷RemoveSelectedRepoFromOrgVariable                                                             = null;
    private Operator\Orgs\ListBlockedUsers|null $orgs👷ListBlockedUsers                                                                                                     = null;
    private Operator\Orgs\ListBlockedUsersListing|null $orgs👷ListBlockedUsersListing                                                                                       = null;
    private Operator\Orgs\CheckBlockedUser|null $orgs👷CheckBlockedUser                                                                                                     = null;
    private Operator\Orgs\BlockUser|null $orgs👷BlockUser                                                                                                                   = null;
    private Operator\Orgs\UnblockUser|null $orgs👷UnblockUser                                                                                                               = null;
    private Operator\CodeScanning\ListAlertsForOrg|null $codeScanning👷ListAlertsForOrg                                                                                     = null;
    private Operator\CodeScanning\ListAlertsForOrgListing|null $codeScanning👷ListAlertsForOrgListing                                                                       = null;
    private Operator\Codespaces\ListInOrganization|null $codespaces👷ListInOrganization                                                                                     = null;
    private Operator\Codespaces\SetCodespacesAccess|null $codespaces👷SetCodespacesAccess                                                                                   = null;
    private Operator\Codespaces\SetCodespacesAccessUsers|null $codespaces👷SetCodespacesAccessUsers                                                                         = null;
    private Operator\Codespaces\DeleteCodespacesAccessUsers|null $codespaces👷DeleteCodespacesAccessUsers                                                                   = null;
    private Operator\Codespaces\ListOrgSecrets|null $codespaces👷ListOrgSecrets                                                                                             = null;
    private Operator\Codespaces\GetOrgPublicKey|null $codespaces👷GetOrgPublicKey                                                                                           = null;
    private Operator\Codespaces\GetOrgSecret|null $codespaces👷GetOrgSecret                                                                                                 = null;
    private Operator\Codespaces\CreateOrUpdateOrgSecret|null $codespaces👷CreateOrUpdateOrgSecret                                                                           = null;
    private Operator\Codespaces\DeleteOrgSecret|null $codespaces👷DeleteOrgSecret                                                                                           = null;
    private Operator\Codespaces\ListSelectedReposForOrgSecret|null $codespaces👷ListSelectedReposForOrgSecret                                                               = null;
    private Operator\Codespaces\SetSelectedReposForOrgSecret|null $codespaces👷SetSelectedReposForOrgSecret                                                                 = null;
    private Operator\Codespaces\AddSelectedRepoToOrgSecret|null $codespaces👷AddSelectedRepoToOrgSecret                                                                     = null;
    private Operator\Codespaces\RemoveSelectedRepoFromOrgSecret|null $codespaces👷RemoveSelectedRepoFromOrgSecret                                                           = null;
    private Operator\Copilot\GetCopilotOrganizationDetails|null $copilot👷GetCopilotOrganizationDetails                                                                     = null;
    private Operator\Copilot\ListCopilotSeats|null $copilot👷ListCopilotSeats                                                                                               = null;
    private Operator\Copilot\AddCopilotForBusinessSeatsForTeams|null $copilot👷AddCopilotForBusinessSeatsForTeams                                                           = null;
    private Operator\Copilot\CancelCopilotSeatAssignmentForTeams|null $copilot👷CancelCopilotSeatAssignmentForTeams                                                         = null;
    private Operator\Copilot\AddCopilotForBusinessSeatsForUsers|null $copilot👷AddCopilotForBusinessSeatsForUsers                                                           = null;
    private Operator\Copilot\CancelCopilotSeatAssignmentForUsers|null $copilot👷CancelCopilotSeatAssignmentForUsers                                                         = null;
    private Operator\Dependabot\ListAlertsForOrg|null $dependabot👷ListAlertsForOrg                                                                                         = null;
    private Operator\Dependabot\ListOrgSecrets|null $dependabot👷ListOrgSecrets                                                                                             = null;
    private Operator\Dependabot\GetOrgPublicKey|null $dependabot👷GetOrgPublicKey                                                                                           = null;
    private Operator\Dependabot\GetOrgSecret|null $dependabot👷GetOrgSecret                                                                                                 = null;
    private Operator\Dependabot\CreateOrUpdateOrgSecret|null $dependabot👷CreateOrUpdateOrgSecret                                                                           = null;
    private Operator\Dependabot\DeleteOrgSecret|null $dependabot👷DeleteOrgSecret                                                                                           = null;
    private Operator\Dependabot\ListSelectedReposForOrgSecret|null $dependabot👷ListSelectedReposForOrgSecret                                                               = null;
    private Operator\Dependabot\SetSelectedReposForOrgSecret|null $dependabot👷SetSelectedReposForOrgSecret                                                                 = null;
    private Operator\Dependabot\AddSelectedRepoToOrgSecret|null $dependabot👷AddSelectedRepoToOrgSecret                                                                     = null;
    private Operator\Dependabot\RemoveSelectedRepoFromOrgSecret|null $dependabot👷RemoveSelectedRepoFromOrgSecret                                                           = null;
    private Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization|null $packages👷ListDockerMigrationConflictingPackagesForOrganization                   = null;
    private Operator\Activity\ListPublicOrgEvents|null $activity👷ListPublicOrgEvents                                                                                       = null;
    private Operator\Activity\ListPublicOrgEventsListing|null $activity👷ListPublicOrgEventsListing                                                                         = null;
    private Operator\Orgs\ListFailedInvitations|null $orgs👷ListFailedInvitations                                                                                           = null;
    private Operator\Orgs\ListFailedInvitationsListing|null $orgs👷ListFailedInvitationsListing                                                                             = null;
    private Operator\Orgs\ListWebhooks|null $orgs👷ListWebhooks                                                                                                             = null;
    private Operator\Orgs\ListWebhooksListing|null $orgs👷ListWebhooksListing                                                                                               = null;
    private Operator\Orgs\CreateWebhook|null $orgs👷CreateWebhook                                                                                                           = null;
    private Operator\Orgs\GetWebhook|null $orgs👷GetWebhook                                                                                                                 = null;
    private Operator\Orgs\DeleteWebhook|null $orgs👷DeleteWebhook                                                                                                           = null;
    private Operator\Orgs\UpdateWebhook|null $orgs👷UpdateWebhook                                                                                                           = null;
    private Operator\Orgs\GetWebhookConfigForOrg|null $orgs👷GetWebhookConfigForOrg                                                                                         = null;
    private Operator\Orgs\UpdateWebhookConfigForOrg|null $orgs👷UpdateWebhookConfigForOrg                                                                                   = null;
    private Operator\Orgs\ListWebhookDeliveries|null $orgs👷ListWebhookDeliveries                                                                                           = null;
    private Operator\Orgs\GetWebhookDelivery|null $orgs👷GetWebhookDelivery                                                                                                 = null;
    private Operator\Orgs\RedeliverWebhookDelivery|null $orgs👷RedeliverWebhookDelivery                                                                                     = null;
    private Operator\Orgs\PingWebhook|null $orgs👷PingWebhook                                                                                                               = null;
    private Operator\Apps\GetOrgInstallation|null $apps👷GetOrgInstallation                                                                                                 = null;
    private Operator\Orgs\ListAppInstallations|null $orgs👷ListAppInstallations                                                                                             = null;
    private Operator\Interactions\GetRestrictionsForOrg|null $interactions👷GetRestrictionsForOrg                                                                           = null;
    private Operator\Interactions\SetRestrictionsForOrg|null $interactions👷SetRestrictionsForOrg                                                                           = null;
    private Operator\Interactions\RemoveRestrictionsForOrg|null $interactions👷RemoveRestrictionsForOrg                                                                     = null;
    private Operator\Orgs\ListPendingInvitations|null $orgs👷ListPendingInvitations                                                                                         = null;
    private Operator\Orgs\ListPendingInvitationsListing|null $orgs👷ListPendingInvitationsListing                                                                           = null;
    private Operator\Orgs\CreateInvitation|null $orgs👷CreateInvitation                                                                                                     = null;
    private Operator\Orgs\CancelInvitation|null $orgs👷CancelInvitation                                                                                                     = null;
    private Operator\Orgs\ListInvitationTeams|null $orgs👷ListInvitationTeams                                                                                               = null;
    private Operator\Orgs\ListInvitationTeamsListing|null $orgs👷ListInvitationTeamsListing                                                                                 = null;
    private Operator\Issues\ListForOrg|null $issues👷ListForOrg                                                                                                             = null;
    private Operator\Issues\ListForOrgListing|null $issues👷ListForOrgListing                                                                                               = null;
    private Operator\Orgs\ListMembers|null $orgs👷ListMembers                                                                                                               = null;
    private Operator\Orgs\ListMembersListing|null $orgs👷ListMembersListing                                                                                                 = null;
    private Operator\Orgs\CheckMembershipForUser|null $orgs👷CheckMembershipForUser                                                                                         = null;
    private Operator\Orgs\RemoveMember|null $orgs👷RemoveMember                                                                                                             = null;
    private Operator\Codespaces\GetCodespacesForUserInOrg|null $codespaces👷GetCodespacesForUserInOrg                                                                       = null;
    private Operator\Codespaces\DeleteFromOrganization|null $codespaces👷DeleteFromOrganization                                                                             = null;
    private Operator\Codespaces\StopInOrganization|null $codespaces👷StopInOrganization                                                                                     = null;
    private Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser|null $copilot👷GetCopilotSeatAssignmentDetailsForUser                                                   = null;
    private Operator\Orgs\GetMembershipForUser|null $orgs👷GetMembershipForUser                                                                                             = null;
    private Operator\Orgs\SetMembershipForUser|null $orgs👷SetMembershipForUser                                                                                             = null;
    private Operator\Orgs\RemoveMembershipForUser|null $orgs👷RemoveMembershipForUser                                                                                       = null;
    private Operator\Migrations\ListForOrg|null $migrations👷ListForOrg                                                                                                     = null;
    private Operator\Migrations\ListForOrgListing|null $migrations👷ListForOrgListing                                                                                       = null;
    private Operator\Migrations\StartForOrg|null $migrations👷StartForOrg                                                                                                   = null;
    private Operator\Migrations\GetStatusForOrg|null $migrations👷GetStatusForOrg                                                                                           = null;
    private Operator\Migrations\DownloadArchiveForOrg|null $migrations👷DownloadArchiveForOrg                                                                               = null;
    private Operator\Migrations\DownloadArchiveForOrgStreaming|null $migrations👷DownloadArchiveForOrgStreaming                                                             = null;
    private Operator\Migrations\DeleteArchiveForOrg|null $migrations👷DeleteArchiveForOrg                                                                                   = null;
    private Operator\Migrations\UnlockRepoForOrg|null $migrations👷UnlockRepoForOrg                                                                                         = null;
    private Operator\Migrations\ListReposForOrg|null $migrations👷ListReposForOrg                                                                                           = null;
    private Operator\Migrations\ListReposForOrgListing|null $migrations👷ListReposForOrgListing                                                                             = null;
    private Operator\Orgs\ListOutsideCollaborators|null $orgs👷ListOutsideCollaborators                                                                                     = null;
    private Operator\Orgs\ListOutsideCollaboratorsListing|null $orgs👷ListOutsideCollaboratorsListing                                                                       = null;
    private Operator\Orgs\ConvertMemberToOutsideCollaborator|null $orgs👷ConvertMemberToOutsideCollaborator                                                                 = null;
    private Operator\Orgs\RemoveOutsideCollaborator|null $orgs👷RemoveOutsideCollaborator                                                                                   = null;
    private Operator\Packages\ListPackagesForOrganization|null $packages👷ListPackagesForOrganization                                                                       = null;
    private Operator\Packages\ListPackagesForOrganizationListing|null $packages👷ListPackagesForOrganizationListing                                                         = null;
    private Operator\Packages\GetPackageForOrganization|null $packages👷GetPackageForOrganization                                                                           = null;
    private Operator\Packages\DeletePackageForOrg|null $packages👷DeletePackageForOrg                                                                                       = null;
    private Operator\Packages\RestorePackageForOrg|null $packages👷RestorePackageForOrg                                                                                     = null;
    private Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg|null $packages👷GetAllPackageVersionsForPackageOwnedByOrg                                           = null;
    private Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing|null $packages👷GetAllPackageVersionsForPackageOwnedByOrgListing                             = null;
    private Operator\Packages\GetPackageVersionForOrganization|null $packages👷GetPackageVersionForOrganization                                                             = null;
    private Operator\Packages\DeletePackageVersionForOrg|null $packages👷DeletePackageVersionForOrg                                                                         = null;
    private Operator\Packages\RestorePackageVersionForOrg|null $packages👷RestorePackageVersionForOrg                                                                       = null;
    private Operator\Orgs\ListPatGrantRequests|null $orgs👷ListPatGrantRequests                                                                                             = null;
    private Operator\Orgs\ListPatGrantRequestsListing|null $orgs👷ListPatGrantRequestsListing                                                                               = null;
    private Operator\Orgs\ReviewPatGrantRequestsInBulk|null $orgs👷ReviewPatGrantRequestsInBulk                                                                             = null;
    private Operator\Orgs\ReviewPatGrantRequest|null $orgs👷ReviewPatGrantRequest                                                                                           = null;
    private Operator\Orgs\ListPatGrantRequestRepositories|null $orgs👷ListPatGrantRequestRepositories                                                                       = null;
    private Operator\Orgs\ListPatGrantRequestRepositoriesListing|null $orgs👷ListPatGrantRequestRepositoriesListing                                                         = null;
    private Operator\Orgs\ListPatGrants|null $orgs👷ListPatGrants                                                                                                           = null;
    private Operator\Orgs\ListPatGrantsListing|null $orgs👷ListPatGrantsListing                                                                                             = null;
    private Operator\Orgs\UpdatePatAccesses|null $orgs👷UpdatePatAccesses                                                                                                   = null;
    private Operator\Orgs\UpdatePatAccess|null $orgs👷UpdatePatAccess                                                                                                       = null;
    private Operator\Orgs\ListPatGrantRepositories|null $orgs👷ListPatGrantRepositories                                                                                     = null;
    private Operator\Orgs\ListPatGrantRepositoriesListing|null $orgs👷ListPatGrantRepositoriesListing                                                                       = null;
    private Operator\Projects\ListForOrg|null $projects👷ListForOrg                                                                                                         = null;
    private Operator\Projects\ListForOrgListing|null $projects👷ListForOrgListing                                                                                           = null;
    private Operator\Projects\CreateForOrg|null $projects👷CreateForOrg                                                                                                     = null;
    private Operator\Orgs\ListPublicMembers|null $orgs👷ListPublicMembers                                                                                                   = null;
    private Operator\Orgs\ListPublicMembersListing|null $orgs👷ListPublicMembersListing                                                                                     = null;
    private Operator\Orgs\CheckPublicMembershipForUser|null $orgs👷CheckPublicMembershipForUser                                                                             = null;
    private Operator\Orgs\SetPublicMembershipForAuthenticatedUser|null $orgs👷SetPublicMembershipForAuthenticatedUser                                                       = null;
    private Operator\Orgs\RemovePublicMembershipForAuthenticatedUser|null $orgs👷RemovePublicMembershipForAuthenticatedUser                                                 = null;
    private Operator\Repos\ListForOrg|null $repos👷ListForOrg                                                                                                               = null;
    private Operator\Repos\ListForOrgListing|null $repos👷ListForOrgListing                                                                                                 = null;
    private Operator\Repos\CreateInOrg|null $repos👷CreateInOrg                                                                                                             = null;
    private Operator\Repos\GetOrgRulesets|null $repos👷GetOrgRulesets                                                                                                       = null;
    private Operator\Repos\GetOrgRulesetsListing|null $repos👷GetOrgRulesetsListing                                                                                         = null;
    private Operator\Repos\CreateOrgRuleset|null $repos👷CreateOrgRuleset                                                                                                   = null;
    private Operator\Repos\GetOrgRuleset|null $repos👷GetOrgRuleset                                                                                                         = null;
    private Operator\Repos\UpdateOrgRuleset|null $repos👷UpdateOrgRuleset                                                                                                   = null;
    private Operator\Repos\DeleteOrgRuleset|null $repos👷DeleteOrgRuleset                                                                                                   = null;
    private Operator\SecretScanning\ListAlertsForOrg|null $secretScanning👷ListAlertsForOrg                                                                                 = null;
    private Operator\SecretScanning\ListAlertsForOrgListing|null $secretScanning👷ListAlertsForOrgListing                                                                   = null;
    private Operator\SecurityAdvisories\ListOrgRepositoryAdvisories|null $securityAdvisories👷ListOrgRepositoryAdvisories                                                   = null;
    private Operator\Orgs\ListSecurityManagerTeams|null $orgs👷ListSecurityManagerTeams                                                                                     = null;
    private Operator\Orgs\AddSecurityManagerTeam|null $orgs👷AddSecurityManagerTeam                                                                                         = null;
    private Operator\Orgs\RemoveSecurityManagerTeam|null $orgs👷RemoveSecurityManagerTeam                                                                                   = null;
    private Operator\Billing\GetGithubActionsBillingOrg|null $billing👷GetGithubActionsBillingOrg                                                                           = null;
    private Operator\Billing\GetGithubPackagesBillingOrg|null $billing👷GetGithubPackagesBillingOrg                                                                         = null;
    private Operator\Billing\GetSharedStorageBillingOrg|null $billing👷GetSharedStorageBillingOrg                                                                           = null;
    private Operator\Teams\List_|null $teams👷List_                                                                                                                         = null;
    private Operator\Teams\ListListing|null $teams👷ListListing                                                                                                             = null;
    private Operator\Teams\Create|null $teams👷Create                                                                                                                       = null;
    private Operator\Teams\GetByName|null $teams👷GetByName                                                                                                                 = null;
    private Operator\Teams\DeleteInOrg|null $teams👷DeleteInOrg                                                                                                             = null;
    private Operator\Teams\UpdateInOrg|null $teams👷UpdateInOrg                                                                                                             = null;
    private Operator\Teams\ListDiscussionsInOrg|null $teams👷ListDiscussionsInOrg                                                                                           = null;
    private Operator\Teams\ListDiscussionsInOrgListing|null $teams👷ListDiscussionsInOrgListing                                                                             = null;
    private Operator\Teams\CreateDiscussionInOrg|null $teams👷CreateDiscussionInOrg                                                                                         = null;
    private Operator\Teams\GetDiscussionInOrg|null $teams👷GetDiscussionInOrg                                                                                               = null;
    private Operator\Teams\DeleteDiscussionInOrg|null $teams👷DeleteDiscussionInOrg                                                                                         = null;
    private Operator\Teams\UpdateDiscussionInOrg|null $teams👷UpdateDiscussionInOrg                                                                                         = null;
    private Operator\Teams\ListDiscussionCommentsInOrg|null $teams👷ListDiscussionCommentsInOrg                                                                             = null;
    private Operator\Teams\ListDiscussionCommentsInOrgListing|null $teams👷ListDiscussionCommentsInOrgListing                                                               = null;
    private Operator\Teams\CreateDiscussionCommentInOrg|null $teams👷CreateDiscussionCommentInOrg                                                                           = null;
    private Operator\Teams\GetDiscussionCommentInOrg|null $teams👷GetDiscussionCommentInOrg                                                                                 = null;
    private Operator\Teams\DeleteDiscussionCommentInOrg|null $teams👷DeleteDiscussionCommentInOrg                                                                           = null;
    private Operator\Teams\UpdateDiscussionCommentInOrg|null $teams👷UpdateDiscussionCommentInOrg                                                                           = null;
    private Operator\Reactions\ListForTeamDiscussionCommentInOrg|null $reactions👷ListForTeamDiscussionCommentInOrg                                                         = null;
    private Operator\Reactions\ListForTeamDiscussionCommentInOrgListing|null $reactions👷ListForTeamDiscussionCommentInOrgListing                                           = null;
    private Operator\Reactions\CreateForTeamDiscussionCommentInOrg|null $reactions👷CreateForTeamDiscussionCommentInOrg                                                     = null;
    private Operator\Reactions\DeleteForTeamDiscussionComment|null $reactions👷DeleteForTeamDiscussionComment                                                               = null;
    private Operator\Reactions\ListForTeamDiscussionInOrg|null $reactions👷ListForTeamDiscussionInOrg                                                                       = null;
    private Operator\Reactions\ListForTeamDiscussionInOrgListing|null $reactions👷ListForTeamDiscussionInOrgListing                                                         = null;
    private Operator\Reactions\CreateForTeamDiscussionInOrg|null $reactions👷CreateForTeamDiscussionInOrg                                                                   = null;
    private Operator\Reactions\DeleteForTeamDiscussion|null $reactions👷DeleteForTeamDiscussion                                                                             = null;
    private Operator\Teams\ListPendingInvitationsInOrg|null $teams👷ListPendingInvitationsInOrg                                                                             = null;
    private Operator\Teams\ListPendingInvitationsInOrgListing|null $teams👷ListPendingInvitationsInOrgListing                                                               = null;
    private Operator\Teams\ListMembersInOrg|null $teams👷ListMembersInOrg                                                                                                   = null;
    private Operator\Teams\ListMembersInOrgListing|null $teams👷ListMembersInOrgListing                                                                                     = null;
    private Operator\Teams\GetMembershipForUserInOrg|null $teams👷GetMembershipForUserInOrg                                                                                 = null;
    private Operator\Teams\AddOrUpdateMembershipForUserInOrg|null $teams👷AddOrUpdateMembershipForUserInOrg                                                                 = null;
    private Operator\Teams\RemoveMembershipForUserInOrg|null $teams👷RemoveMembershipForUserInOrg                                                                           = null;
    private Operator\Teams\ListProjectsInOrg|null $teams👷ListProjectsInOrg                                                                                                 = null;
    private Operator\Teams\ListProjectsInOrgListing|null $teams👷ListProjectsInOrgListing                                                                                   = null;
    private Operator\Teams\CheckPermissionsForProjectInOrg|null $teams👷CheckPermissionsForProjectInOrg                                                                     = null;
    private Operator\Teams\AddOrUpdateProjectPermissionsInOrg|null $teams👷AddOrUpdateProjectPermissionsInOrg                                                               = null;
    private Operator\Teams\RemoveProjectInOrg|null $teams👷RemoveProjectInOrg                                                                                               = null;
    private Operator\Teams\ListReposInOrg|null $teams👷ListReposInOrg                                                                                                       = null;
    private Operator\Teams\ListReposInOrgListing|null $teams👷ListReposInOrgListing                                                                                         = null;
    private Operator\Teams\CheckPermissionsForRepoInOrg|null $teams👷CheckPermissionsForRepoInOrg                                                                           = null;
    private Operator\Teams\AddOrUpdateRepoPermissionsInOrg|null $teams👷AddOrUpdateRepoPermissionsInOrg                                                                     = null;
    private Operator\Teams\RemoveRepoInOrg|null $teams👷RemoveRepoInOrg                                                                                                     = null;
    private Operator\Teams\ListChildInOrg|null $teams👷ListChildInOrg                                                                                                       = null;
    private Operator\Teams\ListChildInOrgListing|null $teams👷ListChildInOrgListing                                                                                         = null;
    private Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos|null $orgs👷EnableOrDisableSecurityProductOnAllOrgRepos                                               = null;
    private Operator\Projects\GetCard|null $projects👷GetCard                                                                                                               = null;
    private Operator\Projects\DeleteCard|null $projects👷DeleteCard                                                                                                         = null;
    private Operator\Projects\UpdateCard|null $projects👷UpdateCard                                                                                                         = null;
    private Operator\Projects\MoveCard|null $projects👷MoveCard                                                                                                             = null;
    private Operator\Projects\GetColumn|null $projects👷GetColumn                                                                                                           = null;
    private Operator\Projects\DeleteColumn|null $projects👷DeleteColumn                                                                                                     = null;
    private Operator\Projects\UpdateColumn|null $projects👷UpdateColumn                                                                                                     = null;
    private Operator\Projects\ListCards|null $projects👷ListCards                                                                                                           = null;
    private Operator\Projects\ListCardsListing|null $projects👷ListCardsListing                                                                                             = null;
    private Operator\Projects\CreateCard|null $projects👷CreateCard                                                                                                         = null;
    private Operator\Projects\MoveColumn|null $projects👷MoveColumn                                                                                                         = null;
    private Operator\Projects\Get|null $projects👷Get                                                                                                                       = null;
    private Operator\Projects\Delete|null $projects👷Delete                                                                                                                 = null;
    private Operator\Projects\Update|null $projects👷Update                                                                                                                 = null;
    private Operator\Projects\ListCollaborators|null $projects👷ListCollaborators                                                                                           = null;
    private Operator\Projects\ListCollaboratorsListing|null $projects👷ListCollaboratorsListing                                                                             = null;
    private Operator\Projects\AddCollaborator|null $projects👷AddCollaborator                                                                                               = null;
    private Operator\Projects\RemoveCollaborator|null $projects👷RemoveCollaborator                                                                                         = null;
    private Operator\Projects\GetPermissionForUser|null $projects👷GetPermissionForUser                                                                                     = null;
    private Operator\Projects\ListColumns|null $projects👷ListColumns                                                                                                       = null;
    private Operator\Projects\ListColumnsListing|null $projects👷ListColumnsListing                                                                                         = null;
    private Operator\Projects\CreateColumn|null $projects👷CreateColumn                                                                                                     = null;
    private Operator\RateLimit\Get|null $rateLimit👷Get                                                                                                                     = null;
    private Operator\Repos\Get|null $repos👷Get                                                                                                                             = null;
    private Operator\Repos\Delete|null $repos👷Delete                                                                                                                       = null;
    private Operator\Repos\Update|null $repos👷Update                                                                                                                       = null;
    private Operator\Actions\ListArtifactsForRepo|null $actions👷ListArtifactsForRepo                                                                                       = null;
    private Operator\Actions\GetArtifact|null $actions👷GetArtifact                                                                                                         = null;
    private Operator\Actions\DeleteArtifact|null $actions👷DeleteArtifact                                                                                                   = null;
    private Operator\Actions\DownloadArtifact|null $actions👷DownloadArtifact                                                                                               = null;
    private Operator\Actions\DownloadArtifactStreaming|null $actions👷DownloadArtifactStreaming                                                                             = null;
    private Operator\Actions\GetActionsCacheUsage|null $actions👷GetActionsCacheUsage                                                                                       = null;
    private Operator\Actions\GetActionsCacheList|null $actions👷GetActionsCacheList                                                                                         = null;
    private Operator\Actions\DeleteActionsCacheByKey|null $actions👷DeleteActionsCacheByKey                                                                                 = null;
    private Operator\Actions\DeleteActionsCacheById|null $actions👷DeleteActionsCacheById                                                                                   = null;
    private Operator\Actions\GetJobForWorkflowRun|null $actions👷GetJobForWorkflowRun                                                                                       = null;
    private Operator\Actions\DownloadJobLogsForWorkflowRun|null $actions👷DownloadJobLogsForWorkflowRun                                                                     = null;
    private Operator\Actions\DownloadJobLogsForWorkflowRunStreaming|null $actions👷DownloadJobLogsForWorkflowRunStreaming                                                   = null;
    private Operator\Actions\ReRunJobForWorkflowRun|null $actions👷ReRunJobForWorkflowRun                                                                                   = null;
    private Operator\Actions\GetCustomOidcSubClaimForRepo|null $actions👷GetCustomOidcSubClaimForRepo                                                                       = null;
    private Operator\Actions\SetCustomOidcSubClaimForRepo|null $actions👷SetCustomOidcSubClaimForRepo                                                                       = null;
    private Operator\Actions\ListRepoOrganizationSecrets|null $actions👷ListRepoOrganizationSecrets                                                                         = null;
    private Operator\Actions\ListRepoOrganizationVariables|null $actions👷ListRepoOrganizationVariables                                                                     = null;
    private Operator\Actions\GetGithubActionsPermissionsRepository|null $actions👷GetGithubActionsPermissionsRepository                                                     = null;
    private Operator\Actions\SetGithubActionsPermissionsRepository|null $actions👷SetGithubActionsPermissionsRepository                                                     = null;
    private Operator\Actions\GetWorkflowAccessToRepository|null $actions👷GetWorkflowAccessToRepository                                                                     = null;
    private Operator\Actions\SetWorkflowAccessToRepository|null $actions👷SetWorkflowAccessToRepository                                                                     = null;
    private Operator\Actions\GetAllowedActionsRepository|null $actions👷GetAllowedActionsRepository                                                                         = null;
    private Operator\Actions\SetAllowedActionsRepository|null $actions👷SetAllowedActionsRepository                                                                         = null;
    private Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository|null $actions👷GetGithubActionsDefaultWorkflowPermissionsRepository                       = null;
    private Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository|null $actions👷SetGithubActionsDefaultWorkflowPermissionsRepository                       = null;
    private Operator\Actions\ListSelfHostedRunnersForRepo|null $actions👷ListSelfHostedRunnersForRepo                                                                       = null;
    private Operator\Actions\ListRunnerApplicationsForRepo|null $actions👷ListRunnerApplicationsForRepo                                                                     = null;
    private Operator\Actions\GenerateRunnerJitconfigForRepo|null $actions👷GenerateRunnerJitconfigForRepo                                                                   = null;
    private Operator\Actions\CreateRegistrationTokenForRepo|null $actions👷CreateRegistrationTokenForRepo                                                                   = null;
    private Operator\Actions\CreateRemoveTokenForRepo|null $actions👷CreateRemoveTokenForRepo                                                                               = null;
    private Operator\Actions\GetSelfHostedRunnerForRepo|null $actions👷GetSelfHostedRunnerForRepo                                                                           = null;
    private Operator\Actions\DeleteSelfHostedRunnerFromRepo|null $actions👷DeleteSelfHostedRunnerFromRepo                                                                   = null;
    private Operator\Actions\ListLabelsForSelfHostedRunnerForRepo|null $actions👷ListLabelsForSelfHostedRunnerForRepo                                                       = null;
    private Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo|null $actions👷SetCustomLabelsForSelfHostedRunnerForRepo                                             = null;
    private Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo|null $actions👷AddCustomLabelsToSelfHostedRunnerForRepo                                               = null;
    private Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo|null $actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo                               = null;
    private Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo|null $actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo                                       = null;
    private Operator\Actions\ListWorkflowRunsForRepo|null $actions👷ListWorkflowRunsForRepo                                                                                 = null;
    private Operator\Actions\GetWorkflowRun|null $actions👷GetWorkflowRun                                                                                                   = null;
    private Operator\Actions\DeleteWorkflowRun|null $actions👷DeleteWorkflowRun                                                                                             = null;
    private Operator\Actions\GetReviewsForRun|null $actions👷GetReviewsForRun                                                                                               = null;
    private Operator\Actions\ApproveWorkflowRun|null $actions👷ApproveWorkflowRun                                                                                           = null;
    private Operator\Actions\ListWorkflowRunArtifacts|null $actions👷ListWorkflowRunArtifacts                                                                               = null;
    private Operator\Actions\GetWorkflowRunAttempt|null $actions👷GetWorkflowRunAttempt                                                                                     = null;
    private Operator\Actions\ListJobsForWorkflowRunAttempt|null $actions👷ListJobsForWorkflowRunAttempt                                                                     = null;
    private Operator\Actions\DownloadWorkflowRunAttemptLogs|null $actions👷DownloadWorkflowRunAttemptLogs                                                                   = null;
    private Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming|null $actions👷DownloadWorkflowRunAttemptLogsStreaming                                                 = null;
    private Operator\Actions\CancelWorkflowRun|null $actions👷CancelWorkflowRun                                                                                             = null;
    private Operator\Actions\ReviewCustomGatesForRun|null $actions👷ReviewCustomGatesForRun                                                                                 = null;
    private Operator\Actions\ListJobsForWorkflowRun|null $actions👷ListJobsForWorkflowRun                                                                                   = null;
    private Operator\Actions\DownloadWorkflowRunLogs|null $actions👷DownloadWorkflowRunLogs                                                                                 = null;
    private Operator\Actions\DownloadWorkflowRunLogsStreaming|null $actions👷DownloadWorkflowRunLogsStreaming                                                               = null;
    private Operator\Actions\DeleteWorkflowRunLogs|null $actions👷DeleteWorkflowRunLogs                                                                                     = null;
    private Operator\Actions\GetPendingDeploymentsForRun|null $actions👷GetPendingDeploymentsForRun                                                                         = null;
    private Operator\Actions\ReviewPendingDeploymentsForRun|null $actions👷ReviewPendingDeploymentsForRun                                                                   = null;
    private Operator\Actions\ReRunWorkflow|null $actions👷ReRunWorkflow                                                                                                     = null;
    private Operator\Actions\ReRunWorkflowFailedJobs|null $actions👷ReRunWorkflowFailedJobs                                                                                 = null;
    private Operator\Actions\GetWorkflowRunUsage|null $actions👷GetWorkflowRunUsage                                                                                         = null;
    private Operator\Actions\ListRepoSecrets|null $actions👷ListRepoSecrets                                                                                                 = null;
    private Operator\Actions\GetRepoPublicKey|null $actions👷GetRepoPublicKey                                                                                               = null;
    private Operator\Actions\GetRepoSecret|null $actions👷GetRepoSecret                                                                                                     = null;
    private Operator\Actions\CreateOrUpdateRepoSecret|null $actions👷CreateOrUpdateRepoSecret                                                                               = null;
    private Operator\Actions\DeleteRepoSecret|null $actions👷DeleteRepoSecret                                                                                               = null;
    private Operator\Actions\ListRepoVariables|null $actions👷ListRepoVariables                                                                                             = null;
    private Operator\Actions\CreateRepoVariable|null $actions👷CreateRepoVariable                                                                                           = null;
    private Operator\Actions\GetRepoVariable|null $actions👷GetRepoVariable                                                                                                 = null;
    private Operator\Actions\DeleteRepoVariable|null $actions👷DeleteRepoVariable                                                                                           = null;
    private Operator\Actions\UpdateRepoVariable|null $actions👷UpdateRepoVariable                                                                                           = null;
    private Operator\Actions\ListRepoWorkflows|null $actions👷ListRepoWorkflows                                                                                             = null;
    private Operator\Actions\GetWorkflow|null $actions👷GetWorkflow                                                                                                         = null;
    private Operator\Actions\DisableWorkflow|null $actions👷DisableWorkflow                                                                                                 = null;
    private Operator\Actions\CreateWorkflowDispatch|null $actions👷CreateWorkflowDispatch                                                                                   = null;
    private Operator\Actions\EnableWorkflow|null $actions👷EnableWorkflow                                                                                                   = null;
    private Operator\Actions\ListWorkflowRuns|null $actions👷ListWorkflowRuns                                                                                               = null;
    private Operator\Actions\GetWorkflowUsage|null $actions👷GetWorkflowUsage                                                                                               = null;
    private Operator\Repos\ListActivities|null $repos👷ListActivities                                                                                                       = null;
    private Operator\Issues\ListAssignees|null $issues👷ListAssignees                                                                                                       = null;
    private Operator\Issues\ListAssigneesListing|null $issues👷ListAssigneesListing                                                                                         = null;
    private Operator\Issues\CheckUserCanBeAssigned|null $issues👷CheckUserCanBeAssigned                                                                                     = null;
    private Operator\Repos\ListAutolinks|null $repos👷ListAutolinks                                                                                                         = null;
    private Operator\Repos\CreateAutolink|null $repos👷CreateAutolink                                                                                                       = null;
    private Operator\Repos\GetAutolink|null $repos👷GetAutolink                                                                                                             = null;
    private Operator\Repos\DeleteAutolink|null $repos👷DeleteAutolink                                                                                                       = null;
    private Operator\Repos\CheckAutomatedSecurityFixes|null $repos👷CheckAutomatedSecurityFixes                                                                             = null;
    private Operator\Repos\EnableAutomatedSecurityFixes|null $repos👷EnableAutomatedSecurityFixes                                                                           = null;
    private Operator\Repos\DisableAutomatedSecurityFixes|null $repos👷DisableAutomatedSecurityFixes                                                                         = null;
    private Operator\Repos\ListBranches|null $repos👷ListBranches                                                                                                           = null;
    private Operator\Repos\ListBranchesListing|null $repos👷ListBranchesListing                                                                                             = null;
    private Operator\Repos\GetBranch|null $repos👷GetBranch                                                                                                                 = null;
    private Operator\Repos\GetBranchProtection|null $repos👷GetBranchProtection                                                                                             = null;
    private Operator\Repos\UpdateBranchProtection|null $repos👷UpdateBranchProtection                                                                                       = null;
    private Operator\Repos\DeleteBranchProtection|null $repos👷DeleteBranchProtection                                                                                       = null;
    private Operator\Repos\GetAdminBranchProtection|null $repos👷GetAdminBranchProtection                                                                                   = null;
    private Operator\Repos\SetAdminBranchProtection|null $repos👷SetAdminBranchProtection                                                                                   = null;
    private Operator\Repos\DeleteAdminBranchProtection|null $repos👷DeleteAdminBranchProtection                                                                             = null;
    private Operator\Repos\GetPullRequestReviewProtection|null $repos👷GetPullRequestReviewProtection                                                                       = null;
    private Operator\Repos\DeletePullRequestReviewProtection|null $repos👷DeletePullRequestReviewProtection                                                                 = null;
    private Operator\Repos\UpdatePullRequestReviewProtection|null $repos👷UpdatePullRequestReviewProtection                                                                 = null;
    private Operator\Repos\GetCommitSignatureProtection|null $repos👷GetCommitSignatureProtection                                                                           = null;
    private Operator\Repos\CreateCommitSignatureProtection|null $repos👷CreateCommitSignatureProtection                                                                     = null;
    private Operator\Repos\DeleteCommitSignatureProtection|null $repos👷DeleteCommitSignatureProtection                                                                     = null;
    private Operator\Repos\GetStatusChecksProtection|null $repos👷GetStatusChecksProtection                                                                                 = null;
    private Operator\Repos\RemoveStatusCheckProtection|null $repos👷RemoveStatusCheckProtection                                                                             = null;
    private Operator\Repos\UpdateStatusCheckProtection|null $repos👷UpdateStatusCheckProtection                                                                             = null;
    private Operator\Repos\GetAllStatusCheckContexts|null $repos👷GetAllStatusCheckContexts                                                                                 = null;
    private Operator\Repos\SetStatusCheckContexts|null $repos👷SetStatusCheckContexts                                                                                       = null;
    private Operator\Repos\AddStatusCheckContexts|null $repos👷AddStatusCheckContexts                                                                                       = null;
    private Operator\Repos\RemoveStatusCheckContexts|null $repos👷RemoveStatusCheckContexts                                                                                 = null;
    private Operator\Repos\GetAccessRestrictions|null $repos👷GetAccessRestrictions                                                                                         = null;
    private Operator\Repos\DeleteAccessRestrictions|null $repos👷DeleteAccessRestrictions                                                                                   = null;
    private Operator\Repos\GetAppsWithAccessToProtectedBranch|null $repos👷GetAppsWithAccessToProtectedBranch                                                               = null;
    private Operator\Repos\SetAppAccessRestrictions|null $repos👷SetAppAccessRestrictions                                                                                   = null;
    private Operator\Repos\AddAppAccessRestrictions|null $repos👷AddAppAccessRestrictions                                                                                   = null;
    private Operator\Repos\RemoveAppAccessRestrictions|null $repos👷RemoveAppAccessRestrictions                                                                             = null;
    private Operator\Repos\GetTeamsWithAccessToProtectedBranch|null $repos👷GetTeamsWithAccessToProtectedBranch                                                             = null;
    private Operator\Repos\SetTeamAccessRestrictions|null $repos👷SetTeamAccessRestrictions                                                                                 = null;
    private Operator\Repos\AddTeamAccessRestrictions|null $repos👷AddTeamAccessRestrictions                                                                                 = null;
    private Operator\Repos\RemoveTeamAccessRestrictions|null $repos👷RemoveTeamAccessRestrictions                                                                           = null;
    private Operator\Repos\GetUsersWithAccessToProtectedBranch|null $repos👷GetUsersWithAccessToProtectedBranch                                                             = null;
    private Operator\Repos\SetUserAccessRestrictions|null $repos👷SetUserAccessRestrictions                                                                                 = null;
    private Operator\Repos\AddUserAccessRestrictions|null $repos👷AddUserAccessRestrictions                                                                                 = null;
    private Operator\Repos\RemoveUserAccessRestrictions|null $repos👷RemoveUserAccessRestrictions                                                                           = null;
    private Operator\Repos\RenameBranch|null $repos👷RenameBranch                                                                                                           = null;
    private Operator\Checks\Create|null $checks👷Create                                                                                                                     = null;
    private Operator\Checks\Get|null $checks👷Get                                                                                                                           = null;
    private Operator\Checks\Update|null $checks👷Update                                                                                                                     = null;
    private Operator\Checks\ListAnnotations|null $checks👷ListAnnotations                                                                                                   = null;
    private Operator\Checks\ListAnnotationsListing|null $checks👷ListAnnotationsListing                                                                                     = null;
    private Operator\Checks\RerequestRun|null $checks👷RerequestRun                                                                                                         = null;
    private Operator\Checks\CreateSuite|null $checks👷CreateSuite                                                                                                           = null;
    private Operator\Checks\SetSuitesPreferences|null $checks👷SetSuitesPreferences                                                                                         = null;
    private Operator\Checks\GetSuite|null $checks👷GetSuite                                                                                                                 = null;
    private Operator\Checks\ListForSuite|null $checks👷ListForSuite                                                                                                         = null;
    private Operator\Checks\RerequestSuite|null $checks👷RerequestSuite                                                                                                     = null;
    private Operator\CodeScanning\ListAlertsForRepo|null $codeScanning👷ListAlertsForRepo                                                                                   = null;
    private Operator\CodeScanning\ListAlertsForRepoListing|null $codeScanning👷ListAlertsForRepoListing                                                                     = null;
    private Operator\CodeScanning\GetAlert|null $codeScanning👷GetAlert                                                                                                     = null;
    private Operator\CodeScanning\UpdateAlert|null $codeScanning👷UpdateAlert                                                                                               = null;
    private Operator\CodeScanning\ListAlertInstances|null $codeScanning👷ListAlertInstances                                                                                 = null;
    private Operator\CodeScanning\ListAlertInstancesListing|null $codeScanning👷ListAlertInstancesListing                                                                   = null;
    private Operator\CodeScanning\ListRecentAnalyses|null $codeScanning👷ListRecentAnalyses                                                                                 = null;
    private Operator\CodeScanning\ListRecentAnalysesListing|null $codeScanning👷ListRecentAnalysesListing                                                                   = null;
    private Operator\CodeScanning\GetAnalysis|null $codeScanning👷GetAnalysis                                                                                               = null;
    private Operator\CodeScanning\DeleteAnalysis|null $codeScanning👷DeleteAnalysis                                                                                         = null;
    private Operator\CodeScanning\ListCodeqlDatabases|null $codeScanning👷ListCodeqlDatabases                                                                               = null;
    private Operator\CodeScanning\GetCodeqlDatabase|null $codeScanning👷GetCodeqlDatabase                                                                                   = null;
    private Operator\CodeScanning\GetDefaultSetup|null $codeScanning👷GetDefaultSetup                                                                                       = null;
    private Operator\CodeScanning\UpdateDefaultSetup|null $codeScanning👷UpdateDefaultSetup                                                                                 = null;
    private Operator\CodeScanning\UploadSarif|null $codeScanning👷UploadSarif                                                                                               = null;
    private Operator\CodeScanning\GetSarif|null $codeScanning👷GetSarif                                                                                                     = null;
    private Operator\Repos\CodeownersErrors|null $repos👷CodeownersErrors                                                                                                   = null;
    private Operator\Codespaces\ListInRepositoryForAuthenticatedUser|null $codespaces👷ListInRepositoryForAuthenticatedUser                                                 = null;
    private Operator\Codespaces\CreateWithRepoForAuthenticatedUser|null $codespaces👷CreateWithRepoForAuthenticatedUser                                                     = null;
    private Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser|null $codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser                       = null;
    private Operator\Codespaces\RepoMachinesForAuthenticatedUser|null $codespaces👷RepoMachinesForAuthenticatedUser                                                         = null;
    private Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser|null $codespaces👷PreFlightWithRepoForAuthenticatedUser                                               = null;
    private Operator\Codespaces\ListRepoSecrets|null $codespaces👷ListRepoSecrets                                                                                           = null;
    private Operator\Codespaces\GetRepoPublicKey|null $codespaces👷GetRepoPublicKey                                                                                         = null;
    private Operator\Codespaces\GetRepoSecret|null $codespaces👷GetRepoSecret                                                                                               = null;
    private Operator\Codespaces\CreateOrUpdateRepoSecret|null $codespaces👷CreateOrUpdateRepoSecret                                                                         = null;
    private Operator\Codespaces\DeleteRepoSecret|null $codespaces👷DeleteRepoSecret                                                                                         = null;
    private Operator\Repos\ListCollaborators|null $repos👷ListCollaborators                                                                                                 = null;
    private Operator\Repos\ListCollaboratorsListing|null $repos👷ListCollaboratorsListing                                                                                   = null;
    private Operator\Repos\CheckCollaborator|null $repos👷CheckCollaborator                                                                                                 = null;
    private Operator\Repos\AddCollaborator|null $repos👷AddCollaborator                                                                                                     = null;
    private Operator\Repos\RemoveCollaborator|null $repos👷RemoveCollaborator                                                                                               = null;
    private Operator\Repos\GetCollaboratorPermissionLevel|null $repos👷GetCollaboratorPermissionLevel                                                                       = null;
    private Operator\Repos\ListCommitCommentsForRepo|null $repos👷ListCommitCommentsForRepo                                                                                 = null;
    private Operator\Repos\ListCommitCommentsForRepoListing|null $repos👷ListCommitCommentsForRepoListing                                                                   = null;
    private Operator\Repos\GetCommitComment|null $repos👷GetCommitComment                                                                                                   = null;
    private Operator\Repos\DeleteCommitComment|null $repos👷DeleteCommitComment                                                                                             = null;
    private Operator\Repos\UpdateCommitComment|null $repos👷UpdateCommitComment                                                                                             = null;
    private Operator\Reactions\ListForCommitComment|null $reactions👷ListForCommitComment                                                                                   = null;
    private Operator\Reactions\ListForCommitCommentListing|null $reactions👷ListForCommitCommentListing                                                                     = null;
    private Operator\Reactions\CreateForCommitComment|null $reactions👷CreateForCommitComment                                                                               = null;
    private Operator\Reactions\DeleteForCommitComment|null $reactions👷DeleteForCommitComment                                                                               = null;
    private Operator\Repos\ListCommits|null $repos👷ListCommits                                                                                                             = null;
    private Operator\Repos\ListCommitsListing|null $repos👷ListCommitsListing                                                                                               = null;
    private Operator\Repos\ListBranchesForHeadCommit|null $repos👷ListBranchesForHeadCommit                                                                                 = null;
    private Operator\Repos\ListCommentsForCommit|null $repos👷ListCommentsForCommit                                                                                         = null;
    private Operator\Repos\ListCommentsForCommitListing|null $repos👷ListCommentsForCommitListing                                                                           = null;
    private Operator\Repos\CreateCommitComment|null $repos👷CreateCommitComment                                                                                             = null;
    private Operator\Repos\ListPullRequestsAssociatedWithCommit|null $repos👷ListPullRequestsAssociatedWithCommit                                                           = null;
    private Operator\Repos\ListPullRequestsAssociatedWithCommitListing|null $repos👷ListPullRequestsAssociatedWithCommitListing                                             = null;
    private Operator\Repos\GetCommit|null $repos👷GetCommit                                                                                                                 = null;
    private Operator\Checks\ListForRef|null $checks👷ListForRef                                                                                                             = null;
    private Operator\Checks\ListSuitesForRef|null $checks👷ListSuitesForRef                                                                                                 = null;
    private Operator\Repos\GetCombinedStatusForRef|null $repos👷GetCombinedStatusForRef                                                                                     = null;
    private Operator\Repos\ListCommitStatusesForRef|null $repos👷ListCommitStatusesForRef                                                                                   = null;
    private Operator\Repos\ListCommitStatusesForRefListing|null $repos👷ListCommitStatusesForRefListing                                                                     = null;
    private Operator\Repos\GetCommunityProfileMetrics|null $repos👷GetCommunityProfileMetrics                                                                               = null;
    private Operator\Repos\CompareCommits|null $repos👷CompareCommits                                                                                                       = null;
    private Operator\Repos\GetContent|null $repos👷GetContent                                                                                                               = null;
    private Operator\Repos\CreateOrUpdateFileContents|null $repos👷CreateOrUpdateFileContents                                                                               = null;
    private Operator\Repos\DeleteFile|null $repos👷DeleteFile                                                                                                               = null;
    private Operator\Repos\ListContributors|null $repos👷ListContributors                                                                                                   = null;
    private Operator\Repos\ListContributorsListing|null $repos👷ListContributorsListing                                                                                     = null;
    private Operator\Dependabot\ListAlertsForRepo|null $dependabot👷ListAlertsForRepo                                                                                       = null;
    private Operator\Dependabot\ListAlertsForRepoListing|null $dependabot👷ListAlertsForRepoListing                                                                         = null;
    private Operator\Dependabot\GetAlert|null $dependabot👷GetAlert                                                                                                         = null;
    private Operator\Dependabot\UpdateAlert|null $dependabot👷UpdateAlert                                                                                                   = null;
    private Operator\Dependabot\ListRepoSecrets|null $dependabot👷ListRepoSecrets                                                                                           = null;
    private Operator\Dependabot\GetRepoPublicKey|null $dependabot👷GetRepoPublicKey                                                                                         = null;
    private Operator\Dependabot\GetRepoSecret|null $dependabot👷GetRepoSecret                                                                                               = null;
    private Operator\Dependabot\CreateOrUpdateRepoSecret|null $dependabot👷CreateOrUpdateRepoSecret                                                                         = null;
    private Operator\Dependabot\DeleteRepoSecret|null $dependabot👷DeleteRepoSecret                                                                                         = null;
    private Operator\DependencyGraph\DiffRange|null $dependencyGraph👷DiffRange                                                                                             = null;
    private Operator\DependencyGraph\ExportSbom|null $dependencyGraph👷ExportSbom                                                                                           = null;
    private Operator\DependencyGraph\CreateRepositorySnapshot|null $dependencyGraph👷CreateRepositorySnapshot                                                               = null;
    private Operator\Repos\ListDeployments|null $repos👷ListDeployments                                                                                                     = null;
    private Operator\Repos\ListDeploymentsListing|null $repos👷ListDeploymentsListing                                                                                       = null;
    private Operator\Repos\CreateDeployment|null $repos👷CreateDeployment                                                                                                   = null;
    private Operator\Repos\GetDeployment|null $repos👷GetDeployment                                                                                                         = null;
    private Operator\Repos\DeleteDeployment|null $repos👷DeleteDeployment                                                                                                   = null;
    private Operator\Repos\ListDeploymentStatuses|null $repos👷ListDeploymentStatuses                                                                                       = null;
    private Operator\Repos\ListDeploymentStatusesListing|null $repos👷ListDeploymentStatusesListing                                                                         = null;
    private Operator\Repos\CreateDeploymentStatus|null $repos👷CreateDeploymentStatus                                                                                       = null;
    private Operator\Repos\GetDeploymentStatus|null $repos👷GetDeploymentStatus                                                                                             = null;
    private Operator\Repos\CreateDispatchEvent|null $repos👷CreateDispatchEvent                                                                                             = null;
    private Operator\Repos\GetAllEnvironments|null $repos👷GetAllEnvironments                                                                                               = null;
    private Operator\Repos\GetEnvironment|null $repos👷GetEnvironment                                                                                                       = null;
    private Operator\Repos\CreateOrUpdateEnvironment|null $repos👷CreateOrUpdateEnvironment                                                                                 = null;
    private Operator\Repos\DeleteAnEnvironment|null $repos👷DeleteAnEnvironment                                                                                             = null;
    private Operator\Repos\ListDeploymentBranchPolicies|null $repos👷ListDeploymentBranchPolicies                                                                           = null;
    private Operator\Repos\CreateDeploymentBranchPolicy|null $repos👷CreateDeploymentBranchPolicy                                                                           = null;
    private Operator\Repos\GetDeploymentBranchPolicy|null $repos👷GetDeploymentBranchPolicy                                                                                 = null;
    private Operator\Repos\UpdateDeploymentBranchPolicy|null $repos👷UpdateDeploymentBranchPolicy                                                                           = null;
    private Operator\Repos\DeleteDeploymentBranchPolicy|null $repos👷DeleteDeploymentBranchPolicy                                                                           = null;
    private Operator\Repos\GetAllDeploymentProtectionRules|null $repos👷GetAllDeploymentProtectionRules                                                                     = null;
    private Operator\Repos\CreateDeploymentProtectionRule|null $repos👷CreateDeploymentProtectionRule                                                                       = null;
    private Operator\Repos\ListCustomDeploymentRuleIntegrations|null $repos👷ListCustomDeploymentRuleIntegrations                                                           = null;
    private Operator\Repos\GetCustomDeploymentProtectionRule|null $repos👷GetCustomDeploymentProtectionRule                                                                 = null;
    private Operator\Repos\DisableDeploymentProtectionRule|null $repos👷DisableDeploymentProtectionRule                                                                     = null;
    private Operator\Activity\ListRepoEvents|null $activity👷ListRepoEvents                                                                                                 = null;
    private Operator\Activity\ListRepoEventsListing|null $activity👷ListRepoEventsListing                                                                                   = null;
    private Operator\Repos\ListForks|null $repos👷ListForks                                                                                                                 = null;
    private Operator\Repos\ListForksListing|null $repos👷ListForksListing                                                                                                   = null;
    private Operator\Repos\CreateFork|null $repos👷CreateFork                                                                                                               = null;
    private Operator\Git\CreateBlob|null $git👷CreateBlob                                                                                                                   = null;
    private Operator\Git\GetBlob|null $git👷GetBlob                                                                                                                         = null;
    private Operator\Git\CreateCommit|null $git👷CreateCommit                                                                                                               = null;
    private Operator\Git\GetCommit|null $git👷GetCommit                                                                                                                     = null;
    private Operator\Git\ListMatchingRefs|null $git👷ListMatchingRefs                                                                                                       = null;
    private Operator\Git\GetRef|null $git👷GetRef                                                                                                                           = null;
    private Operator\Git\CreateRef|null $git👷CreateRef                                                                                                                     = null;
    private Operator\Git\DeleteRef|null $git👷DeleteRef                                                                                                                     = null;
    private Operator\Git\UpdateRef|null $git👷UpdateRef                                                                                                                     = null;
    private Operator\Git\CreateTag|null $git👷CreateTag                                                                                                                     = null;
    private Operator\Git\GetTag|null $git👷GetTag                                                                                                                           = null;
    private Operator\Git\CreateTree|null $git👷CreateTree                                                                                                                   = null;
    private Operator\Git\GetTree|null $git👷GetTree                                                                                                                         = null;
    private Operator\Repos\ListWebhooks|null $repos👷ListWebhooks                                                                                                           = null;
    private Operator\Repos\ListWebhooksListing|null $repos👷ListWebhooksListing                                                                                             = null;
    private Operator\Repos\CreateWebhook|null $repos👷CreateWebhook                                                                                                         = null;
    private Operator\Repos\GetWebhook|null $repos👷GetWebhook                                                                                                               = null;
    private Operator\Repos\DeleteWebhook|null $repos👷DeleteWebhook                                                                                                         = null;
    private Operator\Repos\UpdateWebhook|null $repos👷UpdateWebhook                                                                                                         = null;
    private Operator\Repos\GetWebhookConfigForRepo|null $repos👷GetWebhookConfigForRepo                                                                                     = null;
    private Operator\Repos\UpdateWebhookConfigForRepo|null $repos👷UpdateWebhookConfigForRepo                                                                               = null;
    private Operator\Repos\ListWebhookDeliveries|null $repos👷ListWebhookDeliveries                                                                                         = null;
    private Operator\Repos\GetWebhookDelivery|null $repos👷GetWebhookDelivery                                                                                               = null;
    private Operator\Repos\RedeliverWebhookDelivery|null $repos👷RedeliverWebhookDelivery                                                                                   = null;
    private Operator\Repos\PingWebhook|null $repos👷PingWebhook                                                                                                             = null;
    private Operator\Repos\TestPushWebhook|null $repos👷TestPushWebhook                                                                                                     = null;
    private Operator\Migrations\GetImportStatus|null $migrations👷GetImportStatus                                                                                           = null;
    private Operator\Migrations\StartImport|null $migrations👷StartImport                                                                                                   = null;
    private Operator\Migrations\CancelImport|null $migrations👷CancelImport                                                                                                 = null;
    private Operator\Migrations\UpdateImport|null $migrations👷UpdateImport                                                                                                 = null;
    private Operator\Migrations\GetCommitAuthors|null $migrations👷GetCommitAuthors                                                                                         = null;
    private Operator\Migrations\MapCommitAuthor|null $migrations👷MapCommitAuthor                                                                                           = null;
    private Operator\Migrations\GetLargeFiles|null $migrations👷GetLargeFiles                                                                                               = null;
    private Operator\Migrations\SetLfsPreference|null $migrations👷SetLfsPreference                                                                                         = null;
    private Operator\Apps\GetRepoInstallation|null $apps👷GetRepoInstallation                                                                                               = null;
    private Operator\Interactions\GetRestrictionsForRepo|null $interactions👷GetRestrictionsForRepo                                                                         = null;
    private Operator\Interactions\SetRestrictionsForRepo|null $interactions👷SetRestrictionsForRepo                                                                         = null;
    private Operator\Interactions\RemoveRestrictionsForRepo|null $interactions👷RemoveRestrictionsForRepo                                                                   = null;
    private Operator\Repos\ListInvitations|null $repos👷ListInvitations                                                                                                     = null;
    private Operator\Repos\ListInvitationsListing|null $repos👷ListInvitationsListing                                                                                       = null;
    private Operator\Repos\DeleteInvitation|null $repos👷DeleteInvitation                                                                                                   = null;
    private Operator\Repos\UpdateInvitation|null $repos👷UpdateInvitation                                                                                                   = null;
    private Operator\Issues\ListForRepo|null $issues👷ListForRepo                                                                                                           = null;
    private Operator\Issues\ListForRepoListing|null $issues👷ListForRepoListing                                                                                             = null;
    private Operator\Issues\Create|null $issues👷Create                                                                                                                     = null;
    private Operator\Issues\ListCommentsForRepo|null $issues👷ListCommentsForRepo                                                                                           = null;
    private Operator\Issues\ListCommentsForRepoListing|null $issues👷ListCommentsForRepoListing                                                                             = null;
    private Operator\Issues\GetComment|null $issues👷GetComment                                                                                                             = null;
    private Operator\Issues\DeleteComment|null $issues👷DeleteComment                                                                                                       = null;
    private Operator\Issues\UpdateComment|null $issues👷UpdateComment                                                                                                       = null;
    private Operator\Reactions\ListForIssueComment|null $reactions👷ListForIssueComment                                                                                     = null;
    private Operator\Reactions\ListForIssueCommentListing|null $reactions👷ListForIssueCommentListing                                                                       = null;
    private Operator\Reactions\CreateForIssueComment|null $reactions👷CreateForIssueComment                                                                                 = null;
    private Operator\Reactions\DeleteForIssueComment|null $reactions👷DeleteForIssueComment                                                                                 = null;
    private Operator\Issues\ListEventsForRepo|null $issues👷ListEventsForRepo                                                                                               = null;
    private Operator\Issues\ListEventsForRepoListing|null $issues👷ListEventsForRepoListing                                                                                 = null;
    private Operator\Issues\GetEvent|null $issues👷GetEvent                                                                                                                 = null;
    private Operator\Issues\Get|null $issues👷Get                                                                                                                           = null;
    private Operator\Issues\Update|null $issues👷Update                                                                                                                     = null;
    private Operator\Issues\AddAssignees|null $issues👷AddAssignees                                                                                                         = null;
    private Operator\Issues\RemoveAssignees|null $issues👷RemoveAssignees                                                                                                   = null;
    private Operator\Issues\CheckUserCanBeAssignedToIssue|null $issues👷CheckUserCanBeAssignedToIssue                                                                       = null;
    private Operator\Issues\ListComments|null $issues👷ListComments                                                                                                         = null;
    private Operator\Issues\ListCommentsListing|null $issues👷ListCommentsListing                                                                                           = null;
    private Operator\Issues\CreateComment|null $issues👷CreateComment                                                                                                       = null;
    private Operator\Issues\ListEvents|null $issues👷ListEvents                                                                                                             = null;
    private Operator\Issues\ListEventsListing|null $issues👷ListEventsListing                                                                                               = null;
    private Operator\Issues\ListLabelsOnIssue|null $issues👷ListLabelsOnIssue                                                                                               = null;
    private Operator\Issues\ListLabelsOnIssueListing|null $issues👷ListLabelsOnIssueListing                                                                                 = null;
    private Operator\Issues\SetLabels|null $issues👷SetLabels                                                                                                               = null;
    private Operator\Issues\AddLabels|null $issues👷AddLabels                                                                                                               = null;
    private Operator\Issues\RemoveAllLabels|null $issues👷RemoveAllLabels                                                                                                   = null;
    private Operator\Issues\RemoveLabel|null $issues👷RemoveLabel                                                                                                           = null;
    private Operator\Issues\Lock|null $issues👷Lock                                                                                                                         = null;
    private Operator\Issues\Unlock|null $issues👷Unlock                                                                                                                     = null;
    private Operator\Reactions\ListForIssue|null $reactions👷ListForIssue                                                                                                   = null;
    private Operator\Reactions\ListForIssueListing|null $reactions👷ListForIssueListing                                                                                     = null;
    private Operator\Reactions\CreateForIssue|null $reactions👷CreateForIssue                                                                                               = null;
    private Operator\Reactions\DeleteForIssue|null $reactions👷DeleteForIssue                                                                                               = null;
    private Operator\Issues\ListEventsForTimeline|null $issues👷ListEventsForTimeline                                                                                       = null;
    private Operator\Issues\ListEventsForTimelineListing|null $issues👷ListEventsForTimelineListing                                                                         = null;
    private Operator\Repos\ListDeployKeys|null $repos👷ListDeployKeys                                                                                                       = null;
    private Operator\Repos\ListDeployKeysListing|null $repos👷ListDeployKeysListing                                                                                         = null;
    private Operator\Repos\CreateDeployKey|null $repos👷CreateDeployKey                                                                                                     = null;
    private Operator\Repos\GetDeployKey|null $repos👷GetDeployKey                                                                                                           = null;
    private Operator\Repos\DeleteDeployKey|null $repos👷DeleteDeployKey                                                                                                     = null;
    private Operator\Issues\ListLabelsForRepo|null $issues👷ListLabelsForRepo                                                                                               = null;
    private Operator\Issues\ListLabelsForRepoListing|null $issues👷ListLabelsForRepoListing                                                                                 = null;
    private Operator\Issues\CreateLabel|null $issues👷CreateLabel                                                                                                           = null;
    private Operator\Issues\GetLabel|null $issues👷GetLabel                                                                                                                 = null;
    private Operator\Issues\DeleteLabel|null $issues👷DeleteLabel                                                                                                           = null;
    private Operator\Issues\UpdateLabel|null $issues👷UpdateLabel                                                                                                           = null;
    private Operator\Repos\ListLanguages|null $repos👷ListLanguages                                                                                                         = null;
    private Operator\Licenses\GetForRepo|null $licenses👷GetForRepo                                                                                                         = null;
    private Operator\Repos\MergeUpstream|null $repos👷MergeUpstream                                                                                                         = null;
    private Operator\Repos\Merge|null $repos👷Merge                                                                                                                         = null;
    private Operator\Issues\ListMilestones|null $issues👷ListMilestones                                                                                                     = null;
    private Operator\Issues\ListMilestonesListing|null $issues👷ListMilestonesListing                                                                                       = null;
    private Operator\Issues\CreateMilestone|null $issues👷CreateMilestone                                                                                                   = null;
    private Operator\Issues\GetMilestone|null $issues👷GetMilestone                                                                                                         = null;
    private Operator\Issues\DeleteMilestone|null $issues👷DeleteMilestone                                                                                                   = null;
    private Operator\Issues\UpdateMilestone|null $issues👷UpdateMilestone                                                                                                   = null;
    private Operator\Issues\ListLabelsForMilestone|null $issues👷ListLabelsForMilestone                                                                                     = null;
    private Operator\Issues\ListLabelsForMilestoneListing|null $issues👷ListLabelsForMilestoneListing                                                                       = null;
    private Operator\Activity\ListRepoNotificationsForAuthenticatedUser|null $activity👷ListRepoNotificationsForAuthenticatedUser                                           = null;
    private Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing|null $activity👷ListRepoNotificationsForAuthenticatedUserListing                             = null;
    private Operator\Activity\MarkRepoNotificationsAsRead|null $activity👷MarkRepoNotificationsAsRead                                                                       = null;
    private Operator\Repos\GetPages|null $repos👷GetPages                                                                                                                   = null;
    private Operator\Repos\UpdateInformationAboutPagesSite|null $repos👷UpdateInformationAboutPagesSite                                                                     = null;
    private Operator\Repos\CreatePagesSite|null $repos👷CreatePagesSite                                                                                                     = null;
    private Operator\Repos\DeletePagesSite|null $repos👷DeletePagesSite                                                                                                     = null;
    private Operator\Repos\ListPagesBuilds|null $repos👷ListPagesBuilds                                                                                                     = null;
    private Operator\Repos\ListPagesBuildsListing|null $repos👷ListPagesBuildsListing                                                                                       = null;
    private Operator\Repos\RequestPagesBuild|null $repos👷RequestPagesBuild                                                                                                 = null;
    private Operator\Repos\GetLatestPagesBuild|null $repos👷GetLatestPagesBuild                                                                                             = null;
    private Operator\Repos\GetPagesBuild|null $repos👷GetPagesBuild                                                                                                         = null;
    private Operator\Repos\CreatePagesDeployment|null $repos👷CreatePagesDeployment                                                                                         = null;
    private Operator\Repos\GetPagesHealthCheck|null $repos👷GetPagesHealthCheck                                                                                             = null;
    private Operator\Repos\EnablePrivateVulnerabilityReporting|null $repos👷EnablePrivateVulnerabilityReporting                                                             = null;
    private Operator\Repos\DisablePrivateVulnerabilityReporting|null $repos👷DisablePrivateVulnerabilityReporting                                                           = null;
    private Operator\Projects\ListForRepo|null $projects👷ListForRepo                                                                                                       = null;
    private Operator\Projects\ListForRepoListing|null $projects👷ListForRepoListing                                                                                         = null;
    private Operator\Projects\CreateForRepo|null $projects👷CreateForRepo                                                                                                   = null;
    private Operator\Pulls\List_|null $pulls👷List_                                                                                                                         = null;
    private Operator\Pulls\ListListing|null $pulls👷ListListing                                                                                                             = null;
    private Operator\Pulls\Create|null $pulls👷Create                                                                                                                       = null;
    private Operator\Pulls\ListReviewCommentsForRepo|null $pulls👷ListReviewCommentsForRepo                                                                                 = null;
    private Operator\Pulls\ListReviewCommentsForRepoListing|null $pulls👷ListReviewCommentsForRepoListing                                                                   = null;
    private Operator\Pulls\GetReviewComment|null $pulls👷GetReviewComment                                                                                                   = null;
    private Operator\Pulls\DeleteReviewComment|null $pulls👷DeleteReviewComment                                                                                             = null;
    private Operator\Pulls\UpdateReviewComment|null $pulls👷UpdateReviewComment                                                                                             = null;
    private Operator\Reactions\ListForPullRequestReviewComment|null $reactions👷ListForPullRequestReviewComment                                                             = null;
    private Operator\Reactions\ListForPullRequestReviewCommentListing|null $reactions👷ListForPullRequestReviewCommentListing                                               = null;
    private Operator\Reactions\CreateForPullRequestReviewComment|null $reactions👷CreateForPullRequestReviewComment                                                         = null;
    private Operator\Reactions\DeleteForPullRequestComment|null $reactions👷DeleteForPullRequestComment                                                                     = null;
    private Operator\Pulls\Get|null $pulls👷Get                                                                                                                             = null;
    private Operator\Pulls\Update|null $pulls👷Update                                                                                                                       = null;
    private Operator\Codespaces\CreateWithPrForAuthenticatedUser|null $codespaces👷CreateWithPrForAuthenticatedUser                                                         = null;
    private Operator\Pulls\ListReviewComments|null $pulls👷ListReviewComments                                                                                               = null;
    private Operator\Pulls\ListReviewCommentsListing|null $pulls👷ListReviewCommentsListing                                                                                 = null;
    private Operator\Pulls\CreateReviewComment|null $pulls👷CreateReviewComment                                                                                             = null;
    private Operator\Pulls\CreateReplyForReviewComment|null $pulls👷CreateReplyForReviewComment                                                                             = null;
    private Operator\Pulls\ListCommits|null $pulls👷ListCommits                                                                                                             = null;
    private Operator\Pulls\ListCommitsListing|null $pulls👷ListCommitsListing                                                                                               = null;
    private Operator\Pulls\ListFiles|null $pulls👷ListFiles                                                                                                                 = null;
    private Operator\Pulls\ListFilesListing|null $pulls👷ListFilesListing                                                                                                   = null;
    private Operator\Pulls\CheckIfMerged|null $pulls👷CheckIfMerged                                                                                                         = null;
    private Operator\Pulls\Merge|null $pulls👷Merge                                                                                                                         = null;
    private Operator\Pulls\ListRequestedReviewers|null $pulls👷ListRequestedReviewers                                                                                       = null;
    private Operator\Pulls\RequestReviewers|null $pulls👷RequestReviewers                                                                                                   = null;
    private Operator\Pulls\RemoveRequestedReviewers|null $pulls👷RemoveRequestedReviewers                                                                                   = null;
    private Operator\Pulls\ListReviews|null $pulls👷ListReviews                                                                                                             = null;
    private Operator\Pulls\ListReviewsListing|null $pulls👷ListReviewsListing                                                                                               = null;
    private Operator\Pulls\CreateReview|null $pulls👷CreateReview                                                                                                           = null;
    private Operator\Pulls\GetReview|null $pulls👷GetReview                                                                                                                 = null;
    private Operator\Pulls\UpdateReview|null $pulls👷UpdateReview                                                                                                           = null;
    private Operator\Pulls\DeletePendingReview|null $pulls👷DeletePendingReview                                                                                             = null;
    private Operator\Pulls\ListCommentsForReview|null $pulls👷ListCommentsForReview                                                                                         = null;
    private Operator\Pulls\ListCommentsForReviewListing|null $pulls👷ListCommentsForReviewListing                                                                           = null;
    private Operator\Pulls\DismissReview|null $pulls👷DismissReview                                                                                                         = null;
    private Operator\Pulls\SubmitReview|null $pulls👷SubmitReview                                                                                                           = null;
    private Operator\Pulls\UpdateBranch|null $pulls👷UpdateBranch                                                                                                           = null;
    private Operator\Repos\GetReadme|null $repos👷GetReadme                                                                                                                 = null;
    private Operator\Repos\GetReadmeInDirectory|null $repos👷GetReadmeInDirectory                                                                                           = null;
    private Operator\Repos\ListReleases|null $repos👷ListReleases                                                                                                           = null;
    private Operator\Repos\ListReleasesListing|null $repos👷ListReleasesListing                                                                                             = null;
    private Operator\Repos\CreateRelease|null $repos👷CreateRelease                                                                                                         = null;
    private Operator\Repos\GetReleaseAsset|null $repos👷GetReleaseAsset                                                                                                     = null;
    private Operator\Repos\DeleteReleaseAsset|null $repos👷DeleteReleaseAsset                                                                                               = null;
    private Operator\Repos\UpdateReleaseAsset|null $repos👷UpdateReleaseAsset                                                                                               = null;
    private Operator\Repos\GenerateReleaseNotes|null $repos👷GenerateReleaseNotes                                                                                           = null;
    private Operator\Repos\GetLatestRelease|null $repos👷GetLatestRelease                                                                                                   = null;
    private Operator\Repos\GetReleaseByTag|null $repos👷GetReleaseByTag                                                                                                     = null;
    private Operator\Repos\GetRelease|null $repos👷GetRelease                                                                                                               = null;
    private Operator\Repos\DeleteRelease|null $repos👷DeleteRelease                                                                                                         = null;
    private Operator\Repos\UpdateRelease|null $repos👷UpdateRelease                                                                                                         = null;
    private Operator\Repos\ListReleaseAssets|null $repos👷ListReleaseAssets                                                                                                 = null;
    private Operator\Repos\ListReleaseAssetsListing|null $repos👷ListReleaseAssetsListing                                                                                   = null;
    private Operator\Repos\UploadReleaseAsset|null $repos👷UploadReleaseAsset                                                                                               = null;
    private Operator\Reactions\ListForRelease|null $reactions👷ListForRelease                                                                                               = null;
    private Operator\Reactions\ListForReleaseListing|null $reactions👷ListForReleaseListing                                                                                 = null;
    private Operator\Reactions\CreateForRelease|null $reactions👷CreateForRelease                                                                                           = null;
    private Operator\Reactions\DeleteForRelease|null $reactions👷DeleteForRelease                                                                                           = null;
    private Operator\Repos\GetBranchRules|null $repos👷GetBranchRules                                                                                                       = null;
    private Operator\Repos\GetBranchRulesListing|null $repos👷GetBranchRulesListing                                                                                         = null;
    private Operator\Repos\GetRepoRulesets|null $repos👷GetRepoRulesets                                                                                                     = null;
    private Operator\Repos\GetRepoRulesetsListing|null $repos👷GetRepoRulesetsListing                                                                                       = null;
    private Operator\Repos\CreateRepoRuleset|null $repos👷CreateRepoRuleset                                                                                                 = null;
    private Operator\Repos\GetRepoRuleset|null $repos👷GetRepoRuleset                                                                                                       = null;
    private Operator\Repos\UpdateRepoRuleset|null $repos👷UpdateRepoRuleset                                                                                                 = null;
    private Operator\Repos\DeleteRepoRuleset|null $repos👷DeleteRepoRuleset                                                                                                 = null;
    private Operator\SecretScanning\ListAlertsForRepo|null $secretScanning👷ListAlertsForRepo                                                                               = null;
    private Operator\SecretScanning\ListAlertsForRepoListing|null $secretScanning👷ListAlertsForRepoListing                                                                 = null;
    private Operator\SecretScanning\GetAlert|null $secretScanning👷GetAlert                                                                                                 = null;
    private Operator\SecretScanning\UpdateAlert|null $secretScanning👷UpdateAlert                                                                                           = null;
    private Operator\SecretScanning\ListLocationsForAlert|null $secretScanning👷ListLocationsForAlert                                                                       = null;
    private Operator\SecretScanning\ListLocationsForAlertListing|null $secretScanning👷ListLocationsForAlertListing                                                         = null;
    private Operator\SecurityAdvisories\ListRepositoryAdvisories|null $securityAdvisories👷ListRepositoryAdvisories                                                         = null;
    private Operator\SecurityAdvisories\CreateRepositoryAdvisory|null $securityAdvisories👷CreateRepositoryAdvisory                                                         = null;
    private Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport|null $securityAdvisories👷CreatePrivateVulnerabilityReport                                         = null;
    private Operator\SecurityAdvisories\GetRepositoryAdvisory|null $securityAdvisories👷GetRepositoryAdvisory                                                               = null;
    private Operator\SecurityAdvisories\UpdateRepositoryAdvisory|null $securityAdvisories👷UpdateRepositoryAdvisory                                                         = null;
    private Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest|null $securityAdvisories👷CreateRepositoryAdvisoryCveRequest                                     = null;
    private Operator\Activity\ListStargazersForRepo|null $activity👷ListStargazersForRepo                                                                                   = null;
    private Operator\Repos\GetCodeFrequencyStats|null $repos👷GetCodeFrequencyStats                                                                                         = null;
    private Operator\Repos\GetCommitActivityStats|null $repos👷GetCommitActivityStats                                                                                       = null;
    private Operator\Repos\GetContributorsStats|null $repos👷GetContributorsStats                                                                                           = null;
    private Operator\Repos\GetParticipationStats|null $repos👷GetParticipationStats                                                                                         = null;
    private Operator\Repos\GetPunchCardStats|null $repos👷GetPunchCardStats                                                                                                 = null;
    private Operator\Repos\CreateCommitStatus|null $repos👷CreateCommitStatus                                                                                               = null;
    private Operator\Activity\ListWatchersForRepo|null $activity👷ListWatchersForRepo                                                                                       = null;
    private Operator\Activity\ListWatchersForRepoListing|null $activity👷ListWatchersForRepoListing                                                                         = null;
    private Operator\Activity\GetRepoSubscription|null $activity👷GetRepoSubscription                                                                                       = null;
    private Operator\Activity\SetRepoSubscription|null $activity👷SetRepoSubscription                                                                                       = null;
    private Operator\Activity\DeleteRepoSubscription|null $activity👷DeleteRepoSubscription                                                                                 = null;
    private Operator\Repos\ListTags|null $repos👷ListTags                                                                                                                   = null;
    private Operator\Repos\ListTagsListing|null $repos👷ListTagsListing                                                                                                     = null;
    private Operator\Repos\ListTagProtection|null $repos👷ListTagProtection                                                                                                 = null;
    private Operator\Repos\CreateTagProtection|null $repos👷CreateTagProtection                                                                                             = null;
    private Operator\Repos\DeleteTagProtection|null $repos👷DeleteTagProtection                                                                                             = null;
    private Operator\Repos\DownloadTarballArchive|null $repos👷DownloadTarballArchive                                                                                       = null;
    private Operator\Repos\DownloadTarballArchiveStreaming|null $repos👷DownloadTarballArchiveStreaming                                                                     = null;
    private Operator\Repos\ListTeams|null $repos👷ListTeams                                                                                                                 = null;
    private Operator\Repos\ListTeamsListing|null $repos👷ListTeamsListing                                                                                                   = null;
    private Operator\Repos\GetAllTopics|null $repos👷GetAllTopics                                                                                                           = null;
    private Operator\Repos\ReplaceAllTopics|null $repos👷ReplaceAllTopics                                                                                                   = null;
    private Operator\Repos\GetClones|null $repos👷GetClones                                                                                                                 = null;
    private Operator\Repos\GetTopPaths|null $repos👷GetTopPaths                                                                                                             = null;
    private Operator\Repos\GetTopReferrers|null $repos👷GetTopReferrers                                                                                                     = null;
    private Operator\Repos\GetViews|null $repos👷GetViews                                                                                                                   = null;
    private Operator\Repos\Transfer|null $repos👷Transfer                                                                                                                   = null;
    private Operator\Repos\CheckVulnerabilityAlerts|null $repos👷CheckVulnerabilityAlerts                                                                                   = null;
    private Operator\Repos\EnableVulnerabilityAlerts|null $repos👷EnableVulnerabilityAlerts                                                                                 = null;
    private Operator\Repos\DisableVulnerabilityAlerts|null $repos👷DisableVulnerabilityAlerts                                                                               = null;
    private Operator\Repos\DownloadZipballArchive|null $repos👷DownloadZipballArchive                                                                                       = null;
    private Operator\Repos\DownloadZipballArchiveStreaming|null $repos👷DownloadZipballArchiveStreaming                                                                     = null;
    private Operator\Repos\CreateUsingTemplate|null $repos👷CreateUsingTemplate                                                                                             = null;
    private Operator\Repos\ListPublic|null $repos👷ListPublic                                                                                                               = null;
    private Operator\Actions\ListEnvironmentSecrets|null $actions👷ListEnvironmentSecrets                                                                                   = null;
    private Operator\Actions\GetEnvironmentPublicKey|null $actions👷GetEnvironmentPublicKey                                                                                 = null;
    private Operator\Actions\GetEnvironmentSecret|null $actions👷GetEnvironmentSecret                                                                                       = null;
    private Operator\Actions\CreateOrUpdateEnvironmentSecret|null $actions👷CreateOrUpdateEnvironmentSecret                                                                 = null;
    private Operator\Actions\DeleteEnvironmentSecret|null $actions👷DeleteEnvironmentSecret                                                                                 = null;
    private Operator\Actions\ListEnvironmentVariables|null $actions👷ListEnvironmentVariables                                                                               = null;
    private Operator\Actions\CreateEnvironmentVariable|null $actions👷CreateEnvironmentVariable                                                                             = null;
    private Operator\Actions\GetEnvironmentVariable|null $actions👷GetEnvironmentVariable                                                                                   = null;
    private Operator\Actions\DeleteEnvironmentVariable|null $actions👷DeleteEnvironmentVariable                                                                             = null;
    private Operator\Actions\UpdateEnvironmentVariable|null $actions👷UpdateEnvironmentVariable                                                                             = null;
    private Operator\Search\Code|null $search👷Code                                                                                                                         = null;
    private Operator\Search\Commits|null $search👷Commits                                                                                                                   = null;
    private Operator\Search\IssuesAndPullRequests|null $search👷IssuesAndPullRequests                                                                                       = null;
    private Operator\Search\Labels|null $search👷Labels                                                                                                                     = null;
    private Operator\Search\Repos|null $search👷Repos                                                                                                                       = null;
    private Operator\Search\Topics|null $search👷Topics                                                                                                                     = null;
    private Operator\Search\Users|null $search👷Users                                                                                                                       = null;
    private Operator\Teams\GetLegacy|null $teams👷GetLegacy                                                                                                                 = null;
    private Operator\Teams\DeleteLegacy|null $teams👷DeleteLegacy                                                                                                           = null;
    private Operator\Teams\UpdateLegacy|null $teams👷UpdateLegacy                                                                                                           = null;
    private Operator\Teams\ListDiscussionsLegacy|null $teams👷ListDiscussionsLegacy                                                                                         = null;
    private Operator\Teams\ListDiscussionsLegacyListing|null $teams👷ListDiscussionsLegacyListing                                                                           = null;
    private Operator\Teams\CreateDiscussionLegacy|null $teams👷CreateDiscussionLegacy                                                                                       = null;
    private Operator\Teams\GetDiscussionLegacy|null $teams👷GetDiscussionLegacy                                                                                             = null;
    private Operator\Teams\DeleteDiscussionLegacy|null $teams👷DeleteDiscussionLegacy                                                                                       = null;
    private Operator\Teams\UpdateDiscussionLegacy|null $teams👷UpdateDiscussionLegacy                                                                                       = null;
    private Operator\Teams\ListDiscussionCommentsLegacy|null $teams👷ListDiscussionCommentsLegacy                                                                           = null;
    private Operator\Teams\ListDiscussionCommentsLegacyListing|null $teams👷ListDiscussionCommentsLegacyListing                                                             = null;
    private Operator\Teams\CreateDiscussionCommentLegacy|null $teams👷CreateDiscussionCommentLegacy                                                                         = null;
    private Operator\Teams\GetDiscussionCommentLegacy|null $teams👷GetDiscussionCommentLegacy                                                                               = null;
    private Operator\Teams\DeleteDiscussionCommentLegacy|null $teams👷DeleteDiscussionCommentLegacy                                                                         = null;
    private Operator\Teams\UpdateDiscussionCommentLegacy|null $teams👷UpdateDiscussionCommentLegacy                                                                         = null;
    private Operator\Reactions\ListForTeamDiscussionCommentLegacy|null $reactions👷ListForTeamDiscussionCommentLegacy                                                       = null;
    private Operator\Reactions\ListForTeamDiscussionCommentLegacyListing|null $reactions👷ListForTeamDiscussionCommentLegacyListing                                         = null;
    private Operator\Reactions\CreateForTeamDiscussionCommentLegacy|null $reactions👷CreateForTeamDiscussionCommentLegacy                                                   = null;
    private Operator\Reactions\ListForTeamDiscussionLegacy|null $reactions👷ListForTeamDiscussionLegacy                                                                     = null;
    private Operator\Reactions\ListForTeamDiscussionLegacyListing|null $reactions👷ListForTeamDiscussionLegacyListing                                                       = null;
    private Operator\Reactions\CreateForTeamDiscussionLegacy|null $reactions👷CreateForTeamDiscussionLegacy                                                                 = null;
    private Operator\Teams\ListPendingInvitationsLegacy|null $teams👷ListPendingInvitationsLegacy                                                                           = null;
    private Operator\Teams\ListPendingInvitationsLegacyListing|null $teams👷ListPendingInvitationsLegacyListing                                                             = null;
    private Operator\Teams\ListMembersLegacy|null $teams👷ListMembersLegacy                                                                                                 = null;
    private Operator\Teams\ListMembersLegacyListing|null $teams👷ListMembersLegacyListing                                                                                   = null;
    private Operator\Teams\GetMemberLegacy|null $teams👷GetMemberLegacy                                                                                                     = null;
    private Operator\Teams\AddMemberLegacy|null $teams👷AddMemberLegacy                                                                                                     = null;
    private Operator\Teams\RemoveMemberLegacy|null $teams👷RemoveMemberLegacy                                                                                               = null;
    private Operator\Teams\GetMembershipForUserLegacy|null $teams👷GetMembershipForUserLegacy                                                                               = null;
    private Operator\Teams\AddOrUpdateMembershipForUserLegacy|null $teams👷AddOrUpdateMembershipForUserLegacy                                                               = null;
    private Operator\Teams\RemoveMembershipForUserLegacy|null $teams👷RemoveMembershipForUserLegacy                                                                         = null;
    private Operator\Teams\ListProjectsLegacy|null $teams👷ListProjectsLegacy                                                                                               = null;
    private Operator\Teams\ListProjectsLegacyListing|null $teams👷ListProjectsLegacyListing                                                                                 = null;
    private Operator\Teams\CheckPermissionsForProjectLegacy|null $teams👷CheckPermissionsForProjectLegacy                                                                   = null;
    private Operator\Teams\AddOrUpdateProjectPermissionsLegacy|null $teams👷AddOrUpdateProjectPermissionsLegacy                                                             = null;
    private Operator\Teams\RemoveProjectLegacy|null $teams👷RemoveProjectLegacy                                                                                             = null;
    private Operator\Teams\ListReposLegacy|null $teams👷ListReposLegacy                                                                                                     = null;
    private Operator\Teams\ListReposLegacyListing|null $teams👷ListReposLegacyListing                                                                                       = null;
    private Operator\Teams\CheckPermissionsForRepoLegacy|null $teams👷CheckPermissionsForRepoLegacy                                                                         = null;
    private Operator\Teams\AddOrUpdateRepoPermissionsLegacy|null $teams👷AddOrUpdateRepoPermissionsLegacy                                                                   = null;
    private Operator\Teams\RemoveRepoLegacy|null $teams👷RemoveRepoLegacy                                                                                                   = null;
    private Operator\Teams\ListChildLegacy|null $teams👷ListChildLegacy                                                                                                     = null;
    private Operator\Teams\ListChildLegacyListing|null $teams👷ListChildLegacyListing                                                                                       = null;
    private Operator\Users\GetAuthenticated|null $users👷GetAuthenticated                                                                                                   = null;
    private Operator\Users\UpdateAuthenticated|null $users👷UpdateAuthenticated                                                                                             = null;
    private Operator\Users\ListBlockedByAuthenticatedUser|null $users👷ListBlockedByAuthenticatedUser                                                                       = null;
    private Operator\Users\ListBlockedByAuthenticatedUserListing|null $users👷ListBlockedByAuthenticatedUserListing                                                         = null;
    private Operator\Users\CheckBlocked|null $users👷CheckBlocked                                                                                                           = null;
    private Operator\Users\Block|null $users👷Block                                                                                                                         = null;
    private Operator\Users\Unblock|null $users👷Unblock                                                                                                                     = null;
    private Operator\Codespaces\ListForAuthenticatedUser|null $codespaces👷ListForAuthenticatedUser                                                                         = null;
    private Operator\Codespaces\CreateForAuthenticatedUser|null $codespaces👷CreateForAuthenticatedUser                                                                     = null;
    private Operator\Codespaces\ListSecretsForAuthenticatedUser|null $codespaces👷ListSecretsForAuthenticatedUser                                                           = null;
    private Operator\Codespaces\GetPublicKeyForAuthenticatedUser|null $codespaces👷GetPublicKeyForAuthenticatedUser                                                         = null;
    private Operator\Codespaces\GetSecretForAuthenticatedUser|null $codespaces👷GetSecretForAuthenticatedUser                                                               = null;
    private Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser|null $codespaces👷CreateOrUpdateSecretForAuthenticatedUser                                         = null;
    private Operator\Codespaces\DeleteSecretForAuthenticatedUser|null $codespaces👷DeleteSecretForAuthenticatedUser                                                         = null;
    private Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser|null $codespaces👷ListRepositoriesForSecretForAuthenticatedUser                               = null;
    private Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser|null $codespaces👷SetRepositoriesForSecretForAuthenticatedUser                                 = null;
    private Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser|null $codespaces👷AddRepositoryForSecretForAuthenticatedUser                                     = null;
    private Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser|null $codespaces👷RemoveRepositoryForSecretForAuthenticatedUser                               = null;
    private Operator\Codespaces\GetForAuthenticatedUser|null $codespaces👷GetForAuthenticatedUser                                                                           = null;
    private Operator\Codespaces\DeleteForAuthenticatedUser|null $codespaces👷DeleteForAuthenticatedUser                                                                     = null;
    private Operator\Codespaces\UpdateForAuthenticatedUser|null $codespaces👷UpdateForAuthenticatedUser                                                                     = null;
    private Operator\Codespaces\ExportForAuthenticatedUser|null $codespaces👷ExportForAuthenticatedUser                                                                     = null;
    private Operator\Codespaces\GetExportDetailsForAuthenticatedUser|null $codespaces👷GetExportDetailsForAuthenticatedUser                                                 = null;
    private Operator\Codespaces\CodespaceMachinesForAuthenticatedUser|null $codespaces👷CodespaceMachinesForAuthenticatedUser                                               = null;
    private Operator\Codespaces\PublishForAuthenticatedUser|null $codespaces👷PublishForAuthenticatedUser                                                                   = null;
    private Operator\Codespaces\StartForAuthenticatedUser|null $codespaces👷StartForAuthenticatedUser                                                                       = null;
    private Operator\Codespaces\StopForAuthenticatedUser|null $codespaces👷StopForAuthenticatedUser                                                                         = null;
    private Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser|null $packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser         = null;
    private Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser|null $users👷SetPrimaryEmailVisibilityForAuthenticatedUser                                         = null;
    private Operator\Users\ListEmailsForAuthenticatedUser|null $users👷ListEmailsForAuthenticatedUser                                                                       = null;
    private Operator\Users\ListEmailsForAuthenticatedUserListing|null $users👷ListEmailsForAuthenticatedUserListing                                                         = null;
    private Operator\Users\AddEmailForAuthenticatedUser|null $users👷AddEmailForAuthenticatedUser                                                                           = null;
    private Operator\Users\DeleteEmailForAuthenticatedUser|null $users👷DeleteEmailForAuthenticatedUser                                                                     = null;
    private Operator\Users\ListFollowersForAuthenticatedUser|null $users👷ListFollowersForAuthenticatedUser                                                                 = null;
    private Operator\Users\ListFollowersForAuthenticatedUserListing|null $users👷ListFollowersForAuthenticatedUserListing                                                   = null;
    private Operator\Users\ListFollowedByAuthenticatedUser|null $users👷ListFollowedByAuthenticatedUser                                                                     = null;
    private Operator\Users\ListFollowedByAuthenticatedUserListing|null $users👷ListFollowedByAuthenticatedUserListing                                                       = null;
    private Operator\Users\CheckPersonIsFollowedByAuthenticated|null $users👷CheckPersonIsFollowedByAuthenticated                                                           = null;
    private Operator\Users\Follow|null $users👷Follow                                                                                                                       = null;
    private Operator\Users\Unfollow|null $users👷Unfollow                                                                                                                   = null;
    private Operator\Users\ListGpgKeysForAuthenticatedUser|null $users👷ListGpgKeysForAuthenticatedUser                                                                     = null;
    private Operator\Users\ListGpgKeysForAuthenticatedUserListing|null $users👷ListGpgKeysForAuthenticatedUserListing                                                       = null;
    private Operator\Users\CreateGpgKeyForAuthenticatedUser|null $users👷CreateGpgKeyForAuthenticatedUser                                                                   = null;
    private Operator\Users\GetGpgKeyForAuthenticatedUser|null $users👷GetGpgKeyForAuthenticatedUser                                                                         = null;
    private Operator\Users\DeleteGpgKeyForAuthenticatedUser|null $users👷DeleteGpgKeyForAuthenticatedUser                                                                   = null;
    private Operator\Apps\ListInstallationsForAuthenticatedUser|null $apps👷ListInstallationsForAuthenticatedUser                                                           = null;
    private Operator\Apps\ListInstallationReposForAuthenticatedUser|null $apps👷ListInstallationReposForAuthenticatedUser                                                   = null;
    private Operator\Apps\AddRepoToInstallationForAuthenticatedUser|null $apps👷AddRepoToInstallationForAuthenticatedUser                                                   = null;
    private Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser|null $apps👷RemoveRepoFromInstallationForAuthenticatedUser                                         = null;
    private Operator\Interactions\GetRestrictionsForAuthenticatedUser|null $interactions👷GetRestrictionsForAuthenticatedUser                                               = null;
    private Operator\Interactions\SetRestrictionsForAuthenticatedUser|null $interactions👷SetRestrictionsForAuthenticatedUser                                               = null;
    private Operator\Interactions\RemoveRestrictionsForAuthenticatedUser|null $interactions👷RemoveRestrictionsForAuthenticatedUser                                         = null;
    private Operator\Issues\ListForAuthenticatedUser|null $issues👷ListForAuthenticatedUser                                                                                 = null;
    private Operator\Issues\ListForAuthenticatedUserListing|null $issues👷ListForAuthenticatedUserListing                                                                   = null;
    private Operator\Users\ListPublicSshKeysForAuthenticatedUser|null $users👷ListPublicSshKeysForAuthenticatedUser                                                         = null;
    private Operator\Users\ListPublicSshKeysForAuthenticatedUserListing|null $users👷ListPublicSshKeysForAuthenticatedUserListing                                           = null;
    private Operator\Users\CreatePublicSshKeyForAuthenticatedUser|null $users👷CreatePublicSshKeyForAuthenticatedUser                                                       = null;
    private Operator\Users\GetPublicSshKeyForAuthenticatedUser|null $users👷GetPublicSshKeyForAuthenticatedUser                                                             = null;
    private Operator\Users\DeletePublicSshKeyForAuthenticatedUser|null $users👷DeletePublicSshKeyForAuthenticatedUser                                                       = null;
    private Operator\Apps\ListSubscriptionsForAuthenticatedUser|null $apps👷ListSubscriptionsForAuthenticatedUser                                                           = null;
    private Operator\Apps\ListSubscriptionsForAuthenticatedUserListing|null $apps👷ListSubscriptionsForAuthenticatedUserListing                                             = null;
    private Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed|null $apps👷ListSubscriptionsForAuthenticatedUserStubbed                                             = null;
    private Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing|null $apps👷ListSubscriptionsForAuthenticatedUserStubbedListing                               = null;
    private Operator\Orgs\ListMembershipsForAuthenticatedUser|null $orgs👷ListMembershipsForAuthenticatedUser                                                               = null;
    private Operator\Orgs\ListMembershipsForAuthenticatedUserListing|null $orgs👷ListMembershipsForAuthenticatedUserListing                                                 = null;
    private Operator\Orgs\GetMembershipForAuthenticatedUser|null $orgs👷GetMembershipForAuthenticatedUser                                                                   = null;
    private Operator\Orgs\UpdateMembershipForAuthenticatedUser|null $orgs👷UpdateMembershipForAuthenticatedUser                                                             = null;
    private Operator\Migrations\ListForAuthenticatedUser|null $migrations👷ListForAuthenticatedUser                                                                         = null;
    private Operator\Migrations\ListForAuthenticatedUserListing|null $migrations👷ListForAuthenticatedUserListing                                                           = null;
    private Operator\Migrations\StartForAuthenticatedUser|null $migrations👷StartForAuthenticatedUser                                                                       = null;
    private Operator\Migrations\GetStatusForAuthenticatedUser|null $migrations👷GetStatusForAuthenticatedUser                                                               = null;
    private Operator\Migrations\GetArchiveForAuthenticatedUser|null $migrations👷GetArchiveForAuthenticatedUser                                                             = null;
    private Operator\Migrations\DeleteArchiveForAuthenticatedUser|null $migrations👷DeleteArchiveForAuthenticatedUser                                                       = null;
    private Operator\Migrations\UnlockRepoForAuthenticatedUser|null $migrations👷UnlockRepoForAuthenticatedUser                                                             = null;
    private Operator\Migrations\ListReposForAuthenticatedUser|null $migrations👷ListReposForAuthenticatedUser                                                               = null;
    private Operator\Migrations\ListReposForAuthenticatedUserListing|null $migrations👷ListReposForAuthenticatedUserListing                                                 = null;
    private Operator\Orgs\ListForAuthenticatedUser|null $orgs👷ListForAuthenticatedUser                                                                                     = null;
    private Operator\Orgs\ListForAuthenticatedUserListing|null $orgs👷ListForAuthenticatedUserListing                                                                       = null;
    private Operator\Packages\ListPackagesForAuthenticatedUser|null $packages👷ListPackagesForAuthenticatedUser                                                             = null;
    private Operator\Packages\ListPackagesForAuthenticatedUserListing|null $packages👷ListPackagesForAuthenticatedUserListing                                               = null;
    private Operator\Packages\GetPackageForAuthenticatedUser|null $packages👷GetPackageForAuthenticatedUser                                                                 = null;
    private Operator\Packages\DeletePackageForAuthenticatedUser|null $packages👷DeletePackageForAuthenticatedUser                                                           = null;
    private Operator\Packages\RestorePackageForAuthenticatedUser|null $packages👷RestorePackageForAuthenticatedUser                                                         = null;
    private Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser|null $packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser               = null;
    private Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing|null $packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing = null;
    private Operator\Packages\GetPackageVersionForAuthenticatedUser|null $packages👷GetPackageVersionForAuthenticatedUser                                                   = null;
    private Operator\Packages\DeletePackageVersionForAuthenticatedUser|null $packages👷DeletePackageVersionForAuthenticatedUser                                             = null;
    private Operator\Packages\RestorePackageVersionForAuthenticatedUser|null $packages👷RestorePackageVersionForAuthenticatedUser                                           = null;
    private Operator\Projects\CreateForAuthenticatedUser|null $projects👷CreateForAuthenticatedUser                                                                         = null;
    private Operator\Users\ListPublicEmailsForAuthenticatedUser|null $users👷ListPublicEmailsForAuthenticatedUser                                                           = null;
    private Operator\Users\ListPublicEmailsForAuthenticatedUserListing|null $users👷ListPublicEmailsForAuthenticatedUserListing                                             = null;
    private Operator\Repos\ListForAuthenticatedUser|null $repos👷ListForAuthenticatedUser                                                                                   = null;
    private Operator\Repos\ListForAuthenticatedUserListing|null $repos👷ListForAuthenticatedUserListing                                                                     = null;
    private Operator\Repos\CreateForAuthenticatedUser|null $repos👷CreateForAuthenticatedUser                                                                               = null;
    private Operator\Repos\ListInvitationsForAuthenticatedUser|null $repos👷ListInvitationsForAuthenticatedUser                                                             = null;
    private Operator\Repos\ListInvitationsForAuthenticatedUserListing|null $repos👷ListInvitationsForAuthenticatedUserListing                                               = null;
    private Operator\Repos\DeclineInvitationForAuthenticatedUser|null $repos👷DeclineInvitationForAuthenticatedUser                                                         = null;
    private Operator\Repos\AcceptInvitationForAuthenticatedUser|null $repos👷AcceptInvitationForAuthenticatedUser                                                           = null;
    private Operator\Users\ListSocialAccountsForAuthenticatedUser|null $users👷ListSocialAccountsForAuthenticatedUser                                                       = null;
    private Operator\Users\ListSocialAccountsForAuthenticatedUserListing|null $users👷ListSocialAccountsForAuthenticatedUserListing                                         = null;
    private Operator\Users\AddSocialAccountForAuthenticatedUser|null $users👷AddSocialAccountForAuthenticatedUser                                                           = null;
    private Operator\Users\DeleteSocialAccountForAuthenticatedUser|null $users👷DeleteSocialAccountForAuthenticatedUser                                                     = null;
    private Operator\Users\ListSshSigningKeysForAuthenticatedUser|null $users👷ListSshSigningKeysForAuthenticatedUser                                                       = null;
    private Operator\Users\ListSshSigningKeysForAuthenticatedUserListing|null $users👷ListSshSigningKeysForAuthenticatedUserListing                                         = null;
    private Operator\Users\CreateSshSigningKeyForAuthenticatedUser|null $users👷CreateSshSigningKeyForAuthenticatedUser                                                     = null;
    private Operator\Users\GetSshSigningKeyForAuthenticatedUser|null $users👷GetSshSigningKeyForAuthenticatedUser                                                           = null;
    private Operator\Users\DeleteSshSigningKeyForAuthenticatedUser|null $users👷DeleteSshSigningKeyForAuthenticatedUser                                                     = null;
    private Operator\Activity\ListReposStarredByAuthenticatedUser|null $activity👷ListReposStarredByAuthenticatedUser                                                       = null;
    private Operator\Activity\ListReposStarredByAuthenticatedUserListing|null $activity👷ListReposStarredByAuthenticatedUserListing                                         = null;
    private Operator\Activity\CheckRepoIsStarredByAuthenticatedUser|null $activity👷CheckRepoIsStarredByAuthenticatedUser                                                   = null;
    private Operator\Activity\StarRepoForAuthenticatedUser|null $activity👷StarRepoForAuthenticatedUser                                                                     = null;
    private Operator\Activity\UnstarRepoForAuthenticatedUser|null $activity👷UnstarRepoForAuthenticatedUser                                                                 = null;
    private Operator\Activity\ListWatchedReposForAuthenticatedUser|null $activity👷ListWatchedReposForAuthenticatedUser                                                     = null;
    private Operator\Activity\ListWatchedReposForAuthenticatedUserListing|null $activity👷ListWatchedReposForAuthenticatedUserListing                                       = null;
    private Operator\Teams\ListForAuthenticatedUser|null $teams👷ListForAuthenticatedUser                                                                                   = null;
    private Operator\Teams\ListForAuthenticatedUserListing|null $teams👷ListForAuthenticatedUserListing                                                                     = null;
    private Operator\Users\List_|null $users👷List_                                                                                                                         = null;
    private Operator\Users\GetByUsername|null $users👷GetByUsername                                                                                                         = null;
    private Operator\Packages\ListDockerMigrationConflictingPackagesForUser|null $packages👷ListDockerMigrationConflictingPackagesForUser                                   = null;
    private Operator\Activity\ListEventsForAuthenticatedUser|null $activity👷ListEventsForAuthenticatedUser                                                                 = null;
    private Operator\Activity\ListEventsForAuthenticatedUserListing|null $activity👷ListEventsForAuthenticatedUserListing                                                   = null;
    private Operator\Activity\ListOrgEventsForAuthenticatedUser|null $activity👷ListOrgEventsForAuthenticatedUser                                                           = null;
    private Operator\Activity\ListOrgEventsForAuthenticatedUserListing|null $activity👷ListOrgEventsForAuthenticatedUserListing                                             = null;
    private Operator\Activity\ListPublicEventsForUser|null $activity👷ListPublicEventsForUser                                                                               = null;
    private Operator\Activity\ListPublicEventsForUserListing|null $activity👷ListPublicEventsForUserListing                                                                 = null;
    private Operator\Users\ListFollowersForUser|null $users👷ListFollowersForUser                                                                                           = null;
    private Operator\Users\ListFollowersForUserListing|null $users👷ListFollowersForUserListing                                                                             = null;
    private Operator\Users\ListFollowingForUser|null $users👷ListFollowingForUser                                                                                           = null;
    private Operator\Users\ListFollowingForUserListing|null $users👷ListFollowingForUserListing                                                                             = null;
    private Operator\Users\CheckFollowingForUser|null $users👷CheckFollowingForUser                                                                                         = null;
    private Operator\Gists\ListForUser|null $gists👷ListForUser                                                                                                             = null;
    private Operator\Gists\ListForUserListing|null $gists👷ListForUserListing                                                                                               = null;
    private Operator\Users\ListGpgKeysForUser|null $users👷ListGpgKeysForUser                                                                                               = null;
    private Operator\Users\ListGpgKeysForUserListing|null $users👷ListGpgKeysForUserListing                                                                                 = null;
    private Operator\Users\GetContextForUser|null $users👷GetContextForUser                                                                                                 = null;
    private Operator\Apps\GetUserInstallation|null $apps👷GetUserInstallation                                                                                               = null;
    private Operator\Users\ListPublicKeysForUser|null $users👷ListPublicKeysForUser                                                                                         = null;
    private Operator\Users\ListPublicKeysForUserListing|null $users👷ListPublicKeysForUserListing                                                                           = null;
    private Operator\Orgs\ListForUser|null $orgs👷ListForUser                                                                                                               = null;
    private Operator\Orgs\ListForUserListing|null $orgs👷ListForUserListing                                                                                                 = null;
    private Operator\Packages\ListPackagesForUser|null $packages👷ListPackagesForUser                                                                                       = null;
    private Operator\Packages\ListPackagesForUserListing|null $packages👷ListPackagesForUserListing                                                                         = null;
    private Operator\Packages\GetPackageForUser|null $packages👷GetPackageForUser                                                                                           = null;
    private Operator\Packages\DeletePackageForUser|null $packages👷DeletePackageForUser                                                                                     = null;
    private Operator\Packages\RestorePackageForUser|null $packages👷RestorePackageForUser                                                                                   = null;
    private Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser|null $packages👷GetAllPackageVersionsForPackageOwnedByUser                                         = null;
    private Operator\Packages\GetPackageVersionForUser|null $packages👷GetPackageVersionForUser                                                                             = null;
    private Operator\Packages\DeletePackageVersionForUser|null $packages👷DeletePackageVersionForUser                                                                       = null;
    private Operator\Packages\RestorePackageVersionForUser|null $packages👷RestorePackageVersionForUser                                                                     = null;
    private Operator\Projects\ListForUser|null $projects👷ListForUser                                                                                                       = null;
    private Operator\Projects\ListForUserListing|null $projects👷ListForUserListing                                                                                         = null;
    private Operator\Activity\ListReceivedEventsForUser|null $activity👷ListReceivedEventsForUser                                                                           = null;
    private Operator\Activity\ListReceivedEventsForUserListing|null $activity👷ListReceivedEventsForUserListing                                                             = null;
    private Operator\Activity\ListReceivedPublicEventsForUser|null $activity👷ListReceivedPublicEventsForUser                                                               = null;
    private Operator\Activity\ListReceivedPublicEventsForUserListing|null $activity👷ListReceivedPublicEventsForUserListing                                                 = null;
    private Operator\Repos\ListForUser|null $repos👷ListForUser                                                                                                             = null;
    private Operator\Repos\ListForUserListing|null $repos👷ListForUserListing                                                                                               = null;
    private Operator\Billing\GetGithubActionsBillingUser|null $billing👷GetGithubActionsBillingUser                                                                         = null;
    private Operator\Billing\GetGithubPackagesBillingUser|null $billing👷GetGithubPackagesBillingUser                                                                       = null;
    private Operator\Billing\GetSharedStorageBillingUser|null $billing👷GetSharedStorageBillingUser                                                                         = null;
    private Operator\Users\ListSocialAccountsForUser|null $users👷ListSocialAccountsForUser                                                                                 = null;
    private Operator\Users\ListSocialAccountsForUserListing|null $users👷ListSocialAccountsForUserListing                                                                   = null;
    private Operator\Users\ListSshSigningKeysForUser|null $users👷ListSshSigningKeysForUser                                                                                 = null;
    private Operator\Users\ListSshSigningKeysForUserListing|null $users👷ListSshSigningKeysForUserListing                                                                   = null;
    private Operator\Activity\ListReposStarredByUser|null $activity👷ListReposStarredByUser                                                                                 = null;
    private Operator\Activity\ListReposWatchedByUser|null $activity👷ListReposWatchedByUser                                                                                 = null;
    private Operator\Activity\ListReposWatchedByUserListing|null $activity👷ListReposWatchedByUserListing                                                                   = null;
    private Operator\Meta\GetAllVersions|null $meta👷GetAllVersions                                                                                                         = null;
    private Operator\Meta\GetZen|null $meta👷GetZen                                                                                                                         = null;

    public function __construct(private AuthenticationInterface $authentication, private Browser $browser, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function meta👷Root(): Operator\Meta\Root
    {
        if ($this->meta👷Root instanceof Operator\Meta\Root === false) {
            $this->meta👷Root = new Operator\Meta\Root($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Root());
        }

        return $this->meta👷Root;
    }

    public function securityAdvisories👷ListGlobalAdvisories(): Operator\SecurityAdvisories\ListGlobalAdvisories
    {
        if ($this->securityAdvisories👷ListGlobalAdvisories instanceof Operator\SecurityAdvisories\ListGlobalAdvisories === false) {
            $this->securityAdvisories👷ListGlobalAdvisories = new Operator\SecurityAdvisories\ListGlobalAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories());
        }

        return $this->securityAdvisories👷ListGlobalAdvisories;
    }

    public function securityAdvisories👷GetGlobalAdvisory(): Operator\SecurityAdvisories\GetGlobalAdvisory
    {
        if ($this->securityAdvisories👷GetGlobalAdvisory instanceof Operator\SecurityAdvisories\GetGlobalAdvisory === false) {
            $this->securityAdvisories👷GetGlobalAdvisory = new Operator\SecurityAdvisories\GetGlobalAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories🌀GhsaId());
        }

        return $this->securityAdvisories👷GetGlobalAdvisory;
    }

    public function apps👷GetAuthenticated(): Operator\Apps\GetAuthenticated
    {
        if ($this->apps👷GetAuthenticated instanceof Operator\Apps\GetAuthenticated === false) {
            $this->apps👷GetAuthenticated = new Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());
        }

        return $this->apps👷GetAuthenticated;
    }

    public function apps👷CreateFromManifest(): Operator\Apps\CreateFromManifest
    {
        if ($this->apps👷CreateFromManifest instanceof Operator\Apps\CreateFromManifest === false) {
            $this->apps👷CreateFromManifest = new Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());
        }

        return $this->apps👷CreateFromManifest;
    }

    public function apps👷GetWebhookConfigForApp(): Operator\Apps\GetWebhookConfigForApp
    {
        if ($this->apps👷GetWebhookConfigForApp instanceof Operator\Apps\GetWebhookConfigForApp === false) {
            $this->apps👷GetWebhookConfigForApp = new Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷GetWebhookConfigForApp;
    }

    public function apps👷UpdateWebhookConfigForApp(): Operator\Apps\UpdateWebhookConfigForApp
    {
        if ($this->apps👷UpdateWebhookConfigForApp instanceof Operator\Apps\UpdateWebhookConfigForApp === false) {
            $this->apps👷UpdateWebhookConfigForApp = new Operator\Apps\UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->apps👷UpdateWebhookConfigForApp;
    }

    public function apps👷ListWebhookDeliveries(): Operator\Apps\ListWebhookDeliveries
    {
        if ($this->apps👷ListWebhookDeliveries instanceof Operator\Apps\ListWebhookDeliveries === false) {
            $this->apps👷ListWebhookDeliveries = new Operator\Apps\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());
        }

        return $this->apps👷ListWebhookDeliveries;
    }

    public function apps👷GetWebhookDelivery(): Operator\Apps\GetWebhookDelivery
    {
        if ($this->apps👷GetWebhookDelivery instanceof Operator\Apps\GetWebhookDelivery === false) {
            $this->apps👷GetWebhookDelivery = new Operator\Apps\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());
        }

        return $this->apps👷GetWebhookDelivery;
    }

    public function apps👷RedeliverWebhookDelivery(): Operator\Apps\RedeliverWebhookDelivery
    {
        if ($this->apps👷RedeliverWebhookDelivery instanceof Operator\Apps\RedeliverWebhookDelivery === false) {
            $this->apps👷RedeliverWebhookDelivery = new Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->apps👷RedeliverWebhookDelivery;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedApp(): Operator\Apps\ListInstallationRequestsForAuthenticatedApp
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedApp instanceof Operator\Apps\ListInstallationRequestsForAuthenticatedApp === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedApp = new Operator\Apps\ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedApp;
    }

    public function apps👷ListInstallationRequestsForAuthenticatedAppListing(): Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing
    {
        if ($this->apps👷ListInstallationRequestsForAuthenticatedAppListing instanceof Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing === false) {
            $this->apps👷ListInstallationRequestsForAuthenticatedAppListing = new Operator\Apps\ListInstallationRequestsForAuthenticatedAppListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->apps👷ListInstallationRequestsForAuthenticatedAppListing;
    }

    public function apps👷ListInstallations(): Operator\Apps\ListInstallations
    {
        if ($this->apps👷ListInstallations instanceof Operator\Apps\ListInstallations === false) {
            $this->apps👷ListInstallations = new Operator\Apps\ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallations;
    }

    public function apps👷ListInstallationsListing(): Operator\Apps\ListInstallationsListing
    {
        if ($this->apps👷ListInstallationsListing instanceof Operator\Apps\ListInstallationsListing === false) {
            $this->apps👷ListInstallationsListing = new Operator\Apps\ListInstallationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->apps👷ListInstallationsListing;
    }

    public function apps👷GetInstallation(): Operator\Apps\GetInstallation
    {
        if ($this->apps👷GetInstallation instanceof Operator\Apps\GetInstallation === false) {
            $this->apps👷GetInstallation = new Operator\Apps\GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷GetInstallation;
    }

    public function apps👷DeleteInstallation(): Operator\Apps\DeleteInstallation
    {
        if ($this->apps👷DeleteInstallation instanceof Operator\Apps\DeleteInstallation === false) {
            $this->apps👷DeleteInstallation = new Operator\Apps\DeleteInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->apps👷DeleteInstallation;
    }

    public function apps👷CreateInstallationAccessToken(): Operator\Apps\CreateInstallationAccessToken
    {
        if ($this->apps👷CreateInstallationAccessToken instanceof Operator\Apps\CreateInstallationAccessToken === false) {
            $this->apps👷CreateInstallationAccessToken = new Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());
        }

        return $this->apps👷CreateInstallationAccessToken;
    }

    public function apps👷SuspendInstallation(): Operator\Apps\SuspendInstallation
    {
        if ($this->apps👷SuspendInstallation instanceof Operator\Apps\SuspendInstallation === false) {
            $this->apps👷SuspendInstallation = new Operator\Apps\SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷SuspendInstallation;
    }

    public function apps👷UnsuspendInstallation(): Operator\Apps\UnsuspendInstallation
    {
        if ($this->apps👷UnsuspendInstallation instanceof Operator\Apps\UnsuspendInstallation === false) {
            $this->apps👷UnsuspendInstallation = new Operator\Apps\UnsuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->apps👷UnsuspendInstallation;
    }

    public function apps👷DeleteAuthorization(): Operator\Apps\DeleteAuthorization
    {
        if ($this->apps👷DeleteAuthorization instanceof Operator\Apps\DeleteAuthorization === false) {
            $this->apps👷DeleteAuthorization = new Operator\Apps\DeleteAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grant());
        }

        return $this->apps👷DeleteAuthorization;
    }

    public function apps👷CheckToken(): Operator\Apps\CheckToken
    {
        if ($this->apps👷CheckToken instanceof Operator\Apps\CheckToken === false) {
            $this->apps👷CheckToken = new Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷CheckToken;
    }

    public function apps👷DeleteToken(): Operator\Apps\DeleteToken
    {
        if ($this->apps👷DeleteToken instanceof Operator\Apps\DeleteToken === false) {
            $this->apps👷DeleteToken = new Operator\Apps\DeleteToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷DeleteToken;
    }

    public function apps👷ResetToken(): Operator\Apps\ResetToken
    {
        if ($this->apps👷ResetToken instanceof Operator\Apps\ResetToken === false) {
            $this->apps👷ResetToken = new Operator\Apps\ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->apps👷ResetToken;
    }

    public function apps👷ScopeToken(): Operator\Apps\ScopeToken
    {
        if ($this->apps👷ScopeToken instanceof Operator\Apps\ScopeToken === false) {
            $this->apps👷ScopeToken = new Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped());
        }

        return $this->apps👷ScopeToken;
    }

    public function apps👷GetBySlug(): Operator\Apps\GetBySlug
    {
        if ($this->apps👷GetBySlug instanceof Operator\Apps\GetBySlug === false) {
            $this->apps👷GetBySlug = new Operator\Apps\GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());
        }

        return $this->apps👷GetBySlug;
    }

    public function codesOfConduct👷GetAllCodesOfConduct(): Operator\CodesOfConduct\GetAllCodesOfConduct
    {
        if ($this->codesOfConduct👷GetAllCodesOfConduct instanceof Operator\CodesOfConduct\GetAllCodesOfConduct === false) {
            $this->codesOfConduct👷GetAllCodesOfConduct = new Operator\CodesOfConduct\GetAllCodesOfConduct($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct());
        }

        return $this->codesOfConduct👷GetAllCodesOfConduct;
    }

    public function codesOfConduct👷GetConductCode(): Operator\CodesOfConduct\GetConductCode
    {
        if ($this->codesOfConduct👷GetConductCode instanceof Operator\CodesOfConduct\GetConductCode === false) {
            $this->codesOfConduct👷GetConductCode = new Operator\CodesOfConduct\GetConductCode($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀CodesOfConduct🌀Key());
        }

        return $this->codesOfConduct👷GetConductCode;
    }

    public function emojis👷Get(): Operator\Emojis\Get
    {
        if ($this->emojis👷Get instanceof Operator\Emojis\Get === false) {
            $this->emojis👷Get = new Operator\Emojis\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Emojis());
        }

        return $this->emojis👷Get;
    }

    public function dependabot👷ListAlertsForEnterprise(): Operator\Dependabot\ListAlertsForEnterprise
    {
        if ($this->dependabot👷ListAlertsForEnterprise instanceof Operator\Dependabot\ListAlertsForEnterprise === false) {
            $this->dependabot👷ListAlertsForEnterprise = new Operator\Dependabot\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForEnterprise;
    }

    public function secretScanning👷ListAlertsForEnterprise(): Operator\SecretScanning\ListAlertsForEnterprise
    {
        if ($this->secretScanning👷ListAlertsForEnterprise instanceof Operator\SecretScanning\ListAlertsForEnterprise === false) {
            $this->secretScanning👷ListAlertsForEnterprise = new Operator\SecretScanning\ListAlertsForEnterprise($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForEnterprise;
    }

    public function activity👷ListPublicEvents(): Operator\Activity\ListPublicEvents
    {
        if ($this->activity👷ListPublicEvents instanceof Operator\Activity\ListPublicEvents === false) {
            $this->activity👷ListPublicEvents = new Operator\Activity\ListPublicEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Events());
        }

        return $this->activity👷ListPublicEvents;
    }

    public function activity👷ListPublicEventsListing(): Operator\Activity\ListPublicEventsListing
    {
        if ($this->activity👷ListPublicEventsListing instanceof Operator\Activity\ListPublicEventsListing === false) {
            $this->activity👷ListPublicEventsListing = new Operator\Activity\ListPublicEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Events());
        }

        return $this->activity👷ListPublicEventsListing;
    }

    public function activity👷GetFeeds(): Operator\Activity\GetFeeds
    {
        if ($this->activity👷GetFeeds instanceof Operator\Activity\GetFeeds === false) {
            $this->activity👷GetFeeds = new Operator\Activity\GetFeeds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Feeds());
        }

        return $this->activity👷GetFeeds;
    }

    public function gists👷List_(): Operator\Gists\List_
    {
        if ($this->gists👷List_ instanceof Operator\Gists\List_ === false) {
            $this->gists👷List_ = new Operator\Gists\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷List_;
    }

    public function gists👷ListListing(): Operator\Gists\ListListing
    {
        if ($this->gists👷ListListing instanceof Operator\Gists\ListListing === false) {
            $this->gists👷ListListing = new Operator\Gists\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷ListListing;
    }

    public function gists👷Create(): Operator\Gists\Create
    {
        if ($this->gists👷Create instanceof Operator\Gists\Create === false) {
            $this->gists👷Create = new Operator\Gists\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->gists👷Create;
    }

    public function gists👷ListPublic(): Operator\Gists\ListPublic
    {
        if ($this->gists👷ListPublic instanceof Operator\Gists\ListPublic === false) {
            $this->gists👷ListPublic = new Operator\Gists\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublic;
    }

    public function gists👷ListPublicListing(): Operator\Gists\ListPublicListing
    {
        if ($this->gists👷ListPublicListing instanceof Operator\Gists\ListPublicListing === false) {
            $this->gists👷ListPublicListing = new Operator\Gists\ListPublicListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->gists👷ListPublicListing;
    }

    public function gists👷ListStarred(): Operator\Gists\ListStarred
    {
        if ($this->gists👷ListStarred instanceof Operator\Gists\ListStarred === false) {
            $this->gists👷ListStarred = new Operator\Gists\ListStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarred;
    }

    public function gists👷ListStarredListing(): Operator\Gists\ListStarredListing
    {
        if ($this->gists👷ListStarredListing instanceof Operator\Gists\ListStarredListing === false) {
            $this->gists👷ListStarredListing = new Operator\Gists\ListStarredListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->gists👷ListStarredListing;
    }

    public function gists👷Get(): Operator\Gists\Get
    {
        if ($this->gists👷Get instanceof Operator\Gists\Get === false) {
            $this->gists👷Get = new Operator\Gists\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Get;
    }

    public function gists👷Delete(): Operator\Gists\Delete
    {
        if ($this->gists👷Delete instanceof Operator\Gists\Delete === false) {
            $this->gists👷Delete = new Operator\Gists\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Delete;
    }

    public function gists👷Update(): Operator\Gists\Update
    {
        if ($this->gists👷Update instanceof Operator\Gists\Update === false) {
            $this->gists👷Update = new Operator\Gists\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->gists👷Update;
    }

    public function gists👷ListComments(): Operator\Gists\ListComments
    {
        if ($this->gists👷ListComments instanceof Operator\Gists\ListComments === false) {
            $this->gists👷ListComments = new Operator\Gists\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListComments;
    }

    public function gists👷ListCommentsListing(): Operator\Gists\ListCommentsListing
    {
        if ($this->gists👷ListCommentsListing instanceof Operator\Gists\ListCommentsListing === false) {
            $this->gists👷ListCommentsListing = new Operator\Gists\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷ListCommentsListing;
    }

    public function gists👷CreateComment(): Operator\Gists\CreateComment
    {
        if ($this->gists👷CreateComment instanceof Operator\Gists\CreateComment === false) {
            $this->gists👷CreateComment = new Operator\Gists\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->gists👷CreateComment;
    }

    public function gists👷GetComment(): Operator\Gists\GetComment
    {
        if ($this->gists👷GetComment instanceof Operator\Gists\GetComment === false) {
            $this->gists👷GetComment = new Operator\Gists\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷GetComment;
    }

    public function gists👷DeleteComment(): Operator\Gists\DeleteComment
    {
        if ($this->gists👷DeleteComment instanceof Operator\Gists\DeleteComment === false) {
            $this->gists👷DeleteComment = new Operator\Gists\DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷DeleteComment;
    }

    public function gists👷UpdateComment(): Operator\Gists\UpdateComment
    {
        if ($this->gists👷UpdateComment instanceof Operator\Gists\UpdateComment === false) {
            $this->gists👷UpdateComment = new Operator\Gists\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->gists👷UpdateComment;
    }

    public function gists👷ListCommits(): Operator\Gists\ListCommits
    {
        if ($this->gists👷ListCommits instanceof Operator\Gists\ListCommits === false) {
            $this->gists👷ListCommits = new Operator\Gists\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommits;
    }

    public function gists👷ListCommitsListing(): Operator\Gists\ListCommitsListing
    {
        if ($this->gists👷ListCommitsListing instanceof Operator\Gists\ListCommitsListing === false) {
            $this->gists👷ListCommitsListing = new Operator\Gists\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->gists👷ListCommitsListing;
    }

    public function gists👷ListForks(): Operator\Gists\ListForks
    {
        if ($this->gists👷ListForks instanceof Operator\Gists\ListForks === false) {
            $this->gists👷ListForks = new Operator\Gists\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForks;
    }

    public function gists👷ListForksListing(): Operator\Gists\ListForksListing
    {
        if ($this->gists👷ListForksListing instanceof Operator\Gists\ListForksListing === false) {
            $this->gists👷ListForksListing = new Operator\Gists\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷ListForksListing;
    }

    public function gists👷Fork(): Operator\Gists\Fork
    {
        if ($this->gists👷Fork instanceof Operator\Gists\Fork === false) {
            $this->gists👷Fork = new Operator\Gists\Fork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->gists👷Fork;
    }

    public function gists👷CheckIsStarred(): Operator\Gists\CheckIsStarred
    {
        if ($this->gists👷CheckIsStarred instanceof Operator\Gists\CheckIsStarred === false) {
            $this->gists👷CheckIsStarred = new Operator\Gists\CheckIsStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷CheckIsStarred;
    }

    public function gists👷Star(): Operator\Gists\Star
    {
        if ($this->gists👷Star instanceof Operator\Gists\Star === false) {
            $this->gists👷Star = new Operator\Gists\Star($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Star;
    }

    public function gists👷Unstar(): Operator\Gists\Unstar
    {
        if ($this->gists👷Unstar instanceof Operator\Gists\Unstar === false) {
            $this->gists👷Unstar = new Operator\Gists\Unstar($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->gists👷Unstar;
    }

    public function gists👷GetRevision(): Operator\Gists\GetRevision
    {
        if ($this->gists👷GetRevision instanceof Operator\Gists\GetRevision === false) {
            $this->gists👷GetRevision = new Operator\Gists\GetRevision($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Sha());
        }

        return $this->gists👷GetRevision;
    }

    public function gitignore👷GetAllTemplates(): Operator\Gitignore\GetAllTemplates
    {
        if ($this->gitignore👷GetAllTemplates instanceof Operator\Gitignore\GetAllTemplates === false) {
            $this->gitignore👷GetAllTemplates = new Operator\Gitignore\GetAllTemplates($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates());
        }

        return $this->gitignore👷GetAllTemplates;
    }

    public function gitignore👷GetTemplate(): Operator\Gitignore\GetTemplate
    {
        if ($this->gitignore👷GetTemplate instanceof Operator\Gitignore\GetTemplate === false) {
            $this->gitignore👷GetTemplate = new Operator\Gitignore\GetTemplate($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name());
        }

        return $this->gitignore👷GetTemplate;
    }

    public function apps👷ListReposAccessibleToInstallation(): Operator\Apps\ListReposAccessibleToInstallation
    {
        if ($this->apps👷ListReposAccessibleToInstallation instanceof Operator\Apps\ListReposAccessibleToInstallation === false) {
            $this->apps👷ListReposAccessibleToInstallation = new Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());
        }

        return $this->apps👷ListReposAccessibleToInstallation;
    }

    public function apps👷RevokeInstallationAccessToken(): Operator\Apps\RevokeInstallationAccessToken
    {
        if ($this->apps👷RevokeInstallationAccessToken instanceof Operator\Apps\RevokeInstallationAccessToken === false) {
            $this->apps👷RevokeInstallationAccessToken = new Operator\Apps\RevokeInstallationAccessToken($this->browser, $this->authentication);
        }

        return $this->apps👷RevokeInstallationAccessToken;
    }

    public function issues👷List_(): Operator\Issues\List_
    {
        if ($this->issues👷List_ instanceof Operator\Issues\List_ === false) {
            $this->issues👷List_ = new Operator\Issues\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷List_;
    }

    public function issues👷ListListing(): Operator\Issues\ListListing
    {
        if ($this->issues👷ListListing instanceof Operator\Issues\ListListing === false) {
            $this->issues👷ListListing = new Operator\Issues\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Issues());
        }

        return $this->issues👷ListListing;
    }

    public function licenses👷GetAllCommonlyUsed(): Operator\Licenses\GetAllCommonlyUsed
    {
        if ($this->licenses👷GetAllCommonlyUsed instanceof Operator\Licenses\GetAllCommonlyUsed === false) {
            $this->licenses👷GetAllCommonlyUsed = new Operator\Licenses\GetAllCommonlyUsed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsed;
    }

    public function licenses👷GetAllCommonlyUsedListing(): Operator\Licenses\GetAllCommonlyUsedListing
    {
        if ($this->licenses👷GetAllCommonlyUsedListing instanceof Operator\Licenses\GetAllCommonlyUsedListing === false) {
            $this->licenses👷GetAllCommonlyUsedListing = new Operator\Licenses\GetAllCommonlyUsedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses());
        }

        return $this->licenses👷GetAllCommonlyUsedListing;
    }

    public function licenses👷Get(): Operator\Licenses\Get
    {
        if ($this->licenses👷Get instanceof Operator\Licenses\Get === false) {
            $this->licenses👷Get = new Operator\Licenses\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Licenses🌀License());
        }

        return $this->licenses👷Get;
    }

    public function markdown👷Render(): Operator\Markdown\Render
    {
        if ($this->markdown👷Render instanceof Operator\Markdown\Render === false) {
            $this->markdown👷Render = new Operator\Markdown\Render($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown());
        }

        return $this->markdown👷Render;
    }

    public function markdown👷RenderRaw(): Operator\Markdown\RenderRaw
    {
        if ($this->markdown👷RenderRaw instanceof Operator\Markdown\RenderRaw === false) {
            $this->markdown👷RenderRaw = new Operator\Markdown\RenderRaw($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Markdown🌀Raw());
        }

        return $this->markdown👷RenderRaw;
    }

    public function apps👷GetSubscriptionPlanForAccount(): Operator\Apps\GetSubscriptionPlanForAccount
    {
        if ($this->apps👷GetSubscriptionPlanForAccount instanceof Operator\Apps\GetSubscriptionPlanForAccount === false) {
            $this->apps👷GetSubscriptionPlanForAccount = new Operator\Apps\GetSubscriptionPlanForAccount($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId());
        }

        return $this->apps👷GetSubscriptionPlanForAccount;
    }

    public function apps👷ListPlans(): Operator\Apps\ListPlans
    {
        if ($this->apps👷ListPlans instanceof Operator\Apps\ListPlans === false) {
            $this->apps👷ListPlans = new Operator\Apps\ListPlans($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());
        }

        return $this->apps👷ListPlans;
    }

    public function apps👷ListPlansListing(): Operator\Apps\ListPlansListing
    {
        if ($this->apps👷ListPlansListing instanceof Operator\Apps\ListPlansListing === false) {
            $this->apps👷ListPlansListing = new Operator\Apps\ListPlansListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());
        }

        return $this->apps👷ListPlansListing;
    }

    public function apps👷ListAccountsForPlan(): Operator\Apps\ListAccountsForPlan
    {
        if ($this->apps👷ListAccountsForPlan instanceof Operator\Apps\ListAccountsForPlan === false) {
            $this->apps👷ListAccountsForPlan = new Operator\Apps\ListAccountsForPlan($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlan;
    }

    public function apps👷ListAccountsForPlanListing(): Operator\Apps\ListAccountsForPlanListing
    {
        if ($this->apps👷ListAccountsForPlanListing instanceof Operator\Apps\ListAccountsForPlanListing === false) {
            $this->apps👷ListAccountsForPlanListing = new Operator\Apps\ListAccountsForPlanListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanListing;
    }

    public function apps👷GetSubscriptionPlanForAccountStubbed(): Operator\Apps\GetSubscriptionPlanForAccountStubbed
    {
        if ($this->apps👷GetSubscriptionPlanForAccountStubbed instanceof Operator\Apps\GetSubscriptionPlanForAccountStubbed === false) {
            $this->apps👷GetSubscriptionPlanForAccountStubbed = new Operator\Apps\GetSubscriptionPlanForAccountStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId());
        }

        return $this->apps👷GetSubscriptionPlanForAccountStubbed;
    }

    public function apps👷ListPlansStubbed(): Operator\Apps\ListPlansStubbed
    {
        if ($this->apps👷ListPlansStubbed instanceof Operator\Apps\ListPlansStubbed === false) {
            $this->apps👷ListPlansStubbed = new Operator\Apps\ListPlansStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());
        }

        return $this->apps👷ListPlansStubbed;
    }

    public function apps👷ListPlansStubbedListing(): Operator\Apps\ListPlansStubbedListing
    {
        if ($this->apps👷ListPlansStubbedListing instanceof Operator\Apps\ListPlansStubbedListing === false) {
            $this->apps👷ListPlansStubbedListing = new Operator\Apps\ListPlansStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());
        }

        return $this->apps👷ListPlansStubbedListing;
    }

    public function apps👷ListAccountsForPlanStubbed(): Operator\Apps\ListAccountsForPlanStubbed
    {
        if ($this->apps👷ListAccountsForPlanStubbed instanceof Operator\Apps\ListAccountsForPlanStubbed === false) {
            $this->apps👷ListAccountsForPlanStubbed = new Operator\Apps\ListAccountsForPlanStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanStubbed;
    }

    public function apps👷ListAccountsForPlanStubbedListing(): Operator\Apps\ListAccountsForPlanStubbedListing
    {
        if ($this->apps👷ListAccountsForPlanStubbedListing instanceof Operator\Apps\ListAccountsForPlanStubbedListing === false) {
            $this->apps👷ListAccountsForPlanStubbedListing = new Operator\Apps\ListAccountsForPlanStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->apps👷ListAccountsForPlanStubbedListing;
    }

    public function meta👷Get(): Operator\Meta\Get
    {
        if ($this->meta👷Get instanceof Operator\Meta\Get === false) {
            $this->meta👷Get = new Operator\Meta\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Meta());
        }

        return $this->meta👷Get;
    }

    public function activity👷ListPublicEventsForRepoNetwork(): Operator\Activity\ListPublicEventsForRepoNetwork
    {
        if ($this->activity👷ListPublicEventsForRepoNetwork instanceof Operator\Activity\ListPublicEventsForRepoNetwork === false) {
            $this->activity👷ListPublicEventsForRepoNetwork = new Operator\Activity\ListPublicEventsForRepoNetwork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListPublicEventsForRepoNetwork;
    }

    public function activity👷ListPublicEventsForRepoNetworkListing(): Operator\Activity\ListPublicEventsForRepoNetworkListing
    {
        if ($this->activity👷ListPublicEventsForRepoNetworkListing instanceof Operator\Activity\ListPublicEventsForRepoNetworkListing === false) {
            $this->activity👷ListPublicEventsForRepoNetworkListing = new Operator\Activity\ListPublicEventsForRepoNetworkListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListPublicEventsForRepoNetworkListing;
    }

    public function activity👷ListNotificationsForAuthenticatedUser(): Operator\Activity\ListNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUser instanceof Operator\Activity\ListNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListNotificationsForAuthenticatedUser = new Operator\Activity\ListNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUser;
    }

    public function activity👷ListNotificationsForAuthenticatedUserListing(): Operator\Activity\ListNotificationsForAuthenticatedUserListing
    {
        if ($this->activity👷ListNotificationsForAuthenticatedUserListing instanceof Operator\Activity\ListNotificationsForAuthenticatedUserListing === false) {
            $this->activity👷ListNotificationsForAuthenticatedUserListing = new Operator\Activity\ListNotificationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷ListNotificationsForAuthenticatedUserListing;
    }

    public function activity👷MarkNotificationsAsRead(): Operator\Activity\MarkNotificationsAsRead
    {
        if ($this->activity👷MarkNotificationsAsRead instanceof Operator\Activity\MarkNotificationsAsRead === false) {
            $this->activity👷MarkNotificationsAsRead = new Operator\Activity\MarkNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications());
        }

        return $this->activity👷MarkNotificationsAsRead;
    }

    public function activity👷GetThread(): Operator\Activity\GetThread
    {
        if ($this->activity👷GetThread instanceof Operator\Activity\GetThread === false) {
            $this->activity👷GetThread = new Operator\Activity\GetThread($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷GetThread;
    }

    public function activity👷MarkThreadAsRead(): Operator\Activity\MarkThreadAsRead
    {
        if ($this->activity👷MarkThreadAsRead instanceof Operator\Activity\MarkThreadAsRead === false) {
            $this->activity👷MarkThreadAsRead = new Operator\Activity\MarkThreadAsRead($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId());
        }

        return $this->activity👷MarkThreadAsRead;
    }

    public function activity👷GetThreadSubscriptionForAuthenticatedUser(): Operator\Activity\GetThreadSubscriptionForAuthenticatedUser
    {
        if ($this->activity👷GetThreadSubscriptionForAuthenticatedUser instanceof Operator\Activity\GetThreadSubscriptionForAuthenticatedUser === false) {
            $this->activity👷GetThreadSubscriptionForAuthenticatedUser = new Operator\Activity\GetThreadSubscriptionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷GetThreadSubscriptionForAuthenticatedUser;
    }

    public function activity👷SetThreadSubscription(): Operator\Activity\SetThreadSubscription
    {
        if ($this->activity👷SetThreadSubscription instanceof Operator\Activity\SetThreadSubscription === false) {
            $this->activity👷SetThreadSubscription = new Operator\Activity\SetThreadSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷SetThreadSubscription;
    }

    public function activity👷DeleteThreadSubscription(): Operator\Activity\DeleteThreadSubscription
    {
        if ($this->activity👷DeleteThreadSubscription instanceof Operator\Activity\DeleteThreadSubscription === false) {
            $this->activity👷DeleteThreadSubscription = new Operator\Activity\DeleteThreadSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription());
        }

        return $this->activity👷DeleteThreadSubscription;
    }

    public function meta👷GetOctocat(): Operator\Meta\GetOctocat
    {
        if ($this->meta👷GetOctocat instanceof Operator\Meta\GetOctocat === false) {
            $this->meta👷GetOctocat = new Operator\Meta\GetOctocat($this->browser, $this->authentication);
        }

        return $this->meta👷GetOctocat;
    }

    public function orgs👷List_(): Operator\Orgs\List_
    {
        if ($this->orgs👷List_ instanceof Operator\Orgs\List_ === false) {
            $this->orgs👷List_ = new Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->orgs👷List_;
    }

    public function orgs👷Get(): Operator\Orgs\Get
    {
        if ($this->orgs👷Get instanceof Operator\Orgs\Get === false) {
            $this->orgs👷Get = new Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Get;
    }

    public function orgs👷Delete(): Operator\Orgs\Delete
    {
        if ($this->orgs👷Delete instanceof Operator\Orgs\Delete === false) {
            $this->orgs👷Delete = new Operator\Orgs\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Delete;
    }

    public function orgs👷Update(): Operator\Orgs\Update
    {
        if ($this->orgs👷Update instanceof Operator\Orgs\Update === false) {
            $this->orgs👷Update = new Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->orgs👷Update;
    }

    public function actions👷GetActionsCacheUsageForOrg(): Operator\Actions\GetActionsCacheUsageForOrg
    {
        if ($this->actions👷GetActionsCacheUsageForOrg instanceof Operator\Actions\GetActionsCacheUsageForOrg === false) {
            $this->actions👷GetActionsCacheUsageForOrg = new Operator\Actions\GetActionsCacheUsageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage());
        }

        return $this->actions👷GetActionsCacheUsageForOrg;
    }

    public function actions👷GetActionsCacheUsageByRepoForOrg(): Operator\Actions\GetActionsCacheUsageByRepoForOrg
    {
        if ($this->actions👷GetActionsCacheUsageByRepoForOrg instanceof Operator\Actions\GetActionsCacheUsageByRepoForOrg === false) {
            $this->actions👷GetActionsCacheUsageByRepoForOrg = new Operator\Actions\GetActionsCacheUsageByRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository());
        }

        return $this->actions👷GetActionsCacheUsageByRepoForOrg;
    }

    public function oidc👷GetOidcCustomSubTemplateForOrg(): Operator\Oidc\GetOidcCustomSubTemplateForOrg
    {
        if ($this->oidc👷GetOidcCustomSubTemplateForOrg instanceof Operator\Oidc\GetOidcCustomSubTemplateForOrg === false) {
            $this->oidc👷GetOidcCustomSubTemplateForOrg = new Operator\Oidc\GetOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->oidc👷GetOidcCustomSubTemplateForOrg;
    }

    public function oidc👷UpdateOidcCustomSubTemplateForOrg(): Operator\Oidc\UpdateOidcCustomSubTemplateForOrg
    {
        if ($this->oidc👷UpdateOidcCustomSubTemplateForOrg instanceof Operator\Oidc\UpdateOidcCustomSubTemplateForOrg === false) {
            $this->oidc👷UpdateOidcCustomSubTemplateForOrg = new Operator\Oidc\UpdateOidcCustomSubTemplateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->oidc👷UpdateOidcCustomSubTemplateForOrg;
    }

    public function actions👷GetGithubActionsPermissionsOrganization(): Operator\Actions\GetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsPermissionsOrganization instanceof Operator\Actions\GetGithubActionsPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsPermissionsOrganization = new Operator\Actions\GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsOrganization;
    }

    public function actions👷SetGithubActionsPermissionsOrganization(): Operator\Actions\SetGithubActionsPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsPermissionsOrganization instanceof Operator\Actions\SetGithubActionsPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsPermissionsOrganization = new Operator\Actions\SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsOrganization;
    }

    public function actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization(): Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization instanceof Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization = new Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization(): Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        if ($this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization instanceof Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization === false) {
            $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization = new Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization;
    }

    public function actions👷EnableSelectedRepositoryGithubActionsOrganization(): Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷EnableSelectedRepositoryGithubActionsOrganization instanceof Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷EnableSelectedRepositoryGithubActionsOrganization = new Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷EnableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷DisableSelectedRepositoryGithubActionsOrganization(): Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization
    {
        if ($this->actions👷DisableSelectedRepositoryGithubActionsOrganization instanceof Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization === false) {
            $this->actions👷DisableSelectedRepositoryGithubActionsOrganization = new Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication);
        }

        return $this->actions👷DisableSelectedRepositoryGithubActionsOrganization;
    }

    public function actions👷GetAllowedActionsOrganization(): Operator\Actions\GetAllowedActionsOrganization
    {
        if ($this->actions👷GetAllowedActionsOrganization instanceof Operator\Actions\GetAllowedActionsOrganization === false) {
            $this->actions👷GetAllowedActionsOrganization = new Operator\Actions\GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsOrganization;
    }

    public function actions👷SetAllowedActionsOrganization(): Operator\Actions\SetAllowedActionsOrganization
    {
        if ($this->actions👷SetAllowedActionsOrganization instanceof Operator\Actions\SetAllowedActionsOrganization === false) {
            $this->actions👷SetAllowedActionsOrganization = new Operator\Actions\SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsOrganization;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization(): Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization instanceof Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization(): Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization instanceof Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization = new Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization;
    }

    public function actions👷ListSelfHostedRunnersForOrg(): Operator\Actions\ListSelfHostedRunnersForOrg
    {
        if ($this->actions👷ListSelfHostedRunnersForOrg instanceof Operator\Actions\ListSelfHostedRunnersForOrg === false) {
            $this->actions👷ListSelfHostedRunnersForOrg = new Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForOrg;
    }

    public function actions👷ListRunnerApplicationsForOrg(): Operator\Actions\ListRunnerApplicationsForOrg
    {
        if ($this->actions👷ListRunnerApplicationsForOrg instanceof Operator\Actions\ListRunnerApplicationsForOrg === false) {
            $this->actions👷ListRunnerApplicationsForOrg = new Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForOrg;
    }

    public function actions👷GenerateRunnerJitconfigForOrg(): Operator\Actions\GenerateRunnerJitconfigForOrg
    {
        if ($this->actions👷GenerateRunnerJitconfigForOrg instanceof Operator\Actions\GenerateRunnerJitconfigForOrg === false) {
            $this->actions👷GenerateRunnerJitconfigForOrg = new Operator\Actions\GenerateRunnerJitconfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->actions👷GenerateRunnerJitconfigForOrg;
    }

    public function actions👷CreateRegistrationTokenForOrg(): Operator\Actions\CreateRegistrationTokenForOrg
    {
        if ($this->actions👷CreateRegistrationTokenForOrg instanceof Operator\Actions\CreateRegistrationTokenForOrg === false) {
            $this->actions👷CreateRegistrationTokenForOrg = new Operator\Actions\CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForOrg;
    }

    public function actions👷CreateRemoveTokenForOrg(): Operator\Actions\CreateRemoveTokenForOrg
    {
        if ($this->actions👷CreateRemoveTokenForOrg instanceof Operator\Actions\CreateRemoveTokenForOrg === false) {
            $this->actions👷CreateRemoveTokenForOrg = new Operator\Actions\CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForOrg;
    }

    public function actions👷GetSelfHostedRunnerForOrg(): Operator\Actions\GetSelfHostedRunnerForOrg
    {
        if ($this->actions👷GetSelfHostedRunnerForOrg instanceof Operator\Actions\GetSelfHostedRunnerForOrg === false) {
            $this->actions👷GetSelfHostedRunnerForOrg = new Operator\Actions\GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForOrg;
    }

    public function actions👷DeleteSelfHostedRunnerFromOrg(): Operator\Actions\DeleteSelfHostedRunnerFromOrg
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromOrg instanceof Operator\Actions\DeleteSelfHostedRunnerFromOrg === false) {
            $this->actions👷DeleteSelfHostedRunnerFromOrg = new Operator\Actions\DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromOrg;
    }

    public function actions👷ListLabelsForSelfHostedRunnerForOrg(): Operator\Actions\ListLabelsForSelfHostedRunnerForOrg
    {
        if ($this->actions👷ListLabelsForSelfHostedRunnerForOrg instanceof Operator\Actions\ListLabelsForSelfHostedRunnerForOrg === false) {
            $this->actions👷ListLabelsForSelfHostedRunnerForOrg = new Operator\Actions\ListLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷ListLabelsForSelfHostedRunnerForOrg;
    }

    public function actions👷SetCustomLabelsForSelfHostedRunnerForOrg(): Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg
    {
        if ($this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg instanceof Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg === false) {
            $this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg = new Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷SetCustomLabelsForSelfHostedRunnerForOrg;
    }

    public function actions👷AddCustomLabelsToSelfHostedRunnerForOrg(): Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg
    {
        if ($this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg instanceof Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg === false) {
            $this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg = new Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷AddCustomLabelsToSelfHostedRunnerForOrg;
    }

    public function actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg(): Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg
    {
        if ($this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg instanceof Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg === false) {
            $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg = new Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg;
    }

    public function actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg(): Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg
    {
        if ($this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg instanceof Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg === false) {
            $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg = new Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg;
    }

    public function actions👷ListOrgSecrets(): Operator\Actions\ListOrgSecrets
    {
        if ($this->actions👷ListOrgSecrets instanceof Operator\Actions\ListOrgSecrets === false) {
            $this->actions👷ListOrgSecrets = new Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets());
        }

        return $this->actions👷ListOrgSecrets;
    }

    public function actions👷GetOrgPublicKey(): Operator\Actions\GetOrgPublicKey
    {
        if ($this->actions👷GetOrgPublicKey instanceof Operator\Actions\GetOrgPublicKey === false) {
            $this->actions👷GetOrgPublicKey = new Operator\Actions\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetOrgPublicKey;
    }

    public function actions👷GetOrgSecret(): Operator\Actions\GetOrgSecret
    {
        if ($this->actions👷GetOrgSecret instanceof Operator\Actions\GetOrgSecret === false) {
            $this->actions👷GetOrgSecret = new Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetOrgSecret;
    }

    public function actions👷CreateOrUpdateOrgSecret(): Operator\Actions\CreateOrUpdateOrgSecret
    {
        if ($this->actions👷CreateOrUpdateOrgSecret instanceof Operator\Actions\CreateOrUpdateOrgSecret === false) {
            $this->actions👷CreateOrUpdateOrgSecret = new Operator\Actions\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateOrgSecret;
    }

    public function actions👷DeleteOrgSecret(): Operator\Actions\DeleteOrgSecret
    {
        if ($this->actions👷DeleteOrgSecret instanceof Operator\Actions\DeleteOrgSecret === false) {
            $this->actions👷DeleteOrgSecret = new Operator\Actions\DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgSecret;
    }

    public function actions👷ListSelectedReposForOrgSecret(): Operator\Actions\ListSelectedReposForOrgSecret
    {
        if ($this->actions👷ListSelectedReposForOrgSecret instanceof Operator\Actions\ListSelectedReposForOrgSecret === false) {
            $this->actions👷ListSelectedReposForOrgSecret = new Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgSecret;
    }

    public function actions👷SetSelectedReposForOrgSecret(): Operator\Actions\SetSelectedReposForOrgSecret
    {
        if ($this->actions👷SetSelectedReposForOrgSecret instanceof Operator\Actions\SetSelectedReposForOrgSecret === false) {
            $this->actions👷SetSelectedReposForOrgSecret = new Operator\Actions\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgSecret;
    }

    public function actions👷AddSelectedRepoToOrgSecret(): Operator\Actions\AddSelectedRepoToOrgSecret
    {
        if ($this->actions👷AddSelectedRepoToOrgSecret instanceof Operator\Actions\AddSelectedRepoToOrgSecret === false) {
            $this->actions👷AddSelectedRepoToOrgSecret = new Operator\Actions\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgSecret;
    }

    public function actions👷RemoveSelectedRepoFromOrgSecret(): Operator\Actions\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgSecret instanceof Operator\Actions\RemoveSelectedRepoFromOrgSecret === false) {
            $this->actions👷RemoveSelectedRepoFromOrgSecret = new Operator\Actions\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgSecret;
    }

    public function actions👷ListOrgVariables(): Operator\Actions\ListOrgVariables
    {
        if ($this->actions👷ListOrgVariables instanceof Operator\Actions\ListOrgVariables === false) {
            $this->actions👷ListOrgVariables = new Operator\Actions\ListOrgVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->actions👷ListOrgVariables;
    }

    public function actions👷CreateOrgVariable(): Operator\Actions\CreateOrgVariable
    {
        if ($this->actions👷CreateOrgVariable instanceof Operator\Actions\CreateOrgVariable === false) {
            $this->actions👷CreateOrgVariable = new Operator\Actions\CreateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->actions👷CreateOrgVariable;
    }

    public function actions👷GetOrgVariable(): Operator\Actions\GetOrgVariable
    {
        if ($this->actions👷GetOrgVariable instanceof Operator\Actions\GetOrgVariable === false) {
            $this->actions👷GetOrgVariable = new Operator\Actions\GetOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name());
        }

        return $this->actions👷GetOrgVariable;
    }

    public function actions👷DeleteOrgVariable(): Operator\Actions\DeleteOrgVariable
    {
        if ($this->actions👷DeleteOrgVariable instanceof Operator\Actions\DeleteOrgVariable === false) {
            $this->actions👷DeleteOrgVariable = new Operator\Actions\DeleteOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteOrgVariable;
    }

    public function actions👷UpdateOrgVariable(): Operator\Actions\UpdateOrgVariable
    {
        if ($this->actions👷UpdateOrgVariable instanceof Operator\Actions\UpdateOrgVariable === false) {
            $this->actions👷UpdateOrgVariable = new Operator\Actions\UpdateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateOrgVariable;
    }

    public function actions👷ListSelectedReposForOrgVariable(): Operator\Actions\ListSelectedReposForOrgVariable
    {
        if ($this->actions👷ListSelectedReposForOrgVariable instanceof Operator\Actions\ListSelectedReposForOrgVariable === false) {
            $this->actions👷ListSelectedReposForOrgVariable = new Operator\Actions\ListSelectedReposForOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories());
        }

        return $this->actions👷ListSelectedReposForOrgVariable;
    }

    public function actions👷SetSelectedReposForOrgVariable(): Operator\Actions\SetSelectedReposForOrgVariable
    {
        if ($this->actions👷SetSelectedReposForOrgVariable instanceof Operator\Actions\SetSelectedReposForOrgVariable === false) {
            $this->actions👷SetSelectedReposForOrgVariable = new Operator\Actions\SetSelectedReposForOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetSelectedReposForOrgVariable;
    }

    public function actions👷AddSelectedRepoToOrgVariable(): Operator\Actions\AddSelectedRepoToOrgVariable
    {
        if ($this->actions👷AddSelectedRepoToOrgVariable instanceof Operator\Actions\AddSelectedRepoToOrgVariable === false) {
            $this->actions👷AddSelectedRepoToOrgVariable = new Operator\Actions\AddSelectedRepoToOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷AddSelectedRepoToOrgVariable;
    }

    public function actions👷RemoveSelectedRepoFromOrgVariable(): Operator\Actions\RemoveSelectedRepoFromOrgVariable
    {
        if ($this->actions👷RemoveSelectedRepoFromOrgVariable instanceof Operator\Actions\RemoveSelectedRepoFromOrgVariable === false) {
            $this->actions👷RemoveSelectedRepoFromOrgVariable = new Operator\Actions\RemoveSelectedRepoFromOrgVariable($this->browser, $this->authentication);
        }

        return $this->actions👷RemoveSelectedRepoFromOrgVariable;
    }

    public function orgs👷ListBlockedUsers(): Operator\Orgs\ListBlockedUsers
    {
        if ($this->orgs👷ListBlockedUsers instanceof Operator\Orgs\ListBlockedUsers === false) {
            $this->orgs👷ListBlockedUsers = new Operator\Orgs\ListBlockedUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());
        }

        return $this->orgs👷ListBlockedUsers;
    }

    public function orgs👷ListBlockedUsersListing(): Operator\Orgs\ListBlockedUsersListing
    {
        if ($this->orgs👷ListBlockedUsersListing instanceof Operator\Orgs\ListBlockedUsersListing === false) {
            $this->orgs👷ListBlockedUsersListing = new Operator\Orgs\ListBlockedUsersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());
        }

        return $this->orgs👷ListBlockedUsersListing;
    }

    public function orgs👷CheckBlockedUser(): Operator\Orgs\CheckBlockedUser
    {
        if ($this->orgs👷CheckBlockedUser instanceof Operator\Orgs\CheckBlockedUser === false) {
            $this->orgs👷CheckBlockedUser = new Operator\Orgs\CheckBlockedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->orgs👷CheckBlockedUser;
    }

    public function orgs👷BlockUser(): Operator\Orgs\BlockUser
    {
        if ($this->orgs👷BlockUser instanceof Operator\Orgs\BlockUser === false) {
            $this->orgs👷BlockUser = new Operator\Orgs\BlockUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->orgs👷BlockUser;
    }

    public function orgs👷UnblockUser(): Operator\Orgs\UnblockUser
    {
        if ($this->orgs👷UnblockUser instanceof Operator\Orgs\UnblockUser === false) {
            $this->orgs👷UnblockUser = new Operator\Orgs\UnblockUser($this->browser, $this->authentication);
        }

        return $this->orgs👷UnblockUser;
    }

    public function codeScanning👷ListAlertsForOrg(): Operator\CodeScanning\ListAlertsForOrg
    {
        if ($this->codeScanning👷ListAlertsForOrg instanceof Operator\CodeScanning\ListAlertsForOrg === false) {
            $this->codeScanning👷ListAlertsForOrg = new Operator\CodeScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrg;
    }

    public function codeScanning👷ListAlertsForOrgListing(): Operator\CodeScanning\ListAlertsForOrgListing
    {
        if ($this->codeScanning👷ListAlertsForOrgListing instanceof Operator\CodeScanning\ListAlertsForOrgListing === false) {
            $this->codeScanning👷ListAlertsForOrgListing = new Operator\CodeScanning\ListAlertsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForOrgListing;
    }

    public function codespaces👷ListInOrganization(): Operator\Codespaces\ListInOrganization
    {
        if ($this->codespaces👷ListInOrganization instanceof Operator\Codespaces\ListInOrganization === false) {
            $this->codespaces👷ListInOrganization = new Operator\Codespaces\ListInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces());
        }

        return $this->codespaces👷ListInOrganization;
    }

    public function codespaces👷SetCodespacesAccess(): Operator\Codespaces\SetCodespacesAccess
    {
        if ($this->codespaces👷SetCodespacesAccess instanceof Operator\Codespaces\SetCodespacesAccess === false) {
            $this->codespaces👷SetCodespacesAccess = new Operator\Codespaces\SetCodespacesAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access());
        }

        return $this->codespaces👷SetCodespacesAccess;
    }

    public function codespaces👷SetCodespacesAccessUsers(): Operator\Codespaces\SetCodespacesAccessUsers
    {
        if ($this->codespaces👷SetCodespacesAccessUsers instanceof Operator\Codespaces\SetCodespacesAccessUsers === false) {
            $this->codespaces👷SetCodespacesAccessUsers = new Operator\Codespaces\SetCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());
        }

        return $this->codespaces👷SetCodespacesAccessUsers;
    }

    public function codespaces👷DeleteCodespacesAccessUsers(): Operator\Codespaces\DeleteCodespacesAccessUsers
    {
        if ($this->codespaces👷DeleteCodespacesAccessUsers instanceof Operator\Codespaces\DeleteCodespacesAccessUsers === false) {
            $this->codespaces👷DeleteCodespacesAccessUsers = new Operator\Codespaces\DeleteCodespacesAccessUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers());
        }

        return $this->codespaces👷DeleteCodespacesAccessUsers;
    }

    public function codespaces👷ListOrgSecrets(): Operator\Codespaces\ListOrgSecrets
    {
        if ($this->codespaces👷ListOrgSecrets instanceof Operator\Codespaces\ListOrgSecrets === false) {
            $this->codespaces👷ListOrgSecrets = new Operator\Codespaces\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListOrgSecrets;
    }

    public function codespaces👷GetOrgPublicKey(): Operator\Codespaces\GetOrgPublicKey
    {
        if ($this->codespaces👷GetOrgPublicKey instanceof Operator\Codespaces\GetOrgPublicKey === false) {
            $this->codespaces👷GetOrgPublicKey = new Operator\Codespaces\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetOrgPublicKey;
    }

    public function codespaces👷GetOrgSecret(): Operator\Codespaces\GetOrgSecret
    {
        if ($this->codespaces👷GetOrgSecret instanceof Operator\Codespaces\GetOrgSecret === false) {
            $this->codespaces👷GetOrgSecret = new Operator\Codespaces\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetOrgSecret;
    }

    public function codespaces👷CreateOrUpdateOrgSecret(): Operator\Codespaces\CreateOrUpdateOrgSecret
    {
        if ($this->codespaces👷CreateOrUpdateOrgSecret instanceof Operator\Codespaces\CreateOrUpdateOrgSecret === false) {
            $this->codespaces👷CreateOrUpdateOrgSecret = new Operator\Codespaces\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateOrgSecret;
    }

    public function codespaces👷DeleteOrgSecret(): Operator\Codespaces\DeleteOrgSecret
    {
        if ($this->codespaces👷DeleteOrgSecret instanceof Operator\Codespaces\DeleteOrgSecret === false) {
            $this->codespaces👷DeleteOrgSecret = new Operator\Codespaces\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷DeleteOrgSecret;
    }

    public function codespaces👷ListSelectedReposForOrgSecret(): Operator\Codespaces\ListSelectedReposForOrgSecret
    {
        if ($this->codespaces👷ListSelectedReposForOrgSecret instanceof Operator\Codespaces\ListSelectedReposForOrgSecret === false) {
            $this->codespaces👷ListSelectedReposForOrgSecret = new Operator\Codespaces\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷ListSelectedReposForOrgSecret;
    }

    public function codespaces👷SetSelectedReposForOrgSecret(): Operator\Codespaces\SetSelectedReposForOrgSecret
    {
        if ($this->codespaces👷SetSelectedReposForOrgSecret instanceof Operator\Codespaces\SetSelectedReposForOrgSecret === false) {
            $this->codespaces👷SetSelectedReposForOrgSecret = new Operator\Codespaces\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷SetSelectedReposForOrgSecret;
    }

    public function codespaces👷AddSelectedRepoToOrgSecret(): Operator\Codespaces\AddSelectedRepoToOrgSecret
    {
        if ($this->codespaces👷AddSelectedRepoToOrgSecret instanceof Operator\Codespaces\AddSelectedRepoToOrgSecret === false) {
            $this->codespaces👷AddSelectedRepoToOrgSecret = new Operator\Codespaces\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷AddSelectedRepoToOrgSecret;
    }

    public function codespaces👷RemoveSelectedRepoFromOrgSecret(): Operator\Codespaces\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->codespaces👷RemoveSelectedRepoFromOrgSecret instanceof Operator\Codespaces\RemoveSelectedRepoFromOrgSecret === false) {
            $this->codespaces👷RemoveSelectedRepoFromOrgSecret = new Operator\Codespaces\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷RemoveSelectedRepoFromOrgSecret;
    }

    public function copilot👷GetCopilotOrganizationDetails(): Operator\Copilot\GetCopilotOrganizationDetails
    {
        if ($this->copilot👷GetCopilotOrganizationDetails instanceof Operator\Copilot\GetCopilotOrganizationDetails === false) {
            $this->copilot👷GetCopilotOrganizationDetails = new Operator\Copilot\GetCopilotOrganizationDetails($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing());
        }

        return $this->copilot👷GetCopilotOrganizationDetails;
    }

    public function copilot👷ListCopilotSeats(): Operator\Copilot\ListCopilotSeats
    {
        if ($this->copilot👷ListCopilotSeats instanceof Operator\Copilot\ListCopilotSeats === false) {
            $this->copilot👷ListCopilotSeats = new Operator\Copilot\ListCopilotSeats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats());
        }

        return $this->copilot👷ListCopilotSeats;
    }

    public function copilot👷AddCopilotForBusinessSeatsForTeams(): Operator\Copilot\AddCopilotForBusinessSeatsForTeams
    {
        if ($this->copilot👷AddCopilotForBusinessSeatsForTeams instanceof Operator\Copilot\AddCopilotForBusinessSeatsForTeams === false) {
            $this->copilot👷AddCopilotForBusinessSeatsForTeams = new Operator\Copilot\AddCopilotForBusinessSeatsForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->copilot👷AddCopilotForBusinessSeatsForTeams;
    }

    public function copilot👷CancelCopilotSeatAssignmentForTeams(): Operator\Copilot\CancelCopilotSeatAssignmentForTeams
    {
        if ($this->copilot👷CancelCopilotSeatAssignmentForTeams instanceof Operator\Copilot\CancelCopilotSeatAssignmentForTeams === false) {
            $this->copilot👷CancelCopilotSeatAssignmentForTeams = new Operator\Copilot\CancelCopilotSeatAssignmentForTeams($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams());
        }

        return $this->copilot👷CancelCopilotSeatAssignmentForTeams;
    }

    public function copilot👷AddCopilotForBusinessSeatsForUsers(): Operator\Copilot\AddCopilotForBusinessSeatsForUsers
    {
        if ($this->copilot👷AddCopilotForBusinessSeatsForUsers instanceof Operator\Copilot\AddCopilotForBusinessSeatsForUsers === false) {
            $this->copilot👷AddCopilotForBusinessSeatsForUsers = new Operator\Copilot\AddCopilotForBusinessSeatsForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->copilot👷AddCopilotForBusinessSeatsForUsers;
    }

    public function copilot👷CancelCopilotSeatAssignmentForUsers(): Operator\Copilot\CancelCopilotSeatAssignmentForUsers
    {
        if ($this->copilot👷CancelCopilotSeatAssignmentForUsers instanceof Operator\Copilot\CancelCopilotSeatAssignmentForUsers === false) {
            $this->copilot👷CancelCopilotSeatAssignmentForUsers = new Operator\Copilot\CancelCopilotSeatAssignmentForUsers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers());
        }

        return $this->copilot👷CancelCopilotSeatAssignmentForUsers;
    }

    public function dependabot👷ListAlertsForOrg(): Operator\Dependabot\ListAlertsForOrg
    {
        if ($this->dependabot👷ListAlertsForOrg instanceof Operator\Dependabot\ListAlertsForOrg === false) {
            $this->dependabot👷ListAlertsForOrg = new Operator\Dependabot\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForOrg;
    }

    public function dependabot👷ListOrgSecrets(): Operator\Dependabot\ListOrgSecrets
    {
        if ($this->dependabot👷ListOrgSecrets instanceof Operator\Dependabot\ListOrgSecrets === false) {
            $this->dependabot👷ListOrgSecrets = new Operator\Dependabot\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets());
        }

        return $this->dependabot👷ListOrgSecrets;
    }

    public function dependabot👷GetOrgPublicKey(): Operator\Dependabot\GetOrgPublicKey
    {
        if ($this->dependabot👷GetOrgPublicKey instanceof Operator\Dependabot\GetOrgPublicKey === false) {
            $this->dependabot👷GetOrgPublicKey = new Operator\Dependabot\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->dependabot👷GetOrgPublicKey;
    }

    public function dependabot👷GetOrgSecret(): Operator\Dependabot\GetOrgSecret
    {
        if ($this->dependabot👷GetOrgSecret instanceof Operator\Dependabot\GetOrgSecret === false) {
            $this->dependabot👷GetOrgSecret = new Operator\Dependabot\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷GetOrgSecret;
    }

    public function dependabot👷CreateOrUpdateOrgSecret(): Operator\Dependabot\CreateOrUpdateOrgSecret
    {
        if ($this->dependabot👷CreateOrUpdateOrgSecret instanceof Operator\Dependabot\CreateOrUpdateOrgSecret === false) {
            $this->dependabot👷CreateOrUpdateOrgSecret = new Operator\Dependabot\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷CreateOrUpdateOrgSecret;
    }

    public function dependabot👷DeleteOrgSecret(): Operator\Dependabot\DeleteOrgSecret
    {
        if ($this->dependabot👷DeleteOrgSecret instanceof Operator\Dependabot\DeleteOrgSecret === false) {
            $this->dependabot👷DeleteOrgSecret = new Operator\Dependabot\DeleteOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷DeleteOrgSecret;
    }

    public function dependabot👷ListSelectedReposForOrgSecret(): Operator\Dependabot\ListSelectedReposForOrgSecret
    {
        if ($this->dependabot👷ListSelectedReposForOrgSecret instanceof Operator\Dependabot\ListSelectedReposForOrgSecret === false) {
            $this->dependabot👷ListSelectedReposForOrgSecret = new Operator\Dependabot\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->dependabot👷ListSelectedReposForOrgSecret;
    }

    public function dependabot👷SetSelectedReposForOrgSecret(): Operator\Dependabot\SetSelectedReposForOrgSecret
    {
        if ($this->dependabot👷SetSelectedReposForOrgSecret instanceof Operator\Dependabot\SetSelectedReposForOrgSecret === false) {
            $this->dependabot👷SetSelectedReposForOrgSecret = new Operator\Dependabot\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->dependabot👷SetSelectedReposForOrgSecret;
    }

    public function dependabot👷AddSelectedRepoToOrgSecret(): Operator\Dependabot\AddSelectedRepoToOrgSecret
    {
        if ($this->dependabot👷AddSelectedRepoToOrgSecret instanceof Operator\Dependabot\AddSelectedRepoToOrgSecret === false) {
            $this->dependabot👷AddSelectedRepoToOrgSecret = new Operator\Dependabot\AddSelectedRepoToOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷AddSelectedRepoToOrgSecret;
    }

    public function dependabot👷RemoveSelectedRepoFromOrgSecret(): Operator\Dependabot\RemoveSelectedRepoFromOrgSecret
    {
        if ($this->dependabot👷RemoveSelectedRepoFromOrgSecret instanceof Operator\Dependabot\RemoveSelectedRepoFromOrgSecret === false) {
            $this->dependabot👷RemoveSelectedRepoFromOrgSecret = new Operator\Dependabot\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷RemoveSelectedRepoFromOrgSecret;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForOrganization(): Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForOrganization instanceof Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForOrganization = new Operator\Packages\ListDockerMigrationConflictingPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForOrganization;
    }

    public function activity👷ListPublicOrgEvents(): Operator\Activity\ListPublicOrgEvents
    {
        if ($this->activity👷ListPublicOrgEvents instanceof Operator\Activity\ListPublicOrgEvents === false) {
            $this->activity👷ListPublicOrgEvents = new Operator\Activity\ListPublicOrgEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events());
        }

        return $this->activity👷ListPublicOrgEvents;
    }

    public function activity👷ListPublicOrgEventsListing(): Operator\Activity\ListPublicOrgEventsListing
    {
        if ($this->activity👷ListPublicOrgEventsListing instanceof Operator\Activity\ListPublicOrgEventsListing === false) {
            $this->activity👷ListPublicOrgEventsListing = new Operator\Activity\ListPublicOrgEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Events());
        }

        return $this->activity👷ListPublicOrgEventsListing;
    }

    public function orgs👷ListFailedInvitations(): Operator\Orgs\ListFailedInvitations
    {
        if ($this->orgs👷ListFailedInvitations instanceof Operator\Orgs\ListFailedInvitations === false) {
            $this->orgs👷ListFailedInvitations = new Operator\Orgs\ListFailedInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());
        }

        return $this->orgs👷ListFailedInvitations;
    }

    public function orgs👷ListFailedInvitationsListing(): Operator\Orgs\ListFailedInvitationsListing
    {
        if ($this->orgs👷ListFailedInvitationsListing instanceof Operator\Orgs\ListFailedInvitationsListing === false) {
            $this->orgs👷ListFailedInvitationsListing = new Operator\Orgs\ListFailedInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());
        }

        return $this->orgs👷ListFailedInvitationsListing;
    }

    public function orgs👷ListWebhooks(): Operator\Orgs\ListWebhooks
    {
        if ($this->orgs👷ListWebhooks instanceof Operator\Orgs\ListWebhooks === false) {
            $this->orgs👷ListWebhooks = new Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooks;
    }

    public function orgs👷ListWebhooksListing(): Operator\Orgs\ListWebhooksListing
    {
        if ($this->orgs👷ListWebhooksListing instanceof Operator\Orgs\ListWebhooksListing === false) {
            $this->orgs👷ListWebhooksListing = new Operator\Orgs\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷ListWebhooksListing;
    }

    public function orgs👷CreateWebhook(): Operator\Orgs\CreateWebhook
    {
        if ($this->orgs👷CreateWebhook instanceof Operator\Orgs\CreateWebhook === false) {
            $this->orgs👷CreateWebhook = new Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->orgs👷CreateWebhook;
    }

    public function orgs👷GetWebhook(): Operator\Orgs\GetWebhook
    {
        if ($this->orgs👷GetWebhook instanceof Operator\Orgs\GetWebhook === false) {
            $this->orgs👷GetWebhook = new Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷GetWebhook;
    }

    public function orgs👷DeleteWebhook(): Operator\Orgs\DeleteWebhook
    {
        if ($this->orgs👷DeleteWebhook instanceof Operator\Orgs\DeleteWebhook === false) {
            $this->orgs👷DeleteWebhook = new Operator\Orgs\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷DeleteWebhook;
    }

    public function orgs👷UpdateWebhook(): Operator\Orgs\UpdateWebhook
    {
        if ($this->orgs👷UpdateWebhook instanceof Operator\Orgs\UpdateWebhook === false) {
            $this->orgs👷UpdateWebhook = new Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->orgs👷UpdateWebhook;
    }

    public function orgs👷GetWebhookConfigForOrg(): Operator\Orgs\GetWebhookConfigForOrg
    {
        if ($this->orgs👷GetWebhookConfigForOrg instanceof Operator\Orgs\GetWebhookConfigForOrg === false) {
            $this->orgs👷GetWebhookConfigForOrg = new Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷GetWebhookConfigForOrg;
    }

    public function orgs👷UpdateWebhookConfigForOrg(): Operator\Orgs\UpdateWebhookConfigForOrg
    {
        if ($this->orgs👷UpdateWebhookConfigForOrg instanceof Operator\Orgs\UpdateWebhookConfigForOrg === false) {
            $this->orgs👷UpdateWebhookConfigForOrg = new Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->orgs👷UpdateWebhookConfigForOrg;
    }

    public function orgs👷ListWebhookDeliveries(): Operator\Orgs\ListWebhookDeliveries
    {
        if ($this->orgs👷ListWebhookDeliveries instanceof Operator\Orgs\ListWebhookDeliveries === false) {
            $this->orgs👷ListWebhookDeliveries = new Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->orgs👷ListWebhookDeliveries;
    }

    public function orgs👷GetWebhookDelivery(): Operator\Orgs\GetWebhookDelivery
    {
        if ($this->orgs👷GetWebhookDelivery instanceof Operator\Orgs\GetWebhookDelivery === false) {
            $this->orgs👷GetWebhookDelivery = new Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->orgs👷GetWebhookDelivery;
    }

    public function orgs👷RedeliverWebhookDelivery(): Operator\Orgs\RedeliverWebhookDelivery
    {
        if ($this->orgs👷RedeliverWebhookDelivery instanceof Operator\Orgs\RedeliverWebhookDelivery === false) {
            $this->orgs👷RedeliverWebhookDelivery = new Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->orgs👷RedeliverWebhookDelivery;
    }

    public function orgs👷PingWebhook(): Operator\Orgs\PingWebhook
    {
        if ($this->orgs👷PingWebhook instanceof Operator\Orgs\PingWebhook === false) {
            $this->orgs👷PingWebhook = new Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->orgs👷PingWebhook;
    }

    public function apps👷GetOrgInstallation(): Operator\Apps\GetOrgInstallation
    {
        if ($this->apps👷GetOrgInstallation instanceof Operator\Apps\GetOrgInstallation === false) {
            $this->apps👷GetOrgInstallation = new Operator\Apps\GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());
        }

        return $this->apps👷GetOrgInstallation;
    }

    public function orgs👷ListAppInstallations(): Operator\Orgs\ListAppInstallations
    {
        if ($this->orgs👷ListAppInstallations instanceof Operator\Orgs\ListAppInstallations === false) {
            $this->orgs👷ListAppInstallations = new Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->orgs👷ListAppInstallations;
    }

    public function interactions👷GetRestrictionsForOrg(): Operator\Interactions\GetRestrictionsForOrg
    {
        if ($this->interactions👷GetRestrictionsForOrg instanceof Operator\Interactions\GetRestrictionsForOrg === false) {
            $this->interactions👷GetRestrictionsForOrg = new Operator\Interactions\GetRestrictionsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForOrg;
    }

    public function interactions👷SetRestrictionsForOrg(): Operator\Interactions\SetRestrictionsForOrg
    {
        if ($this->interactions👷SetRestrictionsForOrg instanceof Operator\Interactions\SetRestrictionsForOrg === false) {
            $this->interactions👷SetRestrictionsForOrg = new Operator\Interactions\SetRestrictionsForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForOrg;
    }

    public function interactions👷RemoveRestrictionsForOrg(): Operator\Interactions\RemoveRestrictionsForOrg
    {
        if ($this->interactions👷RemoveRestrictionsForOrg instanceof Operator\Interactions\RemoveRestrictionsForOrg === false) {
            $this->interactions👷RemoveRestrictionsForOrg = new Operator\Interactions\RemoveRestrictionsForOrg($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForOrg;
    }

    public function orgs👷ListPendingInvitations(): Operator\Orgs\ListPendingInvitations
    {
        if ($this->orgs👷ListPendingInvitations instanceof Operator\Orgs\ListPendingInvitations === false) {
            $this->orgs👷ListPendingInvitations = new Operator\Orgs\ListPendingInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷ListPendingInvitations;
    }

    public function orgs👷ListPendingInvitationsListing(): Operator\Orgs\ListPendingInvitationsListing
    {
        if ($this->orgs👷ListPendingInvitationsListing instanceof Operator\Orgs\ListPendingInvitationsListing === false) {
            $this->orgs👷ListPendingInvitationsListing = new Operator\Orgs\ListPendingInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷ListPendingInvitationsListing;
    }

    public function orgs👷CreateInvitation(): Operator\Orgs\CreateInvitation
    {
        if ($this->orgs👷CreateInvitation instanceof Operator\Orgs\CreateInvitation === false) {
            $this->orgs👷CreateInvitation = new Operator\Orgs\CreateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->orgs👷CreateInvitation;
    }

    public function orgs👷CancelInvitation(): Operator\Orgs\CancelInvitation
    {
        if ($this->orgs👷CancelInvitation instanceof Operator\Orgs\CancelInvitation === false) {
            $this->orgs👷CancelInvitation = new Operator\Orgs\CancelInvitation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId());
        }

        return $this->orgs👷CancelInvitation;
    }

    public function orgs👷ListInvitationTeams(): Operator\Orgs\ListInvitationTeams
    {
        if ($this->orgs👷ListInvitationTeams instanceof Operator\Orgs\ListInvitationTeams === false) {
            $this->orgs👷ListInvitationTeams = new Operator\Orgs\ListInvitationTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());
        }

        return $this->orgs👷ListInvitationTeams;
    }

    public function orgs👷ListInvitationTeamsListing(): Operator\Orgs\ListInvitationTeamsListing
    {
        if ($this->orgs👷ListInvitationTeamsListing instanceof Operator\Orgs\ListInvitationTeamsListing === false) {
            $this->orgs👷ListInvitationTeamsListing = new Operator\Orgs\ListInvitationTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());
        }

        return $this->orgs👷ListInvitationTeamsListing;
    }

    public function issues👷ListForOrg(): Operator\Issues\ListForOrg
    {
        if ($this->issues👷ListForOrg instanceof Operator\Issues\ListForOrg === false) {
            $this->issues👷ListForOrg = new Operator\Issues\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrg;
    }

    public function issues👷ListForOrgListing(): Operator\Issues\ListForOrgListing
    {
        if ($this->issues👷ListForOrgListing instanceof Operator\Issues\ListForOrgListing === false) {
            $this->issues👷ListForOrgListing = new Operator\Issues\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Issues());
        }

        return $this->issues👷ListForOrgListing;
    }

    public function orgs👷ListMembers(): Operator\Orgs\ListMembers
    {
        if ($this->orgs👷ListMembers instanceof Operator\Orgs\ListMembers === false) {
            $this->orgs👷ListMembers = new Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembers;
    }

    public function orgs👷ListMembersListing(): Operator\Orgs\ListMembersListing
    {
        if ($this->orgs👷ListMembersListing instanceof Operator\Orgs\ListMembersListing === false) {
            $this->orgs👷ListMembersListing = new Operator\Orgs\ListMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->orgs👷ListMembersListing;
    }

    public function orgs👷CheckMembershipForUser(): Operator\Orgs\CheckMembershipForUser
    {
        if ($this->orgs👷CheckMembershipForUser instanceof Operator\Orgs\CheckMembershipForUser === false) {
            $this->orgs👷CheckMembershipForUser = new Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckMembershipForUser;
    }

    public function orgs👷RemoveMember(): Operator\Orgs\RemoveMember
    {
        if ($this->orgs👷RemoveMember instanceof Operator\Orgs\RemoveMember === false) {
            $this->orgs👷RemoveMember = new Operator\Orgs\RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->orgs👷RemoveMember;
    }

    public function codespaces👷GetCodespacesForUserInOrg(): Operator\Codespaces\GetCodespacesForUserInOrg
    {
        if ($this->codespaces👷GetCodespacesForUserInOrg instanceof Operator\Codespaces\GetCodespacesForUserInOrg === false) {
            $this->codespaces👷GetCodespacesForUserInOrg = new Operator\Codespaces\GetCodespacesForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces());
        }

        return $this->codespaces👷GetCodespacesForUserInOrg;
    }

    public function codespaces👷DeleteFromOrganization(): Operator\Codespaces\DeleteFromOrganization
    {
        if ($this->codespaces👷DeleteFromOrganization instanceof Operator\Codespaces\DeleteFromOrganization === false) {
            $this->codespaces👷DeleteFromOrganization = new Operator\Codespaces\DeleteFromOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷DeleteFromOrganization;
    }

    public function codespaces👷StopInOrganization(): Operator\Codespaces\StopInOrganization
    {
        if ($this->codespaces👷StopInOrganization instanceof Operator\Codespaces\StopInOrganization === false) {
            $this->codespaces👷StopInOrganization = new Operator\Codespaces\StopInOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->codespaces👷StopInOrganization;
    }

    public function copilot👷GetCopilotSeatAssignmentDetailsForUser(): Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser
    {
        if ($this->copilot👷GetCopilotSeatAssignmentDetailsForUser instanceof Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser === false) {
            $this->copilot👷GetCopilotSeatAssignmentDetailsForUser = new Operator\Copilot\GetCopilotSeatAssignmentDetailsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot());
        }

        return $this->copilot👷GetCopilotSeatAssignmentDetailsForUser;
    }

    public function orgs👷GetMembershipForUser(): Operator\Orgs\GetMembershipForUser
    {
        if ($this->orgs👷GetMembershipForUser instanceof Operator\Orgs\GetMembershipForUser === false) {
            $this->orgs👷GetMembershipForUser = new Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷GetMembershipForUser;
    }

    public function orgs👷SetMembershipForUser(): Operator\Orgs\SetMembershipForUser
    {
        if ($this->orgs👷SetMembershipForUser instanceof Operator\Orgs\SetMembershipForUser === false) {
            $this->orgs👷SetMembershipForUser = new Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷SetMembershipForUser;
    }

    public function orgs👷RemoveMembershipForUser(): Operator\Orgs\RemoveMembershipForUser
    {
        if ($this->orgs👷RemoveMembershipForUser instanceof Operator\Orgs\RemoveMembershipForUser === false) {
            $this->orgs👷RemoveMembershipForUser = new Operator\Orgs\RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->orgs👷RemoveMembershipForUser;
    }

    public function migrations👷ListForOrg(): Operator\Migrations\ListForOrg
    {
        if ($this->migrations👷ListForOrg instanceof Operator\Migrations\ListForOrg === false) {
            $this->migrations👷ListForOrg = new Operator\Migrations\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrg;
    }

    public function migrations👷ListForOrgListing(): Operator\Migrations\ListForOrgListing
    {
        if ($this->migrations👷ListForOrgListing instanceof Operator\Migrations\ListForOrgListing === false) {
            $this->migrations👷ListForOrgListing = new Operator\Migrations\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷ListForOrgListing;
    }

    public function migrations👷StartForOrg(): Operator\Migrations\StartForOrg
    {
        if ($this->migrations👷StartForOrg instanceof Operator\Migrations\StartForOrg === false) {
            $this->migrations👷StartForOrg = new Operator\Migrations\StartForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations());
        }

        return $this->migrations👷StartForOrg;
    }

    public function migrations👷GetStatusForOrg(): Operator\Migrations\GetStatusForOrg
    {
        if ($this->migrations👷GetStatusForOrg instanceof Operator\Migrations\GetStatusForOrg === false) {
            $this->migrations👷GetStatusForOrg = new Operator\Migrations\GetStatusForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForOrg;
    }

    public function migrations👷DownloadArchiveForOrg(): Operator\Migrations\DownloadArchiveForOrg
    {
        if ($this->migrations👷DownloadArchiveForOrg instanceof Operator\Migrations\DownloadArchiveForOrg === false) {
            $this->migrations👷DownloadArchiveForOrg = new Operator\Migrations\DownloadArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrg;
    }

    public function migrations👷DownloadArchiveForOrgStreaming(): Operator\Migrations\DownloadArchiveForOrgStreaming
    {
        if ($this->migrations👷DownloadArchiveForOrgStreaming instanceof Operator\Migrations\DownloadArchiveForOrgStreaming === false) {
            $this->migrations👷DownloadArchiveForOrgStreaming = new Operator\Migrations\DownloadArchiveForOrgStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DownloadArchiveForOrgStreaming;
    }

    public function migrations👷DeleteArchiveForOrg(): Operator\Migrations\DeleteArchiveForOrg
    {
        if ($this->migrations👷DeleteArchiveForOrg instanceof Operator\Migrations\DeleteArchiveForOrg === false) {
            $this->migrations👷DeleteArchiveForOrg = new Operator\Migrations\DeleteArchiveForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForOrg;
    }

    public function migrations👷UnlockRepoForOrg(): Operator\Migrations\UnlockRepoForOrg
    {
        if ($this->migrations👷UnlockRepoForOrg instanceof Operator\Migrations\UnlockRepoForOrg === false) {
            $this->migrations👷UnlockRepoForOrg = new Operator\Migrations\UnlockRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForOrg;
    }

    public function migrations👷ListReposForOrg(): Operator\Migrations\ListReposForOrg
    {
        if ($this->migrations👷ListReposForOrg instanceof Operator\Migrations\ListReposForOrg === false) {
            $this->migrations👷ListReposForOrg = new Operator\Migrations\ListReposForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrg;
    }

    public function migrations👷ListReposForOrgListing(): Operator\Migrations\ListReposForOrgListing
    {
        if ($this->migrations👷ListReposForOrgListing instanceof Operator\Migrations\ListReposForOrgListing === false) {
            $this->migrations👷ListReposForOrgListing = new Operator\Migrations\ListReposForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForOrgListing;
    }

    public function orgs👷ListOutsideCollaborators(): Operator\Orgs\ListOutsideCollaborators
    {
        if ($this->orgs👷ListOutsideCollaborators instanceof Operator\Orgs\ListOutsideCollaborators === false) {
            $this->orgs👷ListOutsideCollaborators = new Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaborators;
    }

    public function orgs👷ListOutsideCollaboratorsListing(): Operator\Orgs\ListOutsideCollaboratorsListing
    {
        if ($this->orgs👷ListOutsideCollaboratorsListing instanceof Operator\Orgs\ListOutsideCollaboratorsListing === false) {
            $this->orgs👷ListOutsideCollaboratorsListing = new Operator\Orgs\ListOutsideCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->orgs👷ListOutsideCollaboratorsListing;
    }

    public function orgs👷ConvertMemberToOutsideCollaborator(): Operator\Orgs\ConvertMemberToOutsideCollaborator
    {
        if ($this->orgs👷ConvertMemberToOutsideCollaborator instanceof Operator\Orgs\ConvertMemberToOutsideCollaborator === false) {
            $this->orgs👷ConvertMemberToOutsideCollaborator = new Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷ConvertMemberToOutsideCollaborator;
    }

    public function orgs👷RemoveOutsideCollaborator(): Operator\Orgs\RemoveOutsideCollaborator
    {
        if ($this->orgs👷RemoveOutsideCollaborator instanceof Operator\Orgs\RemoveOutsideCollaborator === false) {
            $this->orgs👷RemoveOutsideCollaborator = new Operator\Orgs\RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->orgs👷RemoveOutsideCollaborator;
    }

    public function packages👷ListPackagesForOrganization(): Operator\Packages\ListPackagesForOrganization
    {
        if ($this->packages👷ListPackagesForOrganization instanceof Operator\Packages\ListPackagesForOrganization === false) {
            $this->packages👷ListPackagesForOrganization = new Operator\Packages\ListPackagesForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages());
        }

        return $this->packages👷ListPackagesForOrganization;
    }

    public function packages👷ListPackagesForOrganizationListing(): Operator\Packages\ListPackagesForOrganizationListing
    {
        if ($this->packages👷ListPackagesForOrganizationListing instanceof Operator\Packages\ListPackagesForOrganizationListing === false) {
            $this->packages👷ListPackagesForOrganizationListing = new Operator\Packages\ListPackagesForOrganizationListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages());
        }

        return $this->packages👷ListPackagesForOrganizationListing;
    }

    public function packages👷GetPackageForOrganization(): Operator\Packages\GetPackageForOrganization
    {
        if ($this->packages👷GetPackageForOrganization instanceof Operator\Packages\GetPackageForOrganization === false) {
            $this->packages👷GetPackageForOrganization = new Operator\Packages\GetPackageForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForOrganization;
    }

    public function packages👷DeletePackageForOrg(): Operator\Packages\DeletePackageForOrg
    {
        if ($this->packages👷DeletePackageForOrg instanceof Operator\Packages\DeletePackageForOrg === false) {
            $this->packages👷DeletePackageForOrg = new Operator\Packages\DeletePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForOrg;
    }

    public function packages👷RestorePackageForOrg(): Operator\Packages\RestorePackageForOrg
    {
        if ($this->packages👷RestorePackageForOrg instanceof Operator\Packages\RestorePackageForOrg === false) {
            $this->packages👷RestorePackageForOrg = new Operator\Packages\RestorePackageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForOrg;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByOrg(): Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByOrg instanceof Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByOrg = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByOrg;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByOrgListing(): Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing instanceof Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByOrgListing;
    }

    public function packages👷GetPackageVersionForOrganization(): Operator\Packages\GetPackageVersionForOrganization
    {
        if ($this->packages👷GetPackageVersionForOrganization instanceof Operator\Packages\GetPackageVersionForOrganization === false) {
            $this->packages👷GetPackageVersionForOrganization = new Operator\Packages\GetPackageVersionForOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForOrganization;
    }

    public function packages👷DeletePackageVersionForOrg(): Operator\Packages\DeletePackageVersionForOrg
    {
        if ($this->packages👷DeletePackageVersionForOrg instanceof Operator\Packages\DeletePackageVersionForOrg === false) {
            $this->packages👷DeletePackageVersionForOrg = new Operator\Packages\DeletePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForOrg;
    }

    public function packages👷RestorePackageVersionForOrg(): Operator\Packages\RestorePackageVersionForOrg
    {
        if ($this->packages👷RestorePackageVersionForOrg instanceof Operator\Packages\RestorePackageVersionForOrg === false) {
            $this->packages👷RestorePackageVersionForOrg = new Operator\Packages\RestorePackageVersionForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForOrg;
    }

    public function orgs👷ListPatGrantRequests(): Operator\Orgs\ListPatGrantRequests
    {
        if ($this->orgs👷ListPatGrantRequests instanceof Operator\Orgs\ListPatGrantRequests === false) {
            $this->orgs👷ListPatGrantRequests = new Operator\Orgs\ListPatGrantRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ListPatGrantRequests;
    }

    public function orgs👷ListPatGrantRequestsListing(): Operator\Orgs\ListPatGrantRequestsListing
    {
        if ($this->orgs👷ListPatGrantRequestsListing instanceof Operator\Orgs\ListPatGrantRequestsListing === false) {
            $this->orgs👷ListPatGrantRequestsListing = new Operator\Orgs\ListPatGrantRequestsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ListPatGrantRequestsListing;
    }

    public function orgs👷ReviewPatGrantRequestsInBulk(): Operator\Orgs\ReviewPatGrantRequestsInBulk
    {
        if ($this->orgs👷ReviewPatGrantRequestsInBulk instanceof Operator\Orgs\ReviewPatGrantRequestsInBulk === false) {
            $this->orgs👷ReviewPatGrantRequestsInBulk = new Operator\Orgs\ReviewPatGrantRequestsInBulk($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->orgs👷ReviewPatGrantRequestsInBulk;
    }

    public function orgs👷ReviewPatGrantRequest(): Operator\Orgs\ReviewPatGrantRequest
    {
        if ($this->orgs👷ReviewPatGrantRequest instanceof Operator\Orgs\ReviewPatGrantRequest === false) {
            $this->orgs👷ReviewPatGrantRequest = new Operator\Orgs\ReviewPatGrantRequest($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId());
        }

        return $this->orgs👷ReviewPatGrantRequest;
    }

    public function orgs👷ListPatGrantRequestRepositories(): Operator\Orgs\ListPatGrantRequestRepositories
    {
        if ($this->orgs👷ListPatGrantRequestRepositories instanceof Operator\Orgs\ListPatGrantRequestRepositories === false) {
            $this->orgs👷ListPatGrantRequestRepositories = new Operator\Orgs\ListPatGrantRequestRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRequestRepositories;
    }

    public function orgs👷ListPatGrantRequestRepositoriesListing(): Operator\Orgs\ListPatGrantRequestRepositoriesListing
    {
        if ($this->orgs👷ListPatGrantRequestRepositoriesListing instanceof Operator\Orgs\ListPatGrantRequestRepositoriesListing === false) {
            $this->orgs👷ListPatGrantRequestRepositoriesListing = new Operator\Orgs\ListPatGrantRequestRepositoriesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRequestRepositoriesListing;
    }

    public function orgs👷ListPatGrants(): Operator\Orgs\ListPatGrants
    {
        if ($this->orgs👷ListPatGrants instanceof Operator\Orgs\ListPatGrants === false) {
            $this->orgs👷ListPatGrants = new Operator\Orgs\ListPatGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷ListPatGrants;
    }

    public function orgs👷ListPatGrantsListing(): Operator\Orgs\ListPatGrantsListing
    {
        if ($this->orgs👷ListPatGrantsListing instanceof Operator\Orgs\ListPatGrantsListing === false) {
            $this->orgs👷ListPatGrantsListing = new Operator\Orgs\ListPatGrantsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷ListPatGrantsListing;
    }

    public function orgs👷UpdatePatAccesses(): Operator\Orgs\UpdatePatAccesses
    {
        if ($this->orgs👷UpdatePatAccesses instanceof Operator\Orgs\UpdatePatAccesses === false) {
            $this->orgs👷UpdatePatAccesses = new Operator\Orgs\UpdatePatAccesses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->orgs👷UpdatePatAccesses;
    }

    public function orgs👷UpdatePatAccess(): Operator\Orgs\UpdatePatAccess
    {
        if ($this->orgs👷UpdatePatAccess instanceof Operator\Orgs\UpdatePatAccess === false) {
            $this->orgs👷UpdatePatAccess = new Operator\Orgs\UpdatePatAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId());
        }

        return $this->orgs👷UpdatePatAccess;
    }

    public function orgs👷ListPatGrantRepositories(): Operator\Orgs\ListPatGrantRepositories
    {
        if ($this->orgs👷ListPatGrantRepositories instanceof Operator\Orgs\ListPatGrantRepositories === false) {
            $this->orgs👷ListPatGrantRepositories = new Operator\Orgs\ListPatGrantRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRepositories;
    }

    public function orgs👷ListPatGrantRepositoriesListing(): Operator\Orgs\ListPatGrantRepositoriesListing
    {
        if ($this->orgs👷ListPatGrantRepositoriesListing instanceof Operator\Orgs\ListPatGrantRepositoriesListing === false) {
            $this->orgs👷ListPatGrantRepositoriesListing = new Operator\Orgs\ListPatGrantRepositoriesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());
        }

        return $this->orgs👷ListPatGrantRepositoriesListing;
    }

    public function projects👷ListForOrg(): Operator\Projects\ListForOrg
    {
        if ($this->projects👷ListForOrg instanceof Operator\Projects\ListForOrg === false) {
            $this->projects👷ListForOrg = new Operator\Projects\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrg;
    }

    public function projects👷ListForOrgListing(): Operator\Projects\ListForOrgListing
    {
        if ($this->projects👷ListForOrgListing instanceof Operator\Projects\ListForOrgListing === false) {
            $this->projects👷ListForOrgListing = new Operator\Projects\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷ListForOrgListing;
    }

    public function projects👷CreateForOrg(): Operator\Projects\CreateForOrg
    {
        if ($this->projects👷CreateForOrg instanceof Operator\Projects\CreateForOrg === false) {
            $this->projects👷CreateForOrg = new Operator\Projects\CreateForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());
        }

        return $this->projects👷CreateForOrg;
    }

    public function orgs👷ListPublicMembers(): Operator\Orgs\ListPublicMembers
    {
        if ($this->orgs👷ListPublicMembers instanceof Operator\Orgs\ListPublicMembers === false) {
            $this->orgs👷ListPublicMembers = new Operator\Orgs\ListPublicMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->orgs👷ListPublicMembers;
    }

    public function orgs👷ListPublicMembersListing(): Operator\Orgs\ListPublicMembersListing
    {
        if ($this->orgs👷ListPublicMembersListing instanceof Operator\Orgs\ListPublicMembersListing === false) {
            $this->orgs👷ListPublicMembersListing = new Operator\Orgs\ListPublicMembersListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->orgs👷ListPublicMembersListing;
    }

    public function orgs👷CheckPublicMembershipForUser(): Operator\Orgs\CheckPublicMembershipForUser
    {
        if ($this->orgs👷CheckPublicMembershipForUser instanceof Operator\Orgs\CheckPublicMembershipForUser === false) {
            $this->orgs👷CheckPublicMembershipForUser = new Operator\Orgs\CheckPublicMembershipForUser($this->browser, $this->authentication);
        }

        return $this->orgs👷CheckPublicMembershipForUser;
    }

    public function orgs👷SetPublicMembershipForAuthenticatedUser(): Operator\Orgs\SetPublicMembershipForAuthenticatedUser
    {
        if ($this->orgs👷SetPublicMembershipForAuthenticatedUser instanceof Operator\Orgs\SetPublicMembershipForAuthenticatedUser === false) {
            $this->orgs👷SetPublicMembershipForAuthenticatedUser = new Operator\Orgs\SetPublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->orgs👷SetPublicMembershipForAuthenticatedUser;
    }

    public function orgs👷RemovePublicMembershipForAuthenticatedUser(): Operator\Orgs\RemovePublicMembershipForAuthenticatedUser
    {
        if ($this->orgs👷RemovePublicMembershipForAuthenticatedUser instanceof Operator\Orgs\RemovePublicMembershipForAuthenticatedUser === false) {
            $this->orgs👷RemovePublicMembershipForAuthenticatedUser = new Operator\Orgs\RemovePublicMembershipForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->orgs👷RemovePublicMembershipForAuthenticatedUser;
    }

    public function repos👷ListForOrg(): Operator\Repos\ListForOrg
    {
        if ($this->repos👷ListForOrg instanceof Operator\Repos\ListForOrg === false) {
            $this->repos👷ListForOrg = new Operator\Repos\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrg;
    }

    public function repos👷ListForOrgListing(): Operator\Repos\ListForOrgListing
    {
        if ($this->repos👷ListForOrgListing instanceof Operator\Repos\ListForOrgListing === false) {
            $this->repos👷ListForOrgListing = new Operator\Repos\ListForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷ListForOrgListing;
    }

    public function repos👷CreateInOrg(): Operator\Repos\CreateInOrg
    {
        if ($this->repos👷CreateInOrg instanceof Operator\Repos\CreateInOrg === false) {
            $this->repos👷CreateInOrg = new Operator\Repos\CreateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Repos());
        }

        return $this->repos👷CreateInOrg;
    }

    public function repos👷GetOrgRulesets(): Operator\Repos\GetOrgRulesets
    {
        if ($this->repos👷GetOrgRulesets instanceof Operator\Repos\GetOrgRulesets === false) {
            $this->repos👷GetOrgRulesets = new Operator\Repos\GetOrgRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷GetOrgRulesets;
    }

    public function repos👷GetOrgRulesetsListing(): Operator\Repos\GetOrgRulesetsListing
    {
        if ($this->repos👷GetOrgRulesetsListing instanceof Operator\Repos\GetOrgRulesetsListing === false) {
            $this->repos👷GetOrgRulesetsListing = new Operator\Repos\GetOrgRulesetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷GetOrgRulesetsListing;
    }

    public function repos👷CreateOrgRuleset(): Operator\Repos\CreateOrgRuleset
    {
        if ($this->repos👷CreateOrgRuleset instanceof Operator\Repos\CreateOrgRuleset === false) {
            $this->repos👷CreateOrgRuleset = new Operator\Repos\CreateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets());
        }

        return $this->repos👷CreateOrgRuleset;
    }

    public function repos👷GetOrgRuleset(): Operator\Repos\GetOrgRuleset
    {
        if ($this->repos👷GetOrgRuleset instanceof Operator\Repos\GetOrgRuleset === false) {
            $this->repos👷GetOrgRuleset = new Operator\Repos\GetOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷GetOrgRuleset;
    }

    public function repos👷UpdateOrgRuleset(): Operator\Repos\UpdateOrgRuleset
    {
        if ($this->repos👷UpdateOrgRuleset instanceof Operator\Repos\UpdateOrgRuleset === false) {
            $this->repos👷UpdateOrgRuleset = new Operator\Repos\UpdateOrgRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷UpdateOrgRuleset;
    }

    public function repos👷DeleteOrgRuleset(): Operator\Repos\DeleteOrgRuleset
    {
        if ($this->repos👷DeleteOrgRuleset instanceof Operator\Repos\DeleteOrgRuleset === false) {
            $this->repos👷DeleteOrgRuleset = new Operator\Repos\DeleteOrgRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷DeleteOrgRuleset;
    }

    public function secretScanning👷ListAlertsForOrg(): Operator\SecretScanning\ListAlertsForOrg
    {
        if ($this->secretScanning👷ListAlertsForOrg instanceof Operator\SecretScanning\ListAlertsForOrg === false) {
            $this->secretScanning👷ListAlertsForOrg = new Operator\SecretScanning\ListAlertsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForOrg;
    }

    public function secretScanning👷ListAlertsForOrgListing(): Operator\SecretScanning\ListAlertsForOrgListing
    {
        if ($this->secretScanning👷ListAlertsForOrgListing instanceof Operator\SecretScanning\ListAlertsForOrgListing === false) {
            $this->secretScanning👷ListAlertsForOrgListing = new Operator\SecretScanning\ListAlertsForOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForOrgListing;
    }

    public function securityAdvisories👷ListOrgRepositoryAdvisories(): Operator\SecurityAdvisories\ListOrgRepositoryAdvisories
    {
        if ($this->securityAdvisories👷ListOrgRepositoryAdvisories instanceof Operator\SecurityAdvisories\ListOrgRepositoryAdvisories === false) {
            $this->securityAdvisories👷ListOrgRepositoryAdvisories = new Operator\SecurityAdvisories\ListOrgRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷ListOrgRepositoryAdvisories;
    }

    public function orgs👷ListSecurityManagerTeams(): Operator\Orgs\ListSecurityManagerTeams
    {
        if ($this->orgs👷ListSecurityManagerTeams instanceof Operator\Orgs\ListSecurityManagerTeams === false) {
            $this->orgs👷ListSecurityManagerTeams = new Operator\Orgs\ListSecurityManagerTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers());
        }

        return $this->orgs👷ListSecurityManagerTeams;
    }

    public function orgs👷AddSecurityManagerTeam(): Operator\Orgs\AddSecurityManagerTeam
    {
        if ($this->orgs👷AddSecurityManagerTeam instanceof Operator\Orgs\AddSecurityManagerTeam === false) {
            $this->orgs👷AddSecurityManagerTeam = new Operator\Orgs\AddSecurityManagerTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷AddSecurityManagerTeam;
    }

    public function orgs👷RemoveSecurityManagerTeam(): Operator\Orgs\RemoveSecurityManagerTeam
    {
        if ($this->orgs👷RemoveSecurityManagerTeam instanceof Operator\Orgs\RemoveSecurityManagerTeam === false) {
            $this->orgs👷RemoveSecurityManagerTeam = new Operator\Orgs\RemoveSecurityManagerTeam($this->browser, $this->authentication);
        }

        return $this->orgs👷RemoveSecurityManagerTeam;
    }

    public function billing👷GetGithubActionsBillingOrg(): Operator\Billing\GetGithubActionsBillingOrg
    {
        if ($this->billing👷GetGithubActionsBillingOrg instanceof Operator\Billing\GetGithubActionsBillingOrg === false) {
            $this->billing👷GetGithubActionsBillingOrg = new Operator\Billing\GetGithubActionsBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions());
        }

        return $this->billing👷GetGithubActionsBillingOrg;
    }

    public function billing👷GetGithubPackagesBillingOrg(): Operator\Billing\GetGithubPackagesBillingOrg
    {
        if ($this->billing👷GetGithubPackagesBillingOrg instanceof Operator\Billing\GetGithubPackagesBillingOrg === false) {
            $this->billing👷GetGithubPackagesBillingOrg = new Operator\Billing\GetGithubPackagesBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages());
        }

        return $this->billing👷GetGithubPackagesBillingOrg;
    }

    public function billing👷GetSharedStorageBillingOrg(): Operator\Billing\GetSharedStorageBillingOrg
    {
        if ($this->billing👷GetSharedStorageBillingOrg instanceof Operator\Billing\GetSharedStorageBillingOrg === false) {
            $this->billing👷GetSharedStorageBillingOrg = new Operator\Billing\GetSharedStorageBillingOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->billing👷GetSharedStorageBillingOrg;
    }

    public function teams👷List_(): Operator\Teams\List_
    {
        if ($this->teams👷List_ instanceof Operator\Teams\List_ === false) {
            $this->teams👷List_ = new Operator\Teams\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷List_;
    }

    public function teams👷ListListing(): Operator\Teams\ListListing
    {
        if ($this->teams👷ListListing instanceof Operator\Teams\ListListing === false) {
            $this->teams👷ListListing = new Operator\Teams\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷ListListing;
    }

    public function teams👷Create(): Operator\Teams\Create
    {
        if ($this->teams👷Create instanceof Operator\Teams\Create === false) {
            $this->teams👷Create = new Operator\Teams\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->teams👷Create;
    }

    public function teams👷GetByName(): Operator\Teams\GetByName
    {
        if ($this->teams👷GetByName instanceof Operator\Teams\GetByName === false) {
            $this->teams👷GetByName = new Operator\Teams\GetByName($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷GetByName;
    }

    public function teams👷DeleteInOrg(): Operator\Teams\DeleteInOrg
    {
        if ($this->teams👷DeleteInOrg instanceof Operator\Teams\DeleteInOrg === false) {
            $this->teams👷DeleteInOrg = new Operator\Teams\DeleteInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteInOrg;
    }

    public function teams👷UpdateInOrg(): Operator\Teams\UpdateInOrg
    {
        if ($this->teams👷UpdateInOrg instanceof Operator\Teams\UpdateInOrg === false) {
            $this->teams👷UpdateInOrg = new Operator\Teams\UpdateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->teams👷UpdateInOrg;
    }

    public function teams👷ListDiscussionsInOrg(): Operator\Teams\ListDiscussionsInOrg
    {
        if ($this->teams👷ListDiscussionsInOrg instanceof Operator\Teams\ListDiscussionsInOrg === false) {
            $this->teams👷ListDiscussionsInOrg = new Operator\Teams\ListDiscussionsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrg;
    }

    public function teams👷ListDiscussionsInOrgListing(): Operator\Teams\ListDiscussionsInOrgListing
    {
        if ($this->teams👷ListDiscussionsInOrgListing instanceof Operator\Teams\ListDiscussionsInOrgListing === false) {
            $this->teams👷ListDiscussionsInOrgListing = new Operator\Teams\ListDiscussionsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷ListDiscussionsInOrgListing;
    }

    public function teams👷CreateDiscussionInOrg(): Operator\Teams\CreateDiscussionInOrg
    {
        if ($this->teams👷CreateDiscussionInOrg instanceof Operator\Teams\CreateDiscussionInOrg === false) {
            $this->teams👷CreateDiscussionInOrg = new Operator\Teams\CreateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->teams👷CreateDiscussionInOrg;
    }

    public function teams👷GetDiscussionInOrg(): Operator\Teams\GetDiscussionInOrg
    {
        if ($this->teams👷GetDiscussionInOrg instanceof Operator\Teams\GetDiscussionInOrg === false) {
            $this->teams👷GetDiscussionInOrg = new Operator\Teams\GetDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionInOrg;
    }

    public function teams👷DeleteDiscussionInOrg(): Operator\Teams\DeleteDiscussionInOrg
    {
        if ($this->teams👷DeleteDiscussionInOrg instanceof Operator\Teams\DeleteDiscussionInOrg === false) {
            $this->teams👷DeleteDiscussionInOrg = new Operator\Teams\DeleteDiscussionInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionInOrg;
    }

    public function teams👷UpdateDiscussionInOrg(): Operator\Teams\UpdateDiscussionInOrg
    {
        if ($this->teams👷UpdateDiscussionInOrg instanceof Operator\Teams\UpdateDiscussionInOrg === false) {
            $this->teams👷UpdateDiscussionInOrg = new Operator\Teams\UpdateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrg(): Operator\Teams\ListDiscussionCommentsInOrg
    {
        if ($this->teams👷ListDiscussionCommentsInOrg instanceof Operator\Teams\ListDiscussionCommentsInOrg === false) {
            $this->teams👷ListDiscussionCommentsInOrg = new Operator\Teams\ListDiscussionCommentsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrg;
    }

    public function teams👷ListDiscussionCommentsInOrgListing(): Operator\Teams\ListDiscussionCommentsInOrgListing
    {
        if ($this->teams👷ListDiscussionCommentsInOrgListing instanceof Operator\Teams\ListDiscussionCommentsInOrgListing === false) {
            $this->teams👷ListDiscussionCommentsInOrgListing = new Operator\Teams\ListDiscussionCommentsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsInOrgListing;
    }

    public function teams👷CreateDiscussionCommentInOrg(): Operator\Teams\CreateDiscussionCommentInOrg
    {
        if ($this->teams👷CreateDiscussionCommentInOrg instanceof Operator\Teams\CreateDiscussionCommentInOrg === false) {
            $this->teams👷CreateDiscussionCommentInOrg = new Operator\Teams\CreateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentInOrg;
    }

    public function teams👷GetDiscussionCommentInOrg(): Operator\Teams\GetDiscussionCommentInOrg
    {
        if ($this->teams👷GetDiscussionCommentInOrg instanceof Operator\Teams\GetDiscussionCommentInOrg === false) {
            $this->teams👷GetDiscussionCommentInOrg = new Operator\Teams\GetDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentInOrg;
    }

    public function teams👷DeleteDiscussionCommentInOrg(): Operator\Teams\DeleteDiscussionCommentInOrg
    {
        if ($this->teams👷DeleteDiscussionCommentInOrg instanceof Operator\Teams\DeleteDiscussionCommentInOrg === false) {
            $this->teams👷DeleteDiscussionCommentInOrg = new Operator\Teams\DeleteDiscussionCommentInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentInOrg;
    }

    public function teams👷UpdateDiscussionCommentInOrg(): Operator\Teams\UpdateDiscussionCommentInOrg
    {
        if ($this->teams👷UpdateDiscussionCommentInOrg instanceof Operator\Teams\UpdateDiscussionCommentInOrg === false) {
            $this->teams👷UpdateDiscussionCommentInOrg = new Operator\Teams\UpdateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrg(): Operator\Reactions\ListForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrg instanceof Operator\Reactions\ListForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrg = new Operator\Reactions\ListForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrg;
    }

    public function reactions👷ListForTeamDiscussionCommentInOrgListing(): Operator\Reactions\ListForTeamDiscussionCommentInOrgListing
    {
        if ($this->reactions👷ListForTeamDiscussionCommentInOrgListing instanceof Operator\Reactions\ListForTeamDiscussionCommentInOrgListing === false) {
            $this->reactions👷ListForTeamDiscussionCommentInOrgListing = new Operator\Reactions\ListForTeamDiscussionCommentInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentInOrgListing;
    }

    public function reactions👷CreateForTeamDiscussionCommentInOrg(): Operator\Reactions\CreateForTeamDiscussionCommentInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentInOrg instanceof Operator\Reactions\CreateForTeamDiscussionCommentInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionCommentInOrg = new Operator\Reactions\CreateForTeamDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentInOrg;
    }

    public function reactions👷DeleteForTeamDiscussionComment(): Operator\Reactions\DeleteForTeamDiscussionComment
    {
        if ($this->reactions👷DeleteForTeamDiscussionComment instanceof Operator\Reactions\DeleteForTeamDiscussionComment === false) {
            $this->reactions👷DeleteForTeamDiscussionComment = new Operator\Reactions\DeleteForTeamDiscussionComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussionComment;
    }

    public function reactions👷ListForTeamDiscussionInOrg(): Operator\Reactions\ListForTeamDiscussionInOrg
    {
        if ($this->reactions👷ListForTeamDiscussionInOrg instanceof Operator\Reactions\ListForTeamDiscussionInOrg === false) {
            $this->reactions👷ListForTeamDiscussionInOrg = new Operator\Reactions\ListForTeamDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrg;
    }

    public function reactions👷ListForTeamDiscussionInOrgListing(): Operator\Reactions\ListForTeamDiscussionInOrgListing
    {
        if ($this->reactions👷ListForTeamDiscussionInOrgListing instanceof Operator\Reactions\ListForTeamDiscussionInOrgListing === false) {
            $this->reactions👷ListForTeamDiscussionInOrgListing = new Operator\Reactions\ListForTeamDiscussionInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionInOrgListing;
    }

    public function reactions👷CreateForTeamDiscussionInOrg(): Operator\Reactions\CreateForTeamDiscussionInOrg
    {
        if ($this->reactions👷CreateForTeamDiscussionInOrg instanceof Operator\Reactions\CreateForTeamDiscussionInOrg === false) {
            $this->reactions👷CreateForTeamDiscussionInOrg = new Operator\Reactions\CreateForTeamDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionInOrg;
    }

    public function reactions👷DeleteForTeamDiscussion(): Operator\Reactions\DeleteForTeamDiscussion
    {
        if ($this->reactions👷DeleteForTeamDiscussion instanceof Operator\Reactions\DeleteForTeamDiscussion === false) {
            $this->reactions👷DeleteForTeamDiscussion = new Operator\Reactions\DeleteForTeamDiscussion($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForTeamDiscussion;
    }

    public function teams👷ListPendingInvitationsInOrg(): Operator\Teams\ListPendingInvitationsInOrg
    {
        if ($this->teams👷ListPendingInvitationsInOrg instanceof Operator\Teams\ListPendingInvitationsInOrg === false) {
            $this->teams👷ListPendingInvitationsInOrg = new Operator\Teams\ListPendingInvitationsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsInOrg;
    }

    public function teams👷ListPendingInvitationsInOrgListing(): Operator\Teams\ListPendingInvitationsInOrgListing
    {
        if ($this->teams👷ListPendingInvitationsInOrgListing instanceof Operator\Teams\ListPendingInvitationsInOrgListing === false) {
            $this->teams👷ListPendingInvitationsInOrgListing = new Operator\Teams\ListPendingInvitationsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsInOrgListing;
    }

    public function teams👷ListMembersInOrg(): Operator\Teams\ListMembersInOrg
    {
        if ($this->teams👷ListMembersInOrg instanceof Operator\Teams\ListMembersInOrg === false) {
            $this->teams👷ListMembersInOrg = new Operator\Teams\ListMembersInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrg;
    }

    public function teams👷ListMembersInOrgListing(): Operator\Teams\ListMembersInOrgListing
    {
        if ($this->teams👷ListMembersInOrgListing instanceof Operator\Teams\ListMembersInOrgListing === false) {
            $this->teams👷ListMembersInOrgListing = new Operator\Teams\ListMembersInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->teams👷ListMembersInOrgListing;
    }

    public function teams👷GetMembershipForUserInOrg(): Operator\Teams\GetMembershipForUserInOrg
    {
        if ($this->teams👷GetMembershipForUserInOrg instanceof Operator\Teams\GetMembershipForUserInOrg === false) {
            $this->teams👷GetMembershipForUserInOrg = new Operator\Teams\GetMembershipForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserInOrg;
    }

    public function teams👷AddOrUpdateMembershipForUserInOrg(): Operator\Teams\AddOrUpdateMembershipForUserInOrg
    {
        if ($this->teams👷AddOrUpdateMembershipForUserInOrg instanceof Operator\Teams\AddOrUpdateMembershipForUserInOrg === false) {
            $this->teams👷AddOrUpdateMembershipForUserInOrg = new Operator\Teams\AddOrUpdateMembershipForUserInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserInOrg;
    }

    public function teams👷RemoveMembershipForUserInOrg(): Operator\Teams\RemoveMembershipForUserInOrg
    {
        if ($this->teams👷RemoveMembershipForUserInOrg instanceof Operator\Teams\RemoveMembershipForUserInOrg === false) {
            $this->teams👷RemoveMembershipForUserInOrg = new Operator\Teams\RemoveMembershipForUserInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserInOrg;
    }

    public function teams👷ListProjectsInOrg(): Operator\Teams\ListProjectsInOrg
    {
        if ($this->teams👷ListProjectsInOrg instanceof Operator\Teams\ListProjectsInOrg === false) {
            $this->teams👷ListProjectsInOrg = new Operator\Teams\ListProjectsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrg;
    }

    public function teams👷ListProjectsInOrgListing(): Operator\Teams\ListProjectsInOrgListing
    {
        if ($this->teams👷ListProjectsInOrgListing instanceof Operator\Teams\ListProjectsInOrgListing === false) {
            $this->teams👷ListProjectsInOrgListing = new Operator\Teams\ListProjectsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->teams👷ListProjectsInOrgListing;
    }

    public function teams👷CheckPermissionsForProjectInOrg(): Operator\Teams\CheckPermissionsForProjectInOrg
    {
        if ($this->teams👷CheckPermissionsForProjectInOrg instanceof Operator\Teams\CheckPermissionsForProjectInOrg === false) {
            $this->teams👷CheckPermissionsForProjectInOrg = new Operator\Teams\CheckPermissionsForProjectInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectInOrg;
    }

    public function teams👷AddOrUpdateProjectPermissionsInOrg(): Operator\Teams\AddOrUpdateProjectPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsInOrg instanceof Operator\Teams\AddOrUpdateProjectPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateProjectPermissionsInOrg = new Operator\Teams\AddOrUpdateProjectPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsInOrg;
    }

    public function teams👷RemoveProjectInOrg(): Operator\Teams\RemoveProjectInOrg
    {
        if ($this->teams👷RemoveProjectInOrg instanceof Operator\Teams\RemoveProjectInOrg === false) {
            $this->teams👷RemoveProjectInOrg = new Operator\Teams\RemoveProjectInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveProjectInOrg;
    }

    public function teams👷ListReposInOrg(): Operator\Teams\ListReposInOrg
    {
        if ($this->teams👷ListReposInOrg instanceof Operator\Teams\ListReposInOrg === false) {
            $this->teams👷ListReposInOrg = new Operator\Teams\ListReposInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrg;
    }

    public function teams👷ListReposInOrgListing(): Operator\Teams\ListReposInOrgListing
    {
        if ($this->teams👷ListReposInOrgListing instanceof Operator\Teams\ListReposInOrgListing === false) {
            $this->teams👷ListReposInOrgListing = new Operator\Teams\ListReposInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->teams👷ListReposInOrgListing;
    }

    public function teams👷CheckPermissionsForRepoInOrg(): Operator\Teams\CheckPermissionsForRepoInOrg
    {
        if ($this->teams👷CheckPermissionsForRepoInOrg instanceof Operator\Teams\CheckPermissionsForRepoInOrg === false) {
            $this->teams👷CheckPermissionsForRepoInOrg = new Operator\Teams\CheckPermissionsForRepoInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoInOrg;
    }

    public function teams👷AddOrUpdateRepoPermissionsInOrg(): Operator\Teams\AddOrUpdateRepoPermissionsInOrg
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsInOrg instanceof Operator\Teams\AddOrUpdateRepoPermissionsInOrg === false) {
            $this->teams👷AddOrUpdateRepoPermissionsInOrg = new Operator\Teams\AddOrUpdateRepoPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->teams👷AddOrUpdateRepoPermissionsInOrg;
    }

    public function teams👷RemoveRepoInOrg(): Operator\Teams\RemoveRepoInOrg
    {
        if ($this->teams👷RemoveRepoInOrg instanceof Operator\Teams\RemoveRepoInOrg === false) {
            $this->teams👷RemoveRepoInOrg = new Operator\Teams\RemoveRepoInOrg($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoInOrg;
    }

    public function teams👷ListChildInOrg(): Operator\Teams\ListChildInOrg
    {
        if ($this->teams👷ListChildInOrg instanceof Operator\Teams\ListChildInOrg === false) {
            $this->teams👷ListChildInOrg = new Operator\Teams\ListChildInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrg;
    }

    public function teams👷ListChildInOrgListing(): Operator\Teams\ListChildInOrgListing
    {
        if ($this->teams👷ListChildInOrgListing instanceof Operator\Teams\ListChildInOrgListing === false) {
            $this->teams👷ListChildInOrgListing = new Operator\Teams\ListChildInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->teams👷ListChildInOrgListing;
    }

    public function orgs👷EnableOrDisableSecurityProductOnAllOrgRepos(): Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos
    {
        if ($this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos instanceof Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos === false) {
            $this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos = new Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos;
    }

    public function projects👷GetCard(): Operator\Projects\GetCard
    {
        if ($this->projects👷GetCard instanceof Operator\Projects\GetCard === false) {
            $this->projects👷GetCard = new Operator\Projects\GetCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷GetCard;
    }

    public function projects👷DeleteCard(): Operator\Projects\DeleteCard
    {
        if ($this->projects👷DeleteCard instanceof Operator\Projects\DeleteCard === false) {
            $this->projects👷DeleteCard = new Operator\Projects\DeleteCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷DeleteCard;
    }

    public function projects👷UpdateCard(): Operator\Projects\UpdateCard
    {
        if ($this->projects👷UpdateCard instanceof Operator\Projects\UpdateCard === false) {
            $this->projects👷UpdateCard = new Operator\Projects\UpdateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());
        }

        return $this->projects👷UpdateCard;
    }

    public function projects👷MoveCard(): Operator\Projects\MoveCard
    {
        if ($this->projects👷MoveCard instanceof Operator\Projects\MoveCard === false) {
            $this->projects👷MoveCard = new Operator\Projects\MoveCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves());
        }

        return $this->projects👷MoveCard;
    }

    public function projects👷GetColumn(): Operator\Projects\GetColumn
    {
        if ($this->projects👷GetColumn instanceof Operator\Projects\GetColumn === false) {
            $this->projects👷GetColumn = new Operator\Projects\GetColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷GetColumn;
    }

    public function projects👷DeleteColumn(): Operator\Projects\DeleteColumn
    {
        if ($this->projects👷DeleteColumn instanceof Operator\Projects\DeleteColumn === false) {
            $this->projects👷DeleteColumn = new Operator\Projects\DeleteColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷DeleteColumn;
    }

    public function projects👷UpdateColumn(): Operator\Projects\UpdateColumn
    {
        if ($this->projects👷UpdateColumn instanceof Operator\Projects\UpdateColumn === false) {
            $this->projects👷UpdateColumn = new Operator\Projects\UpdateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());
        }

        return $this->projects👷UpdateColumn;
    }

    public function projects👷ListCards(): Operator\Projects\ListCards
    {
        if ($this->projects👷ListCards instanceof Operator\Projects\ListCards === false) {
            $this->projects👷ListCards = new Operator\Projects\ListCards($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCards;
    }

    public function projects👷ListCardsListing(): Operator\Projects\ListCardsListing
    {
        if ($this->projects👷ListCardsListing instanceof Operator\Projects\ListCardsListing === false) {
            $this->projects👷ListCardsListing = new Operator\Projects\ListCardsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷ListCardsListing;
    }

    public function projects👷CreateCard(): Operator\Projects\CreateCard
    {
        if ($this->projects👷CreateCard instanceof Operator\Projects\CreateCard === false) {
            $this->projects👷CreateCard = new Operator\Projects\CreateCard($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());
        }

        return $this->projects👷CreateCard;
    }

    public function projects👷MoveColumn(): Operator\Projects\MoveColumn
    {
        if ($this->projects👷MoveColumn instanceof Operator\Projects\MoveColumn === false) {
            $this->projects👷MoveColumn = new Operator\Projects\MoveColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves());
        }

        return $this->projects👷MoveColumn;
    }

    public function projects👷Get(): Operator\Projects\Get
    {
        if ($this->projects👷Get instanceof Operator\Projects\Get === false) {
            $this->projects👷Get = new Operator\Projects\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Get;
    }

    public function projects👷Delete(): Operator\Projects\Delete
    {
        if ($this->projects👷Delete instanceof Operator\Projects\Delete === false) {
            $this->projects👷Delete = new Operator\Projects\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Delete;
    }

    public function projects👷Update(): Operator\Projects\Update
    {
        if ($this->projects👷Update instanceof Operator\Projects\Update === false) {
            $this->projects👷Update = new Operator\Projects\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());
        }

        return $this->projects👷Update;
    }

    public function projects👷ListCollaborators(): Operator\Projects\ListCollaborators
    {
        if ($this->projects👷ListCollaborators instanceof Operator\Projects\ListCollaborators === false) {
            $this->projects👷ListCollaborators = new Operator\Projects\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaborators;
    }

    public function projects👷ListCollaboratorsListing(): Operator\Projects\ListCollaboratorsListing
    {
        if ($this->projects👷ListCollaboratorsListing instanceof Operator\Projects\ListCollaboratorsListing === false) {
            $this->projects👷ListCollaboratorsListing = new Operator\Projects\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());
        }

        return $this->projects👷ListCollaboratorsListing;
    }

    public function projects👷AddCollaborator(): Operator\Projects\AddCollaborator
    {
        if ($this->projects👷AddCollaborator instanceof Operator\Projects\AddCollaborator === false) {
            $this->projects👷AddCollaborator = new Operator\Projects\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷AddCollaborator;
    }

    public function projects👷RemoveCollaborator(): Operator\Projects\RemoveCollaborator
    {
        if ($this->projects👷RemoveCollaborator instanceof Operator\Projects\RemoveCollaborator === false) {
            $this->projects👷RemoveCollaborator = new Operator\Projects\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username());
        }

        return $this->projects👷RemoveCollaborator;
    }

    public function projects👷GetPermissionForUser(): Operator\Projects\GetPermissionForUser
    {
        if ($this->projects👷GetPermissionForUser instanceof Operator\Projects\GetPermissionForUser === false) {
            $this->projects👷GetPermissionForUser = new Operator\Projects\GetPermissionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission());
        }

        return $this->projects👷GetPermissionForUser;
    }

    public function projects👷ListColumns(): Operator\Projects\ListColumns
    {
        if ($this->projects👷ListColumns instanceof Operator\Projects\ListColumns === false) {
            $this->projects👷ListColumns = new Operator\Projects\ListColumns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumns;
    }

    public function projects👷ListColumnsListing(): Operator\Projects\ListColumnsListing
    {
        if ($this->projects👷ListColumnsListing instanceof Operator\Projects\ListColumnsListing === false) {
            $this->projects👷ListColumnsListing = new Operator\Projects\ListColumnsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷ListColumnsListing;
    }

    public function projects👷CreateColumn(): Operator\Projects\CreateColumn
    {
        if ($this->projects👷CreateColumn instanceof Operator\Projects\CreateColumn === false) {
            $this->projects👷CreateColumn = new Operator\Projects\CreateColumn($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());
        }

        return $this->projects👷CreateColumn;
    }

    public function rateLimit👷Get(): Operator\RateLimit\Get
    {
        if ($this->rateLimit👷Get instanceof Operator\RateLimit\Get === false) {
            $this->rateLimit👷Get = new Operator\RateLimit\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀RateLimit());
        }

        return $this->rateLimit👷Get;
    }

    public function repos👷Get(): Operator\Repos\Get
    {
        if ($this->repos👷Get instanceof Operator\Repos\Get === false) {
            $this->repos👷Get = new Operator\Repos\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Get;
    }

    public function repos👷Delete(): Operator\Repos\Delete
    {
        if ($this->repos👷Delete instanceof Operator\Repos\Delete === false) {
            $this->repos👷Delete = new Operator\Repos\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Delete;
    }

    public function repos👷Update(): Operator\Repos\Update
    {
        if ($this->repos👷Update instanceof Operator\Repos\Update === false) {
            $this->repos👷Update = new Operator\Repos\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo());
        }

        return $this->repos👷Update;
    }

    public function actions👷ListArtifactsForRepo(): Operator\Actions\ListArtifactsForRepo
    {
        if ($this->actions👷ListArtifactsForRepo instanceof Operator\Actions\ListArtifactsForRepo === false) {
            $this->actions👷ListArtifactsForRepo = new Operator\Actions\ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts());
        }

        return $this->actions👷ListArtifactsForRepo;
    }

    public function actions👷GetArtifact(): Operator\Actions\GetArtifact
    {
        if ($this->actions👷GetArtifact instanceof Operator\Actions\GetArtifact === false) {
            $this->actions👷GetArtifact = new Operator\Actions\GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->actions👷GetArtifact;
    }

    public function actions👷DeleteArtifact(): Operator\Actions\DeleteArtifact
    {
        if ($this->actions👷DeleteArtifact instanceof Operator\Actions\DeleteArtifact === false) {
            $this->actions👷DeleteArtifact = new Operator\Actions\DeleteArtifact($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteArtifact;
    }

    public function actions👷DownloadArtifact(): Operator\Actions\DownloadArtifact
    {
        if ($this->actions👷DownloadArtifact instanceof Operator\Actions\DownloadArtifact === false) {
            $this->actions👷DownloadArtifact = new Operator\Actions\DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifact;
    }

    public function actions👷DownloadArtifactStreaming(): Operator\Actions\DownloadArtifactStreaming
    {
        if ($this->actions👷DownloadArtifactStreaming instanceof Operator\Actions\DownloadArtifactStreaming === false) {
            $this->actions👷DownloadArtifactStreaming = new Operator\Actions\DownloadArtifactStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->actions👷DownloadArtifactStreaming;
    }

    public function actions👷GetActionsCacheUsage(): Operator\Actions\GetActionsCacheUsage
    {
        if ($this->actions👷GetActionsCacheUsage instanceof Operator\Actions\GetActionsCacheUsage === false) {
            $this->actions👷GetActionsCacheUsage = new Operator\Actions\GetActionsCacheUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage());
        }

        return $this->actions👷GetActionsCacheUsage;
    }

    public function actions👷GetActionsCacheList(): Operator\Actions\GetActionsCacheList
    {
        if ($this->actions👷GetActionsCacheList instanceof Operator\Actions\GetActionsCacheList === false) {
            $this->actions👷GetActionsCacheList = new Operator\Actions\GetActionsCacheList($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->actions👷GetActionsCacheList;
    }

    public function actions👷DeleteActionsCacheByKey(): Operator\Actions\DeleteActionsCacheByKey
    {
        if ($this->actions👷DeleteActionsCacheByKey instanceof Operator\Actions\DeleteActionsCacheByKey === false) {
            $this->actions👷DeleteActionsCacheByKey = new Operator\Actions\DeleteActionsCacheByKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->actions👷DeleteActionsCacheByKey;
    }

    public function actions👷DeleteActionsCacheById(): Operator\Actions\DeleteActionsCacheById
    {
        if ($this->actions👷DeleteActionsCacheById instanceof Operator\Actions\DeleteActionsCacheById === false) {
            $this->actions👷DeleteActionsCacheById = new Operator\Actions\DeleteActionsCacheById($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteActionsCacheById;
    }

    public function actions👷GetJobForWorkflowRun(): Operator\Actions\GetJobForWorkflowRun
    {
        if ($this->actions👷GetJobForWorkflowRun instanceof Operator\Actions\GetJobForWorkflowRun === false) {
            $this->actions👷GetJobForWorkflowRun = new Operator\Actions\GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId());
        }

        return $this->actions👷GetJobForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRun(): Operator\Actions\DownloadJobLogsForWorkflowRun
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRun instanceof Operator\Actions\DownloadJobLogsForWorkflowRun === false) {
            $this->actions👷DownloadJobLogsForWorkflowRun = new Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRun;
    }

    public function actions👷DownloadJobLogsForWorkflowRunStreaming(): Operator\Actions\DownloadJobLogsForWorkflowRunStreaming
    {
        if ($this->actions👷DownloadJobLogsForWorkflowRunStreaming instanceof Operator\Actions\DownloadJobLogsForWorkflowRunStreaming === false) {
            $this->actions👷DownloadJobLogsForWorkflowRunStreaming = new Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadJobLogsForWorkflowRunStreaming;
    }

    public function actions👷ReRunJobForWorkflowRun(): Operator\Actions\ReRunJobForWorkflowRun
    {
        if ($this->actions👷ReRunJobForWorkflowRun instanceof Operator\Actions\ReRunJobForWorkflowRun === false) {
            $this->actions👷ReRunJobForWorkflowRun = new Operator\Actions\ReRunJobForWorkflowRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun());
        }

        return $this->actions👷ReRunJobForWorkflowRun;
    }

    public function actions👷GetCustomOidcSubClaimForRepo(): Operator\Actions\GetCustomOidcSubClaimForRepo
    {
        if ($this->actions👷GetCustomOidcSubClaimForRepo instanceof Operator\Actions\GetCustomOidcSubClaimForRepo === false) {
            $this->actions👷GetCustomOidcSubClaimForRepo = new Operator\Actions\GetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->actions👷GetCustomOidcSubClaimForRepo;
    }

    public function actions👷SetCustomOidcSubClaimForRepo(): Operator\Actions\SetCustomOidcSubClaimForRepo
    {
        if ($this->actions👷SetCustomOidcSubClaimForRepo instanceof Operator\Actions\SetCustomOidcSubClaimForRepo === false) {
            $this->actions👷SetCustomOidcSubClaimForRepo = new Operator\Actions\SetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->actions👷SetCustomOidcSubClaimForRepo;
    }

    public function actions👷ListRepoOrganizationSecrets(): Operator\Actions\ListRepoOrganizationSecrets
    {
        if ($this->actions👷ListRepoOrganizationSecrets instanceof Operator\Actions\ListRepoOrganizationSecrets === false) {
            $this->actions👷ListRepoOrganizationSecrets = new Operator\Actions\ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets());
        }

        return $this->actions👷ListRepoOrganizationSecrets;
    }

    public function actions👷ListRepoOrganizationVariables(): Operator\Actions\ListRepoOrganizationVariables
    {
        if ($this->actions👷ListRepoOrganizationVariables instanceof Operator\Actions\ListRepoOrganizationVariables === false) {
            $this->actions👷ListRepoOrganizationVariables = new Operator\Actions\ListRepoOrganizationVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables());
        }

        return $this->actions👷ListRepoOrganizationVariables;
    }

    public function actions👷GetGithubActionsPermissionsRepository(): Operator\Actions\GetGithubActionsPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsPermissionsRepository instanceof Operator\Actions\GetGithubActionsPermissionsRepository === false) {
            $this->actions👷GetGithubActionsPermissionsRepository = new Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->actions👷GetGithubActionsPermissionsRepository;
    }

    public function actions👷SetGithubActionsPermissionsRepository(): Operator\Actions\SetGithubActionsPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsPermissionsRepository instanceof Operator\Actions\SetGithubActionsPermissionsRepository === false) {
            $this->actions👷SetGithubActionsPermissionsRepository = new Operator\Actions\SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsPermissionsRepository;
    }

    public function actions👷GetWorkflowAccessToRepository(): Operator\Actions\GetWorkflowAccessToRepository
    {
        if ($this->actions👷GetWorkflowAccessToRepository instanceof Operator\Actions\GetWorkflowAccessToRepository === false) {
            $this->actions👷GetWorkflowAccessToRepository = new Operator\Actions\GetWorkflowAccessToRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access());
        }

        return $this->actions👷GetWorkflowAccessToRepository;
    }

    public function actions👷SetWorkflowAccessToRepository(): Operator\Actions\SetWorkflowAccessToRepository
    {
        if ($this->actions👷SetWorkflowAccessToRepository instanceof Operator\Actions\SetWorkflowAccessToRepository === false) {
            $this->actions👷SetWorkflowAccessToRepository = new Operator\Actions\SetWorkflowAccessToRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetWorkflowAccessToRepository;
    }

    public function actions👷GetAllowedActionsRepository(): Operator\Actions\GetAllowedActionsRepository
    {
        if ($this->actions👷GetAllowedActionsRepository instanceof Operator\Actions\GetAllowedActionsRepository === false) {
            $this->actions👷GetAllowedActionsRepository = new Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->actions👷GetAllowedActionsRepository;
    }

    public function actions👷SetAllowedActionsRepository(): Operator\Actions\SetAllowedActionsRepository
    {
        if ($this->actions👷SetAllowedActionsRepository instanceof Operator\Actions\SetAllowedActionsRepository === false) {
            $this->actions👷SetAllowedActionsRepository = new Operator\Actions\SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetAllowedActionsRepository;
    }

    public function actions👷GetGithubActionsDefaultWorkflowPermissionsRepository(): Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository
    {
        if ($this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository instanceof Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository === false) {
            $this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository;
    }

    public function actions👷SetGithubActionsDefaultWorkflowPermissionsRepository(): Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository
    {
        if ($this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository instanceof Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository === false) {
            $this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository = new Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository;
    }

    public function actions👷ListSelfHostedRunnersForRepo(): Operator\Actions\ListSelfHostedRunnersForRepo
    {
        if ($this->actions👷ListSelfHostedRunnersForRepo instanceof Operator\Actions\ListSelfHostedRunnersForRepo === false) {
            $this->actions👷ListSelfHostedRunnersForRepo = new Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners());
        }

        return $this->actions👷ListSelfHostedRunnersForRepo;
    }

    public function actions👷ListRunnerApplicationsForRepo(): Operator\Actions\ListRunnerApplicationsForRepo
    {
        if ($this->actions👷ListRunnerApplicationsForRepo instanceof Operator\Actions\ListRunnerApplicationsForRepo === false) {
            $this->actions👷ListRunnerApplicationsForRepo = new Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads());
        }

        return $this->actions👷ListRunnerApplicationsForRepo;
    }

    public function actions👷GenerateRunnerJitconfigForRepo(): Operator\Actions\GenerateRunnerJitconfigForRepo
    {
        if ($this->actions👷GenerateRunnerJitconfigForRepo instanceof Operator\Actions\GenerateRunnerJitconfigForRepo === false) {
            $this->actions👷GenerateRunnerJitconfigForRepo = new Operator\Actions\GenerateRunnerJitconfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->actions👷GenerateRunnerJitconfigForRepo;
    }

    public function actions👷CreateRegistrationTokenForRepo(): Operator\Actions\CreateRegistrationTokenForRepo
    {
        if ($this->actions👷CreateRegistrationTokenForRepo instanceof Operator\Actions\CreateRegistrationTokenForRepo === false) {
            $this->actions👷CreateRegistrationTokenForRepo = new Operator\Actions\CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->actions👷CreateRegistrationTokenForRepo;
    }

    public function actions👷CreateRemoveTokenForRepo(): Operator\Actions\CreateRemoveTokenForRepo
    {
        if ($this->actions👷CreateRemoveTokenForRepo instanceof Operator\Actions\CreateRemoveTokenForRepo === false) {
            $this->actions👷CreateRemoveTokenForRepo = new Operator\Actions\CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->actions👷CreateRemoveTokenForRepo;
    }

    public function actions👷GetSelfHostedRunnerForRepo(): Operator\Actions\GetSelfHostedRunnerForRepo
    {
        if ($this->actions👷GetSelfHostedRunnerForRepo instanceof Operator\Actions\GetSelfHostedRunnerForRepo === false) {
            $this->actions👷GetSelfHostedRunnerForRepo = new Operator\Actions\GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->actions👷GetSelfHostedRunnerForRepo;
    }

    public function actions👷DeleteSelfHostedRunnerFromRepo(): Operator\Actions\DeleteSelfHostedRunnerFromRepo
    {
        if ($this->actions👷DeleteSelfHostedRunnerFromRepo instanceof Operator\Actions\DeleteSelfHostedRunnerFromRepo === false) {
            $this->actions👷DeleteSelfHostedRunnerFromRepo = new Operator\Actions\DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteSelfHostedRunnerFromRepo;
    }

    public function actions👷ListLabelsForSelfHostedRunnerForRepo(): Operator\Actions\ListLabelsForSelfHostedRunnerForRepo
    {
        if ($this->actions👷ListLabelsForSelfHostedRunnerForRepo instanceof Operator\Actions\ListLabelsForSelfHostedRunnerForRepo === false) {
            $this->actions👷ListLabelsForSelfHostedRunnerForRepo = new Operator\Actions\ListLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷ListLabelsForSelfHostedRunnerForRepo;
    }

    public function actions👷SetCustomLabelsForSelfHostedRunnerForRepo(): Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo
    {
        if ($this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo instanceof Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo === false) {
            $this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo = new Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷SetCustomLabelsForSelfHostedRunnerForRepo;
    }

    public function actions👷AddCustomLabelsToSelfHostedRunnerForRepo(): Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo
    {
        if ($this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo instanceof Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo === false) {
            $this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo = new Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷AddCustomLabelsToSelfHostedRunnerForRepo;
    }

    public function actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo(): Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo
    {
        if ($this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo instanceof Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo === false) {
            $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo = new Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo;
    }

    public function actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo(): Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo
    {
        if ($this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo instanceof Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo === false) {
            $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo = new Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo;
    }

    public function actions👷ListWorkflowRunsForRepo(): Operator\Actions\ListWorkflowRunsForRepo
    {
        if ($this->actions👷ListWorkflowRunsForRepo instanceof Operator\Actions\ListWorkflowRunsForRepo === false) {
            $this->actions👷ListWorkflowRunsForRepo = new Operator\Actions\ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs());
        }

        return $this->actions👷ListWorkflowRunsForRepo;
    }

    public function actions👷GetWorkflowRun(): Operator\Actions\GetWorkflowRun
    {
        if ($this->actions👷GetWorkflowRun instanceof Operator\Actions\GetWorkflowRun === false) {
            $this->actions👷GetWorkflowRun = new Operator\Actions\GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->actions👷GetWorkflowRun;
    }

    public function actions👷DeleteWorkflowRun(): Operator\Actions\DeleteWorkflowRun
    {
        if ($this->actions👷DeleteWorkflowRun instanceof Operator\Actions\DeleteWorkflowRun === false) {
            $this->actions👷DeleteWorkflowRun = new Operator\Actions\DeleteWorkflowRun($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteWorkflowRun;
    }

    public function actions👷GetReviewsForRun(): Operator\Actions\GetReviewsForRun
    {
        if ($this->actions👷GetReviewsForRun instanceof Operator\Actions\GetReviewsForRun === false) {
            $this->actions👷GetReviewsForRun = new Operator\Actions\GetReviewsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals());
        }

        return $this->actions👷GetReviewsForRun;
    }

    public function actions👷ApproveWorkflowRun(): Operator\Actions\ApproveWorkflowRun
    {
        if ($this->actions👷ApproveWorkflowRun instanceof Operator\Actions\ApproveWorkflowRun === false) {
            $this->actions👷ApproveWorkflowRun = new Operator\Actions\ApproveWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve());
        }

        return $this->actions👷ApproveWorkflowRun;
    }

    public function actions👷ListWorkflowRunArtifacts(): Operator\Actions\ListWorkflowRunArtifacts
    {
        if ($this->actions👷ListWorkflowRunArtifacts instanceof Operator\Actions\ListWorkflowRunArtifacts === false) {
            $this->actions👷ListWorkflowRunArtifacts = new Operator\Actions\ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts());
        }

        return $this->actions👷ListWorkflowRunArtifacts;
    }

    public function actions👷GetWorkflowRunAttempt(): Operator\Actions\GetWorkflowRunAttempt
    {
        if ($this->actions👷GetWorkflowRunAttempt instanceof Operator\Actions\GetWorkflowRunAttempt === false) {
            $this->actions👷GetWorkflowRunAttempt = new Operator\Actions\GetWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber());
        }

        return $this->actions👷GetWorkflowRunAttempt;
    }

    public function actions👷ListJobsForWorkflowRunAttempt(): Operator\Actions\ListJobsForWorkflowRunAttempt
    {
        if ($this->actions👷ListJobsForWorkflowRunAttempt instanceof Operator\Actions\ListJobsForWorkflowRunAttempt === false) {
            $this->actions👷ListJobsForWorkflowRunAttempt = new Operator\Actions\ListJobsForWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRunAttempt;
    }

    public function actions👷DownloadWorkflowRunAttemptLogs(): Operator\Actions\DownloadWorkflowRunAttemptLogs
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogs instanceof Operator\Actions\DownloadWorkflowRunAttemptLogs === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogs = new Operator\Actions\DownloadWorkflowRunAttemptLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogs;
    }

    public function actions👷DownloadWorkflowRunAttemptLogsStreaming(): Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming
    {
        if ($this->actions👷DownloadWorkflowRunAttemptLogsStreaming instanceof Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming === false) {
            $this->actions👷DownloadWorkflowRunAttemptLogsStreaming = new Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunAttemptLogsStreaming;
    }

    public function actions👷CancelWorkflowRun(): Operator\Actions\CancelWorkflowRun
    {
        if ($this->actions👷CancelWorkflowRun instanceof Operator\Actions\CancelWorkflowRun === false) {
            $this->actions👷CancelWorkflowRun = new Operator\Actions\CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel());
        }

        return $this->actions👷CancelWorkflowRun;
    }

    public function actions👷ReviewCustomGatesForRun(): Operator\Actions\ReviewCustomGatesForRun
    {
        if ($this->actions👷ReviewCustomGatesForRun instanceof Operator\Actions\ReviewCustomGatesForRun === false) {
            $this->actions👷ReviewCustomGatesForRun = new Operator\Actions\ReviewCustomGatesForRun($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷ReviewCustomGatesForRun;
    }

    public function actions👷ListJobsForWorkflowRun(): Operator\Actions\ListJobsForWorkflowRun
    {
        if ($this->actions👷ListJobsForWorkflowRun instanceof Operator\Actions\ListJobsForWorkflowRun === false) {
            $this->actions👷ListJobsForWorkflowRun = new Operator\Actions\ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs());
        }

        return $this->actions👷ListJobsForWorkflowRun;
    }

    public function actions👷DownloadWorkflowRunLogs(): Operator\Actions\DownloadWorkflowRunLogs
    {
        if ($this->actions👷DownloadWorkflowRunLogs instanceof Operator\Actions\DownloadWorkflowRunLogs === false) {
            $this->actions👷DownloadWorkflowRunLogs = new Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogs;
    }

    public function actions👷DownloadWorkflowRunLogsStreaming(): Operator\Actions\DownloadWorkflowRunLogsStreaming
    {
        if ($this->actions👷DownloadWorkflowRunLogsStreaming instanceof Operator\Actions\DownloadWorkflowRunLogsStreaming === false) {
            $this->actions👷DownloadWorkflowRunLogsStreaming = new Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication);
        }

        return $this->actions👷DownloadWorkflowRunLogsStreaming;
    }

    public function actions👷DeleteWorkflowRunLogs(): Operator\Actions\DeleteWorkflowRunLogs
    {
        if ($this->actions👷DeleteWorkflowRunLogs instanceof Operator\Actions\DeleteWorkflowRunLogs === false) {
            $this->actions👷DeleteWorkflowRunLogs = new Operator\Actions\DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->actions👷DeleteWorkflowRunLogs;
    }

    public function actions👷GetPendingDeploymentsForRun(): Operator\Actions\GetPendingDeploymentsForRun
    {
        if ($this->actions👷GetPendingDeploymentsForRun instanceof Operator\Actions\GetPendingDeploymentsForRun === false) {
            $this->actions👷GetPendingDeploymentsForRun = new Operator\Actions\GetPendingDeploymentsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->actions👷GetPendingDeploymentsForRun;
    }

    public function actions👷ReviewPendingDeploymentsForRun(): Operator\Actions\ReviewPendingDeploymentsForRun
    {
        if ($this->actions👷ReviewPendingDeploymentsForRun instanceof Operator\Actions\ReviewPendingDeploymentsForRun === false) {
            $this->actions👷ReviewPendingDeploymentsForRun = new Operator\Actions\ReviewPendingDeploymentsForRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->actions👷ReviewPendingDeploymentsForRun;
    }

    public function actions👷ReRunWorkflow(): Operator\Actions\ReRunWorkflow
    {
        if ($this->actions👷ReRunWorkflow instanceof Operator\Actions\ReRunWorkflow === false) {
            $this->actions👷ReRunWorkflow = new Operator\Actions\ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun());
        }

        return $this->actions👷ReRunWorkflow;
    }

    public function actions👷ReRunWorkflowFailedJobs(): Operator\Actions\ReRunWorkflowFailedJobs
    {
        if ($this->actions👷ReRunWorkflowFailedJobs instanceof Operator\Actions\ReRunWorkflowFailedJobs === false) {
            $this->actions👷ReRunWorkflowFailedJobs = new Operator\Actions\ReRunWorkflowFailedJobs($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs());
        }

        return $this->actions👷ReRunWorkflowFailedJobs;
    }

    public function actions👷GetWorkflowRunUsage(): Operator\Actions\GetWorkflowRunUsage
    {
        if ($this->actions👷GetWorkflowRunUsage instanceof Operator\Actions\GetWorkflowRunUsage === false) {
            $this->actions👷GetWorkflowRunUsage = new Operator\Actions\GetWorkflowRunUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing());
        }

        return $this->actions👷GetWorkflowRunUsage;
    }

    public function actions👷ListRepoSecrets(): Operator\Actions\ListRepoSecrets
    {
        if ($this->actions👷ListRepoSecrets instanceof Operator\Actions\ListRepoSecrets === false) {
            $this->actions👷ListRepoSecrets = new Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets());
        }

        return $this->actions👷ListRepoSecrets;
    }

    public function actions👷GetRepoPublicKey(): Operator\Actions\GetRepoPublicKey
    {
        if ($this->actions👷GetRepoPublicKey instanceof Operator\Actions\GetRepoPublicKey === false) {
            $this->actions👷GetRepoPublicKey = new Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetRepoPublicKey;
    }

    public function actions👷GetRepoSecret(): Operator\Actions\GetRepoSecret
    {
        if ($this->actions👷GetRepoSecret instanceof Operator\Actions\GetRepoSecret === false) {
            $this->actions👷GetRepoSecret = new Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetRepoSecret;
    }

    public function actions👷CreateOrUpdateRepoSecret(): Operator\Actions\CreateOrUpdateRepoSecret
    {
        if ($this->actions👷CreateOrUpdateRepoSecret instanceof Operator\Actions\CreateOrUpdateRepoSecret === false) {
            $this->actions👷CreateOrUpdateRepoSecret = new Operator\Actions\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateRepoSecret;
    }

    public function actions👷DeleteRepoSecret(): Operator\Actions\DeleteRepoSecret
    {
        if ($this->actions👷DeleteRepoSecret instanceof Operator\Actions\DeleteRepoSecret === false) {
            $this->actions👷DeleteRepoSecret = new Operator\Actions\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoSecret;
    }

    public function actions👷ListRepoVariables(): Operator\Actions\ListRepoVariables
    {
        if ($this->actions👷ListRepoVariables instanceof Operator\Actions\ListRepoVariables === false) {
            $this->actions👷ListRepoVariables = new Operator\Actions\ListRepoVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->actions👷ListRepoVariables;
    }

    public function actions👷CreateRepoVariable(): Operator\Actions\CreateRepoVariable
    {
        if ($this->actions👷CreateRepoVariable instanceof Operator\Actions\CreateRepoVariable === false) {
            $this->actions👷CreateRepoVariable = new Operator\Actions\CreateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->actions👷CreateRepoVariable;
    }

    public function actions👷GetRepoVariable(): Operator\Actions\GetRepoVariable
    {
        if ($this->actions👷GetRepoVariable instanceof Operator\Actions\GetRepoVariable === false) {
            $this->actions👷GetRepoVariable = new Operator\Actions\GetRepoVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name());
        }

        return $this->actions👷GetRepoVariable;
    }

    public function actions👷DeleteRepoVariable(): Operator\Actions\DeleteRepoVariable
    {
        if ($this->actions👷DeleteRepoVariable instanceof Operator\Actions\DeleteRepoVariable === false) {
            $this->actions👷DeleteRepoVariable = new Operator\Actions\DeleteRepoVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteRepoVariable;
    }

    public function actions👷UpdateRepoVariable(): Operator\Actions\UpdateRepoVariable
    {
        if ($this->actions👷UpdateRepoVariable instanceof Operator\Actions\UpdateRepoVariable === false) {
            $this->actions👷UpdateRepoVariable = new Operator\Actions\UpdateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateRepoVariable;
    }

    public function actions👷ListRepoWorkflows(): Operator\Actions\ListRepoWorkflows
    {
        if ($this->actions👷ListRepoWorkflows instanceof Operator\Actions\ListRepoWorkflows === false) {
            $this->actions👷ListRepoWorkflows = new Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows());
        }

        return $this->actions👷ListRepoWorkflows;
    }

    public function actions👷GetWorkflow(): Operator\Actions\GetWorkflow
    {
        if ($this->actions👷GetWorkflow instanceof Operator\Actions\GetWorkflow === false) {
            $this->actions👷GetWorkflow = new Operator\Actions\GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId());
        }

        return $this->actions👷GetWorkflow;
    }

    public function actions👷DisableWorkflow(): Operator\Actions\DisableWorkflow
    {
        if ($this->actions👷DisableWorkflow instanceof Operator\Actions\DisableWorkflow === false) {
            $this->actions👷DisableWorkflow = new Operator\Actions\DisableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷DisableWorkflow;
    }

    public function actions👷CreateWorkflowDispatch(): Operator\Actions\CreateWorkflowDispatch
    {
        if ($this->actions👷CreateWorkflowDispatch instanceof Operator\Actions\CreateWorkflowDispatch === false) {
            $this->actions👷CreateWorkflowDispatch = new Operator\Actions\CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷CreateWorkflowDispatch;
    }

    public function actions👷EnableWorkflow(): Operator\Actions\EnableWorkflow
    {
        if ($this->actions👷EnableWorkflow instanceof Operator\Actions\EnableWorkflow === false) {
            $this->actions👷EnableWorkflow = new Operator\Actions\EnableWorkflow($this->browser, $this->authentication);
        }

        return $this->actions👷EnableWorkflow;
    }

    public function actions👷ListWorkflowRuns(): Operator\Actions\ListWorkflowRuns
    {
        if ($this->actions👷ListWorkflowRuns instanceof Operator\Actions\ListWorkflowRuns === false) {
            $this->actions👷ListWorkflowRuns = new Operator\Actions\ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs());
        }

        return $this->actions👷ListWorkflowRuns;
    }

    public function actions👷GetWorkflowUsage(): Operator\Actions\GetWorkflowUsage
    {
        if ($this->actions👷GetWorkflowUsage instanceof Operator\Actions\GetWorkflowUsage === false) {
            $this->actions👷GetWorkflowUsage = new Operator\Actions\GetWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing());
        }

        return $this->actions👷GetWorkflowUsage;
    }

    public function repos👷ListActivities(): Operator\Repos\ListActivities
    {
        if ($this->repos👷ListActivities instanceof Operator\Repos\ListActivities === false) {
            $this->repos👷ListActivities = new Operator\Repos\ListActivities($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Activity());
        }

        return $this->repos👷ListActivities;
    }

    public function issues👷ListAssignees(): Operator\Issues\ListAssignees
    {
        if ($this->issues👷ListAssignees instanceof Operator\Issues\ListAssignees === false) {
            $this->issues👷ListAssignees = new Operator\Issues\ListAssignees($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssignees;
    }

    public function issues👷ListAssigneesListing(): Operator\Issues\ListAssigneesListing
    {
        if ($this->issues👷ListAssigneesListing instanceof Operator\Issues\ListAssigneesListing === false) {
            $this->issues👷ListAssigneesListing = new Operator\Issues\ListAssigneesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees());
        }

        return $this->issues👷ListAssigneesListing;
    }

    public function issues👷CheckUserCanBeAssigned(): Operator\Issues\CheckUserCanBeAssigned
    {
        if ($this->issues👷CheckUserCanBeAssigned instanceof Operator\Issues\CheckUserCanBeAssigned === false) {
            $this->issues👷CheckUserCanBeAssigned = new Operator\Issues\CheckUserCanBeAssigned($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssigned;
    }

    public function repos👷ListAutolinks(): Operator\Repos\ListAutolinks
    {
        if ($this->repos👷ListAutolinks instanceof Operator\Repos\ListAutolinks === false) {
            $this->repos👷ListAutolinks = new Operator\Repos\ListAutolinks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷ListAutolinks;
    }

    public function repos👷CreateAutolink(): Operator\Repos\CreateAutolink
    {
        if ($this->repos👷CreateAutolink instanceof Operator\Repos\CreateAutolink === false) {
            $this->repos👷CreateAutolink = new Operator\Repos\CreateAutolink($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks());
        }

        return $this->repos👷CreateAutolink;
    }

    public function repos👷GetAutolink(): Operator\Repos\GetAutolink
    {
        if ($this->repos👷GetAutolink instanceof Operator\Repos\GetAutolink === false) {
            $this->repos👷GetAutolink = new Operator\Repos\GetAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷GetAutolink;
    }

    public function repos👷DeleteAutolink(): Operator\Repos\DeleteAutolink
    {
        if ($this->repos👷DeleteAutolink instanceof Operator\Repos\DeleteAutolink === false) {
            $this->repos👷DeleteAutolink = new Operator\Repos\DeleteAutolink($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId());
        }

        return $this->repos👷DeleteAutolink;
    }

    public function repos👷CheckAutomatedSecurityFixes(): Operator\Repos\CheckAutomatedSecurityFixes
    {
        if ($this->repos👷CheckAutomatedSecurityFixes instanceof Operator\Repos\CheckAutomatedSecurityFixes === false) {
            $this->repos👷CheckAutomatedSecurityFixes = new Operator\Repos\CheckAutomatedSecurityFixes($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes());
        }

        return $this->repos👷CheckAutomatedSecurityFixes;
    }

    public function repos👷EnableAutomatedSecurityFixes(): Operator\Repos\EnableAutomatedSecurityFixes
    {
        if ($this->repos👷EnableAutomatedSecurityFixes instanceof Operator\Repos\EnableAutomatedSecurityFixes === false) {
            $this->repos👷EnableAutomatedSecurityFixes = new Operator\Repos\EnableAutomatedSecurityFixes($this->browser, $this->authentication);
        }

        return $this->repos👷EnableAutomatedSecurityFixes;
    }

    public function repos👷DisableAutomatedSecurityFixes(): Operator\Repos\DisableAutomatedSecurityFixes
    {
        if ($this->repos👷DisableAutomatedSecurityFixes instanceof Operator\Repos\DisableAutomatedSecurityFixes === false) {
            $this->repos👷DisableAutomatedSecurityFixes = new Operator\Repos\DisableAutomatedSecurityFixes($this->browser, $this->authentication);
        }

        return $this->repos👷DisableAutomatedSecurityFixes;
    }

    public function repos👷ListBranches(): Operator\Repos\ListBranches
    {
        if ($this->repos👷ListBranches instanceof Operator\Repos\ListBranches === false) {
            $this->repos👷ListBranches = new Operator\Repos\ListBranches($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranches;
    }

    public function repos👷ListBranchesListing(): Operator\Repos\ListBranchesListing
    {
        if ($this->repos👷ListBranchesListing instanceof Operator\Repos\ListBranchesListing === false) {
            $this->repos👷ListBranchesListing = new Operator\Repos\ListBranchesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches());
        }

        return $this->repos👷ListBranchesListing;
    }

    public function repos👷GetBranch(): Operator\Repos\GetBranch
    {
        if ($this->repos👷GetBranch instanceof Operator\Repos\GetBranch === false) {
            $this->repos👷GetBranch = new Operator\Repos\GetBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranch;
    }

    public function repos👷GetBranchProtection(): Operator\Repos\GetBranchProtection
    {
        if ($this->repos👷GetBranchProtection instanceof Operator\Repos\GetBranchProtection === false) {
            $this->repos👷GetBranchProtection = new Operator\Repos\GetBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷GetBranchProtection;
    }

    public function repos👷UpdateBranchProtection(): Operator\Repos\UpdateBranchProtection
    {
        if ($this->repos👷UpdateBranchProtection instanceof Operator\Repos\UpdateBranchProtection === false) {
            $this->repos👷UpdateBranchProtection = new Operator\Repos\UpdateBranchProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷UpdateBranchProtection;
    }

    public function repos👷DeleteBranchProtection(): Operator\Repos\DeleteBranchProtection
    {
        if ($this->repos👷DeleteBranchProtection instanceof Operator\Repos\DeleteBranchProtection === false) {
            $this->repos👷DeleteBranchProtection = new Operator\Repos\DeleteBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection());
        }

        return $this->repos👷DeleteBranchProtection;
    }

    public function repos👷GetAdminBranchProtection(): Operator\Repos\GetAdminBranchProtection
    {
        if ($this->repos👷GetAdminBranchProtection instanceof Operator\Repos\GetAdminBranchProtection === false) {
            $this->repos👷GetAdminBranchProtection = new Operator\Repos\GetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷GetAdminBranchProtection;
    }

    public function repos👷SetAdminBranchProtection(): Operator\Repos\SetAdminBranchProtection
    {
        if ($this->repos👷SetAdminBranchProtection instanceof Operator\Repos\SetAdminBranchProtection === false) {
            $this->repos👷SetAdminBranchProtection = new Operator\Repos\SetAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷SetAdminBranchProtection;
    }

    public function repos👷DeleteAdminBranchProtection(): Operator\Repos\DeleteAdminBranchProtection
    {
        if ($this->repos👷DeleteAdminBranchProtection instanceof Operator\Repos\DeleteAdminBranchProtection === false) {
            $this->repos👷DeleteAdminBranchProtection = new Operator\Repos\DeleteAdminBranchProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins());
        }

        return $this->repos👷DeleteAdminBranchProtection;
    }

    public function repos👷GetPullRequestReviewProtection(): Operator\Repos\GetPullRequestReviewProtection
    {
        if ($this->repos👷GetPullRequestReviewProtection instanceof Operator\Repos\GetPullRequestReviewProtection === false) {
            $this->repos👷GetPullRequestReviewProtection = new Operator\Repos\GetPullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷GetPullRequestReviewProtection;
    }

    public function repos👷DeletePullRequestReviewProtection(): Operator\Repos\DeletePullRequestReviewProtection
    {
        if ($this->repos👷DeletePullRequestReviewProtection instanceof Operator\Repos\DeletePullRequestReviewProtection === false) {
            $this->repos👷DeletePullRequestReviewProtection = new Operator\Repos\DeletePullRequestReviewProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷DeletePullRequestReviewProtection;
    }

    public function repos👷UpdatePullRequestReviewProtection(): Operator\Repos\UpdatePullRequestReviewProtection
    {
        if ($this->repos👷UpdatePullRequestReviewProtection instanceof Operator\Repos\UpdatePullRequestReviewProtection === false) {
            $this->repos👷UpdatePullRequestReviewProtection = new Operator\Repos\UpdatePullRequestReviewProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews());
        }

        return $this->repos👷UpdatePullRequestReviewProtection;
    }

    public function repos👷GetCommitSignatureProtection(): Operator\Repos\GetCommitSignatureProtection
    {
        if ($this->repos👷GetCommitSignatureProtection instanceof Operator\Repos\GetCommitSignatureProtection === false) {
            $this->repos👷GetCommitSignatureProtection = new Operator\Repos\GetCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷GetCommitSignatureProtection;
    }

    public function repos👷CreateCommitSignatureProtection(): Operator\Repos\CreateCommitSignatureProtection
    {
        if ($this->repos👷CreateCommitSignatureProtection instanceof Operator\Repos\CreateCommitSignatureProtection === false) {
            $this->repos👷CreateCommitSignatureProtection = new Operator\Repos\CreateCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷CreateCommitSignatureProtection;
    }

    public function repos👷DeleteCommitSignatureProtection(): Operator\Repos\DeleteCommitSignatureProtection
    {
        if ($this->repos👷DeleteCommitSignatureProtection instanceof Operator\Repos\DeleteCommitSignatureProtection === false) {
            $this->repos👷DeleteCommitSignatureProtection = new Operator\Repos\DeleteCommitSignatureProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures());
        }

        return $this->repos👷DeleteCommitSignatureProtection;
    }

    public function repos👷GetStatusChecksProtection(): Operator\Repos\GetStatusChecksProtection
    {
        if ($this->repos👷GetStatusChecksProtection instanceof Operator\Repos\GetStatusChecksProtection === false) {
            $this->repos👷GetStatusChecksProtection = new Operator\Repos\GetStatusChecksProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷GetStatusChecksProtection;
    }

    public function repos👷RemoveStatusCheckProtection(): Operator\Repos\RemoveStatusCheckProtection
    {
        if ($this->repos👷RemoveStatusCheckProtection instanceof Operator\Repos\RemoveStatusCheckProtection === false) {
            $this->repos👷RemoveStatusCheckProtection = new Operator\Repos\RemoveStatusCheckProtection($this->browser, $this->authentication);
        }

        return $this->repos👷RemoveStatusCheckProtection;
    }

    public function repos👷UpdateStatusCheckProtection(): Operator\Repos\UpdateStatusCheckProtection
    {
        if ($this->repos👷UpdateStatusCheckProtection instanceof Operator\Repos\UpdateStatusCheckProtection === false) {
            $this->repos👷UpdateStatusCheckProtection = new Operator\Repos\UpdateStatusCheckProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks());
        }

        return $this->repos👷UpdateStatusCheckProtection;
    }

    public function repos👷GetAllStatusCheckContexts(): Operator\Repos\GetAllStatusCheckContexts
    {
        if ($this->repos👷GetAllStatusCheckContexts instanceof Operator\Repos\GetAllStatusCheckContexts === false) {
            $this->repos👷GetAllStatusCheckContexts = new Operator\Repos\GetAllStatusCheckContexts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷GetAllStatusCheckContexts;
    }

    public function repos👷SetStatusCheckContexts(): Operator\Repos\SetStatusCheckContexts
    {
        if ($this->repos👷SetStatusCheckContexts instanceof Operator\Repos\SetStatusCheckContexts === false) {
            $this->repos👷SetStatusCheckContexts = new Operator\Repos\SetStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷SetStatusCheckContexts;
    }

    public function repos👷AddStatusCheckContexts(): Operator\Repos\AddStatusCheckContexts
    {
        if ($this->repos👷AddStatusCheckContexts instanceof Operator\Repos\AddStatusCheckContexts === false) {
            $this->repos👷AddStatusCheckContexts = new Operator\Repos\AddStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷AddStatusCheckContexts;
    }

    public function repos👷RemoveStatusCheckContexts(): Operator\Repos\RemoveStatusCheckContexts
    {
        if ($this->repos👷RemoveStatusCheckContexts instanceof Operator\Repos\RemoveStatusCheckContexts === false) {
            $this->repos👷RemoveStatusCheckContexts = new Operator\Repos\RemoveStatusCheckContexts($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts());
        }

        return $this->repos👷RemoveStatusCheckContexts;
    }

    public function repos👷GetAccessRestrictions(): Operator\Repos\GetAccessRestrictions
    {
        if ($this->repos👷GetAccessRestrictions instanceof Operator\Repos\GetAccessRestrictions === false) {
            $this->repos👷GetAccessRestrictions = new Operator\Repos\GetAccessRestrictions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions());
        }

        return $this->repos👷GetAccessRestrictions;
    }

    public function repos👷DeleteAccessRestrictions(): Operator\Repos\DeleteAccessRestrictions
    {
        if ($this->repos👷DeleteAccessRestrictions instanceof Operator\Repos\DeleteAccessRestrictions === false) {
            $this->repos👷DeleteAccessRestrictions = new Operator\Repos\DeleteAccessRestrictions($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAccessRestrictions;
    }

    public function repos👷GetAppsWithAccessToProtectedBranch(): Operator\Repos\GetAppsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetAppsWithAccessToProtectedBranch instanceof Operator\Repos\GetAppsWithAccessToProtectedBranch === false) {
            $this->repos👷GetAppsWithAccessToProtectedBranch = new Operator\Repos\GetAppsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷GetAppsWithAccessToProtectedBranch;
    }

    public function repos👷SetAppAccessRestrictions(): Operator\Repos\SetAppAccessRestrictions
    {
        if ($this->repos👷SetAppAccessRestrictions instanceof Operator\Repos\SetAppAccessRestrictions === false) {
            $this->repos👷SetAppAccessRestrictions = new Operator\Repos\SetAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷SetAppAccessRestrictions;
    }

    public function repos👷AddAppAccessRestrictions(): Operator\Repos\AddAppAccessRestrictions
    {
        if ($this->repos👷AddAppAccessRestrictions instanceof Operator\Repos\AddAppAccessRestrictions === false) {
            $this->repos👷AddAppAccessRestrictions = new Operator\Repos\AddAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷AddAppAccessRestrictions;
    }

    public function repos👷RemoveAppAccessRestrictions(): Operator\Repos\RemoveAppAccessRestrictions
    {
        if ($this->repos👷RemoveAppAccessRestrictions instanceof Operator\Repos\RemoveAppAccessRestrictions === false) {
            $this->repos👷RemoveAppAccessRestrictions = new Operator\Repos\RemoveAppAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps());
        }

        return $this->repos👷RemoveAppAccessRestrictions;
    }

    public function repos👷GetTeamsWithAccessToProtectedBranch(): Operator\Repos\GetTeamsWithAccessToProtectedBranch
    {
        if ($this->repos👷GetTeamsWithAccessToProtectedBranch instanceof Operator\Repos\GetTeamsWithAccessToProtectedBranch === false) {
            $this->repos👷GetTeamsWithAccessToProtectedBranch = new Operator\Repos\GetTeamsWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷GetTeamsWithAccessToProtectedBranch;
    }

    public function repos👷SetTeamAccessRestrictions(): Operator\Repos\SetTeamAccessRestrictions
    {
        if ($this->repos👷SetTeamAccessRestrictions instanceof Operator\Repos\SetTeamAccessRestrictions === false) {
            $this->repos👷SetTeamAccessRestrictions = new Operator\Repos\SetTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷SetTeamAccessRestrictions;
    }

    public function repos👷AddTeamAccessRestrictions(): Operator\Repos\AddTeamAccessRestrictions
    {
        if ($this->repos👷AddTeamAccessRestrictions instanceof Operator\Repos\AddTeamAccessRestrictions === false) {
            $this->repos👷AddTeamAccessRestrictions = new Operator\Repos\AddTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷AddTeamAccessRestrictions;
    }

    public function repos👷RemoveTeamAccessRestrictions(): Operator\Repos\RemoveTeamAccessRestrictions
    {
        if ($this->repos👷RemoveTeamAccessRestrictions instanceof Operator\Repos\RemoveTeamAccessRestrictions === false) {
            $this->repos👷RemoveTeamAccessRestrictions = new Operator\Repos\RemoveTeamAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams());
        }

        return $this->repos👷RemoveTeamAccessRestrictions;
    }

    public function repos👷GetUsersWithAccessToProtectedBranch(): Operator\Repos\GetUsersWithAccessToProtectedBranch
    {
        if ($this->repos👷GetUsersWithAccessToProtectedBranch instanceof Operator\Repos\GetUsersWithAccessToProtectedBranch === false) {
            $this->repos👷GetUsersWithAccessToProtectedBranch = new Operator\Repos\GetUsersWithAccessToProtectedBranch($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷GetUsersWithAccessToProtectedBranch;
    }

    public function repos👷SetUserAccessRestrictions(): Operator\Repos\SetUserAccessRestrictions
    {
        if ($this->repos👷SetUserAccessRestrictions instanceof Operator\Repos\SetUserAccessRestrictions === false) {
            $this->repos👷SetUserAccessRestrictions = new Operator\Repos\SetUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷SetUserAccessRestrictions;
    }

    public function repos👷AddUserAccessRestrictions(): Operator\Repos\AddUserAccessRestrictions
    {
        if ($this->repos👷AddUserAccessRestrictions instanceof Operator\Repos\AddUserAccessRestrictions === false) {
            $this->repos👷AddUserAccessRestrictions = new Operator\Repos\AddUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷AddUserAccessRestrictions;
    }

    public function repos👷RemoveUserAccessRestrictions(): Operator\Repos\RemoveUserAccessRestrictions
    {
        if ($this->repos👷RemoveUserAccessRestrictions instanceof Operator\Repos\RemoveUserAccessRestrictions === false) {
            $this->repos👷RemoveUserAccessRestrictions = new Operator\Repos\RemoveUserAccessRestrictions($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users());
        }

        return $this->repos👷RemoveUserAccessRestrictions;
    }

    public function repos👷RenameBranch(): Operator\Repos\RenameBranch
    {
        if ($this->repos👷RenameBranch instanceof Operator\Repos\RenameBranch === false) {
            $this->repos👷RenameBranch = new Operator\Repos\RenameBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename());
        }

        return $this->repos👷RenameBranch;
    }

    public function checks👷Create(): Operator\Checks\Create
    {
        if ($this->checks👷Create instanceof Operator\Checks\Create === false) {
            $this->checks👷Create = new Operator\Checks\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns());
        }

        return $this->checks👷Create;
    }

    public function checks👷Get(): Operator\Checks\Get
    {
        if ($this->checks👷Get instanceof Operator\Checks\Get === false) {
            $this->checks👷Get = new Operator\Checks\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Get;
    }

    public function checks👷Update(): Operator\Checks\Update
    {
        if ($this->checks👷Update instanceof Operator\Checks\Update === false) {
            $this->checks👷Update = new Operator\Checks\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->checks👷Update;
    }

    public function checks👷ListAnnotations(): Operator\Checks\ListAnnotations
    {
        if ($this->checks👷ListAnnotations instanceof Operator\Checks\ListAnnotations === false) {
            $this->checks👷ListAnnotations = new Operator\Checks\ListAnnotations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotations;
    }

    public function checks👷ListAnnotationsListing(): Operator\Checks\ListAnnotationsListing
    {
        if ($this->checks👷ListAnnotationsListing instanceof Operator\Checks\ListAnnotationsListing === false) {
            $this->checks👷ListAnnotationsListing = new Operator\Checks\ListAnnotationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->checks👷ListAnnotationsListing;
    }

    public function checks👷RerequestRun(): Operator\Checks\RerequestRun
    {
        if ($this->checks👷RerequestRun instanceof Operator\Checks\RerequestRun === false) {
            $this->checks👷RerequestRun = new Operator\Checks\RerequestRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest());
        }

        return $this->checks👷RerequestRun;
    }

    public function checks👷CreateSuite(): Operator\Checks\CreateSuite
    {
        if ($this->checks👷CreateSuite instanceof Operator\Checks\CreateSuite === false) {
            $this->checks👷CreateSuite = new Operator\Checks\CreateSuite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites());
        }

        return $this->checks👷CreateSuite;
    }

    public function checks👷SetSuitesPreferences(): Operator\Checks\SetSuitesPreferences
    {
        if ($this->checks👷SetSuitesPreferences instanceof Operator\Checks\SetSuitesPreferences === false) {
            $this->checks👷SetSuitesPreferences = new Operator\Checks\SetSuitesPreferences($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences());
        }

        return $this->checks👷SetSuitesPreferences;
    }

    public function checks👷GetSuite(): Operator\Checks\GetSuite
    {
        if ($this->checks👷GetSuite instanceof Operator\Checks\GetSuite === false) {
            $this->checks👷GetSuite = new Operator\Checks\GetSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId());
        }

        return $this->checks👷GetSuite;
    }

    public function checks👷ListForSuite(): Operator\Checks\ListForSuite
    {
        if ($this->checks👷ListForSuite instanceof Operator\Checks\ListForSuite === false) {
            $this->checks👷ListForSuite = new Operator\Checks\ListForSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns());
        }

        return $this->checks👷ListForSuite;
    }

    public function checks👷RerequestSuite(): Operator\Checks\RerequestSuite
    {
        if ($this->checks👷RerequestSuite instanceof Operator\Checks\RerequestSuite === false) {
            $this->checks👷RerequestSuite = new Operator\Checks\RerequestSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest());
        }

        return $this->checks👷RerequestSuite;
    }

    public function codeScanning👷ListAlertsForRepo(): Operator\CodeScanning\ListAlertsForRepo
    {
        if ($this->codeScanning👷ListAlertsForRepo instanceof Operator\CodeScanning\ListAlertsForRepo === false) {
            $this->codeScanning👷ListAlertsForRepo = new Operator\CodeScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepo;
    }

    public function codeScanning👷ListAlertsForRepoListing(): Operator\CodeScanning\ListAlertsForRepoListing
    {
        if ($this->codeScanning👷ListAlertsForRepoListing instanceof Operator\CodeScanning\ListAlertsForRepoListing === false) {
            $this->codeScanning👷ListAlertsForRepoListing = new Operator\CodeScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts());
        }

        return $this->codeScanning👷ListAlertsForRepoListing;
    }

    public function codeScanning👷GetAlert(): Operator\CodeScanning\GetAlert
    {
        if ($this->codeScanning👷GetAlert instanceof Operator\CodeScanning\GetAlert === false) {
            $this->codeScanning👷GetAlert = new Operator\CodeScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷GetAlert;
    }

    public function codeScanning👷UpdateAlert(): Operator\CodeScanning\UpdateAlert
    {
        if ($this->codeScanning👷UpdateAlert instanceof Operator\CodeScanning\UpdateAlert === false) {
            $this->codeScanning👷UpdateAlert = new Operator\CodeScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber());
        }

        return $this->codeScanning👷UpdateAlert;
    }

    public function codeScanning👷ListAlertInstances(): Operator\CodeScanning\ListAlertInstances
    {
        if ($this->codeScanning👷ListAlertInstances instanceof Operator\CodeScanning\ListAlertInstances === false) {
            $this->codeScanning👷ListAlertInstances = new Operator\CodeScanning\ListAlertInstances($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstances;
    }

    public function codeScanning👷ListAlertInstancesListing(): Operator\CodeScanning\ListAlertInstancesListing
    {
        if ($this->codeScanning👷ListAlertInstancesListing instanceof Operator\CodeScanning\ListAlertInstancesListing === false) {
            $this->codeScanning👷ListAlertInstancesListing = new Operator\CodeScanning\ListAlertInstancesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances());
        }

        return $this->codeScanning👷ListAlertInstancesListing;
    }

    public function codeScanning👷ListRecentAnalyses(): Operator\CodeScanning\ListRecentAnalyses
    {
        if ($this->codeScanning👷ListRecentAnalyses instanceof Operator\CodeScanning\ListRecentAnalyses === false) {
            $this->codeScanning👷ListRecentAnalyses = new Operator\CodeScanning\ListRecentAnalyses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalyses;
    }

    public function codeScanning👷ListRecentAnalysesListing(): Operator\CodeScanning\ListRecentAnalysesListing
    {
        if ($this->codeScanning👷ListRecentAnalysesListing instanceof Operator\CodeScanning\ListRecentAnalysesListing === false) {
            $this->codeScanning👷ListRecentAnalysesListing = new Operator\CodeScanning\ListRecentAnalysesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses());
        }

        return $this->codeScanning👷ListRecentAnalysesListing;
    }

    public function codeScanning👷GetAnalysis(): Operator\CodeScanning\GetAnalysis
    {
        if ($this->codeScanning👷GetAnalysis instanceof Operator\CodeScanning\GetAnalysis === false) {
            $this->codeScanning👷GetAnalysis = new Operator\CodeScanning\GetAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷GetAnalysis;
    }

    public function codeScanning👷DeleteAnalysis(): Operator\CodeScanning\DeleteAnalysis
    {
        if ($this->codeScanning👷DeleteAnalysis instanceof Operator\CodeScanning\DeleteAnalysis === false) {
            $this->codeScanning👷DeleteAnalysis = new Operator\CodeScanning\DeleteAnalysis($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId());
        }

        return $this->codeScanning👷DeleteAnalysis;
    }

    public function codeScanning👷ListCodeqlDatabases(): Operator\CodeScanning\ListCodeqlDatabases
    {
        if ($this->codeScanning👷ListCodeqlDatabases instanceof Operator\CodeScanning\ListCodeqlDatabases === false) {
            $this->codeScanning👷ListCodeqlDatabases = new Operator\CodeScanning\ListCodeqlDatabases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases());
        }

        return $this->codeScanning👷ListCodeqlDatabases;
    }

    public function codeScanning👷GetCodeqlDatabase(): Operator\CodeScanning\GetCodeqlDatabase
    {
        if ($this->codeScanning👷GetCodeqlDatabase instanceof Operator\CodeScanning\GetCodeqlDatabase === false) {
            $this->codeScanning👷GetCodeqlDatabase = new Operator\CodeScanning\GetCodeqlDatabase($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language());
        }

        return $this->codeScanning👷GetCodeqlDatabase;
    }

    public function codeScanning👷GetDefaultSetup(): Operator\CodeScanning\GetDefaultSetup
    {
        if ($this->codeScanning👷GetDefaultSetup instanceof Operator\CodeScanning\GetDefaultSetup === false) {
            $this->codeScanning👷GetDefaultSetup = new Operator\CodeScanning\GetDefaultSetup($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());
        }

        return $this->codeScanning👷GetDefaultSetup;
    }

    public function codeScanning👷UpdateDefaultSetup(): Operator\CodeScanning\UpdateDefaultSetup
    {
        if ($this->codeScanning👷UpdateDefaultSetup instanceof Operator\CodeScanning\UpdateDefaultSetup === false) {
            $this->codeScanning👷UpdateDefaultSetup = new Operator\CodeScanning\UpdateDefaultSetup($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup());
        }

        return $this->codeScanning👷UpdateDefaultSetup;
    }

    public function codeScanning👷UploadSarif(): Operator\CodeScanning\UploadSarif
    {
        if ($this->codeScanning👷UploadSarif instanceof Operator\CodeScanning\UploadSarif === false) {
            $this->codeScanning👷UploadSarif = new Operator\CodeScanning\UploadSarif($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs());
        }

        return $this->codeScanning👷UploadSarif;
    }

    public function codeScanning👷GetSarif(): Operator\CodeScanning\GetSarif
    {
        if ($this->codeScanning👷GetSarif instanceof Operator\CodeScanning\GetSarif === false) {
            $this->codeScanning👷GetSarif = new Operator\CodeScanning\GetSarif($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId());
        }

        return $this->codeScanning👷GetSarif;
    }

    public function repos👷CodeownersErrors(): Operator\Repos\CodeownersErrors
    {
        if ($this->repos👷CodeownersErrors instanceof Operator\Repos\CodeownersErrors === false) {
            $this->repos👷CodeownersErrors = new Operator\Repos\CodeownersErrors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors());
        }

        return $this->repos👷CodeownersErrors;
    }

    public function codespaces👷ListInRepositoryForAuthenticatedUser(): Operator\Codespaces\ListInRepositoryForAuthenticatedUser
    {
        if ($this->codespaces👷ListInRepositoryForAuthenticatedUser instanceof Operator\Codespaces\ListInRepositoryForAuthenticatedUser === false) {
            $this->codespaces👷ListInRepositoryForAuthenticatedUser = new Operator\Codespaces\ListInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->codespaces👷ListInRepositoryForAuthenticatedUser;
    }

    public function codespaces👷CreateWithRepoForAuthenticatedUser(): Operator\Codespaces\CreateWithRepoForAuthenticatedUser
    {
        if ($this->codespaces👷CreateWithRepoForAuthenticatedUser instanceof Operator\Codespaces\CreateWithRepoForAuthenticatedUser === false) {
            $this->codespaces👷CreateWithRepoForAuthenticatedUser = new Operator\Codespaces\CreateWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces());
        }

        return $this->codespaces👷CreateWithRepoForAuthenticatedUser;
    }

    public function codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser(): Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser
    {
        if ($this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser instanceof Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser === false) {
            $this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser = new Operator\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers());
        }

        return $this->codespaces👷ListDevcontainersInRepositoryForAuthenticatedUser;
    }

    public function codespaces👷RepoMachinesForAuthenticatedUser(): Operator\Codespaces\RepoMachinesForAuthenticatedUser
    {
        if ($this->codespaces👷RepoMachinesForAuthenticatedUser instanceof Operator\Codespaces\RepoMachinesForAuthenticatedUser === false) {
            $this->codespaces👷RepoMachinesForAuthenticatedUser = new Operator\Codespaces\RepoMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines());
        }

        return $this->codespaces👷RepoMachinesForAuthenticatedUser;
    }

    public function codespaces👷PreFlightWithRepoForAuthenticatedUser(): Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser
    {
        if ($this->codespaces👷PreFlightWithRepoForAuthenticatedUser instanceof Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser === false) {
            $this->codespaces👷PreFlightWithRepoForAuthenticatedUser = new Operator\Codespaces\PreFlightWithRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_());
        }

        return $this->codespaces👷PreFlightWithRepoForAuthenticatedUser;
    }

    public function codespaces👷ListRepoSecrets(): Operator\Codespaces\ListRepoSecrets
    {
        if ($this->codespaces👷ListRepoSecrets instanceof Operator\Codespaces\ListRepoSecrets === false) {
            $this->codespaces👷ListRepoSecrets = new Operator\Codespaces\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListRepoSecrets;
    }

    public function codespaces👷GetRepoPublicKey(): Operator\Codespaces\GetRepoPublicKey
    {
        if ($this->codespaces👷GetRepoPublicKey instanceof Operator\Codespaces\GetRepoPublicKey === false) {
            $this->codespaces👷GetRepoPublicKey = new Operator\Codespaces\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetRepoPublicKey;
    }

    public function codespaces👷GetRepoSecret(): Operator\Codespaces\GetRepoSecret
    {
        if ($this->codespaces👷GetRepoSecret instanceof Operator\Codespaces\GetRepoSecret === false) {
            $this->codespaces👷GetRepoSecret = new Operator\Codespaces\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetRepoSecret;
    }

    public function codespaces👷CreateOrUpdateRepoSecret(): Operator\Codespaces\CreateOrUpdateRepoSecret
    {
        if ($this->codespaces👷CreateOrUpdateRepoSecret instanceof Operator\Codespaces\CreateOrUpdateRepoSecret === false) {
            $this->codespaces👷CreateOrUpdateRepoSecret = new Operator\Codespaces\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateRepoSecret;
    }

    public function codespaces👷DeleteRepoSecret(): Operator\Codespaces\DeleteRepoSecret
    {
        if ($this->codespaces👷DeleteRepoSecret instanceof Operator\Codespaces\DeleteRepoSecret === false) {
            $this->codespaces👷DeleteRepoSecret = new Operator\Codespaces\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->codespaces👷DeleteRepoSecret;
    }

    public function repos👷ListCollaborators(): Operator\Repos\ListCollaborators
    {
        if ($this->repos👷ListCollaborators instanceof Operator\Repos\ListCollaborators === false) {
            $this->repos👷ListCollaborators = new Operator\Repos\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaborators;
    }

    public function repos👷ListCollaboratorsListing(): Operator\Repos\ListCollaboratorsListing
    {
        if ($this->repos👷ListCollaboratorsListing instanceof Operator\Repos\ListCollaboratorsListing === false) {
            $this->repos👷ListCollaboratorsListing = new Operator\Repos\ListCollaboratorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators());
        }

        return $this->repos👷ListCollaboratorsListing;
    }

    public function repos👷CheckCollaborator(): Operator\Repos\CheckCollaborator
    {
        if ($this->repos👷CheckCollaborator instanceof Operator\Repos\CheckCollaborator === false) {
            $this->repos👷CheckCollaborator = new Operator\Repos\CheckCollaborator($this->browser, $this->authentication);
        }

        return $this->repos👷CheckCollaborator;
    }

    public function repos👷AddCollaborator(): Operator\Repos\AddCollaborator
    {
        if ($this->repos👷AddCollaborator instanceof Operator\Repos\AddCollaborator === false) {
            $this->repos👷AddCollaborator = new Operator\Repos\AddCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷AddCollaborator;
    }

    public function repos👷RemoveCollaborator(): Operator\Repos\RemoveCollaborator
    {
        if ($this->repos👷RemoveCollaborator instanceof Operator\Repos\RemoveCollaborator === false) {
            $this->repos👷RemoveCollaborator = new Operator\Repos\RemoveCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username());
        }

        return $this->repos👷RemoveCollaborator;
    }

    public function repos👷GetCollaboratorPermissionLevel(): Operator\Repos\GetCollaboratorPermissionLevel
    {
        if ($this->repos👷GetCollaboratorPermissionLevel instanceof Operator\Repos\GetCollaboratorPermissionLevel === false) {
            $this->repos👷GetCollaboratorPermissionLevel = new Operator\Repos\GetCollaboratorPermissionLevel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission());
        }

        return $this->repos👷GetCollaboratorPermissionLevel;
    }

    public function repos👷ListCommitCommentsForRepo(): Operator\Repos\ListCommitCommentsForRepo
    {
        if ($this->repos👷ListCommitCommentsForRepo instanceof Operator\Repos\ListCommitCommentsForRepo === false) {
            $this->repos👷ListCommitCommentsForRepo = new Operator\Repos\ListCommitCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepo;
    }

    public function repos👷ListCommitCommentsForRepoListing(): Operator\Repos\ListCommitCommentsForRepoListing
    {
        if ($this->repos👷ListCommitCommentsForRepoListing instanceof Operator\Repos\ListCommitCommentsForRepoListing === false) {
            $this->repos👷ListCommitCommentsForRepoListing = new Operator\Repos\ListCommitCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments());
        }

        return $this->repos👷ListCommitCommentsForRepoListing;
    }

    public function repos👷GetCommitComment(): Operator\Repos\GetCommitComment
    {
        if ($this->repos👷GetCommitComment instanceof Operator\Repos\GetCommitComment === false) {
            $this->repos👷GetCommitComment = new Operator\Repos\GetCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷GetCommitComment;
    }

    public function repos👷DeleteCommitComment(): Operator\Repos\DeleteCommitComment
    {
        if ($this->repos👷DeleteCommitComment instanceof Operator\Repos\DeleteCommitComment === false) {
            $this->repos👷DeleteCommitComment = new Operator\Repos\DeleteCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷DeleteCommitComment;
    }

    public function repos👷UpdateCommitComment(): Operator\Repos\UpdateCommitComment
    {
        if ($this->repos👷UpdateCommitComment instanceof Operator\Repos\UpdateCommitComment === false) {
            $this->repos👷UpdateCommitComment = new Operator\Repos\UpdateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId());
        }

        return $this->repos👷UpdateCommitComment;
    }

    public function reactions👷ListForCommitComment(): Operator\Reactions\ListForCommitComment
    {
        if ($this->reactions👷ListForCommitComment instanceof Operator\Reactions\ListForCommitComment === false) {
            $this->reactions👷ListForCommitComment = new Operator\Reactions\ListForCommitComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitComment;
    }

    public function reactions👷ListForCommitCommentListing(): Operator\Reactions\ListForCommitCommentListing
    {
        if ($this->reactions👷ListForCommitCommentListing instanceof Operator\Reactions\ListForCommitCommentListing === false) {
            $this->reactions👷ListForCommitCommentListing = new Operator\Reactions\ListForCommitCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForCommitCommentListing;
    }

    public function reactions👷CreateForCommitComment(): Operator\Reactions\CreateForCommitComment
    {
        if ($this->reactions👷CreateForCommitComment instanceof Operator\Reactions\CreateForCommitComment === false) {
            $this->reactions👷CreateForCommitComment = new Operator\Reactions\CreateForCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForCommitComment;
    }

    public function reactions👷DeleteForCommitComment(): Operator\Reactions\DeleteForCommitComment
    {
        if ($this->reactions👷DeleteForCommitComment instanceof Operator\Reactions\DeleteForCommitComment === false) {
            $this->reactions👷DeleteForCommitComment = new Operator\Reactions\DeleteForCommitComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForCommitComment;
    }

    public function repos👷ListCommits(): Operator\Repos\ListCommits
    {
        if ($this->repos👷ListCommits instanceof Operator\Repos\ListCommits === false) {
            $this->repos👷ListCommits = new Operator\Repos\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommits;
    }

    public function repos👷ListCommitsListing(): Operator\Repos\ListCommitsListing
    {
        if ($this->repos👷ListCommitsListing instanceof Operator\Repos\ListCommitsListing === false) {
            $this->repos👷ListCommitsListing = new Operator\Repos\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits());
        }

        return $this->repos👷ListCommitsListing;
    }

    public function repos👷ListBranchesForHeadCommit(): Operator\Repos\ListBranchesForHeadCommit
    {
        if ($this->repos👷ListBranchesForHeadCommit instanceof Operator\Repos\ListBranchesForHeadCommit === false) {
            $this->repos👷ListBranchesForHeadCommit = new Operator\Repos\ListBranchesForHeadCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead());
        }

        return $this->repos👷ListBranchesForHeadCommit;
    }

    public function repos👷ListCommentsForCommit(): Operator\Repos\ListCommentsForCommit
    {
        if ($this->repos👷ListCommentsForCommit instanceof Operator\Repos\ListCommentsForCommit === false) {
            $this->repos👷ListCommentsForCommit = new Operator\Repos\ListCommentsForCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommit;
    }

    public function repos👷ListCommentsForCommitListing(): Operator\Repos\ListCommentsForCommitListing
    {
        if ($this->repos👷ListCommentsForCommitListing instanceof Operator\Repos\ListCommentsForCommitListing === false) {
            $this->repos👷ListCommentsForCommitListing = new Operator\Repos\ListCommentsForCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷ListCommentsForCommitListing;
    }

    public function repos👷CreateCommitComment(): Operator\Repos\CreateCommitComment
    {
        if ($this->repos👷CreateCommitComment instanceof Operator\Repos\CreateCommitComment === false) {
            $this->repos👷CreateCommitComment = new Operator\Repos\CreateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments());
        }

        return $this->repos👷CreateCommitComment;
    }

    public function repos👷ListPullRequestsAssociatedWithCommit(): Operator\Repos\ListPullRequestsAssociatedWithCommit
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommit instanceof Operator\Repos\ListPullRequestsAssociatedWithCommit === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommit = new Operator\Repos\ListPullRequestsAssociatedWithCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommit;
    }

    public function repos👷ListPullRequestsAssociatedWithCommitListing(): Operator\Repos\ListPullRequestsAssociatedWithCommitListing
    {
        if ($this->repos👷ListPullRequestsAssociatedWithCommitListing instanceof Operator\Repos\ListPullRequestsAssociatedWithCommitListing === false) {
            $this->repos👷ListPullRequestsAssociatedWithCommitListing = new Operator\Repos\ListPullRequestsAssociatedWithCommitListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls());
        }

        return $this->repos👷ListPullRequestsAssociatedWithCommitListing;
    }

    public function repos👷GetCommit(): Operator\Repos\GetCommit
    {
        if ($this->repos👷GetCommit instanceof Operator\Repos\GetCommit === false) {
            $this->repos👷GetCommit = new Operator\Repos\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref());
        }

        return $this->repos👷GetCommit;
    }

    public function checks👷ListForRef(): Operator\Checks\ListForRef
    {
        if ($this->checks👷ListForRef instanceof Operator\Checks\ListForRef === false) {
            $this->checks👷ListForRef = new Operator\Checks\ListForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns());
        }

        return $this->checks👷ListForRef;
    }

    public function checks👷ListSuitesForRef(): Operator\Checks\ListSuitesForRef
    {
        if ($this->checks👷ListSuitesForRef instanceof Operator\Checks\ListSuitesForRef === false) {
            $this->checks👷ListSuitesForRef = new Operator\Checks\ListSuitesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites());
        }

        return $this->checks👷ListSuitesForRef;
    }

    public function repos👷GetCombinedStatusForRef(): Operator\Repos\GetCombinedStatusForRef
    {
        if ($this->repos👷GetCombinedStatusForRef instanceof Operator\Repos\GetCombinedStatusForRef === false) {
            $this->repos👷GetCombinedStatusForRef = new Operator\Repos\GetCombinedStatusForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status());
        }

        return $this->repos👷GetCombinedStatusForRef;
    }

    public function repos👷ListCommitStatusesForRef(): Operator\Repos\ListCommitStatusesForRef
    {
        if ($this->repos👷ListCommitStatusesForRef instanceof Operator\Repos\ListCommitStatusesForRef === false) {
            $this->repos👷ListCommitStatusesForRef = new Operator\Repos\ListCommitStatusesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRef;
    }

    public function repos👷ListCommitStatusesForRefListing(): Operator\Repos\ListCommitStatusesForRefListing
    {
        if ($this->repos👷ListCommitStatusesForRefListing instanceof Operator\Repos\ListCommitStatusesForRefListing === false) {
            $this->repos👷ListCommitStatusesForRefListing = new Operator\Repos\ListCommitStatusesForRefListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses());
        }

        return $this->repos👷ListCommitStatusesForRefListing;
    }

    public function repos👷GetCommunityProfileMetrics(): Operator\Repos\GetCommunityProfileMetrics
    {
        if ($this->repos👷GetCommunityProfileMetrics instanceof Operator\Repos\GetCommunityProfileMetrics === false) {
            $this->repos👷GetCommunityProfileMetrics = new Operator\Repos\GetCommunityProfileMetrics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile());
        }

        return $this->repos👷GetCommunityProfileMetrics;
    }

    public function repos👷CompareCommits(): Operator\Repos\CompareCommits
    {
        if ($this->repos👷CompareCommits instanceof Operator\Repos\CompareCommits === false) {
            $this->repos👷CompareCommits = new Operator\Repos\CompareCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead());
        }

        return $this->repos👷CompareCommits;
    }

    public function repos👷GetContent(): Operator\Repos\GetContent
    {
        if ($this->repos👷GetContent instanceof Operator\Repos\GetContent === false) {
            $this->repos👷GetContent = new Operator\Repos\GetContent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷GetContent;
    }

    public function repos👷CreateOrUpdateFileContents(): Operator\Repos\CreateOrUpdateFileContents
    {
        if ($this->repos👷CreateOrUpdateFileContents instanceof Operator\Repos\CreateOrUpdateFileContents === false) {
            $this->repos👷CreateOrUpdateFileContents = new Operator\Repos\CreateOrUpdateFileContents($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷CreateOrUpdateFileContents;
    }

    public function repos👷DeleteFile(): Operator\Repos\DeleteFile
    {
        if ($this->repos👷DeleteFile instanceof Operator\Repos\DeleteFile === false) {
            $this->repos👷DeleteFile = new Operator\Repos\DeleteFile($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path());
        }

        return $this->repos👷DeleteFile;
    }

    public function repos👷ListContributors(): Operator\Repos\ListContributors
    {
        if ($this->repos👷ListContributors instanceof Operator\Repos\ListContributors === false) {
            $this->repos👷ListContributors = new Operator\Repos\ListContributors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributors;
    }

    public function repos👷ListContributorsListing(): Operator\Repos\ListContributorsListing
    {
        if ($this->repos👷ListContributorsListing instanceof Operator\Repos\ListContributorsListing === false) {
            $this->repos👷ListContributorsListing = new Operator\Repos\ListContributorsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors());
        }

        return $this->repos👷ListContributorsListing;
    }

    public function dependabot👷ListAlertsForRepo(): Operator\Dependabot\ListAlertsForRepo
    {
        if ($this->dependabot👷ListAlertsForRepo instanceof Operator\Dependabot\ListAlertsForRepo === false) {
            $this->dependabot👷ListAlertsForRepo = new Operator\Dependabot\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForRepo;
    }

    public function dependabot👷ListAlertsForRepoListing(): Operator\Dependabot\ListAlertsForRepoListing
    {
        if ($this->dependabot👷ListAlertsForRepoListing instanceof Operator\Dependabot\ListAlertsForRepoListing === false) {
            $this->dependabot👷ListAlertsForRepoListing = new Operator\Dependabot\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts());
        }

        return $this->dependabot👷ListAlertsForRepoListing;
    }

    public function dependabot👷GetAlert(): Operator\Dependabot\GetAlert
    {
        if ($this->dependabot👷GetAlert instanceof Operator\Dependabot\GetAlert === false) {
            $this->dependabot👷GetAlert = new Operator\Dependabot\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->dependabot👷GetAlert;
    }

    public function dependabot👷UpdateAlert(): Operator\Dependabot\UpdateAlert
    {
        if ($this->dependabot👷UpdateAlert instanceof Operator\Dependabot\UpdateAlert === false) {
            $this->dependabot👷UpdateAlert = new Operator\Dependabot\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber());
        }

        return $this->dependabot👷UpdateAlert;
    }

    public function dependabot👷ListRepoSecrets(): Operator\Dependabot\ListRepoSecrets
    {
        if ($this->dependabot👷ListRepoSecrets instanceof Operator\Dependabot\ListRepoSecrets === false) {
            $this->dependabot👷ListRepoSecrets = new Operator\Dependabot\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets());
        }

        return $this->dependabot👷ListRepoSecrets;
    }

    public function dependabot👷GetRepoPublicKey(): Operator\Dependabot\GetRepoPublicKey
    {
        if ($this->dependabot👷GetRepoPublicKey instanceof Operator\Dependabot\GetRepoPublicKey === false) {
            $this->dependabot👷GetRepoPublicKey = new Operator\Dependabot\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey());
        }

        return $this->dependabot👷GetRepoPublicKey;
    }

    public function dependabot👷GetRepoSecret(): Operator\Dependabot\GetRepoSecret
    {
        if ($this->dependabot👷GetRepoSecret instanceof Operator\Dependabot\GetRepoSecret === false) {
            $this->dependabot👷GetRepoSecret = new Operator\Dependabot\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷GetRepoSecret;
    }

    public function dependabot👷CreateOrUpdateRepoSecret(): Operator\Dependabot\CreateOrUpdateRepoSecret
    {
        if ($this->dependabot👷CreateOrUpdateRepoSecret instanceof Operator\Dependabot\CreateOrUpdateRepoSecret === false) {
            $this->dependabot👷CreateOrUpdateRepoSecret = new Operator\Dependabot\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName());
        }

        return $this->dependabot👷CreateOrUpdateRepoSecret;
    }

    public function dependabot👷DeleteRepoSecret(): Operator\Dependabot\DeleteRepoSecret
    {
        if ($this->dependabot👷DeleteRepoSecret instanceof Operator\Dependabot\DeleteRepoSecret === false) {
            $this->dependabot👷DeleteRepoSecret = new Operator\Dependabot\DeleteRepoSecret($this->browser, $this->authentication);
        }

        return $this->dependabot👷DeleteRepoSecret;
    }

    public function dependencyGraph👷DiffRange(): Operator\DependencyGraph\DiffRange
    {
        if ($this->dependencyGraph👷DiffRange instanceof Operator\DependencyGraph\DiffRange === false) {
            $this->dependencyGraph👷DiffRange = new Operator\DependencyGraph\DiffRange($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead());
        }

        return $this->dependencyGraph👷DiffRange;
    }

    public function dependencyGraph👷ExportSbom(): Operator\DependencyGraph\ExportSbom
    {
        if ($this->dependencyGraph👷ExportSbom instanceof Operator\DependencyGraph\ExportSbom === false) {
            $this->dependencyGraph👷ExportSbom = new Operator\DependencyGraph\ExportSbom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom());
        }

        return $this->dependencyGraph👷ExportSbom;
    }

    public function dependencyGraph👷CreateRepositorySnapshot(): Operator\DependencyGraph\CreateRepositorySnapshot
    {
        if ($this->dependencyGraph👷CreateRepositorySnapshot instanceof Operator\DependencyGraph\CreateRepositorySnapshot === false) {
            $this->dependencyGraph👷CreateRepositorySnapshot = new Operator\DependencyGraph\CreateRepositorySnapshot($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots());
        }

        return $this->dependencyGraph👷CreateRepositorySnapshot;
    }

    public function repos👷ListDeployments(): Operator\Repos\ListDeployments
    {
        if ($this->repos👷ListDeployments instanceof Operator\Repos\ListDeployments === false) {
            $this->repos👷ListDeployments = new Operator\Repos\ListDeployments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeployments;
    }

    public function repos👷ListDeploymentsListing(): Operator\Repos\ListDeploymentsListing
    {
        if ($this->repos👷ListDeploymentsListing instanceof Operator\Repos\ListDeploymentsListing === false) {
            $this->repos👷ListDeploymentsListing = new Operator\Repos\ListDeploymentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷ListDeploymentsListing;
    }

    public function repos👷CreateDeployment(): Operator\Repos\CreateDeployment
    {
        if ($this->repos👷CreateDeployment instanceof Operator\Repos\CreateDeployment === false) {
            $this->repos👷CreateDeployment = new Operator\Repos\CreateDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments());
        }

        return $this->repos👷CreateDeployment;
    }

    public function repos👷GetDeployment(): Operator\Repos\GetDeployment
    {
        if ($this->repos👷GetDeployment instanceof Operator\Repos\GetDeployment === false) {
            $this->repos👷GetDeployment = new Operator\Repos\GetDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷GetDeployment;
    }

    public function repos👷DeleteDeployment(): Operator\Repos\DeleteDeployment
    {
        if ($this->repos👷DeleteDeployment instanceof Operator\Repos\DeleteDeployment === false) {
            $this->repos👷DeleteDeployment = new Operator\Repos\DeleteDeployment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId());
        }

        return $this->repos👷DeleteDeployment;
    }

    public function repos👷ListDeploymentStatuses(): Operator\Repos\ListDeploymentStatuses
    {
        if ($this->repos👷ListDeploymentStatuses instanceof Operator\Repos\ListDeploymentStatuses === false) {
            $this->repos👷ListDeploymentStatuses = new Operator\Repos\ListDeploymentStatuses($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatuses;
    }

    public function repos👷ListDeploymentStatusesListing(): Operator\Repos\ListDeploymentStatusesListing
    {
        if ($this->repos👷ListDeploymentStatusesListing instanceof Operator\Repos\ListDeploymentStatusesListing === false) {
            $this->repos👷ListDeploymentStatusesListing = new Operator\Repos\ListDeploymentStatusesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷ListDeploymentStatusesListing;
    }

    public function repos👷CreateDeploymentStatus(): Operator\Repos\CreateDeploymentStatus
    {
        if ($this->repos👷CreateDeploymentStatus instanceof Operator\Repos\CreateDeploymentStatus === false) {
            $this->repos👷CreateDeploymentStatus = new Operator\Repos\CreateDeploymentStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses());
        }

        return $this->repos👷CreateDeploymentStatus;
    }

    public function repos👷GetDeploymentStatus(): Operator\Repos\GetDeploymentStatus
    {
        if ($this->repos👷GetDeploymentStatus instanceof Operator\Repos\GetDeploymentStatus === false) {
            $this->repos👷GetDeploymentStatus = new Operator\Repos\GetDeploymentStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId());
        }

        return $this->repos👷GetDeploymentStatus;
    }

    public function repos👷CreateDispatchEvent(): Operator\Repos\CreateDispatchEvent
    {
        if ($this->repos👷CreateDispatchEvent instanceof Operator\Repos\CreateDispatchEvent === false) {
            $this->repos👷CreateDispatchEvent = new Operator\Repos\CreateDispatchEvent($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches());
        }

        return $this->repos👷CreateDispatchEvent;
    }

    public function repos👷GetAllEnvironments(): Operator\Repos\GetAllEnvironments
    {
        if ($this->repos👷GetAllEnvironments instanceof Operator\Repos\GetAllEnvironments === false) {
            $this->repos👷GetAllEnvironments = new Operator\Repos\GetAllEnvironments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments());
        }

        return $this->repos👷GetAllEnvironments;
    }

    public function repos👷GetEnvironment(): Operator\Repos\GetEnvironment
    {
        if ($this->repos👷GetEnvironment instanceof Operator\Repos\GetEnvironment === false) {
            $this->repos👷GetEnvironment = new Operator\Repos\GetEnvironment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷GetEnvironment;
    }

    public function repos👷CreateOrUpdateEnvironment(): Operator\Repos\CreateOrUpdateEnvironment
    {
        if ($this->repos👷CreateOrUpdateEnvironment instanceof Operator\Repos\CreateOrUpdateEnvironment === false) {
            $this->repos👷CreateOrUpdateEnvironment = new Operator\Repos\CreateOrUpdateEnvironment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName());
        }

        return $this->repos👷CreateOrUpdateEnvironment;
    }

    public function repos👷DeleteAnEnvironment(): Operator\Repos\DeleteAnEnvironment
    {
        if ($this->repos👷DeleteAnEnvironment instanceof Operator\Repos\DeleteAnEnvironment === false) {
            $this->repos👷DeleteAnEnvironment = new Operator\Repos\DeleteAnEnvironment($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteAnEnvironment;
    }

    public function repos👷ListDeploymentBranchPolicies(): Operator\Repos\ListDeploymentBranchPolicies
    {
        if ($this->repos👷ListDeploymentBranchPolicies instanceof Operator\Repos\ListDeploymentBranchPolicies === false) {
            $this->repos👷ListDeploymentBranchPolicies = new Operator\Repos\ListDeploymentBranchPolicies($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷ListDeploymentBranchPolicies;
    }

    public function repos👷CreateDeploymentBranchPolicy(): Operator\Repos\CreateDeploymentBranchPolicy
    {
        if ($this->repos👷CreateDeploymentBranchPolicy instanceof Operator\Repos\CreateDeploymentBranchPolicy === false) {
            $this->repos👷CreateDeploymentBranchPolicy = new Operator\Repos\CreateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies());
        }

        return $this->repos👷CreateDeploymentBranchPolicy;
    }

    public function repos👷GetDeploymentBranchPolicy(): Operator\Repos\GetDeploymentBranchPolicy
    {
        if ($this->repos👷GetDeploymentBranchPolicy instanceof Operator\Repos\GetDeploymentBranchPolicy === false) {
            $this->repos👷GetDeploymentBranchPolicy = new Operator\Repos\GetDeploymentBranchPolicy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷GetDeploymentBranchPolicy;
    }

    public function repos👷UpdateDeploymentBranchPolicy(): Operator\Repos\UpdateDeploymentBranchPolicy
    {
        if ($this->repos👷UpdateDeploymentBranchPolicy instanceof Operator\Repos\UpdateDeploymentBranchPolicy === false) {
            $this->repos👷UpdateDeploymentBranchPolicy = new Operator\Repos\UpdateDeploymentBranchPolicy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId());
        }

        return $this->repos👷UpdateDeploymentBranchPolicy;
    }

    public function repos👷DeleteDeploymentBranchPolicy(): Operator\Repos\DeleteDeploymentBranchPolicy
    {
        if ($this->repos👷DeleteDeploymentBranchPolicy instanceof Operator\Repos\DeleteDeploymentBranchPolicy === false) {
            $this->repos👷DeleteDeploymentBranchPolicy = new Operator\Repos\DeleteDeploymentBranchPolicy($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeploymentBranchPolicy;
    }

    public function repos👷GetAllDeploymentProtectionRules(): Operator\Repos\GetAllDeploymentProtectionRules
    {
        if ($this->repos👷GetAllDeploymentProtectionRules instanceof Operator\Repos\GetAllDeploymentProtectionRules === false) {
            $this->repos👷GetAllDeploymentProtectionRules = new Operator\Repos\GetAllDeploymentProtectionRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->repos👷GetAllDeploymentProtectionRules;
    }

    public function repos👷CreateDeploymentProtectionRule(): Operator\Repos\CreateDeploymentProtectionRule
    {
        if ($this->repos👷CreateDeploymentProtectionRule instanceof Operator\Repos\CreateDeploymentProtectionRule === false) {
            $this->repos👷CreateDeploymentProtectionRule = new Operator\Repos\CreateDeploymentProtectionRule($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules());
        }

        return $this->repos👷CreateDeploymentProtectionRule;
    }

    public function repos👷ListCustomDeploymentRuleIntegrations(): Operator\Repos\ListCustomDeploymentRuleIntegrations
    {
        if ($this->repos👷ListCustomDeploymentRuleIntegrations instanceof Operator\Repos\ListCustomDeploymentRuleIntegrations === false) {
            $this->repos👷ListCustomDeploymentRuleIntegrations = new Operator\Repos\ListCustomDeploymentRuleIntegrations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps());
        }

        return $this->repos👷ListCustomDeploymentRuleIntegrations;
    }

    public function repos👷GetCustomDeploymentProtectionRule(): Operator\Repos\GetCustomDeploymentProtectionRule
    {
        if ($this->repos👷GetCustomDeploymentProtectionRule instanceof Operator\Repos\GetCustomDeploymentProtectionRule === false) {
            $this->repos👷GetCustomDeploymentProtectionRule = new Operator\Repos\GetCustomDeploymentProtectionRule($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId());
        }

        return $this->repos👷GetCustomDeploymentProtectionRule;
    }

    public function repos👷DisableDeploymentProtectionRule(): Operator\Repos\DisableDeploymentProtectionRule
    {
        if ($this->repos👷DisableDeploymentProtectionRule instanceof Operator\Repos\DisableDeploymentProtectionRule === false) {
            $this->repos👷DisableDeploymentProtectionRule = new Operator\Repos\DisableDeploymentProtectionRule($this->browser, $this->authentication);
        }

        return $this->repos👷DisableDeploymentProtectionRule;
    }

    public function activity👷ListRepoEvents(): Operator\Activity\ListRepoEvents
    {
        if ($this->activity👷ListRepoEvents instanceof Operator\Activity\ListRepoEvents === false) {
            $this->activity👷ListRepoEvents = new Operator\Activity\ListRepoEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEvents;
    }

    public function activity👷ListRepoEventsListing(): Operator\Activity\ListRepoEventsListing
    {
        if ($this->activity👷ListRepoEventsListing instanceof Operator\Activity\ListRepoEventsListing === false) {
            $this->activity👷ListRepoEventsListing = new Operator\Activity\ListRepoEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events());
        }

        return $this->activity👷ListRepoEventsListing;
    }

    public function repos👷ListForks(): Operator\Repos\ListForks
    {
        if ($this->repos👷ListForks instanceof Operator\Repos\ListForks === false) {
            $this->repos👷ListForks = new Operator\Repos\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForks;
    }

    public function repos👷ListForksListing(): Operator\Repos\ListForksListing
    {
        if ($this->repos👷ListForksListing instanceof Operator\Repos\ListForksListing === false) {
            $this->repos👷ListForksListing = new Operator\Repos\ListForksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷ListForksListing;
    }

    public function repos👷CreateFork(): Operator\Repos\CreateFork
    {
        if ($this->repos👷CreateFork instanceof Operator\Repos\CreateFork === false) {
            $this->repos👷CreateFork = new Operator\Repos\CreateFork($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks());
        }

        return $this->repos👷CreateFork;
    }

    public function git👷CreateBlob(): Operator\Git\CreateBlob
    {
        if ($this->git👷CreateBlob instanceof Operator\Git\CreateBlob === false) {
            $this->git👷CreateBlob = new Operator\Git\CreateBlob($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs());
        }

        return $this->git👷CreateBlob;
    }

    public function git👷GetBlob(): Operator\Git\GetBlob
    {
        if ($this->git👷GetBlob instanceof Operator\Git\GetBlob === false) {
            $this->git👷GetBlob = new Operator\Git\GetBlob($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha());
        }

        return $this->git👷GetBlob;
    }

    public function git👷CreateCommit(): Operator\Git\CreateCommit
    {
        if ($this->git👷CreateCommit instanceof Operator\Git\CreateCommit === false) {
            $this->git👷CreateCommit = new Operator\Git\CreateCommit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits());
        }

        return $this->git👷CreateCommit;
    }

    public function git👷GetCommit(): Operator\Git\GetCommit
    {
        if ($this->git👷GetCommit instanceof Operator\Git\GetCommit === false) {
            $this->git👷GetCommit = new Operator\Git\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha());
        }

        return $this->git👷GetCommit;
    }

    public function git👷ListMatchingRefs(): Operator\Git\ListMatchingRefs
    {
        if ($this->git👷ListMatchingRefs instanceof Operator\Git\ListMatchingRefs === false) {
            $this->git👷ListMatchingRefs = new Operator\Git\ListMatchingRefs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref());
        }

        return $this->git👷ListMatchingRefs;
    }

    public function git👷GetRef(): Operator\Git\GetRef
    {
        if ($this->git👷GetRef instanceof Operator\Git\GetRef === false) {
            $this->git👷GetRef = new Operator\Git\GetRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref());
        }

        return $this->git👷GetRef;
    }

    public function git👷CreateRef(): Operator\Git\CreateRef
    {
        if ($this->git👷CreateRef instanceof Operator\Git\CreateRef === false) {
            $this->git👷CreateRef = new Operator\Git\CreateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs());
        }

        return $this->git👷CreateRef;
    }

    public function git👷DeleteRef(): Operator\Git\DeleteRef
    {
        if ($this->git👷DeleteRef instanceof Operator\Git\DeleteRef === false) {
            $this->git👷DeleteRef = new Operator\Git\DeleteRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷DeleteRef;
    }

    public function git👷UpdateRef(): Operator\Git\UpdateRef
    {
        if ($this->git👷UpdateRef instanceof Operator\Git\UpdateRef === false) {
            $this->git👷UpdateRef = new Operator\Git\UpdateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->git👷UpdateRef;
    }

    public function git👷CreateTag(): Operator\Git\CreateTag
    {
        if ($this->git👷CreateTag instanceof Operator\Git\CreateTag === false) {
            $this->git👷CreateTag = new Operator\Git\CreateTag($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags());
        }

        return $this->git👷CreateTag;
    }

    public function git👷GetTag(): Operator\Git\GetTag
    {
        if ($this->git👷GetTag instanceof Operator\Git\GetTag === false) {
            $this->git👷GetTag = new Operator\Git\GetTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha());
        }

        return $this->git👷GetTag;
    }

    public function git👷CreateTree(): Operator\Git\CreateTree
    {
        if ($this->git👷CreateTree instanceof Operator\Git\CreateTree === false) {
            $this->git👷CreateTree = new Operator\Git\CreateTree($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees());
        }

        return $this->git👷CreateTree;
    }

    public function git👷GetTree(): Operator\Git\GetTree
    {
        if ($this->git👷GetTree instanceof Operator\Git\GetTree === false) {
            $this->git👷GetTree = new Operator\Git\GetTree($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha());
        }

        return $this->git👷GetTree;
    }

    public function repos👷ListWebhooks(): Operator\Repos\ListWebhooks
    {
        if ($this->repos👷ListWebhooks instanceof Operator\Repos\ListWebhooks === false) {
            $this->repos👷ListWebhooks = new Operator\Repos\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooks;
    }

    public function repos👷ListWebhooksListing(): Operator\Repos\ListWebhooksListing
    {
        if ($this->repos👷ListWebhooksListing instanceof Operator\Repos\ListWebhooksListing === false) {
            $this->repos👷ListWebhooksListing = new Operator\Repos\ListWebhooksListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷ListWebhooksListing;
    }

    public function repos👷CreateWebhook(): Operator\Repos\CreateWebhook
    {
        if ($this->repos👷CreateWebhook instanceof Operator\Repos\CreateWebhook === false) {
            $this->repos👷CreateWebhook = new Operator\Repos\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks());
        }

        return $this->repos👷CreateWebhook;
    }

    public function repos👷GetWebhook(): Operator\Repos\GetWebhook
    {
        if ($this->repos👷GetWebhook instanceof Operator\Repos\GetWebhook === false) {
            $this->repos👷GetWebhook = new Operator\Repos\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷GetWebhook;
    }

    public function repos👷DeleteWebhook(): Operator\Repos\DeleteWebhook
    {
        if ($this->repos👷DeleteWebhook instanceof Operator\Repos\DeleteWebhook === false) {
            $this->repos👷DeleteWebhook = new Operator\Repos\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷DeleteWebhook;
    }

    public function repos👷UpdateWebhook(): Operator\Repos\UpdateWebhook
    {
        if ($this->repos👷UpdateWebhook instanceof Operator\Repos\UpdateWebhook === false) {
            $this->repos👷UpdateWebhook = new Operator\Repos\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId());
        }

        return $this->repos👷UpdateWebhook;
    }

    public function repos👷GetWebhookConfigForRepo(): Operator\Repos\GetWebhookConfigForRepo
    {
        if ($this->repos👷GetWebhookConfigForRepo instanceof Operator\Repos\GetWebhookConfigForRepo === false) {
            $this->repos👷GetWebhookConfigForRepo = new Operator\Repos\GetWebhookConfigForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷GetWebhookConfigForRepo;
    }

    public function repos👷UpdateWebhookConfigForRepo(): Operator\Repos\UpdateWebhookConfigForRepo
    {
        if ($this->repos👷UpdateWebhookConfigForRepo instanceof Operator\Repos\UpdateWebhookConfigForRepo === false) {
            $this->repos👷UpdateWebhookConfigForRepo = new Operator\Repos\UpdateWebhookConfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config());
        }

        return $this->repos👷UpdateWebhookConfigForRepo;
    }

    public function repos👷ListWebhookDeliveries(): Operator\Repos\ListWebhookDeliveries
    {
        if ($this->repos👷ListWebhookDeliveries instanceof Operator\Repos\ListWebhookDeliveries === false) {
            $this->repos👷ListWebhookDeliveries = new Operator\Repos\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->repos👷ListWebhookDeliveries;
    }

    public function repos👷GetWebhookDelivery(): Operator\Repos\GetWebhookDelivery
    {
        if ($this->repos👷GetWebhookDelivery instanceof Operator\Repos\GetWebhookDelivery === false) {
            $this->repos👷GetWebhookDelivery = new Operator\Repos\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->repos👷GetWebhookDelivery;
    }

    public function repos👷RedeliverWebhookDelivery(): Operator\Repos\RedeliverWebhookDelivery
    {
        if ($this->repos👷RedeliverWebhookDelivery instanceof Operator\Repos\RedeliverWebhookDelivery === false) {
            $this->repos👷RedeliverWebhookDelivery = new Operator\Repos\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->repos👷RedeliverWebhookDelivery;
    }

    public function repos👷PingWebhook(): Operator\Repos\PingWebhook
    {
        if ($this->repos👷PingWebhook instanceof Operator\Repos\PingWebhook === false) {
            $this->repos👷PingWebhook = new Operator\Repos\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings());
        }

        return $this->repos👷PingWebhook;
    }

    public function repos👷TestPushWebhook(): Operator\Repos\TestPushWebhook
    {
        if ($this->repos👷TestPushWebhook instanceof Operator\Repos\TestPushWebhook === false) {
            $this->repos👷TestPushWebhook = new Operator\Repos\TestPushWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests());
        }

        return $this->repos👷TestPushWebhook;
    }

    public function migrations👷GetImportStatus(): Operator\Migrations\GetImportStatus
    {
        if ($this->migrations👷GetImportStatus instanceof Operator\Migrations\GetImportStatus === false) {
            $this->migrations👷GetImportStatus = new Operator\Migrations\GetImportStatus($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷GetImportStatus;
    }

    public function migrations👷StartImport(): Operator\Migrations\StartImport
    {
        if ($this->migrations👷StartImport instanceof Operator\Migrations\StartImport === false) {
            $this->migrations👷StartImport = new Operator\Migrations\StartImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷StartImport;
    }

    public function migrations👷CancelImport(): Operator\Migrations\CancelImport
    {
        if ($this->migrations👷CancelImport instanceof Operator\Migrations\CancelImport === false) {
            $this->migrations👷CancelImport = new Operator\Migrations\CancelImport($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷CancelImport;
    }

    public function migrations👷UpdateImport(): Operator\Migrations\UpdateImport
    {
        if ($this->migrations👷UpdateImport instanceof Operator\Migrations\UpdateImport === false) {
            $this->migrations👷UpdateImport = new Operator\Migrations\UpdateImport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import());
        }

        return $this->migrations👷UpdateImport;
    }

    public function migrations👷GetCommitAuthors(): Operator\Migrations\GetCommitAuthors
    {
        if ($this->migrations👷GetCommitAuthors instanceof Operator\Migrations\GetCommitAuthors === false) {
            $this->migrations👷GetCommitAuthors = new Operator\Migrations\GetCommitAuthors($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors());
        }

        return $this->migrations👷GetCommitAuthors;
    }

    public function migrations👷MapCommitAuthor(): Operator\Migrations\MapCommitAuthor
    {
        if ($this->migrations👷MapCommitAuthor instanceof Operator\Migrations\MapCommitAuthor === false) {
            $this->migrations👷MapCommitAuthor = new Operator\Migrations\MapCommitAuthor($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId());
        }

        return $this->migrations👷MapCommitAuthor;
    }

    public function migrations👷GetLargeFiles(): Operator\Migrations\GetLargeFiles
    {
        if ($this->migrations👷GetLargeFiles instanceof Operator\Migrations\GetLargeFiles === false) {
            $this->migrations👷GetLargeFiles = new Operator\Migrations\GetLargeFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles());
        }

        return $this->migrations👷GetLargeFiles;
    }

    public function migrations👷SetLfsPreference(): Operator\Migrations\SetLfsPreference
    {
        if ($this->migrations👷SetLfsPreference instanceof Operator\Migrations\SetLfsPreference === false) {
            $this->migrations👷SetLfsPreference = new Operator\Migrations\SetLfsPreference($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs());
        }

        return $this->migrations👷SetLfsPreference;
    }

    public function apps👷GetRepoInstallation(): Operator\Apps\GetRepoInstallation
    {
        if ($this->apps👷GetRepoInstallation instanceof Operator\Apps\GetRepoInstallation === false) {
            $this->apps👷GetRepoInstallation = new Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());
        }

        return $this->apps👷GetRepoInstallation;
    }

    public function interactions👷GetRestrictionsForRepo(): Operator\Interactions\GetRestrictionsForRepo
    {
        if ($this->interactions👷GetRestrictionsForRepo instanceof Operator\Interactions\GetRestrictionsForRepo === false) {
            $this->interactions👷GetRestrictionsForRepo = new Operator\Interactions\GetRestrictionsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForRepo;
    }

    public function interactions👷SetRestrictionsForRepo(): Operator\Interactions\SetRestrictionsForRepo
    {
        if ($this->interactions👷SetRestrictionsForRepo instanceof Operator\Interactions\SetRestrictionsForRepo === false) {
            $this->interactions👷SetRestrictionsForRepo = new Operator\Interactions\SetRestrictionsForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForRepo;
    }

    public function interactions👷RemoveRestrictionsForRepo(): Operator\Interactions\RemoveRestrictionsForRepo
    {
        if ($this->interactions👷RemoveRestrictionsForRepo instanceof Operator\Interactions\RemoveRestrictionsForRepo === false) {
            $this->interactions👷RemoveRestrictionsForRepo = new Operator\Interactions\RemoveRestrictionsForRepo($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForRepo;
    }

    public function repos👷ListInvitations(): Operator\Repos\ListInvitations
    {
        if ($this->repos👷ListInvitations instanceof Operator\Repos\ListInvitations === false) {
            $this->repos👷ListInvitations = new Operator\Repos\ListInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitations;
    }

    public function repos👷ListInvitationsListing(): Operator\Repos\ListInvitationsListing
    {
        if ($this->repos👷ListInvitationsListing instanceof Operator\Repos\ListInvitationsListing === false) {
            $this->repos👷ListInvitationsListing = new Operator\Repos\ListInvitationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations());
        }

        return $this->repos👷ListInvitationsListing;
    }

    public function repos👷DeleteInvitation(): Operator\Repos\DeleteInvitation
    {
        if ($this->repos👷DeleteInvitation instanceof Operator\Repos\DeleteInvitation === false) {
            $this->repos👷DeleteInvitation = new Operator\Repos\DeleteInvitation($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteInvitation;
    }

    public function repos👷UpdateInvitation(): Operator\Repos\UpdateInvitation
    {
        if ($this->repos👷UpdateInvitation instanceof Operator\Repos\UpdateInvitation === false) {
            $this->repos👷UpdateInvitation = new Operator\Repos\UpdateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId());
        }

        return $this->repos👷UpdateInvitation;
    }

    public function issues👷ListForRepo(): Operator\Issues\ListForRepo
    {
        if ($this->issues👷ListForRepo instanceof Operator\Issues\ListForRepo === false) {
            $this->issues👷ListForRepo = new Operator\Issues\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepo;
    }

    public function issues👷ListForRepoListing(): Operator\Issues\ListForRepoListing
    {
        if ($this->issues👷ListForRepoListing instanceof Operator\Issues\ListForRepoListing === false) {
            $this->issues👷ListForRepoListing = new Operator\Issues\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷ListForRepoListing;
    }

    public function issues👷Create(): Operator\Issues\Create
    {
        if ($this->issues👷Create instanceof Operator\Issues\Create === false) {
            $this->issues👷Create = new Operator\Issues\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues());
        }

        return $this->issues👷Create;
    }

    public function issues👷ListCommentsForRepo(): Operator\Issues\ListCommentsForRepo
    {
        if ($this->issues👷ListCommentsForRepo instanceof Operator\Issues\ListCommentsForRepo === false) {
            $this->issues👷ListCommentsForRepo = new Operator\Issues\ListCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepo;
    }

    public function issues👷ListCommentsForRepoListing(): Operator\Issues\ListCommentsForRepoListing
    {
        if ($this->issues👷ListCommentsForRepoListing instanceof Operator\Issues\ListCommentsForRepoListing === false) {
            $this->issues👷ListCommentsForRepoListing = new Operator\Issues\ListCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments());
        }

        return $this->issues👷ListCommentsForRepoListing;
    }

    public function issues👷GetComment(): Operator\Issues\GetComment
    {
        if ($this->issues👷GetComment instanceof Operator\Issues\GetComment === false) {
            $this->issues👷GetComment = new Operator\Issues\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷GetComment;
    }

    public function issues👷DeleteComment(): Operator\Issues\DeleteComment
    {
        if ($this->issues👷DeleteComment instanceof Operator\Issues\DeleteComment === false) {
            $this->issues👷DeleteComment = new Operator\Issues\DeleteComment($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteComment;
    }

    public function issues👷UpdateComment(): Operator\Issues\UpdateComment
    {
        if ($this->issues👷UpdateComment instanceof Operator\Issues\UpdateComment === false) {
            $this->issues👷UpdateComment = new Operator\Issues\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId());
        }

        return $this->issues👷UpdateComment;
    }

    public function reactions👷ListForIssueComment(): Operator\Reactions\ListForIssueComment
    {
        if ($this->reactions👷ListForIssueComment instanceof Operator\Reactions\ListForIssueComment === false) {
            $this->reactions👷ListForIssueComment = new Operator\Reactions\ListForIssueComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueComment;
    }

    public function reactions👷ListForIssueCommentListing(): Operator\Reactions\ListForIssueCommentListing
    {
        if ($this->reactions👷ListForIssueCommentListing instanceof Operator\Reactions\ListForIssueCommentListing === false) {
            $this->reactions👷ListForIssueCommentListing = new Operator\Reactions\ListForIssueCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForIssueCommentListing;
    }

    public function reactions👷CreateForIssueComment(): Operator\Reactions\CreateForIssueComment
    {
        if ($this->reactions👷CreateForIssueComment instanceof Operator\Reactions\CreateForIssueComment === false) {
            $this->reactions👷CreateForIssueComment = new Operator\Reactions\CreateForIssueComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForIssueComment;
    }

    public function reactions👷DeleteForIssueComment(): Operator\Reactions\DeleteForIssueComment
    {
        if ($this->reactions👷DeleteForIssueComment instanceof Operator\Reactions\DeleteForIssueComment === false) {
            $this->reactions👷DeleteForIssueComment = new Operator\Reactions\DeleteForIssueComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssueComment;
    }

    public function issues👷ListEventsForRepo(): Operator\Issues\ListEventsForRepo
    {
        if ($this->issues👷ListEventsForRepo instanceof Operator\Issues\ListEventsForRepo === false) {
            $this->issues👷ListEventsForRepo = new Operator\Issues\ListEventsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepo;
    }

    public function issues👷ListEventsForRepoListing(): Operator\Issues\ListEventsForRepoListing
    {
        if ($this->issues👷ListEventsForRepoListing instanceof Operator\Issues\ListEventsForRepoListing === false) {
            $this->issues👷ListEventsForRepoListing = new Operator\Issues\ListEventsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events());
        }

        return $this->issues👷ListEventsForRepoListing;
    }

    public function issues👷GetEvent(): Operator\Issues\GetEvent
    {
        if ($this->issues👷GetEvent instanceof Operator\Issues\GetEvent === false) {
            $this->issues👷GetEvent = new Operator\Issues\GetEvent($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId());
        }

        return $this->issues👷GetEvent;
    }

    public function issues👷Get(): Operator\Issues\Get
    {
        if ($this->issues👷Get instanceof Operator\Issues\Get === false) {
            $this->issues👷Get = new Operator\Issues\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Get;
    }

    public function issues👷Update(): Operator\Issues\Update
    {
        if ($this->issues👷Update instanceof Operator\Issues\Update === false) {
            $this->issues👷Update = new Operator\Issues\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber());
        }

        return $this->issues👷Update;
    }

    public function issues👷AddAssignees(): Operator\Issues\AddAssignees
    {
        if ($this->issues👷AddAssignees instanceof Operator\Issues\AddAssignees === false) {
            $this->issues👷AddAssignees = new Operator\Issues\AddAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷AddAssignees;
    }

    public function issues👷RemoveAssignees(): Operator\Issues\RemoveAssignees
    {
        if ($this->issues👷RemoveAssignees instanceof Operator\Issues\RemoveAssignees === false) {
            $this->issues👷RemoveAssignees = new Operator\Issues\RemoveAssignees($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees());
        }

        return $this->issues👷RemoveAssignees;
    }

    public function issues👷CheckUserCanBeAssignedToIssue(): Operator\Issues\CheckUserCanBeAssignedToIssue
    {
        if ($this->issues👷CheckUserCanBeAssignedToIssue instanceof Operator\Issues\CheckUserCanBeAssignedToIssue === false) {
            $this->issues👷CheckUserCanBeAssignedToIssue = new Operator\Issues\CheckUserCanBeAssignedToIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee());
        }

        return $this->issues👷CheckUserCanBeAssignedToIssue;
    }

    public function issues👷ListComments(): Operator\Issues\ListComments
    {
        if ($this->issues👷ListComments instanceof Operator\Issues\ListComments === false) {
            $this->issues👷ListComments = new Operator\Issues\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListComments;
    }

    public function issues👷ListCommentsListing(): Operator\Issues\ListCommentsListing
    {
        if ($this->issues👷ListCommentsListing instanceof Operator\Issues\ListCommentsListing === false) {
            $this->issues👷ListCommentsListing = new Operator\Issues\ListCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷ListCommentsListing;
    }

    public function issues👷CreateComment(): Operator\Issues\CreateComment
    {
        if ($this->issues👷CreateComment instanceof Operator\Issues\CreateComment === false) {
            $this->issues👷CreateComment = new Operator\Issues\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments());
        }

        return $this->issues👷CreateComment;
    }

    public function issues👷ListEvents(): Operator\Issues\ListEvents
    {
        if ($this->issues👷ListEvents instanceof Operator\Issues\ListEvents === false) {
            $this->issues👷ListEvents = new Operator\Issues\ListEvents($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEvents;
    }

    public function issues👷ListEventsListing(): Operator\Issues\ListEventsListing
    {
        if ($this->issues👷ListEventsListing instanceof Operator\Issues\ListEventsListing === false) {
            $this->issues👷ListEventsListing = new Operator\Issues\ListEventsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events());
        }

        return $this->issues👷ListEventsListing;
    }

    public function issues👷ListLabelsOnIssue(): Operator\Issues\ListLabelsOnIssue
    {
        if ($this->issues👷ListLabelsOnIssue instanceof Operator\Issues\ListLabelsOnIssue === false) {
            $this->issues👷ListLabelsOnIssue = new Operator\Issues\ListLabelsOnIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssue;
    }

    public function issues👷ListLabelsOnIssueListing(): Operator\Issues\ListLabelsOnIssueListing
    {
        if ($this->issues👷ListLabelsOnIssueListing instanceof Operator\Issues\ListLabelsOnIssueListing === false) {
            $this->issues👷ListLabelsOnIssueListing = new Operator\Issues\ListLabelsOnIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷ListLabelsOnIssueListing;
    }

    public function issues👷SetLabels(): Operator\Issues\SetLabels
    {
        if ($this->issues👷SetLabels instanceof Operator\Issues\SetLabels === false) {
            $this->issues👷SetLabels = new Operator\Issues\SetLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷SetLabels;
    }

    public function issues👷AddLabels(): Operator\Issues\AddLabels
    {
        if ($this->issues👷AddLabels instanceof Operator\Issues\AddLabels === false) {
            $this->issues👷AddLabels = new Operator\Issues\AddLabels($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷AddLabels;
    }

    public function issues👷RemoveAllLabels(): Operator\Issues\RemoveAllLabels
    {
        if ($this->issues👷RemoveAllLabels instanceof Operator\Issues\RemoveAllLabels === false) {
            $this->issues👷RemoveAllLabels = new Operator\Issues\RemoveAllLabels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels());
        }

        return $this->issues👷RemoveAllLabels;
    }

    public function issues👷RemoveLabel(): Operator\Issues\RemoveLabel
    {
        if ($this->issues👷RemoveLabel instanceof Operator\Issues\RemoveLabel === false) {
            $this->issues👷RemoveLabel = new Operator\Issues\RemoveLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name());
        }

        return $this->issues👷RemoveLabel;
    }

    public function issues👷Lock(): Operator\Issues\Lock
    {
        if ($this->issues👷Lock instanceof Operator\Issues\Lock === false) {
            $this->issues👷Lock = new Operator\Issues\Lock($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Lock;
    }

    public function issues👷Unlock(): Operator\Issues\Unlock
    {
        if ($this->issues👷Unlock instanceof Operator\Issues\Unlock === false) {
            $this->issues👷Unlock = new Operator\Issues\Unlock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock());
        }

        return $this->issues👷Unlock;
    }

    public function reactions👷ListForIssue(): Operator\Reactions\ListForIssue
    {
        if ($this->reactions👷ListForIssue instanceof Operator\Reactions\ListForIssue === false) {
            $this->reactions👷ListForIssue = new Operator\Reactions\ListForIssue($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssue;
    }

    public function reactions👷ListForIssueListing(): Operator\Reactions\ListForIssueListing
    {
        if ($this->reactions👷ListForIssueListing instanceof Operator\Reactions\ListForIssueListing === false) {
            $this->reactions👷ListForIssueListing = new Operator\Reactions\ListForIssueListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷ListForIssueListing;
    }

    public function reactions👷CreateForIssue(): Operator\Reactions\CreateForIssue
    {
        if ($this->reactions👷CreateForIssue instanceof Operator\Reactions\CreateForIssue === false) {
            $this->reactions👷CreateForIssue = new Operator\Reactions\CreateForIssue($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions());
        }

        return $this->reactions👷CreateForIssue;
    }

    public function reactions👷DeleteForIssue(): Operator\Reactions\DeleteForIssue
    {
        if ($this->reactions👷DeleteForIssue instanceof Operator\Reactions\DeleteForIssue === false) {
            $this->reactions👷DeleteForIssue = new Operator\Reactions\DeleteForIssue($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForIssue;
    }

    public function issues👷ListEventsForTimeline(): Operator\Issues\ListEventsForTimeline
    {
        if ($this->issues👷ListEventsForTimeline instanceof Operator\Issues\ListEventsForTimeline === false) {
            $this->issues👷ListEventsForTimeline = new Operator\Issues\ListEventsForTimeline($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimeline;
    }

    public function issues👷ListEventsForTimelineListing(): Operator\Issues\ListEventsForTimelineListing
    {
        if ($this->issues👷ListEventsForTimelineListing instanceof Operator\Issues\ListEventsForTimelineListing === false) {
            $this->issues👷ListEventsForTimelineListing = new Operator\Issues\ListEventsForTimelineListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline());
        }

        return $this->issues👷ListEventsForTimelineListing;
    }

    public function repos👷ListDeployKeys(): Operator\Repos\ListDeployKeys
    {
        if ($this->repos👷ListDeployKeys instanceof Operator\Repos\ListDeployKeys === false) {
            $this->repos👷ListDeployKeys = new Operator\Repos\ListDeployKeys($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeys;
    }

    public function repos👷ListDeployKeysListing(): Operator\Repos\ListDeployKeysListing
    {
        if ($this->repos👷ListDeployKeysListing instanceof Operator\Repos\ListDeployKeysListing === false) {
            $this->repos👷ListDeployKeysListing = new Operator\Repos\ListDeployKeysListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷ListDeployKeysListing;
    }

    public function repos👷CreateDeployKey(): Operator\Repos\CreateDeployKey
    {
        if ($this->repos👷CreateDeployKey instanceof Operator\Repos\CreateDeployKey === false) {
            $this->repos👷CreateDeployKey = new Operator\Repos\CreateDeployKey($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys());
        }

        return $this->repos👷CreateDeployKey;
    }

    public function repos👷GetDeployKey(): Operator\Repos\GetDeployKey
    {
        if ($this->repos👷GetDeployKey instanceof Operator\Repos\GetDeployKey === false) {
            $this->repos👷GetDeployKey = new Operator\Repos\GetDeployKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId());
        }

        return $this->repos👷GetDeployKey;
    }

    public function repos👷DeleteDeployKey(): Operator\Repos\DeleteDeployKey
    {
        if ($this->repos👷DeleteDeployKey instanceof Operator\Repos\DeleteDeployKey === false) {
            $this->repos👷DeleteDeployKey = new Operator\Repos\DeleteDeployKey($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteDeployKey;
    }

    public function issues👷ListLabelsForRepo(): Operator\Issues\ListLabelsForRepo
    {
        if ($this->issues👷ListLabelsForRepo instanceof Operator\Issues\ListLabelsForRepo === false) {
            $this->issues👷ListLabelsForRepo = new Operator\Issues\ListLabelsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepo;
    }

    public function issues👷ListLabelsForRepoListing(): Operator\Issues\ListLabelsForRepoListing
    {
        if ($this->issues👷ListLabelsForRepoListing instanceof Operator\Issues\ListLabelsForRepoListing === false) {
            $this->issues👷ListLabelsForRepoListing = new Operator\Issues\ListLabelsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷ListLabelsForRepoListing;
    }

    public function issues👷CreateLabel(): Operator\Issues\CreateLabel
    {
        if ($this->issues👷CreateLabel instanceof Operator\Issues\CreateLabel === false) {
            $this->issues👷CreateLabel = new Operator\Issues\CreateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels());
        }

        return $this->issues👷CreateLabel;
    }

    public function issues👷GetLabel(): Operator\Issues\GetLabel
    {
        if ($this->issues👷GetLabel instanceof Operator\Issues\GetLabel === false) {
            $this->issues👷GetLabel = new Operator\Issues\GetLabel($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷GetLabel;
    }

    public function issues👷DeleteLabel(): Operator\Issues\DeleteLabel
    {
        if ($this->issues👷DeleteLabel instanceof Operator\Issues\DeleteLabel === false) {
            $this->issues👷DeleteLabel = new Operator\Issues\DeleteLabel($this->browser, $this->authentication);
        }

        return $this->issues👷DeleteLabel;
    }

    public function issues👷UpdateLabel(): Operator\Issues\UpdateLabel
    {
        if ($this->issues👷UpdateLabel instanceof Operator\Issues\UpdateLabel === false) {
            $this->issues👷UpdateLabel = new Operator\Issues\UpdateLabel($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name());
        }

        return $this->issues👷UpdateLabel;
    }

    public function repos👷ListLanguages(): Operator\Repos\ListLanguages
    {
        if ($this->repos👷ListLanguages instanceof Operator\Repos\ListLanguages === false) {
            $this->repos👷ListLanguages = new Operator\Repos\ListLanguages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages());
        }

        return $this->repos👷ListLanguages;
    }

    public function licenses👷GetForRepo(): Operator\Licenses\GetForRepo
    {
        if ($this->licenses👷GetForRepo instanceof Operator\Licenses\GetForRepo === false) {
            $this->licenses👷GetForRepo = new Operator\Licenses\GetForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License());
        }

        return $this->licenses👷GetForRepo;
    }

    public function repos👷MergeUpstream(): Operator\Repos\MergeUpstream
    {
        if ($this->repos👷MergeUpstream instanceof Operator\Repos\MergeUpstream === false) {
            $this->repos👷MergeUpstream = new Operator\Repos\MergeUpstream($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream());
        }

        return $this->repos👷MergeUpstream;
    }

    public function repos👷Merge(): Operator\Repos\Merge
    {
        if ($this->repos👷Merge instanceof Operator\Repos\Merge === false) {
            $this->repos👷Merge = new Operator\Repos\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges());
        }

        return $this->repos👷Merge;
    }

    public function issues👷ListMilestones(): Operator\Issues\ListMilestones
    {
        if ($this->issues👷ListMilestones instanceof Operator\Issues\ListMilestones === false) {
            $this->issues👷ListMilestones = new Operator\Issues\ListMilestones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestones;
    }

    public function issues👷ListMilestonesListing(): Operator\Issues\ListMilestonesListing
    {
        if ($this->issues👷ListMilestonesListing instanceof Operator\Issues\ListMilestonesListing === false) {
            $this->issues👷ListMilestonesListing = new Operator\Issues\ListMilestonesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷ListMilestonesListing;
    }

    public function issues👷CreateMilestone(): Operator\Issues\CreateMilestone
    {
        if ($this->issues👷CreateMilestone instanceof Operator\Issues\CreateMilestone === false) {
            $this->issues👷CreateMilestone = new Operator\Issues\CreateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones());
        }

        return $this->issues👷CreateMilestone;
    }

    public function issues👷GetMilestone(): Operator\Issues\GetMilestone
    {
        if ($this->issues👷GetMilestone instanceof Operator\Issues\GetMilestone === false) {
            $this->issues👷GetMilestone = new Operator\Issues\GetMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷GetMilestone;
    }

    public function issues👷DeleteMilestone(): Operator\Issues\DeleteMilestone
    {
        if ($this->issues👷DeleteMilestone instanceof Operator\Issues\DeleteMilestone === false) {
            $this->issues👷DeleteMilestone = new Operator\Issues\DeleteMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷DeleteMilestone;
    }

    public function issues👷UpdateMilestone(): Operator\Issues\UpdateMilestone
    {
        if ($this->issues👷UpdateMilestone instanceof Operator\Issues\UpdateMilestone === false) {
            $this->issues👷UpdateMilestone = new Operator\Issues\UpdateMilestone($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber());
        }

        return $this->issues👷UpdateMilestone;
    }

    public function issues👷ListLabelsForMilestone(): Operator\Issues\ListLabelsForMilestone
    {
        if ($this->issues👷ListLabelsForMilestone instanceof Operator\Issues\ListLabelsForMilestone === false) {
            $this->issues👷ListLabelsForMilestone = new Operator\Issues\ListLabelsForMilestone($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestone;
    }

    public function issues👷ListLabelsForMilestoneListing(): Operator\Issues\ListLabelsForMilestoneListing
    {
        if ($this->issues👷ListLabelsForMilestoneListing instanceof Operator\Issues\ListLabelsForMilestoneListing === false) {
            $this->issues👷ListLabelsForMilestoneListing = new Operator\Issues\ListLabelsForMilestoneListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels());
        }

        return $this->issues👷ListLabelsForMilestoneListing;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUser(): Operator\Activity\ListRepoNotificationsForAuthenticatedUser
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUser instanceof Operator\Activity\ListRepoNotificationsForAuthenticatedUser === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUser = new Operator\Activity\ListRepoNotificationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUser;
    }

    public function activity👷ListRepoNotificationsForAuthenticatedUserListing(): Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing
    {
        if ($this->activity👷ListRepoNotificationsForAuthenticatedUserListing instanceof Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing === false) {
            $this->activity👷ListRepoNotificationsForAuthenticatedUserListing = new Operator\Activity\ListRepoNotificationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷ListRepoNotificationsForAuthenticatedUserListing;
    }

    public function activity👷MarkRepoNotificationsAsRead(): Operator\Activity\MarkRepoNotificationsAsRead
    {
        if ($this->activity👷MarkRepoNotificationsAsRead instanceof Operator\Activity\MarkRepoNotificationsAsRead === false) {
            $this->activity👷MarkRepoNotificationsAsRead = new Operator\Activity\MarkRepoNotificationsAsRead($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications());
        }

        return $this->activity👷MarkRepoNotificationsAsRead;
    }

    public function repos👷GetPages(): Operator\Repos\GetPages
    {
        if ($this->repos👷GetPages instanceof Operator\Repos\GetPages === false) {
            $this->repos👷GetPages = new Operator\Repos\GetPages($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷GetPages;
    }

    public function repos👷UpdateInformationAboutPagesSite(): Operator\Repos\UpdateInformationAboutPagesSite
    {
        if ($this->repos👷UpdateInformationAboutPagesSite instanceof Operator\Repos\UpdateInformationAboutPagesSite === false) {
            $this->repos👷UpdateInformationAboutPagesSite = new Operator\Repos\UpdateInformationAboutPagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷UpdateInformationAboutPagesSite;
    }

    public function repos👷CreatePagesSite(): Operator\Repos\CreatePagesSite
    {
        if ($this->repos👷CreatePagesSite instanceof Operator\Repos\CreatePagesSite === false) {
            $this->repos👷CreatePagesSite = new Operator\Repos\CreatePagesSite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷CreatePagesSite;
    }

    public function repos👷DeletePagesSite(): Operator\Repos\DeletePagesSite
    {
        if ($this->repos👷DeletePagesSite instanceof Operator\Repos\DeletePagesSite === false) {
            $this->repos👷DeletePagesSite = new Operator\Repos\DeletePagesSite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages());
        }

        return $this->repos👷DeletePagesSite;
    }

    public function repos👷ListPagesBuilds(): Operator\Repos\ListPagesBuilds
    {
        if ($this->repos👷ListPagesBuilds instanceof Operator\Repos\ListPagesBuilds === false) {
            $this->repos👷ListPagesBuilds = new Operator\Repos\ListPagesBuilds($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuilds;
    }

    public function repos👷ListPagesBuildsListing(): Operator\Repos\ListPagesBuildsListing
    {
        if ($this->repos👷ListPagesBuildsListing instanceof Operator\Repos\ListPagesBuildsListing === false) {
            $this->repos👷ListPagesBuildsListing = new Operator\Repos\ListPagesBuildsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷ListPagesBuildsListing;
    }

    public function repos👷RequestPagesBuild(): Operator\Repos\RequestPagesBuild
    {
        if ($this->repos👷RequestPagesBuild instanceof Operator\Repos\RequestPagesBuild === false) {
            $this->repos👷RequestPagesBuild = new Operator\Repos\RequestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds());
        }

        return $this->repos👷RequestPagesBuild;
    }

    public function repos👷GetLatestPagesBuild(): Operator\Repos\GetLatestPagesBuild
    {
        if ($this->repos👷GetLatestPagesBuild instanceof Operator\Repos\GetLatestPagesBuild === false) {
            $this->repos👷GetLatestPagesBuild = new Operator\Repos\GetLatestPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest());
        }

        return $this->repos👷GetLatestPagesBuild;
    }

    public function repos👷GetPagesBuild(): Operator\Repos\GetPagesBuild
    {
        if ($this->repos👷GetPagesBuild instanceof Operator\Repos\GetPagesBuild === false) {
            $this->repos👷GetPagesBuild = new Operator\Repos\GetPagesBuild($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId());
        }

        return $this->repos👷GetPagesBuild;
    }

    public function repos👷CreatePagesDeployment(): Operator\Repos\CreatePagesDeployment
    {
        if ($this->repos👷CreatePagesDeployment instanceof Operator\Repos\CreatePagesDeployment === false) {
            $this->repos👷CreatePagesDeployment = new Operator\Repos\CreatePagesDeployment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployment());
        }

        return $this->repos👷CreatePagesDeployment;
    }

    public function repos👷GetPagesHealthCheck(): Operator\Repos\GetPagesHealthCheck
    {
        if ($this->repos👷GetPagesHealthCheck instanceof Operator\Repos\GetPagesHealthCheck === false) {
            $this->repos👷GetPagesHealthCheck = new Operator\Repos\GetPagesHealthCheck($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health());
        }

        return $this->repos👷GetPagesHealthCheck;
    }

    public function repos👷EnablePrivateVulnerabilityReporting(): Operator\Repos\EnablePrivateVulnerabilityReporting
    {
        if ($this->repos👷EnablePrivateVulnerabilityReporting instanceof Operator\Repos\EnablePrivateVulnerabilityReporting === false) {
            $this->repos👷EnablePrivateVulnerabilityReporting = new Operator\Repos\EnablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷EnablePrivateVulnerabilityReporting;
    }

    public function repos👷DisablePrivateVulnerabilityReporting(): Operator\Repos\DisablePrivateVulnerabilityReporting
    {
        if ($this->repos👷DisablePrivateVulnerabilityReporting instanceof Operator\Repos\DisablePrivateVulnerabilityReporting === false) {
            $this->repos👷DisablePrivateVulnerabilityReporting = new Operator\Repos\DisablePrivateVulnerabilityReporting($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting());
        }

        return $this->repos👷DisablePrivateVulnerabilityReporting;
    }

    public function projects👷ListForRepo(): Operator\Projects\ListForRepo
    {
        if ($this->projects👷ListForRepo instanceof Operator\Projects\ListForRepo === false) {
            $this->projects👷ListForRepo = new Operator\Projects\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepo;
    }

    public function projects👷ListForRepoListing(): Operator\Projects\ListForRepoListing
    {
        if ($this->projects👷ListForRepoListing instanceof Operator\Projects\ListForRepoListing === false) {
            $this->projects👷ListForRepoListing = new Operator\Projects\ListForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷ListForRepoListing;
    }

    public function projects👷CreateForRepo(): Operator\Projects\CreateForRepo
    {
        if ($this->projects👷CreateForRepo instanceof Operator\Projects\CreateForRepo === false) {
            $this->projects👷CreateForRepo = new Operator\Projects\CreateForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());
        }

        return $this->projects👷CreateForRepo;
    }

    public function pulls👷List_(): Operator\Pulls\List_
    {
        if ($this->pulls👷List_ instanceof Operator\Pulls\List_ === false) {
            $this->pulls👷List_ = new Operator\Pulls\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷List_;
    }

    public function pulls👷ListListing(): Operator\Pulls\ListListing
    {
        if ($this->pulls👷ListListing instanceof Operator\Pulls\ListListing === false) {
            $this->pulls👷ListListing = new Operator\Pulls\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷ListListing;
    }

    public function pulls👷Create(): Operator\Pulls\Create
    {
        if ($this->pulls👷Create instanceof Operator\Pulls\Create === false) {
            $this->pulls👷Create = new Operator\Pulls\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->pulls👷Create;
    }

    public function pulls👷ListReviewCommentsForRepo(): Operator\Pulls\ListReviewCommentsForRepo
    {
        if ($this->pulls👷ListReviewCommentsForRepo instanceof Operator\Pulls\ListReviewCommentsForRepo === false) {
            $this->pulls👷ListReviewCommentsForRepo = new Operator\Pulls\ListReviewCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepo;
    }

    public function pulls👷ListReviewCommentsForRepoListing(): Operator\Pulls\ListReviewCommentsForRepoListing
    {
        if ($this->pulls👷ListReviewCommentsForRepoListing instanceof Operator\Pulls\ListReviewCommentsForRepoListing === false) {
            $this->pulls👷ListReviewCommentsForRepoListing = new Operator\Pulls\ListReviewCommentsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsForRepoListing;
    }

    public function pulls👷GetReviewComment(): Operator\Pulls\GetReviewComment
    {
        if ($this->pulls👷GetReviewComment instanceof Operator\Pulls\GetReviewComment === false) {
            $this->pulls👷GetReviewComment = new Operator\Pulls\GetReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷GetReviewComment;
    }

    public function pulls👷DeleteReviewComment(): Operator\Pulls\DeleteReviewComment
    {
        if ($this->pulls👷DeleteReviewComment instanceof Operator\Pulls\DeleteReviewComment === false) {
            $this->pulls👷DeleteReviewComment = new Operator\Pulls\DeleteReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷DeleteReviewComment;
    }

    public function pulls👷UpdateReviewComment(): Operator\Pulls\UpdateReviewComment
    {
        if ($this->pulls👷UpdateReviewComment instanceof Operator\Pulls\UpdateReviewComment === false) {
            $this->pulls👷UpdateReviewComment = new Operator\Pulls\UpdateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->pulls👷UpdateReviewComment;
    }

    public function reactions👷ListForPullRequestReviewComment(): Operator\Reactions\ListForPullRequestReviewComment
    {
        if ($this->reactions👷ListForPullRequestReviewComment instanceof Operator\Reactions\ListForPullRequestReviewComment === false) {
            $this->reactions👷ListForPullRequestReviewComment = new Operator\Reactions\ListForPullRequestReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewComment;
    }

    public function reactions👷ListForPullRequestReviewCommentListing(): Operator\Reactions\ListForPullRequestReviewCommentListing
    {
        if ($this->reactions👷ListForPullRequestReviewCommentListing instanceof Operator\Reactions\ListForPullRequestReviewCommentListing === false) {
            $this->reactions👷ListForPullRequestReviewCommentListing = new Operator\Reactions\ListForPullRequestReviewCommentListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷ListForPullRequestReviewCommentListing;
    }

    public function reactions👷CreateForPullRequestReviewComment(): Operator\Reactions\CreateForPullRequestReviewComment
    {
        if ($this->reactions👷CreateForPullRequestReviewComment instanceof Operator\Reactions\CreateForPullRequestReviewComment === false) {
            $this->reactions👷CreateForPullRequestReviewComment = new Operator\Reactions\CreateForPullRequestReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions());
        }

        return $this->reactions👷CreateForPullRequestReviewComment;
    }

    public function reactions👷DeleteForPullRequestComment(): Operator\Reactions\DeleteForPullRequestComment
    {
        if ($this->reactions👷DeleteForPullRequestComment instanceof Operator\Reactions\DeleteForPullRequestComment === false) {
            $this->reactions👷DeleteForPullRequestComment = new Operator\Reactions\DeleteForPullRequestComment($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForPullRequestComment;
    }

    public function pulls👷Get(): Operator\Pulls\Get
    {
        if ($this->pulls👷Get instanceof Operator\Pulls\Get === false) {
            $this->pulls👷Get = new Operator\Pulls\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Get;
    }

    public function pulls👷Update(): Operator\Pulls\Update
    {
        if ($this->pulls👷Update instanceof Operator\Pulls\Update === false) {
            $this->pulls👷Update = new Operator\Pulls\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->pulls👷Update;
    }

    public function codespaces👷CreateWithPrForAuthenticatedUser(): Operator\Codespaces\CreateWithPrForAuthenticatedUser
    {
        if ($this->codespaces👷CreateWithPrForAuthenticatedUser instanceof Operator\Codespaces\CreateWithPrForAuthenticatedUser === false) {
            $this->codespaces👷CreateWithPrForAuthenticatedUser = new Operator\Codespaces\CreateWithPrForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces());
        }

        return $this->codespaces👷CreateWithPrForAuthenticatedUser;
    }

    public function pulls👷ListReviewComments(): Operator\Pulls\ListReviewComments
    {
        if ($this->pulls👷ListReviewComments instanceof Operator\Pulls\ListReviewComments === false) {
            $this->pulls👷ListReviewComments = new Operator\Pulls\ListReviewComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewComments;
    }

    public function pulls👷ListReviewCommentsListing(): Operator\Pulls\ListReviewCommentsListing
    {
        if ($this->pulls👷ListReviewCommentsListing instanceof Operator\Pulls\ListReviewCommentsListing === false) {
            $this->pulls👷ListReviewCommentsListing = new Operator\Pulls\ListReviewCommentsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷ListReviewCommentsListing;
    }

    public function pulls👷CreateReviewComment(): Operator\Pulls\CreateReviewComment
    {
        if ($this->pulls👷CreateReviewComment instanceof Operator\Pulls\CreateReviewComment === false) {
            $this->pulls👷CreateReviewComment = new Operator\Pulls\CreateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->pulls👷CreateReviewComment;
    }

    public function pulls👷CreateReplyForReviewComment(): Operator\Pulls\CreateReplyForReviewComment
    {
        if ($this->pulls👷CreateReplyForReviewComment instanceof Operator\Pulls\CreateReplyForReviewComment === false) {
            $this->pulls👷CreateReplyForReviewComment = new Operator\Pulls\CreateReplyForReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies());
        }

        return $this->pulls👷CreateReplyForReviewComment;
    }

    public function pulls👷ListCommits(): Operator\Pulls\ListCommits
    {
        if ($this->pulls👷ListCommits instanceof Operator\Pulls\ListCommits === false) {
            $this->pulls👷ListCommits = new Operator\Pulls\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommits;
    }

    public function pulls👷ListCommitsListing(): Operator\Pulls\ListCommitsListing
    {
        if ($this->pulls👷ListCommitsListing instanceof Operator\Pulls\ListCommitsListing === false) {
            $this->pulls👷ListCommitsListing = new Operator\Pulls\ListCommitsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->pulls👷ListCommitsListing;
    }

    public function pulls👷ListFiles(): Operator\Pulls\ListFiles
    {
        if ($this->pulls👷ListFiles instanceof Operator\Pulls\ListFiles === false) {
            $this->pulls👷ListFiles = new Operator\Pulls\ListFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFiles;
    }

    public function pulls👷ListFilesListing(): Operator\Pulls\ListFilesListing
    {
        if ($this->pulls👷ListFilesListing instanceof Operator\Pulls\ListFilesListing === false) {
            $this->pulls👷ListFilesListing = new Operator\Pulls\ListFilesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->pulls👷ListFilesListing;
    }

    public function pulls👷CheckIfMerged(): Operator\Pulls\CheckIfMerged
    {
        if ($this->pulls👷CheckIfMerged instanceof Operator\Pulls\CheckIfMerged === false) {
            $this->pulls👷CheckIfMerged = new Operator\Pulls\CheckIfMerged($this->browser, $this->authentication);
        }

        return $this->pulls👷CheckIfMerged;
    }

    public function pulls👷Merge(): Operator\Pulls\Merge
    {
        if ($this->pulls👷Merge instanceof Operator\Pulls\Merge === false) {
            $this->pulls👷Merge = new Operator\Pulls\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge());
        }

        return $this->pulls👷Merge;
    }

    public function pulls👷ListRequestedReviewers(): Operator\Pulls\ListRequestedReviewers
    {
        if ($this->pulls👷ListRequestedReviewers instanceof Operator\Pulls\ListRequestedReviewers === false) {
            $this->pulls👷ListRequestedReviewers = new Operator\Pulls\ListRequestedReviewers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷ListRequestedReviewers;
    }

    public function pulls👷RequestReviewers(): Operator\Pulls\RequestReviewers
    {
        if ($this->pulls👷RequestReviewers instanceof Operator\Pulls\RequestReviewers === false) {
            $this->pulls👷RequestReviewers = new Operator\Pulls\RequestReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RequestReviewers;
    }

    public function pulls👷RemoveRequestedReviewers(): Operator\Pulls\RemoveRequestedReviewers
    {
        if ($this->pulls👷RemoveRequestedReviewers instanceof Operator\Pulls\RemoveRequestedReviewers === false) {
            $this->pulls👷RemoveRequestedReviewers = new Operator\Pulls\RemoveRequestedReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->pulls👷RemoveRequestedReviewers;
    }

    public function pulls👷ListReviews(): Operator\Pulls\ListReviews
    {
        if ($this->pulls👷ListReviews instanceof Operator\Pulls\ListReviews === false) {
            $this->pulls👷ListReviews = new Operator\Pulls\ListReviews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviews;
    }

    public function pulls👷ListReviewsListing(): Operator\Pulls\ListReviewsListing
    {
        if ($this->pulls👷ListReviewsListing instanceof Operator\Pulls\ListReviewsListing === false) {
            $this->pulls👷ListReviewsListing = new Operator\Pulls\ListReviewsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷ListReviewsListing;
    }

    public function pulls👷CreateReview(): Operator\Pulls\CreateReview
    {
        if ($this->pulls👷CreateReview instanceof Operator\Pulls\CreateReview === false) {
            $this->pulls👷CreateReview = new Operator\Pulls\CreateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->pulls👷CreateReview;
    }

    public function pulls👷GetReview(): Operator\Pulls\GetReview
    {
        if ($this->pulls👷GetReview instanceof Operator\Pulls\GetReview === false) {
            $this->pulls👷GetReview = new Operator\Pulls\GetReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷GetReview;
    }

    public function pulls👷UpdateReview(): Operator\Pulls\UpdateReview
    {
        if ($this->pulls👷UpdateReview instanceof Operator\Pulls\UpdateReview === false) {
            $this->pulls👷UpdateReview = new Operator\Pulls\UpdateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷UpdateReview;
    }

    public function pulls👷DeletePendingReview(): Operator\Pulls\DeletePendingReview
    {
        if ($this->pulls👷DeletePendingReview instanceof Operator\Pulls\DeletePendingReview === false) {
            $this->pulls👷DeletePendingReview = new Operator\Pulls\DeletePendingReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->pulls👷DeletePendingReview;
    }

    public function pulls👷ListCommentsForReview(): Operator\Pulls\ListCommentsForReview
    {
        if ($this->pulls👷ListCommentsForReview instanceof Operator\Pulls\ListCommentsForReview === false) {
            $this->pulls👷ListCommentsForReview = new Operator\Pulls\ListCommentsForReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReview;
    }

    public function pulls👷ListCommentsForReviewListing(): Operator\Pulls\ListCommentsForReviewListing
    {
        if ($this->pulls👷ListCommentsForReviewListing instanceof Operator\Pulls\ListCommentsForReviewListing === false) {
            $this->pulls👷ListCommentsForReviewListing = new Operator\Pulls\ListCommentsForReviewListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->pulls👷ListCommentsForReviewListing;
    }

    public function pulls👷DismissReview(): Operator\Pulls\DismissReview
    {
        if ($this->pulls👷DismissReview instanceof Operator\Pulls\DismissReview === false) {
            $this->pulls👷DismissReview = new Operator\Pulls\DismissReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals());
        }

        return $this->pulls👷DismissReview;
    }

    public function pulls👷SubmitReview(): Operator\Pulls\SubmitReview
    {
        if ($this->pulls👷SubmitReview instanceof Operator\Pulls\SubmitReview === false) {
            $this->pulls👷SubmitReview = new Operator\Pulls\SubmitReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events());
        }

        return $this->pulls👷SubmitReview;
    }

    public function pulls👷UpdateBranch(): Operator\Pulls\UpdateBranch
    {
        if ($this->pulls👷UpdateBranch instanceof Operator\Pulls\UpdateBranch === false) {
            $this->pulls👷UpdateBranch = new Operator\Pulls\UpdateBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch());
        }

        return $this->pulls👷UpdateBranch;
    }

    public function repos👷GetReadme(): Operator\Repos\GetReadme
    {
        if ($this->repos👷GetReadme instanceof Operator\Repos\GetReadme === false) {
            $this->repos👷GetReadme = new Operator\Repos\GetReadme($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme());
        }

        return $this->repos👷GetReadme;
    }

    public function repos👷GetReadmeInDirectory(): Operator\Repos\GetReadmeInDirectory
    {
        if ($this->repos👷GetReadmeInDirectory instanceof Operator\Repos\GetReadmeInDirectory === false) {
            $this->repos👷GetReadmeInDirectory = new Operator\Repos\GetReadmeInDirectory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir());
        }

        return $this->repos👷GetReadmeInDirectory;
    }

    public function repos👷ListReleases(): Operator\Repos\ListReleases
    {
        if ($this->repos👷ListReleases instanceof Operator\Repos\ListReleases === false) {
            $this->repos👷ListReleases = new Operator\Repos\ListReleases($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleases;
    }

    public function repos👷ListReleasesListing(): Operator\Repos\ListReleasesListing
    {
        if ($this->repos👷ListReleasesListing instanceof Operator\Repos\ListReleasesListing === false) {
            $this->repos👷ListReleasesListing = new Operator\Repos\ListReleasesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷ListReleasesListing;
    }

    public function repos👷CreateRelease(): Operator\Repos\CreateRelease
    {
        if ($this->repos👷CreateRelease instanceof Operator\Repos\CreateRelease === false) {
            $this->repos👷CreateRelease = new Operator\Repos\CreateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases());
        }

        return $this->repos👷CreateRelease;
    }

    public function repos👷GetReleaseAsset(): Operator\Repos\GetReleaseAsset
    {
        if ($this->repos👷GetReleaseAsset instanceof Operator\Repos\GetReleaseAsset === false) {
            $this->repos👷GetReleaseAsset = new Operator\Repos\GetReleaseAsset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷GetReleaseAsset;
    }

    public function repos👷DeleteReleaseAsset(): Operator\Repos\DeleteReleaseAsset
    {
        if ($this->repos👷DeleteReleaseAsset instanceof Operator\Repos\DeleteReleaseAsset === false) {
            $this->repos👷DeleteReleaseAsset = new Operator\Repos\DeleteReleaseAsset($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteReleaseAsset;
    }

    public function repos👷UpdateReleaseAsset(): Operator\Repos\UpdateReleaseAsset
    {
        if ($this->repos👷UpdateReleaseAsset instanceof Operator\Repos\UpdateReleaseAsset === false) {
            $this->repos👷UpdateReleaseAsset = new Operator\Repos\UpdateReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId());
        }

        return $this->repos👷UpdateReleaseAsset;
    }

    public function repos👷GenerateReleaseNotes(): Operator\Repos\GenerateReleaseNotes
    {
        if ($this->repos👷GenerateReleaseNotes instanceof Operator\Repos\GenerateReleaseNotes === false) {
            $this->repos👷GenerateReleaseNotes = new Operator\Repos\GenerateReleaseNotes($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes());
        }

        return $this->repos👷GenerateReleaseNotes;
    }

    public function repos👷GetLatestRelease(): Operator\Repos\GetLatestRelease
    {
        if ($this->repos👷GetLatestRelease instanceof Operator\Repos\GetLatestRelease === false) {
            $this->repos👷GetLatestRelease = new Operator\Repos\GetLatestRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest());
        }

        return $this->repos👷GetLatestRelease;
    }

    public function repos👷GetReleaseByTag(): Operator\Repos\GetReleaseByTag
    {
        if ($this->repos👷GetReleaseByTag instanceof Operator\Repos\GetReleaseByTag === false) {
            $this->repos👷GetReleaseByTag = new Operator\Repos\GetReleaseByTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag());
        }

        return $this->repos👷GetReleaseByTag;
    }

    public function repos👷GetRelease(): Operator\Repos\GetRelease
    {
        if ($this->repos👷GetRelease instanceof Operator\Repos\GetRelease === false) {
            $this->repos👷GetRelease = new Operator\Repos\GetRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷GetRelease;
    }

    public function repos👷DeleteRelease(): Operator\Repos\DeleteRelease
    {
        if ($this->repos👷DeleteRelease instanceof Operator\Repos\DeleteRelease === false) {
            $this->repos👷DeleteRelease = new Operator\Repos\DeleteRelease($this->browser, $this->authentication);
        }

        return $this->repos👷DeleteRelease;
    }

    public function repos👷UpdateRelease(): Operator\Repos\UpdateRelease
    {
        if ($this->repos👷UpdateRelease instanceof Operator\Repos\UpdateRelease === false) {
            $this->repos👷UpdateRelease = new Operator\Repos\UpdateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId());
        }

        return $this->repos👷UpdateRelease;
    }

    public function repos👷ListReleaseAssets(): Operator\Repos\ListReleaseAssets
    {
        if ($this->repos👷ListReleaseAssets instanceof Operator\Repos\ListReleaseAssets === false) {
            $this->repos👷ListReleaseAssets = new Operator\Repos\ListReleaseAssets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssets;
    }

    public function repos👷ListReleaseAssetsListing(): Operator\Repos\ListReleaseAssetsListing
    {
        if ($this->repos👷ListReleaseAssetsListing instanceof Operator\Repos\ListReleaseAssetsListing === false) {
            $this->repos👷ListReleaseAssetsListing = new Operator\Repos\ListReleaseAssetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷ListReleaseAssetsListing;
    }

    public function repos👷UploadReleaseAsset(): Operator\Repos\UploadReleaseAsset
    {
        if ($this->repos👷UploadReleaseAsset instanceof Operator\Repos\UploadReleaseAsset === false) {
            $this->repos👷UploadReleaseAsset = new Operator\Repos\UploadReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets());
        }

        return $this->repos👷UploadReleaseAsset;
    }

    public function reactions👷ListForRelease(): Operator\Reactions\ListForRelease
    {
        if ($this->reactions👷ListForRelease instanceof Operator\Reactions\ListForRelease === false) {
            $this->reactions👷ListForRelease = new Operator\Reactions\ListForRelease($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForRelease;
    }

    public function reactions👷ListForReleaseListing(): Operator\Reactions\ListForReleaseListing
    {
        if ($this->reactions👷ListForReleaseListing instanceof Operator\Reactions\ListForReleaseListing === false) {
            $this->reactions👷ListForReleaseListing = new Operator\Reactions\ListForReleaseListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷ListForReleaseListing;
    }

    public function reactions👷CreateForRelease(): Operator\Reactions\CreateForRelease
    {
        if ($this->reactions👷CreateForRelease instanceof Operator\Reactions\CreateForRelease === false) {
            $this->reactions👷CreateForRelease = new Operator\Reactions\CreateForRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions());
        }

        return $this->reactions👷CreateForRelease;
    }

    public function reactions👷DeleteForRelease(): Operator\Reactions\DeleteForRelease
    {
        if ($this->reactions👷DeleteForRelease instanceof Operator\Reactions\DeleteForRelease === false) {
            $this->reactions👷DeleteForRelease = new Operator\Reactions\DeleteForRelease($this->browser, $this->authentication);
        }

        return $this->reactions👷DeleteForRelease;
    }

    public function repos👷GetBranchRules(): Operator\Repos\GetBranchRules
    {
        if ($this->repos👷GetBranchRules instanceof Operator\Repos\GetBranchRules === false) {
            $this->repos👷GetBranchRules = new Operator\Repos\GetBranchRules($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranchRules;
    }

    public function repos👷GetBranchRulesListing(): Operator\Repos\GetBranchRulesListing
    {
        if ($this->repos👷GetBranchRulesListing instanceof Operator\Repos\GetBranchRulesListing === false) {
            $this->repos👷GetBranchRulesListing = new Operator\Repos\GetBranchRulesListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch());
        }

        return $this->repos👷GetBranchRulesListing;
    }

    public function repos👷GetRepoRulesets(): Operator\Repos\GetRepoRulesets
    {
        if ($this->repos👷GetRepoRulesets instanceof Operator\Repos\GetRepoRulesets === false) {
            $this->repos👷GetRepoRulesets = new Operator\Repos\GetRepoRulesets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷GetRepoRulesets;
    }

    public function repos👷GetRepoRulesetsListing(): Operator\Repos\GetRepoRulesetsListing
    {
        if ($this->repos👷GetRepoRulesetsListing instanceof Operator\Repos\GetRepoRulesetsListing === false) {
            $this->repos👷GetRepoRulesetsListing = new Operator\Repos\GetRepoRulesetsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷GetRepoRulesetsListing;
    }

    public function repos👷CreateRepoRuleset(): Operator\Repos\CreateRepoRuleset
    {
        if ($this->repos👷CreateRepoRuleset instanceof Operator\Repos\CreateRepoRuleset === false) {
            $this->repos👷CreateRepoRuleset = new Operator\Repos\CreateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets());
        }

        return $this->repos👷CreateRepoRuleset;
    }

    public function repos👷GetRepoRuleset(): Operator\Repos\GetRepoRuleset
    {
        if ($this->repos👷GetRepoRuleset instanceof Operator\Repos\GetRepoRuleset === false) {
            $this->repos👷GetRepoRuleset = new Operator\Repos\GetRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷GetRepoRuleset;
    }

    public function repos👷UpdateRepoRuleset(): Operator\Repos\UpdateRepoRuleset
    {
        if ($this->repos👷UpdateRepoRuleset instanceof Operator\Repos\UpdateRepoRuleset === false) {
            $this->repos👷UpdateRepoRuleset = new Operator\Repos\UpdateRepoRuleset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷UpdateRepoRuleset;
    }

    public function repos👷DeleteRepoRuleset(): Operator\Repos\DeleteRepoRuleset
    {
        if ($this->repos👷DeleteRepoRuleset instanceof Operator\Repos\DeleteRepoRuleset === false) {
            $this->repos👷DeleteRepoRuleset = new Operator\Repos\DeleteRepoRuleset($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId());
        }

        return $this->repos👷DeleteRepoRuleset;
    }

    public function secretScanning👷ListAlertsForRepo(): Operator\SecretScanning\ListAlertsForRepo
    {
        if ($this->secretScanning👷ListAlertsForRepo instanceof Operator\SecretScanning\ListAlertsForRepo === false) {
            $this->secretScanning👷ListAlertsForRepo = new Operator\SecretScanning\ListAlertsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepo;
    }

    public function secretScanning👷ListAlertsForRepoListing(): Operator\SecretScanning\ListAlertsForRepoListing
    {
        if ($this->secretScanning👷ListAlertsForRepoListing instanceof Operator\SecretScanning\ListAlertsForRepoListing === false) {
            $this->secretScanning👷ListAlertsForRepoListing = new Operator\SecretScanning\ListAlertsForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts());
        }

        return $this->secretScanning👷ListAlertsForRepoListing;
    }

    public function secretScanning👷GetAlert(): Operator\SecretScanning\GetAlert
    {
        if ($this->secretScanning👷GetAlert instanceof Operator\SecretScanning\GetAlert === false) {
            $this->secretScanning👷GetAlert = new Operator\SecretScanning\GetAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷GetAlert;
    }

    public function secretScanning👷UpdateAlert(): Operator\SecretScanning\UpdateAlert
    {
        if ($this->secretScanning👷UpdateAlert instanceof Operator\SecretScanning\UpdateAlert === false) {
            $this->secretScanning👷UpdateAlert = new Operator\SecretScanning\UpdateAlert($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber());
        }

        return $this->secretScanning👷UpdateAlert;
    }

    public function secretScanning👷ListLocationsForAlert(): Operator\SecretScanning\ListLocationsForAlert
    {
        if ($this->secretScanning👷ListLocationsForAlert instanceof Operator\SecretScanning\ListLocationsForAlert === false) {
            $this->secretScanning👷ListLocationsForAlert = new Operator\SecretScanning\ListLocationsForAlert($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlert;
    }

    public function secretScanning👷ListLocationsForAlertListing(): Operator\SecretScanning\ListLocationsForAlertListing
    {
        if ($this->secretScanning👷ListLocationsForAlertListing instanceof Operator\SecretScanning\ListLocationsForAlertListing === false) {
            $this->secretScanning👷ListLocationsForAlertListing = new Operator\SecretScanning\ListLocationsForAlertListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations());
        }

        return $this->secretScanning👷ListLocationsForAlertListing;
    }

    public function securityAdvisories👷ListRepositoryAdvisories(): Operator\SecurityAdvisories\ListRepositoryAdvisories
    {
        if ($this->securityAdvisories👷ListRepositoryAdvisories instanceof Operator\SecurityAdvisories\ListRepositoryAdvisories === false) {
            $this->securityAdvisories👷ListRepositoryAdvisories = new Operator\SecurityAdvisories\ListRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷ListRepositoryAdvisories;
    }

    public function securityAdvisories👷CreateRepositoryAdvisory(): Operator\SecurityAdvisories\CreateRepositoryAdvisory
    {
        if ($this->securityAdvisories👷CreateRepositoryAdvisory instanceof Operator\SecurityAdvisories\CreateRepositoryAdvisory === false) {
            $this->securityAdvisories👷CreateRepositoryAdvisory = new Operator\SecurityAdvisories\CreateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->securityAdvisories👷CreateRepositoryAdvisory;
    }

    public function securityAdvisories👷CreatePrivateVulnerabilityReport(): Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport
    {
        if ($this->securityAdvisories👷CreatePrivateVulnerabilityReport instanceof Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport === false) {
            $this->securityAdvisories👷CreatePrivateVulnerabilityReport = new Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports());
        }

        return $this->securityAdvisories👷CreatePrivateVulnerabilityReport;
    }

    public function securityAdvisories👷GetRepositoryAdvisory(): Operator\SecurityAdvisories\GetRepositoryAdvisory
    {
        if ($this->securityAdvisories👷GetRepositoryAdvisory instanceof Operator\SecurityAdvisories\GetRepositoryAdvisory === false) {
            $this->securityAdvisories👷GetRepositoryAdvisory = new Operator\SecurityAdvisories\GetRepositoryAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->securityAdvisories👷GetRepositoryAdvisory;
    }

    public function securityAdvisories👷UpdateRepositoryAdvisory(): Operator\SecurityAdvisories\UpdateRepositoryAdvisory
    {
        if ($this->securityAdvisories👷UpdateRepositoryAdvisory instanceof Operator\SecurityAdvisories\UpdateRepositoryAdvisory === false) {
            $this->securityAdvisories👷UpdateRepositoryAdvisory = new Operator\SecurityAdvisories\UpdateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->securityAdvisories👷UpdateRepositoryAdvisory;
    }

    public function securityAdvisories👷CreateRepositoryAdvisoryCveRequest(): Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest
    {
        if ($this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest instanceof Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest === false) {
            $this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest = new Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve());
        }

        return $this->securityAdvisories👷CreateRepositoryAdvisoryCveRequest;
    }

    public function activity👷ListStargazersForRepo(): Operator\Activity\ListStargazersForRepo
    {
        if ($this->activity👷ListStargazersForRepo instanceof Operator\Activity\ListStargazersForRepo === false) {
            $this->activity👷ListStargazersForRepo = new Operator\Activity\ListStargazersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers());
        }

        return $this->activity👷ListStargazersForRepo;
    }

    public function repos👷GetCodeFrequencyStats(): Operator\Repos\GetCodeFrequencyStats
    {
        if ($this->repos👷GetCodeFrequencyStats instanceof Operator\Repos\GetCodeFrequencyStats === false) {
            $this->repos👷GetCodeFrequencyStats = new Operator\Repos\GetCodeFrequencyStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency());
        }

        return $this->repos👷GetCodeFrequencyStats;
    }

    public function repos👷GetCommitActivityStats(): Operator\Repos\GetCommitActivityStats
    {
        if ($this->repos👷GetCommitActivityStats instanceof Operator\Repos\GetCommitActivityStats === false) {
            $this->repos👷GetCommitActivityStats = new Operator\Repos\GetCommitActivityStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity());
        }

        return $this->repos👷GetCommitActivityStats;
    }

    public function repos👷GetContributorsStats(): Operator\Repos\GetContributorsStats
    {
        if ($this->repos👷GetContributorsStats instanceof Operator\Repos\GetContributorsStats === false) {
            $this->repos👷GetContributorsStats = new Operator\Repos\GetContributorsStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors());
        }

        return $this->repos👷GetContributorsStats;
    }

    public function repos👷GetParticipationStats(): Operator\Repos\GetParticipationStats
    {
        if ($this->repos👷GetParticipationStats instanceof Operator\Repos\GetParticipationStats === false) {
            $this->repos👷GetParticipationStats = new Operator\Repos\GetParticipationStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation());
        }

        return $this->repos👷GetParticipationStats;
    }

    public function repos👷GetPunchCardStats(): Operator\Repos\GetPunchCardStats
    {
        if ($this->repos👷GetPunchCardStats instanceof Operator\Repos\GetPunchCardStats === false) {
            $this->repos👷GetPunchCardStats = new Operator\Repos\GetPunchCardStats($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard());
        }

        return $this->repos👷GetPunchCardStats;
    }

    public function repos👷CreateCommitStatus(): Operator\Repos\CreateCommitStatus
    {
        if ($this->repos👷CreateCommitStatus instanceof Operator\Repos\CreateCommitStatus === false) {
            $this->repos👷CreateCommitStatus = new Operator\Repos\CreateCommitStatus($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha());
        }

        return $this->repos👷CreateCommitStatus;
    }

    public function activity👷ListWatchersForRepo(): Operator\Activity\ListWatchersForRepo
    {
        if ($this->activity👷ListWatchersForRepo instanceof Operator\Activity\ListWatchersForRepo === false) {
            $this->activity👷ListWatchersForRepo = new Operator\Activity\ListWatchersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepo;
    }

    public function activity👷ListWatchersForRepoListing(): Operator\Activity\ListWatchersForRepoListing
    {
        if ($this->activity👷ListWatchersForRepoListing instanceof Operator\Activity\ListWatchersForRepoListing === false) {
            $this->activity👷ListWatchersForRepoListing = new Operator\Activity\ListWatchersForRepoListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers());
        }

        return $this->activity👷ListWatchersForRepoListing;
    }

    public function activity👷GetRepoSubscription(): Operator\Activity\GetRepoSubscription
    {
        if ($this->activity👷GetRepoSubscription instanceof Operator\Activity\GetRepoSubscription === false) {
            $this->activity👷GetRepoSubscription = new Operator\Activity\GetRepoSubscription($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷GetRepoSubscription;
    }

    public function activity👷SetRepoSubscription(): Operator\Activity\SetRepoSubscription
    {
        if ($this->activity👷SetRepoSubscription instanceof Operator\Activity\SetRepoSubscription === false) {
            $this->activity👷SetRepoSubscription = new Operator\Activity\SetRepoSubscription($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription());
        }

        return $this->activity👷SetRepoSubscription;
    }

    public function activity👷DeleteRepoSubscription(): Operator\Activity\DeleteRepoSubscription
    {
        if ($this->activity👷DeleteRepoSubscription instanceof Operator\Activity\DeleteRepoSubscription === false) {
            $this->activity👷DeleteRepoSubscription = new Operator\Activity\DeleteRepoSubscription($this->browser, $this->authentication);
        }

        return $this->activity👷DeleteRepoSubscription;
    }

    public function repos👷ListTags(): Operator\Repos\ListTags
    {
        if ($this->repos👷ListTags instanceof Operator\Repos\ListTags === false) {
            $this->repos👷ListTags = new Operator\Repos\ListTags($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTags;
    }

    public function repos👷ListTagsListing(): Operator\Repos\ListTagsListing
    {
        if ($this->repos👷ListTagsListing instanceof Operator\Repos\ListTagsListing === false) {
            $this->repos👷ListTagsListing = new Operator\Repos\ListTagsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags());
        }

        return $this->repos👷ListTagsListing;
    }

    public function repos👷ListTagProtection(): Operator\Repos\ListTagProtection
    {
        if ($this->repos👷ListTagProtection instanceof Operator\Repos\ListTagProtection === false) {
            $this->repos👷ListTagProtection = new Operator\Repos\ListTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->repos👷ListTagProtection;
    }

    public function repos👷CreateTagProtection(): Operator\Repos\CreateTagProtection
    {
        if ($this->repos👷CreateTagProtection instanceof Operator\Repos\CreateTagProtection === false) {
            $this->repos👷CreateTagProtection = new Operator\Repos\CreateTagProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection());
        }

        return $this->repos👷CreateTagProtection;
    }

    public function repos👷DeleteTagProtection(): Operator\Repos\DeleteTagProtection
    {
        if ($this->repos👷DeleteTagProtection instanceof Operator\Repos\DeleteTagProtection === false) {
            $this->repos👷DeleteTagProtection = new Operator\Repos\DeleteTagProtection($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId());
        }

        return $this->repos👷DeleteTagProtection;
    }

    public function repos👷DownloadTarballArchive(): Operator\Repos\DownloadTarballArchive
    {
        if ($this->repos👷DownloadTarballArchive instanceof Operator\Repos\DownloadTarballArchive === false) {
            $this->repos👷DownloadTarballArchive = new Operator\Repos\DownloadTarballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchive;
    }

    public function repos👷DownloadTarballArchiveStreaming(): Operator\Repos\DownloadTarballArchiveStreaming
    {
        if ($this->repos👷DownloadTarballArchiveStreaming instanceof Operator\Repos\DownloadTarballArchiveStreaming === false) {
            $this->repos👷DownloadTarballArchiveStreaming = new Operator\Repos\DownloadTarballArchiveStreaming($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadTarballArchiveStreaming;
    }

    public function repos👷ListTeams(): Operator\Repos\ListTeams
    {
        if ($this->repos👷ListTeams instanceof Operator\Repos\ListTeams === false) {
            $this->repos👷ListTeams = new Operator\Repos\ListTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeams;
    }

    public function repos👷ListTeamsListing(): Operator\Repos\ListTeamsListing
    {
        if ($this->repos👷ListTeamsListing instanceof Operator\Repos\ListTeamsListing === false) {
            $this->repos👷ListTeamsListing = new Operator\Repos\ListTeamsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams());
        }

        return $this->repos👷ListTeamsListing;
    }

    public function repos👷GetAllTopics(): Operator\Repos\GetAllTopics
    {
        if ($this->repos👷GetAllTopics instanceof Operator\Repos\GetAllTopics === false) {
            $this->repos👷GetAllTopics = new Operator\Repos\GetAllTopics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷GetAllTopics;
    }

    public function repos👷ReplaceAllTopics(): Operator\Repos\ReplaceAllTopics
    {
        if ($this->repos👷ReplaceAllTopics instanceof Operator\Repos\ReplaceAllTopics === false) {
            $this->repos👷ReplaceAllTopics = new Operator\Repos\ReplaceAllTopics($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics());
        }

        return $this->repos👷ReplaceAllTopics;
    }

    public function repos👷GetClones(): Operator\Repos\GetClones
    {
        if ($this->repos👷GetClones instanceof Operator\Repos\GetClones === false) {
            $this->repos👷GetClones = new Operator\Repos\GetClones($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones());
        }

        return $this->repos👷GetClones;
    }

    public function repos👷GetTopPaths(): Operator\Repos\GetTopPaths
    {
        if ($this->repos👷GetTopPaths instanceof Operator\Repos\GetTopPaths === false) {
            $this->repos👷GetTopPaths = new Operator\Repos\GetTopPaths($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths());
        }

        return $this->repos👷GetTopPaths;
    }

    public function repos👷GetTopReferrers(): Operator\Repos\GetTopReferrers
    {
        if ($this->repos👷GetTopReferrers instanceof Operator\Repos\GetTopReferrers === false) {
            $this->repos👷GetTopReferrers = new Operator\Repos\GetTopReferrers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers());
        }

        return $this->repos👷GetTopReferrers;
    }

    public function repos👷GetViews(): Operator\Repos\GetViews
    {
        if ($this->repos👷GetViews instanceof Operator\Repos\GetViews === false) {
            $this->repos👷GetViews = new Operator\Repos\GetViews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views());
        }

        return $this->repos👷GetViews;
    }

    public function repos👷Transfer(): Operator\Repos\Transfer
    {
        if ($this->repos👷Transfer instanceof Operator\Repos\Transfer === false) {
            $this->repos👷Transfer = new Operator\Repos\Transfer($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer());
        }

        return $this->repos👷Transfer;
    }

    public function repos👷CheckVulnerabilityAlerts(): Operator\Repos\CheckVulnerabilityAlerts
    {
        if ($this->repos👷CheckVulnerabilityAlerts instanceof Operator\Repos\CheckVulnerabilityAlerts === false) {
            $this->repos👷CheckVulnerabilityAlerts = new Operator\Repos\CheckVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷CheckVulnerabilityAlerts;
    }

    public function repos👷EnableVulnerabilityAlerts(): Operator\Repos\EnableVulnerabilityAlerts
    {
        if ($this->repos👷EnableVulnerabilityAlerts instanceof Operator\Repos\EnableVulnerabilityAlerts === false) {
            $this->repos👷EnableVulnerabilityAlerts = new Operator\Repos\EnableVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷EnableVulnerabilityAlerts;
    }

    public function repos👷DisableVulnerabilityAlerts(): Operator\Repos\DisableVulnerabilityAlerts
    {
        if ($this->repos👷DisableVulnerabilityAlerts instanceof Operator\Repos\DisableVulnerabilityAlerts === false) {
            $this->repos👷DisableVulnerabilityAlerts = new Operator\Repos\DisableVulnerabilityAlerts($this->browser, $this->authentication);
        }

        return $this->repos👷DisableVulnerabilityAlerts;
    }

    public function repos👷DownloadZipballArchive(): Operator\Repos\DownloadZipballArchive
    {
        if ($this->repos👷DownloadZipballArchive instanceof Operator\Repos\DownloadZipballArchive === false) {
            $this->repos👷DownloadZipballArchive = new Operator\Repos\DownloadZipballArchive($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchive;
    }

    public function repos👷DownloadZipballArchiveStreaming(): Operator\Repos\DownloadZipballArchiveStreaming
    {
        if ($this->repos👷DownloadZipballArchiveStreaming instanceof Operator\Repos\DownloadZipballArchiveStreaming === false) {
            $this->repos👷DownloadZipballArchiveStreaming = new Operator\Repos\DownloadZipballArchiveStreaming($this->browser, $this->authentication);
        }

        return $this->repos👷DownloadZipballArchiveStreaming;
    }

    public function repos👷CreateUsingTemplate(): Operator\Repos\CreateUsingTemplate
    {
        if ($this->repos👷CreateUsingTemplate instanceof Operator\Repos\CreateUsingTemplate === false) {
            $this->repos👷CreateUsingTemplate = new Operator\Repos\CreateUsingTemplate($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate());
        }

        return $this->repos👷CreateUsingTemplate;
    }

    public function repos👷ListPublic(): Operator\Repos\ListPublic
    {
        if ($this->repos👷ListPublic instanceof Operator\Repos\ListPublic === false) {
            $this->repos👷ListPublic = new Operator\Repos\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories());
        }

        return $this->repos👷ListPublic;
    }

    public function actions👷ListEnvironmentSecrets(): Operator\Actions\ListEnvironmentSecrets
    {
        if ($this->actions👷ListEnvironmentSecrets instanceof Operator\Actions\ListEnvironmentSecrets === false) {
            $this->actions👷ListEnvironmentSecrets = new Operator\Actions\ListEnvironmentSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets());
        }

        return $this->actions👷ListEnvironmentSecrets;
    }

    public function actions👷GetEnvironmentPublicKey(): Operator\Actions\GetEnvironmentPublicKey
    {
        if ($this->actions👷GetEnvironmentPublicKey instanceof Operator\Actions\GetEnvironmentPublicKey === false) {
            $this->actions👷GetEnvironmentPublicKey = new Operator\Actions\GetEnvironmentPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey());
        }

        return $this->actions👷GetEnvironmentPublicKey;
    }

    public function actions👷GetEnvironmentSecret(): Operator\Actions\GetEnvironmentSecret
    {
        if ($this->actions👷GetEnvironmentSecret instanceof Operator\Actions\GetEnvironmentSecret === false) {
            $this->actions👷GetEnvironmentSecret = new Operator\Actions\GetEnvironmentSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->actions👷GetEnvironmentSecret;
    }

    public function actions👷CreateOrUpdateEnvironmentSecret(): Operator\Actions\CreateOrUpdateEnvironmentSecret
    {
        if ($this->actions👷CreateOrUpdateEnvironmentSecret instanceof Operator\Actions\CreateOrUpdateEnvironmentSecret === false) {
            $this->actions👷CreateOrUpdateEnvironmentSecret = new Operator\Actions\CreateOrUpdateEnvironmentSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->actions👷CreateOrUpdateEnvironmentSecret;
    }

    public function actions👷DeleteEnvironmentSecret(): Operator\Actions\DeleteEnvironmentSecret
    {
        if ($this->actions👷DeleteEnvironmentSecret instanceof Operator\Actions\DeleteEnvironmentSecret === false) {
            $this->actions👷DeleteEnvironmentSecret = new Operator\Actions\DeleteEnvironmentSecret($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteEnvironmentSecret;
    }

    public function actions👷ListEnvironmentVariables(): Operator\Actions\ListEnvironmentVariables
    {
        if ($this->actions👷ListEnvironmentVariables instanceof Operator\Actions\ListEnvironmentVariables === false) {
            $this->actions👷ListEnvironmentVariables = new Operator\Actions\ListEnvironmentVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->actions👷ListEnvironmentVariables;
    }

    public function actions👷CreateEnvironmentVariable(): Operator\Actions\CreateEnvironmentVariable
    {
        if ($this->actions👷CreateEnvironmentVariable instanceof Operator\Actions\CreateEnvironmentVariable === false) {
            $this->actions👷CreateEnvironmentVariable = new Operator\Actions\CreateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->actions👷CreateEnvironmentVariable;
    }

    public function actions👷GetEnvironmentVariable(): Operator\Actions\GetEnvironmentVariable
    {
        if ($this->actions👷GetEnvironmentVariable instanceof Operator\Actions\GetEnvironmentVariable === false) {
            $this->actions👷GetEnvironmentVariable = new Operator\Actions\GetEnvironmentVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables🌀Name());
        }

        return $this->actions👷GetEnvironmentVariable;
    }

    public function actions👷DeleteEnvironmentVariable(): Operator\Actions\DeleteEnvironmentVariable
    {
        if ($this->actions👷DeleteEnvironmentVariable instanceof Operator\Actions\DeleteEnvironmentVariable === false) {
            $this->actions👷DeleteEnvironmentVariable = new Operator\Actions\DeleteEnvironmentVariable($this->browser, $this->authentication);
        }

        return $this->actions👷DeleteEnvironmentVariable;
    }

    public function actions👷UpdateEnvironmentVariable(): Operator\Actions\UpdateEnvironmentVariable
    {
        if ($this->actions👷UpdateEnvironmentVariable instanceof Operator\Actions\UpdateEnvironmentVariable === false) {
            $this->actions👷UpdateEnvironmentVariable = new Operator\Actions\UpdateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator);
        }

        return $this->actions👷UpdateEnvironmentVariable;
    }

    public function search👷Code(): Operator\Search\Code
    {
        if ($this->search👷Code instanceof Operator\Search\Code === false) {
            $this->search👷Code = new Operator\Search\Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Code());
        }

        return $this->search👷Code;
    }

    public function search👷Commits(): Operator\Search\Commits
    {
        if ($this->search👷Commits instanceof Operator\Search\Commits === false) {
            $this->search👷Commits = new Operator\Search\Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Commits());
        }

        return $this->search👷Commits;
    }

    public function search👷IssuesAndPullRequests(): Operator\Search\IssuesAndPullRequests
    {
        if ($this->search👷IssuesAndPullRequests instanceof Operator\Search\IssuesAndPullRequests === false) {
            $this->search👷IssuesAndPullRequests = new Operator\Search\IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Issues());
        }

        return $this->search👷IssuesAndPullRequests;
    }

    public function search👷Labels(): Operator\Search\Labels
    {
        if ($this->search👷Labels instanceof Operator\Search\Labels === false) {
            $this->search👷Labels = new Operator\Search\Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Labels());
        }

        return $this->search👷Labels;
    }

    public function search👷Repos(): Operator\Search\Repos
    {
        if ($this->search👷Repos instanceof Operator\Search\Repos === false) {
            $this->search👷Repos = new Operator\Search\Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories());
        }

        return $this->search👷Repos;
    }

    public function search👷Topics(): Operator\Search\Topics
    {
        if ($this->search👷Topics instanceof Operator\Search\Topics === false) {
            $this->search👷Topics = new Operator\Search\Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Topics());
        }

        return $this->search👷Topics;
    }

    public function search👷Users(): Operator\Search\Users
    {
        if ($this->search👷Users instanceof Operator\Search\Users === false) {
            $this->search👷Users = new Operator\Search\Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Users());
        }

        return $this->search👷Users;
    }

    public function teams👷GetLegacy(): Operator\Teams\GetLegacy
    {
        if ($this->teams👷GetLegacy instanceof Operator\Teams\GetLegacy === false) {
            $this->teams👷GetLegacy = new Operator\Teams\GetLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷GetLegacy;
    }

    public function teams👷DeleteLegacy(): Operator\Teams\DeleteLegacy
    {
        if ($this->teams👷DeleteLegacy instanceof Operator\Teams\DeleteLegacy === false) {
            $this->teams👷DeleteLegacy = new Operator\Teams\DeleteLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷DeleteLegacy;
    }

    public function teams👷UpdateLegacy(): Operator\Teams\UpdateLegacy
    {
        if ($this->teams👷UpdateLegacy instanceof Operator\Teams\UpdateLegacy === false) {
            $this->teams👷UpdateLegacy = new Operator\Teams\UpdateLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->teams👷UpdateLegacy;
    }

    public function teams👷ListDiscussionsLegacy(): Operator\Teams\ListDiscussionsLegacy
    {
        if ($this->teams👷ListDiscussionsLegacy instanceof Operator\Teams\ListDiscussionsLegacy === false) {
            $this->teams👷ListDiscussionsLegacy = new Operator\Teams\ListDiscussionsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacy;
    }

    public function teams👷ListDiscussionsLegacyListing(): Operator\Teams\ListDiscussionsLegacyListing
    {
        if ($this->teams👷ListDiscussionsLegacyListing instanceof Operator\Teams\ListDiscussionsLegacyListing === false) {
            $this->teams👷ListDiscussionsLegacyListing = new Operator\Teams\ListDiscussionsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷ListDiscussionsLegacyListing;
    }

    public function teams👷CreateDiscussionLegacy(): Operator\Teams\CreateDiscussionLegacy
    {
        if ($this->teams👷CreateDiscussionLegacy instanceof Operator\Teams\CreateDiscussionLegacy === false) {
            $this->teams👷CreateDiscussionLegacy = new Operator\Teams\CreateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->teams👷CreateDiscussionLegacy;
    }

    public function teams👷GetDiscussionLegacy(): Operator\Teams\GetDiscussionLegacy
    {
        if ($this->teams👷GetDiscussionLegacy instanceof Operator\Teams\GetDiscussionLegacy === false) {
            $this->teams👷GetDiscussionLegacy = new Operator\Teams\GetDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷GetDiscussionLegacy;
    }

    public function teams👷DeleteDiscussionLegacy(): Operator\Teams\DeleteDiscussionLegacy
    {
        if ($this->teams👷DeleteDiscussionLegacy instanceof Operator\Teams\DeleteDiscussionLegacy === false) {
            $this->teams👷DeleteDiscussionLegacy = new Operator\Teams\DeleteDiscussionLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionLegacy;
    }

    public function teams👷UpdateDiscussionLegacy(): Operator\Teams\UpdateDiscussionLegacy
    {
        if ($this->teams👷UpdateDiscussionLegacy instanceof Operator\Teams\UpdateDiscussionLegacy === false) {
            $this->teams👷UpdateDiscussionLegacy = new Operator\Teams\UpdateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->teams👷UpdateDiscussionLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacy(): Operator\Teams\ListDiscussionCommentsLegacy
    {
        if ($this->teams👷ListDiscussionCommentsLegacy instanceof Operator\Teams\ListDiscussionCommentsLegacy === false) {
            $this->teams👷ListDiscussionCommentsLegacy = new Operator\Teams\ListDiscussionCommentsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacy;
    }

    public function teams👷ListDiscussionCommentsLegacyListing(): Operator\Teams\ListDiscussionCommentsLegacyListing
    {
        if ($this->teams👷ListDiscussionCommentsLegacyListing instanceof Operator\Teams\ListDiscussionCommentsLegacyListing === false) {
            $this->teams👷ListDiscussionCommentsLegacyListing = new Operator\Teams\ListDiscussionCommentsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷ListDiscussionCommentsLegacyListing;
    }

    public function teams👷CreateDiscussionCommentLegacy(): Operator\Teams\CreateDiscussionCommentLegacy
    {
        if ($this->teams👷CreateDiscussionCommentLegacy instanceof Operator\Teams\CreateDiscussionCommentLegacy === false) {
            $this->teams👷CreateDiscussionCommentLegacy = new Operator\Teams\CreateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->teams👷CreateDiscussionCommentLegacy;
    }

    public function teams👷GetDiscussionCommentLegacy(): Operator\Teams\GetDiscussionCommentLegacy
    {
        if ($this->teams👷GetDiscussionCommentLegacy instanceof Operator\Teams\GetDiscussionCommentLegacy === false) {
            $this->teams👷GetDiscussionCommentLegacy = new Operator\Teams\GetDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷GetDiscussionCommentLegacy;
    }

    public function teams👷DeleteDiscussionCommentLegacy(): Operator\Teams\DeleteDiscussionCommentLegacy
    {
        if ($this->teams👷DeleteDiscussionCommentLegacy instanceof Operator\Teams\DeleteDiscussionCommentLegacy === false) {
            $this->teams👷DeleteDiscussionCommentLegacy = new Operator\Teams\DeleteDiscussionCommentLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷DeleteDiscussionCommentLegacy;
    }

    public function teams👷UpdateDiscussionCommentLegacy(): Operator\Teams\UpdateDiscussionCommentLegacy
    {
        if ($this->teams👷UpdateDiscussionCommentLegacy instanceof Operator\Teams\UpdateDiscussionCommentLegacy === false) {
            $this->teams👷UpdateDiscussionCommentLegacy = new Operator\Teams\UpdateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->teams👷UpdateDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionCommentLegacy(): Operator\Reactions\ListForTeamDiscussionCommentLegacy
    {
        if ($this->reactions👷ListForTeamDiscussionCommentLegacy instanceof Operator\Reactions\ListForTeamDiscussionCommentLegacy === false) {
            $this->reactions👷ListForTeamDiscussionCommentLegacy = new Operator\Reactions\ListForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionCommentLegacyListing(): Operator\Reactions\ListForTeamDiscussionCommentLegacyListing
    {
        if ($this->reactions👷ListForTeamDiscussionCommentLegacyListing instanceof Operator\Reactions\ListForTeamDiscussionCommentLegacyListing === false) {
            $this->reactions👷ListForTeamDiscussionCommentLegacyListing = new Operator\Reactions\ListForTeamDiscussionCommentLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionCommentLegacyListing;
    }

    public function reactions👷CreateForTeamDiscussionCommentLegacy(): Operator\Reactions\CreateForTeamDiscussionCommentLegacy
    {
        if ($this->reactions👷CreateForTeamDiscussionCommentLegacy instanceof Operator\Reactions\CreateForTeamDiscussionCommentLegacy === false) {
            $this->reactions👷CreateForTeamDiscussionCommentLegacy = new Operator\Reactions\CreateForTeamDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionCommentLegacy;
    }

    public function reactions👷ListForTeamDiscussionLegacy(): Operator\Reactions\ListForTeamDiscussionLegacy
    {
        if ($this->reactions👷ListForTeamDiscussionLegacy instanceof Operator\Reactions\ListForTeamDiscussionLegacy === false) {
            $this->reactions👷ListForTeamDiscussionLegacy = new Operator\Reactions\ListForTeamDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionLegacy;
    }

    public function reactions👷ListForTeamDiscussionLegacyListing(): Operator\Reactions\ListForTeamDiscussionLegacyListing
    {
        if ($this->reactions👷ListForTeamDiscussionLegacyListing instanceof Operator\Reactions\ListForTeamDiscussionLegacyListing === false) {
            $this->reactions👷ListForTeamDiscussionLegacyListing = new Operator\Reactions\ListForTeamDiscussionLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷ListForTeamDiscussionLegacyListing;
    }

    public function reactions👷CreateForTeamDiscussionLegacy(): Operator\Reactions\CreateForTeamDiscussionLegacy
    {
        if ($this->reactions👷CreateForTeamDiscussionLegacy instanceof Operator\Reactions\CreateForTeamDiscussionLegacy === false) {
            $this->reactions👷CreateForTeamDiscussionLegacy = new Operator\Reactions\CreateForTeamDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions());
        }

        return $this->reactions👷CreateForTeamDiscussionLegacy;
    }

    public function teams👷ListPendingInvitationsLegacy(): Operator\Teams\ListPendingInvitationsLegacy
    {
        if ($this->teams👷ListPendingInvitationsLegacy instanceof Operator\Teams\ListPendingInvitationsLegacy === false) {
            $this->teams👷ListPendingInvitationsLegacy = new Operator\Teams\ListPendingInvitationsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsLegacy;
    }

    public function teams👷ListPendingInvitationsLegacyListing(): Operator\Teams\ListPendingInvitationsLegacyListing
    {
        if ($this->teams👷ListPendingInvitationsLegacyListing instanceof Operator\Teams\ListPendingInvitationsLegacyListing === false) {
            $this->teams👷ListPendingInvitationsLegacyListing = new Operator\Teams\ListPendingInvitationsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->teams👷ListPendingInvitationsLegacyListing;
    }

    public function teams👷ListMembersLegacy(): Operator\Teams\ListMembersLegacy
    {
        if ($this->teams👷ListMembersLegacy instanceof Operator\Teams\ListMembersLegacy === false) {
            $this->teams👷ListMembersLegacy = new Operator\Teams\ListMembersLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacy;
    }

    public function teams👷ListMembersLegacyListing(): Operator\Teams\ListMembersLegacyListing
    {
        if ($this->teams👷ListMembersLegacyListing instanceof Operator\Teams\ListMembersLegacyListing === false) {
            $this->teams👷ListMembersLegacyListing = new Operator\Teams\ListMembersLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->teams👷ListMembersLegacyListing;
    }

    public function teams👷GetMemberLegacy(): Operator\Teams\GetMemberLegacy
    {
        if ($this->teams👷GetMemberLegacy instanceof Operator\Teams\GetMemberLegacy === false) {
            $this->teams👷GetMemberLegacy = new Operator\Teams\GetMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷GetMemberLegacy;
    }

    public function teams👷AddMemberLegacy(): Operator\Teams\AddMemberLegacy
    {
        if ($this->teams👷AddMemberLegacy instanceof Operator\Teams\AddMemberLegacy === false) {
            $this->teams👷AddMemberLegacy = new Operator\Teams\AddMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->teams👷AddMemberLegacy;
    }

    public function teams👷RemoveMemberLegacy(): Operator\Teams\RemoveMemberLegacy
    {
        if ($this->teams👷RemoveMemberLegacy instanceof Operator\Teams\RemoveMemberLegacy === false) {
            $this->teams👷RemoveMemberLegacy = new Operator\Teams\RemoveMemberLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMemberLegacy;
    }

    public function teams👷GetMembershipForUserLegacy(): Operator\Teams\GetMembershipForUserLegacy
    {
        if ($this->teams👷GetMembershipForUserLegacy instanceof Operator\Teams\GetMembershipForUserLegacy === false) {
            $this->teams👷GetMembershipForUserLegacy = new Operator\Teams\GetMembershipForUserLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷GetMembershipForUserLegacy;
    }

    public function teams👷AddOrUpdateMembershipForUserLegacy(): Operator\Teams\AddOrUpdateMembershipForUserLegacy
    {
        if ($this->teams👷AddOrUpdateMembershipForUserLegacy instanceof Operator\Teams\AddOrUpdateMembershipForUserLegacy === false) {
            $this->teams👷AddOrUpdateMembershipForUserLegacy = new Operator\Teams\AddOrUpdateMembershipForUserLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->teams👷AddOrUpdateMembershipForUserLegacy;
    }

    public function teams👷RemoveMembershipForUserLegacy(): Operator\Teams\RemoveMembershipForUserLegacy
    {
        if ($this->teams👷RemoveMembershipForUserLegacy instanceof Operator\Teams\RemoveMembershipForUserLegacy === false) {
            $this->teams👷RemoveMembershipForUserLegacy = new Operator\Teams\RemoveMembershipForUserLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveMembershipForUserLegacy;
    }

    public function teams👷ListProjectsLegacy(): Operator\Teams\ListProjectsLegacy
    {
        if ($this->teams👷ListProjectsLegacy instanceof Operator\Teams\ListProjectsLegacy === false) {
            $this->teams👷ListProjectsLegacy = new Operator\Teams\ListProjectsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacy;
    }

    public function teams👷ListProjectsLegacyListing(): Operator\Teams\ListProjectsLegacyListing
    {
        if ($this->teams👷ListProjectsLegacyListing instanceof Operator\Teams\ListProjectsLegacyListing === false) {
            $this->teams👷ListProjectsLegacyListing = new Operator\Teams\ListProjectsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->teams👷ListProjectsLegacyListing;
    }

    public function teams👷CheckPermissionsForProjectLegacy(): Operator\Teams\CheckPermissionsForProjectLegacy
    {
        if ($this->teams👷CheckPermissionsForProjectLegacy instanceof Operator\Teams\CheckPermissionsForProjectLegacy === false) {
            $this->teams👷CheckPermissionsForProjectLegacy = new Operator\Teams\CheckPermissionsForProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷CheckPermissionsForProjectLegacy;
    }

    public function teams👷AddOrUpdateProjectPermissionsLegacy(): Operator\Teams\AddOrUpdateProjectPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateProjectPermissionsLegacy instanceof Operator\Teams\AddOrUpdateProjectPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateProjectPermissionsLegacy = new Operator\Teams\AddOrUpdateProjectPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷AddOrUpdateProjectPermissionsLegacy;
    }

    public function teams👷RemoveProjectLegacy(): Operator\Teams\RemoveProjectLegacy
    {
        if ($this->teams👷RemoveProjectLegacy instanceof Operator\Teams\RemoveProjectLegacy === false) {
            $this->teams👷RemoveProjectLegacy = new Operator\Teams\RemoveProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->teams👷RemoveProjectLegacy;
    }

    public function teams👷ListReposLegacy(): Operator\Teams\ListReposLegacy
    {
        if ($this->teams👷ListReposLegacy instanceof Operator\Teams\ListReposLegacy === false) {
            $this->teams👷ListReposLegacy = new Operator\Teams\ListReposLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacy;
    }

    public function teams👷ListReposLegacyListing(): Operator\Teams\ListReposLegacyListing
    {
        if ($this->teams👷ListReposLegacyListing instanceof Operator\Teams\ListReposLegacyListing === false) {
            $this->teams👷ListReposLegacyListing = new Operator\Teams\ListReposLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->teams👷ListReposLegacyListing;
    }

    public function teams👷CheckPermissionsForRepoLegacy(): Operator\Teams\CheckPermissionsForRepoLegacy
    {
        if ($this->teams👷CheckPermissionsForRepoLegacy instanceof Operator\Teams\CheckPermissionsForRepoLegacy === false) {
            $this->teams👷CheckPermissionsForRepoLegacy = new Operator\Teams\CheckPermissionsForRepoLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷CheckPermissionsForRepoLegacy;
    }

    public function teams👷AddOrUpdateRepoPermissionsLegacy(): Operator\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        if ($this->teams👷AddOrUpdateRepoPermissionsLegacy instanceof Operator\Teams\AddOrUpdateRepoPermissionsLegacy === false) {
            $this->teams👷AddOrUpdateRepoPermissionsLegacy = new Operator\Teams\AddOrUpdateRepoPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->teams👷AddOrUpdateRepoPermissionsLegacy;
    }

    public function teams👷RemoveRepoLegacy(): Operator\Teams\RemoveRepoLegacy
    {
        if ($this->teams👷RemoveRepoLegacy instanceof Operator\Teams\RemoveRepoLegacy === false) {
            $this->teams👷RemoveRepoLegacy = new Operator\Teams\RemoveRepoLegacy($this->browser, $this->authentication);
        }

        return $this->teams👷RemoveRepoLegacy;
    }

    public function teams👷ListChildLegacy(): Operator\Teams\ListChildLegacy
    {
        if ($this->teams👷ListChildLegacy instanceof Operator\Teams\ListChildLegacy === false) {
            $this->teams👷ListChildLegacy = new Operator\Teams\ListChildLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacy;
    }

    public function teams👷ListChildLegacyListing(): Operator\Teams\ListChildLegacyListing
    {
        if ($this->teams👷ListChildLegacyListing instanceof Operator\Teams\ListChildLegacyListing === false) {
            $this->teams👷ListChildLegacyListing = new Operator\Teams\ListChildLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->teams👷ListChildLegacyListing;
    }

    public function users👷GetAuthenticated(): Operator\Users\GetAuthenticated
    {
        if ($this->users👷GetAuthenticated instanceof Operator\Users\GetAuthenticated === false) {
            $this->users👷GetAuthenticated = new Operator\Users\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷GetAuthenticated;
    }

    public function users👷UpdateAuthenticated(): Operator\Users\UpdateAuthenticated
    {
        if ($this->users👷UpdateAuthenticated instanceof Operator\Users\UpdateAuthenticated === false) {
            $this->users👷UpdateAuthenticated = new Operator\Users\UpdateAuthenticated($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User());
        }

        return $this->users👷UpdateAuthenticated;
    }

    public function users👷ListBlockedByAuthenticatedUser(): Operator\Users\ListBlockedByAuthenticatedUser
    {
        if ($this->users👷ListBlockedByAuthenticatedUser instanceof Operator\Users\ListBlockedByAuthenticatedUser === false) {
            $this->users👷ListBlockedByAuthenticatedUser = new Operator\Users\ListBlockedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());
        }

        return $this->users👷ListBlockedByAuthenticatedUser;
    }

    public function users👷ListBlockedByAuthenticatedUserListing(): Operator\Users\ListBlockedByAuthenticatedUserListing
    {
        if ($this->users👷ListBlockedByAuthenticatedUserListing instanceof Operator\Users\ListBlockedByAuthenticatedUserListing === false) {
            $this->users👷ListBlockedByAuthenticatedUserListing = new Operator\Users\ListBlockedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks());
        }

        return $this->users👷ListBlockedByAuthenticatedUserListing;
    }

    public function users👷CheckBlocked(): Operator\Users\CheckBlocked
    {
        if ($this->users👷CheckBlocked instanceof Operator\Users\CheckBlocked === false) {
            $this->users👷CheckBlocked = new Operator\Users\CheckBlocked($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷CheckBlocked;
    }

    public function users👷Block(): Operator\Users\Block
    {
        if ($this->users👷Block instanceof Operator\Users\Block === false) {
            $this->users👷Block = new Operator\Users\Block($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷Block;
    }

    public function users👷Unblock(): Operator\Users\Unblock
    {
        if ($this->users👷Unblock instanceof Operator\Users\Unblock === false) {
            $this->users👷Unblock = new Operator\Users\Unblock($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Blocks🌀Username());
        }

        return $this->users👷Unblock;
    }

    public function codespaces👷ListForAuthenticatedUser(): Operator\Codespaces\ListForAuthenticatedUser
    {
        if ($this->codespaces👷ListForAuthenticatedUser instanceof Operator\Codespaces\ListForAuthenticatedUser === false) {
            $this->codespaces👷ListForAuthenticatedUser = new Operator\Codespaces\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->codespaces👷ListForAuthenticatedUser;
    }

    public function codespaces👷CreateForAuthenticatedUser(): Operator\Codespaces\CreateForAuthenticatedUser
    {
        if ($this->codespaces👷CreateForAuthenticatedUser instanceof Operator\Codespaces\CreateForAuthenticatedUser === false) {
            $this->codespaces👷CreateForAuthenticatedUser = new Operator\Codespaces\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces());
        }

        return $this->codespaces👷CreateForAuthenticatedUser;
    }

    public function codespaces👷ListSecretsForAuthenticatedUser(): Operator\Codespaces\ListSecretsForAuthenticatedUser
    {
        if ($this->codespaces👷ListSecretsForAuthenticatedUser instanceof Operator\Codespaces\ListSecretsForAuthenticatedUser === false) {
            $this->codespaces👷ListSecretsForAuthenticatedUser = new Operator\Codespaces\ListSecretsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets());
        }

        return $this->codespaces👷ListSecretsForAuthenticatedUser;
    }

    public function codespaces👷GetPublicKeyForAuthenticatedUser(): Operator\Codespaces\GetPublicKeyForAuthenticatedUser
    {
        if ($this->codespaces👷GetPublicKeyForAuthenticatedUser instanceof Operator\Codespaces\GetPublicKeyForAuthenticatedUser === false) {
            $this->codespaces👷GetPublicKeyForAuthenticatedUser = new Operator\Codespaces\GetPublicKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey());
        }

        return $this->codespaces👷GetPublicKeyForAuthenticatedUser;
    }

    public function codespaces👷GetSecretForAuthenticatedUser(): Operator\Codespaces\GetSecretForAuthenticatedUser
    {
        if ($this->codespaces👷GetSecretForAuthenticatedUser instanceof Operator\Codespaces\GetSecretForAuthenticatedUser === false) {
            $this->codespaces👷GetSecretForAuthenticatedUser = new Operator\Codespaces\GetSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷GetSecretForAuthenticatedUser;
    }

    public function codespaces👷CreateOrUpdateSecretForAuthenticatedUser(): Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser
    {
        if ($this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser instanceof Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser === false) {
            $this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser = new Operator\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName());
        }

        return $this->codespaces👷CreateOrUpdateSecretForAuthenticatedUser;
    }

    public function codespaces👷DeleteSecretForAuthenticatedUser(): Operator\Codespaces\DeleteSecretForAuthenticatedUser
    {
        if ($this->codespaces👷DeleteSecretForAuthenticatedUser instanceof Operator\Codespaces\DeleteSecretForAuthenticatedUser === false) {
            $this->codespaces👷DeleteSecretForAuthenticatedUser = new Operator\Codespaces\DeleteSecretForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->codespaces👷DeleteSecretForAuthenticatedUser;
    }

    public function codespaces👷ListRepositoriesForSecretForAuthenticatedUser(): Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser instanceof Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser === false) {
            $this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser = new Operator\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷ListRepositoriesForSecretForAuthenticatedUser;
    }

    public function codespaces👷SetRepositoriesForSecretForAuthenticatedUser(): Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser instanceof Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser === false) {
            $this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser = new Operator\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->codespaces👷SetRepositoriesForSecretForAuthenticatedUser;
    }

    public function codespaces👷AddRepositoryForSecretForAuthenticatedUser(): Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷AddRepositoryForSecretForAuthenticatedUser instanceof Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser === false) {
            $this->codespaces👷AddRepositoryForSecretForAuthenticatedUser = new Operator\Codespaces\AddRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷AddRepositoryForSecretForAuthenticatedUser;
    }

    public function codespaces👷RemoveRepositoryForSecretForAuthenticatedUser(): Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser
    {
        if ($this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser instanceof Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser === false) {
            $this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser = new Operator\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->codespaces👷RemoveRepositoryForSecretForAuthenticatedUser;
    }

    public function codespaces👷GetForAuthenticatedUser(): Operator\Codespaces\GetForAuthenticatedUser
    {
        if ($this->codespaces👷GetForAuthenticatedUser instanceof Operator\Codespaces\GetForAuthenticatedUser === false) {
            $this->codespaces👷GetForAuthenticatedUser = new Operator\Codespaces\GetForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷GetForAuthenticatedUser;
    }

    public function codespaces👷DeleteForAuthenticatedUser(): Operator\Codespaces\DeleteForAuthenticatedUser
    {
        if ($this->codespaces👷DeleteForAuthenticatedUser instanceof Operator\Codespaces\DeleteForAuthenticatedUser === false) {
            $this->codespaces👷DeleteForAuthenticatedUser = new Operator\Codespaces\DeleteForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷DeleteForAuthenticatedUser;
    }

    public function codespaces👷UpdateForAuthenticatedUser(): Operator\Codespaces\UpdateForAuthenticatedUser
    {
        if ($this->codespaces👷UpdateForAuthenticatedUser instanceof Operator\Codespaces\UpdateForAuthenticatedUser === false) {
            $this->codespaces👷UpdateForAuthenticatedUser = new Operator\Codespaces\UpdateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName());
        }

        return $this->codespaces👷UpdateForAuthenticatedUser;
    }

    public function codespaces👷ExportForAuthenticatedUser(): Operator\Codespaces\ExportForAuthenticatedUser
    {
        if ($this->codespaces👷ExportForAuthenticatedUser instanceof Operator\Codespaces\ExportForAuthenticatedUser === false) {
            $this->codespaces👷ExportForAuthenticatedUser = new Operator\Codespaces\ExportForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports());
        }

        return $this->codespaces👷ExportForAuthenticatedUser;
    }

    public function codespaces👷GetExportDetailsForAuthenticatedUser(): Operator\Codespaces\GetExportDetailsForAuthenticatedUser
    {
        if ($this->codespaces👷GetExportDetailsForAuthenticatedUser instanceof Operator\Codespaces\GetExportDetailsForAuthenticatedUser === false) {
            $this->codespaces👷GetExportDetailsForAuthenticatedUser = new Operator\Codespaces\GetExportDetailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId());
        }

        return $this->codespaces👷GetExportDetailsForAuthenticatedUser;
    }

    public function codespaces👷CodespaceMachinesForAuthenticatedUser(): Operator\Codespaces\CodespaceMachinesForAuthenticatedUser
    {
        if ($this->codespaces👷CodespaceMachinesForAuthenticatedUser instanceof Operator\Codespaces\CodespaceMachinesForAuthenticatedUser === false) {
            $this->codespaces👷CodespaceMachinesForAuthenticatedUser = new Operator\Codespaces\CodespaceMachinesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines());
        }

        return $this->codespaces👷CodespaceMachinesForAuthenticatedUser;
    }

    public function codespaces👷PublishForAuthenticatedUser(): Operator\Codespaces\PublishForAuthenticatedUser
    {
        if ($this->codespaces👷PublishForAuthenticatedUser instanceof Operator\Codespaces\PublishForAuthenticatedUser === false) {
            $this->codespaces👷PublishForAuthenticatedUser = new Operator\Codespaces\PublishForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish());
        }

        return $this->codespaces👷PublishForAuthenticatedUser;
    }

    public function codespaces👷StartForAuthenticatedUser(): Operator\Codespaces\StartForAuthenticatedUser
    {
        if ($this->codespaces👷StartForAuthenticatedUser instanceof Operator\Codespaces\StartForAuthenticatedUser === false) {
            $this->codespaces👷StartForAuthenticatedUser = new Operator\Codespaces\StartForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start());
        }

        return $this->codespaces👷StartForAuthenticatedUser;
    }

    public function codespaces👷StopForAuthenticatedUser(): Operator\Codespaces\StopForAuthenticatedUser
    {
        if ($this->codespaces👷StopForAuthenticatedUser instanceof Operator\Codespaces\StopForAuthenticatedUser === false) {
            $this->codespaces👷StopForAuthenticatedUser = new Operator\Codespaces\StopForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop());
        }

        return $this->codespaces👷StopForAuthenticatedUser;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser(): Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser instanceof Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser = new Operator\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForAuthenticatedUser;
    }

    public function users👷SetPrimaryEmailVisibilityForAuthenticatedUser(): Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser
    {
        if ($this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser instanceof Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser === false) {
            $this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser = new Operator\Users\SetPrimaryEmailVisibilityForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Email🌀Visibility());
        }

        return $this->users👷SetPrimaryEmailVisibilityForAuthenticatedUser;
    }

    public function users👷ListEmailsForAuthenticatedUser(): Operator\Users\ListEmailsForAuthenticatedUser
    {
        if ($this->users👷ListEmailsForAuthenticatedUser instanceof Operator\Users\ListEmailsForAuthenticatedUser === false) {
            $this->users👷ListEmailsForAuthenticatedUser = new Operator\Users\ListEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷ListEmailsForAuthenticatedUser;
    }

    public function users👷ListEmailsForAuthenticatedUserListing(): Operator\Users\ListEmailsForAuthenticatedUserListing
    {
        if ($this->users👷ListEmailsForAuthenticatedUserListing instanceof Operator\Users\ListEmailsForAuthenticatedUserListing === false) {
            $this->users👷ListEmailsForAuthenticatedUserListing = new Operator\Users\ListEmailsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷ListEmailsForAuthenticatedUserListing;
    }

    public function users👷AddEmailForAuthenticatedUser(): Operator\Users\AddEmailForAuthenticatedUser
    {
        if ($this->users👷AddEmailForAuthenticatedUser instanceof Operator\Users\AddEmailForAuthenticatedUser === false) {
            $this->users👷AddEmailForAuthenticatedUser = new Operator\Users\AddEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷AddEmailForAuthenticatedUser;
    }

    public function users👷DeleteEmailForAuthenticatedUser(): Operator\Users\DeleteEmailForAuthenticatedUser
    {
        if ($this->users👷DeleteEmailForAuthenticatedUser instanceof Operator\Users\DeleteEmailForAuthenticatedUser === false) {
            $this->users👷DeleteEmailForAuthenticatedUser = new Operator\Users\DeleteEmailForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Emails());
        }

        return $this->users👷DeleteEmailForAuthenticatedUser;
    }

    public function users👷ListFollowersForAuthenticatedUser(): Operator\Users\ListFollowersForAuthenticatedUser
    {
        if ($this->users👷ListFollowersForAuthenticatedUser instanceof Operator\Users\ListFollowersForAuthenticatedUser === false) {
            $this->users👷ListFollowersForAuthenticatedUser = new Operator\Users\ListFollowersForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUser;
    }

    public function users👷ListFollowersForAuthenticatedUserListing(): Operator\Users\ListFollowersForAuthenticatedUserListing
    {
        if ($this->users👷ListFollowersForAuthenticatedUserListing instanceof Operator\Users\ListFollowersForAuthenticatedUserListing === false) {
            $this->users👷ListFollowersForAuthenticatedUserListing = new Operator\Users\ListFollowersForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Followers());
        }

        return $this->users👷ListFollowersForAuthenticatedUserListing;
    }

    public function users👷ListFollowedByAuthenticatedUser(): Operator\Users\ListFollowedByAuthenticatedUser
    {
        if ($this->users👷ListFollowedByAuthenticatedUser instanceof Operator\Users\ListFollowedByAuthenticatedUser === false) {
            $this->users👷ListFollowedByAuthenticatedUser = new Operator\Users\ListFollowedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUser;
    }

    public function users👷ListFollowedByAuthenticatedUserListing(): Operator\Users\ListFollowedByAuthenticatedUserListing
    {
        if ($this->users👷ListFollowedByAuthenticatedUserListing instanceof Operator\Users\ListFollowedByAuthenticatedUserListing === false) {
            $this->users👷ListFollowedByAuthenticatedUserListing = new Operator\Users\ListFollowedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following());
        }

        return $this->users👷ListFollowedByAuthenticatedUserListing;
    }

    public function users👷CheckPersonIsFollowedByAuthenticated(): Operator\Users\CheckPersonIsFollowedByAuthenticated
    {
        if ($this->users👷CheckPersonIsFollowedByAuthenticated instanceof Operator\Users\CheckPersonIsFollowedByAuthenticated === false) {
            $this->users👷CheckPersonIsFollowedByAuthenticated = new Operator\Users\CheckPersonIsFollowedByAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷CheckPersonIsFollowedByAuthenticated;
    }

    public function users👷Follow(): Operator\Users\Follow
    {
        if ($this->users👷Follow instanceof Operator\Users\Follow === false) {
            $this->users👷Follow = new Operator\Users\Follow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Follow;
    }

    public function users👷Unfollow(): Operator\Users\Unfollow
    {
        if ($this->users👷Unfollow instanceof Operator\Users\Unfollow === false) {
            $this->users👷Unfollow = new Operator\Users\Unfollow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Following🌀Username());
        }

        return $this->users👷Unfollow;
    }

    public function users👷ListGpgKeysForAuthenticatedUser(): Operator\Users\ListGpgKeysForAuthenticatedUser
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUser instanceof Operator\Users\ListGpgKeysForAuthenticatedUser === false) {
            $this->users👷ListGpgKeysForAuthenticatedUser = new Operator\Users\ListGpgKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUser;
    }

    public function users👷ListGpgKeysForAuthenticatedUserListing(): Operator\Users\ListGpgKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListGpgKeysForAuthenticatedUserListing instanceof Operator\Users\ListGpgKeysForAuthenticatedUserListing === false) {
            $this->users👷ListGpgKeysForAuthenticatedUserListing = new Operator\Users\ListGpgKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForAuthenticatedUserListing;
    }

    public function users👷CreateGpgKeyForAuthenticatedUser(): Operator\Users\CreateGpgKeyForAuthenticatedUser
    {
        if ($this->users👷CreateGpgKeyForAuthenticatedUser instanceof Operator\Users\CreateGpgKeyForAuthenticatedUser === false) {
            $this->users👷CreateGpgKeyForAuthenticatedUser = new Operator\Users\CreateGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys());
        }

        return $this->users👷CreateGpgKeyForAuthenticatedUser;
    }

    public function users👷GetGpgKeyForAuthenticatedUser(): Operator\Users\GetGpgKeyForAuthenticatedUser
    {
        if ($this->users👷GetGpgKeyForAuthenticatedUser instanceof Operator\Users\GetGpgKeyForAuthenticatedUser === false) {
            $this->users👷GetGpgKeyForAuthenticatedUser = new Operator\Users\GetGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷GetGpgKeyForAuthenticatedUser;
    }

    public function users👷DeleteGpgKeyForAuthenticatedUser(): Operator\Users\DeleteGpgKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteGpgKeyForAuthenticatedUser instanceof Operator\Users\DeleteGpgKeyForAuthenticatedUser === false) {
            $this->users👷DeleteGpgKeyForAuthenticatedUser = new Operator\Users\DeleteGpgKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId());
        }

        return $this->users👷DeleteGpgKeyForAuthenticatedUser;
    }

    public function apps👷ListInstallationsForAuthenticatedUser(): Operator\Apps\ListInstallationsForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationsForAuthenticatedUser instanceof Operator\Apps\ListInstallationsForAuthenticatedUser === false) {
            $this->apps👷ListInstallationsForAuthenticatedUser = new Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());
        }

        return $this->apps👷ListInstallationsForAuthenticatedUser;
    }

    public function apps👷ListInstallationReposForAuthenticatedUser(): Operator\Apps\ListInstallationReposForAuthenticatedUser
    {
        if ($this->apps👷ListInstallationReposForAuthenticatedUser instanceof Operator\Apps\ListInstallationReposForAuthenticatedUser === false) {
            $this->apps👷ListInstallationReposForAuthenticatedUser = new Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());
        }

        return $this->apps👷ListInstallationReposForAuthenticatedUser;
    }

    public function apps👷AddRepoToInstallationForAuthenticatedUser(): Operator\Apps\AddRepoToInstallationForAuthenticatedUser
    {
        if ($this->apps👷AddRepoToInstallationForAuthenticatedUser instanceof Operator\Apps\AddRepoToInstallationForAuthenticatedUser === false) {
            $this->apps👷AddRepoToInstallationForAuthenticatedUser = new Operator\Apps\AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷AddRepoToInstallationForAuthenticatedUser;
    }

    public function apps👷RemoveRepoFromInstallationForAuthenticatedUser(): Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser
    {
        if ($this->apps👷RemoveRepoFromInstallationForAuthenticatedUser instanceof Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser === false) {
            $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser = new Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->apps👷RemoveRepoFromInstallationForAuthenticatedUser;
    }

    public function interactions👷GetRestrictionsForAuthenticatedUser(): Operator\Interactions\GetRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷GetRestrictionsForAuthenticatedUser instanceof Operator\Interactions\GetRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷GetRestrictionsForAuthenticatedUser = new Operator\Interactions\GetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->interactions👷GetRestrictionsForAuthenticatedUser;
    }

    public function interactions👷SetRestrictionsForAuthenticatedUser(): Operator\Interactions\SetRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷SetRestrictionsForAuthenticatedUser instanceof Operator\Interactions\SetRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷SetRestrictionsForAuthenticatedUser = new Operator\Interactions\SetRestrictionsForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀InteractionLimits());
        }

        return $this->interactions👷SetRestrictionsForAuthenticatedUser;
    }

    public function interactions👷RemoveRestrictionsForAuthenticatedUser(): Operator\Interactions\RemoveRestrictionsForAuthenticatedUser
    {
        if ($this->interactions👷RemoveRestrictionsForAuthenticatedUser instanceof Operator\Interactions\RemoveRestrictionsForAuthenticatedUser === false) {
            $this->interactions👷RemoveRestrictionsForAuthenticatedUser = new Operator\Interactions\RemoveRestrictionsForAuthenticatedUser($this->browser, $this->authentication);
        }

        return $this->interactions👷RemoveRestrictionsForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUser(): Operator\Issues\ListForAuthenticatedUser
    {
        if ($this->issues👷ListForAuthenticatedUser instanceof Operator\Issues\ListForAuthenticatedUser === false) {
            $this->issues👷ListForAuthenticatedUser = new Operator\Issues\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUser;
    }

    public function issues👷ListForAuthenticatedUserListing(): Operator\Issues\ListForAuthenticatedUserListing
    {
        if ($this->issues👷ListForAuthenticatedUserListing instanceof Operator\Issues\ListForAuthenticatedUserListing === false) {
            $this->issues👷ListForAuthenticatedUserListing = new Operator\Issues\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Issues());
        }

        return $this->issues👷ListForAuthenticatedUserListing;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUser(): Operator\Users\ListPublicSshKeysForAuthenticatedUser
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUser instanceof Operator\Users\ListPublicSshKeysForAuthenticatedUser === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUser = new Operator\Users\ListPublicSshKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUser;
    }

    public function users👷ListPublicSshKeysForAuthenticatedUserListing(): Operator\Users\ListPublicSshKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListPublicSshKeysForAuthenticatedUserListing instanceof Operator\Users\ListPublicSshKeysForAuthenticatedUserListing === false) {
            $this->users👷ListPublicSshKeysForAuthenticatedUserListing = new Operator\Users\ListPublicSshKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷ListPublicSshKeysForAuthenticatedUserListing;
    }

    public function users👷CreatePublicSshKeyForAuthenticatedUser(): Operator\Users\CreatePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷CreatePublicSshKeyForAuthenticatedUser instanceof Operator\Users\CreatePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷CreatePublicSshKeyForAuthenticatedUser = new Operator\Users\CreatePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys());
        }

        return $this->users👷CreatePublicSshKeyForAuthenticatedUser;
    }

    public function users👷GetPublicSshKeyForAuthenticatedUser(): Operator\Users\GetPublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷GetPublicSshKeyForAuthenticatedUser instanceof Operator\Users\GetPublicSshKeyForAuthenticatedUser === false) {
            $this->users👷GetPublicSshKeyForAuthenticatedUser = new Operator\Users\GetPublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷GetPublicSshKeyForAuthenticatedUser;
    }

    public function users👷DeletePublicSshKeyForAuthenticatedUser(): Operator\Users\DeletePublicSshKeyForAuthenticatedUser
    {
        if ($this->users👷DeletePublicSshKeyForAuthenticatedUser instanceof Operator\Users\DeletePublicSshKeyForAuthenticatedUser === false) {
            $this->users👷DeletePublicSshKeyForAuthenticatedUser = new Operator\Users\DeletePublicSshKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Keys🌀KeyId());
        }

        return $this->users👷DeletePublicSshKeyForAuthenticatedUser;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUser(): Operator\Apps\ListSubscriptionsForAuthenticatedUser
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUser instanceof Operator\Apps\ListSubscriptionsForAuthenticatedUser === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUser = new Operator\Apps\ListSubscriptionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUser;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserListing(): Operator\Apps\ListSubscriptionsForAuthenticatedUserListing
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserListing instanceof Operator\Apps\ListSubscriptionsForAuthenticatedUserListing === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserListing = new Operator\Apps\ListSubscriptionsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserListing;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserStubbed(): Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserStubbed instanceof Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserStubbed = new Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserStubbed;
    }

    public function apps👷ListSubscriptionsForAuthenticatedUserStubbedListing(): Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing
    {
        if ($this->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing instanceof Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing === false) {
            $this->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing = new Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbedListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());
        }

        return $this->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing;
    }

    public function orgs👷ListMembershipsForAuthenticatedUser(): Operator\Orgs\ListMembershipsForAuthenticatedUser
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUser instanceof Operator\Orgs\ListMembershipsForAuthenticatedUser === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUser = new Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUser;
    }

    public function orgs👷ListMembershipsForAuthenticatedUserListing(): Operator\Orgs\ListMembershipsForAuthenticatedUserListing
    {
        if ($this->orgs👷ListMembershipsForAuthenticatedUserListing instanceof Operator\Orgs\ListMembershipsForAuthenticatedUserListing === false) {
            $this->orgs👷ListMembershipsForAuthenticatedUserListing = new Operator\Orgs\ListMembershipsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->orgs👷ListMembershipsForAuthenticatedUserListing;
    }

    public function orgs👷GetMembershipForAuthenticatedUser(): Operator\Orgs\GetMembershipForAuthenticatedUser
    {
        if ($this->orgs👷GetMembershipForAuthenticatedUser instanceof Operator\Orgs\GetMembershipForAuthenticatedUser === false) {
            $this->orgs👷GetMembershipForAuthenticatedUser = new Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷GetMembershipForAuthenticatedUser;
    }

    public function orgs👷UpdateMembershipForAuthenticatedUser(): Operator\Orgs\UpdateMembershipForAuthenticatedUser
    {
        if ($this->orgs👷UpdateMembershipForAuthenticatedUser instanceof Operator\Orgs\UpdateMembershipForAuthenticatedUser === false) {
            $this->orgs👷UpdateMembershipForAuthenticatedUser = new Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->orgs👷UpdateMembershipForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUser(): Operator\Migrations\ListForAuthenticatedUser
    {
        if ($this->migrations👷ListForAuthenticatedUser instanceof Operator\Migrations\ListForAuthenticatedUser === false) {
            $this->migrations👷ListForAuthenticatedUser = new Operator\Migrations\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUser;
    }

    public function migrations👷ListForAuthenticatedUserListing(): Operator\Migrations\ListForAuthenticatedUserListing
    {
        if ($this->migrations👷ListForAuthenticatedUserListing instanceof Operator\Migrations\ListForAuthenticatedUserListing === false) {
            $this->migrations👷ListForAuthenticatedUserListing = new Operator\Migrations\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷ListForAuthenticatedUserListing;
    }

    public function migrations👷StartForAuthenticatedUser(): Operator\Migrations\StartForAuthenticatedUser
    {
        if ($this->migrations👷StartForAuthenticatedUser instanceof Operator\Migrations\StartForAuthenticatedUser === false) {
            $this->migrations👷StartForAuthenticatedUser = new Operator\Migrations\StartForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations());
        }

        return $this->migrations👷StartForAuthenticatedUser;
    }

    public function migrations👷GetStatusForAuthenticatedUser(): Operator\Migrations\GetStatusForAuthenticatedUser
    {
        if ($this->migrations👷GetStatusForAuthenticatedUser instanceof Operator\Migrations\GetStatusForAuthenticatedUser === false) {
            $this->migrations👷GetStatusForAuthenticatedUser = new Operator\Migrations\GetStatusForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId());
        }

        return $this->migrations👷GetStatusForAuthenticatedUser;
    }

    public function migrations👷GetArchiveForAuthenticatedUser(): Operator\Migrations\GetArchiveForAuthenticatedUser
    {
        if ($this->migrations👷GetArchiveForAuthenticatedUser instanceof Operator\Migrations\GetArchiveForAuthenticatedUser === false) {
            $this->migrations👷GetArchiveForAuthenticatedUser = new Operator\Migrations\GetArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷GetArchiveForAuthenticatedUser;
    }

    public function migrations👷DeleteArchiveForAuthenticatedUser(): Operator\Migrations\DeleteArchiveForAuthenticatedUser
    {
        if ($this->migrations👷DeleteArchiveForAuthenticatedUser instanceof Operator\Migrations\DeleteArchiveForAuthenticatedUser === false) {
            $this->migrations👷DeleteArchiveForAuthenticatedUser = new Operator\Migrations\DeleteArchiveForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive());
        }

        return $this->migrations👷DeleteArchiveForAuthenticatedUser;
    }

    public function migrations👷UnlockRepoForAuthenticatedUser(): Operator\Migrations\UnlockRepoForAuthenticatedUser
    {
        if ($this->migrations👷UnlockRepoForAuthenticatedUser instanceof Operator\Migrations\UnlockRepoForAuthenticatedUser === false) {
            $this->migrations👷UnlockRepoForAuthenticatedUser = new Operator\Migrations\UnlockRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock());
        }

        return $this->migrations👷UnlockRepoForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUser(): Operator\Migrations\ListReposForAuthenticatedUser
    {
        if ($this->migrations👷ListReposForAuthenticatedUser instanceof Operator\Migrations\ListReposForAuthenticatedUser === false) {
            $this->migrations👷ListReposForAuthenticatedUser = new Operator\Migrations\ListReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUser;
    }

    public function migrations👷ListReposForAuthenticatedUserListing(): Operator\Migrations\ListReposForAuthenticatedUserListing
    {
        if ($this->migrations👷ListReposForAuthenticatedUserListing instanceof Operator\Migrations\ListReposForAuthenticatedUserListing === false) {
            $this->migrations👷ListReposForAuthenticatedUserListing = new Operator\Migrations\ListReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories());
        }

        return $this->migrations👷ListReposForAuthenticatedUserListing;
    }

    public function orgs👷ListForAuthenticatedUser(): Operator\Orgs\ListForAuthenticatedUser
    {
        if ($this->orgs👷ListForAuthenticatedUser instanceof Operator\Orgs\ListForAuthenticatedUser === false) {
            $this->orgs👷ListForAuthenticatedUser = new Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUser;
    }

    public function orgs👷ListForAuthenticatedUserListing(): Operator\Orgs\ListForAuthenticatedUserListing
    {
        if ($this->orgs👷ListForAuthenticatedUserListing instanceof Operator\Orgs\ListForAuthenticatedUserListing === false) {
            $this->orgs👷ListForAuthenticatedUserListing = new Operator\Orgs\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->orgs👷ListForAuthenticatedUserListing;
    }

    public function packages👷ListPackagesForAuthenticatedUser(): Operator\Packages\ListPackagesForAuthenticatedUser
    {
        if ($this->packages👷ListPackagesForAuthenticatedUser instanceof Operator\Packages\ListPackagesForAuthenticatedUser === false) {
            $this->packages👷ListPackagesForAuthenticatedUser = new Operator\Packages\ListPackagesForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages());
        }

        return $this->packages👷ListPackagesForAuthenticatedUser;
    }

    public function packages👷ListPackagesForAuthenticatedUserListing(): Operator\Packages\ListPackagesForAuthenticatedUserListing
    {
        if ($this->packages👷ListPackagesForAuthenticatedUserListing instanceof Operator\Packages\ListPackagesForAuthenticatedUserListing === false) {
            $this->packages👷ListPackagesForAuthenticatedUserListing = new Operator\Packages\ListPackagesForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages());
        }

        return $this->packages👷ListPackagesForAuthenticatedUserListing;
    }

    public function packages👷GetPackageForAuthenticatedUser(): Operator\Packages\GetPackageForAuthenticatedUser
    {
        if ($this->packages👷GetPackageForAuthenticatedUser instanceof Operator\Packages\GetPackageForAuthenticatedUser === false) {
            $this->packages👷GetPackageForAuthenticatedUser = new Operator\Packages\GetPackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForAuthenticatedUser;
    }

    public function packages👷DeletePackageForAuthenticatedUser(): Operator\Packages\DeletePackageForAuthenticatedUser
    {
        if ($this->packages👷DeletePackageForAuthenticatedUser instanceof Operator\Packages\DeletePackageForAuthenticatedUser === false) {
            $this->packages👷DeletePackageForAuthenticatedUser = new Operator\Packages\DeletePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForAuthenticatedUser;
    }

    public function packages👷RestorePackageForAuthenticatedUser(): Operator\Packages\RestorePackageForAuthenticatedUser
    {
        if ($this->packages👷RestorePackageForAuthenticatedUser instanceof Operator\Packages\RestorePackageForAuthenticatedUser === false) {
            $this->packages👷RestorePackageForAuthenticatedUser = new Operator\Packages\RestorePackageForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForAuthenticatedUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser(): Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser instanceof Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing(): Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing instanceof Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByAuthenticatedUserListing;
    }

    public function packages👷GetPackageVersionForAuthenticatedUser(): Operator\Packages\GetPackageVersionForAuthenticatedUser
    {
        if ($this->packages👷GetPackageVersionForAuthenticatedUser instanceof Operator\Packages\GetPackageVersionForAuthenticatedUser === false) {
            $this->packages👷GetPackageVersionForAuthenticatedUser = new Operator\Packages\GetPackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForAuthenticatedUser;
    }

    public function packages👷DeletePackageVersionForAuthenticatedUser(): Operator\Packages\DeletePackageVersionForAuthenticatedUser
    {
        if ($this->packages👷DeletePackageVersionForAuthenticatedUser instanceof Operator\Packages\DeletePackageVersionForAuthenticatedUser === false) {
            $this->packages👷DeletePackageVersionForAuthenticatedUser = new Operator\Packages\DeletePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForAuthenticatedUser;
    }

    public function packages👷RestorePackageVersionForAuthenticatedUser(): Operator\Packages\RestorePackageVersionForAuthenticatedUser
    {
        if ($this->packages👷RestorePackageVersionForAuthenticatedUser instanceof Operator\Packages\RestorePackageVersionForAuthenticatedUser === false) {
            $this->packages👷RestorePackageVersionForAuthenticatedUser = new Operator\Packages\RestorePackageVersionForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForAuthenticatedUser;
    }

    public function projects👷CreateForAuthenticatedUser(): Operator\Projects\CreateForAuthenticatedUser
    {
        if ($this->projects👷CreateForAuthenticatedUser instanceof Operator\Projects\CreateForAuthenticatedUser === false) {
            $this->projects👷CreateForAuthenticatedUser = new Operator\Projects\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Projects());
        }

        return $this->projects👷CreateForAuthenticatedUser;
    }

    public function users👷ListPublicEmailsForAuthenticatedUser(): Operator\Users\ListPublicEmailsForAuthenticatedUser
    {
        if ($this->users👷ListPublicEmailsForAuthenticatedUser instanceof Operator\Users\ListPublicEmailsForAuthenticatedUser === false) {
            $this->users👷ListPublicEmailsForAuthenticatedUser = new Operator\Users\ListPublicEmailsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());
        }

        return $this->users👷ListPublicEmailsForAuthenticatedUser;
    }

    public function users👷ListPublicEmailsForAuthenticatedUserListing(): Operator\Users\ListPublicEmailsForAuthenticatedUserListing
    {
        if ($this->users👷ListPublicEmailsForAuthenticatedUserListing instanceof Operator\Users\ListPublicEmailsForAuthenticatedUserListing === false) {
            $this->users👷ListPublicEmailsForAuthenticatedUserListing = new Operator\Users\ListPublicEmailsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀PublicEmails());
        }

        return $this->users👷ListPublicEmailsForAuthenticatedUserListing;
    }

    public function repos👷ListForAuthenticatedUser(): Operator\Repos\ListForAuthenticatedUser
    {
        if ($this->repos👷ListForAuthenticatedUser instanceof Operator\Repos\ListForAuthenticatedUser === false) {
            $this->repos👷ListForAuthenticatedUser = new Operator\Repos\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUser;
    }

    public function repos👷ListForAuthenticatedUserListing(): Operator\Repos\ListForAuthenticatedUserListing
    {
        if ($this->repos👷ListForAuthenticatedUserListing instanceof Operator\Repos\ListForAuthenticatedUserListing === false) {
            $this->repos👷ListForAuthenticatedUserListing = new Operator\Repos\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷ListForAuthenticatedUserListing;
    }

    public function repos👷CreateForAuthenticatedUser(): Operator\Repos\CreateForAuthenticatedUser
    {
        if ($this->repos👷CreateForAuthenticatedUser instanceof Operator\Repos\CreateForAuthenticatedUser === false) {
            $this->repos👷CreateForAuthenticatedUser = new Operator\Repos\CreateForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Repos());
        }

        return $this->repos👷CreateForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUser(): Operator\Repos\ListInvitationsForAuthenticatedUser
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUser instanceof Operator\Repos\ListInvitationsForAuthenticatedUser === false) {
            $this->repos👷ListInvitationsForAuthenticatedUser = new Operator\Repos\ListInvitationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUser;
    }

    public function repos👷ListInvitationsForAuthenticatedUserListing(): Operator\Repos\ListInvitationsForAuthenticatedUserListing
    {
        if ($this->repos👷ListInvitationsForAuthenticatedUserListing instanceof Operator\Repos\ListInvitationsForAuthenticatedUserListing === false) {
            $this->repos👷ListInvitationsForAuthenticatedUserListing = new Operator\Repos\ListInvitationsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations());
        }

        return $this->repos👷ListInvitationsForAuthenticatedUserListing;
    }

    public function repos👷DeclineInvitationForAuthenticatedUser(): Operator\Repos\DeclineInvitationForAuthenticatedUser
    {
        if ($this->repos👷DeclineInvitationForAuthenticatedUser instanceof Operator\Repos\DeclineInvitationForAuthenticatedUser === false) {
            $this->repos👷DeclineInvitationForAuthenticatedUser = new Operator\Repos\DeclineInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷DeclineInvitationForAuthenticatedUser;
    }

    public function repos👷AcceptInvitationForAuthenticatedUser(): Operator\Repos\AcceptInvitationForAuthenticatedUser
    {
        if ($this->repos👷AcceptInvitationForAuthenticatedUser instanceof Operator\Repos\AcceptInvitationForAuthenticatedUser === false) {
            $this->repos👷AcceptInvitationForAuthenticatedUser = new Operator\Repos\AcceptInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId());
        }

        return $this->repos👷AcceptInvitationForAuthenticatedUser;
    }

    public function users👷ListSocialAccountsForAuthenticatedUser(): Operator\Users\ListSocialAccountsForAuthenticatedUser
    {
        if ($this->users👷ListSocialAccountsForAuthenticatedUser instanceof Operator\Users\ListSocialAccountsForAuthenticatedUser === false) {
            $this->users👷ListSocialAccountsForAuthenticatedUser = new Operator\Users\ListSocialAccountsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForAuthenticatedUser;
    }

    public function users👷ListSocialAccountsForAuthenticatedUserListing(): Operator\Users\ListSocialAccountsForAuthenticatedUserListing
    {
        if ($this->users👷ListSocialAccountsForAuthenticatedUserListing instanceof Operator\Users\ListSocialAccountsForAuthenticatedUserListing === false) {
            $this->users👷ListSocialAccountsForAuthenticatedUserListing = new Operator\Users\ListSocialAccountsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForAuthenticatedUserListing;
    }

    public function users👷AddSocialAccountForAuthenticatedUser(): Operator\Users\AddSocialAccountForAuthenticatedUser
    {
        if ($this->users👷AddSocialAccountForAuthenticatedUser instanceof Operator\Users\AddSocialAccountForAuthenticatedUser === false) {
            $this->users👷AddSocialAccountForAuthenticatedUser = new Operator\Users\AddSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷AddSocialAccountForAuthenticatedUser;
    }

    public function users👷DeleteSocialAccountForAuthenticatedUser(): Operator\Users\DeleteSocialAccountForAuthenticatedUser
    {
        if ($this->users👷DeleteSocialAccountForAuthenticatedUser instanceof Operator\Users\DeleteSocialAccountForAuthenticatedUser === false) {
            $this->users👷DeleteSocialAccountForAuthenticatedUser = new Operator\Users\DeleteSocialAccountForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SocialAccounts());
        }

        return $this->users👷DeleteSocialAccountForAuthenticatedUser;
    }

    public function users👷ListSshSigningKeysForAuthenticatedUser(): Operator\Users\ListSshSigningKeysForAuthenticatedUser
    {
        if ($this->users👷ListSshSigningKeysForAuthenticatedUser instanceof Operator\Users\ListSshSigningKeysForAuthenticatedUser === false) {
            $this->users👷ListSshSigningKeysForAuthenticatedUser = new Operator\Users\ListSshSigningKeysForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForAuthenticatedUser;
    }

    public function users👷ListSshSigningKeysForAuthenticatedUserListing(): Operator\Users\ListSshSigningKeysForAuthenticatedUserListing
    {
        if ($this->users👷ListSshSigningKeysForAuthenticatedUserListing instanceof Operator\Users\ListSshSigningKeysForAuthenticatedUserListing === false) {
            $this->users👷ListSshSigningKeysForAuthenticatedUserListing = new Operator\Users\ListSshSigningKeysForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForAuthenticatedUserListing;
    }

    public function users👷CreateSshSigningKeyForAuthenticatedUser(): Operator\Users\CreateSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷CreateSshSigningKeyForAuthenticatedUser instanceof Operator\Users\CreateSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷CreateSshSigningKeyForAuthenticatedUser = new Operator\Users\CreateSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys());
        }

        return $this->users👷CreateSshSigningKeyForAuthenticatedUser;
    }

    public function users👷GetSshSigningKeyForAuthenticatedUser(): Operator\Users\GetSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷GetSshSigningKeyForAuthenticatedUser instanceof Operator\Users\GetSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷GetSshSigningKeyForAuthenticatedUser = new Operator\Users\GetSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->users👷GetSshSigningKeyForAuthenticatedUser;
    }

    public function users👷DeleteSshSigningKeyForAuthenticatedUser(): Operator\Users\DeleteSshSigningKeyForAuthenticatedUser
    {
        if ($this->users👷DeleteSshSigningKeyForAuthenticatedUser instanceof Operator\Users\DeleteSshSigningKeyForAuthenticatedUser === false) {
            $this->users👷DeleteSshSigningKeyForAuthenticatedUser = new Operator\Users\DeleteSshSigningKeyForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId());
        }

        return $this->users👷DeleteSshSigningKeyForAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUser(): Operator\Activity\ListReposStarredByAuthenticatedUser
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUser instanceof Operator\Activity\ListReposStarredByAuthenticatedUser === false) {
            $this->activity👷ListReposStarredByAuthenticatedUser = new Operator\Activity\ListReposStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUser;
    }

    public function activity👷ListReposStarredByAuthenticatedUserListing(): Operator\Activity\ListReposStarredByAuthenticatedUserListing
    {
        if ($this->activity👷ListReposStarredByAuthenticatedUserListing instanceof Operator\Activity\ListReposStarredByAuthenticatedUserListing === false) {
            $this->activity👷ListReposStarredByAuthenticatedUserListing = new Operator\Activity\ListReposStarredByAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred());
        }

        return $this->activity👷ListReposStarredByAuthenticatedUserListing;
    }

    public function activity👷CheckRepoIsStarredByAuthenticatedUser(): Operator\Activity\CheckRepoIsStarredByAuthenticatedUser
    {
        if ($this->activity👷CheckRepoIsStarredByAuthenticatedUser instanceof Operator\Activity\CheckRepoIsStarredByAuthenticatedUser === false) {
            $this->activity👷CheckRepoIsStarredByAuthenticatedUser = new Operator\Activity\CheckRepoIsStarredByAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷CheckRepoIsStarredByAuthenticatedUser;
    }

    public function activity👷StarRepoForAuthenticatedUser(): Operator\Activity\StarRepoForAuthenticatedUser
    {
        if ($this->activity👷StarRepoForAuthenticatedUser instanceof Operator\Activity\StarRepoForAuthenticatedUser === false) {
            $this->activity👷StarRepoForAuthenticatedUser = new Operator\Activity\StarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷StarRepoForAuthenticatedUser;
    }

    public function activity👷UnstarRepoForAuthenticatedUser(): Operator\Activity\UnstarRepoForAuthenticatedUser
    {
        if ($this->activity👷UnstarRepoForAuthenticatedUser instanceof Operator\Activity\UnstarRepoForAuthenticatedUser === false) {
            $this->activity👷UnstarRepoForAuthenticatedUser = new Operator\Activity\UnstarRepoForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo());
        }

        return $this->activity👷UnstarRepoForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUser(): Operator\Activity\ListWatchedReposForAuthenticatedUser
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUser instanceof Operator\Activity\ListWatchedReposForAuthenticatedUser === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUser = new Operator\Activity\ListWatchedReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUser;
    }

    public function activity👷ListWatchedReposForAuthenticatedUserListing(): Operator\Activity\ListWatchedReposForAuthenticatedUserListing
    {
        if ($this->activity👷ListWatchedReposForAuthenticatedUserListing instanceof Operator\Activity\ListWatchedReposForAuthenticatedUserListing === false) {
            $this->activity👷ListWatchedReposForAuthenticatedUserListing = new Operator\Activity\ListWatchedReposForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Subscriptions());
        }

        return $this->activity👷ListWatchedReposForAuthenticatedUserListing;
    }

    public function teams👷ListForAuthenticatedUser(): Operator\Teams\ListForAuthenticatedUser
    {
        if ($this->teams👷ListForAuthenticatedUser instanceof Operator\Teams\ListForAuthenticatedUser === false) {
            $this->teams👷ListForAuthenticatedUser = new Operator\Teams\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUser;
    }

    public function teams👷ListForAuthenticatedUserListing(): Operator\Teams\ListForAuthenticatedUserListing
    {
        if ($this->teams👷ListForAuthenticatedUserListing instanceof Operator\Teams\ListForAuthenticatedUserListing === false) {
            $this->teams👷ListForAuthenticatedUserListing = new Operator\Teams\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->teams👷ListForAuthenticatedUserListing;
    }

    public function users👷List_(): Operator\Users\List_
    {
        if ($this->users👷List_ instanceof Operator\Users\List_ === false) {
            $this->users👷List_ = new Operator\Users\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users());
        }

        return $this->users👷List_;
    }

    public function users👷GetByUsername(): Operator\Users\GetByUsername
    {
        if ($this->users👷GetByUsername instanceof Operator\Users\GetByUsername === false) {
            $this->users👷GetByUsername = new Operator\Users\GetByUsername($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username());
        }

        return $this->users👷GetByUsername;
    }

    public function packages👷ListDockerMigrationConflictingPackagesForUser(): Operator\Packages\ListDockerMigrationConflictingPackagesForUser
    {
        if ($this->packages👷ListDockerMigrationConflictingPackagesForUser instanceof Operator\Packages\ListDockerMigrationConflictingPackagesForUser === false) {
            $this->packages👷ListDockerMigrationConflictingPackagesForUser = new Operator\Packages\ListDockerMigrationConflictingPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts());
        }

        return $this->packages👷ListDockerMigrationConflictingPackagesForUser;
    }

    public function activity👷ListEventsForAuthenticatedUser(): Operator\Activity\ListEventsForAuthenticatedUser
    {
        if ($this->activity👷ListEventsForAuthenticatedUser instanceof Operator\Activity\ListEventsForAuthenticatedUser === false) {
            $this->activity👷ListEventsForAuthenticatedUser = new Operator\Activity\ListEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUser;
    }

    public function activity👷ListEventsForAuthenticatedUserListing(): Operator\Activity\ListEventsForAuthenticatedUserListing
    {
        if ($this->activity👷ListEventsForAuthenticatedUserListing instanceof Operator\Activity\ListEventsForAuthenticatedUserListing === false) {
            $this->activity👷ListEventsForAuthenticatedUserListing = new Operator\Activity\ListEventsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events());
        }

        return $this->activity👷ListEventsForAuthenticatedUserListing;
    }

    public function activity👷ListOrgEventsForAuthenticatedUser(): Operator\Activity\ListOrgEventsForAuthenticatedUser
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUser instanceof Operator\Activity\ListOrgEventsForAuthenticatedUser === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUser = new Operator\Activity\ListOrgEventsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUser;
    }

    public function activity👷ListOrgEventsForAuthenticatedUserListing(): Operator\Activity\ListOrgEventsForAuthenticatedUserListing
    {
        if ($this->activity👷ListOrgEventsForAuthenticatedUserListing instanceof Operator\Activity\ListOrgEventsForAuthenticatedUserListing === false) {
            $this->activity👷ListOrgEventsForAuthenticatedUserListing = new Operator\Activity\ListOrgEventsForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org());
        }

        return $this->activity👷ListOrgEventsForAuthenticatedUserListing;
    }

    public function activity👷ListPublicEventsForUser(): Operator\Activity\ListPublicEventsForUser
    {
        if ($this->activity👷ListPublicEventsForUser instanceof Operator\Activity\ListPublicEventsForUser === false) {
            $this->activity👷ListPublicEventsForUser = new Operator\Activity\ListPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_());
        }

        return $this->activity👷ListPublicEventsForUser;
    }

    public function activity👷ListPublicEventsForUserListing(): Operator\Activity\ListPublicEventsForUserListing
    {
        if ($this->activity👷ListPublicEventsForUserListing instanceof Operator\Activity\ListPublicEventsForUserListing === false) {
            $this->activity👷ListPublicEventsForUserListing = new Operator\Activity\ListPublicEventsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_());
        }

        return $this->activity👷ListPublicEventsForUserListing;
    }

    public function users👷ListFollowersForUser(): Operator\Users\ListFollowersForUser
    {
        if ($this->users👷ListFollowersForUser instanceof Operator\Users\ListFollowersForUser === false) {
            $this->users👷ListFollowersForUser = new Operator\Users\ListFollowersForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUser;
    }

    public function users👷ListFollowersForUserListing(): Operator\Users\ListFollowersForUserListing
    {
        if ($this->users👷ListFollowersForUserListing instanceof Operator\Users\ListFollowersForUserListing === false) {
            $this->users👷ListFollowersForUserListing = new Operator\Users\ListFollowersForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Followers());
        }

        return $this->users👷ListFollowersForUserListing;
    }

    public function users👷ListFollowingForUser(): Operator\Users\ListFollowingForUser
    {
        if ($this->users👷ListFollowingForUser instanceof Operator\Users\ListFollowingForUser === false) {
            $this->users👷ListFollowingForUser = new Operator\Users\ListFollowingForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUser;
    }

    public function users👷ListFollowingForUserListing(): Operator\Users\ListFollowingForUserListing
    {
        if ($this->users👷ListFollowingForUserListing instanceof Operator\Users\ListFollowingForUserListing === false) {
            $this->users👷ListFollowingForUserListing = new Operator\Users\ListFollowingForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Following());
        }

        return $this->users👷ListFollowingForUserListing;
    }

    public function users👷CheckFollowingForUser(): Operator\Users\CheckFollowingForUser
    {
        if ($this->users👷CheckFollowingForUser instanceof Operator\Users\CheckFollowingForUser === false) {
            $this->users👷CheckFollowingForUser = new Operator\Users\CheckFollowingForUser($this->browser, $this->authentication);
        }

        return $this->users👷CheckFollowingForUser;
    }

    public function gists👷ListForUser(): Operator\Gists\ListForUser
    {
        if ($this->gists👷ListForUser instanceof Operator\Gists\ListForUser === false) {
            $this->gists👷ListForUser = new Operator\Gists\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUser;
    }

    public function gists👷ListForUserListing(): Operator\Gists\ListForUserListing
    {
        if ($this->gists👷ListForUserListing instanceof Operator\Gists\ListForUserListing === false) {
            $this->gists👷ListForUserListing = new Operator\Gists\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->gists👷ListForUserListing;
    }

    public function users👷ListGpgKeysForUser(): Operator\Users\ListGpgKeysForUser
    {
        if ($this->users👷ListGpgKeysForUser instanceof Operator\Users\ListGpgKeysForUser === false) {
            $this->users👷ListGpgKeysForUser = new Operator\Users\ListGpgKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUser;
    }

    public function users👷ListGpgKeysForUserListing(): Operator\Users\ListGpgKeysForUserListing
    {
        if ($this->users👷ListGpgKeysForUserListing instanceof Operator\Users\ListGpgKeysForUserListing === false) {
            $this->users👷ListGpgKeysForUserListing = new Operator\Users\ListGpgKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀GpgKeys());
        }

        return $this->users👷ListGpgKeysForUserListing;
    }

    public function users👷GetContextForUser(): Operator\Users\GetContextForUser
    {
        if ($this->users👷GetContextForUser instanceof Operator\Users\GetContextForUser === false) {
            $this->users👷GetContextForUser = new Operator\Users\GetContextForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Hovercard());
        }

        return $this->users👷GetContextForUser;
    }

    public function apps👷GetUserInstallation(): Operator\Apps\GetUserInstallation
    {
        if ($this->apps👷GetUserInstallation instanceof Operator\Apps\GetUserInstallation === false) {
            $this->apps👷GetUserInstallation = new Operator\Apps\GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());
        }

        return $this->apps👷GetUserInstallation;
    }

    public function users👷ListPublicKeysForUser(): Operator\Users\ListPublicKeysForUser
    {
        if ($this->users👷ListPublicKeysForUser instanceof Operator\Users\ListPublicKeysForUser === false) {
            $this->users👷ListPublicKeysForUser = new Operator\Users\ListPublicKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUser;
    }

    public function users👷ListPublicKeysForUserListing(): Operator\Users\ListPublicKeysForUserListing
    {
        if ($this->users👷ListPublicKeysForUserListing instanceof Operator\Users\ListPublicKeysForUserListing === false) {
            $this->users👷ListPublicKeysForUserListing = new Operator\Users\ListPublicKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Keys());
        }

        return $this->users👷ListPublicKeysForUserListing;
    }

    public function orgs👷ListForUser(): Operator\Orgs\ListForUser
    {
        if ($this->orgs👷ListForUser instanceof Operator\Orgs\ListForUser === false) {
            $this->orgs👷ListForUser = new Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUser;
    }

    public function orgs👷ListForUserListing(): Operator\Orgs\ListForUserListing
    {
        if ($this->orgs👷ListForUserListing instanceof Operator\Orgs\ListForUserListing === false) {
            $this->orgs👷ListForUserListing = new Operator\Orgs\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->orgs👷ListForUserListing;
    }

    public function packages👷ListPackagesForUser(): Operator\Packages\ListPackagesForUser
    {
        if ($this->packages👷ListPackagesForUser instanceof Operator\Packages\ListPackagesForUser === false) {
            $this->packages👷ListPackagesForUser = new Operator\Packages\ListPackagesForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages());
        }

        return $this->packages👷ListPackagesForUser;
    }

    public function packages👷ListPackagesForUserListing(): Operator\Packages\ListPackagesForUserListing
    {
        if ($this->packages👷ListPackagesForUserListing instanceof Operator\Packages\ListPackagesForUserListing === false) {
            $this->packages👷ListPackagesForUserListing = new Operator\Packages\ListPackagesForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages());
        }

        return $this->packages👷ListPackagesForUserListing;
    }

    public function packages👷GetPackageForUser(): Operator\Packages\GetPackageForUser
    {
        if ($this->packages👷GetPackageForUser instanceof Operator\Packages\GetPackageForUser === false) {
            $this->packages👷GetPackageForUser = new Operator\Packages\GetPackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷GetPackageForUser;
    }

    public function packages👷DeletePackageForUser(): Operator\Packages\DeletePackageForUser
    {
        if ($this->packages👷DeletePackageForUser instanceof Operator\Packages\DeletePackageForUser === false) {
            $this->packages👷DeletePackageForUser = new Operator\Packages\DeletePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName());
        }

        return $this->packages👷DeletePackageForUser;
    }

    public function packages👷RestorePackageForUser(): Operator\Packages\RestorePackageForUser
    {
        if ($this->packages👷RestorePackageForUser instanceof Operator\Packages\RestorePackageForUser === false) {
            $this->packages👷RestorePackageForUser = new Operator\Packages\RestorePackageForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore());
        }

        return $this->packages👷RestorePackageForUser;
    }

    public function packages👷GetAllPackageVersionsForPackageOwnedByUser(): Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser
    {
        if ($this->packages👷GetAllPackageVersionsForPackageOwnedByUser instanceof Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser === false) {
            $this->packages👷GetAllPackageVersionsForPackageOwnedByUser = new Operator\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions());
        }

        return $this->packages👷GetAllPackageVersionsForPackageOwnedByUser;
    }

    public function packages👷GetPackageVersionForUser(): Operator\Packages\GetPackageVersionForUser
    {
        if ($this->packages👷GetPackageVersionForUser instanceof Operator\Packages\GetPackageVersionForUser === false) {
            $this->packages👷GetPackageVersionForUser = new Operator\Packages\GetPackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷GetPackageVersionForUser;
    }

    public function packages👷DeletePackageVersionForUser(): Operator\Packages\DeletePackageVersionForUser
    {
        if ($this->packages👷DeletePackageVersionForUser instanceof Operator\Packages\DeletePackageVersionForUser === false) {
            $this->packages👷DeletePackageVersionForUser = new Operator\Packages\DeletePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId());
        }

        return $this->packages👷DeletePackageVersionForUser;
    }

    public function packages👷RestorePackageVersionForUser(): Operator\Packages\RestorePackageVersionForUser
    {
        if ($this->packages👷RestorePackageVersionForUser instanceof Operator\Packages\RestorePackageVersionForUser === false) {
            $this->packages👷RestorePackageVersionForUser = new Operator\Packages\RestorePackageVersionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore());
        }

        return $this->packages👷RestorePackageVersionForUser;
    }

    public function projects👷ListForUser(): Operator\Projects\ListForUser
    {
        if ($this->projects👷ListForUser instanceof Operator\Projects\ListForUser === false) {
            $this->projects👷ListForUser = new Operator\Projects\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUser;
    }

    public function projects👷ListForUserListing(): Operator\Projects\ListForUserListing
    {
        if ($this->projects👷ListForUserListing instanceof Operator\Projects\ListForUserListing === false) {
            $this->projects👷ListForUserListing = new Operator\Projects\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());
        }

        return $this->projects👷ListForUserListing;
    }

    public function activity👷ListReceivedEventsForUser(): Operator\Activity\ListReceivedEventsForUser
    {
        if ($this->activity👷ListReceivedEventsForUser instanceof Operator\Activity\ListReceivedEventsForUser === false) {
            $this->activity👷ListReceivedEventsForUser = new Operator\Activity\ListReceivedEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents());
        }

        return $this->activity👷ListReceivedEventsForUser;
    }

    public function activity👷ListReceivedEventsForUserListing(): Operator\Activity\ListReceivedEventsForUserListing
    {
        if ($this->activity👷ListReceivedEventsForUserListing instanceof Operator\Activity\ListReceivedEventsForUserListing === false) {
            $this->activity👷ListReceivedEventsForUserListing = new Operator\Activity\ListReceivedEventsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents());
        }

        return $this->activity👷ListReceivedEventsForUserListing;
    }

    public function activity👷ListReceivedPublicEventsForUser(): Operator\Activity\ListReceivedPublicEventsForUser
    {
        if ($this->activity👷ListReceivedPublicEventsForUser instanceof Operator\Activity\ListReceivedPublicEventsForUser === false) {
            $this->activity👷ListReceivedPublicEventsForUser = new Operator\Activity\ListReceivedPublicEventsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_());
        }

        return $this->activity👷ListReceivedPublicEventsForUser;
    }

    public function activity👷ListReceivedPublicEventsForUserListing(): Operator\Activity\ListReceivedPublicEventsForUserListing
    {
        if ($this->activity👷ListReceivedPublicEventsForUserListing instanceof Operator\Activity\ListReceivedPublicEventsForUserListing === false) {
            $this->activity👷ListReceivedPublicEventsForUserListing = new Operator\Activity\ListReceivedPublicEventsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_());
        }

        return $this->activity👷ListReceivedPublicEventsForUserListing;
    }

    public function repos👷ListForUser(): Operator\Repos\ListForUser
    {
        if ($this->repos👷ListForUser instanceof Operator\Repos\ListForUser === false) {
            $this->repos👷ListForUser = new Operator\Repos\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUser;
    }

    public function repos👷ListForUserListing(): Operator\Repos\ListForUserListing
    {
        if ($this->repos👷ListForUserListing instanceof Operator\Repos\ListForUserListing === false) {
            $this->repos👷ListForUserListing = new Operator\Repos\ListForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Repos());
        }

        return $this->repos👷ListForUserListing;
    }

    public function billing👷GetGithubActionsBillingUser(): Operator\Billing\GetGithubActionsBillingUser
    {
        if ($this->billing👷GetGithubActionsBillingUser instanceof Operator\Billing\GetGithubActionsBillingUser === false) {
            $this->billing👷GetGithubActionsBillingUser = new Operator\Billing\GetGithubActionsBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions());
        }

        return $this->billing👷GetGithubActionsBillingUser;
    }

    public function billing👷GetGithubPackagesBillingUser(): Operator\Billing\GetGithubPackagesBillingUser
    {
        if ($this->billing👷GetGithubPackagesBillingUser instanceof Operator\Billing\GetGithubPackagesBillingUser === false) {
            $this->billing👷GetGithubPackagesBillingUser = new Operator\Billing\GetGithubPackagesBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages());
        }

        return $this->billing👷GetGithubPackagesBillingUser;
    }

    public function billing👷GetSharedStorageBillingUser(): Operator\Billing\GetSharedStorageBillingUser
    {
        if ($this->billing👷GetSharedStorageBillingUser instanceof Operator\Billing\GetSharedStorageBillingUser === false) {
            $this->billing👷GetSharedStorageBillingUser = new Operator\Billing\GetSharedStorageBillingUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage());
        }

        return $this->billing👷GetSharedStorageBillingUser;
    }

    public function users👷ListSocialAccountsForUser(): Operator\Users\ListSocialAccountsForUser
    {
        if ($this->users👷ListSocialAccountsForUser instanceof Operator\Users\ListSocialAccountsForUser === false) {
            $this->users👷ListSocialAccountsForUser = new Operator\Users\ListSocialAccountsForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForUser;
    }

    public function users👷ListSocialAccountsForUserListing(): Operator\Users\ListSocialAccountsForUserListing
    {
        if ($this->users👷ListSocialAccountsForUserListing instanceof Operator\Users\ListSocialAccountsForUserListing === false) {
            $this->users👷ListSocialAccountsForUserListing = new Operator\Users\ListSocialAccountsForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts());
        }

        return $this->users👷ListSocialAccountsForUserListing;
    }

    public function users👷ListSshSigningKeysForUser(): Operator\Users\ListSshSigningKeysForUser
    {
        if ($this->users👷ListSshSigningKeysForUser instanceof Operator\Users\ListSshSigningKeysForUser === false) {
            $this->users👷ListSshSigningKeysForUser = new Operator\Users\ListSshSigningKeysForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForUser;
    }

    public function users👷ListSshSigningKeysForUserListing(): Operator\Users\ListSshSigningKeysForUserListing
    {
        if ($this->users👷ListSshSigningKeysForUserListing instanceof Operator\Users\ListSshSigningKeysForUserListing === false) {
            $this->users👷ListSshSigningKeysForUserListing = new Operator\Users\ListSshSigningKeysForUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys());
        }

        return $this->users👷ListSshSigningKeysForUserListing;
    }

    public function activity👷ListReposStarredByUser(): Operator\Activity\ListReposStarredByUser
    {
        if ($this->activity👷ListReposStarredByUser instanceof Operator\Activity\ListReposStarredByUser === false) {
            $this->activity👷ListReposStarredByUser = new Operator\Activity\ListReposStarredByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Starred());
        }

        return $this->activity👷ListReposStarredByUser;
    }

    public function activity👷ListReposWatchedByUser(): Operator\Activity\ListReposWatchedByUser
    {
        if ($this->activity👷ListReposWatchedByUser instanceof Operator\Activity\ListReposWatchedByUser === false) {
            $this->activity👷ListReposWatchedByUser = new Operator\Activity\ListReposWatchedByUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUser;
    }

    public function activity👷ListReposWatchedByUserListing(): Operator\Activity\ListReposWatchedByUserListing
    {
        if ($this->activity👷ListReposWatchedByUserListing instanceof Operator\Activity\ListReposWatchedByUserListing === false) {
            $this->activity👷ListReposWatchedByUserListing = new Operator\Activity\ListReposWatchedByUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Subscriptions());
        }

        return $this->activity👷ListReposWatchedByUserListing;
    }

    public function meta👷GetAllVersions(): Operator\Meta\GetAllVersions
    {
        if ($this->meta👷GetAllVersions instanceof Operator\Meta\GetAllVersions === false) {
            $this->meta👷GetAllVersions = new Operator\Meta\GetAllVersions($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Versions());
        }

        return $this->meta👷GetAllVersions;
    }

    public function meta👷GetZen(): Operator\Meta\GetZen
    {
        if ($this->meta👷GetZen instanceof Operator\Meta\GetZen === false) {
            $this->meta👷GetZen = new Operator\Meta\GetZen($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Zen());
        }

        return $this->meta👷GetZen;
    }
}
