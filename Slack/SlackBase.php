<?php
/**
 * @author Igor Pomiluyko <pomiluyko@worksolutions.ru>
 * Date: 25.06.16
 */

namespace Slack;

use JsonSerializable;

class SlackBase implements JsonSerializable{
    /** @var  array */
    protected $data;

    public function __set($property, $value) {
        $this->data[$property] = $value;
    }

    public function &__get($property) {
        return $this->data[$property];
    }
    
    public function getData() {
        return $this->data;
    }
    
    public function toJSON() {
        return json_encode($this);
    }
    
    public function __toString() {
        return json_encode($this);
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link  http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *        which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize() {
        return $this->data;
    }
}