<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation;

final class Apps
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetAuthenticated_();
    }
    public function createFromManifest_($code) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateFromManifest_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateFromManifest_($code);
    }
    public function listInstallations_(int $per_page = 30, int $page = 1, $since, $outdated) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallations_($per_page, $page, $since, $outdated);
    }
    public function getInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetInstallation_($installation_id);
    }
    public function deleteInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteInstallation_($installation_id);
    }
    public function createInstallationAccessToken_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateInstallationAccessToken_($installation_id);
    }
    public function suspendInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\SuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\SuspendInstallation_($installation_id);
    }
    public function unsuspendInstallation_($installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\UnsuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\UnsuspendInstallation_($installation_id);
    }
    public function deleteAuthorization_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteAuthorization_($client_id);
    }
    public function revokeGrantForApplication_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeGrantForApplication_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeGrantForApplication_($client_id, $access_token);
    }
    public function checkToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckToken_($client_id);
    }
    public function deleteToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\DeleteToken_($client_id);
    }
    public function resetToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetToken_($client_id);
    }
    public function checkAuthorization_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CheckAuthorization_($client_id, $access_token);
    }
    public function resetAuthorization_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ResetAuthorization_($client_id, $access_token);
    }
    public function revokeAuthorizationForApplication_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeAuthorizationForApplication_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeAuthorizationForApplication_($client_id, $access_token);
    }
    public function getBySlug_($app_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetBySlug_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetBySlug_($app_slug);
    }
    public function listReposAccessibleToInstallation_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListReposAccessibleToInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListReposAccessibleToInstallation_($per_page, $page);
    }
    public function revokeInstallationAccessToken_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeInstallationAccessToken_();
    }
    public function getOrgInstallation_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetOrgInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetOrgInstallation_($org);
    }
    public function createContentAttachment_($owner, $repo, $content_reference_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateContentAttachment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\CreateContentAttachment_($owner, $repo, $content_reference_id);
    }
    public function getRepoInstallation_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetRepoInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetRepoInstallation_($owner, $repo);
    }
    public function listInstallationsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallationsForAuthenticatedUser_($per_page, $page);
    }
    public function listInstallationReposForAuthenticatedUser_($installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallationReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallationReposForAuthenticatedUser_($installation_id, $per_page, $page);
    }
    public function addRepoToInstallationForAuthenticatedUser_($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_($installation_id, $repository_id);
    }
    public function removeRepoFromInstallationForAuthenticatedUser_($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_($installation_id, $repository_id);
    }
    public function getUserInstallation_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetUserInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetUserInstallation_($username);
    }
}
