<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messaging_model.proto

namespace Com\Elarian\Hera\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.elarian.hera.proto.OutboundMessageReplyPrompt</code>
 */
class OutboundMessageReplyPrompt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PromptMessageReplyAction action = 1;</code>
     */
    protected $action = 0;
    /**
     * Generated from protobuf field <code>repeated .com.elarian.hera.proto.PromptMessageMenuItemBody menu = 2;</code>
     */
    private $menu;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action
     *     @type \Com\Elarian\Hera\Proto\PromptMessageMenuItemBody[]|\Google\Protobuf\Internal\RepeatedField $menu
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MessagingModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PromptMessageReplyAction action = 1;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.com.elarian.hera.proto.PromptMessageReplyAction action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Com\Elarian\Hera\Proto\PromptMessageReplyAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .com.elarian.hera.proto.PromptMessageMenuItemBody menu = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Generated from protobuf field <code>repeated .com.elarian.hera.proto.PromptMessageMenuItemBody menu = 2;</code>
     * @param \Com\Elarian\Hera\Proto\PromptMessageMenuItemBody[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMenu($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Com\Elarian\Hera\Proto\PromptMessageMenuItemBody::class);
        $this->menu = $arr;

        return $this;
    }

}

