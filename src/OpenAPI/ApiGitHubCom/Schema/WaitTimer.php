<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WaitTimer
{
    public const SCHEMA_TITLE = 'wait-timer';
    public const SPL_HASH = '0000000054d5e03c0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).';
}
