<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: payment_model.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.PaymentTransaction</code>
 */
class PaymentTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string transaction_id = 1;</code>
     */
    protected $transaction_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     */
    protected $app_id = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCounterParty debit_party = 4;</code>
     */
    protected $debit_party = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCounterParty credit_party = 5;</code>
     */
    protected $credit_party = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 6;</code>
     */
    protected $value = null;
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatus status = 7;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 9;</code>
     */
    protected $updated_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue provider_transaction_id = 10;</code>
     */
    protected $provider_transaction_id = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue narration = 11;</code>
     */
    protected $narration = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 12;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transaction_id
     *     @type \Google\Protobuf\StringValue $app_id
     *     @type \Com\Elarian\Hera\Proto\PaymentCounterParty $debit_party
     *     @type \Com\Elarian\Hera\Proto\PaymentCounterParty $credit_party
     *     @type \Com\Elarian\Hera\Proto\Cash $value
     *     @type int $status
     *     @type \Google\Protobuf\Timestamp $created_at
     *     @type \Google\Protobuf\Timestamp $updated_at
     *     @type \Google\Protobuf\StringValue $provider_transaction_id
     *     @type \Google\Protobuf\StringValue $narration
     *     @type \Google\Protobuf\StringValue $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PaymentModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 1;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Generated from protobuf field <code>string transaction_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : null;
    }

    public function hasAppId()
    {
        return isset($this->app_id);
    }

    public function clearAppId()
    {
        unset($this->app_id);
    }

    /**
     * Returns the unboxed value from <code>getAppId()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return string|null
     */
    public function getAppIdUnwrapped()
    {
        return $this->readWrapperValue("app_id");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdUnwrapped($var)
    {
        $this->writeWrapperValue("app_id", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCounterParty debit_party = 4;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentCounterParty
     */
    public function getDebitParty()
    {
        return isset($this->debit_party) ? $this->debit_party : null;
    }

    public function hasDebitParty()
    {
        return isset($this->debit_party);
    }

    public function clearDebitParty()
    {
        unset($this->debit_party);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCounterParty debit_party = 4;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentCounterParty $var
     * @return $this
     */
    public function setDebitParty($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentCounterParty::class);
        $this->debit_party = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCounterParty credit_party = 5;</code>
     * @return \Com\Elarian\Hera\Proto\PaymentCounterParty
     */
    public function getCreditParty()
    {
        return isset($this->credit_party) ? $this->credit_party : null;
    }

    public function hasCreditParty()
    {
        return isset($this->credit_party);
    }

    public function clearCreditParty()
    {
        unset($this->credit_party);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentCounterParty credit_party = 5;</code>
     * @param \Com\Elarian\Hera\Proto\PaymentCounterParty $var
     * @return $this
     */
    public function setCreditParty($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\PaymentCounterParty::class);
        $this->credit_party = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 6;</code>
     * @return \Com\Elarian\Hera\Proto\Cash
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : null;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.Cash value = 6;</code>
     * @param \Com\Elarian\Hera\Proto\Cash $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\Cash::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatus status = 7;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PaymentStatus status = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Com\Elarian\Hera\Proto\PaymentStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return isset($this->created_at) ? $this->created_at : null;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 9;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdatedAt()
    {
        return isset($this->updated_at) ? $this->updated_at : null;
    }

    public function hasUpdatedAt()
    {
        return isset($this->updated_at);
    }

    public function clearUpdatedAt()
    {
        unset($this->updated_at);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue provider_transaction_id = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getProviderTransactionId()
    {
        return isset($this->provider_transaction_id) ? $this->provider_transaction_id : null;
    }

    public function hasProviderTransactionId()
    {
        return isset($this->provider_transaction_id);
    }

    public function clearProviderTransactionId()
    {
        unset($this->provider_transaction_id);
    }

    /**
     * Returns the unboxed value from <code>getProviderTransactionId()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue provider_transaction_id = 10;</code>
     * @return string|null
     */
    public function getProviderTransactionIdUnwrapped()
    {
        return $this->readWrapperValue("provider_transaction_id");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue provider_transaction_id = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setProviderTransactionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->provider_transaction_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue provider_transaction_id = 10;</code>
     * @param string|null $var
     * @return $this
     */
    public function setProviderTransactionIdUnwrapped($var)
    {
        $this->writeWrapperValue("provider_transaction_id", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue narration = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getNarration()
    {
        return isset($this->narration) ? $this->narration : null;
    }

    public function hasNarration()
    {
        return isset($this->narration);
    }

    public function clearNarration()
    {
        unset($this->narration);
    }

    /**
     * Returns the unboxed value from <code>getNarration()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue narration = 11;</code>
     * @return string|null
     */
    public function getNarrationUnwrapped()
    {
        return $this->readWrapperValue("narration");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue narration = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setNarration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->narration = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue narration = 11;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNarrationUnwrapped($var)
    {
        $this->writeWrapperValue("narration", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 12;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * Generated from protobuf field <code>.google.protobuf.StringValue description = 12;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 12;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Generated from protobuf field <code>.google.protobuf.StringValue description = 12;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

}

