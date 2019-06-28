<?php

namespace Nemutaisama\TelegramBot\Entity;

use Nemutaisama\TelegramBot\Object\Type\Message;
class Update
{
    /**
     * The update‘s unique identifier.
     * Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or
     * to restore the correct update sequence, should they get out of order.
     *
     * @var integer
     */
    protected $updateId;

    /**
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     *
     * @var Message
     */
    protected $message;

    /**
     * Optional. New version of a message that is known to the bot and was edited
     *
     * @var Message
     */
    protected $editedMessage;

    /**
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     *
     * @var Message
     */
    protected $channelPost;

    /**
     * Optional. New version of a channel post that is known to the bot and was edited
     *
     * @var Message
     */
    protected $editedChannelPost;

    /**
     * Optional. New incoming inline query
     *
     * @var \TelegramBot\Api\Types\Inline\InlineQuery
     */
    protected $inlineQuery;

    /**
     * Optional. The result of a inline query that was chosen by a user and sent to their chat partner
     *
     * @var \TelegramBot\Api\Types\Inline\ChosenInlineResult
     */
    protected $chosenInlineResult;

    /**
     * Optional. New incoming callback query
     *
     * @var \TelegramBot\Api\Types\CallbackQuery
     */
    protected $callbackQuery;

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price
     *
     * @var ShippingQuery
     */
    protected $shippingQuery;

    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     *
     * @var PreCheckoutQuery
     */
    protected $preCheckoutQuery;
}