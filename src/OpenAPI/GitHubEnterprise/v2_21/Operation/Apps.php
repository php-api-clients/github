<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation;

final class Apps
{
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetAuthenticated_();
    }
    public function createFromManifest_($code) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateFromManifest_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateFromManifest_($code);
    }
    public function listInstallations_(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListInstallations_($accept, $per_page, $page);
    }
    public function getInstallation_(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetInstallation_($accept, $installation_id);
    }
    public function deleteInstallation_(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteInstallation_($accept, $installation_id);
    }
    public function createInstallationAccessToken_(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateInstallationAccessToken_($accept, $installation_id);
    }
    public function deleteAuthorization_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteAuthorization_($client_id);
    }
    public function revokeGrantForApplication_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeGrantForApplication_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeGrantForApplication_($client_id, $access_token);
    }
    public function checkToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CheckToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CheckToken_($client_id);
    }
    public function deleteToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\DeleteToken_($client_id);
    }
    public function resetToken_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ResetToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ResetToken_($client_id);
    }
    public function checkAuthorization_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CheckAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CheckAuthorization_($client_id, $access_token);
    }
    public function resetAuthorization_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ResetAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ResetAuthorization_($client_id, $access_token);
    }
    public function revokeAuthorizationForApplication_($client_id, $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeAuthorizationForApplication_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeAuthorizationForApplication_($client_id, $access_token);
    }
    public function getBySlug_($app_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetBySlug_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetBySlug_($app_slug);
    }
    public function listReposAccessibleToInstallation_(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListReposAccessibleToInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListReposAccessibleToInstallation_($accept, $per_page, $page);
    }
    public function revokeInstallationAccessToken_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RevokeInstallationAccessToken_();
    }
    public function getOrgInstallation_(string $accept = 'application/vnd.github.machine-man-preview+json', $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetOrgInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetOrgInstallation_($accept, $org);
    }
    public function createContentAttachment_($owner, $repo, $content_reference_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateContentAttachment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\CreateContentAttachment_($owner, $repo, $content_reference_id);
    }
    public function getRepoInstallation_(string $accept = 'application/vnd.github.machine-man-preview+json', $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetRepoInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetRepoInstallation_($accept, $owner, $repo);
    }
    public function listInstallationsForAuthenticatedUser_(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListInstallationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListInstallationsForAuthenticatedUser_($accept, $per_page, $page);
    }
    public function listInstallationReposForAuthenticatedUser_(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListInstallationReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\ListInstallationReposForAuthenticatedUser_($accept, $installation_id, $per_page, $page);
    }
    public function addRepoToInstallation_($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\AddRepoToInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\AddRepoToInstallation_($installation_id, $repository_id);
    }
    public function removeRepoFromInstallation_($installation_id, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RemoveRepoFromInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\RemoveRepoFromInstallation_($installation_id, $repository_id);
    }
    public function getUserInstallation_(string $accept = 'application/vnd.github.machine-man-preview+json', $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetUserInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Apps\GetUserInstallation_($accept, $username);
    }
}
