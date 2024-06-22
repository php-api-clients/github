<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Attestations
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "bundle": {
            "title": "Sigstore Bundle v0.1",
            "type": "object",
            "properties": {
                "mediaType": {
                    "type": "string"
                },
                "verificationMaterial": {
                    "type": "object",
                    "properties": {
                        "x509CertificateChain": {
                            "type": "object",
                            "properties": {
                                "certificates": {
                                    "type": "array",
                                    "items": {
                                        "type": "object",
                                        "properties": {
                                            "rawBytes": {
                                                "type": "string"
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        "tlogEntries": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "logIndex": {
                                        "type": "string"
                                    },
                                    "logId": {
                                        "type": "object",
                                        "properties": {
                                            "keyId": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    "kindVersion": {
                                        "type": "object",
                                        "properties": {
                                            "kind": {
                                                "type": "string"
                                            },
                                            "version": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    "integratedTime": {
                                        "type": "string"
                                    },
                                    "inclusionPromise": {
                                        "type": "object",
                                        "properties": {
                                            "signedEntryTimestamp": {
                                                "type": "string"
                                            }
                                        }
                                    },
                                    "inclusionProof": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "canonicalizedBody": {
                                        "type": "string"
                                    }
                                }
                            }
                        },
                        "timestampVerificationData": {
                            "type": [
                                "string",
                                "null"
                            ]
                        }
                    }
                },
                "dsseEnvelope": {
                    "type": "object",
                    "properties": {
                        "payload": {
                            "type": "string"
                        },
                        "payloadType": {
                            "type": "string"
                        },
                        "signatures": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "sig": {
                                        "type": "string"
                                    },
                                    "keyid": {
                                        "type": "string"
                                    }
                                }
                            }
                        }
                    }
                }
            },
            "description": "Sigstore Bundle v0.1"
        },
        "repository_id": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bundle": {
        "mediaType": "generated",
        "verificationMaterial": {
            "x509CertificateChain": {
                "certificates": [
                    {
                        "rawBytes": "generated"
                    },
                    {
                        "rawBytes": "generated"
                    }
                ]
            },
            "tlogEntries": [
                {
                    "logIndex": "generated",
                    "logId": {
                        "keyId": "generated"
                    },
                    "kindVersion": {
                        "kind": "generated",
                        "version": "generated"
                    },
                    "integratedTime": "generated",
                    "inclusionPromise": {
                        "signedEntryTimestamp": "generated"
                    },
                    "inclusionProof": "generated",
                    "canonicalizedBody": "generated"
                },
                {
                    "logIndex": "generated",
                    "logId": {
                        "keyId": "generated"
                    },
                    "kindVersion": {
                        "kind": "generated",
                        "version": "generated"
                    },
                    "integratedTime": "generated",
                    "inclusionPromise": {
                        "signedEntryTimestamp": "generated"
                    },
                    "inclusionProof": "generated",
                    "canonicalizedBody": "generated"
                }
            ],
            "timestampVerificationData": "generated"
        },
        "dsseEnvelope": {
            "payload": "generated",
            "payloadType": "generated",
            "signatures": [
                {
                    "sig": "generated",
                    "keyid": "generated"
                },
                {
                    "sig": "generated",
                    "keyid": "generated"
                }
            ]
        }
    },
    "repository_id": 13
}';

    /**
     * bundle: Sigstore Bundle v0.1
     */
    public function __construct(public Schema\SigstoreBundle0|null $bundle, #[MapFrom('repository_id')]
    public int|null $repositoryId,)
    {
    }
}
