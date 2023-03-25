<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Users\AddSocialAccountForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["account_urls"],"type":"object","properties":{"account_urls":{"type":"array","items":{"type":"string","examples":["https:\\/\\/twitter.com\\/github"]},"description":"Full URLs for the social media profiles to add.","examples":[]}},"example":{"account_urls":["https:\\/\\/www.linkedin.com\\/company\\/github\\/","https:\\/\\/twitter.com\\/github"]}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"account_urls":["https:\\/\\/www.linkedin.com\\/company\\/github\\/","https:\\/\\/twitter.com\\/github"],"accountUrls":["generated_account_urls_null"]}';
    /**
     * accountUrls: Full URLs for the social media profiles to add.
     * @param array<string> $accountUrls
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('account_urls')] public array $accountUrls)
    {
    }
}
