<?php
/**
 * @author Igor Pomiluyko <pomiluyko@worksolutions.ru>
 * Date: 25.06.16
 */

namespace Slack;

/**
 * @property string title
 * @property string value
 * @property boolean short
 */
class SlackField extends SlackBase {
    
    public function __construct($title, $text, $short = true) {
        $this->value = $text;
        $this->title = $title;
        $this->short = $short;
    }

    /**
     * @param string $title
     *
     * @return SlackField
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return SlackField
     */
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * @param boolean $short
     *
     * @return SlackField
     */
    public function setShort($short) {
        $this->short = $short;

        return $this;
    }
}