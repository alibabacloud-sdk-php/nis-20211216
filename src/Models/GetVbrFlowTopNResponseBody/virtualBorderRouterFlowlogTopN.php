<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNResponseBody;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterFlowlogTopN extends Model
{
    /**
     * @description The account ID.
     *
     * @example 156237031628****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The CEN connection ID.
     *
     * @example tr-attach-u6v1j3jre0fe9h****
     *
     * @var string
     */
    public $attachmentId;

    /**
     * @description The total volume of traffic in the specified time range.
     *
     * @example 108
     *
     * @var float
     */
    public $bytes;

    /**
     * @description The local IP address.
     *
     * @example 120.24.X.X
     *
     * @var string
     */
    public $cloudIp;

    /**
     * @description The local port.
     *
     * @example 80
     *
     * @var string
     */
    public $cloudPort;

    /**
     * @description The local region where the local IP address resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $cloudRegion;

    /**
     * @description The remote IP address.
     *
     * @example 222.85.X.X
     *
     * @var string
     */
    public $otherIp;

    /**
     * @description The remote port.
     *
     * @example 10965
     *
     * @var string
     */
    public $otherPort;

    /**
     * @description The total number of packets in the specified time range.
     *
     * @example 66
     *
     * @var float
     */
    public $packets;

    /**
     * @description The protocol number.
     *
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the VBR that is associated with the Express Connect circuit.
     *
     * @example vbr-k1atj46citwuek42j****
     *
     * @var string
     */
    public $virtualBorderRouterId;
    protected $_name = [
        'accountId'             => 'AccountId',
        'attachmentId'          => 'AttachmentId',
        'bytes'                 => 'Bytes',
        'cloudIp'               => 'CloudIp',
        'cloudPort'             => 'CloudPort',
        'cloudRegion'           => 'CloudRegion',
        'otherIp'               => 'OtherIp',
        'otherPort'             => 'OtherPort',
        'packets'               => 'Packets',
        'protocol'              => 'Protocol',
        'virtualBorderRouterId' => 'VirtualBorderRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }
        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }
        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }
        if (null !== $this->cloudPort) {
            $res['CloudPort'] = $this->cloudPort;
        }
        if (null !== $this->cloudRegion) {
            $res['CloudRegion'] = $this->cloudRegion;
        }
        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }
        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }
        if (null !== $this->packets) {
            $res['Packets'] = $this->packets;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->virtualBorderRouterId) {
            $res['VirtualBorderRouterId'] = $this->virtualBorderRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterFlowlogTopN
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }
        if (isset($map['Bytes'])) {
            $model->bytes = $map['Bytes'];
        }
        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }
        if (isset($map['CloudPort'])) {
            $model->cloudPort = $map['CloudPort'];
        }
        if (isset($map['CloudRegion'])) {
            $model->cloudRegion = $map['CloudRegion'];
        }
        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }
        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }
        if (isset($map['Packets'])) {
            $model->packets = $map['Packets'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['VirtualBorderRouterId'])) {
            $model->virtualBorderRouterId = $map['VirtualBorderRouterId'];
        }

        return $model;
    }
}
