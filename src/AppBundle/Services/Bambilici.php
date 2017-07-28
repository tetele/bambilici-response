<?php

namespace AppBundle\Services;

class Bambilici {

    const userWinMessages = [
        'Frankly, my dear, I don\'t give a damn. ',
        'I\'ll be back.',
        'Well, nobody\'s perfect.',
        'I will look for you, I will find you and i will beat you.',
        'After all, tomorrow is another day.',
        'Leave the number. Take the cannoli.',
        'Houston, we have a problem.',
        'Fasten your seatbelts. It\'s going to be a bumpy night.',
        'Valar morghulis!',
        'The force is strong with this one.',
        'This is obscene!',
        'You had me at hello.',
        'Whenever there is any doubt, there is no doubt.',
        'I ain\'t got time to bleed.',
        'The greatest trick the Devil ever pulled was convincing the world he didn\'t exist.',
        'Are you not entertained?',
        'I\'m not locked in here with you. You\'re locked in here with me!',
        'Yeah, well, you know, that\'s just like, your opinion, man. ',
        'Anything can be great. I don\'t care, bricklaying can be great, if a guy knows — if he knows what he\'s doing and why, and he can make it come off.',
        'You talking to me? You talking to me? Then who the hell else are you talking to — you talking to me? Well, I\'m the only one here.',
        'They may take our lives, but they\'ll never take our freedom!',
        'I pity the fool. And I will destroy any man who tries to take what I got.',
        'I know kung fu.',
        'Go ahead, make my day.',
        'If you let my daughter go now, that\'ll be the end of it. I will not look for you, I will not pursue you. But if you don\'t, I will look for you, I will find you, and I will kill you. ',
        'My name is Maximus Decimus Meridius, commander of the Armies of the North, General of the Felix Legions and loyal servant to the true emperor, Marcus Aurelius. Father to a murdered son, husband to a murdered wife. And I will have my vengeance, in this life or the next.',
        'Nobody\'s perfect. ',
        'Wax on, wax off.',
        'I mean, funny like I\'m a clown? I amuse you?',
        'Help me, Obi-Wan Kenobi. You\'re my only hope.',
        'After all, tomorrow is another day!',
        'What we\'ve got here is a failure to communicate.',
        'Keep your friends close, but your enemies closer.',
        'I\'m as mad as hell, and I\'m not going to take this anymore!',
        'You don\'t understand! I could\'ve had class. I could\'ve been a contender. I could\'ve been somebody, instead of a bum, which is what I am.',
        'You can\'t handle the truth!',
        'I\'ll have what she\'s having.',
        'I\'m going to make him an offer he can\'t refuse.',
        'May the Force be with you.',
    ];
    const userLoseMessages = [
        'Elementary, my dear Watson.',
        'Hasta la vista, baby.',
        'Nobody puts Baby in a corner.',
        'I\'m the king of the world!',
        'You ain`t heard nothin` yet!',
        'Good morning, 2Performant! (Good morning, Vietnam!)',
        'It`s alive! It`s alive!',
        'Show me the money!',
        'I have a dream, to beat you!',
        'My precious!',
        'This is SPARTAA!',
        'Here\'s Johnny!',
        'You\'ve got to ask yourself one question: \'Do I feel lucky?\' Well, do ya punk? ',
        'Why? Because it feels so goddamn good!',
        'You\'re a disease. And I\'m the cure.',
        'You\'re exactly as big as I let you be.',
        'Never apologize, mister, it\'s a sign of weakness.',
        'Say hello to my little friend!',
        'You\'re so ugly, you could be a modern art masterpiece.',
        'You see, in this world, there\'s two kinds of people, my friend — those with loaded guns, and those who dig. You dig.',
        'Bitches leave.',
        'Dying ain\'t much of a living, boy.',
        'Well, hello Mr. Fancypants. I got news for you, pal — you ain\'t leadin\' but two things right now: Jack and shit. And Jack left town.',
        'You have no brain. No judgment calls are necessary. What you think means nothing. What you feel means nothing. You are here for me.',
        'You can\'t handle the truth!',
        'Yippee ki yay, motherfucker.',
        'The job\'s done. The bitch is dead.',
        'Wake up — time to die. ',
        'I love the smell of napalm in the morning. ',
        'Let\'s put a smile on that face. ',
        'It\'s alive! It\'s alive!',
        'I\'m having an old friend for dinner.',
        'Mama says, \'Stupid is as stupid does.\'',
        'Shaken, not stirred. ',
        'Carpe diem. Seize the day, boys.',
        'Mrs. Robinson, you\'re trying to seduce me, aren\'t you?',
        'Bond. James Bond.',
        'This is the beginning of a beautiful friendship.',
        'I am your father.',
        'Toto, I\'ve a feeling we\'re not in Kansas anymore.',
        'Why so serious?',
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
