<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReplaceAllTopics\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["names"],"type":"object","properties":{"names":{"type":"array","items":{"type":"string"},"description":"An array of topics to add to the repository. Pass one or more topics to _replace_ the set of existing topics. Send an empty array (`[]`) to clear all topics from the repository. **Note:** Topic `names` cannot contain uppercase letters."}}}';
    public const SCHEMA_TITLE = 'ReplaceAllTopics\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of topics to add to the repository. Pass one or more topics to _replace_ the set of existing topics. Send an empty array (`[]`) to clear all topics from the repository. **Note:** Topic `names` cannot contain uppercase letters.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Names>
     */
    public readonly array $names;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Names> $names
     */
    public function __construct(array $names)
    {
        $this->names = $names;
    }
}
