<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/Item/FoodAttributes.php');

namespace POGOProtos\Settings\Master\Item {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Settings.Master.Item.FoodAttributes
  final class FoodAttributes extends ProtobufMessage {

    private $_unknown;
    private $itemEffect = array(); // repeated .POGOProtos.Enums.ItemEffect item_effect = 1
    private $itemEffectPercent = array(); // repeated float item_effect_percent = 2
    private $growthPercent = 0; // optional float growth_percent = 3

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // repeated .POGOProtos.Enums.ItemEffect item_effect = 1
            if($wire !== 2 && $wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 0 got: $wire");
            }
            if ($wire === 0) {
              $tmp = Protobuf::read_varint($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
              $this->itemEffect[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_varint($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
                $this->itemEffect[] = $tmp;
              }
            }

            break;
          case 2: // repeated float item_effect_percent = 2
            if($wire !== 2 && $wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 or 5 got: $wire");
            }
            if ($wire === 5) {
              $tmp = Protobuf::read_float($fp, $limit);
              if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
              $this->itemEffectPercent[] = $tmp;
            } elseif ($wire === 2) {
              $len = Protobuf::read_varint($fp, $limit);
              while ($len > 0) {
                $tmp = Protobuf::read_float($fp, $len);
                if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
                $this->itemEffectPercent[] = $tmp;
              }
            }

            break;
          case 3: // optional float growth_percent = 3
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->growthPercent = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      foreach($this->itemEffect as $v) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $v);
      }
      foreach($this->itemEffectPercent as $v) {
        fwrite($fp, "\x15", 1);
        Protobuf::write_float($fp, $v);
      }
      if ($this->growthPercent !== 0) {
        fwrite($fp, "\x1d", 1);
        Protobuf::write_float($fp, $this->growthPercent);
      }
    }

    public function size() {
      $size = 0;
      foreach($this->itemEffect as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      foreach($this->itemEffectPercent as $v) {
        $l = strlen($v);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->growthPercent !== 0) {
        $size += 5;
      }
      return $size;
    }

    public function clearItemEffect() { $this->itemEffect = array(); }
    public function getItemEffectCount() { return count($this->itemEffect); }
    public function getItemEffect($index) { return $this->itemEffect[$index]; }
    public function getItemEffectArray() { return $this->itemEffect; }
    public function setItemEffect($index, array $value) {$this->itemEffect[$index] = $value; }
    public function addItemEffect(array $value) { $this->itemEffect[] = $value; }
    public function addAllItemEffect(array $values) { foreach($values as $value) {$this->itemEffect[] = $value; }}

    public function clearItemEffectPercent() { $this->itemEffectPercent = array(); }
    public function getItemEffectPercentCount() { return count($this->itemEffectPercent); }
    public function getItemEffectPercent($index) { return $this->itemEffectPercent[$index]; }
    public function getItemEffectPercentArray() { return $this->itemEffectPercent; }
    public function setItemEffectPercent($index, array $value) {$this->itemEffectPercent[$index] = $value; }
    public function addItemEffectPercent(array $value) { $this->itemEffectPercent[] = $value; }
    public function addAllItemEffectPercent(array $values) { foreach($values as $value) {$this->itemEffectPercent[] = $value; }}

    public function clearGrowthPercent() { $this->growthPercent = 0; }
    public function getGrowthPercent() { return $this->growthPercent;}
    public function setGrowthPercent($value) { $this->growthPercent = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('item_effect', $this->itemEffect, ItemEffect::ITEM_EFFECT_NONE)
           . Protobuf::toString('item_effect_percent', $this->itemEffectPercent, 0)
           . Protobuf::toString('growth_percent', $this->growthPercent, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Item.FoodAttributes)
  }

}