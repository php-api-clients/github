<?php

declare (strict_types=1);
namespace ApiClients\Client\Github;

final class Hydrators implements \EventSauce\ObjectHydrator\ObjectMapper
{
    private ?\ApiClients\Client\Github\Hydrator\Operation\Root $operation🌀Root = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App $operation🌀App = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $operation🌀AppManifests🌀CbCodeRcb🌀Conversions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App\Hook\Config $operation🌀App🌀Hook🌀Config = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries $operation🌀App🌀Hook🌀Deliveries = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App\Installations $operation🌀App🌀Installations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Applications\CbClientIdRcb\Token $operation🌀Applications🌀CbClientIdRcb🌀Token = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\CodesOfConduct $operation🌀CodesOfConduct = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Emojis $operation🌀Emojis = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Events $operation🌀Events = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Feeds $operation🌀Feeds = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gists $operation🌀Gists = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb $operation🌀Gists🌀CbGistIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Comments $operation🌀Gists🌀CbGistIdRcb🌀Comments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Commits $operation🌀Gists🌀CbGistIdRcb🌀Commits = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Star $operation🌀Gists🌀CbGistIdRcb🌀Star = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates $operation🌀Gitignore🌀Templates = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates\CbNameRcb $operation🌀Gitignore🌀Templates🌀CbNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Installation\Repositories $operation🌀Installation🌀Repositories = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Issues $operation🌀Issues = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Licenses $operation🌀Licenses = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Licenses\CbLicenseRcb $operation🌀Licenses🌀CbLicenseRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb $operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Plans $operation🌀MarketplaceListing🌀Plans = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Meta $operation🌀Meta = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Organizations $operation🌀Organizations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Blocks $operation🌀Orgs🌀CbOrgRcb🌀Blocks = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces $operation🌀Orgs🌀CbOrgRcb🌀Codespaces = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations $operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Hooks $operation🌀Orgs🌀CbOrgRcb🌀Hooks = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Installations $operation🌀Orgs🌀CbOrgRcb🌀Installations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits $operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop $operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations $operation🌀Orgs🌀CbOrgRcb🌀Migrations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages $operation🌀Orgs🌀CbOrgRcb🌀Packages = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions $operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Repos $operation🌀Orgs🌀CbOrgRcb🌀Repos = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers $operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Teams = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb $operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves $operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\CbColumnIdRcb $operation🌀Projects🌀Columns🌀CbColumnIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\RateLimit $operation🌀RateLimit = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_ $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Code $operation🌀Search🌀Code = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Commits $operation🌀Search🌀Commits = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Issues $operation🌀Search🌀Issues = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Labels $operation🌀Search🌀Labels = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Repositories $operation🌀Search🌀Repositories = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Topics $operation🌀Search🌀Topics = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Search\Users $operation🌀Search🌀Users = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User $operation🌀User = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets $operation🌀User🌀Codespaces🌀Secrets = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\PublicKey $operation🌀User🌀Codespaces🌀Secrets🌀PublicKey = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb $operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports $operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish $operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Email\Visibility $operation🌀User🌀Email🌀Visibility = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\GpgKeys $operation🌀User🌀GpgKeys = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories $operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Keys $operation🌀User🌀Keys = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\MarketplacePurchases $operation🌀User🌀MarketplacePurchases = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\SshSigningKeys $operation🌀User🌀SshSigningKeys = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\User\Starred $operation🌀User🌀Starred = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Hovercard $operation🌀Users🌀CbUsernameRcb🌀Hovercard = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Keys $operation🌀Users🌀CbUsernameRcb🌀Keys = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Starred $operation🌀Users🌀CbUsernameRcb🌀Starred = null;
    private ?\ApiClients\Client\Github\Hydrator\Operation\Versions $operation🌀Versions = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\BranchProtectionRule $webHook🌀BranchProtectionRule = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\CheckRun $webHook🌀CheckRun = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\CheckSuite $webHook🌀CheckSuite = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\CodeScanningAlert $webHook🌀CodeScanningAlert = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\CommitComment $webHook🌀CommitComment = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Create $webHook🌀Create = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Delete $webHook🌀Delete = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\DependabotAlert $webHook🌀DependabotAlert = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\DeployKey $webHook🌀DeployKey = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Deployment $webHook🌀Deployment = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\DeploymentStatus $webHook🌀DeploymentStatus = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Discussion $webHook🌀Discussion = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\DiscussionComment $webHook🌀DiscussionComment = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Fork $webHook🌀Fork = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\GithubAppAuthorization $webHook🌀GithubAppAuthorization = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Gollum $webHook🌀Gollum = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Installation $webHook🌀Installation = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\InstallationRepositories $webHook🌀InstallationRepositories = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\InstallationTarget $webHook🌀InstallationTarget = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\IssueComment $webHook🌀IssueComment = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Issues $webHook🌀Issues = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Label $webHook🌀Label = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\MarketplacePurchase $webHook🌀MarketplacePurchase = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Member $webHook🌀Member = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Membership $webHook🌀Membership = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\MergeGroup $webHook🌀MergeGroup = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Meta $webHook🌀Meta = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Milestone $webHook🌀Milestone = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\OrgBlock $webHook🌀OrgBlock = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Organization $webHook🌀Organization = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Package $webHook🌀Package = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\PageBuild $webHook🌀PageBuild = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Ping $webHook🌀Ping = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\ProjectCard $webHook🌀ProjectCard = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Project $webHook🌀Project = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\ProjectColumn $webHook🌀ProjectColumn = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2 $webHook🌀ProjectsV2 = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2Item $webHook🌀ProjectsV2Item = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Public_ $webHook🌀Public_ = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\PullRequest $webHook🌀PullRequest = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewComment $webHook🌀PullRequestReviewComment = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\PullRequestReview $webHook🌀PullRequestReview = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewThread $webHook🌀PullRequestReviewThread = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Push $webHook🌀Push = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\RegistryPackage $webHook🌀RegistryPackage = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Release $webHook🌀Release = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Repository $webHook🌀Repository = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\RepositoryDispatch $webHook🌀RepositoryDispatch = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\RepositoryImport $webHook🌀RepositoryImport = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\RepositoryVulnerabilityAlert $webHook🌀RepositoryVulnerabilityAlert = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlert $webHook🌀SecretScanningAlert = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlertLocation $webHook🌀SecretScanningAlertLocation = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\SecurityAdvisory $webHook🌀SecurityAdvisory = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\SecurityAndAnalysis $webHook🌀SecurityAndAnalysis = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Sponsorship $webHook🌀Sponsorship = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Star $webHook🌀Star = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Status $webHook🌀Status = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\TeamAdd $webHook🌀TeamAdd = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Team $webHook🌀Team = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\Watch $webHook🌀Watch = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\WorkflowDispatch $webHook🌀WorkflowDispatch = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\WorkflowJob $webHook🌀WorkflowJob = null;
    private ?\ApiClients\Client\Github\Hydrator\WebHook\WorkflowRun $webHook🌀WorkflowRun = null;
    public function hydrateObject(string $className, array $payload) : object
    {
        return match ($className) {
            '\\ApiClients\\Client\\Github\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Integration' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', '\\ApiClients\\Client\\Github\\Schema\\BasicError', '\\ApiClients\\Client\\Github\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\HookDeliveryItem', '\\ApiClients\\Client\\Github\\Schema\\ScimError', '\\ApiClients\\Client\\Github\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\HookDelivery' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dependencies' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Authorization' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotAlertWithRepository' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationSecretScanningAlert', '\\ApiClients\\Client\\Github\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Event' => $this->getObjectMapperOperation🌀Events()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Feed' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\BaseGist', '\\ApiClients\\Client\\Github\\Schema\\GistSimple' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Issue' => $this->getObjectMapperOperation🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\LicenseSimple' => $this->getObjectMapperOperation🌀Licenses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\MarketplaceListingPlan' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Plans()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Thread', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Organizations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationFull', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OidcCustomSub', '\\ApiClients\\Client\\Github\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRequiredWorkflows\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\RequiredWorkflow' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListOrgVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Blocks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningOrganizationAlertItems' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListInOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrgHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Team' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Codespace' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OrgMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\MinimalRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PackageVersion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Repository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamProject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ProjectCard', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RateLimitOverview' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RepoRequiredWorkflow' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WorkflowUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\FullRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRequiredWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\EnvironmentApprovals' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PendingDeployment', '\\ApiClients\\Client\\Github\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WorkflowRunUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ShortBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\BranchWithProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\BranchProtection', '\\ApiClients\\Client\\Github\\Schema\\ProtectedBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ProtectedBranchAdminEnforced' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ProtectedBranchPullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\StatusCheckPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CheckRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CheckSuitePreference' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAlertItems' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAlertInstance' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Collaborator' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\BranchShort' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CommunityProfile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ContentTree', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\FileCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DependencyGraphDiff' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Environment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GitCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GitRef' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GitTag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Hook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PorterLargeFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\IssueEvent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Milestone' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Page' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PageBuild', '\\ApiClients\\Client\\Github\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PagesHealthCheck' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\DiffEntry' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\SecretScanningLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ContributorActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ContentTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ReferrerTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\CodespaceWithFullRepository' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Email🌀Visibility()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\UserMarketplacePurchase' => $this->getObjectMapperOperation🌀User🌀MarketplacePurchases()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Meta\\GetAllVersions\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Versions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookBranchProtectionRuleEdited' => $this->getObjectMapperWebHook🌀BranchProtectionRule()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCheckRunRerequested', '\\ApiClients\\Client\\Github\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🌀CheckRun()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCheckSuiteRerequested' => $this->getObjectMapperWebHook🌀CheckSuite()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCodeScanningAlertReopenedByUser' => $this->getObjectMapperWebHook🌀CodeScanningAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCommitCommentCreated' => $this->getObjectMapperWebHook🌀CommitComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🌀Create()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🌀Delete()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🌀DependabotAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🌀DeployKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDeploymentCreated' => $this->getObjectMapperWebHook🌀Deployment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDeploymentStatusCreated' => $this->getObjectMapperWebHook🌀DeploymentStatus()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🌀Discussion()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDiscussionCommentEdited' => $this->getObjectMapperWebHook🌀DiscussionComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookFork' => $this->getObjectMapperWebHook🌀Fork()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🌀GithubAppAuthorization()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookGollum' => $this->getObjectMapperWebHook🌀Gollum()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🌀Installation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🌀InstallationRepositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookInstallationTargetRenamed' => $this->getObjectMapperWebHook🌀InstallationTarget()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookIssueCommentEdited' => $this->getObjectMapperWebHook🌀IssueComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookLabelEdited' => $this->getObjectMapperWebHook🌀Label()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMarketplacePurchasePurchased' => $this->getObjectMapperWebHook🌀MarketplacePurchase()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🌀Member()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🌀Membership()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMergeGroupChecksRequested' => $this->getObjectMapperWebHook🌀MergeGroup()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMetaDeleted' => $this->getObjectMapperWebHook🌀Meta()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🌀Milestone()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookOrgBlockUnblocked' => $this->getObjectMapperWebHook🌀OrgBlock()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookOrganizationRenamed' => $this->getObjectMapperWebHook🌀Organization()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPackageUpdated' => $this->getObjectMapperWebHook🌀Package()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPageBuild' => $this->getObjectMapperWebHook🌀PageBuild()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPing', '\\ApiClients\\Client\\Github\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🌀Ping()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectCardMoved' => $this->getObjectMapperWebHook🌀ProjectCard()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🌀Project()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🌀ProjectColumn()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🌀ProjectsV2()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectsV2ItemRestored' => $this->getObjectMapperWebHook🌀ProjectsV2Item()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🌀Public_()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestUnlocked' => $this->getObjectMapperWebHook🌀PullRequest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestReviewCommentEdited' => $this->getObjectMapperWebHook🌀PullRequestReviewComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestReviewSubmitted' => $this->getObjectMapperWebHook🌀PullRequestReview()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestReviewThreadUnresolved' => $this->getObjectMapperWebHook🌀PullRequestReviewThread()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPush' => $this->getObjectMapperWebHook🌀Push()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRegistryPackageUpdated' => $this->getObjectMapperWebHook🌀RegistryPackage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookReleaseUnpublished' => $this->getObjectMapperWebHook🌀Release()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🌀Repository()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🌀RepositoryDispatch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🌀RepositoryImport()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryVulnerabilityAlertResolve' => $this->getObjectMapperWebHook🌀RepositoryVulnerabilityAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🌀SecretScanningAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecretScanningAlertLocationCreated', '\\ApiClients\\Client\\Github\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🌀SecretScanningAlertLocation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecurityAdvisoryWithdrawn' => $this->getObjectMapperWebHook🌀SecurityAdvisory()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecurityAndAnalysis' => $this->getObjectMapperWebHook🌀SecurityAndAnalysis()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🌀Sponsorship()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🌀Star()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookStatus' => $this->getObjectMapperWebHook🌀Status()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🌀TeamAdd()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🌀Team()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🌀Watch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🌀WorkflowDispatch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWorkflowJobWaiting' => $this->getObjectMapperWebHook🌀WorkflowJob()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWorkflowRunRequested' => $this->getObjectMapperWebHook🌀WorkflowRun()->hydrateObject($className, $payload),
        };
    }
    public function hydrateObjects(string $className, iterable $payloads) : \EventSauce\ObjectHydrator\IterableList
    {
        return new \EventSauce\ObjectHydrator\IterableList($this->doHydrateObjects($className, $payloads));
    }
    private function doHydrateObjects(string $className, iterable $payloads) : \Generator
    {
        foreach ($payloads as $index => $payload) {
            (yield $index => $this->hydrateObject($className, $payload));
        }
    }
    public function serializeObject(object $object) : mixed
    {
        return match ($object::class) {
            '\\ApiClients\\Client\\Github\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Integration' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', '\\ApiClients\\Client\\Github\\Schema\\BasicError', '\\ApiClients\\Client\\Github\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\HookDeliveryItem', '\\ApiClients\\Client\\Github\\Schema\\ScimError', '\\ApiClients\\Client\\Github\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\HookDelivery' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dependencies' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Authorization' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotAlertWithRepository' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationSecretScanningAlert', '\\ApiClients\\Client\\Github\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Event' => $this->getObjectMapperOperation🌀Events()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Feed' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\BaseGist', '\\ApiClients\\Client\\Github\\Schema\\GistSimple' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Issue' => $this->getObjectMapperOperation🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\LicenseSimple' => $this->getObjectMapperOperation🌀Licenses()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\MarketplaceListingPlan' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Plans()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Thread', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Organizations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationFull', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OidcCustomSub', '\\ApiClients\\Client\\Github\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRequiredWorkflows\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\RequiredWorkflow' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListOrgVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Blocks()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningOrganizationAlertItems' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListInOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrgHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Team' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Codespace' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OrgMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\MinimalRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PackageVersion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Repository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamProject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ProjectCard', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RateLimitOverview' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RepoRequiredWorkflow' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WorkflowUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\FullRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRequiredWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\EnvironmentApprovals' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PendingDeployment', '\\ApiClients\\Client\\Github\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WorkflowRunUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ShortBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\BranchWithProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\BranchProtection', '\\ApiClients\\Client\\Github\\Schema\\ProtectedBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ProtectedBranchAdminEnforced' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ProtectedBranchPullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\StatusCheckPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\BranchRestrictionPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CheckRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CheckSuitePreference' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAlertItems' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAlertInstance' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', '\\ApiClients\\Client\\Github\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Collaborator' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\BranchShort' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CommunityProfile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ContentTree', '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\FileCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DependencyGraphDiff' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Environment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GitCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GitRef' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GitTag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Hook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PorterLargeFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\IssueEvent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Milestone' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Page' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PageBuild', '\\ApiClients\\Client\\Github\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PagesHealthCheck' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\DiffEntry' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\PullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\SecretScanningLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ContributorActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ContentTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ReferrerTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', '\\ApiClients\\Client\\Github\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\CodespaceWithFullRepository' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Email🌀Visibility()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\UserMarketplacePurchase' => $this->getObjectMapperOperation🌀User🌀MarketplacePurchases()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\Operation\\Meta\\GetAllVersions\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Versions()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookBranchProtectionRuleEdited' => $this->getObjectMapperWebHook🌀BranchProtectionRule()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCheckRunRerequested', '\\ApiClients\\Client\\Github\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🌀CheckRun()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCheckSuiteRerequested' => $this->getObjectMapperWebHook🌀CheckSuite()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCodeScanningAlertReopenedByUser' => $this->getObjectMapperWebHook🌀CodeScanningAlert()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCommitCommentCreated' => $this->getObjectMapperWebHook🌀CommitComment()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🌀Create()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🌀Delete()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🌀DependabotAlert()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🌀DeployKey()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDeploymentCreated' => $this->getObjectMapperWebHook🌀Deployment()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDeploymentStatusCreated' => $this->getObjectMapperWebHook🌀DeploymentStatus()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🌀Discussion()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookDiscussionCommentEdited' => $this->getObjectMapperWebHook🌀DiscussionComment()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookFork' => $this->getObjectMapperWebHook🌀Fork()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🌀GithubAppAuthorization()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookGollum' => $this->getObjectMapperWebHook🌀Gollum()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🌀Installation()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🌀InstallationRepositories()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookInstallationTargetRenamed' => $this->getObjectMapperWebHook🌀InstallationTarget()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookIssueCommentEdited' => $this->getObjectMapperWebHook🌀IssueComment()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookLabelEdited' => $this->getObjectMapperWebHook🌀Label()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMarketplacePurchasePurchased' => $this->getObjectMapperWebHook🌀MarketplacePurchase()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🌀Member()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🌀Membership()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMergeGroupChecksRequested' => $this->getObjectMapperWebHook🌀MergeGroup()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMetaDeleted' => $this->getObjectMapperWebHook🌀Meta()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🌀Milestone()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookOrgBlockUnblocked' => $this->getObjectMapperWebHook🌀OrgBlock()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookOrganizationRenamed' => $this->getObjectMapperWebHook🌀Organization()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPackageUpdated' => $this->getObjectMapperWebHook🌀Package()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPageBuild' => $this->getObjectMapperWebHook🌀PageBuild()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPing', '\\ApiClients\\Client\\Github\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🌀Ping()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectCardMoved' => $this->getObjectMapperWebHook🌀ProjectCard()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🌀Project()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🌀ProjectColumn()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🌀ProjectsV2()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookProjectsV2ItemRestored' => $this->getObjectMapperWebHook🌀ProjectsV2Item()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🌀Public_()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestUnlocked' => $this->getObjectMapperWebHook🌀PullRequest()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestReviewCommentEdited' => $this->getObjectMapperWebHook🌀PullRequestReviewComment()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestReviewSubmitted' => $this->getObjectMapperWebHook🌀PullRequestReview()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPullRequestReviewThreadUnresolved' => $this->getObjectMapperWebHook🌀PullRequestReviewThread()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookPush' => $this->getObjectMapperWebHook🌀Push()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRegistryPackageUpdated' => $this->getObjectMapperWebHook🌀RegistryPackage()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookReleaseUnpublished' => $this->getObjectMapperWebHook🌀Release()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🌀Repository()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🌀RepositoryDispatch()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🌀RepositoryImport()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookRepositoryVulnerabilityAlertResolve' => $this->getObjectMapperWebHook🌀RepositoryVulnerabilityAlert()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🌀SecretScanningAlert()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecretScanningAlertLocationCreated', '\\ApiClients\\Client\\Github\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🌀SecretScanningAlertLocation()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecurityAdvisoryWithdrawn' => $this->getObjectMapperWebHook🌀SecurityAdvisory()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSecurityAndAnalysis' => $this->getObjectMapperWebHook🌀SecurityAndAnalysis()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🌀Sponsorship()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🌀Star()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookStatus' => $this->getObjectMapperWebHook🌀Status()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🌀TeamAdd()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🌀Team()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🌀Watch()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🌀WorkflowDispatch()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWorkflowJobWaiting' => $this->getObjectMapperWebHook🌀WorkflowJob()->serializeObject($object),
            '\\ApiClients\\Client\\Github\\Schema\\WebhookWorkflowRunRequested' => $this->getObjectMapperWebHook🌀WorkflowRun()->serializeObject($object),
        };
    }
    public function serializeObjects(iterable $payloads) : \EventSauce\ObjectHydrator\IterableList
    {
        return new \EventSauce\ObjectHydrator\IterableList($this->doSerializeObjects($payloads));
    }
    private function doSerializeObjects(iterable $objects) : \Generator
    {
        foreach ($objects as $index => $object) {
            (yield $index => $this->serializeObject($object));
        }
    }
    public function getObjectMapperOperation🌀Root() : \ApiClients\Client\Github\Hydrator\Operation\Root
    {
        if ($this->operation🌀Root instanceof \ApiClients\Client\Github\Hydrator\Operation\Root === false) {
            $this->operation🌀Root = new \ApiClients\Client\Github\Hydrator\Operation\Root();
        }
        return $this->operation🌀Root;
    }
    public function getObjectMapperOperation🌀App() : \ApiClients\Client\Github\Hydrator\Operation\App
    {
        if ($this->operation🌀App instanceof \ApiClients\Client\Github\Hydrator\Operation\App === false) {
            $this->operation🌀App = new \ApiClients\Client\Github\Hydrator\Operation\App();
        }
        return $this->operation🌀App;
    }
    public function getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions() : \ApiClients\Client\Github\Hydrator\Operation\AppManifests\CbCodeRcb\Conversions
    {
        if ($this->operation🌀AppManifests🌀CbCodeRcb🌀Conversions instanceof \ApiClients\Client\Github\Hydrator\Operation\AppManifests\CbCodeRcb\Conversions === false) {
            $this->operation🌀AppManifests🌀CbCodeRcb🌀Conversions = new \ApiClients\Client\Github\Hydrator\Operation\AppManifests\CbCodeRcb\Conversions();
        }
        return $this->operation🌀AppManifests🌀CbCodeRcb🌀Conversions;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Config() : \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Config
    {
        if ($this->operation🌀App🌀Hook🌀Config instanceof \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Config === false) {
            $this->operation🌀App🌀Hook🌀Config = new \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Config();
        }
        return $this->operation🌀App🌀Hook🌀Config;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries() : \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries instanceof \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries === false) {
            $this->operation🌀App🌀Hook🌀Deliveries = new \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries();
        }
        return $this->operation🌀App🌀Hook🌀Deliveries;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb();
        }
        return $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts() : \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts instanceof \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = new \ApiClients\Client\Github\Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts();
        }
        return $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts;
    }
    public function getObjectMapperOperation🌀App🌀Installations() : \ApiClients\Client\Github\Hydrator\Operation\App\Installations
    {
        if ($this->operation🌀App🌀Installations instanceof \ApiClients\Client\Github\Hydrator\Operation\App\Installations === false) {
            $this->operation🌀App🌀Installations = new \ApiClients\Client\Github\Hydrator\Operation\App\Installations();
        }
        return $this->operation🌀App🌀Installations;
    }
    public function getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens() : \ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens
    {
        if ($this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens instanceof \ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens === false) {
            $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = new \ApiClients\Client\Github\Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens();
        }
        return $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens;
    }
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token() : \ApiClients\Client\Github\Hydrator\Operation\Applications\CbClientIdRcb\Token
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Token instanceof \ApiClients\Client\Github\Hydrator\Operation\Applications\CbClientIdRcb\Token === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Token = new \ApiClients\Client\Github\Hydrator\Operation\Applications\CbClientIdRcb\Token();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Token;
    }
    public function getObjectMapperOperation🌀CodesOfConduct() : \ApiClients\Client\Github\Hydrator\Operation\CodesOfConduct
    {
        if ($this->operation🌀CodesOfConduct instanceof \ApiClients\Client\Github\Hydrator\Operation\CodesOfConduct === false) {
            $this->operation🌀CodesOfConduct = new \ApiClients\Client\Github\Hydrator\Operation\CodesOfConduct();
        }
        return $this->operation🌀CodesOfConduct;
    }
    public function getObjectMapperOperation🌀Emojis() : \ApiClients\Client\Github\Hydrator\Operation\Emojis
    {
        if ($this->operation🌀Emojis instanceof \ApiClients\Client\Github\Hydrator\Operation\Emojis === false) {
            $this->operation🌀Emojis = new \ApiClients\Client\Github\Hydrator\Operation\Emojis();
        }
        return $this->operation🌀Emojis;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts() : \ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts instanceof \ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts = new \ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts() : \ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts instanceof \ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = new \ApiClients\Client\Github\Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Events() : \ApiClients\Client\Github\Hydrator\Operation\Events
    {
        if ($this->operation🌀Events instanceof \ApiClients\Client\Github\Hydrator\Operation\Events === false) {
            $this->operation🌀Events = new \ApiClients\Client\Github\Hydrator\Operation\Events();
        }
        return $this->operation🌀Events;
    }
    public function getObjectMapperOperation🌀Feeds() : \ApiClients\Client\Github\Hydrator\Operation\Feeds
    {
        if ($this->operation🌀Feeds instanceof \ApiClients\Client\Github\Hydrator\Operation\Feeds === false) {
            $this->operation🌀Feeds = new \ApiClients\Client\Github\Hydrator\Operation\Feeds();
        }
        return $this->operation🌀Feeds;
    }
    public function getObjectMapperOperation🌀Gists() : \ApiClients\Client\Github\Hydrator\Operation\Gists
    {
        if ($this->operation🌀Gists instanceof \ApiClients\Client\Github\Hydrator\Operation\Gists === false) {
            $this->operation🌀Gists = new \ApiClients\Client\Github\Hydrator\Operation\Gists();
        }
        return $this->operation🌀Gists;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb === false) {
            $this->operation🌀Gists🌀CbGistIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments() : \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Comments
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Comments instanceof \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Comments === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Comments = new \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Comments();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits() : \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Commits
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Commits instanceof \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Commits === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Commits = new \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Commits();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Commits;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star() : \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Star
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Star instanceof \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Star === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Star = new \ApiClients\Client\Github\Hydrator\Operation\Gists\CbGistIdRcb\Star();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Star;
    }
    public function getObjectMapperOperation🌀Gitignore🌀Templates() : \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates
    {
        if ($this->operation🌀Gitignore🌀Templates instanceof \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates === false) {
            $this->operation🌀Gitignore🌀Templates = new \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates();
        }
        return $this->operation🌀Gitignore🌀Templates;
    }
    public function getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates\CbNameRcb
    {
        if ($this->operation🌀Gitignore🌀Templates🌀CbNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates\CbNameRcb === false) {
            $this->operation🌀Gitignore🌀Templates🌀CbNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Gitignore\Templates\CbNameRcb();
        }
        return $this->operation🌀Gitignore🌀Templates🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Installation🌀Repositories() : \ApiClients\Client\Github\Hydrator\Operation\Installation\Repositories
    {
        if ($this->operation🌀Installation🌀Repositories instanceof \ApiClients\Client\Github\Hydrator\Operation\Installation\Repositories === false) {
            $this->operation🌀Installation🌀Repositories = new \ApiClients\Client\Github\Hydrator\Operation\Installation\Repositories();
        }
        return $this->operation🌀Installation🌀Repositories;
    }
    public function getObjectMapperOperation🌀Issues() : \ApiClients\Client\Github\Hydrator\Operation\Issues
    {
        if ($this->operation🌀Issues instanceof \ApiClients\Client\Github\Hydrator\Operation\Issues === false) {
            $this->operation🌀Issues = new \ApiClients\Client\Github\Hydrator\Operation\Issues();
        }
        return $this->operation🌀Issues;
    }
    public function getObjectMapperOperation🌀Licenses() : \ApiClients\Client\Github\Hydrator\Operation\Licenses
    {
        if ($this->operation🌀Licenses instanceof \ApiClients\Client\Github\Hydrator\Operation\Licenses === false) {
            $this->operation🌀Licenses = new \ApiClients\Client\Github\Hydrator\Operation\Licenses();
        }
        return $this->operation🌀Licenses;
    }
    public function getObjectMapperOperation🌀Licenses🌀CbLicenseRcb() : \ApiClients\Client\Github\Hydrator\Operation\Licenses\CbLicenseRcb
    {
        if ($this->operation🌀Licenses🌀CbLicenseRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Licenses\CbLicenseRcb === false) {
            $this->operation🌀Licenses🌀CbLicenseRcb = new \ApiClients\Client\Github\Hydrator\Operation\Licenses\CbLicenseRcb();
        }
        return $this->operation🌀Licenses🌀CbLicenseRcb;
    }
    public function getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb
    {
        if ($this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb === false) {
            $this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb();
        }
        return $this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb;
    }
    public function getObjectMapperOperation🌀MarketplaceListing🌀Plans() : \ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Plans
    {
        if ($this->operation🌀MarketplaceListing🌀Plans instanceof \ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Plans === false) {
            $this->operation🌀MarketplaceListing🌀Plans = new \ApiClients\Client\Github\Hydrator\Operation\MarketplaceListing\Plans();
        }
        return $this->operation🌀MarketplaceListing🌀Plans;
    }
    public function getObjectMapperOperation🌀Meta() : \ApiClients\Client\Github\Hydrator\Operation\Meta
    {
        if ($this->operation🌀Meta instanceof \ApiClients\Client\Github\Hydrator\Operation\Meta === false) {
            $this->operation🌀Meta = new \ApiClients\Client\Github\Hydrator\Operation\Meta();
        }
        return $this->operation🌀Meta;
    }
    public function getObjectMapperOperation🌀Notifications() : \ApiClients\Client\Github\Hydrator\Operation\Notifications
    {
        if ($this->operation🌀Notifications instanceof \ApiClients\Client\Github\Hydrator\Operation\Notifications === false) {
            $this->operation🌀Notifications = new \ApiClients\Client\Github\Hydrator\Operation\Notifications();
        }
        return $this->operation🌀Notifications;
    }
    public function getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription() : \ApiClients\Client\Github\Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription
    {
        if ($this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription instanceof \ApiClients\Client\Github\Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription === false) {
            $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = new \ApiClients\Client\Github\Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription();
        }
        return $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription;
    }
    public function getObjectMapperOperation🌀Organizations() : \ApiClients\Client\Github\Hydrator\Operation\Organizations
    {
        if ($this->operation🌀Organizations instanceof \ApiClients\Client\Github\Hydrator\Operation\Organizations === false) {
            $this->operation🌀Organizations = new \ApiClients\Client\Github\Hydrator\Operation\Organizations();
        }
        return $this->operation🌀Organizations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Blocks() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Blocks
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Blocks instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Blocks === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Blocks = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Blocks();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Blocks;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Hooks
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Hooks === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Hooks();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Installations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Installations instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Installations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Installations = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Installations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Installations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Packages instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Packages = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Packages;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Projects instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Projects = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Repos
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Repos instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Repos === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Repos = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Repos();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Repos;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb() : \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = new \ApiClients\Client\Github\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb();
        }
        return $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves() : \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves instanceof \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves = new \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves();
        }
        return $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\CbColumnIdRcb
    {
        if ($this->operation🌀Projects🌀Columns🌀CbColumnIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\CbColumnIdRcb === false) {
            $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Projects\Columns\CbColumnIdRcb();
        }
        return $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission() : \ApiClients\Client\Github\Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission instanceof \ApiClients\Client\Github\Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = new \ApiClients\Client\Github\Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission;
    }
    public function getObjectMapperOperation🌀RateLimit() : \ApiClients\Client\Github\Hydrator\Operation\RateLimit
    {
        if ($this->operation🌀RateLimit instanceof \ApiClients\Client\Github\Hydrator\Operation\RateLimit === false) {
            $this->operation🌀RateLimit = new \ApiClients\Client\Github\Hydrator\Operation\RateLimit();
        }
        return $this->operation🌀RateLimit;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows
    {
        if ($this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows === false) {
            $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows();
        }
        return $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb
    {
        if ($this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb === false) {
            $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb();
        }
        return $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing
    {
        if ($this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing === false) {
            $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing();
        }
        return $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_ === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views() : \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views instanceof \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views = new \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views;
    }
    public function getObjectMapperOperation🌀Search🌀Code() : \ApiClients\Client\Github\Hydrator\Operation\Search\Code
    {
        if ($this->operation🌀Search🌀Code instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Code === false) {
            $this->operation🌀Search🌀Code = new \ApiClients\Client\Github\Hydrator\Operation\Search\Code();
        }
        return $this->operation🌀Search🌀Code;
    }
    public function getObjectMapperOperation🌀Search🌀Commits() : \ApiClients\Client\Github\Hydrator\Operation\Search\Commits
    {
        if ($this->operation🌀Search🌀Commits instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Commits === false) {
            $this->operation🌀Search🌀Commits = new \ApiClients\Client\Github\Hydrator\Operation\Search\Commits();
        }
        return $this->operation🌀Search🌀Commits;
    }
    public function getObjectMapperOperation🌀Search🌀Issues() : \ApiClients\Client\Github\Hydrator\Operation\Search\Issues
    {
        if ($this->operation🌀Search🌀Issues instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Issues === false) {
            $this->operation🌀Search🌀Issues = new \ApiClients\Client\Github\Hydrator\Operation\Search\Issues();
        }
        return $this->operation🌀Search🌀Issues;
    }
    public function getObjectMapperOperation🌀Search🌀Labels() : \ApiClients\Client\Github\Hydrator\Operation\Search\Labels
    {
        if ($this->operation🌀Search🌀Labels instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Labels === false) {
            $this->operation🌀Search🌀Labels = new \ApiClients\Client\Github\Hydrator\Operation\Search\Labels();
        }
        return $this->operation🌀Search🌀Labels;
    }
    public function getObjectMapperOperation🌀Search🌀Repositories() : \ApiClients\Client\Github\Hydrator\Operation\Search\Repositories
    {
        if ($this->operation🌀Search🌀Repositories instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Repositories === false) {
            $this->operation🌀Search🌀Repositories = new \ApiClients\Client\Github\Hydrator\Operation\Search\Repositories();
        }
        return $this->operation🌀Search🌀Repositories;
    }
    public function getObjectMapperOperation🌀Search🌀Topics() : \ApiClients\Client\Github\Hydrator\Operation\Search\Topics
    {
        if ($this->operation🌀Search🌀Topics instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Topics === false) {
            $this->operation🌀Search🌀Topics = new \ApiClients\Client\Github\Hydrator\Operation\Search\Topics();
        }
        return $this->operation🌀Search🌀Topics;
    }
    public function getObjectMapperOperation🌀Search🌀Users() : \ApiClients\Client\Github\Hydrator\Operation\Search\Users
    {
        if ($this->operation🌀Search🌀Users instanceof \ApiClients\Client\Github\Hydrator\Operation\Search\Users === false) {
            $this->operation🌀Search🌀Users = new \ApiClients\Client\Github\Hydrator\Operation\Search\Users();
        }
        return $this->operation🌀Search🌀Users;
    }
    public function getObjectMapperOperation🌀User() : \ApiClients\Client\Github\Hydrator\Operation\User
    {
        if ($this->operation🌀User instanceof \ApiClients\Client\Github\Hydrator\Operation\User === false) {
            $this->operation🌀User = new \ApiClients\Client\Github\Hydrator\Operation\User();
        }
        return $this->operation🌀User;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets() : \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets = new \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets();
        }
        return $this->operation🌀User🌀Codespaces🌀Secrets;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey() : \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey = new \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\PublicKey();
        }
        return $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb() : \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb = new \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports() : \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports
    {
        if ($this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports === false) {
            $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports = new \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports();
        }
        return $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish() : \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish
    {
        if ($this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish === false) {
            $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish = new \ApiClients\Client\Github\Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish();
        }
        return $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish;
    }
    public function getObjectMapperOperation🌀User🌀Email🌀Visibility() : \ApiClients\Client\Github\Hydrator\Operation\User\Email\Visibility
    {
        if ($this->operation🌀User🌀Email🌀Visibility instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Email\Visibility === false) {
            $this->operation🌀User🌀Email🌀Visibility = new \ApiClients\Client\Github\Hydrator\Operation\User\Email\Visibility();
        }
        return $this->operation🌀User🌀Email🌀Visibility;
    }
    public function getObjectMapperOperation🌀User🌀GpgKeys() : \ApiClients\Client\Github\Hydrator\Operation\User\GpgKeys
    {
        if ($this->operation🌀User🌀GpgKeys instanceof \ApiClients\Client\Github\Hydrator\Operation\User\GpgKeys === false) {
            $this->operation🌀User🌀GpgKeys = new \ApiClients\Client\Github\Hydrator\Operation\User\GpgKeys();
        }
        return $this->operation🌀User🌀GpgKeys;
    }
    public function getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories() : \ApiClients\Client\Github\Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories
    {
        if ($this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories === false) {
            $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = new \ApiClients\Client\Github\Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories();
        }
        return $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀User🌀Keys() : \ApiClients\Client\Github\Hydrator\Operation\User\Keys
    {
        if ($this->operation🌀User🌀Keys instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Keys === false) {
            $this->operation🌀User🌀Keys = new \ApiClients\Client\Github\Hydrator\Operation\User\Keys();
        }
        return $this->operation🌀User🌀Keys;
    }
    public function getObjectMapperOperation🌀User🌀MarketplacePurchases() : \ApiClients\Client\Github\Hydrator\Operation\User\MarketplacePurchases
    {
        if ($this->operation🌀User🌀MarketplacePurchases instanceof \ApiClients\Client\Github\Hydrator\Operation\User\MarketplacePurchases === false) {
            $this->operation🌀User🌀MarketplacePurchases = new \ApiClients\Client\Github\Hydrator\Operation\User\MarketplacePurchases();
        }
        return $this->operation🌀User🌀MarketplacePurchases;
    }
    public function getObjectMapperOperation🌀User🌀SshSigningKeys() : \ApiClients\Client\Github\Hydrator\Operation\User\SshSigningKeys
    {
        if ($this->operation🌀User🌀SshSigningKeys instanceof \ApiClients\Client\Github\Hydrator\Operation\User\SshSigningKeys === false) {
            $this->operation🌀User🌀SshSigningKeys = new \ApiClients\Client\Github\Hydrator\Operation\User\SshSigningKeys();
        }
        return $this->operation🌀User🌀SshSigningKeys;
    }
    public function getObjectMapperOperation🌀User🌀Starred() : \ApiClients\Client\Github\Hydrator\Operation\User\Starred
    {
        if ($this->operation🌀User🌀Starred instanceof \ApiClients\Client\Github\Hydrator\Operation\User\Starred === false) {
            $this->operation🌀User🌀Starred = new \ApiClients\Client\Github\Hydrator\Operation\User\Starred();
        }
        return $this->operation🌀User🌀Starred;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard() : \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Hovercard
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Hovercard instanceof \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Hovercard === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Hovercard = new \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Hovercard();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Hovercard;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys() : \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Keys
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Keys instanceof \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Keys === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Keys = new \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Keys();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Keys;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred() : \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Starred
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Starred instanceof \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Starred === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Starred = new \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Starred();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Starred;
    }
    public function getObjectMapperOperation🌀Versions() : \ApiClients\Client\Github\Hydrator\Operation\Versions
    {
        if ($this->operation🌀Versions instanceof \ApiClients\Client\Github\Hydrator\Operation\Versions === false) {
            $this->operation🌀Versions = new \ApiClients\Client\Github\Hydrator\Operation\Versions();
        }
        return $this->operation🌀Versions;
    }
    public function getObjectMapperWebHook🌀BranchProtectionRule() : \ApiClients\Client\Github\Hydrator\WebHook\BranchProtectionRule
    {
        if ($this->webHook🌀BranchProtectionRule instanceof \ApiClients\Client\Github\Hydrator\WebHook\BranchProtectionRule === false) {
            $this->webHook🌀BranchProtectionRule = new \ApiClients\Client\Github\Hydrator\WebHook\BranchProtectionRule();
        }
        return $this->webHook🌀BranchProtectionRule;
    }
    public function getObjectMapperWebHook🌀CheckRun() : \ApiClients\Client\Github\Hydrator\WebHook\CheckRun
    {
        if ($this->webHook🌀CheckRun instanceof \ApiClients\Client\Github\Hydrator\WebHook\CheckRun === false) {
            $this->webHook🌀CheckRun = new \ApiClients\Client\Github\Hydrator\WebHook\CheckRun();
        }
        return $this->webHook🌀CheckRun;
    }
    public function getObjectMapperWebHook🌀CheckSuite() : \ApiClients\Client\Github\Hydrator\WebHook\CheckSuite
    {
        if ($this->webHook🌀CheckSuite instanceof \ApiClients\Client\Github\Hydrator\WebHook\CheckSuite === false) {
            $this->webHook🌀CheckSuite = new \ApiClients\Client\Github\Hydrator\WebHook\CheckSuite();
        }
        return $this->webHook🌀CheckSuite;
    }
    public function getObjectMapperWebHook🌀CodeScanningAlert() : \ApiClients\Client\Github\Hydrator\WebHook\CodeScanningAlert
    {
        if ($this->webHook🌀CodeScanningAlert instanceof \ApiClients\Client\Github\Hydrator\WebHook\CodeScanningAlert === false) {
            $this->webHook🌀CodeScanningAlert = new \ApiClients\Client\Github\Hydrator\WebHook\CodeScanningAlert();
        }
        return $this->webHook🌀CodeScanningAlert;
    }
    public function getObjectMapperWebHook🌀CommitComment() : \ApiClients\Client\Github\Hydrator\WebHook\CommitComment
    {
        if ($this->webHook🌀CommitComment instanceof \ApiClients\Client\Github\Hydrator\WebHook\CommitComment === false) {
            $this->webHook🌀CommitComment = new \ApiClients\Client\Github\Hydrator\WebHook\CommitComment();
        }
        return $this->webHook🌀CommitComment;
    }
    public function getObjectMapperWebHook🌀Create() : \ApiClients\Client\Github\Hydrator\WebHook\Create
    {
        if ($this->webHook🌀Create instanceof \ApiClients\Client\Github\Hydrator\WebHook\Create === false) {
            $this->webHook🌀Create = new \ApiClients\Client\Github\Hydrator\WebHook\Create();
        }
        return $this->webHook🌀Create;
    }
    public function getObjectMapperWebHook🌀Delete() : \ApiClients\Client\Github\Hydrator\WebHook\Delete
    {
        if ($this->webHook🌀Delete instanceof \ApiClients\Client\Github\Hydrator\WebHook\Delete === false) {
            $this->webHook🌀Delete = new \ApiClients\Client\Github\Hydrator\WebHook\Delete();
        }
        return $this->webHook🌀Delete;
    }
    public function getObjectMapperWebHook🌀DependabotAlert() : \ApiClients\Client\Github\Hydrator\WebHook\DependabotAlert
    {
        if ($this->webHook🌀DependabotAlert instanceof \ApiClients\Client\Github\Hydrator\WebHook\DependabotAlert === false) {
            $this->webHook🌀DependabotAlert = new \ApiClients\Client\Github\Hydrator\WebHook\DependabotAlert();
        }
        return $this->webHook🌀DependabotAlert;
    }
    public function getObjectMapperWebHook🌀DeployKey() : \ApiClients\Client\Github\Hydrator\WebHook\DeployKey
    {
        if ($this->webHook🌀DeployKey instanceof \ApiClients\Client\Github\Hydrator\WebHook\DeployKey === false) {
            $this->webHook🌀DeployKey = new \ApiClients\Client\Github\Hydrator\WebHook\DeployKey();
        }
        return $this->webHook🌀DeployKey;
    }
    public function getObjectMapperWebHook🌀Deployment() : \ApiClients\Client\Github\Hydrator\WebHook\Deployment
    {
        if ($this->webHook🌀Deployment instanceof \ApiClients\Client\Github\Hydrator\WebHook\Deployment === false) {
            $this->webHook🌀Deployment = new \ApiClients\Client\Github\Hydrator\WebHook\Deployment();
        }
        return $this->webHook🌀Deployment;
    }
    public function getObjectMapperWebHook🌀DeploymentStatus() : \ApiClients\Client\Github\Hydrator\WebHook\DeploymentStatus
    {
        if ($this->webHook🌀DeploymentStatus instanceof \ApiClients\Client\Github\Hydrator\WebHook\DeploymentStatus === false) {
            $this->webHook🌀DeploymentStatus = new \ApiClients\Client\Github\Hydrator\WebHook\DeploymentStatus();
        }
        return $this->webHook🌀DeploymentStatus;
    }
    public function getObjectMapperWebHook🌀Discussion() : \ApiClients\Client\Github\Hydrator\WebHook\Discussion
    {
        if ($this->webHook🌀Discussion instanceof \ApiClients\Client\Github\Hydrator\WebHook\Discussion === false) {
            $this->webHook🌀Discussion = new \ApiClients\Client\Github\Hydrator\WebHook\Discussion();
        }
        return $this->webHook🌀Discussion;
    }
    public function getObjectMapperWebHook🌀DiscussionComment() : \ApiClients\Client\Github\Hydrator\WebHook\DiscussionComment
    {
        if ($this->webHook🌀DiscussionComment instanceof \ApiClients\Client\Github\Hydrator\WebHook\DiscussionComment === false) {
            $this->webHook🌀DiscussionComment = new \ApiClients\Client\Github\Hydrator\WebHook\DiscussionComment();
        }
        return $this->webHook🌀DiscussionComment;
    }
    public function getObjectMapperWebHook🌀Fork() : \ApiClients\Client\Github\Hydrator\WebHook\Fork
    {
        if ($this->webHook🌀Fork instanceof \ApiClients\Client\Github\Hydrator\WebHook\Fork === false) {
            $this->webHook🌀Fork = new \ApiClients\Client\Github\Hydrator\WebHook\Fork();
        }
        return $this->webHook🌀Fork;
    }
    public function getObjectMapperWebHook🌀GithubAppAuthorization() : \ApiClients\Client\Github\Hydrator\WebHook\GithubAppAuthorization
    {
        if ($this->webHook🌀GithubAppAuthorization instanceof \ApiClients\Client\Github\Hydrator\WebHook\GithubAppAuthorization === false) {
            $this->webHook🌀GithubAppAuthorization = new \ApiClients\Client\Github\Hydrator\WebHook\GithubAppAuthorization();
        }
        return $this->webHook🌀GithubAppAuthorization;
    }
    public function getObjectMapperWebHook🌀Gollum() : \ApiClients\Client\Github\Hydrator\WebHook\Gollum
    {
        if ($this->webHook🌀Gollum instanceof \ApiClients\Client\Github\Hydrator\WebHook\Gollum === false) {
            $this->webHook🌀Gollum = new \ApiClients\Client\Github\Hydrator\WebHook\Gollum();
        }
        return $this->webHook🌀Gollum;
    }
    public function getObjectMapperWebHook🌀Installation() : \ApiClients\Client\Github\Hydrator\WebHook\Installation
    {
        if ($this->webHook🌀Installation instanceof \ApiClients\Client\Github\Hydrator\WebHook\Installation === false) {
            $this->webHook🌀Installation = new \ApiClients\Client\Github\Hydrator\WebHook\Installation();
        }
        return $this->webHook🌀Installation;
    }
    public function getObjectMapperWebHook🌀InstallationRepositories() : \ApiClients\Client\Github\Hydrator\WebHook\InstallationRepositories
    {
        if ($this->webHook🌀InstallationRepositories instanceof \ApiClients\Client\Github\Hydrator\WebHook\InstallationRepositories === false) {
            $this->webHook🌀InstallationRepositories = new \ApiClients\Client\Github\Hydrator\WebHook\InstallationRepositories();
        }
        return $this->webHook🌀InstallationRepositories;
    }
    public function getObjectMapperWebHook🌀InstallationTarget() : \ApiClients\Client\Github\Hydrator\WebHook\InstallationTarget
    {
        if ($this->webHook🌀InstallationTarget instanceof \ApiClients\Client\Github\Hydrator\WebHook\InstallationTarget === false) {
            $this->webHook🌀InstallationTarget = new \ApiClients\Client\Github\Hydrator\WebHook\InstallationTarget();
        }
        return $this->webHook🌀InstallationTarget;
    }
    public function getObjectMapperWebHook🌀IssueComment() : \ApiClients\Client\Github\Hydrator\WebHook\IssueComment
    {
        if ($this->webHook🌀IssueComment instanceof \ApiClients\Client\Github\Hydrator\WebHook\IssueComment === false) {
            $this->webHook🌀IssueComment = new \ApiClients\Client\Github\Hydrator\WebHook\IssueComment();
        }
        return $this->webHook🌀IssueComment;
    }
    public function getObjectMapperWebHook🌀Issues() : \ApiClients\Client\Github\Hydrator\WebHook\Issues
    {
        if ($this->webHook🌀Issues instanceof \ApiClients\Client\Github\Hydrator\WebHook\Issues === false) {
            $this->webHook🌀Issues = new \ApiClients\Client\Github\Hydrator\WebHook\Issues();
        }
        return $this->webHook🌀Issues;
    }
    public function getObjectMapperWebHook🌀Label() : \ApiClients\Client\Github\Hydrator\WebHook\Label
    {
        if ($this->webHook🌀Label instanceof \ApiClients\Client\Github\Hydrator\WebHook\Label === false) {
            $this->webHook🌀Label = new \ApiClients\Client\Github\Hydrator\WebHook\Label();
        }
        return $this->webHook🌀Label;
    }
    public function getObjectMapperWebHook🌀MarketplacePurchase() : \ApiClients\Client\Github\Hydrator\WebHook\MarketplacePurchase
    {
        if ($this->webHook🌀MarketplacePurchase instanceof \ApiClients\Client\Github\Hydrator\WebHook\MarketplacePurchase === false) {
            $this->webHook🌀MarketplacePurchase = new \ApiClients\Client\Github\Hydrator\WebHook\MarketplacePurchase();
        }
        return $this->webHook🌀MarketplacePurchase;
    }
    public function getObjectMapperWebHook🌀Member() : \ApiClients\Client\Github\Hydrator\WebHook\Member
    {
        if ($this->webHook🌀Member instanceof \ApiClients\Client\Github\Hydrator\WebHook\Member === false) {
            $this->webHook🌀Member = new \ApiClients\Client\Github\Hydrator\WebHook\Member();
        }
        return $this->webHook🌀Member;
    }
    public function getObjectMapperWebHook🌀Membership() : \ApiClients\Client\Github\Hydrator\WebHook\Membership
    {
        if ($this->webHook🌀Membership instanceof \ApiClients\Client\Github\Hydrator\WebHook\Membership === false) {
            $this->webHook🌀Membership = new \ApiClients\Client\Github\Hydrator\WebHook\Membership();
        }
        return $this->webHook🌀Membership;
    }
    public function getObjectMapperWebHook🌀MergeGroup() : \ApiClients\Client\Github\Hydrator\WebHook\MergeGroup
    {
        if ($this->webHook🌀MergeGroup instanceof \ApiClients\Client\Github\Hydrator\WebHook\MergeGroup === false) {
            $this->webHook🌀MergeGroup = new \ApiClients\Client\Github\Hydrator\WebHook\MergeGroup();
        }
        return $this->webHook🌀MergeGroup;
    }
    public function getObjectMapperWebHook🌀Meta() : \ApiClients\Client\Github\Hydrator\WebHook\Meta
    {
        if ($this->webHook🌀Meta instanceof \ApiClients\Client\Github\Hydrator\WebHook\Meta === false) {
            $this->webHook🌀Meta = new \ApiClients\Client\Github\Hydrator\WebHook\Meta();
        }
        return $this->webHook🌀Meta;
    }
    public function getObjectMapperWebHook🌀Milestone() : \ApiClients\Client\Github\Hydrator\WebHook\Milestone
    {
        if ($this->webHook🌀Milestone instanceof \ApiClients\Client\Github\Hydrator\WebHook\Milestone === false) {
            $this->webHook🌀Milestone = new \ApiClients\Client\Github\Hydrator\WebHook\Milestone();
        }
        return $this->webHook🌀Milestone;
    }
    public function getObjectMapperWebHook🌀OrgBlock() : \ApiClients\Client\Github\Hydrator\WebHook\OrgBlock
    {
        if ($this->webHook🌀OrgBlock instanceof \ApiClients\Client\Github\Hydrator\WebHook\OrgBlock === false) {
            $this->webHook🌀OrgBlock = new \ApiClients\Client\Github\Hydrator\WebHook\OrgBlock();
        }
        return $this->webHook🌀OrgBlock;
    }
    public function getObjectMapperWebHook🌀Organization() : \ApiClients\Client\Github\Hydrator\WebHook\Organization
    {
        if ($this->webHook🌀Organization instanceof \ApiClients\Client\Github\Hydrator\WebHook\Organization === false) {
            $this->webHook🌀Organization = new \ApiClients\Client\Github\Hydrator\WebHook\Organization();
        }
        return $this->webHook🌀Organization;
    }
    public function getObjectMapperWebHook🌀Package() : \ApiClients\Client\Github\Hydrator\WebHook\Package
    {
        if ($this->webHook🌀Package instanceof \ApiClients\Client\Github\Hydrator\WebHook\Package === false) {
            $this->webHook🌀Package = new \ApiClients\Client\Github\Hydrator\WebHook\Package();
        }
        return $this->webHook🌀Package;
    }
    public function getObjectMapperWebHook🌀PageBuild() : \ApiClients\Client\Github\Hydrator\WebHook\PageBuild
    {
        if ($this->webHook🌀PageBuild instanceof \ApiClients\Client\Github\Hydrator\WebHook\PageBuild === false) {
            $this->webHook🌀PageBuild = new \ApiClients\Client\Github\Hydrator\WebHook\PageBuild();
        }
        return $this->webHook🌀PageBuild;
    }
    public function getObjectMapperWebHook🌀Ping() : \ApiClients\Client\Github\Hydrator\WebHook\Ping
    {
        if ($this->webHook🌀Ping instanceof \ApiClients\Client\Github\Hydrator\WebHook\Ping === false) {
            $this->webHook🌀Ping = new \ApiClients\Client\Github\Hydrator\WebHook\Ping();
        }
        return $this->webHook🌀Ping;
    }
    public function getObjectMapperWebHook🌀ProjectCard() : \ApiClients\Client\Github\Hydrator\WebHook\ProjectCard
    {
        if ($this->webHook🌀ProjectCard instanceof \ApiClients\Client\Github\Hydrator\WebHook\ProjectCard === false) {
            $this->webHook🌀ProjectCard = new \ApiClients\Client\Github\Hydrator\WebHook\ProjectCard();
        }
        return $this->webHook🌀ProjectCard;
    }
    public function getObjectMapperWebHook🌀Project() : \ApiClients\Client\Github\Hydrator\WebHook\Project
    {
        if ($this->webHook🌀Project instanceof \ApiClients\Client\Github\Hydrator\WebHook\Project === false) {
            $this->webHook🌀Project = new \ApiClients\Client\Github\Hydrator\WebHook\Project();
        }
        return $this->webHook🌀Project;
    }
    public function getObjectMapperWebHook🌀ProjectColumn() : \ApiClients\Client\Github\Hydrator\WebHook\ProjectColumn
    {
        if ($this->webHook🌀ProjectColumn instanceof \ApiClients\Client\Github\Hydrator\WebHook\ProjectColumn === false) {
            $this->webHook🌀ProjectColumn = new \ApiClients\Client\Github\Hydrator\WebHook\ProjectColumn();
        }
        return $this->webHook🌀ProjectColumn;
    }
    public function getObjectMapperWebHook🌀ProjectsV2() : \ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2
    {
        if ($this->webHook🌀ProjectsV2 instanceof \ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2 === false) {
            $this->webHook🌀ProjectsV2 = new \ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2();
        }
        return $this->webHook🌀ProjectsV2;
    }
    public function getObjectMapperWebHook🌀ProjectsV2Item() : \ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2Item
    {
        if ($this->webHook🌀ProjectsV2Item instanceof \ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2Item === false) {
            $this->webHook🌀ProjectsV2Item = new \ApiClients\Client\Github\Hydrator\WebHook\ProjectsV2Item();
        }
        return $this->webHook🌀ProjectsV2Item;
    }
    public function getObjectMapperWebHook🌀Public_() : \ApiClients\Client\Github\Hydrator\WebHook\Public_
    {
        if ($this->webHook🌀Public_ instanceof \ApiClients\Client\Github\Hydrator\WebHook\Public_ === false) {
            $this->webHook🌀Public_ = new \ApiClients\Client\Github\Hydrator\WebHook\Public_();
        }
        return $this->webHook🌀Public_;
    }
    public function getObjectMapperWebHook🌀PullRequest() : \ApiClients\Client\Github\Hydrator\WebHook\PullRequest
    {
        if ($this->webHook🌀PullRequest instanceof \ApiClients\Client\Github\Hydrator\WebHook\PullRequest === false) {
            $this->webHook🌀PullRequest = new \ApiClients\Client\Github\Hydrator\WebHook\PullRequest();
        }
        return $this->webHook🌀PullRequest;
    }
    public function getObjectMapperWebHook🌀PullRequestReviewComment() : \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewComment
    {
        if ($this->webHook🌀PullRequestReviewComment instanceof \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewComment === false) {
            $this->webHook🌀PullRequestReviewComment = new \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewComment();
        }
        return $this->webHook🌀PullRequestReviewComment;
    }
    public function getObjectMapperWebHook🌀PullRequestReview() : \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReview
    {
        if ($this->webHook🌀PullRequestReview instanceof \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReview === false) {
            $this->webHook🌀PullRequestReview = new \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReview();
        }
        return $this->webHook🌀PullRequestReview;
    }
    public function getObjectMapperWebHook🌀PullRequestReviewThread() : \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewThread
    {
        if ($this->webHook🌀PullRequestReviewThread instanceof \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewThread === false) {
            $this->webHook🌀PullRequestReviewThread = new \ApiClients\Client\Github\Hydrator\WebHook\PullRequestReviewThread();
        }
        return $this->webHook🌀PullRequestReviewThread;
    }
    public function getObjectMapperWebHook🌀Push() : \ApiClients\Client\Github\Hydrator\WebHook\Push
    {
        if ($this->webHook🌀Push instanceof \ApiClients\Client\Github\Hydrator\WebHook\Push === false) {
            $this->webHook🌀Push = new \ApiClients\Client\Github\Hydrator\WebHook\Push();
        }
        return $this->webHook🌀Push;
    }
    public function getObjectMapperWebHook🌀RegistryPackage() : \ApiClients\Client\Github\Hydrator\WebHook\RegistryPackage
    {
        if ($this->webHook🌀RegistryPackage instanceof \ApiClients\Client\Github\Hydrator\WebHook\RegistryPackage === false) {
            $this->webHook🌀RegistryPackage = new \ApiClients\Client\Github\Hydrator\WebHook\RegistryPackage();
        }
        return $this->webHook🌀RegistryPackage;
    }
    public function getObjectMapperWebHook🌀Release() : \ApiClients\Client\Github\Hydrator\WebHook\Release
    {
        if ($this->webHook🌀Release instanceof \ApiClients\Client\Github\Hydrator\WebHook\Release === false) {
            $this->webHook🌀Release = new \ApiClients\Client\Github\Hydrator\WebHook\Release();
        }
        return $this->webHook🌀Release;
    }
    public function getObjectMapperWebHook🌀Repository() : \ApiClients\Client\Github\Hydrator\WebHook\Repository
    {
        if ($this->webHook🌀Repository instanceof \ApiClients\Client\Github\Hydrator\WebHook\Repository === false) {
            $this->webHook🌀Repository = new \ApiClients\Client\Github\Hydrator\WebHook\Repository();
        }
        return $this->webHook🌀Repository;
    }
    public function getObjectMapperWebHook🌀RepositoryDispatch() : \ApiClients\Client\Github\Hydrator\WebHook\RepositoryDispatch
    {
        if ($this->webHook🌀RepositoryDispatch instanceof \ApiClients\Client\Github\Hydrator\WebHook\RepositoryDispatch === false) {
            $this->webHook🌀RepositoryDispatch = new \ApiClients\Client\Github\Hydrator\WebHook\RepositoryDispatch();
        }
        return $this->webHook🌀RepositoryDispatch;
    }
    public function getObjectMapperWebHook🌀RepositoryImport() : \ApiClients\Client\Github\Hydrator\WebHook\RepositoryImport
    {
        if ($this->webHook🌀RepositoryImport instanceof \ApiClients\Client\Github\Hydrator\WebHook\RepositoryImport === false) {
            $this->webHook🌀RepositoryImport = new \ApiClients\Client\Github\Hydrator\WebHook\RepositoryImport();
        }
        return $this->webHook🌀RepositoryImport;
    }
    public function getObjectMapperWebHook🌀RepositoryVulnerabilityAlert() : \ApiClients\Client\Github\Hydrator\WebHook\RepositoryVulnerabilityAlert
    {
        if ($this->webHook🌀RepositoryVulnerabilityAlert instanceof \ApiClients\Client\Github\Hydrator\WebHook\RepositoryVulnerabilityAlert === false) {
            $this->webHook🌀RepositoryVulnerabilityAlert = new \ApiClients\Client\Github\Hydrator\WebHook\RepositoryVulnerabilityAlert();
        }
        return $this->webHook🌀RepositoryVulnerabilityAlert;
    }
    public function getObjectMapperWebHook🌀SecretScanningAlert() : \ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlert
    {
        if ($this->webHook🌀SecretScanningAlert instanceof \ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlert === false) {
            $this->webHook🌀SecretScanningAlert = new \ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlert();
        }
        return $this->webHook🌀SecretScanningAlert;
    }
    public function getObjectMapperWebHook🌀SecretScanningAlertLocation() : \ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlertLocation
    {
        if ($this->webHook🌀SecretScanningAlertLocation instanceof \ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlertLocation === false) {
            $this->webHook🌀SecretScanningAlertLocation = new \ApiClients\Client\Github\Hydrator\WebHook\SecretScanningAlertLocation();
        }
        return $this->webHook🌀SecretScanningAlertLocation;
    }
    public function getObjectMapperWebHook🌀SecurityAdvisory() : \ApiClients\Client\Github\Hydrator\WebHook\SecurityAdvisory
    {
        if ($this->webHook🌀SecurityAdvisory instanceof \ApiClients\Client\Github\Hydrator\WebHook\SecurityAdvisory === false) {
            $this->webHook🌀SecurityAdvisory = new \ApiClients\Client\Github\Hydrator\WebHook\SecurityAdvisory();
        }
        return $this->webHook🌀SecurityAdvisory;
    }
    public function getObjectMapperWebHook🌀SecurityAndAnalysis() : \ApiClients\Client\Github\Hydrator\WebHook\SecurityAndAnalysis
    {
        if ($this->webHook🌀SecurityAndAnalysis instanceof \ApiClients\Client\Github\Hydrator\WebHook\SecurityAndAnalysis === false) {
            $this->webHook🌀SecurityAndAnalysis = new \ApiClients\Client\Github\Hydrator\WebHook\SecurityAndAnalysis();
        }
        return $this->webHook🌀SecurityAndAnalysis;
    }
    public function getObjectMapperWebHook🌀Sponsorship() : \ApiClients\Client\Github\Hydrator\WebHook\Sponsorship
    {
        if ($this->webHook🌀Sponsorship instanceof \ApiClients\Client\Github\Hydrator\WebHook\Sponsorship === false) {
            $this->webHook🌀Sponsorship = new \ApiClients\Client\Github\Hydrator\WebHook\Sponsorship();
        }
        return $this->webHook🌀Sponsorship;
    }
    public function getObjectMapperWebHook🌀Star() : \ApiClients\Client\Github\Hydrator\WebHook\Star
    {
        if ($this->webHook🌀Star instanceof \ApiClients\Client\Github\Hydrator\WebHook\Star === false) {
            $this->webHook🌀Star = new \ApiClients\Client\Github\Hydrator\WebHook\Star();
        }
        return $this->webHook🌀Star;
    }
    public function getObjectMapperWebHook🌀Status() : \ApiClients\Client\Github\Hydrator\WebHook\Status
    {
        if ($this->webHook🌀Status instanceof \ApiClients\Client\Github\Hydrator\WebHook\Status === false) {
            $this->webHook🌀Status = new \ApiClients\Client\Github\Hydrator\WebHook\Status();
        }
        return $this->webHook🌀Status;
    }
    public function getObjectMapperWebHook🌀TeamAdd() : \ApiClients\Client\Github\Hydrator\WebHook\TeamAdd
    {
        if ($this->webHook🌀TeamAdd instanceof \ApiClients\Client\Github\Hydrator\WebHook\TeamAdd === false) {
            $this->webHook🌀TeamAdd = new \ApiClients\Client\Github\Hydrator\WebHook\TeamAdd();
        }
        return $this->webHook🌀TeamAdd;
    }
    public function getObjectMapperWebHook🌀Team() : \ApiClients\Client\Github\Hydrator\WebHook\Team
    {
        if ($this->webHook🌀Team instanceof \ApiClients\Client\Github\Hydrator\WebHook\Team === false) {
            $this->webHook🌀Team = new \ApiClients\Client\Github\Hydrator\WebHook\Team();
        }
        return $this->webHook🌀Team;
    }
    public function getObjectMapperWebHook🌀Watch() : \ApiClients\Client\Github\Hydrator\WebHook\Watch
    {
        if ($this->webHook🌀Watch instanceof \ApiClients\Client\Github\Hydrator\WebHook\Watch === false) {
            $this->webHook🌀Watch = new \ApiClients\Client\Github\Hydrator\WebHook\Watch();
        }
        return $this->webHook🌀Watch;
    }
    public function getObjectMapperWebHook🌀WorkflowDispatch() : \ApiClients\Client\Github\Hydrator\WebHook\WorkflowDispatch
    {
        if ($this->webHook🌀WorkflowDispatch instanceof \ApiClients\Client\Github\Hydrator\WebHook\WorkflowDispatch === false) {
            $this->webHook🌀WorkflowDispatch = new \ApiClients\Client\Github\Hydrator\WebHook\WorkflowDispatch();
        }
        return $this->webHook🌀WorkflowDispatch;
    }
    public function getObjectMapperWebHook🌀WorkflowJob() : \ApiClients\Client\Github\Hydrator\WebHook\WorkflowJob
    {
        if ($this->webHook🌀WorkflowJob instanceof \ApiClients\Client\Github\Hydrator\WebHook\WorkflowJob === false) {
            $this->webHook🌀WorkflowJob = new \ApiClients\Client\Github\Hydrator\WebHook\WorkflowJob();
        }
        return $this->webHook🌀WorkflowJob;
    }
    public function getObjectMapperWebHook🌀WorkflowRun() : \ApiClients\Client\Github\Hydrator\WebHook\WorkflowRun
    {
        if ($this->webHook🌀WorkflowRun instanceof \ApiClients\Client\Github\Hydrator\WebHook\WorkflowRun === false) {
            $this->webHook🌀WorkflowRun = new \ApiClients\Client\Github\Hydrator\WebHook\WorkflowRun();
        }
        return $this->webHook🌀WorkflowRun;
    }
}
