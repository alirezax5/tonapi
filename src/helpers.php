<?php
if (!function_exists('getTransactions')) {
    function getTransactions($address,$limit = 50)
    {
        $transactions = [];
        $typeMap = ['JettonTransfer' => 'jetton', 'TonTransfer' => 'ton', 'NftItemTransfer' => 'nft'];

        $accountEvents = \alirezax5\Tonapi\Tonapi::getAccountEvents($address,$limit);
        foreach ($accountEvents->events as $event) {
            $hash = $event->event_id;
            $action = $event->actions[0];
            $type = $typeMap[$action->type] ?? null;
            $status = $action->status;
            $amount = isset($action->{$action->type}->amount) ? convertSatoshiToNumber($action->{$action->type}->amount) : null;
            $comment = $action->{$action->type}->comment ?? null;
            $senderAddress = $action->{$action->type}->sender->address ?? null;
            $recipientAddress = $action->{$action->type}->recipient->address;

            $itemJetton = null;
            if ($action->type === 'JettonTransfer') {
                $jettonData = $action->{$action->type}->jetton;
                $itemJetton = ['name' => $jettonData->name, 'symbol' => $jettonData->symbol, 'address' => $jettonData->address];
            }

            $transactions[] = [
                'hash' => $hash,
                'status' => $status,
                'type' => $type,
                'sender' => $senderAddress,
                'recipient' => $recipientAddress,
                'amount' => $amount,
                'comment' => $comment,
                'item' => $itemJetton,
            ];
        }

        return $transactions;
    }
}
if (!function_exists('convertSatoshiToNumber')) {
    function convertSatoshiToNumber($amount)
    {
        return $amount / 1000000000;
    }
}