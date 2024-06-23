<?php

namespace Observer;

class ObserverManager {

    /** @var ObserverInterface[] $observers */
    private array $observers;

    public function adicionarObserver(ObserverInterface $observer) {
        $this->observers[] = $observer;
    }

    public function removerObserver(ObserverInterface $observer) {
        $index = array_search($observer, $this->observers);

        if ($index) {
            unset($this->observers[$index]);
        }
    }

    public function notificar() {
        foreach ($this->observers as $observer) {
            $observer->atualizar();
        }
    }

}