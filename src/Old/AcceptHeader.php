<?php

declare(strict_types=1);

namespace ApiClients\Client\Github;

use function implode;

final class AcceptHeader
{
    public const PRESET_DEFAULT = [
        self::CHECK_RUNS,
        self::LICENSE,
        self::TOPICS,
        self::DEFAULT,
    ];

    public const PRESET_COMMUNITY_HEALTH = [
        self::COMMUNITY_HEALTH,
        self::DEFAULT,
    ];

    // Community Health: https://developer.github.com/v3/repos/community/#community-health
    public const COMMUNITY_HEALTH = 'application/vnd.github.black-panther-preview+json';

    // Default header: https://developer.github.com/v3/#current-version
    public const DEFAULT = 'application/vnd.github.v3+json';

    // License on repository object: https://developer.github.com/v3/licenses/#licenses
    public const LICENSE = 'application/vnd.github.drax-preview+json';

    // Topics on repository object: https://developer.github.com/v3/repos/#repositories
    public const TOPICS = 'application/vnd.github.mercy-preview+json';

    // Topics on repository object: https://developer.github.com/v3/repos/#repositories
    public const CHECK_RUNS = 'application/vnd.github.antiope-preview+json';

    public static function getHeader(array $chunks): string
    {
        return implode('; ', $chunks);
    }
}
