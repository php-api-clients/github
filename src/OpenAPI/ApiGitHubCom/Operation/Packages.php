<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Packages
{
    public function listPackagesForOrganization_($package_type, $org, $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization_($package_type, $org, $visibility);
    }
    public function getPackageForOrganization_($package_type, $package_name, $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization_($package_type, $package_name, $org);
    }
    public function deletePackageForOrg_($package_type, $package_name, $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg_($package_type, $package_name, $org);
    }
    public function restorePackageForOrg_($package_type, $package_name, $org, $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg_($package_type, $package_name, $org, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByOrg_($package_type, $package_name, $org, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg_($package_type, $package_name, $org, $page, $per_page, $state);
    }
    public function getPackageVersionForOrganization_($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization_($package_type, $package_name, $org, $package_version_id);
    }
    public function deletePackageVersionForOrg_($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg_($package_type, $package_name, $org, $package_version_id);
    }
    public function restorePackageVersionForOrg_($package_type, $package_name, $org, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg_($package_type, $package_name, $org, $package_version_id);
    }
    public function listPackagesForAuthenticatedUser_($package_type, $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser_($package_type, $visibility);
    }
    public function getPackageForAuthenticatedUser_($package_type, $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser_($package_type, $package_name);
    }
    public function deletePackageForAuthenticatedUser_($package_type, $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser_($package_type, $package_name);
    }
    public function restorePackageForAuthenticatedUser_($package_type, $package_name, $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser_($package_type, $package_name, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser_($package_type, $package_name, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser_($package_type, $package_name, $page, $per_page, $state);
    }
    public function getPackageVersionForAuthenticatedUser_($package_type, $package_name, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser_($package_type, $package_name, $package_version_id);
    }
    public function deletePackageVersionForAuthenticatedUser_($package_type, $package_name, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser_($package_type, $package_name, $package_version_id);
    }
    public function restorePackageVersionForAuthenticatedUser_($package_type, $package_name, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser_($package_type, $package_name, $package_version_id);
    }
    public function listPackagesForUser_($package_type, $visibility, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser_($package_type, $visibility, $username);
    }
    public function getPackageForUser_($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser_($package_type, $package_name, $username);
    }
    public function deletePackageForUser_($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser_($package_type, $package_name, $username);
    }
    public function restorePackageForUser_($package_type, $package_name, $username, $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser_($package_type, $package_name, $username, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByUser_($package_type, $package_name, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser_($package_type, $package_name, $username);
    }
    public function getPackageVersionForUser_($package_type, $package_name, $package_version_id, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser_($package_type, $package_name, $package_version_id, $username);
    }
    public function deletePackageVersionForUser_($package_type, $package_name, $username, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser_($package_type, $package_name, $username, $package_version_id);
    }
    public function restorePackageVersionForUser_($package_type, $package_name, $username, $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser_($package_type, $package_name, $username, $package_version_id);
    }
}
