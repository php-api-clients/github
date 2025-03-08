<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Actions\ListHostedRunnersForOrg\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "runners"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "runners": {
            "type": "array",
            "items": {
                "title": "GitHub-hosted hosted runner",
                "required": [
                    "id",
                    "name",
                    "image_details",
                    "machine_size_details",
                    "status",
                    "public_ip_enabled",
                    "platform"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The unique identifier of the hosted runner.",
                        "examples": [
                            5
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the hosted runner.",
                        "examples": [
                            "my-github-hosted-runner"
                        ]
                    },
                    "runner_group_id": {
                        "type": "integer",
                        "description": "The unique identifier of the group that the hosted runner belongs to.",
                        "examples": [
                            2
                        ]
                    },
                    "image_details": {
                        "anyOf": [
                            {
                                "type": "null"
                            },
                            {
                                "title": "GitHub-hosted runner image details.",
                                "required": [
                                    "id",
                                    "size_gb",
                                    "display_name",
                                    "source",
                                    "version"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "string",
                                        "description": "The ID of the image. Use this ID for the `image` parameter when creating a new larger runner.",
                                        "examples": [
                                            "ubuntu-20.04"
                                        ]
                                    },
                                    "size_gb": {
                                        "type": "integer",
                                        "description": "Image size in GB.",
                                        "examples": [
                                            86
                                        ]
                                    },
                                    "display_name": {
                                        "type": "string",
                                        "description": "Display name for this image.",
                                        "examples": [
                                            20.04
                                        ]
                                    },
                                    "source": {
                                        "enum": [
                                            "github",
                                            "partner",
                                            "custom"
                                        ],
                                        "type": "string",
                                        "description": "The image provider."
                                    }
                                },
                                "description": "Provides details of a hosted runner image"
                            }
                        ]
                    },
                    "machine_size_details": {
                        "title": "Github-owned VM details.",
                        "required": [
                            "id",
                            "cpu_cores",
                            "memory_gb",
                            "storage_gb"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "string",
                                "description": "The ID used for the `size` parameter when creating a new runner.",
                                "examples": [
                                    "8-core"
                                ]
                            },
                            "cpu_cores": {
                                "type": "integer",
                                "description": "The number of cores.",
                                "examples": [
                                    8
                                ]
                            },
                            "memory_gb": {
                                "type": "integer",
                                "description": "The available RAM for the machine spec.",
                                "examples": [
                                    32
                                ]
                            },
                            "storage_gb": {
                                "type": "integer",
                                "description": "The available SSD storage for the machine spec.",
                                "examples": [
                                    300
                                ]
                            }
                        },
                        "description": "Provides details of a particular machine spec."
                    },
                    "status": {
                        "enum": [
                            "Ready",
                            "Provisioning",
                            "Shutdown",
                            "Deleting",
                            "Stuck"
                        ],
                        "type": "string",
                        "description": "The status of the runner.",
                        "examples": [
                            "Ready"
                        ]
                    },
                    "platform": {
                        "type": "string",
                        "description": "The operating system of the image.",
                        "examples": [
                            "linux-x64"
                        ]
                    },
                    "maximum_runners": {
                        "type": "integer",
                        "description": "The maximum amount of hosted runners. Runners will not scale automatically above this number. Use this setting to limit your cost.",
                        "default": 10,
                        "examples": [
                            5
                        ]
                    },
                    "public_ip_enabled": {
                        "type": "boolean",
                        "description": "Whether public IP is enabled for the hosted runners.",
                        "examples": [
                            true
                        ]
                    },
                    "public_ips": {
                        "type": "array",
                        "items": {
                            "title": "Public IP for a GitHub-hosted larger runners.",
                            "type": "object",
                            "properties": {
                                "enabled": {
                                    "type": "boolean",
                                    "description": "Whether public IP is enabled.",
                                    "examples": [
                                        true
                                    ]
                                },
                                "prefix": {
                                    "type": "string",
                                    "description": "The prefix for the public IP.",
                                    "examples": [
                                        "20.80.208.150"
                                    ]
                                },
                                "length": {
                                    "type": "integer",
                                    "description": "The length of the IP prefix.",
                                    "examples": [
                                        28
                                    ]
                                }
                            },
                            "description": "Provides details of Public IP for a GitHub-hosted larger runners"
                        },
                        "description": "The public IP ranges when public IP is enabled for the hosted runners."
                    },
                    "last_active_on": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The time at which the runner was last used, in ISO 8601 format.",
                        "format": "date-time",
                        "examples": [
                            "2022-10-09T23:39:01Z"
                        ]
                    }
                },
                "description": "A Github-hosted hosted runner."
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "runners": [
        {
            "id": 5,
            "name": "my-github-hosted-runner",
            "runner_group_id": 2,
            "image_details": {
                "id": "ubuntu-20.04",
                "size_gb": 86,
                "display_name": 20.04,
                "source": "custom"
            },
            "machine_size_details": {
                "id": "8-core",
                "cpu_cores": 8,
                "memory_gb": 32,
                "storage_gb": 300
            },
            "status": "Ready",
            "platform": "linux-x64",
            "maximum_runners": 5,
            "public_ip_enabled": true,
            "public_ips": [
                {
                    "enabled": true,
                    "prefix": "20.80.208.150",
                    "length": 28
                },
                {
                    "enabled": true,
                    "prefix": "20.80.208.150",
                    "length": 28
                }
            ],
            "last_active_on": "2022-10-09T23:39:01Z"
        },
        {
            "id": 5,
            "name": "my-github-hosted-runner",
            "runner_group_id": 2,
            "image_details": {
                "id": "ubuntu-20.04",
                "size_gb": 86,
                "display_name": 20.04,
                "source": "custom"
            },
            "machine_size_details": {
                "id": "8-core",
                "cpu_cores": 8,
                "memory_gb": 32,
                "storage_gb": 300
            },
            "status": "Ready",
            "platform": "linux-x64",
            "maximum_runners": 5,
            "public_ip_enabled": true,
            "public_ips": [
                {
                    "enabled": true,
                    "prefix": "20.80.208.150",
                    "length": 28
                },
                {
                    "enabled": true,
                    "prefix": "20.80.208.150",
                    "length": 28
                }
            ],
            "last_active_on": "2022-10-09T23:39:01Z"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $runners,)
    {
    }
}
