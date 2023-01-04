<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CFdf907Bd0741B5C3B4Ca9Ae582Abc1Bb
{
    public const SCHEMA_JSON = '{"oneOf":[{"type":"object","properties":{"labels":{"minItems":1,"type":"array","items":{"type":"string"},"description":"The names of the labels to set for the issue. The labels you set replace any existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also add labels to the existing labels for an issue. For more information, see \\"[Add labels to an issue](https:\\/\\/docs.github.com\\/rest\\/reference\\/issues#add-labels-to-an-issue).\\""}}},{"minItems":1,"type":"array","items":{"type":"string"}},{"type":"object","properties":{"labels":{"minItems":1,"type":"array","items":{"required":["name"],"type":"object","properties":{"name":{"type":"string"}}}}}},{"minItems":1,"type":"array","items":{"required":["name"],"type":"object","properties":{"name":{"type":"string"}}}},{"type":"string"}]}';
    public const SCHEMA_TITLE = 'c_fdf907bd0741b5c3b4ca9ae582abc1bb';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The names of the labels to set for the issue. The labels you set replace any existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also add labels to the existing labels for an issue. For more information, see "[Add labels to an issue](https://docs.github.com/rest/reference/issues#add-labels-to-an-issue)."
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CFdf907Bd0741B5C3B4Ca9Ae582Abc1Bb\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CFdf907Bd0741B5C3B4Ca9Ae582Abc1Bb\Labels::class)
     */
    private array $labels = array();
    /**
     * The names of the labels to set for the issue. The labels you set replace any existing labels. You can pass an empty array to remove all labels. Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key. You can also add labels to the existing labels for an issue. For more information, see "[Add labels to an issue](https://docs.github.com/rest/reference/issues#add-labels-to-an-issue)."
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CFdf907Bd0741B5C3B4Ca9Ae582Abc1Bb\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
}
