<?php
/**
 * @author Igor Pomiluyko <pomiluyko@worksolutions.ru>
 * Date: 25.06.16
 */

namespace Slack;

/**
 * @property string text
 * @property string fallback
 * @property string color
 * @property string pretext
 * @property string author_name
 * @property string author_link
 * @property string author_icon
 * @property string title
 * @property string title_link
 * @property string image_url
 * @property string thumb_url
 * @property string footer
 * @property string footer_icon
 * @property integer ts
 * @property SlackField[] fields
 */
class SlackAttachment extends SlackBase {
    
    public function __construct($text) {
        $this->text = $text;
    }

    /**
     * @param string $text
     *
     * @return SlackAttachment
     */
    public function setText($text) {
        $this->text = $text;

        return $this;
    }

    /**
     * @param string $fallback
     *
     * @return SlackAttachment
     */
    public function setFallback($fallback) {
        $this->fallback = $fallback;

        return $this;
    }

    /**
     * @param string $color - hex code, e.g. #00ff77
     *
     * @return SlackAttachment
     */
    public function setColor($color) {
        $this->color = $color;

        return $this;
    }

    /**
     * @param string $author_name
     *
     * @return SlackAttachment
     */
    public function setAuthorName($author_name) {
        $this->author_name = $author_name;

        return $this;
    }

    /**
     * @param string $author_link
     *
     * @return SlackAttachment
     */
    public function setAuthorLink($author_link) {
        $this->author_link = $author_link;

        return $this;
    }

    /**
     * @param string $authorIconUrl
     *
     * @return SlackAttachment
     */
    public function setAuthorIconByUrl($authorIconUrl) {
        $this->author_icon = $authorIconUrl;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return SlackAttachment
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $title_link
     *
     * @return SlackAttachment
     */
    public function setTitleLink($title_link) {
        $this->title_link = $title_link;

        return $this;
    }

    /**
     * @param string $image_url
     *
     * @return SlackAttachment
     */
    public function setImageUrl($image_url) {
        $this->image_url = $image_url;

        return $this;
    }

    /**
     * @param string $thumb_url
     *
     * @return SlackAttachment
     */
    public function setThumbUrl($thumb_url) {
        $this->thumb_url = $thumb_url;

        return $this;
    }

    /**
     * @param string $footer
     *
     * @return SlackAttachment
     */
    public function setFooter($footer) {
        $this->footer = $footer;

        return $this;
    }

    /**
     * @param string $footerIconUrl
     *
     * @return SlackAttachment
     */
    public function setFooterIconByUrl($footerIconUrl) {
        $this->footer_icon = $footerIconUrl;

        return $this;
    }

    /**
     * @param int $ts
     *
     * @return SlackAttachment
     */
    public function setTimestamp($ts) {
        $this->ts = $ts;

        return $this;
    }

    /**
     * @param SlackField $field
     *
     * @return SlackAttachment
     */
    public function addField($field) {
        $this->fields[] = $field;

        return $this;
    }
}