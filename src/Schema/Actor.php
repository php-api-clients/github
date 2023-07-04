<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Actor
{
    public const SCHEMA_JSON         = '{"title":"Actor","required":["id","login","gravatar_id","url","avatar_url"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"display_login":{"type":"string"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"avatar_url":{"type":"string","format":"uri"}},"description":"Actor"}';
    public const SCHEMA_TITLE        = 'Actor';
    public const SCHEMA_DESCRIPTION  = 'Actor';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"login":"generated","display_login":"generated","gravatar_id":"generated","url":"https:\\/\\/example.com\\/","avatar_url":"https:\\/\\/example.com\\/"}';

    public function __construct(public int $id, public string $login, #[MapFrom('display_login')]
    public string|null $displayLogin, #[MapFrom('gravatar_id')]
    public string|null $gravatarId, public string $url, #[MapFrom('avatar_url')]
    public string $avatarUrl,)
    {
    }
}
