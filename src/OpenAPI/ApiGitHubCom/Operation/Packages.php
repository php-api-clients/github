<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Packages
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
    public function listPackagesForOrganization(string $package_type, string $org, string $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $org, $visibility);
    }
    public function getPackageForOrganization(string $package_type, string $package_name, string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org);
    }
    public function deletePackageForOrg(string $package_type, string $package_name, string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org);
    }
    public function restorePackageForOrg(string $package_type, string $package_name, string $org, string $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByOrg(string $package_type, string $package_name, string $org, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org, $page, $per_page, $state);
    }
    public function getPackageVersionForOrganization(string $package_type, string $package_name, string $org, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org, $package_version_id);
    }
    public function deletePackageVersionForOrg(string $package_type, string $package_name, string $org, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org, $package_version_id);
    }
    public function restorePackageVersionForOrg(string $package_type, string $package_name, string $org, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $org, $package_version_id);
    }
    public function listPackagesForAuthenticatedUser(string $package_type, string $visibility) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $visibility);
    }
    public function getPackageForAuthenticatedUser(string $package_type, string $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name);
    }
    public function deletePackageForAuthenticatedUser(string $package_type, string $package_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name);
    }
    public function restorePackageForAuthenticatedUser(string $package_type, string $package_name, string $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser(string $package_type, string $package_name, int $page = 1, int $per_page = 30, string $state = 'active') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $page, $per_page, $state);
    }
    public function getPackageVersionForAuthenticatedUser(string $package_type, string $package_name, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $package_version_id);
    }
    public function deletePackageVersionForAuthenticatedUser(string $package_type, string $package_name, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $package_version_id);
    }
    public function restorePackageVersionForAuthenticatedUser(string $package_type, string $package_name, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $package_version_id);
    }
    public function listPackagesForUser(string $package_type, string $visibility, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\ListPackagesForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $visibility, $username);
    }
    public function getPackageForUser(string $package_type, string $package_name, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $username);
    }
    public function deletePackageForUser(string $package_type, string $package_name, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $username);
    }
    public function restorePackageForUser(string $package_type, string $package_name, string $username, string $token) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $username, $token);
    }
    public function getAllPackageVersionsForPackageOwnedByUser(string $package_type, string $package_name, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $username);
    }
    public function getPackageVersionForUser(string $package_type, string $package_name, int $package_version_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\GetPackageVersionForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $package_version_id, $username);
    }
    public function deletePackageVersionForUser(string $package_type, string $package_name, string $username, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\DeletePackageVersionForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $username, $package_version_id);
    }
    public function restorePackageVersionForUser(string $package_type, string $package_name, string $username, int $package_version_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Packages\RestorePackageVersionForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $package_type, $package_name, $username, $package_version_id);
    }
}
