<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Actor
{
    public const SCHEMA_JSON         = '{"title":"Actor","required":["id","login","gravatar_id","url","avatar_url"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":"string"},"display_login":{"type":"string"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"avatar_url":{"type":"string","format":"uri"}},"description":"Actor"}';
    public const SCHEMA_TITLE        = 'Actor';
    public const SCHEMA_DESCRIPTION  = 'Actor';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"login":"generated_login_null","display_login":"generated_display_login_null","gravatar_id":"generated_gravatar_id_null","url":"https:\\/\\/example.com\\/","avatar_url":"https:\\/\\/example.com\\/"}';

    public function __construct(public int $id, public string $login, #[MapFrom('display_login')] public ?string $displayLogin, #[MapFrom('gravatar_id')] public ?string $gravatarId, public string $url, #[MapFrom('avatar_url')] public string $avatarUrl)
    {
    }
}
