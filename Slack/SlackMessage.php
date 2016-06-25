<?php
/**
 * @author Igor Pomiluyko <pomiluyko@worksolutions.ru>
 * Date: 25.06.16
 */

namespace Slack;

/**
 * Class SlackMessage
 *
 * @property string text
 * @property string username
 * @property string channel
 * @property string icon_url
 * @property string icon_emoji
 * @property SlackAttachment[] attachments
 * @package Slack
 */
class SlackMessage extends SlackBase {
    
    public function __construct($text) {
        $this->text = $text;
    }

    /**
     * @param string $text
     *
     * @return SlackMessage
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * @param string $url
     * @param string $text
     *
     * @return SlackMessage
     */
    public function addLink($url, $text = '') {
        $this->text .= "<" . implode('|', array_filter([$url, $text])) . ">";

        return $this;
    }

    /**
     * @param string $text
     *
     * @return SlackMessage
     */
    public function addText($text) {
        $this->text .= $text;

        return $this;
    }

    /**
     * @param string $from - slackbot name
     *
     * @return SlackMessage
     */
    public function setFrom($from) {
        $this->username = $from;

        return $this;
    }

    /**
     * @param string $to - #channel or @person
     *
     * @return SlackMessage
     */
    public function setTo($to) {
        $this->channel = $to;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return SlackMessage
     */
    public function setIconByUrl($url) {
        $this->icon_url = $url;

        return $this;
    }

    /**
     * @param string $emoji - e.g. :ghost:
     *
     * @return SlackMessage
     */
    public function setIconByEmoji($emoji) {
        $this->icon_emoji = $emoji;

        return $this;
    }

    /**
     * @param SlackAttachment $attachment
     *
     * @return SlackMessage
     */
    public function addAttachment(SlackAttachment $attachment) {
        $this->attachments[] = $attachment;

        return $this;
    }
}