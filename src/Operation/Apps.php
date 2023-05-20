<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Apps
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getAuthenticated(): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetAuthenticated::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetAuthenticated::class] = new Operator\Apps\GetAuthenticated($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App());
        }

        return $this->operator[Operator\Apps\GetAuthenticated::class]->call();
    }

    public function createFromManifest(string $code): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\CreateFromManifest::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CreateFromManifest::class] = new Operator\Apps\CreateFromManifest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀AppManifests🌀Code🌀Conversions());
        }

        return $this->operator[Operator\Apps\CreateFromManifest::class]->call($code);
    }

    public function getWebhookConfigForApp(): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetWebhookConfigForApp::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetWebhookConfigForApp::class] = new Operator\Apps\GetWebhookConfigForApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->operator[Operator\Apps\GetWebhookConfigForApp::class]->call();
    }

    public function updateWebhookConfigForApp(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\UpdateWebhookConfigForApp::class, $this->operator) === false) {
            $this->operator[Operator\Apps\UpdateWebhookConfigForApp::class] = new Operator\Apps\UpdateWebhookConfigForApp($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Config());
        }

        return $this->operator[Operator\Apps\UpdateWebhookConfigForApp::class]->call($params);
    }

    public function listWebhookDeliveries(string $cursor, bool $redelivery, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListWebhookDeliveries::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListWebhookDeliveries::class] = new Operator\Apps\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries());
        }

        return $this->operator[Operator\Apps\ListWebhookDeliveries::class]->call($cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(int $deliveryId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetWebhookDelivery::class] = new Operator\Apps\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId());
        }

        return $this->operator[Operator\Apps\GetWebhookDelivery::class]->call($deliveryId);
    }

    public function redeliverWebhookDelivery(int $deliveryId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\RedeliverWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RedeliverWebhookDelivery::class] = new Operator\Apps\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->operator[Operator\Apps\RedeliverWebhookDelivery::class]->call($deliveryId);
    }

    public function listInstallationRequestsForAuthenticatedApp(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListInstallationRequestsForAuthenticatedApp::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallationRequestsForAuthenticatedApp::class] = new Operator\Apps\ListInstallationRequestsForAuthenticatedApp($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀InstallationRequests());
        }

        return $this->operator[Operator\Apps\ListInstallationRequestsForAuthenticatedApp::class]->call($perPage, $page);
    }

    public function listInstallations(string $since, string $outdated, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListInstallations::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallations::class] = new Operator\Apps\ListInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations());
        }

        return $this->operator[Operator\Apps\ListInstallations::class]->call($since, $outdated, $perPage, $page);
    }

    public function getInstallation(int $installationId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetInstallation::class] = new Operator\Apps\GetInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->operator[Operator\Apps\GetInstallation::class]->call($installationId);
    }

    public function deleteInstallation(int $installationId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\DeleteInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\DeleteInstallation::class] = new Operator\Apps\DeleteInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId());
        }

        return $this->operator[Operator\Apps\DeleteInstallation::class]->call($installationId);
    }

    public function createInstallationAccessToken(int $installationId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\CreateInstallationAccessToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CreateInstallationAccessToken::class] = new Operator\Apps\CreateInstallationAccessToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀AccessTokens());
        }

        return $this->operator[Operator\Apps\CreateInstallationAccessToken::class]->call($installationId, $params);
    }

    public function suspendInstallation(int $installationId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\SuspendInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\SuspendInstallation::class] = new Operator\Apps\SuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->operator[Operator\Apps\SuspendInstallation::class]->call($installationId);
    }

    public function unsuspendInstallation(int $installationId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\UnsuspendInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\UnsuspendInstallation::class] = new Operator\Apps\UnsuspendInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀App🌀Installations🌀InstallationId🌀Suspended());
        }

        return $this->operator[Operator\Apps\UnsuspendInstallation::class]->call($installationId);
    }

    public function deleteAuthorization(string $clientId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\DeleteAuthorization::class, $this->operator) === false) {
            $this->operator[Operator\Apps\DeleteAuthorization::class] = new Operator\Apps\DeleteAuthorization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Grant());
        }

        return $this->operator[Operator\Apps\DeleteAuthorization::class]->call($clientId, $params);
    }

    public function checkToken(string $clientId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\CheckToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\CheckToken::class] = new Operator\Apps\CheckToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->operator[Operator\Apps\CheckToken::class]->call($clientId, $params);
    }

    public function deleteToken(string $clientId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\DeleteToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\DeleteToken::class] = new Operator\Apps\DeleteToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->operator[Operator\Apps\DeleteToken::class]->call($clientId, $params);
    }

    public function resetToken(string $clientId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ResetToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ResetToken::class] = new Operator\Apps\ResetToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token());
        }

        return $this->operator[Operator\Apps\ResetToken::class]->call($clientId, $params);
    }

    public function scopeToken(string $clientId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ScopeToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ScopeToken::class] = new Operator\Apps\ScopeToken($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Applications🌀ClientId🌀Token🌀Scoped());
        }

        return $this->operator[Operator\Apps\ScopeToken::class]->call($clientId, $params);
    }

    public function getBySlug(string $appSlug): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetBySlug::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetBySlug::class] = new Operator\Apps\GetBySlug($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Apps🌀AppSlug());
        }

        return $this->operator[Operator\Apps\GetBySlug::class]->call($appSlug);
    }

    public function listReposAccessibleToInstallation(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListReposAccessibleToInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListReposAccessibleToInstallation::class] = new Operator\Apps\ListReposAccessibleToInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Repositories());
        }

        return $this->operator[Operator\Apps\ListReposAccessibleToInstallation::class]->call($perPage, $page);
    }

    public function revokeInstallationAccessToken(): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\RevokeInstallationAccessToken::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RevokeInstallationAccessToken::class] = new Operator\Apps\RevokeInstallationAccessToken($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Installation🌀Token());
        }

        return $this->operator[Operator\Apps\RevokeInstallationAccessToken::class]->call();
    }

    public function getSubscriptionPlanForAccount(int $accountId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetSubscriptionPlanForAccount::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetSubscriptionPlanForAccount::class] = new Operator\Apps\GetSubscriptionPlanForAccount($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀AccountId());
        }

        return $this->operator[Operator\Apps\GetSubscriptionPlanForAccount::class]->call($accountId);
    }

    public function listPlans(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListPlans::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListPlans::class] = new Operator\Apps\ListPlans($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans());
        }

        return $this->operator[Operator\Apps\ListPlans::class]->call($perPage, $page);
    }

    public function listAccountsForPlan(int $planId, string $direction, string $sort, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListAccountsForPlan::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListAccountsForPlan::class] = new Operator\Apps\ListAccountsForPlan($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->operator[Operator\Apps\ListAccountsForPlan::class]->call($planId, $direction, $sort, $perPage, $page);
    }

    public function getSubscriptionPlanForAccountStubbed(int $accountId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetSubscriptionPlanForAccountStubbed::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetSubscriptionPlanForAccountStubbed::class] = new Operator\Apps\GetSubscriptionPlanForAccountStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Accounts🌀AccountId());
        }

        return $this->operator[Operator\Apps\GetSubscriptionPlanForAccountStubbed::class]->call($accountId);
    }

    public function listPlansStubbed(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListPlansStubbed::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListPlansStubbed::class] = new Operator\Apps\ListPlansStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans());
        }

        return $this->operator[Operator\Apps\ListPlansStubbed::class]->call($perPage, $page);
    }

    public function listAccountsForPlanStubbed(int $planId, string $direction, string $sort, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListAccountsForPlanStubbed::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListAccountsForPlanStubbed::class] = new Operator\Apps\ListAccountsForPlanStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀MarketplaceListing🌀Stubbed🌀Plans🌀PlanId🌀Accounts());
        }

        return $this->operator[Operator\Apps\ListAccountsForPlanStubbed::class]->call($planId, $direction, $sort, $perPage, $page);
    }

    public function getOrgInstallation(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetOrgInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetOrgInstallation::class] = new Operator\Apps\GetOrgInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installation());
        }

        return $this->operator[Operator\Apps\GetOrgInstallation::class]->call($org);
    }

    public function getRepoInstallation(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetRepoInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetRepoInstallation::class] = new Operator\Apps\GetRepoInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Installation());
        }

        return $this->operator[Operator\Apps\GetRepoInstallation::class]->call($owner, $repo);
    }

    public function listInstallationsForAuthenticatedUser(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListInstallationsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallationsForAuthenticatedUser::class] = new Operator\Apps\ListInstallationsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations());
        }

        return $this->operator[Operator\Apps\ListInstallationsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listInstallationReposForAuthenticatedUser(int $installationId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListInstallationReposForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListInstallationReposForAuthenticatedUser::class] = new Operator\Apps\ListInstallationReposForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories());
        }

        return $this->operator[Operator\Apps\ListInstallationReposForAuthenticatedUser::class]->call($installationId, $perPage, $page);
    }

    public function addRepoToInstallationForAuthenticatedUser(int $installationId, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\AddRepoToInstallationForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\AddRepoToInstallationForAuthenticatedUser::class] = new Operator\Apps\AddRepoToInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Apps\AddRepoToInstallationForAuthenticatedUser::class]->call($installationId, $repositoryId);
    }

    public function removeRepoFromInstallationForAuthenticatedUser(int $installationId, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser::class] = new Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Installations🌀InstallationId🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Apps\RemoveRepoFromInstallationForAuthenticatedUser::class]->call($installationId, $repositoryId);
    }

    public function listSubscriptionsForAuthenticatedUser(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListSubscriptionsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListSubscriptionsForAuthenticatedUser::class] = new Operator\Apps\ListSubscriptionsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases());
        }

        return $this->operator[Operator\Apps\ListSubscriptionsForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listSubscriptionsForAuthenticatedUserStubbed(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed::class, $this->operator) === false) {
            $this->operator[Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed::class] = new Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀MarketplacePurchases🌀Stubbed());
        }

        return $this->operator[Operator\Apps\ListSubscriptionsForAuthenticatedUserStubbed::class]->call($perPage, $page);
    }

    public function getUserInstallation(string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Apps\GetUserInstallation::class, $this->operator) === false) {
            $this->operator[Operator\Apps\GetUserInstallation::class] = new Operator\Apps\GetUserInstallation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Installation());
        }

        return $this->operator[Operator\Apps\GetUserInstallation::class]->call($username);
    }
}
