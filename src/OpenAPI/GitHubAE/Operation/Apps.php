<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Apps
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getAuthenticated_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticated_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function createFromManifest_(string $code) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifest_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateFromManifest_($this->requestSchemaValidator, $this->responseSchemaValidator, $code);
    }
    public function getWebhookConfigForApp_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookConfigForApp_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function updateWebhookConfigForApp_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UpdateWebhookConfigForApp_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listWebhookDeliveries_(int $per_page = 30, string $cursor, bool $redelivery) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListWebhookDeliveries_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $cursor, $redelivery);
    }
    public function getWebhookDelivery_(int $delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetWebhookDelivery_($this->requestSchemaValidator, $this->responseSchemaValidator, $delivery_id);
    }
    public function redeliverWebhookDelivery_(int $delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RedeliverWebhookDelivery_($this->requestSchemaValidator, $this->responseSchemaValidator, $delivery_id);
    }
    public function listInstallations_(int $per_page = 30, int $page = 1, string $since, string $outdated) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallations_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $since, $outdated);
    }
    public function getInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id);
    }
    public function deleteInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id);
    }
    public function createInstallationAccessToken_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CreateInstallationAccessToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id);
    }
    public function suspendInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\SuspendInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id);
    }
    public function unsuspendInstallation_(int $installation_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\UnsuspendInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id);
    }
    public function deleteAuthorization_(string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteAuthorization_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id);
    }
    public function checkToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\CheckToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id);
    }
    public function deleteToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\DeleteToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id);
    }
    public function resetToken_(string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id);
    }
    public function resetAuthorization_(string $client_id, string $access_token) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ResetAuthorization_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id, $access_token);
    }
    public function getBySlug_(string $app_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetBySlug_($this->requestSchemaValidator, $this->responseSchemaValidator, $app_slug);
    }
    public function listReposAccessibleToInstallation_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function revokeInstallationAccessToken_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RevokeInstallationAccessToken_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOrgInstallation_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetOrgInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getRepoInstallation_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listInstallationsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function listInstallationReposForAuthenticatedUser_(int $installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id, $per_page, $page);
    }
    public function addRepoToInstallationForAuthenticatedUser_(int $installation_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\AddRepoToInstallationForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id, $repository_id);
    }
    public function removeRepoFromInstallationForAuthenticatedUser_(int $installation_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\RemoveRepoFromInstallationForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $installation_id, $repository_id);
    }
    public function getUserInstallation_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
}
