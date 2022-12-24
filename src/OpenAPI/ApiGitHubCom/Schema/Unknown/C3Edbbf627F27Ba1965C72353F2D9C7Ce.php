<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C3Edbbf627F27Ba1965C72353F2D9C7Ce
{
    public const SCHEMA_JSON = '{"required":["self","html","pull_request"],"type":"object","properties":{"self":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"]}}},"html":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/pull\\/1#discussion-diff-1"]}}},"pull_request":{"required":["href"],"type":"object","properties":{"href":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/1"]}}}}}';
    public const SCHEMA_TITLE = 'c_3edbbf627f27ba1965c72353f2d9c7ce';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C30E7Dfba45Ace68676Fcd1A6D7E66609::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C30E7Dfba45Ace68676Fcd1A6D7E66609 $self;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C87Aeb1105A3771B25D50F0Be54803A32::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C87Aeb1105A3771B25D50F0Be54803A32 $html;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC80Eacc0301A5F3Ef80Aaae4B8595221::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC80Eacc0301A5F3Ef80Aaae4B8595221 $pull_request;
    public function self() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C30E7Dfba45Ace68676Fcd1A6D7E66609
    {
        return $this->self;
    }
    public function html() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C87Aeb1105A3771B25D50F0Be54803A32
    {
        return $this->html;
    }
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CC80Eacc0301A5F3Ef80Aaae4B8595221
    {
        return $this->pull_request;
    }
}
