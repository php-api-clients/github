<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

final class AcceptHeader
{
    const PRESET_DEFAULT = [
        self::CHECK_RUNS,
        self::LICENSE,
        self::TOPICS,
        self::DEFAULT,
    ];

    const PRESET_COMMUNITY_HEALTH = [
        self::COMMUNITY_HEALTH,
        self::DEFAULT,
    ];

    // Community Health: https://developer.github.com/v3/repos/community/#community-health
    const COMMUNITY_HEALTH = 'application/vnd.github.black-panther-preview+json';

    // Default header: https://developer.github.com/v3/#current-version
    const DEFAULT = 'application/vnd.github.v3+json';

    // License on repository object: https://developer.github.com/v3/licenses/#licenses
    const LICENSE = 'application/vnd.github.drax-preview+json';

    // Topics on repository object: https://developer.github.com/v3/repos/#repositories
    const TOPICS = 'application/vnd.github.mercy-preview+json';

    // Topics on repository object: https://developer.github.com/v3/repos/#repositories
    const CHECK_RUNS = 'application/vnd.github.antiope-preview+json';

    public static function getHeader(array $chunks): string
    {
        return \implode('; ', $chunks);
    }
}
