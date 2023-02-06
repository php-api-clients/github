<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeleteEmailForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["emails"],"type":"object","properties":{"emails":{"type":"array","items":{"minItems":1,"type":"string","examples":["username@example.com"]},"description":"Email addresses associated with the GitHub user account."}},"description":"Deletes one or more email addresses from your GitHub account. Must contain at least one email address. **Note:** Alternatively, you can pass a single email address or an `array` of emails addresses directly, but we recommend that you pass an object using the `emails` key.","example":{"emails":["octocat@github.com","mona@github.com"]}},{"type":"array","items":{"minItems":1,"type":"string","examples":["username@example.com"]}},{"type":"string"}]}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'DeleteEmailForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Email addresses associated with the GitHub user account.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Emails>
     */
    public readonly array $emails;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Emails> $emails
     */
    public function __construct(array $emails)
    {
        $this->emails = $emails;
    }
}
