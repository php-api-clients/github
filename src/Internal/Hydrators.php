<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal;

use ApiClients\Client\GitHub\Internal;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use Generator;

final class Hydrators implements ObjectMapper
{
    private Internal\Hydrator\Operation\Root|null $operation🌀Root                                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Advisories|null $operation🌀Advisories                                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Advisories\GhsaId|null $operation🌀Advisories🌀GhsaId                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\App|null $operation🌀App                                                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\AppManifests\Code\Conversions|null $operation🌀AppManifests🌀Code🌀Conversions                                                                                                                                       = null;
    private Internal\Hydrator\Operation\App\Hook\Config|null $operation🌀App🌀Hook🌀Config                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\App\Hook\Deliveries|null $operation🌀App🌀Hook🌀Deliveries                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId|null $operation🌀App🌀Hook🌀Deliveries🌀DeliveryId                                                                                                                                     = null;
    private Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts|null $operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts                                                                                                                   = null;
    private Internal\Hydrator\Operation\App\InstallationRequests|null $operation🌀App🌀InstallationRequests                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\App\Installations|null $operation🌀App🌀Installations                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\App\Installations\InstallationId|null $operation🌀App🌀Installations🌀InstallationId                                                                                                                                 = null;
    private Internal\Hydrator\Operation\App\Installations\InstallationId\AccessTokens|null $operation🌀App🌀Installations🌀InstallationId🌀AccessTokens                                                                                                       = null;
    private Internal\Hydrator\Operation\App\Installations\InstallationId\Suspended|null $operation🌀App🌀Installations🌀InstallationId🌀Suspended                                                                                                             = null;
    private Internal\Hydrator\Operation\Applications\ClientId\Grant|null $operation🌀Applications🌀ClientId🌀Grant                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Applications\ClientId\Token|null $operation🌀Applications🌀ClientId🌀Token                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Applications\ClientId\Token\Scoped|null $operation🌀Applications🌀ClientId🌀Token🌀Scoped                                                                                                                             = null;
    private Internal\Hydrator\Operation\Apps\AppSlug|null $operation🌀Apps🌀AppSlug                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Assignments\AssignmentId|null $operation🌀Assignments🌀AssignmentId                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Assignments\AssignmentId\AcceptedAssignments|null $operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments                                                                                                         = null;
    private Internal\Hydrator\Operation\Assignments\AssignmentId\Grades|null $operation🌀Assignments🌀AssignmentId🌀Grades                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Classrooms|null $operation🌀Classrooms                                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Classrooms\ClassroomId|null $operation🌀Classrooms🌀ClassroomId                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Classrooms\ClassroomId\Assignments|null $operation🌀Classrooms🌀ClassroomId🌀Assignments                                                                                                                             = null;
    private Internal\Hydrator\Operation\CodesOfConduct|null $operation🌀CodesOfConduct                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\CodesOfConduct\Key|null $operation🌀CodesOfConduct🌀Key                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Emojis|null $operation🌀Emojis                                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts|null $operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts                                                                                                                 = null;
    private Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts|null $operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts                                                                                                         = null;
    private Internal\Hydrator\Operation\Events|null $operation🌀Events                                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Feeds|null $operation🌀Feeds                                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Gists|null $operation🌀Gists                                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Gists\Public_|null $operation🌀Gists🌀Public_                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Gists\Starred|null $operation🌀Gists🌀Starred                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Gists\GistId|null $operation🌀Gists🌀GistId                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Gists\GistId\Comments|null $operation🌀Gists🌀GistId🌀Comments                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId|null $operation🌀Gists🌀GistId🌀Comments🌀CommentId                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Gists\GistId\Commits|null $operation🌀Gists🌀GistId🌀Commits                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Gists\GistId\Forks|null $operation🌀Gists🌀GistId🌀Forks                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Gists\GistId\Star|null $operation🌀Gists🌀GistId🌀Star                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Gists\GistId\Sha|null $operation🌀Gists🌀GistId🌀Sha                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Gitignore\Templates|null $operation🌀Gitignore🌀Templates                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Gitignore\Templates\Name|null $operation🌀Gitignore🌀Templates🌀Name                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Installation\Repositories|null $operation🌀Installation🌀Repositories                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Installation\Token|null $operation🌀Installation🌀Token                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Issues|null $operation🌀Issues                                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Licenses|null $operation🌀Licenses                                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Licenses\License|null $operation🌀Licenses🌀License                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Markdown|null $operation🌀Markdown                                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Markdown\Raw|null $operation🌀Markdown🌀Raw                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId|null $operation🌀MarketplaceListing🌀Accounts🌀AccountId                                                                                                                       = null;
    private Internal\Hydrator\Operation\MarketplaceListing\Plans|null $operation🌀MarketplaceListing🌀Plans                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts|null $operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts                                                                                                                 = null;
    private Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId|null $operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId                                                                                                       = null;
    private Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans|null $operation🌀MarketplaceListing🌀Stubbed🌀Plans                                                                                                                                 = null;
    private Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts|null $operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts                                                                                                 = null;
    private Internal\Hydrator\Operation\Meta|null $operation🌀Meta                                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Networks\Owner\Repo\Events|null $operation🌀Networks🌀Owner🌀Repo🌀Events                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Notifications|null $operation🌀Notifications                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Notifications\Threads\ThreadId|null $operation🌀Notifications🌀Threads🌀ThreadId                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Notifications\Threads\ThreadId\Subscription|null $operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription                                                                                                           = null;
    private Internal\Hydrator\Operation\Octocat|null $operation🌀Octocat                                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Organizations|null $operation🌀Organizations                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org|null $operation🌀Orgs🌀Org                                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage|null $operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository|null $operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub|null $operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow|null $operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners|null $operation🌀Orgs🌀Org🌀Actions🌀Runners                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\GenerateJitconfig|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name|null $operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Variables|null $operation🌀Orgs🌀Org🌀Actions🌀Variables                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name|null $operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories|null $operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Blocks|null $operation🌀Orgs🌀Org🌀Blocks                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Blocks\Username|null $operation🌀Orgs🌀Org🌀Blocks🌀Username                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts|null $operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces|null $operation🌀Orgs🌀Org🌀Codespaces                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access|null $operation🌀Orgs🌀Org🌀Codespaces🌀Access                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers|null $operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers|null $operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts|null $operation🌀Orgs🌀Org🌀Dependabot🌀Alerts                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Docker\Conflicts|null $operation🌀Orgs🌀Org🌀Docker🌀Conflicts                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Events|null $operation🌀Orgs🌀Org🌀Events                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\FailedInvitations|null $operation🌀Orgs🌀Org🌀FailedInvitations                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks|null $operation🌀Orgs🌀Org🌀Hooks                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings|null $operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Installation|null $operation🌀Orgs🌀Org🌀Installation                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Installations|null $operation🌀Orgs🌀Org🌀Installations                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\InteractionLimits|null $operation🌀Orgs🌀Org🌀InteractionLimits                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Invitations|null $operation🌀Orgs🌀Org🌀Invitations                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId|null $operation🌀Orgs🌀Org🌀Invitations🌀InvitationId                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams|null $operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Issues|null $operation🌀Orgs🌀Org🌀Issues                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Members|null $operation🌀Orgs🌀Org🌀Members                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Members\Username|null $operation🌀Orgs🌀Org🌀Members🌀Username                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Members\Username\Copilot|null $operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Memberships\Username|null $operation🌀Orgs🌀Org🌀Memberships🌀Username                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Migrations|null $operation🌀Orgs🌀Org🌀Migrations                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories|null $operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationFineGrainedPermissions|null $operation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles|null $operation🌀Orgs🌀Org🌀OrganizationRoles                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug\RoleId|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Users|null $operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators|null $operation🌀Orgs🌀Org🌀OutsideCollaborators                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username|null $operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Packages|null $operation🌀Orgs🌀Org🌀Packages                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore|null $operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests|null $operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId|null $operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories|null $operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens|null $operation🌀Orgs🌀Org🌀PersonalAccessTokens                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId|null $operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories|null $operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Projects|null $operation🌀Orgs🌀Org🌀Projects                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Properties\Schema|null $operation🌀Orgs🌀Org🌀Properties🌀Schema                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName|null $operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Properties\Values|null $operation🌀Orgs🌀Org🌀Properties🌀Values                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\PublicMembers|null $operation🌀Orgs🌀Org🌀PublicMembers                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username|null $operation🌀Orgs🌀Org🌀PublicMembers🌀Username                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Repos|null $operation🌀Orgs🌀Org🌀Repos                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Rulesets|null $operation🌀Orgs🌀Org🌀Rulesets                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites|null $operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId|null $operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Rulesets\RulesetId|null $operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts|null $operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\SecurityAdvisories|null $operation🌀Orgs🌀Org🌀SecurityAdvisories                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\SecurityManagers|null $operation🌀Orgs🌀Org🌀SecurityManagers                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug|null $operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Actions|null $operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions                                                                                                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages|null $operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages                                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage|null $operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams|null $operation🌀Orgs🌀Org🌀Teams                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions                                                                     = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId                                               = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations                                                                                                                           = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username                                                                                                         = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId                                                                                                             = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo                                                                                                                 = null;
    private Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams|null $operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Orgs\Org\SecurityProduct\Enablement|null $operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement                                                                                                                           = null;
    private Internal\Hydrator\Operation\Projects\Columns\Cards\CardId|null $operation🌀Projects🌀Columns🌀Cards🌀CardId                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Projects\Columns\Cards\CardId\Moves|null $operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves                                                                                                                           = null;
    private Internal\Hydrator\Operation\Projects\Columns\ColumnId|null $operation🌀Projects🌀Columns🌀ColumnId                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards|null $operation🌀Projects🌀Columns🌀ColumnId🌀Cards                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves|null $operation🌀Projects🌀Columns🌀ColumnId🌀Moves                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Projects\ProjectId|null $operation🌀Projects🌀ProjectId                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Projects\ProjectId\Collaborators|null $operation🌀Projects🌀ProjectId🌀Collaborators                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username|null $operation🌀Projects🌀ProjectId🌀Collaborators🌀Username                                                                                                               = null;
    private Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission|null $operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission                                                                                         = null;
    private Internal\Hydrator\Operation\Projects\ProjectId\Columns|null $operation🌀Projects🌀ProjectId🌀Columns                                                                                                                                             = null;
    private Internal\Hydrator\Operation\RateLimit|null $operation🌀RateLimit                                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo|null $operation🌀Repos🌀Owner🌀Repo                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches\CacheId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Rerun|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approve|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\DeploymentProtectionRule|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\ForceCancel|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\RerunFailedJobs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing|null $operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Activity|null $operation🌀Repos🌀Owner🌀Repo🌀Activity                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees|null $operation🌀Repos🌀Owner🌀Repo🌀Assignees                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee|null $operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks|null $operation🌀Repos🌀Owner🌀Repo🌀Autolinks                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId|null $operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\AutomatedSecurityFixes|null $operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches|null $operation🌀Repos🌀Owner🌀Repo🌀Branches                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename|null $operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest|null $operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest|null $operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId|null $operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codeowners\Errors|null $operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\PermissionsCheck|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators|null $operation🌀Repos🌀Owner🌀Repo🌀Collaborators                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username|null $operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission|null $operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Comments                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId|null $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits|null $operation🌀Repos🌀Owner🌀Repo🌀Commits                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses|null $operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Community\Profile|null $operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead|null $operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path|null $operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Contributors|null $operation🌀Repos🌀Owner🌀Repo🌀Contributors                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead|null $operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom|null $operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Snapshots|null $operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId|null $operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches|null $operation🌀Repos🌀Owner🌀Repo🌀Dispatches                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments|null $operation🌀Repos🌀Owner🌀Repo🌀Environments                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\ProtectionRuleId|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Events                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Forks|null $operation🌀Repos🌀Owner🌀Repo🌀Forks                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha|null $operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests|null $operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Import|null $operation🌀Repos🌀Owner🌀Repo🌀Import                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Lfs|null $operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Installation|null $operation🌀Repos🌀Owner🌀Repo🌀Installation                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits|null $operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations|null $operation🌀Repos🌀Owner🌀Repo🌀Invitations                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId|null $operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues|null $operation🌀Repos🌀Owner🌀Repo🌀Issues                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline|null $operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Keys|null $operation🌀Repos🌀Owner🌀Repo🌀Keys                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId|null $operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Labels                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name|null $operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Languages|null $operation🌀Repos🌀Owner🌀Repo🌀Languages                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\License|null $operation🌀Repos🌀Owner🌀Repo🌀License                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream|null $operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Merges|null $operation🌀Repos🌀Owner🌀Repo🌀Merges                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones|null $operation🌀Repos🌀Owner🌀Repo🌀Milestones                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels|null $operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications|null $operation🌀Repos🌀Owner🌀Repo🌀Notifications                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages|null $operation🌀Repos🌀Owner🌀Repo🌀Pages                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Health|null $operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\PrivateVulnerabilityReporting|null $operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Projects|null $operation🌀Repos🌀Owner🌀Repo🌀Projects                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values|null $operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch|null $operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Readme|null $operation🌀Repos🌀Owner🌀Repo🌀Readme                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Readme\Dir|null $operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases|null $operation🌀Repos🌀Owner🌀Repo🌀Releases                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\GenerateNotes|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag                                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId|null $operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch|null $operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId|null $operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations|null $operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks|null $operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Stargazers|null $operation🌀Repos🌀Owner🌀Repo🌀Stargazers                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors                                                                                                                           = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Participation|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard|null $operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha|null $operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Subscribers|null $operation🌀Repos🌀Owner🌀Repo🌀Subscribers                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription|null $operation🌀Repos🌀Owner🌀Repo🌀Subscription                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Tags|null $operation🌀Repos🌀Owner🌀Repo🌀Tags                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection|null $operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection\TagProtectionId|null $operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId                                                                                                 = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Teams|null $operation🌀Repos🌀Owner🌀Repo🌀Teams                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Topics|null $operation🌀Repos🌀Owner🌀Repo🌀Topics                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Clones|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Paths|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Referrers|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers                                                                                                             = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Views|null $operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Transfer|null $operation🌀Repos🌀Owner🌀Repo🌀Transfer                                                                                                                                               = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\VulnerabilityAlerts|null $operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref|null $operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate|null $operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate                                                                                                               = null;
    private Internal\Hydrator\Operation\Repositories|null $operation🌀Repositories                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Search\Code|null $operation🌀Search🌀Code                                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Search\Commits|null $operation🌀Search🌀Commits                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Search\Issues|null $operation🌀Search🌀Issues                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Search\Labels|null $operation🌀Search🌀Labels                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Search\Repositories|null $operation🌀Search🌀Repositories                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Search\Topics|null $operation🌀Search🌀Topics                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Search\Users|null $operation🌀Search🌀Users                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Teams\TeamId|null $operation🌀Teams🌀TeamId                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Discussions|null $operation🌀Teams🌀TeamId🌀Discussions                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber                                                                                                               = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments                                                                                             = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber                                                                 = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions                                             = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions|null $operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions                                                                                           = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Invitations|null $operation🌀Teams🌀TeamId🌀Invitations                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Members|null $operation🌀Teams🌀TeamId🌀Members                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Members\Username|null $operation🌀Teams🌀TeamId🌀Members🌀Username                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username|null $operation🌀Teams🌀TeamId🌀Memberships🌀Username                                                                                                                               = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Projects|null $operation🌀Teams🌀TeamId🌀Projects                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId|null $operation🌀Teams🌀TeamId🌀Projects🌀ProjectId                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Repos|null $operation🌀Teams🌀TeamId🌀Repos                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo|null $operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Teams\TeamId\Teams|null $operation🌀Teams🌀TeamId🌀Teams                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\User|null $operation🌀User                                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\User\Blocks|null $operation🌀User🌀Blocks                                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Blocks\Username|null $operation🌀User🌀Blocks🌀Username                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\User\Codespaces|null $operation🌀User🌀Codespaces                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\Codespaces\Secrets|null $operation🌀User🌀Codespaces🌀Secrets                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey|null $operation🌀User🌀Codespaces🌀Secrets🌀PublicKey                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName|null $operation🌀User🌀Codespaces🌀Secrets🌀SecretName                                                                                                                             = null;
    private Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories|null $operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories                                                                                                   = null;
    private Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId|null $operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId                                                                         = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName|null $operation🌀User🌀Codespaces🌀CodespaceName                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Exports                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Machines                                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Publish|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Publish                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Start|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Start                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop|null $operation🌀User🌀Codespaces🌀CodespaceName🌀Stop                                                                                                                             = null;
    private Internal\Hydrator\Operation\User\Docker\Conflicts|null $operation🌀User🌀Docker🌀Conflicts                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Email\Visibility|null $operation🌀User🌀Email🌀Visibility                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Emails|null $operation🌀User🌀Emails                                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Followers|null $operation🌀User🌀Followers                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Following|null $operation🌀User🌀Following                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Following\Username|null $operation🌀User🌀Following🌀Username                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\GpgKeys|null $operation🌀User🌀GpgKeys                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\User\GpgKeys\GpgKeyId|null $operation🌀User🌀GpgKeys🌀GpgKeyId                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Installations|null $operation🌀User🌀Installations                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories|null $operation🌀User🌀Installations🌀InstallationId🌀Repositories                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId|null $operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId                                                                           = null;
    private Internal\Hydrator\Operation\User\InteractionLimits|null $operation🌀User🌀InteractionLimits                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Issues|null $operation🌀User🌀Issues                                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Keys|null $operation🌀User🌀Keys                                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\Keys\KeyId|null $operation🌀User🌀Keys🌀KeyId                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\MarketplacePurchases|null $operation🌀User🌀MarketplacePurchases                                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\MarketplacePurchases\Stubbed|null $operation🌀User🌀MarketplacePurchases🌀Stubbed                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\Memberships\Orgs|null $operation🌀User🌀Memberships🌀Orgs                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Memberships\Orgs\Org|null $operation🌀User🌀Memberships🌀Orgs🌀Org                                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\Migrations|null $operation🌀User🌀Migrations                                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\Migrations\MigrationId|null $operation🌀User🌀Migrations🌀MigrationId                                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive|null $operation🌀User🌀Migrations🌀MigrationId🌀Archive                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock|null $operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock                                                                                                   = null;
    private Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories|null $operation🌀User🌀Migrations🌀MigrationId🌀Repositories                                                                                                                 = null;
    private Internal\Hydrator\Operation\User\Orgs|null $operation🌀User🌀Orgs                                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\Packages|null $operation🌀User🌀Packages                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName|null $operation🌀User🌀Packages🌀PackageType🌀PackageName                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore                                                                                                       = null;
    private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions                                                                                                     = null;
    private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId                                                                   = null;
    private Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore|null $operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore                                                   = null;
    private Internal\Hydrator\Operation\User\Projects|null $operation🌀User🌀Projects                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\User\PublicEmails|null $operation🌀User🌀PublicEmails                                                                                                                                                               = null;
    private Internal\Hydrator\Operation\User\Repos|null $operation🌀User🌀Repos                                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\User\RepositoryInvitations|null $operation🌀User🌀RepositoryInvitations                                                                                                                                             = null;
    private Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId|null $operation🌀User🌀RepositoryInvitations🌀InvitationId                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\SocialAccounts|null $operation🌀User🌀SocialAccounts                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\SshSigningKeys|null $operation🌀User🌀SshSigningKeys                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId|null $operation🌀User🌀SshSigningKeys🌀SshSigningKeyId                                                                                                                           = null;
    private Internal\Hydrator\Operation\User\Starred|null $operation🌀User🌀Starred                                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\User\Starred\Owner\Repo|null $operation🌀User🌀Starred🌀Owner🌀Repo                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\User\Subscriptions|null $operation🌀User🌀Subscriptions                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\User\Teams|null $operation🌀User🌀Teams                                                                                                                                                                             = null;
    private Internal\Hydrator\Operation\Users|null $operation🌀Users                                                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username|null $operation🌀Users🌀Username                                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Users\Username\Docker\Conflicts|null $operation🌀Users🌀Username🌀Docker🌀Conflicts                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Users\Username\Events|null $operation🌀Users🌀Username🌀Events                                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org|null $operation🌀Users🌀Username🌀Events🌀Orgs🌀Org                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Users\Username\Events\Public_|null $operation🌀Users🌀Username🌀Events🌀Public_                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\Followers|null $operation🌀Users🌀Username🌀Followers                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Users\Username\Following|null $operation🌀Users🌀Username🌀Following                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Users\Username\Following\TargetUser|null $operation🌀Users🌀Username🌀Following🌀TargetUser                                                                                                                           = null;
    private Internal\Hydrator\Operation\Users\Username\Gists|null $operation🌀Users🌀Username🌀Gists                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Users\Username\GpgKeys|null $operation🌀Users🌀Username🌀GpgKeys                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Users\Username\Hovercard|null $operation🌀Users🌀Username🌀Hovercard                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Users\Username\Installation|null $operation🌀Users🌀Username🌀Installation                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Users\Username\Keys|null $operation🌀Users🌀Username🌀Keys                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Users\Username\Orgs|null $operation🌀Users🌀Username🌀Orgs                                                                                                                                                           = null;
    private Internal\Hydrator\Operation\Users\Username\Packages|null $operation🌀Users🌀Username🌀Packages                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName                                                                                                   = null;
    private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore                                                                                   = null;
    private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions                                                                                 = null;
    private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId                                               = null;
    private Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore|null $operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore                               = null;
    private Internal\Hydrator\Operation\Users\Username\Projects|null $operation🌀Users🌀Username🌀Projects                                                                                                                                                   = null;
    private Internal\Hydrator\Operation\Users\Username\ReceivedEvents|null $operation🌀Users🌀Username🌀ReceivedEvents                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_|null $operation🌀Users🌀Username🌀ReceivedEvents🌀Public_                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\Repos|null $operation🌀Users🌀Username🌀Repos                                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions|null $operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions                                                                                                                   = null;
    private Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages|null $operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages                                                                                                                 = null;
    private Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage|null $operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\SocialAccounts|null $operation🌀Users🌀Username🌀SocialAccounts                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\SshSigningKeys|null $operation🌀Users🌀Username🌀SshSigningKeys                                                                                                                                       = null;
    private Internal\Hydrator\Operation\Users\Username\Starred|null $operation🌀Users🌀Username🌀Starred                                                                                                                                                     = null;
    private Internal\Hydrator\Operation\Users\Username\Subscriptions|null $operation🌀Users🌀Username🌀Subscriptions                                                                                                                                         = null;
    private Internal\Hydrator\Operation\Versions|null $operation🌀Versions                                                                                                                                                                                 = null;
    private Internal\Hydrator\Operation\Zen|null $operation🌀Zen                                                                                                                                                                                           = null;
    private Internal\Hydrator\WebHook\BranchProtectionConfiguration|null $webHook🪝BranchProtectionConfiguration                                                                                                                                           = null;
    private Internal\Hydrator\WebHook\BranchProtectionRule|null $webHook🪝BranchProtectionRule                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\CheckRun|null $webHook🪝CheckRun                                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\CheckSuite|null $webHook🪝CheckSuite                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\CodeScanningAlert|null $webHook🪝CodeScanningAlert                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\CommitComment|null $webHook🪝CommitComment                                                                                                                                                                           = null;
    private Internal\Hydrator\WebHook\Create|null $webHook🪝Create                                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\CustomProperty|null $webHook🪝CustomProperty                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\CustomPropertyValues|null $webHook🪝CustomPropertyValues                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\Delete|null $webHook🪝Delete                                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\DependabotAlert|null $webHook🪝DependabotAlert                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\DeployKey|null $webHook🪝DeployKey                                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\Deployment|null $webHook🪝Deployment                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\DeploymentProtectionRule|null $webHook🪝DeploymentProtectionRule                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\DeploymentReview|null $webHook🪝DeploymentReview                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\DeploymentStatus|null $webHook🪝DeploymentStatus                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\Discussion|null $webHook🪝Discussion                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\DiscussionComment|null $webHook🪝DiscussionComment                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\Fork|null $webHook🪝Fork                                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\GithubAppAuthorization|null $webHook🪝GithubAppAuthorization                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\Gollum|null $webHook🪝Gollum                                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\Installation|null $webHook🪝Installation                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\InstallationRepositories|null $webHook🪝InstallationRepositories                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\InstallationTarget|null $webHook🪝InstallationTarget                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\IssueComment|null $webHook🪝IssueComment                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\Issues|null $webHook🪝Issues                                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\Label|null $webHook🪝Label                                                                                                                                                                                           = null;
    private Internal\Hydrator\WebHook\MarketplacePurchase|null $webHook🪝MarketplacePurchase                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\Member|null $webHook🪝Member                                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\Membership|null $webHook🪝Membership                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\MergeGroup|null $webHook🪝MergeGroup                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\Meta|null $webHook🪝Meta                                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\Milestone|null $webHook🪝Milestone                                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\OrgBlock|null $webHook🪝OrgBlock                                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\Organization|null $webHook🪝Organization                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\Package|null $webHook🪝Package                                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\PageBuild|null $webHook🪝PageBuild                                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\PersonalAccessTokenRequest|null $webHook🪝PersonalAccessTokenRequest                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\Ping|null $webHook🪝Ping                                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\ProjectCard|null $webHook🪝ProjectCard                                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\Project|null $webHook🪝Project                                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\ProjectColumn|null $webHook🪝ProjectColumn                                                                                                                                                                           = null;
    private Internal\Hydrator\WebHook\ProjectsV2|null $webHook🪝ProjectsV2                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\ProjectsV2Item|null $webHook🪝ProjectsV2Item                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\Public_|null $webHook🪝Public_                                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\PullRequest|null $webHook🪝PullRequest                                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\PullRequestReviewComment|null $webHook🪝PullRequestReviewComment                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\PullRequestReview|null $webHook🪝PullRequestReview                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\PullRequestReviewThread|null $webHook🪝PullRequestReviewThread                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\Push|null $webHook🪝Push                                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\RegistryPackage|null $webHook🪝RegistryPackage                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\Release|null $webHook🪝Release                                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\RepositoryAdvisory|null $webHook🪝RepositoryAdvisory                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\Repository|null $webHook🪝Repository                                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\RepositoryDispatch|null $webHook🪝RepositoryDispatch                                                                                                                                                                 = null;
    private Internal\Hydrator\WebHook\RepositoryImport|null $webHook🪝RepositoryImport                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\RepositoryRuleset|null $webHook🪝RepositoryRuleset                                                                                                                                                                   = null;
    private Internal\Hydrator\WebHook\RepositoryVulnerabilityAlert|null $webHook🪝RepositoryVulnerabilityAlert                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\SecretScanningAlert|null $webHook🪝SecretScanningAlert                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\SecretScanningAlertLocation|null $webHook🪝SecretScanningAlertLocation                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\SecurityAdvisory|null $webHook🪝SecurityAdvisory                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\SecurityAndAnalysis|null $webHook🪝SecurityAndAnalysis                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\Sponsorship|null $webHook🪝Sponsorship                                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\Star|null $webHook🪝Star                                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\Status|null $webHook🪝Status                                                                                                                                                                                         = null;
    private Internal\Hydrator\WebHook\TeamAdd|null $webHook🪝TeamAdd                                                                                                                                                                                       = null;
    private Internal\Hydrator\WebHook\Team|null $webHook🪝Team                                                                                                                                                                                             = null;
    private Internal\Hydrator\WebHook\Watch|null $webHook🪝Watch                                                                                                                                                                                           = null;
    private Internal\Hydrator\WebHook\WorkflowDispatch|null $webHook🪝WorkflowDispatch                                                                                                                                                                     = null;
    private Internal\Hydrator\WebHook\WorkflowJob|null $webHook🪝WorkflowJob                                                                                                                                                                               = null;
    private Internal\Hydrator\WebHook\WorkflowRun|null $webHook🪝WorkflowRun                                                                                                                                                                               = null;

    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            '\\ApiClients\\Client\\GitHub\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BasicError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀Advisories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory\\Cvss' => $this->getObjectMapperOperation🌀Advisories🌀GhsaId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Integration', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleUser', '\\ApiClients\\Client\\GitHub\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ScimError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Headers', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Payload', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response\\Headers' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Installation', '\\ApiClients\\Client\\GitHub\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Authorization', '\\ApiClients\\Client\\GitHub\\Schema\\Authorization\\App', '\\ApiClients\\Client\\GitHub\\Schema\\ScopedInstallation' => $this->getObjectMapperOperation🌀Applications🌀ClientId🌀Token()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ClassroomAssignment', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomRepository', '\\ApiClients\\Client\\GitHub\\Schema\\Classroom', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomOrganization' => $this->getObjectMapperOperation🌀Assignments🌀AssignmentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct🌀Key()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecretScanning\\ListAlertsForEnterprise\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Feed', '\\ApiClients\\Client\\GitHub\\Schema\\Feed\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\Files' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden\\Block' => $this->getObjectMapperOperation🌀Gists🌀GistId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist', '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist\\Files' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Forks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\CheckIsStarred\\Response\\ApplicationJson\\NotFound' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Star()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePendingChange', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplaceListingPlan', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\SshKeyFingerprints', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\Domains' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Thread', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\DependabotSecurityUpdates', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanning', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', '\\ApiClients\\Client\\GitHub\\Schema\\Thread\\Subject' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\Delete\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSub', '\\ApiClients\\Client\\GitHub\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GenerateRunnerJitconfigForOrg\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken', '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgVariable\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotOrganizationDetails', '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\ListCopilotSeats\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForTeams\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForTeams\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForUsers\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForUsers\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook', '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\GetCodespacesForUserInOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteFromOrganization\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Codespace', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceMachine', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\RuntimeConstraints' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatDetails' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationSimple', '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListOrgRoles\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationRole' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RemoveOutsideCollaborator\\Response\\ApplicationJson\\UnprocessableEntity' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Container', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Docker' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ReviewPatGrantRequestsInBulk\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\UpdatePatAccesses\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Projects()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgCustomProperty' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseSimple', '\\ApiClients\\Client\\GitHub\\Schema\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConductSimple', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\CustomProperties' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Repos()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Html' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RuleSuite' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage', '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage\\MinutesUsedBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamFull', '\\ApiClients\\Client\\GitHub\\Schema\\TeamSimple', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussion', '\\ApiClients\\Client\\GitHub\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject', '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository', '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\DeleteCard\\Response\\ApplicationJson\\Forbidden' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\CreateCard\\Response\\ApplicationJson\\ServiceUnavailable\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Update\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview\\Resources', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Artifact', '\\ApiClients\\Client\\GitHub\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckAutomatedSecurityFixes' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection', '\\ApiClients\\Client\\GitHub\\Schema\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\GitUser', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\Verification', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Stats', '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchAdminEnforced', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch', '\\ApiClients\\Client\\GitHub\\Schema\\StatusCheckPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\EnforceAdmins', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\Output', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference', '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference\\Preferences' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlert', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertRule', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisTool', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeScanning\\GetAnalysis\\Response\\ApplicationJsonSarif\\Ok\\Application\\JsonSarif', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetup', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetupUpdateResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Defaults' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPermissionsCheckForDevcontainer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryCollaboratorPermission', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityHealthFile' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree', '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert\\Dependency', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertPackage', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\CreationInfo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\DependencyGraph\\CreateRepositorySnapshot\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllEnvironments\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Environment', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListDeploymentBranchPolicies\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllDeploymentProtectionRules\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentProtectionRule', '\\ApiClients\\Client\\GitHub\\Schema\\CustomDeploymentRuleApp' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListCustomDeploymentRuleIntegrations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitRef', '\\ApiClients\\Client\\GitHub\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTag', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Tagger', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\Issue\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueEvent', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventLabel', '\\ApiClients\\Client\\GitHub\\Schema\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\Team\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventDismissedReview', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventMilestone', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Page', '\\ApiClients\\Client\\GitHub\\Schema\\PagesSourceHash', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild', '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild\\Error' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesDeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\Domain', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\AltDomain' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CheckPrivateVulnerabilityReporting\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\Link', '\\ApiClients\\Client\\GitHub\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestMergeResult', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\MethodNotAllowed\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\Conflict\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile', '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Submission', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecurityAdvisories\\CreateRepositoryAdvisoryCveRequest\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCommitActivityStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetContributorsStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser', '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepositoriesForSecretForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteForAuthenticatedUser\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\CodespaceMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\RuntimeConstraints' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Installations()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀Username🌀Hovercard()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionConfigurationDisabled', '\\ApiClients\\Client\\GitHub\\Schema\\EnterpriseWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleInstallation', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationSimpleWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\TemplateRepository', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\TemplateRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\TemplateRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleUserWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionConfigurationEnabled' => $this->getObjectMapperWebHook🪝BranchProtectionConfiguration()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleDeleted\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorsOnly', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedDismissalActorsOnly', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecks', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecksEnforcementLevel', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Rule' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite\\Output', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompletedFormEncoded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreatedFormEncoded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedActionFormEncoded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Committer' => $this->getObjectMapperWebHook🪝CheckSuite()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Tool' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment\\User' => $this->getObjectMapperWebHook🪝CommitComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyDeleted\\Definition', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyUpdated' => $this->getObjectMapperWebHook🪝CustomProperty()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyValuesUpdated' => $this->getObjectMapperWebHook🪝CustomPropertyValues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertAutoDismissed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertAutoReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertDismissed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertFixed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReintroduced', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🪝DependabotAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated\\Key', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyDeleted\\Key' => $this->getObjectMapperWebHook🪝DeployKey()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝Deployment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentProtectionRuleRequested' => $this->getObjectMapperWebHook🪝DeploymentProtectionRule()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\Approver', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowJobRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\Approver', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowJobRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\Requestor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowJobRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentReview()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentStatus()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer\\User', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\Category', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionPinned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered\\OldAnswer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Comment\\User' => $this->getObjectMapperWebHook🪝DiscussionComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\Permissions' => $this->getObjectMapperWebHook🪝Fork()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookGollum' => $this->getObjectMapperWebHook🪝Gollum()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated\\Requester', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationNewPermissionsAccepted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationSuspend', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🪝Installation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded\\Requester', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesRemoved\\Requester' => $this->getObjectMapperWebHook🪝InstallationRepositories()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Login', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Slug' => $this->getObjectMapperWebHook🪝InstallationTarget()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\User' => $this->getObjectMapperWebHook🪝IssueComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\User' => $this->getObjectMapperWebHook🪝Issues()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelCreated\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelDeleted\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Color', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Label' => $this->getObjectMapperWebHook🪝Label()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\PreviousMarketplacePurchase\\Plan' => $this->getObjectMapperWebHook🪝MarketplacePurchase()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes\\Permission', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes\\RoleName', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\Permission', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberRemoved\\Member' => $this->getObjectMapperWebHook🪝Member()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Sender', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Sender', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Membership()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupChecksRequested', '\\ApiClients\\Client\\GitHub\\Schema\\MergeGroup', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupDestroyed' => $this->getObjectMapperWebHook🪝MergeGroup()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened\\Milestone\\Creator' => $this->getObjectMapperWebHook🪝Milestone()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockBlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockBlocked\\BlockedUser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockUnblocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockUnblocked\\BlockedUser' => $this->getObjectMapperWebHook🪝OrgBlock()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted\\Membership\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded\\Membership\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\Invitation', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\Invitation\\Inviter', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved\\Membership\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes\\Login', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Membership\\User' => $this->getObjectMapperWebHook🪝Organization()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Labels', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Manifest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Bugs', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\DevDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\PeerDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\OptionalDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dist', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Scripts', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Engines', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Bin', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Man', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Directories', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\Registry', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\Registry' => $this->getObjectMapperWebHook🪝Package()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build\\Error', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build\\Pusher' => $this->getObjectMapperWebHook🪝PageBuild()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestApproved', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded\\Other', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded\\Other', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult\\Other', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestDenied' => $this->getObjectMapperWebHook🪝PersonalAccessTokenRequest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPing', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook\\Config', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\Changes\\Note', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes\\Note', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened\\Project\\Creator' => $this->getObjectMapperWebHook🪝Project()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnDeleted\\ProjectColumn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\ProjectColumn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnMoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnMoved\\ProjectColumn' => $this->getObjectMapperWebHook🪝ProjectColumn()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectClosed', '\\ApiClients\\Client\\GitHub\\Schema\\ProjectsV2', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\ShortDescription', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🪝ProjectsV2()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', '\\ApiClients\\Client\\GitHub\\Schema\\ProjectsV2Item', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered\\Changes\\PreviousProjectsVTwoItemNodeId', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored\\Changes\\ArchivedAt' => $this->getObjectMapperWebHook🪝ProjectsV2Item()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestConvertedToDraft', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Ref', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Sha', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestOpened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReadyForReview', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequestRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequest()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\User' => $this->getObjectMapperWebHook🪝PullRequestReview()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Pusher', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\Permissions' => $this->getObjectMapperWebHook🪝Push()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Labels', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Manifest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Tag', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Dependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\DevDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\PeerDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\OptionalDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Scripts', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Engines', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Bin', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Man', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Registry' => $this->getObjectMapperWebHook🪝RegistryPackage()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes\\MakeLatest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release\\Reactions' => $this->getObjectMapperWebHook🪝Release()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryAdvisoryPublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryAdvisoryReported' => $this->getObjectMapperWebHook🪝RepositoryAdvisory()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryArchived', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\DefaultBranch', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Homepage', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPrivatized', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPublicized', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample\\ClientPayload' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🪝RepositoryImport()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Enforcement', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Conditions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Rules' => $this->getObjectMapperWebHook🪝RepositoryRuleset()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert\\Dismisser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert\\Dismisser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert\\Dismisser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert\\Dismisser' => $this->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertCreated', '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlertWebhook', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertResolved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertRevoked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertValidated' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreated', '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningLocation', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Cvss' => $this->getObjectMapperWebHook🪝SecurityAdvisory()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Tier' => $this->getObjectMapperWebHook🪝Sponsorship()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStarCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Committer' => $this->getObjectMapperWebHook🪝Status()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd\\Team\\Parent_' => $this->getObjectMapperWebHook🪝TeamAdd()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Privacy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\NotificationSetting', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Team()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowDispatch', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowDispatch\\Inputs' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob' => $this->getObjectMapperWebHook🪝WorkflowJob()->hydrateObject($className, $payload),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝WorkflowRun()->hydrateObject($className, $payload),
        };
    }

    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            (yield $index => $this->hydrateObject($className, $payload));
        }
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    public function serializeObjectOfType(object $object, string $className): mixed
    {
        return match ($className) {
            '\\ApiClients\\Client\\GitHub\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BasicError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀Advisories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\GlobalAdvisory\\Cvss' => $this->getObjectMapperOperation🌀Advisories🌀GhsaId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Integration', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleUser', '\\ApiClients\\Client\\GitHub\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ScimError', '\\ApiClients\\Client\\GitHub\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Headers', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Request\\Payload', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response', '\\ApiClients\\Client\\GitHub\\Schema\\HookDelivery\\Response\\Headers' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Installation', '\\ApiClients\\Client\\GitHub\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Authorization', '\\ApiClients\\Client\\GitHub\\Schema\\Authorization\\App', '\\ApiClients\\Client\\GitHub\\Schema\\ScopedInstallation' => $this->getObjectMapperOperation🌀Applications🌀ClientId🌀Token()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ClassroomAssignment', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomRepository', '\\ApiClients\\Client\\GitHub\\Schema\\Classroom', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleClassroomOrganization' => $this->getObjectMapperOperation🌀Assignments🌀AssignmentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct🌀Key()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Emojis\\Get\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecretScanning\\ListAlertsForEnterprise\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Feed', '\\ApiClients\\Client\\GitHub\\Schema\\Feed\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\ForkOf\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\GistSimple\\Files' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\Get\\Response\\ApplicationJson\\Forbidden\\Block' => $this->getObjectMapperOperation🌀Gists🌀GistId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist', '\\ApiClients\\Client\\GitHub\\Schema\\BaseGist\\Files' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Forks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Gists\\CheckIsStarred\\Response\\ApplicationJson\\NotFound' => $this->getObjectMapperOperation🌀Gists🌀GistId🌀Star()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListReposAccessibleToInstallation\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePendingChange', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplaceListingPlan', '\\ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\SshKeyFingerprints', '\\ApiClients\\Client\\GitHub\\Schema\\ApiOverview\\Domains' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Thread', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\DependabotSecurityUpdates', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanning', '\\ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', '\\ApiClients\\Client\\GitHub\\Schema\\Thread\\Subject' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationFull\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\Delete\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSub', '\\ApiClients\\Client\\GitHub\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForOrg\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\GenerateRunnerJitconfigForOrg\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken', '\\ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListOrgVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelectedReposForOrgVariable\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInOrganization\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotOrganizationDetails', '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\ListCopilotSeats\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForTeams\\Response\\ApplicationJson\\Created', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForTeams\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\AddCopilotSeatsForUsers\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Copilot\\CancelCopilotSeatAssignmentForUsers\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListOrgSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListSelectedReposForOrgSecret\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook', '\\ApiClients\\Client\\GitHub\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListAppInstallations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\GetCodespacesForUserInOrg\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteFromOrganization\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Codespace', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceMachine', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\Codespace\\RuntimeConstraints' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CopilotSeatDetails' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationSimple', '\\ApiClients\\Client\\GitHub\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Migrations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ListOrgRoles\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationRole' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\ApplicationJson\\Accepted\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\RemoveOutsideCollaborator\\Response\\ApplicationJson\\UnprocessableEntity' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Container', '\\ApiClients\\Client\\GitHub\\Schema\\PackageVersion\\Metadata\\Docker' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\ReviewPatGrantRequestsInBulk\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Orgs\\UpdatePatAccesses\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Projects()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OrgCustomProperty' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseSimple', '\\ApiClients\\Client\\GitHub\\Schema\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\CodeOfConductSimple', '\\ApiClients\\Client\\GitHub\\Schema\\FullRepository\\CustomProperties' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Repos()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryRuleset\\Links\\Html' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RuleSuite' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage', '\\ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage\\MinutesUsedBreakdown' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamFull', '\\ApiClients\\Client\\GitHub\\Schema\\TeamSimple', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization', '\\ApiClients\\Client\\GitHub\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussion', '\\ApiClients\\Client\\GitHub\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject', '\\ApiClients\\Client\\GitHub\\Schema\\TeamProject\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository', '\\ApiClients\\Client\\GitHub\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\DeleteCard\\Response\\ApplicationJson\\Forbidden' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Created\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\Forbidden', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveCard\\Response\\ApplicationJson\\ServiceUnavailable' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\CreateCard\\Response\\ApplicationJson\\ServiceUnavailable\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\MoveColumn\\Response\\ApplicationJson\\Created\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Projects\\Update\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview\\Resources', '\\ApiClients\\Client\\GitHub\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\Delete\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListArtifactsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Artifact', '\\ApiClients\\Client\\GitHub\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoOrganizationVariables\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListSelfHostedRunnersForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunsForRepo\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRunArtifacts\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListJobsForWorkflowRun\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListRepoWorkflows\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListWorkflowRuns\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Ubuntu', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Macos', '\\ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckAutomatedSecurityFixes' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection', '\\ApiClients\\Client\\GitHub\\Schema\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\GitUser', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\Verification', '\\ApiClients\\Client\\GitHub\\Schema\\Commit\\Stats', '\\ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchRequiredStatusCheck', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchAdminEnforced', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\BranchProtection\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch', '\\ApiClients\\Client\\GitHub\\Schema\\StatusCheckPolicy', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredSignatures', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\EnforceAdmins', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredLinearHistory', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForcePushes', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowDeletions', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\RequiredConversationResolution', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\BlockCreations', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\LockBranch', '\\ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\Output', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRun\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference', '\\ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference\\Preferences' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForSuite\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlert', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertRule', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisTool', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\CodeScanning\\GetAnalysis\\Response\\ApplicationJsonSarif\\Ok\\Application\\JsonSarif', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetup', '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningDefaultSetupUpdateResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Defaults' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesPermissionsCheckForDevcontainer' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryCollaboratorPermission', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator', '\\ApiClients\\Client\\GitHub\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListForRef\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Checks\\ListSuitesForRef\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityProfile\\Files', '\\ApiClients\\Client\\GitHub\\Schema\\CommunityHealthFile' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree', '\\ApiClients\\Client\\GitHub\\Schema\\ContentTree\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Content\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlert\\Dependency', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertPackage', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability', '\\ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Dependabot\\ListRepoSecrets\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom', '\\ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\CreationInfo' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\DependencyGraph\\CreateRepositorySnapshot\\Response\\ApplicationJson\\Created' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CreateDeployment\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllEnvironments\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Environment', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListDeploymentBranchPolicies\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetAllDeploymentProtectionRules\\Response\\ApplicationJson\\Ok', '\\ApiClients\\Client\\GitHub\\Schema\\DeploymentProtectionRule', '\\ApiClients\\Client\\GitHub\\Schema\\CustomDeploymentRuleApp' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\ListCustomDeploymentRuleIntegrations\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentSecrets\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Actions\\ListEnvironmentVariables\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitRef', '\\ApiClients\\Client\\GitHub\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTag', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Tagger', '\\ApiClients\\Client\\GitHub\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\RedeliverWebhookDelivery\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\Issue\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\IssueEvent', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventLabel', '\\ApiClients\\Client\\GitHub\\Schema\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\Team\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventDismissedReview', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventMilestone', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent', '\\ApiClients\\Client\\GitHub\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Activity\\MarkRepoNotificationsAsRead\\Response\\ApplicationJson\\Accepted' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Page', '\\ApiClients\\Client\\GitHub\\Schema\\PagesSourceHash', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild', '\\ApiClients\\Client\\GitHub\\Schema\\PageBuild\\Error' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesDeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\Domain', '\\ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck\\AltDomain' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\CheckPrivateVulnerabilityReporting\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\Link', '\\ApiClients\\Client\\GitHub\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestMergeResult', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\MethodNotAllowed\\Application\\Json', '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\Merge\\Response\\ApplicationJson\\Conflict\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Pulls\\UpdateBranch\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile', '\\ApiClients\\Client\\GitHub\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Submission', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleRepository' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\SecurityAdvisories\\CreateRepositoryAdvisoryCveRequest\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCodeFrequencyStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetCommitActivityStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Repos\\GetContributorsStats\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Code\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Commits\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\IssuesAndPullRequests\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Labels\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Repos\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Topics\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Search\\Users\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\ApplicationJson\\Forbidden\\Application\\Json' => $this->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser', '\\ApiClients\\Client\\GitHub\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\ListRepositoriesForSecretForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\DeleteForAuthenticatedUser\\Response\\ApplicationJson\\Accepted\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Codespaces\\CodespaceMachinesForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\GitStatus', '\\ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository\\RuntimeConstraints' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\ApplicationJson\\Ok\\Application\\Json' => $this->getObjectMapperOperation🌀User🌀Installations()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Operations\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\ApplicationJson\\Ok' => $this->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀Username🌀Hovercard()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionConfigurationDisabled', '\\ApiClients\\Client\\GitHub\\Schema\\EnterpriseWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleInstallation', '\\ApiClients\\Client\\GitHub\\Schema\\OrganizationSimpleWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\TemplateRepository', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\TemplateRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\RepositoryWebhooks\\TemplateRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleUserWebhooks', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionConfigurationEnabled' => $this->getObjectMapperWebHook🪝BranchProtectionConfiguration()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleDeleted\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorsOnly', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedDismissalActorsOnly', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecks', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecksEnforcementLevel', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Rule' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\SimpleCheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite\\Output', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompletedFormEncoded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreatedFormEncoded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedActionFormEncoded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Committer' => $this->getObjectMapperWebHook🪝CheckSuite()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\DismissedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Tool', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Location', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Message', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Rule', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Tool' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment\\User' => $this->getObjectMapperWebHook🪝CommitComment()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyDeleted\\Definition', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyUpdated' => $this->getObjectMapperWebHook🪝CustomProperty()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookCustomPropertyValuesUpdated' => $this->getObjectMapperWebHook🪝CustomPropertyValues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertAutoDismissed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertAutoReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertDismissed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertFixed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReintroduced', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🪝DependabotAlert()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated\\Key', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyDeleted\\Key' => $this->getObjectMapperWebHook🪝DeployKey()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝Deployment()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentProtectionRuleRequested' => $this->getObjectMapperWebHook🪝DeploymentProtectionRule()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\Approver', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowJobRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewApproved\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\Approver', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowJobRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRejected\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\Requestor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowJobRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentReviewRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentReview()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentStatus()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer\\User', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\Category', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\Discussion\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionPinned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered\\OldAnswer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Comment\\User' => $this->getObjectMapperWebHook🪝DiscussionComment()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee\\Permissions' => $this->getObjectMapperWebHook🪝Fork()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookGollum' => $this->getObjectMapperWebHook🪝Gollum()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated\\Requester', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationNewPermissionsAccepted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationSuspend', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🪝Installation()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded\\Requester', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesRemoved\\Requester' => $this->getObjectMapperWebHook🪝InstallationRepositories()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Login', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Slug' => $this->getObjectMapperWebHook🪝InstallationTarget()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Issue\\User' => $this->getObjectMapperWebHook🪝IssueComment()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned\\Issue\\User' => $this->getObjectMapperWebHook🪝Issues()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelCreated\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelDeleted\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Color', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Label' => $this->getObjectMapperWebHook🪝Label()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\PreviousMarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\MarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\MarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\MarketplacePurchase\\Plan', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\PreviousMarketplacePurchase', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\PreviousMarketplacePurchase\\Account', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased\\PreviousMarketplacePurchase\\Plan' => $this->getObjectMapperWebHook🪝MarketplacePurchase()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes\\Permission', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes\\RoleName', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\Permission', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMemberRemoved\\Member' => $this->getObjectMapperWebHook🪝Member()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Sender', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Member', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Sender', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Membership()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupChecksRequested', '\\ApiClients\\Client\\GitHub\\Schema\\MergeGroup', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupDestroyed' => $this->getObjectMapperWebHook🪝MergeGroup()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened\\Milestone\\Creator' => $this->getObjectMapperWebHook🪝Milestone()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockBlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockBlocked\\BlockedUser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockUnblocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockUnblocked\\BlockedUser' => $this->getObjectMapperWebHook🪝OrgBlock()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted\\Membership\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded\\Membership\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\Invitation', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\Invitation\\Inviter', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved\\Membership\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes\\Login', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Membership', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Membership\\User' => $this->getObjectMapperWebHook🪝Organization()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Labels', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Manifest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Bugs', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\DevDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\PeerDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\OptionalDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Dist', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Scripts', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Engines', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Bin', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Man', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata\\Directories', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\Registry', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\Registry' => $this->getObjectMapperWebHook🪝Package()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build\\Error', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build\\Pusher' => $this->getObjectMapperWebHook🪝PageBuild()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestApproved', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsAdded\\Other', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsUpgraded\\Other', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\PersonalAccessTokenRequest\\PermissionsResult\\Other', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPersonalAccessTokenRequestDenied' => $this->getObjectMapperWebHook🪝PersonalAccessTokenRequest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPing', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook\\Config', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\Changes\\Note', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes\\Note', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\ProjectCard\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Project\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened\\Project', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened\\Project\\Creator' => $this->getObjectMapperWebHook🪝Project()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnDeleted\\ProjectColumn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\ProjectColumn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnMoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnMoved\\ProjectColumn' => $this->getObjectMapperWebHook🪝ProjectColumn()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectClosed', '\\ApiClients\\Client\\GitHub\\Schema\\ProjectsV2', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\ShortDescription', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🪝ProjectsV2()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', '\\ApiClients\\Client\\GitHub\\Schema\\ProjectsV2Item', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered\\Changes\\PreviousProjectsVTwoItemNodeId', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored\\Changes\\ArchivedAt' => $this->getObjectMapperWebHook🪝ProjectsV2Item()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestClosed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestConvertedToDraft', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Ref', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Sha', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Title', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestOpened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReadyForReview', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequestRemoved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\Label', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\MergedBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequest()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\User' => $this->getObjectMapperWebHook🪝PullRequestReview()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Comments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Commits', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Html', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Issue', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComment', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComments', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Self_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Statuses', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignee', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge\\EnabledBy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone\\Creator', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Pusher', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Repository\\Permissions' => $this->getObjectMapperWebHook🪝Push()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Labels', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Manifest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Tag', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Dependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\DevDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\PeerDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\OptionalDependencies', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Scripts', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Engines', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Bin', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata\\Man', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Registry' => $this->getObjectMapperWebHook🪝RegistryPackage()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes\\Body', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes\\MakeLatest', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased\\Release\\Reactions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release\\Reactions' => $this->getObjectMapperWebHook🪝Release()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryAdvisoryPublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryAdvisoryReported' => $this->getObjectMapperWebHook🪝RepositoryAdvisory()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryArchived', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\DefaultBranch', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Homepage', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPrivatized', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPublicized', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\User', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample\\ClientPayload' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🪝RepositoryImport()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Enforcement', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Conditions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRulesetEdited\\Changes\\Rules' => $this->getObjectMapperWebHook🪝RepositoryRuleset()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert\\Dismisser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert\\Dismisser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert\\Dismisser', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert\\Dismisser' => $this->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertCreated', '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlertWebhook', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertReopened', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertResolved', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertRevoked', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertValidated' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreated', '\\ApiClients\\Client\\GitHub\\Schema\\SecretScanningLocation', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Cvss', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Cvss' => $this->getObjectMapperWebHook🪝SecurityAdvisory()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Maintainer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsorable', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Tier' => $this->getObjectMapperWebHook🪝Sponsorship()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStarCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Tree', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Committer' => $this->getObjectMapperWebHook🪝Status()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd\\Team\\Parent_' => $this->getObjectMapperWebHook🪝TeamAdd()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Description', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Name', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Privacy', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\NotificationSetting', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Team\\Parent_', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\CustomProperties', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\License', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Permissions', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Team', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Team()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowDispatch', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowDispatch\\Inputs' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob' => $this->getObjectMapperWebHook🪝WorkflowJob()->serializeObject($object),
            '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\TriggeringActor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\Workflow', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Actor', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Author', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Committer', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository\\Owner', '\\ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝WorkflowRun()->serializeObject($object),
        };
    }

    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            (yield $index => $this->serializeObject($object));
        }
    }

    public function getObjectMapperOperation🌀Root(): Internal\Hydrator\Operation\Root
    {
        if ($this->operation🌀Root instanceof Internal\Hydrator\Operation\Root === false) {
            $this->operation🌀Root = new Internal\Hydrator\Operation\Root();
        }

        return $this->operation🌀Root;
    }

    public function getObjectMapperOperation🌀Advisories(): Internal\Hydrator\Operation\Advisories
    {
        if ($this->operation🌀Advisories instanceof Internal\Hydrator\Operation\Advisories === false) {
            $this->operation🌀Advisories = new Internal\Hydrator\Operation\Advisories();
        }

        return $this->operation🌀Advisories;
    }

    public function getObjectMapperOperation🌀Advisories🌀GhsaId(): Internal\Hydrator\Operation\Advisories\GhsaId
    {
        if ($this->operation🌀Advisories🌀GhsaId instanceof Internal\Hydrator\Operation\Advisories\GhsaId === false) {
            $this->operation🌀Advisories🌀GhsaId = new Internal\Hydrator\Operation\Advisories\GhsaId();
        }

        return $this->operation🌀Advisories🌀GhsaId;
    }

    public function getObjectMapperOperation🌀App(): Internal\Hydrator\Operation\App
    {
        if ($this->operation🌀App instanceof Internal\Hydrator\Operation\App === false) {
            $this->operation🌀App = new Internal\Hydrator\Operation\App();
        }

        return $this->operation🌀App;
    }

    public function getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions(): Internal\Hydrator\Operation\AppManifests\Code\Conversions
    {
        if ($this->operation🌀AppManifests🌀Code🌀Conversions instanceof Internal\Hydrator\Operation\AppManifests\Code\Conversions === false) {
            $this->operation🌀AppManifests🌀Code🌀Conversions = new Internal\Hydrator\Operation\AppManifests\Code\Conversions();
        }

        return $this->operation🌀AppManifests🌀Code🌀Conversions;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Config(): Internal\Hydrator\Operation\App\Hook\Config
    {
        if ($this->operation🌀App🌀Hook🌀Config instanceof Internal\Hydrator\Operation\App\Hook\Config === false) {
            $this->operation🌀App🌀Hook🌀Config = new Internal\Hydrator\Operation\App\Hook\Config();
        }

        return $this->operation🌀App🌀Hook🌀Config;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries(): Internal\Hydrator\Operation\App\Hook\Deliveries
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries instanceof Internal\Hydrator\Operation\App\Hook\Deliveries === false) {
            $this->operation🌀App🌀Hook🌀Deliveries = new Internal\Hydrator\Operation\App\Hook\Deliveries();
        }

        return $this->operation🌀App🌀Hook🌀Deliveries;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId(): Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId instanceof Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId = new Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId();
        }

        return $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId;
    }

    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts(): Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts instanceof Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts = new Internal\Hydrator\Operation\App\Hook\Deliveries\DeliveryId\Attempts();
        }

        return $this->operation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts;
    }

    public function getObjectMapperOperation🌀App🌀InstallationRequests(): Internal\Hydrator\Operation\App\InstallationRequests
    {
        if ($this->operation🌀App🌀InstallationRequests instanceof Internal\Hydrator\Operation\App\InstallationRequests === false) {
            $this->operation🌀App🌀InstallationRequests = new Internal\Hydrator\Operation\App\InstallationRequests();
        }

        return $this->operation🌀App🌀InstallationRequests;
    }

    public function getObjectMapperOperation🌀App🌀Installations(): Internal\Hydrator\Operation\App\Installations
    {
        if ($this->operation🌀App🌀Installations instanceof Internal\Hydrator\Operation\App\Installations === false) {
            $this->operation🌀App🌀Installations = new Internal\Hydrator\Operation\App\Installations();
        }

        return $this->operation🌀App🌀Installations;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId(): Internal\Hydrator\Operation\App\Installations\InstallationId
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId instanceof Internal\Hydrator\Operation\App\Installations\InstallationId === false) {
            $this->operation🌀App🌀Installations🌀InstallationId = new Internal\Hydrator\Operation\App\Installations\InstallationId();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens(): Internal\Hydrator\Operation\App\Installations\InstallationId\AccessTokens
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens instanceof Internal\Hydrator\Operation\App\Installations\InstallationId\AccessTokens === false) {
            $this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens = new Internal\Hydrator\Operation\App\Installations\InstallationId\AccessTokens();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId🌀AccessTokens;
    }

    public function getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended(): Internal\Hydrator\Operation\App\Installations\InstallationId\Suspended
    {
        if ($this->operation🌀App🌀Installations🌀InstallationId🌀Suspended instanceof Internal\Hydrator\Operation\App\Installations\InstallationId\Suspended === false) {
            $this->operation🌀App🌀Installations🌀InstallationId🌀Suspended = new Internal\Hydrator\Operation\App\Installations\InstallationId\Suspended();
        }

        return $this->operation🌀App🌀Installations🌀InstallationId🌀Suspended;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Grant(): Internal\Hydrator\Operation\Applications\ClientId\Grant
    {
        if ($this->operation🌀Applications🌀ClientId🌀Grant instanceof Internal\Hydrator\Operation\Applications\ClientId\Grant === false) {
            $this->operation🌀Applications🌀ClientId🌀Grant = new Internal\Hydrator\Operation\Applications\ClientId\Grant();
        }

        return $this->operation🌀Applications🌀ClientId🌀Grant;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Token(): Internal\Hydrator\Operation\Applications\ClientId\Token
    {
        if ($this->operation🌀Applications🌀ClientId🌀Token instanceof Internal\Hydrator\Operation\Applications\ClientId\Token === false) {
            $this->operation🌀Applications🌀ClientId🌀Token = new Internal\Hydrator\Operation\Applications\ClientId\Token();
        }

        return $this->operation🌀Applications🌀ClientId🌀Token;
    }

    public function getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped(): Internal\Hydrator\Operation\Applications\ClientId\Token\Scoped
    {
        if ($this->operation🌀Applications🌀ClientId🌀Token🌀Scoped instanceof Internal\Hydrator\Operation\Applications\ClientId\Token\Scoped === false) {
            $this->operation🌀Applications🌀ClientId🌀Token🌀Scoped = new Internal\Hydrator\Operation\Applications\ClientId\Token\Scoped();
        }

        return $this->operation🌀Applications🌀ClientId🌀Token🌀Scoped;
    }

    public function getObjectMapperOperation🌀Apps🌀AppSlug(): Internal\Hydrator\Operation\Apps\AppSlug
    {
        if ($this->operation🌀Apps🌀AppSlug instanceof Internal\Hydrator\Operation\Apps\AppSlug === false) {
            $this->operation🌀Apps🌀AppSlug = new Internal\Hydrator\Operation\Apps\AppSlug();
        }

        return $this->operation🌀Apps🌀AppSlug;
    }

    public function getObjectMapperOperation🌀Assignments🌀AssignmentId(): Internal\Hydrator\Operation\Assignments\AssignmentId
    {
        if ($this->operation🌀Assignments🌀AssignmentId instanceof Internal\Hydrator\Operation\Assignments\AssignmentId === false) {
            $this->operation🌀Assignments🌀AssignmentId = new Internal\Hydrator\Operation\Assignments\AssignmentId();
        }

        return $this->operation🌀Assignments🌀AssignmentId;
    }

    public function getObjectMapperOperation🌀Assignments🌀AssignmentId🌀AcceptedAssignments(): Internal\Hydrator\Operation\Assignments\AssignmentId\AcceptedAssignments
    {
        if ($this->operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments instanceof Internal\Hydrator\Operation\Assignments\AssignmentId\AcceptedAssignments === false) {
            $this->operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments = new Internal\Hydrator\Operation\Assignments\AssignmentId\AcceptedAssignments();
        }

        return $this->operation🌀Assignments🌀AssignmentId🌀AcceptedAssignments;
    }

    public function getObjectMapperOperation🌀Assignments🌀AssignmentId🌀Grades(): Internal\Hydrator\Operation\Assignments\AssignmentId\Grades
    {
        if ($this->operation🌀Assignments🌀AssignmentId🌀Grades instanceof Internal\Hydrator\Operation\Assignments\AssignmentId\Grades === false) {
            $this->operation🌀Assignments🌀AssignmentId🌀Grades = new Internal\Hydrator\Operation\Assignments\AssignmentId\Grades();
        }

        return $this->operation🌀Assignments🌀AssignmentId🌀Grades;
    }

    public function getObjectMapperOperation🌀Classrooms(): Internal\Hydrator\Operation\Classrooms
    {
        if ($this->operation🌀Classrooms instanceof Internal\Hydrator\Operation\Classrooms === false) {
            $this->operation🌀Classrooms = new Internal\Hydrator\Operation\Classrooms();
        }

        return $this->operation🌀Classrooms;
    }

    public function getObjectMapperOperation🌀Classrooms🌀ClassroomId(): Internal\Hydrator\Operation\Classrooms\ClassroomId
    {
        if ($this->operation🌀Classrooms🌀ClassroomId instanceof Internal\Hydrator\Operation\Classrooms\ClassroomId === false) {
            $this->operation🌀Classrooms🌀ClassroomId = new Internal\Hydrator\Operation\Classrooms\ClassroomId();
        }

        return $this->operation🌀Classrooms🌀ClassroomId;
    }

    public function getObjectMapperOperation🌀Classrooms🌀ClassroomId🌀Assignments(): Internal\Hydrator\Operation\Classrooms\ClassroomId\Assignments
    {
        if ($this->operation🌀Classrooms🌀ClassroomId🌀Assignments instanceof Internal\Hydrator\Operation\Classrooms\ClassroomId\Assignments === false) {
            $this->operation🌀Classrooms🌀ClassroomId🌀Assignments = new Internal\Hydrator\Operation\Classrooms\ClassroomId\Assignments();
        }

        return $this->operation🌀Classrooms🌀ClassroomId🌀Assignments;
    }

    public function getObjectMapperOperation🌀CodesOfConduct(): Internal\Hydrator\Operation\CodesOfConduct
    {
        if ($this->operation🌀CodesOfConduct instanceof Internal\Hydrator\Operation\CodesOfConduct === false) {
            $this->operation🌀CodesOfConduct = new Internal\Hydrator\Operation\CodesOfConduct();
        }

        return $this->operation🌀CodesOfConduct;
    }

    public function getObjectMapperOperation🌀CodesOfConduct🌀Key(): Internal\Hydrator\Operation\CodesOfConduct\Key
    {
        if ($this->operation🌀CodesOfConduct🌀Key instanceof Internal\Hydrator\Operation\CodesOfConduct\Key === false) {
            $this->operation🌀CodesOfConduct🌀Key = new Internal\Hydrator\Operation\CodesOfConduct\Key();
        }

        return $this->operation🌀CodesOfConduct🌀Key;
    }

    public function getObjectMapperOperation🌀Emojis(): Internal\Hydrator\Operation\Emojis
    {
        if ($this->operation🌀Emojis instanceof Internal\Hydrator\Operation\Emojis === false) {
            $this->operation🌀Emojis = new Internal\Hydrator\Operation\Emojis();
        }

        return $this->operation🌀Emojis;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts(): Internal\Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts instanceof Internal\Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts = new Internal\Hydrator\Operation\Enterprises\Enterprise\Dependabot\Alerts();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀Dependabot🌀Alerts;
    }

    public function getObjectMapperOperation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts(): Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts instanceof Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts = new Internal\Hydrator\Operation\Enterprises\Enterprise\SecretScanning\Alerts();
        }

        return $this->operation🌀Enterprises🌀Enterprise🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Events(): Internal\Hydrator\Operation\Events
    {
        if ($this->operation🌀Events instanceof Internal\Hydrator\Operation\Events === false) {
            $this->operation🌀Events = new Internal\Hydrator\Operation\Events();
        }

        return $this->operation🌀Events;
    }

    public function getObjectMapperOperation🌀Feeds(): Internal\Hydrator\Operation\Feeds
    {
        if ($this->operation🌀Feeds instanceof Internal\Hydrator\Operation\Feeds === false) {
            $this->operation🌀Feeds = new Internal\Hydrator\Operation\Feeds();
        }

        return $this->operation🌀Feeds;
    }

    public function getObjectMapperOperation🌀Gists(): Internal\Hydrator\Operation\Gists
    {
        if ($this->operation🌀Gists instanceof Internal\Hydrator\Operation\Gists === false) {
            $this->operation🌀Gists = new Internal\Hydrator\Operation\Gists();
        }

        return $this->operation🌀Gists;
    }

    public function getObjectMapperOperation🌀Gists🌀Public_(): Internal\Hydrator\Operation\Gists\Public_
    {
        if ($this->operation🌀Gists🌀Public_ instanceof Internal\Hydrator\Operation\Gists\Public_ === false) {
            $this->operation🌀Gists🌀Public_ = new Internal\Hydrator\Operation\Gists\Public_();
        }

        return $this->operation🌀Gists🌀Public_;
    }

    public function getObjectMapperOperation🌀Gists🌀Starred(): Internal\Hydrator\Operation\Gists\Starred
    {
        if ($this->operation🌀Gists🌀Starred instanceof Internal\Hydrator\Operation\Gists\Starred === false) {
            $this->operation🌀Gists🌀Starred = new Internal\Hydrator\Operation\Gists\Starred();
        }

        return $this->operation🌀Gists🌀Starred;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId(): Internal\Hydrator\Operation\Gists\GistId
    {
        if ($this->operation🌀Gists🌀GistId instanceof Internal\Hydrator\Operation\Gists\GistId === false) {
            $this->operation🌀Gists🌀GistId = new Internal\Hydrator\Operation\Gists\GistId();
        }

        return $this->operation🌀Gists🌀GistId;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Comments(): Internal\Hydrator\Operation\Gists\GistId\Comments
    {
        if ($this->operation🌀Gists🌀GistId🌀Comments instanceof Internal\Hydrator\Operation\Gists\GistId\Comments === false) {
            $this->operation🌀Gists🌀GistId🌀Comments = new Internal\Hydrator\Operation\Gists\GistId\Comments();
        }

        return $this->operation🌀Gists🌀GistId🌀Comments;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId(): Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId
    {
        if ($this->operation🌀Gists🌀GistId🌀Comments🌀CommentId instanceof Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId === false) {
            $this->operation🌀Gists🌀GistId🌀Comments🌀CommentId = new Internal\Hydrator\Operation\Gists\GistId\Comments\CommentId();
        }

        return $this->operation🌀Gists🌀GistId🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Commits(): Internal\Hydrator\Operation\Gists\GistId\Commits
    {
        if ($this->operation🌀Gists🌀GistId🌀Commits instanceof Internal\Hydrator\Operation\Gists\GistId\Commits === false) {
            $this->operation🌀Gists🌀GistId🌀Commits = new Internal\Hydrator\Operation\Gists\GistId\Commits();
        }

        return $this->operation🌀Gists🌀GistId🌀Commits;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Forks(): Internal\Hydrator\Operation\Gists\GistId\Forks
    {
        if ($this->operation🌀Gists🌀GistId🌀Forks instanceof Internal\Hydrator\Operation\Gists\GistId\Forks === false) {
            $this->operation🌀Gists🌀GistId🌀Forks = new Internal\Hydrator\Operation\Gists\GistId\Forks();
        }

        return $this->operation🌀Gists🌀GistId🌀Forks;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Star(): Internal\Hydrator\Operation\Gists\GistId\Star
    {
        if ($this->operation🌀Gists🌀GistId🌀Star instanceof Internal\Hydrator\Operation\Gists\GistId\Star === false) {
            $this->operation🌀Gists🌀GistId🌀Star = new Internal\Hydrator\Operation\Gists\GistId\Star();
        }

        return $this->operation🌀Gists🌀GistId🌀Star;
    }

    public function getObjectMapperOperation🌀Gists🌀GistId🌀Sha(): Internal\Hydrator\Operation\Gists\GistId\Sha
    {
        if ($this->operation🌀Gists🌀GistId🌀Sha instanceof Internal\Hydrator\Operation\Gists\GistId\Sha === false) {
            $this->operation🌀Gists🌀GistId🌀Sha = new Internal\Hydrator\Operation\Gists\GistId\Sha();
        }

        return $this->operation🌀Gists🌀GistId🌀Sha;
    }

    public function getObjectMapperOperation🌀Gitignore🌀Templates(): Internal\Hydrator\Operation\Gitignore\Templates
    {
        if ($this->operation🌀Gitignore🌀Templates instanceof Internal\Hydrator\Operation\Gitignore\Templates === false) {
            $this->operation🌀Gitignore🌀Templates = new Internal\Hydrator\Operation\Gitignore\Templates();
        }

        return $this->operation🌀Gitignore🌀Templates;
    }

    public function getObjectMapperOperation🌀Gitignore🌀Templates🌀Name(): Internal\Hydrator\Operation\Gitignore\Templates\Name
    {
        if ($this->operation🌀Gitignore🌀Templates🌀Name instanceof Internal\Hydrator\Operation\Gitignore\Templates\Name === false) {
            $this->operation🌀Gitignore🌀Templates🌀Name = new Internal\Hydrator\Operation\Gitignore\Templates\Name();
        }

        return $this->operation🌀Gitignore🌀Templates🌀Name;
    }

    public function getObjectMapperOperation🌀Installation🌀Repositories(): Internal\Hydrator\Operation\Installation\Repositories
    {
        if ($this->operation🌀Installation🌀Repositories instanceof Internal\Hydrator\Operation\Installation\Repositories === false) {
            $this->operation🌀Installation🌀Repositories = new Internal\Hydrator\Operation\Installation\Repositories();
        }

        return $this->operation🌀Installation🌀Repositories;
    }

    public function getObjectMapperOperation🌀Installation🌀Token(): Internal\Hydrator\Operation\Installation\Token
    {
        if ($this->operation🌀Installation🌀Token instanceof Internal\Hydrator\Operation\Installation\Token === false) {
            $this->operation🌀Installation🌀Token = new Internal\Hydrator\Operation\Installation\Token();
        }

        return $this->operation🌀Installation🌀Token;
    }

    public function getObjectMapperOperation🌀Issues(): Internal\Hydrator\Operation\Issues
    {
        if ($this->operation🌀Issues instanceof Internal\Hydrator\Operation\Issues === false) {
            $this->operation🌀Issues = new Internal\Hydrator\Operation\Issues();
        }

        return $this->operation🌀Issues;
    }

    public function getObjectMapperOperation🌀Licenses(): Internal\Hydrator\Operation\Licenses
    {
        if ($this->operation🌀Licenses instanceof Internal\Hydrator\Operation\Licenses === false) {
            $this->operation🌀Licenses = new Internal\Hydrator\Operation\Licenses();
        }

        return $this->operation🌀Licenses;
    }

    public function getObjectMapperOperation🌀Licenses🌀License(): Internal\Hydrator\Operation\Licenses\License
    {
        if ($this->operation🌀Licenses🌀License instanceof Internal\Hydrator\Operation\Licenses\License === false) {
            $this->operation🌀Licenses🌀License = new Internal\Hydrator\Operation\Licenses\License();
        }

        return $this->operation🌀Licenses🌀License;
    }

    public function getObjectMapperOperation🌀Markdown(): Internal\Hydrator\Operation\Markdown
    {
        if ($this->operation🌀Markdown instanceof Internal\Hydrator\Operation\Markdown === false) {
            $this->operation🌀Markdown = new Internal\Hydrator\Operation\Markdown();
        }

        return $this->operation🌀Markdown;
    }

    public function getObjectMapperOperation🌀Markdown🌀Raw(): Internal\Hydrator\Operation\Markdown\Raw
    {
        if ($this->operation🌀Markdown🌀Raw instanceof Internal\Hydrator\Operation\Markdown\Raw === false) {
            $this->operation🌀Markdown🌀Raw = new Internal\Hydrator\Operation\Markdown\Raw();
        }

        return $this->operation🌀Markdown🌀Raw;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId(): Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId
    {
        if ($this->operation🌀MarketplaceListing🌀Accounts🌀AccountId instanceof Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId === false) {
            $this->operation🌀MarketplaceListing🌀Accounts🌀AccountId = new Internal\Hydrator\Operation\MarketplaceListing\Accounts\AccountId();
        }

        return $this->operation🌀MarketplaceListing🌀Accounts🌀AccountId;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Plans(): Internal\Hydrator\Operation\MarketplaceListing\Plans
    {
        if ($this->operation🌀MarketplaceListing🌀Plans instanceof Internal\Hydrator\Operation\MarketplaceListing\Plans === false) {
            $this->operation🌀MarketplaceListing🌀Plans = new Internal\Hydrator\Operation\MarketplaceListing\Plans();
        }

        return $this->operation🌀MarketplaceListing🌀Plans;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts(): Internal\Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts
    {
        if ($this->operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts instanceof Internal\Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts === false) {
            $this->operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts = new Internal\Hydrator\Operation\MarketplaceListing\Plans\PlanId\Accounts();
        }

        return $this->operation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId(): Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId
    {
        if ($this->operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId instanceof Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId === false) {
            $this->operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId = new Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Accounts\AccountId();
        }

        return $this->operation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans(): Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans
    {
        if ($this->operation🌀MarketplaceListing🌀Stubbed🌀Plans instanceof Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans === false) {
            $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans = new Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans();
        }

        return $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans;
    }

    public function getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts(): Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts
    {
        if ($this->operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts instanceof Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts === false) {
            $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts = new Internal\Hydrator\Operation\MarketplaceListing\Stubbed\Plans\PlanId\Accounts();
        }

        return $this->operation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts;
    }

    public function getObjectMapperOperation🌀Meta(): Internal\Hydrator\Operation\Meta
    {
        if ($this->operation🌀Meta instanceof Internal\Hydrator\Operation\Meta === false) {
            $this->operation🌀Meta = new Internal\Hydrator\Operation\Meta();
        }

        return $this->operation🌀Meta;
    }

    public function getObjectMapperOperation🌀Networks🌀Owner🌀Repo🌀Events(): Internal\Hydrator\Operation\Networks\Owner\Repo\Events
    {
        if ($this->operation🌀Networks🌀Owner🌀Repo🌀Events instanceof Internal\Hydrator\Operation\Networks\Owner\Repo\Events === false) {
            $this->operation🌀Networks🌀Owner🌀Repo🌀Events = new Internal\Hydrator\Operation\Networks\Owner\Repo\Events();
        }

        return $this->operation🌀Networks🌀Owner🌀Repo🌀Events;
    }

    public function getObjectMapperOperation🌀Notifications(): Internal\Hydrator\Operation\Notifications
    {
        if ($this->operation🌀Notifications instanceof Internal\Hydrator\Operation\Notifications === false) {
            $this->operation🌀Notifications = new Internal\Hydrator\Operation\Notifications();
        }

        return $this->operation🌀Notifications;
    }

    public function getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId(): Internal\Hydrator\Operation\Notifications\Threads\ThreadId
    {
        if ($this->operation🌀Notifications🌀Threads🌀ThreadId instanceof Internal\Hydrator\Operation\Notifications\Threads\ThreadId === false) {
            $this->operation🌀Notifications🌀Threads🌀ThreadId = new Internal\Hydrator\Operation\Notifications\Threads\ThreadId();
        }

        return $this->operation🌀Notifications🌀Threads🌀ThreadId;
    }

    public function getObjectMapperOperation🌀Notifications🌀Threads🌀ThreadId🌀Subscription(): Internal\Hydrator\Operation\Notifications\Threads\ThreadId\Subscription
    {
        if ($this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription instanceof Internal\Hydrator\Operation\Notifications\Threads\ThreadId\Subscription === false) {
            $this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription = new Internal\Hydrator\Operation\Notifications\Threads\ThreadId\Subscription();
        }

        return $this->operation🌀Notifications🌀Threads🌀ThreadId🌀Subscription;
    }

    public function getObjectMapperOperation🌀Octocat(): Internal\Hydrator\Operation\Octocat
    {
        if ($this->operation🌀Octocat instanceof Internal\Hydrator\Operation\Octocat === false) {
            $this->operation🌀Octocat = new Internal\Hydrator\Operation\Octocat();
        }

        return $this->operation🌀Octocat;
    }

    public function getObjectMapperOperation🌀Organizations(): Internal\Hydrator\Operation\Organizations
    {
        if ($this->operation🌀Organizations instanceof Internal\Hydrator\Operation\Organizations === false) {
            $this->operation🌀Organizations = new Internal\Hydrator\Operation\Organizations();
        }

        return $this->operation🌀Organizations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org(): Internal\Hydrator\Operation\Orgs\Org
    {
        if ($this->operation🌀Orgs🌀Org instanceof Internal\Hydrator\Operation\Orgs\Org === false) {
            $this->operation🌀Orgs🌀Org = new Internal\Hydrator\Operation\Orgs\Org();
        }

        return $this->operation🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage(): Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage = new Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\Usage();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository(): Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository = new Internal\Hydrator\Operation\Orgs\Org\Actions\Cache\UsageByRepository();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub(): Internal\Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub = new Internal\Hydrator\Operation\Orgs\Org\Actions\Oidc\Customization\Sub();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Oidc🌀Customization🌀Sub;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions(): Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions = new Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions(): Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions = new Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\SelectedActions();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow(): Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow = new Internal\Hydrator\Operation\Orgs\Org\Actions\Permissions\Workflow();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\Downloads();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\GenerateJitconfig
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\GenerateJitconfig === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\GenerateJitconfig();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RegistrationToken();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RemoveToken();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name(): Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name = new Internal\Hydrator\Operation\Orgs\Org\Actions\Runners\RunnerId\Labels\Name();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets(): Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets = new Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\Orgs\Org\Actions\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables(): Internal\Hydrator\Operation\Orgs\Org\Actions\Variables
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Variables === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables = new Internal\Hydrator\Operation\Orgs\Org\Actions\Variables();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name(): Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name = new Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\Orgs\Org\Actions\Variables\Name\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Blocks(): Internal\Hydrator\Operation\Orgs\Org\Blocks
    {
        if ($this->operation🌀Orgs🌀Org🌀Blocks instanceof Internal\Hydrator\Operation\Orgs\Org\Blocks === false) {
            $this->operation🌀Orgs🌀Org🌀Blocks = new Internal\Hydrator\Operation\Orgs\Org\Blocks();
        }

        return $this->operation🌀Orgs🌀Org🌀Blocks;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username(): Internal\Hydrator\Operation\Orgs\Org\Blocks\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Blocks🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\Blocks\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Blocks🌀Username = new Internal\Hydrator\Operation\Orgs\Org\Blocks\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Blocks🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀CodeScanning🌀Alerts(): Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts instanceof Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts === false) {
            $this->operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts = new Internal\Hydrator\Operation\Orgs\Org\CodeScanning\Alerts();
        }

        return $this->operation🌀Orgs🌀Org🌀CodeScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces(): Internal\Hydrator\Operation\Orgs\Org\Codespaces
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces = new Internal\Hydrator\Operation\Orgs\Org\Codespaces();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Access instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Access\SelectedUsers();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Access🌀SelectedUsers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing(): Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing instanceof Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing = new Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats(): Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats instanceof Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats = new Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\Seats();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀Seats;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams(): Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams instanceof Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams = new Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedTeams();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedTeams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers(): Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers
    {
        if ($this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers instanceof Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers === false) {
            $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers = new Internal\Hydrator\Operation\Orgs\Org\Copilot\Billing\SelectedUsers();
        }

        return $this->operation🌀Orgs🌀Org🌀Copilot🌀Billing🌀SelectedUsers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Alerts(): Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Alerts instanceof Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Alerts = new Internal\Hydrator\Operation\Orgs\Org\Dependabot\Alerts();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Alerts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets(): Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets instanceof Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets = new Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\PublicKey();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\Orgs\Org\Dependabot\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Dependabot🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Docker🌀Conflicts(): Internal\Hydrator\Operation\Orgs\Org\Docker\Conflicts
    {
        if ($this->operation🌀Orgs🌀Org🌀Docker🌀Conflicts instanceof Internal\Hydrator\Operation\Orgs\Org\Docker\Conflicts === false) {
            $this->operation🌀Orgs🌀Org🌀Docker🌀Conflicts = new Internal\Hydrator\Operation\Orgs\Org\Docker\Conflicts();
        }

        return $this->operation🌀Orgs🌀Org🌀Docker🌀Conflicts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Events(): Internal\Hydrator\Operation\Orgs\Org\Events
    {
        if ($this->operation🌀Orgs🌀Org🌀Events instanceof Internal\Hydrator\Operation\Orgs\Org\Events === false) {
            $this->operation🌀Orgs🌀Org🌀Events = new Internal\Hydrator\Operation\Orgs\Org\Events();
        }

        return $this->operation🌀Orgs🌀Org🌀Events;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations(): Internal\Hydrator\Operation\Orgs\Org\FailedInvitations
    {
        if ($this->operation🌀Orgs🌀Org🌀FailedInvitations instanceof Internal\Hydrator\Operation\Orgs\Org\FailedInvitations === false) {
            $this->operation🌀Orgs🌀Org🌀FailedInvitations = new Internal\Hydrator\Operation\Orgs\Org\FailedInvitations();
        }

        return $this->operation🌀Orgs🌀Org🌀FailedInvitations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks(): Internal\Hydrator\Operation\Orgs\Org\Hooks
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks = new Internal\Hydrator\Operation\Orgs\Org\Hooks();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId(): Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId = new Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config(): Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config = new Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Config();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries(): Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries = new Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId(): Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId = new Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts(): Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts = new Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Deliveries\DeliveryId\Attempts();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings(): Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings
    {
        if ($this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings instanceof Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings === false) {
            $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings = new Internal\Hydrator\Operation\Orgs\Org\Hooks\HookId\Pings();
        }

        return $this->operation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Installation(): Internal\Hydrator\Operation\Orgs\Org\Installation
    {
        if ($this->operation🌀Orgs🌀Org🌀Installation instanceof Internal\Hydrator\Operation\Orgs\Org\Installation === false) {
            $this->operation🌀Orgs🌀Org🌀Installation = new Internal\Hydrator\Operation\Orgs\Org\Installation();
        }

        return $this->operation🌀Orgs🌀Org🌀Installation;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Installations(): Internal\Hydrator\Operation\Orgs\Org\Installations
    {
        if ($this->operation🌀Orgs🌀Org🌀Installations instanceof Internal\Hydrator\Operation\Orgs\Org\Installations === false) {
            $this->operation🌀Orgs🌀Org🌀Installations = new Internal\Hydrator\Operation\Orgs\Org\Installations();
        }

        return $this->operation🌀Orgs🌀Org🌀Installations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀InteractionLimits(): Internal\Hydrator\Operation\Orgs\Org\InteractionLimits
    {
        if ($this->operation🌀Orgs🌀Org🌀InteractionLimits instanceof Internal\Hydrator\Operation\Orgs\Org\InteractionLimits === false) {
            $this->operation🌀Orgs🌀Org🌀InteractionLimits = new Internal\Hydrator\Operation\Orgs\Org\InteractionLimits();
        }

        return $this->operation🌀Orgs🌀Org🌀InteractionLimits;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Invitations(): Internal\Hydrator\Operation\Orgs\Org\Invitations
    {
        if ($this->operation🌀Orgs🌀Org🌀Invitations instanceof Internal\Hydrator\Operation\Orgs\Org\Invitations === false) {
            $this->operation🌀Orgs🌀Org🌀Invitations = new Internal\Hydrator\Operation\Orgs\Org\Invitations();
        }

        return $this->operation🌀Orgs🌀Org🌀Invitations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId(): Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId
    {
        if ($this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId instanceof Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId === false) {
            $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId = new Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId();
        }

        return $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams(): Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams instanceof Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams = new Internal\Hydrator\Operation\Orgs\Org\Invitations\InvitationId\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Issues(): Internal\Hydrator\Operation\Orgs\Org\Issues
    {
        if ($this->operation🌀Orgs🌀Org🌀Issues instanceof Internal\Hydrator\Operation\Orgs\Org\Issues === false) {
            $this->operation🌀Orgs🌀Org🌀Issues = new Internal\Hydrator\Operation\Orgs\Org\Issues();
        }

        return $this->operation🌀Orgs🌀Org🌀Issues;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members(): Internal\Hydrator\Operation\Orgs\Org\Members
    {
        if ($this->operation🌀Orgs🌀Org🌀Members instanceof Internal\Hydrator\Operation\Orgs\Org\Members === false) {
            $this->operation🌀Orgs🌀Org🌀Members = new Internal\Hydrator\Operation\Orgs\Org\Members();
        }

        return $this->operation🌀Orgs🌀Org🌀Members;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username(): Internal\Hydrator\Operation\Orgs\Org\Members\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\Members\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username = new Internal\Hydrator\Operation\Orgs\Org\Members\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces(): Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces instanceof Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces = new Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName(): Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName instanceof Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName = new Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop(): Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop instanceof Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop = new Internal\Hydrator\Operation\Orgs\Org\Members\Username\Codespaces\CodespaceName\Stop();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Codespaces🌀CodespaceName🌀Stop;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot(): Internal\Hydrator\Operation\Orgs\Org\Members\Username\Copilot
    {
        if ($this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot instanceof Internal\Hydrator\Operation\Orgs\Org\Members\Username\Copilot === false) {
            $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot = new Internal\Hydrator\Operation\Orgs\Org\Members\Username\Copilot();
        }

        return $this->operation🌀Orgs🌀Org🌀Members🌀Username🌀Copilot;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username(): Internal\Hydrator\Operation\Orgs\Org\Memberships\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Memberships🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\Memberships\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Memberships🌀Username = new Internal\Hydrator\Operation\Orgs\Org\Memberships\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations(): Internal\Hydrator\Operation\Orgs\Org\Migrations
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations instanceof Internal\Hydrator\Operation\Orgs\Org\Migrations === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations = new Internal\Hydrator\Operation\Orgs\Org\Migrations();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId(): Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId instanceof Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId = new Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive(): Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive instanceof Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive = new Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Archive();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Archive;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock(): Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock instanceof Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock = new Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repos\RepoName\Lock();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\Migrations\MigrationId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀Migrations🌀MigrationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions(): Internal\Hydrator\Operation\Orgs\Org\OrganizationFineGrainedPermissions
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationFineGrainedPermissions === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions = new Internal\Hydrator\Operation\Orgs\Org\OrganizationFineGrainedPermissions();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationFineGrainedPermissions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug\RoleId
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug\RoleId === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Teams\TeamSlug\RoleId();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Teams🌀TeamSlug🌀RoleId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\Users\Username\RoleId();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀Users🌀Username🌀RoleId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users(): Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Users
    {
        if ($this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users instanceof Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Users === false) {
            $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users = new Internal\Hydrator\Operation\Orgs\Org\OrganizationRoles\RoleId\Users();
        }

        return $this->operation🌀Orgs🌀Org🌀OrganizationRoles🌀RoleId🌀Users;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators(): Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators
    {
        if ($this->operation🌀Orgs🌀Org🌀OutsideCollaborators instanceof Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators === false) {
            $this->operation🌀Orgs🌀Org🌀OutsideCollaborators = new Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators();
        }

        return $this->operation🌀Orgs🌀Org🌀OutsideCollaborators;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username(): Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username === false) {
            $this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username = new Internal\Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages(): Internal\Hydrator\Operation\Orgs\Org\Packages
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages instanceof Internal\Hydrator\Operation\Orgs\Org\Packages === false) {
            $this->operation🌀Orgs🌀Org🌀Packages = new Internal\Hydrator\Operation\Orgs\Org\Packages();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName(): Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName instanceof Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName = new Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore(): Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore instanceof Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore = new Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Restore();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Restore;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions(): Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions instanceof Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions = new Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId(): Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId instanceof Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId = new Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore(): Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore
    {
        if ($this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore instanceof Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore === false) {
            $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = new Internal\Hydrator\Operation\Orgs\Org\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore();
        }

        return $this->operation🌀Orgs🌀Org🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests(): Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests instanceof Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests = new Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId(): Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId instanceof Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId = new Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokenRequests\PatRequestId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens(): Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokens instanceof Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens = new Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId(): Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId instanceof Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId = new Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories(): Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories
    {
        if ($this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories instanceof Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories === false) {
            $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories = new Internal\Hydrator\Operation\Orgs\Org\PersonalAccessTokens\PatId\Repositories();
        }

        return $this->operation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Projects(): Internal\Hydrator\Operation\Orgs\Org\Projects
    {
        if ($this->operation🌀Orgs🌀Org🌀Projects instanceof Internal\Hydrator\Operation\Orgs\Org\Projects === false) {
            $this->operation🌀Orgs🌀Org🌀Projects = new Internal\Hydrator\Operation\Orgs\Org\Projects();
        }

        return $this->operation🌀Orgs🌀Org🌀Projects;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema(): Internal\Hydrator\Operation\Orgs\Org\Properties\Schema
    {
        if ($this->operation🌀Orgs🌀Org🌀Properties🌀Schema instanceof Internal\Hydrator\Operation\Orgs\Org\Properties\Schema === false) {
            $this->operation🌀Orgs🌀Org🌀Properties🌀Schema = new Internal\Hydrator\Operation\Orgs\Org\Properties\Schema();
        }

        return $this->operation🌀Orgs🌀Org🌀Properties🌀Schema;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName(): Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName
    {
        if ($this->operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName instanceof Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName === false) {
            $this->operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName = new Internal\Hydrator\Operation\Orgs\Org\Properties\Schema\CustomPropertyName();
        }

        return $this->operation🌀Orgs🌀Org🌀Properties🌀Schema🌀CustomPropertyName;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Properties🌀Values(): Internal\Hydrator\Operation\Orgs\Org\Properties\Values
    {
        if ($this->operation🌀Orgs🌀Org🌀Properties🌀Values instanceof Internal\Hydrator\Operation\Orgs\Org\Properties\Values === false) {
            $this->operation🌀Orgs🌀Org🌀Properties🌀Values = new Internal\Hydrator\Operation\Orgs\Org\Properties\Values();
        }

        return $this->operation🌀Orgs🌀Org🌀Properties🌀Values;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers(): Internal\Hydrator\Operation\Orgs\Org\PublicMembers
    {
        if ($this->operation🌀Orgs🌀Org🌀PublicMembers instanceof Internal\Hydrator\Operation\Orgs\Org\PublicMembers === false) {
            $this->operation🌀Orgs🌀Org🌀PublicMembers = new Internal\Hydrator\Operation\Orgs\Org\PublicMembers();
        }

        return $this->operation🌀Orgs🌀Org🌀PublicMembers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username(): Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username === false) {
            $this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username = new Internal\Hydrator\Operation\Orgs\Org\PublicMembers\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀PublicMembers🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Repos(): Internal\Hydrator\Operation\Orgs\Org\Repos
    {
        if ($this->operation🌀Orgs🌀Org🌀Repos instanceof Internal\Hydrator\Operation\Orgs\Org\Repos === false) {
            $this->operation🌀Orgs🌀Org🌀Repos = new Internal\Hydrator\Operation\Orgs\Org\Repos();
        }

        return $this->operation🌀Orgs🌀Org🌀Repos;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets(): Internal\Hydrator\Operation\Orgs\Org\Rulesets
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets instanceof Internal\Hydrator\Operation\Orgs\Org\Rulesets === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets = new Internal\Hydrator\Operation\Orgs\Org\Rulesets();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites(): Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites instanceof Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites = new Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId(): Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId instanceof Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId = new Internal\Hydrator\Operation\Orgs\Org\Rulesets\RuleSuites\RuleSuiteId();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets🌀RuleSuites🌀RuleSuiteId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Rulesets🌀RulesetId(): Internal\Hydrator\Operation\Orgs\Org\Rulesets\RulesetId
    {
        if ($this->operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId instanceof Internal\Hydrator\Operation\Orgs\Org\Rulesets\RulesetId === false) {
            $this->operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId = new Internal\Hydrator\Operation\Orgs\Org\Rulesets\RulesetId();
        }

        return $this->operation🌀Orgs🌀Org🌀Rulesets🌀RulesetId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecretScanning🌀Alerts(): Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts instanceof Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts === false) {
            $this->operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts = new Internal\Hydrator\Operation\Orgs\Org\SecretScanning\Alerts();
        }

        return $this->operation🌀Orgs🌀Org🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityAdvisories(): Internal\Hydrator\Operation\Orgs\Org\SecurityAdvisories
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityAdvisories instanceof Internal\Hydrator\Operation\Orgs\Org\SecurityAdvisories === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityAdvisories = new Internal\Hydrator\Operation\Orgs\Org\SecurityAdvisories();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityAdvisories;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers(): Internal\Hydrator\Operation\Orgs\Org\SecurityManagers
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityManagers instanceof Internal\Hydrator\Operation\Orgs\Org\SecurityManagers === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityManagers = new Internal\Hydrator\Operation\Orgs\Org\SecurityManagers();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityManagers;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug(): Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug instanceof Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug = new Internal\Hydrator\Operation\Orgs\Org\SecurityManagers\Teams\TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions(): Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Actions
    {
        if ($this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions instanceof Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Actions === false) {
            $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions = new Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Actions();
        }

        return $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Actions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages(): Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages
    {
        if ($this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages instanceof Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages === false) {
            $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages = new Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\Packages();
        }

        return $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀Packages;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage(): Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage
    {
        if ($this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage instanceof Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage === false) {
            $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage = new Internal\Hydrator\Operation\Orgs\Org\Settings\Billing\SharedStorage();
        }

        return $this->operation🌀Orgs🌀Org🌀Settings🌀Billing🌀SharedStorage;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams(): Internal\Hydrator\Operation\Orgs\Org\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams instanceof Internal\Hydrator\Operation\Orgs\Org\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Teams = new Internal\Hydrator\Operation\Orgs\Org\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Discussions\DiscussionNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Invitations();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Members();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Memberships\Username();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Projects\ProjectId();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Repos\Owner\Repo();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams(): Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams
    {
        if ($this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams instanceof Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams === false) {
            $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams = new Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug\Teams();
        }

        return $this->operation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams;
    }

    public function getObjectMapperOperation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement(): Internal\Hydrator\Operation\Orgs\Org\SecurityProduct\Enablement
    {
        if ($this->operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement instanceof Internal\Hydrator\Operation\Orgs\Org\SecurityProduct\Enablement === false) {
            $this->operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement = new Internal\Hydrator\Operation\Orgs\Org\SecurityProduct\Enablement();
        }

        return $this->operation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId(): Internal\Hydrator\Operation\Projects\Columns\Cards\CardId
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CardId instanceof Internal\Hydrator\Operation\Projects\Columns\Cards\CardId === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CardId = new Internal\Hydrator\Operation\Projects\Columns\Cards\CardId();
        }

        return $this->operation🌀Projects🌀Columns🌀Cards🌀CardId;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves(): Internal\Hydrator\Operation\Projects\Columns\Cards\CardId\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves instanceof Internal\Hydrator\Operation\Projects\Columns\Cards\CardId\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves = new Internal\Hydrator\Operation\Projects\Columns\Cards\CardId\Moves();
        }

        return $this->operation🌀Projects🌀Columns🌀Cards🌀CardId🌀Moves;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId(): Internal\Hydrator\Operation\Projects\Columns\ColumnId
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId instanceof Internal\Hydrator\Operation\Projects\Columns\ColumnId === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId = new Internal\Hydrator\Operation\Projects\Columns\ColumnId();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards(): Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards instanceof Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards = new Internal\Hydrator\Operation\Projects\Columns\ColumnId\Cards();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId🌀Cards;
    }

    public function getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Moves(): Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves instanceof Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves = new Internal\Hydrator\Operation\Projects\Columns\ColumnId\Moves();
        }

        return $this->operation🌀Projects🌀Columns🌀ColumnId🌀Moves;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId(): Internal\Hydrator\Operation\Projects\ProjectId
    {
        if ($this->operation🌀Projects🌀ProjectId instanceof Internal\Hydrator\Operation\Projects\ProjectId === false) {
            $this->operation🌀Projects🌀ProjectId = new Internal\Hydrator\Operation\Projects\ProjectId();
        }

        return $this->operation🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators(): Internal\Hydrator\Operation\Projects\ProjectId\Collaborators
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators instanceof Internal\Hydrator\Operation\Projects\ProjectId\Collaborators === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators = new Internal\Hydrator\Operation\Projects\ProjectId\Collaborators();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username(): Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username instanceof Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username = new Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission(): Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission instanceof Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission === false) {
            $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission = new Internal\Hydrator\Operation\Projects\ProjectId\Collaborators\Username\Permission();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission;
    }

    public function getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns(): Internal\Hydrator\Operation\Projects\ProjectId\Columns
    {
        if ($this->operation🌀Projects🌀ProjectId🌀Columns instanceof Internal\Hydrator\Operation\Projects\ProjectId\Columns === false) {
            $this->operation🌀Projects🌀ProjectId🌀Columns = new Internal\Hydrator\Operation\Projects\ProjectId\Columns();
        }

        return $this->operation🌀Projects🌀ProjectId🌀Columns;
    }

    public function getObjectMapperOperation🌀RateLimit(): Internal\Hydrator\Operation\RateLimit
    {
        if ($this->operation🌀RateLimit instanceof Internal\Hydrator\Operation\RateLimit === false) {
            $this->operation🌀RateLimit = new Internal\Hydrator\Operation\RateLimit();
        }

        return $this->operation🌀RateLimit;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo(): Internal\Hydrator\Operation\Repos\Owner\Repo
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo instanceof Internal\Hydrator\Operation\Repos\Owner\Repo === false) {
            $this->operation🌀Repos🌀Owner🌀Repo = new Internal\Hydrator\Operation\Repos\Owner\Repo();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Artifacts\ArtifactId\ArchiveFormat();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Cache\Usage();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches\CacheId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches\CacheId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Caches\CacheId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Rerun
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Rerun === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Jobs\JobId\Rerun();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Oidc\Customization\Sub();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationSecrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\OrganizationVariables();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Access();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\SelectedActions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Permissions\Workflow();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\Downloads();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\GenerateJitconfig();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RegistrationToken();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RemoveToken();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runners\RunnerId\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approvals();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approve
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approve === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Approve();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Artifacts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Jobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Attempts\AttemptNumber\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Cancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\DeploymentProtectionRule
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\DeploymentProtectionRule === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\DeploymentProtectionRule();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\ForceCancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\ForceCancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\ForceCancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀ForceCancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Jobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Logs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\PendingDeployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Rerun();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\RerunFailedJobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\RerunFailedJobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\RerunFailedJobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId\Timing();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Variables\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Disable();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Dispatches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Enable();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Runs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing(): Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing = new Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Workflows\WorkflowId\Timing();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Activity(): Internal\Hydrator\Operation\Repos\Owner\Repo\Activity
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Activity instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Activity === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Activity = new Internal\Hydrator\Operation\Repos\Owner\Repo\Activity();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Activity;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees(): Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Assignees instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees = new Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee(): Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee = new Internal\Hydrator\Operation\Repos\Owner\Repo\Assignees\Assignee();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Assignees🌀Assignee;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks(): Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks = new Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Autolinks\AutolinkId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Autolinks🌀AutolinkId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes(): Internal\Hydrator\Operation\Repos\Owner\Repo\AutomatedSecurityFixes
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\AutomatedSecurityFixes === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes = new Internal\Hydrator\Operation\Repos\Owner\Repo\AutomatedSecurityFixes();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀AutomatedSecurityFixes;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\EnforceAdmins();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀EnforceAdmins;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredSignatures();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredSignatures;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks\Contexts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks🌀Contexts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Apps();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Apps;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Teams();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Teams;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\Restrictions\Users();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀Restrictions🌀Users;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename(): Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename = new Internal\Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Rename();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Rename;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Annotations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckRuns\CheckRunId\Rerequest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\Preferences();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest(): Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest = new Internal\Hydrator\Operation\Repos\Owner\Repo\CheckSuites\CheckSuiteId\Rerequest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Alerts\AlertNumber\Instances();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Alerts🌀AlertNumber🌀Instances;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Analyses\AnalysisId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Analyses🌀AnalysisId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Codeql\Databases\Language();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Codeql🌀Databases🌀Language;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\DefaultSetup();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀DefaultSetup;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId(): Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId = new Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning\Sarifs\SarifId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀CodeScanning🌀Sarifs🌀SarifId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codeowners\Errors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codeowners\Errors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codeowners\Errors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codeowners🌀Errors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Devcontainers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Devcontainers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Machines();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Machines;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_ instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_ === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_ = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\New_();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀New_;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\PermissionsCheck
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\PermissionsCheck === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\PermissionsCheck();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀PermissionsCheck;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Repos\Owner\Repo\Codespaces\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Codespaces🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators(): Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators = new Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username(): Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username = new Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission(): Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission = new Internal\Hydrator\Operation\Repos\Owner\Repo\Collaborators\Username\Permission();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Collaborators🌀Username🌀Permission;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\BranchesWhereHead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀BranchesWhereHead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\CommitSha\Pulls();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀CommitSha🌀Pulls;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckRuns();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\CheckSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Status();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Status;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses(): Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses = new Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref\Statuses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀Statuses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile(): Internal\Hydrator\Operation\Repos\Owner\Repo\Community\Profile
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Community\Profile === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile = new Internal\Hydrator\Operation\Repos\Owner\Repo\Community\Profile();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Community🌀Profile;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead(): Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead = new Internal\Hydrator\Operation\Repos\Owner\Repo\Compare\Basehead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Compare🌀Basehead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path(): Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path = new Internal\Hydrator\Operation\Repos\Owner\Repo\Contents\Path();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Contents🌀Path;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Contributors(): Internal\Hydrator\Operation\Repos\Owner\Repo\Contributors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Contributors instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Contributors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Contributors = new Internal\Hydrator\Operation\Repos\Owner\Repo\Contributors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Contributors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts(): Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts = new Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Repos\Owner\Repo\Dependabot\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dependabot🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead(): Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead = new Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Compare\Basehead();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom(): Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom = new Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Sbom();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots(): Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Snapshots
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Snapshots === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots = new Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph\Snapshots();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses(): Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses = new Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Deployments\DeploymentId\Statuses\StatusId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Deployments🌀DeploymentId🌀Statuses🌀StatusId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Dispatches(): Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches = new Internal\Hydrator\Operation\Repos\Owner\Repo\Dispatches();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Dispatches;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentBranchPolicies\BranchPolicyId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentBranchPolicies🌀BranchPolicyId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\Apps();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀Apps;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\ProtectionRuleId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\ProtectionRuleId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules\ProtectionRuleId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀DeploymentProtectionRules🌀ProtectionRuleId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\PublicKey();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Secrets\SecretName();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name(): Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name = new Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\Variables\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Environments🌀EnvironmentName🌀Variables🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Events(): Internal\Hydrator\Operation\Repos\Owner\Repo\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Events instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Events = new Internal\Hydrator\Operation\Repos\Owner\Repo\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Forks(): Internal\Hydrator\Operation\Repos\Owner\Repo\Forks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Forks instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Forks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Forks = new Internal\Hydrator\Operation\Repos\Owner\Repo\Forks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Forks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Blobs\FileSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Commits\CommitSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\MatchingRefs\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Ref\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Refs\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Tags\TagSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha(): Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha = new Internal\Hydrator\Operation\Repos\Owner\Repo\Git\Trees\TreeSha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Deliveries\DeliveryId\Attempts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Pings();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Pings;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests(): Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests = new Internal\Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Tests();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Tests;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import(): Internal\Hydrator\Operation\Repos\Owner\Repo\Import
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Import === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import = new Internal\Hydrator\Operation\Repos\Owner\Repo\Import();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors(): Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors = new Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Authors\AuthorId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Authors🌀AuthorId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles(): Internal\Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles = new Internal\Hydrator\Operation\Repos\Owner\Repo\Import\LargeFiles();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀LargeFiles;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs(): Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Lfs
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Lfs === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs = new Internal\Hydrator\Operation\Repos\Owner\Repo\Import\Lfs();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Import🌀Lfs;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation(): Internal\Hydrator\Operation\Repos\Owner\Repo\Installation
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Installation instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Installation === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Installation = new Internal\Hydrator\Operation\Repos\Owner\Repo\Installation();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Installation;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀InteractionLimits(): Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits = new Internal\Hydrator\Operation\Repos\Owner\Repo\InteractionLimits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀InteractionLimits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations(): Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Invitations instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations = new Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\Events\EventId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀Events🌀EventId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Assignees\Assignee();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Assignees🌀Assignee;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Lock();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Lock;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline(): Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline = new Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Issues🌀IssueNumber🌀Timeline;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys(): Internal\Hydrator\Operation\Repos\Owner\Repo\Keys
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Keys instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Keys === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Keys = new Internal\Hydrator\Operation\Repos\Owner\Repo\Keys();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Keys;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Keys\KeyId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Keys🌀KeyId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels(): Internal\Hydrator\Operation\Repos\Owner\Repo\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Labels instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Labels = new Internal\Hydrator\Operation\Repos\Owner\Repo\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name(): Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name = new Internal\Hydrator\Operation\Repos\Owner\Repo\Labels\Name();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Labels🌀Name;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Languages(): Internal\Hydrator\Operation\Repos\Owner\Repo\Languages
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Languages instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Languages === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Languages = new Internal\Hydrator\Operation\Repos\Owner\Repo\Languages();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Languages;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀License(): Internal\Hydrator\Operation\Repos\Owner\Repo\License
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀License instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\License === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀License = new Internal\Hydrator\Operation\Repos\Owner\Repo\License();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀License;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀MergeUpstream(): Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream = new Internal\Hydrator\Operation\Repos\Owner\Repo\MergeUpstream();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀MergeUpstream;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Merges(): Internal\Hydrator\Operation\Repos\Owner\Repo\Merges
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Merges instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Merges === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Merges = new Internal\Hydrator\Operation\Repos\Owner\Repo\Merges();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Merges;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones(): Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones = new Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels(): Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels = new Internal\Hydrator\Operation\Repos\Owner\Repo\Milestones\MilestoneNumber\Labels();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Milestones🌀MilestoneNumber🌀Labels;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Notifications(): Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Notifications instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Notifications = new Internal\Hydrator\Operation\Repos\Owner\Repo\Notifications();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Notifications;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\Latest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀Latest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Builds\BuildId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Builds🌀BuildId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Deployments\PagesDeploymentId\Cancel();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Deployments🌀PagesDeploymentId🌀Cancel;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Health
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Health === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pages\Health();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pages🌀Health;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting(): Internal\Hydrator\Operation\Repos\Owner\Repo\PrivateVulnerabilityReporting
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\PrivateVulnerabilityReporting === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting = new Internal\Hydrator\Operation\Repos\Owner\Repo\PrivateVulnerabilityReporting();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀PrivateVulnerabilityReporting;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects(): Internal\Hydrator\Operation\Repos\Owner\Repo\Projects
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Projects instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Projects === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Projects = new Internal\Hydrator\Operation\Repos\Owner\Repo\Projects();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Projects;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values(): Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values = new Internal\Hydrator\Operation\Repos\Owner\Repo\Properties\Values();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Properties🌀Values;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Codespaces();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Codespaces;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Merge();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch(): Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch = new Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\UpdateBranch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme(): Internal\Hydrator\Operation\Repos\Owner\Repo\Readme
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Readme instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Readme === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Readme = new Internal\Hydrator\Operation\Repos\Owner\Repo\Readme();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Readme;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir(): Internal\Hydrator\Operation\Repos\Owner\Repo\Readme\Dir
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Readme\Dir === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir = new Internal\Hydrator\Operation\Repos\Owner\Repo\Readme\Dir();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Readme🌀Dir;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\GenerateNotes
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\GenerateNotes === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\GenerateNotes();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀GenerateNotes;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Latest();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Latest;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\Tags\Tag();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀Tags🌀Tag;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Assets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Assets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId\Reactions\ReactionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId🌀Reactions🌀ReactionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch(): Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch = new Internal\Hydrator\Operation\Repos\Owner\Repo\Rules\Branches\Branch();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rules🌀Branches🌀Branch;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets(): Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets = new Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites(): Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites = new Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RuleSuites\RuleSuiteId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RuleSuites🌀RuleSuiteId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Rulesets\RulesetId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Rulesets🌀RulesetId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning\Alerts\AlertNumber\Locations();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecretScanning🌀Alerts🌀AlertNumber🌀Locations;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\Reports();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Cve();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks(): Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks = new Internal\Hydrator\Operation\Repos\Owner\Repo\SecurityAdvisories\GhsaId\Forks();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Forks;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stargazers(): Internal\Hydrator\Operation\Repos\Owner\Repo\Stargazers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Stargazers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers = new Internal\Hydrator\Operation\Repos\Owner\Repo\Stargazers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stargazers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency(): Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency = new Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CodeFrequency();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CodeFrequency;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity(): Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity = new Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\CommitActivity();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀CommitActivity;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors(): Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors = new Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Contributors();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Contributors;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation(): Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Participation
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Participation === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation = new Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\Participation();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀Participation;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard(): Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard = new Internal\Hydrator\Operation\Repos\Owner\Repo\Stats\PunchCard();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Stats🌀PunchCard;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha(): Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha = new Internal\Hydrator\Operation\Repos\Owner\Repo\Statuses\Sha();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Statuses🌀Sha;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscribers(): Internal\Hydrator\Operation\Repos\Owner\Repo\Subscribers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Subscribers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers = new Internal\Hydrator\Operation\Repos\Owner\Repo\Subscribers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Subscribers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Subscription(): Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Subscription instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Subscription = new Internal\Hydrator\Operation\Repos\Owner\Repo\Subscription();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Subscription;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags(): Internal\Hydrator\Operation\Repos\Owner\Repo\Tags
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Tags === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags = new Internal\Hydrator\Operation\Repos\Owner\Repo\Tags();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection(): Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection = new Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId(): Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection\TagProtectionId
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection\TagProtectionId === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId = new Internal\Hydrator\Operation\Repos\Owner\Repo\Tags\Protection\TagProtectionId();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tags🌀Protection🌀TagProtectionId;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref(): Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref = new Internal\Hydrator\Operation\Repos\Owner\Repo\Tarball\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Tarball🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Teams(): Internal\Hydrator\Operation\Repos\Owner\Repo\Teams
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Teams instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Teams === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Teams = new Internal\Hydrator\Operation\Repos\Owner\Repo\Teams();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Teams;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Topics(): Internal\Hydrator\Operation\Repos\Owner\Repo\Topics
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Topics instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Topics === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Topics = new Internal\Hydrator\Operation\Repos\Owner\Repo\Topics();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Topics;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones(): Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Clones
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Clones === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones = new Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Clones();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Clones;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths(): Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Paths
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Paths === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths = new Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Paths();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Paths;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers(): Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Referrers
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Referrers === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers = new Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Popular\Referrers();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Popular🌀Referrers;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views(): Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Views
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Views === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views = new Internal\Hydrator\Operation\Repos\Owner\Repo\Traffic\Views();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Traffic🌀Views;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Transfer(): Internal\Hydrator\Operation\Repos\Owner\Repo\Transfer
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Transfer instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Transfer === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Transfer = new Internal\Hydrator\Operation\Repos\Owner\Repo\Transfer();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Transfer;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts(): Internal\Hydrator\Operation\Repos\Owner\Repo\VulnerabilityAlerts
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\VulnerabilityAlerts === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts = new Internal\Hydrator\Operation\Repos\Owner\Repo\VulnerabilityAlerts();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀VulnerabilityAlerts;
    }

    public function getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref(): Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref
    {
        if ($this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref instanceof Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref === false) {
            $this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref = new Internal\Hydrator\Operation\Repos\Owner\Repo\Zipball\Ref();
        }

        return $this->operation🌀Repos🌀Owner🌀Repo🌀Zipball🌀Ref;
    }

    public function getObjectMapperOperation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate(): Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate
    {
        if ($this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate instanceof Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate === false) {
            $this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate = new Internal\Hydrator\Operation\Repos\TemplateOwner\TemplateRepo\Generate();
        }

        return $this->operation🌀Repos🌀TemplateOwner🌀TemplateRepo🌀Generate;
    }

    public function getObjectMapperOperation🌀Repositories(): Internal\Hydrator\Operation\Repositories
    {
        if ($this->operation🌀Repositories instanceof Internal\Hydrator\Operation\Repositories === false) {
            $this->operation🌀Repositories = new Internal\Hydrator\Operation\Repositories();
        }

        return $this->operation🌀Repositories;
    }

    public function getObjectMapperOperation🌀Search🌀Code(): Internal\Hydrator\Operation\Search\Code
    {
        if ($this->operation🌀Search🌀Code instanceof Internal\Hydrator\Operation\Search\Code === false) {
            $this->operation🌀Search🌀Code = new Internal\Hydrator\Operation\Search\Code();
        }

        return $this->operation🌀Search🌀Code;
    }

    public function getObjectMapperOperation🌀Search🌀Commits(): Internal\Hydrator\Operation\Search\Commits
    {
        if ($this->operation🌀Search🌀Commits instanceof Internal\Hydrator\Operation\Search\Commits === false) {
            $this->operation🌀Search🌀Commits = new Internal\Hydrator\Operation\Search\Commits();
        }

        return $this->operation🌀Search🌀Commits;
    }

    public function getObjectMapperOperation🌀Search🌀Issues(): Internal\Hydrator\Operation\Search\Issues
    {
        if ($this->operation🌀Search🌀Issues instanceof Internal\Hydrator\Operation\Search\Issues === false) {
            $this->operation🌀Search🌀Issues = new Internal\Hydrator\Operation\Search\Issues();
        }

        return $this->operation🌀Search🌀Issues;
    }

    public function getObjectMapperOperation🌀Search🌀Labels(): Internal\Hydrator\Operation\Search\Labels
    {
        if ($this->operation🌀Search🌀Labels instanceof Internal\Hydrator\Operation\Search\Labels === false) {
            $this->operation🌀Search🌀Labels = new Internal\Hydrator\Operation\Search\Labels();
        }

        return $this->operation🌀Search🌀Labels;
    }

    public function getObjectMapperOperation🌀Search🌀Repositories(): Internal\Hydrator\Operation\Search\Repositories
    {
        if ($this->operation🌀Search🌀Repositories instanceof Internal\Hydrator\Operation\Search\Repositories === false) {
            $this->operation🌀Search🌀Repositories = new Internal\Hydrator\Operation\Search\Repositories();
        }

        return $this->operation🌀Search🌀Repositories;
    }

    public function getObjectMapperOperation🌀Search🌀Topics(): Internal\Hydrator\Operation\Search\Topics
    {
        if ($this->operation🌀Search🌀Topics instanceof Internal\Hydrator\Operation\Search\Topics === false) {
            $this->operation🌀Search🌀Topics = new Internal\Hydrator\Operation\Search\Topics();
        }

        return $this->operation🌀Search🌀Topics;
    }

    public function getObjectMapperOperation🌀Search🌀Users(): Internal\Hydrator\Operation\Search\Users
    {
        if ($this->operation🌀Search🌀Users instanceof Internal\Hydrator\Operation\Search\Users === false) {
            $this->operation🌀Search🌀Users = new Internal\Hydrator\Operation\Search\Users();
        }

        return $this->operation🌀Search🌀Users;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId(): Internal\Hydrator\Operation\Teams\TeamId
    {
        if ($this->operation🌀Teams🌀TeamId instanceof Internal\Hydrator\Operation\Teams\TeamId === false) {
            $this->operation🌀Teams🌀TeamId = new Internal\Hydrator\Operation\Teams\TeamId();
        }

        return $this->operation🌀Teams🌀TeamId;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions(): Internal\Hydrator\Operation\Teams\TeamId\Discussions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions instanceof Internal\Hydrator\Operation\Teams\TeamId\Discussions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions = new Internal\Hydrator\Operation\Teams\TeamId\Discussions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber(): Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber instanceof Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber = new Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments(): Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments instanceof Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments = new Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber(): Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber instanceof Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber = new Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions(): Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions instanceof Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions = new Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions(): Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions
    {
        if ($this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions instanceof Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions === false) {
            $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions = new Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Reactions();
        }

        return $this->operation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Reactions;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations(): Internal\Hydrator\Operation\Teams\TeamId\Invitations
    {
        if ($this->operation🌀Teams🌀TeamId🌀Invitations instanceof Internal\Hydrator\Operation\Teams\TeamId\Invitations === false) {
            $this->operation🌀Teams🌀TeamId🌀Invitations = new Internal\Hydrator\Operation\Teams\TeamId\Invitations();
        }

        return $this->operation🌀Teams🌀TeamId🌀Invitations;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Members(): Internal\Hydrator\Operation\Teams\TeamId\Members
    {
        if ($this->operation🌀Teams🌀TeamId🌀Members instanceof Internal\Hydrator\Operation\Teams\TeamId\Members === false) {
            $this->operation🌀Teams🌀TeamId🌀Members = new Internal\Hydrator\Operation\Teams\TeamId\Members();
        }

        return $this->operation🌀Teams🌀TeamId🌀Members;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username(): Internal\Hydrator\Operation\Teams\TeamId\Members\Username
    {
        if ($this->operation🌀Teams🌀TeamId🌀Members🌀Username instanceof Internal\Hydrator\Operation\Teams\TeamId\Members\Username === false) {
            $this->operation🌀Teams🌀TeamId🌀Members🌀Username = new Internal\Hydrator\Operation\Teams\TeamId\Members\Username();
        }

        return $this->operation🌀Teams🌀TeamId🌀Members🌀Username;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username(): Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username
    {
        if ($this->operation🌀Teams🌀TeamId🌀Memberships🌀Username instanceof Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username === false) {
            $this->operation🌀Teams🌀TeamId🌀Memberships🌀Username = new Internal\Hydrator\Operation\Teams\TeamId\Memberships\Username();
        }

        return $this->operation🌀Teams🌀TeamId🌀Memberships🌀Username;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Projects(): Internal\Hydrator\Operation\Teams\TeamId\Projects
    {
        if ($this->operation🌀Teams🌀TeamId🌀Projects instanceof Internal\Hydrator\Operation\Teams\TeamId\Projects === false) {
            $this->operation🌀Teams🌀TeamId🌀Projects = new Internal\Hydrator\Operation\Teams\TeamId\Projects();
        }

        return $this->operation🌀Teams🌀TeamId🌀Projects;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId(): Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId
    {
        if ($this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId instanceof Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId === false) {
            $this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId = new Internal\Hydrator\Operation\Teams\TeamId\Projects\ProjectId();
        }

        return $this->operation🌀Teams🌀TeamId🌀Projects🌀ProjectId;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Repos(): Internal\Hydrator\Operation\Teams\TeamId\Repos
    {
        if ($this->operation🌀Teams🌀TeamId🌀Repos instanceof Internal\Hydrator\Operation\Teams\TeamId\Repos === false) {
            $this->operation🌀Teams🌀TeamId🌀Repos = new Internal\Hydrator\Operation\Teams\TeamId\Repos();
        }

        return $this->operation🌀Teams🌀TeamId🌀Repos;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo(): Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo
    {
        if ($this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo instanceof Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo === false) {
            $this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo = new Internal\Hydrator\Operation\Teams\TeamId\Repos\Owner\Repo();
        }

        return $this->operation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀Teams🌀TeamId🌀Teams(): Internal\Hydrator\Operation\Teams\TeamId\Teams
    {
        if ($this->operation🌀Teams🌀TeamId🌀Teams instanceof Internal\Hydrator\Operation\Teams\TeamId\Teams === false) {
            $this->operation🌀Teams🌀TeamId🌀Teams = new Internal\Hydrator\Operation\Teams\TeamId\Teams();
        }

        return $this->operation🌀Teams🌀TeamId🌀Teams;
    }

    public function getObjectMapperOperation🌀User(): Internal\Hydrator\Operation\User
    {
        if ($this->operation🌀User instanceof Internal\Hydrator\Operation\User === false) {
            $this->operation🌀User = new Internal\Hydrator\Operation\User();
        }

        return $this->operation🌀User;
    }

    public function getObjectMapperOperation🌀User🌀Blocks(): Internal\Hydrator\Operation\User\Blocks
    {
        if ($this->operation🌀User🌀Blocks instanceof Internal\Hydrator\Operation\User\Blocks === false) {
            $this->operation🌀User🌀Blocks = new Internal\Hydrator\Operation\User\Blocks();
        }

        return $this->operation🌀User🌀Blocks;
    }

    public function getObjectMapperOperation🌀User🌀Blocks🌀Username(): Internal\Hydrator\Operation\User\Blocks\Username
    {
        if ($this->operation🌀User🌀Blocks🌀Username instanceof Internal\Hydrator\Operation\User\Blocks\Username === false) {
            $this->operation🌀User🌀Blocks🌀Username = new Internal\Hydrator\Operation\User\Blocks\Username();
        }

        return $this->operation🌀User🌀Blocks🌀Username;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces(): Internal\Hydrator\Operation\User\Codespaces
    {
        if ($this->operation🌀User🌀Codespaces instanceof Internal\Hydrator\Operation\User\Codespaces === false) {
            $this->operation🌀User🌀Codespaces = new Internal\Hydrator\Operation\User\Codespaces();
        }

        return $this->operation🌀User🌀Codespaces;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets(): Internal\Hydrator\Operation\User\Codespaces\Secrets
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets instanceof Internal\Hydrator\Operation\User\Codespaces\Secrets === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets = new Internal\Hydrator\Operation\User\Codespaces\Secrets();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey(): Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey instanceof Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey = new Internal\Hydrator\Operation\User\Codespaces\Secrets\PublicKey();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName(): Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName instanceof Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName = new Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories(): Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories instanceof Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories = new Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\User\Codespaces\Secrets\SecretName\Repositories\RepositoryId();
        }

        return $this->operation🌀User🌀Codespaces🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Exports🌀ExportId;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Machines(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Machines instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Machines = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Machines();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Machines;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Publish(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Publish
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Publish instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Publish === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Publish = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Publish();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Publish;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Start(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Start
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Start instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Start === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Start = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Start();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Start;
    }

    public function getObjectMapperOperation🌀User🌀Codespaces🌀CodespaceName🌀Stop(): Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop
    {
        if ($this->operation🌀User🌀Codespaces🌀CodespaceName🌀Stop instanceof Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop === false) {
            $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Stop = new Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Stop();
        }

        return $this->operation🌀User🌀Codespaces🌀CodespaceName🌀Stop;
    }

    public function getObjectMapperOperation🌀User🌀Docker🌀Conflicts(): Internal\Hydrator\Operation\User\Docker\Conflicts
    {
        if ($this->operation🌀User🌀Docker🌀Conflicts instanceof Internal\Hydrator\Operation\User\Docker\Conflicts === false) {
            $this->operation🌀User🌀Docker🌀Conflicts = new Internal\Hydrator\Operation\User\Docker\Conflicts();
        }

        return $this->operation🌀User🌀Docker🌀Conflicts;
    }

    public function getObjectMapperOperation🌀User🌀Email🌀Visibility(): Internal\Hydrator\Operation\User\Email\Visibility
    {
        if ($this->operation🌀User🌀Email🌀Visibility instanceof Internal\Hydrator\Operation\User\Email\Visibility === false) {
            $this->operation🌀User🌀Email🌀Visibility = new Internal\Hydrator\Operation\User\Email\Visibility();
        }

        return $this->operation🌀User🌀Email🌀Visibility;
    }

    public function getObjectMapperOperation🌀User🌀Emails(): Internal\Hydrator\Operation\User\Emails
    {
        if ($this->operation🌀User🌀Emails instanceof Internal\Hydrator\Operation\User\Emails === false) {
            $this->operation🌀User🌀Emails = new Internal\Hydrator\Operation\User\Emails();
        }

        return $this->operation🌀User🌀Emails;
    }

    public function getObjectMapperOperation🌀User🌀Followers(): Internal\Hydrator\Operation\User\Followers
    {
        if ($this->operation🌀User🌀Followers instanceof Internal\Hydrator\Operation\User\Followers === false) {
            $this->operation🌀User🌀Followers = new Internal\Hydrator\Operation\User\Followers();
        }

        return $this->operation🌀User🌀Followers;
    }

    public function getObjectMapperOperation🌀User🌀Following(): Internal\Hydrator\Operation\User\Following
    {
        if ($this->operation🌀User🌀Following instanceof Internal\Hydrator\Operation\User\Following === false) {
            $this->operation🌀User🌀Following = new Internal\Hydrator\Operation\User\Following();
        }

        return $this->operation🌀User🌀Following;
    }

    public function getObjectMapperOperation🌀User🌀Following🌀Username(): Internal\Hydrator\Operation\User\Following\Username
    {
        if ($this->operation🌀User🌀Following🌀Username instanceof Internal\Hydrator\Operation\User\Following\Username === false) {
            $this->operation🌀User🌀Following🌀Username = new Internal\Hydrator\Operation\User\Following\Username();
        }

        return $this->operation🌀User🌀Following🌀Username;
    }

    public function getObjectMapperOperation🌀User🌀GpgKeys(): Internal\Hydrator\Operation\User\GpgKeys
    {
        if ($this->operation🌀User🌀GpgKeys instanceof Internal\Hydrator\Operation\User\GpgKeys === false) {
            $this->operation🌀User🌀GpgKeys = new Internal\Hydrator\Operation\User\GpgKeys();
        }

        return $this->operation🌀User🌀GpgKeys;
    }

    public function getObjectMapperOperation🌀User🌀GpgKeys🌀GpgKeyId(): Internal\Hydrator\Operation\User\GpgKeys\GpgKeyId
    {
        if ($this->operation🌀User🌀GpgKeys🌀GpgKeyId instanceof Internal\Hydrator\Operation\User\GpgKeys\GpgKeyId === false) {
            $this->operation🌀User🌀GpgKeys🌀GpgKeyId = new Internal\Hydrator\Operation\User\GpgKeys\GpgKeyId();
        }

        return $this->operation🌀User🌀GpgKeys🌀GpgKeyId;
    }

    public function getObjectMapperOperation🌀User🌀Installations(): Internal\Hydrator\Operation\User\Installations
    {
        if ($this->operation🌀User🌀Installations instanceof Internal\Hydrator\Operation\User\Installations === false) {
            $this->operation🌀User🌀Installations = new Internal\Hydrator\Operation\User\Installations();
        }

        return $this->operation🌀User🌀Installations;
    }

    public function getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories(): Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories
    {
        if ($this->operation🌀User🌀Installations🌀InstallationId🌀Repositories instanceof Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories === false) {
            $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories = new Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories();
        }

        return $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId(): Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId
    {
        if ($this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId instanceof Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId === false) {
            $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId = new Internal\Hydrator\Operation\User\Installations\InstallationId\Repositories\RepositoryId();
        }

        return $this->operation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId;
    }

    public function getObjectMapperOperation🌀User🌀InteractionLimits(): Internal\Hydrator\Operation\User\InteractionLimits
    {
        if ($this->operation🌀User🌀InteractionLimits instanceof Internal\Hydrator\Operation\User\InteractionLimits === false) {
            $this->operation🌀User🌀InteractionLimits = new Internal\Hydrator\Operation\User\InteractionLimits();
        }

        return $this->operation🌀User🌀InteractionLimits;
    }

    public function getObjectMapperOperation🌀User🌀Issues(): Internal\Hydrator\Operation\User\Issues
    {
        if ($this->operation🌀User🌀Issues instanceof Internal\Hydrator\Operation\User\Issues === false) {
            $this->operation🌀User🌀Issues = new Internal\Hydrator\Operation\User\Issues();
        }

        return $this->operation🌀User🌀Issues;
    }

    public function getObjectMapperOperation🌀User🌀Keys(): Internal\Hydrator\Operation\User\Keys
    {
        if ($this->operation🌀User🌀Keys instanceof Internal\Hydrator\Operation\User\Keys === false) {
            $this->operation🌀User🌀Keys = new Internal\Hydrator\Operation\User\Keys();
        }

        return $this->operation🌀User🌀Keys;
    }

    public function getObjectMapperOperation🌀User🌀Keys🌀KeyId(): Internal\Hydrator\Operation\User\Keys\KeyId
    {
        if ($this->operation🌀User🌀Keys🌀KeyId instanceof Internal\Hydrator\Operation\User\Keys\KeyId === false) {
            $this->operation🌀User🌀Keys🌀KeyId = new Internal\Hydrator\Operation\User\Keys\KeyId();
        }

        return $this->operation🌀User🌀Keys🌀KeyId;
    }

    public function getObjectMapperOperation🌀User🌀MarketplacePurchases(): Internal\Hydrator\Operation\User\MarketplacePurchases
    {
        if ($this->operation🌀User🌀MarketplacePurchases instanceof Internal\Hydrator\Operation\User\MarketplacePurchases === false) {
            $this->operation🌀User🌀MarketplacePurchases = new Internal\Hydrator\Operation\User\MarketplacePurchases();
        }

        return $this->operation🌀User🌀MarketplacePurchases;
    }

    public function getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed(): Internal\Hydrator\Operation\User\MarketplacePurchases\Stubbed
    {
        if ($this->operation🌀User🌀MarketplacePurchases🌀Stubbed instanceof Internal\Hydrator\Operation\User\MarketplacePurchases\Stubbed === false) {
            $this->operation🌀User🌀MarketplacePurchases🌀Stubbed = new Internal\Hydrator\Operation\User\MarketplacePurchases\Stubbed();
        }

        return $this->operation🌀User🌀MarketplacePurchases🌀Stubbed;
    }

    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs(): Internal\Hydrator\Operation\User\Memberships\Orgs
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs instanceof Internal\Hydrator\Operation\User\Memberships\Orgs === false) {
            $this->operation🌀User🌀Memberships🌀Orgs = new Internal\Hydrator\Operation\User\Memberships\Orgs();
        }

        return $this->operation🌀User🌀Memberships🌀Orgs;
    }

    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org(): Internal\Hydrator\Operation\User\Memberships\Orgs\Org
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs🌀Org instanceof Internal\Hydrator\Operation\User\Memberships\Orgs\Org === false) {
            $this->operation🌀User🌀Memberships🌀Orgs🌀Org = new Internal\Hydrator\Operation\User\Memberships\Orgs\Org();
        }

        return $this->operation🌀User🌀Memberships🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀User🌀Migrations(): Internal\Hydrator\Operation\User\Migrations
    {
        if ($this->operation🌀User🌀Migrations instanceof Internal\Hydrator\Operation\User\Migrations === false) {
            $this->operation🌀User🌀Migrations = new Internal\Hydrator\Operation\User\Migrations();
        }

        return $this->operation🌀User🌀Migrations;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId(): Internal\Hydrator\Operation\User\Migrations\MigrationId
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId instanceof Internal\Hydrator\Operation\User\Migrations\MigrationId === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId = new Internal\Hydrator\Operation\User\Migrations\MigrationId();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Archive(): Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId🌀Archive instanceof Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId🌀Archive = new Internal\Hydrator\Operation\User\Migrations\MigrationId\Archive();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId🌀Archive;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock(): Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock instanceof Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock = new Internal\Hydrator\Operation\User\Migrations\MigrationId\Repos\RepoName\Lock();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId🌀Repos🌀RepoName🌀Lock;
    }

    public function getObjectMapperOperation🌀User🌀Migrations🌀MigrationId🌀Repositories(): Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories
    {
        if ($this->operation🌀User🌀Migrations🌀MigrationId🌀Repositories instanceof Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories === false) {
            $this->operation🌀User🌀Migrations🌀MigrationId🌀Repositories = new Internal\Hydrator\Operation\User\Migrations\MigrationId\Repositories();
        }

        return $this->operation🌀User🌀Migrations🌀MigrationId🌀Repositories;
    }

    public function getObjectMapperOperation🌀User🌀Orgs(): Internal\Hydrator\Operation\User\Orgs
    {
        if ($this->operation🌀User🌀Orgs instanceof Internal\Hydrator\Operation\User\Orgs === false) {
            $this->operation🌀User🌀Orgs = new Internal\Hydrator\Operation\User\Orgs();
        }

        return $this->operation🌀User🌀Orgs;
    }

    public function getObjectMapperOperation🌀User🌀Packages(): Internal\Hydrator\Operation\User\Packages
    {
        if ($this->operation🌀User🌀Packages instanceof Internal\Hydrator\Operation\User\Packages === false) {
            $this->operation🌀User🌀Packages = new Internal\Hydrator\Operation\User\Packages();
        }

        return $this->operation🌀User🌀Packages;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName(): Internal\Hydrator\Operation\User\Packages\PackageType\PackageName
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName instanceof Internal\Hydrator\Operation\User\Packages\PackageType\PackageName === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName = new Internal\Hydrator\Operation\User\Packages\PackageType\PackageName();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore(): Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore instanceof Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore = new Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Restore();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Restore;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions(): Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions instanceof Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions = new Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId(): Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId instanceof Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId = new Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId;
    }

    public function getObjectMapperOperation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore(): Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore
    {
        if ($this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore instanceof Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore === false) {
            $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = new Internal\Hydrator\Operation\User\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore();
        }

        return $this->operation🌀User🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore;
    }

    public function getObjectMapperOperation🌀User🌀Projects(): Internal\Hydrator\Operation\User\Projects
    {
        if ($this->operation🌀User🌀Projects instanceof Internal\Hydrator\Operation\User\Projects === false) {
            $this->operation🌀User🌀Projects = new Internal\Hydrator\Operation\User\Projects();
        }

        return $this->operation🌀User🌀Projects;
    }

    public function getObjectMapperOperation🌀User🌀PublicEmails(): Internal\Hydrator\Operation\User\PublicEmails
    {
        if ($this->operation🌀User🌀PublicEmails instanceof Internal\Hydrator\Operation\User\PublicEmails === false) {
            $this->operation🌀User🌀PublicEmails = new Internal\Hydrator\Operation\User\PublicEmails();
        }

        return $this->operation🌀User🌀PublicEmails;
    }

    public function getObjectMapperOperation🌀User🌀Repos(): Internal\Hydrator\Operation\User\Repos
    {
        if ($this->operation🌀User🌀Repos instanceof Internal\Hydrator\Operation\User\Repos === false) {
            $this->operation🌀User🌀Repos = new Internal\Hydrator\Operation\User\Repos();
        }

        return $this->operation🌀User🌀Repos;
    }

    public function getObjectMapperOperation🌀User🌀RepositoryInvitations(): Internal\Hydrator\Operation\User\RepositoryInvitations
    {
        if ($this->operation🌀User🌀RepositoryInvitations instanceof Internal\Hydrator\Operation\User\RepositoryInvitations === false) {
            $this->operation🌀User🌀RepositoryInvitations = new Internal\Hydrator\Operation\User\RepositoryInvitations();
        }

        return $this->operation🌀User🌀RepositoryInvitations;
    }

    public function getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId(): Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId
    {
        if ($this->operation🌀User🌀RepositoryInvitations🌀InvitationId instanceof Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId === false) {
            $this->operation🌀User🌀RepositoryInvitations🌀InvitationId = new Internal\Hydrator\Operation\User\RepositoryInvitations\InvitationId();
        }

        return $this->operation🌀User🌀RepositoryInvitations🌀InvitationId;
    }

    public function getObjectMapperOperation🌀User🌀SocialAccounts(): Internal\Hydrator\Operation\User\SocialAccounts
    {
        if ($this->operation🌀User🌀SocialAccounts instanceof Internal\Hydrator\Operation\User\SocialAccounts === false) {
            $this->operation🌀User🌀SocialAccounts = new Internal\Hydrator\Operation\User\SocialAccounts();
        }

        return $this->operation🌀User🌀SocialAccounts;
    }

    public function getObjectMapperOperation🌀User🌀SshSigningKeys(): Internal\Hydrator\Operation\User\SshSigningKeys
    {
        if ($this->operation🌀User🌀SshSigningKeys instanceof Internal\Hydrator\Operation\User\SshSigningKeys === false) {
            $this->operation🌀User🌀SshSigningKeys = new Internal\Hydrator\Operation\User\SshSigningKeys();
        }

        return $this->operation🌀User🌀SshSigningKeys;
    }

    public function getObjectMapperOperation🌀User🌀SshSigningKeys🌀SshSigningKeyId(): Internal\Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId
    {
        if ($this->operation🌀User🌀SshSigningKeys🌀SshSigningKeyId instanceof Internal\Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId === false) {
            $this->operation🌀User🌀SshSigningKeys🌀SshSigningKeyId = new Internal\Hydrator\Operation\User\SshSigningKeys\SshSigningKeyId();
        }

        return $this->operation🌀User🌀SshSigningKeys🌀SshSigningKeyId;
    }

    public function getObjectMapperOperation🌀User🌀Starred(): Internal\Hydrator\Operation\User\Starred
    {
        if ($this->operation🌀User🌀Starred instanceof Internal\Hydrator\Operation\User\Starred === false) {
            $this->operation🌀User🌀Starred = new Internal\Hydrator\Operation\User\Starred();
        }

        return $this->operation🌀User🌀Starred;
    }

    public function getObjectMapperOperation🌀User🌀Starred🌀Owner🌀Repo(): Internal\Hydrator\Operation\User\Starred\Owner\Repo
    {
        if ($this->operation🌀User🌀Starred🌀Owner🌀Repo instanceof Internal\Hydrator\Operation\User\Starred\Owner\Repo === false) {
            $this->operation🌀User🌀Starred🌀Owner🌀Repo = new Internal\Hydrator\Operation\User\Starred\Owner\Repo();
        }

        return $this->operation🌀User🌀Starred🌀Owner🌀Repo;
    }

    public function getObjectMapperOperation🌀User🌀Subscriptions(): Internal\Hydrator\Operation\User\Subscriptions
    {
        if ($this->operation🌀User🌀Subscriptions instanceof Internal\Hydrator\Operation\User\Subscriptions === false) {
            $this->operation🌀User🌀Subscriptions = new Internal\Hydrator\Operation\User\Subscriptions();
        }

        return $this->operation🌀User🌀Subscriptions;
    }

    public function getObjectMapperOperation🌀User🌀Teams(): Internal\Hydrator\Operation\User\Teams
    {
        if ($this->operation🌀User🌀Teams instanceof Internal\Hydrator\Operation\User\Teams === false) {
            $this->operation🌀User🌀Teams = new Internal\Hydrator\Operation\User\Teams();
        }

        return $this->operation🌀User🌀Teams;
    }

    public function getObjectMapperOperation🌀Users(): Internal\Hydrator\Operation\Users
    {
        if ($this->operation🌀Users instanceof Internal\Hydrator\Operation\Users === false) {
            $this->operation🌀Users = new Internal\Hydrator\Operation\Users();
        }

        return $this->operation🌀Users;
    }

    public function getObjectMapperOperation🌀Users🌀Username(): Internal\Hydrator\Operation\Users\Username
    {
        if ($this->operation🌀Users🌀Username instanceof Internal\Hydrator\Operation\Users\Username === false) {
            $this->operation🌀Users🌀Username = new Internal\Hydrator\Operation\Users\Username();
        }

        return $this->operation🌀Users🌀Username;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Docker🌀Conflicts(): Internal\Hydrator\Operation\Users\Username\Docker\Conflicts
    {
        if ($this->operation🌀Users🌀Username🌀Docker🌀Conflicts instanceof Internal\Hydrator\Operation\Users\Username\Docker\Conflicts === false) {
            $this->operation🌀Users🌀Username🌀Docker🌀Conflicts = new Internal\Hydrator\Operation\Users\Username\Docker\Conflicts();
        }

        return $this->operation🌀Users🌀Username🌀Docker🌀Conflicts;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events(): Internal\Hydrator\Operation\Users\Username\Events
    {
        if ($this->operation🌀Users🌀Username🌀Events instanceof Internal\Hydrator\Operation\Users\Username\Events === false) {
            $this->operation🌀Users🌀Username🌀Events = new Internal\Hydrator\Operation\Users\Username\Events();
        }

        return $this->operation🌀Users🌀Username🌀Events;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events🌀Orgs🌀Org(): Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org
    {
        if ($this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org instanceof Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org === false) {
            $this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org = new Internal\Hydrator\Operation\Users\Username\Events\Orgs\Org();
        }

        return $this->operation🌀Users🌀Username🌀Events🌀Orgs🌀Org;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Events🌀Public_(): Internal\Hydrator\Operation\Users\Username\Events\Public_
    {
        if ($this->operation🌀Users🌀Username🌀Events🌀Public_ instanceof Internal\Hydrator\Operation\Users\Username\Events\Public_ === false) {
            $this->operation🌀Users🌀Username🌀Events🌀Public_ = new Internal\Hydrator\Operation\Users\Username\Events\Public_();
        }

        return $this->operation🌀Users🌀Username🌀Events🌀Public_;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Followers(): Internal\Hydrator\Operation\Users\Username\Followers
    {
        if ($this->operation🌀Users🌀Username🌀Followers instanceof Internal\Hydrator\Operation\Users\Username\Followers === false) {
            $this->operation🌀Users🌀Username🌀Followers = new Internal\Hydrator\Operation\Users\Username\Followers();
        }

        return $this->operation🌀Users🌀Username🌀Followers;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Following(): Internal\Hydrator\Operation\Users\Username\Following
    {
        if ($this->operation🌀Users🌀Username🌀Following instanceof Internal\Hydrator\Operation\Users\Username\Following === false) {
            $this->operation🌀Users🌀Username🌀Following = new Internal\Hydrator\Operation\Users\Username\Following();
        }

        return $this->operation🌀Users🌀Username🌀Following;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Following🌀TargetUser(): Internal\Hydrator\Operation\Users\Username\Following\TargetUser
    {
        if ($this->operation🌀Users🌀Username🌀Following🌀TargetUser instanceof Internal\Hydrator\Operation\Users\Username\Following\TargetUser === false) {
            $this->operation🌀Users🌀Username🌀Following🌀TargetUser = new Internal\Hydrator\Operation\Users\Username\Following\TargetUser();
        }

        return $this->operation🌀Users🌀Username🌀Following🌀TargetUser;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Gists(): Internal\Hydrator\Operation\Users\Username\Gists
    {
        if ($this->operation🌀Users🌀Username🌀Gists instanceof Internal\Hydrator\Operation\Users\Username\Gists === false) {
            $this->operation🌀Users🌀Username🌀Gists = new Internal\Hydrator\Operation\Users\Username\Gists();
        }

        return $this->operation🌀Users🌀Username🌀Gists;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀GpgKeys(): Internal\Hydrator\Operation\Users\Username\GpgKeys
    {
        if ($this->operation🌀Users🌀Username🌀GpgKeys instanceof Internal\Hydrator\Operation\Users\Username\GpgKeys === false) {
            $this->operation🌀Users🌀Username🌀GpgKeys = new Internal\Hydrator\Operation\Users\Username\GpgKeys();
        }

        return $this->operation🌀Users🌀Username🌀GpgKeys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Hovercard(): Internal\Hydrator\Operation\Users\Username\Hovercard
    {
        if ($this->operation🌀Users🌀Username🌀Hovercard instanceof Internal\Hydrator\Operation\Users\Username\Hovercard === false) {
            $this->operation🌀Users🌀Username🌀Hovercard = new Internal\Hydrator\Operation\Users\Username\Hovercard();
        }

        return $this->operation🌀Users🌀Username🌀Hovercard;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Installation(): Internal\Hydrator\Operation\Users\Username\Installation
    {
        if ($this->operation🌀Users🌀Username🌀Installation instanceof Internal\Hydrator\Operation\Users\Username\Installation === false) {
            $this->operation🌀Users🌀Username🌀Installation = new Internal\Hydrator\Operation\Users\Username\Installation();
        }

        return $this->operation🌀Users🌀Username🌀Installation;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Keys(): Internal\Hydrator\Operation\Users\Username\Keys
    {
        if ($this->operation🌀Users🌀Username🌀Keys instanceof Internal\Hydrator\Operation\Users\Username\Keys === false) {
            $this->operation🌀Users🌀Username🌀Keys = new Internal\Hydrator\Operation\Users\Username\Keys();
        }

        return $this->operation🌀Users🌀Username🌀Keys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Orgs(): Internal\Hydrator\Operation\Users\Username\Orgs
    {
        if ($this->operation🌀Users🌀Username🌀Orgs instanceof Internal\Hydrator\Operation\Users\Username\Orgs === false) {
            $this->operation🌀Users🌀Username🌀Orgs = new Internal\Hydrator\Operation\Users\Username\Orgs();
        }

        return $this->operation🌀Users🌀Username🌀Orgs;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages(): Internal\Hydrator\Operation\Users\Username\Packages
    {
        if ($this->operation🌀Users🌀Username🌀Packages instanceof Internal\Hydrator\Operation\Users\Username\Packages === false) {
            $this->operation🌀Users🌀Username🌀Packages = new Internal\Hydrator\Operation\Users\Username\Packages();
        }

        return $this->operation🌀Users🌀Username🌀Packages;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName(): Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName instanceof Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName = new Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore(): Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore instanceof Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore = new Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Restore();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Restore;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions(): Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions instanceof Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions = new Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId(): Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId instanceof Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId = new Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore(): Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore
    {
        if ($this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore instanceof Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore === false) {
            $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore = new Internal\Hydrator\Operation\Users\Username\Packages\PackageType\PackageName\Versions\PackageVersionId\Restore();
        }

        return $this->operation🌀Users🌀Username🌀Packages🌀PackageType🌀PackageName🌀Versions🌀PackageVersionId🌀Restore;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Projects(): Internal\Hydrator\Operation\Users\Username\Projects
    {
        if ($this->operation🌀Users🌀Username🌀Projects instanceof Internal\Hydrator\Operation\Users\Username\Projects === false) {
            $this->operation🌀Users🌀Username🌀Projects = new Internal\Hydrator\Operation\Users\Username\Projects();
        }

        return $this->operation🌀Users🌀Username🌀Projects;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents(): Internal\Hydrator\Operation\Users\Username\ReceivedEvents
    {
        if ($this->operation🌀Users🌀Username🌀ReceivedEvents instanceof Internal\Hydrator\Operation\Users\Username\ReceivedEvents === false) {
            $this->operation🌀Users🌀Username🌀ReceivedEvents = new Internal\Hydrator\Operation\Users\Username\ReceivedEvents();
        }

        return $this->operation🌀Users🌀Username🌀ReceivedEvents;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀ReceivedEvents🌀Public_(): Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_
    {
        if ($this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_ instanceof Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_ === false) {
            $this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_ = new Internal\Hydrator\Operation\Users\Username\ReceivedEvents\Public_();
        }

        return $this->operation🌀Users🌀Username🌀ReceivedEvents🌀Public_;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Repos(): Internal\Hydrator\Operation\Users\Username\Repos
    {
        if ($this->operation🌀Users🌀Username🌀Repos instanceof Internal\Hydrator\Operation\Users\Username\Repos === false) {
            $this->operation🌀Users🌀Username🌀Repos = new Internal\Hydrator\Operation\Users\Username\Repos();
        }

        return $this->operation🌀Users🌀Username🌀Repos;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Actions(): Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions
    {
        if ($this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions instanceof Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions === false) {
            $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions = new Internal\Hydrator\Operation\Users\Username\Settings\Billing\Actions();
        }

        return $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Actions;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀Packages(): Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages
    {
        if ($this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages instanceof Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages === false) {
            $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages = new Internal\Hydrator\Operation\Users\Username\Settings\Billing\Packages();
        }

        return $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀Packages;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage(): Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage
    {
        if ($this->operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage instanceof Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage === false) {
            $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage = new Internal\Hydrator\Operation\Users\Username\Settings\Billing\SharedStorage();
        }

        return $this->operation🌀Users🌀Username🌀Settings🌀Billing🌀SharedStorage;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀SocialAccounts(): Internal\Hydrator\Operation\Users\Username\SocialAccounts
    {
        if ($this->operation🌀Users🌀Username🌀SocialAccounts instanceof Internal\Hydrator\Operation\Users\Username\SocialAccounts === false) {
            $this->operation🌀Users🌀Username🌀SocialAccounts = new Internal\Hydrator\Operation\Users\Username\SocialAccounts();
        }

        return $this->operation🌀Users🌀Username🌀SocialAccounts;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀SshSigningKeys(): Internal\Hydrator\Operation\Users\Username\SshSigningKeys
    {
        if ($this->operation🌀Users🌀Username🌀SshSigningKeys instanceof Internal\Hydrator\Operation\Users\Username\SshSigningKeys === false) {
            $this->operation🌀Users🌀Username🌀SshSigningKeys = new Internal\Hydrator\Operation\Users\Username\SshSigningKeys();
        }

        return $this->operation🌀Users🌀Username🌀SshSigningKeys;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Starred(): Internal\Hydrator\Operation\Users\Username\Starred
    {
        if ($this->operation🌀Users🌀Username🌀Starred instanceof Internal\Hydrator\Operation\Users\Username\Starred === false) {
            $this->operation🌀Users🌀Username🌀Starred = new Internal\Hydrator\Operation\Users\Username\Starred();
        }

        return $this->operation🌀Users🌀Username🌀Starred;
    }

    public function getObjectMapperOperation🌀Users🌀Username🌀Subscriptions(): Internal\Hydrator\Operation\Users\Username\Subscriptions
    {
        if ($this->operation🌀Users🌀Username🌀Subscriptions instanceof Internal\Hydrator\Operation\Users\Username\Subscriptions === false) {
            $this->operation🌀Users🌀Username🌀Subscriptions = new Internal\Hydrator\Operation\Users\Username\Subscriptions();
        }

        return $this->operation🌀Users🌀Username🌀Subscriptions;
    }

    public function getObjectMapperOperation🌀Versions(): Internal\Hydrator\Operation\Versions
    {
        if ($this->operation🌀Versions instanceof Internal\Hydrator\Operation\Versions === false) {
            $this->operation🌀Versions = new Internal\Hydrator\Operation\Versions();
        }

        return $this->operation🌀Versions;
    }

    public function getObjectMapperOperation🌀Zen(): Internal\Hydrator\Operation\Zen
    {
        if ($this->operation🌀Zen instanceof Internal\Hydrator\Operation\Zen === false) {
            $this->operation🌀Zen = new Internal\Hydrator\Operation\Zen();
        }

        return $this->operation🌀Zen;
    }

    public function getObjectMapperWebHook🪝BranchProtectionConfiguration(): Internal\Hydrator\WebHook\BranchProtectionConfiguration
    {
        if ($this->webHook🪝BranchProtectionConfiguration instanceof Internal\Hydrator\WebHook\BranchProtectionConfiguration === false) {
            $this->webHook🪝BranchProtectionConfiguration = new Internal\Hydrator\WebHook\BranchProtectionConfiguration();
        }

        return $this->webHook🪝BranchProtectionConfiguration;
    }

    public function getObjectMapperWebHook🪝BranchProtectionRule(): Internal\Hydrator\WebHook\BranchProtectionRule
    {
        if ($this->webHook🪝BranchProtectionRule instanceof Internal\Hydrator\WebHook\BranchProtectionRule === false) {
            $this->webHook🪝BranchProtectionRule = new Internal\Hydrator\WebHook\BranchProtectionRule();
        }

        return $this->webHook🪝BranchProtectionRule;
    }

    public function getObjectMapperWebHook🪝CheckRun(): Internal\Hydrator\WebHook\CheckRun
    {
        if ($this->webHook🪝CheckRun instanceof Internal\Hydrator\WebHook\CheckRun === false) {
            $this->webHook🪝CheckRun = new Internal\Hydrator\WebHook\CheckRun();
        }

        return $this->webHook🪝CheckRun;
    }

    public function getObjectMapperWebHook🪝CheckSuite(): Internal\Hydrator\WebHook\CheckSuite
    {
        if ($this->webHook🪝CheckSuite instanceof Internal\Hydrator\WebHook\CheckSuite === false) {
            $this->webHook🪝CheckSuite = new Internal\Hydrator\WebHook\CheckSuite();
        }

        return $this->webHook🪝CheckSuite;
    }

    public function getObjectMapperWebHook🪝CodeScanningAlert(): Internal\Hydrator\WebHook\CodeScanningAlert
    {
        if ($this->webHook🪝CodeScanningAlert instanceof Internal\Hydrator\WebHook\CodeScanningAlert === false) {
            $this->webHook🪝CodeScanningAlert = new Internal\Hydrator\WebHook\CodeScanningAlert();
        }

        return $this->webHook🪝CodeScanningAlert;
    }

    public function getObjectMapperWebHook🪝CommitComment(): Internal\Hydrator\WebHook\CommitComment
    {
        if ($this->webHook🪝CommitComment instanceof Internal\Hydrator\WebHook\CommitComment === false) {
            $this->webHook🪝CommitComment = new Internal\Hydrator\WebHook\CommitComment();
        }

        return $this->webHook🪝CommitComment;
    }

    public function getObjectMapperWebHook🪝Create(): Internal\Hydrator\WebHook\Create
    {
        if ($this->webHook🪝Create instanceof Internal\Hydrator\WebHook\Create === false) {
            $this->webHook🪝Create = new Internal\Hydrator\WebHook\Create();
        }

        return $this->webHook🪝Create;
    }

    public function getObjectMapperWebHook🪝CustomProperty(): Internal\Hydrator\WebHook\CustomProperty
    {
        if ($this->webHook🪝CustomProperty instanceof Internal\Hydrator\WebHook\CustomProperty === false) {
            $this->webHook🪝CustomProperty = new Internal\Hydrator\WebHook\CustomProperty();
        }

        return $this->webHook🪝CustomProperty;
    }

    public function getObjectMapperWebHook🪝CustomPropertyValues(): Internal\Hydrator\WebHook\CustomPropertyValues
    {
        if ($this->webHook🪝CustomPropertyValues instanceof Internal\Hydrator\WebHook\CustomPropertyValues === false) {
            $this->webHook🪝CustomPropertyValues = new Internal\Hydrator\WebHook\CustomPropertyValues();
        }

        return $this->webHook🪝CustomPropertyValues;
    }

    public function getObjectMapperWebHook🪝Delete(): Internal\Hydrator\WebHook\Delete
    {
        if ($this->webHook🪝Delete instanceof Internal\Hydrator\WebHook\Delete === false) {
            $this->webHook🪝Delete = new Internal\Hydrator\WebHook\Delete();
        }

        return $this->webHook🪝Delete;
    }

    public function getObjectMapperWebHook🪝DependabotAlert(): Internal\Hydrator\WebHook\DependabotAlert
    {
        if ($this->webHook🪝DependabotAlert instanceof Internal\Hydrator\WebHook\DependabotAlert === false) {
            $this->webHook🪝DependabotAlert = new Internal\Hydrator\WebHook\DependabotAlert();
        }

        return $this->webHook🪝DependabotAlert;
    }

    public function getObjectMapperWebHook🪝DeployKey(): Internal\Hydrator\WebHook\DeployKey
    {
        if ($this->webHook🪝DeployKey instanceof Internal\Hydrator\WebHook\DeployKey === false) {
            $this->webHook🪝DeployKey = new Internal\Hydrator\WebHook\DeployKey();
        }

        return $this->webHook🪝DeployKey;
    }

    public function getObjectMapperWebHook🪝Deployment(): Internal\Hydrator\WebHook\Deployment
    {
        if ($this->webHook🪝Deployment instanceof Internal\Hydrator\WebHook\Deployment === false) {
            $this->webHook🪝Deployment = new Internal\Hydrator\WebHook\Deployment();
        }

        return $this->webHook🪝Deployment;
    }

    public function getObjectMapperWebHook🪝DeploymentProtectionRule(): Internal\Hydrator\WebHook\DeploymentProtectionRule
    {
        if ($this->webHook🪝DeploymentProtectionRule instanceof Internal\Hydrator\WebHook\DeploymentProtectionRule === false) {
            $this->webHook🪝DeploymentProtectionRule = new Internal\Hydrator\WebHook\DeploymentProtectionRule();
        }

        return $this->webHook🪝DeploymentProtectionRule;
    }

    public function getObjectMapperWebHook🪝DeploymentReview(): Internal\Hydrator\WebHook\DeploymentReview
    {
        if ($this->webHook🪝DeploymentReview instanceof Internal\Hydrator\WebHook\DeploymentReview === false) {
            $this->webHook🪝DeploymentReview = new Internal\Hydrator\WebHook\DeploymentReview();
        }

        return $this->webHook🪝DeploymentReview;
    }

    public function getObjectMapperWebHook🪝DeploymentStatus(): Internal\Hydrator\WebHook\DeploymentStatus
    {
        if ($this->webHook🪝DeploymentStatus instanceof Internal\Hydrator\WebHook\DeploymentStatus === false) {
            $this->webHook🪝DeploymentStatus = new Internal\Hydrator\WebHook\DeploymentStatus();
        }

        return $this->webHook🪝DeploymentStatus;
    }

    public function getObjectMapperWebHook🪝Discussion(): Internal\Hydrator\WebHook\Discussion
    {
        if ($this->webHook🪝Discussion instanceof Internal\Hydrator\WebHook\Discussion === false) {
            $this->webHook🪝Discussion = new Internal\Hydrator\WebHook\Discussion();
        }

        return $this->webHook🪝Discussion;
    }

    public function getObjectMapperWebHook🪝DiscussionComment(): Internal\Hydrator\WebHook\DiscussionComment
    {
        if ($this->webHook🪝DiscussionComment instanceof Internal\Hydrator\WebHook\DiscussionComment === false) {
            $this->webHook🪝DiscussionComment = new Internal\Hydrator\WebHook\DiscussionComment();
        }

        return $this->webHook🪝DiscussionComment;
    }

    public function getObjectMapperWebHook🪝Fork(): Internal\Hydrator\WebHook\Fork
    {
        if ($this->webHook🪝Fork instanceof Internal\Hydrator\WebHook\Fork === false) {
            $this->webHook🪝Fork = new Internal\Hydrator\WebHook\Fork();
        }

        return $this->webHook🪝Fork;
    }

    public function getObjectMapperWebHook🪝GithubAppAuthorization(): Internal\Hydrator\WebHook\GithubAppAuthorization
    {
        if ($this->webHook🪝GithubAppAuthorization instanceof Internal\Hydrator\WebHook\GithubAppAuthorization === false) {
            $this->webHook🪝GithubAppAuthorization = new Internal\Hydrator\WebHook\GithubAppAuthorization();
        }

        return $this->webHook🪝GithubAppAuthorization;
    }

    public function getObjectMapperWebHook🪝Gollum(): Internal\Hydrator\WebHook\Gollum
    {
        if ($this->webHook🪝Gollum instanceof Internal\Hydrator\WebHook\Gollum === false) {
            $this->webHook🪝Gollum = new Internal\Hydrator\WebHook\Gollum();
        }

        return $this->webHook🪝Gollum;
    }

    public function getObjectMapperWebHook🪝Installation(): Internal\Hydrator\WebHook\Installation
    {
        if ($this->webHook🪝Installation instanceof Internal\Hydrator\WebHook\Installation === false) {
            $this->webHook🪝Installation = new Internal\Hydrator\WebHook\Installation();
        }

        return $this->webHook🪝Installation;
    }

    public function getObjectMapperWebHook🪝InstallationRepositories(): Internal\Hydrator\WebHook\InstallationRepositories
    {
        if ($this->webHook🪝InstallationRepositories instanceof Internal\Hydrator\WebHook\InstallationRepositories === false) {
            $this->webHook🪝InstallationRepositories = new Internal\Hydrator\WebHook\InstallationRepositories();
        }

        return $this->webHook🪝InstallationRepositories;
    }

    public function getObjectMapperWebHook🪝InstallationTarget(): Internal\Hydrator\WebHook\InstallationTarget
    {
        if ($this->webHook🪝InstallationTarget instanceof Internal\Hydrator\WebHook\InstallationTarget === false) {
            $this->webHook🪝InstallationTarget = new Internal\Hydrator\WebHook\InstallationTarget();
        }

        return $this->webHook🪝InstallationTarget;
    }

    public function getObjectMapperWebHook🪝IssueComment(): Internal\Hydrator\WebHook\IssueComment
    {
        if ($this->webHook🪝IssueComment instanceof Internal\Hydrator\WebHook\IssueComment === false) {
            $this->webHook🪝IssueComment = new Internal\Hydrator\WebHook\IssueComment();
        }

        return $this->webHook🪝IssueComment;
    }

    public function getObjectMapperWebHook🪝Issues(): Internal\Hydrator\WebHook\Issues
    {
        if ($this->webHook🪝Issues instanceof Internal\Hydrator\WebHook\Issues === false) {
            $this->webHook🪝Issues = new Internal\Hydrator\WebHook\Issues();
        }

        return $this->webHook🪝Issues;
    }

    public function getObjectMapperWebHook🪝Label(): Internal\Hydrator\WebHook\Label
    {
        if ($this->webHook🪝Label instanceof Internal\Hydrator\WebHook\Label === false) {
            $this->webHook🪝Label = new Internal\Hydrator\WebHook\Label();
        }

        return $this->webHook🪝Label;
    }

    public function getObjectMapperWebHook🪝MarketplacePurchase(): Internal\Hydrator\WebHook\MarketplacePurchase
    {
        if ($this->webHook🪝MarketplacePurchase instanceof Internal\Hydrator\WebHook\MarketplacePurchase === false) {
            $this->webHook🪝MarketplacePurchase = new Internal\Hydrator\WebHook\MarketplacePurchase();
        }

        return $this->webHook🪝MarketplacePurchase;
    }

    public function getObjectMapperWebHook🪝Member(): Internal\Hydrator\WebHook\Member
    {
        if ($this->webHook🪝Member instanceof Internal\Hydrator\WebHook\Member === false) {
            $this->webHook🪝Member = new Internal\Hydrator\WebHook\Member();
        }

        return $this->webHook🪝Member;
    }

    public function getObjectMapperWebHook🪝Membership(): Internal\Hydrator\WebHook\Membership
    {
        if ($this->webHook🪝Membership instanceof Internal\Hydrator\WebHook\Membership === false) {
            $this->webHook🪝Membership = new Internal\Hydrator\WebHook\Membership();
        }

        return $this->webHook🪝Membership;
    }

    public function getObjectMapperWebHook🪝MergeGroup(): Internal\Hydrator\WebHook\MergeGroup
    {
        if ($this->webHook🪝MergeGroup instanceof Internal\Hydrator\WebHook\MergeGroup === false) {
            $this->webHook🪝MergeGroup = new Internal\Hydrator\WebHook\MergeGroup();
        }

        return $this->webHook🪝MergeGroup;
    }

    public function getObjectMapperWebHook🪝Meta(): Internal\Hydrator\WebHook\Meta
    {
        if ($this->webHook🪝Meta instanceof Internal\Hydrator\WebHook\Meta === false) {
            $this->webHook🪝Meta = new Internal\Hydrator\WebHook\Meta();
        }

        return $this->webHook🪝Meta;
    }

    public function getObjectMapperWebHook🪝Milestone(): Internal\Hydrator\WebHook\Milestone
    {
        if ($this->webHook🪝Milestone instanceof Internal\Hydrator\WebHook\Milestone === false) {
            $this->webHook🪝Milestone = new Internal\Hydrator\WebHook\Milestone();
        }

        return $this->webHook🪝Milestone;
    }

    public function getObjectMapperWebHook🪝OrgBlock(): Internal\Hydrator\WebHook\OrgBlock
    {
        if ($this->webHook🪝OrgBlock instanceof Internal\Hydrator\WebHook\OrgBlock === false) {
            $this->webHook🪝OrgBlock = new Internal\Hydrator\WebHook\OrgBlock();
        }

        return $this->webHook🪝OrgBlock;
    }

    public function getObjectMapperWebHook🪝Organization(): Internal\Hydrator\WebHook\Organization
    {
        if ($this->webHook🪝Organization instanceof Internal\Hydrator\WebHook\Organization === false) {
            $this->webHook🪝Organization = new Internal\Hydrator\WebHook\Organization();
        }

        return $this->webHook🪝Organization;
    }

    public function getObjectMapperWebHook🪝Package(): Internal\Hydrator\WebHook\Package
    {
        if ($this->webHook🪝Package instanceof Internal\Hydrator\WebHook\Package === false) {
            $this->webHook🪝Package = new Internal\Hydrator\WebHook\Package();
        }

        return $this->webHook🪝Package;
    }

    public function getObjectMapperWebHook🪝PageBuild(): Internal\Hydrator\WebHook\PageBuild
    {
        if ($this->webHook🪝PageBuild instanceof Internal\Hydrator\WebHook\PageBuild === false) {
            $this->webHook🪝PageBuild = new Internal\Hydrator\WebHook\PageBuild();
        }

        return $this->webHook🪝PageBuild;
    }

    public function getObjectMapperWebHook🪝PersonalAccessTokenRequest(): Internal\Hydrator\WebHook\PersonalAccessTokenRequest
    {
        if ($this->webHook🪝PersonalAccessTokenRequest instanceof Internal\Hydrator\WebHook\PersonalAccessTokenRequest === false) {
            $this->webHook🪝PersonalAccessTokenRequest = new Internal\Hydrator\WebHook\PersonalAccessTokenRequest();
        }

        return $this->webHook🪝PersonalAccessTokenRequest;
    }

    public function getObjectMapperWebHook🪝Ping(): Internal\Hydrator\WebHook\Ping
    {
        if ($this->webHook🪝Ping instanceof Internal\Hydrator\WebHook\Ping === false) {
            $this->webHook🪝Ping = new Internal\Hydrator\WebHook\Ping();
        }

        return $this->webHook🪝Ping;
    }

    public function getObjectMapperWebHook🪝ProjectCard(): Internal\Hydrator\WebHook\ProjectCard
    {
        if ($this->webHook🪝ProjectCard instanceof Internal\Hydrator\WebHook\ProjectCard === false) {
            $this->webHook🪝ProjectCard = new Internal\Hydrator\WebHook\ProjectCard();
        }

        return $this->webHook🪝ProjectCard;
    }

    public function getObjectMapperWebHook🪝Project(): Internal\Hydrator\WebHook\Project
    {
        if ($this->webHook🪝Project instanceof Internal\Hydrator\WebHook\Project === false) {
            $this->webHook🪝Project = new Internal\Hydrator\WebHook\Project();
        }

        return $this->webHook🪝Project;
    }

    public function getObjectMapperWebHook🪝ProjectColumn(): Internal\Hydrator\WebHook\ProjectColumn
    {
        if ($this->webHook🪝ProjectColumn instanceof Internal\Hydrator\WebHook\ProjectColumn === false) {
            $this->webHook🪝ProjectColumn = new Internal\Hydrator\WebHook\ProjectColumn();
        }

        return $this->webHook🪝ProjectColumn;
    }

    public function getObjectMapperWebHook🪝ProjectsV2(): Internal\Hydrator\WebHook\ProjectsV2
    {
        if ($this->webHook🪝ProjectsV2 instanceof Internal\Hydrator\WebHook\ProjectsV2 === false) {
            $this->webHook🪝ProjectsV2 = new Internal\Hydrator\WebHook\ProjectsV2();
        }

        return $this->webHook🪝ProjectsV2;
    }

    public function getObjectMapperWebHook🪝ProjectsV2Item(): Internal\Hydrator\WebHook\ProjectsV2Item
    {
        if ($this->webHook🪝ProjectsV2Item instanceof Internal\Hydrator\WebHook\ProjectsV2Item === false) {
            $this->webHook🪝ProjectsV2Item = new Internal\Hydrator\WebHook\ProjectsV2Item();
        }

        return $this->webHook🪝ProjectsV2Item;
    }

    public function getObjectMapperWebHook🪝Public_(): Internal\Hydrator\WebHook\Public_
    {
        if ($this->webHook🪝Public_ instanceof Internal\Hydrator\WebHook\Public_ === false) {
            $this->webHook🪝Public_ = new Internal\Hydrator\WebHook\Public_();
        }

        return $this->webHook🪝Public_;
    }

    public function getObjectMapperWebHook🪝PullRequest(): Internal\Hydrator\WebHook\PullRequest
    {
        if ($this->webHook🪝PullRequest instanceof Internal\Hydrator\WebHook\PullRequest === false) {
            $this->webHook🪝PullRequest = new Internal\Hydrator\WebHook\PullRequest();
        }

        return $this->webHook🪝PullRequest;
    }

    public function getObjectMapperWebHook🪝PullRequestReviewComment(): Internal\Hydrator\WebHook\PullRequestReviewComment
    {
        if ($this->webHook🪝PullRequestReviewComment instanceof Internal\Hydrator\WebHook\PullRequestReviewComment === false) {
            $this->webHook🪝PullRequestReviewComment = new Internal\Hydrator\WebHook\PullRequestReviewComment();
        }

        return $this->webHook🪝PullRequestReviewComment;
    }

    public function getObjectMapperWebHook🪝PullRequestReview(): Internal\Hydrator\WebHook\PullRequestReview
    {
        if ($this->webHook🪝PullRequestReview instanceof Internal\Hydrator\WebHook\PullRequestReview === false) {
            $this->webHook🪝PullRequestReview = new Internal\Hydrator\WebHook\PullRequestReview();
        }

        return $this->webHook🪝PullRequestReview;
    }

    public function getObjectMapperWebHook🪝PullRequestReviewThread(): Internal\Hydrator\WebHook\PullRequestReviewThread
    {
        if ($this->webHook🪝PullRequestReviewThread instanceof Internal\Hydrator\WebHook\PullRequestReviewThread === false) {
            $this->webHook🪝PullRequestReviewThread = new Internal\Hydrator\WebHook\PullRequestReviewThread();
        }

        return $this->webHook🪝PullRequestReviewThread;
    }

    public function getObjectMapperWebHook🪝Push(): Internal\Hydrator\WebHook\Push
    {
        if ($this->webHook🪝Push instanceof Internal\Hydrator\WebHook\Push === false) {
            $this->webHook🪝Push = new Internal\Hydrator\WebHook\Push();
        }

        return $this->webHook🪝Push;
    }

    public function getObjectMapperWebHook🪝RegistryPackage(): Internal\Hydrator\WebHook\RegistryPackage
    {
        if ($this->webHook🪝RegistryPackage instanceof Internal\Hydrator\WebHook\RegistryPackage === false) {
            $this->webHook🪝RegistryPackage = new Internal\Hydrator\WebHook\RegistryPackage();
        }

        return $this->webHook🪝RegistryPackage;
    }

    public function getObjectMapperWebHook🪝Release(): Internal\Hydrator\WebHook\Release
    {
        if ($this->webHook🪝Release instanceof Internal\Hydrator\WebHook\Release === false) {
            $this->webHook🪝Release = new Internal\Hydrator\WebHook\Release();
        }

        return $this->webHook🪝Release;
    }

    public function getObjectMapperWebHook🪝RepositoryAdvisory(): Internal\Hydrator\WebHook\RepositoryAdvisory
    {
        if ($this->webHook🪝RepositoryAdvisory instanceof Internal\Hydrator\WebHook\RepositoryAdvisory === false) {
            $this->webHook🪝RepositoryAdvisory = new Internal\Hydrator\WebHook\RepositoryAdvisory();
        }

        return $this->webHook🪝RepositoryAdvisory;
    }

    public function getObjectMapperWebHook🪝Repository(): Internal\Hydrator\WebHook\Repository
    {
        if ($this->webHook🪝Repository instanceof Internal\Hydrator\WebHook\Repository === false) {
            $this->webHook🪝Repository = new Internal\Hydrator\WebHook\Repository();
        }

        return $this->webHook🪝Repository;
    }

    public function getObjectMapperWebHook🪝RepositoryDispatch(): Internal\Hydrator\WebHook\RepositoryDispatch
    {
        if ($this->webHook🪝RepositoryDispatch instanceof Internal\Hydrator\WebHook\RepositoryDispatch === false) {
            $this->webHook🪝RepositoryDispatch = new Internal\Hydrator\WebHook\RepositoryDispatch();
        }

        return $this->webHook🪝RepositoryDispatch;
    }

    public function getObjectMapperWebHook🪝RepositoryImport(): Internal\Hydrator\WebHook\RepositoryImport
    {
        if ($this->webHook🪝RepositoryImport instanceof Internal\Hydrator\WebHook\RepositoryImport === false) {
            $this->webHook🪝RepositoryImport = new Internal\Hydrator\WebHook\RepositoryImport();
        }

        return $this->webHook🪝RepositoryImport;
    }

    public function getObjectMapperWebHook🪝RepositoryRuleset(): Internal\Hydrator\WebHook\RepositoryRuleset
    {
        if ($this->webHook🪝RepositoryRuleset instanceof Internal\Hydrator\WebHook\RepositoryRuleset === false) {
            $this->webHook🪝RepositoryRuleset = new Internal\Hydrator\WebHook\RepositoryRuleset();
        }

        return $this->webHook🪝RepositoryRuleset;
    }

    public function getObjectMapperWebHook🪝RepositoryVulnerabilityAlert(): Internal\Hydrator\WebHook\RepositoryVulnerabilityAlert
    {
        if ($this->webHook🪝RepositoryVulnerabilityAlert instanceof Internal\Hydrator\WebHook\RepositoryVulnerabilityAlert === false) {
            $this->webHook🪝RepositoryVulnerabilityAlert = new Internal\Hydrator\WebHook\RepositoryVulnerabilityAlert();
        }

        return $this->webHook🪝RepositoryVulnerabilityAlert;
    }

    public function getObjectMapperWebHook🪝SecretScanningAlert(): Internal\Hydrator\WebHook\SecretScanningAlert
    {
        if ($this->webHook🪝SecretScanningAlert instanceof Internal\Hydrator\WebHook\SecretScanningAlert === false) {
            $this->webHook🪝SecretScanningAlert = new Internal\Hydrator\WebHook\SecretScanningAlert();
        }

        return $this->webHook🪝SecretScanningAlert;
    }

    public function getObjectMapperWebHook🪝SecretScanningAlertLocation(): Internal\Hydrator\WebHook\SecretScanningAlertLocation
    {
        if ($this->webHook🪝SecretScanningAlertLocation instanceof Internal\Hydrator\WebHook\SecretScanningAlertLocation === false) {
            $this->webHook🪝SecretScanningAlertLocation = new Internal\Hydrator\WebHook\SecretScanningAlertLocation();
        }

        return $this->webHook🪝SecretScanningAlertLocation;
    }

    public function getObjectMapperWebHook🪝SecurityAdvisory(): Internal\Hydrator\WebHook\SecurityAdvisory
    {
        if ($this->webHook🪝SecurityAdvisory instanceof Internal\Hydrator\WebHook\SecurityAdvisory === false) {
            $this->webHook🪝SecurityAdvisory = new Internal\Hydrator\WebHook\SecurityAdvisory();
        }

        return $this->webHook🪝SecurityAdvisory;
    }

    public function getObjectMapperWebHook🪝SecurityAndAnalysis(): Internal\Hydrator\WebHook\SecurityAndAnalysis
    {
        if ($this->webHook🪝SecurityAndAnalysis instanceof Internal\Hydrator\WebHook\SecurityAndAnalysis === false) {
            $this->webHook🪝SecurityAndAnalysis = new Internal\Hydrator\WebHook\SecurityAndAnalysis();
        }

        return $this->webHook🪝SecurityAndAnalysis;
    }

    public function getObjectMapperWebHook🪝Sponsorship(): Internal\Hydrator\WebHook\Sponsorship
    {
        if ($this->webHook🪝Sponsorship instanceof Internal\Hydrator\WebHook\Sponsorship === false) {
            $this->webHook🪝Sponsorship = new Internal\Hydrator\WebHook\Sponsorship();
        }

        return $this->webHook🪝Sponsorship;
    }

    public function getObjectMapperWebHook🪝Star(): Internal\Hydrator\WebHook\Star
    {
        if ($this->webHook🪝Star instanceof Internal\Hydrator\WebHook\Star === false) {
            $this->webHook🪝Star = new Internal\Hydrator\WebHook\Star();
        }

        return $this->webHook🪝Star;
    }

    public function getObjectMapperWebHook🪝Status(): Internal\Hydrator\WebHook\Status
    {
        if ($this->webHook🪝Status instanceof Internal\Hydrator\WebHook\Status === false) {
            $this->webHook🪝Status = new Internal\Hydrator\WebHook\Status();
        }

        return $this->webHook🪝Status;
    }

    public function getObjectMapperWebHook🪝TeamAdd(): Internal\Hydrator\WebHook\TeamAdd
    {
        if ($this->webHook🪝TeamAdd instanceof Internal\Hydrator\WebHook\TeamAdd === false) {
            $this->webHook🪝TeamAdd = new Internal\Hydrator\WebHook\TeamAdd();
        }

        return $this->webHook🪝TeamAdd;
    }

    public function getObjectMapperWebHook🪝Team(): Internal\Hydrator\WebHook\Team
    {
        if ($this->webHook🪝Team instanceof Internal\Hydrator\WebHook\Team === false) {
            $this->webHook🪝Team = new Internal\Hydrator\WebHook\Team();
        }

        return $this->webHook🪝Team;
    }

    public function getObjectMapperWebHook🪝Watch(): Internal\Hydrator\WebHook\Watch
    {
        if ($this->webHook🪝Watch instanceof Internal\Hydrator\WebHook\Watch === false) {
            $this->webHook🪝Watch = new Internal\Hydrator\WebHook\Watch();
        }

        return $this->webHook🪝Watch;
    }

    public function getObjectMapperWebHook🪝WorkflowDispatch(): Internal\Hydrator\WebHook\WorkflowDispatch
    {
        if ($this->webHook🪝WorkflowDispatch instanceof Internal\Hydrator\WebHook\WorkflowDispatch === false) {
            $this->webHook🪝WorkflowDispatch = new Internal\Hydrator\WebHook\WorkflowDispatch();
        }

        return $this->webHook🪝WorkflowDispatch;
    }

    public function getObjectMapperWebHook🪝WorkflowJob(): Internal\Hydrator\WebHook\WorkflowJob
    {
        if ($this->webHook🪝WorkflowJob instanceof Internal\Hydrator\WebHook\WorkflowJob === false) {
            $this->webHook🪝WorkflowJob = new Internal\Hydrator\WebHook\WorkflowJob();
        }

        return $this->webHook🪝WorkflowJob;
    }

    public function getObjectMapperWebHook🪝WorkflowRun(): Internal\Hydrator\WebHook\WorkflowRun
    {
        if ($this->webHook🪝WorkflowRun instanceof Internal\Hydrator\WebHook\WorkflowRun === false) {
            $this->webHook🪝WorkflowRun = new Internal\Hydrator\WebHook\WorkflowRun();
        }

        return $this->webHook🪝WorkflowRun;
    }
}
