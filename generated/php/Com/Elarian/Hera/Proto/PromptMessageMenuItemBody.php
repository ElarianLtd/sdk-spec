<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messaging_model.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.PromptMessageMenuItemBody</code>
 */
class PromptMessageMenuItemBody extends \Google\Protobuf\Internal\Message
{
    protected $entry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *     @type \Com\Elarian\Hera\Proto\MediaMessageBody $media
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MessagingModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string text = 2;</code>
     * @return string
     */
    public function getText()
    {
        return $this->readOneof(2);
    }

    public function hasText()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MediaMessageBody media = 3;</code>
     * @return \Com\Elarian\Hera\Proto\MediaMessageBody
     */
    public function getMedia()
    {
        return $this->readOneof(3);
    }

    public function hasMedia()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.MediaMessageBody media = 3;</code>
     * @param \Com\Elarian\Hera\Proto\MediaMessageBody $var
     * @return $this
     */
    public function setMedia($var)
    {
        GPBUtil::checkMessage($var, \Com\Elarian\Hera\Proto\MediaMessageBody::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEntry()
    {
        return $this->whichOneof("entry");
    }

}

