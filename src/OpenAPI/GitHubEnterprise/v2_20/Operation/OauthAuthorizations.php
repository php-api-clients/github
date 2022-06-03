<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation;

final class OauthAuthorizations
{
    public function listGrants_(int $per_page = 30, int $page = 1, $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\ListGrants_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\ListGrants_($per_page, $page, $client_id);
    }
    public function getGrant_($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetGrant_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetGrant_($grant_id);
    }
    public function deleteGrant_($grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\DeleteGrant_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\DeleteGrant_($grant_id);
    }
    public function listAuthorizations_(int $per_page = 30, int $page = 1, $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\ListAuthorizations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\ListAuthorizations_($per_page, $page, $client_id);
    }
    public function createAuthorization_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\CreateAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\CreateAuthorization_();
    }
    public function getOrCreateAuthorizationForApp_($client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp_($client_id);
    }
    public function getOrCreateAuthorizationForAppAndFingerprint_($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint_($client_id, $fingerprint);
    }
    public function getAuthorization_($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetAuthorization_($authorization_id);
    }
    public function deleteAuthorization_($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\DeleteAuthorization_($authorization_id);
    }
    public function updateAuthorization_($authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\UpdateAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\UpdateAuthorization_($authorization_id);
    }
}
