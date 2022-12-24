<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Packages
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listPackagesForOrganization_(string $package_type, string $org, string $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $org, $visibility);
    }
    public function getPackageForOrganization_(string $package_type, string $package_name, string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org);
    }
    public function deletePackageForOrg_(string $package_type, string $package_name, string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org);
    }
    public function restorePackageForOrg_(string $package_type, string $package_name, string $org, string $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByOrg_(string $package_type, string $package_name, string $org, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org, $page, $per_page, $state);
    }
    public function getPackageVersionForOrganization_(string $package_type, string $package_name, string $org, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org, $package_version_id);
    }
    public function deletePackageVersionForOrg_(string $package_type, string $package_name, string $org, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org, $package_version_id);
    }
    public function restorePackageVersionForOrg_(string $package_type, string $package_name, string $org, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $org, $package_version_id);
    }
    public function listPackagesForAuthenticatedUser_(string $package_type, string $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $visibility);
    }
    public function getPackageForAuthenticatedUser_(string $package_type, string $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name);
    }
    public function deletePackageForAuthenticatedUser_(string $package_type, string $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name);
    }
    public function restorePackageForAuthenticatedUser_(string $package_type, string $package_name, string $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser_(string $package_type, string $package_name, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $page, $per_page, $state);
    }
    public function getPackageVersionForAuthenticatedUser_(string $package_type, string $package_name, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $package_version_id);
    }
    public function deletePackageVersionForAuthenticatedUser_(string $package_type, string $package_name, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $package_version_id);
    }
    public function restorePackageVersionForAuthenticatedUser_(string $package_type, string $package_name, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $package_version_id);
    }
    public function listPackagesForUser_(string $package_type, string $visibility, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $visibility, $username);
    }
    public function getPackageForUser_(string $package_type, string $package_name, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $username);
    }
    public function deletePackageForUser_(string $package_type, string $package_name, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $username);
    }
    public function restorePackageForUser_(string $package_type, string $package_name, string $username, string $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $username, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByUser_(string $package_type, string $package_name, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $username);
    }
    public function getPackageVersionForUser_(string $package_type, string $package_name, int $package_version_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $package_version_id, $username);
    }
    public function deletePackageVersionForUser_(string $package_type, string $package_name, string $username, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $username, $package_version_id);
    }
    public function restorePackageVersionForUser_(string $package_type, string $package_name, string $username, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $package_type, $package_name, $username, $package_version_id);
    }
}
