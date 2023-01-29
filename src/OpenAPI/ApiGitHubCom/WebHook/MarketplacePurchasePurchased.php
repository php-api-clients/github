<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook;

final class MarketplacePurchasePurchased implements \ApiClients\Contracts\OpenAPI\WebHookInterface
{
    public function resolve(array $data) : string
    {
        return 'ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\WebhookMarketplacePurchasePurchased';
    }
}
