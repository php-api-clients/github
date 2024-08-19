<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\MarketplaceListing\Accounts;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\MarketplaceListingPlan;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class AccountId implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase($payload),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($payload),
                'ApiClients\Client\GitHub\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($payload),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase(array $payload): MarketplacePurchase
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['organization_billing_email'] ?? null;

            if ($value === null) {
                $properties['organizationBillingEmail'] = null;
                goto after_organizationBillingEmail;
            }

            $properties['organizationBillingEmail'] = $value;

            after_organizationBillingEmail:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['marketplace_pending_change'] ?? null;

            if ($value === null) {
                $properties['marketplacePendingChange'] = null;
                goto after_marketplacePendingChange;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'marketplacePendingChange';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['marketplacePendingChange'] = $value;

            after_marketplacePendingChange:

            $value = $payload['marketplace_purchase'] ?? null;

            if ($value === null) {
                $missingFields[] = 'marketplace_purchase';
                goto after_marketplacePurchase;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'marketplacePurchase';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['marketplacePurchase'] = $value;

            after_marketplacePurchase:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new MarketplacePurchase(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(array $payload): MarketplacePendingChange
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['is_installed'] ?? null;

            if ($value === null) {
                $properties['isInstalled'] = null;
                goto after_isInstalled;
            }

            $properties['isInstalled'] = $value;

            after_isInstalled:

            $value = $payload['effective_date'] ?? null;

            if ($value === null) {
                $properties['effectiveDate'] = null;
                goto after_effectiveDate;
            }

            $properties['effectiveDate'] = $value;

            after_effectiveDate:

            $value = $payload['unit_count'] ?? null;

            if ($value === null) {
                $properties['unitCount'] = null;
                goto after_unitCount;
            }

            $properties['unitCount'] = $value;

            after_unitCount:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['plan'] ?? null;

            if ($value === null) {
                $properties['plan'] = null;
                goto after_plan;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'plan';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['plan'] = $value;

            after_plan:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(MarketplacePendingChange::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new MarketplacePendingChange(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan(array $payload): MarketplaceListingPlan
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['accounts_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'accounts_url';
                goto after_accountsUrl;
            }

            $properties['accountsUrl'] = $value;

            after_accountsUrl:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $missingFields[] = 'description';
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['monthly_price_in_cents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'monthly_price_in_cents';
                goto after_monthlyPriceInCents;
            }

            $properties['monthlyPriceInCents'] = $value;

            after_monthlyPriceInCents:

            $value = $payload['yearly_price_in_cents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'yearly_price_in_cents';
                goto after_yearlyPriceInCents;
            }

            $properties['yearlyPriceInCents'] = $value;

            after_yearlyPriceInCents:

            $value = $payload['price_model'] ?? null;

            if ($value === null) {
                $missingFields[] = 'price_model';
                goto after_priceModel;
            }

            $properties['priceModel'] = $value;

            after_priceModel:

            $value = $payload['has_free_trial'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_free_trial';
                goto after_hasFreeTrial;
            }

            $properties['hasFreeTrial'] = $value;

            after_hasFreeTrial:

            $value = $payload['unit_name'] ?? null;

            if ($value === null) {
                $properties['unitName'] = null;
                goto after_unitName;
            }

            $properties['unitName'] = $value;

            after_unitName:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['bullets'] ?? null;

            if ($value === null) {
                $missingFields[] = 'bullets';
                goto after_bullets;
            }

            $properties['bullets'] = $value;

            after_bullets:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new MarketplaceListingPlan(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(array $payload): \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['billing_cycle'] ?? null;

            if ($value === null) {
                $properties['billingCycle'] = null;
                goto after_billingCycle;
            }

            $properties['billingCycle'] = $value;

            after_billingCycle:

            $value = $payload['next_billing_date'] ?? null;

            if ($value === null) {
                $properties['nextBillingDate'] = null;
                goto after_nextBillingDate;
            }

            $properties['nextBillingDate'] = $value;

            after_nextBillingDate:

            $value = $payload['is_installed'] ?? null;

            if ($value === null) {
                $properties['isInstalled'] = null;
                goto after_isInstalled;
            }

            $properties['isInstalled'] = $value;

            after_isInstalled:

            $value = $payload['unit_count'] ?? null;

            if ($value === null) {
                $properties['unitCount'] = null;
                goto after_unitCount;
            }

            $properties['unitCount'] = $value;

            after_unitCount:

            $value = $payload['on_free_trial'] ?? null;

            if ($value === null) {
                $properties['onFreeTrial'] = null;
                goto after_onFreeTrial;
            }

            $properties['onFreeTrial'] = $value;

            after_onFreeTrial:

            $value = $payload['free_trial_ends_on'] ?? null;

            if ($value === null) {
                $properties['freeTrialEndsOn'] = null;
                goto after_freeTrialEndsOn;
            }

            $properties['freeTrialEndsOn'] = $value;

            after_freeTrialEndsOn:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['plan'] ?? null;

            if ($value === null) {
                $properties['plan'] = null;
                goto after_plan;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'plan';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['plan'] = $value;

            after_plan:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase($object),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($object),
                'ApiClients\Client\GitHub\Schema\MarketplaceListingPlan' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($object),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase(mixed $object): mixed
    {
        assert($object instanceof MarketplacePurchase);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $type                              = $object->type;
        after_type:        $result['type'] = $type;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $login                               = $object->login;
        after_login:        $result['login'] = $login;

        $organizationBillingEmail = $object->organizationBillingEmail;

        if ($organizationBillingEmail === null) {
            goto after_organizationBillingEmail;
        }

        after_organizationBillingEmail:        $result['organization_billing_email'] = $organizationBillingEmail;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $marketplacePendingChange = $object->marketplacePendingChange;

        if ($marketplacePendingChange === null) {
            goto after_marketplacePendingChange;
        }

        $marketplacePendingChange                                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($marketplacePendingChange);
        after_marketplacePendingChange:        $result['marketplace_pending_change'] = $marketplacePendingChange;

        $marketplacePurchase                                              = $object->marketplacePurchase;
        $marketplacePurchase                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($marketplacePurchase);
        after_marketplacePurchase:        $result['marketplace_purchase'] = $marketplacePurchase;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(mixed $object): mixed
    {
        assert($object instanceof MarketplacePendingChange);
        $result = [];

        $isInstalled = $object->isInstalled;

        if ($isInstalled === null) {
            goto after_isInstalled;
        }

        after_isInstalled:        $result['is_installed'] = $isInstalled;

        $effectiveDate = $object->effectiveDate;

        if ($effectiveDate === null) {
            goto after_effectiveDate;
        }

        after_effectiveDate:        $result['effective_date'] = $effectiveDate;

        $unitCount = $object->unitCount;

        if ($unitCount === null) {
            goto after_unitCount;
        }

        after_unitCount:        $result['unit_count'] = $unitCount;

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }

        $plan                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan(mixed $object): mixed
    {
        assert($object instanceof MarketplaceListingPlan);
        $result = [];

        $url                             = $object->url;
        after_url:        $result['url'] = $url;

        $accountsUrl                                      = $object->accountsUrl;
        after_accountsUrl:        $result['accounts_url'] = $accountsUrl;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $number                                = $object->number;
        after_number:        $result['number'] = $number;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $description                                     = $object->description;
        after_description:        $result['description'] = $description;

        $monthlyPriceInCents                                                = $object->monthlyPriceInCents;
        after_monthlyPriceInCents:        $result['monthly_price_in_cents'] = $monthlyPriceInCents;

        $yearlyPriceInCents                                               = $object->yearlyPriceInCents;
        after_yearlyPriceInCents:        $result['yearly_price_in_cents'] = $yearlyPriceInCents;

        $priceModel                                     = $object->priceModel;
        after_priceModel:        $result['price_model'] = $priceModel;

        $hasFreeTrial                                        = $object->hasFreeTrial;
        after_hasFreeTrial:        $result['has_free_trial'] = $hasFreeTrial;

        $unitName = $object->unitName;

        if ($unitName === null) {
            goto after_unitName;
        }

        after_unitName:        $result['unit_name'] = $unitName;

        $state                               = $object->state;
        after_state:        $result['state'] = $state;

        $bullets = $object->bullets;
        static $bulletsSerializer0;

        if ($bulletsSerializer0 === null) {
            $bulletsSerializer0 = new SerializeArrayItems(...[]);
        }

        $bullets                                 = $bulletsSerializer0->serialize($bullets, $this);
        after_bullets:        $result['bullets'] = $bullets;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase);
        $result = [];

        $billingCycle = $object->billingCycle;

        if ($billingCycle === null) {
            goto after_billingCycle;
        }

        after_billingCycle:        $result['billing_cycle'] = $billingCycle;

        $nextBillingDate = $object->nextBillingDate;

        if ($nextBillingDate === null) {
            goto after_nextBillingDate;
        }

        after_nextBillingDate:        $result['next_billing_date'] = $nextBillingDate;

        $isInstalled = $object->isInstalled;

        if ($isInstalled === null) {
            goto after_isInstalled;
        }

        after_isInstalled:        $result['is_installed'] = $isInstalled;

        $unitCount = $object->unitCount;

        if ($unitCount === null) {
            goto after_unitCount;
        }

        after_unitCount:        $result['unit_count'] = $unitCount;

        $onFreeTrial = $object->onFreeTrial;

        if ($onFreeTrial === null) {
            goto after_onFreeTrial;
        }

        after_onFreeTrial:        $result['on_free_trial'] = $onFreeTrial;

        $freeTrialEndsOn = $object->freeTrialEndsOn;

        if ($freeTrialEndsOn === null) {
            goto after_freeTrialEndsOn;
        }

        after_freeTrialEndsOn:        $result['free_trial_ends_on'] = $freeTrialEndsOn;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }

        $plan                              = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
