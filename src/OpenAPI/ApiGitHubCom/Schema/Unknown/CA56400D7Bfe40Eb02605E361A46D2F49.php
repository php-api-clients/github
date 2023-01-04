<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CA56400D7Bfe40Eb02605E361A46D2F49
{
    public const SCHEMA_JSON = '{"oneOf":[{"type":"object","properties":{"labels":{"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the labels to add to the issue\'s existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also replace all of the labels for an issue. For more information, see \\"[Set labels for an issue](https:\\/\\/docs.github.com\\/rest\\/reference\\/issues#set-labels-for-an-issue).\\""}}},{"minItems":1,"type":"array","items":{"type":"string"}},{"type":"object","properties":{"labels":{"minItems":1,"type":"array","items":{"required":["name"],"type":"object","properties":{"name":{"type":"string"}}}}}},{"minItems":1,"type":"array","items":{"required":["name"],"type":"object","properties":{"name":{"type":"string"}}}},{"type":"string"}]}';
    public const SCHEMA_TITLE = 'c_a56400d7bfe40eb02605e361a46d2f49';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the labels to add to the issue's existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also replace all of the labels for an issue. For more information, see "[Set labels for an issue](https://docs.github.com/rest/reference/issues#set-labels-for-an-issue)."
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CA56400D7Bfe40Eb02605E361A46D2F49\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CA56400D7Bfe40Eb02605E361A46D2F49\Labels::class)
     */
    private array $labels = array();
    /**
     * The names of the labels to add to the issue's existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also replace all of the labels for an issue. For more information, see "[Set labels for an issue](https://docs.github.com/rest/reference/issues#set-labels-for-an-issue)."
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CA56400D7Bfe40Eb02605E361A46D2F49\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
