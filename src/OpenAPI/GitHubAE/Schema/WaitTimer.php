<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WaitTimer
{
    public const SCHEMA_TITLE = 'wait-timer';
    public const SCHEMA_DESCRIPTION = 'The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).';
}
