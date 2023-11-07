<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
use ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Apps
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getAuthenticated(): Integration
    {
        return $this->operators->apps👷GetAuthenticated()->call();
    }

    public function createFromManifest(string $code): Integration
    {
        return $this->operators->apps👷CreateFromManifest()->call($code);
    }

    public function getWebhookConfigForApp(): WebhookConfig
    {
        return $this->operators->apps👷GetWebhookConfigForApp()->call();
    }

    public function updateWebhookConfigForApp(array $params): WebhookConfig
    {
        return $this->operators->apps👷UpdateWebhookConfigForApp()->call($params);
    }

    /** @return iterable<int,Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->apps👷ListWebhookDeliveries()->call($cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(int $deliveryId): HookDelivery
    {
        return $this->operators->apps👷GetWebhookDelivery()->call($deliveryId);
    }

    public function redeliverWebhookDelivery(int $deliveryId): Json
    {
        return $this->operators->apps👷RedeliverWebhookDelivery()->call($deliveryId);
    }

    /** @return iterable<int,Schema\IntegrationInstallationRequest>|WithoutBody */
    public function listInstallationRequestsForAuthenticatedApp(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->apps👷ListInstallationRequestsForAuthenticatedApp()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\IntegrationInstallationRequest>|WithoutBody */
    public function listInstallationRequestsForAuthenticatedAppListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->apps👷ListInstallationRequestsForAuthenticatedAppListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\Installation> */
    public function listInstallations(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallations()->call($since, $outdated, $perPage, $page);
    }

    /** @return iterable<int,Schema\Installation> */
    public function listInstallationsListing(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallationsListing()->call($since, $outdated, $perPage, $page);
    }

    public function getInstallation(int $installationId): Installation
    {
        return $this->operators->apps👷GetInstallation()->call($installationId);
    }

    public function deleteInstallation(int $installationId): WithoutBody
    {
        return $this->operators->apps👷DeleteInstallation()->call($installationId);
    }

    public function createInstallationAccessToken(int $installationId, array $params): InstallationToken
    {
        return $this->operators->apps👷CreateInstallationAccessToken()->call($installationId, $params);
    }

    public function suspendInstallation(int $installationId): WithoutBody
    {
        return $this->operators->apps👷SuspendInstallation()->call($installationId);
    }

    public function unsuspendInstallation(int $installationId): WithoutBody
    {
        return $this->operators->apps👷UnsuspendInstallation()->call($installationId);
    }

    public function deleteAuthorization(string $clientId, array $params): WithoutBody
    {
        return $this->operators->apps👷DeleteAuthorization()->call($clientId, $params);
    }

    public function checkToken(string $clientId, array $params): Authorization
    {
        return $this->operators->apps👷CheckToken()->call($clientId, $params);
    }

    public function deleteToken(string $clientId, array $params): WithoutBody
    {
        return $this->operators->apps👷DeleteToken()->call($clientId, $params);
    }

    public function resetToken(string $clientId, array $params): Authorization
    {
        return $this->operators->apps👷ResetToken()->call($clientId, $params);
    }

    public function scopeToken(string $clientId, array $params): Authorization
    {
        return $this->operators->apps👷ScopeToken()->call($clientId, $params);
    }

    public function getBySlug(string $appSlug): Integration
    {
        return $this->operators->apps👷GetBySlug()->call($appSlug);
    }

    public function listReposAccessibleToInstallation(int $perPage, int $page): Ok|WithoutBody
    {
        return $this->operators->apps👷ListReposAccessibleToInstallation()->call($perPage, $page);
    }

    public function revokeInstallationAccessToken(): WithoutBody
    {
        return $this->operators->apps👷RevokeInstallationAccessToken()->call();
    }

    public function getSubscriptionPlanForAccount(int $accountId): MarketplacePurchase
    {
        return $this->operators->apps👷GetSubscriptionPlanForAccount()->call($accountId);
    }

    /** @return iterable<int,Schema\MarketplaceListingPlan> */
    public function listPlans(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlans()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\MarketplaceListingPlan> */
    public function listPlansListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlansListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\MarketplacePurchase> */
    public function listAccountsForPlan(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlan()->call($planId, $direction, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\MarketplacePurchase> */
    public function listAccountsForPlanListing(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlanListing()->call($planId, $direction, $sort, $perPage, $page);
    }

    public function getSubscriptionPlanForAccountStubbed(int $accountId): MarketplacePurchase|WithoutBody
    {
        return $this->operators->apps👷GetSubscriptionPlanForAccountStubbed()->call($accountId);
    }

    /** @return iterable<int,Schema\MarketplaceListingPlan> */
    public function listPlansStubbed(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlansStubbed()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\MarketplaceListingPlan> */
    public function listPlansStubbedListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlansStubbedListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\MarketplacePurchase> */
    public function listAccountsForPlanStubbed(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlanStubbed()->call($planId, $direction, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\MarketplacePurchase> */
    public function listAccountsForPlanStubbedListing(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlanStubbedListing()->call($planId, $direction, $sort, $perPage, $page);
    }

    public function getOrgInstallation(string $org): Installation
    {
        return $this->operators->apps👷GetOrgInstallation()->call($org);
    }

    public function getRepoInstallation(string $owner, string $repo): Installation|BasicError
    {
        return $this->operators->apps👷GetRepoInstallation()->call($owner, $repo);
    }

    public function listInstallationsForAuthenticatedUser(int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|WithoutBody
    {
        return $this->operators->apps👷ListInstallationsForAuthenticatedUser()->call($perPage, $page);
    }

    public function listInstallationReposForAuthenticatedUser(int $installationId, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|WithoutBody
    {
        return $this->operators->apps👷ListInstallationReposForAuthenticatedUser()->call($installationId, $perPage, $page);
    }

    public function addRepoToInstallationForAuthenticatedUser(int $installationId, int $repositoryId): WithoutBody
    {
        return $this->operators->apps👷AddRepoToInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    public function removeRepoFromInstallationForAuthenticatedUser(int $installationId, int $repositoryId): WithoutBody
    {
        return $this->operators->apps👷RemoveRepoFromInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return iterable<int,Schema\UserMarketplacePurchase>|WithoutBody */
    public function listSubscriptionsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\UserMarketplacePurchase>|WithoutBody */
    public function listSubscriptionsForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\UserMarketplacePurchase>|WithoutBody */
    public function listSubscriptionsForAuthenticatedUserStubbed(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUserStubbed()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\UserMarketplacePurchase>|WithoutBody */
    public function listSubscriptionsForAuthenticatedUserStubbedListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing()->call($perPage, $page);
    }

    public function getUserInstallation(string $username): Installation
    {
        return $this->operators->apps👷GetUserInstallation()->call($username);
    }
}
