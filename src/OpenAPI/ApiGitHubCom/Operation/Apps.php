<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Apps
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function getAuthenticated() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function createFromManifest(string $code) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $code);
    }
    public function getWebhookConfigForApp() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function updateWebhookConfigForApp() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function listWebhookDeliveries(int $per_page = 30, string $cursor, bool $redelivery) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $cursor, $redelivery);
    }
    public function getWebhookDelivery(int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $delivery_id);
    }
    public function redeliverWebhookDelivery(int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $delivery_id);
    }
    public function listInstallations(int $per_page = 30, int $page = 1, string $since, string $outdated) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page, $since, $outdated);
    }
    public function getInstallation(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id);
    }
    public function deleteInstallation(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id);
    }
    public function createInstallationAccessToken(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id);
    }
    public function suspendInstallation(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id);
    }
    public function unsuspendInstallation(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id);
    }
    public function deleteAuthorization(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $client_id);
    }
    public function checkToken(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $client_id);
    }
    public function deleteToken(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $client_id);
    }
    public function resetToken(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $client_id);
    }
    public function scopeToken(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $client_id);
    }
    public function getBySlug(string $app_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $app_slug);
    }
    public function listReposAccessibleToInstallation(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function revokeInstallationAccessToken() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function getSubscriptionPlanForAccount(int $account_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $account_id);
    }
    public function listPlans(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function listAccountsForPlan(int $plan_id, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $plan_id, $sort, $direction, $per_page, $page);
    }
    public function getSubscriptionPlanForAccountStubbed(int $account_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $account_id);
    }
    public function listPlansStubbed(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function listAccountsForPlanStubbed(int $plan_id, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $plan_id, $sort, $direction, $per_page, $page);
    }
    public function getOrgInstallation(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getRepoInstallation(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo);
    }
    public function listInstallationsForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function listInstallationReposForAuthenticatedUser(int $installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id, $per_page, $page);
    }
    public function addRepoToInstallationForAuthenticatedUser(int $installation_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id, $repository_id);
    }
    public function removeRepoFromInstallationForAuthenticatedUser(int $installation_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $installation_id, $repository_id);
    }
    public function listSubscriptionsForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function listSubscriptionsForAuthenticatedUserStubbed(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
    public function getUserInstallation(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $username);
    }
}
