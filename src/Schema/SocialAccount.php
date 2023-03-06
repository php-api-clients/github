<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SocialAccount
{
    public const SCHEMA_JSON = '{"title":"Social account","required":["provider","url"],"type":"object","properties":{"provider":{"type":"string","examples":["linkedin"]},"url":{"type":"string","examples":["https:\\/\\/www.linkedin.com\\/company\\/github\\/"]}},"description":"Social media account"}';
    public const SCHEMA_TITLE = 'Social account';
    public const SCHEMA_DESCRIPTION = 'Social media account';
    public const SCHEMA_EXAMPLE_DATA = '{"provider":"linkedin","url":"https:\\/\\/www.linkedin.com\\/company\\/github\\/"}';
    public function __construct(public ?string $provider, public ?string $url)
    {
    }
}
