<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Apps
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated_();
    }
    public function createFromManifest_(string $code) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateFromManifest_($code);
    }
    public function getWebhookConfigForApp_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookConfigForApp_();
    }
    public function updateWebhookConfigForApp_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UpdateWebhookConfigForApp_();
    }
    public function listWebhookDeliveries_(int $per_page = 30, string $cursor, bool $redelivery) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListWebhookDeliveries_($per_page, $cursor, $redelivery);
    }
    public function getWebhookDelivery_(int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetWebhookDelivery_($delivery_id);
    }
    public function redeliverWebhookDelivery_(int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RedeliverWebhookDelivery_($delivery_id);
    }
    public function listInstallations_(int $per_page = 30, int $page = 1, string $since, string $outdated) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations_($per_page, $page, $since, $outdated);
    }
    public function getInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetInstallation_($installation_id);
    }
    public function deleteInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteInstallation_($installation_id);
    }
    public function createInstallationAccessToken_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CreateInstallationAccessToken_($installation_id);
    }
    public function suspendInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\SuspendInstallation_($installation_id);
    }
    public function unsuspendInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\UnsuspendInstallation_($installation_id);
    }
    public function deleteAuthorization_(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteAuthorization_($client_id);
    }
    public function checkToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\CheckToken_($client_id);
    }
    public function deleteToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\DeleteToken_($client_id);
    }
    public function resetToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ResetToken_($client_id);
    }
    public function scopeToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ScopeToken_($client_id);
    }
    public function getBySlug_(string $app_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetBySlug_($app_slug);
    }
    public function listReposAccessibleToInstallation_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListReposAccessibleToInstallation_($per_page, $page);
    }
    public function revokeInstallationAccessToken_() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken_();
    }
    public function getSubscriptionPlanForAccount_(int $account_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccount_($account_id);
    }
    public function listPlans_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlans_($per_page, $page);
    }
    public function listAccountsForPlan_(int $plan_id, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlan_($plan_id, $sort, $direction, $per_page, $page);
    }
    public function getSubscriptionPlanForAccountStubbed_(int $account_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetSubscriptionPlanForAccountStubbed_($account_id);
    }
    public function listPlansStubbed_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListPlansStubbed_($per_page, $page);
    }
    public function listAccountsForPlanStubbed_(int $plan_id, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListAccountsForPlanStubbed_($plan_id, $sort, $direction, $per_page, $page);
    }
    public function getOrgInstallation_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetOrgInstallation_($org);
    }
    public function getRepoInstallation_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation_($owner, $repo);
    }
    public function listInstallationsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser_($per_page, $page);
    }
    public function listInstallationReposForAuthenticatedUser_(int $installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationReposForAuthenticatedUser_($installation_id, $per_page, $page);
    }
    public function addRepoToInstallationForAuthenticatedUser_(int $installation_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_($installation_id, $repository_id);
    }
    public function removeRepoFromInstallationForAuthenticatedUser_(int $installation_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_($installation_id, $repository_id);
    }
    public function listSubscriptionsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUser_($per_page, $page);
    }
    public function listSubscriptionsForAuthenticatedUserStubbed_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListSubscriptionsForAuthenticatedUserStubbed_($per_page, $page);
    }
    public function getUserInstallation_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation_($username);
    }
}
