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

final class Apps
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function getAuthenticated(): Integration|array
    {
        return $this->operators->apps👷GetAuthenticated()->call();
    }

    /** @return */
    public function createFromManifest(string $code): Integration|array
    {
        return $this->operators->apps👷CreateFromManifest()->call($code);
    }

    /** @return */
    public function getWebhookConfigForApp(): WebhookConfig|array
    {
        return $this->operators->apps👷GetWebhookConfigForApp()->call();
    }

    /** @return */
    public function updateWebhookConfigForApp(array $params): WebhookConfig|array
    {
        return $this->operators->apps👷UpdateWebhookConfigForApp()->call($params);
    }

    /** @return Observable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->apps👷ListWebhookDeliveries()->call($cursor, $redelivery, $perPage);
    }

    /** @return */
    public function getWebhookDelivery(int $deliveryId): HookDelivery|array
    {
        return $this->operators->apps👷GetWebhookDelivery()->call($deliveryId);
    }

    /** @return */
    public function redeliverWebhookDelivery(int $deliveryId): Json|array
    {
        return $this->operators->apps👷RedeliverWebhookDelivery()->call($deliveryId);
    }

    /** @return Observable<Schema\IntegrationInstallationRequest>|array{code:int} */
    public function listInstallationRequestsForAuthenticatedApp(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallationRequestsForAuthenticatedApp()->call($perPage, $page);
    }

    /** @return Observable<Schema\IntegrationInstallationRequest>|array{code:int} */
    public function listInstallationRequestsForAuthenticatedAppListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallationRequestsForAuthenticatedAppListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\Installation> */
    public function listInstallations(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallations()->call($since, $outdated, $perPage, $page);
    }

    /** @return Observable<Schema\Installation> */
    public function listInstallationsListing(string $since, string $outdated, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListInstallationsListing()->call($since, $outdated, $perPage, $page);
    }

    /** @return */
    public function getInstallation(int $installationId): Installation|array
    {
        return $this->operators->apps👷GetInstallation()->call($installationId);
    }

    /** @return array{code:int} */
    public function deleteInstallation(int $installationId): array
    {
        return $this->operators->apps👷DeleteInstallation()->call($installationId);
    }

    /** @return */
    public function createInstallationAccessToken(int $installationId, array $params): InstallationToken|array
    {
        return $this->operators->apps👷CreateInstallationAccessToken()->call($installationId, $params);
    }

    /** @return array{code:int} */
    public function suspendInstallation(int $installationId): array
    {
        return $this->operators->apps👷SuspendInstallation()->call($installationId);
    }

    /** @return array{code:int} */
    public function unsuspendInstallation(int $installationId): array
    {
        return $this->operators->apps👷UnsuspendInstallation()->call($installationId);
    }

    /** @return array{code:int} */
    public function deleteAuthorization(string $clientId, array $params): array
    {
        return $this->operators->apps👷DeleteAuthorization()->call($clientId, $params);
    }

    /** @return */
    public function checkToken(string $clientId, array $params): Authorization|array
    {
        return $this->operators->apps👷CheckToken()->call($clientId, $params);
    }

    /** @return array{code:int} */
    public function deleteToken(string $clientId, array $params): array
    {
        return $this->operators->apps👷DeleteToken()->call($clientId, $params);
    }

    /** @return */
    public function resetToken(string $clientId, array $params): Authorization|array
    {
        return $this->operators->apps👷ResetToken()->call($clientId, $params);
    }

    /** @return */
    public function scopeToken(string $clientId, array $params): Authorization|array
    {
        return $this->operators->apps👷ScopeToken()->call($clientId, $params);
    }

    /** @return */
    public function getBySlug(string $appSlug): Integration|array
    {
        return $this->operators->apps👷GetBySlug()->call($appSlug);
    }

    /** @return Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|array{code:int} */
    public function listReposAccessibleToInstallation(int $perPage, int $page): Ok|array
    {
        return $this->operators->apps👷ListReposAccessibleToInstallation()->call($perPage, $page);
    }

    /** @return array{code:int} */
    public function revokeInstallationAccessToken(): array
    {
        return $this->operators->apps👷RevokeInstallationAccessToken()->call();
    }

    /** @return */
    public function getSubscriptionPlanForAccount(int $accountId): MarketplacePurchase|array
    {
        return $this->operators->apps👷GetSubscriptionPlanForAccount()->call($accountId);
    }

    /** @return Observable<Schema\MarketplaceListingPlan> */
    public function listPlans(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlans()->call($perPage, $page);
    }

    /** @return Observable<Schema\MarketplaceListingPlan> */
    public function listPlansListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlansListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\MarketplacePurchase> */
    public function listAccountsForPlan(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlan()->call($planId, $direction, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\MarketplacePurchase> */
    public function listAccountsForPlanListing(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlanListing()->call($planId, $direction, $sort, $perPage, $page);
    }

    /** @return Schema\MarketplacePurchase|array{code:int} */
    public function getSubscriptionPlanForAccountStubbed(int $accountId): MarketplacePurchase|array
    {
        return $this->operators->apps👷GetSubscriptionPlanForAccountStubbed()->call($accountId);
    }

    /** @return Observable<Schema\MarketplaceListingPlan> */
    public function listPlansStubbed(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlansStubbed()->call($perPage, $page);
    }

    /** @return Observable<Schema\MarketplaceListingPlan> */
    public function listPlansStubbedListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListPlansStubbedListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\MarketplacePurchase> */
    public function listAccountsForPlanStubbed(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlanStubbed()->call($planId, $direction, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\MarketplacePurchase> */
    public function listAccountsForPlanStubbedListing(int $planId, string $direction, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListAccountsForPlanStubbedListing()->call($planId, $direction, $sort, $perPage, $page);
    }

    /** @return */
    public function getOrgInstallation(string $org): Installation|array
    {
        return $this->operators->apps👷GetOrgInstallation()->call($org);
    }

    /** @return */
    public function getRepoInstallation(string $owner, string $repo): Installation|BasicError|array
    {
        return $this->operators->apps👷GetRepoInstallation()->call($owner, $repo);
    }

    /** @return Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function listInstallationsForAuthenticatedUser(int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->apps👷ListInstallationsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|array{code:int} */
    public function listInstallationReposForAuthenticatedUser(int $installationId, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|array
    {
        return $this->operators->apps👷ListInstallationReposForAuthenticatedUser()->call($installationId, $perPage, $page);
    }

    /** @return array{code:int} */
    public function addRepoToInstallationForAuthenticatedUser(int $installationId, int $repositoryId): array
    {
        return $this->operators->apps👷AddRepoToInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeRepoFromInstallationForAuthenticatedUser(int $installationId, int $repositoryId): array
    {
        return $this->operators->apps👷RemoveRepoFromInstallationForAuthenticatedUser()->call($installationId, $repositoryId);
    }

    /** @return Observable<Schema\UserMarketplacePurchase>|array{code:int} */
    public function listSubscriptionsForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\UserMarketplacePurchase>|array{code:int} */
    public function listSubscriptionsForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return Observable<Schema\UserMarketplacePurchase>|array{code:int} */
    public function listSubscriptionsForAuthenticatedUserStubbed(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUserStubbed()->call($perPage, $page);
    }

    /** @return Observable<Schema\UserMarketplacePurchase>|array{code:int} */
    public function listSubscriptionsForAuthenticatedUserStubbedListing(int $perPage, int $page): iterable
    {
        return $this->operators->apps👷ListSubscriptionsForAuthenticatedUserStubbedListing()->call($perPage, $page);
    }

    /** @return */
    public function getUserInstallation(string $username): Installation|array
    {
        return $this->operators->apps👷GetUserInstallation()->call($username);
    }
}
