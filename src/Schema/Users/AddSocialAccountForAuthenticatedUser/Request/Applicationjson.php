<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Users\AddSocialAccountForAuthenticatedUser\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["account_urls"],"type":"object","properties":{"account_urls":{"type":"array","items":{"type":"string","examples":["https:\\/\\/twitter.com\\/github"]},"description":"Full URLs for the social media profiles to add.","examples":[]}},"example":{"account_urls":["https:\\/\\/www.linkedin.com\\/company\\/github\\/","https:\\/\\/twitter.com\\/github"]}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"account_urls":["https:\\/\\/www.linkedin.com\\/company\\/github\\/","https:\\/\\/twitter.com\\/github"]}';
    /**
     * accountUrls: Full URLs for the social media profiles to add.
     * @param array<string> $accountUrls
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('account_urls')] public array $accountUrls)
    {
    }
}
