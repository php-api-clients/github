<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C07C60C7D390546D47A28C4861746Df23
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["emails"],"type":"object","properties":{"emails":{"type":"array","items":{"minItems":1,"type":"string","examples":["username@example.com"]},"description":"Adds one or more email addresses to your GitHub account. Must contain at least one email address. **Note:** Alternatively, you can pass a single email address or an `array` of emails addresses directly, but we recommend that you pass an object using the `emails` key.","examples":[]}},"example":{"emails":["octocat@github.com","mona@github.com"]}},{"type":"array","items":{"minItems":1,"type":"string","examples":["username@example.com"]}},{"type":"string"}]}';
    public const SCHEMA_TITLE = 'c_07c60c7d390546d47a28c4861746df23';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Adds one or more email addresses to your GitHub account. Must contain at least one email address. **Note:** Alternatively, you can pass a single email address or an `array` of emails addresses directly, but we recommend that you pass an object using the `emails` key.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C07C60C7D390546D47A28C4861746Df23\Emails>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C07C60C7D390546D47A28C4861746Df23\Emails::class)
     */
    private array $emails = array();
    /**
     * Adds one or more email addresses to your GitHub account. Must contain at least one email address. **Note:** Alternatively, you can pass a single email address or an `array` of emails addresses directly, but we recommend that you pass an object using the `emails` key.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C07C60C7D390546D47A28C4861746Df23\Emails>
     */
    public function emails() : array
    {
        return $this->emails;
    }
}
