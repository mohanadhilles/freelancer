<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oslogin/v1beta/oslogin.proto

namespace GPBMetadata\Google\Cloud\Oslogin\V1Beta;

class Oslogin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Oslogin\Common\Common::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd110a29676f6f676c652f636c6f75642f6f736c6f67696e2f76316265" .
            "74612f6f736c6f67696e2e70726f746f121b676f6f676c652e636c6f7564" .
            "2e6f736c6f67696e2e7631626574611a28676f6f676c652f636c6f75642f" .
            "6f736c6f67696e2f636f6d6d6f6e2f636f6d6d6f6e2e70726f746f1a1b67" .
            "6f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f" .
            "6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f" .
            "22aa020a0c4c6f67696e50726f66696c65120c0a046e616d651801200128" .
            "0912410a0e706f7369785f6163636f756e747318022003280b32292e676f" .
            "6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e506f7369" .
            "784163636f756e7412550a0f7373685f7075626c69635f6b657973180320" .
            "03280b323c2e676f6f676c652e636c6f75642e6f736c6f67696e2e763162" .
            "6574612e4c6f67696e50726f66696c652e5373685075626c69634b657973" .
            "456e74727912110a0973757370656e6465641804200128081a5f0a125373" .
            "685075626c69634b657973456e747279120b0a036b657918012001280912" .
            "380a0576616c756518022001280b32292e676f6f676c652e636c6f75642e" .
            "6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b65793a0238" .
            "0122290a1944656c657465506f7369784163636f756e7452657175657374" .
            "120c0a046e616d6518012001280922290a1944656c657465537368507562" .
            "6c69634b657952657175657374120c0a046e616d6518012001280922260a" .
            "164765744c6f67696e50726f66696c6552657175657374120c0a046e616d" .
            "6518012001280922260a164765745373685075626c69634b657952657175" .
            "657374120c0a046e616d651801200128092282010a19496d706f72745373" .
            "685075626c69634b657952657175657374120e0a06706172656e74180120" .
            "01280912410a0e7373685f7075626c69635f6b657918022001280b32292e" .
            "676f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e5373" .
            "685075626c69634b657912120a0a70726f6a6563745f6964180320012809" .
            "225e0a1a496d706f72745373685075626c69634b6579526573706f6e7365" .
            "12400a0d6c6f67696e5f70726f66696c6518012001280b32292e676f6f67" .
            "6c652e636c6f75642e6f736c6f67696e2e7631626574612e4c6f67696e50" .
            "726f66696c65229d010a195570646174655373685075626c69634b657952" .
            "657175657374120c0a046e616d6518012001280912410a0e7373685f7075" .
            "626c69635f6b657918022001280b32292e676f6f676c652e636c6f75642e" .
            "6f736c6f67696e2e636f6d6d6f6e2e5373685075626c69634b6579122f0a" .
            "0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e4669656c644d61736b3285080a0e4f734c6f67696e5365" .
            "7276696365128f010a1244656c657465506f7369784163636f756e741236" .
            "2e676f6f676c652e636c6f75642e6f736c6f67696e2e7631626574612e44" .
            "656c657465506f7369784163636f756e74526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479222982d3e49302232a212f76" .
            "31626574612f7b6e616d653d75736572732f2a2f70726f6a656374732f2a" .
            "7d1294010a1244656c6574655373685075626c69634b657912362e676f6f" .
            "676c652e636c6f75642e6f736c6f67696e2e7631626574612e44656c6574" .
            "655373685075626c69634b6579526571756573741a162e676f6f676c652e" .
            "70726f746f6275662e456d707479222e82d3e49302282a262f7631626574" .
            "612f7b6e616d653d75736572732f2a2f7373685075626c69634b6579732f" .
            "2a7d129e010a0f4765744c6f67696e50726f66696c6512332e676f6f676c" .
            "652e636c6f75642e6f736c6f67696e2e7631626574612e4765744c6f6769" .
            "6e50726f66696c65526571756573741a292e676f6f676c652e636c6f7564" .
            "2e6f736c6f67696e2e7631626574612e4c6f67696e50726f66696c65222b" .
            "82d3e493022512232f7631626574612f7b6e616d653d75736572732f2a7d" .
            "2f6c6f67696e50726f66696c6512a1010a0f4765745373685075626c6963" .
            "4b657912332e676f6f676c652e636c6f75642e6f736c6f67696e2e763162" .
            "6574612e4765745373685075626c69634b6579526571756573741a292e67" .
            "6f6f676c652e636c6f75642e6f736c6f67696e2e636f6d6d6f6e2e537368" .
            "5075626c69634b6579222e82d3e493022812262f7631626574612f7b6e61" .
            "6d653d75736572732f2a2f7373685075626c69634b6579732f2a7d12ca01" .
            "0a12496d706f72745373685075626c69634b657912362e676f6f676c652e" .
            "636c6f75642e6f736c6f67696e2e7631626574612e496d706f7274537368" .
            "5075626c69634b6579526571756573741a372e676f6f676c652e636c6f75" .
            "642e6f736c6f67696e2e7631626574612e496d706f72745373685075626c" .
            "69634b6579526573706f6e7365224382d3e493023d222b2f763162657461" .
            "2f7b706172656e743d75736572732f2a7d3a696d706f7274537368507562" .
            "6c69634b65793a0e7373685f7075626c69635f6b657912b7010a12557064" .
            "6174655373685075626c69634b657912362e676f6f676c652e636c6f7564" .
            "2e6f736c6f67696e2e7631626574612e5570646174655373685075626c69" .
            "634b6579526571756573741a292e676f6f676c652e636c6f75642e6f736c" .
            "6f67696e2e636f6d6d6f6e2e5373685075626c69634b6579223e82d3e493" .
            "023832262f7631626574612f7b6e616d653d75736572732f2a2f73736850" .
            "75626c69634b6579732f2a7d3a0e7373685f7075626c69635f6b657942b1" .
            "010a1f636f6d2e676f6f676c652e636c6f75642e6f736c6f67696e2e7631" .
            "62657461420c4f734c6f67696e50726f746f50015a42676f6f676c652e67" .
            "6f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f" .
            "636c6f75642f6f736c6f67696e2f7631626574613b6f736c6f67696eaa02" .
            "1b476f6f676c652e436c6f75642e4f734c6f67696e2e563142657461ca02" .
            "1b476f6f676c655c436c6f75645c4f734c6f67696e5c5631626574616206" .
            "70726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
