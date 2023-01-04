<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C2E542817C876F5D6Dbe839E319618Be2
{
    public const SCHEMA_JSON = '{"oneOf":[{"type":"object","properties":{"labels":{"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the labels to add to the issue\'s existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also replace all of the labels for an issue. For more information, see \\"[Set labels for an issue](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/issues#set-labels-for-an-issue).\\""}}},{"minItems":1,"type":"array","items":{"type":"string"}},{"type":"object","properties":{"labels":{"minItems":1,"type":"array","items":{"required":["name"],"type":"object","properties":{"name":{"type":"string"}}}}}},{"minItems":1,"type":"array","items":{"required":["name"],"type":"object","properties":{"name":{"type":"string"}}}},{"type":"string"}]}';
    public const SCHEMA_TITLE = 'c_2e542817c876f5d6dbe839e319618be2';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the labels to add to the issue's existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also replace all of the labels for an issue. For more information, see "[Set labels for an issue](https://docs.github.com/enterprise-server@3.1/rest/reference/issues#set-labels-for-an-issue)."
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C2E542817C876F5D6Dbe839E319618Be2\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C2E542817C876F5D6Dbe839E319618Be2\Labels::class)
     */
    private array $labels = array();
    /**
     * The names of the labels to add to the issue's existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also replace all of the labels for an issue. For more information, see "[Set labels for an issue](https://docs.github.com/enterprise-server@3.1/rest/reference/issues#set-labels-for-an-issue)."
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C2E542817C876F5D6Dbe839E319618Be2\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
