<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis;

final readonly class AdvancedSecurity
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see \\"[About GitHub Advanced Security](\\/github\\/getting-started-with-github\\/learning-about-github\\/about-github-advanced-security).\\""}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see "[About GitHub Advanced Security](/github/getting-started-with-github/learning-about-github/about-github-advanced-security)."';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated"}';

    /**
     * status: Can be `enabled` or `disabled`.
     */
    public function __construct(public string|null $status)
    {
    }
}
