<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook;

final class InstallationUnsuspend implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    public function resolve(array $data) : string
    {
        return 'ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebhookInstallationUnsuspend';
    }
}
