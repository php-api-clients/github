<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Apps
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated_();
    }
    public function createFromManifest_($code) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifest_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifest_($code);
    }
    public function getWebhookConfigForApp_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp_();
    }
    public function updateWebhookConfigForApp_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp_();
    }
    public function listWebhookDeliveries_(int $per_page = 30, $cursor) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries_($per_page, $cursor);
    }
    public function getWebhookDelivery_($delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery_($delivery_id);
    }
    public function redeliverWebhookDelivery_($delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery_($delivery_id);
    }
    public function listInstallations_(int $per_page = 30, int $page = 1, $since, $outdated) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallations_($per_page, $page, $since, $outdated);
    }
    public function getInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation_($installation_id);
    }
    public function deleteInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation_($installation_id);
    }
    public function createInstallationAccessToken_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateInstallationAccessToken_($installation_id);
    }
    public function suspendInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation_($installation_id);
    }
    public function unsuspendInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation_($installation_id);
    }
    public function deleteAuthorization_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorization_($client_id);
    }
    public function checkToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckToken_($client_id);
    }
    public function deleteToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteToken_($client_id);
    }
    public function resetToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetToken_($client_id);
    }
    public function resetAuthorization_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization_($client_id, $access_token);
    }
    public function getBySlug_($app_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug_($app_slug);
    }
    public function listReposAccessibleToInstallation_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallation_($per_page, $page);
    }
    public function revokeInstallationAccessToken_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken_();
    }
    public function getOrgInstallation_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation_($org);
    }
    public function getRepoInstallation_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation_($owner, $repo);
    }
    public function listInstallationsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUser_($per_page, $page);
    }
    public function listInstallationReposForAuthenticatedUser_($installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUser_($installation_id, $per_page, $page);
    }
    public function addRepoToInstallationForAuthenticatedUser_($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_($installation_id, $repository_id);
    }
    public function removeRepoFromInstallationForAuthenticatedUser_($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_($installation_id, $repository_id);
    }
    public function getUserInstallation_($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation_($username);
    }
}
