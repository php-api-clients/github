<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApiOverview
{
    public const SCHEMA_JSON         = '{
    "title": "Api Overview",
    "required": [
        "verifiable_password_authentication"
    ],
    "type": "object",
    "properties": {
        "verifiable_password_authentication": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "ssh_key_fingerprints": {
            "type": "object",
            "properties": {
                "SHA256_RSA": {
                    "type": "string"
                },
                "SHA256_DSA": {
                    "type": "string"
                },
                "SHA256_ECDSA": {
                    "type": "string"
                },
                "SHA256_ED25519": {
                    "type": "string"
                }
            }
        },
        "ssh_keys": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "ssh-ed25519 ABCDEFGHIJKLMNOPQRSTUVWXYZ"
            ]
        },
        "hooks": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "github_enterprise_importer": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "web": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "api": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "git": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "packages": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "pages": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "importer": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "actions": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "actions_macos": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "codespaces": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "dependabot": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "copilot": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "examples": [
                "192.0.2.1"
            ]
        },
        "domains": {
            "type": "object",
            "properties": {
                "website": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                },
                "codespaces": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                },
                "copilot": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                },
                "packages": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                },
                "actions": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                },
                "artifact_attestations": {
                    "type": "object",
                    "properties": {
                        "trust_domain": {
                            "type": "string",
                            "examples": [
                                "example"
                            ]
                        },
                        "services": {
                            "type": "array",
                            "items": {
                                "type": "string",
                                "examples": [
                                    "example.com"
                                ]
                            }
                        }
                    }
                }
            }
        }
    },
    "description": "Api Overview"
}';
    public const SCHEMA_TITLE        = 'Api Overview';
    public const SCHEMA_DESCRIPTION  = 'Api Overview';
    public const SCHEMA_EXAMPLE_DATA = '{
    "verifiable_password_authentication": true,
    "ssh_key_fingerprints": {
        "SHA256_RSA": "generated",
        "SHA256_DSA": "generated",
        "SHA256_ECDSA": "generated",
        "SHA256_ED25519": "generated"
    },
    "ssh_keys": [
        "ssh-ed25519 ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        "ssh-ed25519 ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    ],
    "hooks": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "github_enterprise_importer": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "web": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "api": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "git": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "packages": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "pages": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "importer": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "actions": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "actions_macos": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "codespaces": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "dependabot": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "copilot": [
        "192.0.2.1",
        "192.0.2.1"
    ],
    "domains": {
        "website": [
            "generated",
            "generated"
        ],
        "codespaces": [
            "generated",
            "generated"
        ],
        "copilot": [
            "generated",
            "generated"
        ],
        "packages": [
            "generated",
            "generated"
        ],
        "actions": [
            "generated",
            "generated"
        ],
        "artifact_attestations": {
            "trust_domain": "example",
            "services": [
                "generated",
                "generated"
            ]
        }
    }
}';

    public function __construct(#[MapFrom('verifiable_password_authentication')]
    public bool $verifiablePasswordAuthentication, #[MapFrom('ssh_key_fingerprints')]
    public Schema\ApiOverview\SshKeyFingerprints|null $sshKeyFingerprints, #[MapFrom('ssh_keys')]
    public array|null $sshKeys, public array|null $hooks, #[MapFrom('github_enterprise_importer')]
    public array|null $githubEnterpriseImporter, public array|null $web, public array|null $api, public array|null $git, public array|null $packages, public array|null $pages, public array|null $importer, public array|null $actions, #[MapFrom('actions_macos')]
    public array|null $actionsMacos, public array|null $codespaces, public array|null $dependabot, public array|null $copilot, public Schema\ApiOverview\Domains|null $domains,)
    {
    }
}
