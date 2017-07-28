<?php

namespace AppBundle\Services;

class Bambilici {

    const userWinMessages = [
        'I should practice more'
    ];
    const userLoseMessages = [
        'In your face!'
    ];

    public function play($input, $picked) {
        $response = 'I pick '.$picked.', ';

        if($input > $picked) {
            $response .= 'so you win. ' . $this->winMessage();
        } else {
            $response .= 'so I win. ' . $this->loseMessage();
        }

        return [
            'speech' => $response,
            'displayText' => $response
        ];
    }

    protected function winMessage() {
        return self::userWinMessages[array_rand(self::userWinMessages)];
    }

    protected function loseMessage() {
        return self::userLoseMessages[array_rand(self::userLoseMessages)];
    }
}
