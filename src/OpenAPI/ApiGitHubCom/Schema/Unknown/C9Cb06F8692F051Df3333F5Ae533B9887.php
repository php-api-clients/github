<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C9Cb06F8692F051Df3333F5Ae533B9887
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["emails"],"type":"object","properties":{"emails":{"type":"array","items":{"minItems":1,"type":"string","examples":["username@example.com"]},"description":"Email addresses associated with the GitHub user account."}},"description":"Deletes one or more email addresses from your GitHub account. Must contain at least one email address. **Note:** Alternatively, you can pass a single email address or an `array` of emails addresses directly, but we recommend that you pass an object using the `emails` key.","example":{"emails":["octocat@github.com","mona@github.com"]}},{"type":"array","items":{"minItems":1,"type":"string","examples":["username@example.com"]}},{"type":"string"}]}';
    public const SCHEMA_TITLE = 'c_9cb06f8692f051df3333f5ae533b9887';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Email addresses associated with the GitHub user account.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6D1Ceee71166798302Ffb9922209C44B>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6D1Ceee71166798302Ffb9922209C44B::class)
     */
    private array $emails = array();
    /**
     * Email addresses associated with the GitHub user account.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6D1Ceee71166798302Ffb9922209C44B>
     */
    public function emails() : array
    {
        return $this->emails;
    }
}
